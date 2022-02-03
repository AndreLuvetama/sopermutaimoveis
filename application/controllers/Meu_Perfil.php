<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meu_Perfil extends CI_Controller {

 public function __construct()
        {
             parent::__construct();
             $this->load->library("controle_acesso"); //controla se o user está logado 
             $this->controle_acesso->controlar();
             $this->load->helper('url');
			 $this->load->helper('form');
			 $this->load->library('form_validation');
			 $this->load->model('M_Cadastrar_Imovel', 'mcadastrarimovel');
			 $this->load->model("M_Meu_Perfil", "mmeuperfil");
			  $this->uploadPath = 'upload/';

             
        }
	



	public function index()
	{
		$dados['file_name'] = $this->mcadastrarimovel->getImagesingle()->row();
		$dados['imagem'] = $this->mmeuperfil->get_fotoPerfil()->row();      	
		$dados["tab_usuario"] = $this->mmeuperfil->getCadastro()->row();
		$dados["tab_cad_pessoa"] = $this->mmeuperfil->getCadastro()->row();
		$dados["totalMsg"] = $this->mmeuperfil->totalMsg();
		$dados['titulo'] = 'Editar Perfil1'; 	
        	
		$this->load->view('v_meu_perfil', $dados);
   	}

	
	//Guardar as variasveis
	public function atualizar()
	{
				
		$dados["tab_cad_pessoa"] = $this->mmeuperfil->getCadastro()->row();


		$this->form_validation->set_rules('txt_nome', 'Nome', 'trim|required');
		$this->form_validation->set_rules('txt_cpf', 'CPF', 'trim|required');
		$this->form_validation->set_rules('txt_cep', 'Nome', 'trim|required');
		$this->form_validation->set_rules('txt_rua', 'Rua', 'trim|required');
		$this->form_validation->set_rules('txt_uf', 'uf', 'required');
		$this->form_validation->set_rules('txt_complemento', 'Complemento', 'required');
		$this->form_validation->set_rules('txt_bairro', 'Bairro', 'required');
		$this->form_validation->set_rules('txt_cidade', 'Cidade', 'required');
		$this->form_validation->set_rules('txt_cel', 'Celelular', 'required');
		$this->form_validation->set_rules('txt_email', 'Email', 'Trim|required');
		
		

		if($this->form_validation->run()==false){

            $dados['titulo'] = 'Editar Perfil'; 		
		    $this->load->view('v_meu_perfil', $dados);
        		
		       
        }else{

        	$this->mmeuperfil->atualizar();
    	 	$this->session->set_flashdata('msgAlerta', 'Cadastro atualizado com sucesso');
    	 	redirect('Meu_Perfil', 'refresh');
        }



		
	}

	public function alterarSenha(){
		
	   $dados['file_name'] = $this->mcadastrarimovel->getImagesingle()->row();
		$dados['imagem'] = $this->mmeuperfil->get_fotoPerfil()->row();    
		$dados["tab_usuario"] = $this->mmeuperfil->getCadastro()->row();
		$dados["tab_cad_pessoa"] = $this->mmeuperfil->getCadastro()->row();
		$dados['tab_foto_perfil'] = $this->mmeuperfil->get_fotoPerfil()->row();

		$this->form_validation->set_rules('txt_usuarioSenha', 'Senha', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('txt_usuarioSenha2', 'Confirmação de senha', 'trim|required|matches[txt_usuarioSenha]');
		if($this->form_validation->run()==false)
		{
				$dados['titulo'] = 'Editar Perfil'; 		
				$this->load->view('v_meu_perfil', $dados);

		}else{
			$this->mmeuperfil->alterarSenha();
				$this->session->set_flashdata('msgAlerta', 'Senha/usuario atualizada com sucesso');
    	 	redirect('Meu_Perfil', 'refresh');

		}
		

	}
		public function enviarMensagem(){
		if($this->mmeuperfil->enviarMensagem()){ 
			 	echo "<div class='alert alert-info' role='alert'>
  					Mensagem enviada com sucesso!
					</div>";
		}else{
			echo "<div class='alert alert-info' role='alert'>
  					Mensagem não enviada, tentar mais tarde
					</div>";
		}			
				
		}


public function uploadfoto(){
   if($this->form_validation->run()== false):
				$this->load->library('upload', config_upload());
				if(validation_errors()){
					set_msg(validation_errors());
				}
				 $txt_imagem_id  = isset($tab_foto_perfil->imagem_id) ? $tab_foto_perfil->imagem_id: ""; 
				
				if($this->upload->do_upload('imagem')):
					//upload foi efetuado
					$txt_imagem  = isset($tab_foto_perfil->imagem) ? $tab_foto_perfil->imagem: ""; 
					$nome_imagem = $_POST['txt_imagem'];
					$imagem_antiga = 'upload/'.$txt_imagem;
					$dados_upload= $this->upload->data();
					$dados_form = $this->input->post();
					$dados_insert['usuario_id'] =$dados_form['usuario'];
					$dados_insert['imagem'] = $dados_upload['file_name'];
					// salvar no bd
					if(empty($nome_imagem)):// se não existir a imagem, salva
						if($imagem_id= $this->mmeuperfil->salvarfoto($dados_insert)):
							set_msg('<p>Noticias cadastrada com sucesso!</p>');
							$this->session->set_flashdata('msgAlerta', 'Upload realizado com sucesso');
							redirect('Meu_Perfil', 'refresh');
						else:
						  //set_msg('<p>Erro! Noticias não cadastrada!</p>');
							$this->session->set_flashdata('msgAlerta', 'Upload não realizado1');
						endif;
						//se já existe a imagem, altera
					elseif($imagem_id= $this->mmeuperfil->alterarfoto($dados_insert)):
							set_msg('<p>Upload atualizado com sucesso!</p>');
							$this->session->set_flashdata('msgAlerta', 'Upload realizado com sucesso');
							redirect('Meu_Perfil', 'refresh');
						else:
						  //set_msg('<p>Erro! Noticias não cadastrada!</p>');
							$this->session->set_flashdata('msgAlerta', 'Upload não atualizado');
							redirect('Meu_Perfil', 'refresh');
						endif;// fim alteração
					
				else:
					$msg = $this->upload->display_errors();
					
					$this->session->set_flashdata('msgAlerta2', 'Upload não realizado, são permitidos somente arquivos JPG e PNG até 512kb');
					redirect('Meu_Perfil', 'refresh');
					set_msg($msg);
				endif;

					
		endif;
		//verifica_login(); somente usuário logado consegue cadastrar as noticitias
		$dados['titulo'] = 'Editar Perfil'; 		
		$this->load->view('v_meu_perfil', $dados);
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

}



public function fazerUpload()
        {
                

                $this->load->library("upload", config_upload());

                if (!$this->upload->do_upload("inputFile"))
                {
                        echo $this->upload->display_errors("","");

                     $this->session->set_flashdata('msgAlerta', 'Falha no upload da foto');
                }
                else
                {
                        echo json_encode($this->upload->data());
                        $this->session->set_flashdata('msgAlerta', 'Falha no upload da foto');
                        $dados['titulo'] = 'Editar Perfil'; 		
						$this->load->view('v_meu_perfil', $dados);
                }
        }


        	public function buscarFotoPerfil(){
		$foto= $this->mmeuperfil->get_fotoPerfil();
		if($foto>0){
			return $foto;
		}
		else
		{
			echo "Perfil sem foto";
		}
		
	}


//teste tstttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt
	public function fazerUpload2()
        {
        	 $thumb_msg = $status = $status_msg = $thumbnail = $org_image_size = $thumb_image_size = ''; 
        $data = array();
                
	    if($this->input->post('submit')){ 
            if(!empty($_FILES['image']['name'])){ 
                // File upload config 
              
                 
                // Load and initialize upload library 
                $this->load->library('upload', $config_upload); 
                 
                // Upload file to server 
                if($this->upload->do_upload('image')){ 
                    $uploadData = $this->upload->data(); 
                    $uploadedImage = $uploadData['file_name']; 
                    $org_image_size = $uploadData['image_width'].'x'.$uploadData['image_height']; 
                     
                    $source_path = $this->uploadPath.$uploadedImage; 
                    $thumb_path = $this->uploadPath.'thumb/'; 
                    $thumb_width = 280; 
                    $thumb_height = 175; 
                     
                    // Image resize config 
                  
                     
                    // Load and initialize image_lib library 
                    $this->load->library('image_lib', $config_upload); 
                     
                    // Resize image and create thumbnail 
                    if($this->image_lib->resize()){ 
                        $thumbnail = $thumb_path.$uploadedImage; 
                        $thumb_image_size = $thumb_width.'x'.$thumb_height; 
                        $thumb_msg = '<br/>Thumbnail created!'; 
                    }else{ 
                        $thumb_msg = '<br/>'.$this->image_lib->display_errors(); 
                    } 
                     
                    $status = 'success'; 
                    $status_msg = 'Image has been uploaded successfully.'.$thumb_msg; 
                }else{ 
                    $status = 'error'; 
                    $status_msg = 'The image upload has failed!<br/>'.$this->upload->display_errors('',''); 
                } 
            }else{ 
                $status = 'error'; 
                $status_msg = 'Please select a image file to upload.';  
            } 
        } 
         
        // File upload status 
        $data['status'] = $status; 
        $data['status_msg'] = $status_msg; 
        $data['thumbnail'] = $thumbnail; 
        $data['org_image_size'] = $org_image_size; 
        $data['thumb_image_size'] = $thumb_image_size; 
         
        // Load form view and pass upload status 
        $msg = $this->upload->display_errors();
					
					$this->session->set_flashdata('msgAlerta2', 'Upload não realizado, são permitidos somente arquivos JPG e PNG até 512kb');
					redirect('Meu_Perfil', 'refresh');
					set_msg($msg);
    } 

public function CadastrarImovel()
	{
		$this->load->library('email');
		$this->load->library("controle_acesso"); //controla se o user está logado 
        $this->controle_acesso->controlar();
		$this->load->model("M_Cadastrar_Imovel", "cadastrarimovel");
      	
      	$dados['files'] = $this->cadastrarimovel->getRows();
        $dados['tipoimovel'] = $this->cadastrarimovel->getTipoImovel()->result();
        $dados['apelidoimovel'] = $this->cadastrarimovel->getApelidoImovel()->result();
		$dados["tab_usuario"] = $this->mmeuperfil->getCadastro()->row();
		$dados["tab_cad_pessoa"] = $this->mmeuperfil->getCadastro()->row();
		$dados['tab_foto_perfil'] = $this->mmeuperfil->get_fotoPerfil()->row();
		$dados['titulo'] = 'Editar Perfil'; 		
		$this->load->view('v_cadastrar_imovel', $dados);
   	}

  
   



}
/**
public function editar()
	{
		$usuario_id = $this->input->get("$usuario_id");
		$this->load->model("M_Meu_Perfil");
		//$this->load->model("M_cadastro");
		$cadastro= $this->M_cadastro->listaCadastro($usuario_id);
		$dados = array("cadastro" =>$cadastro);

		
		$dados["cadastro"]=$this->M_cadastro->getCadastro($usuario_id)->row();
		$dados["nome_view"] = "v_cadastro";
		$this->load->view('template', $dados);

	}**/


	

	
	
	

