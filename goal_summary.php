<!--HEADER INCLUDE-->
   <?php include "includes/header.php"?>

  
		
    
    <div class="container">
		
		<h1 class="font-weight-bold text-center">Goal Summary</h1>
		
		<section id="goal_summary">
			<!--GET THE GOAL DATA AND DISPLAY IT -->
				<?php
				//GET THE GOAL_ID
				$goal_id = $_GET['g_id'];
				//CREATE QUERY SHOW ALL GOALS
				$query = "SELECT * FROM goals WHERE goal_id = {$goal_id}";

				//CONNECT QUERY TO DB
				$show_all_goals= mysqli_query($db,$query);

				//Loop through and display results
				while($row =mysqli_fetch_assoc($show_all_goals)){

					//Creating variables for the array
					//$goal_id = $row['goal_id'];
					//$goal_id = $row['goal_id'];
					$goal_title = $row['goal_title'];
					$goal_user_id = $row['goal_user_id'];
					$goal_start_date = $row['goal_start_date'];
					$goal_comp_date = $row['goal_comp_date'];
					$goal_status = $row['goal_status'];
					$goal_catagory = $row['goal_catagory'];
					$goal_details = $row['goal_details'];
					$goal_difficulty = $row['goal_difficulty'];
					$goal_possibility = $row['goal_possibility'];
					
					/*CHANGE POSSIBILITY VALUES TO MAKE THEM MORE READABLE ON DISPLAY*/
					switch($goal_possibility){
						case "stronglyBelieve";
						$goal_possibility= "strongly believe";
						break;
							
						case "unsure";
						$goal_possibility= "am unsure";
						break;
							
						case "dontBelieve";
						$goal_possibility= "don't believe";
						break;
							
						case "stronglyDisbelieve";
						$goal_possibility= "strongly disbelieve";
						break;
					}
					
					/*CHANGE POSSIBILITY VALUES TO MAKE THEM MORE READABLE ON DISPLAY*/
					switch($goal_difficulty){
						case "veryChallenging";
						$goal_difficulty= "very challenging";
						break;
							
						case "moderate";
						$goal_difficulty= "moderately difficult";
						break;
							
						case "dontBelieve";
						$goal_difficulty= "don't believe";
						break;
							
						case "tooEasy";
						$goal_difficulty= "too easy";
						break;
					}
					
					if($goal_comp_date ==0000-00-00){
						$goal_comp_date ="";
					}else{
						$goal_comp_date ="<strong>By: </strong>'{$goal_comp_date}'";
					}

				?>
					
			<h3 class="text-center font-weight-bold"><?php echo "{$goal_title}"; ?></h3>
				
			
			<div class="row">
				<div class="col-md-8 offset-md-2">
				
				
				
					<!--FIRST CARD DECK----------------------------------------------------->

					<div class="card-deck text-center">

					  <div class="card">
						<div class="card-block text-inverse">
						  <h4 class="card-title text-center">Goal Details</h4>
						  <p class="card-text"> I want to:  <strong><?php echo "{$goal_title}"; ?></strong> <?php echo "{$goal_comp_date}"; ?></p>
						  <hr>
						  <p class="card-text"> I <strong><?php echo "{$goal_possibility}"; ?></strong> I can achive this goal and it will <strong><?php echo "{$goal_difficulty}"; ?></strong></p>
						  <hr>
						  <p class="card-text">I will know I'm successful when: <strong><?php echo "{$goal_details}"; ?></strong></p>

						</div>

						<div class="card-footer">
							<p class="card-text"><a href="edit_goal.php?edit_g_id=<?php echo $goal_id; ?>">Edit</a> - <a href="my_goals.php?delete_goal_id=<?php echo $goal_id; ?>">Delete</a></p>
						</div>
						<button class="btn" type="button" href ></button>
					  </div><!--CARD-->
					  
					  
					  <?php }?><!--CLOSE SHOW ALL GOALS LOOP-->
					  
					  <!--DELETE GOAL QUERY-->
					<?php 
					if(isset($_GET['delete_goal_id'])){
						$query= "DELETE FROM goals WHERE goal_id = $goal_id";
						$deleteGoalQuery= mysqli_query($db,$query);
						header("Location: my_goals.php");
						}
					?>
					
					

					</div><!--END OF FIRST CARD DECK------------------------------------------------------------------------->
				</div><!--end of col-md-8-->
			</div><!--end of row-->
			
			
			<!--SECOND CARD DECK----------------------------------------------------->
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
			<div class="row">
				<div class="col-md-8 offset-md-2">
				
					
					
					<div class="card-deck text-center">

					  <div class="card">
						<div class="card-block text-inverse">
						  <h4 class="card-title text-center">Action plan</h4>
						  
						  <p class="card-text text-left "><strong>Benefit: </strong><span><?php echo "{$benefit}"; ?></span> </p>
						  <hr>
						   <p class="card-text text-left "><strong>Obstacle: </strong><span><?php echo "{$obstacle}"; ?></span> </p>
						  <hr>
						  <p class="card-text text-left "><strong>Plan: </strong><span><?php echo "{$plan}"; ?></span> </p>
						 

						</div>

						<div class="card-footer">
							<p class="card-text"><a href="edit_tier.php?edit_tier_id=<?php echo $tier_id; ?>&g_id=<?php echo $goal_id; ?>">Edit</a> - <a href="goal_summary.php?delete_goal_tier_id=<?php echo $tier_id; ?>&g_id=<?php echo $goal_id; ?>">Delete</a></p>
						</div>
						
					
					  </div><!--CARD-->

					</div><!--END OF SECOND CARD DECK------------------------------------------------------------------------->
				</div><!--end of col-md-8-->
			</div><!--end of row-->	
			
			<?php } ?><!--CLOSING ALL GOAL_TIERS LOOP-->
			
			<!--DELETE GOAL_TIER QUERY-->
					<?php 
					if(isset($_GET['delete_goal_tier_id'])){
						$query= "DELETE FROM goal_tier WHERE tier_id = $tier_id";
						$deleteTierQuery= mysqli_query($db,$query);
						header("Location: goal_summary.php?g_id=$goal_id");
						}
					?>
			
			<div id="goal_footer" class="text-center my-5">
				<p>Now let's add the goal and move on to the next step of creating your <a href="">Action Plan!</a></p>
				<p><a href="my_goals.php" class="btn btn-link">My goals</a>|<a href="create_tier.php?g_id=<?php echo $goal_id;?>" class="btn btn-link">Add tier</a></p>
				<input type="submit" class="btn btn-danger" value="Delete Goal" name="add_another_tier">
			</div>
			
		
			
		</section>
		
			
		
	 </div>
    
    

				
		
	
      <hr>

 <!--FOOTER INCLUDE-->
 <?php include "includes/footer.php"?>
