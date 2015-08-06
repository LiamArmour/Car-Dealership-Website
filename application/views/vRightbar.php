<?
$query = $this->db->query('SELECT * FROM lvmc_misc WHERE id=1');

foreach ($query->result_array() as $row)
{

}
?>

<table width="98%" bgcolor="#666666">
<tr>
<td colspan="2"><strong><h5><center><?php echo $row['Name']; ?></center></h5></strong></td>
</tr>
<tr>
<td>
&nbsp; <strong>Telephone:</strong> <br>
&nbsp; <strong>Email:</strong> <br>
&nbsp; <strong>Roker:</strong> <br>
&nbsp; <strong>Sunderland:</strong>
</td>
<td>
<?php echo $row['Telephone']; ?> <br>
<?php echo $row['Email']; ?> <br>
<?php echo $row['Address1']; ?> <br>
<?php echo $row['Address2']; ?> <br>
</td>
</tr>
</table>

<table width="98%" bgcolor="#666666">
<tr>
<td colspan="2"><strong><h5><center>Opening Times</center></h5></strong></td>
</tr>
<tr>
<td>
&nbsp; <strong>Monday:</strong> <br>
&nbsp; <strong>Tuesday:</strong> <br>
&nbsp; <strong>Wednesday:</strong> <br>
&nbsp; <strong>Thursday:</strong> <br>
&nbsp; <strong>Friday:</strong> <br>
&nbsp; <strong>Saturday:</strong> <br>
&nbsp; <strong>Sunday:</strong> 
</td>
<td>
<font color="white">
<?php echo $row['MonOpen']; ?> - <?php echo $row['MonClose']; ?> <br>
<?php echo $row['TueOpen']; ?> - <?php echo $row['TueClose']; ?> <br>
<?php echo $row['WedOpen']; ?> - <?php echo $row['WedClose']; ?> <br>
<?php echo $row['ThurOpen']; ?> - <?php echo $row['ThurClose']; ?> <br>
<?php echo $row['FriOpen']; ?> - <?php echo $row['FriClose']; ?> <br>
<?php echo $row['SatOpen']; ?> - <?php echo $row['SatClose']; ?> <br>
<?php echo $row['SunOpen']; ?> - <?php echo $row['SunClose']; ?>
</font>
</td>
</tr>
</table>
