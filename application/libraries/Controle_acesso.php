<?php

 	class Controle_acesso{
 		public function controlar(){
 		   $CI = get_instance();                       
                $nomeUsuario = $CI->session->userdata("nomeUsuario");
                if(empty($nomeUsuario)){                	
                	redirect(base_url("login"));
                	
                   
                }
 		}	

 	}


