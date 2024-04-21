<?php

// for index array

$colors = ["Red", "Green", "Blue"];

foreach($colors as $value){
    echo $value . "<br>";
}


echo "<br><br>";





// for associative array
$data = [
    "Name" => "Attaullah",
    "Course" => "Digital Litracy",
    "SNo#" => 232233,
    "City" => "Karachi"
];
foreach($data as $key => $value2){
    echo $key . " : " . $value2 . "<br>";
}

?>