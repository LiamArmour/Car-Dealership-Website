<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="/~bg09xm/LVMC/assests/lightbox/css/lightbox.css" media="screen" />
<script src="/~bg09xm/LVMC/assests/lightbox/js/prototype.js" type="text/javascript"></script>
<script src="/~bg09xm/LVMC/assests/lightbox/js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
<script src="/~bg09xm/LVMC/assests/lightbox/js/lightbox.js" type="text/javascript"></script>

	<meta charset="utf-8" />
    <title><?php echo $browsertitle; ?></title>
    
<style>
body{ background:lightgrey;}
img{ padding:10px; margin:10px; background:white; }
</style>

</head>
<body>

	<h1><?php echo $pagetitle; ?></h1>
    <p><?php echo $bodytext; ?></p>
    
    <?php
    	foreach($results as $row){
        	echo "<a href=\"/~bg09xm/LVMC/assests/images/" . $row->PhotoFilenameLarge . "\" rel=\"lightbox\" >";
            echo "<img width=\"100\" src=\"/~bg09xm/LVMC/assests/images/" . $row->PhotoFilenameSmall . "\" />";
            echo "</a>";
		}
	?>
    
<p>Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</body>
</html>
        