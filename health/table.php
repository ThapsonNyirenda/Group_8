<?php

$conn=mysqli_connect('localhost','root','','school');

$sql= 'SELECT * FROM health';
$result=mysqli_query($conn,$sql);


//   //   echo 'it is set';
//   $id2=$_GET['file_id'];

//   $sql2="SELECT * FROM health WHERE id=$id2";
//   $result2=mysqli_query($conn,$sql2);

//   $file=mysqli_fetch_assoc($result2);
//   $filepath="uploads/".$file['FILE_NAMES'];

//   if (file_exists($filepath)) {
//       // echo 'file exists';

//   }else {
//       echo 'file does not exist';
//   }
// $selection=mysqli_fetch_assoc($result);

// if ($result) {
//     while ($selection=mysqli_fetch_assoc($result)) {
//         $id= $selection['ID'];
//         $firstname=$selection['FIRST_NAME'];
//         $lastname=$selection['LAST_NAME'];
//         $tittle=$selection['FILE_TITTLE'];
//         $category=$selection['CATEGORY'];
//         $filename=$selection['FILE_NAMES'];
//         $downloads=$selection['DOWNLOADS'];

//         echo '
//         <tr>
//             <td>'.$id.'</td>
//             <td>'.$firstname.'</td>
//             <td>'.$lastname.'</td>
//             <td>'.$tittle.'</td>
//             <td>'.$category.'</td>
//             <td>'.$filename.'</td>
//             <td>'.$downloads.'</td>
//         </tr>
//         ';
//     }
// }
?> 


<!DOCTYPE html>
<html>
    <head>
        <title>table</title>
        <link rel="stylesheet" href="table.css">

    </head>
    <body>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>FIRSTNAME</th>
                        <th>LASTNAME</th>
                        <th>USERNAME</th>
                        <th>FILE TITTLE</th>
                        <th>CATEGORY</th>
                        <th>FILENAME</th>
                        <th>DATE</th>
                        <th>DOWNLOADS</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        
                        while ($selection=mysqli_fetch_assoc($result)) {
                            $id= $selection['ID'];
                            $firstname=$selection['FIRST_NAME'];
                            $lastname=$selection['LAST_NAME'];
                            $tittle=$selection['FILE_TITTLE'];
                            $category=$selection['CATEGORY'];
                            $filename=$selection['FILE_NAMES'];
                            $downloads=$selection['DOWNLOADS'];
                            $date=$selection['UPLOAD_DATE'];
                            $path=$selection['PATHS'];
                            $username=$selection['USERNAME'];
                           
                            echo '
                            <tr>
                                <td>'.$id.'</td>
                                <td>'.$firstname.'</td>
                                <td>'.$lastname.'</td>
                                <td>'.$username.'</td>
                                <td>'.$tittle.'</td>
                                <td>'.$category.'</td>
                                <td>'.$filename.'</td>
                                <td>'.$date.'</td>
                                <td>'.$downloads.'</td>
                                <td>
                                    <a href="download.php?file='.$id.'">download</a>
                                </td>
                            </tr>
                            ';

                        }

                    
                    ?>
                    
                </tbody>
            </table>
        </div>
    </body>
</html>


