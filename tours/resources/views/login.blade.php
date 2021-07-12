<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Login</title>
    <style>
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
        .btn{
            display: inline-block;
            margin-top: 1rem;
            background:var(--blue);
            color:#fff;
            padding:.8rem 3rem;
            border:.2rem solid var(--blue);
            cursor: pointer;
            font-size: 1.7rem;
            }
        .login-form-container{
            position: fixed;
            top:0%; left: 0;
            z-index: 10000;
            min-height: 100vh;
            width:100%;
            background:rgba(0,0,0,.7);
            display: flex;
            justify-content: center;
            }
        .login-form-container form{
            margin:2rem;
            padding:1.5rem 2rem;
            border-radius: .5rem;
            background:#fff;
            width:50rem;
            }

        .login-form-container form h3{
            font-size: 3rem;
            color:#444;
            text-transform: uppercase;
            text-align: center;
            padding:1rem 0;
            }

        .login-form-container form .box{
            width:100%;
            padding:1rem;
            font-size: 1.7rem;
            color:#333;
            margin:.6rem 0;
            border:.1rem solid rgba(0,0,0,.3);
            text-transform: none;
            }

        .login-form-container form .box:focus{
            border-color: var(--blue);;
            }

        .login-form-container form #remember{
            margin:2rem 0;
            }

        .login-form-container form label{
            font-size: 1.5rem;
            }

        .login-form-container form .btn{
            display: block;
            width:100%;
            }

        .login-form-container form p{
            padding:.5rem 0;
            font-size: 1.5rem;
            color:#666;
            }

        .login-form-container form p a{
            color:var(--blue);
            }

        .login-form-container form p a:hover{
            color:#333;
            text-decoration: underline;
            }

        .login-form-container #form-close{
            position: absolute;
            top:2rem; right:3rem;
            font-size: 5rem;
            color:#fff;
            cursor: pointer;
            }
        /* media queries  */

        @media (max-width:1200px){

        html{
        font-size: 55%;
        }

        }

        @media (max-width:991px){

        header{
        padding:2rem;
        }

        section{
        padding:2rem;
        }

        }
        @media (max-width:450px){

        html{
        font-size: 50%;
        }
    </style>
</head>
<body>
    <!-- Login Form -->
<div class="login-form-container">
    <i class="fas fa-time" id="form-close"></i>
    <form action="" method="get">
        <h3>Login</h3>
        <input type="email" class="box" placeholder="Enter Your Email">
        <input type="password" class="box" placeholder="Enter Your Password">
        <a href='/' class="btn" style="text-align: center;">LogIn</a>
        <input type="checkbox" id="remember">
        <label for="remember">Remember Me</label>
        <p>Forget Password?<a href="#">Click Here</a></p>
        <p>Don't Have an Accound?<a href="#">Register Now!</a></p>
    </form>
</div>
</body>
</html>