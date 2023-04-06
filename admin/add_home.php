<?php
require_once("connect.php");

?>
<!doctype html>
<html lang="en">

<head>

    <title>home add</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        input {
            border-color: red;
        }
    </style>
</head>

<body>
    <?php include("navbar.php"); ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>


<h2 class="mb-4" style="margin: 100px;">Add home </h2>
<h3>
    
</h3>
<form method="post" enctype="multipart/form-data" action="add_home_action.php">
    <div class="form-row">
        <div class="form-group col-md-6">

            <div class="form-group">
                <label for="inputAddress2">image</label>
                <input type="file" name="image" id="House_img" class="form-control">
            </div>
            <label for="inputEmail4">Title</label>
            <input type="text" class="form-control" id="houseno" name="Title" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">description </label>
            <input type="text" class="form-control" id="houseName" placeholder="description" name="description">
        </div>
    </div>

    <button type="submit" class="btn btn-primary" id="submit" name="btn_event_add">Add Event</button>
</form>