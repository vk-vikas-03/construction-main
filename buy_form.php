<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Buy Form</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="style1.css">
	</head>
	<body>
		<form class="hotel-reservation-form" method="post" action="">
			<h1><i class="far fa-calendar-alt"></i>Buy Form</h1>
			<div class="fields">
				<!-- Input Elements -->
				

<div class="wrapper">
	<div>
		<label for="first_name">First Name</label>
		<div class="field">
			<i class="fas fa-user"></i>
			<input id="first_name" type="text" name="first_name" placeholder="First Name" required>
		</div>
	</div>
	<div class="gap"></div>
	<div>
		<label for="last_name">Last Name</label>
		<div class="field">
			<i class="fas fa-user"></i>
			<input id="last_name" type="text" name="last_name" placeholder="Last Name" required>
		</div>
	</div>
</div>




<label for="email">Email</label>
<div class="field">
	<i class="fas fa-envelope"></i>
	<input id="email" type="email" name="email" placeholder="Your Email" required>
</div>



<label for="phone">Phone</label>
<div class="field">
	<i class="fas fa-phone"></i>
	<input id="phone" type="tel" name="phone" placeholder="Your Phone Number" required>
</div>




<div class="row gy-6 mt-2">
<div class="col-lg-6">


<div class="wrapper">
	<div>
		<label for="House">House No - Price</label>
		<div class="field">
			<select id="House" name="House_Price" required>
				<option disabled selected value="">--</option>
				<option value="0">NON - NON</option>
				<option value="1 - $3000">1 - $3000</option>
				<option value="2 - $1000">2 - $1000</option>
				<option value="3 - $5000">3 - $5000</option>
				<option value="4 - $9000">4 - $9000</option>
				<option value="5 - $2000">5 - $2000</option>
				<option value="6 - $20,000">6 - $20,000</option>
				
			</select>
		</div>
	</div>
</div>
</div>
	







<input type="submit" value="Book" name="submit">







			</div>
		</form>
	</body>
</html>




<?php 
	if(isset($_POST['submit'])){
		$First_name = @$_POST['first_name'];
		$Last_name = @$_POST['last_name'];
		$email = @$_POST['email'];		
		$phone = @$_POST['phone'];
		$house = @$_POST['House_Price'];
		

		$q = "INSERT into buy_form values('$First_name','$Last_name','$email',$phone,'$house')";
		if(mysqli_query($conn,$q)){
			?>
			<script>alert('Buy Successfully '); window.location = "sale.php";</script>


			<?php 
		}
		else{
			?>
			<script>alert(<?php echo mysqli_error($conn) ?>)</script>
			<?php
		}
		

	}
?>