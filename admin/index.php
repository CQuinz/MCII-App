

<!--THIS IS THE HEADER-->

<?php include "admin_includes/admin_header.php"; ?>


	
	<!--MAIN NAVIGATION-->
	
	<?php include "admin_includes/admin_nav.php"; ?>
		
	<div class="jumbotron">
		<h1 class="text-center display-2 text-uppercase">Admin Page</h1>
		
		
	</div>
	 
	 <section id="admin_area">
	 
	 	<!--ADMIN NAV-->
	 	<div class="card-group">
	 	
		  <div class="card">
			<div class="card-block text-center">
			  <i class="fa fa-bullseye fa-4x card-img-top" aria-hidden="true"></i>
			  <h4 class="card-title ">Goals</h4>
			  
			  <a href="" class="btn btn-info">View All Goals</a>
			  <a href="" class="btn btn-info">Create Goal</a>
			</div>
		  </div>
		  
		  <div class="card">
			
			<div class="card-block text-center">
			  <i class="fa fa-users fa-4x" aria-hidden="true"></i>
			  <h4 class="card-title">Articles</h4>
			  <a href="" class="btn btn-info">View All Articles</a>
			  <a href="" class="btn btn-info">Create Article</a>
			</div>
		  </div>
		  
		  <div class="card">
			
			<div class="card-block text-center">
			  <i class="fa fa-book fa-4x" aria-hidden="true"></i>
			  <h4 class="card-title">Users</h4>
			  <a href="" class="btn btn-info">View All Users</a>
			  <a href="" class="btn btn-info">Create User</a>
			</div>
		  </div>
		  
		  <div class="card">
			 <div class="card-block text-center">
			  <i class="fa fa-question-circle fa-4x" aria-hidden="true"></i>
			  <h4 class="card-title">Hints</h4>
			  <a href="" class="btn btn-info">View All Hints</a>
			  <a href="" class="btn btn-info">Create Hint</a>
			 </div>
		  </div>
		  
		</div>
	
		
		 <div id="admin_content">
		 	
		 <!--ADMIN INCLUDES-->
		 	<!--A dynamic area to display admin content -->
		 
		 	<?php 
			 //CHECKING IF $source IS SET
			 if(isset($_GET['source'])){
				$source= $_GET['source'];
			 }else {
				 $source="";
			 }
			 
			 switch($source){
					 
					 
			 }
			 
			 ?>

		 </div><!--End of admin_content-->
	 </section>

	<?php //FOOTER INCLUDES ?>
	<?php include "admin_includes/admin_footer.php"; ?>