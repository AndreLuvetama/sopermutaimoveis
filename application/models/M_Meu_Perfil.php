<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Meu_Perfil extends CI_Model {

	public function getCadastro(){
		$usuario_id = $this->session->userdata("usuario_id");
		
		 $this->db->from("tab_usuario");
		 $this->db->join("tab_cad_pessoa", "tab_cad_pessoa.cad_pessoa_id = tab_usuario.cad_pessoa_id");
         $this->db->where("tab_usuario.usuario_id", $usuario_id);
		return $this->db->get();
	}
  public function get_fotoPerfil(){

		$usuario_id = $this->session->userdata("usuario_id");
		
	      $this->db->select("imagem,imagem_id");
		 $this->db->from("tab_foto_perfil");
		 $this->db->where("tab_foto_perfil.usuario_id", $usuario_id);
			return $this->db->get();

		}


	public function listaCadastro($usuario_id){
		return $this->db->get_where("tab_usuario", array("usuario_id" => $usuario_id ))->row_array();
	}	

	//Guardar as variasveis
	public function salvar()
	{
				$nome          = $this->input->post("txt_nome");
				$cpf           = $this->input->post("txt_cpf");
				$rua           = $this->input->post("txt_rua");
				$numero 	   = $this->input->post("txt_numero");
				$complemento   = $this->input->post("txt_complemento");
				$bairro        = $this->input->post("txt_bairro");
				$cidade        = $this->input->post("txt_cidade");
				$sexo          = $this->input->post("txt_sexo");
				$tel           = $this->input->post("txt_tel");
				$cel           = $this->input->post("txt_cel");
				$usuarioSenha  = $this->input->post("txt_usuarioSenha");
				$email         = $this->input->post("txt_email");
				$uf            = $this->input->post("txt_uf");
				$dataNasc      = $this->input->post("txt_dt_nasc");
				$cep           = $this->input->post("txt_cep");
				$nomeUsuario   = $this->input->post("txt_nomeUsuario");
				$usuarioSenha  = $this->input->post("txt_usuarioSenha"); 
				$fotoPessoa  = $this->input->post("txt_fotoPessoa"); 
			
				//$cad_pessoa_id = $this->input->post("txt_cad_pessoa_id");
				
	
	
	//passar as variaveis para o array
	$valores = array(
		        "nome"          =>$nome,
				"cpf"           =>$cpf,
				"rua"           =>$rua,
				"numero" 	    =>$numero,
				"complemento"   =>$complemento,
				"bairro"        =>$bairro,
				"cidade"        =>$cidade,
				"sexo"          =>$sexo,
				"tel"           =>$tel,
				"cel"           =>$cel,
				"email"         =>$email,
				"uf"            =>$uf,	
				"cep"           =>$cep,
				"dataNasc"	    =>$dataNasc,
				"fotoPessoa"	=>$fotoPessoa

				);

	 $this -> db->insert("tab_cad_pessoa", $valores);

//$dados2["cad_pessoa_id"] = $this->db->get('tab_cad_pessoa')->result();
$cad_pessoa_id = $this->db->insert_id($valores);
           
$valores2 = array(
		        
				"nomeUsuario"       =>$nomeUsuario,
				"usuarioSenha"      =>$usuarioSenha,
				"cad_pessoa_id"    =>$cad_pessoa_id
				    
				);
		$this ->db->insert("tab_usuario",$valores2);	

	//$this -> db->insert("tab_usuario", $valores2);	
	  
	}



public function atualizar()
	{
		$usuario_id = $this->input->post('txt_usuario_id');  
		$cad_pessoa_id = $this->input->post('txt_cad_pessoa_id');
  
		$cadastro = array(
			    'nome'           => $this->input->post("txt_nome"),
				'cpf'			 => $this->input->post("txt_cpf"),
				'rua'            => $this->input->post("txt_rua"),
			    'numero'         => $this->input->post("txt_numero"),
				'complemento'    => $this->input->post("txt_complemento"),
				'bairro'         => $this->input->post("txt_bairro"),
				'cidade'         => $this->input->post("txt_cidade"),
				'sexo'           => $this->input->post("txt_sexo"),
				'tel'            => $this->input->post("txt_tel"),
				'cel'            => $this->input->post("txt_cel"),
				'email'          => $this->input->post("txt_email"),
				'uf'             => $this->input->post("txt_uf"),
				'dataNasc'       => $this->input->post("txt_dt_nasc"),
				'fotoPessoa'            => $this->input->post("txt_fotoPessoa"),
				'cep'            => $this->input->post("txt_cep")

				//$cad_pessoa_id = $this->input->post("txt_cad_pessoa_id");
			);
		$cadastro2 = array(
				'nomeUsuario'   => $this->input->post("txt_nomeUsuario"),
				'usuarioSenha'  => $this->input->post("txt_usuarioSenha")
			
			);

				if ($cad_pessoa_id == "")
				{
					return $this->db->insert("tab_cad_pessoa", $cadastro);
					} else{
						$this->db->where("cad_pessoa_id",$cad_pessoa_id);   
	                    return $this->db->update("tab_cad_pessoa",$cadastro);

					}
					

			
			if($usuario_id == ""){
				return $this->db->insert("tab_usuario", $cadastro2);
			}else{
				$this->db->where("usuario_id", $usuario_id);
				return $this->db->update("tab_usuario",$cadastro2);	

			}
	         
	//$this -> db->insert("tab_usuario", $valores2);	
	  
	}

	public function salvarfoto1($dados)
	{

	//$imagem_id = $this->input->post('txt_imagem_id'); 
	  if(isset($dados['imagem_id']) && $dados['imagem_id'] > 0 && $dados['usuario_id'] > 0  ):
             $this->db->where('imagem_id', $dados['imagem_id']);
				unset($dados['imagem_id']);
				unset($dados['usuario_id']);
				$this->db->update('tab_foto_perfil', $dados);
				return $this->db->affected_rows();
			else:
				// noticia não existe, devo inserir
				$this->db->insert('tab_foto_perfil', $dados);
				return $this->db->insert_id();

			endif;
  

     }

    

     public function salvarfoto($dados){
     		$usuario_id = $this->input->post('txt_usuario_id');  
     		$imagem_id = $this->input->post('txt_imagem_id');  
     		$this->db->select('imagem_id');
     		$this->db->where('imagem_id', $imagem_id);
     		$this->db->from('tab_foto_perfil');
     		$imagem_id1 = $this->db->get();

			if($imagem_id > 0):
				//noticia já existe, devo editar
				$this->db->where('imagem_id', $imagem_id);
				unset($dados['imagem_id']);// não pode enviar o id para ser atualizado
				unset($dados['usuario_id']);
				$this->db->update('tab_foto_perfil', $dados);
				return $this->db->affected_rows();
			else:
				// noticia não existe, devo inserir
				$this->db->insert('tab_foto_perfil', $dados);
				return $this->db->insert_id();

			endif;
		}



		 public function alterarfoto($dados){
     		$usuario_id = $this->input->post('txt_usuario_id');  
     		$imagem_id = $this->input->post('txt_imagem_id');  
     		
     		$this->db->select('usuario_id', $usuario_id);
     		$this->db->from('tab_foto_perfil');
     		$usuario_id1 = $this->db->get();
				// noticia não existe, devo inserir
     		$usuario_id = $this->session->userdata("usuario_id");
     		$this->db->where("tab_foto_perfil.usuario_id", $usuario_id);
		
				unset($dados['usuario_id']);
				unset($dados['imagem_id']);// não pode enviar o id para ser atualizado
				$this->db->update('tab_foto_perfil', $dados);
				return $this->db->affected_rows();

			
		}
		public function alterarSenha(){
			$usuario_id = $this->session->userdata("usuario_id");
		  
		$cadastro = array(
			    'usuarioSenha'           => $this->input->post("txt_usuarioSenha")				
			);

		
				$this->db->where("usuario_id", $usuario_id);
				return $this->db->update("tab_usuario",$cadastro);	
			}
 public function listarMensagem(){

		$usuario_id = $this->session->userdata("usuario_id");
		
	      $this->db->select("*");
		 $this->db->from("tab_mensagem");
		 $this->db->where("tab_mensagem.usuario_recebe_id", $usuario_id);
		 $this->db->order_by("data_envio", "desc");
			$query = $this->db->get(); 
            $result = $query->result_array();  
            
            return !empty($result)?$result:false; 

		}

		public function enviarMensagem(){
			$mensagem = array(
				'usuario_recebe_id'=> $this->input->post("txt_usuario_recebe_id"),
				'usuario_recebe_nome'=> $this->input->post("txt_usuario_recebe_nome"),
				'usuario_envio_id'=> $this->session->userdata("usuario_id"),
				'assunto'=> $this->input->post("txt_assunto"),
				'mensagem'=> $this->input->post("txt_mensagem")
			);

			return $this->db->insert("tab_mensagem", $mensagem);

		}

		public function totalMsg(){
			$usuario_id = $this->session->userdata("usuario_id");
		 $this->db->select("*");
		 $this->db->from("tab_mensagem");
		 $this->db->where("tab_mensagem.usuario_recebe_id", $usuario_id);
		 	$query = $this->db->get(); 
         return $query->num_rows();
		}
		public function envioEmail(){
			$this->load->library('email*');
		}




}


