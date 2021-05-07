<title>Hotel Marriott</title>
<?php require_once 'Head.php'; ?>
<?php require_once 'controllers/LoginController.php'; ?>
<?php require_once 'NavigationBar.php'; ?>
<!--sign up starts -->
<body onload='document.formsignup.email.focus()'>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="center-login">
                    <div class="card-header">
                        <h1>Sign Up</h1>
                    </div>
                    <form action="" method="post" class="form-horizontal form-material" name="formsignup">
                        <div class="form-group">
                            <h4 class="text">First Name</h4> 
                            <input type="text" name="fname" value="<?php echo $fname; ?>" class="form-control">
                            <span style="color:red"><?php echo $err_fname; ?></span>
                        </div>
                        <div class="form-group">
                            <h4 class="text">Last Name</h4> 
                            <input type="text" name="lname" value="<?php echo $lname; ?>" class="form-control">
                            <span style="color:red"><?php echo $err_lname; ?></span>
                        </div>
                        <div class="form-group">
                            <h4 class="text">Username</h4> 
                            <input type="text" name="username" value="<?php echo $username; ?>" class="form-control">
                            <span style="color:red"><?php echo $err_username; ?></span>
                        </div>
                        <div class="form-group">
                            <h4 class="text">Email</h4> 
                            <input type="text" name="email" value="<?php echo $email; ?>"  class="form-control">
                            <span style="color:red"><?php echo $err_email; ?></span>
                        </div>
                        <div class="form-group">
                            <h4 class="text">Password</h4> 
                            <input type="password" name="password" class="form-control">
                            <span style="color:red"><?php echo $err_password; ?></span>
                        </div>
                        <div class="form-group">
                            <h4 class="text">Password</h4> 
                            <input type="password" name="cpassword" class="form-control">
                            <span style="color:red"><?php echo $err_cpassword; ?></span>
                        </div>
                        <div class="form-group text-center">

                                   <input type="submit" name="sign_up" class="btn btn-success" value="Sign Up" class="form-control" onclick="ValidateEmail(document.formsignup.email)">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">

            </div>

        </div>
    </div>
</body>
<!--sign up ends -->
<?php require_once 'Footer.php'; ?>
<script>
    function ValidateEmail(inputText)
    {
        var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        if (inputText.value.match(mailformat))
        {
            
            document.formsignup.email.focus();
            return true;
        } else
        {
            alert("You have entered an invalid email address!");
            document.formsignup.email.focus();
            return false;
           
        }
         window.location.assign("signup.php");
    }
</script>