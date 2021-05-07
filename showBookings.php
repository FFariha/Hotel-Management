<?php
require_once 'models/database.php';
$database = new Database();
$select = "*";
$table = "bookings";
$sl=1;
$result = $database->select($select, $table);
?>

<table class = "table table-dark">
    <thead class = "thead-dark">
        <tr>
            <th scope = "col">Sl No</th>
            <th scope = "col">User Name</th>
            <th scope = "col">Phone No</th>
            <th scope = "col">Address</th>
            <th scope = "col">Id no</th>
            <th scope = "col">Payment</th>
            <th scope = "col">Room No</th>
            <th scope = "col">Check In</th>
            <th scope = "col">Check Out</th>
            <th scope = "col">Action</th>
            

        </tr>
    </thead>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <th ><?php echo $sl; ?></th>
            <td><?php echo $row["Username"]; ?></td>
            <td><?php echo $row["Phone_no"]; ?></td>
            <td><?php echo $row["Address"]; ?></td>
            <td><?php echo $row["ID_NO"]; ?></td>
            <td><?php echo $row["Payment"]; ?></td>
            <td><?php echo $row["Room_no"]; ?></td>
            <td><?php echo $row["Check_in"]; ?></td>
            <td><?php echo $row["Check_out"]; ?></td>
            <td><button class="delete" onclick="location.href = 'controllers/delete.php?q=2&r='+ <?php echo $row["Room_no"];?>;"><i class="fa fa-trash" ></i></button></td>
            

        </tr>

        <?php
        
        $sl=$sl+1;
    }
    ?>
    <tbody>

    </tbody>
</table><br><br>