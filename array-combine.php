<?php

    $student = array("1","2");
    $teacher = array("a","b");
 
    $collection = array_combine( $student, $teacher );
    foreach ($collection as $key => $item){
        echo $key. "=". "$item"."<br/>";
    }

?>