<!DOCTYPE html>
<?php
session_start();
$status = "";
$st = 0;
if (isset($_SESSION['username'])) {
    $name = $_SESSION['username'];
    $status = $_SESSION["status"];
    $st = 1;
}
?>
<html>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="container-fluid">

            <div class="logo-m">
                <img src="images/logo/logo.png" ">
            </div>
            <a class="navbar-brand" href="index.php">Hotel Marriott</a>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="Gallery.php">Gallery</a></li>
                <?php
                if ($status == "user") {
                    ?>

                    <li><a href="Booking.php">Booking</a></li>
                    <?php
                }
                ?>

                <li><a href="About.php">About</a></li>
                <li><a href="TandC.php">Terms & condition</a></li>
                <?php
                if ($status == "admin") {
                    ?>
                    <li><a href="AdminControl.php">Admin control</a></li>

                    <?php
                }
                ?>
            </ul>



            <div class="login-header">
                <?php
                if ($st == 1) {
                    ?>
                    <div class="usernmae-header">
                        <div class="Username">
                            <h3><i class="fa fa-user" ></i><?php echo $name; ?></h3>
                        </div>
                        <button><i class="fa fa-sign-out" onclick="location.href = 'controllers/LoginController.php?st=1'" > Logout</i></button>
                    </div>

                    <?php
                } else {
                    ?>


                    <button><i class="fa fa-sign-in" onclick="location.href = 'login.php'" > Login</i></button>
                    <button><i class="fa fa-registered" onclick="location.href = 'signup.php'"  > Sign Up</i></button>

                    <?php
                }
                ?>
            </div>
        </div>
    </nav>
</html>