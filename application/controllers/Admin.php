<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

 public function __construct()
        {
             parent::__construct();
             $this->load->library("controle_acesso"); //controla se o user está logado 
             $this->controle_acesso->controlar();
              $this->load->model('M_Cadastrar_Imovel', 'mcadastrarimovel');
       $this->load->model("M_Meu_Perfil", "mmeuperfil");
       $this->load->model("M_Admin", "madmin");
       $this->uploadPath = 'upload/';
             $this->load->helper('url');
			 $this->load->helper('form');
			 $this->load->library('form_validation');

       $dados['getTodosUsuarios'] = $this->madmin->getTodosUsuarios();
        $dados['getQtdeUsuario'] = $this->madmin->getQtdeUsuario();
        $dados['getQtdeImoveis'] = $this->madmin->getQtdeImoveis();
        $dados['todosImoveis'] = $this->madmin->todosImoveis();
        $dados['todosCadastros'] = $this->madmin->todosCadastros();
        $dados['ultimosCadastros'] = $this->madmin->ultimosCadastros();
        $dados['ultimosImoveis'] = $this->madmin->ultimosImoveis();     
			

             
        }
	



	public function index()
	{
    $dados['num_row'] = $this->madmin->totalMsg(); 
    $dados["listarmensagem"]    = $this->madmin->listarMensagem();
	$dados['getTodosUsuarios']  = $this->madmin->getTodosUsuarios();
    $dados['getQtdeUsuario']    = $this->madmin->getQtdeUsuario();
    $dados['getQtdeImoveis']    = $this->madmin->getQtdeImoveis();
    $dados['todosImoveis']      = $this->madmin->todosImoveis();
    $dados['todosCadastros']    = $this->madmin->todosCadastros();
    $dados['ultimosCadastros']  = $this->madmin->ultimosCadastros();
    $dados['ultimosImoveis']    = $this->madmin->ultimosImoveis();
   

   
		$dados['titulo'] = 'Painel do Admin'; 		
		$this->load->view('v_admin', $dados);
   	}
   		public function verImovel($id=""){
        $this->load->library("controle_acesso"); //controla se o user está logado 
        $this->controle_acesso->controlar();
          $row = $this->madmin->getImovelid($id);
         $dados['titulo'] = 'Só Permutaimovel-Editar imóvel';
         $dados['imovel'] =  $row;

    $dados['titulo'] = 'Editar imóvel'; 
    $this->load->view('admin/v_editarImovel', $dados);
   		}

      public function atualizarImovel($id=''){    
      if($this->input->post('postSubmit')){
            $this->madmin->atualizarImovel();  
     $this->session->set_flashdata('msgAlerta', 'Atualização feita com sucesso');     
      redirect("admin", "refresh");
      }
    }

   		 public function deleteimovel($id){         
        if($txt_imoveis_id){
            $imgData = $this->madmin->getImageUser($id); 
            $delete = $this->madmin->excluirImoveis($id);
            if($delete){    
                        if(!empty($ImageUser)){
                                      foreach($ImageUser as $key){
                                 unlink('upload/imoveis/'.$key['file_name']);
                       }
                   }                                                   
                  $this->session->set_flashdata('msgAlerta', 'Imovel exluido com sucesso');
                  redirect("admin", 'refresh');
            }else{
                  $this->session->set_flashdata('msgAlerta2', 'Imóvel não excluido, tenta mais tarde');
            }
        }
        //echo $status;die; 
        // Redirect to the list page
        $dados['titulo'] = 'Só Permutaimovel- Cadastrar Imovel';
        $this->load->view('v_admin', $dados);
    }

      public function editarUsuario($usuario_id){
        $this->load->library("controle_acesso"); //controla se o user está logado 
        $this->controle_acesso->controlar();
          $row = $this->madmin->getUsuario($usuario_id);
         $dados['titulo'] = 'Só Permutaimovel-Editar usuario';
         $dados['usuario'] =  $row;

    $dados['titulo'] = 'Editar usuario'; 
    $this->load->view('admin/v_editarUsuario', $dados);
    }

    public function atualizarStatus($usuario_id=''){    
     $row = $this->madmin->getUsuario($usuario_id);   
     $dados['usuario'] =  $row;    
      if($this->input->post('postSubmit')){
            $this->madmin->atualizarStatus();  
     $this->session->set_flashdata('msgAlerta', 'Atualização feita com sucesso');
     
      redirect("admin", "refresh");
      }
    }


  

    public function alterarSenha(){
    
    
    
    $dados['todosCadastros'] = $this->madmin->todosCadastros();
    $dados['ultimosCadastros'] = $this->madmin->ultimosCadastros();
    $dados['ultimosImoveis'] = $this->madmin->ultimosImoveis();
   

    $this->form_validation->set_rules('txt_usuarioSenha', 'Senha', 'trim|required|min_length[6]');
    $this->form_validation->set_rules('txt_usuarioSenha2', 'Confirmação de senha', 'trim|required|matches[txt_usuarioSenha]');
    if($this->form_validation->run()==false)
    {
        $dados['titulo'] = 'Painel do Admin';     
        $this->load->view('v_admin', $dados);

    }else{
      $this->mmeuperfil->alterarSenha();
        $this->session->set_flashdata('msgAlerta', 'Senha atualizada com sucesso');
        redirect('admin', 'refresh');

    }
    

  }


      public function gestaoimovel(){
     		
	 $this->load->library("pagination");

		 $config = array(
			"base_url" =>  base_url('admin/gestaoimovel'),
						
			"total_rows" => $this->madmin->getQtdeImoveis(),
			"full_tag_open" => "<ul class='pagination'>",
			"full_tag_close" => "</ul>",
			"first_link" => FALSE,
			"last_link" => FALSE,
			"first_tag_open" => "<li>",
			"first_tag_close" => "</li>",
			"prev_link" => "Anterior",
			"prev_tag_open" => "<li class='prev'>",
			"prev_tag_close" => "</li>",
			"next_link" => "Próxima",
			"next_tag_open" => "<li class='next'>",
			"next_tag_close" => "</li>",
			"last_tag_open" => "<li>",
			"last_tag_close" => "</li>",
			"cur_tag_open" => "<li class='active'><a href='#'>",
			"cur_tag_close" => "</a></li>",
			"num_tag_open" => "<li>",
			"num_tag_close" => "</li>"
		);
         	    
        
        $this->pagination->initialize($config);
         $dados['pagination'] = $this->pagination->create_links();
   
            $dados['titulo'] = 'Editar Imóvel'; 
          
   


        $this->pagination->initialize($config);
         $dados['pagination'] = $this->pagination->create_links();

          $dados['getQtdeImoveis']    = $this->madmin->getQtdeImoveis();
   			$dados['todosImoveis'] = $this->madmin->todosImoveis();
    	 $dados['titulo'] = 'Editar usuario'; 
    //redirect("gestaousuario", 'refresh');
     	 $this->load->view('admin/v_gestaoimovel', $dados);    


  }

     public function gestaousuario(){
     	  $this->load->library("controle_acesso"); //controla se o user está logado 
          $this->controle_acesso->controlar();
        	 
        	  //$dados['getTodosUsuarios'] = $this->madmin->getTodosUsuarios();

     	  $dados['usuarioPorPag']    = $this->madmin->usuarioporpag();

     	 $this->load->library("pagination");


		 $config = array(
			"base_url" =>  base_url('admin/gestaousuario'),
			
			"total_rows" => $this->madmin->getQtdeUsuario(),
			"full_tag_open" => "<ul class='pagination'>",
			"full_tag_close" => "</ul>",
			"first_link" => FALSE,
			"last_link" => FALSE,
			"first_tag_open" => "<li>",
			"first_tag_close" => "</li>",
			"prev_link" => "Anterior",
			"prev_tag_open" => "<li class='prev'>",
			"prev_tag_close" => "</li>",
			"next_link" => "Próxima",
			"next_tag_open" => "<li class='next'>",
			"next_tag_close" => "</li>",
			"last_tag_open" => "<li>",
			"last_tag_close" => "</li>",
			"cur_tag_open" => "<li class='active'><a href='#'>",
			"cur_tag_close" => "</a></li>",
			"num_tag_open" => "<li>",
			"num_tag_close" => "</li>"
		);
         	    
        
         $this->pagination->initialize($config);
         $dados['pagination'] = $this->pagination->create_links();

     	 $dados['getQtdeUsuario'] = $this->madmin->getQtdeUsuario();
    	 $dados['titulo'] = 'Editar usuario'; 
    //redirect("gestaousuario", 'refresh');
     	$this->load->view('admin/v_gestaousuario', $dados);  

  }

  public function gestaousuario1(){
     	  $this->load->library("controle_acesso"); //controla se o user está logado 
        	$this->controle_acesso->controlar();

        $dados['pesquisar'] = $this->madmin->todosCadastros_like();
    //$dados['ultimosCadastros'] = $this->madmin->ultimosCadastros();
     	$dados['getTodosUsuarios'] = $this->madmin->getTodosUsuarios();
     	$dados['getQtdeUsuario'] = $this->madmin->getQtdeUsuario();
    	$dados['titulo'] = 'Editar usuario'; 
    //redirect("gestaousuario", 'refresh');
     	$this->load->view('admin/v_gestaousuario', $dados);  

  }



}



	

	
	
	

