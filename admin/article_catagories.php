<?php ob_start;?>
<?php include_once "admin_includes/admin_header.php"; ?>

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
		<?php 
			 $query= "SELECT * FROM article_catagories";
			 $all_catagories= mysqli_query($db,$query);
			 
			 while($row =mysqli_fetch_assoc($all_catagories)){
			
			//Creating variables for the array
			$cat_id = $row['cat_id'];
			$cat_title = $row['cat_title'];
		
		?>
		 			<tr>
		 				<td><?php echo $cat_id; ?></td>
		 				<td><?php echo $cat_title; ?></td>
		 				<td><a href="article_catagories.php?delete=<?php echo $cat_id; ?>">Delete</a></td>
		 			</tr>
		 			<?php } ?>
		 		</tbody>
		 	
		 </table>
		 <?php 
			 //delete catagories query
			 if(isset($_GET['delete'])){
				$delete_cat_key= $_GET['delete'];
			 	$query="DELETE FROM article_catagories WHERE cat_id= {$delete_cat_key}";
				$delete_catagory= mysqli_query($db,$query);
				 
			 }
			?>
		 	

		 </div><!--End of admin_content-->
	 </section>

	<?php //FOOTER INCLUDES ?>
	<?php include "admin_includes/admin_footer.php"; ?>
	