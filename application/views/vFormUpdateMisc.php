<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Low Valley Motor Company Ltd</title>
<link rel="stylesheet" href="/~bg09xm/LVMC/css/reset.css" />
<link rel="stylesheet" href="/~bg09xm/LVMC/css/text.css" />
<link rel="stylesheet" href="/~bg09xm/LVMC/css/960.css" />
<link rel="stylesheet" href="/~bg09xm/LVMC/css/uncompressed/demo.css" />
<link href="/~bg09xm/LVMC/css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.grid_8 .tbl {
	text-align: left;
}
</style>
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
<h2>Update Settings</h2>
<p>

<?php foreach($results as $row){ ?>

<?php echo form_open_multipart('site/doupdatemisc');?>

<table width="100%" align="center" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000" class="tbl">
<tr>
<td colspan="2" height="20" align="center" bgcolor="#999999"><b>Site Settings</b></td>
</tr>
<tr>
<td width="50%">Name:</td>
<td width="50%"><input type="text" name="Name" value="<?php echo $row->Name; ?>" size="30" /></td>
</tr>
<tr>
<td>Footer:</td>
<td><input type="text" name="Footer" value="<?php echo $row->Footer; ?>" size="30" /></td>
</tr>
<tr>
<td>Telephone:</td>
<td><input type="text" name="Telephone" value="<?php echo $row->Telephone; ?>" size="30" /></td>
</tr>
<tr>
<td>Email:</td>
<td><input type="text" name="Email" value="<?php echo $row->Email; ?>" size="30" /></td>
</tr>
<tr>
<td>Address1:</td>
<td><input type="text" name="Address1" value="<?php echo $row->Address1; ?>" size="30" /></td>
</tr>
<tr>
<td>Address2:</td>
<td><input type="text" name="Address2" value="<?php echo $row->Address2; ?>" size="30" /></td>
</tr>
<tr>
<td height="20" align="center" bgcolor="#999999" colspan="2">Opening Times</td>
</tr>
<tr>
<td>Monday:</td>
<td>
Open:<input type="text" name="MonOpen" value="<?php echo $row->MonOpen; ?>" size="5" />
Close:<input type="text" name="MonClose" value="<?php echo $row->MonClose; ?>" size="5" />
</td>
</tr>
<tr>
<td>Tuesday:</td>
<td>
Open:<input type="text" name="TueOpen" value="<?php echo $row->TueOpen; ?>" size="5" />
Close:<input type="text" name="TueClose" value="<?php echo $row->TueClose; ?>" size="5" />
</td>
</tr>
<tr>
<td>Wednesday:</td>
<td>
Open:<input type="text" name="WedOpen" value="<?php echo $row->WedOpen; ?>" size="5" />
Close:<input type="text" name="WedClose" value="<?php echo $row->WedClose; ?>" size="5" />
</td>
</tr>
<tr>
<td>Thursday:</td>
<td>
Open:<input type="text" name="ThurOpen" value="<?php echo $row->ThurOpen; ?>" size="5" />
Close:<input type="text" name="ThurClose" value="<?php echo $row->ThurClose; ?>" size="5" />
</td>
</tr>
<tr>
<td>Friday:</td>
<td>
Open:<input type="text" name="FriOpen" value="<?php echo $row->FriOpen; ?>" size="5" />
Close:<input type="text" name="FriClose" value="<?php echo $row->FriClose; ?>" size="5" />
</td>
</tr>
<tr>
<td>Saturday:</td>
<td>
Open:<input type="text" name="SatOpen" value="<?php echo $row->SatOpen; ?>" size="5" />
Close:<input type="text" name="SatClose" value="<?php echo $row->SatClose; ?>" size="5" />
</td>
</tr>
<tr>
<td>Sunday:</td>
<td>
Open:<input type="text" name="SunOpen" value="<?php echo $row->SunOpen; ?>" size="5" />
Close:<input type="text" name="SunClose" value="<?php echo $row->SunClose; ?>" size="5" />
</td>
</tr>
<tr>
<td colspan="2" align=center>
<input type="hidden" name="id" value="<?php echo $row->id; ?>" size="50" />
<input type="submit" value="Submit" />
</td>
</tr>
</table>

</form>
<?php } ?>

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