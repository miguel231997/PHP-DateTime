<?php

require_once __DIR__ . '/../vendor/autoload.php';

$datetime = new DateTime(); // Current date and time
$datetime = new DateTime('2023-05-19'); // Specific date
$datetime = new DateTime('2023-05-19 15:30:00'); // Specific date and time
$datetime = new DateTime('now', new DateTimeZone('America/New_York')); // Current date and time in a specific time zone


echo $datetime->format('Y-m-d H:i:s'); // Output: 2023-05-19 15:30:00
echo $datetime->format('F j, Y'); // Output: May 19, 2023

$datetime->add(new DateInterval('P1D')); // Add 1 day
$datetime->sub(new DateInterval('PT2H')); // Subtract 2 hours
$datetime->modify('+1 month'); // Add 1 month


$datetime1 = new DateTime('2023-05-19');
$datetime2 = new DateTime('2023-05-20');
if ($datetime1 < $datetime2) {
    echo 'datetime1 is earlier than datetime2';
}


$datetime->setTimezone(new DateTimeZone('America/New_York')); // Convert to a different time zone
echo $datetime->getTimezone()->getName(); // Output: America/New_York



var_dump($dateTime);