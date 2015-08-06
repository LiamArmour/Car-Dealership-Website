<?php


class staff_model extends CI_Model{
	 
function viewstaff()
{
    $query = $this->db->select('username, forename, surname, position')->from('lvmc_staff')->get();
    return $query->result();

    }
}