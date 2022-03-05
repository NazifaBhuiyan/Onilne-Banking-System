<?php
include("includes/database.php");

if(isset($_REQUEST['id'])){
	$dep_id = $_REQUEST['id'];
	
	$query="delete from depositor where depositor_id='$dep_id'";
	mysqli_query($db_connect,$query);
	echo"<script>window.location='index_dep.php'</script>";
	
}
?>	