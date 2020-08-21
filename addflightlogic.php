<?php
include_once "connection.php";
$flightname=$_POST["flightname"];
$ecoprice=$_POST["ecoprice"];
$businessprice=$_POST["businessprice"];
$sourcecity=$_POST["sourcecity"];
$destinationcity=$_POST["destinationcity"];
$monday=$_POST["monday"];
$tuesday=$_POST["tuesday"];
$wednesday=$_POST["wednesday"];
$thursday=$_POST["thursday"];
$friday=$_POST["friday"];
$saturday=$_POST["saturday"];
$sunday=$_POST["sunday"];
$starttime=date('H:i:s',strtotime($_POST["starttime"]));
$endtime=date('H:i:s',strtotime($_POST["endtime"]));
$aircraft=$_POST["aircraft"];
$select="select * from flights where flightname='$flightname' and sourcecity='$sourcecity' and destinationcity='$destinationcity' ";
$result1=mysqli_query($conn,$select);
if (mysqli_num_rows($result)>0)
      {header("location:addflight.php?msg=Flight already exist");}
else {
    $insert = "insert into flights values (null,'$flightname','$sourcecity','$destinationcity','$ecoprice',
'$businessprice','$monday','$tuesday','$wednesday','$thursday','$friday','$saturday','$sunday','$starttime','$endtime','$aircraft')";
    $result = mysqli_query($conn, $insert);
    if ($result) {
        header("location:addflight.php?msg=Insert success");
    } else {
        header("location:addflight.php?msg=Insert failed");
    }
}