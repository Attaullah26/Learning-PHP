<?php

$a = 'hello earth';
$b = 'hello world <br>';

//echo strnatcasecmp($a, $b);

//echo substr_compare($a, $b, 0);

//echo similar_text($a, $b);


// string reverse function
//echo strrev($a);

//string shuffle
//echo str_shuffle($a);






// string pad & repeat functions

//echo str_pad($a, 20, ".");
echo str_pad($a, 20, ".", STR_PAD_BOTH) . "<BR>";

echo str_repeat($b, 5);







?>

