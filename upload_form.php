<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>IS 601 - Gabrielle Mack - Project 1</title>
<link rel="stylesheet" type="text/css" href="tableDev.css" media="all">
</head>

<body>


<div id="SuperContainer">
<div id="Header"><img src="logo.png" height="100" /></div>


<div id="Container">
<?php if(isset($_GET['error']))if($_GET['error'])echo "Error: Close your file before import";?>
<?PHP
echo  "TEMP DIRECTORY IS: ". sys_get_temp_dir(); 

?>
<form action="test.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <label for="file">Browse to chose file</label>
  <input type="file" name="file" id="file" />
  <input type="submit" name="Import" value="Import" />
    <h4>Please Note: Files must be in <b>.CSV</b> format only.</h4>
</form>

</div>
<!-- End Container -->
<div id="Footer"></div><!-- End Footer -->
</div>
<!-- End SuperContainer -->
</body>
</html>