<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct()
	{
        parent::__construct();
		$this->load->model('Usuario_model');
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function loginReg(){
		$this->load->view('layouts/mainHeader');
		$this->load->view('auth/loginReg');
		$this->load->view('layouts/mainFooter');

	}

   //***************************************Registro*******************************
		public function saveUsuario(){
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('cedula', 'Cedula', 'required');
			$this->form_validation->set_rules('correo', 'Correo', 'required|callback_check_correo_exist');
			$this->form_validation->set_rules('password', 'Contraseña', 'required');
			$this->form_validation->set_rules('password2', 'contraseña', 'matches[password]');

			if($this->form_validation->run() === FALSE){
				// Set message
				$this->session->set_flashdata('fail_reg', 'Proceso de registro incorrecto');
				redirect('auth/loginReg');

			//	$this->load->view('auth/loginReg');
			} else {
				// Encrypt password
				$enc_password = md5($this->input->post('password'));
				$this->Usuario_model->regUsuario($enc_password);

				// Set message
				$this->session->set_flashdata('reg_Succeess', 'Registro exitoso!! ya puedes iniciar sesion');
				redirect('auth/loginReg');
			}
		}
   //******************************************************************************

   
   //*****************************************Check*********************************
		function check_correo_exist($correo){
		
			$this->form_validation->set_message('check_correo_exist', 'El correo electronico ya existe en nuestra base de datos');
			
			if($this->Usuario_model->check_correo_exist($correo)){
				return true;
			}else{
				return false;
			}
		}

		function check_cedula_exist($cedula){
		
			$this->form_validation->set_message('check_cedula_exist', 'Existe alguien registrado con esa cedula');
			
			if($this->Usuario_model->check_cedula_exist($cedula)){
				return true;
			}else{
				return false;
			}
		}
   //*******************************************************************************






   // *********************************Inicio de sesion*****************************

		public function login(){
			$this->form_validation->set_rules('correo', 'Correo', 'required');
			$this->form_validation->set_rules('password', 'Contraseña', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('auth/loginReg');
			} else {
				//obtener usuario

				$correo = $this->input->post('correo', TRUE);
				$pass = md5($this->input->post('password', TRUE));

				$login = $this->Usuario_model->login($correo, $pass);

				if($login->num_rows() > 0){
					$data  = $login->row_array();
					$idSesion  = $data['idUsuario'];
					$correo  = $data['correo'];
					$tipo = $data['tipo'];

					$datosession = array(
						'idUsuario'=>$idSesion,
						'correo'  => $correo,
						'tipo'     => $tipo,
						'logged_in' => TRUE
					);
					$this->session->set_userdata($datosession);

					if($tipo === '43'){
						redirect('Main_admin/index');
					}elseif($tipo === '12'){
						redirect('Main_usuario/index');
					}else{
						redirect('Main/index');
					}
				}else {
					$this->session->set_flashdata('mensaje', 'Sesion Fallida');
					redirect('auth/loginReg');
				}
					
			}
		}

   // *******************************************************************************


   function logout(){
		$this->session->sess_destroy();
		redirect('main/index');
	}

}

/* End of file Controllername.php */
