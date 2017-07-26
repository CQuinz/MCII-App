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
				//CREATE QUERY SHOW ALL ARTICLES
				$query = "SELECT * FROM users, goals ";
				$query .=" INNER JOIN goal_user_id ON user_id";
				
				//CONNECT QUERY TO DB
				$show_all_users= mysqli_query($db,$query);
				
				//Loop through and display results
				while($row =mysqli_fetch_assoc($show_all_users)){
			
					//Creating variables for the array
					$user_id = $row['user_id'];
					$username = $row['username'];
					$userpass = $row['userpass'];
					$user_role = $row['user_role'];
					$goal_title = $row['goal_title'];
					
			
		?>
				
		 		
		 		<tbody>
		 			<tr>
						<td><?php echo "{$user_id}"; ?></td>
						<td><?php echo "{$username}"; ?></td>
						<td><?php echo "{$userpass}"; ?></td>
						<td><?php echo "{$user_role}"; ?></td>
						<td><?php echo "{$goal_title}"; ?></td>
						<td><?php echo "{$article_tags}"; ?></td>	
						<td><?php// echo "{$article_status}"; ?></td>
						<td><?php// echo "<a href='index.php?source=edit_article&edit={$article_id}'>Edit</a>"; ?></td>
						<td><?php// echo "<a href='index.php?source=view_articles&delete={$article_id}'>Delete</a>"; ?></td>
		 			</tr>
		 			<?php } //Loop through the results ?>
		 			
		 			<?php 
					//DELETE ARTICLES QUERY
					if(isset($_GET['delete'])){
						
						$delete_article_key = $_GET['delete'];
						$query ="DELETE FROM articles WHERE article_id= {$delete_article_key}";
						$delete_article_query = mysqli_query($db,$query);
						
						header("Location: index.php?source=view_articles");
						
					}
					
					?>
		 			
		 			
		 			
		 		</tbody>
		 		
		 	</table>