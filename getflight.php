<?php
include_once "connection.php";
$sourcecity=$_REQUEST['q'];
$destinationcity=$_REQUEST['des'];
$select="select * from flights where sourcecity='$sourcecity' and destinationcity='$destinationcity'";
$result=mysqli_query($conn,$select);
if (mysqli_num_rows($result)>0) {
    ?>
    <table class="table table-bordered">
        <tr>
            <th>Sr no.</th>
            <th>Flight name</th>
            <th>Economy Price</th>
            <th>Business Price</th>
            <th>Working Days</th>
            <th>Timings</th>
            <th>Aircraft</th>
            <th colspan="2">Controls</th>
        </tr>
        <?php
        $i = 1;
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[4]; ?></td>
                <td><?php echo $row[5]; ?></td>
                <td>
                    <table class="table table-bordered">
                        <tr>
                            <th>Monday</th>
                            <td><?php echo $row[6]; ?></td>
                        </tr>
                        <tr>
                            <th>Tuesday</th>
                            <td><?php echo $row[7]; ?></td>
                        </tr>
                        <tr>
                            <th>Wednesday</th>
                            <td><?php echo $row[8]; ?></td>
                        </tr>
                        <tr>
                            <th>Thursday</th>
                            <td><?php echo $row[9]; ?></td>
                        </tr>
                        <tr>
                            <th>Friday</th>
                            <td><?php echo $row[10]; ?></td>
                        </tr>
                        <tr>
                            <th>Saturday</th>
                            <td><?php echo $row[11]; ?></td>
                        </tr>
                        <tr>
                            <th>Sunday</th>
                            <td><?php echo $row[12]; ?></td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table class="table">
                        <tr>
                            <th>Start Time</th>
                            <td><?php echo date('h:i:A', strtotime($row[13])); ?></td>
                        </tr>
                        <tr>
                            <th>End Time</th>
                            <td><?php echo date('h:i:A', strtotime($row[14])); ?></td>
                        </tr>
                    </table>
                </td>
                <td><?php echo $row[15]; ?></td>
                <td><a onclick="return confirm('Are you sure to delete')"
                           href="deleteflight.php?id=<?php echo $row[0];?>">
                        <i class="fa fa-trash-alt text-danger"> Delete</i></a></td>
                <td><a href="editflight.php?id=<?php echo $row[0];?>">
                        <i class="fa fa-edit text-warning"> Edit</i></a></td>

            </tr>
            <?php
        }
        ?>
    </table>
    <?php
} else{
    echo 'No Flight Available';
}

