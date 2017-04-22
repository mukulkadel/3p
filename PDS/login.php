<?php
include_once 'check.php';
$usr="root";
$pass="";
if(isset($_SESSION["userData"])){
		if(preg_match('/@poornima\.org/',$_SESSION["userData"]['email'])){
			$email = $_SESSION["userData"]['email'];
		  $con = new PDO("mysql:host=localhost;dbname=pdb",$usr,$pass);
		  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $query="select reg_no,name from personal where email='$email';";
		  $q = $con->prepare($query);
		  $q->execute();
		  if($q->rowCount()>0){
		    $row = $q->fetch();
		    $_SESSION["reg_no"]=$row["reg_no"];
		    $_SESSION["name"]=$row["name"];
				$_SESSION["email"]=$_SESSION["userData"]['email'];
		  }
			header('Location:./home/');
		}
		elseif($gpUserData["email"]=="ashdon94@gmail.com"||$gpUserData["email"]=="ayushbhaskar09@gmail.com"||$gpUserData["email"]=="bhanucool09@gmail.com"||$gpUserData["email"]=="gaurav1997dlp@gmail.com"||$gpUserData["email"]=="mukulkadel@gmail.com"){
			$email = $_SESSION["userData"]['email'];
		  $con = new PDO("mysql:host=localhost;dbname=pdb",$usr,$pass);
			$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $query="select authority from admin where email='$email';";
		  $q = $con->prepare($query);
		  $q->execute();
			$row=$q->fetch();
			$_SESSION["admin"]=$row["authority"];
			$_SESSION["name"]=$_SESSION["userData"]['first_name']." ".$_SESSION["userData"]['last_name'];
			$_SESSION["email"]=$_SESSION["userData"]['email'];
			header('Location:./admin/');
		}
		else {
			header('location:./logout.php');
		}
}else{
		header('location:./index.php');
}
?>
