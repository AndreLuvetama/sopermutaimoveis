<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias extends CI_Controller {



	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model("M_Noticias", "noticias");
	}

	
	public function index()
	{
		redirect("noticias/listar", "refresh");
  
	}
	public function listar(){

		//verifica_login(); somente usuário logado consegue cadastrar as noticitias
		$dados['titulo'] = 'Só Permutaimovel- Lista Notícias';
		$dados['h2']= 'Listagem de noticias';
		$dados['noticias'] = $this->noticias->get();
		$dados['tela'] = 'listar';
		$this->load->view('v_noticias', $dados);
	}
	public function cadastrar(){
		$this->form_validation->set_rules('titulo', 'TITULO', 'trim|required');
		$this->form_validation->set_rules('conteudo', 'CONTEUDO', 'trim|required');
		if($this->form_validation->run()== FALSE):
			if(validation_errors()):
				set_msg(validation_errors());
			endif;
			else:
				$this->load->library('upload', config_upload());
				if($this->upload->do_upload('imagem')):
					//upload foi efetuado
					$dados_upload= $this->upload->data();
					$dados_form = $this->input->post();
					$dados_insert['titulo'] = to_bd($dados_form['titulo']);
					$dados_insert['conteudo'] = to_bd($dados_form['conteudo']);
					$dados_insert['imagem'] = $dados_upload['file_name'];
					// salvar no bd
					if($id = $this->noticias->salvar($dados_insert)):
						set_msg('<p>Noticias cadastrada com sucesso!</p>');
						redirect('noticias/editar/' .$id, 'refresh');
					else:
						set_msg('<p>Erro! Noticias não cadastrada!</p>');
					endif;
				else:
					$msg = $this->upload->display_errors();
					$msg .= '<p> São permitidos arquivos JPG e PNG até 512kb</p>';
					set_msg($msg);
				endif;
			endif;

		//verifica_login(); somente usuário logado consegue cadastrar as noticitias
		$dados['titulo'] = 'Só Permutaimovel- cadastrar Notícias';
		$dados['h2']= 'Cadastro de Notícias';
		$dados['tela'] = 'cadastrar';
		$this->load->view('v_noticias', $dados);
	}


	public function excluir(){
		// verifica se foi passado o id da noticia
		$id = $this->uri->segment(3);
		if($id > 0):
			if($noticia= $this->noticias->get_single($id)):
				$dados['noticia'] = $noticia;
			else:
				set_msg('<p>Noticia inexistente, escolha uma noticia para excluir</p>');
			    redirect('noticias/listar','refresh');
			endif;
		else:
			set_msg('<p> Você deve escolher uma noticia para excluir</p>');
			redirect('noticias/listar','refresh');
		endif;
      $this->form_validation->set_rules('enviar', 'ENVIAR', 'trim|required');

      if($this->form_validation->run()== FALSE):
			if(validation_errors()):
				set_msg(validation_errors());
			endif;
			else:
				$imagem = 'upload/'.$noticia->imagem;
				if($this->noticias->excluir($id)):
					unlink($imagem); // exclui a imagem
					set_msg('<p>Noticias excluida com sucesso!</p>');
						redirect('noticias/listar', 'refresh');
				 else:
				 	set_msg('Erro, nenhuma mensagem excluida');
				 endif;
			endif;
		//verifica_login(); somente usuário logado consegue cadastrar as noticitias
		$dados['titulo'] = 'Só Permutaimovel- Excluir Noticias';
		$dados['h2']= 'Exclusão de noticias';
		$dados['tela'] = 'excluir';
		$this->load->view('v_noticias', $dados);
	}


	public function editar(){
		// verifica se foi passado o id da noticia
		$id = $this->uri->segment(3);
		if($id > 0):
			if($noticia= $this->noticias->get_single($id)):
				$dados['noticia'] = $noticia;
				$dados_update['id'] = $noticia->id;
			else:
				set_msg('<p>Noticia inexistente, escolha uma noticia para editar</p>');
			    redirect('noticias/listar','refresh');
			endif;
		else:
			set_msg('<p> Você deve escolher uma noticia para excluir</p>');
			redirect('noticias/listar','refresh');
		endif;
      $this->form_validation->set_rules('titulo', 'TITULO', 'trim|required');
		$this->form_validation->set_rules('conteudo', 'CONTEUDO', 'trim|required');

      if($this->form_validation->run()== FALSE):
			if(validation_errors()):
				set_msg(validation_errors());
			endif;
			else:
				$this->load->library('upload', config_upload());
				if(isset($_FILES['imagem']) && $_FILES['imagem']['name'] != ''):
					// foi enviada uma imagem, devo fazer upload
					if($this->upload->do_upload('imagem')):
						//upload foi efetuado
						$imagem_antiga = 'upload/'.$noticia->imagem;
						$dados_upload = $this->upload->data();
						$dados_form= $this->input->post();
						$dados_update['titulo'] = to_bd($dados_form['titulo']);
						$dados_update['conteudo'] = to_bd($dados_form['conteudo']);
						$dados_update['imagem'] = $dados_upload['file_name'];
						if($this->noticias->salvar($dados_update)):
							unlink($imagem_antiga);
						set_msg('<p>Noticias alterada com sucesso!</p>');
						$dados['noticia']->imagem= $dados_update['imagem'];
					else:
						set_msg('Erro, nenhuma alteração foi feita'); 	
				 endif;
				else:
					$msg = $this->upload->display_errors();
					$msg = '<p>São permitidos arquivos JPG e PNG ATÉ 512KB. </p>';
					set_msg($msg);

			endif;
		else:
					$dados_form = $this->input->post();
					$dados_update['titulo'] = to_bd($dados_form['titulo']);
					$dados_update['conteudo'] = to_bd($dados_form['conteudo']);
					if($this->noticias->salvar($dados_update)):
						set_msg('<p>Noticias alterada com sucesso!</p>');
						
					else:
						set_msg('Erro, nenhuma alteração foi feita'); 	
		endif;
	endif;
	endif;
		$dados['titulo'] = 'Só Permutaimovel- Editar Noticias';
		$dados['h2']= 'Edição de noticias';
		$dados['tela'] = 'editar';
		$this->load->view('v_noticias', $dados);
	}





}
