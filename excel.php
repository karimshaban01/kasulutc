<?php session_abort(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kasulutc_registration/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="kasulutc_registration/fontawesome/css/all.css">
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
<!-- <center>
  <form action="" method="post">
    <label for="search">Search a student with name:</label>
    <div>
        <input type="text" name="name" id="name" onchange="search()">
        
        <button class="fa fa-search btn btn-info" name="search"></button>
    </div>
  </form>
</center>  -->

</body>
</html>



<?php 
    include "./kasulutc_registration/pages/connection.php";

    //if(isset($_POST['search'])){
        //$name = $_POST['name'];

        $sql = "SELECT personal_details.*, birth_information.*, residential_info.*, guardian.*, bank_information.*, enrollment_info.*, course.*, certificatess.* FROM personal_details 
                INNER JOIN birth_information ON personal_details.reg_id = birth_information.reg_id
                INNER JOIN residential_info ON personal_details.reg_id = residential_info.reg_id
                INNER JOIN guardian ON personal_details.reg_id = guardian.reg_id
                INNER JOIN enrollment_info ON personal_details.reg_id = enrollment_info.reg_id
                INNER JOIN bank_information ON personal_details.reg_id = bank_information.reg_id

                INNER JOIN course ON personal_details.reg_id = course.reg_id
                INNER JOIN certificatess ON personal_details.reg_id = certificatess.reg_id";
                
                /* , course.*,
                course_info.*,  enrollment_info.*, guardian.*,
                residential_info.* , 
                birth_information, bank_information, certificates,
                course, course_info, enrollment_info, guardian,
                residential_info */
        $query = $conn->query($sql);

        $csv = 'data.csv';
        $file_pointer = fopen($csv, 'w');

        fputcsv($file_pointer, ['ID', 'FIRST NAME', 'MIDDLE NAME', 'LAST NAME', 'PHONE NUMBER', 'EMAIL', 'IMAGE', 'GENDER', 'DISABILITY', 'RELIGION', 'MARITAL STATUS', 'NATIONALITY', 'NIDA', 'INDEX NUMBER', 'REGISTRATION DATE','ROW_ID', 'COUNTRY OF RESIDENCE', 'REGION OF RESIDENCE', 'DISTRICT OF RESIDENCE','DATE OF BIRTH', 'GUARDIAN COUNTRY', 'REGION', 'DISTRICT', 'WARD', 'GUARDIAN NAME', 'GUARDIAN COUNTRY', 'GUARDIAN NATIONALITY', 'GUARDIAN NIDA', 'GUARDIAN REGION', 'GUARDIAN DISTRICT', 'GUARDIAN WARD', 'RELATIONSHIP', 'BANK NAME', 'ACCOUNT NUMBER', 'ACCOUNT NAME', 'COURSE NAME', 'LEVEL', 'ACADEMIC YEAR', 'TERM', 'PROGRESS STATUS', 'REGISISTRATION TYPE', 'REGISTRATION STATUS', 'COMBINATION', 'FORM FOUR LEAVING', 'FORM FOUR RESULT SLIP', 'FORM FOUR CERTIFICATE NUMBER', 'FORM FOUR INDEX NUMBER', 'FORM FOUR YEAR OF COMPLETION', 'FORM SIX LEAVING CERTIFICATE', 'FORM SIX RESULT SLIP', 'FORM SIX CERTIFICATE NUMBER', 'FORM SIX INDEX NUMBER', 'FORM SIX YEAR OF COMPLETION', 'GATCE LEAVING CERTIFICATE', 'GATCE RESULT SLIP', 'GATCE CERTIFICATE NUMBER', 'GATCE INDEX NUMBER', 'GATCE COMPLETION YEAR', 'MEDICAL CERTIFICATE', 'BIRTH CERTIFICATE NUMBER']);
        while($row=mysqli_fetch_assoc($query)){
                $object = json_encode($row);
                echo "<br>***************************************************************************************************************<br>";
                echo $object;
                echo "<br>***************************************************************************************************************<br>";
                fputcsv($file_pointer, $row);
            }
                
            
            fclose($file_pointer);
             

?>