<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		$this->load->model('service_model');
	}
	
	private function hasPermission($action,$module = ''){
		if($module == '')
			return $this->acl->has_permission(strtolower( __CLASS__), $action);
		else
			return $this->acl->has_permission(strtolower($module), $action);
	}
	
	public function index()
	{
		$data['session_status'] = 'AUTHENTICATED';
		if ($this->hasPermission('edit')){
			$this->load->view('service_status',$data);	
		}else{
			$this->load->view('service',$data);
		}
	}
	
	public function storeData()
	{
		if(!isset($_POST))
			redirect('service','refresh');
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
			$data['last_id']=$this->service_model->get_last_id();
			$this->load->view('success',$data);
		}
	}
	
	public function update_status()
	{
		if(!isset($_POST))
			redirect('/service_status','refresh');
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		$this->form_validation->set_rules('id', 'ID', 'required|numeric');
		$this->form_validation->set_rules('status', 'Status', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			if($this->ion_auth->logged_in()){
			$data['session_status'] = 'AUTHENTICATED';
			}else{
			$data['session_status'] = 'GUEST_SESSION';
			}
			$this->load->view('/service_status',$data);
		}
		else
		{
			$this->service_model->update_data($this->input->post('id'),
											$this->input->post('status'));
			redirect('/service','refresh');	
		}
	}
	
	public function get_service_status()
	{
		if(!isset($_POST))
			redirect('/home','refresh');
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		$this->form_validation->set_rules('id', 'ID', 'required|numeric');
		if ($this->form_validation->run() == FALSE)
		{
			if($this->ion_auth->logged_in()){
			$data['session_status'] = 'AUTHENTICATED';
			}else{
			$data['session_status'] = 'GUEST_SESSION';
			}
			$this->session->set_flashdata('error','Incorrect Order ID');
			redirect("/home");
		}
		else
		{
			if($this->ion_auth->logged_in()){
			$data['session_status'] = 'AUTHENTICATED';
			}else{
			$data['session_status'] = 'GUEST_SESSION';
			}
			$data['track_service_status']=$this->service_model->track_status($this->input->post('id'));
			var_dump($data['track_service_status']);
			if(count($data['track_service_status'][0])==0)
			{
				$this->session->set_flashdata('error','Incorrect Order ID');
				redirect("/home");
			}
			else
				$this->load->view('/track_service_status',$data);
		}
	}
}