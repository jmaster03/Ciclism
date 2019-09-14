<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Contacto_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function listContacto()
	{
		$query = $this->db->get('contactos');
		if ($query->num_rows() > 0) {
			return $query->result();
		}
	}

	public function saveContacto()
	{

		$contacto = array(
			"nombre" => $this->input->post("nombre"),
			"correo" => $this->input->post("correo"),
			'telefono' => $this->input->post('telefono'),
			'comentario' => $this->input->post('comentario'),
		);

		$this->db->insert("contactos", $contacto);
		redirect('main/contactanos');
	}


	public function contactUser()
	{

		$contacto = array(
			"nombre_mensaje" => $this->input->post("nombre_mensaje"),
			"correo_mensaje" => $this->input->post("correo_mensaje"),
			'comentario_mensaje' => $this->input->post('comentario_mensaje'),
			'clasificado_mensaje' => $this->input->post('clasificado_mensaje')
		);

		$this->db->insert("clas_contactos", $contacto);
		redirect('main/contactanos');
	}

	public function myMensajes($idSession)
	{
		return $this->db->query("SELECT clasificados.idClasificado, clasificados.foto_c, clasificados.nombre_c, clasificados.descripcion_c, clasificados.body_c, clasificados.precio_c, clasificados.usuario_c, clasificados.fecha_agregado, clas_contactos.Id_mensaje, clas_contactos.nombre_mensaje, clas_contactos.correo_mensaje, clas_contactos.comentario_mensaje, clas_contactos.clasificado_mensaje, clas_contactos.fecha_mensaje FROM clas_contactos JOIN clasificados ON clas_contactos.clasificado_mensaje = clasificados.idClasificado WHERE clasificados.usuario_c = {$idSession}")->result();
	}

	public function delContacto($idContacto)
	{
		$this->db->where('idContacto', $idContacto);
		$this->db->delete('contactos');
		redirect('main_admin/contactos/index');
	}
}

/* End of file ModelName.php */
