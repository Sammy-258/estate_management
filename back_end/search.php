<?php
    include "connect.php";
    if(isset($_GET["id"])){
        $id=$_GET["id"];

        $sql="UPDATE `products` SET `status`='purchased' WHERE `id`='$id'";
        $result=mysqli_query($conn, $sql);

        
    }

?>