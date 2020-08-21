<?php
include_once "publicheader.php";
include_once "headerfile.html";
include_once "connection.php";
$sourcecity=$_GET["sourcecity"];
$destinationcity=$_GET["destinationcity"];
$departuredate=$_GET["departuredate"];
$departureday=date("l",strtotime($departuredate));

$tempsource="select * from city where city.id='$sourcecity'";
$resultsource=mysqli_query($conn,$tempsource);
$rowsource=mysqli_fetch_array($resultsource);

$tempdestination="select * from city where city.id='$destinationcity'";
$resultdestination=mysqli_query($conn,$tempdestination);
$rowdestination=mysqli_fetch_array($resultdestination);

$n="Yes";
$selectquery="select * from flights where sourcecity='$sourcecity' and destinationcity='$destinationcity' and $departureday='$n'";
$result=mysqli_query($conn,$selectquery);
if (mysqli_num_rows($result)>0) {
?>
<div><h1 class="text-center">Searched Flight Results</h1></div>
<div class="text-center"><?php echo"From $rowsource[1] To $rowdestination[1] On $departuredate($departureday)";?></div>
    <div class="container">
<table class="table table-bordered mt-5">
    <tr>
        <th>Sr no.</th>
        <th>Flight name</th>
        <th>Economy Price</th>
        <th>Business Price</th>
        <th>Timings</th>
        <th>Aircraft</th>
        <th>Book Now</th>
    </tr>
    <?php
    $i = 1;$id=0;
    while ($row = mysqli_fetch_array($result)) {
        $id=$row[0];
        ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[4]; ?></td>
            <td><?php echo $row[5]; ?></td>
            <td>
            <table class="table table-bordered">
                <tr>
                    <th>Arrival Time</th>
                    <td><?php echo date('h:i:A', strtotime($row[13])); ?></td>
                </tr>
                <tr>
                    <th>Departure Time</th>
                    <td><?php echo date('h:i:A', strtotime($row[14])); ?></td>
                </tr>
            </table>
            </td>
            <td><?php echo $row[15]; ?></td>
            <td><a href="booking.php?flightid=<?php echo $id;?>&flightdate=<?php echo $departuredate;?>"><button type="button" class="btn btn-primary">Book Now</button></a></td>
        </tr>
        <?php
    }
    ?>
</table>
    <?php
} else{
    echo 'No Flight Available';
}
?>
    </div>
<footer><?php include_once "footer.php";?></footer>
