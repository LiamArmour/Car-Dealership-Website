<?
$query = $this->db->query('SELECT * FROM lvmc_misc WHERE id=1');

foreach ($query->result_array() as $row)
{

}
?>
&nbsp; <a href="http://nestor.sunderland.ac.uk/~bg09xm/LVMC/">Home</a> | <a href="http://nestor.sunderland.ac.uk/~bg09xm/LVMC/index.php/site/sunderland/">Sunderland Showroom</a> | <a href="http://nestor.sunderland.ac.uk/~bg09xm/LVMC/index.php/site/roker/">Roker Showroom</a> | <a href="http://nestor.sunderland.ac.uk/~bg09xm/LVMC/index.php/site/search/">Search Cars</a> | <a href="http://nestor.sunderland.ac.uk/~bg09xm/LVMC/index.php/site/contact/">Contact Us</a> 
<br>
&nbsp; <strong>Roker Showroom:</strong> <?php echo $row['Address1']; ?> | <strong>Sunderland Showroom:</strong> <?php echo $row['Address2']; ?> <br>
&nbsp; <?php echo $row['Footer']; ?> | Page rendered in <strong>{elapsed_time}</strong> seconds
