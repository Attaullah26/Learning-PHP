<?php

$a = ['Apple', "Banana", "Grapes"];

list($one, $two, $three) = $a;

echo $one . "<br>";
echo $two . "<br>";
echo $three . "<br>";



// 
$numbers = [2,4,6];

list($one, $two, $three) = $numbers;

echo $one . "<br>";
echo $two . "<br>";
echo $three . "<br>";



list($b[0], $b[1], $b[2]) = $numbers;

echo $b[0] . "<br>";
echo $b[1] . "<br>";
echo $b[2] . "<br>";



$fruits = [0 => "Grapes", 1 => "Apple", 2 => "Banana"];

list($a, $b, $c) = $fruits;

echo $a . "<br>";
echo $b . "<br>";
echo $c . "<br>";









?>