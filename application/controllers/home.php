<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
			$this->load->model('products_model');
			$this->load->model('spare_parts_model');
	}
	
	public function index()
	{
		if($this->ion_auth->logged_in()){
			$data['session_status'] = 'AUTHENTICATED';
		}else{
			$data['session_status'] = 'GUEST_SESSION';
		}
		
		$data['products'] = $this->products_model->get_products();
		$data['spare_parts'] = $this->spare_parts_model->get_spare_parts();
		
		$this->load->view('home',$data);
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */