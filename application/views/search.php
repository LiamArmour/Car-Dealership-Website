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
<h2>Search</h2>
<p>


<?php echo form_open('site/search'); ?>

<table width="100%" bgcolor="#666666">
<tr>
<td>
<b>Search:</b> - Make:
<select name="search">
<option value=""> - Please Select -</option>
<option value="Abarth" >Abarth</option>
<option value="Alfa-Romeo" >Alfa Romeo</option>
<option value="Aston-Martin" >Aston Martin</option>
<option value="Audi" >Audi</option>
<option value="Bentley" >Bentley</option>
<option value="BMW">BMW </option>
<option value="Chevrolet">Chevrolet</option>
<option value="Citroen" >Citroen</option>
<option value="Ferrari" >Ferrari</option>
<option value="Fiat" >Fiat</option>
<option value="Ford" >Ford</option>
<option value="Honda" >Honda</option>
<option value="Hyundai" >Hyundai</option>
<option value="Jaguar" >Jaguar</option>
<option value="Jeep" >Jeep</option>
<option value="Kia" >Kia</option>
<option value="Lamborghini" >Lamborghini</option>
<option value="Land_Rover" >Land Rover</option>
<option value="Lexus" >Lexus</option>
<option value="Lotus" >Lotus</option>
<option value="Mazda" >Mazda</option>
<option value="Mercedes-Benz" >Mercedes Benz</option>
<option value="MG">MG</option>
<option value="Mini">Mini</option>
<option value="Mitsubishi" >Mitsubishi</option>
<option value="Nissan">Nissan</option>
<option value="Peugeot">Peugeot</option>
<option value="Porsche">Porsche</option>
<option value="Renault">Renault</option>
<option value="Rolls-Royce">Rolls-Royce</option>
<option value="Saab">Saab</option>
<option value="Seat">Seat</option>
<option value="Skoda">Skoda</option>
<option value="Subaru">Subaru</option>
<option value="Suzuki">Suzuki</option>
<option value="Toyota">Toyota</option>
<option value="TVR">TVR</option>
<option value="Vauxhall">Vauxhall</option>
<option value="Volkswagen">Volkswagen</option>
<option value="Volvo">Volvo</option>
</select>
|
<input type="submit" value="submit" />

</td>
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