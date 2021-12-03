<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cadastro extends CI_Model {

	public function getCadastro(){
		$usuario_id = $this->session->userdata("usuario_id");
		return $this->db->where("usuario_id", $usuario_id)->get("tab_usuario");
		
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
				"dataNasc"	    =>$dataNasc

				);

     $this ->db->insert("tab_cad_pessoa", $valores);
     $this->enviarEmail($valores);
	 

//$dados2["cad_pessoa_id"] = $this->db->get('tab_cad_pessoa')->result();
$cad_pessoa_id = $this->db->insert_id($valores); //insere o id_pessoa no na variavel cad_pessoa 
           
$valores2 = array(
		        
				"nomeUsuario"       =>$nomeUsuario,
				"usuarioSenha"      =>$usuarioSenha,
				"cad_pessoa_id"     =>$cad_pessoa_id
				    
				);

		$this ->db->insert("tab_usuario",$valores2);
	

	

		

	//$this -> db->insert("tab_usuario", $valores2);	
	  
	}



public function atualizar()
	{
		$usuario_id = $this->input->post('usuario_id');

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
				'usuarioSenha'   => $this->input->post("txt_usuarioSenha"),
				'email'          => $this->input->post("txt_email"),
				'uf'             => $this->input->post("txt_uf"),
				'dataNasc'       => $this->input->post("txt_dt_nasc"),
				'cep'            => $this->input->post("txt_cep")

				//$cad_pessoa_id = $this->input->post("txt_cad_pessoa_id");
			);
		    $this->db->where("cad_pessoa_id", $cad_pessoa_id);
		    return $this->db->update("tab_cad_pessoa",$cadastro);
			

			$cadastro2 = array(
				'nomeUsuario'   => $this->input->post("txt_nomeUsuario"),
				'usuarioSenha'  => $this->input->post("txt_usuarioSenha")
				//$cad_pessoa_id = $this->input->post("txt_cad_pessoa_id");
			);

	
		         $this->db->where("usuario_id", $usuario_id);
				return $this->db->update("tab_usuario",$cadastro2);	

	//$this -> db->insert("tab_usuario", $valores2);	
	  
	}

	public function verificaEmail($txt_email){
		$this->db->where('email', $txt_email);	

	}

		 public function enviarEmail($valores){
	   		$this->load->library('email');
	   		$this->email->clear();
	   		$this->email->from('andreluares30@gmail.com', 'Andre teste -Só Permuta');
	   	    $this->email->to($valores['email'], $valores['nome']);
	   	    $this->email->reply_to("andreluares30@gmail.com");
	   	    $this->email->subject('Seja bem vindo');
	   	    $this->email->message('Olá Já estás no nosso sistema...');

	   	    if($this->email->send()){
	   	    	echo "Correio enviado";
	   	    }else{
	   	    	echo "Correio não enviado";
	   	    }

   	}


	
	}
