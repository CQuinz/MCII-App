<!--HEADER INCLUDE-->
   <?php include "includes/header.php"?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
    	<div class="container">
      		<div class="jumbo-text">
				<h1 class="display-3 font-weight-bold">MCII Articles</h1>
				<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique. Find out <a href="#">more&raquo;</a></p>
				
			</div>
	 	</div>
    </div>
    
<!--ARTICLES SECTION-->
  
   <section id="articles">
    <div class="container">
      <div class="row">
      
      <!--ARTICLES-->
      	<div class="col-md-8">
      	
      	<?php 
		/*QUERY THE DATABASE 
			Create the query
			Connect the query to the database
			Loop through the results
			Display the results
		*/
		$query ="SELECT * FROM articles";
		$show_all_articles= mysqli_query($db,$query);

		while($row =mysqli_fetch_assoc($show_all_articles)){
			
			//Creating variables for the array
			$article_title = $row['article_title'];
			$article_author = $row['article_author'];
			$article_date = $row['article_date'];
			$article_body = $row['article_body'];
			
		?>
      		<h3 class="display-4"><?php echo "{$article_title}"; ?></h3>
      		<h4><?php echo "{$article_author}"; ?><small class="text-muted"> - <?php echo "{$article_date}"; ?></small></h4>
      		<p><?php echo "{$article_body}"; ?></p>
      		<button class="btn btn-info">More</button>
      		
      		<hr>
      		
      	<?php	} //Continue while Loop through the articles?>
      		
      	</div>
      	
      	<!--SIDEBAR INCLUDES-->
      	<div class="col-md-4">
      		<div class="input-group">
			  <input type="text" class="form-control" placeholder="Search Articles" name="search_articles">
			  <button type="submit" class="input-group-addon fa fa-search" id="basic-addon2" name="submit_search"></button>
			</div>
<!--      		<button><i class=""></i></button>-->
      	</div>
      </div>
      
    </div>
	</section>
      <hr>

 <!--FOOTER INCLUDE-->
 <?php include "includes/footer.php"?>
