<?php 

    $name  = $_POST['name'];

    sleep(4);

    if($name != null){
        echo "Your Name: ".$name;
    }else{
        echo "null value";
    }

?>