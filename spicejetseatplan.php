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
    <div class="text-left">
        <h1 class="text-center">SPICEJET AIRLINES SEAT AVAILABILITY</h1>
        <h4>Choose Your Seat</h4>
        <?php
        function space($k)
        {for ($a=1;$a<$k;$a++) {
            ?>
            <span>&nbsp;</span>
            <?php
        }}
        function seat($z,$y)
        {
        for ($j=$z;$j<$y;$j++)
        { if ($j<10)
        {echo "0$j";}
        else{echo $j;}
?>
            <span><?php space(5);?></span>

            <?php
            for ($i=1;$i<4;$i++) {
                ?>
                <button type="button" class="btn btn-secondary"></button>
                <button type="button" class="btn btn-secondary"></button>
                <button type="button" class="btn btn-secondary"></button>
                <?php
                space(15);
            }
            ?>
            <br>
        <?php
        }}
        ?>
        <span><?php space(8);?>A <?php space(3);?> B<?php space(3);?>C</span>
        <?php space(5);?>
        <span><?php space(3);?>E <?php space(3);?> F<?php space(3);?>G</span>
        <?php space(5);?>
        <span><?php space(3);?>H <?php space(3);?> I<?php space(3);?>J</span>
        <?php space(5);?>
        <br>
        <?php
        seat(1,12);
        ?>
        <br>
        <?php
        echo "12";
        ?>
        <span><?php space(5);?></span>
        <?php
        for ($i=1;$i<4;$i++) {
            ?>
             <button type="button" class="btn btn-secondary"></button>
                <button type="button" class="btn btn-secondary"></button>
                <button type="button" class="btn btn-secondary"></button>
                <?php
                space(5);
            }
         echo "<br>";
         ?>
        <br>
        <?php
         seat(13,30);
           ?>
    </div>
</div>
</body>
</html>
