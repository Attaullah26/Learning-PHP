<?php

echo getcwd();


$dir = ".";

scandir($dir);

if(is_dir($dir)){
    if($d = opendir($dir)){
        while($file = readdir($d)){
            echo "<b>Filename : </b>" . $file . "<br>";
        }
    }
    closedir($d);
}

?>