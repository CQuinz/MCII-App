<!--LOGIN MODAL-->
<!-- Button trigger modal -->
<!--
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">
  Login
</button>
-->
<?php //session_start();?>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalTitle">Login to your account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="" method="post">
			<div class="form-group">
				<label for="username" class="font-weight-bold">Name:</label>
				<input type="text" placeholder="Enter your username" name="username" class="form-control">
			</div>

			<div class="form-group">
				<label for="password" class="font-weight-bold">Password:</label>
				<input type="password" placeholder="Enter your password" name="password" class="form-control">
			</div>
			<input type="submit" name="login" class="btn btn-primary" value="login">
		</form>	
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<?php //include "includes/header.php";?>
	 
    <!--USED LARGE MAJORITY OF LOGIN SECTION FROM PHP FOR BEGINNERS COURSE FROM UDEMY FOR THIS LOGIN-->
     <!--QUERY TO REQUEST IF USERS LOGIN DETAILS MATCH THE USER DATABASE-->
     <?php
		  if(isset($_POST['login'])){
			  $username= $_POST['username'];
			  $password= $_POST['password'];
			  
			  //REMOVING ANY SPECIAL CHARACTERS FROM THE STRING
			  $username= mysqli_real_escape_string($db, $username);
			  $password= mysqli_real_escape_string($db, $password);
			  
			 
			  
			  $query= "SELECT * FROM users WHERE username='{$username}'";
			  $check_user_exists =mysqli_query($db,$query);
			  
			  if(!$check_user_exists){
				  die("query failed".mysqli_error($db));
				  
			  } 
				  while($row=mysqli_fetch_array($check_user_exists)){
					  $db_user_id= $row['user_id'];
					  $db_userpass= $row['userpass'];
					  $db_username= $row['username'];
					  $db_user_role= $row['user_role'];
					}
			  
			  if($username!==$db_username && $password!==$db_userpass){
				  header("Location: index.php");

				}else if($username==$db_username && $password==$db_userpass && $db_user_role=="user"){
				   
				  $_SESSION['user_id']= $db_user_id;
				  $_SESSION['userpass']= $db_userpass;
				  $_SESSION['username']= $db_username;
				  $_SESSION['user_role']= $db_user_role;
				  
				  header("Location: my_goals.php");
				   
				  
			  }
				 
			  
			  	else if($username==$db_username && $password==$db_userpass && $db_user_role=="admin"){
					
					$_SESSION['user_id']= $db_user_id;
					$_SESSION['userpass']= $db_userpass;
					$_SESSION['username']= $db_username;
					$_SESSION['user_role']= $db_user_role;
					
					header("Location: admin/index.php");
				}
				 

//				}else{
//			  		header("Location: index.php");
//		  		}
			   
		  }

	?>
		

			

					