<?php
include "connectDB.php"; // Using database connection file here

if(isset($_POST['user_add']))
{		
    $fingerid = $_POST['fingerid'];
    $number = $_POST['number'];  
    $serialNumber = $_POST['serialNumber'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $timein = $_POST['timein'];
    $gender = $_POST['gender'];
    // $fullname = $_POST['fullname'];
    // $age = $_POST['age'];

    $insert = mysqli_query($db,"INSERT INTO `manage_users`(`number`, `fingerid`, 'name', 'gender', 'timein') VALUES ('$number','$fingerid', '$name', '$gender', '$timein')");

    if(!$insert)
    {
        
    }
    else
    {
        echo "Records added successfully.";
    }   
}

mysqli_close($db); // Close connection
?>