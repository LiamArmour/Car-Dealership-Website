<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Update photo record.</title>
</head>

<body>
<h1>Update photo record</h1>

<?php foreach($results as $row){ ?>

<?php echo form_open_multipart('site/doupdate');?>

Photo title:
<input type="text" name="PhotoTitle" value="<?php echo $row->PhotoTitle; ?>" size="50" />
<br />

Description:
<input type="text" name="PhotoDescription" value="<?php echo $row->PhotoDescription; ?>" size="50" />
<br />

<?php echo "<img width=\"100\" class=\"thumb\" src=\"/~bg09xm/LVMC/assests/images/" . $row->PhotoFilenameSmall . "\" />"; ?>
<br />
<input type="file" name="userfile" size="20" />
<br />

<input type="hidden" name="PhotoID" value="<?php echo $row->PhotoID; ?>" size="50" />

<div><input type="submit" value="Submit" /></div>
</form>
<?php } ?>
<p>Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</body>
</body>