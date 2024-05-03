<?php

    // array column 
    $student = array(
        array(
            "id" => "1",
            "name" => "Nipun",
        ),
        array(
            "id" => "2",
            "name" => "Selim",
        ),
        array(
            "id" => "3",
            "name" => "Sajib",
        )
    );

    print_r(array_column($student,'id')); 

?>