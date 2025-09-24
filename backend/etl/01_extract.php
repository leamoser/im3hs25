<?php

function fetchWeatherData() {
    $url = "https://api.open-meteo.com/v1/forecast?latitude=47.42603653189012&longitude=9.376236941568413&current=temperature_2m";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response, true);
}

function fetchPassengerData() {
    $url = "https://daten.stadt.sg.ch/api/explore/v2.1/catalog/datasets/fussganger-stgaller-innenstadt-vadianstrasse/records?order_by=measured_at_new%20DESC&limit=1";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response, true);
}

return [
    'weather' => fetchWeatherData(),
    'passengers' => fetchPassengerData(),
];

?>