<?php 

$data = include('01_extract.php');

$transformed_data = [
    'passengers' => $data['passengers']['results'][0]['summe'],
    'temperature' => $data['weather']['current']['temperature_2m']
];

return $transformed_data;