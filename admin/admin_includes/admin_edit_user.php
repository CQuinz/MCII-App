<?php
//QUERY FOR DISPLAYING THE EDIT ARTICLE DETAILS IN THE (STICKY)FORM
if(isset($_GET['edit'])){
	$edit_article_key= $_GET['edit'];
	
	$query = "SELECT * FROM articles WHERE article_id = $edit_article_key";
				
	//CONNECT QUERY TO DB
	$show_edit_article= mysqli_query($db,$query);

	//Loop through and display results
	while($row =mysqli_fetch_assoc($show_edit_article)){

		//Creating variables for the array
		$article_id = $row['article_id'];
		$article_title = $row['article_title'];
		$article_author = $row['article_author'];
		$article_date = $row['article_date'];
		$article_body = $row['article_body'];
		$article_tags = $row['article_tags'];
		$article_status = $row['article_status'];
}

?>

<h3 class="text-center">Edit User</h3>
<div class="row justify-content-md-center">
	<div class="col-md-8 text-center">
	
		<form action="" method="post" class="">
		
			<div class="form-inline">
			
				<label for="article_title" class="mr-sm-2">Username</label>
				<input type="text" placeholder="Enter your article title here" name="article_title" class="form-control" value='<?php echo "{$article_title}"; ?>'>
				
				<label for="article_author" class="mr-sm-2">Password</label>
				<input type="text" placeholder="Enter the author here" name="article_author" class="form-control" value='<?php echo "{$article_author}"; ?>'>
				
				<label for="article_status" class="mr-sm-2">Role</label>
				<select name="article_status" id="">
					<option value='<?php echo "{$article_status}"; ?>' selected><?php echo "{$article_status}"; ?></option>
					<option value="draft">Draft</option>
					<option value="published">Publish</option>
					<option value="unpublished">Unpublish</option>
					
				</select>
			</div>
			
			<div class="form-group">
				<label for="article_tags" class="">Tags</label>
				<input type="text" placeholder="Enter the article tags" name="article_tags" class="form-control" value='<?php echo "{$article_tags}"; ?>'>
			</div>
		
			
			<div class="form-group">
				<label for="article_content">Content</label>
				<textarea type="text" placeholder="Enter content here" name="article_body" class="form-control" rows="6"><?php echo "{$article_body}"; ?></textarea>
			</div>
<?php } ?>
			<input type="submit" class="btn btn-success" value="Edit Article" name="edit_article">
		</form>
		
		<?php
		//CHECK IF A CONNECTION TO THE DATABASE EXISTS
		
		if(!$db){
			die("no connection" .mysqli_error($db));
		}
		
		//QUERY FOR UPDATING AN ARTICLE
		if(isset($_POST['edit_article'])){
			//$article_date = date();
			$article_author = $_POST['article_author'];
			$article_title = $_POST['article_title'];
			$article_status = $_POST['article_status'];
			$article_tags = $_POST['article_tags'];
			$article_body = $_POST['article_body'];
		
		

			$query = "UPDATE articles SET ";
			$query .= "article_author = '{$article_author}', ";
			$query .= "article_title = '{$article_title}', ";
			$query .= "article_status = '{$article_status}', ";
			$query .= "article_tags = '{$article_tags}', ";
			$query .= "article_body = '{$article_body}' ";
			$query .= "WHERE article_id = {$article_id}";

			$edit_article = mysqli_query($db,$query);
			
			header("location: index.php?source=view_articles");
		
		}
	?>
	

	</div>
</div>