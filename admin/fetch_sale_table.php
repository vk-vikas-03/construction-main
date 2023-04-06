<?php
require_once("connect.php");
include_once("navbar.php");

$results_per_page = 5;
if (isset($_GET["page"])) {
    $page  = $_GET["page"];
} else {
    $page = 1;
};
$start_from = ($page - 1) * $results_per_page;
$q = "SELECT * FROM  sale_change ORDER BY House_no ASC LIMIT $start_from, " . $results_per_page;
$result = mysqli_query($conn, $q);
?>

<head>

    <title>rent table</title>
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


<main id="main" class="main">
<div class="container">
    <div class="row">
        <div class="offset-sm-4 col-sm-2">
            <div class="row">
                <div class="col">
                    <a href="../Rent_form.php"><button class="btn btn-danger">Add Sale</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<table class="table table-striped" border="1" id="myTable">
    <tr>
        <th>House_No</th>        
        <th>House_name</th>        
        <th>house_price</th>        
        <th>House_img</th>        
        
    </tr>
    <?php
    while ($r = mysqli_fetch_array($result)) {
    ?>
        <tr>
            <td><?php echo $r[0]; ?></td>            
            <td><?php echo $r[1]; ?></td>
            <td><?php echo $r[2]; ?></td>
            <td> <img src="images/<?php echo $r[3]; ?>" height="100px" width="100px" /></td>

            
            
            <?php
            }
            ?>