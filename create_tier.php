<!--HEADER INCLUDE-->
   <?php include "includes/header.php"?>

  
		
    
    <div class="container">
		
		<h1 class="font-weight-bold text-center">Create Action Steps</h1>
		<p>Let's add your plan</p>
		
		<form action="" method="post" name="create_goal">
		
		<section id="goal_details">
			
				
					
			<p class="text-center font-weight-bold"><a href="">Name of Goal</a></p>
				
			
				
			
			<!--FIRST CARD DECK----------------------------------------------------->
			
			<div class="card-deck">
		  
			  <div class="card">
				<div class="card-block text-inverse">
				  <h4 class="card-title text-center">Benifit</h4>
				  <p class="card-text">Why is this important? How will things improve or get better for you? List <strong>One Benefit</strong> to getting this goal</p>
				</div>
				
				<div class="card-footer">
				  <div class="form-group">
					<textarea type="text" placeholder="Benifit" name="goal_details" class="form-control" rows="2"></textarea>
				  </div>
				  <!--ALERT MESSAGE FOR BENIFIT -->
				  
					<div id="benifitMessage" class="alert alert-warning alert-dismissible fade show" role="alert">
						  
					</div><!--END OF DIFFICULTY ALERT MESSAGE-->
				</div>
			  </div><!--CARD-->
			  
			  <div class="card">
				<div class="card-block text-inverse">
				  <h4 class="card-title text-center">Obstacle</h4>
				  <p class="card-text">What prevents you from achieving... List ONE thing that stops you</p>
				</div>
				
				<div class="card-footer">
				  <div class="form-group">
					<textarea type="text" placeholder="What prevents you" name="goal_details" class="form-control" rows="2"></textarea>				
				  </div>
				  
				  <!--ALERT MESSAGE FOR OBSTACLE -->
				  
					<div id="obstacleMessage" class="alert alert-warning alert-dismissible fade show" role="alert">
						  
					</div><!--END OF DIFFICULTY ALERT MESSAGE-->
				  
				</div>
			  </div><!--CARD-->
			  
	
			  <div class="card">

				<div class="card-block">
				  <h4 class="card-title text-center">Plan</h4>
					<p class="card-text">What are you going to do if this <strong>Obstacle </strong> arises?</p>
					Use an If Then plan. If obstacle I will do this
				</div>
				<div class="card-footer">
			  		<div class="input-group my-3">
						<span class="input-group-addon font-weight-bold" id="basic-addon2">If:</span>
						<input type="text" class="form-control" id="goal_name" placeholder="x...." name="goal_name">
					</div>
					<div class="input-group my-3">
						<span class="input-group-addon font-weight-bold" id="basic-addon2">Then:</span>
						<input type="text" class="form-control" id="goal_name" placeholder="I will .." name="goal_name">
					</div>
			  </div><!--CARD-->
			  
			  
			  
			  
			  
			</div><!--END OF FIRST CARD DECK---------------------------------------------------------->
			
			
			<!--SECOND CARD DECK----------------------------------------------------------------------->
			
			<div class="card-deck">
			
				<div class="card">

				<div class="card-block">
				  <h4 class="card-title text-center">Type</h4>
					<p class="card-text">Will this goal have a deadline or will it be ongoing?</p>
				</div>
				<div class="card-footer">
			  		<div class="form-group">
<!--					  <label for="goal_type" class="font-weight-bold">Type:</label>-->
					  <select name="goal_type" id="goal_type" class="form-control" onchange="toggleDateVisibility()">
					  	<option value="deadline">Deadline</option>
					  	<option value="ongoing">Ongoing</option>
					  </select>
					 </div>
				</div>
			  </div><!--CARD-->
			
				<div class="card">
					<div class="card-block">
					  <h4 class="card-title text-center">Specific</h4>
					  <p class="card-text">We're going to need to get a little bit more detailed. In measurable terms - how will you know when you've reached your goal? What would you (or someone else) see, hear or feel?</p>  
					</div>

					<div class="card-footer">
					  <div class="form-group">
<!--						<label for="goal_details" class="font-weight-bold">How will you know:</label>-->
						<textarea type="text" placeholder="Success looks like" name="goal_details" class="form-control" rows="2"></textarea>
					  </div>
					</div>
				  </div><!--CARD-->

				   <div class="card" id="dateCard">
					<div class="card-block">
					  <h4 class="card-title text-center">Date</h4>
					  <p class="card-text">Ideally when would you like to have this goal completed? If the goal is ongoing, feel free to skip this question</p>  
					</div>

					<div class="card-footer">
					  <div class="form-group">
<!--						<label for="article_content" class="font-weight-bold">Completed by:</label>-->
						<input type="date"  name="goal_comp_date" class="form-control">
					  </div>
					</div>
				  </div><!--CARD-->
	
			  
			</div><!--END OF SECOND CARD DECK------------------------------------------------------------------------->
			
			
			<div id="goal_footer" class="text-center my-5">
				<p>Now let's add the goal and move on to the next step of creating your <a href="">Action Plan!</a></p>
				<input type="submit" class="btn btn-primary" value="Add Goal" name="add_goal">
			</div>
			
		<?php 
	if($db){
		echo "we are connected";
		
	}else{
		die("no connection". mysqli_error($db));
	}
	
//			if(isset($_POST['add_goal'])){
//				
//				$goal_title = $_POST['goal_name'];
//				$goal_details = $_POST['goal_details'];
//				$goal_comp_date = $_POST['goal_comp_date'];
//				$goal_type = $_POST['goal_type'];
//				//$goal_status = $_POST['goal_status'];
//				$goal_catagory = $_POST['goal_catagory'];
				
				/*ADD CONDITIONAL TO CHECK IF GOAL TYPE IS SET TO ONGOING OR DEADLINE*/
				
//				$query = "INSERT INTO goals (goal_title, goal_details, goal_finish, goal_type, goal_status, goal_catagory) ";
//				$query .="VALUES ('{$goal_title}', '{$goal_details}',{$goal_comp_date},'{$goal_type}','Active','{$goal_catagory}')";
//				
//				$add_goal_query =mysqli_query($db,$query);
//		}
			
		?>
			
		</section>
		</form>
			
		
	 </div>
    
    

				
		
	
      <hr>

 <!--FOOTER INCLUDE-->
 <?php include "includes/footer.php"?>
