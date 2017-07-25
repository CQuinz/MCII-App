<!--HEADER INCLUDE-->
   <?php include "includes/header.php"?>

  
		
    
    <div class="container">
		
		<h1 class="font-weight-bold text-center">Edit My Goal</h1>
		<p>Let's create your goal</p>
		
		<!-- GRAB GOAL_ID FROM THE URL, QUERY THE DB AND DISPLAY THE RESULTS IN THE FORM( STICKY) -->
		<?php
		$edit_g_id= $_GET['edit_g_id'];
		$query= "SELECT * FROM goals WHERE goal_id = $edit_g_id";
		$show_edit_goal= mysqli_query($db,$query);

		while($row = mysqli_fetch_assoc($show_edit_goal)){
			
			//$goal_id = $row['goal_id'];
			//$goal_id = $row['goal_id'];
			$goal_title = $row['goal_title'];
			$goal_user_id = $row['goal_user_id'];
			$goal_comp_date = $row['goal_comp_date'];
			$goal_catagory = $row['goal_catagory'];
			$goal_details = $row['goal_details'];
		?>
		
		<form action="" method="post" name="create_goal">
		
		<section id="goal_details">
			
				<div class="row">
					<div class="input-group col-md-6 offset-md-3 my-3">
<!--						<label for="goal_name" class="font-weight-bold">I want to:</label>-->
						<span class="input-group-addon" id="basic-addon2">I want to:</span>
						<input type="text" class="form-control" id="goal_name" value="<?php echo "{$goal_title}"; ?>" name="goal_title" onblur="checkGoalName()">
					</div>
				</div>
			
				
			
			<!--FIRST CARD DECK----------------------------------------------------->
			
			<div class="card-deck">
		  
			  <div class="card">
				<div class="card-block text-inverse">
				  <h4 class="card-title text-center">Possibility</h4>
				  <p class="card-text">Do you believe you can successfully achieve this goal?</p>
				</div>
				
				<div class="card-footer">
				  <div class="form-group">

					<select name="goal_possibility" id="goal_possibility" class="form-control" onchange="runPossibility()">
					  	<option value="stronglyBelieve">Strongly believe</option>
						<option value="believe">Believe</option>
						<option value="unsure">Unsure</option>
						<option value="dontBelieve">Don't believe</option>
						<option value="stronglyDisbelieve">Strongly disbelieve</option>
					</select>
				  </div>
				  <!--ALERT MESSAGE FOR POSSIBILITY -->
				  
					<div id="possibilityMessage" class="alert alert-warning alert-dismissible fade show" role="alert">
						  
					</div><!--END OF DIFFICULTY ALERT MESSAGE-->
				</div>
			  </div><!--CARD-->
			  
			  <div class="card">
				<div class="card-block text-inverse">
				  <h4 class="card-title text-center">Difficulty</h4>
				  <p class="card-text">How challenging do you think it will be?</p>
				</div>
				
				<div class="card-footer">
				  <div class="form-group">
<!--					<label for="goal_difficulty" class="font-weight-bold">Difficulty:</label>-->
					<select name="goal_difficulty" id="goal_difficulty" class="form-control" onchange="checkDifficulty()">
					  	<option value="veryChallenging">Very challenging</option>
						<option value="challenging">Challenging</option>
						<option value="moderate">Moderate</option>
						<option value="easy" id="easy">Easy</option>
						<option value="tooEasy" id="tooEasy">Too easy</option>
						
					</select>
				  </div>
				  
				  <!--ALERT MESSAGE FOR DIFFICULTY -->
				  
					<div id="difficultyMessage" class="alert alert-warning alert-dismissible fade show" role="alert">
						  
					</div><!--END OF DIFFICULTY ALERT MESSAGE-->
				  
				</div>
			  </div><!--CARD-->
			  
	
			  <div class="card">

				<div class="card-block">
				  <h4 class="card-title text-center">Catagory</h4>
					<p class="card-text">What catagory would this goal belong to? If you're not sure and want to leave it blank, just select unspecified</p>
				</div>
				<div class="card-footer">
			  		<div class="form-group">
<!--					  <label for="goal_catagory" class="font-weight-bold">Catagory:</label>-->
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
				  <h4 class="card-title text-center">Type</h4>
					<p class="card-text">Will this goal have a deadline or will it be ongoing?</p>
				</div>
				<div class="card-footer">
			  		<div class="form-group">

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
						
						<textarea type="text" name="goal_details" class="form-control" rows="2">
							<?php echo "{$goal_details}"; ?>
						</textarea>
					  </div>
					</div>
				  </div>
				   <!--CARD-->

				   <div class="card" id="dateCard">
					<div class="card-block">
					  <h4 class="card-title text-center">Date</h4>
					  <p class="card-text">Ideally when would you like to have this goal completed? If the goal is ongoing, feel free to skip this question</p>  
					</div>

					<div class="card-footer">
					  <div class="form-group">

						<input type="date"  name="goal_comp_date" class="form-control">
					  </div>
					</div>
				  </div><!--CARD-->
	
				
			</div><!--END OF SECOND CARD DECK------------------------------------------------------------------------->
			<?php } ?>
			
			<div id="goal_footer" class="text-center my-5">
				<p>Now let's add the goal and move on to the next step of creating your <a href="">Action Plan!</a></p>
				<input type="submit" class="btn btn-primary" value="Update Goal" name="update_goal">
			</div>
			
		<?php 
	if($db){
		echo "we are connected";
		
	}else{
		die("no connection". mysqli_error($db));
	}
	
		if(isset($_POST['update_goal'])){
				
				$goal_title = $_POST['goal_title'];
				$goal_possibility = $_POST['goal_possibility'];
				$goal_difficulty = $_POST['goal_difficulty'];
				$goal_catagory = $_POST['goal_catagory'];
				$goal_type = $_POST['goal_type'];
				$goal_details = $_POST['goal_details'];
				$goal_comp_date = $_POST['goal_comp_date'];
				
				//$goal_status = $_POST['goal_status'];
				
				
				/*ADD CONDITIONAL TO CHECK IF GOAL TYPE IS SET TO ONGOING OR DEADLINE*/
				
				$query = "UPDATE goals SET ";
				$query .= "goal_title = '{$goal_title}', ";
				$query .= "goal_possibility = '{$goal_possibility}', ";
				$query .= "goal_difficulty = '{$goal_difficulty}', ";
				$query .= "goal_catagory = '{$goal_catagory}', ";
				$query .= "goal_details = '{$goal_details}', ";
				$query .= "goal_comp_date = '{$goal_comp_date}' ";
				$query .= "WHERE goal_id = {$edit_g_id}";

				$edit_goal = mysqli_query($db,$query);
			
			
				header("Location: my_goals.php");
		}
			
		?>
			
		</section>
		</form>
			
		
	 </div>
    
    

				
		
	
      <hr>

 <!--FOOTER INCLUDE-->
 <?php include "includes/footer.php"?>
