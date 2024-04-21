<?php

// uuencode for the security of the message / message encription

$a = "Hello this is my secret message for testing purpose";

$encode = convert_uuencode($a);
echo "<b>Encoded : </b>" . $encode . "<br><br>";

$decode = convert_uudecode($encode);
echo "<b>Decoded : </b>" . $decode . '<br><br>';





// bin2hex & hex2bin for message security purpose

$test = "Babar Writes";

$bin = bin2hex($test);
echo 'bin2hex : ' . $bin . '<br>';

$hex = hex2bin($bin);
echo 'hex2bin : ' . $hex . '<br>';







// char() & ord() to make ASCII to code , and code to ASCII

echo chr(66);
echo '<br>';
echo ord('z') . '<br><br><br>';





// strip_tags to remove tags from string and wordwrap to wrap string's words

$testt = 'Hello this is the <b>best</b> learning platform for <i>freelancing</i>';

echo $testt . '<br>';
echo strip_tags($testt) . '<br>';
// we allow here <b> tag.
echo strip_tags($testt, '<b>') . '<br><br><br>';


$newTest = 'The earth is so beautiful.';

echo $newTest . '<br>';
// here wraped from space by default
echo wordwrap($newTest, 3, '<br>') . '<br>';
// here we cut by wrap 
echo wordwrap($newTest, 3, '<br>', TRUE) . '<br>';






?>