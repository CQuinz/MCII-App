<?php ob_start(); ?>
	<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
		<div class="container">
		  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <a class="navbar-brand" href="#">MCII App</a>

		  <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">

			<ul class="navbar-nav ">
			 <?php 
				if(isset($_SESSION)){
					$username= $_SESSION['username'];
				?>	
			<li class="nav-item dropdown ">
				<a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true"><?php echo $username;?></a>
				<div class="dropdown-menu" aria-labelledby="dropdown01">
				  <a class="dropdown-item" href="../my_goals.php">View My goals</a>
				  <a class="dropdown-item" href="../create_goal.php">Create new goal</a>
				  <a class="dropdown-item" href="../includes/logout.php">Logout</a>
				  
				</div>
			  </li>
					
					
					
				<?php } ?>
			
		  
		  	<li class="nav-item dropdown active">
				<a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true">ADMIN</a>
				<div class="dropdown-menu" aria-labelledby="dropdown01">
				  <a class="dropdown-item" href="index.php?source=view_articles">View Articles</a>
				  <a class="dropdown-item" href="index.php?source=create_article">Create Article</a>
				  <a class="dropdown-item" href="index.php?source=view_all_users">View Users</a>
				  <a class="dropdown-item" href="index.php?source=create_user">Create User</a>
				  <a class="dropdown-item" href="index.php?source=view_all_hints">View Hints</a>
				  <a class="dropdown-item" href="index.php?source=create_hint">Create Hint</a>
<!--				  <a class="dropdown-item" href="#">Log out</a>-->
				</div>
			  </li>
			  	
			  <li class="nav-item ">
				<a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item ">
				<a class="nav-link" href="../articles.php">Articles</a>
			  </li>

			  <li class="nav-item dropdown ">
				<a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true">Goals</a>
				<div class="dropdown-menu" aria-labelledby="dropdown01">
				  <a class="dropdown-item" href="#">View all goals</a>
				  <a class="dropdown-item" href="#">Create new goal</a>
				</div>
			  </li>
			</ul>
	
		  </div>
		</div>
    </nav>