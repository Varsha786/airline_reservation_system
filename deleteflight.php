<?php
if (isset($_GET["id"])) {
    include_once "connection.php";
    $id = $_GET["id"];
    $delete = "delete from flights where fid='$id'";
    if (mysqli_query($conn, $delete)) {
        header("location:viewflight.php");
    } else {
        echo "deletion failed";
    }
}
else {echo "id not available";}