<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Evento_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function saveEvento()
	{
		$evento = array(
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

		$this->db->insert("eventos", $evento);
		redirect('main_admin/eventos/index');
	}

	public function listEvento()
	{
		return $this->db->query("SELECT eventos.id, eventos.title, eventos.start, eventos.end, eventos.h_inicio, eventos.h_fin, eventos.description, eventos.organizador_e, eventos.lat, eventos.lng, grupos.idGrupo, grupos.nombre_g, grupos.logo_g, grupos.foto_g, grupos.ubicacion_g, grupos.descripcion_g FROM eventos JOIN grupos ON eventos.organizador_e = grupos.idGrupo")->result();
	}

	public function editEvento($id)
	{
		return $this->db->query("SELECT eventos.id, eventos.title, eventos.start, eventos.end, eventos.h_inicio, eventos.h_fin, eventos.description, eventos.organizador_e, eventos.lat, eventos.lng, grupos.idGrupo, grupos.nombre_g, grupos.logo_g, grupos.foto_g, grupos.ubicacion_g, grupos.descripcion_g FROM eventos JOIN grupos ON eventos.organizador_e = grupos.idGrupo WHERE id = {$id}")->row();
	}

	public function updateEvento($evento)
	{
		$this->db->where('id', $this->input->post('id'));
		return $this->db->update('eventos', $evento);
	}

	public function delEvento($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('eventos');
		redirect('main_admin/eventos/index');
	}

	public function showEvento($id)
	{
		return $this->db->query("SELECT eventos.id, eventos.title, eventos.start, eventos.end, eventos.h_inicio, eventos.h_fin, eventos.description, eventos.organizador_e, eventos.lat, eventos.lng, grupos.idGrupo, grupos.nombre_g, grupos.logo_g, grupos.foto_g, grupos.ubicacion_g, grupos.descripcion_g FROM eventos JOIN grupos ON eventos.organizador_e = grupos.idGrupo WHERE eventos.id = {$id}")->row();
	}


	public function getEventos()
	{


		$this->db->select('id, title, start, end');
		$this->db->from('eventos');

		return $this->db->get()->result();
	}
}

/* End of file ModelName.php */
