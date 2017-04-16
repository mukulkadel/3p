<?php
  include_once 'gpConfig.php';

  unset($_SESSION['token']);
  unset($_SESSION['userData']);
  unset($_SESSION['reg_no']);
  unset($_SESSION['name']);
  unset($_SESSION['email']);
  unset($_SESSION['admin']);
//Reset OAuth access token
  $gClient->revokeToken();

  //Destroy Session
  session_destroy();

  //Redirect to homepage
  header("Location:index.php");
 ?>
