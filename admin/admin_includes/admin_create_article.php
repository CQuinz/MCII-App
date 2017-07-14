

<h3 class="text-center">Create Article</h3>
<div class="row justify-content-md-center">
	<div class="col-md-8 text-center">
	
		<form action="" method="post" class="">
		<fieldset class="form-inline">
			<div class="form-group">
				<label for="article_title" class="">Title</label>
				<input type="text" placeholder="Enter your article title here" name="article_title" class="form-control">
			</div>
			
			<div class="form-group">
				<label for="article_author" class="">Author</label>
				<input type="text" placeholder="Enter the author here" name="article_author" class="form-control">
			</div>
		</fieldset>
			<div class="form-group">
				<label for="article_content">Content</label>
				<textarea type="text" placeholder="Enter content here" name="article_body" class="form-control" rows="6"></textarea>
			</div>
			<input type="submit" class="btn btn-success" value="Create Article" name="create_article">
		</form>
		
		<?php
		//CHECK IF A CONNECTION TO THE DATABASE EXISTS
		
		if(!$db){
			die("no connection" .mysqli_error($db));
		}
		
		if(isset($_POST['create_article'])){
			//$article_date = date();
			$article_author = $_POST['article_author'];
			$article_title = $_POST['article_title'];
			$article_body = $_POST['article_body'];
		
		
		//QUERY FOR INSERTING AN ARTICLE
		$query = "INSERT INTO articles (article_author, article_title, article_body) ";
		$query .= "VALUES ('{$article_author}', '{$article_title}', '{$article_body}')";
		
		$create_article = mysqli_query($db,$query);
		
		}
	?>
	

	</div>
</div>