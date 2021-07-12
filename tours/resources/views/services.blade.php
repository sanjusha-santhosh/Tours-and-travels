<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
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

.book .row{
    display: flex;
    flex-wrap:wrap;
    gap:1.5rem;
    align-items:center;
}

.book .row .image{
    flex:1 1 40rem;
}

.book .row .image img{
    width:100%
}
.book .row form{
    flex:1 1 40rem;
    padding: 2rem;
    box-shadow:0 1rem 2rem rgba(0,0,0,.1);
    border-radius:.5rem;
}
.book .row form .inputBox{
    padding:.5rem 0;
}

.book .row form .inputBox input{
    width: 100%;
    padding: 1rem;
    border:.1rem solid rgba(0,0,0,.1);
    font: size 1.7rem;
    color: #333;
    text-transform:none;
}

.book .row form .inputBox h3{
    font-size: 2rem;
    padding: 1rem 0;
    color:#666;
}

.packages .box-container{
    display: flex;
    flex-wrap:wrap;
    gap: 2rem;
}

.packages .box-container .box{
    flex:1 1 30rem;
    border-radius:.5rem;
    overflow:hidden;
    box-shadow:0 1rem 2rem rgba(0,0,0,.1);
}

.packages .box-container .box img{
    height: 25rem;
    width: 100%;
    object-fit:cover;
}
.packages .box-container .box .content{
    padding: 2rem;
}
.packages .box-container .box .content h3{
    font-size: 2rem;
    color:#333;
}

.packages .box-container .box .content h3 i{
    color:var(--blue);
}
.packages .box-container .box .content p{
    font-size: 1.7rem;
    color:#666;
    padding: 1rem 0;
}

.packages .box-container .box .content .stars i{
    font-size: 1.7rem;
    color:orange;
}
.packages .box-container .box .content .price{
    font-size: 2rem;
    color:#333;
    padding-top: 1rem;
}

.packages .box-container .box .content .price span{
    font-size: 1.5rem;
    color:#666;
    text-decoration:line-through;
}


.services .box-container{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
}

.services .box-container .box{
    flex: 1 1 30rem;
    border-radius: .5rem;
    padding: 1rem;
    text-align:center;
}

.services .box-container .box i{
    padding: 1rem;
    font-size:5rem;
    color:var(--blue);
}

