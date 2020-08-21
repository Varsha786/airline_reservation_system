<?php
if(isset($_GET["email"]))
{$email=$_GET["email"];
include_once "connection.php";
$query="select * from admin where email='$email'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);}
else{header("location:viewadmin.php");}
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
    <script>
        $(document).ready(function () {
            $("#form1").validate();
        });
    </script>
</head>
<body>
<?php
include "adminheader.php";
?>
<div class="container">
    <form id="form1" action="update.php" method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email"
                   value="<?php echo $row[0];?>" readonly data-rule-required="true" class="form-control">
        </div>
        <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="number" name="mobile" id="mobile" value="<?php echo $row[2];?>" data-rule-minlength="10" data-rule-maxlength="12" data-rule-required="true" class="form-control">
        </div> <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?php echo $row[3];?>" data-rule-required="true" class="form-control">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="viewadmin.php" class="btn btn-warning">Cancel</a>
        <?php
        if (isset($_GET["msg"]))
        {echo $_GET["msg"];}
        ?>
        </div>
    </form>
</div>
</body>
</html>

