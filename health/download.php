<?php

    $conn=mysqli_connect('localhost','root','','school');

    if (isset($_GET['file'])) {
        if(is_numeric($_GET['file']))
        {
            $id=$_GET['file'];

            $sql="SELECT * FROM health WHERE ID=$id LIMIT 1";
            $result1=mysqli_query($conn,$sql);

            $result=mysqli_fetch_array($result1);

            if (empty($result)) {
                exit('file not found');
            }else {

                $file ='uploads/'.$result['FILE_NAMES'];

                if (file_exists($file)) {
                    header('Content-Type: '.mime_content_type($file));
                    header('Content-Disposition: attachment; filename='.basename($file));
                    header('Content-Length: '.filesize($file));
                    header('Cache-Control: no-cache');
                    header('Content-Transfer-Encoding: binary');

                    readfile($file);
                    $sql1="UPDATE health SET DOWNLOADS=DOWNLOADS+1 WHERE ID=$id";
                $result2=mysqli_query($conn,$sql1);
                    header('location: table.php');
                    exit;
                }else {
                    die ('file is not available');
                }

                
            }
        }
    }else {
        echo 'file is not set';
    }
?>