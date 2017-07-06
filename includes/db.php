<?php
/*CONNECT TO THE MCII DATABASE*/


$db= mysqli_connect("localhost", "root", "", "mcii_app");

if(!$db){
	die("Unable to connect to the database" .mysqli_error($db));
}else{
	echo "you are now connected";
}

?>