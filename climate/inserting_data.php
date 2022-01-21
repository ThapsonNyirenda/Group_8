<?php

        $conn= mysqli_connect('localhost','root','','school');
        if ($conn) {
            if (isset($_POST['Submit'])) {

                $firstname=$_POST['firstname'];
                $lastname=$_POST['lastname'];
                $username=$_POST['username'];
                $date=$_POST['date'];
                $tittle=$_POST['tittle'];
                $category=$_POST['category'];
        
               $file=$_FILES['File'];
               $filename=$_FILES['File']['name'];
               $tmpname=$_FILES['File']['tmp_name'];
               $filesize=$_FILES['File']['size'];

               $getext= explode('.',$filename);
               $ext=strtolower(end($getext));
                $array=['pdf','png'];

                if (in_array($ext,$array)) {
                    
                    $realname= rand(10,1).'-'. $filename;

                    $filedir="uploads/".$realname;

                    $sql="INSERT INTO climate(FIRST_NAME, LAST_NAME, USERNAME, FILE_TITTLE, CATEGORY, FILE_NAMES, UPLOAD_DATE,DOWNLOADS,PATHS) VALUES ('$firstname','$lastname','$username','$tittle','$category','$realname','$date',0,'$filedir') ";       
                    $result=mysqli_query($conn,$sql);

                    if ($result) {
                        move_uploaded_file($tmpname,$filedir);
                        // header('location: table.php');
                        echo('Upload Successfull!!!');

                    }else {
                        echo 'not successful';
                    }

                }else{
                    echo 'extension not allowed';
                }               
               
            }else {
                echo 'not set to Submit';
            }
        }else {
            echo 'connectoin not availabla';
        }

?>