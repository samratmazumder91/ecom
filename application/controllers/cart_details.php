<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cart_details extends CI_Controller {
	public function __construct(){
		parent::__construct();
			//$this->load->model('cart_details')
	}
	
	public function index()
	{
		if($this->ion_auth->logged_in()){
			$data['session_status'] = 'AUTHENTICATED';
		}else{
			$data['session_status'] = 'GUEST_SESSION';
		}
		$this->load->view('cart_details',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */