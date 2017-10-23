
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<table class="redTable">
<tr>

<?php


if($_FILES['file']['type']!='application/vnd.ms-excel'){
	echo "<table class='redTable'> <tr><td>Wrong File type. Only CSV files are allowed to upload. Valid file is '<b>example.CSV</b><br><br><a href='index.php'>Import CSV File</a></td</tr></table>";
	die;
	}
	if(move_uploaded_file($_FILES['file']['tmp_name'],$_FILES['file']['name']))
		$filename = $_FILES['file']['name'];
	else{
		header('Location: index.php?error=true');
		echo "Couldn't upload file, Please close the file while importing the file!!";
		echo "<a href='index.php'>Import CSV File</a>";
		die;
	}


$file = fopen($filename,"r"); //get the csv file

//print_r(fgetcsv($file));
$data = fgetcsv($file);





?>
<td><h3> <?php echo "You are Uploading the Following File:    <b>".$filename."</b>"; ?></h3> </td></tr>
</table>



<table class="redTable">


<?php


//print headers
 $numcols = count($data) - 1;

 
 echo "<thead><tr>";
 
 $i = 0;
 
 while ($i<=$numcols){
	 
			echo "<th>".$data[$i]."</th>";
			$i++;
 }
	echo "</tr></thead>";
	$i = 0;
			
			
 

 while (($data = fgetcsv($file)) !== FALSE) { //first while - while not end of file

 //$data = rtrim($data);
 echo "<tr>";
 while ($i <= $numcols && $data[$i] !== NULL) 
				{
					echo "<td>".$data[$i]."</td>";
				$i ++;
				}
			    $i = 0;
		echo "</tr>";

			
}

 


	echo "</table></html>";

	fclose($file);
	
?>