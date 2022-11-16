<?php 

    $host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "webtech";

    function getConnection(){
        global $host;
        global $dbuser;
        global $dbpass;
        global $dbname;
        $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
        return  $con;
    }

?>