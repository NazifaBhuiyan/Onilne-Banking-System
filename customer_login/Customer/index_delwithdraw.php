<?php
session_start();
include("includes/database.php");

if(isset($_SESSION['customer_id'])){
	$cus_id = $_SESSION['customer_id'];
	echo $cus_id;
	$query="delete from customer where customer_id='$cus_id'";
	mysqli_query($db_connect,$query);
	echo"<script>window.location='index_customer.php?success'</script>";
}
?>	