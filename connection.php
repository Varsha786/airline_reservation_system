<?php
$conn=mysqli_connect("localhost","root",null,"airline_reservation_system");
if (!$conn){echo "connection failed due to".mysqli_connect_error();}
