<?php
include_once "connection.php";
$email=$_POST["email"];
$password=$_POST["password"];
$newpassword=$_POST["newpassword"];
$select="select * from admin where email='$email' and password='$password'";
$result=mysqli_query($conn,$select);
if (mysqli_num_rows($result)>0)
{$update="update admin set password='$newpassword' where email='$email' ";
if (mysqli_query($conn,$update))
{header("location:changepassword.php?msg=Password updated");}
else
{header("location:changepassword.php?msg=Updation failed");}
}
else{header("location:changepassword.php?msg=Invalid Credentials");}

