<?php

echo "<pre>";
print_r($_GET);
echo "</pre>";


echo "<pre>";
print_r($_SERVER);
echo "</pre>";



// here we deleted cockie before its expiry

setcookie('babar', '', time() - (86400), '/') . '<br>';



?>