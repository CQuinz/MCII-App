
<h3 class="text-center my-4">Create User</h3>
<div class="row justify-content-md-center">
	<div class="col-md-4 text-center">
	
		<form action="" method="post" class="">
		
			<div class="form-group">
			
				<label for="userpass" class="mr-sm-2 font-weight-bold">Username:</label>
				<input type="text" placeholder="Enter username here" name="username" class="form-control">
				
				<label for="username" class="mr-sm-2 font-weight-bold">Password:</label>
				<input type="text" placeholder="Enter password" name="userpass" class="form-control">
				
				<label for="user_role" class="mr-sm-2 font-weight-bold">Role:</label>
				<select name="user_role" id="" class="form-control">
					<option value='user' >user</option>
					<option value="admin">admin</option>
				</select>
			</div>
		
			<input type="submit" class="btn btn-success" value="Create User" name="create_user_submit">
		</form>
		
		 <!--USED LARGE MAJORITY OF LOGIN SECTION FROM PHP FOR BEGINNERS TO MASTERS COURSE FROM UDEMY FOR THIS LOGIN-->
		 <!--QUERY TO REQUEST IF USERS LOGIN DETAILS MATCH THE USER DATABASE-->
		 <?php
			  if(isset($_POST['create_user_submit'])){
				  $createUsername= $_POST['username'];
				  $createPassword= $_POST['userpass'];
				  $createRole= $_POST['user_role'];
				  

				  if($registerPassword==$confirmPassword){
					 //REMOVING ANY SPECIAL CHARACTERS FROM THE STRING
					  $createUsername= mysqli_real_escape_string($db, $createUsername);
					  $createPassword= mysqli_real_escape_string($db, $createPassword);

					  //CHECK IF USER ACCOUNT ALREADY EXISTS
					  $query= "SELECT * FROM users WHERE username='{$createUsername}'";
					  $check_user_exists =mysqli_query($db,$query);

					  if(mysqli_num_rows($check_user_exists)>0){
						  echo "<p class='text-center font-weight-bold my-5'>Sorry account already exists!!</p>";
					  }else{

						$query= "INSERT INTO users(username, userpass, user_role) ";
						$query.= "VALUES('{$createUsername}','{$createPassword}','{$createRole}')";
						$create_new_user =mysqli_query($db,$query); 

						header("Location: index.php?source=view_all_users");

					 }

				  }

			  }

		?>
	

	</div>
</div>