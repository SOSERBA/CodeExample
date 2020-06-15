<?php

$params = array(
	"Identity" => "+62xxxxxxxxx",
	"Message" => "This text send from telegram"
); 

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://telegram.soserba.com/users/sendtext",
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