<?php 
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "" || $password == "") {
        //echo "invalid username/password!";
        header('location: login.php?err=null');
    }else if($username == "admin" && $password=="abc"){
        $_SESSION['status'] = "true";
        header('location: home.php');
    }else{
        echo "invalid user";
    }

    //$_POST
?>