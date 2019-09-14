<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __contruct(){
		parent::__contruct();
			$this->load->library('session');
			$this->load->model('Noticia_model');
		
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('main/index');
		  }
	}

	public function index(){
	
		$this->load->view('layouts/mainHeader');
		$this->load->view('home');
		$this->load->view('layouts/mainFooter');

	
	}

//*****************************Eventos****************************************** 
public function eventos()
{
	$this->load->view('layouts/mainHeader');
	$this->load->view('eventos/index');
	$this->load->view('layouts/mainFooter');
}

public function evento($id = null){
	$id = $this->db->escape((int) $id);
	$evento = $this->Evento_model->showEvento($id);

	$this->load->view('layouts/mainHeader');		
	$this->load->view('eventos/show', compact('evento'));
	$this->load->view('layouts/mainFooter');

}

public function getEventos(){
	$query = $this->Evento_model->getEventos();
	echo json_encode($query);
	
}


//****************************************************************************** 
 

//***************************Galerias***************************************

	public function galerias(){
		$rs = $this->Galeria_model->listGaleria();
		$this->load->view('layouts/mainHeader');
		$this->load->view('galerias/index', ['rs' => $rs]);
		$this->load->view('layouts/mainFooter');

	}

	public function galeria($idGaleria = null){
		$idGaleria = $this->db->escape((int) $idGaleria);
		$galeria = $this->Galeria_model->showGaleria($idGaleria);

		$this->load->view('layouts/mainHeader');		
		$this->load->view('galerias/show', compact('galeria'));
		$this->load->view('layouts/mainFooter');

	}
//**************************************************************************

	
//***************************Notiicias**************************************

	public function noticias(){
		$rs = $this->Noticia_model->listNoticia();
		$this->load->view('layouts/mainHeader');
		$this->load->view('noticias/index', ['rs' => $rs]);
		$this->load->view('layouts/mainFooter');

	}

	public function noticia($idNoticia = null){
		$idNoticia = $this->db->escape((int) $idNoticia);
		$noticia = $this->Noticia_model->editNoticia($idNoticia);

		$this->load->view('layouts/mainHeader');		
		$this->load->view('noticias/show', compact('noticia'));
		$this->load->view('layouts/mainFooter');

	}
//**************************************************************************


//******************************grupo***************************************

	public function grupos(){
		$rs = $this->Grupo_model->listGrupo();
		$this->load->view('layouts/mainHeader');
		$this->load->view('grupos/index', ['rs' => $rs]);
		$this->load->view('layouts/mainFooter');

	}

	public function grupo($idGrupo = null){
		$idGrupo = $this->db->escape((int) $idGrupo);
		$grupo = $this->Grupo_model->editGrupo($idGrupo);

		$this->load->view('layouts/mainHeader');
		$this->load->view('grupos/show', compact('grupo'));
		$this->load->view('layouts/mainFooter');

	}
//**************************************************************************


//******************************Clasificado*********************************


	public function clasificados(){
		$rs = $this->Clasificado_model->listClas();

		$this->load->view('layouts/mainHeader');
		$this->load->view('clasificados/index', ['rs' => $rs]);
		$this->load->view('layouts/mainFooter');

	}


	public function clasificado($idClasificado = null){
		$idClasificado = $this->db->escape((int) $idClasificado);
		$clasificado = $this->Clasificado_model->showClasificado($idClasificado);

		$this->load->view('layouts/mainHeader');
		$this->load->view('clasificados/show', compact('clasificado'));
		$this->load->view('layouts/mainFooter');
	}
//**************************************************************************





	public function contactanos(){
		$this->load->view('layouts/mainHeader');
		$this->load->view('contactos/contacto');
		$this->load->view('layouts/mainFooter');
	}
	
	public function saveContacto(){
		$this->Contacto_model->saveContacto();
	}

	public function contactUser(){
		$this->Contacto_model->contactUser();	
		redirect('main/clasificados');
	}
 
	
}
