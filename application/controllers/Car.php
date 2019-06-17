<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('user_helper');
        check_login($this);
    }

	public function index()
	{
		// $this->load->view('header');
		$this->load->model('Model_car');
		$data['cars'] = $this->Model_car->list_cars();
		// $this->load->view('car/list_cars', $data);
		return view('car/list_cars', $data);
		// $this->load->view('footer');
	}
	public function add_cars()
	{
		/*$this->db->trans_begin();
		$this->load->model('Kode_format');
		print_r($this->Kode_format->car());
		$car_ins = array('car_id' => $this->Kode_format->car(), 
		'car_brand' => 'Toyota',
		'car_type' => 'Avanza A/T ');
		$this->db->trans_rollback();*/
	}

}

/* End of file Car.php */
/* Location: ./application/controllers/Car.php */