<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_car extends CI_Model {

	public function list_cars()
	{
		$this->db->select('car_id, car_brand, car_type, car_year, car_plate, car_status');
		$this->db->from('tbl_cars');
		$this->db->order_by('car_id', 'asc');
		return $this->db->get();
	}

}

/* End of file Model_car.php */
/* Location: ./application/models/Model_car.php */