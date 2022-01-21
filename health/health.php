<?php

        $conn= mysqli_connect('localhost','root','','school');

        if (isset($_POST['Submit'])) {
            $name=$_POST["name"];
            $category=$_POST["category"];
            $username=$_POST["username"];
       
            $realName= rand(10,10)."-".$_FILES["image"]["name"];
    
            $tmpName= $_FILES["image"]["tmp_name"];
    
            $uploadDir='uploads/';
    
            move_uploaded_file($tmpName,$uploadDir.$realName);
    
            $inserting= "INSERT INTO innovation(TITTLE,CATEGORY,USERNAME,FILENAMES) VALUES('$name','$category','$username','$realName')";
    
            if (mysqli_query($conn,$inserting)) {
                // echo "your successfull";
                header('location:health2.php');
            }else {
                echo "your not successfull";
            }
        }      

?>
