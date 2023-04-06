<?php 
    require_once("connect.php");
    include("navbar.php");

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
    <div id="content" class="p-4 p-md-5 pt-5">

        <h2 class="mb-4">Add person</h2>
        <h3><center>Rent</center></h3>
        <form method="post" enctype="multipart/form-data" action="add_about_action.php">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">name</label>
                <input type="text" class="form-control" id="houseno" name="houseNO" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">discription</label>
                <input type="text" class="form-control" id="discription" placeholder="discription" name="discription">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress2">House Image</label>
              <input type="file" name="image" id="House_img" class="form-control" >
            </div>
            
            <button type="submit" class="btn btn-primary" id="submit" name="submit">Add person</button>
          </form>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>


