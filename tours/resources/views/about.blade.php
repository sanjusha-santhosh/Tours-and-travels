<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

:root{
    --blue:#07dae9;
}
*{
    font-family: 'Nunito', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    text-transform: capitalize;
    outline: none; border:none;
    text-decoration: none;
    transition: all .2s linear;
}
*::selection{
    background: var(--blue);
    color: #fff;
}


html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 6rem;
    scroll-behavior: smooth;
}

section{
    padding: 2rem 9%;
}

.heading{
    text-align: center;
    padding: 2.5rem 0;
}
.heading span{
    font-size: 3.5rem;
    background:rgba(182, 231, 240, 0.856);
    color: var(--blue);
    border-radius: .5rem;
    padding: .2rem 1rem;
}

.heading span.space{
    background: none;
}
.btn{
    display: inline-block;
    margin-top: 1rem;
    background: var(--blue);
    color: #fff;
    padding: .8rem 3rem;
    border: .2rem solid var(--blue);
    cursor: pointer;
    font-size: 1.7rem;
}

.btn:hover{
    background: rgba(255,165,0,.2);
    color: var(--blue);
}
header{
    position: fixed;
    top: 0;left: 0;right: 0;
    background: #333;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 2rem 9%;
}
header .logo{
    font-size: 2.5rem;
    font-weight: bolder;
    color: #fff;
    text-transform: uppercase;
}
header .logo span{
    color: var(--blue);
}

header .navbar a{
    color: #fff;
    font-size: 2rem;
    margin: 0 .8rem;
}

header .navbar a:hover{
    color: var(--blue);
}

header .icons i{
    font-size: 2.5rem;
    color: #fff;
    cursor: pointer;
    margin-left: 2rem;
}

header .icons i:hover{
    color: var(--blue);
}

#menu-bar{
    color:#fff;
    border:.1rem solid #fff;
    border-radius: .5rem;
    font-size: 3rem;
    padding:.5rem 1.2rem;
    cursor: pointer;
    display: none;
}
.review .review-slider{
    padding-bottom: 2rem;
}
.review .box{
    padding: 2rem;
    text-align:center;
    box-shadow:0 1rem 2rem rgba(0,0,0,.1);
    border-radius: 0.5rem;
}
.review .box img{
    height: 13rem;
    width: 13rem;
    border-radius:50%;
    object-fit:cover;
    margin-bottom:1rem;
}
.review .box h3{
    color:#333;
    font-size:2.5rem;
}
.review .box p{
    color:#666;
    font-size:1.5rem;
    padding: 1rem 0;
}
.review .box .stars i{
    color:orange;
    font-size:1.7rem;
}
.about .box-container{
    display: flex;
    flex-wrap:wrap;
    gap: 2rem;
}

.about .box-container .box{
    flex:1 1 30rem;
    border-radius:.5rem;
    overflow:hidden;
    box-shadow:0 1rem 2rem rgba(0,0,0,.1);
}

.about .box-container .box .content{
    padding: 2rem;
}
.about .box-container .box .content h3{
    font-size: 2rem;
    color:#333;
}

.about .box-container .box .content h3 i{
    color:var(--blue);
}
.about .box-container .box .content p{
    font-size: 1.7rem;
    color:#666;
    padding: 1rem 0;
}


.team .box-container{
    display: flex;
    flex-wrap:wrap;
    gap:1.5rem;
}
.team .box-container .box{
    overflow: hidden;
    box-shadow:0 1rem 2rem rgba(0,0,0,.1);
    border: 1rem solid #fff;
    border-radius:.5rem;
    flex: 1 1 30rem;
    height: 25rem;
    position: relative;
}
.team .box-container .box img{
    height: 100%;
    width: 100%;
    object-fit:cover;
}
.team .box-container .box .content{
    position: absolute;
    top:-100;left:0;
    height: 100%;
    width:100%;
    text-align:center;
    background:rgba(0,0,0,.7);
    padding: 2rem;
    padding-top: 5rem;
}
.team .box-container .box:hover .content{
    top:0;
}

.team .box-container .box .content h3{
    font-size: 2.5rem;
    color:var(--blue);
}
.team .box-container .box .content h4{
    font-size: 2.1rem;
    color:var(--blue);
}






.footer{
    background: #333;
}

.footer .box-container{
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
}

.footer .box-container .box{
    padding: 1rem 0;
    flex: 1 1 25rem;
}

.footer .box-container .box h3{
    font-size: 2.5rem;
    padding: .7rem 0;
    color: #fff;
}

.footer .box-container .box p{
    font-size: 1.5rem;
    padding: .7rem 0;
    color: #eee;
}
.footer .box-container .box a{
    display: block;
    font-size: 1.5rem;
    padding: .7rem 0;
    color: #eee;
}

.footer .box-container .box a:hover{
    color: var(--blue);
    text-decoration: underline;
}

.footer .credit{
    text-align: center;
    padding: 2rem 1rem;
    margin-top: 1rem;
    font-size: 2rem;
    font-weight: normal;
    color: #fff;
    border-top: .1rem solid rgba(255,255,255,.2);
}

.footer .credit span{
    color: var(--blue);
}








/* Media Queries */
@media(max-width:1200px){
    
    html{
        font-size: 55%;
    }
}

@media(max-width:991px){
    
    header{
        font-size: 2rem;
    }
    section{
        padding: 2rem;
    }
}

