<!--LOGIN MODAL-->
<!-- Button trigger modal -->
<!--
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registerModal">
  Login
</button>
-->

<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registerModalTitle">Register account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="" method="post">
			<div class="form-group">
				<label for="registerUsername" class="font-weight-bold">Name:</label>
				<input type="text" placeholder="Enter your username" name="registerUsername" class="form-control">
			</div>

			<div class="form-group">
				<label for="password" class="font-weight-bold">Password:</label>
				<input type="password" placeholder="Enter your password" name="registerPassword" class="form-control">
			</div>
			
			<div class="form-group">
				<label for="confirmPassword" class="font-weight-bold">Confirm Password:</label>
				<input type="password" placeholder="Re-enter your password" name="confirmPassword" class="form-control">
			</div>
			<input type="submit" name="register" class="btn btn-primary" value="Register">
		</form>	
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<?php //include "includes/header.php";?>
	 
    <!--USED LARGE MAJORITY OF LOGIN SECTION FROM PHP FOR BEGINNERS TO MASTERS COURSE FROM UDEMY FOR THIS LOGIN-->
     <!--QUERY TO REQUEST IF USERS LOGIN DETAILS MATCH THE USER DATABASE-->
     <?php
		  if(isset($_POST['register'])){
			  $registerUsername= $_POST['registerUsername'];
			  $registerPassword= $_POST['registerPassword'];
			  $confirmPassword= $_POST['confirmPassword'];
			  
			  if($registerPassword==$confirmPassword){
				 //REMOVING ANY SPECIAL CHARACTERS FROM THE STRING
				  $registerUsername= mysqli_real_escape_string($db, $registerUsername);
				  $registerPassword= mysqli_real_escape_string($db, $registerPassword);
				  
				  //CHECK IF USER ACCOUNT ALREADY EXISTS
				  $query= "SELECT * FROM users WHERE username='{$registerUsername}'";
			  	  $check_user_exists =mysqli_query($db,$query);
				   
				  if(mysqli_num_rows($check_user_exists)>0){
					  echo "<p class='text-center font-weight-bold my-5'>Sorry account already exists!!</p>";
				  }else{
					  
					$query= "INSERT INTO users(username, userpass, user_role) ";
					$query.= "VALUES('{$registerUsername}','{$registerPassword}','user')";
			  		$register_user =mysqli_query($db,$query); 
					  
					  
					  
				 }
				  
			  }
			   
		  }

	?>
		

			

					