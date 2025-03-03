<?php 
    //session_start();

    //echo $id;
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
            <label for="course_name">Course name</label>
            <!-- <input type="text" name="course_name" id=""> -->
		<select name="course_name">
			<option>--Select course--</option>
			<option>GRADE A</option>
			<option>DIPLOMA</option>
		</select>
            <label for="level">Level</label>
            <!-- <input type="text" name="level" id=""> -->
		<select name="level">
			<option>--Select level--</option>
			<option>GRADE A</option>
			<option>DIPLOMA I</option>
			<option>DIPLOMA II</option>
			<option>SPECIAL DIPLOMA I</option>
			<option>SPECIAL DIPLOMA II</option>
			<option>SPECIAL DIPLOMA III</option>
		</select>
            <label for="combination">Combination</label>
            <!-- <input type="text" name="combination" id=""> -->
		<select name="combination">
			<option>--Select combination--</option>
			<option>Science and Mathematics</option>
			<option>CBE</option>
			<option>CME</option>
			<option>PBE</option>
			<option>PME</option>
			<option>PCE</option>
			<option>MICTE</option>
		</select>
            <label for="academic_year">Academic year</label>
            <input type="text" name="academic_year" id="">
            <label for="term">Term</label>
            <!-- <input type="text" name="term" id=""> -->
		<select name="term">
			<option>--Select term--</option>
			
			<option>I</option>
			<option>II</option>
			
		</select>

            <input type="submit" value="SAVE" class="btn btn-primary" name="save">
        </fieldset>
        </form>
    </center>
</body>
</html>';

include "connection.php";

if(isset($_POST['save'])){
    $course_name = $_POST['course_name'];
    $level = $_POST['level'];
    $combination = $_POST['combination'];
    $academic_year = $_POST['academic_year'];
    $term = $_POST['term'];
    $id = $_SESSION['user'];

    $sql = "INSERT INTO course(`course_name`, `level`, `combination`, `academic_year`, `term`, `reg_id`) VALUES('$course_name', '$level', '$combination', '$academic_year', '$term', '$id')";
    if($conn->query($sql)){
        echo "<script>alert('course records added successfully')</script>";
    }
}

    } else {
        include "connection.php";
        $_SESSION['id'] = $std_id;
        $id = $_SESSION['id'];
        //$data = $_SESSION['id'];
        //$id = $data->reg_id;
        $sql1="SELECT * FROM course WHERE `reg_id`='$id'";
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
            <label for="combination">Combination</label>
            <input type="text" name="combination" id="" value='.$row['combination'].' >
            <label for="academic_year">Academic year</label>
            <input type="text" name="academic_year" id="" value='.$row['academic_year'].' >
            <label for="term">Term</label>
            <input type="text" name="term" id="" value='.$row['term'].' >

            <input type="submit" value="EDIT" class="btn btn-info" name="update">
            </br>
        <a href="./guardian.php?id='.$id.'">Next-></a>
        </fieldset>
        </form>
    </center>
</body>
</html>';
    }

    include "connection.php";

    if(isset($_POST['update'])){
        $course_name = $_POST['course_name'];
        $level = $_POST['level'];
        $combination = $_POST['combination'];
        $academic_year = $_POST['academic_year'];
        $term = $_POST['term'];
        //$id = $_SESSION['id'];

        $sql = "UPDATE course SET
                `course_name`='$course_name',
                `level`='$level',
                `combination`='$combination',
                `academic_year`='$academic_year',
                `term`='$term'
                WHERE `reg_id`='$id'";
        if($conn->query($sql)){
            echo "<script>alert('course records updated successfully')</script>";
        }
    }
?>