<?php
session_start();
include("includes/database.php");
?>

<!DOCTYPE HTML>
<html>
<head>
  <title>Customer</title>
  <!--CSS only -->
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
    <a class="navbar-brand" href="http://localhost/bank2/customer_login/customer/index_customer.php">Bank Management</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent" >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index_depmoney.php">Deposite Money</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index_getloan.php">Get Loan</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index_transaction.php">Transaction</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index_payloan.php">Payloan</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index_delwithdraw.php">Withdraw</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href='logout.php'>Log Out</a>
            </li>
        </ul>
    </div>
  </div>
</nav>






<?php 
$cust_name = $_SESSION['uname'];
$acc_no=  $_SESSION['acc_no'];
$query="select * from viewcus where customer_name='$cust_name' and account_no='$acc_no'";
$run=mysqli_query($db_connect,$query);
if(mysqli_num_rows($run)>0){
while($row=mysqli_fetch_array($run)){
  $_SESSION['customer_id']=$row['customer_id'];
?>

<div class="container">

<h1 style='text-align:center'>Customer</h1>

<table class="table table-striped">
  <tr>
    <td>Customer Name:</td>
    <td><?php echo $row['customer_name'];?></td>
  </tr>
  <tr>
      <td>Customer ID No:</td>
      <td><?php echo $row['customer_id'];?></td>
  </tr>
  <tr>
      <td>Borrow ID No:</td>
      <td><?php echo $row['borrower_id'];?></td>
  </tr>
  <tr>
      <td>Loan No:</td>
      <td><?php echo $row['loan_no'];?></td>
  </tr>
  <tr>
      <td>Loan Amount:</td>
      <td><?php echo $row['loan_amount'];?></td>
  </tr>
  <tr>
      <td>deposite ID No:</td>
      <td><?php echo $row['depositor_id'];?></td>
  </tr>
  <tr>
      <td>Account No:</td>
      <td><?php echo $row['account_no'];?></td>
  </tr>
  <tr>
      <td>Deposite:</td>
      <td><?php echo $row['balance'];?></td>
  </tr>
  <tr>
      <td>Street:</td>
      <td><?php echo $row['customer_street'];?></td>
  </tr>
  <tr>
      <td>City:</td>
      <td><?php echo $row['customer_city'];?></td>
  </tr>
  <tr>
      <td>Phone Number:</td>
      <td><?php echo $row['phone_no'];?></td>
  </tr>
  <tr>
      <td>Email:</td>
      <td><?php echo $row['e_mail'];?></td>
  </tr>
<?php
}
}
?>
</table>

</div>

</body>

</html>         