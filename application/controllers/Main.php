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
		$this->load->model('Model_main');
		$this->load->model('Model_helper');
		$data['model_helper'] = $this->Model_helper;
		$data['trans'] = $this->Model_main->get_trans();
		return view('index', $data);
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
		$this->load->model('Kode_format');
		$insert['ticket'] = $this->Kode_format->tran();
		$insert['pickup_location'] = $insert['city_pickup'] . ',' . $insert['districts_pickup'] . ',' . $insert['villages_pickup'];
		$insert['dropoff_location'] = $insert['city_dropoff'] . ',' . $insert['districts_dropoff'] . ',' . $insert['villages_dropoff'];
		$insert['status'] = 1;
		unset($insert['user_name'], $insert['city_pickup'], $insert['districts_pickup'], $insert['villages_pickup'],  $insert['city_dropoff'], $insert['districts_dropoff'], $insert['villages_dropoff'], $insert['booking_time'], $insert['divisi_name']);
		$this->load->model('Model_main');
		$ins = $this->Model_main->insert_tran($insert);
		if ($ins) {
			$this->session->set_flashdata('status_tran', 'success');
			$this->session->set_flashdata('ticket_tran', $insert['ticket']);
			echo("<script>alert('This Ticket has Created $insert[ticket]')</script>");
			redirect('main','refresh');
		}else{
			$this->session->set_flashdata('status_tran', 'failed');
			echo("<script>alert('This Transaction Failed')</script>");
			redirect('main/add','refresh');
		}
		// print_r($insert);
	}

	public function view($ticket)
	{
		// print_r($this->session->all_userdata());
		// echo($this->session->userdata('emp_id'));
		$this->load->model('Model_main');
		$this->load->model('Model_helper');
		$data['model_helper'] = $this->Model_helper;
		$data['session'] = $this->session->all_userdata();
		$data['tran'] = $this->Model_main->get_trans($ticket)->row();
		if ($data['tran']->status > 1) {
			$this->load->model('Model_car');
			$data['list_cars'] = $this->Model_car->list_cars();
		}
		return view('view', $data);
	}

	public function approve($ticket)
	{
		$this->db->update('tbl_transaksi', array('status' => 2), "ticket = '$ticket'");
		echo("<script>alert('This Ticket has Approved')</script>");
		redirect('main','refresh');
		
	}

	public function reject($ticket)
	{
		$this->db->update('tbl_transaksi', array('status' => 6), "ticket = '$ticket'");
		echo("<script>alert('This Ticket has Rejected')</script>");
		redirect('main','refresh');
		
	}

	public function process()
	{
		print_r($this->input->post());
		$ticket = $this->input->post('ticket');
		$this->db->update('tbl_transaksi', array('status' => 3, 'car_id' => $this->input->post('car_id')), "ticket = '$ticket'");
		echo("<script>alert('This Ticket has Processed')</script>");
		redirect('main','refresh');

	}

}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */