
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/foods/logo.png" rel="shortcut icon">
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
   body{
        background: #f5f5f5;
       }
  .pcard {
    padding: 7%;
    position: relative;
    overflow: hidden;
    flex-direction: column;
    justify-content: space-between;
    background: #fff;
    height: 100%;
    display:flex;
    border-radius: 15px;
  }
  .pcard .images img{
    border-radius: 15px;
    overflow: hidden;
    height: 150px;
  }
  .pcard .images {
      display: grid;
    border-radius: 15px;
    overflow: hidden;
      flex: 1;
      max-height: 150px;
      margin-bottom: 2%;
      place-items: center;
      overflow: hidden;
  }
  .pcard b{
    font-size: 18px;
  }.product {
    flex:1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }.mv-3 {
      margin-top: 3%;
      margin-bottom: 3%;
  }.txtaccent {
      color: #0074e9;
  }.pcard .buttons {
      justify-content: right;
  }.btnoutline {
      color: rgb(12, 92, 241);
      border: 1px solid rgb(0, 116, 233);
  }button {
      padding: 7px 15px;
      border-radius: 5px;
      outline: 0;
      border: 0;
      opacity: 0.8;
      background: #fff;
      transition: 0.5s ease;
  }button:hover {
    background: rgb(0, 116, 233);
    cursor:pointer;
    color: #fff;
  }
  .mb-3{
    margin-bottom:3%;
  }
  </style>

<!--*********************************************START OF NAVIGATION BAR****************************************--> 
			
    <div class="container">
         <?php include('includes/dbconn.php');
        $count = 0;
        $id = 0;
        $sql = "SELECT * FROM tblcnp WHERE status = 'available' order by id desc" or die (mysqli_error($con));
        
        $result=mysqli_query($con, $sql) or die (mysqli_error($con));
        
        if(mysqli_num_rows($result)>=0){
          while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $count++;
        ?>
        <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
          <div class="pcard flex frow">
            <div class="images">
                <img src="<?php echo $row['image']?>" alt="<?php echo $row['name'];?>">
            </div>
            <div class="product">
              <b class="mv-3"><?php echo $row['name'];?></b>
                <p>Description: <?php echo $row['description'];?></p>
                <span class="price mv-3 txtaccent">Price: <b id="p1Price"> RS <?php echo $row['prize'];?></b></span>
                <div class="buttons flex" style="display:flex;justify-items:right;">
                  <button class="add btnoutline cartbtn wow fadeInDown" name="order" type="button"data-toggle="modal" data-target="#orderModal<?php echo $id;?>">Add to Cart <i class="glyphicon glyphicon-shopping-cart"></i></button>
                </div>
            </div>
          </div>
        </div>
                	
                     <!-- Modal -->
<div class="modal fade" id="orderModal<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-edit"></i> CUSTOMER INFORMATION</h4>
      </div>
      <form class="form-horizontal" enctype="multipart/form-data" method="post" action="">
      <div class="modal-body">
      <p>Fields with (*) are required</p>
      <div class="row">
       <div class="col-lg-2">
    <label>Name*</label>
    </div>
    <div class="col-lg-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="Your name" required>
       <input type="hidden" class="form-control" id="fooddid" name="foodid"  value="<?php echo $id;?>" required>
    </div>
  </div>
  <div class="row">
  <div class="col-lg-2">
    <label>Address*</label></div>
    <div class="col-lg-10">
      <textarea class="form-control" name="address" required></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-2">
    <label>Contact*</label></div>
    <div class="col-lg-10">
      <input type="text" name="contact" class="form-control" required placeholder="Your number">
    </div>
  </div>
    <div class="row">
    <div class="col-lg-2">
    <label>Quantity*</label></div>
    <div class="col-lg-10">
      <input type="number" name="oqty" class="form-control" required placeholder="0">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-2">
    <label>Order Type*</label></div>
    <div class="col-lg-10">
      <select name="otype" class="form-control" required>
      	<option>Select</option>
      	<option value="Deliver">Deliver</option>
        <option value="Pick-up">Pick-up</option>
      </select>
    </div>
  </div>
   <div class="row" id="datepickup">
    <div class="col-lg-2">
    <label>Date Pick up*</label></div>
    <div class="col-lg-10">
      <input type="date" name="datep" class="form-control" />
    </div>
  </div>
  
 </div>
      <div class="modal-footer">
        
        <button type="submit" class="btn btn-primary" name="savechanges"><i class="glyphicon glyphicon-thumbs-up"></i> Order</button>
      </div>
      </form>
    </div>
  </div>
</div>
 <?php }  // while end
 }  // if end

 else {echo '<strong style="color:red">No availables data in server</strong>'; } 

 ?>
</div>
            
         
 
<?php include('includes/dbconn.php');
if(isset($_POST['savechanges'])){
		$id = $_POST['foodid'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
		$qty = $_POST['oqty'];
		$otype = $_POST['otype'];
		$datep = $_POST['datep'];


		$sql =("SELECT * FROM tblorders WHERE cname = '$name'") or die (mysqli_error());
    $result=mysqli_query($con, $sql);
			if(mysqli_num_rows($result)==5){
					echo '<script>alert("You reach maximum order of 5");
								window.loaction.href="availableframe.php";</script>';
				}
				else{

				$sql = ("INSERT INTO tblorders VALUES(NULL,'$name','$address','$contact','$id','$qty','new',NULL,'$otype','$datep')") or die (mysqli_error());
        $result=mysqli_query($con, $sql);
							if($result==true){
								echo '<script>alert("Your order will be process.The system will follow up by contacting your number thankyou!");
											 window.location.href="availableframe.php"</script>';}
											 else{
												 echo '<script>alert("Sorry unable to process your request. please try again later!");
											 window.location.href="availableframe.php"</script>';
												 }
	}	}
?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>

 <script type="text/javascript">
    $("#datepickup").hide();
    

   $(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            if($(this).attr("value")=="Pick-up"){
               
                $("#datepickup").show(200);
               
            }
            else{
                $("#datepickup").hide();
               
            }

        });
    }).change();
    });
  </script>