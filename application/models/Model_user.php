<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Model_user extends CI_Model {

	public function get_users($param = null)
	{
		$this->db->select('*');
		$this->db->from('tbl_users');

		if(@$param['divisi']){
			$this->db->join('tbl_divisi', 'tbl_divisi.divisi_id = tbl_users.divisi_id', 'left');
		}

		if($param['where']){
			$this->db->where($param['where']);
		}
		
		return $this->db->get();
	}
	public function login($email, $password)
	{
		return $this->db->get_where('tbl_users', array('user_email' => $email, 'user_password' => $password));
	}

}

/* End of file Model_user.php */
/* Location: ./application/models/Model_user.php */