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
    <form id="form" action="insertarea.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="cityname">City Name</label>
            <input type="text" name="cityname" id="cityname" data-rule-required="true" class="form-control">
        </div>
        <div class="form-group">
            <label for="airportcode">Airport Code</label>
            <input type="text" name="airportcode" id="airportcode" data-rule-required="true" class="form-control">
        </div>
        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" name="photo" id="photo" data-rule-required="true" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
            <?php
            if (isset($_GET["msg"]))
            {echo $_GET["msg"];}
            ?>
        </div>
    </form>
</div>
</body>
</html>
