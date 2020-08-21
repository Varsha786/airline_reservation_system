<?php
if (isset($_GET["id"]))
{ $id=$_GET["id"];
    include_once "connection.php";
    $select="select * from flights where fid='$id'";
    $result=mysqli_query($conn,$select);
    $row=mysqli_fetch_array($result);}
else{header("location:viewflight.php");}
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
<?php
include_once "adminheader.php";
?>
<div class="container">
<h1 class="text-center">Edit Flight</h1>
    <form action="updateflight.php" method="post">
        <input type="hidden" name="id" value="<?php  echo $row[0] ;?>">
    <div class="form-group form-row">
        <label class="col-md-2" for="flightname">Enter Flight Name</label>
        <div class="col-md-4">
            <input type="text" name="flightname" id="flightname"  value="<?php echo $row[1];?>" data-rule-required="true" class="form-control">
        </div>
    </div>
        <div class="form-group form-row">
        <label class="col-md-2" for="ecoprice">Economy Price</label>
        <div class="col-md-4">
            <input  type="number" name="ecoprice" id="ecoprice" value="<?php echo $row[4];?>" data-rule-required="true" class="form-control">
        </div>
        <label class="col-md-2" for="businessprice">Business Price</label>
        <div class="col-md-4">
            <input  type="number" name="businessprice" id="businessprice" value="<?php echo $row[5];?>" data-rule-required="true" class="form-control">
        </div>
    </div>
        <div class="form-group form-row">
            <label class="col-md-2" for="sourcecity">Source City</label>
            <div class="col-md-4">
                <select name="sourcecity" id="sourcecity" data-rule-required="true" class="form-control">
                    <option value="">Select City</option>

                    <?php
                    include_once "connection.php";
                    $city = "select * from city";
                    $result = mysqli_query($conn, $city);
                    while ($city_row = mysqli_fetch_array($result)) {
                        ?>
                        <option value="<?php echo $city_row[0] ?>"<?php if ($city_row[0]==$row['sourcecity']){?>selected<?php } ?>><?php echo $city_row[1] ?></option>
                        <?php
                    }
                    ?>
                </select></div>
            <label class="col-md-2" for="destinationcity">Destination City</label>
            <div class="col-md-4">
                <select name="destinationcity" id="destinationcity" data-rule-required="true" class="form-control">
                    <option value="">Select City</option>
                    <?php
                    include_once "connection.php";
                    $city = "select * from city";
                    $result = mysqli_query($conn, $city);
                    while ($city_row = mysqli_fetch_array($result)) {
                        ?>
                        <option value="<?php echo $city_row[0] ?>"<?php if ($city_row[0]==$row['destinationcity']){?>selected<?php } ?>><?php echo $city_row[1] ?></option>
                        <?php

                    }
                    ?>
                </select></div>
        </div>
        <div class="form-group form-row">
            <label class="col-md">Monday</label>
            <div class="col-md">
                <input type="radio" value="Yes" name="monday"<?php if ($row['monday']=='Yes'){ echo "checked";}?>>Yes
                <br>
                <input type="radio" value="No" name="monday"<?php if ($row['monday']=='No'){echo "checked";}?>>No
            </div>
            <label class="col-md">Tuesday</label>
            <div class="col-md">
                <input type="radio" value="Yes" name="tuesday"<?php if ($row['tuesday']=='Yes'){echo "checked";}?>>Yes
                <br>
                <input type="radio" value="No" name="tuesday"<?php if ($row['tuesday']=='No'){echo "checked";}?>>No
            </div>
            <label class="col-md">Wednesday</label>
            <div class="col-md">
                <input type="radio" value="Yes" name="wednesday" <?php if ($row['wednesday']=='Yes'){echo "checked";}?>>Yes
                <br>
                <input type="radio" value="No" name="wednesday"<?php if ($row['wednesday']=='No'){echo "checked";}?>>No
            </div>
            <label class="col-md">Thursday</label>
            <div class="col-md">
                <input type="radio" value="Yes" name="thursday" <?php if ($row['thursday']=='Yes'){echo "checked";}?>>Yes
                <br>
                <input type="radio" value="No" name="thursday"<?php if ($row['thursday']=='No'){echo "checked";}?>>No
            </div>
            <label class="col-md">Friday</label>
            <div class="col-md">
                <input type="radio" value="Yes" name="friday" <?php if ($row['friday']=='Yes'){echo "checked";}?>>Yes
                <br>
                <input type="radio" value="No" name="friday"<?php if ($row['friday']=='No'){echo "checked";}?>>No
            </div>
            <label class="col-md">Saturday</label>
            <div class="col-md">
                <input type="radio" value="Yes" name="saturday" <?php if ($row['saturday']=='Yes'){echo "checked";}?>>Yes
                <br>
                <input type="radio" value="No" name="saturday"<?php if ($row['saturday']=='No'){echo "checked";}?>>No
            </div>
            <label class="col-md">Sunday</label>
            <div class="col-md">
                <input type="radio" value="Yes" name="sunday" <?php if ($row['sunday']=='Yes'){echo "checked";}?>>Yes
                <br>
                <input type="radio" value="No" name="sunday"<?php if ($row['sunday']=='No'){echo "checked";}?>>No
            </div>
        </div>
        <div class="form-group form-row">
            <label class="col-md-2">Start Time</label>
            <div class="col-md-4"><input type="time" name="starttime" id="starttime" value="<?php echo $row[13];?>" class="form-control"
                                         data-rule-required="true"></div>
            <label class="col-md-2">End Time</label>
            <div class="col-md-4"><input type="time" name="endtime" id="endtime" value="<?php echo $row[14];?>" class="form-control"
                                         data-rule-required="true"></div>
        </div>
        <div class="form-group form-row">
            <label class="col-md-2">Select Aircraft</label>
            <div class="col-md-10">
                <select class="form-control" name="aircraft" data-rule-required="true">
                    <option value="<?php echo $row[14];?>"><?php echo $row[15];?></option>
                    <option>Aircraft 1</option>
                    <option>Aircraft 2</option>
                    <option>Aircraft 3</option>
                </select>
            </div>
        </div>
        <br>
        <div class="form-group form-row ">
            <button type="submit" class="btn btn-primary col-md-2 offset-md-2">Update</button>
            <span>&nbsp;&nbsp;&nbsp;</span>
            <a href="viewflight.php" class="btn btn-warning col-md-2 offset-md-2">Cancel</a>
        </div>
        <?php
        if (isset($_GET["msg"])) {
            echo $_GET["msg"];
        }
        ?>
    </form>
</div>
</body>
</html>

