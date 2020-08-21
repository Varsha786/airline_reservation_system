<?php
if (isset($_GET["id"]))
   { $id=$_GET["id"];
   include_once "connection.php";
   $select="select * from city where id='$id'";
   $result=mysqli_query($conn,$select);
   $row=mysqli_fetch_array($result);}
else{header("location:viewarea.php");}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include_once "headerfile.html";
    ?>
</head>
<body>
<div class="container">
    <h2 class="text-center">Edit Area</h2>
    <form action="updatearea.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php  echo $row[0] ;?>">
        <div class="form-group">
            <label for="cityname">City Name</label>
            <input type="text" name="cityname" id="cityname" value="<?php echo $row[1];?>"
                   data-rule-required="true" class="form-control">
        </div>
        <div class="form-group">
            <label for="airportcode">Airport Code</label>
            <input type="text" name="airportcode" id="airportcode" value="<?php echo $row[2];?>"
                   data-rule-required="true" class="form-control">
        </div>
        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" name="photo" id="photo" class="form-control">
            <img src="<?php echo $row[3];?>" style="height: 80px;" alt="">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
            <span>&nbsp;&nbsp;</span>
            <a href="viewarea.php" class="btn btn-warning">Cancel</a>
        </div>
        <?php
        if (isset($_GET["msg"])) {
            if ($_GET["msg"] == "success") {
                ?>
                <div class="alert alert-success">
                    <strong>Success Message: City details added sucessfully</strong>
                </div>
                <?php
            } else {
                ?>
                <div class="alert alert-success">
                    <strong>Error Message: Insert failed</strong>
                </div>
                <?php
            }
        }
        ?>
    </form>
</div>
</body>
</html>
