<?php
include_once 'check.php';
$usr="root";
$pass="";

function student(){
	global $usr,$pass;
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
			return 1;
		}
	}
	return 0;
}

function admin(){
	global $usr,$pass;
	$email = $_SESSION["userData"]['email'];
	$con = new PDO("mysql:host=localhost;dbname=pdb",$usr,$pass);
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$query="select authority from admin where email='$email';";
	$q = $con->prepare($query);
	$q->execute();
	if($q->rowCount()>0){
		$row = $q->fetch();
		$_SESSION["admin"]=$row["authority"];
		$_SESSION["name"]=$_SESSION["userData"]['first_name']." ".$_SESSION["userData"]['last_name'];
		$_SESSION["email"]=$_SESSION["userData"]['email'];
		return 1;
	}
	return 0;
}
if(isset($_SESSION["userData"])){
	if(student())
		header('Location:./home/');
	elseif(admin())
		header('Location:./admin/');
	else
		header('Location:./logout.php');
}else{
		header('location:./index.php');
}
?>
