<?php


class sunderland_model extends CI_Model{
	 
function viewsunderland()
{
$query = $this->db->query("select * from lvmc_stock WHERE Location = 'Sunderland Showroom' AND Status = 'ForSale' ORDER BY Price + 0 DESC");
    return $query->result();

    }
}