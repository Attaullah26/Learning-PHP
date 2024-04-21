<?php
// index arrays

$numbers = array(10,20,30);

//echo $numbers[0];
 

// $colors = ["Red", "Green", "Blue"];

$colors[0] = "Red";
$colors[1] = "Green";
$colors[2] = "Blue";

// if we have hundreds of values to print we use loop as below;
// also added in list style
echo "<ul>";
for($i = 0; $i < 3; $i++){
    echo "<li>$colors[$i] . </li>";
}
echo "/<ul>";

// for testing purpose 
echo "<pre>";
print_r($colors);
echo "</pre>";

// to print in details e.g value key, data type etc;
var_dump($numbers);
echo "<br>";echo "<br>";echo "<br>";echo "<br>";




// associative arrays =>

$age = array(
    "Bill" => "Twenty five",
    "Sam" => 21,
    "Elon" => 29.5
);

echo "Age : " . $age[ "Elon"] . "<br><br>";

print_r($age);
echo "<br><br>";

var_dump($age);


?>