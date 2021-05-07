<title>Hotel Marriott</title>
<?php require_once 'Head.php'; ?>
<?php require_once 'controllers/LoginController.php'; ?>
<body>
    <div class="header">

    </div>
    <div class="container">

        <?php require_once 'NavigationBar.php'; ?>
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="center-login">
                    <div class="card-header">
                        <h1>Login</h1>
                    </div>
                    <form action="" method="post" class="form-horizontal form-material">
                        <div class="form-group">
                            <h4 class="text">Username</h4> 
                            <input type="text" name="username" value="<?php echo $username;?>"class="form-control">
                            <span style="color:red"><?php echo $err_username; ?></span>

                        </div>
                        <div class="form-group">
                            <h4 class="text">Password</h4> 
                            <input type="password" name="password" class="form-control">
                            <span style="color:red"><?php echo $err_password; ?></span>
                        </div>
                        <div class="form-group text-center">

                            <input type="submit" name="login" class="btn btn-success" value="Login" class="form-control">
                        </div>
                        <div class="form-group text-center">

                            <a href="signup.php" >Not registered yet? Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>

    <!--login ends -->
    <?php require_once 'Footer.php'; ?>