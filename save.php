<?php

if(isset($_POST['student'])){
    $student = $_POST['student'];
    
    $count_student = count($student);
    $id=0;
    for($i = 0; $i < $count_student; $i++){

        $id = $id + 1;
  
    echo $id.$student[$i]."<br>";



}
}
?>