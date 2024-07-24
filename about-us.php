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
    <link href="css/responsive.css" rel="stylesheet">
    <style>
        .center{
            padding: 0;
        }
        .cardbox{
            box-shadow: 0 0 8px 0 rgba(0,0,0,0.2);
            background: white;
            padding: 1% 3%;
            display:grid;
            place-items:center;
            border-radius: 15px;
            margin: 3rem;
        }
    </style>
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
                    <a href="index.php"><h4 class="wow fadeInDown" style="margin-top:20px; color:#FFF;">
                <!--      <img src="images/logo.jpg"  width="15% "/> --> Pet Equipment Store</h4></a>
                </div>
    
                <div class="collapse navbar-collapse navbar-right wow fadeInDown">
                    <ul class="nav navbar-nav">
                         <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li class="active" ><a href="about-us.php">About Us</a></li>
                        <li ><a href="available.php">Available Products</a></li>
                        <li><a href="contacts.php">Contacts</a></li>
                                      
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        <div class="container">
            <div class="col-12 cardbox">
                <h2 class="center">About Us</h2>
                <div class="title-wrapper ">
                    <p style="text-align:justify;">
                        The Pet Equipment Store operates an online pet equipment shop store selling animal food, vitamins, accessories 
                        and grooming products. The company started 2003 as a small pet shop to sell quality freshwater fish to the Filipino hobbyist. The product line had expanded to include a number of products used in wholesale and retail such as dogs and cats feeds and accessories. Today, the company is one of the biggest whosale and retail stores of animal products carrying quality brands. Its online business sites launched in the 3rd quarter of 2016 to accommodate the growing population of loyal and new customers who prefer to purchase via online. 
                    </p>
                </div>
            </div>
            <div class="v_space"></div>
            <div class="col-12 cardbox">
                <h2 class="center">Customers First</h2>
                <div class="title-wrapper ">
                    <p style="text-align:justify;">
                    Building loyalty and good relationship with our customer is our priority. The company exist to give the best price without compromising the quality and to make each transaction experience easy,safe and accessible to online buyers.
                    </p>
                </div>
            </div>
            <div class="v_space"></div>
            <div class="col-12 cardbox">
                <h2 class="center">Mission</h2>
                <p style="text-align:justify;">
                    Our goal is to give our customers the best online shopping experience by giving them the best price and making each transaction  easy,  fast and secured.</p>
            </div> 
            <div class="v_space"></div>
            <div class="col-12 cardbox">
                <h2 class="center">Vision</h2>
                <p style="text-align:justify;">
                    To be the top of the mind trusted online pet shop nationwide.
                </p>           
            </div>
        </div>
    </div>
      <iframe height="400" frameborder="0" style="width: 100%;"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122284.73905027455!2d74.18942623675302!3d16.706977038516168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc1000cdec07a29%3A0xece8ea642952e42f!2z4KSV4KWL4KSy4KWN4KS54KS-4KSq4KWC4KSwLCDgpK7gpLngpL7gpLDgpL7gpLfgpY3gpJ_gpY3gpLA!5e0!3m2!1smr!2sin!4v1646806038103!5m2!1smr!2sin" allowfullscreen="" loading="lazy"></iframe>
    <div class="clear"></div>
</li>
        
<!--*************************************************** FOOTERS **********************************************-->
  
    <?php include('includes/footer.php');?>

<?php include('loginModal.php');?>
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