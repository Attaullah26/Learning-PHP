<?php


// add in end, with push

$test = ["Babar", "Shafi", "Sagar", "Shahid"];

 array_push($test, "Dilber");

 echo "<pre>";
 print_r($test);
 echo "</pre>";




// delete last value, by pop

 $test2 = ["Babar", "Shafi", "Sagar", "Shahid"];


 array_pop($test2);

 echo "<pre>";
 print_r($test2);
 echo "</pre>";




 // delete first value by shift

 $test3 = array("One", "Two", "three", "Four");

 array_shift($test3);

 echo "<pre>";
 print_r($test3);
 echo "</pre>";




 // add in start by unshift

 $test4 = array("Five", "Six", "Seven", "Eight");

 array_unshift($test4, "Zero", "First");

 echo "<pre>";
 print_r($test4);
 echo "</pre>";


?>