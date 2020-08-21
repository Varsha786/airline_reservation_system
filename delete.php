<?php
include_once "connection.php";
$email=$_GET['email'];
$delete="delete from admin where email='$email'";
echo $delete;
if (mysqli_query($conn,$delete))
{header("location:viewadmin.php");}
else{echo "deletion failed";}