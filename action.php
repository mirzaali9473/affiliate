<?php

$db = mysqli_connect('localhost', 'root', '' , 'newtask');

  
  
  

  
  
  // if the register button is clicked
 
	
	


	
	 $email = $_POST['email'];
 
 $pass =$_POST['psw'];
$query = "INSERT INTO `signup`(`email`, `password`) VALUES ('$email','$pass')";		
	$run =mysqli_query($db,$query);

if ($run == true)
				{?>echo "<script type='text/javascript'>alert('Signup Done Sucessfully');
window.location='signup.php';
</script>";
<?php

}
?>



	 
	 
  





