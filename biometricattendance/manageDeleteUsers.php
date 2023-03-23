<?php
include 'connectDB.php';

$finger_print_id = $_POST["fingerid"];
$sqlForCheckingFingerPrint="select * from manage_users where fingerid='$finger_print_id'";
$result = $conn->query($sqlForCheckingFingerPrint);
if($result->num_rows > 0){
    $sql = "delete from manage_users where fingerid='$finger_print_id'";
    // $sql = "delete manage_users set number='$serialnumber', name='$user_name',gender='$gender' where fingerid='$finger_print_id'";
    if (mysqli_query($conn, $sql)) {
        echo "200";
    } else {
        echo "500";
    }
}else{
    echo "404";
}

?>