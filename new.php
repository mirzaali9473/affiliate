<?php 
session_start();
  if ($_SESSION['uid'])
  {
	 echo $_SESSION['uid'];
	  
  }
  else
  {
	  header('location:login.php');
  }
  

include('db.php');


$id = $_SESSION['uid'];



if (empty($_SESSION["firstname"]))
	
{
	$_SESSION["firstname"] = "jony";
	$insert = "INSERT INTO `clicks`(`user_id`, `counts`) VALUES ('$id','0')";
    $run = mysqli_query($con,$insert);
   
}
else
{
	$_SESSION["firstname"] = "jony";
}
    echo $_SESSION["firstname"];


  $q = ("SELECT `counts` FROM `clicks` where `user_id` = '$id'");
  $find_counts = mysqli_query($con,$q);



while ($row = mysqli_fetch_assoc($find_counts))
   {
	
	$current_counts = $row['counts'];
	$new_count = $current_counts + 1;
	$update_count ="UPDATE `clicks` SET `counts` = '$new_count' where `user_id` = '$id'";
	$query= mysqli_query($con,$update_count);

    }
	

?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<div class="left-content-product col-sm-12 col-xs-12">
					
                        <div class="row">
                            <div class="content-product-left  col-sm-6 col-xs-12 ">
                                <div class="large-image  ">
                                  <img src="cufflinks.png">
								  </div>
                            </div>

                            <div class="content-product-right col-sm-6 col-xs-12">
                                <div class="title-product">
                                    <h1>BAKblade 2.0 PLUS - Back Hair Removal and Body Shaver (DIY), Easy to Use Curved Handle for a Close, Pain-Free Shave Wet or Dry in Pakistan</h1>
                                </div>
                                <!-- Review ---->
                                

                                <div class="product-label form-group">
                                    <div class="product_page_price price" itemprop="offerDetails">
                                        <i class="modelSt" name="code">Product Code: PMB071JSSF8T</i>
                                        <div class="ptags">
                                        <small><strong>Brand Name:</strong> baKblade</small>
                                        <small><strong>Country:</strong> USA imported</small>
                                        <small><strong>Category:</strong> Beauty Health and Beauty</small>
                                        </div>


                                        <span class="price-new" style="font-size:28px; font-weight:600; margin:15px 0;" itemprop="price"><small style="font-size:18px;">Price</small> Rs.<span class="testprice">8407</span> </span>


                                    </div>
                                </div>
  <?php
  $id = $_GET['id']; 
  

  $price = 8740;
  
?>




                                <div class="buyBtn"><a href="order.php?id=<?php echo $id;?>">Order Now </a>  </div>

                            </div>
                        </div>

                    </div>