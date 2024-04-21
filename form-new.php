
<?php
if(isset($_FILES['image'])){
    
    $file_name = $_FILES['image']['name'];
    $file_type = $_FILES['image']['type'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];

    if(move_uploaded_file($file_tmp, "uploaded/" . $file_name)){
        echo 'Upload Successfully.';
    }else{
        echo 'Could not upload!';
    }
     
};
if(isset($_FILES['save'])){
    echo 'Successfully uploaded';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">

       <input type="file" name="image">
    <br><br>
        <input type="submit" name="save">

    </form>

   

    
</body>
</html>