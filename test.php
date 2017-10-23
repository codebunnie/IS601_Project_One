<?php




if($_FILES['file']['type']!='application/vnd.ms-excel'){
	echo "Wrong File type. Only CSV files are allowed to upload. Valid file is '<b>example.CSV</b>'. ";
	echo "<a href='/test.php'>Import CSV File</a>";
	die;
	}
	if(move_uploaded_file($_FILES['file']['tmp_name'],$_FILES['file']['name']))
		$filename = $_FILES['file']['name'];
	else{
		header('Location: /test.php?error=true');
		echo "Couldn't upload file, Please close the file while importing the file!!";
		echo "<a href='/test.php'>Import CSV File</a>";
		die;
	}




$file = fopen($filename,"r"); //get the csv file
echo "You are Uploading the Following File ".$filename;
//print_r(fgetcsv($file));
$data = fgetcsv($file);

//echo "<br><br><br><br><br><br><br>";
//$headrows = array(fgetcsv($file));

echo "<br><br><br><br><br><br><br>";





////print_r($headrows[0]);

//echo "<br><br><br><br><br><br><br>";
 //counter for while loop and number of columns
 //echo "table headers <br>";

// print csv headers
/*
while ($line = fgetcsv($file)){

  // count($line) is the number of columns
  $numcols = count($line);

  // Bail out of the loop if columns are incorrect
  if ($numcols != $allowedColNum) {
     break;
  }
  $col = $line[0]; 
  echo $batchcount++.". ".$col."\n";
}
*/




?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<table class="redTable">


<?php


//print headers
 $numcols = count($data) - 1;
 echo "Number of Table Columns is: ".$numcols;
 
 echo "<thead><tr>";
 
 $i = 0;
 
 while ($i<=$numcols){
	 
			echo "<th><b>I=".$i."</b> LOOP 2 <br>".$data[$i]."</th>";
			$i++;
 }
	echo "</tr></thead>";
	$i = 0;
			
			
 

 while (($data = fgetcsv($file)) !== FALSE) { //first while - while not end of file

 //$data = rtrim($data);
 echo "<tr>";
 while ($i <= $numcols && $data[$i] !== NULL) 
				{
					echo "<td><b>I=".$i."</b> LOOP 2 <br>".$data[$i]."</td>";
				$i ++;
				}
			    $i = 0;
		echo "</tr>";

			
}

 

/* 
 echo "<thead><tr><th>".$data[0] ."</th>".
	"<th>".$data[1]."</th>".
	"<th>".$data[2]."</th>".
	"<th>".$data[3]."</th>".
	"<th>".$data[4]."</th>".
	"<th>".$data[5]."</th>".
	"<th>".$data[6]."</th>".
	"<th>".$data[7]."</th>".
	"<th>".$data[8]."</th>".
	"<th>".$data[9]."</th>".
	"<th>".$data[10]."</th>".
	"<th>".$data[11]."</th>".
	"<th>".$data[12]."</th>".
	"<th>".$data[13]."</th>".
	"<th>".$data[14]."</th>".
	"<th>".$data[15]."</th>".
	"<th>".$data[16]."</th>".	
	"<th>".$data[17]."HEADER END</th> </tr></thead>".
	"<br><br><br><br><br><br><br><br><br>";
	
	//get data 
 
 */
 
 
 

/*
while (($data = fgetcsv($file)) !== FALSE) 

 {
    echo "<tr><td>".$data[0] ."</td>".
	"<td>".$data[1]."</td>".
	"<td>".$data[2]."</td>".
	"<td>".$data[3]."</td>".
	"<td>".$data[4]."</td>".
	"<td>".$data[5]."</td>".
	"<td>".$data[6]."</td>".
	"<td>".$data[7]."</td>".
	"<td>".$data[8]."</td>".
	"<td>".$data[9]."</td>".
	"<td>".$data[10]."</td>".
	"<td>".$data[11]."</td>".
	"<td>".$data[12]."</td>".
	"<td>".$data[13]."</td>".
	"<td>".$data[14]."</td>".
	"<td>".$data[15]."</td>".
	"<td>".$data[16]."</td>".	
	"<td>".$data[17]."</td> </tr>";
	
}
*/
	echo "</table></html>";

	fclose($file);
	
?>