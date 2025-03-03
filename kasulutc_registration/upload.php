<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <center>
    <form action="" enctype="multipart/form-data" method="post">
        <label for="file">File to upload</label>
        <input type="file" name="file" id="">
        <input type="submit" value="UPLOAD" name="upload" class="btn btn-success">
    </form>
    </center>
</body>
</html>
<?php 
    if(isset($_POST['upload'])){
        $target_dir = "./upload/";
        $target_file = $target_dir.basename($_FILES['file']['name']);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $uploadOk = 1;

        /* echo $target_file; */
        //check if the file is an image

        if($check = getimagesize($_FILES['file']['tmp_name'])==true){
            echo "the file is an image";
            $uploadOk = 1;
        } else {
            echo "the file is not an image";
            $uploadOk = 0;
        }

        //chech if the file exists
        if(file_exists($target_file)){
            echo "the file already exists";
            $uploadOk = 0;
        } else {
            echo "the file not exists in the folder";
            $uploadOk = 1;
        }

        //check file size
        if($_FILES['file']['size']>500000){
            echo "the file is too large";
            $uploadOk = 0;
        }
        //image file type
        if($imageFileType !== "jpg" && $imageFileType !== "jpeg" && $imageFileType !=="png" && $imageFileType !== "gif" ){
            echo "only JPG, JPEG, PNG and GIF allowed";
            $uploadOk = 0;
        }
    
        if($uploadOk === 1){
            echo "the image is ready for upload";
            if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file)){
                echo "the file uploaded successfully";
            }
        }
    }
?>
