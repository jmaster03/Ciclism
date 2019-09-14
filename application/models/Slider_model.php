<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Slider_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function editSlider($idSlider){
		return $this->db->query("SELECT * FROM sliders WHERE idSlider = {$idSlider}")->row();
	}

	public function updateSlider($slider){ 
		$this->db->where('idSlider', $this->input->post('idSlider'));
		return $this->db->update('sliders',$slider);
	}


}

/* End of file ModelName.php */
