<?php
session_start();
include("includes/database.php");
?>

<!Doctype html>
<html>

<head>
	<title>Admin login</title>
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

		 $name = $_POST['name'];
		 $password = $_POST['password'];
		 $query="select * from adminlogin where name='$name' AND password='$password'";
		 $run = mysqli_query($db_connect,$query);
		 if(mysqli_num_rows($run)>0){
		 $row=mysqli_fetch_array($run);
		 echo"<script>window.location='admin/index_admin.php'</script>";
		 $_SESSION['name'] = $name;
		 $_SESSION['password'] = $password;
		 }else{
		    $err2="<p>Invalid user</p>";
		 }
	 }

?>



<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
    <form class="border shadow p-3 rounded" style="width: 450px;" method= "POST" action="">

    <h1 class="text-center p-3">LOGIN</h1>
        <div class="mb-3">
        <label for="name"
                class="form-label">User name: </label>
        <input type="text"
                class="form-control"
                name="name"
				placeholder="Enter User Name"
                id="name" required>
        </div>

        <div class="mb-3">
        <label for="password"
                class="form-label">Password: </label>
        <input type="password"
                class="form-control"
                name="password"
				placeholder="Enter Password"
                id="password" required>
        </div>

		<?php
			if(isset($err2)){echo "<h4 class='text-center' style='color: red;'>" . $err2 . "<h4>";}
		?>

        <button type="submit" class="btn btn-primary" name="btn" value="submit">Submit</button>
    </form>
    </div>


</body>

</html>
