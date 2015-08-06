<?php


class mPhoto extends CI_Model{
	
	public function getAllPhotos(){
		//use functions in libary class
		$query = $this->db->query("select * from lvmc_stock WHERE status = 'ForSale'");
		return $query->result();
	}
	
		public function getAllStaff(){
		//use functions in libary class
		$query = $this->db->query("select * from lvmc_staff");
		return $query->result();
	}
	
	public function insertPhoto($data){
		$this->db->insert("lvmc_stock", $data); //active record
	}
	
	function updatePhoto($data, $id){
		$this->db->where('PhotoID', $id);
		$this->db->update('lvmc_stock', $data);
	}
	
	public function searchPhotos($data){
		//$this->db->where('Make', $data); //WHERE - exact match
		$this->db->like('Make', $data); //LIKE
		$query = $this->db->get('lvmc_stock');
		return $query->result();
	}
	
}