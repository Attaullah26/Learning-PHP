<?php

$test = array("Shahid", "Afridi", "Waseem");

$test1 = array("Shafi",  "Khan");

//$new = array_merge($test, $test1);

$new2 = ($test + $test1);

echo "<pre>";
print_r($new2);
echo "</pre>";




$name = ["Shahid", "Sami", "Wakeel"];
$age = array(20,30,31);

$result = array_combine($name, $age);

echo "<pre>";
print_r($result);
echo "</pre>";


?>