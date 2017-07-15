<?php 
function show_all_catagories(){
	
	global $db;
	 $query= "SELECT * FROM article_catagories";
			 $all_catagories= mysqli_query($db,$query);
			 
			 while($row =mysqli_fetch_assoc($all_catagories)){
			
			//Creating variables for the array
			$cat_id = $row['cat_id'];
			$cat_title = $row['cat_title'];

	?>
		 			<tr>
		 				<td><?php echo $cat_id; ?></td>
		 				<td><?php echo $cat_title; ?></td>
		 				<td><a href="article_catagories.php?delete=<?php echo $cat_id; ?>">Delete</a></td>
		 			</tr>
	<?php }		 

			 
}

function delete_catagories(){
	global $db;
	
	if(isset($_GET['delete'])){
				$delete_cat_key= $_GET['delete'];
			 	$query="DELETE FROM article_catagories WHERE cat_id= {$delete_cat_key}";
				$delete_catagory= mysqli_query($db,$query);
				header("Location: article_catagories.php");
				 
			 }
}