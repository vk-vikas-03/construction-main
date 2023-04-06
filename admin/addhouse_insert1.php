<?php
     include("connect.php");
    if(isset($_POST['submit'])){
    $houseNo = $_POST['houseNO'];
    $houseName = $_POST['houseName'];
    $housePrice = $_POST['housePrice'];
    $houseImg = $_FILES['image']['name'];
    $query = "INSERT into sale_change values($houseNo,'$houseName',$housePrice,'$houseImg')";
    if($conn->query($query)){
        ?>
        <script>
            alert("Sale house Inserted Successfully");
            window.location = "addHouse.php";
        </script>
        <?php
    }
}
?>