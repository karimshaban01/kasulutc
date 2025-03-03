<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Enrolement</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
    <center>
        <fieldset>
            <legend>Course enrollment</legend>
            <label for="course_name">Course name</label>
            <input type="text" name="course_name" id="">
            
            <label for="combination">Combination</label>
            <input type="text" name="combination" id="">
            <input type="submit" value="SAVE" class="btn btn-primary" name="save">
        </fieldset>
    </center>
</body>
</html>

<?php 
    include "connection.php";

    if(isset($_POST['save'])){
        $course_name = $_POST['course_name'];
        $combination = $_POST['combination'];
        $id = $_SESSION['id'];

        $sql = "INSERT INTO course_info(`course_name`, `combination`, `reg_id`) VALUES('$course_name', '$combination', '$id')";
        if($conn->query($sql)){
            echo "<script>alert('course info records added successfully')</script>";
        }
    }
?>