.services .box-container .box h3{
    font-size:2.5rem;
    color:#333;
}
.services .box-container .box p{
    font-size:1.5rem;
    color:#666;
    padding: 1rem 0;
}
.services .box-container .box:hover{
    box-shadow: 0 1rem 2rem rgba(0,0,0,.1);
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

<!-- Booking Section -->
<section class="book" id="book">
    <br><br><br><br>
    <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>
    <div class="row">
        <div class="image">
            <img src="https://static9.depositphotos.com/1041273/1087/v/950/depositphotos_10878856-stock-illustration-travel-background.jpg" alt="">
        </div>
        <form action="">
            <div class="inputBox">
                <h3>where to</h3>
                <input type="text" placeholder="Place Name">
            </div>
            <div class="inputBox">
                <h3>where to</h3>
                <input type="text" placeholder="Place Name">
            </div>
            <div class="inputBox">
                <h3>how many</h3>
                <input type="number" placeholder="Number of guests">
            </div>
            <div class="inputBox">
                <h3>arrivals</h3>
                <input type="date">
            </div>
            <div class="inputBox">
                <h3>leaving</h3>
                <input type="date">
            </div>
            <input type="submit" class="btn" value="book now">
        </form>
    </div>   
</section>    
<!-- Booking Section End-->

<!-- Package -->
<section class="packages" id="packages">
<h1 class="heading">
    <span>p</span>
    <span>a</span>
    <span>c</span>
    <span>k</span>
    <span>a</span>
    <span>g</span>
    <span>e</span>
    <span>s</span>
</h1>
<div class="box-container">
    <div class="box">
        <img src="https://www.planetware.com/photos-large/UAE/uae-sharjah-museum-of-islamic-civilisation2.jpg" alt="">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Sharjah Museum</h3>
            <p>Sharjah's Museum of Islamic Civilization is the only museum in the country to focus on the breadth of Islamic history.
            </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="price">₹29,999 <span>₹35,000</span></div>
            <a href="#" class="btn">book now</a>
        </div>
    </div>
    <div class="box">
        <img src="https://www.planetware.com/photos-large/UAE/uae-beaches-dubai-beach.jpg" alt="">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>United Arab Emirates beach</h3>
            <p>For many visitors, a UAE vacation centers around the beach.Summer heat gives way to winter's beach weather.
            </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price">₹20,999 <span>₹25,000</span></div>
            <a href="#" class="btn">book now</a>
        </div>
    </div>
    <div class="box">
        <img src="https://www.planetware.com/photos-large/UAE/uae-abu-dhabi-sheikh-ziyeed-grand-mosque.jpg" alt="">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Sheikh Zayed Mosque</h3>
            <p>Sheikh Zayed Grand Mosque is a mammoth modern mosque of incredible beauty. 
            </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price">₹21,500 <span>₹24,699</span></div>
            <a href="#" class="btn">book now</a>
        </div>
    </div>
    <div class="box">
        <img src="https://www.planetware.com/wpimages/2019/04/united-arab-emirates-top-attractions-louvre-abu-dhabi.jpg" alt="">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Louvre Abu Dhabi</h3>
            <p>The most spectacular museum in UAE,the Louvre Abu Dhabi takes visitors on a journey through human history.
            </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price">₹13,950 <span>₹15,000</span></div>
            <a href="#" class="btn">book now</a>
        </div>
    </div>
    <div class="box">
        <img src="https://www.planetware.com/photos-large/UAE/uae-dubai-bastakia.jpg" alt="">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Bastakia</h3>
            <p>The Al Fahidi quater of Dubai is the last remaining fragment 
                of Old Dubai and shouldn't be missed.
            </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price">₹18,777 <span>₹19,000</span></div>
            <a href="#" class="btn">book now</a>
        </div>
    </div>
    <div class="box">
        <img src="https://www.planetware.com/photos-large/UAE/uae-al-ain-jebel-hafeet-vista.jpg" alt="">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Jebel Hafeet</h3>
            <p>Jebel Hafeet, on the edge of the oasis city of Al Ain is one of the most popular destinations.
            </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="price">₹25,000 <span>₹33,000</span></div>
            <a href="#" class="btn">book now</a>
        </div>
    </div>
</div>
</section>

<!-- Package End -->
<!-- services -->
<section class="services" id="services">
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
    <div class="box-container">
        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
            <p>Tourist  Board has  issuedsafety  guidelines  intended service  operators  in  the tourist  industrywho  offer  leisure  tours  and  excursions</p>            
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food & dinks</h3>
            <p>Tourist  Board has  issuedsafety  guidelines  intended service  operators  in  the tourist  industrywho  offer  leisure  tours  and  excursions.</p>            
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>safety guide</h3>
            <p>Tourist  Board has  issuedsafety  guidelines  intended service  operators  in  the tourist  industrywho  offer  leisure  tours  and  excursions.</p>            
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>around the world</h3>
            <p>Tourist  Board has  issuedsafety  guidelines  intended service  operators  in  the tourist  industrywho  offer  leisure  tours  and  excursions.</p>            
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>fastest travel</h3>
            <p>Tourist  Board has  issuedsafety  guidelines  intended service  operators  in  the tourist  industrywho  offer  leisure  tours  and  excursions.</p>            
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>adventures</h3>
            <p>Tourist  Board has  issuedsafety  guidelines  intended service  operators  in  the tourist  industrywho  offer  leisure  tours  and  excursions.</p>            
        </div>
    </div>
</section>
<!-- Services end -->
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

<script src="{{asset ('js/script.js') }}"></script>
</body>
</html>