<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Rent Form</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="style1.css">
	</head>
	<body>
		<form class="hotel-reservation-form" method="post" action="">
			<h1><i class="far fa-calendar-alt"></i>Rent Form</h1>
			<div class="fields">
				<!-- Input Elements -->
				

				<div class="wrapper">
	<div>
		<label for="arrival">Arrival</label>
		<div class="field">
			<input id="arrival" type="date" name="arrival" required>
		</div>
	</div>
	<div class="gap"></div>
	<div>
		<label for="departure">Departure</label>
		<div class="field">
			<input id="departure" type="date" name="departure" required>
		</div>
	</div>
</div>



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
			<select id="House-Price" name="House-Price" required>
				<option disabled selected value="">--</option>
				<option value="0">NON - NON</option>
				<option value="1 - $200">1 - $200</option>
				<option value="2 - $100">2 - $100</option>
				<option value="3 - $500">3 - $500</option>
				<option value="4 - $700">4 - $700</option>
				<option value="5 - $150">5 - $150</option>
				<option value="6 - $1000">6 - $1000</option>
				<option value="7 - $200">7 - $200</option>
				<option value="8 - $830">8 - $830</option>
				<option value="9 - $550">9 - $550</option>
			</select>
		</div>
	</div>
	<div class="gap"></div>
</div>
</div>
	<div>
		
	</div>
</div>







<input type="submit" value="Book" href="book.php" name="submit">







			</div>
		</form>
	</body>
</html>


<?php 
	if(isset($_POST['submit'])){
		$Arrival = @$_POST['arrival'];
		$Departure = @$_POST['departure'];
		$fn = @$_POST['first_name'];
		$ln = @$_POST['last_name'];
		$email = @$_POST['email'];
		$phone = @$_POST['phone'];
		$house = @$_POST['House-Price'];
		

		$q = "INSERT into rent_form values('$Arrival','$Departure','$fn','$ln','$email',$phone,'$house','Rented')";
		if(mysqli_query($conn,$q)){
			?>
			<script>alert('Booked Successfully '); window.location = "Rent.php";</script>


			<?php 
		}
		else{
			?>
			<script>alert(<?php echo mysqli_error($conn) ?>)</script>
			<?php
		}
		

	}
?>