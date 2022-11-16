<?php 
    require_once "db.php";

    function login($user){
        $con = getConnection();
        $sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        if($user != null){
            return true;
        }else{
            return false;
        }
    }

    function insertUser($user){
        $con = getConnection();
        $sql = "insert into users values('', '{$user['username']}', '{$user['password']}', '{$user['email']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function getAllUser(){

    }

    function editUser(){
        
    }

    function deleteUser(){
        
    }

    function getUserByID(){
        
    }
?>