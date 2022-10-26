<?php 

    // $file = fopen('user.txt', 'r');
    // $data = fread($file, filesize('user.txt'));
    // echo $data;
    // fclose($file);

        // $file = fopen('user.txt', "w");
        // $data = "abc";
        // fwrite($file, $data);
        // fclose($file);
        // echo "Done!";

        $file = fopen('user.txt', "a");
        $data = "abc...\r\n";
        fwrite($file, $data);
        fclose($file);
        echo "Done!";
?>