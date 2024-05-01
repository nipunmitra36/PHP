<?php

if(isset($_POST['student'])){
    $student = $_POST['student'];
    
    $count_student = count($student);
    for($i = 0; $i < $count_student; $i++){
        echo $student[$i]."<br>";
    }

}
   
?>