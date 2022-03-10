<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('219425861451-5t01hd55m58brte225pbhik3ib01roug.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/Signin_With_Google/sigin.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>