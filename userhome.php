<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include "headerfile.html";
    ?>
</head>
<body>
<?php
include "userheader.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-12"><h1 class="text-center">My Bookings</h1></div>
    </div>
    <div class="table-responsive">
        <?php
        $selectQuery = "SELECT *,(SELECT city.cityname from city WHERE city.id=flights.sourcecity) as sourcecityname,(SELECT city.cityname from city WHERE city.id=flights.destinationcity) as destinationcityname FROM `booking` INNER JOIN flights ON flights.fid=booking.flightid INNER JOIN user ON user.email=booking.email where booking.email='$email' order by `booking`.`id` DESC";
        $result = mysqli_query($conn, $selectQuery);
        if (mysqli_num_rows($result) > 0) {
            ?>
            <table class="table table-bordered table-hover">
                <thead>
                <tr class="bg-primary">
                    <th rowspan="2">Sr No.</th>
                    <th rowspan="2" colspan="2">Booking ID</th>
                    <th rowspan="2" colspan="2">Date Of Travel</th>
                    <th>Flight Name</th>
                    <th>Source City</th>
                    <th>Destination City</th>
                    <th colspan="2">Date Of Booking</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $k = 1;
                while ($row = mysqli_fetch_array($result)) {
                    $pd = "SELECT * FROM `bookingdetail` where bookid='$row[0]'";
                    $pd_result = mysqli_query($conn, $pd);
                    $no = mysqli_num_rows($pd_result);
                    ?>
                    <tr class="bg-danger">
                        <td><?php echo $k++; ?></td>
                        <td colspan="2"><?php echo $row['id']; ?></td>
                        <td colspan="2"><?php echo $row['dateoftravel']; ?></td>
                        <td><?php echo $row['flightname']; ?></td>
                        <td><?php echo $row['sourcecityname']; ?></td>
                        <td><?php echo $row['destinationcityname']; ?></td>
                        <td colspan="2"><?php echo $row['dateofbooking']; ?></td>
                    </tr>
                    <tr>
                        <th colspan="2" rowspan="<?php echo $no + 1 ?>"><h4 class="text-center">Passenger Details</h4>
                        </th>
                        <th>Sr No.</th>
                        <th>Name</th>
                        <th>Father's Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Proof</th>
                        <th>Seat No.</th>
                        <th>Price</th>
                    </tr>
                    <?php
                    $m = 1;

                    while ($pd_row = mysqli_fetch_array($pd_result)) {
                        ?>
                        <tr>
                            <td><?php echo $m++; ?></td>
                            <td><?php echo $pd_row['name']; ?></td>
                            <td><?php echo $pd_row['fathername']; ?></td>
                            <td><?php echo $pd_row['age']; ?></td>
                            <td><?php echo $pd_row['gender']; ?></td>
                            <td><img src="<?php echo $pd_row['proof']; ?>" width="100"></td>
                            <td><?php echo $pd_row['seatno']; ?></td>
                            <td><?php echo $pd_row['price']; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    <tr>
                        <th colspan="9" class="text-right">Grand Total</th>
                        <td>&#8377; <?php echo $row['grandtotal']; ?></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <?php
        } else {
            echo "No Data Found";
        }
        ?>
    </div>
</div>

<?php
include "footer.php";
?>
</body>
</html>
