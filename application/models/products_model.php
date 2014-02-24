<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class products_model extends CI_Model
{
	public function get_products(){
		$query = $this->db->query("SELECT `id`, `brand_name`, `brand_logo` FROM `products`");
		return $query->result_array();
	}
	
	public function get_product_listings($product_id){
		
	}
}