<?php
  include_once 'gpConfig.php';

  if(isset($_SESSION['token']))
    unset($_SESSION['token']);
  if(isset($_SESSION['userData']))
    unset($_SESSION['userData']);
  if(isset($_SESSION['reg_no']))
    unset($_SESSION['reg_no']);
  if(isset($_SESSION['name']))
    unset($_SESSION['name']);
  if(isset($_SESSION['email']))
    unset($_SESSION['email']);
  if(isset($_SESSION['admin']))
    unset($_SESSION['admin']);
//Reset OAuth access token
  $gClient->revokeToken();

  //Destroy Session
  session_destroy();

  //Redirect to homepage
  header("Location:index.php");
 ?>
