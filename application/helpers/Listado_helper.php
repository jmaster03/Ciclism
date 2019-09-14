<?php 


class Listado {
    static function listadoGrupo(){
        $CI =& get_instance();
        $rs = $CI->db->get('grupos')->result(); 
        return $rs;
   }

   static function listadoNoticia(){
	$CI =& get_instance();
	$rs = $CI->db->get('noticias')->result(); 
	return $rs;
	}

	static function listadoClasificado(){
		$CI =& get_instance();
		$rs = $CI->db->get('clasificados')->result(); 
		return $rs; 
	}

	static function listadoEvento(){
		$CI =& get_instance();
		$rs = $CI->db->get('eventos')->result(); 
		return $rs;
	}
	
	static function listadoGaleria(){
		$CI =& get_instance();
		$rs = $CI->db->get('galerias')->result(); 
		return $rs;
	}



   static function countContactos(){
	$CI =& get_instance();
	$query = "SELECT count(contactos.idContacto) as mensajes FROM contactos";
	$result = $CI->db->query($query); 
	return $result->row()->mensajes;
	}

	static function countEventos(){
		$CI =& get_instance();
		$rs = $CI->db->get('grupos')->result(); 
		return $rs;
	}

	static function getSlider($idSlider){
		$CI =& get_instance();
		$CI->db->where('idSlider',$idSlider);
		$res =  $CI->db->get('sliders')->result(); 
		return $res;
   }

}
