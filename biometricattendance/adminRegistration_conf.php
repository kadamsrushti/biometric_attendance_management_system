<?php
connect to database
include 'connectDB.php';

//initalize variables
$adminId="";
$password="";
$error=array();

//register user
if(isset($_POST['reg_user'])){
    $adminId=mysqli_real_escape_string($db, $_POST['Id']);
    $password=mysqli_real_escape_string($db, $_POST['password']);

    //ensure that form is correctly filled
    if(empty($adminId)){array_push($error, "Admin Id is required")};
    if(empty($password)){array_push($error, "Password is required.")};

    //check database if admin is already registered or not
    $adminId_check_query= "SELECT * from where Id="$adminId" OR password="$password" LIMIT 1";
    $result = mysqli_query($db, $adminId_check_query);
    $user = mysqli_fetch_assoc($result);

    if($adminId) { //if user exists
        aray_push($error, Admin ID already exists.);
    }

    //register user if thwre are no error in the page
    if(count($error==0)){
        $password=md5(password_1) //encrypt password befor saving in database

    $query="INSERT INTO admin_registration (Id, password) VALUES ('Id', 'password')";
    mysqli_query($db, $query);
    $_session['Id']=$adminId;
    $_session['success']="You have now registered.";
    hearder('location: adminRegistration.php');
        
    }
}
   
echo "In register hello";die();
 if(isset($_POST["submit"])){
   echo "hello";
    $adminId=$_POST["Id"];
    $password=$_POST["password"];

$sql="insert into manage_users(Id, password) values('$adminId','$password')";

    if(mysqli_query($conn, $sql))
    {
        echo '<script type="text/javascript">
        window.location.replace("index.php");
        
   </script>';
    }else{
        echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
    }
 }

function submit(){
    echo "hello";
}
?>