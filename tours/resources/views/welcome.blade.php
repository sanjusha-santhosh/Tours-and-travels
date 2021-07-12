<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tours And Travels</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- Header --> 
<header>
    <div id="menu-bar" class="fas fa-bars"></div>

<a href="#" class="logo"><span>T</span>ours & <span>T</span>ravels</a>

<nav class="navbar">
    <a href="/">Home</a>
    <a href="/about/">About Us</a>
    <a href="/services/">Our Services</a>
    <a href="/uae/">UAE</a>
    <a href="/contact/">Contact US</a>
</nav>   
<div class="icons">
        <a href="/login/"><i class="fas fa-user" id="login-btn"></i></a>
    </div>
</header>
<!-- Header-End -->

<!-- Home Section -->
<section class="home" id="home">
    <div class="content">
        <h3>explore the world with us</h3>
        <p>Fulfill your travel dreams</p>
        <a href="#" class="btn">discover more</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
        <span class="vid-btn" data-src="images/vid-2.mp4"></span>
        <span class="vid-btn" data-src="images/vid-3.mp4"></span>
        <span class="vid-btn" data-src="images/vid-4.mp4"></span>
        <span class="vid-btn" data-src="images/vid-5.mp4"></span>
    </div>

    <div class="video-container">
        <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>
<section class="book" id="book">
    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>
    <div class="row">
        <div class="image">
            <img src="images/travel.jpg" alt="">
        </div>
        <p id="p">
        We strongly focus on providing Excisions in UAE, Luxury proprieties, Spa and for budget tidy rooms, clean environment, quality-driven and tailor made travel 
        experiences for individual travelers and groups. Transportation with cars, minibuses and buses along with the best of services of interpreters and guides. 
        Our range of signature & special interest packages are known to thrill even the most discerning of travelers. Our team of well-experienced and knowledgeable 
        chauffeur guides ensures that the clients enjoy the little bits and pieces that they would otherwise miss thus taking.
        </p>
    </div>
</section>
<!-- Brand -->
<section class="brand-container">

    <div class="swiper-container brand-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/6.jpg" alt=""></div>
        </div>
    </div>

</section>


<!-- Brand End -->
<!-- Home Section End -->

<!-- Footer Section -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>We</h3>
            <p>We, the best tours and travels based in UAE, delightful to assist you in exploring 
                new tourist destinations. We have been able to build good network with travelers worldwide.
                Experience the real satisfaction from the leaders of travel industry.</p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">UAE</a>
            <a href="#">India</a>
            <a href="#">UK</a>
            <a href="#">USA</a>
        </div>
        <div class="box">
            <h3>Quick Links</h3>
            <a href="/about/">About Us</a>
            <a href="/services/">Our Services</a>
            <a href="/uae/">UAE</a>
            <a href="/contact/">Contact Us</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com/">facebook</a>
            <a href="https://twitter.com/">twitter</a>
            <a href="https://www.instagram.com/">instagram</a>
            <a href="https://www.linkedin.com/">linkedin</a>
        </div>
    </div>
    <h1 class="credit">© Copyright <span>2021</span> All Rights Reserved!</h1>
</section>
<!-- Footer End -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{asset ('js/script.js') }}"></script>
</body>
</html>