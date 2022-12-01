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
    <link rel="stylesheet" href="../css/about.css">
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
</style>
<nav class="position-relative py-2" style="z-index:9 !important;height:70px;">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center px-lg-4 px-md-3">
            <div class="logo m-0">
                <a href="../index.php" class="logo-text fw-bold" style="text-decoration:none !important;color:black;"><span class="span-logo">U</span>ncle</a>
            </div>
            <ul class="nav-ul m-0 align-items-center d-md-flex d-lg-flex d-none">
                <li class="m-0 mx-lg-4"><a href="buy.php" class="px-2">Buy From Us</a></li>
                <li class="m-0 mx-lg-4"> <a href="sell.php" class="px-2">Sell With Us</a></li>
                <li class="m-0 mx-lg-4"> <a href="about.php" class="px-2">About Us</a></li>
                
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
        <li class="m-0 text-center py-4"><a href="buy.php" class="text-dark fw-bold" style="font-size:1.5rem !important;">Buy From Us</a></li>
        <li class="m-0 text-center py-4"> <a href="sell.php" class="text-dark fw-bold" style="font-size:1.5rem !important;">Sell With Us</a></li>
        <li class="m-0 text-center py-4"> <a href="about.php" class="text-dark fw-bold" style="font-size:1.5rem !important;">About Us</a></li>
        
    </ul>
</div>
<section class="general-section">
    <div class="col-lg-12">
        <p class="major-text-about text-center">About Us</p>
    </div>

    <section>
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-6 col-md-6 py-lg-4 py-md-4 py-0 d-lg-none d-md-none d-block">
                    <img src="../images/manager.jpg" alt="">
                </div>
                <div class="col-lg-6 col-md-6 py-lg-4 py-md-4 py-0">
                    <p class="about-us-main-text">Who We Are</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis facere incidunt quasi. Quod est adipisci unde aliquam, veniam nam recusandae dolore aliquid, voluptates sapiente, ea excepturi commodi mollitia repellat aut beatae nihil nesciunt. Excepturi architecto harum, dolorem non ullam magnam tenetur error ab officia quae.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis facere incidunt quasi. Quod est adipisci unde aliquam, veniam nam recusandae dolore aliquid, voluptates sapiente, ea excepturi commodi mollitia repellat aut beatae nihil nesciunt. Excepturi architecto harum, dolorem non ullam magnam tenetur error ab officia quae.</p>
                </div>
                <div class="col-lg-6 col-md-6 py-lg-4 py-md-4 py-0 d-lg-block d-md-block d-none">
                    <img src="../images/manager.jpg" alt="">
                </div>
                <div class="col-lg-6 col-md-6 py-lg-4 py-md-4 py-0">
                    <img src="../images/multifamily.jpg" alt="">
                </div>
                <div class="col-lg-6 col-md-6 py-lg-4 py-md-4 py-0">
                    <p class="about-us-main-text">Misson And Vision</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis facere incidunt quasi. Quod est adipisci unde aliquam, veniam nam recusandae dolore aliquid, voluptates sapiente, ea excepturi commodi mollitia repellat aut beatae nihil nesciunt. Excepturi architecto harum, dolorem non ullam magnam tenetur error ab officia quae.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis facere incidunt quasi. Quod est adipisci unde aliquam, veniam nam recusandae dolore aliquid, voluptates sapiente, ea excepturi commodi mollitia repellat aut beatae nihil nesciunt. Excepturi architecto harum, dolorem non ullam magnam tenetur error ab officia quae.</p>
                </div>
                
            </div>
        </div>
    </section>

</section>






<footer>
    <div class="container pt-5 pb-2">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-10 m-auto">
                <div class="logo">
                    <p class="logo-text fw-bold text-center text-light" style="line-height:10px;"><span class="span-logo">U</span>ncle</p>
                    <p class="text-center text-light">An estate management website</p>
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
                    <li class="m-0"> <a href="" class="px-3 text-light">Bargain</a></li>
                </ul>
                <ul class="nav-ul align-items-center d-md-none d-lg-none d-flex me-auto" style="width:fit-content !important;">
                    <li class="m-0"><a href="" class="px-2 text-light" style="font-size:14px !important;">Buy From Us</a></li>
                    <li class="m-0"> <a href="" class="px-2 text-light" style="font-size:14px !important;">Sell With Us</a></li>
                    <li class="m-0"> <a href="" class="px-2 text-light" style="font-size:14px !important;">About Us</a></li>
                    <li class="m-0"> <a href="" class="px-2 text-light" style="font-size:14px !important;">Bargain</a></li>
                </ul>
                <div class="d-block text-region pt-lg-3 pt-md-3 pt-0 px-2 px-lg-0 px-md-0" style="font-size:12px;">
                    <p class="text-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum nulla ullam nam sit a delectus perspiciatis dicta? Id, minima facilis. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo, beatae?</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 p-0 d-lg-block d-none d-md-none">
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
<script>
    document.getElementById("open-menu").addEventListener("click",()=>{
        document.getElementById("small-menu").classList.add("d-block");
        document.getElementById("small-menu").classList.remove("d-none");
    })
    document.getElementById("close-menu").addEventListener("click",()=>{
        document.getElementById("small-menu").classList.remove("d-block");
        document.getElementById("small-menu").classList.add("d-none");
    })
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="..\bootstrap-5.1.3-dist\js\bootstrap.js"></script>
<script src="https://kit.fontawesome.com/91c295e6a7.js " crossorigin="anonymous "></script>
</body>
</html>