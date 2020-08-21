<?php
include_once "connection.php";
@session_start();
if (isset($_SESSION["user"])) {
    $email = $_SESSION["user"];
} else {
    header("location:userlogin.php");
}
?>

<!-- header -->
<header>
    <div class="container">
        <!-- nav -->
        <nav class="py-md-4 py-3 d-lg-flex">
            <div id="logo">
                <h1 class="mt-md-0 mt-2"><a href="index.php"><span class="fa fa-map-signs"></span> Grand Tour </a></h1>
            </div>
            <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
            <input type="checkbox" id="drop"/>
            <ul class="menu ml-auto mt-1">
                <li class="active"><a href="userhome.php">Home</a></li>
                <li><a href="changepassworduser.php">Change Password</a></li>
                <li><a href="logoutuser.php">Logout</a></li>
            </ul>
        </nav>
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
<!-- //banner -->

