<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class spare_parts_model extends CI_Model
{
	public function get_spare_parts(){
		$query = $this->db->query("SELECT `id`, `spare_part_type` FROM `spare_part`");
		return $query->result_array();
	}
	
	public function get_spare_parts_listings($spare_parts_id){
		$query = $this->db->query("SELECT s.spare_part_type, sl.spare_part_name,
									sl.spare_part_image, sl.id
									FROM spare_part s
									INNER JOIN spare_part_list sl ON sl.spare_part_type_id = s.id
									WHERE s.id = ".$spare_parts_id);
		return $query->result_array();
	}
	
	public function get_spare_parts_detail($spare_parts_id){
		$query = $this->db->query("SELECT sd.color, sd.price, sl.stock, sl.spare_part_name,
									sl.spare_part_image
									FROM spare_parts_detail sd
									INNER JOIN spare_part_list sl ON sd.spare_part_id = sl.id
									WHERE sl.id = ".$spare_parts_id);
		return $query->result_array();
	}
}