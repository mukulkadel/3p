<?php
// Connection
$name="";
$output="";
$usr="root";
$pass="";
$con = new PDO('mysql:host=localhost;port=3307;dbname=pdb',$usr,$pass);
$i=1;
session_start();
$var_value = $_SESSION['varname'];//getting query from different file
$filename = "Eminem.xls"; // File Name


$query =$var_value ;

 $c=$con->prepare($query);
     $c->execute();

// Write data to file
echo "S.no.\tReg. no \tName\r\n";
while($rows=$c->fetch()){
		
	
			echo   $i."\t".$rows["reg_no"]."\t".$rows["name"]."\r\n";
		    $i++;
}
// Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");
header("Pragma: no-cache");
header("Expires: 0");
?>
