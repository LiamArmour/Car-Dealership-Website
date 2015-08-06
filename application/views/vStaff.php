<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Low Valley Motor Company Ltd</title>

<link rel="stylesheet" href="http://nestor.sunderland.ac.uk/~bg09xm/LVMC/css/text.css" />
<link rel="stylesheet" href="http://nestor.sunderland.ac.uk/~bg09xm/LVMC/css/960.css" />
<link rel="stylesheet" href="http://nestor.sunderland.ac.uk/~bg09xm/LVMC/css/uncompressed/demo.css" />
<link href="http://nestor.sunderland.ac.uk/~bg09xm/LVMC/css/style.css" rel="stylesheet" type="text/css" />


</head>

<body>

<div class="container_12" class="backdis">

<div class="grid_12 myheader">
<h1 id="banner-left"> 
<span class="hideme">Low Valley Motor Company Ltd</span>

</h1>
</div>



<div class="grid_12" id="navbar">

<!-- this loads in the main menu from an external file, easier for editing -->
<? $this->load->view('vMenuAdmin'); ?>

</div>




<div class="clear"></div>

<div class="grid_8">
<!-- this is the main body content for the webiste -->
<h2>Low Valley Motor Company Staff</h2>
<p>

<table width="99%" border="1px" cellpadding="0" cellspacing="0" align="center" class=tbl>
<tr>
<td height="22" bgcolor="#999999" align=center>Username</td>
<td bgcolor="#999999" align=center>Forename</td>
<td bgcolor="#999999" align=center>Surname</td>
<td bgcolor="#999999" align=center>Position</td>
</tr>
<?php foreach($query as $row): ?>

<tr> 
<td align=center height="20"><?php echo $row->username; ?></td>
<td align=center><?php echo $row->forename; ?></td>
<td align=center><?php echo $row->surname; ?></td>
<td align=center><?php echo $row->position; ?></td>
</tr>
<?php endforeach; ?>
</table>
</p>
</div>



<div class="grid_4">

<!-- this loads in the right bar from an external file, easier for editing -->
<? $this->load->view('vRightbar'); ?>

</div>


<div class="clear"></div>



<div class="container_12">
<div id="bottom">

<!-- this loads in the footer from an external file, easier for editing -->
<? $this->load->view('vFooter'); ?>

</div>

</div>
</body>
</html>