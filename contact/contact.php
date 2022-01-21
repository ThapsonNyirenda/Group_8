<?php

    $conn=mysqli_connect('localhost','root','','contact');
    if ($conn) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];

        echo $name;
    }else {
        echo 'connection failed';
    }


?>