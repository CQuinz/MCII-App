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
				  <h4 class="card-title text-center">Benefit</h4>
				  <p class="card-text">Why is this important? How will things improve or get better for you? List <strong>One Benefit</strong> to getting this goal</p>
				</div>
				
				<div class="card-footer">
				  <div class="form-group">
					<textarea type="text" placeholder="Benifit" name="benefit" class="form-control" rows="2"></textarea>
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
					<textarea type="text" placeholder="What prevents you" name="obstacle" class="form-control" rows="2"></textarea>				
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
						<input type="text" class="form-control"  placeholder="x...." name="plan_if">
					</div>
					<div class="input-group my-3">
						<span class="input-group-addon font-weight-bold" id="basic-addon2">Then:</span>
						<input type="text" class="form-control"  placeholder="I will .." name="plan_then">
					</div>
			  </div>
			 
			</div><!--CARD-->
			
			  
			</div><!--END OF FIRST CARD DECK------------------------------------------------------------------------->
			
			<?php
			//QUERY TO GET ALL THE TIER_HINTS AND DISPLAY IN THE HINTBOX CONTENT SLIDER
			$query="SELECT * FROM tier_hints";
			$select_all_tier_hints = mysqli_query($db,$query);
			
			?>
			
			
			<!--HINTBOX CONTENT SLIDER ------------------------------------------------------------------------------>
			<!--Modified bootstrap carousel-->
			<div id="hintBox" class="col-md-6 offset-md-3 mt-3">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner rounded" role="listbox">
				  	
					<div class="carousel-item active">
						<div class="px-4 text-center">
						  <h4>Hint 2</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor reprehenderit amet quis qui cupiditate cum eveniet repellat sit laborum ea, a, ipsum maiores obcaecati tenetur doloribus nostrum vero facilis. Rem! <a href="">learn more</a>
							</p>
						</div>
					</div>

				  
				  <?php 
				  //loop through carosel items and display tier_hints
//				$count_loop = 0;
				 while($row = mysqli_fetch_assoc($select_all_tier_hints)){
					$tier_hints_name= $row['tier_hints_name'];
					$tier_hints_content= $row['tier_hints_content'];
					$tier_hints_link_article= $row['tier_hints_link_article'];
					 
//					$count_loop++;
//					 echo $count_loop;
//					
//					if($count_loop ==1){
//						$class_active = "active";	
//					}elseif(key($row)>1){
//						$class_active = "";
//					}
					
					?> 
					
					<div class="carousel-item <?php echo "{$class_active}"; ?>">
						<div class="px-4 text-center">
							<h4><?php echo "{$tier_hints_name}"; ?></h4>
							<p><?php echo "{$tier_hints_content}"; ?><a href="">learn more</a>
							</p>
						</div>
					</div>
					<?php } ?>
									
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>
			</div><!--End of hintBox-->
			
			
			<div id="goal_footer" class="text-center my-5">
				<p>Now let's add the goal and move on to the next step of creating your <a href="">Action Plan!</a></p>
				<input type="submit" class="btn btn-primary" value="Finish" name="finish">
				<input type="submit" class="btn btn-danger" value="Add another tier" name="add_another_tier">
			</div>
			
		<?php 
	if($db){
		echo "we are connected";
		
	}else{
		die("no connection". mysqli_error($db));
	}
	
		if(isset($_POST['add_another_tier']) || isset($_POST['finish'])){
				
				$benefit = $_POST['benefit'];
				$obstacle = $_POST['obstacle'];
				$plan_if = $_POST['plan_if'];
				$plan_then = $_POST['plan_then'];
				$if_then_plan ="If " .$plan_if ." Then " .$plan_then;
			
				$goal_id = $_GET['g_id'];
				
				
				
				$query = "INSERT INTO goal_tier (goal_id, benefit, obstacle, plan) ";
				$query .="VALUES ($goal_id, '{$benefit}','{$obstacle}', '{$if_then_plan}')";
				
				$add_tier_query =mysqli_query($db,$query);
			
				/*GET THE GOAL_ID AND PASS IT INTO THE URL */
				//$g_id= $_GET['g_id'];
				
			
				if(isset($_POST['add_another_tier'])){
					header("Location: create_tier.php?g_id=$goal_id");
					
				}else if(isset($_POST['finish'])){
					header("Location: my_goals.php?g_id=$goal_id");
				}
				
		}
			
		?>
			
		</section>
		</form>
			
		
	 </div>
    
    

				
		
	
      <hr>

 <!--FOOTER INCLUDE-->
 <?php include "includes/footer.php"?>
