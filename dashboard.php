
 

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
                                <span class="pull-left"><a href="orderdetails.php">View Details</a></span>
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
<?php 

$id = $_SESSION['uid'];
$q = "SELECT `counts` FROM `clicks` where `user_id` =  '$id'";
 
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
	        <form action='' method='POST'>
				Make Affiliate URL
				<div><input type="url" class="form-control" name="url"></input></div>
				<br/>
				
				<button type='submit' class="btn-btn-success" name='submit'> Submit </button>	
				<br/>
			
			
			</form>
			<?php 
			    $url = $_POST['url'];
			    $id = $_SESSION['uid'];
			?>
			<div>
			<br/><input type='url' class="form-control" value="<?php
			 if(isset($_POST['submit']))
			{
			echo $url,"?id=",$id;
		 
 
		}?>"></div>
			
			</div>
            <!-- /.row -->
            <div class="row">
              <!-- /.col-lg-8 -->
              <!-- /.col-lg-4 -->
</div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="css/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>
    

</body>

</html>
