<?php ob_start(); ?>
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
				  <a class="dropdown-item" href="index.php?source=view_articles">View Articles</a>
				  <a class="dropdown-item" href="index.php?source=create_article">Create Article</a>
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