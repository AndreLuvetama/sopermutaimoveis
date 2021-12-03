<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastrarImovel extends CI_Controller {


private $upload_path = "./upload/imoveis";

    function __construct(){
        parent::__construct();
       
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model("M_Meu_Perfil", "mmeuperfil");
        $this->load->model("M_Cadastrar_Imovel", "cadastrarimovel");
       $this->load->library("controle_acesso"); //controla se o user está logado 
        $this->controle_acesso->controlar();
    
    }

    
    public function index()
    {
        $dados['tipoimovel'] = $this->cadastrarimovel->getTipoImovel()->result();
        $dados["option_estados"] = $this->cadastrarimovel->selectEstados(); 
        $dados['tab_imagem'] = $this->cadastrarimovel->getImagemImovel(); 
        $dados['ImageUser'] = $this->cadastrarimovel->getImageUser();
        $dados["imoveisdeInteresse"] = $this->cadastrarimovel->getImoveisdeInteresse();
        $dados['titulo'] = 'Só Permutaimovel- Cadastrar Imovel';


        $this->load->view('v_cadastrar_imovel', $dados);
        
        if($this->session->userdata('success_msg')){ 
            $data['success_msg'] = $this->session->userdata('success_msg'); 
            $this->session->unset_userdata('success_msg'); 
        } 
        if($this->session->userdata('error_msg')){ 
            $data['error_msg'] = $this->session->userdata('error_msg'); 
            $this->session->unset_userdata('error_msg'); 
        } 
        
    }


        public function salvar(){
        $dados["option_estados"] = $this->cadastrarimovel->selectEstados(); 
        $dados['tipoimovel'] = $this->cadastrarimovel->getTipoImovel()->result();
        $dados['apelidoimovel'] = $this->cadastrarimovel->getApelidoImovel()->result();
        $dados["tab_imoveis"] = $this->cadastrarimovel->getImovel()->result();
        $dados["tab_imoveis"] = $this->cadastrarimovel->getCadastro()->row();
        $dados["tab_usuario"] = $this->mmeuperfil->getCadastro()->row();
     
        $this->form_validation->set_rules('txt_nomeImovel', 'Nome do Imovel', 'trim|required');
        $this->form_validation->set_rules('txt_descricaoImovel', 'Descrição do Imóvel', 'trim|required');
        $this->form_validation->set_rules('txtCep', 'Cep', 'trim|required');
        $this->form_validation->set_rules('txtRua', 'Endereço', 'trim|required');
        $this->form_validation->set_rules('txtEstado', 'UF', 'required');
        $this->form_validation->set_rules('txtBairro', 'Bairro', 'required');
        $this->form_validation->set_rules('txtCidade', 'Cidade', 'required');
        $this->form_validation->set_rules('txtNumero', 'Número', 'required');
        $this->form_validation->set_rules('txt_tamanho', 'Tamanho(m2) ', 'required');
        $this->form_validation->set_rules('txt_numVagas', 'Num de vagas', 'required');
        $this->form_validation->set_rules('txt_numQuartos', 'Número de quartos', 'Trim|required');
        //$this->form_validation->set_rules('txtComplemento', 'Complemento','required');
        $this->form_validation->set_rules('txt_numBanheiro', 'Num de vagas', 'required');
        $this->form_validation->set_rules('txt_intImvlMobilia', 'Meus interesses(Imovel (n) mobiliado)', 'required');
        $this->form_validation->set_rules('txt_imovelMobilia', 'Imóvel (n) mobiliado', 'required');
        $this->form_validation->set_rules('txt_intTipoImovel', 'Meus interesses(Tipo imóvel)', 'required');
        $this->form_validation->set_rules('txt_intEstados', 'Meus interesses(Estado)', 'required');
        $this->form_validation->set_rules('txt_intMunicipios', 'Meus interesses(Municipio)', 'required');

         
            if($this->form_validation->run() == false){
             //$this->load->view('v_cadastrar_imovel', $dados);

            }else{
                $this->cadastrarimovel->salvar();
                 $this->session->set_flashdata('msgAlerta', 'Imovel cadastrado com sucesso, fazer upload das imagens');
           redirect("cadastrarimovel", 'refresh');
            }

              $dados['titulo'] = 'Só Permuta - Cadastrar Imovel';         
             $this->load->view('v_cadastrar_imovel', $dados);           
        }


        public function atualizar(){
        $dados["option_estados"] = $this->cadastrarimovel->selectEstados(); 
        $dados['tipoimovel'] = $this->cadastrarimovel->getTipoImovel()->result();
        $dados['apelidoimovel'] = $this->cadastrarimovel->getApelidoImovel()->result();
        $dados["tab_imoveis"] = $this->cadastrarimovel->getImovel()->result();
        $dados["tab_imoveis"] = $this->cadastrarimovel->getCadastro()->row();
        $dados["tab_usuario"] = $this->mmeuperfil->getCadastro()->row();


        $this->form_validation->set_rules('txt_nomeImovel', 'Nome do Imovel', 'trim|required');
        //$this->form_validation->set_rules('txt_descricaoImovel', 'Descrição do Imóvel', 'trim|required');
        $this->form_validation->set_rules('txtCep', 'Cep', 'trim|required');
        $this->form_validation->set_rules('txtRua', 'Endereço', 'trim|required');
        $this->form_validation->set_rules('txtEstado', 'UF', 'required');
        $this->form_validation->set_rules('txtBairro', 'Bairro', 'required');
        $this->form_validation->set_rules('txtCidade', 'Cidade', 'required');
        $this->form_validation->set_rules('txtNumero', 'Número', 'required');
         $this->form_validation->set_rules('txt_imovelMobilia', 'Imóvel (n) mobiliado', 'required');
          $this->form_validation->set_rules('txt_tamanho', 'Tamanho(m2) ', 'required');
        $this->form_validation->set_rules('txt_numVagas', 'Num de vagas', 'required');
        $this->form_validation->set_rules('txt_numQuartos', 'Número de quartos', 'Trim|required');
        //$this->form_validation->set_rules('txtComplemento', 'Complemento','required');
          $this->form_validation->set_rules('txt_numBanheiro', 'Num de vagas', 'required');
        $this->form_validation->set_rules('txt_intImvlMobilia', 'Meus interesses(Imovel (n) mobiliado)', 'required');
        $this->form_validation->set_rules('txt_imovelMobilia', 'Imóvel (n) mobiliado', 'required');
        $this->form_validation->set_rules('txt_intTipoImovel', 'Meus interesses,Tipo imóvel', 'required');
        $this->form_validation->set_rules('txt_intEstados', 'Meus interesses,Estado', 'required');
        $this->form_validation->set_rules('txt_intMunicipios', 'Meus interesses(Municipio)', 'required');
         
            if($this->form_validation->run() == false){
                $dados["option_estados"] = $this->cadastrarimovel->selectEstados(); 
        $dados['tipoimovel'] = $this->cadastrarimovel->getTipoImovel()->result();
        $dados['apelidoimovel'] = $this->cadastrarimovel->getApelidoImovel()->result();
        $dados["tab_imoveis"] = $this->cadastrarimovel->getImovel()->result();
        $dados["tab_imoveis"] = $this->cadastrarimovel->getCadastro()->row();
        $dados["tab_usuario"] = $this->mmeuperfil->getCadastro()->row();
             $dados['titulo'] = 'Só Permuta - Atualizar imovel';         
             $this->load->view('v_atualizar_imovel', $dados);  

            }else{
                $this->cadastrarimovel->atualizar();
                $this->session->set_flashdata('msgAlerta', 'Dados atualizados com sucesso, fazer upload das imagens');
                redirect("atualizarimovel", 'refresh');
            }
                       
        }

       


       
         public function listaTipoImovel(){
        $this->load->model("M_Tipo_Imovel");
        $dados["tab_tipo_imovel"] = $this->M_Tipo_Imovel->listaTipoImovel()->result(); 

        $options = '';
            foreach ($tab_tipo_imoveis as $tab_tipo_imovel ){
                     $dados = $tab_tipo_imovel->tipo_imovel_id;
                     echo "<option value='$dados'>$tab_tipo_imovel->tipo_imovel</option>";
                   } 
            $dados["nome_view"] = "v_cadastrar_imovel";
        $this->load->view('CadastrarImovel', $dados);
    } 



    public function upload()
    {
        $dados['imoveis_id'] = $this->cadastrarimovel->getImovel()->row();
        $txt_imoveis_id  = isset($tab_imoveis->imoveis_id) ? $tab_foto_perfil->imoveis_id: ""; 
        $imoveis_id_bd = $_POST['txt_imoveis_id'];

      //$usuario_id = $this->session->userdata("usuario_id");
        if ( ! empty($_FILES)) 
        {
            $config["upload_path"]   = $this->upload_path;
            $config["allowed_types"] = "gif|jpg|png";
            $dados_form = $this->input->post();
            
            if(! empty($imoveis_id_bd)){

            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload("file")) {
                echo "failed to upload file(s)";
                redirect("v_cadastrar_imovel", 'refresh');
            }else{
                $dados_form = $this->input->post();
                $fileData = $this->upload->data();
                $uploadData['file_name'] = $fileData['file_name'];
                $uploadData['imoveis_id'] = $dados_form['txt_imoveis_id'];
                $uploadData['usuario_id'] = $dados_form['txt_usuario_id']; 
               //$uploadData['uploaded_on'] = date("Y-m-d H:i:s"); 
                $insert = $this->cadastrarimovel->insertImoveis($uploadData); 
                echo "Imagens salvo com sucesso!!";
                redirect("v_cadastrar_imovel", 'refresh');
            }

            }else{
                $this->session->set_flashdata('msgAlerta2', 'Cadastrar primeiro o Imóvel');
                redirect("v_cadastrar_imovel", 'refresh');
            }

            }
            
        
    }

