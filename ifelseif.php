<?php

    $per = 90;


    if($per >= 80 and $per <= 100){
        echo "You are in Merit";
    }elseif($per >= 60 and $per <= 79){
        echo "You are in Ind Division";
    }elseif($per >= 40 and $per <= 59){
        echo "You are in IInd Division";
    }elseif($per >= 33 and $per <= 39){
        echo "You are in IIInd Division";
    }elseif($per <= 33){
        echo "You are Faill";
    }else{
        echo "Please Enter Correct Percentage";
    }
    
?>