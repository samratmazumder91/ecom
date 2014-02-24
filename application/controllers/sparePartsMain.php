<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sparePartsMain extends CI_Controller {
	public function __construct(){
		parent::__construct();
		/*if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}*/
	}
	
	public function index()
	{
		if($this->ion_auth->logged_in()){
			$data['session_status'] = 'AUTHENTICATED';
		}else{
			$data['session_status'] = 'GUEST_SESSION';
		}
		$this->load->view('sparePartsMain',$data);
	}
}