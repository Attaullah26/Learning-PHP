<?php
echo 'Pattern 01 : <br><br>';
$rows = 9;

for($a=1; $a<=$rows-1; $a++){
    for($b=1; $b<=(2*$rows)-1; $b++){
        if($b>=$rows-($a-1) and $b<=$rows+($a-1)){
            echo '*';
        }else{
            echo '#';
        }
        
    }
    echo '<br>';
}
for($a=$rows-1; $a>=1; $a--){
    for($b=1; $b<=(2*$rows)-1; $b++){
        if($b>=$rows-($a-1) and $b<=$rows+($a-1)){
            echo '*';
        }else{
            echo '#';
        }
        
    }
    echo '<br>';
}






echo 'Pattern 02 : <br><br>';
$rows = 9;

for($a=$rows; $a>=2; $a--){
    for($b=1; $b<=($rows)-1; $b++){
        if($b>=$rows-($a-1) and $b<=$rows+($a-1)){
            echo '*';
        }else{
            echo '#';
        }
        
    }
    echo '<br>';
}
for($a=1; $a<=$rows; $a++){
    for($b=1; $b<=($rows)-1; $b++){
        if($b>=$rows-($a-1) and $b<=$rows+($a-1)){
            echo '*';
        }else{
            echo '#';
        }
        
    }
    echo '<br>';
}








echo 'Pattern 03 : <br><br>';

$rows = 4;

for($a=1; $a<=$rows; $a++){
    for($b=1; $b<=(4*$rows)-1; $b++){
        if($b<=$rows*2-1){
            echo '*';
        }else{
            echo '#';
        }
        
    }
    echo '<br>';
}
for($a=$rows; $a>=1; $a--){
    for($b=1; $b<=(4*$rows)-1; $b++){
        if($b>=$rows*2){
            echo '*';
        }else{
            echo '#';
        }
        
    }
    echo '<br>';
}











echo 'Pattern 04 : <br><br>';

$rows = 9;

for($a=1; $a<=$rows; $a++){
    for($b=1; $b<=(2*$rows)-1; $b++){
        if($b>=$rows-($a-1) and $b<=$rows+($a-1)){
            echo '*';
        }else{
            echo '#';
        }
    }
    echo '<br>';
    for($b=1; $b<=(2*$rows)-1; $b++){
        if($b>=$rows-($a-1) and $b<=$rows+($a-1)){
            echo '*';
        }else{
            echo '#';
        }
    
    }
    
}




echo 'Pattern 05 : <br><br>';
$rows=6;
$colum=12;

for($a=1; $a<=$rows; $a++){
    for($b=1; $b<=$colum; $b++){
        if(($a+$b)%2==0){
            echo '*';
        }else{
            echo '#';
        }
    }
    echo '<br>';
}




?>