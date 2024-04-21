<?php

// implode array into string

$test5 = ["00458", "Babar", "Clerk", 75000];

$str = implode(" ", $test5);

echo $str;



// explode, string into array

$str = "00458 Babar Clerk 75000";

$newArray = explode(" ", $str);

echo '<pre>';
print_r($newArray);
echo '</pre>';





// str_split to divide a string word into array


$str = "hello babar";

$newArray = str_split($str, 2);

echo '<pre>';
print_r($newArray);
echo '</pre>';



// chunk_split to add additional chunks into string

$str = "hello babar";

$newStr = chunk_split($str,2, "...") . "<br><br>";

echo $newStr;





// case functions of sting


$test = "hello babar writes";

//$new = strtolower($test);
//$new = ucfirst($test);
//$new = lcfirst($test);
$new = ucwords($test);

echo $new . "<br><br>";



// str lenth and count functions

echo strlen($test) . "<br><br>";

echo  str_word_count($test) . "<br><br>";

echo substr_count($test, "babar") . "<br><br>";





?>