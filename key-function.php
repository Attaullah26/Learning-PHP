<?php

$colors = ["a" => "red","b" =>  "green","49" =>  "blue","75" => "pink"];


$newArray = key_exists("755",$colors);

echo "<pre>";
print_r($newArray);
echo "</pre>";

if($newArray){
    echo "Key exists!";
}else{
    echo "Key does not exists";
}

?>