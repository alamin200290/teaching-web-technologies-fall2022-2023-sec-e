<?php 

    $conn = mysqli_connect('localhost', 'root', '', 'webtech');
    
    // if($conn){
    //     echo "Success";
    // }else{
    //     echo "error";
    // }

    $sql = "select * from users where id=2";
    $result = mysqli_query($conn, $sql);

    echo "<table border=1>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
            </tr>";

    while($data = mysqli_fetch_assoc($result)){
       echo "<tr>
                <td>{$data['id']}</td>
                <td>{$data['username']}</td>
                <td>{$data['email']}</td>
            </tr>";
    }

    echo "</table>";
?>