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
     <div class="m-2">
     <h1 class="text-center">View Flights</h1>
         <form action="getflight.php" method="post">
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
                     </select>
                 </div>
             <label class="col-md-2" for="destinationcity">Destination City</label>
             <div class="col-md-4">
                 <select name="destinationcity" id="destinationcity" onchange="showflight(this.value)" data-rule-required="true" class="form-control">
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
         </form>
         <div class="row">
             <div class="table-responsive">
                 <div id="output"></div>
     </div>
 </div>
     </div>
</body>
</html>
