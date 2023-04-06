<?php
     include("connect.php");
    if(isset($_POST['submit'])){
    
    $houseImg = $_FILES['image']['name'];
    $query = "INSERT into add_project values('$houseImg')";
    if($conn->query($query)){
        ?>
        <script>
            alert("Projrct Inserted Successfully");
            window.location = "project.php";
        </script>
        <?php
    }
}

?>
