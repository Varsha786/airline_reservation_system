<?php
include_once "connection.php";
$id=$_GET['id'];
$delete="delete from city where id='$id'";
if (mysqli_query($conn,$delete))
{header("location:viewarea.php");}
else{echo "deletion failed";}