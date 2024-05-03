<?php


$student = array(
    "nipun" => "100",
    "rahul" => "100",
    "salim" => "200",
    "Mamun" => "500",

);

    $count = 0;

    foreach ($student as $key => $item){
        echo $key.'--'. $item."<br />";
        $count++;
        if(100<$item){
            $back = $item-100;
            echo $key." will recived ".$back."<br />";
        }
    }


    echo "total Member: ".$count; 

?>