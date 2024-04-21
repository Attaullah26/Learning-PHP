<?php

// multidimentional  nested array

$employ = [
    [1, "Aslam","Assistant", 50000],
    [2, "Sam", "Clerk", 25000],
    [3, "Sana", "Manager", 95000],
    [4, "Ahmed", "Teacher", 45000]
];


// print through foreach loop

echo "<table border='2px' cellspacing='0' cellpadding='10px' >";
echo "<tr>
    <td><b>Serial</b></td>
    <td><b>Name</b></td>
    <td><b>Designation</b></td>
    <td><b>Salary</b></td>
</tr>";
foreach($employ as $value1){
    echo "<tr>";
    foreach($value1 as $value2){
        echo "<td>  $value2  </td>";
    }
    echo "<tr>";
}
echo "</table>";


// print through for loop

/*for($a = 0; $a <4; $a++){
    for($b = 0; $b < 4; $b++){
        echo $employ[$a][$b] . " ";
    }
    echo "<br>";
}*/



//echo $employ[2][3];

/*echo "<pre>";
print_r($employ);
echo "</pre>";*/

//var_dump($employ);

?>