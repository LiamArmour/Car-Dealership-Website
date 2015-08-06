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
.grid_8 .tbl tr .rightalign {
	text-align: right;
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
<h2>Add New Employee</h2>
<p>
<?php echo $error;?>

<?php echo form_open_multipart('site/douploadstaff');?>

<table width="100%" border="1" bordercolor="#000000" cellpadding="0" cellspacing="0" align="center" class="tbl">
<tr>
<td colspan="2" align="center" bgcolor="#999999" height="20">Add Staff Member</td>
</tr>
<tr>
<td class="rightalign">Photo:</td>
<td><input type="file" name="userfile" size="20" /></td>
</tr>
<tr>
<td width="50%" class="rightalign">Username*:</td>
<td width="50%"><input type"text" name="username" value="" size="20" /></td>
</tr>
<tr>
<td width="50%" class="rightalign">Password*:</td>
<td width="50%"><input type="password" name="password"></td>
</tr>
<tr>
<td width="50%" class="rightalign">Forename*:</td>
<td width="50%"><input type"text" name="forename" value="" size="20" /></td>
</tr>
<tr>
<td width="50%" class="rightalign">Surname*:</td>
<td width="50%"><input type"text" name="surname" value="" size="20" /></td>
</tr>
<tr>
<td class="rightalign">Position:</td>
<td>
<select name="position">
  <option value="">Select...</option>
  <option value="General Manager">General Manager</option>
  <option value="Sales Manager">Sales Manager</option>
  <option value="Salesman">Salesman</option>
</select>
</td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="Submit" /></td>
</tr>
</table>
</form>

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