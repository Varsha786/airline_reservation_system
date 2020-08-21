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
            $("#formsignup").validate();
        });
    </script>

</head>
<body>
<header>
    <div class="container">
        <!-- nav -->
        <?php
        include "adminheader.php";
        ?>
        <!-- //nav -->
    </div>
</header>
<!-- //header -->

<!-- banner -->
<section class="banner_inner" id="home">

    <div class="banner_inner_overlay">
    </div>
</section>
<div class="searchFormPages">
    <div class="container">
        <div class="form-group form-row mt-5">
            <div class="col-md-3">
                <select name="sourcecity" id="sourcecity" data-rule-required="true" class="form-control">
                    <option value="">Source City</option>
                    <?php
                    include_once "connection.php";
                    $select = "select * from city";
                    $result = mysqli_query($conn, $select);
                    while ($cityrow = mysqli_fetch_array($result)) {
                        ?>
                        <option value="<?php echo $cityrow[0]; ?>"><?php echo $cityrow[1]; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-3">
                <select name="destinationcity" id="destinationcity" data-rule-required="true" class="form-control">
                    <option value="">Destination City</option>
                    <?php
                    include_once "connection.php";
                    $select = "select * from city";
                    $result = mysqli_query($conn, $select);
                    while ($cityrow = mysqli_fetch_array($result)) {
                        ?>
                        <option value="<?php echo $cityrow[0]; ?>"><?php echo $cityrow[1]; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-3">
                <input type="text" readonly name="departuredate" id="departuredate" placeholder="Departure Date"
                       data-rule-required="true" class="form-control">
            </div>
            <div class="col-md-3">
                <button type="button" class="btn btn-primary col-md-3" onclick="searchflights()">Go</button>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h2 class="text-center">ADD ADMIN</h2>
    <form id="formsignup" action="insert.php" method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" data-rule-required="true" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" data-rule-required="true" class="form-control">
        </div>
        <div class="form-group">
            <label for="conpassword">Confirm password</label>
            <input type="password" name="conpassword" id="conpassword"
                   data-msg-equalto="Password and Confirm password must be same" data-rule-equalto="#password"
                   data-rule-required="true" class="form-control">
        </div>
        <div class="form-group">
            <label for="mobile">Mobile no.</label>
            <input type="text" name="mobile" id="mobile" data-rule-minlength="10" data-rule-maxlength="12"
                   data-rule-number="true" data-rule-required="true" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" data-rule-required="true" class="form-control">
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

