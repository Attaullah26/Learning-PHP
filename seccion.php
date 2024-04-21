<?php

session_start();

$_SESSION['favcolor'] = 'Green';

echo 'Favourite Color : ' . $_SESSION['favcolor'] . '<br>';



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

if(isset($_SESSION['favcolor'])){
    echo 'Session is set successfully.';
}

// to unset session
//session_unset();


// to delete completely seesion

//session_destroy();

?>



</body>
</html>