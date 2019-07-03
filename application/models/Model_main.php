<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_main extends CI_Model {

	public function insert_tran($insert)
	{

		return $this->db->insert('tbl_transaksi', $insert);

	}

	public function get_trans($ticket=null)
	{
		//echo($param['filter']['ticket']);
		$query = ('SELECT
			tt.*,
			tu.user_name,
			td.divisi_name,
			tl.emp_id AS lead_id,
			tl.user_name AS lead_name,
			tc.car_brand,
			tc.car_type,
			tc.car_plate,
			ts.user_name AS driver_name 
		FROM
			tbl_transaksi tt
			INNER JOIN tbl_users tu ON tu.emp_id = tt.emp_id
			INNER JOIN tbl_divisi td ON td.divisi_id = tu.divisi_id
			LEFT JOIN tbl_users tl ON tl.emp_id = td.divisi_lead
			LEFT JOIN tbl_cars tc ON tc.car_id = tt.car_id
			LEFT JOIN tbl_users ts ON ts.emp_id = tt.driver_id');
		if ($ticket) {
			$query .= " WHERE ticket = '$ticket'";
		}
		return $this->db->query($query);
	}
}

/* End of file Model_main.php */
/* Location: ./application/models/Model_main.php */