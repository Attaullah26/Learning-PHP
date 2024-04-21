<?php

$data = [
    "name" => "<h1>Babar</h1>",
    "marks"=> "95",
    "email"=> "babar        writes@ gmail.com",
];

$filters = [
    "name" => FILTER_SANITIZE_STRING,
    "marks" => [
        "filter"=> FILTER_VALIDATE_INT,
        "options" => [
            "min_range" => 1,
            "max_range"=> 100,
        ],
    ],
    "email"=> FILTER_SANITIZE_EMAIL,
];
echo "<pre>";
print_r(filter_var_array($data, $filters));
echo "</pre>";



?>