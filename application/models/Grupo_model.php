<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Grupo_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function listGrupo()
	{
		$query = $this->db->get('grupos');
		if ($query->num_rows() > 0) {
			return $query->result();
		}
	}

	public function saveGrupo($logo_g){

		$grupo = array(
			"nombre_g" => $this->input->post("nombre_g"),
			"foto_g" => $this->input->post("foto_g"),

			"ubicacion_g" => $this->input->post("ubicacion_g"),
			"descripcion_g" => $this->input->post("descripcion_g"),
			"logo_g"=>$logo_g
		);

		$this->db->insert("grupos", $grupo);
		redirect('main_admin/grupos/index');
	}
 




	public function delGrupo($idGrupo){
		$image_file_name = $this->db->select('foto_g')->get_where('grupos', array('idGrupo' => $idGrupo))->row()->foto_g;
		$cwd = getcwd();
		$image_file_path = $cwd."\\files\\img\\grupos\\";
		chdir($image_file_path);
		unlink($image_file_name);
		chdir($cwd); 


		$this->db->where('idGrupo', $idGrupo);
		$this->db->delete('grupos');
		redirect('main_admin/grupos/index');
	}

	public function editGrupo($idGrupo){
		return $this->db->query("SELECT * FROM grupos WHERE idGrupo = {$idGrupo}")->row();
	}

	public function updateGrupo($grupo){
		$this->db->where('idGrupo', $this->input->post('idGrupo'));
		return $this->db->update('grupos',$grupo);
	}


}

/* End of file ModelName.php */
