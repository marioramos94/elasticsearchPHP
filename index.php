<?php

$curl = curl_init();


curl_setopt_array($curl, array(
  CURLOPT_URL => "localhost:9200/escuela/curso/_search",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "content-type:application/json"
  ),
));


$response = curl_exec($curl);
$err = curl_error($curl);

header('Content-Type: application/json');
echo $response;

curl_close($curl);


?>