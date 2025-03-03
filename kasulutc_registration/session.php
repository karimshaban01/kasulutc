<?php 
    session_start();
    $id = $_GET['id'];
    $_SESSION['id']=$id;
    //echo $_SESSION['id'];
    header("location:index.php?id=$id");
?>