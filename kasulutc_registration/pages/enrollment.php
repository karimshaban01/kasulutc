<?php 
    //session_start();

    if(!isset($_SESSION['id'])){
        echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Enrolement</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>
<body>
    <center>
        <form action="" method="post">
        <fieldset>
            <legend>Course enrollment</legend>
<!--            <label for="course_name">Course name</label>
            <input type="text" name="course_name" id="">
            <label for="level">Level</label>
            <input type="text" name="level" id="">
            <label for="academic_year">Academic year</label>
            <input type="text" name="academic_year" id="">
            <label for="term">Term</label>
            <input type="text" name="term" id="">
-->

            <label for="reg_type">Registration type</label>
            <select name="reg_type">
                <option value="none">--Select type--</option>
                <option value="MoEST POST">MoEST POST</option>
                <option value="TRANSFER POST">TRANSFER POST</option>
                <option value="COLLEGE RECRUITMENT">COLLEGE RECRUITMENT</option>
            </select>



            <label for="progress_status">Progress status</label>
            <select name="progress_status">
                <option value="none">--Select progress status--</option>
                <option value="continuos">Continous</option>
                <option value="postponed">Postponed</option>
                <option value="discontinued">Discontinued</option>
            </select>

            <label for="reg_status">Registration status</label>
            <select name="reg_status">
            
                <option value="none">--Select status--</option>
                <option value="COMPLETE">complete</option>
                <option value="PARTIAL">partial</option>
               
            </select>

            <input type="submit" value="SAVE" class="btn btn-primary" name="save">
        </fieldset>
        </form>
    </center>
</body>
</html>';

include "connection.php";

    if(isset($_POST['save'])){
        //$course_name=$_POST['course_name'];
        //$level = $_POST['level'];
        //$academic_year=$_POST['academic_year'];
        //$term = $_POST['term'];
        $progess_status = $_POST['progress_status'];
        $reg_type = $_POST['reg_type'];
        $reg_status = $_POST['reg_status'];
        $id = $_SESSION['user'];

        $sql = "INSERT INTO enrollment_info(`progress_status`, `reg_type`, `reg_status`, `reg_id`) VALUES('$progess_status', '$reg_type', '$reg_status', '$id')";
        if($conn->query($sql)){
            echo "<script>alert('course info records added successfully')</script>";
        }
    }
    //echo $_SESSION['user'];
    } else {
        include "connection.php";
        $_SESSION['id']=$std_id;
        $id = $_SESSION['id'];
        //$id = $data->reg_id;
        $sql1="SELECT * FROM enrollment_info WHERE `reg_id`='$id'";
        $result = $conn->query($sql1);
        $row = mysqli_fetch_assoc($result);
        echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Enrolement</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>
<body>
    <center>
        <form action="" method="post">
        <fieldset>
            <legend>Course enrollment</legend>
            <label for="course_name">Course name</label>
            <input type="text" name="course_name" id="" value='.$row['course_name'].' >
            <label for="level">Level</label>
            <input type="text" name="level" id="" value='.$row['level'].' >
            <label for="academic_year">Academic year</label>
            <input type="text" name="academic_year" id="" value='.$row['academic_year'].' >
            <label for="term">Term</label>
            <input type="text" name="term" id=""  value='.$row['term'].' >

            <label for="reg_type">Registration type</label>
            <select name="reg_type">
                <option value="none">'.$row['reg_type'].'</option>
                <option value="MoEST POST">MoEST POST</option>
                <option value="TRANSFER POST">TRANSFER POST</option>
                <option value="COLLEGE RECRUITMENT">COLLEGE RECRUITMENT</option>
            </select>

            <label for="progress_status">Progress status</label>
            <select name="progress_status">
                <option value="none">'.$row['progress_status'].'</option>
                <option value="continuos">Continous</option>
                <option value="postponed">Postponed</option>
                <option value="discontinued">Discontinued</option>
            </select>

            <label for="reg_status">Registration status</label>
            <select name="reg_status">
                <option value="none">'.$row['reg_status'].'</option>
                <option value="COMPLETE">complete</option>
                <option value="PARTIAL">partial</option>
               
            </select>

            <input type="submit" value="EDIT" class="btn btn-info" name="update">
        </fieldset>
        </form>
    </center>
</body>
</html>';
    }

    include "connection.php";

    if(isset($_POST['update'])){
        $course_name=$_POST['course_name'];
        $level = $_POST['level'];
        $academic_year=$_POST['academic_year'];
        $progess_status = $_POST['progress_status'];
        $reg_type = $_POST['reg_type'];
        $reg_status = $_POST['reg_status'];
        $term = $_POST['term'];
        //$id = $_SESSION['id'];

        $sql = "UPDATE enrollment_info SET
                `course_name`='$course_name',
                `level`='$level',
                `academic_year`='$academic_year',
                `term`='$term',
                `progress_status` = '$progess_status',
                `reg_type` = '$reg_type',
                `reg_status`='$reg_status'
                WHERE `reg_id`='$id'";
        if($conn->query($sql)){
            echo "<script>location.load();</script>";
            
        }
    }
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Enrolement</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>
<body>
    <center>
        <form action="" method="post">
        <fieldset>
            <legend>Course enrollment</legend>
            <label for="course_name">Course name</label>
            <input type="text" name="course_name" id="">
            <label for="level">Level</label>
            <input type="text" name="level" id="">
            <label for="academic_year">Academic year</label>
            <input type="text" name="academic_year" id="">
            <label for="term">Term</label>
            <input type="text" name="term" id="">

            <input type="submit" value="SAVE" class="btn btn-primary" name="save">
        </fieldset>
        </form>
    </center>
</body>
</html> -->

