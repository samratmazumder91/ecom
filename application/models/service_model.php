<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class service_model extends CI_Model
{
	public function store_data($fn,$ln,$add,$mn,$email,$maker,$model,$engNo,$chasNo,$regNo){
		$uid=$this->session->userdata('identity');
		$query = $this->db->query("INSERT INTO service_transactions VALUES(NULL,'$uid','$fn','$ln','$add','$mn','$email','$maker','$model','$engNo','$chasNo','$regNo',NULL,'Pending')");
		return true;
	}
	
	public function get_last_id()
	{
		$query=$this->db->query("SELECT id FROM service_transactions ORDER BY id DESC LIMIT 1;");
		return $query->result_array();
	}
	
	public function update_data($id,$status)
	{
		$query = $this->db->query("UPDATE service_transactions set service_status='$status' where id=$id");
	}
	
	public function track_status($id)
	{
		$query=$this->db->query("SELECT service_status,reg_no,model,t_date,first_name FROM service_transactions WHERE id=$id;");
		return $query->result_array();
	}
}