<?php ob_start(); ?>
<?php include "includes/header.php"; ?>


<form action="" method="post" style="margin-top: 50px">
	<input type="text" name="data">
	<input type="submit" name="submit" class="btn btn-info" value="test">
</form>

<?php
if(isset($_POST['data'])){
	$data=$_POST['data'];
	if($data=="home"){
		header("Location: index.php");
	}elseif($data=="articles"){
		header("Location: articles.php");
	}
}?>

<?php include "includes/footer.php"?>
