<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<?php
include_once "headerfile.html";
?>

<?php
include_once "connection.php";
$flightid = $_GET["flightid"];
$departuredate = $_GET["flightdate"];
$s = "select * from flights where fid='$flightid'";
$result = mysqli_query($conn, $s);
$row = mysqli_fetch_array($result);
$sourcecity = $row['sourcecity'];
$destinationcity = $row['destinationcity'];
$departureday = strtolower(date("l", strtotime($departuredate)));

$city = "select(select city.cityname from city where id='$sourcecity') as sourcecity,
(select city.cityname from city where id=$destinationcity) as destinationcity from city";
$resultcity = mysqli_query($conn, $city);
$rowcity = mysqli_fetch_array($resultcity);
$aircraft = $row['aircraft'];
$flightname = strtolower($row[1]);


$booked = "SELECT * FROM `booking` INNER JOIN bookingdetail ON booking.id=bookingdetail.bookid WHERE `flightid`='$flightid' AND dateoftravel='".date('Y-m-d',strtotime($departuredate))."'";

$bookedresult = mysqli_query($conn, $booked);
$data = '';
while ($bookedrow = mysqli_fetch_array($bookedresult)) {
    $data .= $bookedrow['seatno'] . '-';
}

$arData = explode('-', $data);
function disableSeat($seatno)
{
    echo $seatno;
    global $arData;
    $rt = "";
    foreach ($arData as $x) {
        if ($x == $seatno) {
            $rt = true;
        }
    }
    return $rt;
}

session_start();
if (isset($_SESSION["user"])) {
    include "userheader.php";
} else {
    include "publicheader.php";
    $email = '';
}
?>
<div class="container">
    <div><h1 class="text-center">Searched Flight Results</h1></div>
    <div class="text-center"><?php echo "From $rowcity[sourcecity] To $rowcity[destinationcity] On $departuredate($departureday)"; ?></div>
    <h2 class="text-center"><?php echo $aircraft; ?></h2>
    <div class="row">
        <div class="col-md-12 text-left mt-5">
            <input type="hidden" name="eprice" id="eprice" value="<?php echo $row['ecoprice'] ?>">
            <input type="hidden" name="email" id="email" value="<?php echo $email; ?>">
            <input type="hidden" name="flightid" id="flightid" value="<?php echo $flightid; ?>">
            <input type="hidden" name="flightdate" id="flightdate" value="<?php echo $departuredate; ?>">
            <input type="hidden" name="bprice" id="bprice" value="<?php echo $row['businessprice'] ?>">
            <?php
            include_once $flightname.".php";
            ?>
        </div>
    </div>
</div>
<br><br><br><br>
<?php
include_once "footer.php";
?>
