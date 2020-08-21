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
include_once "adminheader.php";
?>
<div class="container">
    <h1 class="text-center">Change Password</h1>
    <form id="form" action="chkpassword.php" method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>" readonly id="email" data-rule-required="true" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" data-rule-required="true" class="form-control">
        </div>
        <div class="form-group">
            <label for="newpassword">New Password</label>
            <input type="password" name="newpassword" id="newpassword" data-rule-required="true" class="form-control">
        </div>
        <div class="form-group">
            <label for="connewpassword">Confirm New Password</label>
            <input type="password" name="connewpassword" id="connewpassword" data-rule-equalto="#newpassword" data-msg-equalto="New Password and Confirm New Password must be same" data-rule-required="true" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
            <?php
            if (isset($_GET["msg"]))
            {echo $_GET["msg"];}
            ?>
        </div>
</body>
</html>
