<?php

$colors = array('Red', 'Green', 'Yellow', 'Blue', 'pink');


// current/positon shows current positon of the pointer
echo "<b>Current Value is</b> : " . current($colors) . "<br>";
// key shows current key of ponter
echo "<b>Current Key is</b> : " . key($colors) . "<br>";


// next moves to the next value
next($colors);

echo "<b>Current Value is</b> : " . current($colors) . "<br>";
echo "<b>Current Key is</b> : " . key($colors) . "<br>";


// prev moves to the previous value
prev($colors);

echo "<b>Current Value is</b> : " . current($colors) . "<br>";
echo "<b>Current Key is</b> : " . key($colors) . "<br>";


// end , jump to the last end value
end($colors);

echo "<b>Current Value is</b> : " . current($colors) . "<br>";
echo "<b>Current Key is</b> : " . key($colors) . "<br>";



reset($colors);

echo "<b>Current Value is</b> : " . current($colors) . "<br>";
echo "<b>Current Key is</b> : " . key($colors) . "<br>";









?>