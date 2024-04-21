<?php
// date functions

echo "<b>Day is :</b> " . date('d') . '<br>';
echo "<b>Day is :</b> " . date('jS') . '<br><br>';

echo "<b>Month is :</b> " . date('F') . '<br>';
echo "<b>Month is :</b> " . date('m') . '<br>';
echo "<b>Month is :</b> " . date('M') . '<br>';
echo "<b>Month is :</b> " . date('n') . '<br><br>';

echo "<b>Year is :</b> " . date('Y') . '<br>';
echo "<b>Year is :</b> " . date('y') . '<br><br>';

echo "<b>Week is :</b> " . date('D') . '<br>';
echo "<b>Week is :</b> " . date('l') . '<br>';
echo "<b>Week is :</b> " . date('N') . '<br>';
echo "<b>Week is :</b> " . date('w') . '<br><br>';


echo "<b>Full Date is :</b> " . date('jS-M-Y') . '<br><br>';


// to add past date 
echo "<b>Past date :</b> " . date('l-m-Y', mktime(0,0,0,12,05,1995)) . '<br><br>' ;


// date create

$date = date_create("2026-03-12");

echo date_format($date, 'd-m-Y') . '<br><br>';




echo checkdate("2","10","2026");



// date_diff to check difference between two dates


$date1 = date_create("2012-10-15");

echo '<pre>';
print_r($date1) . '<br><br>';
echo '</pre>';


$result = date_modify($date1, "-5 days");

echo '<pre>';
print_r($result) . '<br><br>';
echo '</pre>';





?>