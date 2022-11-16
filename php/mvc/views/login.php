<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'invalid_request'){
            echo "invalid request error..";
        }

        if($_GET['err'] == 'null'){
            echo "null username/password";
        }
    }


?>

<html>
<head>
    <title>Login</title>
</head>
<body>
        <form method="post" action="../controllers/loginCheck.php" enctype="">
            Username: <input type="text" name="username" value=""/> <br>
            Password: <input type="password" name="password" value=""/> <br>
                    <input type="submit" name="btn" value="Submit"/>
        </form>
</body>
</html>