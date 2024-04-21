<?php
/*function hello(){
    echo "Hello this hello function called <br>";
}

hello();
hello();
hello();
hello();

$a = 1;

function fullName($fname,$lname){
    echo "$fname $lname";
}
fullName("Babar", "Writes<br>");
fullName("Hello","world")

function sum($a,$b){
    echo $a * $b;
}

sum(5,5.25);*/



// Return Value

function sum($a,$b,$c){
    $c = $a + $b + $c;

    return $c;
}
function percentage($ts){
    $per = $ts / 3;

    echo $per;
}
$total = sum(50,65,85);

percentage($total);


?>