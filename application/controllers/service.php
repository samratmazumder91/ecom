<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class service extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		$this->load->model('service_model');

	}
	
	public function index()
	{
		if($this->ion_auth->logged_in()){
			$data['session_status'] = 'AUTHENTICATED';
		}else{
			$data['session_status'] = 'GUEST_SESSION';
		}
		$this->load->view('service',$data);
	}
	
	public function storeData()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('mobile_no', 'Mobile No.', 'required||exact_length[10]|numeric');
		$this->form_validation->set_rules('email', 'Email ID', 'required|valid_email');
		$this->form_validation->set_rules('maker', 'Maker', 'required');
		$this->form_validation->set_rules('model', 'Model', 'required');
		$this->form_validation->set_rules('engine_no', 'Engine No.', 'required');
		$this->form_validation->set_rules('chassis_no', 'Chassis No.', 'required');
		$this->form_validation->set_rules('reg_no', 'Registration No.', 'required');


		if ($this->form_validation->run() == FALSE)
		{
			if($this->ion_auth->logged_in()){
			$data['session_status'] = 'AUTHENTICATED';
			}else{
			$data['session_status'] = 'GUEST_SESSION';
			}
			$this->load->view('service',$data);
		}
		else
		{
			$this->service_model->store_data($this->input->post('first_name'),
											$this->input->post('last_name'),
											$this->input->post('address'),
											$this->input->post('mobile_no'),
											$this->input->post('email'),
											$this->input->post('maker'),
											$this->input->post('model'),
											$this->input->post('engine_no'),
											$this->input->post('chassis_no'),
											$this->input->post('reg_no'));
			$this->load->view('success');
		}
	}
}