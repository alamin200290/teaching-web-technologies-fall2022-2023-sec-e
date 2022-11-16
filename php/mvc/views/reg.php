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
    <title>Signup</title>
</head>
<body>
        <form method="post" action="regCheck.php" enctype="">
            <fieldset>
                <legend>Signup</legend>
                Username: <input type="text" name="username" value=""/> <br>
                Password: <input type="password" name="password" value=""/> <br>
                Email: <input type="email" name="email" value=""/> <br>
                    <input type="submit" name="btn" value="Submit"/>
            </fieldset>
        </form>
</body>
</html>