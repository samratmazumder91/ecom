<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class spare_parts extends CI_Controller {
	public function __construct(){
		parent::__construct();
			$this->load->model('spare_parts_model');
	}
	
	public function index()
	{
		if($this->ion_auth->logged_in()){
			$data['session_status'] = 'AUTHENTICATED';
		}else{
			$data['session_status'] = 'GUEST_SESSION';
		}
	}
	
	public function show($spare_parts_id){
		if($this->ion_auth->logged_in()){
			$data['session_status'] = 'AUTHENTICATED';
		}else{
			$data['session_status'] = 'GUEST_SESSION';
		}
		$data['spare_parts_list'] = $this->spare_parts_model->get_spare_parts_listings($spare_parts_id);
		$this->load->view('spare_parts_list',$data);
		//echo 'Display listing for spare_parts id '.$spare_parts_id;
		
		//get all listings from database through model
		//load a listing view and pass results returned from db
	}
	
	public function show_details($spare_parts_id)
	{
		if($this->ion_auth->logged_in()){
			$data['session_status'] = 'AUTHENTICATED';
		}else{
			$data['session_status'] = 'GUEST_SESSION';
		}
		$data['spare_part_detail'] = $this->spare_parts_model->get_spare_parts_detail($spare_parts_id);
		$this->load->view('spare_parts_detail',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */