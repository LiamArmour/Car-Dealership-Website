<?php


class mStaff extends CI_Model{
	

	public function insertStaff($data){
		$this->db->insert("lvmc_staff", $data); //active record
	}
	
	function updatePhoto($data, $id){
		$this->db->where('PhotoID', $id);
		$this->db->update('photo', $data);
	}
	
	public function searchPhotos($data){
		//$this->db->where('PhotoTitle', $data); //WHERE - exact match
		$this->db->like('Title', $data); //LIKE
		$query = $this->db->get('lvmc_staff');
		return $query->result();
	}
	
}