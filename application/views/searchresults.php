<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Low Valley Motor Company Ltd</title>

<link rel="stylesheet" href="http://nestor.sunderland.ac.uk/~bg09xm/LVMC/css/text.css" />
<link rel="stylesheet" href="http://nestor.sunderland.ac.uk/~bg09xm/LVMC/css/960.css" />
<link rel="stylesheet" href="http://nestor.sunderland.ac.uk/~bg09xm/LVMC/css/uncompressed/demo.css" />
<link href="http://nestor.sunderland.ac.uk/~bg09xm/LVMC/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/~bg09xm/LVMC/assests/lightbox/css/lightbox.css" media="screen" />
<script src="/~bg09xm/LVMC/assests/lightbox/js/prototype.js" type="text/javascript"></script>
<script src="/~bg09xm/LVMC/assests/lightbox/js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
<script src="/~bg09xm/LVMC/assests/lightbox/js/lightbox.js" type="text/javascript"></script>
<style type="text/css">
pricesize {
	font-size: 18px;
}
left {
	width: 45%;
	float: left;
}

right {
	width: 45%;
	float: right;
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
<? $this->load->view('vMenu'); ?>

</div>




<div class="clear"></div>

<div class="grid_8">
<!-- this is the main body content for the webiste -->
<h2>Search Results</h2>
<p>

   
<?php foreach($results as $row): ?>
<table width="99%" border="1px" cellpadding="0" cellspacing="0" align="center" class=tbl>
<tr valign="middle">
<td align=center rowspan="6" width="200" height="150" valign="middle">
<a href="/~bg09xm/LVMC/assests/images/<?php echo $row->PhotoFilenameSmall; ?>" rel="lightbox" >
<img width="190" height="150" src="/~bg09xm/LVMC/assests/images/<?php echo $row->PhotoFilenameSmall; ?>" /></a>
</td>
<tr>
<td width="50%" align="center"><b><pricesize><a href="/~bg09xm/LVMC/index.php/site/viewcar/<?php echo $row->PhotoID; ?>"><?php echo $row->Title; ?></a></pricesize></b></td>
<td height="22" align="right" width="50%"><b><pricesize>
<a href="/~bg09xm/LVMC/index.php/site/viewcar/<?php echo $row->PhotoID; ?>">£<?
$number = "$row->Price"; 
echo  $english_format_number = number_format($number, 0); 
?></a>
</pricesize></b> &nbsp;</td>
</tr>
<tr>
<td height="22" align="left"><b>&nbsp; Year (Reg):</b> <?php echo $row->Year; ?> (<?php echo $row->Reg; ?>)</td>
<td height="22" align="left"><b>&nbsp; Milage:</b> <?php echo $row->Mileage; ?></td>
</tr>
<tr>
<td height="22" align="left"><b>&nbsp; Car:</b> <?php echo $row->Make; ?> <?php echo $row->Model; ?></td>
<td height="22" align="left"><b>&nbsp; Colour:</b> <?php echo $row->Colour; ?></td>
</tr>
<tr>
<td height="22" align="left"><b>&nbsp; Engine:</b> <?php echo $row->Engine; ?></td>
<td height="22" align="left"><b>&nbsp; Fuel:</b> <?php echo $row->Fuel; ?></td>
</tr>
<tr>
<td height="22" align="left"><b>&nbsp; Gearbox:</b> <?php echo $row->Gearbox; ?></td>
<td height="22" align="left"><b>&nbsp; Body Style:</b> <?php echo $row->Bodystyle; ?></td>
</tr>
<tr>
<td colspan="3" align="right">
<left><a href="/~bg09xm/LVMC/index.php/site/viewcar/<?php echo $row->PhotoID; ?>">Click To View More Information About This <b><?php echo $row->Make; ?></b></a></left> 
<right>
Share: 
<a onclick="window.open('http://www.facebook.com/share.php?u=http://nestor.sunderland.ac.uk/~bg09xm/LVMC/index.php/site/viewcar/<?php echo $row->PhotoID; ?>','_blank'); return false;" href="http://www.facebook.com/share.php?u=http://nestor.sunderland.ac.uk/~bg09xm/LVMC/index.php/site/viewcar/<?php echo $row->PhotoID; ?>" rel="nofollow"><img src="/~bg09xm/LVMC/facebook.png" border="0"></a>
<a onclick="window.open('http://twitter.com/home?status=http://nestor.sunderland.ac.uk/~bg09xm/LVMC/index.php/site/viewcar/<?php echo $row->PhotoID; ?>','_blank'); return false;" href="http://twitter.com/home?status=http://nestor.sunderland.ac.uk/~bg09xm/LVMC/index.php/site/viewcar/<?php echo $row->PhotoID; ?>" rel="nofollow"><img src="/~bg09xm/LVMC/twitter.png" border="0"></a>
</right>
</td>
</tr>
</table>

<?php endforeach; ?>
    
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