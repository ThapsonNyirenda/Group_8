<?php

    $conn= mysqli_connect('localhost','root','','signup');
    if ($conn) {
        $fname=$_POST['fname'];
        $sname=$_POST['sname'];
        $email=$_POST['email'];
        $confpassword=$_POST['confpassword'];

        $sql= "INSERT INTO details(firstname,sirname,email,passwords) VALUES('$fname','$sname','$email','$confpassword')";
        $result= mysqli_query($conn,$sql);

        if ($result) {
            header('location: index.html');
        }else {
            echo 'not inserted';
        }

    }else {
        echo 'no connection to server';
    }
?>