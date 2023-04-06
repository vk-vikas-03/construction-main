<?php 
    require_once("connect.php");

?>
<!doctype html>
<html lang="en">
  <head>

  	<title>Admin Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
        <style>
            input{
                border-color:red;
            }
        </style>
  </head>
  <body>
    <?php include("navbar.php");?>
    <div id="content" class="p-4 p-md-5 pt-5">

        <h2 class="mb-4">Add house Rent</h2>
        <h3><center>Rent</center></h3>
        <form method="post" enctype="multipart/form-data" action="addhouse_insert.php">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">House no</label>
                <input type="number" class="form-control" id="houseno" name="houseNO" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">House Name</label>
                <input type="text" class="form-control" id="houseName" placeholder="houseName" name="houseName">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">House Price</label>
              <input type="text" class="form-control" id="housePrice" name="housePrice">
            </div>
            <div class="form-group">
              <label for="inputAddress2">House Image</label>
              <input type="file" name="image" id="House_img" class="form-control" >
            </div>
            
            <button type="submit" class="btn btn-primary" id="submit" name="submit">Add house</button>
          </form>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>


<h2 class="mb-4" style="margin: 100px;">Add house Sale </h2>
        <h3><center>Sale</center></h3>
        <form method="post" enctype="multipart/form-data" action="addhouse_insert1.php">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">House no</label>
                <input type="number" class="form-control" id="houseno" name="houseNO" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">House Name</label>
                <input type="text" class="form-control" id="houseName" placeholder="houseName" name="houseName">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">House Price</label>
              <input type="text" class="form-control" id="housePrice" name="housePrice">
            </div>
            <div class="form-group">
              <label for="inputAddress2">House Image</label>
              <input type="file" name="image" id="House_img" class="form-control" >
            </div>  
            
            <button type="submit" class="btn btn-primary" id="submit" name="submit">Add sale house</button>
          </form>


          
