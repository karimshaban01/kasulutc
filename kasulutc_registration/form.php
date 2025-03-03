<?php
 session_start();
 $data = $_SESSION['data'];
 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "KSLTC/".$data->level[0]."_2023/".$data->reg_id; ?></title>
    <script src="./html2pdf.js"></script>
    <style>
        div {
            height: 18px;
            width: 100%;
            background-color: yellow;
            text-align: center;
        }
        td {
            width: 200px;
            margin-left: 20px;
        }
        body {
            width: 80%;
            margin-left: 10%;
            font-size: 12px;
        }

    </style>
</head>
<body>

    <button id="print">DOWNLOAD FORM</button>

    <center id="content">
        <h5>KASULU TEACHERS COLLEGE</h5>
        <img src="./katc_logo.png" alt="kasulutc_logo" width="120px" height="150px" style="position:absolute; margin-left:40%">
        
        <img src="<?php echo $data->image; ?>" alt="" width="120px" height="150px" style="margin-left:80%">
        <h4 style="margin-left:80%">REG. NO :<?php echo " KSLTC/".$data->level[0]."_2023/".$data->reg_id; ?></h4>
        <h5> REGISTRATION FORM</h5>
        
    <div>
        <h6>PART A : PERSONAL INFORMATION</h6>
    </div>
    <table>
        <tr>
            <td>FULL NAME :</td>
            <td><?php echo $data->first_name." ".$data->middle_name." ".$data->last_name; ?></td>
            <td>SEX :</td>
            <td><?php 
                    if($data->gender == "F"){
                        echo "FEMALE";
                    } else {
                        echo "MALE";
                    } ?></td>
        </tr>
        <tr>
            <td>DATE OF BIRTH :</td>
            <td><?php echo $data->date_of_birth; ?></td>
            <td>REGION :</td>
            <td><?php echo $data->region; ?></td>
        </tr>
        <tr>
            <td>DISTRICT :</td>
            <td><?php echo $data->district; ?></td>
            <td>WARD :</td>
            <td><?php echo $data->ward; ?></td>
            <td>NATIONALITY :</td>
            <td><?php echo $data->nationality; ?></td>
        </tr>
        <tr>
            <td>CONTACTS</td>
            <td>PHONE :</td>
            <td><?php echo $data->phone_number; ?></td>
            <td>POST ADDRESS :</td>
            <td><?php echo $data->email; ?></td>
        </tr>
    </table>
    <div>
        <h6>PART B : CERTIFICATES REQUIREMENT (Tick/Write)</h6>
    </div>
        <table>
            <tr>
                <td>CSEE CERT :</td>
                <td><?php 
                    if($data->csee_certificate_number !== ""){
                        echo "<input type='checkbox' checked disabled>";
                    } else {
                        echo "<input type='checkbox' disabled>";
                    }
                    ?>
                </td>
                <td>RESULT-SLIP CERT:</td>
                <td>
                    <?php 
                        if($data->f6_result_slip !== ""){
                             echo "<input type='checkbox' checked disabled>";
                         } else {
                             echo "<input type='checkbox' disabled>";
                         }
                    ?>
                </td>
                <td>LEAVING CERT :</td>
                <td>
                    <?php 
                        if($data->f4_leaving !== ""){
                             echo "<input type='checkbox' checked disabled>";
                         } else {
                             echo "<input type='checkbox' disabled>";
                         }
                    ?>
                </td>
                <td>BIRTH CERT :</td>
                <td>
                    <?php 
                        if($data->birth_certificate_number !== ""){
                             echo "<input type='checkbox' checked disabled>";
                         } else {
                             echo "<input type='checkbox' disabled>";
                         }
                    ?>
                </td>
            </tr>
            <tr>
                <td>ACSEE CERT :</td>
                <td>
                    <?php 
                        if($data->acsee_certificate_number !== ""){
                             echo "<input type='checkbox' checked disabled>";
                         } else {
                             echo "<input type='checkbox' disabled>";
                         }
                    ?>
                </td>
                <td>RESULT-SLIP CERT:</td>
                <td>
                    <?php 
                        if($data->f6_result_slip !== ""){
                             echo "<input type='checkbox' checked disabled>";
                         } else {
                             echo "<input type='checkbox' disabled>";
                         }
                    ?>
                </td>
                <td>LEAVING CERT :</td>
                <td>
                    <?php 
                        if($data->f6_leaving !== ""){
                             echo "<input type='checkbox' checked disabled>";
                         } else {
                             echo "<input type='checkbox' disabled>";
                         }
                    ?>
                </td>
                <td>MEDICAL STATUS :</td>
                <td>
                    <?php 
                        if($data->medical_certificate !== ""){
                             echo "<input type='checkbox' checked disabled>";
                         } else {
                             echo "<input type='checkbox' disabled>";
                         }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>COURSE :</td>
                <td>
                    <?php echo $data->level; ?>
                </td>
                <td><input type="checkbox" name="" id="" checked disabled></td>
                <td>COMBINATION</td>
                <td>
                <?php echo $data->combination; ?>
                </td>
            </tr>




	<tr>
                <td>GATCE CERT :</td>
                <td>
                    <?php 
                        if($data->gatce_certificate_number !== ""){
                             echo "<input type='checkbox' checked disabled>";
                         } else {
                             echo "<input type='checkbox' disabled>";
                         }
                    ?>
                </td>
                <td>RESULT-SLIP CERT:</td>
                <td>
                    <?php 
                        if($data->gatce_result_slip !== ""){
                             echo "<input type='checkbox' checked disabled>";
                         } else {
                             echo "<input type='checkbox' disabled>";
                         }
                    ?>
                </td>
                <td>LEAVING CERT :</td>
                <td>
                    <?php 
                        if($data->gatce_leaving !== ""){
                             echo "<input type='checkbox' checked disabled>";
                         } else {
                             echo "<input type='checkbox' disabled>";
                         }
                    ?>
                </td>
	</tr>


        </table>
   
    <div>
        <h6>PART C: GUARDIAN / PARENT INFORMATION</h6>
    </div>
    <table>
        <tr>
            <td>FULL NAME :</td>
            <td><?php echo $data->guardian_name; ?></td>
            <td>RELATIONSHIP :</td>
            <td><?php echo $data->relationship; ?></td>
        </tr>
        <tr>
            <td>REGION :</td>
            <td><?php echo $data->guardian_region; ?></td>
            <td>DISTRICT :</td>
            <td><?php echo $data->guardian_district; ?></td>
            <td>WARD :</td>
            <td><?php echo $data->guardian_ward; ?></td>
        </tr>
        <tr>
            <td>OCCUPATION :</td>
            <td><?php echo $data->guardian_occupation; ?></td>
            <td>PHONE :</td>
            <td><?php echo $data->phone_number; ?></td>
            <td>EMAIL ADDRESS :</td>
            <td><?php echo $data->email; ?></td>
        </tr>
    </table>
    <div>
        <h6>PART F : COMMENTS</h6>
    </div>
        <table>
            <tr>
                <td>MoEST POST :</td>
                <td>
                    <?php
                        if($data->reg_type == "MoEST POST"){
                            echo '<input type="checkbox" name="" id="" disabled checked>';
                        } else {
                            echo '<input type="checkbox" name="" id="" disabled>';
                        }
                    ?>
                </td>
                <td>TRANSFER POST :</td>
                <td>
                <?php
                        if($data->reg_type == "TRANSFER POST"){
                            echo '<input type="checkbox" name="" id="" disabled checked>';
                        } else {
                            echo '<input type="checkbox" name="" id="" disabled>';
                        }
                    ?>
                </td>
                <td>COLLEGE RECRUITMENT :</td>
                <td>
                <?php
                        if($data->reg_type == "COLLEGE RECRUITMENT"){
                            echo '<input type="checkbox" name="" id="" disabled checked>';
                        } else {
                            echo '<input type="checkbox" name="" id="" disabled>';
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>DATE REGISTERED :</td>
                <td><?php echo $data->reg_date; ?></td>
                <td>REGISTRATION STATUS :</td>
                <td><?php echo $data->reg_status; ?></td>
            </tr>
            <tr>
                <td>PROGRESS STATUS :</td>
                <td><?php echo strtoupper($data->progress_status); ?></td>
            </tr>
        </table>
   
    </center>

    
    <script>
        document.addEventListener('click', ()=>{
            var element = document.getElementById('content');

            var opt = {
                margin: 0.5,
                filename: '<?php echo "KSLTC/".$data->level[0]."2023/".$data->reg_id; ?>',
                image: { type: 'jpeg', quality: 1},
                html2canvas: { scale: 2},
                jsPDF: { unit: 'in', format: 'A4', orientation: 'portrait'}
            };
            html2pdf().set(opt).from(element).save()
        });
    </script>
</body>
</html>