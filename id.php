<?php
if($_GET['q']!=""){
    


?>


<div class="row">

    <div class="col-md-2">

        <?php
        $id = $_GET['q'];
        if ($id == "NID") {
            ?>
            <label >National ID</label>
            <?php
        }
        if ($id == "Passport") {
            ?>
            <label >Passport ID</label>
            <?php
        }
        if ($id == "license_no") {
            ?>
            <label >License Number</label>
            <?php
        }
        ?>
    </div>
    <div class="col-md-8">
        <input type="text" id="id_no" name="id_no"  placeholder="Enter a valid ID" ><br><br>
    </div>
    <div class="col-md-2">
    </div>

</div>


<?php
}
?>