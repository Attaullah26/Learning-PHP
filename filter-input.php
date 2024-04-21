<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form input</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="email">Email : </label>
        <input type="text" name="email">
        <input type="submit" value="submit" name="submit">
    </form>


    <?php
    if (isset($_REQUEST['submit'])) {

        echo "<br>";
        // echo filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        if(filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL)){
            echo "Email address is VALID.";
        }else{
            echo "INVALID email address.";
        }
    }
    ?>
    
</body>

</html>