<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Helper extends CI_Controller {

	public function city_select()
	{
		$this->load->model('Model_helper');
		$city = $this->Model_helper->city_select($this->input->get('search'));
		echo json_encode($city->result());
	}
	public function districts()
	{
		$this->load->model('Model_helper');
		$districts = $this->Model_helper->districts($this->input->get('search'), $this->input->get('city'));
		echo json_encode($districts->result());
	}
	public function villages()
	{
		$this->load->model('Model_helper');
		$villages = $this->Model_helper->villages($this->input->get('search'), $this->input->get('districts'));
		echo json_encode($villages->result());
	}
}

/* End of file helper.php */
/* Location: ./application/controllers/helper.php */