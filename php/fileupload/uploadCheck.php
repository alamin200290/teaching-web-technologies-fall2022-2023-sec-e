<?php 

    //print_r($_FILES);

    $src = $_FILES['myfile']['tmp_name'];
    $des = "upload/abc.jpg";

    if(move_uploaded_file($src, $des)){
        echo "success";
    }else{
        echo "error";
    }

?>