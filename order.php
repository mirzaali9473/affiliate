<?php
session_start();
  if ($_SESSION['uid'])
  {
	$_SESSION['uid'];
	  
  }
  else
  {
	  header('location:login.php');
  }
  
  include('db.php');

?> 
 
 
 <?php
 $con =  mysqli_connect('localhost','root','','newtask');
 
 if(isset($_POST['addCat']))
	 {
		 
		 $id = $_SESSION['uid'];
		 
		 $email = $_POST['email'];
		 $name = $_POST['name'];
		 $price = $_POST['price'];
		 $eprice=$price/100*5;
		 
	$q = "INSERT INTO `order`(`user_id`, `name`, `email`, `price`, `earning`) VALUES ('$id','$name','$email','$price','$eprice')";
	$query = mysqli_query($con,$q); 
    echo "Your Order submitted successfully";

	
 }
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


<div id="wrapper">

        <div class="container">

            <div class="row">
                <div class="col-lg-3">&nbsp;</div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <h2 class="h2Head">Order Now</h2>
                    </div>
                    <form method="post" class="orderNow" action="order.php" autocomplete="off">
                        <span class="successOrder"></span>
                        <input type="hidden" name="pcode" value="B071JSSF8T">
                        <label>Quantity</label>
                       
                        <label>Your Name</label>
                        <input type="text" name="name" required="" class="form-control" value="">
                        <label>Your Email</label>
                        <input type="email" name="email" required="" class="form-control" value="">
						<label>Price</label>
                        <input type="text" name="price" required="" class="form-control" value="">
						
                        
                       
                       

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary" name="addCat">Order Now</button>
                        </div>
                </form></div>
                
            </div>
        </div>
    </div>