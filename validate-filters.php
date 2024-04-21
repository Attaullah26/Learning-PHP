<?php

$var = 'babar//////////writes@gmail.com';

// hwere we have used SANITIZE FILTER
$var = filter_var($var, FILTER_SANITIZE_EMAIL);

// here we have used VALIDATE FILTER
if (filter_var($var, FILTER_VALIDATE_EMAIL)) {
    echo $var. " is a VALID URL.";
}else{
    echo $var. " is NOT a URL.";
}

?>