@media(max-width:768px){
    
    #menu-bar{
        display: initial;
    }

    header .navbar{
        position: absolute;
        top: 100%;right: 0;left: 0;
        background: #333;
        border-top: .1rem solid rgba(255,255,255,.2);
        padding: 1rem 2rem;
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    }

    header .navbar.active{
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    }

    header .navbar a{
        display: block;
        border-radius: .5rem;
        padding: 1.5rem;
        margin: 1.5rem 0;
        background: #222;
    }
}

@media(max-width:450px){
    html{
        font-size: 50%;
    }
    .heading span{
        font-size: 2.5rem;
    }
}
    </style>
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
</header>
<!-- Header-End -->
<!-- About us -->
<section class="about" id="about"> 
     <br><br><br><br>
    <h1 class="heading">
        <span>a</span>
        <span>b</span>
        <span>o</span>
        <span>u</span>
        <span>t</span>
        <span class="space"></span>
        <span>u</span>
        <span>s</span>
    </h1>
    <div class="box-container">
        <div class="box">
            <div class="content">
                <h3><i class="fas fas fa-bolt"></i>Our vision</h3>
                <p>The journey of a thousand miles begins with a single step.And our vision provide our preciuos customers the best and most safe
                    travel memories with us.Recognition of us by the society as the best trusted agency ever is our vision  and pieces that they would otherwise miss thus taking.Best tours and travels agency in UAE.
                </p>
            </div>
        </div>
        <div class="box">
            <div class="content">
                <h3><i class="fas fa-bullseye"></i>Our Mission</h3>
                <p>We aim towards the trsnsformation of the society through fulfilling their tavel dreams.
                We strongly focus on providing Excisions in UAE, Luxury proprieties, Spa and for budget tidy rooms, clean environment, quality-driven and tailor made travel 
                experiences for individual travelers and groups. 
                </p>
            </div>
        </div>
        <div class="box">
            <div class="content">
                <h3><i class="fas fa-lightbulb"></i>Our strategies</h3>
                <p>Transportation with cars, minibuses and buses along with the best of services of interpreters and guides. 
        Our range of signature & special interest packages are known to thrill even the most discerning of travelers. Our team of well-experienced and knowledgeable 
        chauffeur guides ensures that the clients enjoy the little bits.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- About us End -->

<!-- Our team -->
<section class="team" id="team">
    <h1 class="heading">
        <span>o</span>
        <span>u</span>
        <span>r</span>
        <span class="space"></span>
        <span>t</span>
        <span>e</span>
        <span>a</span>
        <span>m</span>
    </h1>
    <div class="box-container">
        <div class="box">
            <img src="https://lh3.googleusercontent.com/proxy/uVE7oI27UZLHkA1gPE91A9DP2ME56luAMBA1FtnEILjvKfiFSAYDshlrrV1wPV3EwNOkuvcyKYSLFr5RZbR3fmt6ApnBdhgd9-liMNkyzCxkln-wrMZ2aSCokSN3XuBEZtMrpjj9zjERjT0voCcD" alt="">
            <div class="content">
                <h3>Harry White</h3>
                <h4>CEO<h4>
            </div>
        </div>
        <div class="box">
            <img src="https://wallup.net/wp-content/uploads/2016/02/20/290059-Gerard_Butler-men-actor-suits-tie-blue_eyes-748x468.jpg" alt="">
            <div class="content">
                <h3>Joans Mull</h3>
                <h4>Manager</h4>
            </div>
        </div>
        <div class="box">
            <img src="https://images.unsplash.com/photo-1567532939604-b6b5b0db2604?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8d29tYW4lMjBzbWlsZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80" alt="">
            <div class="content">
                <h3>Angel Dane</h3>
                <h4>CEO</h4>
            </div>
        </div>
        
    </div>
</section>
<!-- Our team end -->

<!-- Review -->

<section class="review" id="review">
    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>
    <div class="swiper-container review-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="box">
                    <img src="https://images.pexels.com/photos/1130626/pexels-photo-1130626.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                    <h3>Maria</h3>
                    <p>We did the booking through Tours&Travels. We did the city tour and safari tour.
                        We really enjoy them. Tours&Travels took care everything was okay and 
                        checked with us the pick up hours.The drivers were really kind and their 
                        explanations were interesting.Really recommended!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YnVzaW5lc3NtYW58ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" alt="">
                    <h3>John</h3>
                    <p>We did the booking through Tours&Travels. We did the city tour and safari tour.
                        We really enjoy them. Tours&Travels took care everything was okay and 
                        checked with us the pick up hours.The drivers were really kind and their 
                        explanations were interesting.Really recommended!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="https://wallpaperaccess.com/full/2597773.jpg" alt="">
                    <h3>Anna</h3>
                    <p>We did the booking through Tours&Travels. We did the city tour and safari tour.
                         We really enjoy them. Tours&Travels took care everything was okay and 
                         checked with us the pick up hours.The drivers were really kind and their 
                         explanations were interesting.Really recommended!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8bWFuJTIwc21pbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" alt="">
                    <h3>peter</h3>
                    <p>We did the booking through Tours&Travels. We did the city tour and safari tour.
                        We really enjoy them. Tours&Travels took care everything was okay and 
                        checked with us the pick up hours.The drivers were really kind and their 
                        explanations were interesting.Really recommended!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Review End -->
<!-- Home Section -->
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
<!-- Custom js file link -->
<script src="{{asset ('js/script.js') }}"></script>
</body>
</html>