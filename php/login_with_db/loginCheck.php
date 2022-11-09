<?php 
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    $con = mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "select * from users where username='{$username}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);

    if($username == "" || $password == "") {
        //echo "invalid username/password!";
        header('location: login.php?err=null');
    }else if($user != null){
        $_SESSION['status'] = "true";
        header('location: home.php');
    }else{
        echo "invalid user";
    }

    //$_POST
?>