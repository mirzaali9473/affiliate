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

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pkmarts.com</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">
       
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"  >PKmarts.com</a>
            
			<button class="btn btn-sucess" ><a href="logout.php">logout</a></button>
			</div>
			</div>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="orderdetails.php"><i class="fa fa-money fa-fw"></i> Order Details<span class="fa arrow"></span></a>
                            
                          
                        </li>
                       
                        <li>
                            <a href="logout.php"><i class="fa fa-wrench fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header">Welcome to Pkmarts affiliate panel.</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-gift fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">+4</div>
                                    <div>ORDER Details</div>
                                </div>
                            </div>
                        </div>
                        <a href="#" target="_blank">
                            <div class="panel-footer">
                                <span class="pull-left"><a href="vieworders.php">View Details</a></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-star fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">15+</div>
                                    <div>Total Earning</div>
                                </div>
                            </div>
                        </div>
                        <a href="#" target="_blank">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-th fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">15+</div>
                                    <div>Referral ID</div>
                                </div>
                            </div>
                        </div>
                        <a href="#" target="_blank">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-th-large fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
<?php $q = "SELECT `counts` FROM `clicks` ";
 
    $query = mysqli_query($con,$q); 
   
while($res = mysqli_fetch_array($query)){
$clicks = $res['counts'];
?>



                                    <div class="huge"><?php echo $clicks;?></div>
                                   

<?php } ?>

								   <div>Links Clicks<br/></div>
                                </div>
                            </div>
                        </div>
                        <a href="#" target="_blank">
                            <div class="panel-footer">
							
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
			
			<div class="row">
			
<div class="col-lg-12" >
<br><br>
 
	<table class="table table-striped table-hover table-bordered">
	  <tr class="text-center">
       <th>Order Id</th>
       <th>User Id</th>
	   <th>Name </th>
       <th>Email</th>
	    <th>Price</th>
		<th>Earning</th>
	    </tr>
	
		
		<?php
     include('db.php');
	 
	 
	 
	 
     $id = $_SESSION['uid'];
	 $q = "SELECT * FROM `order` WHERE `user_id` = '$id' ";
	 $sum=0;
     $query = mysqli_query($con,$q); 
 
    while($res = mysqli_fetch_array($query)){
		

		

    $value = $res['price'];

    $sum += $value;




		
		
	
		
		
?>
	<tr>
       <th><?php echo $res['order_id'];?></th>
       <th><?php echo $res['user_id'];?></th>
	   <th><?php echo $res['name']?></th>
	    <th><?php echo $res['email']?></th>
		<th><?php echo $res['price']?></th>
		<th><?php echo $res['earning']?></th>
       
	   
	   </tr>
	
	<?php
	}
	echo  "Total earning",'=',$sum;
	?>
	
	</table>
	
	</div>

			</div>
            <!-- /.row -->
            <div class="row">
              <!-- /.col-lg-8 -->
              <!-- /.col-lg-4 -->
</div>
            <!-- /.row -->
        </div>


    <!-- jQuery -->
    <script src="css/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>
    

</body>

</html>
