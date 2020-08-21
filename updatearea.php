<?php
if (isset($_POST["id"])) {
    include_once "connection.php";
    $id = $_POST["id"];
    $cityname = $_POST["cityname"];
    $airportcode = $_POST["airportcode"];
    $actualname = "";
    $error = "";
    $temppath = $_FILES["photo"]["tmp_name"];
    if ($temppath != "") {
        $filename = $_FILES["photo"]["name"];
        $filesize = round($_FILES["photo"]["size"] / 1024, 2);
        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        if ($ext != "jpg" and $ext != "png") {
            $error = "please select jpg or png file only";
        } elseif ($filesize >= 100) {
            $error = "image must be less than 100 KB";
        } else {
            $actualname = "city/$filename";
            move_uploaded_file($temppath, $actualname);
        }

    }

    if ($error == "") {
        $temp = "";
        if ($actualname != "") {
            $temp = ",photo='$actualname'";
        }


        $update = "update  city set cityname ='$cityname',airportcode='$airportcode' $temp where id='$id'";

        echo $update;
        if (mysqli_query($conn, $update)) {
            header("location:editarea.php?msg=success&id=$id");
        } else {
            header("location:editarea.php?msg=updation failed");
        }


    } else {
        echo $error;
    }

} else {
    header("location:viewarea.php");
}