public function uploadBeckup()
    {

      //$usuario_id = $this->session->userdata("usuario_id");
        if ( ! empty($_FILES)) 
        {
            $config["upload_path"]   = $this->upload_path;
            $config["allowed_types"] = "gif|jpg|png";
            $dados_form = $this->input->post();
            
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload("file")) {
                echo "failed to upload file(s)";
                redirect("v_cadastrar_imovel", 'refresh');
            }else{
                $dados_form = $this->input->post();
                $fileData = $this->upload->data();
                $uploadData['file_name'] = $fileData['file_name'];
                $uploadData['txt_imoveis_id'] = $dados_form['imoveis_id'];
                $uploadData['txt_usuario_id'] = $dados_form['usuario_id']; 
               //$uploadData['uploaded_on'] = date("Y-m-d H:i:s"); 
                $insert = $this->cadastrarimovel->insertImoveis($uploadData); 
                echo "Imagens salvo com sucesso!!";
                redirect("v_cadastrar_imovel", 'refresh');
            }
            }
            
        
    }






    public function remove()
    {
        $file = $this->input->post("file");
        if ($file && file_exists($this->upload_path . "/" . $file)) {
            unlink($this->upload_path . "/" . $file);
        }
    }

public function removeImage()
    {
        
        $this->cadastrarimovel->removeimg($file_name);
        if ($file && file_exists($this->upload_path . "/" . $file)) {
            unlink($this->upload_path . "/" . $file);
        }

        
    }


    public function list_files()
    {
        $this->load->helper("file");
        $files = get_filenames($this->upload_path);
        // we need name and size for dropzone mockfile
        foreach ($tab_imagem as &$file) {
            $file = array(
                'name' => $file,
                'size' => filesize($this->upload_path . "/" . $file)
            );
        }
        
            $dados['titulo'] = 'Só Permutaimovel- Cadastrar Imovel';
        $this->load->view('v_cadastrar_imovel', $dados);
        header("Content-type: text/json");
        header("Content-type: application/json");
        echo json_encode($files);
    }


