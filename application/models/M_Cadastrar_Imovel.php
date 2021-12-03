<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Cadastrar_Imovel extends CI_Model {
	
		public function getCadastro(){
		$usuario_id = $this->session->userdata("usuario_id");
		return $this->db->where("usuario_id", $usuario_id)->get("tab_usuario");
		
	}
         

	
	public function salvar()
	{
	
				//$det_vaga = $this->input->post('detalhesImovel');
				$txt_imoveis_id       = $this->input->post("txt_imoveis_id");
		        $usuario_id            = $this->input->post("txt_usuario_id");
				$nomeImovel            = $this->input->post("txt_nomeImovel");
				$descricaoImovel       = $this->input->post("txt_descricaoImovel");
				$cepImovel             = $this->input->post("txtCep");
				$enderecoImovel        = $this->input->post("txtRua");
				$estadoImovel          = $this->input->post("txtEstado");
				$cidadeImovel          = $this->input->post("txtCidade");
				$bairroImovel          = $this->input->post("txtBairro");
				$ruaImovel             = $this->input->post("txtRua");
				$estadoImovel          = $this->input->post("txtEstado");
				$numero                = $this->input->post("txtNumero");
				$tipoImovel            = $this->input->post("txt_tipoImovel");
				$apelidoImovel         = $this->input->post("txt_apelidoImovel");
				$det_tvCabo            = $this->input->post("txt_tvCabo");
				$det_piscina           = $this->input->post("txt_piscina");
				$det_wifi              = $this->input->post("txt_wifi");
				$det_vaga              = $this->input->post("txt_vaga");
				$det_academia          = $this->input->post("txt_academia");
				$det_arCondicionado    = $this->input->post("txt_arCondicionado");
				$det_suite             = $this->input->post("txt_suite");
				$det_churrasqueira     = $this->input->post("txt_churrasqueira");
				$tamanho               = $this->input->post("txt_tamanho");
				$mensagemImovel        = $this->input->post("txtarea_mensagemImovel");
				$num_suites            = $this->input->post("txt_numSuites");
				$num_vagas             = $this->input->post("txt_numVagas");
				$num_quartos           = $this->input->post("txt_numQuartos");
				$complemento           = $this->input->post("txtComplemento");
				$areaTerrea            = $this->input->post("txt_areaTerrea");
				$num_banheiro          = $this->input->post("txt_numBanheiro");
				$imovelMobilia         = $this->input->post("txt_imovelMobilia");
				$intImvlMobilia   	   = $this->input->post("txt_intImvlMobilia");
				$intTipoImovel   	   = $this->input->post("txt_intTipoImovel");
				$intMunicipios   	   = $this->input->post("txt_intMunicipios");
				$intEstados   	       = $this->input->post("txt_intEstados");
				       
		//passar as variaveis para o array
	$formData = array(
		        "usuario_id"			    => $usuario_id,
			   "nomeImovel"	            => $nomeImovel,
				"cepImovel"				=> $cepImovel,
				"descricaoImovel" 		=> $descricaoImovel,
				"ruaImovel"		        => $ruaImovel,
				 "estadoImovel" 		=> $estadoImovel,
				"numero"				=> $numero,  
				"cidadeImovel"			=> $cidadeImovel,              
				"bairroImovel"			=> $bairroImovel,          
				"enderecoImovel"        => $enderecoImovel,
				"estadoImovel"          => $estadoImovel,
				"tipoImovel"            => $tipoImovel,
				"apelidoImovel"         => $apelidoImovel,
				"det_vaga"              => $det_vaga,
				"det_tvCabo"            => $det_tvCabo,
				"det_piscina"           => $det_piscina,
				"det_wifi"              => $det_wifi,
				"det_vaga" 				=> $det_vaga, 
				"det_academia" 			=> $det_academia,
				"det_arCondicionado" 	=> $det_arCondicionado,
				"det_suite" 			=> $det_suite,
				"det_churrasqueira" 	=> $det_churrasqueira,
				"tamanho" 			    => $tamanho,
				"mensagemImovel"        => $mensagemImovel,
				"num_suites" 		    => $num_suites,
				"num_vagas" 			=> $num_vagas, 
				"num_quartos" 			=> $num_quartos, 
				"complemento" 			=> $complemento,
				"areaTerrea"			=> $areaTerrea,
				"num_banheiro"   		=> $num_banheiro,
				"imovelMobilia"   		=> $imovelMobilia,
				"intImvlMobilia"   		=> $intImvlMobilia,
				"intTipoImovel"   		=> $intTipoImovel,
				"intMunicipios"   		=> $intMunicipios,
				"intEstados"   		    => $intEstados
				        
				);

		       
				$usuario_iddb = $this->session->userdata("usuario_id");
				if(empty($txt_imoveis_id) || $txt_imoveis_id =='' )
				{	
					
					  $this->db->insert("tab_imoveis",$formData);

				}
				else {
				$this->db->where("tab_imoveis.id  ", $txt_imoveis_id);
					unset($usuario_id, $txt_imoveis_id);
					
					 return $this->db->update("tab_imoveis", $formData);
				}

				$imoveis_id = $this->db->insert_id($formData);
}


public function atualizar()
	{
	
		
			
	$formData = array(
		      "usuario_id"			    => $this->input->post("txt_usuario_id"),
			   "nomeImovel"	            => $this->input->post("txt_nomeImovel"),
				"cepImovel"				=> $this->input->post("txtCep"),
				"descricaoImovel" 		=> $this->input->post("txt_descricaoImovel"),
				"ruaImovel"		        => $this->input->post("txtRua"),
				 "estadoImovel" 		=> $this->input->post("txtEstado"),
				"numero"				=> $this->input->post("txtNumero"),
				"cidadeImovel"			=> $this->input->post("txtCidade"),             
				"bairroImovel"			=> $this->input->post("txtBairro"),        
				"enderecoImovel"        => $this->input->post("txtRua"),
				"estadoImovel"          => $this->input->post("txtEstado"),
				"tipoImovel"            => $this->input->post("txt_tipoImovel"),
				"apelidoImovel"         => $this->input->post("txt_apelidoImovel"),
				"det_vaga"              => $this->input->post("txt_vaga"),
				"det_tvCabo"            => $this->input->post("txt_tvCabo"),
				"det_piscina"           => $this->input->post("txt_piscina"),
				"det_wifi"              => $this->input->post("txt_wifi"),
				"det_vaga" 				=> $this->input->post("txt_vaga"), 
				"det_academia" 			=> $this->input->post("txt_academia"),
				"det_arCondicionado" 	=> $this->input->post("txt_arCondicionado"),
				"det_suite" 			=> $this->input->post("txt_suite"),
				"det_churrasqueira" 	=> $this->input->post("txt_churrasqueira"),
				"tamanho" 			    => $this->input->post("txt_tamanho"),
				"mensagemImovel"        => $this->input->post("txtarea_mensagemImovel"),
				"num_suites" 		    => $this->input->post("txt_numSuites"),
				"num_vagas" 			=> $this->input->post("txt_numVagas"),
				"num_quartos" 			=> $this->input->post("txt_numQuartos"),
				"complemento" 			=> $this->input->post("txtComplemento"),
				"areaTerrea"			=> $this->input->post("txt_areaTerrea"),
				"num_banheiro"   		=> $this->input->post("txt_numBanheiro"),
				"imovelMobilia"   		=> $this->input->post("txt_imovelMobilia"),
				"intImvlMobilia"   		=> $this->input->post("txt_intImvlMobilia"),
				"intTipoImovel"   		=> $this->input->post("txt_intTipoImovel"),
				"intMunicipios"   	    => $this->input->post("txt_intMunicipios"),
				"intEstados"   	        => $this->input->post("txt_intEstados"),
				        
				);

		 			$usuario_iddb = $this->session->userdata("usuario_id");
					$this->db->where("usuario_id", $usuario_iddb);
					unset($usuario_id, $txt_imoveis_id);
					
					 return $this->db->update("tab_imoveis", $formData);

			
        } 



public function insertImoveis($data = array()){ 
	  $usuario_logado_id = $this->session->userdata("usuario_id");
	  $usuario_id  = $this->input->post("txt_usuario_id");
	  $imoveis_id  = $this->input->post("txt_imoveis_id");

	  if(($usuario_id == $usuario_logado_id) && (!$imoveis_id == $txt_imoveis_id))
				{	
				 $insert = $this->db->insert('tab_imagem',$data); 
        				return $insert?true:false; 

				}
       
    } 

   	public function getImovel(){
		$usuario_id = $this->session->userdata("usuario_id");
		$this->db->from("tab_imoveis");
		$this->db->where("usuario_id", $usuario_id);
		return $this->db->get();
		
	}
				

   //buscar apelido do imóvel
   	public function getTipoImovel(){
		$this->db->select('descricao');
		$this->db->from('tab_tipo_imovel');
		return $this->db->get();
		
	}
	
	
			public function getApelidoImovel(){
		$this->db->select('descricao');
		$this->db->from('tab_apelido_imovel');
		return $this->db->get();
		
	}


     public function getEstados(){
		$this->db->select('*');
		$this->db->from('estado');
		return $this->db->get();
		
	}
   public function getAll(){
		return $this->db
		  ->order_by('Nome')
		   ->get('estado');
		
	}

// busca estados cadastrados

	public function selectEstados(){
		$options = "<option value= ''> selecione o estado</option>";
		$estado = $this->getAll();
		foreach($estado -> result() as $estados) {
			$options .= "<option value = '{$estados->Id}'-'{$estados->Nome}'> {$estados->Nome}</option>";
		}
		return $options;
	}
	 

	public function getMunicipioByEstados($id_estado = null){
		return $this->db
		         ->where('id_estado', $id_estado)
		         ->order_by('Nome')
		         ->get('municipio');
	}

	public function selectMunicipio($id_estado = null){
		$municipios = $this->getMunicipioByEstados($id_estado);
		$total_municipios= $municipios->num_rows();
		$options = "<option>selecione os municipios({$total_municipios})</option>";
		foreach ($municipios ->result() as $municipio) {
			$options .= "<option value = '{$municipio->Nome}'>$municipio->Nome</option>";
		}

		return $options;

	}

	

    public function getImgRow($id){ 
        $this->db->select('*'); 
        $this->db->from('files'); 
        $this->db->where('id', $id); 
        $query  = $this->db->get(); 
        return ($query->num_rows() > 0)?$query->row_array():false; 
    } 
    

public function getImagemImovel($id= ''){ 
    	$usuario_id = $this->session->userdata("usuario_id");
        $this->db->select('id,file_name,uploaded_on'); 
        $this->db->from('tab_imagem');  
        $this->db->where('usuario_id',$usuario_id);      
        if($id){ 
            $this->db->where('id',$id); 
            $query = $this->db->get(); 
            $result = $query->row_array(); 
        }else{ 
            $this->db->order_by('uploaded_on','desc'); 
            $query = $this->db->get(); 
            $result = $query->result_array(); 
        } 
         
        return !empty($result)?$result:false; 
    }




public function removeimg($file_name)
	{
		$this->db->where( 'file_name', $file_name);
		$this->db->delete('files');
		
		return $this->db->get();
	}


  public function deleteImage($con){ 
        // Delete image data 
        $delete = $this->db->delete('tab_imagem', $con); 
         
        // Return the status 
        return $delete?true:false; 
    }

 public function getImageUser1($txt_imoveis_id= ''){ 
       $this->db->select("file_name");
       $this->db->from("tab_imagem");
       $this->db->where("imoveis_id", $txt_imoveis_id);
       return $this->db->get();
          }



          public function getImageUser($id= ''){ 
    	$usuario_id = $this->session->userdata("usuario_id");
        $this->db->select('id,file_name,uploaded_on'); 
        $this->db->from('tab_imagem');  
        $this->db->where('usuario_id',$usuario_id);      
        if($id){ 
            $this->db->where('id',$id); 
            $query = $this->db->get(); 
            $result = $query->row_array(); 
        }else{ 
            $this->db->order_by('uploaded_on','desc'); 
            $query = $this->db->get(); 
            $result = $query->result_array(); 
        } 
         
        return !empty($result)?$result:false; 
    }





    public function getImagesingle($id= ''){ 
       $usuario_id = $this->session->userdata("usuario_id");
       $this->db->select("file_name, uploaded_on");
       $this->db->from("tab_imagem");
       $this->db->where("tab_imagem.usuario_id", $usuario_id);
       $this->db->order_by('tab_imagem.id', 'desc');
      $this->db->limit(1);
       return $this->db->get();

    }

    public function excluirImoveis($txt_imoveis_id){
           $this->db->trans_start();
           $delete = $this->db->delete('tab_imoveis', array('id' => $txt_imoveis_id));
           $delete = $this->db->delete('tab_imagem', array('imoveis_id' => $txt_imoveis_id));
        

       $delete= $this->db->trans_complete();
         return $delete?true:false;
       // $delete = $this->db->get();
    }

    public function getUsuarioImovel(){
    	$this->db->select('*');
    	$this->db->from("tab_imoveis");
    	$this->db->join("tab_usuario", "tab_usuario.usuario_id = tab_imoveis.usuario_id");
    	$this->db->order_by("nomeUsuario");
            return $this->db->get();

    }

 
    function __construct() { 
        $this->galleryTbl   = 'tab_imoveis'; 
        $this->imgTbl = 'tab_imagem'; 
         $this->tableName = 'tab_imagem'; 
    } 

  
 public function getImoveisdeInteresse($id=''){
	 $usuario_id = $this->session->userdata("usuario_id");
		$this->db->select("*, (SELECT file_name FROM ".$this->imgTbl." WHERE imoveis_id = ".$this->galleryTbl.".id 
		 ORDER BY id DESC LIMIT 1) as default_image"); 

		 $this->db->from($this->galleryTbl); 
        if($id){ 
            $this->db->where('id', $id); 
             $this->db->where('tipoImovel', $tipoImovel,'num_suites', $num_suites, 'det_wifi', $det_wifi,
         'num_quartos', $num_quartos,'num_vagas', $num_vagas, 'det_wifi', $det_wifi); 


            $query  = $this->db->get(); 
            $result = ($query->num_rows() > 0)?$query->row_array():array(); 
             
            if(!empty($result)){ 
                $this->db->select('*'); 
                $this->db->from($this->imgTbl); 
                $this->db->where('imoveis_id', $result['id']);
                $this->db->order_by('id', 'desc'); 
                $query  = $this->db->get(); 
                $result2 = ($query->num_rows() > 0)?$query->result_array():array(); 
                $result['images'] = $result2;  
            }  
        }else{ 
            $this->db->order_by('id', 'desc'); 
            $query  = $this->db->get(); 
            $result = ($query->num_rows() > 0)?$query->result_array():array(); 
        } 
         
        // return fetched data 
        return !empty($result)?$result:false; 
      

	}


	public function getImoveisdeInteresse1(){
		 $this->db->from("tab_imoveis");
		 $this->db->join("tab_imagem", "tab_imagem.imoveis_id = tab_imoveis.id");
         $this->db->order_by("tab_imagem.id", "desc");
		  
		   $query  = $this->db->get(); 
            $result = ($query->num_rows() > 0)?$query->row_array():array(); 		
	}








    public function get_singleImovel($id=0){
    	 $this->db->from("tab_usuario");
		 $this->db->join("tab_cad_pessoa", "tab_cad_pessoa.cad_pessoa_id = tab_usuario.cad_pessoa_id");
		 $this->db->join("tab_imoveis", "tab_imoveis.usuario_id = tab_usuario.usuario_id");
		
		$this->db->where('id',$id);
		$query = $this->db->get();

			if($query->num_rows() == 1):
				$row = $query->row();
				return $row;
			else:
				return NULL;
			endif;

		}



    public function get_singleImovel1($id=0){
			$this->db->where('id',$id);
			$query = $this->db->get('tab_imoveis', 1);

			if($query->num_rows() == 1):
				$row = $query->row();
				return $row;
			else:
				return NULL;
			endif;

		}

		public function carroselImg(){ 
        $this->db->select('*'); 
        $this->db->from("tab_imagem"); 
         $query = $this->db->get(); 
        $result = $query->result_array();  
         return !empty($result)?$result:false; 
    } 
     public function totalimg(){ 
        $this->db->select('*'); 
        $this->db->from("tab_imagem");
        $query = $this->db->get();  
        return $query->num_rows();
    } 

   

    public function countAllImoveis(){
    	$this->db->select('*'); 
        $this->db->from("tab_imoveis");
        $query = $this->db->get();  
        return $query->num_rows();
    }

   
    

 }



