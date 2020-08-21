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
        <div class="text-center">
            <h1 class="text-center">INDIGO FLIGHT SEATING PLAN</h1>
        </div>
            <?php

function space()
       {
           for ($a=1;$a<12;$a++)
       {
           ?>
           <span>&nbsp;</span>
            <?php
       }}
       function alpha()
       {
            for ($a=1;$a<4;$a++)
            {
            ?>
            <span>&nbsp;</span>
            <?php
            }}
            function seat2(){
            for ($j = 1; $j < 3; $j++) {
                for ($i =1; $i <=3; $i++) {

                    ?>
                    <button type="button" class="btn btn-secondary"></button>
                    <span>&nbsp;</span>
                    <?php
                }
                space();
            }
        }
        ?>
            <span class="text-center mr-4 ml-2">A <?php alpha()?> B <?php alpha()?> C &nbsp; &nbsp;</span><?php alpha(); ?><span class="mr-4 ml-3"><?php alpha()?>&nbsp; D <?php alpha()?>  E <?php alpha()?> F &nbsp;</span><br>
          <div class="text-left">
            <?php
        for ($k=1;$k<12;$k++) {
            if ($k<10)
            {echo "0$k";}
            else{echo $k;}
                ?>
                <span class="mr-5">&nbsp;&nbsp;&nbsp;</span>

                <?php
            seat2();
            ?>
            <br>
            <?php
        }
        echo "<br>";
        echo "12";
        ?>
        <span class="mr-5">&nbsp;&nbsp;&nbsp;</span>
        <?php
        seat2();
        ?>
            <br>
            <?php
            echo "<br>";
        for ($k=12;$k<31;$k++) {
            echo "$k";
            ?>
            <span class="mr-5">&nbsp;&nbsp;&nbsp;</span>

            <?php
            seat2();
            ?>
            <br>
            <?php
        }


        ?>

    </div>
</div>
</body>
</html>

