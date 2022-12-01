<?php
    session_start();
  include "connect.php";

  if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $password=$_POST["password"];

    $sql="SELECT *FROM `admin` WHERE `name`='$name'";
    $result=mysqli_query($conn, $sql);

    if($result===true){
    $sql="SELECT *FROM `admin` WHERE `password`= '" . md5($password) . "'";
    $result=mysqli_query($conn, $sql);
       if($result===true){
          $_SESSION["name"]=$name;
          $_SESSION["password"]=$password;
          header("location:../admin_panel/pro_admin.php");
          
       }else{
            header("location:../admin_panel/index.php?error=Wrong Login details");
       }
    }else{
        header("location:../admin_panel/index.php?error=Wrong Login details");
   }
  }

?>