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
<h2>Update a Vehicle</h2>
<p>

<?php foreach($results as $row){ ?>

<?php echo form_open_multipart('site/doupdate');?>


<table width="100%" border="1" bordercolor="#000000" cellpadding="0" cellspacing="0" align="center" class="tbl">
<tr>
<td colspan="2" align="center" bgcolor="#333333"><b>Update a Vehicle</b></td>
</tr>
<tr>
<td>Photo title:</td>
<td><input type="text" name="Title" value="<?php echo $row->Title; ?>" size="50" /></td>
</tr>
<tr>
<td>Description:</td>
<td><textarea name="Description" cols="50" rows="5"><?php echo $row->Description; ?></textarea></td>
</tr>
<tr>
<td colspan="2" bgcolor="#999999" align="center">Photo Section</td>
</tr>
<tr>
<td>Photo:</td>
<td><?php echo "<img width=\"100\" class=\"thumb\" src=\"/~bg09xm/LVMC/assests/images/" . $row->PhotoFilenameSmall . "\" />"; ?>
<br />
<input type="file" name="userfile" size="20" /></td>
</tr>

<tr>
<td colspan="2" bgcolor="#999999" align="center">Car Details</td>
</tr>
<tr>
<td>Optional Extras:</td>
<td><textarea name="Extras" cols="50" rows="5"><?php echo $row->Extras; ?></textarea></td>
</tr>
<tr>
<td>Price (£):</td>
<td><input type="text" name="Price" value="<?php echo $row->Price; ?>" size="10" /> (eg. 1854)</td>
</tr>
<tr>
<td>Registration:</td>
<td><input type="text" name="Registration" value="<?php echo $row->Registration; ?>" size="10" maxlength="8"/> (Eg. NA12 DDF)</td>
</tr>
<tr>
<td>Fuel:</td>
<td>
<select name="Fuel">
  <option value="<?php echo $row->Fuel; ?>">Current->><?php echo $row->Fuel; ?></option>
  <option value="Petrol">Petrol</option>
  <option value="Diesel">Diesel</option>
  <option value="LPG">LPG</option>
  <option value="Electric">Electric</option>
  <option value="Hybrid">Hybrid</option>
</select>
</td>
</tr>
<tr>
<td>Make:</td>
<td>
<select name="Make">
<option value="<?php echo $row->Make; ?>">Current->><?php echo $row->Make; ?></option>
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
<option value="TVR">TVR (87) </option>
<option value="Vauxhall">Vauxhall</option>
<option value="Volkswagen">Volkswagen</option>
<option value="Volvo">Volvo</option>
</select>
</td>
</tr>
<tr>
<td>Model:</td>
<td><input type="text" name="Model" value="<?php echo $row->Model; ?>" size="10" /></td>
</tr>
<tr>
<td>Year (Reg):</td>
<td><input type="text" name="Year" value="<?php echo $row->Year; ?>" size="10" /> | Reg (e.g 06): <input type"text" name="Reg" value="<?php echo $row->Reg; ?>" size="5" /></td>
</tr>
<tr>
<td>Mileage:</td>
<td><input type="text" name="Mileage" value="<?php echo $row->Mileage; ?>" size="10" /></td>
</tr>
<tr>
<td>Engine:</td>
<td><input type="text" name="Engine" value="<?php echo $row->Engine; ?>" size="10" /></td>
</tr>
<tr>
<td>Bodystyle:</td>
<td>
<select name="Bodystyle">
<option value="<?php echo $row->Bodystyle; ?>">Current->><?php echo $row->Bodystyle; ?></option>
<option value="Hatchback">Hatchback</option>
<option value="Saloon">Saloon</option>
<option value="Estate">Estate</option>
<option value="Convertible">Convertible</option>
<option value="MPV">MPV</option>
<option value="Coupe">Coupe</option>
<option value="4x4">4x4</option>
<option value="Sports">Sports</option>
    </select>
</td>
</tr>
<tr>
<td class="rightalign">Gearbox:</td>
<td>
<select name="Gearbox">
<option value="<?php echo $row->Gearbox; ?>">Current->><?php echo $row->Gearbox; ?></option>
  <option value="Manual">Manual</option>
  <option value="Automatic">Automatic</option>
</select>
</td>
</tr>
<tr>
<td>Colour:</td>
<td>
<select name="Colour">
<option value="<?php echo $row->Colour; ?>">Current->><?php echo $row->Colour; ?></option>
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
<td>MPG:</td>
<td><input type="text" name="MPG" value="<?php echo $row->MPG; ?>" size="10" /></td>
</tr>
<tr>
<td>BHP:</td>
<td><input type="text" name="BHP" value="<?php echo $row->BHP; ?>" size="10" /></td>
</tr>
<tr>
<td class="rightalign">Part Ex Welcome:</td>
<td>
<select name="PartEx">
  <option value="<?php echo $row->PartEx; ?>">Current->><?php echo $row->PartEx; ?></option>
  <option value="Yes">Yes</option>
  <option value="No">No</option>
</select>
</td>
</tr>
<tr>
<td colspan="2" bgcolor="#999999" align="center">Other Details</td>
</tr>
<tr>
<td>Location:</td>
<td>
<select name="Location">
  <option value="<?php echo $row->Location; ?>">Current->><?php echo $row->Location; ?></option>
  <option value="Roker Showroom">Roker Showroom</option>
  <option value="Sunderland Showroom">Sunderland Showroom</option>
</select>
</td>
</tr>
<tr>
<td>Status:</td>
<td>
<select name="Status">
  <option value="<?php echo $row->Status; ?>">Current->><?php echo $row->Status; ?></option>
  <option value="ForSale">For Sale</option>
  <option value="Sold">Sold</option>
</select>
</td>
</tr>
<tr>
<td colspan="2">
<input type="hidden" name="PhotoID" value="<?php echo $row->PhotoID; ?>" size="50" />
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