<?php
$conectoken = "eyJhbGciOiJSUzI1NiJ9.eyJ
pc3MiOiJjYXJkdHJhZGVyLXByb2R1Y3Rpb24iLC
JzdWIiOiJhcHA6OTExNSIsImF1ZCI6ImFwcDo5M
TE1IiwiZXhwIjo0ODYzMTAyODk5LCJqdGkiOiIy
NGQ4N2NlNS1lZjBmLTQ0NGItODliYy0zM2MzYWI
wY2U2N2MiLCJpYXQiOjE3MDc0MjkyOTksIm5hbW
UiOiJDbG9hcGkgQXBwIDIwMjQwMjA4MjIxMDU5I
n0.LaI9-5Jmvsc2ZkSnbj-PFpl-lAcCGz4d_qVF
USTzF4lRo7_UjvvQFwKjOGEq-UI_ZUIaTsOWyml
NNGanOCL9obgoudxOk8K0NHaO3RWSM3DS_5BqjE
YLyqVKuuruqYpBGDYmetL6USOOAUBimQ9YILabR
3xuPSaXU2_Ohb-nV_yqbQZ3WvpThVGWM0OV7cUv
ht00PIcm1zSxiwnZxqomRhvhV_bx_hjMabXk-38
6O8TecIAZeYbJkAhTzAocphM6rHTBKNq8OX1wRV
22F1y6obPpOXQV-pmz4CZKY3ij8yM3oYyCb1NoI
ky3S_6PQDwz9fRNJPlwPHcr5JhHqKIejA";

 $ch = curl_init();

 // Set cURL options
 $url = "https://api.cardtrader.com/api/v2/games";
 curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER,  1);
 curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
$heder= array (
    "Authorization: " => "Bearer ".$conectoken
);

 curl_setopt($ch, CURLOPT_HTTPHEADER, $heder);
 //  $postData = array(
//    "Authorization: " => "Bearer ".$conectoken
//  );

//  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));

 // Disable SSL certificate verification (for testing purposes only!)
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

 $response = curl_exec($ch);
 $headers = curl_getinfo($ch);
 var_dump($headers);
 var_dump($response);
 // Check for cURL errors
 if (curl_errno($ch)) {
   var_dump('Curl error: ' . curl_error($ch));
 }
 // Close cURL session
 curl_close($ch);
 // Process the response as needed
 $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
 if ($httpCode ==  200) {
     echo $response;
 }
 ?>
