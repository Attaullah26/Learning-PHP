<?php

// array_intersect to matach values

$first = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
$sec = ["a" => "red", "f" => "green", "d" => "purple"];


$new = array_intersect($first, $sec);

echo "<pre>";
print_r($new);
echo "</pre>";



// array_intersect_key to match keys

$first1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
$sec1 = ["a" => "red", "f" => "green", "d" => "purple"];


$new2 = array_intersect_key($first1, $sec1);

echo "<pre>";
print_r($new2);
echo "</pre>";




// array_intersect_assoc to match both keys & values

$first2 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
$sec2 = ["a" => "red", "f" => "green", "d" => "purple"];


$new3 = array_intersect_assoc($first2, $sec2);

echo "<pre>";
print_r($new3);
echo "</pre>";


?>