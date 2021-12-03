<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {

	public function getCadastro(){
		$usuario_id = $this->session->userdata("usuario_id");
		
		 $this->db->from("tab_usuario");
		 $this->db->join("tab_cad_pessoa", "tab_cad_pessoa.cad_pessoa_id = tab_usuario.cad_pessoa_id");
         $this->db->where("tab_usuario.usuario_id", $usuario_id);
		return $this->db->get();
	}


	
	public function listaCadastro($usuario_id){
		return $this->db->get_where("tab_usuario", array("usuario_id" => $usuario_id ))->row_array();
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

	public function ultimosCadastros(){
		 $this->db->from("tab_usuario");
		 $this->db->join("tab_cad_pessoa", "tab_cad_pessoa.cad_pessoa_id = tab_usuario.cad_pessoa_id");
         $this->db->order_by("tab_usuario.dataIncl", "desc");
		  $this->db->limit(10);
		    $query = $this->db->get(); 
            $result = $query->result_array();              
            return !empty($result)?$result:false; 		
	}

	public function getTodosUsuarios(){
		 $this->db->from("tab_usuario");
		 $this->db->join("tab_cad_pessoa", "tab_cad_pessoa.cad_pessoa_id = tab_usuario.cad_pessoa_id");
         $this->db->order_by("tab_usuario.dataIncl", "desc");

		    $query = $this->db->get(); 
            $result = $query->result_array();              
            return !empty($result)?$result:false; 
		
	}

		public function usuarioPorPag(){
		 $this->db->from("tab_usuario");
		 $this->db->join("tab_cad_pessoa", "tab_cad_pessoa.cad_pessoa_id = tab_usuario.cad_pessoa_id");
         $this->db->order_by("tab_usuario.dataIncl", "desc");
        // $this->db->limit($limit, $pag);

  
		    $query = $this->db->get(); 
            $result = $query->result_array();              
            return !empty($result)?$result:false; 
		
	}


	public function getQtdeUsuario(){
	return $this->db->count_all("tab_usuario");
	
}

 public function count_all()
    {
        $this->db->from("tab_cad_pessoa");
        return $this->db->count_all_results();
    }

     public function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }


	public function ultimosImoveis(){
		 $this->db->from("tab_usuario");
		 $this->db->join("tab_cad_pessoa", "tab_cad_pessoa.cad_pessoa_id = tab_usuario.cad_pessoa_id");
		 $this->db->join("tab_imoveis", "tab_imoveis.usuario_id = tab_usuario.usuario_id");
		 $this->db->order_by("tab_imoveis.dataIncl", "desc");
		 $this->db->limit(10);
		 $query = $this->db->get(); 
            $result = $query->result_array();             
            return !empty($result)?$result:false; 
	}

	public function imoveisDisponiveis(){
		 $this->db->from("tab_usuario");
		 $this->db->join("tab_cad_pessoa", "tab_cad_pessoa.cad_pessoa_id = tab_usuario.cad_pessoa_id");
		 $this->db->join("tab_imoveis", "tab_imoveis.usuario_id = tab_usuario.usuario_id");
		 return $this->db->get()->result();

	}

		public function todosImoveis(){
			 $this->db->from("tab_usuario");
		 $this->db->join("tab_cad_pessoa", "tab_cad_pessoa.cad_pessoa_id = tab_usuario.cad_pessoa_id");
		 $this->db->join("tab_imoveis", "tab_imoveis.usuario_id = tab_usuario.usuario_id");
		 $this->db->order_by("tab_imoveis.dataIncl", "desc");
		
		 $query = $this->db->get(); 
            $result = $query->result_array();  
            
            return !empty($result)?$result:false; 

	}
	public function getQtdeImoveis(){
	return $this->db->count_all("tab_imoveis");
	
}

	public function todosCadastros(){
		 $this->db->from("tab_usuario");
		 $this->db->join("tab_cad_pessoa", "tab_cad_pessoa.cad_pessoa_id = tab_usuario.cad_pessoa_id");
         $this->db->order_by("tab_usuario.dataIncl", "desc");
		    $query = $this->db->get(); 
            $result = $query->result_array();             
            return !empty($result)?$result:false;		
	}


	public function todosCadastros_like(){
		$busca = $this->input->post('pesquisar');
		$this->db->select('*');
		$this->db->like('tab_cad_pessoa.cad_pessoa_id',$busca, 'nome', $busca);

		 $this->db->from("tab_usuario");
		 $this->db->join("tab_cad_pessoa", "tab_cad_pessoa.cad_pessoa_id = tab_usuario.cad_pessoa_id");
         $this->db->order_by("tab_usuario.dataIncl", "desc");
		    $query = $this->db->get(); 
            $result = $query->result_array();             
            return !empty($result)?$result:false;		
	}

	 public function excluirImoveis($id){
           $this->db->trans_start();
           $delete = $this->db->delete('tab_imoveis', array('id' => $id));
           $delete = $this->db->delete('tab_imagem', array('imoveis_id' => $id));
        
       $delete= $this->db->trans_complete();
         return $delete?true:false;
       // $delete = $this->db->get();
    }

    public function getImovelid($id){
    	 $this->db->from("tab_imoveis");
		 $this->db->join("tab_usuario", "tab_usuario.usuario_id = tab_imoveis.usuario_id");
		 $this->db->join("tab_cad_pessoa", "tab_cad_pessoa.cad_pessoa_id = tab_usuario.cad_pessoa_id");
		 $this->db->where("tab_imoveis.id", "$id");
		$query = $this->db->get(); 
          if($query->num_rows() == 1):
				$row = $query->row();
				return $row;
			else:
				return NULL;
			endif;
    }

        public function getUsuario($usuario_id){
    	 $this->db->from("tab_usuario");
		 $this->db->join("tab_cad_pessoa", "tab_cad_pessoa.cad_pessoa_id = tab_usuario.cad_pessoa_id");		
		$this->db->where('tab_usuario.usuario_id',$usuario_id);
		$query = $this->db->get();

			if($query->num_rows() == 1):
				$row = $query->row();
				return $row;
			else:
				return NULL;
			endif;
            
    }

  public function getUsuario1($usuario_id= ''){ 
          $this->db->from("tab_usuario");
		 $this->db->join("tab_cad_pessoa", "tab_cad_pessoa.cad_pessoa_id = tab_usuario.cad_pessoa_id");		
		$this->db->where('tab_usuario.usuario_id',$usuario_id);
       return $this->db->get();
    }



public function alterarSenha(){
			$usuario_id = $this->session->userdata("usuario_id");		  
		$cadastro = array(
			    'usuarioSenha' => $this->input->post("txt_usuarioSenha")				
			);
		
				$this->db->where("usuario_id", $usuario_id);
				return $this->db->update("tab_usuario",$cadastro);	
			}

 public function atualizarStatus(){
 			$usuario_id          = $this->input->post("txt_usuario_id");
			$cadastro = array(			 
				'tipo_usuario_id' 	      => $this->input->post("txt_tipoUsuario"),
				'statusAssinante'         => $this->input->post("txt_status"), 
				'st_ativadoDesativado'    => $this->input->post("txt_ativadoDesativado")
			);
		    $this->db->where("usuario_id", $usuario_id);
		    return $this->db->update("tab_usuario",$cadastro);

 }

  public function atualizarImovel(){
 			$usuario_id = $this->input->post("txt_usuario_id");
			$cadastro = array(			 
				'statusImovel' 	      => $this->input->post("txt_statusImovel"),
				'statusPermuta'       => $this->input->post("txt_statusPermuta")
			);
		    $this->db->where("usuario_id", $usuario_id);
		    return $this->db->update("tab_imoveis",$cadastro);
		 }


		  public function listarMensagem(){
	      $this->db->select("*");
		  $this->db->from("tab_mensagem");
		  $this->db->order_by("data_envio", "desc");
		  $query = $this->db->get(); 
          $result = $query->result_array();              
            return !empty($result)?$result:false; 
		}

		public function totalMsg(){
			 $this->db->select("*");
		 $this->db->from("tab_mensagem");
		 	$query = $this->db->get(); 
         return $query->num_rows();
		}
 
}


