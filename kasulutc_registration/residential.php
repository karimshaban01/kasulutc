<?php 
    session_start();
    if(!isset($_GET['id'])){
        echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <style>
        * { 
            box-sizing: border-box;
        }
        .header {
            padding: 15px;
            box-shadow: 0px 0px 2px 0px;
        }
        .nav-link {
            background-color: lightgreen;
        }
        .menu {
            width: 25%;
            float: left;
            padding: 15px;
            
        }

        .main {
            width: 50%;
            float:left;
            padding: 15px;
            
        }
        li {
        
        }
        a:hover {
            background-color: lightblue;
        }
        .profile {
            background-color: yellow;
            border-radius: 50%;
            margin-left: 5%;
        }
        .tiles {
            background-color: lightgreen;
            margin-left: 10px;
            
            width: fit-content;
            border-radius: 5px;
            font-size: 12px;
            padding: 5px;
        }
        .info {
            width: 25%;
            float: right;
            padding: 15px;
            
            
        }
        .foot {
            padding: 15px;
            
            margin-top: 45%;
            box-shadow: 0px 0px 0px 1px;
        }

    </style>
</head>
<body>
    <div class="header">
        THIS IS THE TOP NAVIGATION
        <a href="../index.php" style="margin-left:60%"><i class="fa fa-user-plus"></i></a>
        <a href="./student.php" style="margin-left:1%"><i class="fa fa-user-pen"></i></a>
    </div>
    <div class="menu">
    <ul>
            <!-- <div>
                <img src="./lg.png" alt="" class="profile" width="50%" height="10%"><br>
                <i>Registration status</i><div class="tiles">COMPLETE</div>
                <i>Progress status</i><div class="tiles">CONTINUING</div>
            </div> -->
            <a href="index.php" class="nav nav-tabs nav-link"><i class="fa fa-user">&nbsp;&nbsp;</i>Personal information</a>
            <a href="birth.php" class="nav nav-tabs nav-link"><i class="fa fa-calendar">&nbsp;&nbsp;</i>Birth information</a>
            <a href="residential.php" class="nav nav-tabs nav-link"><i class="fa fa-map-location">&nbsp;&nbsp;</i>Residential information</a>
            <a href="bank.php" class="nav nav-tabs nav-link"><i class="fa fa-credit-card">&nbsp;&nbsp;</i>Bank information</a>
            <a href="course.php" class="nav nav-tabs nav-link"><i class="fa fa-user-pen">&nbsp;&nbsp;</i>Course enrollment</a>
            <a href="guardian.php" class="nav nav-tabs nav-link"><i class="fa fa-users">&nbsp;&nbsp;</i>Guardian information</a>
            <a href="certificates.php" class="nav nav-tabs nav-link"><i class="fa fa-file">&nbsp;&nbsp;</i>Cerficates requirement</a>
            <a href="enrollment.php" class="nav nav-tabs nav-link"><i class="fa fa-book">&nbsp;&nbsp;</i>Enrollment information</a>
            
        </ul>
    </div>
    <div class="main">';
     include "./pages/residential.php";

    echo '</div>
    <div class="info">        
        <h6>CURRENT STUDENT INFO</h6>
  

    </div>
<!--     <footer>
        <div class="foot">
        THIS IS A FOOTER
        </div>
    </footer> -->
</body>
</html>';
    } else {
        $std_id = $_GET['id'];
        $id = $_SESSION['id'];
        echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <style>
        * { 
            box-sizing: border-box;
        }
        .header {
            padding: 15px;
            box-shadow: 0px 0px 2px 0px;
        }
        .nav-link {
            background-color: lightgreen;
        }
        .menu {
            width: 25%;
            float: left;
            padding: 15px;
            
        }

        .main {
            width: 50%;
            float:left;
            padding: 15px;
            
        }
        li {
        
        }
        a:hover {
            background-color: lightblue;
        }
        .profile {
            background-color: yellow;
            border-radius: 50%;
            margin-left: 5%;
        }
        .tiles {
            background-color: lightgreen;
            margin-left: 10px;
            
            width: fit-content;
            border-radius: 5px;
            font-size: 12px;
            padding: 5px;
        }
        .info {
            width: 25%;
            float: right;
            padding: 15px;
            
            
        }
        .foot {
            padding: 15px;
            
            margin-top: 45%;
            box-shadow: 0px 0px 0px 1px;
        }

    </style>
</head>
<body>
    <div class="header">
        THIS IS THE TOP NAVIGATION
        <a href="../index.php" style="margin-left:60%"><i class="fa fa-user-plus"></i></a>
        <a href="./student.php" style="margin-left:1%"><i class="fa fa-user-pen"></i></a>
    </div>
    <div class="menu">
    <ul>
            <!-- <div>
                <img src="./lg.png" alt="" class="profile" width="50%" height="10%"><br>
                <i>Registration status</i><div class="tiles">COMPLETE</div>
                <i>Progress status</i><div class="tiles">CONTINUING</div>
            </div> -->
            <a href="index.php?id='.$id.'" class="nav nav-tabs nav-link"><i class="fa fa-user">&nbsp;&nbsp;</i>Personal information</a>
            <a href="birth.php?id='.$id.'" class="nav nav-tabs nav-link"><i class="fa fa-calendar">&nbsp;&nbsp;</i>Birth information</a>
            <a href="residential.php?id='.$id.'" class="nav nav-tabs nav-link"><i class="fa fa-map-location">&nbsp;&nbsp;</i>Residential information</a>
            <a href="bank.php?id='.$id.'" class="nav nav-tabs nav-link"><i class="fa fa-credit-card">&nbsp;&nbsp;</i>Bank information</a>
            <a href="course.php?id='.$id.'" class="nav nav-tabs nav-link"><i class="fa fa-user-pen">&nbsp;&nbsp;</i>Course enrollment</a>
            <a href="guardian.php?id='.$id.'" class="nav nav-tabs nav-link"><i class="fa fa-users">&nbsp;&nbsp;</i>Guardian information</a>
            <a href="certificates.php?id='.$id.'" class="nav nav-tabs nav-link"><i class="fa fa-file">&nbsp;&nbsp;</i>Cerficates requirement</a>
            <a href="enrollment.php?id='.$id.'" class="nav nav-tabs nav-link"><i class="fa fa-book">&nbsp;&nbsp;</i>Enrollment information</a>
            
        </ul>
    </div>
    <div class="main">';
     include "./pages/residential.php";

    echo '</div>
    <div class="info">        
        <h6>CURRENT STUDENT INFO</h6>
  

    </div>
<!--     <footer>
        <div class="foot">
        THIS IS A FOOTER
        </div>
    </footer> -->
</body>
</html>';
    }
?>
