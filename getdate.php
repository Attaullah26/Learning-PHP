<?php


//echo strtotime('now');

echo date('d-m-Y', strtotime('after 7 days')) . '<br>';

echo date_default_timezone_get();

echo date_default_timezone_set('Asia/Karachi');

echo date_default_timezone_get();
echo date('d-m-Y', strtotime('last day of the month')) . '<br>';

$date = strftime("%d %m %Y");

echo $date . '<br><br><br>';


$newDate = date_create('2022-05-15');
date_time_set($newDate, 13,25);
echo date_format($newDate, 'd-m-Y h:i:s') . '<br><br><br>';


$new = date_create('2025-05-13');
date_time_set($new, 20,36);
echo date_format($new, 'd-m-Y h:i:s');















?>