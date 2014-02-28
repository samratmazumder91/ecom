<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class service_model extends CI_Model
{
	public function store_data($fn,$ln,$add,$mn,$email,$maker,$model,$engNo,$chasNo,$regNo){
		$uid=$this->session->userdata('identity');
		$query = $this->db->query("INSERT INTO service_transactions VALUES(NULL,'$uid','$fn','$ln','$add','$mn','$email','$maker','$model','$engNo','$chasNo','$regNo',NULL)");
		return true;
	}
}