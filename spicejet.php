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
    <div class="text-left">
        <h1 class="text-center">SPICEJET AIRLINES SEAT AVAILABILITY</h1>
        <br>
        <h4>Choose Your Seat</h4>
        <?php
        function space($k)
        {for ($a=1;$a<$k;$a++) {
            ?>
            <span>&nbsp;</span>
            <?php
        }}
        function seat1()
        {
            for ($j=1;$j<12;$j++)
            { if ($j<10)
            {echo "0$j";}
            else{echo $j;}
                ?>
                <span><?php space(5);?></span>
                    <button type="button" title="Business"
                        <?php $disableseats = disableSeat('A' . $j.',Business');?>
                            <?php if ($disableseats == true) { ?>disabled<?php }?>
                            onclick="chooseseat('<?php echo 'A' . $j; ?>')" id="<?php echo 'A' . $j; ?>" class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                    <button type="button" title="Business"
                        <?php $disableseats = disableSeat('B' . $j.',Business');?>
                            <?php if ($disableseats == true) { ?>disabled<?php }?>
                            onclick="chooseseat('<?php echo 'B' . $j; ?>')" id="<?php echo 'B' . $j; ?>" class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                    <?php
                    space(10);
                    ?>
                    <button type="button" title="Business"
                        <?php $disableseats = disableSeat('E' . $j.',Business');?>
                            <?php if ($disableseats == true) { ?>disabled<?php }?>
                            onclick="chooseseat('<?php echo 'E' . $j; ?>')" id="<?php echo 'E' . $j; ?>" class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                    <button type="button" title="Business"
                        <?php $disableseats = disableSeat('F' . $j.',Business');?>
                            <?php if ($disableseats == true) { ?>disabled<?php }?>
                            onclick="chooseseat('<?php echo 'F' . $j; ?>')" id="<?php echo 'F' . $j; ?>" class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                    <?php
                    space(10);
                    ?>
                    <button type="button" title="Business"
                        <?php $disableseats = disableSeat('J' . $j.',Business');?>
                            <?php if ($disableseats == true) { ?>disabled<?php }?>
                            onclick="chooseseat('<?php echo 'J' . $j; ?>')" id="<?php echo 'J' . $j; ?>" class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                    <button type="button" title="Business"
                        <?php $disableseats = disableSeat('K' . $j.',Business');?>
                            <?php if ($disableseats == true) { ?>disabled<?php }?>
                            onclick="chooseseat('<?php echo 'K' . $j; ?>')" id="<?php echo 'K' . $j; ?>" class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                    <?php
                    space(5);
                    ?>
                <br>
                <?php
            }}
        function seat2()
        {
            for ($a=12;$a<31;$a++)
            { if ($a<10)
            {echo "0$a";}
            else{echo $a;}
                ?>
                <span><?php space(5);?></span>
                    <button type="button" title="Economy"
                        <?php $disableseats = disableSeat('A' . $a.',Economy');?>
                            <?php if ($disableseats == true) { ?>disabled<?php }?>
                            onclick="chooseseat('<?php echo 'A' . $a; ?>')" id="<?php echo 'A' . $a; ?>" class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                    <button type="button" title="Economy"
                        <?php $disableseats = disableSeat('B' . $a.',Economy');?>
                            <?php if ($disableseats == true) { ?>disabled<?php }?>
                            onclick="chooseseat('<?php echo 'B' . $a; ?>')" id="<?php echo 'B' . $a; ?>" class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                    <button type="button" title="Economy"
                        <?php $disableseats = disableSeat('C' . $a.',Economy');?>
                            <?php if ($disableseats == true) { ?>disabled<?php }?>
                            onclick="chooseseat('<?php echo 'C' . $a; ?>')" id="<?php echo 'C' . $a; ?>" class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                    <?php
                    space(5);
                    ?>
                    <button type="button" title="Economy"
                        <?php $disableseats = disableSeat('D' . $a.',Economy');?>
                            <?php if ($disableseats == true) { ?>disabled<?php }?>
                            onclick="chooseseat('<?php echo 'D' . $a; ?>')" id="<?php echo 'D' . $a; ?>" class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                    <button type="button" title="Economy"
                        <?php $disableseats = disableSeat('E' . $a.',Economy');?>
                            <?php if ($disableseats == true) { ?>disabled<?php }?>
                            onclick="chooseseat('<?php echo 'E' . $a; ?>')" id="<?php echo 'E' . $a; ?>" class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                    <button type="button" title="Economy"
                        <?php $disableseats = disableSeat('F' . $a.',Economy');?>
                            <?php if ($disableseats == true) { ?>disabled<?php }?>
                            onclick="chooseseat('<?php echo 'F' . $a; ?>')" id="<?php echo 'F' . $a; ?>" class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                    <?php
                    space(5);
                    ?>
                    <button type="button" title="Economy"
                        <?php $disableseats = disableSeat('G' . $a.',Economy');?>
                            <?php if ($disableseats == true) { ?>disabled<?php }?>
                            onclick="chooseseat('<?php echo 'G' . $a; ?>')" id="<?php echo 'G' . $a; ?>" class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                    <button type="button" title="Economy"
                        <?php $disableseats = disableSeat('H' . $a.',Economy');?>
                            <?php if ($disableseats == true) { ?>disabled<?php }?>
                            onclick="chooseseat('<?php echo 'H' . $a; ?>')" id="<?php echo 'H' . $a; ?>" class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                    <button type="button" title="Economy"
                        <?php $disableseats = disableSeat('I' . $a.',Economy');?>
                            <?php if ($disableseats == true) { ?>disabled<?php }?>
                            onclick="chooseseat('<?php echo 'I' . $a; ?>')"
                            id="<?php echo 'I' . $a; ?>" class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                    <?php
                    space(5);
                    ?>
                <br>
                <?php
            }}
        ?>
        <br>
        <button type="button" class="btn btn-info">Available Seats</button>
        <button type="button" class="btn btn-secondary">Booked Seats</button><br><br><br>
        <br>
        <h4>BUSINESS CLASS</h4>
        <span><?php space(8);?>A <?php space(3);?> B</span>
        <?php space(10);?>
        <span><?php space(3);?>E <?php space(3);?> F</span>
        <?php space(10);?>
        <span><?php space(3);?> J<?php space(3);?>K</span>
        <br>
        <?php
        seat1();
        ?>
        <br>
        <h4>ECONOMY CLASS</h4>
        <br>
        <span><?php space(8);?>A <?php space(3);?> B<?php space(3);?> C</span>
        <?php space(4);?>
        <span><?php space(3);?>D <?php space(3);?> E<?php space(3);?>F </span>
        <?php space(5);?>
        <span><?php space(3);?> I<?php space(3);?>J<?php space(3);?> K</span>
        <br>

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
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                            onclick="passengerDetail()">Next</button>

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

