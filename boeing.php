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
                <h1 class="text-center">BOEING FLIGHT SEAT AVAILABILITY</h1>
                <br>
                <h4>Choose Your Seat</h4>
<br>
                <?php
                function seat3($z)
                { ?>
                    <span><?php space(8);?>A <?php space(3);?> B<?php space(3);?>C <?php space(3);?></span>
                    <span><?php space(3);?>D <?php space(3);?> E<?php space(3);?>F <?php space(3);?>G<?php space(3);?></span>
                    <span><?php space(3);?>H <?php space(3);?> I<?php space(3);?>J <?php space(3);?></span>
                    <br>
                    <?php
                    for ($f=$z;$f<($z+12);$f++)
                    {
                        echo $f;
                        ?>
                        <span><?php space(5);?></span>

                <button type="button" title="Economy"
                    <?php $disableseats = disableSeat('A' . $f.',Economy');?>
                        <?php if ($disableseats == true) { ?>disabled<?php }?>
                        onclick="chooseseat('<?php echo 'A' . $f; ?>')"
                        id="<?php echo 'A' . $f; ?>" class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                <button type="button" title="Economy"
                    <?php $disableseats = disableSeat('B' . $f.',Economy');?>
                        <?php if ($disableseats == true) { ?>disabled<?php }?>
                        onclick="chooseseat('<?php echo 'B' . $f; ?>')" id="<?php echo 'B' . $f; ?>" class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                <button type="button" title="Economy"
                    <?php $disableseats = disableSeat('C' . $f.',Economy');?>
                        <?php if ($disableseats == true) { ?>disabled<?php }?>
                        onclick="chooseseat('<?php echo 'C' . $f; ?>')" id="<?php echo 'C' . $f; ?>" class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                            <?php

                        space(4);
                            ?>

                            <button type="button" title="Economy"
                                <?php $disableseats = disableSeat('D' . $f.',Economy');?>
                                    <?php if ($disableseats == true) { ?>disabled<?php }?>
                                    onclick="chooseseat('<?php echo 'D' . $f; ?>')" id="<?php echo 'D' . $f; ?>" class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                            <button type="button" title="Economy"
                                <?php $disableseats = disableSeat('E' . $f.',Economy');?>
                                    <?php if ($disableseats == true) { ?>disabled<?php }?>
                                    onclick="chooseseat('<?php echo 'E' . $f; ?>')" id="<?php echo 'E' . $f; ?>" class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                            <button type="button" title="Economy"
                                <?php $disableseats = disableSeat('F' . $f.',Economy');?>
                                    <?php if ($disableseats == true) { ?>disabled<?php }?>
                                    onclick="chooseseat('<?php echo 'F' . $f; ?>')" id="<?php echo 'F' . $f; ?>" class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                            <button type="button" title="Economy"
                                <?php $disableseats = disableSeat('G' . $f.',Economy');?>
                                    <?php if ($disableseats == true) { ?>disabled<?php }?>
                                    onclick="chooseseat('<?php echo 'G' . $f; ?>')" id="<?php echo 'G' . $f; ?>" class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                            <?php

                        space(4);
                            ?>
                            <button type="button" title="Economy"
                                <?php $disableseats = disableSeat('H' . $f.',Economy');?>
                                    <?php if ($disableseats == true) { ?>disabled<?php }?>
                                    onclick="chooseseat('<?php echo 'H' . $f; ?>')" id="<?php echo 'H' . $f; ?>" class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                            <button type="button" title="Economy"
                                <?php $disableseats = disableSeat('I' . $f.',Economy');?>
                                    <?php if ($disableseats == true) { ?>disabled<?php }?>
                                    onclick="chooseseat('<?php echo 'I' . $f; ?>')" id="<?php echo 'I' . $f; ?>" class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                            <button type="button" title="Economy"
                                <?php $disableseats = disableSeat('J' . $f.',Economy');?>
                                    <?php if ($disableseats == true) { ?>disabled<?php }?>
                                    onclick="chooseseat('<?php echo 'J' . $f; ?>')" id="<?php echo 'J' . $f; ?>" class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                            <?php
                    echo "<br>";
                    }}
                function seat2($w)
                { ?>
                    <span><?php space(9);?>A <?php space(3);?> B<?php space(3);?></span>
                    <span><?php space(8);?>D <?php space(3);?> E<?php space(3);?>F <?php space(3);?>G <?php space(3);?></span>
                    <span><?php space(5);?>H <?php space(3);?> I<?php space(3);?></span>
                    <br>
                    <?php
                    for ($a=$w;$a<$w+3;$a++)
                    {
                        if ($a<10)
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
                        <?php
                        space(9);
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
                            <button type="button" title="Economy"
                                <?php $disableseats = disableSeat('G' . $a.',Economy');?>
                                    <?php if ($disableseats == true) { ?>disabled<?php }?>
                                    onclick="chooseseat('<?php echo 'G' . $a; ?>')" id="<?php echo 'G' . $a; ?>" class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                            <?php

                        space(6);
                        ?>
                        <button type="button" title="Economy"
                            <?php $disableseats = disableSeat('H' . $a.',Economy');?>
                                <?php if ($disableseats == true) { ?>disabled<?php }?>
                                onclick="chooseseat('<?php echo 'H' . $a; ?>')" id="<?php echo 'H' . $a; ?>" class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                        <button type="button" title="Economy"
                            <?php $disableseats = disableSeat('I' . $a.',Economy');?>
                                <?php if ($disableseats == true) { ?>disabled<?php }?>
                                onclick="chooseseat('<?php echo 'I' . $a; ?>')" id="<?php echo 'I' . $a; ?>" class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>

                        <br>
                        <?php
                    }}
                function space($k)
                {for ($a=1;$a<$k;$a++) {
                    ?>
                    <span>&nbsp;</span>
                    <?php
                }}
                ?>
                <?php
                function seat1($q){
                    ?>
                    <span><?php space(9);?>A</span>
                    <span><?php space(18);?>E <?php space(3);?>F <?php space(3);?></span>
                    <span><?php space(11);?>H <?php space(3);?></span>
                    <br>
                    <?php

                    for ($a=$q;$a<$q+8;$a++) {
                        if ($a<10)
                        {echo "0$a";}
                        else{echo $a;}
                        ?>
                        <span><?php space(5);?></span>
                        <button type="button" title="Business"
                            <?php $disableseats = disableSeat('A' . $a.',Business');?>
                                <?php if ($disableseats == true) { ?>disabled<?php }?>
                                onclick="chooseseat('<?php echo 'A' . $a; ?>')" id="<?php echo 'A' . $a; ?>"  class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                        <?php
                        space(16);
                        ?>
                        <button type="button" title="Business"
                            <?php $disableseats = disableSeat('E' . $a.',Business');?>
                                <?php if ($disableseats == true) { ?>disabled<?php }?>
                                onclick="chooseseat('<?php echo 'E' . $a; ?>')" id="<?php echo 'E' . $a; ?>"  class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                        <button type="button" title="Business"
                            <?php $disableseats = disableSeat('F' . $a.',Business');?>
                                <?php if ($disableseats == true) { ?>disabled<?php }?>
                                onclick="chooseseat('<?php echo 'F' . $a; ?>')" id="<?php echo 'F' . $a; ?>"  class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                        <?php
                    space(12)
                        ?>
                        <button type="button" title="Business"
                            <?php $disableseats = disableSeat('H' . $a.',Business');?>
                                <?php if ($disableseats == true) { ?>disabled<?php }?>
                                onclick="chooseseat('<?php echo 'H' . $a; ?>')" id="<?php echo 'H' . $a; ?>"  class="btn <?php if ($disableseats == true) { ?>btn-secondary<?php } else { ?> btn-info <?php } ?> "></button>
                        <br>
                        <?php
                    }}
                ?>
                <br>
                <button type="button" class="btn btn-info">Available Seats</button>
                <button type="button" class="btn btn-secondary">Booked Seats</button><br><br><br>
                <h4><?php echo "BUSINESS CLASS";?></h4>
                <?php
                seat1(1);
                ?>
                <br>
                <?php
                seat1(9);
                ?>
                <br>
                <h4><?php echo "ECONOMY CLASS";?></h4>
                <?php
                seat2(17);
                ?>
                <br>
                <?php
                seat3(20);
                ?>
                <br>
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


