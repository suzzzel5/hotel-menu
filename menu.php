<?php
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Inventory Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/x-icon" href="images/favicon.jpg">
	<script src="jquery.js"></script>
	<style type="text/css">

	</style>
</head>
<body>
	<div class="nav-bar">
		<div class="system-name">Inventory System</div>
		<a href="logout.php"> logout</a> 
		<div class="user">Welcome :<?php echo $_SESSION['username']; ?></div>
		
	</div>
<div class="menu">
	<a href="information.php">Insert Items</a>
	<a href="displayitem.php" >Display Items</a>
	<a href="userform.php" >Register Form</a>
	<a href="displayuser.php" >Display User</a>
	<a href="purchaseForm.php" >Purchase</a>
	<a href="" >Sale</a>
	<a href="" >Display Purchase Data</a>
	<a href="">Stock</a>
</div>



