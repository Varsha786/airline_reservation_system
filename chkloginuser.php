<?php
include_once "connection.php";
$email = $_POST["email"];
$password = $_POST["password"];
$flightid=$_REQUEST["flightid"];
$flightdate=$_REQUEST["flightdate"];
$select = "select * from user where email='$email' and password='$password'";
$result = mysqli_query($conn, $select);
if (mysqli_num_rows($result) > 0) {
    session_start();
    $_SESSION['user'] = $email;
    if ($flightid=="")
    {header("location:userhome.php");}
    else{header("location:booking.php?flightid=".$flightid."&flightdate=".$flightdate);}}
    else {
    header("Location:user.php?msg=Invalid Credentials");
}

