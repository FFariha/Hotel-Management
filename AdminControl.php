<!DOCTYPE html>
<html>
    
    <?php require_once 'Head.php'; ?>
    <title>Hotel Marriott</title>
    <body>
        <div class="header">

        </div>
        <div class="container">

            <?php require_once 'NavigationBar.php'; ?>
            <?php
            
            if($status == "admin")
            {
            ?>

            <div class="main">
                <div class="useredit">
                    <button onclick="showUsers(this.value)" class="edit-user"> <i class="fa fa-pencil-square-o" ></i> Edit User </button> <br> <br>
                <div id="Users"> 
                </div>
                </div>
                <div class="bookingedit">
                    <button onclick="showBookings(this.value)" class="edit-book"><i class="fa fa-pencil-square-o" ></i> Edit Bookings </button>  <br> <br>
                    <div id="showBookings"> </div>
                </div>
                 

            </div>


        </div>


        <?php require_once 'Footer.php'; 
        
            }
            else{
                header("Location: login.php");
            }
        
        ?>



    </body>

    <script>
        
        function showUsers(str) {
            var xhttp;
            if (str == "") {
                document.getElementById("Users").innerHTML = "";

            }
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("Users").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "Users.php", true);
            xhttp.send();


        }
        function showBookings(str) {
            var xhttp;
            if (str == "") {
                document.getElementById("showBookings").innerHTML = "";

            }
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("showBookings").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "showBookings.php", true);
            xhttp.send();


        }
    </script>

</html>