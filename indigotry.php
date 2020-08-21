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
    <div class="row">
        <div class="col-md-7">
            <h1 class="text-center">INDIGO FLIGHT SEAT AVAILABILITY</h1>
            <br>
            <h4>Choose Your Seat</h4>
            <div class="mt-3">
                <?php
                function space($i)
                {
                    for ($a = 1; $a < $i; $a++) {
                        ?>
                        <span>&nbsp;</span>
                        <?php
                    }
                }

                function seat1()
                {
                    $b = "Business";
                    ?>
                    <span><?php space(8); ?>A <?php space(4); ?> B<?php space(3); ?></span>
                    <span><?php space(19); ?>E<?php space(4); ?>F</span>
                    <br>
                    <?php
                    for ($j = 1; $j < 12; $j++) {
                        if ($j < 10) {
                            echo "0$j";
                        } else {
                            echo $j;
                        }
                        ?>
                        <span><?php space(5); ?></span>
                        <button type="button"  title="Business" onclick="chooseseat('<?php echo 'A' . $j; ?>')"
                                id="<?php echo 'A' . $j; ?>" class="btn btn-info"></button>
                        <?php space(2); ?>
                        <button type="button" title="Business" onclick="chooseseat('<?php echo 'B' . $j; ?>')"
                                id="<?php echo 'B' . $j; ?>" class="btn btn-info"></button>
                        <?php
                        space(19);

                        ?>
                        <button type="button" title="Business" onclick="chooseseat('<?php echo 'E' . $j; ?>')"
                                id="<?php echo 'E' . $j; ?>" class="btn btn-info"></button>
                        <?php space(2); ?>
                        <button type="button" title="Business" onclick="chooseseat('<?php echo 'F' . $j; ?>')"
                                id="<?php echo 'F' . $j; ?>" class="btn btn-info"></button>
                        <?php
                        echo "<br>";
                    }
                }

                function seat2()
                {
                    ?>
                    <span><?php space(8); ?>A <?php space(4); ?> B<?php space(4); ?>C</span>
                    <span><?php space(11); ?>D <?php space(4); ?> E<?php space(4); ?>F</span>
                    <br>
                    <?php
                    for ($k = 13; $k < 31; $k++) {
                        if ($k < 10) {
                            echo "0$k";
                        } else {
                            echo $k;
                        }
                        ?>
                        <span><?php space(5); ?></span>
                        <button type="button" title="Economy" onclick="chooseseat('<?php echo 'A' . $k; ?>')"
                                id="<?php echo 'A' . $k; ?>" class="btn btn-info"></button>
                        <?php space(2); ?>
                        <button type="button" title="Economy" onclick="chooseseat('<?php echo 'B' . $k; ?>')"
                                id="<?php echo 'B' . $k; ?>" class="btn btn-info"></button>
                        <?php space(2); ?>
                        <button type="button" title="Economy" onclick="chooseseat('<?php echo 'C' . $k; ?>')"
                                id="<?php echo 'C' . $k; ?>" class="btn btn-info"></button>
                        <?php
                        space(10);
                        ?>
                        <button type="button" title="Economy" onclick="chooseseat('<?php echo 'D' . $k; ?>')"
                                id="<?php echo 'D' . $k; ?>" class="btn btn-info"></button>
                        <?php space(2); ?>
                        <button type="button" title="Economy" onclick="chooseseat('<?php echo 'E' . $k; ?>')"
                                id="<?php echo 'E' . $k; ?>" class="btn btn-info"></button>
                        <?php space(2); ?>
                        <button type="button" title="Economy" onclick="chooseseat('<?php echo 'F' . $k; ?>')"
                                id="<?php echo 'F' . $k; ?>" class="btn btn-info"></button>
                        <?php
                        echo "<br>";

                    }
                }

                ?>
                <h4>BUSINESS CLASS</h4>
                <?php
                seat1();
                ?>
                <br>
                <br>

                <h4>ECONOMY CLASS</h4>
                <?php
                seat2();
                ?>
            </div>
        </div>
        <div class="col-md-5">
            <div class="row">
                <h3 class="text-center">Booking Details</h3><br><br><br>
            </div>
            <div class="card">
                <div class="card-header">Seats Information</div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Sr.no</th>
                            <th>Seat</th>
                            <th>Price</th>
                        </tr>
                        <tbody id="myseats">
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" onclick="passengerDetail()">Next</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="passengers">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Passenger Details</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div id="passengerOutput"></div>
                    <div id="poutput"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

