<?php

// array_colum to print common values or keys

$test = [
    ["name" => "Babar", "Designation" => "Clerk", "Salary" => 75000],
    ["name" => "Shafi", "Designation" => "Assistant", "Salary" => 91000],
    ["name" => "Shoaib", "Designation" => "Manager", "Salary" => 95000]
];



//$new = array_column($test, 'name');
$new = array_column($test, 'name', 'Designation');

echo '<pre>';
print_r($new);
echo '</pre>';



// array_chink to makes pairs of arrays values

$test2 = 
    ["id" => "00458", "name" => "Babar", "Designation" => "Clerk", "Salary" => 75000];

//$new2 = array_chunk($test2, 2);
$new2 = array_chunk($test2, 4, true);

echo '<pre>';
print_r($new2);
echo '</pre>';




// flip to swip key in place of values and values in place of keys 

$test3 = ["id" => "00458", "name" => "Babar", "Designation" => "Clerk", "Salary" => 75000];

$new3 = array_flip($test3);

echo '<pre>';
print_r($new3);
echo '</pre>';




// array_case_key to change the case of keys upper to lower & lower to upper

$test4 = ["id" => "00458", "name" => "Babar", "Designation" => "Clerk", "Salary" => 75000];

$new4 = array_change_key_case($test4, CASE_UPPER);

echo '<pre>';
print_r($new4) . "<br>";
echo '</pre>';





// array_rand to show new values randomly

$test5 = ["00458", "Babar", "Clerk", 75000];


$new5 = array_rand($test5);

echo '<pre>';
print_r($new5);
echo '</pre>';

echo $test5[$new5] . "<br>";





// shuffle to change the positions of values ramdomly

$colors = array('red', 'green', 'blue', 'pink', 'yellow');

shuffle($colors);

echo "<pre>";
print_r($colors);
echo "</pre>";

?>