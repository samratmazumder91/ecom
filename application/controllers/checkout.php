<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class checkout extends CI_Controller {
	public function __construct(){
		parent::__construct();
			
	}
	
	public function index()
	{
		if($this->ion_auth->logged_in()){
			$data['session_status'] = 'AUTHENTICATED';
		}else{
			$data['session_status'] = 'GUEST_SESSION';
		}
		
		$data['total_bill'] = $this->checkout_model->get_total_bill();
		$this->load->view('payment',$data);
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */