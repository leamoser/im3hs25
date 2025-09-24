<?php

// -> daten laden
$data = include('extract.php');

// -> daten zusammenfügen
$transformed_data = [];
$transformed_data['passengers'] = $data['passengers']['results'][0]['summe'];
$transformed_data['temperature'] = $data['weather']['current']['temperature_2m'];

// -> als json zurückgeben
return json_encode($transformed_data, JSON_PRETTY_PRINT);
