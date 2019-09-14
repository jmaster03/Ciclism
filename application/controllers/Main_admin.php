<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Main_admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		if ($this->session->userdata('logged_in') !== TRUE) {
			redirect('auth/loginReg');
		}
	}
	//*****************************inicio Admin***************************************** 


	public function index($idSlider = null)
	{
		if ($this->session->userdata('tipo') === '43') {
		$idSlider = 43;
		$slider = $this->Slider_model->editSlider($idSlider);

	
			$this->load->view('layouts/adminHeader');
			$this->load->view('admin/index', compact('slider'));
			$this->load->view('layouts/adminFooter');
		} else {
			echo "acceso denegado";
		}
	}

	public function updateSlider()
	{

		$slider = array(
			"idSlider" => $this->input->post("idSlider"),
			"slider_1" => $this->input->post("slider_1"),
			"text_1" => $this->input->post("text_1"),
			'slider_2' => $this->input->post('slider_2'),
			'text_2' => $this->input->post('text_2'),
			'slider_3' => $this->input->post('slider_3'),
			'text_3' => $this->input->post('text_3'),


		);
		$this->Slider_model->updateSlider($slider);
		redirect('main_admin/index');
	}


	public function adminInfo($idSession = null)
	{
		$idSession = $this->session->userdata('idUsuario');
		$usuario = $this->Usuario_model->editUsuario((int) $idSession);

		$this->load->view('layouts/adminHeader');
		$this->load->view('admin/personal/index', compact('usuario'));
		$this->load->view('layouts/adminFooter');
	}

	//*****************************Clasificados************************************



	public function clasificados()
	{
		$rs = $this->Clasificado_model->listClasificado();

		$this->load->view('layouts/adminHeader');
		$this->load->view('admin/clasificados/index', ['rs' => $rs]);
		$this->load->view('layouts/adminFooter');
	}

	public function showClasificado($idClasificado = null)
	{
		$idClasificado = $this->db->escape((int) $idClasificado);
		$clasificado = $this->Clasificado_model->showClasificado($idClasificado);

		$this->load->view('layouts/adminHeader');
		$this->load->view('admin/clasificados/show', compact('clasificado'));
		$this->load->view('layouts/adminFooter');
	}

	public function delClasificado($idClasificado)
	{
		$this->Clasificado_model->delClasificado($idClasificado);
		redirect('main_admin/clasificados/index');

	}
	//*****************************************************************************


	//*****************************usuarios***************************************** 

	public function usuarios()
	{
		$idSession = $this->session->userdata('idUsuario');
		$rs = $this->Usuario_model->listUsuario($idSession);
		$this->load->view('layouts/adminHeader');
		$this->load->view('admin/usuarios/index', ['rs' => $rs]);
		$this->load->view('layouts/adminFooter');
	}

	public function nuevoUsuario()
	{
		$this->load->view('layouts/adminHeader');
		$this->load->view('admin/usuarios/create');
		$this->load->view('layouts/adminFooter');
	}

	public function saveUsuario()
	{
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('cedula', 'Cedula', 'required');
		$this->form_validation->set_rules('correo', 'Correo', 'required|callback_check_correo_exist');
		$this->form_validation->set_rules('password', 'Contraseña', 'required');
		$this->form_validation->set_rules('password2', 'contraseña', 'matches[password]');

		if ($this->form_validation->run() === FALSE) {
			// Set message
			$this->session->set_flashdata('fail_reg', 'Proceso de registro incorrecto');
			redirect('main_admin/nuevoUsuario');

			//	$this->load->view('auth/loginReg');
		} else {
			// Encrypt password
			$enc_password = md5($this->input->post('password'));
			$this->Usuario_model->saveUsuario($enc_password);

			// Set message
			$this->session->set_flashdata('reg_Succeess', 'Registro exitoso!! ya puedes iniciar sesion');
			redirect('main_admin/usuarios');
		}
	}



	//*****************************************Check*********************************
	function check_correo_exist($correo)
	{

		$this->form_validation->set_message('check_correo_exist', 'El correo electronico ya existe en nuestra base de datos');

		if ($this->Usuario_model->check_correo_exist($correo)) {
			return true;
		} else {
			return false;
		}
	}

	function check_cedula_exist($cedula)
	{

		$this->form_validation->set_message('check_cedula_exist', 'Existe alguien registrado con esa cedula');

		if ($this->Usuario_model->check_cedula_exist($cedula)) {
			return true;
		} else {
			return false;
		}
	}
	//*******************************************************************************

	public function delUsuario($idUsuario)
	{
		$this->Usuario_model->delUsuario($idUsuario);
	}

	public function editUsuario($idUsuario = null)
	{
		$idUsuario = $this->db->escape((int) $idUsuario);
		$usuario = $this->Usuario_model->editUsuario($idUsuario);

		$this->load->view('layouts/adminHeader');
		$this->load->view('admin/usuarios/edit', compact('usuario'));
		$this->load->view('layouts/adminFooter');
	}

	public function updateUsuario()
	{
		$this->load->library('form_validation');

		$usuario = array(
			"idUsuario" => $this->input->post("idUsuario"),
			"cedula" => $this->input->post("cedula"),
			"correo" => $this->input->post("correo"),
			"nombre" => $this->input->post("nombre"),
			"cedula" => $this->input->post("cedula"),
			"apellido" => $this->input->post("apellido"),
			"fecha_Naci" => $this->input->post("fecha_Naci"),
			"grupo" => $this->input->post("grupo"),
			"cedula" => $this->input->post("cedula"),
			"tipo" => $this->input->post("tipo"),
			"password" =>  md5($this->input->post('password')),
		);
		$this->Usuario_model->updateUsuario($usuario);
		redirect('main_admin/usuarios');
	}

	//****************************************************************************** 


	//*****************************grupos****************************************** 

	public function grupos()
	{
		$rs = $this->Grupo_model->listGrupo();

		$this->load->view('layouts/adminHeader');
		$this->load->view('admin/grupos/index', ['rs' => $rs]);
		$this->load->view('layouts/adminFooter');
	}

	public function nuevoGrupo()
	{
		$this->load->view('layouts/adminHeader');
		$this->load->view('admin/grupos/create');
		$this->load->view('layouts/adminFooter');
	}

	public function saveGrupo()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nombre_g', 'Titulo', 'required');
		$this->form_validation->set_rules('descripcion_g', 'Descripcion', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('layouts/adminHeader');
			$this->load->view('admin/grupos/create');
			$this->load->view('layouts/adminFooter');
		} else {
			//Subir imagen
			$config['upload_path'] = './files/img/grupos';
			$config['allowed_types'] = 'png|jpg|gif';
			$config['max_size'] = '2048';


			$this->load->library('upload', $config);

			if (!$this->upload->do_upload()) {
				$error = array('error' => $this->upload->display_errors());
				$imagen = 'noimage.jpg';
			} else {
				$data = array('upload_data' => $this->upload->data());
				$logo_g = $_FILES['userfile']['name'];
			}

			$this->Grupo_model->saveGrupo($logo_g);
		}
	}


	public function delGrupo($idGrupo)
	{
		$this->Grupo_model->delGrupo($idGrupo);
	}


	public function editGrupo($idGrupo = null)
	{
		$idGrupo = $this->db->escape((int) $idGrupo);
		$grupo = $this->Grupo_model->editGrupo($idGrupo);

		$this->load->view('layouts/adminHeader');
		$this->load->view('admin/grupos/edit', compact('grupo'));
		$this->load->view('layouts/adminFooter');
	}

	public function updateGrupo()
	{
		$this->load->library('form_validation');

		$config['upload_path']          = './files/img/grupos';
		$config['allowed_types']        = 'gif|jpg|png';

		$this->load->library('upload', $config);

		$this->upload->do_upload();
		$dataa = array('upload_data' =>  $this->upload->data());

		$grupo = array(
			"idGrupo" => $this->input->post("idGrupo"),
			"nombre_g" => $this->input->post("nombre_g"),
			"foto_g" => $this->input->post("foto_g"),
			"ubicacion_g" => $this->input->post("ubicacion_g"),
			"descripcion_g" => $this->input->post("descripcion_g"),
			'logo_g' => $dataa['upload_data']['file_name']
		);
		$this->Grupo_model->updateGrupo($grupo);
		redirect('main_admin/grupos');
	}



	//******************************************************************************


	//*****************************Galerias*****************************************
	public function galerias()
	{
		$rs = $this->Galeria_model->listGaleria();

		$this->load->view('layouts/adminHeader');
		$this->load->view('admin/galerias/index', ['rs' => $rs]);
		$this->load->view('layouts/adminFooter');
	}

	public function nuevaGaleria()
	{
		$this->load->view('layouts/adminHeader');
		$this->load->view('admin/galerias/create');
		$this->load->view('layouts/adminFooter');
	}

	public function saveGaleria()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nombre_ga', 'Titulo', 'required');
		$this->form_validation->set_rules('descripcion_ga', 'Descripcion', 'required');

		$idSession = $this->session->userdata('idUsuario');

		$this->Galeria_model->saveGaleria($idSession);
	}

	public function delGaleria($idGaleria)
	{
		$this->Galeria_model->delGaleria($idGaleria);
	}

	public function editGaleria($idGaleria = null)
	{
		$idGaleria = $this->db->escape((int) $idGaleria);
		$galeria = $this->Galeria_model->editGaleria($idGaleria);

		$this->load->view('layouts/adminHeader');
		$this->load->view('admin/galerias/edit', compact('galeria'));
		$this->load->view('layouts/adminFooter');
	}

	public function updateGaleria()
	{
		$this->load->library('form_validation');


		$galeria = array(
			"idGaleria" => $this->input->post("idGaleria"),
			"nombre_ga" => $this->input->post("nombre_ga"),
			"descripcion_ga" => $this->input->post("descripcion_ga"),
			'foto1_ga' => $this->input->post('foto1_ga'),
			'foto2_ga' => $this->input->post('foto2_ga'),
			'foto3_ga' => $this->input->post('foto3_ga'),
			'foto4_ga' => $this->input->post('foto4_ga'),
			'foto5_ga' => $this->input->post('foto5_ga'),
			'foto6_ga' => $this->input->post('foto6_ga'),
			'foto7_ga' => $this->input->post('foto7_ga'),
			'foto8_ga' => $this->input->post('foto8_ga'),

		);
		$this->Galeria_model->updateGaleria($galeria);
		redirect('main_admin/galerias');
	}

	//******************************************************************************


	//*****************************Eventos****************************************** 
	public function eventos()
	{
		$rs = $this->Evento_model->listEvento();

		$this->load->view('layouts/adminHeader');
		$this->load->view('admin/eventos/index', ['rs' => $rs]);
		$this->load->view('layouts/adminFooter');
	}

	public function nuevoEvento()
	{
		$this->load->view('layouts/adminHeader');
		$this->load->view('admin/eventos/create');
		$this->load->view('layouts/adminFooter');
	}

	public function saveEvento()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Titulo', 'required');
		$this->Evento_model->saveEvento();
	}

	public function editEvento($id = null)
	{
		$id = $this->db->escape((int) $id);
		$evento = $this->Evento_model->editEvento($id);

		$this->load->view('layouts/adminHeader');
		$this->load->view('admin/eventos/edit', compact('evento'));
		$this->load->view('layouts/adminFooter');
	}


	public function updateEvento()
	{
		$this->load->library('form_validation');


		$evento = array(
			"id" => $this->input->post("id"),
			"title" => $this->input->post("title"),
			"start" => $this->input->post("start"),
			"end" => $this->input->post("end"),
			"h_inicio" => $this->input->post("h_inicio"),
			"h_fin" => $this->input->post("h_fin"),
			"description" => $this->input->post("description"),
			"organizador_e" => $this->input->post("organizador_e"),
			"lat" => $this->input->post("lat"),
			"lng" => $this->input->post("lng"),

		);
		$this->Evento_model->updateEvento($evento);
		redirect('main_admin/eventos');
	}

	public function delEvento($id)
	{
		$this->Evento_model->delEvento($id);
	}


	//****************************************************************************** 


	//*****************************Noticias***************************************** 
	public function noticias()
	{
		$rs = $this->Noticia_model->listNoticia();

		$this->load->view('layouts/adminHeader');
		$this->load->view('admin/noticias/index', ['rs' => $rs]);
		$this->load->view('layouts/adminFooter');
	}

	public function nuevaNoticia()
	{
		$this->load->view('layouts/adminHeader');
		$this->load->view('admin/noticias/create');
		$this->load->view('layouts/adminFooter');
	}

	public function saveNoticia()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nombre_n', 'Titulo', 'required');
		$this->form_validation->set_rules('descripcion_n', 'Descripcion', 'required');
		$this->form_validation->set_rules('body_n', 'Texto', 'required');

		$idSession = $this->session->userdata('idUsuario');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('layouts/adminHeader');
			$this->load->view('admin/noticias/create');
			$this->load->view('layouts/adminHeader');
		} else {
			//Subir imagen
			$config['upload_path'] = './files/img/noticias';
			$config['allowed_types'] = 'png|jpg|gif';
			$config['max_size'] = '2048';


			$this->load->library('upload', $config);

			if (!$this->upload->do_upload()) {
				$error = array('error' => $this->upload->display_errors());
				$imagen = 'noimage.jpg';
			} else {
				$data = array('upload_data' => $this->upload->data());
				$foto_n = $_FILES['userfile']['name'];
			}

			$this->Noticia_model->saveNoticia($foto_n, $idSession);
		}
	}

	public function delNoticia($idNoticia)
	{
		$this->Noticia_model->delNoticia($idNoticia);
	}

	public function editNoticia($idNoticia = null)
	{
		$idNoticia = $this->db->escape((int) $idNoticia);
		$noticia = $this->Noticia_model->editNoticia($idNoticia);

		$this->load->view('layouts/adminHeader');
		$this->load->view('admin/noticias/edit', compact('noticia'));
		$this->load->view('layouts/adminFooter');
	}

	public function updateNoticia()
	{
		$this->load->library('form_validation');

		$config['upload_path']          = './files/img/noticias';
		$config['allowed_types']        = 'gif|jpg|png';

		$this->load->library('upload', $config);

		$this->upload->do_upload();
		$dataa = array('upload_data' =>  $this->upload->data());

		$noticia = array(
			"idNoticia" => $this->input->post("idNoticia"),
			"nombre_n" => $this->input->post("nombre_n"),
			"descripcion_n" => $this->input->post("descripcion_n"),
			"body_n" => $this->input->post("body_n"),
			'foto_n' => $dataa['upload_data']['file_name']
		);
		$this->Noticia_model->updateNoticia($noticia);
		redirect('main_admin/noticias');
	}
	// *****************************************************************************


	//****************************Contactos*******************************************
	public function contactos()
	{
		$rs = $this->Contacto_model->listContacto();

		$this->load->view('layouts/adminHeader');
		$this->load->view('admin/contactos/index', ['rs' => $rs]);
		$this->load->view('layouts/adminFooter');
	}
	public function delContacto($idContacto)
	{
		$this->Contacto_model->delContacto($idContacto);
	}
	//********************************************************************************
}

/* End of file Main_admin.php */
