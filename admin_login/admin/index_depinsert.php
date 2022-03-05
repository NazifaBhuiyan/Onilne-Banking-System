<?php
include("includes/database.php");
?>
<? 
include("functions/function.php");
?>
<!Doctype html>
<html>
<head>
	<title>Insert Depositor</title>
	<!--<link rel='stylesheet' type='text/css' href='styles/style_depinsert.css' media='all'>
	<link href="https://fonts.googleapis.com/css?family=Lacquer|Saira+Stencil+One&display=swap" rel="stylesheet">
	CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<!-- JavaScript -->
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>

<body>

<?php
   
   if(isset($_POST['btn'])){

	    $dep_id = $_POST['depositor_id'];
		 $cus_id = $_POST['customer_id'];
		 $cus_name = $_POST['customer_name'];
		 $acc_no = $_POST['account_no'];
		 $amount = $_POST['amount'];
		 $query="insert into depositor values('$dep_id','$cus_id','$cus_name','$acc_no','$amount')"; 
		 if(mysqli_query($db_connect,$query)){
	
		 echo"<p>Thankyou, record has submitted!!</p>";
		 } 
	 }
   
?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
    <form class="border shadow p-3 rounded" style="width: 450px;" method= "POST" action="">

		<?php 
			if(isset($err)){echo $err;}
			if(isset($err2)){echo $err2;}
		?>
		
    <h1 class="text-center p-3">Insert New Depositor</h1>
        <div class="mb-3">
        <label for="customer_name" 
                class="form-label">Customer Name: </label>
        <input type="text" 
                class="form-control"
                name="customer_name" 
				placeholder="Enter Customer Name" 
                id="customer_name" required>
        </div>

        <div class="mb-3">
        <label for="customer_id" 
                class="form-label">Customer ID: </label>
        <input type="password" 
                class="form-control" 
                name="customer_id"
				placeholder="Enter Customer Id"
                id="customer_id" required>
        </div>

		<div class="mb-3">
        <label for="depositor_id" 
                class="form-label">Depositor ID: </label>
        <input type="password" 
                class="form-control" 
                name="depositor_id"
				placeholder="Enter Depositor ID"
                id="depositor_id" required>
        </div>

		<div class="mb-3">
        <label for="account_no" 
                class="form-label">Account Number: </label>
        <input type="text" 
                class="form-control"
                name="account_no" 
				placeholder="Enter Account Number" 
                id="account_no" required>
        </div>

		<div class="mb-3">
        <label for="amount" 
                class="form-label">Deposite Amount: </label>
        <input type="text" 
                class="form-control"
                name="amount" 
				placeholder="Enter Deposite Amount" 
                id="amount" required>
        </div>

		
        
		<?php 
			if(isset($success)){
				echo "<h6 class='text-center' style='color: red;'>" . $success . "<h6>";
			}
		?>
		
        <button type="submit" class="btn btn-warning center" name="btn" value="submit">Insert</button>

    </form>
    </div>


</body>
</html>