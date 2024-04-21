<?php

$colors = array('Red', 'Green', 'Yellow', 'Blue', 'pink');

// sort , sorts values only
sort($colors);

echo "<pre>";
print_r($colors);
echo "</pre>";



// rsort , sorts reverse values

rsort($colors);

echo "<pre>";
print_r($colors);
echo "</pre>";




$fruits = ['d' => 'Grapes', 'a' => 'Pineapple', 'c' => 'Apple', 'b' => 'Banana'];

// asort , sorts associative array's ascending order

asort($fruits);

echo "<pre>";
print_r($fruits);
echo "</pre>";



// arrsort , sots associative array'descending order

arsort($fruits);

echo "<pre>";
print_r($fruits);
echo "</pre>";




// ksort sorts by keys

ksort($fruits);

echo "<pre>";
print_r($fruits);
echo "</pre>";



// krsort sorts reverse keys order

krsort($fruits);

echo "<pre>";
print_r($fruits);
echo "</pre>";



// natsort (natural sort) to sort these types of values

$images = ['img2.png', 'img12.png', 'img10.png', 'img1.png'];

natsort($images);

echo "<pre>";
print_r($images);
echo "</pre>";



// natcasesort (case sensative) 

$images = ['img2.png', 'Img12.png', 'img10.png', 'Img1.png'];

natcasesort($images);

echo "<pre>";
print_r($images);
echo "</pre>";



// array_multisort sorts multiple arrays at the same time 

$first = ['Zebra', 'Box', 'Tiger', 'Apple'];
$second = ['Zoo', 'Brother', 'Taxi', 'Axe'];

array_multisort($first, $second);

echo "<pre>";
print_r($first);
echo "</pre>";

echo "<pre>";
print_r($second);
echo "</pre>";




// array_reverse to sort reverse any type of array

$first1 = ['Zebra', 'Box', 'Tiger', 'Apple'];

array_reverse($first1);

echo "<pre>";
print_r($first1);
echo "</pre>";




?>