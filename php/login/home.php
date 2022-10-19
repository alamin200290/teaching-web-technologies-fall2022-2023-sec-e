<?php
    session_start();

    if(!isset($_SESSION['status'])){
        header('location: login.php?err=invalid_request');
    }
?>


<html>
<head>
    <title>Home Page</title>
</head>
<body>
        <h1>Welcome Home!</h1>
        <a href="logout.php">Logout</a>
</body>
</html>