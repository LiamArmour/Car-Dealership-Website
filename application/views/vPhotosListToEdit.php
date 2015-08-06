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
    <table width="100%" align="center" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000" class="tbl">
    <tr>
    <td colspan="7" height="22" align="center" bgcolor="#4f4f4f">Current Cars For Sale</td>
    </tr>
    <tr>
    <td align="center" width="50" height=20 bgcolor="#999999">Photo</td>
    <td align="center" bgcolor="#999999">Registration</td>
    <td align="center" bgcolor="#999999">Title</td>
    <td align="center" bgcolor="#999999">Price</td>
    <td align="center" bgcolor="#999999">Make</td>
    <td align="center" bgcolor="#999999">Location</td>
    <td align="center" bgcolor="#999999">Options</td>
    </tr>
    <?php
		foreach($results as $row){
			echo "<tr><td align=center height=40><a href=\"" . $row->PhotoID . "\">";
			echo "<img width=\"100%\" width=\"40\" class=\"thumb\" src=\"/~bg09xm/LVMC/assests/images/" . $row->PhotoFilenameSmall . "\" />";
			echo "</a></td>";
			
			echo "<td width=145 height=20 align=center background=/~bg09xm/LVMC/assests/images/carlogo/numberplate.png><font color=black><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo $row->Registration ;
			echo "</b></font></td>";
			
			echo "<td align=center>";
			echo $row->Title ;
			echo "</td>";
			
			echo "<td align=center>£";
			echo $row->Price ;
			echo "</td>";
			
			echo "<td align=center>";
			echo "<img src=/~bg09xm/LVMC/assests/images/carlogo/" . $row->Make . ".png width=50 height=30>" ;
			echo "</td>";
			
			echo "<td align=center>";
			echo $row->Location ;
			echo "</td>";
			
			echo "<td align=center><a href=\"/~bg09xm/LVMC/index.php/site/viewstock/" . $row->PhotoID . "\">";
			echo "Edit";
			echo "</a></td>";
			
			echo "</tr>";
			
		}
		?>
		
        
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