<?php
include("includes/database.php");

if(isset($_REQUEST['id'])){
	$cus_id = $_REQUEST['id'];
	
	$query="delete from borrower where borrower_id='$cus_id'";
	mysqli_query($db_connect,$query);
	echo"<script>window.location='index_brr.php'</script>";
	
}
?>	