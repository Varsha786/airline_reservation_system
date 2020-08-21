
<!-- header -->
<header>
    <div class="container">
        <!-- nav -->
        <?php
        include "menu.php";
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
<!-- //banner -->
