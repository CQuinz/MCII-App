<!--HEADER INCLUDE-->
   <?php include "includes/header.php"?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="">
    	<div class="container">
      		<div class="jumbo-text text-center">
				<h1 class="display-3 font-weight-bold">My Goals</h1>
				<p>Here is an overview of all the goals you have currently created</p>
				
				<p class="btn btn-link"><a href="create_goal.php">Create Goal</a></p>
				
			</div>
	 	</div>
    </div>
    
<!--ARTICLES SECTION-->
  
   <section id="articles">
    <div class="container">
      <div class="row">
      
      <!--ARTICLES-->
      	<div class="col-md-10 offset-md-1">
      	
      
      
      
      	
      	<!--QUERY ALL GOALS FOR THIS USER AND DISPLAY DATA IN A SET OF TABLES (OUTTER TABLE IS GOALS - INNER IS GOAL_TIERS) -->
      	
      	<?php
		//CREATE QUERY SHOW ALL GOALS
		$goal_user_id = $_SESSION['user_id'];
		
		$query = "SELECT * FROM goals WHERE goal_user_id = {$goal_user_id}";

		//CONNECT QUERY TO DB
		$show_user_goals= mysqli_query($db,$query);

		//Loop through and display results
		while($row =mysqli_fetch_assoc($show_user_goals)){

			//Creating variables for the array
			
			$goal_id = $row['goal_id'];
			//$goal_id = $row['goal_id'];
			$goal_title = $row['goal_title'];
			$goal_user_id = $row['goal_user_id'];
			$goal_start_date = $row['goal_start_date'];
			$goal_comp_date = $row['goal_comp_date'];
			$goal_status = $row['goal_status'];
			$goal_catagory = $row['goal_catagory'];
			
			
			
		?>
      	
			<!--OUTTER TABLE FOR GOALS-->
			<div class="card">
				<div class="w-100 p-2 bg-secondary">
					<h5 class="text-center"><strong>Goal: </strong><i><?php echo "{$goal_title}"; ?></i></h5>
					<p class="text-center"><a href="goal_summary.php?g_id=<?php echo $goal_id?>">Goal Details</a></p>
				</div>
				<table class="table table-striped table-bordered table-hover text-center">
					<thead class="bg-primary text-white">
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
					
				

					<tbody>
						<tr>
							<td><?php echo "{$goal_title}"; ?></td>
							<td><?php echo "{$goal_status}"; ?></td>	
							<td><?php echo "{$goal_catagory}"; ?></td>
							<td><?php echo "{$goal_start_date}"; ?></td>
							<td><?php echo "{$goal_comp_date}"; ?></td>
							<td><?php echo "<a href='edit_goal.php?edit_g_id=$goal_id'>Edit</a>"; ?></td>
							<td><?php echo "<a href='my_goals.php?delete_goal_id=$goal_id'>Delete</a>"; ?></td>
						</tr>
					</tbody>
					

					

					<!--INNER TABLE FOR GOAL_TIERS-->
						<?php
						//CREATE QUERY SHOW ALL GOAL_TIERS
						$queryInner = "SELECT * FROM goal_tier WHERE goal_id = $goal_id";

						//CONNECT QUERY TO DB
						$show_users_tiers= mysqli_query($db,$queryInner);

						//Loop through and display results
						while($row =mysqli_fetch_assoc($show_users_tiers)){

							//Creating variables for the array
							$tier_id = $row['tier_id'];
							//$goal_id = $row['goal_id'];
							$benefit = $row['benefit'];
							$obstacle = $row['obstacle'];
							$plan = $row['plan'];

						?>


					<table class="table table-striped">
						<thead class="bg-info text-white">
							<tr class="text-center">
								<th>Benefit</th>
								<th>Obstacle</th>
								<th>Plan</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php echo "{$benefit}"; ?></td>
								<td><?php echo "{$obstacle}"; ?></td>	
								<td><?php echo "{$plan}"; ?></td>
								<td><?php echo "<a href='index.php?source=edit_article&edit=$goal_id'>Edit</a>"; ?></td>
								<td><?php echo "<a href='my_goals.php?delete_goal_tier_id=$goal_id'>Delete</a>"; ?></td>
								
								
							</tr>
						</tbody>
					</table>
					<?php } ?><!--CLOSE GOAL_TIER WHILE INNER LOOP -->
					
				</table>
				<button class="btn btn-secondary"><a href="create_tier.php?g_id=<?php echo $goal_id; ?>">Add Action Plan</a></button>
			</div>
			<br><br>
			
			
			
			
		 	<?php } ?><!--CLOSE GOAL WHILE OUTTER LOOP -->
		 	
		 	<!--DELETE GOAL_TIER QUERY-->
			<?php 
			if(isset($_GET['delete_goal_tier_id'])){
				$query= "DELETE FROM goal_tier WHERE tier_id = $tier_id";
				$deleteGoalTierQuery= mysqli_query($db,$query);
				header("Location: my_goals.php");
				}
			?>
		 	
		 	<!--DELETE GOAL QUERY-->
			<?php 
			if(isset($_GET['delete_goal_id'])){
				$query= "DELETE FROM goals WHERE goal_id = $goal_id";
				$deleteGoalQuery= mysqli_query($db,$query);
				header("Location: my_goals.php");
				}
			?>
		 		
		 			
					
					
		 		
		 	<button class="btn btn-success"><a class="text-white" href="create_goal.php">Create new goal</a></button>
     		
     		
      		
      	</div>
      	
      	
      </div>
      
    </div>
	</section>
      <hr>

 <!--FOOTER INCLUDE-->
 <?php include "includes/footer.php"?>
