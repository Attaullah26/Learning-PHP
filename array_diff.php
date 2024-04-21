<?php

// array_diff to find different values & make its new array


$first = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
$sec = ["a" => "red", "f" => "green", "d" => "purple"];


$new = array_diff($first, $sec);

echo "<pre>";
print_r($new);
echo "</pre>";




// array_diff_key used to find different keys only 

$first1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
$sec1 = ["a" => "red", "f" => "green", "d" => "purple"];


$new2 = array_diff_key($first1, $sec1);

echo "<pre>";
print_r($new2);
echo "</pre>";




// array_diff_assoc to find both different values & keys

$first2 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
$sec2 = ["a" => "red", "f" => "green", "d" => "purple"];


$new3 = array_diff_assoc($first2, $sec2);

echo "<pre>";
print_r($new3);
echo "</pre>";

?>