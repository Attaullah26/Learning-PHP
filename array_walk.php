<?php


function myFunction($value, $key){
    echo "$key : $value" . "<br>";
}

$first = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];

$new = array_walk($first, "myFunction");


echo "<pre>";
print_r($new);
echo "</pre>";




// array_map same as walk but it returns values


function square($n, $m){
    return "$n for  $m";
}


$num = [1,2,3,4,5];
$color = ['red', 'green', 'blue', 'black', 'pink'];

$newArray = array_map("square", $num, $color);

echo "<pre>";
print_r($newArray);
echo "</pre>";






// array_reduce to makes all values in one string value


function myFunction2($n, $m){
    $n += $m;
    return $n;
}

//$color = ['red', 'green', 'blue', 'black', 'pink'];
$num = [1,2,3,4,5];

$new = array_reduce($num, 'myfunction2');

echo "<pre>";
print_r($new);
echo "</pre>";









?>