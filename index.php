<?php

  include "back_end/connect.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uncle</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
</head>
<body>
<style>
    .display-col{
        height:30vh;
    }
    @media(max-width:500px){
        .display-col{
            height:20vh;
        }
    }
    @media(min-width:500px){
        .display-col{
            height:25vh;
        }
    }
    @media(min-width:900px){
        .display-col{
            height:30vh;
        }
    }
    p{
        font-family: 'Ubuntu', sans-serif;
    }
    .swiper-pagination-bullet-active {
        background-color:rgb(0, 128, 122) !important;
    }
    .img-logo{
        width:160px;
        height:60px;
    }
    .img-logo a img{
        width:100%;
        height:100%;
        object-fit:contain;
    }
    .img-logo-foot{
        width:180px;
        height:80px;
    }
    .img-logo-foot a img{
        width:100%;
        height:100%;
        object-fit:contain;
    }

</style>  
<nav class="position-relative py-2" style="z-index:9 !important;height:70px;">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center px-lg-4 px-md-3">
            <div class="m-0 img-logo">
                <a href="index.php" class="" style="text-decoration:none !important;"><img src="uncle_logo/main_scope.png" class="" alt=""></a>
            </div>
            <ul class="nav-ul align-items-center d-md-flex d-lg-flex d-none">
                <li class="m-0 mx-lg-4"><a href="front_end/buy.php" class="px-2">Buy From Us</a></li>
                <li class="m-0 mx-lg-4"> <a href="front_end/sell.php" class="px-2">Sell With Us</a></li>
                <li class="m-0 mx-lg-4"> <a href="front_end/about.php" class="px-2">About Us</a></li>
                
            </ul>
            <div class="d-block d-lg-none d-md-none m-0">
                <i class="fa-solid fa-bars fa-2x text-dark" id="open-menu"></i>
            </div>
        </div>
    </div>
</nav>
<div class="d-none position-fixed" style="top:0;background-color:white !important;z-index:80 !important;width:100%;height:100vh;" id="small-menu">
    <ul class="nav-ul align-items-center d-block m-0 pt-3">
        <div class="d-flex justify-content-end px-4 mb-4">
            <i class="fa-solid fa-xmark fa-3x" id="close-menu"></i>
        </div>
        <li class="m-0 text-center py-4"><a href="front_end/buy.php" class="text-dark fw-bold" style="font-size:1.5rem !important;">Buy From Us</a></li>
        <li class="m-0 text-center py-4"> <a href="front_end/sell.php" class="text-dark fw-bold" style="font-size:1.5rem !important;">Sell With Us</a></li>
        <li class="m-0 text-center py-4"> <a href="front_end/about.php" class="text-dark fw-bold" style="font-size:1.5rem !important;">About Us</a></li>
        
    </ul>
</div>
<section class="first-section">
    <!-- <nav class="position-relative" style="z-index:9 !important;">
        <div class="coontainer-fluid">
            <div class="d-flex justify-content-between px-lg-4 px-md-3">
                <div class="logo">
                    <p class="logo-text fw-bold"><span class="span-logo">U</span>ncle</p>
                </div>
                <ul class="nav-ul align-items-center d-md-flex d-lg-flex d-none">
                    <li class="m-0 mx-lg-4"><a href="" class="px-2">Buy From Us</a></li>
                    <li class="m-0 mx-lg-4"> <a href="" class="px-2">Sell With Us</a></li>
                    <li class="m-0 mx-lg-4"> <a href="" class="px-2">About Us</a></li>
                    <button class="btn btn-general m-0 mx-lg-5 bargain-btn text-light px-4 py-1">Bargain</button class="btn btn-general">
                </ul>
            </div>
        </div>
    </nav> -->
</section>

