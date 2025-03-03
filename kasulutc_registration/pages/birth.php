<?php 
    //session_start();

    //echo $id;
    if(!isset($_SESSION['id'])){
        echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birth information</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>
<body>
    <center>
    <form action="" method="post">
        <fieldset>
            <legend>Birth information</legend>
            <label for="country_of_birth">Country of birth</label>
            <input type="text" name="country_of_birth" id="">
            <label for="region_of_birth">Region of birth</label>
            <input type="text" name="region_of_birth" id="">
            <label for="district_of_birth">District of Birth</label>
            <input type="text" name="district_of_birth" id="">
            <label for="date_of_birth">Date of Birth</label>
            <input type="date" name="date_of_birth" id="">
            <input type="submit" value="SAVE" class="btn btn-primary" name="save">
        </fieldset>
    </form>
    </center>
</body>
</html>';

include "connection.php";

    if(isset($_POST['save'])){
        $country = $_POST['country_of_birth'];
        $region = $_POST['region_of_birth'];
        $district = $_POST['district_of_birth'];
        $date = $_POST['date_of_birth'];
        $id = $_SESSION['user'];
        //$reg_id = "";

        $sql = "INSERT INTO birth_information(`country_of_birth`, `region_of_birth`, `district_of_birth`,	`date_of_birth`, `reg_id`) VALUES('$country', '$region', '$district', '$date', '$id')";
        $result = $conn->query($sql);

        if($result){
            echo "birth record added";
        }
        
    }

    
    } else {
        include "connection.php";
        $_SESSION['id'] = $std_id;
        $id = $_SESSION['id'];
        //$data = $_SESSION['id'];
        //$id = $data->reg_id;
        $sql1="SELECT * FROM birth_information WHERE `reg_id`='$id'";
        $result = $conn->query($sql1);
        $row = mysqli_fetch_assoc($result);
        echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birth information</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>
<body>
    <center>
    <form action="" method="post">
        <fieldset>
            <legend>Birth information</legend>
            <label for="country_of_birth">Country of birth</label>
            <input type="text" name="country_of_birth" id="" value='.$row['country_of_birth'].'>
            <label for="region_of_birth">Region of birth</label>
            <input type="text" name="region_of_birth" id="" value='.$row['region_of_birth'].'>
            <label for="district_of_birth">District of Birth</label>
            <input type="text" name="district_of_birth" id="" value='.$row['district_of_birth'].'>
            <label for="date_of_birth">Date of Birth</label>
            <input type="date" name="date_of_birth" id=""  value='.$row['date_of_birth'].'>
            <input type="submit" value="EDIT" class="btn btn-info" name="update"></br>
            <a href="./residential.php?id='.$id.'">Next-></a>
        </fieldset>
    </form>
    </center>
</body>
</html>
        ';
    }

    include "connection.php";

    if(isset($_POST['update'])){
        $country = $_POST['country_of_birth'];
        $region = $_POST['region_of_birth'];
        $district = $_POST['district_of_birth'];
        $date = $_POST['date_of_birth'];
        //$id = $_SESSION['id'];
        //$reg_id = "";

        $sql = "UPDATE birth_information SET 
                `country_of_birth`= '$country', 
                `region_of_birth`='$region',
                `district_of_birth`='$district',
                `date_of_birth`='$date'
                WHERE `reg_id`='$id'";
        $result = $conn->query($sql);

        if($result){
            echo "birth record updated";
        }
    }


?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birth information</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>
<body>
    <center>
    <form action="" method="post">
        <fieldset>
            <legend>Birth information</legend>
            <label for="country_of_birth">Country of birth</label>
            <input type="text" name="country_of_birth" id="">
            <label for="region_of_birth">Region of birth</label>
            <input type="text" name="region_of_birth" id="">
            <label for="district_of_birth">District of Birth</label>
            <input type="text" name="district_of_birth" id="">
            <label for="date_of_birth">Date of Birth</label>
            <input type="date" name="date_of_birth" id="">
            <input type="submit" value="SAVE" class="btn btn-primary" name="save">
        </fieldset>
    </form>
    </center>
</body>
</html> -->
