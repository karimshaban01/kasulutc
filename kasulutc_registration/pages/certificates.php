<?php 
    //session_start();

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
            <legend>Certificates information</legend>
            
            <!--<select name="certificate_type" id="">
                <option value="none">--Select certificate--</option>
                <option value="result_slip">Result slip</option>
                <option value="csee">CSEE</option>
                <option value="acsee">ACSEE</option>
            </select>-->

            <label for="name">FORM FOUR LEAVING CERTIFICATE</label></br>
            <select name="f4_leaving" id="">
                <option value="">--Select option--</option>
                <option value="Submitted">Submitted</option>
                <option value="Not Submitted">Not Submitted</option>
            </select>

            <label for="name">CSEE RESULT SLIP</label></br>
            <select name="csee_result_slip" id="">
                <option value="">--Select option--</option>
                <option value="Submitted">Submitted</option>
                <option value="Not Submitted">Not Submitted</option>
            </select>

            <label for="name">CSEE CERTIFICATE</label></br>
            <label for="certificate_number">Certificate number</label>
            <input type="text" name="csee_certificate_number" id="">
            <label for="index_number">Index number</label>
            <input type="text" name="f4_index_number" id="">
            <label for="year">completion year</label>
            <input type="text" name="f4_year" id="">

            <label for="name">FORM SIX LEAVING CERTIFICATE</label></br>
            <select name="f6_leaving" id="">
                <option value="">--Select option--</option>
                <option value="Submitted">Submitted</option>
                <option value="Not Submitted">Not Submitted</option>
            </select>

            <label for="name">ACSEE RESULT SLIP</label></br>
            <select name="f6_result_slip" id="">
                <option value="">--Select option--</option>
                <option value="Submitted">Submitted</option>
                <option value="Not Submitted">Not Submitted</option>
            </select>

            <label for="name">ACSEE CERTIFICATE</label></br>
            <label for="certificate_number">Certificate number</label>
            <input type="text" name="acsee_certificate_number" id="">
            <label for="index_number">Index number</label>
            <input type="text" name="f6_index_number" id="">
            <label for="year">completion year</label>
            <input type="text" name="f6_year" id="">

            <label for="name">GATCE CERTIFICATE</label></br>
            <label for="certificate_number">Certificate number</label>
            <input type="text" name="gatce_certificate_number" id="">
            <label for="index_number">Index number</label>
            <input type="text" name="gatce_index_number" id="">
            <label for="year">completion year</label>
            <input type="text" name="gatce_year" id="">

            <label for="name">MEDICAL STATUS CERTIFICATE</label></br>
            <select name="medical_certificate" id="">
                <option value="">--Select option--</option>
                <option value="Submitted">Submitted</option>
                <option value="Not Submitted">Not Submitted</option>
            </select>

            <label for="name">BIRTH CERTIFICATE</label></br>
            <label for="certificate_number">Entry number</label>
            <input type="text" name="birth_certificate_number" id="">
                     
            
            <input type="submit" value="SAVE" class="btn btn-primary" name="save">
        </fieldset>
        </form>
    </center>
