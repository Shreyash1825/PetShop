<?php
    session_start();

    if (!isset($_SESSION['username'])){ 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--    <link href="images/logo.jpg" rel="shortcut icon"> -->
    <title>Pet Equipment Store</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">  
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/base.css">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head><!--/head-->
        
<!--*********************************************START OF NAVIGATION BAR****************************************--> 
<body>
          
      <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php"><h4 class="wow fadeInDown" style="margin-top:20px; color:Pink;">
                <!-- <img src="images/logo.jpg"  width="15% "/> --> Pet Equipment Store</h4></a>
                </div>
    
                <div class="collapse navbar-collapse navbar-right wow fadeInDown">
                    <ul class="nav navbar-nav">
                         <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li ><a href="about-us.php">About Us</a></li>
                        <li ><a href="available.php">Available Products</a></li>
                        <li class="active"><a href="contacts.php">Contacts</a></li>
                                                          
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
<!--*********************************************START OF CONTACT INFO****************************************-->
<body>
<br><br>
<div class="container">
        <section id="contact-info">
                <center><span style="font-size:35px; font-weight:bold; font-family:verdana; color:blue;">How to Reach Us?</span></center>

            <div class="left wow fadeInDown" style="padding: 3% 0;">
               <div class="col-md-6">
                <img src="images/contact.jpg" class="img-responsive pull-right" />
               </div> 
               <div class="col-md-6">
                <p class="lead">
                    <br>
                    <p><span style="font-size:20px; font-weight:bold; font-family:verdana;margin-bottom: 15px">Shreyash </span> <br>
                    <br><b>Address:</b> Satara 415 001<b><br>Tel/Phone:</b> +91 8010940129<b><br>Email Address:</b> shreyash8588@gmail.com</p>
                    <p><span style="font-size:20px; font-weight:bold; font-family:verdana;margin-bottom: 15px">Shantanu </span> <br>
                    <br><b>Address:</b> Kolhapur 416 008<b><br>Tel/Phone:</b> +91 7498986810<b><br>Email Address:</b> Shantanu@gmail.com</p>
                    <hr>
                    <span style="font-size:20px; font-weight:bold; font-family:verdana; color:Violet;">We are open</span>
                    <p><b>MONDAY TO FRIDAY -- 8:00AM - 5:00PM</b></p>
                </p>
                <hr>
                <table style="width:150px;font-size:18px;color:#313131">
                    <tr>
                        <td><a href="#"><i class="fa-brands fa-facebook-square"></i></a></td>
                        <td><a href="#"><i class="fa-brands fa-instagram"></i></a></td>
                        <td><a href="#"><i class="fa-brands fa-twitter"></i></a></td>
                        <td><a href="#"><i class="fa-brands fa-youtube"></i></a></td>
                    </tr>
                </table>

                </div>
            </div>
        
        </section>
</div>
<br><br>
<!--*************************************************** FOOTERS **********************************************-->

<?php include('includes/footer.php');?><!--/#footer-->
    <?php include('loginModal.php')?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>

<?php 

} else if(isset($_SESSION['username'])) { 

    include('includes/admin.php');

} ?>