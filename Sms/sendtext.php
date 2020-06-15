<?php

$params = array(
	"Identity" => "087xxxxxxxxx",
	"Message" => "This text send from telegram",
  "Type" => "SMS" //Jika Type = SMS (untuk mengirim pesan normal) Jika Type = OTP untuk mengirim OTP
); 

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://sms.soserba.com/users/sendtext",
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