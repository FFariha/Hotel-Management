<?php
require_once 'models/database.php';
$database = new Database();
$select = "*";
$table = "user";
$sl=1;
$result = $database->select($select, $table);
?>

<table class = "table table-dark">
    <thead class = "thead-dark">
        <tr>
            <th scope = "col">Sl No</th>
            <th scope = "col">First Name</th>
            <th scope = "col">Last Name</th>
            <th scope = "col">User Name</th>
            <th scope = "col">Email</th>
            <th scope = "col">Action</th>

        </tr>
    </thead>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <th ><?php echo $sl; ?></th>
            <td><?php echo $row["First_name"]; ?></td>
            <td><?php echo $row["Last_name"]; ?></td>
            <td><?php echo $row["Username"]; ?></td>
            <td><?php echo $row["Email"]; ?></td>
            
            <td><button class="delete" onclick="location.href = 'controllers/delete.php?q=1&r='+ '<?php echo $row["Username"];?>';"><i class="fa fa-trash" ></i></button></td>
            

        </tr>

        <?php
        
        $sl=$sl+1;
    }
    ?>
    <tbody>

    </tbody>
</table><br><br>