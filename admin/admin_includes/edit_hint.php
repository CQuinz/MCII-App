

<h3 class="text-center">Edit Hint</h3>
<div class="row justify-content-md-center">
	<div class="col-md-8 text-center">
	
		<form action="" method="post" class="">
		<!--GET THE VALUES SET IN THE DATABASE-->
		<?php
		if(isset($_GET['edit_hint_id'])){
		
		$edit_hint_id= $_GET['edit_hint_id'];
			
	
		$query ="SELECT tier_hints.*, articles.article_link 
		FROM articles LEFT JOIN tier_hints 
		ON tier_hints.hint_article_id 
		WHERE tier_hints.tier_hints_id =  {$edit_hint_id} 
		LIMIT 1";
			
		$display_edit_hint = mysqli_query($db,$query);
		while($row=mysqli_fetch_assoc($display_edit_hint)){
			
			$hint_name= $row['tier_hints_name'];
			$hint_status= $row['hint_status'];
			$hint_content= $row['tier_hints_content'];
			$hint_article_link= $row['article_link'];
			$hint_article_id= $row['hint_article_id'];
			
			?>
		
		
		
			<div class="form-inline">
			
				<label for="hint_name" class="mr-sm-2">Hint Name</label>
				<input type="text" value="<?php echo $hint_name;?>" name="hint_name" class="form-control">
				
				
				<label for="hint_status" class="mx-sm-2">Hint Status</label>
				<select name="hint_status" id="" class="form-control">
				<!--DISPLAY PREVIOUS SET OPTION VALUE AND REST OF OPTIONS-->
				<?php
				//CREATE AN ARRAY TO HOLD THE VALUES AND TEXT ASSOCIATED WITH THEM
				$hint_status_values =array('draft'=>'Draft', 'publish'=>'Publish', 'unpublish'=>'Unpublish');
				
					//LOOP THROUGH ARRAY AND DISPLAY THE VALUE AND TEXT
					foreach($hint_status_values as $key => $value){
						//CREATE A VARIABLE TO SET THE OPTION VALUE TO 'SELECTED' OR NOT
						//CHECK IF $KEY MATCHES $hint_status. IF SO CHANGE $valueSelected =='SELECTED'
						if($key != $hint_status){
							$valueSelected="";
						}else if($key == $hint_status){
							$valueSelected=" selected";
						}
					?>
					<option value="<?php echo $key?>" <?php echo $valueSelected; ?>><?php echo $value ?></option>
			<?php } ?>

				</select>
			</div>
			
			<div class="form-group">
				<label for="hint_content">Hint Content</label>
				<textarea type="text" placeholder="Enter content here" name="hint_body" class="form-control" rows="6">
				<?php echo $hint_content;?>
				</textarea>
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
					
					//CREATE A VARIABLE TO SET THE OPTION VALUE TO 'SELECTED' OR NOT
					//CHECK IF $KEY MATCHES $$hint_article_id. IF SO CHANGE $valueSelected =='SELECTED'
					if($key != $hint_article_id){
						$valueSelected="";
					}else if($key == $hint_article_id){
						$valueSelected=" selected";
					}

					?>
					<option value="<?php echo $article_id ?>"><?php echo $article_link ?></option>
			<?php } ?>	
				</select>
			</div>
			
			<input type="submit" class="btn btn-success" value="Create hint" name="create_hint">
		</form>
		<?php
		}	
			
			
		}
		?>
		
		<?php
		//CHECK IF A CONNECTION TO THE DATABASE EXISTS
		
		if(!$db){
			die("no connection" .mysqli_error($db));
		}
		
	
		//QUERY FOR UPDATING A HINT
		if(isset($_POST['create_hint'])){
			//$hint_date = date();
			
			$hint_name = $_POST['hint_name'];
			$hint_status = $_POST['hint_status'];
			//$hint_link_article = $_POST['hint_link_article'];
			$hint_body = $_POST['hint_body'];
			$hint_article_id = $_POST['hint_article_id'];
			
		
		
		
		$query = "UPDATE tier_hints SET "; 
		$query .= "tier_hints_name = '{$hint_name}', ";
		$query .= "hint_article_id = '{$hint_article_id}', ";
		$query .= "tier_hints_content = '{$hint_body}', ";
		$query .= "hint_status = '{$hint_status}' ";
		$query .= "WHERE tier_hints_id = $edit_hint_id";
			
		
		$edit_hint = mysqli_query($db,$query);
		
		header("Location: index.php?source=view_all_hints");
		}
	?>
	

	</div>
</div>