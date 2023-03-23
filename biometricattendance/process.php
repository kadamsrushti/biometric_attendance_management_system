<?php
include 'connectDB.php';
// if(isset($_POST["Manage Users"]))
// {
    $serialnumber=$_POST["serialNumber"];
    $finger_print_id=$_POST["fingerid"];
    $user_name=$_POST["name"];
    $user_email=$_POST["email"];
    $timein=$_POST["time_in"];
    $gender=$_POST["gender"];
    $time = strtotime($timein);
    // $chk="";
    // foreach($finger_print_id as $chk1)
    // {
    //     $chk.=$chk1.","; //if we do multiple selection this will access data continuously.
    // }
    $todayDate=date('Y-m-d H:i:s');
    $sql="insert into manage_users(number, fingerid, name, gender, user_date, time_in) 
    values($serialnumber, $finger_print_id, '$user_name', '$gender','$todayDate','$time')";
    if(mysqli_query($conn, $sql))
    {
        echo '<script type="text/javascript">
        window.location.replace("ManageUsers.php");
        
   </script>';
    }else{
        echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
    }

// }
?>



