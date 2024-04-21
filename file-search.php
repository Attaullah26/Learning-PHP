<?php

$array = glob('*',GLOB_ONLYDIR);

foreach ($array as $file) {
    echo $file . " <b>size :</b> " . filesize($file) ."<br>";
}

?>