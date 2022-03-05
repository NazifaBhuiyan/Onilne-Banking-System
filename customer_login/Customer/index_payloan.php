<?php
include("includes/database.php");
?>
<!Doctype html>
<html>
<head>
	<title>Payment</title>
	<!--CSS only -->
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

		 $cus_id = $_POST['cus_id'];
		 $ln_no= $_POST['loan_no'];
		 $pay = $_POST['pay_loan'];
		 $query="update loan set loan_amount = loan_amount-'$pay' where  loan_no='$ln_no'";
         $query1="update borrower set loan_amount = loan_amount-'$pay' where  loan_no='$ln_no'";		 
		 $run = mysqli_query($db_connect,$query);
		 $run1 = mysqli_query($db_connect,$query1);
	    echo"<script>window.location='index_customer.php'</script>";
	 }
   
?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
    <form class="border shadow p-3 rounded" style="width: 450px;" method= "POST" action="">

		<?php 
			if(isset($err)){echo $err;}
			if(isset($err2)){echo $err2;}
		?>
		
    <h1 class="text-center p-3">loan Payment</h1>
        <div class="mb-3">
        <label for="cus_id" 
                class="form-label">Customer ID: </label>
        <input type="password" 
                class="form-control"
                name="cus_id" 
				placeholder="Enter Your ID again" 
                id="cus_id" required>
        </div>

        <div class="mb-3">
        <label for="loan_no" 
                class="form-label">Loan No: </label>
        <input type="password" 
                class="form-control" 
                name="loan_no"
				placeholder="Enter Your Loan no again"
                id="loan_no" required>
        </div>

        <div class="mb-3">
        <label for="pay_loan" 
                class="form-label">Pay Loan: </label>
        <input type="text" 
                class="form-control" 
                name="pay_loan"
				placeholder="Enter loan amount"
                id="pay_loan" required>
        </div>

		
        <button type="submit" class="btn btn-warning center" name="btn" value="submit">Submit</button>

    </form>
    </div>

</body>
</html>