<?php
    include "connect.php";

    if(isset($_POST["submit"])){
        $date=mysqli_real_escape_string($conn, $_POST["date"]);
        $name_of_payee=mysqli_real_escape_string($conn, $_POST["name_of_payee"]);
        $name_of_receiver=mysqli_real_escape_string($conn, $_POST["name_of_receiver"]);
        $amount_paid_out=mysqli_real_escape_string($conn, $_POST["amount_paid_out"]);
       


        $sql="INSERT INTO `customer_table`(`date`, `name_of_payee`, `name_of_receiver`, `amount_paid_out`) VALUES ('$date','$name_of_payee','$name_of_receiver','$amount_paid_out')";

        $result=mysqli_query($conn, $sql);
        

        if($result===true){
            header("location:../admin_panel/pro_admin.php");

        }else{

        }
    }


?>