<!DOCTYPE html>
<html>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<body>


<div class="container">
<div class="col-lg-12" >
<br><br>
    <h1 class="text-warning text-center"> Display Data</h1>
	<table class="table table-striped table-hover table-bordered">
	  <tr class="text-center">
       <th>Order Id</th>
       <th>User Id</th>
	   <th>Name </th>
       <th>Email</th>
	   
	    </tr>
		
		
		<?php
     include('db.php');
        
	 $q = "SELECT * FROM `order` ";
 
    $query = mysqli_query($con,$q); 
    while($res = mysqli_fetch_array($query)){
?>
	<tr>
       <th><?php echo $res['order_id'];?></th>
       <th><?php echo $res['user_id'];?></th>
	   <th><?php echo $res['name']?></th>
	    <th><?php echo $res['email']?></th>
       
	  
	   </tr>
	
	<?php
	}
	?>
	
	</table>
	</div>
	</div>

    
</body>
</html>