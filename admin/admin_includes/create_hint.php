

<h3 class="text-center">Create Hint</h3>
<div class="row justify-content-md-center">
	<div class="col-md-8 text-center">
	
		<form action="" method="post" class="">
		
			<div class="form-inline">
			
				<label for="hint_name" class="mr-sm-2">Hint Name</label>
				<input type="text" placeholder="Enter your hint name here" name="hint_name" class="form-control">
				
				
				<label for="hint_status" class="mx-sm-2">Hint Status</label>
				<select name="hint_status" id="" class="form-control">
					<option value="draft" selected>Draft</option>
					<option value="publish">Publish</option>
					<option value="unpublish">Unpublish</option>
				</select>
			</div>
			
			<div class="form-group">
				<label for="hint_content">Hint Content</label>
				<textarea type="text" placeholder="Enter content here" name="hint_body" class="form-control" rows="6"></textarea>
			</div>
			
			
			
			
			<div class="form-group">
				<label for="hint_article_link" class="">Article link</label>
				<select name="hint_article_id" id="" class="form-control">
					<!--QUERY TO SHOW ALL ARTICLE LINKS AND GET THE ARTICLE ID-->
					<?php
					$query ="SELECT article_link, article_id FROM articles";
					$show_all_article_links= mysqli_query($db,$query);
					//DISPLAY ALL ARTICLE LINKS IN THE SELECT FORM
					while($row= mysqli_fetch_assoc($show_all_article_links)){
						$article_link= $row['article_link'];
						$article_id= $row['article_id'];
						
						?>
						<option value="<?php echo $article_id ?>"><?php echo $article_link ?></option>
				<?php } ?>
				</select>
			</div>
			
			<input type="submit" class="btn btn-success" value="Create hint" name="create_hint">
		</form>
		
		<?php
		//CHECK IF A CONNECTION TO THE DATABASE EXISTS
		
		if(!$db){
			die("no connection" .mysqli_error($db));
		}
		
		//QUERY FOR INSERTING AN hint
		if(isset($_POST['create_hint'])){
			//$hint_date = date();
			
			$hint_name = $_POST['hint_name'];
			$hint_status = $_POST['hint_status'];
			//$hint_link_article = $_POST['hint_link_article'];
			$hint_body = $_POST['hint_body'];
			$hint_article_id = $_POST['hint_article_id'];
			
		
		
		
		$query = "INSERT INTO tier_hints (tier_hints_name, hint_article_id, tier_hints_content, hint_status) ";
		$query .= "VALUES ('{$hint_name}','{$hint_article_id}','{$hint_body}', '{$hint_status}')";
		
		$create_hint = mysqli_query($db,$query);
		
		header("Location: index.php?source=view_all_hints");
		}
	?>
	

	</div>
</div>