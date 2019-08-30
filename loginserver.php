<?php


include('db.php');



	$email = $_POST['uname'];
	$password = $_POST['psw'];
	
	$qry ="SELECT * FROM `signup` WHERE `email` = '$email' AND `password` ='$password'";
	$run = mysqli_query($con,$qry);
	$row = mysqli_num_rows($run);
      if($row <1)
	   {
		   ?>
		<script>
		alert('username or password not match !!');
		window.open('login.php','_self');
		
		</script>
		<?php
	   } 
	  else
	  {
		$data = mysqli_fetch_assoc($run);
		$id = $data['id'];
		session_start();
		{
			$_SESSION['uid']=$id;
			header('location:dashboard.php');
		}
		
	  }

?>
