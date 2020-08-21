<?php
if (isset($_POST["email"])) {
    include_once "connection.php";
    $email = $_POST["email"];
    $password = $_POST["password"];
    $newpassword = $_POST["newpassword"];
    $select = "select * from user where email='$email' and password='$password'";
    $result = mysqli_query($conn, $select);
    if (mysqli_num_rows($result) > 0) {
        $update = "update user set password='$newpassword' where email='$email'";
        if (mysqli_query($conn, $update)) {
            header("location:changepassworduser.php?msg=Password updated");
        } else {
            header("location:changepassworduser.php?msg=Updation failed");
        }
    } else {
        header("location:changepassworduser.php?msg=Invalid credentials");
    }
} else {
    header("location:changepassworduser.php");
}
