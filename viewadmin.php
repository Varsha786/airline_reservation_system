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

<?php
include "adminheader.php";
?>
<div class="container">
    <h2 class="text-center">VIEW ADMIN</h2>
    <br>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>Email</th>
        <th>Password</th>
        <th>Mobile</th>
        <th>Name</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $select="select * from admin";
    $result=mysqli_query($conn,$select);
    while ($row=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $row[0];?></td>
        <td><?php echo $row[1];?></td>
        <td><?php echo $row[2];?></td>
        <td><?php echo $row[3];?></td>
        <td><a onclick="return confirm('are you sure to delete?')"
               href="delete.php?email=<?php echo $row['email'];?>">
                <i class="fa fa-trash-alt text-danger"> Delete</i></a></td>
        <td><a href="edit.php?email=<?php echo $row['email'];?>">
                <i class="fa fa-edit text-warning">edit</i></a></td>
    </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>
