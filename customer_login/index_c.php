<?php
session_start();
include("includes/database.php");
?>

<!Doctype html>
<html>

<head>
		<title>Customer</title>
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
		integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		<!-- JavaScript -->
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>

<body style="background-color: #f0f5f1;">

<?php
   
   if(isset($_POST['btn'])){

		 $name = $_POST['uname'];
		 $acc_no = $_POST['acc_no'];
		 $query="select * from viewcus where customer_name='$name' AND account_no='$acc_no'"; 
		 $run = mysqli_query($db_connect,$query);
		 if(mysqli_num_rows($run)>0){
		 $row=mysqli_fetch_array($run);
		 echo"<script>window.location='customer/index_customer.php'</script>";
		 $_SESSION['uname']=$name;
		 $_SESSION['acc_no']=$acc_no;
		 }else{
		    $err2="<p class='text-danger'>Invalid user</p>";	 
		 }
	 }
   
?>


<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
    <form class="border shadow p-3 rounded" style="width: 450px;" method= "POST" action="">
		
    <h1 class="text-center p-3">LOGIN</h1>
        <div class="mb-3">
        <label for="uname" 
                class="form-label">User name: </label>
        <input type="text" 
                class="form-control"
                name="uname" 
				placeholder="Enter User Name" 
                id="uname" required>
        </div>

        <div class="mb-3">
        <label for="acc_no" 
                class="form-label">Account No: </label>
        <input type="text" 
                class="form-control" 
                name="acc_no"
				placeholder="Enter Account no"
                id="acc_no" required>
        </div>
        
		<?php 
			if(isset($err2)){echo "<h4 class='text-center' style='color: red;'>" . $err2 . "<h4>";}
		?>

        <button type="submit" class="btn btn-primary center" name="btn" value="submit">login</button>
    </form>
    </div>



</body>

</html>