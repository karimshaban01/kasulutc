<?php 
    //session_start();

    //echo $id;

if(!isset($_SESSION['id'])){
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal details</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <style>

    </style>
</head>
<body>
    <center>
    <form action="" enctype="multipart/form-data" method="post">
        <legend class="legend">Personal details</legend>
        <label for="first_name">First name</label>
        <input type="text" name="first_name">
        <label for="middle_name">Middle name</label>
        <input type="text" name="middle_name">
        <label for="last_name">Last name</label>
        <input type="text" name="last_name" >
        <label for="phone_number">Phone number</label>
        <input type="text" name="phone_number">
        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="image">Image</label>
        <input type="file" name="file">
        <label for="gender">Gender</label>
        <select name="gender" id="">
            <option value="">--Select gender--</option>
            <option value="F">Female</option>
            <option value="M">Male</option>
        </select>
        <label for="religion">Religion</label>
        <select name="religion" id="">
            <option value="none">--Select your religion--</option>
            <option value="christian">Christian</option>
            <option value="muslim">Muslim</option>
            <option value="other">Other</option>
        </select>
        <label for="disability">Disability</label>
        <input type="text" name="disability">
        <label for="marital_status">Marital status</label>
        <select name="marital_status" id="">
            <option value="none">--Select your marital status--</option>
            <option value="married">Married</option>
            <option value="single">Single</option>
            <option value="complicated">Complicated</option>
        </select>

        <label for="nationality">Nationality</label>
        <input type="text" name="nationality">
        <label for="nida">NIDA</label>
        <input type="text" name="nida">
        <label for="index_number">Index number</label>
        <input type="text" name="index_number">

        <input type="submit" value="SAVE" class="btn btn-primary" name="save">
    </form>  
    </center>
</body>
</html>';

include "connection.php";

if(isset($_POST['save'])){
        $target_dir = "./upload/";
        $target_file = $target_dir.basename($_FILES['file']['name']);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $uploadOk = 1;

        /* echo $target_file; */
        //check if the file is an image

        if($check = getimagesize($_FILES['file']['tmp_name'])==true){
            //echo "the file is an image";
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
            //echo "the file not exists in the folder";
            $uploadOk = 1;
        }

        //check file size
        if($_FILES['file']['size']>5000000){
            echo "the file is too large";
            $uploadOk = 0;
        }
        //image file type
        if($imageFileType !== "jpg" && $imageFileType !== "jpeg" && $imageFileType !=="png" && $imageFileType !== "gif" ){
            echo "only JPG, JPEG, PNG and GIF allowed";
            $uploadOk = 0;
        }
    
        if($uploadOk === 1){
            //echo "the image is ready for upload";
            if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file)){
                //echo "the file uploaded successfully";
            }
        }




    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $image = $target_file;
    $gender = $_POST['gender'];
    $disability = $_POST['disability'];
    $religion = $_POST['religion'];
    $marital_status = $_POST['marital_status'];
    $nationality = $_POST['nationality'];
    $nida = $_POST['nida'];
    $index_number = $_POST['index_number'];

    $sql = "INSERT INTO personal_details(`first_name`, `middle_name`, `last_name`, `phone_number`, `email`,	`image`, `gender`, `disability`, `religion`, `marital_status`, `nationality`, `nida`, `index_number`) VALUES('$first_name', '$middle_name', '$last_name', '$phone_number',
            '$email', '$image', '$gender', '$disability', '$religion', '$marital_status', '$nationality', '$nida',
            '$index_number')";
    $result = $conn->query($sql);


    if($result){
        $sql1 = "SELECT MAX(reg_id) FROM personal_details";
        $a=$conn->query($sql1);
        $output = mysqli_fetch_row($a);

        $id = $output[0];
        //session_start();
        $_SESSION['user']=$id;
    }
    echo $_SESSION['user'];

 
}


    } else {
        include "connection.php";
        $_SESSION['id'] = $std_id;
        $id = $_SESSION['id'];
        echo "session ".$id." is active";
        $sql = "SELECT * FROM personal_details WHERE `reg_id`='$id'";
        $result=$conn->query($sql);
        $row = mysqli_fetch_assoc($result);

        //echo "You are currently registering ".$data->reg_id;
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal details</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <style>

    </style>
</head>
<body>
    <center>
    <form action="" enctype="multipart/form-data" method="post">
        <legend class="legend">Personal details</legend>
        <label for="first_name">First name</label>
        <input type="text" name="first_name" value='.$row['first_name'].' >
        <label for="middle_name">Middle name</label>
        <input type="text" name="middle_name" value='.$row['middle_name'].'>
        <label for="last_name">Last name</label>
        <input type="text" name="last_name" value='.$row['last_name'].' >
        <label for="phone_number">Phone number</label>
        <input type="text" name="phone_number" value='.$row['phone_number'].' >
        <label for="email">Email</label>
        <input type="email" name="email" value='.$row['email'].'>
        <label for="image">Image</label></br>
        <!-- <img src='.$row['image'].' width="120px" height="120px"> -->
        <input type="file" name="file" value='.$row['image'].'>
        <label for="gender">Gender</label>
        <select name="gender" id="" >
            <option value="">'.$row['gender'].'</option>
            <option value="F">Female</option>
            <option value="M">Male</option>
        </select>
        <label for="religion">Religion</label>
        <select name="religion" id="" >
            <option value="none">'.$row['religion'].'</option>
            <option value="christian">Christian</option>
            <option value="muslim">Muslim</option>
            <option value="other">Other</option>
        </select>
        <label for="disability">Disability</label>
        <input type="text" name="disability" value='.$row['disability'].'>
        <label for="marital_status">Marital status</label>
        <select name="marital_status" id="">
            <option value="none">'.$row['marital_status'].'</option>
            <option value="married">Married</option>
            <option value="single">Single</option>
            <option value="complicated">Complicated</option>
        </select>

        <label for="nationality">Nationality</label>
        <input type="text" name="nationality"  value='.$row['nationality'].'>
        <label for="nida">NIDA</label>
        <input type="text" name="nida"  value='.$row['nida'].' >
        <label for="index_number">Index number</label>
        <input type="text" name="index_number"  value='.$row['index_number'].' >

        <input type="submit" value="EDIT" class="btn btn-info" name="update"></br>
        <a href="./birth.php?id='.$id.'">Next-></a>
    </form>  
    </center>
</body>
</html>';
    }

    if(isset($_POST['update'])){
        $target_dir = "./upload/";
        $target_file = $target_dir.basename($_FILES['file']['name']);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $uploadOk = 1;

        /* echo $target_file; */
        //check if the file is an image

        if($check = getimagesize($_FILES['file']['tmp_name'])==true){
            //echo "the file is an image";
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
            //echo "the file not exists in the folder";
            $uploadOk = 1;
        }

        //check file size
        if($_FILES['file']['size']>5000000){
            echo "the file is too large";
            $uploadOk = 0;
        }
        //image file type
        if($imageFileType !== "jpg" && $imageFileType !== "jpeg" && $imageFileType !=="png" && $imageFileType !== "gif" ){
            echo "only JPG, JPEG, PNG and GIF allowed";
            $uploadOk = 0;
        }
    
        if($uploadOk === 1){
            //echo "the image is ready for upload";
            if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file)){
                //echo "the file uploaded successfully";
            }
        }




    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $image = $target_file;
    $gender = $_POST['gender'];
    $disability = $_POST['disability'];
    $religion = $_POST['religion'];
    $marital_status = $_POST['marital_status'];
    $nationality = $_POST['nationality'];
    $nida = $_POST['nida'];
    $index_number = $_POST['index_number'];

    $sql = "UPDATE personal_details SET
            `first_name`='$first_name',
            `middle_name`='$middle_name',
            `last_name`='$last_name',
            `phone_number`='$phone_number',
            `email`='$email',
            `image`='$image',
            `gender`='$gender',
            `disability`='$disability',
            `religion`='$religion',
            `marital_status`='$marital_status',
            `nationality`='$nationality',
            `nida`='$nida',
            `index_number`='$index_number' 
            WHERE `reg_id`='$id'";
        $result = $conn->query($sql);
        if($result){
            echo 'data recorded successfully';
            //header("refresh:3");
        }
    
    echo "<script>alert('you are updating ".$row['first_name']."');</script>";
    }
?>
