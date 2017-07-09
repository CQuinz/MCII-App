
<!DOCTYPE html>
<html lang="en">
<head>
<!--THIS IS THE HEADER-->
<?php include "../includes/db.php" ?>

	<meta charset="UTF-8">
	<title>Admin Page</title>
	
	<!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
    

    <!-- Custom styles for this template -->
    <link href="../css/myStyles.css" rel="stylesheet">
    
    
    <!-- Fontawesome CSS -->
    <link href="../css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	
	<!--MAIN NAVIGATION-->
	
		<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">

		  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <a class="navbar-brand" href="#">MCII App</a>

		  <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">

			<ul class="navbar-nav ">
		  
		  	<li class="nav-item dropdown active">
				<a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true">Admin</a>
				<div class="dropdown-menu" aria-labelledby="dropdown01">
				  <a class="dropdown-item" href="#">View Articles</a>
				  <a class="dropdown-item" href="#">Create Article</a>
				  <a class="dropdown-item" href="#">View Users</a>
				  <a class="dropdown-item" href="#">Log out</a>
				</div>
			  </li>
			  	
			  <li class="nav-item ">
				<a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item ">
				<a class="nav-link" href="../articles.php">Articles</a>
			  </li>

			  <li class="nav-item dropdown ">
				<a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true">Dropdown</a>
				<div class="dropdown-menu" aria-labelledby="dropdown01">
				  <a class="dropdown-item" href="#">Action</a>
				  <a class="dropdown-item" href="#">Another action</a>
				  <a class="dropdown-item" href="#">Something else here</a>
				</div>
			  </li>
			</ul>
	
		  </div>

    </nav>
	<div class="jumbotron">
		<h1><span>Christian's</span> Admin Page</h1>
		
	</div>
	 
	 <section id="admin_area">
		 <div id="admin_content">
		 	<table class="table table-striped table-hover">
		 		<thead class="thead-inverse">
		 			<th>Article ID</th>
		 			<th>Article Title</th>
		 			<th>Article Author</th>
		 			<th>Article Date</th>
		 			<th>Article Body</th>
		 			<th>Edit</th>
		 			<th>Delete</th>
		 		</thead>
		 		
		 		<?php
				//CREATE QUERY
				$query = "SELECT * FROM articles";
				
				//CONNECT QUERY TO DB
				$show_all_articles= mysqli_query($db,$query);
				
				//Loop through and display results
				while($row =mysqli_fetch_assoc($show_all_articles)){
			
					//Creating variables for the array
					$article_id = $row['article_id'];
					$article_title = $row['article_title'];
					$article_author = $row['article_author'];
					$article_date = $row['article_date'];
					$article_body_abbv = substr($row['article_body'],0, 20);
			
		?>
				
		 		
		 		<tbody>
		 			<td><?php echo "{$article_id}"; ?></td>
		 			<td><?php echo "{$article_title}"; ?></td>
		 			<td><?php echo "{$article_date}"; ?></td>
		 			<td><?php echo "{$article_author}"; ?></td>
		 			<td><?php echo "{$article_body_abbv}"; ?></td>
		 			<td><a href="#">Edit</a></td>
		 			<td><a href="#">Delete</a></td>
		 			
		 			<?php } //Loop through the results ?>
		 		</tbody>
		 		
		 	</table>

		 </div>
	 </section>

	 <footer>
		<p>&copy; Company 2017</p>
	 </footer>
    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>	
</body>
</html>