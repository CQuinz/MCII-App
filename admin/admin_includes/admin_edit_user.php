<?php
//QUERY FOR DISPLAYING THE EDIT USER DETAILS IN THE (STICKY)FORM
if(isset($_GET['edit_id'])){
	$edit_user_key= $_GET['edit_id'];
	
	$query = "SELECT * FROM users WHERE user_id = $edit_user_key";
				
	//CONNECT QUERY TO DB
	$show_edit_user= mysqli_query($db,$query);

	//Loop through and display results
	while($row =mysqli_fetch_assoc($show_edit_user)){

		//Creating variables for the array
		$user_id = $row['user_id'];
		$username = $row['username'];
		$userpass = $row['userpass'];
		$user_role = $row['user_role'];
		
?>

<h3 class="text-center my-4">Edit User</h3>
<div class="row justify-content-md-center">
	<div class="col-md-4 text-center">
	
		<form action="" method="post" class="">
		
			<div class="form-group">
			
				<label for="userpass" class="mr-sm-2 font-weight-bold">Username:</label>
				<input type="text" placeholder="Enter username here" name="username" class="form-control" value='<?php echo "{$username}"; ?>'>
				
				<label for="username" class="mr-sm-2 font-weight-bold">Password:</label>
				<input type="text" placeholder="Enter password" name="userpass" class="form-control" value='<?php echo "{$userpass}"; ?>'>
				
				<label for="user_role" class="mr-sm-2 font-weight-bold">Role:</label>
				<select name="user_role" id="" class="form-control">
					<option value='<?php echo "{$user_role}"; ?>' selected><?php echo "{$user_role}"; ?></option>
					
					<option value="unpublished">Unpublish</option>
					
				</select>
			</div>
			<?php }?><!--end of while loop-->
			
<?php } ?>
			<input type="submit" class="btn btn-success" value="Edit User" name="edit_user_submit">
		</form>
		
		<?php
		//CHECK IF A CONNECTION TO THE DATABASE EXISTS
		
		if(!$db){
			die("no connection" .mysqli_error($db));
		}
		
		//QUERY FOR UPDATING AN ARTICLE
		if(isset($_POST['edit_user_submit'])){
			//$article_date = date();
			$username = $_POST['username'];
			$userpass = $_POST['userpass'];
			$user_role = $_POST['user_role'];
			
		
		

			$query = "UPDATE users SET ";
			$query .= "username = '{$username}', ";
			$query .= "userpass = '{$userpass}', ";
			$query .= "user_role = '{$user_role}' ";
	
			$edit_user = mysqli_query($db,$query);
			
			header("location: index.php?source=view_all_users");
		
		}
	?>
	

	</div>
</div>