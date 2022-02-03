<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model("M_login", "mlogin");
      	$this->load->model("M_Meu_Perfil", "mmeuperfil");
		$this->load->model("M_Cadastrar_Imovel", "cadastrarimovel");
	}


	
	public function Login()
	{
		

		$this->form_validation->set_rules('txt_nomeUsuario', 'Nome do usuário', 'required');
		$this->form_validation->set_rules('txt_usuarioSenha', 'Senha de usuário', 'required');

		 if($this->form_validation->run() ==false){
			
			}else{
				return $this->logar();

			}
		$dados['titulo'] = 'Acessar a minha página'; 		
		$this->load->view('v_login', $dados);
	}


		public function logar(){
			
            $consulta = $this->mlogin->logar();
			if($consulta){
				//$this->session["usuarioNiveisdeAcessoa"] = $resultado["tipo_usuario_id"];
				$this->session->set_userdata("usuario_id", $consulta->row()->usuario_id);
				$this->session->set_userdata("nomeUsuario", $consulta->row()->nomeUsuario);
				$this->session->set_userdata("tipo_usuario_id", $consulta->row()->tipo_usuario_id);
					if($this->session->userdata("tipo_usuario_id")== 1){
							$this->session->set_userdata("usuario_logado", 1);
				            redirect(base_url("Meu_Perfil"));
			
					}elseif($this->session->userdata("tipo_usuario_id")== 2)
					{
							$this->session->set_userdata("usuario_logado", 1);
				            redirect(base_url("Admin"));
			
					}			

			}else{
				   $this->session->set_userdata("usuario_logado", 0);
				 
			      $this->session->set_flashdata('msgAlerta', 'Senha ou usuário está errado!');
			      $dados['titulo'] = 'Acessar a minha página'; 		
		          $this->load->view('v_login', $dados);
			
			}
		}
		public function logoff(){
			$this->session->unset_userdata("usuario_id");
			$this->session->unset_userdata("nomeUsuario");
			redirect(base_url());

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

	public function admin()
	{
	    $this->load->model("M_Admin", "madmin");
		$this->load->library("controle_acesso"); //controla se o user está logado 
        $this->controle_acesso->controlar(); 
        //$dados['num_row'] = $this->madmin->totalMsg(); 
        //$dados["listarmensagem"]    = $this->madmin->listarMensagem();
        $dados['getTodosUsuarios'] = $this->madmin->getTodosUsuarios();
        $dados['getQtdeUsuario'] = $this->madmin->getQtdeUsuario();
        $dados['getQtdeImoveis'] = $this->madmin->getQtdeImoveis();
		$dados['todosImoveis'] = $this->madmin->todosImoveis();
		$dados['todosCadastros'] = $this->madmin->todosCadastros();
		$dados['ultimosCadastros'] = $this->madmin->ultimosCadastros();
		$dados['ultimosImoveis'] = $this->madmin->ultimosImoveis();
      	$dados['files'] = $this->cadastrarimovel->getImagemImovel();



		$dados['titulo'] = 'Painel do Admin'; 		
		$this->load->view('v_admin', $dados);
   	}



   	/**function gestaoUsuario(){

      		  // Funcionalidade do Pesquisar na tela gestão de usuário
   	if($this->input->post('pesquisarBT')){
            $inputpalavra = $this->input->post('pesquisarUser');
            $pesquisarUser = strip_tags($inputpalavra);
            if(!empty($pesquisarUser)){
                $this->session->set_userdata('pesquisarUser',$pesquisarUser);
            }else{
                $this->session->unset_userdata('pesquisarUser');
            }
        }

        $dados['pesquisarUser'] = $this->session->userdata('pesquisarUser');
        redirect(base_url()Admin?pagina=2);

   	}**/
   



		public function Meu_Perfil()
	{
		$this->load->library("controle_acesso"); //controla se o user está logado 
        $this->controle_acesso->controlar();
        $dados["imoveisdeInteresse"] = $this->cadastrarimovel->getImoveisdeInteresse();

		
      	$dados['files'] = $this->cadastrarimovel->getImagemImovel();
        $dados['tipoimovel'] = $this->cadastrarimovel->getTipoImovel()->result();
        $dados['apelidoimovel'] = $this->cadastrarimovel->getApelidoImovel()->result();
		$dados["tab_usuario"] = $this->mmeuperfil->getCadastro()->row();
		$dados["tab_cad_pessoa"] = $this->mmeuperfil->getCadastro()->row();
		$dados['tab_foto_perfil'] = $this->mmeuperfil->get_fotoPerfil()->row();
		$dados["tab_imagem"] = $this->cadastrarimovel->getImagesingle()->row();
		$dados["tab_imoveis"] = $this->cadastrarimovel->getImovel()->row();
		 $dados['carouselimg'] = $this->cadastrarimovel->carroselImg(); 
		$dados['titulo'] = 'Editar Perfil'; 	
		$dados["totalMsg"] = $this->mmeuperfil->totalMsg();
		$dados["totalMsgEnviada"] = $this->mmeuperfil->totalMsgEnviada();

		$this->load->view('v_meu_perfil', $dados);
   	} 


   	public function editarUsuario1($id){

        $this->load->library("controle_acesso"); //controla se o user está logado 
        $this->controle_acesso->controlar();
          $row = $this->madmin->getUsuario($id);
         $dados['titulo'] = 'Só Permutaimovel-Editar usuario';
         $dados['usuario'] =  $row;

		$dados['titulo'] = 'Editar usuario'; 	

		$this->load->view('admin/v_editarUsuario', $dados);
   	}
	public function editarUsuario(){
        $this->load->library("controle_acesso"); //controla se o user está logado 
        $this->controle_acesso->controlar();
       
      if(($id = $this->uri->segment(2)) > 0){ // pega o segundo seguimento da uri, que é post
			if($edUsuario = $this->madmin->getUsuario($id)){
				$dados['txt_usuario_id'] = $edUsuario->usuario_id;
				$dados['txt_nomeUsuario'] = $edUsuario->nomeUsuario;
				$dados['txt_statusAssinante'] = $edUsuario->statusAssinante;
				$dados['txt_tipo_usuario_id'] = $edUsuario->tipo_usuario_id;
				$dados['txt_nomeCompleto'] = $edUsuario->nome;
				$dados['txt_email'] = $edUsuario->email;
				$dados['txt_enderecoUsuario'] = $edUsuario->rua;
				$dados['txt_numero'] = $edUsuario->numero;
				$dados['txt_cel'] = $edUsuario->cel;
				$dados['txt_tel'] = $edUsuario->tel;
				$dados['txt_bairro'] = $edUsuario->bairro;
				$dados['txt_estado'] = $edUsuario->estado;
			}else{
				$dados['titulo'] = 'Página não encontrada- Só Permuta';
				$dados['not_titulo'] = 'Notícia não encontrada';
				$dados['not_conteudo']= 'Nenhuma noticia encontrada com base nas buscas';
			}
	}else{
			redirect(base_url(), 'refresh');
	}

		$dados['titulo'] = 'Só Permutaimovel-Editar usuario'; 	
		$this->load->view('admin/v_editarUsuario', $dados);
 }





   	public function imovel()
	{
		
		$this->load->library("controle_acesso"); //controla se o user está logado 
        $this->controle_acesso->controlar();
        $dados['num_row'] = $this->mmeuperfil->totalMsg(); 
        // $this->load->model("M_Mapa", "mmapa");

		//$dados['getCollegesBlankLatLng'] = $this->mmapa->getCollegesBlankLatLng();
		//$dados['getAllColleges'] = $this->mmapa->getAllColleges();
        //$dados["getInteresseImovel"] = $this->cadastrarimovel->getInteresseImovel();
        $dados['usuarioImovel'] = $this->cadastrarimovel->getUsuarioImovel()->result();
        $dados['carouselimg'] = $this->cadastrarimovel->carroselImg(); 
        $dados['totalimg'] = $this->cadastrarimovel->totalimg(); 
        $dados["tab_cad_pessoa"] = $this->mmeuperfil->getCadastro()->row();
        $dados["listarmensagem"] = $this->mmeuperfil->listarMensagem();
		$dados["tab_usuario"] = $this->mmeuperfil->getCadastro()->row();
		$dados["imoveisdeInteresse"] = $this->cadastrarimovel->getImoveisdeInteresse();
		$dados["tab_imoveis"] = $this->cadastrarimovel->getImovel()->row();
			 
		if(($id = $this->uri->segment(2)) > 0): // pega o segundo seguimento da uri, que é post
			if($imovel = $this->cadastrarimovel->get_singleImovel($id)):
				$dados['titulo'] = $imovel->nomeImovel.'- Imóvel';
				$dados['not_titulo'] = $imovel->nomeImovel;
				$dados['tipoImovel'] = $imovel->tipoImovel;
				$dados['apelidoImovel'] = $imovel->apelidoImovel;
				$dados['id'] = $imovel->id;
				$dados['usuario_id'] = $imovel->usuario_id;
				$dados['cidadeImovel'] = $imovel->cidadeImovel;
				$dados['descricaoImovel'] = $imovel->descricaoImovel;
				$dados['cepImovel'] = $imovel->cepImovel;
				$dados['bairroImovel'] = $imovel->bairroImovel;
				$dados['ruaImovel'] = $imovel->ruaImovel;
				$dados['numero'] = $imovel->numero;
				$dados['complemento'] = $imovel->complemento;
				$dados['estadoImovel'] = $imovel->estadoImovel;
				$dados['descricaoImovel'] = $imovel->descricaoImovel;
				$dados['cepImovel'] = $imovel->cepImovel;
				$dados['det_tvCabo'] = $imovel->det_tvCabo;
				$dados['det_piscina'] = $imovel->det_piscina;
				$dados['det_wifi'] = $imovel->det_wifi;
				$dados['det_vaga'] = $imovel->det_vaga;
				$dados['det_academia'] = $imovel->det_academia;
				$dados['det_arCondicionado'] = $imovel->det_arCondicionado;
				$dados['det_suite'] = $imovel->det_suite;
				$dados['det_churrasqueira'] = $imovel->det_churrasqueira;
				$dados['tamanho'] = $imovel->tamanho;
				$dados['mensagemImovel'] = $imovel->mensagemImovel;
				$dados['num_suites'] = $imovel->num_suites;
				$dados['num_quartos'] = $imovel->num_quartos;
				$dados['complemento'] = $imovel->complemento;
				$dados['num_vagas'] = $imovel->num_vagas;
				$dados['areaTerrea'] = $imovel->areaTerrea;
				$dados['num_banheiro'] = $imovel->num_banheiro;
				$dados['nome'] = $imovel->nome;
				$dados['email'] = $imovel->email;
				$dados['tel'] = $imovel->tel;
				$dados['cel'] = $imovel->cel;			
				$dados['statusAssinante'] = $imovel->statusAssinante;
				$dados['imovelMobilia'] = $imovel->imovelMobilia;
			    $dados['intTipoImovel'] = $imovel->intTipoImovel;
				$dados['intEstados'] = $imovel->intEstados;			
				$dados['intImvlMobilia'] = $imovel->intImvlMobilia;
				//$dados['file_name'] = $imovel->file_name;

			else:
				$dados['titulo'] = 'Página não encontrada- Só Permuta';
				$dados['not_titulo'] = 'Notícia não encontrada';
				$dados['not_conteudo']= 'Nenhuma noticia encontrada com base nas buscas';
				$dados['not_imagem']= '';
			endif;
		else:
			redirect(base_url(), 'refresh');
		endif;
		$this->load->view('v_imovel', $dados);

	}

	public function cadastrarimovel()
	{
       $this->load->library("controle_acesso"); //controla se o user está logado 
        $this->controle_acesso->controlar();
		$this->load->model("M_Cadastrar_Imovel", "cadastrarimovel");
      	$this->load->model("M_Meu_Perfil", "mmeuperfil");
      	$dados['ImageUser'] = $this->cadastrarimovel->getImageUser();
      	$dados['files'] = $this->cadastrarimovel->getImagemImovel(); 
        $dados["tab_imagem"] = $this->cadastrarimovel->getImagesingle()->row();
        $dados['tipoimovel'] = $this->cadastrarimovel->getTipoImovel()->result();
        $dados['apelidoimovel'] = $this->cadastrarimovel->getApelidoImovel()->result();
		$dados["tab_imoveis"] = $this->cadastrarimovel->getImovel()->row();
		$dados["tab_usuario"] = $this->mmeuperfil->getCadastro()->row();
		$dados["tab_cad_pessoa"] = $this->mmeuperfil->getCadastro()->row();
		$dados['tab_foto_perfil'] = $this->mmeuperfil->get_fotoPerfil()->row();
	    $dados["option_estados"] = $this->cadastrarimovel->selectEstados(); 

		$dados['titulo'] = 'Cadastrar o seu imóvel'; 		
		$this->load->view('v_cadastrar_imovel', $dados);

	}


	public function atualizarimovel()
	{
       $this->load->library("controle_acesso"); //controla se o user está logado 
        $this->controle_acesso->controlar();
		$this->load->model("M_Cadastrar_Imovel", "cadastrarimovel");
      	$this->load->model("M_Meu_Perfil", "mmeuperfil");
      	$dados['ImageUser'] = $this->cadastrarimovel->getImageUser();
      	$dados['files'] = $this->cadastrarimovel->getImagemImovel(); 
        $dados["tab_imagem"] = $this->cadastrarimovel->getImagesingle()->row();
        $dados['tipoimovel'] = $this->cadastrarimovel->getTipoImovel()->result();
        $dados['apelidoimovel'] = $this->cadastrarimovel->getApelidoImovel()->result();
		$dados["tab_imoveis"] = $this->cadastrarimovel->getImovel()->row();
		$dados["tab_usuario"] = $this->mmeuperfil->getCadastro()->row();
		$dados["tab_cad_pessoa"] = $this->mmeuperfil->getCadastro()->row();
		$dados['tab_foto_perfil'] = $this->mmeuperfil->get_fotoPerfil()->row();
		 $dados["option_estados"] = $this->cadastrarimovel->selectEstados(); 
	

		$dados['titulo'] = 'Atualizar imóvel'; 		
		$this->load->view('v_atualizar_imovel', $dados);

	}

	//acesso para o admin
	public function editarimovel()
	{
       $this->load->library("controle_acesso"); //controla se o user está logado 
        $this->controle_acesso->controlar();
		$this->load->model("M_Cadastrar_Imovel", "cadastrarimovel");
      	$this->load->model("M_Meu_Perfil", "mmeuperfil");
      	$dados['ImageUser'] = $this->cadastrarimovel->getImageUser();
      	$dados['files'] = $this->cadastrarimovel->getImagemImovel(); 
        $dados["tab_imagem"] = $this->cadastrarimovel->getImagesingle()->row();
        $dados['tipoimovel'] = $this->cadastrarimovel->getTipoImovel()->result();
        $dados['apelidoimovel'] = $this->cadastrarimovel->getApelidoImovel()->result();
		$dados["tab_imoveis"] = $this->cadastrarimovel->getImovel()->row();
		$dados["tab_usuario"] = $this->mmeuperfil->getCadastro()->row();
		$dados["tab_cad_pessoa"] = $this->mmeuperfil->getCadastro()->row();
		$dados['tab_foto_perfil'] = $this->mmeuperfil->get_fotoPerfil()->row();
		 $dados["option_estados"] = $this->cadastrarimovel->selectEstados(); 
	

		$dados['titulo'] = 'Atualizar imóvel'; 		
		$this->load->view('v_atualizarimovel', $dados);

	}

	public function mensagem(){
		$dados["listarmensagem"] = $this->mmeuperfil->listarMensagem();
		$dados['titulo'] = 'Caixa de Mensagem'; 		
		$this->load->view('v_mensagem', $dados);
	}

	public function mensagemretorno(){
		$this->load->library("controle_acesso"); //controla se o user está logado 
        $this->controle_acesso->controlar();
		$dados["listarmensagem"] = $this->mmeuperfil->listarMensagem();



		if(($id = $this->uri->segment(2)) > 0): // pega o segundo seguimento da uri, que é post
			if($mensagemretorno = $this->mmeuperfil->get_singleMensagem($id)):
				$dados['assunto'] = $mensagemretorno->assunto;
				$dados['mensagem'] = $mensagemretorno->mensagem;
				$dados['usuarioEnvioNome'] = $mensagemretorno->usuario_envio_nome;
				$dados['usuarioRecebeNome'] = $mensagemretorno->usuario_recebe_nome;
				$dados['usuarioRecebeId'] = $mensagemretorno->usuario_recebe_id;
				$dados['usuarioEnvioId'] = $mensagemretorno->usuario_envio_id;
				$dados['dataEnvio'] = $mensagemretorno->data_envio;
				$dados['statusMensagem'] = $mensagemretorno->status_lido;
		       $dados['titulo'] = 'Caixa de Mensagem'; 	
		else:
				$dados['titulo'] = 'Página não encontrada- Só Permuta';
				$dados['not_titulo'] = 'Mensagem não encontrada';
				$dados['not_conteudo']= 'Nenhuma noticia encontrada com base nas buscas';			
			endif;
		else:
			redirect(base_url(), 'refresh');
		endif;	
		$this->load->view('v_mensagem_retorno', $dados);
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

		
	
}
