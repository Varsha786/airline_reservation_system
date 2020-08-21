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
include_once "connection.php";
?>
<div class="container">
    <table class="table table-bordered">
        <thead>
        <tr>
            <td>Id</td>
            <td>City Name</td>
            <td>Airport Code</td>
            <td>Photo</td>
            <td>Delete</td>
            <td>Edit</td>
        </tr>
        </thead>
        <tbody>
        <?php
        $select="select * from city";
        $result=mysqli_query($conn,$select);
        while ($row=mysqli_fetch_array($result))
        {
            ?>
            <tr>
                <td><?php echo $row[0]; ?>
                <td><?php echo $row[1]; ?>
                <td><?php echo $row[2]; ?>
                <td><img src="<?php echo $row[3]; ?>" style="height: 80px;" alt=""></td>
                <td><a onclick="return confirm('Are you sure to delete')"
                       href="deletearea.php?id=<?php echo $row[0];?>">
                        <i class="fa fa-trash-alt text-danger"> Delete</i></a></td>
                <td><a href="editarea.php?id=<?php echo $row[0];?>">
                        <i class="fa fa-edit text-warning"> Edit</i></a></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
