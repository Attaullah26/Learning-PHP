<?php

$colors = ["a" => "red","b" =>  "green","49" =>  "blue","75" =>  "pink","50" =>  "yello","c" =>  "gray"];

$final = array_slice($colors, 2,3);
$final = array_slice($colors, 2,3, true);

echo "<pre>";
echo print_r($final);
echo "</pre>";



// splice to add new value, add & replace current, add without replacing or removing current values

$color = [ "red", "green", "blue",  "pink", "yello", "gray"];
$fruit = ["orange", "apple"];

array_splice($color,0,0, $fruit);

echo "<pre>";
echo print_r($color);
echo "</pre>";







?>