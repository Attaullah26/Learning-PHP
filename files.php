<?php

if(isset($_FILES['image'])){

    $fileName = $_FILES['image']['name'];
    $fileType = $_FILES['image']['type'];
    $fileTemp = $_FILES['image']['tmp_name'];
    $fileSize = $_FILES['image']['size'];


    if(move_uploaded_file($fileTemp, "uploaded/" .  $fileName)){
        echo 'Uploaded';
    }else{
        echo 'Try again';
    }
    
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image"><br><br>
        <input type="submit" name="save">
    </form>
</body>
</html>