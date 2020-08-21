<?php
include_once "connection.php";
$cityname=$_POST["cityname"];
$airportcode=$_POST["airportcode"];
$temppath=$_FILES["photo"]["tmp_name"];
$filename=$_FILES["photo"]["name"];
$filesize=round($_FILES["photo"]["size"]/1024,2);
$ext=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
if ($ext!="jpg" and $ext!="png")
{echo "Please select jpg and png file only";}
elseif ($filesize>=100)
{echo "Image must be less than 100KB";
}
else{
$actualname="city/$filename";
move_uploaded_file($temppath,$actualname);
echo "<img src='$actualname'>";
$insert="insert into city values (null,'$cityname','$airportcode','$actualname')";
if (mysqli_query($conn,$insert))
{header("location:area.php?msg=Insert success");}
else{header("location:area.php?msg=Insert failed");}}
