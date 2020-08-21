<?php
if (isset($_POST["email"])) {
    include_once "connection.php";
    $email = $_POST["email"];
    $password = $_POST["password"];
    $mobile = $_POST["mobile"];
    $name = $_POST["name"];
    $insertquery = "update admin set password='$password', mobile='$mobile', name='$name' where email='$email'";
    if (mysqli_query($conn, $insertquery)) {
        header("location:edit.php?msg=Data saved& email=$email");
    } else {
        header("location:editcourse.php?msg=Insertion failed&email=$email");
    }
} else {
    header("location:viewadmin.php");
}


