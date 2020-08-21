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
    <h1 class="text-center">Flight Availability</h1>
    <form>
        <div class="form-group form-row mt-5">
            <div class="col-md-3">
            <select name="sourcecity" id="sourcecity" data-rule-required="true" class="form-control">
                <option value="">Source City</option>
                <?php
                include_once "connection.php";
                $select="select * from city";
                $result=mysqli_query($conn,$select);
                while($cityrow=mysqli_fetch_array($result)) {
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
                $select="select * from city";
                $result=mysqli_query($conn,$select);
                while($cityrow=mysqli_fetch_array($result)) {
                    ?>
                    <option value="<?php echo $cityrow[0]; ?>"><?php echo $cityrow[1]; ?></option>
                    <?php
                }
                ?>
            </select>
            </div>
            <div class="col-md-3">
            <input type="text" readonly name="departuredate" id="departuredate" placeholder="Departure Date" data-rule-required="true" class="form-control">
        </div>
            <div class="col-md-3">
            <button type="button" class="btn btn-primary col-md-3" onclick="searchflights()">Go</button>
        </div>
        </div>
    </form>
    <div class="row">
        <div class="table-responsive">
            <div id="output"></div>
        </div>
    </div>
</div>
</body>
</html>
