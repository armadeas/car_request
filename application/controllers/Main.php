<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('user_helper');
        check_login($this);
    }

	public function index()
	{
		/*$this->load->view('header');		
		$this->load->view('index');
		$this->load->view('footer');	*/
		return view('index');
	}
	public function add()
	{
		$this->load->model('Model_user');
		$data['user'] = $this->Model_user->get_users(array('where' => array('user_id' => $this->session->userdata('user_id')), 'divisi' => true))->row();
		// echo($this->db->last_query());
		return view('add', $data);
	}
	public function submit()
	{
		$insert = $this->input->post();
		$booking_time = explode(' - ', $insert['booking_time']);
		$insert['pickup_time'] = $booking_time[0];
		$insert['dropoff_time'] = $booking_time[1];
		$insert['request_time'] = date('Y-m-d H:i:s');
		$insert['last_update'] = date('Y-m-d H:i:s');
		print_r($insert);
	}

}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */