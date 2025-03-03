<?php session_abort(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>Document</title>
    <style>
        tr, td, th {
            border-collapse: collapse;
            border: 1px solid;
            width: 20%;
            }
        table {
            margin-top: 10px;
        }
    </style>
</head>
<body>
<center>
  <form action="" method="post">
    <label for="search">Search a student with name:</label>
    <div>
        <input type="text" name="name" id="name" onchange="search()">
        
        <button class="fa fa-search btn btn-info" name="search"></button>
    </div>
  </form>
</center> 
</body>
</html>

<script>
    function search(){
        alert('hello');
    }
</script>

<?php 
    include "./pages/connection.php";

    if(isset($_POST['search'])){
        $name = $_POST['name'];

        $sql = "SELECT personal_details.*, birth_information.*, residential_info.*, guardian.*, bank_information.*, enrollment_info.*, course.*, certificatess.* FROM personal_details 
                INNER JOIN birth_information ON personal_details.reg_id = birth_information.reg_id
                INNER JOIN residential_info ON personal_details.reg_id = residential_info.reg_id
                INNER JOIN guardian ON personal_details.reg_id = guardian.reg_id
                INNER JOIN enrollment_info ON personal_details.reg_id = enrollment_info.reg_id
                INNER JOIN bank_information ON personal_details.reg_id = bank_information.reg_id

                INNER JOIN course ON personal_details.reg_id = course.reg_id
                INNER JOIN certificatess ON personal_details.reg_id = certificatess.reg_id 
                WHERE first_name LIKE '%$name%' OR middle_name LIKE '%$name%' OR last_name LIKE '%$name%'";
                
                /* , course.*,
                course_info.*,  enrollment_info.*, guardian.*,
                residential_info.* , 
                birth_information, bank_information, certificates,
                course, course_info, enrollment_info, guardian,
                residential_info */
        $query = $conn->query($sql);

        echo '<center>
        <table border="1px">
            <tr>
                <th>REGISTRATION NUMBER</th>
                <th>FULL NAME</th>

                <th>ACTION</th>
                <th>FORM</th>
            </tr>';
        while($row=mysqli_fetch_assoc($query)){
            $object  = json_encode($row);
            $plain = json_decode($object);
            $_SESSION['data']= $plain;
            $data = $_SESSION['data'];
            
          /*  echo "<br>***************************************************************************************************************<br>";
            echo $object;
            echo "<br>***************************************************************************************************************<br>";
            echo $plain->reg_id."</br>";
            echo "<img src=".$plain->image."></br>";
            echo $plain->first_name."</br>";
            echo $plain->middle_name."</br>";
            echo $plain->last_name."</br>";
            echo $plain->index_number."</br>";
            echo $plain->csee_certificate_number."</br>";
            echo $plain->academic_year;
            echo "<br>***************************************************************************************************************<br>";*/
            echo "<tr>
                    <td>".$row['reg_id']."</td>
                    <td>".$row['first_name']." ".$row['middle_name']." ".$row['last_name']."</td>

                    <td><a href='session.php?id=".$data->reg_id."'><button class='fa fa-edit btn btn-edit' name='edit' style='margin-top:0px; width:100%;'></button></a></td>
                    <td><a href='session1.php?id=".$data->reg_id."'><button class='fa fa-eye btn btn-edit' name='edit' style='margin-top:0px; width:100%;'></button></a></td>
                </tr>";

        }
        echo "</table></center>";
    }

?>