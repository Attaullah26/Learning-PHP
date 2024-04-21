<?php
$cookie_name = 'babar';
$cookie_value = 'Hello Babar Writes';

setcookie($cookie_name, $cookie_value, time() + (86400), "/");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
</head>
<body>
    <form action="formTest.php" method="post">
        <label for="">Name : </label><input type="text" name="fname"><br><br>
        <label for="">Age : </label><input type="text" name="age"><br><br>
        <input type="submit" name="save">
    </form>

    

    <?php
   
   // check before print that cookie set or not?
    if(!isset($_COOKIE[$cookie_name])){
        echo 'Cookie not set';
    }else{
        echo 'Cooke set Successfully.';
    }

    ?>





</body>
</html>