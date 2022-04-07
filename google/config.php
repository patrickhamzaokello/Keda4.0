<?php
/*
 * Basic Site Settings and API Configuration
 */

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'mwonya');
define('DB_USER_TBL', 'goousers');

// Google API configuration
define('GOOGLE_CLIENT_ID', '523793420956-j3b0n95du9n9e97ue895rfsf5ng47n5f.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', 'NZGllJwDoyY3Cz9CwWAEf-QB');
define('GOOGLE_REDIRECT_URL', 'https://www.mwonyaa.com/browse');

// Start session
if(!session_id()){
    session_start();
}

// Include Google API client library
require_once 'google-api-php-client/Google_Client.php';
require_once 'google-api-php-client/contrib/Google_Oauth2Service.php';

// Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId(GOOGLE_CLIENT_ID);
$gClient->setClientSecret(GOOGLE_CLIENT_SECRET);
$gClient->setRedirectUri(GOOGLE_REDIRECT_URL);

$google_oauthV2 = new Google_Oauth2Service($gClient);