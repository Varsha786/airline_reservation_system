<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Flight</title>
    <?php include_once "headerfile.html";
     ?>
</head>
<body>
<?php
include_once "adminheader.php";
?>
<div class="container">
    <h1 class="text-center">Add Flight</h1>
    <form action="addflightlogic.php" method="post">
        <div class="form-group form-row">
            <label class="col-md-2" for="flightname">Enter Flight Name</label>
            <div class="col-md-4">
                <input type="text" name="flightname" id="flightname" data-rule-required="true" class="form-control">
            </div>
        </div>
        <div class="form-group form-row">
            <label class="col-md-2" for="ecoprice">Economy Price</label>
            <div class="col-md-4">
                <input  type="number" name="ecoprice" id="ecoprice" data-rule-required="true" class="form-control">
            </div>
        <label class="col-md-2" for="businessprice">Business Price</label>
            <div class="col-md-4">
                <input  type="number" name="businessprice" id="businessprice" data-rule-required="true" class="form-control">
            </div>
        </div>
        <div class="form-group form-row">
            <label class="col-md-2" for="sourcecity">Source City</label>
            <div class="col-md-4">
                <select name="sourcecity" id="sourcecity" data-rule-required="true" class="form-control">
                    <option value="">Select City</option>
                    <?php
                    include_once "connection.php";
                    $select = "select * from city";
                    $result = mysqli_query($conn, $select);
                    while ($city_row = mysqli_fetch_array($result)) {
                        ?>
                        <option value="<?php echo $city_row[0] ?>"><?php echo $city_row[1] ?></option>
                        <?php
                    }
                    ?>
                </select></div>
            <label class="col-md-2" for="destinationcity">Destination City</label>
            <div class="col-md-4">
                <select name="destinationcity" id="destinationcity"  data-rule-required="true" class="form-control">
                    <option value="">Select City</option>
                    <?php
                    include_once "connection.php";
                    $select = "select * from city";
                    $result = mysqli_query($conn, $select);
                    while ($city_row = mysqli_fetch_array($result)) {
                        ?>
                        <option value="<?php echo $city_row[0] ?>"><?php echo $city_row[1] ?></option>
                        <?php

                    }
                    ?>
                </select></div>
        </div>
        <div class="form-group form-row">
            <label class="col-md">Monday</label>
            <div class="col-md">
                <input type="radio" value="Yes" name="monday" checked>Yes
                <br>
                <input type="radio" value="No" name="monday">No
            </div>
            <label class="col-md">Tuesday</label>
            <div class="col-md">
                <input type="radio" value="Yes" name="tuesday" checked>Yes
                <br>
                <input type="radio" value="No" name="tuesday">No
            </div>
            <label class="col-md">Wednesday</label>
            <div class="col-md">
                <input type="radio" value="Yes" name="wednesday" checked>Yes
                <br>
                <input type="radio" value="No" name="wednesday">No
            </div>
            <label class="col-md">Thursday</label>
            <div class="col-md">
                <input type="radio" value="Yes" name="thursday" checked>Yes
                <br>
                <input type="radio" value="No" name="thursday">No
            </div>
            <label class="col-md">Friday</label>
            <div class="col-md">
                <input type="radio" value="Yes" name="friday" checked>Yes
                <br>
                <input type="radio" value="No" name="friday">No
            </div>
            <label class="col-md">Saturday</label>
            <div class="col-md">
                <input type="radio" value="Yes" name="saturday" checked>Yes
                <br>
                <input type="radio" value="No" name="saturday">No
            </div>
            <label class="col-md">Sunday</label>
            <div class="col-md">
                <input type="radio" value="Yes" name="sunday" checked>Yes
                <br>
                <input type="radio" value="No" name="sunday">No
            </div>
        </div>
        <div class="form-group form-row">
            <label class="col-md-2">Start Time</label>
            <div class="col-md-4"><input type="time" name="starttime" id="starttime" class="form-control"
                                         data-rule-required="true"></div>
            <label class="col-md-2">End Time</label>
            <div class="col-md-4"><input type="time" name="endtime" id="endtime" class="form-control"
                                         data-rule-required="true"></div>
        </div>
        <div class="form-group form-row">
            <label class="col-md-2">Select Aircraft</label>
            <div class="col-md-10">
                <select class="form-control" name="aircraft" data-rule-required="true">
                    <option value="">--Choose--</option>
                    <option>Aircraft 1</option>
                    <option>Aircraft 2</option>
                    <option>Aircraft 3</option>
                </select>
            </div>
        </div>
<br>
        <div class="form-group form-row ">
            <button type="submit" class="btn btn-primary col-md-2 offset-md-5">Submit</button>
        </div>

    </form>
    <div class="text-center">
        <?php
        if (isset($_REQUEST['msg'])) {
            echo $_REQUEST['msg'];
        }
        ?>
    </div>
</div>
</body>
</html>
