<?php


// Replace 
$first = ["Babar", "Ali", "Ahmed", "Zubair"];

$sec = ["1" => "Bilal", "2" => "Khan"];

$new = array_replace($first, $sec);

echo "<pre>";
print_r($new);
echo "</pre>";



// replace recursive

$array1 = [$a = ["Red"], $b = ["Green", "yellow"]];
$array2 = [$c = ["Red"], $d = ["yellow"]];

$new = array_replace_recursive($array1, $array2);

echo "<pre>";
print_r($new);
echo "</pre>";

?>