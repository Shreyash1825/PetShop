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

    <title>Pet Equipment Store</title>
  
    <!-- core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">  
    <link href="css/main.css" rel="stylesheet">
    <link href="css/base.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

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
                         <li class="active"><a href="index.php"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</a></li>
                        <li ><a href="about-us.php">About Us</a></li>
                        <li ><a href="available.php">Available Products</a></li>
                        <li><a href="contacts.php">Contacts</a></li>
                                                               
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

<!--********************START SLIDER********************-->

<div class="container-fluid">
    <br>
        <div class="col-md-9 wow fadeInDown">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="border-radius:20px;overflow:hidden;background-color:#212121; padding:10px;">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
              </ol>
            
              <!-- Wrapper for slides -->
              <div class="carousel-inner" style="background:#fff;border-radius:10px;overflow:hidden;">
                <div class="item active" >
                  <img src="./images/slide4 Cropped.jpg" alt="" class="d-block w-100">
                </div>
                <div class="item" >
                    <img class="d-block w-100"  src="./images/slide2 Cropped.jpg" alt="Second slide">
                </div>
                <div class="item" >
                    <img class="d-block w-100" src="./images/slide3 Cropped.jpg" alt="Third slide">
                </div>
                <div class="item" >
                    <img class="d-block w-100" src="./images/slide1 Cropped.jpg" alt="Forth slide">
                </div>
               
              </div>
                              
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>

            <div class="panel panel-default wow fadeInDown" style="box-shadow: 0 0 8px 0 rgba(0,0,0,0.2);
  background: white;padding: 3%;display:grid;place-items:end;
  border-radius: 15px;margin-top: 3rem;">
              <div class="wow fadeInDown" style="font-weight:bold; font-size:16px; color:#36648B;">Better products mean Better Profits. you should Choose the Right Products as per your local Needs. Pet Supplies are the best opportunity and demand full control of inventory due to keeping a pet is Trend.</div>
              <a href="about-us.php" style="margin-top: 1.5rem" class="btn btn-success btn-md pull-right wow fadeInDown">Know More About Us</a>
            </div>
        </div>
        
<!--*********************************************Food PACKAGES************************************************-->
 
        <div class="col-md-3" >
            <div class="panel panel-default wow fadeInDown">
              <!-- Default panel contents -->
            
              <div class="panel-heading wow fadeInDown" style="font-weight:bold; font-size:16px; color:#36648B;">Welcome To Our Pet Equipment Store</div>
            
            </div>
         
            <div class="panel panel-default wow fadeInDown">
              <!-- Default panel contents -->
              <div class="panel-heading wow fadeInDown" style="font-weight:bold; font-size:16px; color:#36648B;">Today's Special Offers </div>
              <ul class="list-group">
                <li class="list-group-item wow fadeInDown">Dog Food - <span style="color:#8B8B00; font-weight:bold;">Upto 15% discount </span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>
                <li class="list-group-item wow fadeInDown">Cat Toys - <span style="color:#8B8B00; font-weight:bold;">Upto 27% discount</span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>
                <li class="list-group-item wow fadeInDown">Collars and Leashes - <span style="color:#8B8B00; font-weight:bold;">Upto 37% discount</span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>
                <li class="list-group-item wow fadeInDown">Dog Food Bowls - <span style="color:#8B8B00; font-weight:bold;">Upto 10% discount</span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>
              </ul>
              <a href="available.php" class="btn btn-success btn-sm pull-right wow fadeInDown">Click here to View More</a>
            </div>
            <br>
                <div class="panel panel-default wow fadeInDown">
                    <div class="panel-heading wow fadeInDown" style="font-size:16px; font-weight:bold; color: #36648B;">Our Location</div>
                </div>

                <div class="recent-work-wrap class="wow fadeInDown>
                    <img class="img-responsive wow fadeInDown" src="images/map1.jpg" alt="">
                    <div class="recent-work-inner">
                        <a class="preview wow fadeInDown" href="images/map1.jpg" rel="prettyPhoto"><br><span class="btn btn-success btm-sm pull-right">Preview Map</span></a>
                    </div> 
                </div>
            </div>  
        </div>
    </div><!--/.container-->

<!--*************************************************** FOOTERS **********************************************-->
    <footer id="footer" class="midnight-blue wow fadeInDown" style="margin-top: 3rem;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown">
               &copy; 2020 <a target="_blank" href="#" title="#">Pet Equipment Store</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right wow fadeInDown">
                        <li class="wow fadeInDown"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                        
                        <li class="wow fadeInDown"><a href="contacts.php"><i class="fa fa-phone"></i> Contacts</a></li>
                        <li class="wow fadeInDown"><a href="#loginModal" data-toggle="modal" data-target="#loginModal"><i class="fa fa-lock"></i> Admin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
 <!----loginModal----->
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