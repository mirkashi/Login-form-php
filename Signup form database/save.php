<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webcoding";


$con = mysqli_connect($server, $username, $password, $dbname);

if (!$con){
    echo "not connected";
}

$name    =  $_POST['name'];    
$email   =  $_POST['email'];
$phone   =  $_POST['phone'];
$city   =  $_POST['city'];
$password   =  $_POST['password'];

$sql ="INSERT INTO `text`(`Name`, `Email`, `Phone`, `City`, `Password`) VALUES ('$name','$email','$phone','$city','password')";

$result = mysqli_query($con , $sql);

if($result){
    echo "data submited";
}

else
{
    echo "query failed";
}

?>
