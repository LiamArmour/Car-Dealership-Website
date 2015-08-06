<?php


class roker_model extends CI_Model{
	 
function viewroker()
{
$query = $this->db->query("select * from lvmc_stock WHERE Location = 'Roker Showroom' AND Status = 'ForSale' ORDER BY Price + 0 DESC");
    return $query->result();

    }
}