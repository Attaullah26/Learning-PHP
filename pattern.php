<?php

echo "Problem 01 : <br>";
for($a=1; $a<=5; $a++){
    for($b=1; $b<=$a; $b++){
        echo $b;
    }
    echo '<br>';
}
echo '<br>';




echo "Problem 02 : <br>";
for($a=5; $a>=1; $a--){
    for($b=1; $b<=$a; $b++){
        echo $b;
    }
    echo '<br>';
}
echo '<br>';





echo "Problem 03 : <br>";
for($a=1; $a<=5; $a++){
    for($b=1; $b<=$a; $b++){
        echo $a;
    }
    echo '<br>';
}
echo '<br>';






echo "Problem 04 : <br>";
for($a=5; $a>=1; $a--){
    for($b=1; $b<=$a; $b++){
        echo $a;
    }
    echo '<br>';
}
echo '<br>';





echo "Problem 05 : <br>";
for($a=1; $a<=5; $a++){
    for($b=5; $b>=$a; $b--){
        echo $b;
    }
    echo '<br>';
}
echo '<br>';






echo "Problem 06 : <br>";
$n = 4;

for($a=1; $a<=$n; $a++){
   for($b=1; $b<=(2*$n)-1; $b++){
   if($b>=$n-($a-1) && $b<=$n+($a-1)){
    echo '*';
   }else{
    echo '&nbsp;&nbsp;';
   }
}
echo '<br>';
}
echo '<br>';





echo "Problem 07 : <br>";
$n = 4;

for($a=1; $a<=$n; $a++){
   for($b=1; $b<=(2*$n)-1; $b++){
   if($b>=$n-($a-1) && $b<=$n+($a-1)){
    echo '*';
   }else{
    echo '&nbsp;&nbsp;';
   }
}
echo '<br>';
}

$n = 4;

for($a=$n-1; $a>=1; $a--){
   for($b=1; $b<=(2*$n)-1; $b++){
   if($b>=$n-($a-1) && $b<=$n+($a-1)){
    echo '*';
   }else{
    echo '&nbsp;&nbsp;';
   }
}
echo '<br>';
}
echo '<br>';






echo "Problem 08 : <br>";
for($a=1; $a<=5; $a++){
    for($b=1; $b<=5; $b++){
        if($a==$b){
            echo   ' ' . '*' . ' ';
        }else{
            echo '&nbsp;&nbsp;&nbsp;';
        }
       
    }
    echo '<br>';
}
echo '<br>';




echo "Problem 09 : <br>";
$n=5;
for($a=1; $a<=$n; $a++){
    for($b=1; $b<=$n; $b++){
        if(($a==$b) or ($a+$b==$n+1)){
            echo   ' ' . '*' . ' ';
        }else{
            echo '&nbsp;&nbsp;&nbsp;';
        }
       
    }
    echo '<br>';
}
echo '<br>';




echo "Problem 10 : <br>";
$str="BABAR";
$count=strlen($str);

for($a=0; $a<$count; $a++){
    for($b=0; $b<=$a; $b++){
        echo $str[$b] . ' ';
    }
    echo '<br>';
}
echo '<br>';





echo "Problem 11 : <br>";
for($a=$count; $a>=0; $a--){
    for($b=0; $b<$a; $b++){
        echo $str[$b] . ' ';
    }
    echo '<br>';
}















?>