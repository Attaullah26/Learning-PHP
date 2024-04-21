<?php
for($a = 1; $a > 10; $a++){
    if($a == 3){
        goto abc;
    }
    echo "This is goto para";
}

echo "Hello world";
abc:
echo " Hello Babar Writes";
?>