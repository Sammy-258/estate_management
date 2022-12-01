<?php

  include "../back_end/connect.php";

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
</style>


<section>
    <div class="container-fluid d-lg-block d-md-block d-none">
        <div class="row">
            <div class="col-lg-3 col-md-3 position-fixed shadow" style="background-color:whitesmoke;height:100vh;">
                <div class="d-flex  align-items-center px-lg-4 px-md-3">
                    <div class="logo m-0">
                        <a href="../index.php" class="logo-text fw-bold" style="text-decoration:none !important;color:black;"><span class="span-logo">U</span>ncle</a>
                    </div>
                    <p class="m-0 mt-1 fs-5 mx-2">Admin panel</p>
                </div>

                <div class="d-block mt-4">
                    <p class="px-lg-4 px-md-3 pb-4 pt-3">basic links</p>

                    <p  class="link-text-in-admin px-1 my-3 py-2 rounded-3" id="home"><i class="fa-solid fa-house" style="padding-right:1rem;color:black;"></i>Home Page Products</p>
                    <p  class="link-text-in-admin px-1 my-3 py-2 rounded-3" id="out"><i class="fa-solid fa-route" style="padding-right:1rem;color:black;"></i>Out Records</p>
                    <p  class="link-text-in-admin px-1 my-3 py-2 rounded-3"><i class="fa-solid fa-comment" style="padding-right:1rem;color:black;"></i>Testimonials</p>
                </div>
            </div>  
            <div class="col-lg-9 col-md-9 ms-auto pt-3" id="home-page">
                <div class="d-flex justify-content-between">
                    <input type="text" placeholder="place your search here" class="col-lg-7 search-input px-4 py-2" id="search-input">
                    <div class="col-lg-3 d-flex align-items-center">
                        <p class="m-0" style="width:25% !important;">Sort By</p>
                        <select name="" id="sort-by" class="m-0 p-2 rounded-3" style="width:75% !important;">
                            <option value="selected" selected>Default</option>
                            <option value="land" >land</option>
                            <option value="house" >House</option>
                            <option value="others" >Others</option>
                            <option value="home" >Home Page</option>
                            <option value="buy" >Buy Page</option>
                        </select>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between mt-5 px-3">
                    <div class="d-block m-0 mt-1">
                        <p class="display-text-below-search opacity-75" style="font-size:1.2em;">This Page is for properties displayed on the main page</p>
                    </div>
                    <div class="d-block m-0">
                        <a href="add_product.php" class="btn btn-general add-btn-admin px-5">Add New Properties</a>
                    </div>
                </div>
                <div class="row mt-3 gy-3">
                    <?php
                    
                       $sql="SELECT * FROM `pro_table`";
                       $result=mysqli_query($conn, $sql);

                       while($row=mysqli_fetch_assoc($result)){
                        
                            $image=$row["Image"]

                        ?>
                       
                    
                    <div class="col-lg-3 col-md-4 main-col px-1 <?php echo $row["type"]?> <?php echo $row["where"]?>" >
                        <div class="d-flex justify-content-between px-1 shadow rounded py-3 pb-4 align-items-center" style="background-color: white !important;height:fit-content !important;">
                            <div class="img-admin-box m-0">
                                <img src="../files_product/<?php echo $image?>" alt="" class="rounded-circle">
                            </div>
                            <div class="display-area m-0">
                                <p class="display-main-text text-center" style="font-size:0.8rem !important;"><?php echo $row["name"]?></p>
                                <div class="d-flex align-items-center justify-content-between" style="cursor:pointer;">
                                    <a href="learn_more.php?id=<?php echo $row["id"]?>" class="display-main-text-two align-items-center m-0 mx-1 text-dark">Learn more</a>
                                    <a href="edit.php?id=<?php echo $row["id"]?>" class="display-main-text-two align-items-center m-0 mx-1 text-primary">Edit</a>
                                    <a href="../back_end/delete.php?id=<?php echo $row["id"]?>" class="display-main-text-two align-items-center m-0 mx-1 text-danger">Delete</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>  
            <div class="col-lg-9 col-md-9 ms-auto pt-3 d-none" id="out-record">
                <div class="d-flex justify-content-between">
                    <input type="text" placeholder="place your search here" class="col-lg-7 search-input px-4 py-2">
                    <div class="col-lg-3 d-flex align-items-center">
                    <div class="d-block m-0">
                        <a href="add_customers.php" class="btn btn-general add-btn-admin px-5">Add New Customers</a>
                    </div>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between mt-5 px-3">
                    <div class="d-block m-0 mt-1">
                        <p class="display-text-below-search opacity-75" style="font-size:1.2em;">This Page is for the record keeping of customers</p>
                    </div>
                    
                </div>
                <div class="row mt-3">
                    <table class="table table-bordered">
                        <tr>
                            <th>Date</th>
                            <th>Bank/Name of payee</th>
                            <th>Bank/Name of receiver</th>
                            <th>Amount Paid Out</th>
                            <th>Actions</th>
                        </tr>
                    
                    <?php
                    
                       $sql="SELECT * FROM `customer_table`";
                       $result=mysqli_query($conn, $sql);

                       while($row=mysqli_fetch_assoc($result)){
                        
                            

                        ?>
                       
                    
                        <tr>
                    
                            <th class="fw-normal" style="font-size:1em;"><?php echo $row['date'];?></th>
                            <th class="fw-normal" style="font-size:1em;"><?php echo $row['name_of_payee'];?></th>
                            
                            <th class="fw-normal" style="font-size:1em;"><?php echo $row['name_of_receiver'];?></th>
                            <th class="fw-normal" style="font-size:1em;"><?php echo $row['amount_paid_out'];?></th>
                            <th class="fw-normal" style="font-size:1em;">
                            <a class="btn btn-success btn-general"  href="edit.php?id=<?php echo $row['id'];?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a class="btn btn-general btn-danger" href="delete.php?id=<?php echo $row['id'];?>"><i class="fa-solid fa-trash"></i></a>
                            </th>
                        </tr>
                    </table>
                    <?php
                    }
                    ?>
                </div>
            </div>  
        </div>
    </div>
</section>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="..\bootstrap-5.1.3-dist\js\bootstrap.js"></script>
<script src="https://kit.fontawesome.com/91c295e6a7.js " crossorigin="anonymous "></script>
<script>
    document.getElementById("home").addEventListener("click",()=>{
        document.getElementById("home-page").classList.remove("d-none");
        document.getElementById("home-page").classList.add("d-block");
        document.getElementById("out-record").classList.add("d-none");
        document.getElementById("out-record").classList.remove("d-block");
    })
    document.getElementById("out").addEventListener("click",()=>{
        document.getElementById("home-page").classList.add("d-none");
        document.getElementById("home-page").classList.remove("d-block");
        document.getElementById("out-record").classList.remove("d-none");
        document.getElementById("out-record").classList.add("d-block");
    })
    document.getElementById("search-input").addEventListener("keyup",(event)=>{
        if(event.key === 'Enter'){
            console.log(document.getElementById("search-input").value)
            var xhr = new XMLHttpRequest();
            var inputValue=modal.value;
        
        
                xhr.open('GET', 'back_end/search.php?id='+inputValue, true);
                xhr.send();
                
                xhr.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                    
                        const fetch = window.print(owl);
                        console.log(fetch);

                        
                    }
            }
        }
        
    })
    

    document.getElementById("sort-by").addEventListener("change",(event)=>{
        var sort_by = document.getElementById("sort-by");
        if(sort_by.value==="selected"){
            document.querySelectorAll(".land").forEach((show)=>{
                show.classList.add("d-block");
                show.classList.remove("d-none");
            })
            document.querySelectorAll(".house").forEach((show)=>{
                show.classList.add("d-block");
                show.classList.remove("d-none");
            })
            document.querySelectorAll(".others").forEach((show)=>{
                show.classList.add("d-block");
                show.classList.remove("d-none");
            })
            
        }
        if(sort_by.value==="land"){
            document.querySelectorAll(".land").forEach((show)=>{
                show.classList.add("d-block");
                show.classList.remove("d-none");
            })
            document.querySelectorAll(".house").forEach((show)=>{
                show.classList.remove("d-block");
                show.classList.add("d-none");
            })
            document.querySelectorAll(".others").forEach((show)=>{
                show.classList.add("d-none");
                show.classList.remove("d-block");
            })
            
        }
        if(sort_by.value==="house"){
            document.querySelectorAll(".house").forEach((show)=>{
                show.classList.add("d-block");
                show.classList.remove("d-none");
            })
            document.querySelectorAll(".land").forEach((show)=>{
                show.classList.remove("d-block");
                show.classList.add("d-none");
            })
            document.querySelectorAll(".others").forEach((show)=>{
                show.classList.add("d-none");
                show.classList.remove("d-block");
            })
        }
        if(sort_by.value==="others"){
            document.querySelectorAll(".land").forEach((show)=>{
                show.classList.remove("d-block");
                show.classList.add("d-none");
            })
            document.querySelectorAll(".house").forEach((show)=>{
                show.classList.remove("d-block");
                show.classList.add("d-none");
            })
            document.querySelectorAll(".others").forEach((show)=>{
                show.classList.remove("d-none");
                show.classList.add("d-block");
            })
            
        }
        if(sort_by.value==="home"){
            document.querySelectorAll(".land").forEach((show)=>{
                show.classList.remove("d-block");
                show.classList.remove("d-none");
            })
            document.querySelectorAll(".house").forEach((show)=>{
                show.classList.remove("d-block");
                show.classList.remove("d-none");
            })
            document.querySelectorAll(".others").forEach((show)=>{
                show.classList.remove("d-none");
                show.classList.remove("d-block");
            })
            document.querySelectorAll(".home").forEach((show)=>{
                show.classList.remove("d-none");
                show.classList.add("d-block");
            })
            document.querySelectorAll(".buy").forEach((show)=>{
                show.classList.add("d-none");
                show.classList.remove("d-block");
            })
            
        }
        if(sort_by.value==="buy"){
            document.querySelectorAll(".land").forEach((show)=>{
                show.classList.remove("d-block");
                show.classList.remove("d-none");
            })
            document.querySelectorAll(".house").forEach((show)=>{
                show.classList.remove("d-block");
                show.classList.remove("d-none");
            })
            document.querySelectorAll(".others").forEach((show)=>{
                show.classList.remove("d-none");
                show.classList.remove("d-block");
            })
            document.querySelectorAll(".home").forEach((show)=>{
                show.classList.add("d-none");
                show.classList.remove("d-block");
            })
            document.querySelectorAll(".buy").forEach((show)=>{
                show.classList.remove("d-none");
                show.classList.add("d-block");
            })
            
        }
        
        
    })
    
</script>
</body>
</html>