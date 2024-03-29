<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_helper extends CI_Model {

	public function city_select($filter='')
	{
		$this->db->select('id, name as text');
		$this->db->from('regencies');
		$this->db->where_in('province_id', array(31, 32, 36));
		$this->db->like('name', $filter, 'BOTH');
		return $this->db->get();
	}

	public function districts($filter='', $city=false)
	{
		$this->db->select('id, name as text');
		$this->db->from('districts');
		if($city) $this->db->where('regency_id', $city);
		$this->db->like('name', $filter, 'BOTH');
		return $this->db->get();
	}

	public function villages($filter='', $districts=false)
	{
		$this->db->select('id, name as text');
		$this->db->from('villages');
		if($districts) $this->db->where('district_id', $districts);
		$this->db->like('name', $filter, 'BOTH');
		return $this->db->get();
	}

	public function get_location($param, $data)
	{
		$params = explode(',', $param);
		$datas = explode(',', $data);
		$out = '';
		foreach ($params as $param) {
			if ($param == 'City') {
				$out .= $this->db->get_where('regencies', array('id' => $datas[0]))->row()->name . ', ';
			}else if ($param == 'Districts') {
				$out .= $this->db->get_where('districts', array('id' => $datas[1]))->row()->name;
			}else if ($param == 'Villages') {
				$out .= ', '.$this->db->get_where('villages', array('id' => $datas[2]))->row()->name;
			}
		}

		return $out;
	}


}

/* End of file model_helper.php */
/* Location: ./application/models/model_helper.php */