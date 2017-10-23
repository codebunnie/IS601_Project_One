<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
<title>IS 601 - Gabrielle Mack - Project 1</title>

</head>

<body>





<div>




<table class="redTable">

<?php 
if(isset($_GET['wrong_file_error']))if($_GET['wrong_file_error'])echo "<tr><td>Error: Wrong File Type. Please choose a .CSV file<br></tr></td>";
if(isset($_GET['file_open_error']))if($_GET['file_open_error'])echo "<tr><td>Error: File is currently open. Please close the file to continue<br></tr></td>";


?>

<tr>
<td>
<h2><a href="index.php"> Reset This Form </a><br><br><br>
<form  action="upload.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <label for="file">Browse to chose file</label>
  <input type="file" name="file" id="file" />
  <input type="submit" name="Import" value="Import" />
    <h4>Please Note: Files must be in <b>.CSV</b> format only.</h4></h2>
	
	<?PHP
echo  "SYSTEM TEMP DIRECTORY IS: ". sys_get_temp_dir()."<br>"; 




?>
</form>
</td>
</tr>
</table>
</div>
<!-- End Container -->
<div id="Footer"></div><!-- End Footer -->
</div>
<!-- End SuperContainer -->
</body>
</html>