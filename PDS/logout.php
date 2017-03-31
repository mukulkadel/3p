<?php
  include_once 'gpConfig.php';

  unset($_SESSION['token']);
  unset($_SESSION['userData']);
//Reset OAuth access token
  $gClient->revokeToken();

  //Destroy Session
  session_destroy();

  //Redirect to homepage
  header("Location:index.php");
 ?>
