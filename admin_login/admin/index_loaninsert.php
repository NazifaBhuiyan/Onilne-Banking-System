<?php
include("includes/database.php");
?>
<? 
include("functions/function.php");
?>
<!Doctype html>
<html>
<head>
	<title>Add loans</title>
	<!--<link rel='stylesheet' type='text/css' href='styles/style_loaninsert.css' media='all'>
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

	    $loan_no = $_POST['loan_no'];
		 $loan_amount = $_POST['loan_amount'];
		 
		 $query="insert into loan values('$loan_no','$loan_amount')"; 
		 if(mysqli_query($db_connect,$query)){
	
		 $success = "<p>Thankyou, record has submitted!!</p>";
		 } 
	 }	   
   
?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
    <form class="border shadow p-3 rounded" style="width: 450px;" method= "POST" action="">

		<?php 
			if(isset($err)){echo $err;}
			if(isset($err2)){echo $err2;}
		?>
		
    <h1 class="text-center p-3">Add Loans</h1>
        <div class="mb-3">
        <label for="loan_no" 
                class="form-label">Loan Number: </label>
        <input type="text" 
                class="form-control"
                name="loan_no" 
				placeholder="Enter Loan number" 
                id="loan_no" required>
        </div>

        <div class="mb-3">
        <label for="loan_amount" 
                class="form-label">Amount: </label>
        <input type="text" 
                class="form-control" 
                name="loan_amount"
				placeholder="Enter Loan amount"
                id="loan_amount" required>
        </div>

		
		<?php 
			if(isset($success)){
				echo "<h6 class='text-center' style='color: red;'>" . $success . "<h6>";
			}
		?>
		
        <button type="submit" class="btn btn-warning center" name="btn" value="submit">Loan</button>

    </form>
    </div>


</body>
</html>