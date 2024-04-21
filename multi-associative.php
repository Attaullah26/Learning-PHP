<?php

// Mutidimensional Associative Array

$marks = [
    "Babar" => ["English" => 85,"Math" => 81,"Urdu" => 85],
    "Ahmed" => ["English" => 78,"Math" => 89,"Urdu" => 90],
    "Saleem" => ["English" => 95,"Math" => 79,"Urdu" => 91]
];


echo "<table border='1px' cellpadding='5px' cellspacing='0'>";
foreach($marks as $key => $value1){
    echo "<tr><td>$key</td>";
    foreach($value1 as $value2){
        echo "<td> $value2  </td>";
    }
    echo "</tr>";
}
echo "</table>";


?>