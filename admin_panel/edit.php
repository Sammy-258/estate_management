<?php

    include "../back_end/connect.php";

    $id= $_GET["id"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=..\bootstrap-5.1.3-dist\css\bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/add_product.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
</head>
<body>
    
<style>
    span, p{
        font-family: 'Ubuntu', sans-serif;
    }
    button{
        background-color: rgb(0, 128, 122) !important;
        color:white !important;
    }
    button:hover{
        background-color: rgb(2, 63, 60) !important;
        color:white !important;
    }
    input:focus{
        outline:1px solid rgb(2, 63, 60) !important;
        box-shadow:none !important;
    }

</style>


<section>
    <div class="container-fluid">
        <div class="row ">
        <?php
            $sql="SELECT `id`, `name`, `description`, `cost_of_land`, `expenses`, `selling_price`, `total_cost`, `Image`, `pdf` FROM `pro_table` WHERE id='$id'";

            $result=mysqli_query($conn, $sql);

            $row=mysqli_fetch_array($result);
            
        ?>
           <div class="col-lg-5 m-auto mt-2">
               <form action="../back_end/edit.php?id=<?php echo $id?>" method="post" class="p-5 shadow" enctype="multipart/form-data">
                   <p class="text-center fs-2 fw-bold">Edit Property From Page</p>
                   <input type="text" value="<?php echo $row["name"]?>" name="name" placeholder="Enter Name and Properties" class="form-control btn-general py-2 my-2">
                   <input type="text" value="<?php echo $row["description"]?>" name="description" placeholder="Enter description of Properties" class="form-control  btn-general py-2 my-3">
                   <div class="d-flex">
                        <div class="col-lg-6 d-flex ">
                            <p>$</p><input type="text" value="<?php echo $row["cost_of_land"]?>" name="cost_price" placeholder="Enter Cost price" class="form-control  btn-general py-2 my-2">
                        </div>
                        <div class="col-lg-6 d-flex">
                            <p>$</p><input type="text" value="<?php echo $row["expenses"]?>" name="expenses" placeholder="Enter expenses" class="form-control  btn-general py-2 my-2">
                        </div>
                        
                   </div>
                   <div class="d-flex">
                        <div class="col-lg-6 d-flex">
                            <p>$</p><input type="text" value="<?php echo $row["selling_price"]?>" name="selling_price" placeholder="Enter selling price" class="form-control  btn-general py-2 my-3">
                        </div>
                        <div class="col-lg-6 d-flex">
                            <p>$</p><input type="text" name="Total_cost_price" placeholder="Total Cost price" class="form-control  btn-general py-2 my-3">
                        </div>  
                   </div>
                   <div class="row">
                        <div class="col-lg-12">
                            <label for="">Kindly Select Image Of Property</label><Br><input type="file" name="image_product" class="form-control  btn-general py-2 my-2">
                        </div>
                        <div class="col-lg-12">
                            <label for="">Kindly Select a document Of Property</label><Br><input type="file" name="pdf_product" class="form-control  btn-general py-2 my-3">
                        </div>
                   </div>
                   <!-- <select name="where" value="<?php echo $row["where"]?>" class="form-control btn-general">
                        <option value="">Kindly Select Where You Want This Property To Appear</option>
                        <option value="main">Main Homepage</option>
                        <option value="buy">Buy Page</option>
                    </select> -->
                   <button class="btn btn-genral form-control py-3" name="submit">Submit</button>
               </form>
           </div>
        </div>
    </div>
</section>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="..\bootstrap-5.1.3-dist\js\bootstrap.js"></script>
<script src="https://kit.fontawesome.com/91c295e6a7.js " crossorigin="anonymous "></script>
</body>
</html>