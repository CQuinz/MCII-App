<h3 class="text-center">View All Hints</h3>
			
	 		<table class="table table-striped table-hover">
		 		<thead class="thead-inverse">
		 			<tr>
						<th>Hint ID</th>
						<th>Hint Name</th>
						<th>Hint Content</th>
						<th>Hint Status</th>
						<th>Hint_link</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
		 		</thead>
		 		
		 		<?php
				//CREATE QUERY SHOW ALL tier_hintS
				$query = "SELECT * FROM tier_hints";
				
				//CONNECT QUERY TO DB
				$show_all_tier_hints= mysqli_query($db,$query);
				
				//Loop through and display results
				while($row =mysqli_fetch_assoc($show_all_tier_hints)){
			
					//Creating variables for the array
					$tier_hints_id = $row['tier_hints_id'];
					$hint_article_id = $row['hint_article_id'];
					$tier_hints_name = $row['tier_hints_name'];
					$tier_hints_content = substr($row['tier_hints_content'],0, 20);
					$tier_hints_status = $row['hint_status'];
					
					//DISPLAY THE ARTICLE LINK QUERY
					$query="SELECT article_link FROM articles WHERE article_id = {$hint_article_id}";
					//$tier_hints_link_article = $row['tier_hints_link_article'];
					$display_article_link =mysqli_query($db,$query);
					while($link= mysqli_fetch_assoc($display_article_link)){
						$article_link= $link['article_link'];
					}
				
				?>
				
		 		
		 		<tbody>
		 			<tr>
						<td><?php echo "{$tier_hints_id}"; ?></td>
						<td><?php echo "{$tier_hints_name}"; ?></td>
						<td><?php echo "{$tier_hints_content}"; ?></td>
						<td><?php echo "{$tier_hints_status}"; ?></td>
						<td><?php echo "{$article_link}"; ?></td>
						<td><?php echo "<a href='index.php?source=edit_hint&edit_hint_id={$tier_hints_id}'>Edit</a>"; ?></td>
						<td><?php echo "<a href='index.php?source=view_all_hints&delete_tier={$tier_hints_id}'>Delete</a>"; ?></td>
		 			</tr>
		 			<?php } //Loop through the results ?>
		 			
		 			<?php 
					//DELETE tier_hintS QUERY
					if(isset($_GET['delete_tier'])){
						
						$delete_tier_hints_key = $_GET['delete_tier'];
						$query ="DELETE FROM tier_hints WHERE tier_hints_id= {$delete_tier_hints_key}";
						$delete_tier_hints_query = mysqli_query($db,$query);
						
						header("Location: index.php?source=view_all_hints");
						
					}
					
					?>
		 			
		 			
		 			
		 		</tbody>
		 		
		 	</table>