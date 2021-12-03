<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_exenplo extends CI_Model {
	function __construct(){
		parent::__construct();
	}
     public function salvar()
	{
		echo "Executado o metodo salvar do Model";
	}

}