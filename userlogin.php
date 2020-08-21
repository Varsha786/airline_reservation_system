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
<?php
include_once "publicheader.php";
if (isset($_REQUEST["flightid"]))
{$flightid=$_REQUEST["flightid"];
$flightdate=$_REQUEST["flightdate"];}
else{$flightid="";
    $flightdate="";}
?>
<div class="container">
    <h1 class="text-center">Login</h1>
    <form action="chkloginuser.php" method="post" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $flightid;?>" name="flightid" id="flightid">
        <input type="hidden" value="<?php echo $flightdate;?>" name="flightdate" id="flightdate">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" data-rule-required class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" data-rule-required class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <br>
        <div class="form-group">
            <span><h5>If not have an account <a href="user.php">Sign up</a></h5></span
        </div>
    </form>
</div>
</body>
</html>
