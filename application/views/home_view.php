
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Low Valley Motor Company Ltd</title>
<link rel="stylesheet" href="http://nestor.sunderland.ac.uk/~bg09xm/LVMC/css/reset.css" />
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
<h2>Welcome <?php echo $username; ?>!</h2>
<p>
<strong>Low Valey Motor Company Limited Management System.</strong><br><br>


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
   
 </body>
</html>