<!-- display-boxes -->
<section class="second-home-overlay" style="z-index:-1;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-12 ms-auto">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-6 display-one display-col"></div>
                    <div class="col-lg-4 col-md-6 col-6 display-two display-col"></div>
                    <div class="col-lg-4 col-md-6 col-6 display-three display-col d-md-none d-lg-block"></div>
                    <div class="col-lg-4 col-md-6 col-6 display-four display-col"></div>
                    <div class="col-lg-4 col-md-6 col-6 display-five display-col d-md-none d-lg-block"></div>    
                    <div class="col-lg-4 col-md-6 col-6 display-six display-col"></div>  
                    <div class="col-lg-4 col-md-6 col-6 display-seven display-col d-md-none d-lg-block"></div>
                    <div class="col-lg-4 col-md-6 col-6 display-eight display-col"></div>
                    <div class="col-lg-4 col-md-6 col-6 display-nine display-col "></div>  
                    <div class="col-lg-4 col-md-6 col-6 display-ten display-col d-md-none d-lg-none d-block"></div>  
                </div>
            </div>
        </div>
    </div>
</section>

<!-- major display:welcoming text and images; -->
<section class="second-home-overlay">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-12 d-none d-md-block d-lg-block">
                <div class="d-block position-relative text-welcome-region">
                    <p class="text-admire">Landscape, Tourism and</p>
                    <p class="under-welcome-text" style="">&nbsp;</p>
                    <p class="text-admire">Meaning</p>
                    <p style="margin-right:40px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quaerat eos necessitatibus quibusdam magni earum voluptatem fugiat culpa maxime eum quas illo temporibus dolore repellendus, dolorum doloribus ducimus quo modi.</p>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-12 ms-auto p-0" style="z-index:-2;">
                <img src="images/multifamily.jpg" alt="">
            </div>
        </div>
    </div>
</section>

<!-- small screen overlay -->
<section class="second-home-overlay-small d-md-none d-block d-lg-none" style="z-index:2 !important;">
</section>


<!-- only small screen for text -->
<section class="second-home-overlay d-md-none d-block d-lg-none" style="z-index:5 !important;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-block position-relative text-welcome-region">
                    <p class="text-admire">Landscape, Tourism and Meaning</p>

                    
                    <p class="under-welcome-text" style="">&nbsp;</p>
                    <p class="gibbrish-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quaerat eos necessitatibus quibusdam magni earum voluptatem fugiat culpa maxime eum quas illo temporibus dolore repellendus, dolorum doloribus ducimus quo modi.</p>
                </div>
            </div>
           
        </div>
    </div>
</section>

