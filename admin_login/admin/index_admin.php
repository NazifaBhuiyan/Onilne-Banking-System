<?php
session_start();
include("includes/database.php");
?>


<!DOCTYPE HTML>
<html>
<head>
    <title>Admin</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- JavaScript -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/bank2/admin_login/admin/index_admin.php">Bank Management</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent" >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href='index_cus.php'>Customers</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href='index_brr.php'>Borrowers</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href='index_loan.php'>Loans</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href='index_dep.php'>Deposites</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href='index_acc.php'>Accounts</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href='logout.php'>Log Out</a>
            </li>
        </ul>
    </div>
  </div>
</nav>



<div class="card">
<div class="card-body">
<img src='banking.png' alt="banking.png">
</div>
</div>

</body>
</html>         