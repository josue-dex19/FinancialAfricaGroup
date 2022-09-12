<?php // (début avec SESSION)
include("_protect.php");
// ------------------------------------------------------
// Accès autorisé si identifié
if (!empty($_SESSION['CODEVALIDE']) &&
md5($_SESSION["MASESSION"]) ==
md5($_SESSION["CODEVALIDE"]))
{
    // Redirection vers le menu de l "ADMIN"
    header("Location: ../Admin/read.php");
    exit;
}
// ------------------------------------------------------
// sinon affichage du formulaire d'identification
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>tradefairoic</title>
</head>

<body>
    <style>
        body {
            background-image: url(/image/open.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
        }
        
        body {
            font-family: sans-serif;
        }
        
        a {
            text-decoration: none;
        }
        
        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, .5);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;
        }
        
        .login-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }
        
        .login-box .user-box {
            position: relative;
        }
        
        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }
        
        .login-box .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }
        
        .login-box .user-box input:focus~label,
        .login-box .user-box input:valid~label {
            top: -20px;
            left: 0;
            color: #03e9f4;
            font-size: 12px;
        }
        
        .login-box form button {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: #03e9f4;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 4px
        }
        
        .login-box button:hover {
            background: #03e9f4;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #03e9f4, 0 0 25px #03e9f4, 0 0 50px #03e9f4, 0 0 100px #03e9f4;
        }
        
        .login-box button span {
            position: absolute;
            display: block;
        }
        
        .login-box button span:nth-child(1) {
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #03e9f4);
            animation: btn-anim1 1s linear infinite;
        }
        
        @keyframes btn-anim1 {
            0% {
                left: -100%;
            }
            50%,
            100% {
                left: 100%;
            }
        }
        
        .login-box button span:nth-child(2) {
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, transparent, #03e9f4);
            animation: btn-anim2 1s linear infinite;
            animation-delay: .25s
        }
        
        @keyframes btn-anim2 {
            0% {
                top: -100%;
            }
            50%,
            100% {
                top: 100%;
            }
        }
        
        .login-box button span:nth-child(3) {
            bottom: 0;
            right: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(270deg, transparent, #03e9f4);
            animation: btn-anim3 1s linear infinite;
            animation-delay: .5s
        }
        
        @keyframes btn-anim3 {
            0% {
                right: -100%;
            }
            50%,
            100% {
                right: 100%;
            }
        }
        
        .login-box button span:nth-child(4) {
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(360deg, transparent, #03e9f4);
            animation: btn-anim4 1s linear infinite;
            animation-delay: .75s
        }
        
        @keyframes btn-anim4 {
            0% {
                bottom: -100%;
            }
            50%,
            100% {
                bottom: 100%;
            }
        }
        
        button {
            background-color: transparent;
            border: none;
        }
        
        .btn2 {
            background-color: rgba(0, 0, 0, .5);
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            margin-left: 10px;
            color: white;
        }
    </style>
    <div class="login-box" id="panel">
        <h2>Login</h2>
        <form action="index.php" method="post" name="identification">
            <div class="user-box">
                <input type="text" name="login" required="">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="pass" required="">
                <label>Password</label>
            </div>

            <button type="submit" value="Valider" class="btn"><span></span>
                <span></span>
                <span></span>
                <span></span>Submit
            </button>
            <br>

        </form>
    </div>
    <a href="/index.php">
        <button class="btn2">
            Accueil
        </button>
    </a>

</body>

</html>