</body>
</html>';

    include "connection.php";

    if(isset(($_POST['save']))){
        /* $certificate_type = $_POST['certificate_type'];
        $certificate_number = $_POST['certificate_number'];
        $index_number = $_POST['index_number'];
        $year = $_POST['year']; */
        $id = $_SESSION['user'];
        $f4_leaving = $_POST['f4_leaving'];
        $csee_result_slip = $_POST['csee_result_slip'];
        $csee_certificate_number = $_POST['csee_certificate_number'];
        $f4_index_number = $_POST['f4_index_number'];
        $f4_year = $_POST['f4_year'];
        $f6_leaving = $_POST['f6_leaving'];
        $f6_result_slip = $_POST['f6_result_slip'];
        $acsee_certificate_number = $_POST['acsee_certificate_number'];
        $f6_index_number = $_POST['f6_index_number'];
        $f6_year = $_POST['f6_year'];
        $gatce_certificate_number =$_POST['gatce_certificate_number'];
        $gatce_index_number = $_POST['gatce_index_number'];
        $gatce_year = $_POST['gatce_year'];
        $medical_certificate = $_POST['medical_certificate'];
        $birth_certificate_number = $_POST['birth_certificate_number'];
        
        $sql = "INSERT INTO certificatess(`f4_leaving`, `csee_result_slip`, `csee_certificate_number`, `f4_index_number`, `f4_year`, `f6_leaving`, `f6_result_slip`, `acsee_certificate_number`, `f6_index_number`, `f6_year`, `gatce_certificate_number`, `gatce_index_number`, `gatce_year`, `medical_certificate`, `birth_certificate_number`, `reg_id`) VALUES('$f4_leaving', '$csee_result_slip', '$csee_certificate_number', '$f4_index_number', '$f4_year', '$f6_leaving', '$f6_result_slip', '$acsee_certificate_number', '$f6_index_number', '$f6_year', '$gatce_certificate_number', '$gatce_index_number', '$gatce_year', '$medical_certificate', '$birth_certificate_number', '$id')";
        if($conn->query($sql)){
            echo "<script>alert('certificate records added successfully')</script>";
        }
    }
    //echo $_SESSION['user'];
    } else {
        include "connection.php";
        $_SESSION['id'] = $std_id;
        $id = $_SESSION['id'];
        //$data = $_SESSION['id'];
        //$id = $data->reg_id;
        $sql1="SELECT * FROM certificatess WHERE `reg_id`='$id'";
        $result = $conn->query($sql1);
        $row = mysqli_fetch_assoc($result);
        echo $id;
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
            <legend>Certificates information</legend>
            
            <label for="name">FORM FOUR LEAVING CERTIFICATE</label></br>
            <select name="f4_leaving" id="">
                <option value="..">--Select option--</option>
                <option value="Submitted">Submitted</option>
                <option value="Not Submitted">Not Submitted</option>
            </select>

            <label for="name">CSEE RESULT SLIP</label></br>
            <select name="csee_result_slip" id="">
                <option value='.$row['csee_result_slip'].'>'.$row['csee_result_slip'].'</option>
                <option value="Submitted">Submitted</option>
                <option value="Not Submitted">Not Submitted</option>
            </select>

            <label for="name">CSEE CERTIFICATE</label></br>
            <label for="certificate_number">Certificate number</label>
            <input type="text" name="csee_certificate_number" id="" value='.$row['csee_certificate_number'].'>
            <label for="index_number">Index number</label>
            <input type="text" name="f4_index_number" id="" value='.$row['f4_index_number'].'>
            <label for="year">completion year</label>
            <input type="text" name="f4_year" id="" value='.$row['f4_year'].'>

            <label for="name">FORM SIX LEAVING CERTIFICATE</label></br>
            <select name="f6_leaving" id="">
                <option value='.$row['f6_leaving'].'>value='.$row['f6_leaving'].'</option>
                <option value="Submitted">Submitted</option>
                <option value="Not Submitted">Not Submitted</option>
            </select>

            <label for="name">ACSEE RESULT SLIP</label></br>
            <select name="f6_result_slip" id="">
                <option value='.$row['f6_result_slip'].'>'.$row['f6_result_slip'].'</option>
                <option value="Submitted">Submitted</option>
                <option value="Not Submitted">Not Submitted</option>
            </select>

            <label for="name">ACSEE CERTIFICATE</label></br>
            <label for="certificate_number">Certificate number</label>
            <input type="text" name="acsee_certificate_number" id="" value='.$row['acsee_certificate_number'].'>
            <label for="index_number">Index number</label>
            <input type="text" name="f6_index_number" id="" value='.$row['f6_index_number'].'>
            <label for="year">completion year</label>
            <input type="text" name="f6_year" id="" value='.$row['f6_year'].'>

            <label for="name">GATCE CERTIFICATE</label></br>
            <label for="certificate_number">Certificate number</label>
            <input type="text" name="gatce_certificate_number" id="" value='.$row['gatce_certificate_number'].'>
            <label for="index_number">Index number</label>
            <input type="text" name="gatce_index_number" id="" value='.$row['gatce_index_number'].'>
            <label for="year">completion year</label>
            <input type="text" name="gatce_year" id="" value='.$row['gatce_year'].'>

            <label for="name">MEDICAL STATUS CERTIFICATE</label></br>
            <select name="medical_certificate" id="">
                <option value='.$row['medical_certificate'].'>value='.$row['medical_certificate'].'</option>
                <option value="Submitted">Submitted</option>
                <option value="Not Submitted">Not Submitted</option>
            </select>

            <label for="name">BIRTH CERTIFICATE</label></br>
            <label for="certificate_number">Entry number</label>
            <input type="text" name="birth_certificate_number" id="" value='.$row['birth_certificate_number'].'>

            <input type="submit" value="EDIT" class="btn btn-info" name="update"></br>
            <a href="./enrollment.php?id='.$id.'">Next-></a>
        </fieldset>
        </form>
    </center>
</body>
</html>';
    }

    include "connection.php";

    if(isset(($_POST['update']))){
        $certificate_type = $_POST['certificate_type'];
        $certificate_number = $_POST['certificate_number'];
        $index_number = $_POST['index_number'];
        $year = $_POST['year'];
        //$id = $_SESSION['id'];
        
        $sql = "UPDATE certificates SET 
                `certificate_type`='$certificate_type',
                `certificate_number`='$certificate_number',
                `index_number`='$index_number',
                `year`='$year'
                WHERE `reg_id`='$id'";
        if($conn->query($sql)){
            echo "<script>alert('certificate records updated successfully')</script>";
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
            <legend>Certificates information</legend>
            <label for="name">Certificate type</label>
            <select name="certificate_type" id="">
                <option value="none">--Select certificate--</option>
                <option value="result_slip">Result slip</option>
                <option value="csee">CSEE</option>
                <option value="acsee">ACSEE</option>
            </select>
            <label for="certificate_number">Certificate number</label>
            <input type="text" name="certificate_number" id="">
            <label for="index_number">Index number</label>
            <input type="text" name="index_number" id="">
            <label for="year">completion year</label>
            <input type="text" name="year" id="">

            <input type="submit" value="SAVE" class="btn btn-primary" name="save">
        </fieldset>
        </form>
    </center>
</body>
</html> -->
