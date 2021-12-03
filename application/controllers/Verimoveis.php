<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastrarImovel extends CI_Controller {
	function __construct(){
		parent::__construct();
       
		$this->load->helper('url');
        $this->load->model("M_Meu_Perfil", "mmeuperfil");
		$this->load->model("M_Cadastrar_Imovel", "cadastrarimovel");
        $this->load->library("controle_acesso"); //controla se o user está logado 
        $this->controle_acesso->controlar();
    
	}

	public function index(){
		$dados['tab_imagem'] = $this->cadastrarimovel->getImagesingle()->row(); 
		

	}


}
