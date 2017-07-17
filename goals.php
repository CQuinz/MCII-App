<!--HEADER INCLUDE-->
   <?php include "includes/header.php"?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
    	<div class="container">
      		<div class="jumbo-text text-center">
				<h1 class="display-3 font-weight-bold">My Goals</h1>
				<p>Here is an overview of all the goals you have currently created</p>
				
			</div>
	 	</div>
    </div>
    
<!--ARTICLES SECTION-->
  
   <section id="articles">
    <div class="container">
      <div class="row">
      
      <!--ARTICLES-->
      	<div class="col-md-10 offset-md-1">
      	
      	<h3 class="text-center">My Goals</h3>
			
	 		<table class="table table-striped table-bordered table-hover">
		 		<thead class="thead-inverse">
		 			<tr>
						
						<th>Goal Title</th>
						<th>Goal Status</th>
						<th>Goal Catagory</th>
						<th>Goal Start</th>
						<th>Goal Finish</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
		 		</thead>
		 		
		 		<?php
				//CREATE QUERY SHOW ALL ARTICLES
				$query = "SELECT * FROM goals";
				
				//CONNECT QUERY TO DB
				$show_all_goals= mysqli_query($db,$query);
				
				//Loop through and display results
				while($row =mysqli_fetch_assoc($show_all_goals)){
			
					//Creating variables for the array
					$goal_id = $row['goal_id'];
					//$goal_id = $row['goal_id'];
					$goal_title = $row['goal_title'];
					$goal_user_id = $row['goal_user_id'];
					$goal_start = $row['goal_start'];
					$goal_finish = $row['goal_finish'];
					//$article_body_abbv = substr($row['article_body'],0, 20);
					$goal_status = $row['goal_status'];
					$goal_catagory = $row['goal_catagory'];
			
		?>
				
		 		
		 		<tbody>
		 			<tr>
						<td><?php echo "{$goal_title}"; ?></td>
						<td><?php echo "{$goal_status}"; ?></td>	
						<td><?php echo "{$goal_catagory}"; ?></td>
						<td><?php echo "{$goal_start}"; ?></td>
						<td><?php echo "{$goal_finish}"; ?></td>
						<td><?php //echo "<a href='index.php?source=edit_article&edit={$article_id}'>Edit</a>"; ?></td>
						<td><?php //echo "<a href='index.php?source=view_articles&delete={$article_id}'>Delete</a>"; ?></td>
		 			</tr>
		 		<thead class="thead-default">
		 			<tr>
		 				<th>Benifit</th>
		 				<th>Obstacle</th>
		 				<th>Plan</th>
		 			</tr>
		 		</thead>		
		 			<?php } //Loop through the results ?>
		 			
		 			<?php 
					//DELETE ARTICLES QUERY
//					if(isset($_GET['delete'])){
//						
//						$delete_article_key = $_GET['delete'];
//						$query ="DELETE FROM articles WHERE article_id= {$delete_article_key}";
//						$delete_article_query = mysqli_query($db,$query);
//						
//						header("Location: index.php?source=view_articles");
//						
//					}
					
					?>
		 			
		 			
		 			
		 		</tbody>
		 		
		 	</table>
      		
      	</div>
      	
      	
      </div>
      
    </div>
	</section>
      <hr>

 <!--FOOTER INCLUDE-->
 <?php include "includes/footer.php"?>
