<?php

    $conn= mysqli_connect('localhost','root','','signup');

    $sql= "SELECT * FROM details";
    $result=mysqli_query($conn,$sql);

    if ($result) {

       while($details=mysqli_fetch_assoc($result)){
            $email=$details['email'];
            $passwords=$details['passwords'];

            $email1=$_POST['email'];
            $password=$_POST['password'];

            if (!empty($email1 || $password)) {
                if($email1==$email){
                
                    if ($password==$passwords) {
                        // echo 'access granted';
                        header('location: home.html');
                    }else{
                        echo 'access denied!!';
                    }
                     
                }
            } else{
                die ('please fill in email and password!!');
                
            }          
        }
    }
?>