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
<? $this->load->view('vMenu'); ?>

</div>




<div class="clear"></div>

<div class="grid_8">
<!-- this is the main body content for the webiste -->
<h2>Admin Control Login</h2>
<p>
   <center><b><?php echo validation_errors(); ?></b></center>
   <?php echo form_open('verifylogin'); ?>
    <table width=50% border="1px" align="center" cellpadding="0" cellspacing="0" class=tbl>
    <tr>
    <td colspan="2" height="20" bgcolor="#999999" align="center" class=tbl>Login to Low Valley Control</td>
    </tr>
    <tr>
    <td class=tbl><label for="username">Username:</label></td>
    <td><input type="text" size="20" id="username" name="username"/></td>
    </tr>
    <tr>
    <td class=tbl><label for="password">Password:</label></td>
    <td><input type="password" size="20" id="passowrd" name="password"/></td>
    <tr>
    <td colspan="2" align="center" class=tbl><input type="submit" value="Login"/></td>
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