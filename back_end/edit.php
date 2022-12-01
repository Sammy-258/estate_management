<?php
    include "connect.php";
    $id=$_GET["id"];
    if(isset($_POST["submit"])){
        $name=mysqli_real_escape_string($conn, $_POST["name"]);
        $description=mysqli_real_escape_string($conn, $_POST["description"]);
        $cost_price=mysqli_real_escape_string($conn, $_POST["cost_price"]);
        $expenses=mysqli_real_escape_string($conn, $_POST["expenses"]);
        $selling_price=mysqli_real_escape_string($conn, $_POST["selling_price"]);
        $Total_cost_price=mysqli_real_escape_string($conn, $_POST["Total_cost_price"]);
        $image_product= $_FILES["image_product"]["name"];
        $tmp_image_product= $_FILES["image_product"]["tmp_name"];
        $pdf_product= $_FILES["pdf_product"]["name"];
        $tmp_pdf_product= $_FILES["pdf_product"]["tmp_name"];
        

        if(empty($image_product)){
            if(empty($pdf_product)){
                $sql="UPDATE `pro_table` SET `name`='$name',`description`='$description',`cost_of_land`='$cost_price',`expenses`='$expenses',`selling_price`='$selling_price' WHERE id='$id'";
                $result=mysqli_query($conn, $sql);
                if($result===true){
                    header("location:../admin_panel/pro_admin.php");

                }else{

                }
            }else{
                $sql="UPDATE `pro_table` SET `name`='$name',`description`='$description',`cost_of_land`='$cost_price',`expenses`='$expenses',`selling_price`='$selling_price',`pdf`='$pdf_product' WHERE id='$id'";
                $result=mysqli_query($conn, $sql);

                move_uploaded_file($tmp_pdf_product, "../files_product/$pdf_product");

                if($result===true){
                    header("location:../admin_panel/pro_admin.php");

                }else{

                }
            }
           
        }else{
            $sql="UPDATE `pro_table` SET `name`='$name',`description`='$description',`cost_of_land`='$cost_price',`expenses`='$expenses',`selling_price`='$selling_price',`Image`='$image_product',`pdf`='$pdf_product' WHERE id='$id'";
            $result=mysqli_query($conn, $sql);
            move_uploaded_file($tmp_image_product, "../files_product/$image_product");
            move_uploaded_file($tmp_pdf_product, "../files_product/$pdf_product");

            if($result===true){
                header("location:../admin_panel/pro_admin.php");

            }else{

            }
            
        }
        

        
        
    }


?>