<?php

//FUNCTIONS ARGUMENTS


// assign value to function's variable

function first($num){
    $num .= " and something extra";
}

$number = "Take this";
first($number);

echo "No.1 " . $number . "<br>";



// assign reference/ address to the function's var

function second(&$num){
    $num .= " and something extra";
}

$number = "Take this";
second($number);

echo "No.2 " . $number . "<br>";



// other example

function a($num){
    $num += 5;
}
function b(&$num){
    $num += 5;
}
$number = 10;
a($number);

echo "orignal value is : " . $number . "<br>";

$number = 10;
b($number);

echo "orignal value is : " . $number;

?>