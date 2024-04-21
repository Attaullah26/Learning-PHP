<?php

$var = 'My password';


// secure with md5

echo $var . '<br>';
echo "md5 (default) Binary : " . md5($var) . '<br>';
echo "md5 HEX : " . md5($var, TRUE) . '<br><br>';


// secure with sha1

echo $var . '<br>';
echo "sha1 (default) Binary : " . sha1($var) . '<br>';
echo "sha1 HEX : " . sha1($var, TRUE) . '<br><br>';




?>