//-------------------------------------Upload de imagens-------------------------------

 public function uploadImoveis(){ 
        $data = array(); 
        $errorUploadType = $statusMsg = ''; 
         
        // If file upload form submitted 
        if($this->input->post('fileSubmit')){ 
             
            // If files are selected to upload 
            if(!empty($_FILES['files']['name']) && count(array_filter($_FILES['files']['name'])) > 0){ 
                $filesCount = count($_FILES['files']['name']); 
                for($i = 0; $i < $filesCount; $i++){ 
                    $_FILES['file']['name']     = $_FILES['files']['name'][$i]; 
                    $_FILES['file']['type']     = $_FILES['files']['type'][$i]; 
                    $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i]; 
                    $_FILES['file']['error']     = $_FILES['files']['error'][$i]; 
                    $_FILES['file']['size']     = $_FILES['files']['size'][$i]; 
                     
                    // File upload configuration 
                    $uploadPath = './upload/imoveis'; 
                    $config['upload_path'] = $uploadPath; 
                    $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                    //$config['max_size']    = '100'; 
                    //$config['max_width'] = '1024'; 
                    //$config['max_height'] = '768'; 
                     
                    // Load and initialize upload library 
                    $this->load->library('upload', $config); 
                    $this->upload->initialize($config); 
                     
                    // Upload file to server 
                    if($this->upload->do_upload('file')){ 
                        // Uploaded file data 
                        $fileData = $this->upload->data(); 
                        $uploadData[$i]['file_name'] = $fileData['file_name']; 
                        $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s"); 
                    }else{  
                        $errorUploadType .= $_FILES['file']['name'].' | ';  
                    } 
                } 
                 
                $errorUploadType = !empty($errorUploadType)?'<br/>File Type Error: '.trim($errorUploadType, ' | '):''; 
                if(!empty($uploadData)){ 
                    // Insert files data into the database 
                    //$insert = $this->cadastrarimovel->insertImoveis($uploadData); 
                     
                    // Upload status message 
                    $statusMsg = $insert?'Files uploaded successfully!'.$errorUploadType:'Some problem occurred, please try again.'; 
                }else{ 
                    $statusMsg = "Sorry, there was an error uploading your file.".$errorUploadType; 
                } 
            }else{ 
                $statusMsg = 'Please select image files to upload.'; 
            } 
        } 
         
        // Get files data from the database 
        $dados['files'] = $this->cadastrarimovel->getRows(); 
         
        // Pass the files data to view 
        $dados['statusMsg'] = $statusMsg; 
        $dados['titulo'] = 'Só Permutaimovel- Cadastrar Imovel';
        $this->load->view('v_cadastrar_imovel', $dados);
    } 


    public function exluirImovel($txt_imoveis_id){
        // Check whether member id is not empty
         
        if($txt_imoveis_id){
            $imgData = $this->cadastrarimovel->getImageUser($txt_imoveis_id); 
            $delete = $this->cadastrarimovel->excluirImoveis($txt_imoveis_id);
            if($delete){    
                        if(!empty($ImageUser)){
                                      foreach($ImageUser as $key){
                                 unlink('upload/imoveis/'.$key['file_name']);
                       }
                   }                                                   
                  $this->session->set_flashdata('msgAlerta', 'Imoveis exluido com sucesso');
                  redirect("Meu_Perfil", 'refresh');
            }else{
                  $this->session->set_flashdata('msgAlerta2', 'Imóvel não excluido, tenta mais tarde');
            }
        }
        //echo $status;die; 
        // Redirect to the list page
        $dados['titulo'] = 'Só Permutaimovel- Cadastrar Imovel';
        $this->load->view('v_meu_perfil', $dados);
    }

    

      public function deleteImage(){ 
        $status  = 'err';  
        // If post request is submitted via ajax 
        if($this->input->post('id')){ 
            $id = $this->input->post('id'); 
            $imgData = $this->cadastrarimovel->getImagemImovel($id); 
             
            // Delete image data 
            $con = array('id' => $id); 
            $delete = $this->cadastrarimovel->deleteImage($con); 
             
            if($delete){ 
                // Remove files from the server  
                //unlink($this->upload_path . "/" . $file);
                @unlink('upload/imoveis/'.$imgData['file_name']);  
                $status = 'ok';  
            } 
        } 
        echo $status;die;  
    }

    public function getMunicipio(){
        $id_estado = $this->input->post("id_estado");
        sleep(1);
        echo $this->cadastrarimovel->selectMunicipio($id_estado);
    }



  

}

    


