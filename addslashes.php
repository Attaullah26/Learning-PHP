<?php

// to add slashes and remove 

$a = "This is 'Hello World.'";

echo $a . '<br>';
echo "addslashes : " . addslashes($a) . "<br>";
echo "stripslashes : " . stripslashes($a) . "<br><br>";




// add slashes to particular word or character

$b = "Hello Babar Writes";

echo $b . "<br>";
echo "addcslashes : " . addcslashes($b, 'A..Z') . "<br>";
echo "stripcslashes : " . stripcslashes($b) . "<br><br><br>";












?>