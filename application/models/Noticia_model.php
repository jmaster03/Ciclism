<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Noticia_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function listNoticia()
	{
		$query = $this->db->get('noticias');
		if ($query->num_rows() > 0) {
			return $query->result();
		}
	}

	public function saveNoticia($foto_n, $idSession){

		$noticia = array(
			"foto_n" => $this->input->post("foto_n"),
			"nombre_n" => $this->input->post("nombre_n"),
			"descripcion_n" => $this->input->post("descripcion_n"),
			"body_n" => $this->input->post("body_n"),
			"escritoX" => $idSession,
			"foto_n"=>$foto_n
		);

		$this->db->insert("noticias", $noticia);
		redirect('main_admin/noticias/index');
	}





	public function delNoticia($idNoticia){
		$image_file_name = $this->db->select('foto_n')->get_where('noticias', array('idNoticia' => $idNoticia))->row()->foto_n;
		$cwd = getcwd();
		$image_file_path = $cwd."\\files\\img\\noticias\\";
		chdir($image_file_path);
		unlink($image_file_name);
		chdir($cwd); 


		$this->db->where('idNoticia', $idNoticia);
		$this->db->delete('noticias');
		redirect('main_admin/noticias/index');
	}

	public function editNoticia($idNoticia){
		return $this->db->query("SELECT * FROM noticias WHERE idNoticia = {$idNoticia}")->row();
	}

	public function updateNoticia($noticia){
		$this->db->where('idNoticia', $this->input->post('idNoticia'));
		return $this->db->update('noticias',$noticia);
	}


}

/* End of file ModelName.php */