<!-- second-section -->
<section class="second-section">
    <div class="container">
        <div class=" row">
            <div class="col-lg-5 col-md-9 col-12">
                <p class="second-section-heading-text">Current And Most Popular Property</p>
            </div>
        </div>
    </div>
   
    <div class="position-relative swiper mySwiper container px-lg-0 pb-5 d-lg-block d-md-none d-none">
    
        <div class="swiper-wrapper">
            <?php
                    
                $sql="SELECT * FROM `pro_table` WHERE `where`='main'";
                $result=mysqli_query($conn, $sql);

                while($row=mysqli_fetch_assoc($result)){
                    
                    $image=$row["Image"]

            ?>
            <div class="swiper-slide col-lg-3 col-md-4 col-9">
                <div class="card">
                    <div class="card-body p-0 px-2 shadow py-1">
                        <div class="card-img-box">
                            <img src="images/<?php echo $image?>" alt="">
                        </div>
                        <div class="card-text-describe">
                            <span class="m-0 card-text-describe-text"><?php echo $row["name"]?><span>
                            <br>
                            <p class="m-0 card-text-describe-text " style="line-height:16px;font-size:14px !important;font-weight: 400 !important;"><span><?php echo $row["description"]?></span></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="fw-bold m-0" style="font-size:18px;"><?php echo $row["selling_price"]?></p>
                                <button class="btn btn-general m-0 px-4 py-1 text-light enquire-btn">Enquire now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
        <span class="fine-boi position-absolute" style="right:1%;top:25%;z-index:10;"><i class="fa-solid fa-angle-right fs-3 text-light px-3 py-2 rounded-circle"style="background-color:rgb(50, 73, 72);"></i></span>
        <span class="ugly-boi position-absolute" style="top:25%;left:1%;z-index:10;"><i class="fa-solid fa-angle-left fs-3 text-light px-3 py-2 rounded-circle"style="background-color:rgb(50, 73, 72);"></i></span>
    </div>
    <div class="position-relative swiper mineSwiper container pb-5 d-none d-md-block d-lg-none">
    
        <div class="swiper-wrapper">
            <?php
                    
                $sql="SELECT * FROM `pro_table` WHERE `where`='main'";
                $result=mysqli_query($conn, $sql);

                while($row=mysqli_fetch_assoc($result)){
                    
                    $image=$row["Image"]

            ?>
            <div class="swiper-slide col-lg-3 col-md-4 col-9">
                <div class="card">
                    <div class="card-body p-0 px-2 shadow py-1">
                        <div class="card-img-box">
                            <img src="images/<?php echo $image?>" alt="">
                        </div>
                        <div class="card-text-describe">
                            <span class="m-0 card-text-describe-text"><?php echo $row["name"]?><span>
                            <br>
                            <p class="m-0 card-text-describe-text " style="line-height:16px;font-size:14px !important;font-weight: 400 !important;"><span><?php echo $row["description"]?></span></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="fw-bold m-0" style="font-size:18px;"><?php echo $row["selling_price"]?></p>
                                <a href="front_end/enquire.php?id=<?php echo $row["id"]?>" class="btn btn-general m-0 px-4 py-1 text-light enquire-btn" style="text-decoration:none;">Enquire now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
        <span class="fine-boi position-absolute" style="right:1%;top:25%;z-index:10;"><i class="fa-solid fa-angle-right fs-3 text-light px-3 py-2 rounded-circle"style="background-color:rgb(50, 73, 72);"></i></span>
        <span class="ugly-boi position-absolute" style="top:25%;left:1%;z-index:10;"><i class="fa-solid fa-angle-left fs-3 text-light px-3 py-2 rounded-circle"style="background-color:rgb(50, 73, 72);"></i></span>
    </div>
    <div class="position-relative swiper missSwiper container pb-5 d-block d-md-none d-lg-none">
    
        <div class="swiper-wrapper">
            <?php
                    
                $sql="SELECT * FROM `pro_table` WHERE `where`='main'";
                $result=mysqli_query($conn, $sql);

                while($row=mysqli_fetch_assoc($result)){
                    
                    $image=$row["Image"]

            ?>
            <div class="swiper-slide col-lg-3 col-md-4 col-9">
                <div class="card">
                    <div class="card-body p-0 px-2 shadow py-1">
                        <div class="card-img-box">
                            <img src="images/<?php echo $image?>" alt="">
                        </div>
                        <div class="card-text-describe">
                            <span class="m-0 card-text-describe-text"><?php echo $row["name"]?><span>
                            <br>
                            <p class="m-0 card-text-describe-text " style="line-height:16px;font-size:14px !important;font-weight: 400 !important;"><span><?php echo $row["description"]?></span></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="fw-bold m-0" style="font-size:18px;"><?php echo $row["selling_price"]?></p>
                                <button class="btn btn-general m-0 px-4 py-1 text-light enquire-btn">Enquire now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
        
   </div>
</section>

<!-- third section -->
<section class="third-section py-5">
    <div class="container">
        <div class="row">
            <div class="distribute-col col-lg-6 col-md-7 col-12 position-relative px-0 d-flex justify-content-between">
                <div class="d-block pattern-img position-absolute" style="width:200px;height:200px;top:-40px;left:-40px;">
                    <img src="images/pattern.png" alt="">
                </div>
                <div class="third-call-to-action-image-one">
                    <img src="images/manager.jpg" alt="">
                </div>
                <div class="third-call-to-action-image-two">
                    <img src="images/management.jpg" alt="">
                </div>
                <div class=" position-absolute third-call-to-action-image-three ">
                    <img src="images/management1.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-5 col-12 px-4 pt-5 pt-lg-0 pt-md-0">
                <div class="d-block">
                    <p class="third-section-heading-one">We Offer You One Of The Best Property</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint veniam perspiciatis iste nihil odio, beatae odit sunt consequuntur! Nulla quidem eaque suscipit, corporis laboriosam quibusdam fuga. Qui quaerat cum voluptas? Laudantium in minima veritatis voluptatum cum, est rem odio quia odit nobis facere sapiente commodi, facilis non reprehenderit! Cupiditate, voluptas.</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint veniam perspiciatis iste nihil odio, beatae odit sunt consequuntur! Nulla quidem eaque suscipit, corporis laboriosam quibusdam fuga. nte commodi, facilis non reprehenderit! Cupiditate, voluptas.</p>
                    <button class="btn btn-general call-to-action-btn text-light px-5">Enquire Now</button>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- fourth-section -->
<section class="fourth-section mt-lg-4 mt-3 py-3">
    <div class="container-lg">
        <div class="row">
            <div class="col-lg-5 col-md-9 col-12">
                <p class="second-section-heading-text">Most Of Our Popular Services</p>
            </div>
        </div>
        <div class="row my-2"> 

            <div class="col-lg-4 col-md-4 m-auto my-2">
                <div class="fourth-section-img-box position-relative">
                    <img src="images/land.jpg" alt="" srcset="">
                    <div class="position-absolute display-under" >
                        <div class="position-relative px-4" style="width:fit-content;top:25%;">
                            <p class="display-under-main-text text-center">Land Property</p>
                            <p class=" text-light text-center" style="font-weight:500 !important;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut cum quaerat maxime dolor et quae quas nihil expedita nulla odio?</p>
                        </div>
                    </div>
                  
                    <div class="position-absolute display-under-show">
                        <div class="position-relative px-4 m-auto" style="width:fit-content;top:42%;">
                            <p class="display-under-main-text text-dark">Land Property</p>
                            
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-4 col-md-4 m-auto my-2">
                <div class="fourth-section-img-box position-relative">
                    <img src="images/fourth-house.jpg" alt="" srcset="">
                    <div class="position-absolute display-under" >
                        <div class="position-relative px-4" style="width:fit-content;top:25%;">
                            <p class="display-under-main-text text-center">House Property</p>
                            <p class=" text-light text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut cum quaerat maxime dolor et quae quas nihil expedita nulla odio?</p>
                        </div>
                    </div>
                    <div class="position-absolute display-under-show">
                        <div class="position-relative px-4 m-auto" style="width:fit-content;top:42%;">
                            <p class="display-under-main-text text-dark">House Property</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 m-auto my-2">
                <div class="fourth-section-img-box position-relative">
                    <img src="images/services.jpg" alt="" srcset="">
                    <div class="position-absolute display-under m-auto">
                        <div class="position-relative px-4 m-auto" style="width:fit-content;top:25%;">
                            <p class="display-under-main-text text-center">Other Property</p>
                            <p class=" text-light text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut cum quaerat maxime dolor et quae quas nihil expedita nulla odio?</p>
                        </div>
                    </div>
                    <div class="position-absolute display-under-show">
                        <div class="position-relative px-4 m-auto" style="width:fit-content;top:42%;">
                            <p class="display-under-main-text text-dark">Other Property</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<!-- fifth-section -->
<section class="" style="overflow:hidden !important;">
    <div class="container">
        <div class="row my-5">
           
            <div class="col-lg-6 col-md-6 col-12" >
                <div class="d-block px-3 m-auto">
                    <p class="third-section-heading-one">Available Property to Suite Your Taste</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero tenetur et placeat nihil cumque ea, asperiores fugiat facilis animi dolorem consectetur nobis omnis veritatis corporis corrupti quaerat quibusdam accusantium molestias dicta tempora! Tempore laboriosam explicabo ea, iure nihil ad ratione odit debitis? Reprehenderit aliquid perspiciatis similique fugiat numquam. Obcaecati, voluptas!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero tenetur et placeat nihil cumque ea, asperiores fugiat facilis animi dolorem icta tempora! Tempore laboriosam explicabo ea, iure nihil ad ratione odit debitis? Reprehenderit aliquid perspiciatis similique fugiat numquam. Obcaecati, voluptas!</p>
                    <button class="btn btn-general call-to-action-btn text-light px-5">Enquire Now</button>
                </div>
            </div>
            <div class="mt-5 distribute-col col-lg-6 col-md-6 col-12 position-relative px-0 d-flex justify-content-between">
                <div class="d-block pattern-img position-absolute" style="width:200px;height:200px;top:-40px;right:-20px;">
                    <img src="images/pattern.png" alt="">
                </div>
                <div class="third-call-to-action-image-two">
                    <img src="images/management.jpg" alt="">
                </div>
                <div class="third-call-to-action-image-one">
                    <img src="images/manager.jpg" alt="">
                </div>
                <div class=" position-absolute third-call-to-action-image-three-fifth ">
                    <img src="images/management1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>





<!-- sixth-section -->
<section class="sixth-section pt-5">
    <div class="container-fluid">
        <div class=" row">
            <div class=" col-12">
                <p class="second-section-heading-text text-center">Hear What Our Customer Say</p>
            </div>
        </div>
    </div>
   
    <div class="position-relative swiper tesSwipersmall m-auto px-lg-0 mt-4 pb-5 d-lg-none d-md-none d-block" style="width:80% !important;">
    
        <div class="swiper-wrapper">
            <div class="swiper-slide col-lg-6 col-md-6 col-12 m-auto">
                <div class="d-block">
                    <div class="card" style="border:none !important;">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <i class="fa-solid fa-quote-left fa-3x opacity-50" style="color:rgb(0, 128, 122);"></i>
                            </div>
                            <div class="text-area-testimonial text-center">
                                <i class="fa-solid fa-quote-left fa-2x"></i>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum nisi quas veniam officiis? Veritatis et nisi accusamus eos ipsa nihil.</p>
                            </div>
                            <div class="testimonial-img-box rounded-circle m-auto">
                                <img src="images/image2.jpg" alt="" class="rounded-circle">
                            </div>
                            <p class="name-of-person text-center">stephen jessica</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide col-lg-6 col-md-6">
                <div class="d-block">
                    <div class="card" style="border:none !important;">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <i class="fa-solid fa-quote-left fa-3x opacity-50" style="color:rgb(0, 128, 122);"></i>
                            </div> 
                            <div class="text-area-testimonial text-center">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum nisi quas veniam officiis? Veritatis et nisi accusamus eos ipsa nihil.</p>
                            </div>
                            <div class="testimonial-img-box rounded-circle m-auto">
                                <img src="images/image1.jpg" alt="" class="rounded-circle">
                            </div>
                            <p class="name-of-person text-center">Kionsola JK</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide col-lg-6 col-md-6">
                <div class="d-block">
                    <div class="card" style="border:none !important;">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <i class="fa-solid fa-quote-left fa-3x opacity-50" style="color:rgb(0, 128, 122);"></i>
                            </div>
                            <div class="text-area-testimonial text-center">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum nisi quas veniam officiis? Veritatis et nisi accusamus eos ipsa nihil.</p>
                            </div>
                            <div class="testimonial-img-box rounded-circle m-auto">
                                <img src="images/image3.jpg" alt="" class="rounded-circle">
                            </div>
                            <p class="name-of-person text-center">Agbawo firiyoyo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="position-relative swiper tesSwiper m-auto px-lg-0 mt-4 pb-5 d-lg-block d-md-block d-none" style="width:80% !important;">
    
        <div class="swiper-wrapper">
            <div class="swiper-slide col-lg-6 col-md-6 col-12 m-auto">
                <div class="d-block">
                    <div class="card" style="border:none !important;">
                        <div class="card-body">
                            
                            <div class="text-area-testimonial text-center">
                                <div class="d-flex justify-content-center">
                                    <i class="fa-solid fa-quote-left fa-3x opacity-50" style="color:rgb(0, 128, 122);"></i>
                                </div>
                                
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum nisi quas veniam officiis? Veritatis et nisi accusamus eos ipsa nihil.</p>
                            </div>
                            <div class="testimonial-img-box rounded-circle m-auto">
                                <img src="images/image2.jpg" alt="" class="rounded-circle">
                            </div>
                            <p class="name-of-person text-center">stephen jessica</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide col-lg-6 col-md-6">
                <div class="d-block">
                    <div class="card" style="border:none !important;">
                        <div class="card-body">
                        <div class="d-flex justify-content-center">
                                    <i class="fa-solid fa-quote-left fa-3x opacity-50" style="color:rgb(0, 128, 122);"></i>
                                </div>
                            <div class="text-area-testimonial text-center">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum nisi quas veniam officiis? Veritatis et nisi accusamus eos ipsa nihil.</p>
                            </div>
                            <div class="testimonial-img-box rounded-circle m-auto">
                                <img src="images/image1.jpg" alt="" class="rounded-circle">
                            </div>
                            <p class="name-of-person text-center">Kionsola JK</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide col-lg-6 col-md-6">
                <div class="d-block">
                    <div class="card" style="border:none !important;">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <i class="fa-solid fa-quote-left fa-3x opacity-50" style="color:rgb(0, 128, 122);"></i>
                            </div>
                            <div class="text-area-testimonial text-center">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum nisi quas veniam officiis? Veritatis et nisi accusamus eos ipsa nihil.</p>
                            </div>
                            <div class="testimonial-img-box rounded-circle m-auto">
                                <img src="images/image3.jpg" alt="" class="rounded-circle">
                            </div>
                            <p class="name-of-person text-center">Agbawo firiyoyo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <span class="fine-boi position-absolute" style="right:1%;top:25%;z-index:10;"><i class="fa-solid fa-angle-right fs-3 text-light px-3 py-2 rounded-circle"style="background-color:rgb(50, 73, 72);"></i></span>
        <span class="ugly-boi position-absolute" style="top:25%;left:1%;z-index:10;"><i class="fa-solid fa-angle-left fs-3 text-light px-3 py-2 rounded-circle"style="background-color:rgb(50, 73, 72);"></i></span> -->
        <div class="swiper-pagination"></div>
        </div>
    </div>
    
</section>






<footer>
    <div class="container pt-5 pb-2">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-10 m-auto">
                
                <div class="m-0 img-logo-foot m-auto">
                    <a href="../index.php" class="" style="text-decoration:none !important;"><img src="uncle_logo/you.png" class="" alt=""></a>
                </div>
                   
                
                <div class="d-flex align-tems-center m-auto mt-lg-4" style="width:fit-content !important;">
                    <i class="fa-brands fa-facebook-f  rounded-circle fs-6 mx-2 bg-light" style="padding:9px 12px;color:rgb(49, 141, 136);"></i>
                    <i class="fa-brands fa-instagram rounded-circle fs-6 mx-2 bg-light" style="padding:9px 12px;color:rgb(49, 141, 136);"></i>
                    <i class="fa-brands fa-twitter  rounded-circle fs-6 mx-2 bg-light" style="padding:9px 12px;color:rgb(49, 141, 136);"></i>
                    <i class="fa-brands fa-linkedin-in  rounded-circle fs-6 mx-2 bg-light" style="padding:9px 12px;color:rgb(49, 141, 136);"></i>
                    <i class="fa-brands fa-whatsapp rounded-circle fs-6 mx-2 bg-light" style="padding:9px 12px;color:rgb(49, 141, 136);"></i>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 p-0 col-10 m-auto pt-5 pt-lg-0 pt-md-0 d-lg-none d-md-block d-block">
                <div class="d-block m-auto">
                    <p style="color:rgb(49, 141, 136);line-height:10px;">Suscribe to our newsletter</p>
                    <div class="d-flex d-flex-footer-input" style="height:35px;width:100%;">
                        <input type="text" class="footer-input" style="border:none !important;width:75% !important;height:100% !important;border-radius:5px 0px 0px 5px;">
                        <button class="btn btn-general text-light position-relative" style="left:0;background-color:rgb(49, 141, 136);width:25% !important;border-radius:0px 5px 5px 0px !important;height:100% !important;">Submit</button>
                    </div>
                </div>
                <div class="d-block pt-2">
                    <p class="text-light" style="font-size:12px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nesciunt alias laborum culpa.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12 px-lg-5 px-0 col-md-6 pt-lg-0 pt-md-5 pt-5">
                <ul class="nav-ul align-items-center d-md-flex d-lg-flex d-none m-auto" style="width:fit-content !important;">
                    <li class="m-0"><a href="" class="px-3 text-light">Buy From Us</a></li>
                    <li class="m-0"> <a href="" class="px-3 text-light">Sell With Us</a></li>
                    <li class="m-0"> <a href="" class="px-3 text-light">About Us</a></li>
                    
                </ul>
                <ul class="nav-ul align-items-center d-md-none d-lg-none d-flex m-auto" style="width:fit-content !important;">
                    <li class="m-0"><a href="" class="px-2 text-light" style="font-size:14px !important;">Buy From Us</a></li>
                    <li class="m-0"> <a href="" class="px-2 text-light" style="font-size:14px !important;">Sell With Us</a></li>
                    <li class="m-0"> <a href="" class="px-2 text-light" style="font-size:14px !important;">About Us</a></li>
                   
                </ul>
                <div class="d-block text-region pt-lg-3 pt-md-3 pt-0 px-3 px-lg-0 px-md-0" style="font-size:12px;">
                    <p class="text-light text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum nulla ullam nam sit a delectus perspiciatis dicta? Id, minima facilis. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo, beatae?</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 p-0 d-lg-block d-none d-md-none">
                <div class="d-block m-auto">
                    <p style="color:rgb(49, 141, 136);line-height:10px;">Suscribe to our newsletter</p>
                    <form action="">
                        <div class="d-flex d-flex-footer-input" style="height:35px;width:100%;">
                        
                            <input type="email" class="footer-input px-1" style="border:none !important;width:75% !important;height:100% !important;border-radius:5px 0px 0px 5px;">
                            <button class="btn btn-general text-light position-relative" style="left:0;background-color:rgb(49, 141, 136);width:25% !important;border-radius:0px 5px 5px 0px !important;height:100% !important;">Submit</button>
                            
                        </div>
                    </form>
                </div>
                <div class="d-block pt-2">
                    <p class="text-light" style="font-size:12px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nesciunt alias laborum culpa.</p>
                </div>
            </div>
        </div>
        <hr class="text-light">
        <div class="row pt-3">
            <div class="d-flex justify-content-between align-items-center">
                <p class="text-light">uncle&copy;copyright 2022</p>
                <p class="text-light opacity-75">Designed by Dev.sammy</p>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="bootstrap.js"></script>
<script src="https://kit.fontawesome.com/91c295e6a7.js " crossorigin="anonymous "></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        
        slidesPerView: 4.5,
        spaceBetween: 5,
        navigation: {
            nextEl: '.fine-boi',
            prevEl: '.ugly-boi',
        },
    });
    var swiper = new Swiper(".mineSwiper", {
    
        slidesPerView: 2.7,
        spaceBetween: 5,
        navigation: {
            nextEl: '.fine-boi',
            prevEl: '.ugly-boi',
        },
    });
    var swiper = new Swiper(".missSwiper", {
    
        slidesPerView: 1.5,
        spaceBetween: 5,
        navigation: {
            nextEl: '.fine-boi',
            prevEl: '.ugly-boi',
        },
    });
    var swiper = new Swiper(".tesSwiper", {
        slidesPerView: 2,
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    var swiper = new Swiper(".tesSwipersmall", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    document.querySelector(".footer-input").addEventListener("click", ()=>{
        document.querySelector(".d-flex-footer-input").classList.add("border-add");
    });
    document.getElementById("open-menu").addEventListener("click",()=>{
        document.getElementById("small-menu").classList.add("d-block");
        document.getElementById("small-menu").classList.remove("d-none");
    })
    document.getElementById("close-menu").addEventListener("click",()=>{
        document.getElementById("small-menu").classList.remove("d-block");
        document.getElementById("small-menu").classList.add("d-none");
    })
</script>
</body>
</html>