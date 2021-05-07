<?php require_once 'Head.php'; ?>
<?php if($_GET['q']!="")
    
{
    ?>
<div class="room-type">
    
    
    <div>


        <table class="table table-dark">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Sl No</th>
                    <th scope="col">Room No</th>
                    <th scope="col">Room Type</th>
                    <th scope="col">Select</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $type = $_GET['q'];

                require_once 'models/database.php';
                $database = new Database();
                $select = "*";
                $table = "room";
                $status = "Empty";
                $where = "where Status='$status' AND Type='$type'";
                $result = $database->select($select, $table, $where);
                if (!empty($result)) {
                    $sl=1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <th ><?php echo $sl;?></th>
                            <td><?php echo $row["Room_no"];?></td>
                            <td><?php echo $row["Type"];?></td>
                            <td><input type="radio"  name="room_no" value="<?php echo $row["Room_no"];?>"></td>
                            
                        </tr>
                        <?php
                        $sl=$sl+1;
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <p>Available room <?php echo $sl-1;?></p>
</div>
<?php
}
?>