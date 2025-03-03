<?php 
    if(($open = fopen("data.csv", "r")) !== false){
        while(($data =  fgetcsv($open, 1000, ',')) !== false){
            //$array[] = $data;
            echo $data[0]."</br>";
        }
        fclose($open);
    }
?>