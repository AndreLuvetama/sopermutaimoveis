<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
	  $this->load->model("M_Noticias", "noticias");
	   $this->load->library("phpmailer_lib");

	}

	public function index()
	{
		$dados['titulo'] = 'Só Permutas e imóveis'; 		
		$this->load->view('v_home', $dados);
	}

	public function quemsomos()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$dados['titulo'] = 'Só Permutas e imóveis'; 		
		$this->load->view('v_quem_somos', $dados);
	}

	public function contato()
	{
		$this->load->helper("form");
		$this->load->library("form_validation");
		$this->form_validation->set_rules('nomeContato', 'Nome', 'Trim|required');
        $this->form_validation->set_rules('emailContato', 'Email', 'Trim|required|valid_email');
        $this->form_validation->set_rules('assuntoContato', 'Assunto', 'Trim|required');
        $this->form_validation->set_rules('mensagemContato', 'Mensagem', 'Trim|required');

       
        if($this->form_validation->run() ==false){
        	
		       
        }else{
        	 $dados_form = $this->input->post();
        	 print_r($dados_form);                 
			$this->session->set_flashdata('msgAlerta', 'Mensagem enviada com sucesso!');
			redirect(base_url("contato"));
        }
 		
		$dados['titulo'] = 'Entrar em contato'; 		
		$this->load->view('v_contato', $dados);
	}
	
	public function comofunciona()
	{
		$dados['titulo'] = 'Como funciona a Permuta'; 		
		$this->load->view('v_comofunciona', $dados);
	}

	public function noticias()
	{
		$dados['titulo'] = 'Só Permutaimoveis-Noticias'; 		
		$this->load->view('v_noticias', $dados);
	}


	public function visualizarimovel()
	{
			 
		$dados['titulo'] = 'Só Permutaimovel-Visualizar imoveis'; 		
		$this->load->view('v_visualizar_imovel', $dados);
	}

		public function cadastrarimovel()
	{
			 
		$dados['titulo'] = 'Só Permutaimovel-Visualizar imoveis'; 		
		$this->load->view('v_cadastrar_imovel', $dados);
	}

	public function Cadastro()
	{
			 
		$dados['titulo'] = 'Só Permutaimovel-Cadastrar dados'; 		
		$this->load->view('v_cadastro', $dados);
	}

	public function vernoticias()
	{
			 
		$dados['titulo'] = 'Ver Notícias'; 		
		$this->load->view('v_vernoticias', $dados);
	}

	public function Users()
	{
			 
		$dados['titulo'] = 'teste'; 		
		$this->load->view('add', $dados);
	}
	

	public function post()
	{
			 
		if(($id = $this->uri->segment(2)) > 0): // pega o segundo seguimento da uri, que é post
			if($noticias = $this->noticias->get_single($id)):
				$dados['titulo'] = to_html($noticias->titulo).'- Notícias';
				$dados['not_titulo'] = to_html($noticias->titulo);
				$dados['not_conteudo'] = to_html($noticias->conteudo);
				$dados['not_imagem'] = $noticias->imagem;
			else:
				$dados['titulo'] = 'Página não encontrada- Só Permuta';
				$dados['not_titulo'] = 'Notícia não encontrada';
				$dados['not_conteudo']= 'Nenhuma noticia encontrada com base nas buscas';
				$dados['not_imagem']= '';
			endif;
		else:
			redirect(base_url(), 'refresh');
		endif;
		$this->load->view('v_post', $dados);

	}

	 public function enviarEmail(){
	 	$this->load->helper("form");
		$this->load->library("form_validation");
		$this->form_validation->set_rules('nomeContato', 'Nome', 'Trim|required');
        $this->form_validation->set_rules('emailContato', 'Email', 'Trim|required|valid_email');
        $this->form_validation->set_rules('assuntoContato', 'Assunto', 'Trim|required');
        $this->form_validation->set_rules('mensagemContato', 'Mensagem', 'Trim|required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        if($this->form_validation->run()){
        	$destinatario = $this->input->post('emailContato');
        	$assunto = $this->input->post('assuntoContato');
        	$mensagem = $this->input->post('mensagemContato');
        	$this->load->library('email');
	   		$this->email->from($destinatario);
	   	    $this->email->to('andreluares30@gmail.com', 'nome');
	   	    $this->email->reply_to("andreluares30@gmail.com");
	   	    $this->email->subject($assunto);
	   	    $this->email->message($mensagem);

	   	    if (!$this->email->send()) {
			   		 show_error($this->email->print_debugger());
			     }
				  else {
				    echo "Email enviado com sucesso!";
				    }
			    }
			  else
			  {
			   $dados['titulo'] = 'Entrar em contato'; 		
		       $this->load->view('v_contato', $dados);
			  }
			 
        }




        public function send(){
        /* Load PHPMailer library */
       // $this->load->library('PHPMailer_Lib');
       
        /* PHPMailer object */
        $mail = $this->phpmailer_lib->load();
       
        /* SMTP configuration */
        $mail->isSMTP();
        $mail->Host     = 'smtp.example.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'andreluares30@gmail.com';
        $mail->Password = 'genesis@biblia';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;
       
        $mail->setFrom('andreluares30@gmail.com', 'CodexWorld');
        $mail->addReplyTo('info@example.com', 'CodexWorld');
       
        /* Add a recipient */
        $mail->addAddress('admcsf06@gmail.com');
       
        /* Add cc or bcc */
        $mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');
       
        /* Email subject */
        $mail->Subject = 'Send Email via SMTP using PHPMailer in CodeIgniter';
       
        /* Set email format to HTML */
        $mail->isHTML(true);
       
        /* Email body content */
        $mailContent = "<h1>Send HTML Email using SMTP in CodeIgniter</h1>
        <p>This is a test email sending using SMTP mail server with PHPMailer.</p>";
        $mail->Body = $mailContent;
       
        /* Send email */
        if(!$mail->send()){
            echo 'Mail could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo 'Mail has been sent';
        }
    }
   

	
}
