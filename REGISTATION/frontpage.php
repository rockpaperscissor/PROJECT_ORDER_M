<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- watch sher -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.6.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="frontpage.css">
</head>
<body>
    


    <script>
        $(function () {
            $('.nav-part2 a').on('click', function (e) {
                e.preventDefault(); // Prevent the default behavior of the link
                var page = $(this).attr('href');
                $('.frontpageAll').load(page + '.php'); 
                // Load content based on the clicked link


                
            });
            $('.nav-part2 .icons i').on('click', function (e) {
                e.preventDefault(); // Prevent the default behavior of the link
                var page = $(this).attr('href');
                $('.frontpageAll').load(page + '.php'); 
                // Load content based on the clicked link


                
            });

            $('#btn').on('click', function () {
                $('html, body').animate({
                    scrollTop: $('.frontpagemain2').offset().top
                }, 800); // Adjust the duration as needed
            });
        });
    </script>







    <div class="frontpageAll">
        <div class="nav">
            <div class="logo"></div>
            <div class="nav-part2">
                <div class="links">
                <a href="#">Home</a>
                <a href="#">About Us</a>
                <a href="contactUs">Contact Us</a>
                <a href="myAccount">My account</a>
                <a href="settings">Settings</a>
                <!-- <a href="#">Feedback</a> -->
                <!-- <a href="#">Delivery</a>
                <a href="#">Terms and Conditions</a>
                <a href="#">Help & Support</a> -->
            </div>
            <div class="icons">
                <a href=""><i class="ri-menu-line"></i></a>
                <a href="mycart"><i class="ri-shopping-cart-2-line"></i></a>
                



            </div>
               

            </div>
        </div>
        <div class="cursor"></div>
        <div class="frontpagemain">
        <h2>welcome
    <?php
    echo $_SESSION['username'];
    
    
    
    
    ?></h2>
            
            <h1>Magic Pan</h1>
            
    <div class="container">
        <a href="logout.php">Logout</a>
    </div>

            
            
            <div class="btnclass">
            <button id="btn">Order here!</button>
        </div>

        </div>
        <div class="frontpagemain2">
        <div class="category">
                <p>What are you craving for?</p>

            <div class="cate1"   id="cate11"       ><p>Veg</p>
            <img src="./veg/PaneerM.jpeg" alt="">
            

        
            </div>
            <div class="cate1"            ><p>Non-veg</p>
            <img src="./nonveg/chicken leg curry.jpeg" alt="">
            </div>
            <div class="cate1"       ><p>Beverages</p>
            <img src="./beverages_desserts/beverCover.jpeg" alt="">
            </div>
            <div class="cate1"           ><p>Desserts</p>
            <img src="beverages_desserts/rasmalaiParfait.jpeg" alt="">
            </div>
        </div>
        
    <div class="bestsellers">
            <p>Bestsellers</p>

        <div class="best1" id="best11"           ><p>Mrgherita</p>
                <img src="" alt="">
        </div>
        <div class="best1"     id="best12"         ><p>Pepper Barbecue Chicken</p>
                 <img src="" alt="">
        </div>
        <div class="best1"       id="best13"   ><p>Peppy Pneer</p>
                <img src="" alt="">
        </div>

        <div class="best1"       id="best14"     ><p>Farmhouse</p>
                <img src="" alt="">
        </div>

     </div>

    <div class="veg delights">
        <p>Popular Veg delights</p>

    <div class="veg1"            ><p>Mrgherita</p>
    <img src="" alt="">
</div>
    <div class="veg1"             ><p>Farmhouse</p>
    <img src="" alt="">
</div>
    <div class="veg1"          ><p>Indie Tandoori Paneer</p>
    <img src="" alt="">
</div>
    <div class="veg1"            ><p>Veg Extravaganza</p>
    <img src="" alt="">
</div>
</div>
            <!-- <p>Bestsellers</p>
            <div class="best1"            ></div>
            <div class="best1"             ></div>
            <div class="best1"          ></div>
            <div class="best1"            ></div> -->
            



        </div>
    </div>
</body>
</html>