<?php include "admin_includes/admin_header.php"; ?>
<section id="admin_area" class="">
	 
	 	<h1 id="admin-header" class="text-center display-4 text-uppercase my-7">Admin Page</h1>
		
	 
	 	<!--ADMIN NAV-->
	 	<div class="card-group">
	 	<?php 
			if($_SESSION['username']){
				echo $_SESSION['username'];
			}
		?>
	  
		  <div class="card">
			<div class="card-block text-center">
			  <i class="fa fa-bullseye fa-2x card-img-top" aria-hidden="true"></i>
			  <h4 class="card-title ">Goals</h4>
			  <hr>
			  <a href="" class="card-link">View All Goals</a>
			  <a href="index.php?source=create_article" class="card-link">Create Goal</a>
			</div>
		  </div>
		  
		  <div class="card">
			
			<div class="card-block text-center">
			  <i class="fa fa-users fa-2x" aria-hidden="true"></i>
			  <h4 class="card-title">Articles</h4>
			  <hr>
			  <a href="index.php?source=view_articles" class="card-link">View All Articles</a>
			  <a href="index.php?source=create_article" class="card-link">Create Article</a>
			</div>
		  </div>
		  
		  <div class="card">
			
			<div class="card-block text-center">
			  <i class="fa fa-book fa-2x" aria-hidden="true"></i>
			  <h4 class="card-title">Users</h4>
			  <hr>
			  <a href="index.php?source=view_all_users" class="card-link">View All Users</a>
			  <a href="index.php?source=create_user" class="card-link">Create User</a>
			</div>
		  </div>
		  
		  <div class="card">
			 <div class="card-block text-center">
			  <i class="fa fa-question-circle fa-2x" aria-hidden="true"></i>
			  <h4 class="card-title">Hints</h4>
			  <hr>
			  <a href="index.php?source=view_all_hints" class="card-link">View All Hints</a>
			  <a href="index.php?source=create_hint" class="card-link">Create Hint</a>
			 </div>
		  </div>
		  
		</div>
		
		
	
		
		 <div id="admin_content" class="container-fluid mt-4">
		
		 	
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
					 
				case "edit_article";
				include "admin_includes/admin_edit_article.php";
				break;
					 
				case "view_all_users";
				include "admin_includes/view_all_users.php";
				break;
					 
				case "edit_user";
				include "admin_includes/admin_edit_user.php";
				break;
					 
				case "create_user";
				include "admin_includes/admin_create_user.php";
				break;
				
				case "view_all_hints";
				include "admin_includes/view_all_hints.php";
				break;
					 
				case "create_hint";
				include "admin_includes/create_hint.php";
				break;
					 
			 }
			 
			 ?>

		 </div><!--End of admin_content-->
	 </section>

	<?php //FOOTER INCLUDES ?>
	<?php include "admin_includes/admin_footer.php"; ?>
	