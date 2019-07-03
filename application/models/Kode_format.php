<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kode_format extends CI_Model {

	public function car()
	{
		$this->db->select('kode, counter');
		$this->db->from('tbl_kode');
		$this->db->where('module', 'car');
		$Car_Counter = $this->db->get()->row();

		$counter = intval($Car_Counter->counter) + 1;

		$this->db->update('tbl_kode', array('counter' => $counter), "module = 'car'");

		$counter = str_pad($counter, 4, "0", STR_PAD_LEFT);


		return $Car_Counter->kode . $counter;
	}

	public function tran()
	{
		$this->db->select('kode, counter');
		$this->db->from('tbl_kode');
		$this->db->where('module', 'tran');
		$Car_Counter = $this->db->get()->row();

		$counter = intval($Car_Counter->counter) + 1;

		$this->db->update('tbl_kode', array('counter' => $counter), "module = 'tran'");

		$counter = str_pad($counter, 6, "0", STR_PAD_LEFT);


		return $Car_Counter->kode . date('Y') . '-' . $counter;
	}

}

/* End of file Kode_format.php */
/* Location: ./application/models/Kode_format.php */