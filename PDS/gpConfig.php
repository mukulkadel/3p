<?php
  session_start();

  //Include Google client library
  include_once 'src/Google_Client.php';
  include_once 'src/contrib/Google_Oauth2Service.php';

  //Setting up Google API
  $clientId = '793314049256-n6n8o79vhdqblf4c0fcnkco4nusnc4o6.apps.googleusercontent.com';
  $clientSecret = 'VMnfHuuu3Il5Abeep06HNLhG';
  $redirectUri = 'http://localhost/3p/PDS/login.php';

  //Call Google API
  $gClient = new Google_Client();
  $gClient->setApplicationName('Poornima Drive Solution');
  $gClient->setClientId($clientId);
  $gClient->setClientSecret($clientSecret);
  $gClient->setRedirectUri($redirectUri);

  $google_oauthV2 = new Google_Oauth2Service($gClient);
 ?>
