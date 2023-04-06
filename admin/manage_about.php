<?php
require_once("connect.php");
include("navbar.php");

$results_per_page = 5;
if (isset($_GET["page"])) {
    $page  = $_GET["page"];
} else {
    $page = 1;
};
$start_from = ($page - 1) * $results_per_page;
$q = "SELECT * FROM  about ORDER BY event_id ASC LIMIT $start_from, " . $results_per_page;
$result = mysqli_query($conn, $q);
?>

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


<main id="main" class="main">
<div class="container">
    <div class="row">
        <div class="offset-sm-4 col-sm-2">
            <div class="row">
                <div class="col">
                    <a href="add_about.php"><button class="btn btn-danger">Add Event</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<table class="table table-striped" border="1" id="myTable">
    <tr>
        <th>Event ID</th>        
        <th>Images</th>        
        <th>title</th>        
        <th>discription</th>        


        <th>Edit</th>
        <th>Delete</th>
        <th>Activation</th>
    </tr>
    <?php
    while ($r = mysqli_fetch_array($result)) {
    ?>
        <tr>
            <td><?php echo $r[0]; ?></td>

            <td> <img src="images/<?php echo $r[1]; ?>" height="70%" width="70%" /></td>

            
            <td><?php echo $r[2]; ?></td>
            <td><?php echo $r[3]; ?></td>
            </td>
            <td> <a href="edit_home.php?Event_id=<?php echo $r[0]; ?>"><button class="btn btn-info" style="width:70px">Edit</button></a>
            </td>
            <td> <a href="delete_home.php?Event_id=<?php echo $r[0]; ?>"><button class="btn btn-danger" style="width:100px">Delete</button></a>
            </td>
            <?php
            if ($r[3] == "Active") { ?>
                <td> <a href="deactivate_home.php?Event_id=<?php echo $r[0]; ?>"><button class="btn btn-warning" style="width:100px">Deactivate</button></a>
                </td>
            <?php
            }
            elseif ($r[3] == "Deleted") {
                ?>
                <td> <a href="activate_home.php?Event_id=<?php echo $r[0]; ?>"><button class="btn btn-primary" style="width:100px">Reactivate</button></a>
                </td>
                <?php
            }
             else {
            ?>
                <td> <a href="activate_home.php?Event_id=<?php echo $r[0]; ?>"><button class="btn btn-success" style="width:100px">Activate</button></a>
                </td>
            <?php
            }
            ?>
        </tr>
    <?php
    }
    ?>



</table>
</main>



