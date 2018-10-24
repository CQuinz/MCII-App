<h3 class="text-center">View All Users</h3>
			
	 		<table class="table table-striped table-hover">
		 		<thead class="thead-inverse">
		 			<tr>
						<th>User ID</th>
						<th>Username</th>
						<th>User Password</th>
						<th>User Role</th>
						<th>No of Goals</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
		 		</thead>
		 		
		 		<?php
				//CREATE QUERY SHOW ALL USERS
					//$query ="SELECT * FROM users, goals ";
					//$query ."=LEFT JOIN goals ON goals.goal_user_id = users.user_id";
				$query ="SELECT * FROM users ";
				
				//CONNECT QUERY TO DB
				$show_all_users= mysqli_query($db,$query);
				
				//Loop through and display results
				while($row =mysqli_fetch_assoc($show_all_users)){
			
					//Creating variables for the array
					$user_id = $row['user_id'];
					$username = $row['username'];
					$userpass = $row['userpass'];
					$user_role = $row['user_role'];
					//$goal_title= $row['goal_title'];
					
					
					
					
					
			
		?>
			<?php
					//SHOW GOAL COUNT FOR EACH USER
		 			$query="SELECT goal_title FROM goals WHERE goal_user_id = $user_id";
					$show_goal_titles= mysqli_query($db,$query);
					
					//while($row= mysqli_fetch_assoc($show_goal_titles)){
						$num_of_goals= mysqli_num_rows($show_goal_titles);
					
		 			
					//}
					?>
		 		
		 		<tbody>
		 			<tr>
						<td><?php echo "{$user_id}"; ?></td>
						<td><?php echo "{$username}"; ?></td>
						<td><?php echo "{$userpass}"; ?></td>
						<td><?php echo "{$user_role}"; ?></td>
						<td><?php echo $num_of_goals; ?></td>
						
						<td><?php echo "<a href='index.php?source=edit_user&edit_id={$user_id}'>Edit</a>"; ?></td>
						<td><?php echo "<a href='index.php?source=view_all_users&delete_id={$user_id}'>Delete</a>"; ?></td>
		 			</tr>
		 			
		 			
		 			<?php } //Loop through the results ?>
		 			
		 			
		 			
		 			<?php 
					//DELETE USER QUERY
					if(isset($_GET['delete_id'])){
						$delete_user_key = $_GET['delete_id'];
						
						//CHECK IF ADMIN MAY DELETE THEMSELVES
						if($delete_user_key == $_SESSON['user_id']){
							echo "<h3>Sorry, you can't delete your own account while logged into it!</h3>";
						}else{
						
						
						$query ="DELETE FROM users WHERE user_id= {$delete_user_key}";
						$delete_article_query = mysqli_query($db,$query);
						
						header("Location: index.php?source=view_all_users");
						}
					}
					
					?>
		 			
		 			
		 			
		 		</tbody>
		 		
		 	</table>