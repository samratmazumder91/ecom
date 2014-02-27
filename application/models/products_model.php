<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class products_model extends CI_Model
{
	public function get_products(){
		$query = $this->db->query("SELECT `id`, `brand_name`, `brand_logo` FROM `products`");
		return $query->result_array();
	}
	
	public function get_product_listings($product_id){
		$query = $this->db->query("SELECT p.brand_name, p.brand_logo,
									pl.product_name, pl.product_image, pl.id
									FROM products p
									INNER JOIN product_list pl ON pl.brand_id = p.id
									WHERE p.id = ".$product_id);
		return $query->result_array();
	}
	
	public function get_product_detail($product_id){
		$query = $this->db->query("SELECT pd.engine_type, pd.displacement, pd.compression_ratio, pd.maximum_power, pd.maximum_torque, pd.fuel_tank_capacity, pd.fuel_supply_system, pd.transmission_type, pd.frame_type, pd.tyre_size, pd.brake_type, pd.suspension_type, pd.battery, pd.dimensions, pd.wheel_base, pd.ground_clearance, pd.kerb_weight, pd.colors_available, pd.price, pl.product_image, pl.product_name,pl.stock
									FROM product_detail pd
									INNER JOIN product_list pl ON pl.id = pd.product_id
									WHERE pd.product_id = ".$product_id);
		return $query->result_array();
	}
}