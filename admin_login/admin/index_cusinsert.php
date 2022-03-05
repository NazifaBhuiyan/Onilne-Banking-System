<?php
include("includes/database.php");
?>

<!Doctype html>
<html>
<head>
	<!--<title>Insert Customer</title>
	<link rel='stylesheet' type='text/css' href='styles/style_cusinsert.css' media='all'>
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

		 $cus_name = $_POST['customer_name'];
		 $cus_street = $_POST['customer_street'];
		 $cus_city = $_POST['customer_city'];
		 $cus_DOB = $_POST['date_of_birth'];
		 $cus_Phno = $_POST['phone_no'];
		 $cus_email = $_POST['e_mail'];
		 $query="insert into customer(customer_name, customer_street, customer_city, Date_of_birth, phone_no, e_mail) values('$cus_name','$cus_street','$cus_city','$cus_DOB','$cus_Phno','$cus_email')";
		 if(mysqli_query($db_connect,$query)){

			$success = "<p>Thankyou, record has submitted!!</p>";
		 }
		 else {
		 	$success =  "Failed!";
		 }
	 }
?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
    <form class="border shadow p-3 rounded" style="width: 450px;" method= "POST" action="">

		<?php
			if(isset($err)){echo $err;}
			if(isset($err2)){echo $err2;}
		?>

    <h1 class="text-center p-3">Insert New Customer</h1>
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
        <label for="e_mail"
                class="form-label">Customer Email: </label>
        <input type="email"
                class="form-control"
                name="e_mail"
				placeholder="Enter Customer email"
                id="e_mail" required>
        </div>

		<div class="mb-3">
        <label for="customer_street"
                class="form-label">Customer Street: </label>
        <input type="text"
                class="form-control"
                name="customer_street"
				placeholder="Enter Customer Street"
                id="customer_street" required>
        </div>

		<div class="mb-3">
        <label for="customer_city"
                class="form-label">Customer City: </label>
        <input type="text"
                class="form-control"
                name="customer_city"
				placeholder="Enter Customer City"
                id="customer_city" required>
        </div>

		<div class="mb-3">
        <label for="date_of_birth"
                class="form-label">Date of Birth: </label>
        <input type="date"
                class="form-control"
                name="date_of_birth"
				placeholder="Enter Customer DOB"
                id="date_of_birth" required>
        </div>

		<div class="mb-3">
        <label for="phone_no"
                class="form-label">Customer Phone no: </label>
        <input type="text"
                class="form-control"
                name="phone_no"
				placeholder="Enter Customer Phone no"
                id="phone_no" required>
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
