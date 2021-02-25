<?php

$filename = 'data.json';

$data = file_get_contents($filename);
$words = json_decode($data, false);
?>