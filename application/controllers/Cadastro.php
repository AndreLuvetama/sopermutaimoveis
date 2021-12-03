<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {




	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model("M_cadastro", "mcadastro");
	}

	
	public function index()
	{
	
		$dados['titulo'] = 'Só Permutaimovel- Cadastrar dados';
		$dados['h2']= 'Cadastro de usuário';
		$dados['tela'] = 'cadastrar';
		$this->load->view('v_cadastro', $dados);
		
	}

	public function novo()
	{
		//$dados["nome_view"] = "v_cadastro";
		$this->load->view('v_cadastro', $dados);

	}

	
	
	//Guardar as variasveis
	
	public function salvar()
	{
		$this->form_validation->set_rules('txt_nome', 'Nome', 'trim|required');
		$this->form_validation->set_rules('txt_cpf', 'CPF', 'trim|required');
		$this->form_validation->set_rules('txt_cep', 'Nome', 'trim|required');
		$this->form_validation->set_rules('txt_rua', 'Rua', 'trim|required');
		$this->form_validation->set_rules('txt_numero', 'Númer', 'required');
		$this->form_validation->set_rules('txt_complemento', 'Complemento', 'required');
		$this->form_validation->set_rules('txt_bairro', 'Bairro', 'required');
		$this->form_validation->set_rules('txt_cidade', 'Cidade', 'required');
		$this->form_validation->set_rules('txt_cel', 'Celelular', 'required');
		$this->form_validation->set_rules('txt_email', 'Email', 'Trim|valid_email|required|is_unique[tab_cad_pessoa.email]');
		$this->form_validation->set_rules('txt_nomeUsuario', 'Nome do usuário',
			'required|is_unique[tab_usuario.nomeUsuario]');
		$this->form_validation->set_rules('txt_usuarioSenha', 'Senha de usuário', 'required');

		$dados["tab_usuario"] = $this->mcadastro->getCadastro()->row();

		if($this->form_validation->run() ==false){
        
			       
        }else{

        	$this->mcadastro->salvar();
			$this->session->set_flashdata('msgAlerta', 'Cadastro realizado com sucesso<br>Acesse o login e comece a sua Permuta');			
		
		redirect("cadastro");
        	 
        }
 	

		$dados['titulo'] = 'Só Permutaimovel- Cadastraro';
		$dados['h2']= 'Cadastro de usuário';
		$dados['tela'] = 'cadastrar';
		$this->load->view('v_cadastro', $dados);
		
	}

public function editar()
	{
		$usuario_id = $this->input->get("$usuario_id");
		$this->load->model("M_cadastro");
		//$this->load->model("M_cadastro");
		$cadastro= $this->M_cadastro->listaCadastro($usuario_id);
		$dados = array("cadastro" =>$cadastro);

		
		$dados["cadastro"]=$this->M_cadastro->getCadastro($usuario_id)->row();
		
		$this->load->view('v_cadastro', $dados);

	}


	public function atualizar($usuario_id)
	{
		$this->load->model("M_cadastro");
		$this->M_cadastro->atualizar($usuario_id);
		$this->session->set_flashdata('success', 'Cadastro atualizado com sucesso');
		redirect("meu_perfil");
  
	}


}
