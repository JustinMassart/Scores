<?php

define('TODAY', (new DateTime('now', new DateTimeZone('Europe/Brussels')))->format('M jS, Y'));
define('FILE_PATH', 'matches.csv');

$matches = [];

$handle = fopen(FILE_PATH, 'r');
$headers = fgetcsv($handle, 1000);

while($line = fgetcsv($handle, 1000)){
    $matches[] = array_combine($headers, $line);
}

require('vue.php');