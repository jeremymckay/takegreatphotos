<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://private-7f722-fullapiexample.apiary-mock.com/pictures");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_POST, TRUE);

curl_setopt($ch, CURLOPT_POSTFIELDS,    [
        "category"=>"Favorite pictures bad category",
        "picture" =>
        [
            "name" => "Jellystone Bears",
            "lat" => 00,
            "lng" => 00,
        ]
    ]);

curl_setopt($ch, CURLOPT_HTTPHEADER, [
  "Content-Type" => "application/json"
]);

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);