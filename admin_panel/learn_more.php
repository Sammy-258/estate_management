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
    <link rel="stylesheet" href="../css/admin.css">
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
    .col-lg-5 .d-block .img-box-learn-more{
        width:100%;
        height:200px;
    }
    .col-lg-5 .d-block .img-box-learn-more img{
        width:100%;
        height:100%;
        object-fit:cover;
    }
    .col-lg-5 .d-block .img-box-learn-more embed{
        width:100%;
        height:100%;
        object-fit:cover;
    }
</style>


<section>
    <div class="container-fluid">
        <div class="row mt-5 d-lg-block d-md-block d-none">
            <div class="col-lg-7 col-md-9 m-auto mt-5 shadow p-4">
                <div class="row">
                    <?php
                        $sql="SELECT `id`, `name`, `description`, `cost_of_land`, `expenses`, `selling_price`, `total_cost`, `Image`, `pdf` FROM `pro_table` WHERE id='$id'";

                        $result=mysqli_query($conn, $sql);

                        $row=mysqli_fetch_array($result);
                        $image=$row["Image"];
                        $pdf=$row["pdf"];
                    ?>
                    <div class="col-lg-5 col-md-5">
                        <div class="d-block">
                            <div class="img-box-learn-more">
                                <img src="../files_product/<?php echo $image?>" alt="">
                            </div>
                            <div class="img-box-learn-more mt-2">
                                <embed src="../files_product/<?php echo $pdf?>"/>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="d-block">
                            <p class="fs-3 fw-bolder"><?php echo $row["name"]?></p>
                            <p class="fs-4 fw-bold"><?php echo $row["description"]?></p>
                            <p class="fs-5 fw-normal">This Property cost about <span class="fw-bold" style="text-decoration:underline;">$<?php echo $row["cost_of_land"]?></span> the expenses spent on it is <span class="fw-bold" style="text-decoration:underline;">$<?php echo $row["expenses"]?></span> And the total cost is <span class="fw-bold" style="text-decoration:underline;">$<?php echo $row["total_cost"]?></span> This property has been decided to be sold out for <span class="fw-bold" style="text-decoration:underline;">$<?php echo $row["selling_price"]?></span></p>
                        </div>
                        <div class="d-flex justify-content-center">
                             <a href="pro_admin.php" class="btn btn-general px-5 fs-5 text-light" style="background-color: rgb(0, 128, 122);">Go Back</a>
                        </div>
                    </div>
                </div>
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