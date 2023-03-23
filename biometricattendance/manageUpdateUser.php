<?php
include 'connectDB.php';

$serialnumber = $_POST["serialNumber"];
$finger_print_id = $_POST["fingerid"];
$user_name = $_POST["name"];
$user_email = $_POST["email"];
$gender = $_POST["gender"];

$todayDate = date('Y-m-d H:i:s');


$sqlForCheckingFingerPrint="select * from manage_users where fingerid='$finger_print_id'";
$result = $conn->query($sqlForCheckingFingerPrint);
if($result->num_rows > 0){
    $sql = "update manage_users set number='$serialnumber', name='$user_name',gender='$gender' where fingerid='$finger_print_id'";
    if (mysqli_query($conn, $sql)) {
        echo "200";
    } else {
        echo "500";
    }
}else{
    echo "404";


}

?>