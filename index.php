<!DOCTYPE html>
<html>

    <?php require_once 'Head.php'; ?>
    <title>Hotel Marriott</title>
    <body>
        <div class="header">

        </div>
        <div class="container">

            <?php require_once 'NavigationBar.php'; ?>
            <div class="msg">
                <?php
                if (isset($_COOKIE["msg"])) {
                    
                    echo $_COOKIE["msg"];
                } 
                ?>
            </div>


            <div class="main">
                <div class="jumbotron">
                    <div class="w3-content w3-section">
                        <img class="mySlides w3-animate-fading" src="images/home_gallary/1.jpg" style="width:100%; height:600px;">
                        <img class="mySlides w3-animate-fading" src="images/home_gallary/2.jpg" style="width:100%; height:600px;">
                        <img class="mySlides w3-animate-fading" src="images/home_gallary/3.jpg" style="width:100%; height:600px;">
                        <img class="mySlides w3-animate-fading" src="images/home_gallary/4.jpg" style="width:100%; height:600px;">
                        <img class="mySlides w3-animate-fading" src="images/home_gallary/5.jpg" style="width:100%; height:600px;">
                        <img class="mySlides w3-animate-fading" src="images/home_gallary/6.jpg" style="width:100%; height:600px;">
                    </div>    
                </div>
                <br>
                <div class="home-contents">
                    <div class="row" >
                        <div class="col-md-6" >
                            <div class="about-header">
                                <h2 ><i class="fa fa-info-circle"></i>About</h2><br>
                            </div>
                            <p>Online hotel reservations are a popular method for booking hotel rooms. Travelers can book rooms on a computer by using online security to protect their privacy and financial information and by using several online travel agents to compare prices and facilities at different hotels</p>
                            <br>
                            <p>Prior to the Internet, travelers could write, telephone the hotel directly, or use a travel agent to make a reservation. Nowadays, online travel agents have pictures of hotels and rooms, information on prices and deals, and even information on local resorts. Many also allow reviews of the traveler to be recorded with the online travel agent.</p>
                            <br>
                            <p>Online hotel reservations are also helpful for making last minute travel arrangements. Hotels may drop the price of a room if some rooms are still available. There are several websites that specialize in searches for deals on rooms.</p>

                        </div>
                        <div class="col-md-6">
                            <div class="add-header">
                                <h2><i class="fa fa-map-marker" ></i>Access</h2><br>
                            </div>
                            <div class="home-address">
                                The Hotel<br>
                                Front of Shahjalal International Airport, Dhaka<br>
                                Bangladesh<br>
                                Tel: (+880)1146080808<br>
                                Fax: (+880)1146080809<br>
                                Email: marriott@gmail.com<br>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>


        <?php require_once 'Footer.php'; ?>

        <?php
        if (isset($_GET['st'])) {
            ?>
            <script>
                alert("A confirmation email has been sent!");
            </script>

            <?php
        }
        ?>
        <!-- Slide Showing j query -->
        <script src="my_js/slide.js"></script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>

</html>