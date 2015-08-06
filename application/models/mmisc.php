<?php


class mMisc extends CI_Model{
	

	function updateMisc($data, $id){
		$this->db->where('id', $id);
		$this->db->update('lvmc_misc', $data);
	}
	
	
}