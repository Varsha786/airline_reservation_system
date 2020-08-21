<?php
if (isset($_POST["id"]))
{
   include_once "connection.php";
    $id=$_POST["id"];
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
    $update="update flights set flightname ='$flightname',`sourcecity`='$sourcecity',
    destinationcity ='$destinationcity',ecoprice='$ecoprice',businessprice=$businessprice,`monday`='$monday',`tuesday`='$tuesday',
    wednesday ='$wednesday',`thursday`='$thursday',`friday`='$friday',`saturday`='$saturday',
    sunday ='$sunday', starttime ='$starttime',endtime ='$endtime', aircraft ='$aircraft' where fid='$id'";

    if (mysqli_query($conn,$update))
    {header("location:editflight.php?msg=Data Updated&id");}
    else{header("location:editflight.php?msg=Updation Failed");}
}
else{header("location:viewflight.php?");}
