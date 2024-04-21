<?php

// used to make arrays value keys into variables

$a = "nothing";

$array = ['a' => 'Babar', 'b' => 'Assistant', 'c' => 'FiftyThousand'];

//extract($array);

//extract($array, EXTR_SKIP);

//extract($array, EXTR_PREFIX_SAME, 'test');

extract($array, EXTR_PREFIX_ALL, 'test');

echo  "Value of outside a : " . $a . "<br>";
echo  "Value of a : " . $test_a . "<br>";
echo  "Value of b : " . $test_b . "<br>";
echo  "Value of c : " . $test_c . "<br>";




// compact , change variables into a array

$name = "babar";
$designation = "assistant";
$salary = "FiftyThousand";


$newArray = compact("name", "designation", "salary");


echo "<pre>";
print_r($newArray);
echo "</pre>";

?>