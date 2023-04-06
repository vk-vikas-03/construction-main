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

        <h2 class="mb-4"></h2>
        <h3><center>Home image</center></h3>
        <form method="post" enctype="multipart/form-data" action="home_img.php">
            
            <div class="form-group">
              <label for="inputAddress2">Home Image</label>
              <input type="file" name="image" id="House_img" class="form-control" >
            </div>
            
            <button type="submit" class="btn btn-primary" id="submit" name="submit">Add Image</button>
          </form>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>