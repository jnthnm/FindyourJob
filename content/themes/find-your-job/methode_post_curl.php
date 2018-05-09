

<?php
/*
Template Name: Curl
*/
?>


<!-- rest api == -->


<?php

// URLs
define('BASEURL',
'http://localhost/Find-your-jOb/');
define('JSONURL','wp-json/wp/v2/');


$curl = curl_init();

curl_setopt($curl, CURLOPT_URL,BASEURL.JSONURL.'posts');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl, CURLOPT_POSTFIELDS, [
  'title' => 'test titre avec curl 2',
  'content' => 'osef du contenu allo stop bug'
]);
curl_setopt($curl, CURLOPT_HTTPHEADER, [
  'authorization: Basic ZmluZHlvdXJqb2I6ZmluZHlvdXJqb2I=',
  'content-type: multipart/form-data'
]);

$response = curl_exec($curl);

$json_decode = json_decode($response, true);

echo '<pre>';
var_dump($json_decode);


?>
