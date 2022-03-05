<?php
session_start();
session_destroy();
echo"<script>window.location='http://localhost/bank/index.php'</script>";
?>
