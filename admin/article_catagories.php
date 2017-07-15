<?php //ob_start;?>
<?php include "admin_includes/admin_header.php"; ?>

<section id="admin_area" class="">
	 
	 	 <h1 id="admin-header" class="text-center display-4 text-uppercase">Admin Page</h1>
		
	 
	 	<!--ADMIN NAV-->
	 	<div class="card-group">
	 	
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
			  <a href="" class="card-link">View All Users</a>
			  <a href="" class="card-link">Create User</a>
			</div>
		  </div>
		  
		  <div class="card">
			 <div class="card-block text-center">
			  <i class="fa fa-question-circle fa-2x" aria-hidden="true"></i>
			  <h4 class="card-title">Hints</h4>
			  <hr>
			  <a href="" class="card-link">View All Hints</a>
			  <a href="" class="card-link">Create Hint</a>
			 </div>
		  </div>
		  
		</div>
		
		
	
		
		 <div id="admin_content" class="container-fluid">
		
		 	
		 <h2 class="text-center">Catagories</h2>
		 <table class="table">
		 
		

		 	<thead>
		 		<tr>
		 			<th>Cat Id</th>
		 			<th>Cat Title</th>
		 		</tr>
		 	</thead>
		 		<tbody>
		<?php show_all_catagories(); ?>
		 		</tbody>
		 	
		 </table>
		 <?php 
			 //delete catagories query
			 delete_catagories();
			?>
		 	

		 </div><!--End of admin_content-->
	 </section>

	<?php //FOOTER INCLUDES ?>
	<?php include "admin_includes/admin_footer.php"; ?>
	