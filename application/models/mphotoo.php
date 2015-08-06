<?php


class mPhotoo extends CI_Model{
	
	public function getAllPhotos(){
		//use functions in libary class
		$query = $this->db->query("select * from lvmc_stock WHERE status = 'Sold'");
		return $query->result();
	}
	
	
	
}