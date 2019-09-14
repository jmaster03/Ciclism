<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function listUsuario($idSession)
	{
		$this->db->where('idUsuario !=', $idSession);

		$query = $this->db->get('usuarios');
		if ($query->num_rows() > 0) {
			return $query->result();
		}
	}

	public function saveUsuario($enc_password){
		$userFoto = "noimage.jpg";
		$newUsuario = array(
            "cedula" => $this->input->post("cedula"),
			"correo" => $this->input->post("correo"),
			"nombre" => $this->input->post("nombre"),
			"apellido" => $this->input->post("apellido"),
			"fecha_Naci" => $this->input->post("fecha_Naci"),
			"grupo" => $this->input->post("grupo"),
			"tipo" => $this->input->post("tipo"),
			"foto_U" => $userFoto,
			"password" => $enc_password,
		);

		$this->db->insert("usuarios", $newUsuario);
		redirect('Main_admin/usuarios');
	}
 

	public function delUsuario($idUsuario){
		$image_file_name = $this->db->select('foto_U')->get_where('usuarios', array('idUsuario' => $idUsuario))->row()->foto_U;
		$cwd = getcwd();
		$image_file_path = $cwd."\\files\\img\\usuarios\\";
		chdir($image_file_path);
		unlink($image_file_name);
		chdir($cwd); 


		$this->db->where('idUsuario', $idUsuario);
		$this->db->delete('usuarios');
		redirect('main_admin/usuarios/index');
	}

	public function editUsuario($idUsuario){
		return $this->db->query("SELECT usuarios.idUsuario, usuarios.cedula, usuarios.correo, usuarios.nombre, usuarios.apellido, usuarios.fecha_Naci, usuarios.grupo, usuarios.password, usuarios.foto_U, grupos.idGrupo, grupos.nombre_g, usuarios.tipo FROM grupos JOIN usuarios ON grupos.idGrupo = usuarios.grupo WHERE idUsuario = $idUsuario")->row();;
	}

	public function updateUsuario($usuario){
		$this->db->where('idUsuario', $this->input->post('idUsuario'));
		return $this->db->update('usuarios',$usuario);
	}

	
	public function editmyUsuario($idSession){

		return $this->db->query("SELECT usuarios.idUsuario, usuarios.cedula, usuarios.correo, usuarios.nombre, usuarios.apellido, usuarios.fecha_Naci, usuarios.grupo, usuarios.password, usuarios.foto_U, grupos.idGrupo, grupos.nombre_g FROM grupos JOIN usuarios ON grupos.idGrupo = usuarios.grupo WHERE idUsuario = $idSession")->row();
	}

	public function updatemyUsuario($idUsuario){
		$this->db->where('idUsuario', $this->input->post('idUsuario'));
		return $this->db->update('usuarios',$idUsuario);
	}



//**********************************Registro**************************************


	public function regUsuario($enc_password){
		$userFoto = "noimage.jpg";
		$newUsuario = array(
            "cedula" => $this->input->post("cedula"),
			"correo" => $this->input->post("correo"),
			"nombre" => $this->input->post("nombre"),
			"apellido" => $this->input->post("apellido"),
			"fecha_Naci" => $this->input->post("fecha_Naci"),
			"grupo" => $this->input->post("grupo"),
			"tipo" => $this->input->post("tipo"),
			"foto_U" => $userFoto,
			"password" => $enc_password,
		);

		$this->db->insert("usuarios", $newUsuario);
		redirect('Main_usuario/index');
	}

	public function check_correo_exist($correo){
		$query = $this->db->get_where('usuarios', array('correo'=>$correo));
		if(empty($query->row_array())){
			return true;
		}else{
			return false;
		}
	}

	public function check_cedula_exist($cedula){
		$query = $this->db->get_where('usuarios', array('cedula'=>$cedula));
		if(empty($query->row_array())){
			return true;
		}else{
			return false;
		}
	}
//***********************************************************************************

//************************************Login******************************************
	public function login($correo, $pass){
		$this->db->where('correo',$correo);
		$this->db->where('password',$pass);
		$result = $this->db->get('usuarios', 1);
		return $result;
		
		
	}
//***********************************************************************************
}

/* End of file ModelName.php */
