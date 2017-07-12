

<!--THIS IS THE HEADER-->

<?php include "admin_includes/admin_header.php"; ?>


	
	<!--MAIN NAVIGATION-->
	
	<?php include "admin_includes/admin_nav.php"; ?>
		
	
		
		
		
	
	 
	 <section id="admin_area" class="">
	 
	 	<!--ADMIN NAV-->
	 	<div class="card-group">
	 	
		  <div class="card">
			<div class="card-block text-center">
			  <i class="fa fa-bullseye fa-3x card-img-top" aria-hidden="true"></i>
			  <h4 class="card-title ">Goals</h4>
			  <hr>
			  <a href="index.php?source=view_articles" class="card-link">View All Goals</a>
			  <a href="index.php?source=create_article" class="card-link">Create Goal</a>
			</div>
		  </div>
		  
		  <div class="card">
			
			<div class="card-block text-center">
			  <i class="fa fa-users fa-3x" aria-hidden="true"></i>
			  <h4 class="card-title">Articles</h4>
			  <hr>
			  <a href="" class="card-link">View All Articles</a>
			  <a href="" class="card-link">Create Article</a>
			</div>
		  </div>
		  
		  <div class="card">
			
			<div class="card-block text-center">
			  <i class="fa fa-book fa-3x" aria-hidden="true"></i>
			  <h4 class="card-title">Users</h4>
			  <hr>
			  <a href="" class="card-link">View All Users</a>
			  <a href="" class="card-link">Create User</a>
			</div>
		  </div>
		  
		  <div class="card">
			 <div class="card-block text-center">
			  <i class="fa fa-question-circle fa-3x" aria-hidden="true"></i>
			  <h4 class="card-title">Hints</h4>
			  <hr>
			  <a href="" class="card-link">View All Hints</a>
			  <a href="" class="card-link">Create Hint</a>
			 </div>
		  </div>
		  
		</div>
		
		
	
		
		 <div id="admin_content" class="container">
		 <h1 class="text-center display-4 text-uppercase">Admin Page</h1>
		<hr>
		 	
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
				case "view_articles";
				include "admin_includes/view_all_articles.php";
				break;
					 
				case "create_article";
				include "admin_includes/admin_create_article.php";
				break;
					 
			 }
			 
			 ?>

		 </div><!--End of admin_content-->
	 </section>

	<?php //FOOTER INCLUDES ?>
	<?php include "admin_includes/admin_footer.php"; ?>