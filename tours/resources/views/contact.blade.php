<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
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

.contact-in{
    width: 100%;
    height:auto;
    display:flex;
    flex-wrap:wrap;
    padding:10px;
    border-radius:10px;
    box-shadow:0px 0px 10px #666;
}
.contact-map{
    width: 100%;
    height: auto;
    flex:50%;
}
.contact-map iframe{
    width: 100%;
    height: 100%;    
}
.contact-form{
    width: 100%;
    height: auto;
    flex:50%;
    text-align:center;
    padding: 30px;
}
.contact-form-txt{
    width: 100%;
    height: 40px;
    color:#000;
    background:rgba(182, 231, 240, 0.856);
    border:1px solid #bcbcbc;
    border-radius:50px;
    outline:none;
    margin-bottom:20px;
    padding:15px;
}
.contact-form-txt::placeholder{
    color:black;
}
.contact-form-textarea{
    width: 100%;
    height: 130px;
    color:black;
    border:1px solid #bcbcbc;
    border-radius:10px;
    outline:none;
    background:rgba(182, 231, 240, 0.856);
    margin-bottom:20px;
    padding:15px;
}

.gallery .box-container{
    display: flex;
    flex-wrap:wrap;
    gap:1.5rem;
}
.gallery .box-container .box{
    overflow: hidden;
    box-shadow:0 1rem 2rem rgba(0,0,0,.1);
    border: 1rem solid #fff;
    border-radius:.5rem;
    flex: 1 1 30rem;
    height: 25rem;
    position: relative;
}
.gallery .box-container .box img{
    height: 100%;
    width: 100%;
    object-fit:cover;
}
.gallery .box-container .box .content{
    position: absolute;
    top:-100;left:0;
    height: 100%;
    width:100%;
    text-align:center;
    background:rgba(0,0,0,.7);
    padding: 2rem;
    padding-top: 5rem;
}
.gallery .box-container .box:hover .content{
    top:0;
}

.gallery .box-container .box .content h3{
    font-size: 2.5rem;
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
    .contact .row form .inputbox input{
        width: 100%;
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

<!-- Contact Section -->
<section class="contact" id="contact">
<br><br><br><br>
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
        <span class="space"></span>
        <span>u</span>
        <span>s</span>
    </h1>
    <div class="contact-in">
        <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d465132.6090104892!2d54.2784199771774!3d24.38657289554348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e440f723ef2b9%3A0xc7cc2e9341971108!2sAbu%20Dhabi%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1626006969642!5m2!1sen!2sin" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="contact-form">
        <form action="">
            <input type="text" placeholder="Name" class="contact-form-txt">
            <input type="email" placeholder="Email" class="contact-form-txt">
            <input type="number" placeholder="Contact No:" class="contact-form-txt">
            <input type="text" placeholder="Subject" class="contact-form-txt">
            <textarea placeholder="Message" name="" id="" cols="30" rows="10" class="contact-form-textarea"></textarea>
            <input type="submit" class="btn" value="send message">
        </form>
        </div>
    </div>
</section>
<!-- Contact Section end -->
<!-- Gallery -->

<section class="gallery" id="gallery">
    <h1 class="heading">
        <span>f</span>
        <span>o</span>
        <span>l</span>
        <span>l</span>
        <span>o</span>
        <span>w</span>
        <span class="space"></span>
        <span>u</span>
        <span>s</span>
    </h1>
    <div class="box-container">
        <div class="box">
            <img src="https://www.danoneinstitute.org/wp-content/uploads/2020/06/logo-rond-twitter.png" alt="">
            <div class="content">
                <h3>Follow Us</h3>
                <a href="https://www.twitter.com/" class="btn">Follow</a>
            </div>
        </div>
        <div class="box">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Facebook_icon.svg/1200px-Facebook_icon.svg.png" alt="">
            <div class="content">
                <h3>Follow Us</h3>
                <a href="https://www.facebook.com/" class="btn">Follow</a>>
            </div>
        </div>
        <div class="box">
            <img src="https://workingwithdog.com/wp-content/uploads/2016/05/new_instagram_logo-1024x1024.jpg" alt="">
            <div class="content">
            <h3>Follow Us</h3>
                <a href="https://www.instagram.com/" class="btn">Follow</a>
            </div>
        </div>
    </div>

</section>

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