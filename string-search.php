<?php

// strstr to search one word
$a = "Hello world. This is beafutiful world.";

//echo strstr($a, 'WORLD.', true);
//echo stristr($a, 'WORLD.');

echo strpbrk($a, 'T') . "<br>";




// substr to pick specific part of string

$a = "Hello world. This is beafutiful world.";

//echo substr($a, 13, 18);

//echo str_replace('world', 'earth', $a);

$find = ['Hello', 'WORLD'];
$replace = ['Hi', 'earth'];


//echo str_replace($find, $replace, $a);
echo str_ireplace($find, $replace, $a);


$array = ['red', 'green', 'blue', 'pink', 'yellow'];
$newArray =  str_replace('green', 'apple', $array);

echo "<pre>";
print_r($newArray);
echo "/<pre>";


$test2 = "how are you";

//echo substr_replace($test2, 'is', 4,3);

//echo strtr($test2, 'o', 'a');

$array = ['are' => 'is', 'you' => 'he'];

echo strtr($test2, $array);










?>