<?php
include("includes/database.php");

if(isset($_REQUEST['id'])){
	$acc_no = $_REQUEST['id'];
	
	$query="delete from account where account_no='$acc_no'";
	mysqli_query($db_connect,$query);
	echo"<script>window.location='index_acc.php'</script>";
	
}
?>	