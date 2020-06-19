<?php

$params = array(
	"to" => "62857xxxxxxx",
	"text" => "This text send from whatsapp"
); 

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://whatsapp.soserba.com/users/sendtext",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($params),
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer TokenAnda",
    "Content-Type: application/json"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;


?>