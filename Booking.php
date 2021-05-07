<!DOCTYPE html>

<html>
    <?php require_once 'controllers/BookingController.php'; ?>
    <?php require_once 'Head.php'; ?>
    <title>Hotel Marriott</title>
    <body>
        <div class="header">

        </div>
        <div class="container">

            <?php require_once 'NavigationBar.php'; ?>
            <?php
            if($status == 'user'){
            ?>

            <div class="main">
                <div class="contentbooking">
                    <h1><p style="color:black;">Please fill the form for book your room</p></h1>
                    <form action="" method="post" class="form-horizontal form-material"  >

                        <div class="row">
                            <div class="col-md-3">
                                <label >Username</label>

                            </div>

                            <div class="col-md-9">
                                <input type="text" id="lname" name="uname" placeholder="Enter your Username" ><br>
                                <span style="color:red"><?php echo $err_uname; ?></span><br><br>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label >Email address</label>

                            </div>

                            <div class="col-md-9">
                                <input type="text" name="email" onkeyup="ValidatedEmail();" id="txtEmail"  placeholder="Enter a valid email address" ><br>
                                <span style="color:red"><?php echo $err_email; ?></span>
                                <span id="lblError" style="color: red"></span><br><br>


                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label >Phone Number</label>

                            </div>

                            <div class="col-md-9">
                                <input type="text" id="pnumber" name="pnumber" onkeyup="ValidatedPhone();"  placeholder="Enter a valid phone number" ><br>
                                <span style="color:red"><?php echo $err_pnum; ?></span>
                                <span id="lblErrorp" style="color: red"></span><br><br>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label >Permanent Address</label>

                            </div>

                            <div class="col-md-9">
                                <input type="text" id="add" name="add" placeholder="Enter your permanent address" ><br>
                                <span style="color:red"><?php echo $err_add; ?></span><br><br>
                            </div>

                        </div>
                        <div class="selection"> 
                            <div class="row">
                                <div class="col-md-3">
                                    <label > ID </label>

                                </div>

                                <div class="col-md-5">     
                                    <select name="id_type" onchange="showid(this.value)">
                                        <option value=""><p style="color:black;">Select a ID type</option>
                                        <option value="NID">National ID</option>
                                        <option value="Passport">Passport</option>
                                        <option value="license_no">Driving license number</option>
                                    </select> <br>
                                    <span style="color:red"><?php echo $err_id; ?></span><br><br>
                                </div> 

                                <div class="col-md-4">    </div> 

                            </div>
                            <div class="row">
                                <div class="col-md-3">  

                                </div>
                                <div class="col-md-9">
                                    <div id="id">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-3">   
                                    <label >Payment Option</label>
                                </div>
                                <div class="col-md-5">     
                                    <select name="pay" onchange="showpayment(this.value)">
                                        <option value=""><p style="color:black;">Select a payment option</option>
                                        <option value="Cash">Cash</option>
                                        <option value="Card">Card</option>
                                    </select> <br>
                                    <span style="color:red"><?php echo $err_pay; ?></span><br><br>
                                </div>

                                <div class="col-md-4">    </div> 
                            </div>
                            <div class="row">
                                <div class="col-md-3">  

                                </div>
                                <div class="col-md-9">
                                    <div id="payment">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-3">  
                                    <label >Room type</label>
                                </div>
                                <div class="col-md-5">
                                    <select  name="room" onchange="showroom(this.value)" >
                                        <option value="">Select your room type</option>
                                        <option value="Single">Single</option>
                                        <option value="Double">Double</option>
                                        <option value="Luxury">Luxury</option>
                                    </select><br>
                                    <span style="color:red"><?php echo $err_room; ?></span><br><br>
                                </div>
                                <div class="col-md-4">    </div> 
                            </div>

                            <div class="row">
                                <div class="col-md-3">  

                                </div>
                                <div class="col-md-6">
                                    <div id="room">
                                    </div>
                                </div>
                                <div class="col-md-3">    </div> 
                            </div>
                            <div class="row">
                                <div class="col-md-3"> 
                                    <label >Check in date</label>
                                </div>
                                <div class="col-md-5">
                                    <input type="date" id="idate" name="indate">
                                    <span style="color:red"><?php echo $err_checkin; ?></span><br>
                                </div>
                                <div class="col-md-4">    </div> 
                            </div><br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label >Estimated check out date</label>
                                </div>
                                <div class="col-md-5">
                                    <input type="date" id="odate" name="outdate">
                                    <span style="color:red"><?php echo $err_checkout; ?></span><br>
                                </div>
                                <div class="col-md-4">    </div> 
                            </div><br>

                            <div class="row">
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group text-center">

                                        <input type="submit"  value="Submit" class="btn btn-success" class="form-control" name="book">
                                    </div>
                                </div>
                                <div class="col-md-4">    </div> 
                            </div>
                        </div>

                    </form><br><br>
                </div>
            </div>


        </div>


    </div>





<?php
require_once 'Footer.php';

}
else {
header("Location: login.php");
}
?>



    <!-- Slide Showing j query -->
    <script src="my_js/slide.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
<script>
                                        function showroom(str) {
                                            var xhttp;
                                            if (str == "") {
                                                document.getElementById("room").innerHTML = "";

                                            }
                                            xhttp = new XMLHttpRequest();
                                            xhttp.onreadystatechange = function () {
                                                if (this.readyState == 4 && this.status == 200) {
                                                    document.getElementById("room").innerHTML = this.responseText;
                                                }
                                            };
                                            xhttp.open("GET", "room.php?q=" + str, true);
                                            xhttp.send();


                                        }
                                        function showid(str) {
                                            var xhttp;
                                            if (str == "") {
                                                document.getElementById("id").innerHTML = "";

                                            }
                                            xhttp = new XMLHttpRequest();
                                            xhttp.onreadystatechange = function () {
                                                if (this.readyState == 4 && this.status == 200) {
                                                    document.getElementById("id").innerHTML = this.responseText;
                                                }
                                            };
                                            xhttp.open("GET", "id.php?q=" + str, true);
                                            xhttp.send();


                                        }
                                        function showpayment(str) {
                                            var xhttp;
                                            if (str == "") {
                                                document.getElementById("payment").innerHTML = "";

                                            }
                                            xhttp = new XMLHttpRequest();
                                            xhttp.onreadystatechange = function () {
                                                if (this.readyState == 4 && this.status == 200) {
                                                    document.getElementById("payment").innerHTML = this.responseText;
                                                }
                                            };
                                            xhttp.open("GET", "payment.php?q=" + str, true);
                                            xhttp.send();


                                        }
                                        function ValidatedEmail() {

                                            var email = document.getElementById("txtEmail").value;
                                            var lblError = document.getElementById("lblError");
                                            console.log(email);
                                            lblError.innerHTML = "";
                                            var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
                                            if (!expr.test(email)) {
                                                lblError.innerHTML = "Invalid email address.";
                                            }
                                        }
                                        function ValidatedPhone() {

                                            var email = document.getElementById("pnumber").value;
                                            var lblError = document.getElementById("lblErrorp");
                                            console.log(email);
                                            lblError.innerHTML = "";
                                            var expr = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{5})$/;
                                            ;
                                            if (!expr.test(email)) {
                                                lblError.innerHTML = "Invalid Phone number.";
                                            }
                                        }




</script>
</html>