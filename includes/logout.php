<!--LOGOUT-->

<?php session_start();?>

<?php //include "header.php";?>
	 
  <?php

  $_SESSION['user_id']= null;
  $_SESSION['userpass']= null;
  $_SESSION['username']= null;
  $_SESSION['user_role']= null;

  //header("Location: my_goals.php");
?>
<h3 class="text-center">You have successfully logged out</h3>
<p class="text-center">Return to <a href="../index.php">home page</a></p>

	
		

			

					