<?php 
    //session_start();
    //echo $id;
    if(!isset($_SESSION['id'])){
        echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Residential information</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>
<body>
    <center>
    <fieldset>
        <legend>Residential information</legend>
        <form action="" method="post">
        <label for="country_of_residence">Country of residence</label>
        <input type="text" name="country_of_residence" id="">
        <label for="nationality">Nationality</label>
        <input type="text" name="nationality" id="">
        <label for="nida">NIDA</label>
        <input type="text" name="nida" id="">
        <label for="region_of_residence">Region of residence</label>
        <input type="text" name="region_of_residence" id="">
        <label for="district_of_residence">District of residence</label>
        <input type="text" name="district_of_residence" id="">
        <label for="ward_of_residence">Ward of residence</label>
        <input type="text" name="ward_of_residence" id="">
        
        <input type="submit" value="SAVE" class="btn btn-primary" name="save">
    </form>
    </fieldset>
    </center>
</body>
</html>';

include "connection.php";

    if(isset($_POST['save'])){
        $country = $_POST['country_of_residence'];
        $nationality = $_POST['nationality'];
        $nida = $_POST['nida'];
        $region = $_POST['region_of_residence'];
        $district = $_POST['district_of_residence'];
        $ward = $_POST['ward_of_residence'];
        $id = $_SESSION['user'];

        $sql = "INSERT INTO residential_info(`country`,	`nationality`, `nida`, `region`, `district`, `ward`, `reg_id`) VALUES('$country', '$nationality', '$nida', '$region', '$district', '$ward', '$id')";
        if($conn->query($sql)){
            echo "<script>alert('residential records added successfully')</script>";
        }
        
    }
    //echo $_SESSION['user'];
    } else {
        include "connection.php";
        $_SESSION['id'] = $std_id;
        $id = $_SESSION['id'];
        //$data = $_SESSION['id'];
        //$id = $data->reg_id;
        $sql1="SELECT * FROM residential_info WHERE `reg_id`='$id'";
        $result = $conn->query($sql1);
        $row = mysqli_fetch_assoc($result);
        echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Residential information</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>
<body>
    <center>
    <fieldset>
        <legend>Residential information</legend>
        <form action="" method="post">
        <label for="country_of_residence">Country of residence</label>
        <input type="text" name="country_of_residence" id="" value='.$row['country'].' >
        <label for="nationality">Nationality</label>
        <input type="text" name="nationality" id="" value='.$row['nationality'].' >
        <label for="nida">NIDA</label>
        <input type="text" name="nida" id=""  value='.$row['nida'].' >
        <label for="region_of_residence">Region of residence</label>
        <input type="text" name="region_of_residence" id="" value='.$row['region'].' >
        <label for="district_of_residence">District of residence</label>
        <input type="text" name="district_of_residence" id="" value='.$row['district'].' >
        <label for="ward_of_residence">Ward of residence</label>
        <input type="text" name="ward_of_residence" id=""  value='.$row['ward'].' >
        
        <input type="submit" value="EDIT" class="btn btn-info" name="update"></br>
        <a href="./bank.php?id='.$id.'">Next-></a>
    </form>
    </fieldset>
    </center>
</body>
</html>';
    }

    include "connection.php";

    if(isset($_POST['update'])){
        $country = $_POST['country_of_residence'];
        $nationality = $_POST['nationality'];
        $nida = $_POST['nida'];
        $region = $_POST['region_of_residence'];
        $district = $_POST['district_of_residence'];
        $ward = $_POST['ward_of_residence'];
        //$id = $_SESSION['id'];

        $sql = "UPDATE residential_info SET 
                `country`='$country',
                `nationality`='$nationality',
                `nida`='$nida',
                `region`='$region',
                `district`='$district',
                `ward`='$ward' 
                WHERE `reg_id` = '$id'";
        if($conn->query($sql)){
            //header("location:residential.php");
        }
        
    }

?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Residential information</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>
<body>
    <center>
    <fieldset>
        <legend>Residential information</legend>
        <form action="" method="post">
        <label for="country_of_residence">Country of residence</label>
        <input type="text" name="country_of_residence" id="">
        <label for="nationality">Nationality</label>
        <input type="text" name="nationality" id="">
        <label for="nida">NIDA</label>
        <input type="text" name="nida" id="">
        <label for="region_of_residence">Region of residence</label>
        <input type="text" name="region_of_residence" id="">
        <label for="district_of_residence">District of residence</label>
        <input type="text" name="district_of_residence" id="">
        <label for="ward_of_residence">Ward of residence</label>
        <input type="text" name="ward_of_residence" id="">
        
        <input type="submit" value="SAVE" class="btn btn-primary" name="save">
    </form>
    </fieldset>
    </center>
</body>
</html> -->

