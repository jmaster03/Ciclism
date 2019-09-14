<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Main_usuario extends CI_Controller
{

	function __contruct()
	{
		parent::__contruct();
		$this->load->library('session');
		$this->load->model('Clasificado_model');
		$this->load->library('form_validation');
		$this->load->model('Grupo_model');



		if ($this->session->userdata('logged_in') !== TRUE) {
			redirect('main/index');
		}
	}

	public function index()
	{

		if (!$this->session->userdata('logged_in')) {
			redirect('main/index');
		}
		$idSession = $this->session->userdata('idUsuario');
		$usuario = $this->Usuario_model->editmyUsuario((int) $idSession);

		$this->load->view('layouts/userHeader');
		$this->load->view('userarea/index', compact('usuario'));
		$this->load->view('layouts/userFooter');
	}


	public function myProfile($idSession = null)
	{
		$idSession = $this->session->userdata('idUsuario');
		$usuario = $this->Usuario_model->editmyUsuario((int) $idSession);


		$this->load->view('layouts/userHeader');
		$this->load->view('userarea/personal/index', compact('usuario'));
		$this->load->view('layouts/userFooter');
	}

	public function updatemyUsuario()
	{

		$this->load->library('form_validation');

		$config['upload_path']          = './files/img/usuarios';
		$config['allowed_types']        = 'gif|jpg|png';

		$this->load->library('upload', $config);

		$this->upload->do_upload();
		$dataa = array('upload_data' =>  $this->upload->data());

		$pass = md5($this->input->post("password"));

		$usuario = array(
			"cedula" => $this->input->post("cedula"),
			"correo" => $this->input->post("correo"),
			"nombre" => $this->input->post("nombre"),
			"apellido" => $this->input->post("apellido"),
			"fecha_Naci" => $this->input->post("fecha_Naci"),
			"grupo" => $this->input->post("grupo"),
			"password" => $pass,
			'foto_U' => $dataa['upload_data']['file_name']
		);
		$this->Usuario_model->updatemyUsuario($usuario);
		redirect('main_usuario/myProfile');
	}
	//* *******************************************************************************************
	public function clasificados()
	{
		$rs = $this->Clasificado_model->myClasificado();
		$this->load->view('layouts/userHeader');
		$this->load->view('userArea/clasificados/index', ['rs' => $rs]);
		$this->load->view('layouts/userFooter');
	}

	public function nuevoClasificado()
	{
		$this->load->view('layouts/userHeader');
		$this->load->view('userArea/clasificados/create');
		$this->load->view('layouts/userFooter');
	}

	public function saveClasificado()
	{
		$this->form_validation->set_rules('nombre_c', 'Titulo', 'required');
		$this->form_validation->set_rules('descripcion_c', 'Descripcion', 'required');
		$this->form_validation->set_rules('body_c', 'Texto', 'required');
		$idSession = $this->session->userdata('idUsuario');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('layouts/userHeader');
			$this->load->view('userarea/clasificados/create');
			$this->load->view('layouts/userFooter');
		} else {
			//Subir imagen
			$config['upload_path'] = './files/img/clasificados';
			$config['allowed_types'] = 'png|jpg|gif';
			$config['max_size'] = '2048';


			$this->load->library('upload', $config);

			if (!$this->upload->do_upload()) {
				$error = array('error' => $this->upload->display_errors());
				$imagen = 'noimage.jpg';
			} else {
				$data = array('upload_data' => $this->upload->data());
				$foto_c = $_FILES['userfile']['name'];
			}

			$this->Clasificado_model->saveClasificado($foto_c, $idSession);
		}
	}

	public function delClasificado($idClasificado)
	{
		$this->Clasificado_model->delClasificado($idClasificado);
		redirect('main_usuario/clasificados/index');
	}

	public function editClasificado($idClasificado = null)
	{
		$idClasificado = $this->db->escape((int) $idClasificado);
		$clasificado = $this->Clasificado_model->editClasificado($idClasificado);

		$this->load->view('layouts/userHeader');
		$this->load->view('userarea/clasificados/edit', compact('clasificado'));
		$this->load->view('layouts/userFooter');
	}

	public function updateClasificado()
	{

		$config['upload_path']          = './files/img/clasificados';
		$config['allowed_types']        = 'gif|jpg|png';

		$this->load->library('upload', $config);

		$this->upload->do_upload();
		$dataa = array('upload_data' =>  $this->upload->data());

		$clasificado = array(
			"idClasificado" => $this->input->post("idClasificado"),
			"nombre_c" => $this->input->post("nombre_c"),
			"descripcion_c" => $this->input->post("descripcion_c"),
			"precio_c" => $this->input->post("precio_c"),
			"body_c" => $this->input->post("body_c"),
			'foto_c' => $dataa['upload_data']['file_name']
		);
		$this->Clasificado_model->updateClasificado($clasificado);
		redirect('Main_usuario/clasificados');
	}
	//*******************************************************************************************


	//*************************************Mensajes**************************** */

	public function mensajes()
	{
		$idSession = $this->session->userdata('idUsuario');
		$rs = $this->Contacto_model->myMensajes($idSession);

		$this->load->view('layouts/userHeader');
		$this->load->view('userarea/mensajes/index', ['rs' => $rs]);
		$this->load->view('layouts/userFooter');
	}
	public function delContacto($idContacto)
	{
		$this->Contacto_model->delContacto($idContacto);
	}

	//************************************************************************* */

}

/* End of file Controllername.php */
