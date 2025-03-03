<?php header("location:./Logis/index.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME TO KASULU TC</title>
    <link rel="stylesheet" href="kasulutc_registration/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="kasulutc_registration/fontawesome/css/all.css">
</head>
<style>
    center {
        margin-top: 10%;
    }
</style>
<body>
    <center>
                <h1>SELECT REGISTRATION TYPE</h1>
                <form action="" method="post">
                    <input type="submit" value="NEW REGISTRATION" name="new" class="btn btn-primary">
                   <!--  <input type="submit" value="ON-GOING REGISTRATION" name="ongoing" class="btn btn-success"> -->
                    <input type="submit" value="UPDATE STUDENT INFORMATION" name="completed" class="btn btn-info">
                </form>
    </center>
</body>
</html>
<?php

    if(isset($_POST['new'])){
        session_start();
        session_destroy();
        header("location:kasulutc_registration/index.php");
    }
    if(isset($_POST['ongoing'])) {
        header(("location:find.php"));
    }
    if(isset($_POST['completed'])) {
        header(("location:kasulutc_registration/student.php"));
    }
?>