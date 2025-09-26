<?php

// -> daten laden
$data = include('01_extract.php');

// -> daten zusammenfügen
$transformed_data = [];
$transformed_data['passengers'] = $data['passengers']['results'][0]['summe'];
$transformed_data['temperature'] = $data['weather']['current']['temperature_2m'];

// -> daten weitergeben
return $transformed_data;
