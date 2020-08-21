<?php
include "connection.php";
session_start();
if (isset($_SESSION['user'])){
    $email=$_SESSION['user'];
}
$flightid = $_REQUEST['flightid'];
$flightdate = date('Y-m-d',strtotime($_REQUEST['flightdate']));
$noOfPassengers = $_REQUEST['noOfPassengers'];
$grandtotal = $_REQUEST['grandtotal'];
$dateofBooking = date('Y-m-d');

$user = "select * from user where email='$email'";
$user_result = mysqli_query($conn, $user);
$user_row = mysqli_fetch_array($user_result);

$flight = "SELECT * FROM `flights` where fid=" . $flightid;
$flight_result = mysqli_query($conn, $flight);
$flight_row = mysqli_fetch_array($flight_result);
$sourcecity = $flight_row['sourcecity'];
$destinationcity = $flight_row['destinationcity'];

$city = "SELECT (SELECT city.cityname FROM city WHERE `id`=$sourcecity) as sourcecityname,(SELECT city.cityname FROM city WHERE `id`=$destinationcity) as destinationcityname FROM `city` LIMIT 0,1";
$city_result = mysqli_query($conn, $city);
$city_row = mysqli_fetch_array($city_result);


$s = "INSERT INTO `booking`(`id`, `dateoftravel`, `passengers`, `flightid`, `email`, `grandtotal`, `dateofbooking`) 
VALUES (null ,'$flightdate','$noOfPassengers','$flightid','$email','$grandtotal','$dateofBooking')";
mysqli_query($conn, $s);


$maxid = "SELECT MAX(`id`) as bookid FROM `booking`";
$maxid_result = mysqli_query($conn, $maxid);
$maxid_row = mysqli_fetch_array($maxid_result);

$bookingid = $maxid_row['bookid'];

$msg = "Dear " . $user_row['name'] . ", Thank you for Booking with FlyWell Airlines. Your Booking ID is " . $bookingid . ". Date of Booking" . date('d M,Y') . " You have Booked " . $noOfPassengers . " Tickets with us. You are Travelling from  " . $city_row['sourcecityname'] . " To " . $city_row['destinationcityname'] . " on " . $flightdate . ". The Depature of Your Flights is at " . date('h:i:A' ,strtotime($flight_row['starttime'])) . " and the Arrival is at " . date('h:i:A', strtotime($flight_row['endtime'])) . " The Passenger Details are as Follows: \n";

for ($i = 0; $i < $noOfPassengers; $i++) {
    $name = $_REQUEST['pname-' . $i];
    $fname = $_REQUEST['fname-' . $i];
    $age = $_REQUEST['age-' . $i];
    $gender = $_REQUEST['gender-' . $i];
    $seatno = $_REQUEST['seatno-' . $i];
    $price = $_REQUEST['price-' . $i];
    $proof = $_FILES['proof-' . $i]['name'];
    $tmp = $_FILES['proof-' . $i]['tmp_name'];
    $path = "proofs/" . $proof;

    move_uploaded_file($tmp, $path);
    $msg .= "Passenger Name: " . $name . "\n";
    $msg .= "Father's Name: " . $fname . "\n";
    $msg .= "Age: " . $age . "\n";
    $msg .= "Gender: " . $gender . "\n";
    $msg .= "Seat no: " . $seatno . "\n";
    $msg .= "Price: " . $price . "\n";
    $sql = "INSERT INTO `bookingdetail`(`bdid`, `name`, `fathername`, `age`, `proof`, `gender`,`seatno` ,`price`,`bookid`) 
VALUES (null ,'$name' ,'$fname','$age','$path','$gender','$seatno','$price','$bookingid')";
    mysqli_query($conn, $sql);
}

$msg.="Grand Total:".$grandtotal;
$ch = curl_init();
$mobile = $user_row['mobile'];

$message = urlencode($msg);
curl_setopt($ch, CURLOPT_URL, "http://server1.vmm.education/VMMCloudMessaging/AWS_SMS_Sender?");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
    "username=PHP May 2019&password=UGD5AWRT&message=" . $message . "&phone_numbers=" . $mobile);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//print_r($ch);
$server_output = curl_exec($ch);
curl_close($ch);
echo "thanks.php?q=". $bookingid;
