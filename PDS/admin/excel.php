<?php
// Connection 
$name="";
$output="";
$usr="root";
$pass="";
$con = new PDO('mysql:host=localhost;port=3307;dbname=pdb',$usr,$pass);

session_start();
$var_value = $_SESSION['varname'];
$filename = "Eminem.xls"; // File Name
// Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");
$query =$var_value ;

 $c=$con->prepare($query);
     $c->execute();

// Write data to file
$flag = false;
while($rows=$c->fetch()) {
    if (!$flag)
	
	 {
        // display field/column names as first row
        echo implode("\t", array_keys($rows)) . "\r\n";
        $flag = true;
    }
    echo implode("\t", array_values($rows)) . "\r\n";
}
?>