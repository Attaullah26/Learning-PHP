<?php

$weekday = 2;
$age = 29;


switch(true){
    case($age >= 18 && $age <= 21):
        echo "You are eligible";
    break;

    case($age >= 21 && $age <= 29):
        echo "You are not eligible";
    break;

    default:
    echo "Please enter correct";
    break;
}


/*switch($weekday){
    case 1: 
        echo "Today is Monday";
    break;

    case 2: 
        echo "Today is Tuesday";
    break;

    case 3: 
        echo "Today is Wednesday";
    break;
    
    case 4: 
        echo "Today is Thursday";
    break;
    
    case 5: 
        echo "Today is Friday";
    break;
    
    case 6: 
        echo "Today is Saturday";
    break;
    
    case 7: 
        echo "Today is Sunday";
    break;
    
    default : 
        echo "Please enter valid Weekday";   
}*/

?>