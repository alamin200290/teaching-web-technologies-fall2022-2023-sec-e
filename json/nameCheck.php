<?php 

    $data  = $_POST['json'];
    $user = json_decode($data);

    echo $user->name;

    //sleep(4);

    // if($name != null){
    //     echo "Your Name: ".$name;
    // }else{
    //     echo "null value";
    // }
    $user = ['id'=> 12, 'name'=>'alamin'];
    //echo json_encode($user);

?>