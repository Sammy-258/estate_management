<?php
   include "connect.php";

   $id=$_GET["id"];

   $sql="DELETE FROM `pro_table` WHERE id='$id'";
   $result=mysqli_query($conn, $sql);

   if($result===true){
    header("location:../admin_panel/pro_admin.php");
   }else{
    
   }

?>