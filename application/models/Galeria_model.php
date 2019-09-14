<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function listGaleria()
	{
		$query = $this->db->get('galerias');
		if ($query->num_rows() > 0) {
			return $query->result();
		}
	}

	public function saveGaleria($idSession){

		$galeria = array(
			"nombre_ga" => $this->input->post("nombre_ga"),
			"descripcion_ga" => $this->input->post("descripcion_ga"),
			'foto1_ga'=> $this->input->post('foto1_ga'),
			'foto2_ga'=> $this->input->post('foto2_ga'),
			'foto3_ga'=> $this->input->post('foto3_ga'),
			'foto4_ga'=> $this->input->post('foto4_ga'),
			'foto5_ga'=> $this->input->post('foto5_ga'),
			'foto6_ga'=> $this->input->post('foto6_ga'),
			'foto7_ga'=> $this->input->post('foto7_ga'),
			'foto8_ga'=> $this->input->post('foto8_ga'),
			"creadaX" => $idSession, 

		);

		$this->db->insert("galerias", $galeria);
		redirect('main_admin/galerias/index');
	}





	public function delGaleria($idGaleria){
		$this->db->where('idGaleria', $idGaleria);
		$this->db->delete('galerias');
		redirect('main_admin/galerias/index');
	}

	public function editGaleria($idGaleria){
		return $this->db->query("SELECT * FROM galerias WHERE idGaleria = {$idGaleria}")->row();
	}

	public function updateGaleria($galeria){
		$this->db->where('idGaleria', $this->input->post('idGaleria'));
		return $this->db->update('galerias',$galeria);
	}

	public function showGaleria($idGaleria){
	return $this->db->query("SELECT usuarios.idUsuario, usuarios.nombre, galerias.idGaleria, galerias.nombre_ga, galerias.descripcion_ga, galerias.foto1_ga, galerias.foto2_ga, galerias.foto3_ga, galerias.foto4_ga, galerias.foto5_ga, galerias.foto6_ga, galerias.foto7_ga, galerias.foto8_ga, galerias.creadaX, galerias.fecha_creado FROM usuarios JOIN galerias on usuarios.idUsuario = galerias.creadaX WHERE idGaleria = {$idGaleria}")->row();
	}


}

/* End of file ModelName.php */
