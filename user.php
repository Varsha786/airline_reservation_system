<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include_once "headerfile.html"
    ?>
</head>
<body>
<?php
include_once "publicheader.php";
?>
<div class="container">
    <h1 class="text-center">Sign Up</h1>
    <form action="insertuser.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" data-rule-required class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" data-rule-required class="form-control">
        </div>
        <div class="form-group">
            <label for="conpassword">Confirm Password</label>
            <input type="password" name="conpassword" id="conpassword" data-rule-equalto="#password"
                   data-msg-equalto="Password and Confirm Password must be same" data-rule-required
                   class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" data-rule-required class="form-control">
        </div>
        <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="number" name="mobile" id="mobile" maxlength="12" minlength="10" data-rule-required
                   class="form-control">
        </div>
        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" name="photo" id="photo" data-rule-extention="png|jpg|gif|jpeg|PNG|JPG|GIF|JPEG"
                   data-rule-required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
            <?php
            if (isset($_GET["msg"])) {
                echo $_GET["msg"];
            }
            ?>
        </div>
    </form>
</div>
</body>
</html>
