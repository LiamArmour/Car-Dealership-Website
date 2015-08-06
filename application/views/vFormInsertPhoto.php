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
<h2>Current Stock For Sale</h2>
<p>
<?php echo $error;?>

<?php echo form_open_multipart('site/doupload');?>

<table width="100%" border="1" bordercolor="#000000" cellpadding="0" cellspacing="0" align="center" class="tbl">
<tr>
<td colspan="2" align="center" bgcolor="#333333">Add Stock</td>
</tr>
<tr>
<td width="24%" class="rightalign">Title:</td>
<td width="76%"><input type"text" name="Title" value="" size="50" /></td>
</tr>
<tr>
<td class="rightalign">Description:</td>
<td><textarea name="Description" cols="45" rows="5"></textarea></td>
</tr>
<tr>
<td class="rightalign">Showroom:</td>
<td>
<select name="Location">
  <option value="Roker Showroom">Roker Showroom</option>
  <option value="Sunderland Showroom">Sunderland Showroom</option>
</select>
</td>
</tr>
<tr>
<td colspan="2" bgcolor="#999999" align="center">Photo Section</td>
</tr>
<tr>
<td class="rightalign">Full Car:</td>
<td><input type="file" name="userfile" size="20" /></td>
</tr>
<tr>
<td colspan="2" bgcolor="#999999" align="center">Car Details</td>
</tr>
<tr>
<td class="rightalign">Optional Extras:</td>
<td><textarea name="Extras" cols="45" rows="5"></textarea></td>
</tr>
<tr>
<td width="24%" class="rightalign">Price:</td>
<td width="76%">&pound;<input type"text" name="Price" value="" size="15" maxlength="8"/> (Eg. 5495)</td>
</tr>
<tr>
<td width="24%" class="rightalign">Registration:</td>
<td width="76%"><input type"text" name="Registration" value="" size="15" maxlength="8"/> (Eg. NA12 DDF)</td>
</tr>
<tr>
<td class="rightalign">Fuel:</td>
<td>
<select name="Fuel">
  <option value="Petrol">Petrol</option>
  <option value="Diesel">Diesel</option>
  <option value="LPG">LPG</option>
  <option value="Electric">Electric</option>
  <option value="Hybrid">Hybrid</option>
</select>
</td>
</tr>
<tr>
<td class="rightalign">Make:</td>
<td>
<select name="Make">
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
</td>
</tr>
<tr>
<td width="24%" class="rightalign">Model:</td>
<td width="76%"><input type"text" name="Model" value="" size="10" /></td>
</tr>
<tr>
<td width="24%" class="rightalign">Year (Reg):</td>
<td width="76%"><input type"text" name="Year" value="" size="10" /> | Reg (e.g 06): <input type"text" name="Reg" value="" size="5" /></td>
</tr>
<tr>
<td width="24%" class="rightalign">Mileage:</td>
<td width="76%"><input type"text" name="Mileage" value="" size="10" /></td>
</tr>
<tr>
<td width="24%" class="rightalign">Engine Size:</td>
<td width="76%"><input type"text" name="Engine" value="" size="10" /></td>
</tr>
<tr>
<td class="rightalign">Bodystyle:</td>
<td>
<select name="Bodystyle">
<option value="Hatchback">Hatchback</option>
<option value="Saloon">Saloon</option>
<option value="Estate">Estate</option>
<option value="Convertible">Convertible</option>
<option value="MPV">MPV</option>
<option value="Coupe">Coupe</option>
<option value="4x4">4x4</option>
<option value="Sports">Sports</option>
    </select>
</select> 
</td>
</tr>
<tr>
<td class="rightalign">Gearbox:</td>
<td>
<select name="Gearbox">
  <option value="Manual">Manual</option>
  <option value="Automatic">Automatic</option>
</select>
</td>
</tr>
<tr>
<td class="rightalign">Colour:</td>
<td>
<select name="Colour">
<option value="Beige">Beige</option>
<option value="Black">Black</option>
<option value="Blue">Blue</option>
<option value="Bronze">Bronze</option>
<option value="Brown">Brown</option>
<option value="Burgundy">Burgundy</option>
<option value="Gold">Gold</option>
<option value="Green">Green</option>
<option value="Grey">Grey</option>
<option value="Indigo">Indigo</option>
<option value="Magenta">Magenta</option>
<option value="Maroon">Maroon</option>
<option value="Navy">Navy</option>
<option value="Orange">Orange</option>
<option value="Pink">Pink</option>
<option value="Purple">Purple</option>
<option value="Red">Red</option>
<option value="Silver">Silver</option>
<option value="Turquoise">Turquoise</option>
<option value="White">White</option>
<option value="Yellow">Yellow</option>
</select>
</td>
</tr>
<tr>
<td width="24%" class="rightalign">MPG:</td>
<td width="76%"><input type"text" name="MPG" value="" size="10" /></td>
</tr>
<tr>
<td width="24%" class="rightalign">BHP:</td>
<td width="76%"><input type"text" name="BHP" value="" size="10" /></td>
</tr>
<tr>
<td class="rightalign">Part Ex Welcome:</td>
<td>
<select name="PartEx">
  <option value="Yes">Yes</option>
  <option value="No">No</option>
</select>
</td>
</tr>
<tr>
<td colspan="2"><input type="submit" value="Submit" /></td>
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