<?php 
    //session_start();

    //echo $id;
    if(!isset($_SESSION['id'])){
        echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardian Information</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>
<body>
    <center>
        <form action="" method="post">
        <fieldset>
            <legend>Guardian information</legend>
            <label for="name">Full name</label>
            <input type="text" name="name" id="">
            <label for="phone_number">Phone number</label>
            <input type="text" name="phone_number" id="">
            <label for="email">Email</label>
            <input type="email" name="email" id="">
		
	    <label for="occupation">Occupation</label>
            <input type="text" name="occupation" id="">

            <label for="relationship">Relationship</label>
            <input type="text" name="relationship" id="">

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
        </fieldset>
        </form>
    </center>
</body>
</html>';

    include "connection.php";

    if(isset($_POST['save'])){
        $name = $_POST['name'];
        $phone_number = $_POST['phone_number'];
        $email = $_POST['email'];
	$occupation = $_POST['occupation'];
        $relationship = $_POST['relationship'];
        $country = $_POST['country_of_residence'];
        $nationality = $_POST['nationality'];
        $nida = $_POST['nida'];
        $region = $_POST['region_of_residence'];
        $district = $_POST['district_of_residence'];
        $ward = $_POST['ward_of_residence'];
        $id = $_SESSION['user'];

        $sql = "INSERT INTO guardian(`guardian_name`, `phone_number`, `email`,`guardian_occupation`, `relationship`, `guardian_country`, `guardian_nationality`, `guardian_nida`, `guardian_region`, `guardian_district`, `guardian_ward`, `reg_id`) VALUES('$name', '$phone_number', '$email', '$occupation', '$relationship', '$country', '$nationality', '$nida', '$region', '$district', '$ward', '$id')";
        if($conn->query($sql)){
            echo "<script>alert('guardian records added successfully')</script>";
        }
    }
    //echo $_SESSION['user'];

    } else {
        include "connection.php";
        $_SESSION['id'] = $std_id;
        $id = $_SESSION['id'];
        //$data = $_SESSION['id'];
        //$id = $data->reg_id;
        $sql1="SELECT * FROM guardian WHERE `reg_id`='$id'";
        $result = $conn->query($sql1);
        $row = mysqli_fetch_assoc($result);
        echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardian Information</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>
<body>
    <center>
        <form action="" method="post">
        <fieldset>
            <legend>Guardian information</legend>
            <label for="name">Full name</label>
            <input type="text" name="name" id="" value='.$row['guardian_name'].' >
            <label for="phone_number">Phone number</label>
            <input type="text" name="phone_number" id="" value='.$row['phone_number'].' >
            <label for="email">Email</label>
            <input type="email" name="email" id="" value='.$row['email'].' >

		
	    <label for="occupation">Occupation</label>
            <input type="text" name="occupation" id="" value='.$row['guardian_occupation'].'>



            <label for="country_of_residence">Country of residence</label>
            <input type="text" name="country_of_residence" id="" value='.$row['guardian_country'].'>
            <label for="nationality">Nationality</label>
            <input type="text" name="nationality" id="" value='.$row['guardian_nationality'].'>
            <label for="nida">NIDA</label>
            <input type="text" name="nida" id="" value='.$row['guardian_nida'].'>
            <label for="region_of_residence">Region of residence</label>
            <input type="text" name="region_of_residence" id="" value='.$row['guardian_region'].'>
            <label for="district_of_residence">District of residence</label>
            <input type="text" name="district_of_residence" id="" value='.$row['guardian_district'].'>
            <label for="ward_of_residence">Ward of residence</label>
            <input type="text" name="ward_of_residence" id="" value='.$row['guardian_ward'].'>

            <label for="relationship">Relationship</label>
            <input type="text" name="relationship" id=""  value='.$row['relationship'].' >

            <input type="submit" value="EDIT" class="btn btn-info" name="update"></br>
        <a href="./certificates.php?id='.$id.'">Next-></a>
        </fieldset>
        </form>
    </center>
</body>
</html>';
    }

    include "connection.php";

    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $phone_number = $_POST['phone_number'];
        $email = $_POST['email'];
	$occupation = $_POST['occupation'];
        $country = $_POST['country_of_residence'];
        $nationality = $_POST['nationality'];
        $nida = $_POST['nida'];
        $region = $_POST['region_of_residence'];
        $district = $_POST['district_of_residence'];
        $ward = $_POST['ward_of_residence'];
        $relationship = $_POST['relationship'];
        //$id = $_SESSION['id'];

        $sql = "UPDATE guardian SET 
                `guardian_name`='$name',
                `phone_number`='$phone_number',
                `email`='$email',
		`guardian_occupation`='$occupation',
                `relationship`='$relationship',
                `guardian_country`='$country',
                `guardian_nationality`='$nationality',
                `guardian_nida`='$nida',
                `guardian_region`='$region',
                `guardian_district`='$district',
                `guardian_ward`='$ward'
                WHERE `reg_id`='$id'";
        if($conn->query($sql)){
            echo "<script>alert('guardian records updated successfully')</script>";
        }
    }
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardian Information</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>
<body>
    <center>
        <form action="" method="post">
        <fieldset>
            <legend>Guardian information</legend>
            <label for="name">Full name</label>
            <input type="text" name="name" id="">
            <label for="phone_number">Phone number</label>
            <input type="text" name="phone_number" id="">
            <label for="email">Email</label>
            <input type="email" name="email" id="">
            <label for="relationship">Relationship</label>
            <input type="text" name="relationship" id="">

            <input type="submit" value="SAVE" class="btn btn-primary" name="save">
        </fieldset>
        </form>
    </center>
</body>
</html> -->
