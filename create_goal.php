<!--HEADER INCLUDE-->
   <?php include "includes/header.php"?>

  
    
    <div class="container">
		
		<h1 class="font-weight-bold text-center">Create My Goal</h1>
		<p>Let's create your goal</p>
		
		<form action="" method="post">
		
		<section id="goal_details">
		
				
			
			<!--FIRST CARD DECK----------------------------------------------------->
			
			<div class="card-deck">
		  
			  <div class="card">
				<div class="card-block">
				  <h4 class="card-title text-center">Goal Name</h4>
				  <p class="card-text">Let's create a name for this goal. What do you want to achieve?</p>
				</div>
				
				<div class="card-footer">
				  <div class="form-group">
					<label for="goal_name" class="font-weight-bold">Goal:</label>
					<input type="text" class="form-control" placeholder="Name of goal" name="goal_name">
				  </div>
				</div>
			  </div><!--CARD-->
			  
			    <div class="card">

				<div class="card-block">
				  <h4 class="card-title text-center">Goal Type</h4>
					<p class="card-text">Will this goal have a deadline or will it be ongoing?</p>
				</div>
				<div class="card-footer">
			  		<div class="form-group">
					  <label for="goal_type" class="font-weight-bold">Type:</label>
					  <select name="goal_type" id="" class="form-control">
					  	<option value="ongoing">Ongoing</option>
						<option value="deadline">Deadline</option>
					  </select>
					 </div>
				</div>
			  </div><!--CARD-->
			  
			  
			  <div class="card">
<!--				<img class="card-img-top" src="..." alt="Card image cap">-->
					
				<div class="card-block">
				  <h4 class="card-title text-center">Goal Catagory</h4>
					<p class="card-text">What catagory would this goal belong to? If you're not sure and want to leave it blank, just select unspecified</p>
				</div>
				<div class="card-footer">
			  		<div class="form-group">
					  <label for="goal_catagory" class="font-weight-bold">Catagory:</label>
					  <select name="goal_catagory" id="" class="form-control">
					  	<option value="unspecified">Unspecified</option>
						<option value="health">Health</option>
						<option value="relationship">Relationship</option>
						<option value="finiancial">Finiancial</option>
						<option value="educational">Educational</option>
						<option value="misc">Miscellenious</option>
					  </select>
					 </div>
				</div>
			  </div><!--CARD-->
			  
			  
			</div><!--END OF FIRST CARD DECK---------------------------------------------------------->
			
			
			<!--SECOND CARD DECK----------------------------------------------------------------------->
			
			<div class="card-deck">
			
				<div class="card">
					<div class="card-block">
					  <h4 class="card-title text-center">Get Specific</h4>
					  <p class="card-text">We're going to need to get a little bit more detailed. In measurable terms - how will you know when you've reached your goal? What would you (or someone else) see, hear or feel?</p>  
					</div>

					<div class="card-footer">
					  <div class="form-group">
						<label for="goal_details" class="font-weight-bold">How will you know:</label>
						<textarea type="text" placeholder="Success looks like" name="goal_details" class="form-control" rows="2"></textarea>
					  </div>
					</div>
				  </div><!--CARD-->

				   <div class="card">
					<div class="card-block">
					  <h4 class="card-title text-center">Set a Date</h4>
					  <p class="card-text">Ideally when would you like to have this goal completed? If the goal is ongoing, feel free to skip this question</p>  
					</div>

					<div class="card-footer">
					  <div class="form-group">
						<label for="article_content" class="font-weight-bold">Completed by:</label>
						<input type="date"  name="goal_comp_date" class="form-control">
					  </div>
					</div>
				  </div><!--CARD-->
	
			  
			</div><!--END OF SECOND CARD DECK------------------------------------------------------------------------->
			
			
			<div id="goal_footer" class="text-center my-5">
				<p>Now let's add this goal and move on the the next step of creating your <a href="">Action Plan!</a></p>
				<input type="submit" class="btn btn-primary" value="Add Goal" name="add_goal">
			</div>
			
		<?php 
	if($db){
		echo "we are connected";
		
	}else{
		die("no connection". mysqli_error($db));
	}
	
			if(isset($_POST['add_goal'])){
				
				$goal_title = $_POST['goal_name'];
				$goal_details = $_POST['goal_details'];
				$goal_comp_date = $_POST['goal_comp_date'];
				$goal_type = $_POST['goal_type'];
				//$goal_status = $_POST['goal_status'];
				$goal_catagory = $_POST['goal_catagory'];
				
				/*ADD CONDITIONAL TO CHECK IF GOAL TYPE IS SET TO ONGOING OR DEADLINE*/
				
				$query = "INSERT INTO goals (goal_title, goal_details, goal_finish, goal_type, goal_status, goal_catagory) ";
				$query .="VALUES ('{$goal_title}', '{$goal_details}',{$goal_comp_date},'{$goal_type}','Active','{$goal_catagory}')";
				
				$add_goal_query =mysqli_query($db,$query);
		}
			
		?>
			
		</section>
		</form>
			
		
		
	 </div>
    
    

				
		
	
      <hr>

 <!--FOOTER INCLUDE-->
 <?php include "includes/footer.php"?>
