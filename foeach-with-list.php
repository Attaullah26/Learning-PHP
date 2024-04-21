<?php

// With Multidimensional Index Array 

$emp = [
    [1, "Babar", "Assistant", 50000],
    [2, "Sahil", "Manager", 95000],
    [3, "Asif", "Clerk", 36000]
];

echo "<table border='1px' cellspacing='0' cellpadding='5px'>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Designation</th>
        <th>Salary</th>
";
foreach($emp as list($id, $name,$designation,$salary)){
    echo "<tr><td>$id</td> <td>$name</td> <td>$designation</td> <td>$salary </td>";
    
};

echo "Result by Count : " . count($emp[0]) . "<br>";
echo "Result by Sizeof : " .sizeof($emp[0]) . "<br><br>";


// search function through if statement

if(in_array([3, "Asif", "Clerk", 36000],$emp)){
    echo "Find Successfully.";
}else{
    echo "Can't Find!";
};







// With Multidimensional Associative Array


$marks = [
    "Babar" => ["English" => 85,"Math" => 81,"Urdu" => 85],
    "Ahmed" => ["English" => 78,"Math" => 89,"Urdu" => 90],
    "Saleem" => ["English" => 95,"Math" => 79,"Urdu" => 91],
    "Saleem" => ["English" => 95,"Math" => 79,"Urdu" => 91],
    "Shafi" => ["English" => 65,"Math" => 77,"Urdu" => 89]
];

echo "<table border='1px' cellspacing='0' cellpadding='5px'>
    <tr>
        <th>Name</th>
        <th>English</th>
        <th>Math</th>
        <th>Urdu</th>
";
foreach($marks as $key => list("English" => $eng,"Math" => $math,"Urdu" => $urdu)){
    echo "<tr> <td>$key </td>";
    echo "<td>$eng</td> <td>$math</td> <td>$urdu</td> <br>";
}
echo "</table><br>";

echo "Result by Count : " . count($marks["Ahmed"]) . "<br>";
echo "Result by Sizeof : " .sizeof($marks["Ahmed"]) . "<br>";



$test = [50,"babar","writes"];




if(in_array("50",$test, true)){
    echo "Find Successfully.";
}else{
    echo "Can't Find!";
};



?>