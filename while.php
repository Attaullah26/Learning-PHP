<?php
$a = 10;


// While loop
echo "<ul>";
while($a >= 1){
    echo "<li>" . $a . ") This is while loop </li>";
    $a--;
}
echo "</ul>";

// do while
$b = 1;

do{
    echo $b . " This is Do <br>";
    $b++;
}while($b <= 5);


// for loop 



for($c = 1; $c <= 10; $c++ ){
    echo $c . ") For loop started <br>";
}
?>
