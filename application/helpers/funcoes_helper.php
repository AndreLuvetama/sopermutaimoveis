<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(!function_exists('set_msg')):
	function set_msg($msg=NULL){
		$ci = & get_instance();
		$ci ->session->set_userdata('aviso', $msg);
	}
endif;
if(!function_exists('get_msg')):
	function get_msg($destroy=TRUE){
		$ci = & get_instance();
		$retorno = $ci->session->userdata('aviso');
		if($destroy) $ci ->session->unset_userdata('aviso');
		return $retorno;

	}
endif;
if(!function_exists('config_upload')):
	function config_upload($path= './upload/', $types = 'jpg|png', $size = 512){
		$config['upload_path'] = $path;
		$config['allowed_types'] = $types;
		$config['max_size'] = $size;
		  
		return $config;
	}
endif;

if(!function_exists('to_bd')):
	// decodifica o htmll para salvar no BD
	function to_bd($string=NULL){
		return html_entity_decode($string);
	}
endif;

if(!function_exists('to_html')):
	// decodifica o htmll e remoVEe barras invertida do conteudo
	function to_html($string=NULL){
		return html_entity_decode($string);
	}
endif;

if(!function_exists('resumo_post')):
	// gera um testo parcial apartir do conteudo de um post
	function resumo_post($string=NULL, $tamanho = 100){
		$string = to_html($string);
		$string = strip_tags($string);
		$tring = substr($string, 0, $tamanho);
		return $string;
	}
endif;


if(!function_exists('resumo_post1')):

function resumo_post1($string=NULL, $tamanho = 100) {
    if (strlen($string) > $tamanho)
        return substr($string, 0, $tamanho).'...';
    else
        return $string;
}
endif;

