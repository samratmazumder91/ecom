<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		if($this->ion_auth->logged_in()){
			$data['session_status'] = 'AUTHENTICATED';
		}else{
			$data['session_status'] = 'GUEST_SESSION';
		}
		$this->load->view('home',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */