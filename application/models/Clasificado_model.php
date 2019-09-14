<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Clasificado_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function listClasificado()
	{
		$query = $this->db->get('clasificados');
		if ($query->num_rows() > 0) {
			return $query->result();
		} 
	}

	public function myClasificado()
	{
		$idSession= $this->session->userdata('idUsuario');		
		$query =$this->db->where('usuario_c', $idSession)->get('clasificados');
		if ($query->num_rows() > 0) {
			return $query->result();
		}
	}
 
	public function saveClasificado($foto_c, $idSession){

		$clasificado = array(
			"nombre_c" => $this->input->post("nombre_c"),
			"descripcion_c" => $this->input->post("descripcion_c"),
			"body_c" => $this->input->post("body_c"),
			"precio_c" => $this->input->post("precio_c"),
			"usuario_c" => $idSession,
			"foto_c"=>$foto_c
		);

		$this->db->insert("clasificados", $clasificado);
		redirect('main_usuario/clasificados/index');
	}





	public function delClasificado($idClasificado){
		$image_file_name = $this->db->select('foto_c')->get_where('clasificados', array('idClasificado' => $idClasificado))->row()->foto_c;
		$cwd = getcwd();
		$image_file_path = $cwd."\\files\\img\\clasificados\\";
		chdir($image_file_path);
		unlink($image_file_name);
		chdir($cwd); 


		$this->db->where('idClasificado', $idClasificado);
		$this->db->delete('clasificados');
	}

	public function editClasificado($idClasificado){
		return $this->db->query("SELECT * FROM clasificados WHERE idClasificado = {$idClasificado}")->row();
	}

	public function updateClasificado($clasificado){
		$this->db->where('idClasificado', $this->input->post('idClasificado'));
		return $this->db->update('clasificados',$clasificado);
	}

	public function showClasificado($idClasificado){
		return $this->db->query("SELECT usuarios.idUsuario, usuarios.cedula, usuarios.correo, usuarios.nombre, usuarios.apellido, usuarios.fecha_Naci, usuarios.grupo, usuarios.password, usuarios.foto_U, clasificados.idClasificado, clasificados.foto_c, clasificados.nombre_c, clasificados.descripcion_c, clasificados.body_c, clasificados.precio_c, clasificados.usuario_c, clasificados.estatus, clasificados.fecha_agregado FROM usuarios JOIN clasificados on clasificados.usuario_c = usuarios.idUsuario WHERE clasificados.idClasificado = {$idClasificado}")->row();
	}

	public function listClas(){
		$query = $this->db->query("SELECT usuarios.idUsuario, usuarios.cedula, usuarios.correo, usuarios.nombre, usuarios.apellido, usuarios.fecha_Naci, usuarios.grupo, usuarios.password, usuarios.foto_U, clasificados.idClasificado, clasificados.foto_c, clasificados.nombre_c, clasificados.descripcion_c, clasificados.body_c, clasificados.precio_c, clasificados.usuario_c, clasificados.estatus, clasificados.fecha_agregado FROM usuarios JOIN clasificados on clasificados.usuario_c = usuarios.idUsuario");
		if ($query->num_rows() > 0) {
			return $query->result();
		} 
	}


}

/* End of file ModelName.php */
