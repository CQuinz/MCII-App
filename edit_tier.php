<!--HEADER INCLUDE-->
   <?php include "includes/header.php"?>

  
		
    
    <div class="container">
		
		<h1 class="font-weight-bold text-center">Edit Action Plan</h1>
		<p>Let's add your plan</p>
		
		<form action="" method="post" name="create_goal">
		
		<section id="goal_details">
			
				
					
			<p class="text-center font-weight-bold"><a href="">Name of Goal</a></p>
				
			
				
			
			<!--FIRST CARD DECK----------------------------------------------------->
			<!-- GRAB TIER_ID FROM THE URL, QUERY THE DB AND DISPLAY THE RESULTS IN THE FORM( STICKY) -->
			<?php
			$edit_tier_id= $_GET['edit_tier_id'];
			$goal_id= $_GET['g_id'];
			$query= "SELECT * FROM goal_tier WHERE tier_id = $edit_tier_id";
			$show_edit_tier= mysqli_query($db,$query);

			while($row = mysqli_fetch_assoc($show_edit_tier)){

				$benefit = $row['benefit'];
				$obstacle = $row['obstacle'];
				$plan = $row['plan'];
				
				$plan_split=(explode("Then",$plan));
				//$if_split2=(explode("Then",$plan));
	
				$if = $plan_split[0];
				$then=$plan_split[1];				
				

			?>
			
			
			<div class="card-deck">
		  
			  <div class="card">
				<div class="card-block text-inverse">
				  <h4 class="card-title text-center">Benefit</h4>
				  <p class="card-text">Why is this important? How will things improve or get better for you? List <strong>One Benefit</strong> to getting this goal</p>
				</div>
				
				<div class="card-footer">
				  <div class="form-group">
					<textarea type="text" placeholder="Benifit" name="benefit" class="form-control" rows="2">
					<?php echo "{$benefit}"; ?>
					</textarea>
				  </div>
				
				</div>
			  </div><!--CARD-->
			  
			  <div class="card">
				<div class="card-block text-inverse">
				  <h4 class="card-title text-center">Obstacle</h4>
				  <p class="card-text">What prevents you from achieving... List ONE thing that stops you</p>
				</div>
				
				<div class="card-footer">
				  <div class="form-group">
					<textarea type="text" placeholder="What prevents you" name="obstacle" class="form-control" rows="2">
					<?php echo "{$obstacle}"; ?>
					</textarea>				
					</div>
				  
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
						<input type="text" class="form-control"  value='<?php echo "{$if}"; ?>' name="plan_if">
					</div>
					<div class="input-group my-3">
						<span class="input-group-addon font-weight-bold" id="basic-addon2">Then:</span>
						<input type="text" class="form-control"  value='<?php echo "{$then}"; ?>' name="plan_then">
					</div>
			  </div>
			 
			</div><!--CARD-->
			<?php } ?><!--END LOOP DISPLAY EDIT TIER VALUES-->
			  
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
				<input type="submit" class="btn btn-primary" value="Update Action Plan" name="update_tier">
				<button class="btn btn-danger" value="Add Another Plan">Add Another Action</button>
			</div>
			
		<?php	
		if(isset($_POST['update_tier'])){
				
				$benefit = $_POST['benefit'];
				$obstacle = $_POST['obstacle'];
				$if = $_POST['plan_if'];
				$then = $_POST['plan_then'];
				$if_then_plan= "If " .$if ." Then " .$then;
				
				
				//$goal_status = $_POST['goal_status'];
				
				
				
				
				$query = "UPDATE goal_tier SET ";
				$query .= "benefit = '{$benefit}', ";
				$query .= "obstacle = '{$obstacle}', ";
				$query .= "plan = '{$if_then_plan}' ";
				$query .= "WHERE tier_id = {$edit_tier_id}";

				$edit_tier = mysqli_query($db,$query);
			
			
				header("Location: goal_summary.php?g_id=$goal_id");
		}
			
		?>
			
		</section>
		</form>
			
		
	 </div>
    
    

				
		
	
      <hr>

 <!--FOOTER INCLUDE-->
 <?php include "includes/footer.php"?>
