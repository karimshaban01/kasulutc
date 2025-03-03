<?php 
    session_abort();
    $id = $_GET['id'];
    echo $id;
    include './pages/connection.php';

    $sql = "SELECT personal_details.*, birth_information.*, residential_info.*, guardian.*, bank_information.*, enrollment_info.*, course.*, certificatess.* FROM personal_details 
                INNER JOIN birth_information ON personal_details.reg_id = birth_information.reg_id
                INNER JOIN residential_info ON personal_details.reg_id = residential_info.reg_id
                INNER JOIN guardian ON personal_details.reg_id = guardian.reg_id
                INNER JOIN enrollment_info ON personal_details.reg_id = enrollment_info.reg_id
                INNER JOIN bank_information ON personal_details.reg_id = bank_information.reg_id

                INNER JOIN course ON personal_details.reg_id = course.reg_id
                INNER JOIN certificatess ON personal_details.reg_id = certificatess.reg_id 
                WHERE personal_details.reg_id = '$id'";
                
                /* , course.*,
                course_info.*,  enrollment_info.*, guardian.*,
                residential_info.* , 
                birth_information, bank_information, certificates,
                course, course_info, enrollment_info, guardian,
                residential_info */
        $query = $conn->query($sql);

    $row=mysqli_fetch_assoc($query);
            $object  = json_encode($row);
            $plain = json_decode($object);
            session_start();
            $_SESSION['data']= $plain;
            $data = $_SESSION['data'];
    //echo $_SESSION['id'];
    
    header("location:form.php?id=$id");
?>