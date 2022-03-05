<?php
include("includes/database.php");

if(isset($_REQUEST['id'])){
	$ln_no = $_REQUEST['id'];
	
	$query="delete from loan where loan_no='$ln_no'";
	mysqli_query($db_connect,$query);
	echo"<script>window.location='index_loan.php'</script>";
	
}
?>	