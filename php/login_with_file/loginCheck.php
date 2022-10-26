<?php 
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "" || $password == "") {
        //echo "invalid username/password!";
        header('location: login.php?err=null');
    }else{

        $file = fopen('user.txt', "r");
        while(!feof($file)){
            $data = fgets($file);
            $user = explode("|", $data);
            if($user[0] == $username && $user[1] == $password){
                setcookie('status', 'true', time()+3600, '/');
                header('location: home.php');
            }
        }

        echo "invalid user";
    }

    //$_POST
?>