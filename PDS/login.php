<?php
include_once 'check.php';
$usr="root";
$pass="";
if(!empty($gpUserData)){
		if(preg_match('/@poornima\.org/',$gpUserData['email'])){
			$email = $_SESSION["userData"]['email'];
		  $con = new PDO("mysql:host=localhost;dbname=pdb",$usr,$pass);
		  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $query="select reg_no from personal where email='$email';";
		  $q = $con->prepare($query);
		  $q->execute();
		  if($q->rowCount()>0){
		    $row = $q->fetchAll();
		    $_SESSION["reg_no"]=$row[0][0];
				$_SESSION["email"]=$_SESSION["userData"]['email'];
		  }
			header('Location:/3p/PDS/home/');
		}
		else {
			header('location:/3p/PDS/logout.php');
		}
}else{
		$output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
}
?>