<?php
// call function through variable

function first(){
    echo "Hello Babar Writes<br>";
}

$func = "first";
$func();


// other method 

$hello = function(){
    echo "This is anonymous function <br>";
};

$hello();


// global & local variables


$first = 10;
$second = 15;

function test(){
    global $first, $second;
    $first = $first + $second;
}
test();
echo $first;

?>