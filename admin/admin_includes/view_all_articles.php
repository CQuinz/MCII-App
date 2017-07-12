			<!--VIEW ALL ARTICLES-->
			
			<h3 class="text-center">View All Posts</h3>
			
	 		<table class="table table-striped table-hover">
		 		<thead class="thead-inverse">
		 			<tr>
						<th>Article ID</th>
						<th>Article Title</th>
						<th>Article Author</th>
						<th>Article Date</th>
						<th>Article Body</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
		 		</thead>
		 		
		 		<?php
				//CREATE QUERY SHOW ALL ARTICLES
				$query = "SELECT * FROM articles";
				
				//CONNECT QUERY TO DB
				$show_all_articles= mysqli_query($db,$query);
				
				//Loop through and display results
				while($row =mysqli_fetch_assoc($show_all_articles)){
			
					//Creating variables for the array
					$article_id = $row['article_id'];
					$article_title = $row['article_title'];
					$article_author = $row['article_author'];
					$article_date = $row['article_date'];
					$article_body_abbv = substr($row['article_body'],0, 20);
			
		?>
				
		 		
		 		<tbody>
		 			<tr>
						<td><?php echo "{$article_id}"; ?></td>
						<td><?php echo "{$article_title}"; ?></td>
						<td><?php echo "{$article_author}"; ?></td>
						<td><?php echo "{$article_date}"; ?></td>
						<td><?php echo "{$article_body_abbv}"; ?></td>
						<td><a href="#">Edit</a></td>
						<td><a href="#">Delete</a></td>
		 			</tr>
		 			<?php } //Loop through the results ?>
		 			
		 		</tbody>
		 		
		 	</table>