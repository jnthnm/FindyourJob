<?php

require('vendor/autoload.php');

const CLIENT_ID     = 'wial9i7lYt5eUEAksmuMaIPiWXO2CCk9Vvv4NCqM';
const CLIENT_SECRET = '6v109BlCXQp8zfqvceyPRTZNouSb7iYdOZeYAzBy';

const REDIRECT_URI           = 'http://localhost/Find-your-jOb/methode_post_oauth.php';
const AUTHORIZATION_ENDPOINT = 'http://localhost/Find-your-jOb/oauth/authorize';
const TOKEN_ENDPOINT         = 'http://localhost/Find-your-jOb/oauth/token';

$client = new OAuth2\Client(CLIENT_ID, CLIENT_SECRET);
if (!isset($_GET['code']))
{
    $auth_url = $client->getAuthenticationUrl(AUTHORIZATION_ENDPOINT, REDIRECT_URI);
    header('Location: ' . $auth_url);
    die('Redirect');
}
else
{
    $params = array('code' => $_GET['code'], 'redirect_uri' => REDIRECT_URI);
    $response = $client->getAccessToken(TOKEN_ENDPOINT, 'authorization_code', $params);
    echo '<pre>';
    var_dump($response);
}



 ?>
