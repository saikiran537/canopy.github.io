<?php
require("includes/common.php");



// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>




<!DOCTYPE html>
<html lang="en">



    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="shortcut icon" href="img/sastralogo.jpg" />

        <title>Canopy | SASTRA Deemed University</title>
        
        <link href="css/bootstrap.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        
        <script src="js/jquery.js"></script>
        
        <script src="js/bootstrap.min.js"></script>


        <style type="text/css">
            
            #banner_image{
                background-image: url(img/sastra.jpg);
            }
            
            body h3{
                font-family: 'Abel';font-size: 22px;
            }
            p{
                font-size: 15px;
            }
        </style>

    
    </head>



    <body style="padding-top: 50px;">



        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->



        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>Hello,<span style="color: /*#0D2D62*/;font-style: oblique;padding-left: 10px">SASTRAITES</span></h1>
                            <h3>We have all kinds of food.</h3>
                            <p style="font-size: 14px;font-style: italic;">Flat 10% OFF on salads </p>
                            <br/>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Order Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->

            <!--Item categories listing-->
            <div class="container">
                 <!-- --------------------------------------first row start--------------------------------------------- -->
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#tiffins" >
                            <div class="thumbnail">
                                <img src="img/dosa1.jpg" alt="" style="width:93%">
                                <div class="caption">
                                    <h3>Tiffins</h3>
                                    <p>Choose among the best available.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#rice" >
                            <div class="thumbnail">
                                <img src="img/vegrice.jpg" alt="">
                                <div class="caption">
                                    <h3>Rice Items</h3>
                                    <p>Original quality rice from the best one.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#bakery" >
                            <div class="thumbnail">
                                <img src="img/bakery3.jpg" alt="" style="width:66%">
                                <div class="caption">
                                    <h3>Bakery Snacks</h3>
                                    <p>Our exquisite collection of snacks.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                 <!-- --------------------------------------first row end--------------------------------------------- -->

                <!-- --------------------------------------second row start--------------------------------------------- -->
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#drinks" >
                            <div class="thumbnail">
                                <img src="img/coke.jpg" alt="" style="width:70%">
                                <div class="caption">
                                    <h3>Cool drinks</h3>
                                    <p>You will be moved to the different world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#ice_creams" >
                            <div class="thumbnail">
                                <img src="img/vanila.jpg" alt="" style="width:79%">
                                <div class="caption">
                                    <h3>Ice creams</h3>
                                    <p>Original flavours from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#chat" >
                            <div class="thumbnail">
                                <img src="img/chatpuri.jpg" alt="">
                                <div class="caption">
                                    <h3>Chat Masala</h3>
                                    <p>you will enjoy the taste of chats.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                 <!-- --------------------------------------second row end--------------------------------------------- -->

                <!-- --------------------------------------third row start--------------------------------------------- -->
                <div class="row text-center" id="item_list2">
                    <div class="col-sm-4">
                        <a href="products.php#7" >
                            <div class="thumbnail">
                                <img src="img/milk.jpg" alt="" style="width:48%">
                                <div class="caption">
                                    <h3>Milk</h3>
                                    <p>We provide the best quality of milk.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#7" >
                            <div class="thumbnail">
                                <img src="img/coffee.jpg" alt="" style="width:72%">
                                <div class="caption">
                                    <h3>Coffee</h3>
                                    <p> coffee from the best coffee plantations.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#7" >
                            <div class="thumbnail">
                                <img src="img/tea.jpg" alt="" style="width:72%">
                                <div class="caption">
                                    <h3>Tea</h3>
                                    <p>You will be flattered with the taste of our tea.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                 <!-- --------------------------------------third row end--------------------------------------------- -->
            </div>
            
            <!--Item categories listing end-->
        </div>
        



        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   


    </body> 
</html>