<?php 
    //session_start();
    
    if(!isset($_SESSION['id'])){
        echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank details</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>
<body>
    <center>
    <form action="" method="post">
        <fieldset>
            <legend>Bank details</legend>
            <label for="bank_name">Bank name</label>
            <input type="text" name="bank_name" id="">
            <label for="account_number">Account number</label>
            <input type="text" name="account_number" id="">
            <label for="account_name">Account name</label>
            <input type="text" name="account_name" id="">

            <input type="submit" value="SAVE" class="btn btn-primary" name="save">
        </fieldset>
    </form>
    </center>
</body>
</html>';

    include "connection.php";

    if(isset($_POST['save'])){
            $bank_name = $_POST['bank_name'];
            $account_number = $_POST['account_number'];
            $account_name = $_POST['account_name'];
            $id = $_SESSION['user'];
        

        $sql = "INSERT INTO bank_information(`bank_name`, `account_number`,	`account_name`, `reg_id`) VALUES('$bank_name', '$account_number', '$account_name', '$id')";
        $result = $conn->query($sql);

     if($result){
        echo "<script>alert('bank records added successfully')</script>";
     }
    }
    //echo $_SESSION['user'];
    } else {
        include "connection.php";
        $_SESSION['id'] = $std_id;
        $id = $_SESSION['id'];
        //$data = $_SESSION['id'];
        //$id = $data->reg_id;
        $sql1="SELECT * FROM bank_information WHERE `reg_id`='$id'";
        $result = $conn->query($sql1);
        $row = mysqli_fetch_assoc($result);
        echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank details</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>
<body>
    <center>
    <form action="" method="post">
        <fieldset>
            <legend>Bank details</legend>
            <label for="bank_name">Bank name</label>
            <input type="text" name="bank_name" id="" value='.$row['bank_name'].' >
            <label for="account_number">Account number</label>
            <input type="text" name="account_number" id="" value='.$row['account_number'].' >
            <label for="account_name">Account name</label>
            <input type="text" name="account_name" id="" value='.$row['account_name'].' >

            <input type="submit" value="EDIT" class="btn btn-info" name="update"></br>
        <a href="./course.php?id='.$id.'">Next-></a>
        </fieldset>
    </form>
    </center>
</body>
</html>';
    }

    include "connection.php";

    if(isset($_POST['update'])){
            $bank_name = $_POST['bank_name'];
            $account_number = $_POST['account_number'];
            $account_name = $_POST['account_name'];
            //$id = $_SESSION['id'];
        

        $sql = "UPDATE bank_information SET
                `bank_name`='$bank_name',
                `account_number`='$account_number',
                `account_name`='$account_name'
                WHERE `reg_id`='$id'";
        $result = $conn->query($sql);

     if($result){
        echo "<script>alert('bank records updated successfully')</script>";
     }
    }
    
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank details</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>
<body>
    <center>
    <form action="" method="post">
        <fieldset>
            <legend>Bank details</legend>
            <label for="bank_name">Bank name</label>
            <input type="text" name="bank_name" id="">
            <label for="account_number">Account number</label>
            <input type="text" name="account_number" id="">
            <label for="account_name">Account name</label>
            <input type="text" name="account_name" id="">

            <input type="submit" value="SAVE" class="btn btn-primary" name="save">
        </fieldset>
    </form>
    </center>
</body>
</html> -->
