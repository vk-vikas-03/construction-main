<?php
require_once("connect.php");
if (isset($_POST['btn_event_add'])) {

    $main_photo = uniqid() . $_FILES['image']['name'];
    $title = $_POST['Title'];
    $description = $_POST['description'];
  
    // move_uploaded_file($_FILES['carousel_photo']['tmp_name'],  "Images/Events/" . $main_photo);
    move_uploaded_file($_FILES['image']['tmp_name'],  "images/" . $main_photo);

    $q = "insert into home values('','$main_photo','$title','$description')";
    // echo $q;
    if (mysqli_query($conn, $q)) {
        $_SESSION['success'] = "Event added Successfully";
    } else {
        $_SESSION['error'] = "Error in adding event";
    } ?>
    <script>
        window.location = "manage_home.php";
    </script>
<?php

}
?>
