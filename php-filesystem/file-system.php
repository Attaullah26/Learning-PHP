<?php

// $file = "readme.txt";

// if(file_exists($file)){
//     // echo readfile("readme.txt");
//     // copy($file, "newfile.txt");
//     // rename("newfile.txt","oldfile.txt");
//     // unlink('oldfile.txt');

// }else{
//     echo "File NOT exists.";
// }
// mkdir('abcfiles');


// $dir = "abcfiles";

// if(file_exists($dir)){
//     rmdir('abcfiles');
//     echo "File removed successfully.";
// }else{
//     echo "No file found";
// }

// echo filesize('arrays.php');


// echo filetype($file);


// $path = realpath($file) . "<br>";
// // echo "<pre>";
// // print_r (pathinfo($path, PATHINFO_FILENAME)) . "<br>";
// // echo "</pre>";

// echo dirname($path, 2);


$file = fopen("readme.txt", "r");

// echo fread($file, filesize('readme.txt'));
echo fgets($file);
echo ftell($file) . "<br>";
// echo fgets($file);
// echo ftell($file) . "<br>";
// fseek($file,0) . "<br>";
// echo fgets($file);
// echo ftell($file) . "<br>";
echo fpassthru($file);


// $file = fopen("readme.txt", "a+");
//  fwrite($file,"Hello this is BabarWrites");

fclose($file);

?>