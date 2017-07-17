

<h3 class="text-center">Create Article</h3>
<div class="row justify-content-md-center">
	<div class="col-md-8 text-center">
	
		<form action="" method="post" class="">
		
			<div class="form-inline">
			
				<label for="article_title" class="mr-sm-2">Title</label>
				<input type="text" placeholder="Enter your article title here" name="article_title" class="form-control">
				
				<label for="article_author" class="mr-sm-2">Author</label>
				<input type="text" placeholder="Enter the author here" name="article_author" class="form-control">
				
				<label for="article_status" class="mr-sm-2">Status</label>
				<select name="article_status" id="">
					<option value="draft" selected>Draft</option>
					<option value="publish">Publish</option>
					<option value="unpublish">Unpublish</option>
				</select>
			</div>
			
			
		
		
		<div class="form-group">
				
			</div>
			
			<div class="form-group">
				<label for="article_tags" class="">Tags</label>
				<input type="text" placeholder="Enter the article tags" name="article_tags" class="form-control">
			</div>
		
			
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
		
		//QUERY FOR INSERTING AN ARTICLE
		if(isset($_POST['create_article'])){
			//$article_date = date();
			$article_author = $_POST['article_author'];
			$article_title = $_POST['article_title'];
			$article_status = $_POST['article_status'];
			$article_tags = $_POST['article_tags'];
			$article_body = $_POST['article_body'];
		
		
		
		$query = "INSERT INTO articles (article_author, article_title, article_date, article_body, article_status, article_tags) ";
		$query .= "VALUES ('{$article_author}', '{$article_title}', now(),'{$article_body}', '{$article_status}', '{$article_tags}')";
		
		$create_article = mysqli_query($db,$query);
		
		}
	?>
	

	</div>
</div>