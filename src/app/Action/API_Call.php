<?php

$curl = curl_init();

$opts = [
    CURLOPT_URL => 'http://localhost:3000/promotions',
    CURLOPT_RETURNTRANSFER => true,
];

//TODO: GET TRUE ID
$id='wutL2vBw4xmcdp8';

curl_setopt_array($curl, $opts);

$response = curl_exec($curl);
//echo $response;
$response = json_decode($response, true);
curl_close($curl);



?>