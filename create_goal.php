<!--HEADER INCLUDE-->
   <?php include "includes/header.php"?>

  <script type="application/javascript">
	  
			function checkPossibility(){
				var showAlertPossibility =false;
				var possibilityMessage ="";
				var possibilityValue = document.getElementById("goal_difficulty").value;
				
				
				switch(possibilityValue){
					case "veryChallenging":
					possibilityMessage = "<p><strong>Great!!</strong> This goal will push you. As it is <strong><i>Very Challenging </i></strong>do consider possibly breaking it down into smaller sub-goals.<p>";
					break;
						
					case "challenging":
					possibilityMessage = "<p><strong>Excellent!!</strong> A goal that is <strong><i>Challenging</i></strong> can more effectively mobilize your inner resources.<p>";
					break;
						
					case "moderate":
					possibilityMessage = "<p><strong>Good!</strong> There is nothing wrong with having a goal with a <strong><i>Moderate</i></strong> level of difficulty<p>";
					break;
						
					default:
					possibilityMessage ="";
				}
				


				if(showAlertPossibility =true){
						document.getElementById("difficultyMessage").style.display="inline";
						document.getElementById("difficultyMessage").innerHTML=possibilityMessage;
				}
				
			}
				
	
	 
		
			
//			function checkGoalName(){
//				var goalNameValue = document.getElementById("goal_name").value;
//				if(goalNameValue == "magic"){
//					alert("Magic!!");
//				}else if(goalNameValue == "stupid"){
//					alert("Stupid!!");
//				}else{
//				alert("All good!");
//				}
//				
//			}
</script>
		
    
    <div class="container">
		
		<h1 class="font-weight-bold text-center">Create My Goal</h1>
		<p>Let's create your goal</p>
		
		<form action="" method="post" name="create_goal">
		
		<section id="goal_details">
			
				<div class="row">
					<div class="input-group col-md-6 offset-md-3 my-3">
<!--						<label for="goal_name" class="font-weight-bold">I want to:</label>-->
						<span class="input-group-addon" id="basic-addon2">I want to:</span>
						<input type="text" class="form-control" id="goal_name" placeholder="enter goal here" name="goal_name" onblur="checkGoalName()">
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
<!--					<label for="goal_possibility" class="font-weight-bold">Possibility:</label>-->
					<select name="goal_type" id="" class="form-control">
					  	<option value="stronglyBelieve">Strongly believe</option>
						<option value="believe">Believe</option>
						<option value="unsure">Unsure</option>
						<option value="don'tBelieve">Don't believe</option>
						<option value="stronglyDisbelieve">Strongly disbelieve</option>
					</select>
				  </div>
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
					<select name="goal_difficulty" id="goal_difficulty" class="form-control" onchange="checkPossibility()">
					  	<option value="veryChallenging">Very challenging</option>
						<option value="challenging">Challenging</option>
						<option value="moderate">Moderate</option>
						<option value="easy">Easy</option>
						<option value="tooEasy">Too easy</option>
					</select>
				  </div>
				  
				  <!--ALERT MESSAGE FOR DIFFICULTY -->
				  
					<div id="difficultyMessage" class="alert alert-warning alert-dismissible fade show" role="alert">
<!--
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span id="difficultyX" aria-hidden="true">&times;</span>
						  </button>
-->
						  
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
<!--					  <label for="goal_type" class="font-weight-bold">Type:</label>-->
					  <select name="goal_type" id="" class="form-control">
					  	<option value="ongoing">Ongoing</option>
						<option value="deadline">Deadline</option>
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

				   <div class="card">
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
