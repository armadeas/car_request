<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('user_helper');
        $this->load->model('Model_user');
    }
	public function index()
	{
		check_login();
		$data['users'] = $this->Model_user->get_users();
		$this->load->view('header');
		$this->load->view('user/list_users', $data);
		$this->load->view('footer');
	}
	public function add()
	{
		check_login();
		$this->load->view('header');
		$this->load->view('footer');
		
	}
	public function login()
	{
		$this->load->view('user/login');
	}
	public function submit_login()
	{
		$login = $this->Model_user->login($this->input->post('email'), $this->input->post('password'));
		// print_r($login->num_rows());
		if ($login->num_rows() > 0) {
			$login = $login->row();
			$this->session->set_userdata('login', true);
			$this->session->set_userdata('user_id', $login->user_id);
			$this->session->set_userdata('emp_id', $login->emp_id);
			$this->session->set_userdata('user_name', $login->user_name);
			redirect('','refresh');
		} else {
			$this->session->set_flashdata('login_info', 'Login Failed Email or Password invalid');
			// echo($this->db->last_query());
			redirect('user/login','refresh');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata(array('user_id', 'emp_id', 'user_name'));
		$this->session->set_userdata('login', false);
		redirect('user/login','refresh');
	}
}

/* End of file User.php */
/* Location: ./application/controllers/User.php */