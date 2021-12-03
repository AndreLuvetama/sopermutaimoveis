<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Tipo_Imovel extends CI_Model {

		public function listaTipoImovel(){
         		$this->db->select("tab_tipo_imovel","tab_tipo_imovel.tipo_imovel");
         		$this->db->from("tab_tipo_imovel");
        return $this->db->get();

		}
		
	}