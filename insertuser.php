<?php
if (isset($_POST["email"]))
{   include_once "connection.php";
    $email = $_POST["email"];
    $select="select * from user where email='$email'";
    $result=(mysqli_query($conn,$select));
    if(mysqli_num_rows($result)>0)
    {header("location:user.php?msg=Email already exist");}
    else {
        $password = $_POST["password"];
        $name = $_POST["name"];
        $mobile = $_POST["mobile"];
        $temppath = $_FILES["photo"]["tmp_name"];
        $filename = $_FILES["photo"]["name"];
        $actualname = "user/$filename";
        move_uploaded_file($temppath, $actualname);
        $insert = "insert into user values ('$email','$password','$name','$mobile','$actualname')";
        if (mysqli_query($conn, $insert)) {
            header("location:user.php?msg=Insert success");
        } else {
            header("location:user.php?msg=Insert failed");
        }
    }

}
else{header("location:user.php");}