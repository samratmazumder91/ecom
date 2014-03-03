<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cart_model extends CI_Model
{
	public function update_stocks($uid,$ns,$tn)
	{
		$query = $this->db->query("UPDATE $tn SET stock=stock-$ns WHERE id=$uid");
	}
	
	public function get_stock($id,$tn)
	{
		$query = $this->db->query("SELECT stock FROM $tn WHERE id=$id");
		return $query->result_array();
	}
}