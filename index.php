	<!--HEADER INCLUDE-->
  <?php 
			if($_SESSION['user_role']=="admin"){
				include "admin/admin_includes/admin_header.php";
			}else{
				 include "includes/header.php";
			}
 ?>
   
    

    <!-- SECTION: HERO -->
    <section id="hero">
   	
    	<div class="container">
      		<div class="hero-text text-center">
				<h1 class="display-1 font-weight-bold">MCII!</h1>
				<h2 class="text-uppercase">The best goal setting application ever!</h2>
				<p class="lead">Based upon the the ground breaking, research backed techniques of Mental Contrasting and Implimentation Intentions, These techniques have proven time and again to be VERY effective!
				</p>
				
				<p class="font-weight-bold">Ready to get started? If you're new to the site, please register below, else just sign in and we can get rolling</p>
				
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">Sign in</button>
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#registerModal">Register</button>
				
			</div>
	 	</div>
    
    </section><!--END OF HERO-->
    
    <div id="validationMessage">
		<?php include "includes/login.php"?>
    	<?php include "includes/register.php"?>			
	</div>

    <div class="container">
      <!-- Example row of columns -->
      <h2 class="display-4 text-center">What is it?</h2>
      
      <div class="row text-center">
      
      	 <div class="col-md-5 offset-md-1">
			
          <h3>What</h3>
          <p>MCII is a 4 step process that takes probably no more then 5 to 10 mins tops to complete. it involves creating your goal by following a specific syntax- which we provide. Find out <a href="#">more&raquo;</a></p>
         
        </div>
        
        <div class="col-md-5">
         
          <h3>How</h3>
          <p>MCII works by creating a necessity to act upon your goals. Instead of just wish thinking or airy fairy visualization techniques, this process has a REAL effect!! Find out <a href="#">more&raquo;</a></p>
          
       </div>
       
        <div class="col-md-3">
			<i class="fa fa-dot-circle-o fa-5x" aria-hidden="true"></i>
          <h5>1.Set your Outcome</h5>
          <p>You'll learn how to create a specific, measurable outcome that you know you can achive (Don't worry, we'll guide you through this.)</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-3">
         <i class="fa fa-thumbs-o-up fa-5x" aria-hidden="true"></i>
          <h5>2.List a Benefit</h5>
          <p>Next, you'll come up with one, positive reason WHY getting this goal will help make your life better!</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-3">
         <i class="fa fa-ban fa-5x" aria-hidden="true"></i>
          <h5>3.List an Obstacle</h5>
          <p>Now we look for One thing that stops or prevents us from getting this goal. </p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
         <div class="col-md-3">
         <i class="fa fa-clipboard fa-5x" aria-hidden="true"></i>
          <h5>4.Create an If-Then Plan</h5>
          <p>Now we set ourselves up to deal with this obstacle. We create a If - Then plan which allows us to automactally respond to a specific trigger with a planned response.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

 <!--FOOTER INCLUDE-->
 <?php include "includes/footer.php"?>
