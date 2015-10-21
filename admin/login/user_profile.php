<?php 
	session_start();
	if(empty($_SESSION["user_name"]))
	{
?>
   
	<a href="Signup.php">Signup</a> | <a href="Login.php">Login</a> 
	
	<?php
	 
	}
	else{
	?>
     <h2><?php echo "hi," .$_SESSION['user_name'] ?> Welcome here</h2>
		
		 <?php echo "Do you want to exit???  "  . $_SESSION["user_name"]?><a href="logout.php">Logout</a>
	echo
	<?php
	}
	?>