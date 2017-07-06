<!--HEADER INCLUDE-->
   <?php include "includes/header.php"?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
    	<div class="container">
      		<div class="jumbo-text">
				<h1 class="display-3">MCII Articles</h1>
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
			
			
			echo $article_title = $row['article_title'];
		}
			
			
		?>
      		<h3>What is MCII?</h3>
      		<h4>John Doe <span class="">Date</span></h4>
      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum quod obcaecati ea libero ipsam, fugiat id. Deserunt sint saepe nihil fugit tenetur nemo, tempora, sequi, modi cum esse harum iusto.</p>
      		<button class="btn btn-info">More</button>
      		
      		<hr>
      		
      	</div>
      	
      	<!--SIDEBAR INCLUDES-->
      	<div class="col-md-4">
      		<input class="form-control" type="text" value="Search Articles">
      		<button><i class="fa fa-search"></i></button>
      	</div>
      </div>
      
    </div>
	</section>
      <hr>

 <!--FOOTER INCLUDE-->
 <?php include "includes/footer.php"?>
