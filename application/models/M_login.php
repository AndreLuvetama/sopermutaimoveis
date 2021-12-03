<?php
	class M_login extends CI_Model{
		public function logar(){
			//$email       = $this->input->post("txt_email");
			$nomeUsuario = $this->input->post("txt_nomeUsuario");
			$senha       = $this->input->post("txt_usuarioSenha");

			$this->db->where("usuarioSenha",$senha ); // compara os dados digitados com os que estão na tab_u
			$this->db->where("nomeUsuario",$nomeUsuario);
			//$this->db->where("email",$email );

			$consulta = $this->db->get("tab_usuario");
			if($consulta -> num_rows()>0){
				return $consulta;
			}else{
				return false;
			}
		}
	}