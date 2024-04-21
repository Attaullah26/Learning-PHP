<?php
$a = 1;

/*for($a = 1; $a <= 100; $a = $a + 10){
    for($b = $a; $b < $a + 10; $b++){
        echo $b . " ";
    }
    echo "<br>";
}

for($a = 10; $a > 1; $a--){
    if($a == 1){
        continue;
    }
    echo "Number : " . $a . "<br>";
}*/

$row = 1;
for($row = 1; $row <= 100; $row = $row + 10){
    for($column = $row; $column < $row + 10; $column++){
        echo $column . " ";
    }
    echo "<br>";
}
?>