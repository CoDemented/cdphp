<?php
define("_SITE_URL", "http://localhost/cdphp/");
define("_ASSETS", _SITE_URL . "assets/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo _ASSETS; ?>css/fa-pro/css/all.css">
    <link rel="stylesheet" href="<?php echo _ASSETS; ?>css/normalize.css">
    <link rel="stylesheet" href="<?php echo _ASSETS; ?>css/style/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <title>BP-Project</title>
</head>
<body oncontextmenu="return true;">
<header>
    <div class="wrapper">
        <div class="header-box">
            <div class="logo">
                <img src="<?php echo _ASSETS; ?>imgs/cd-logo.svg" alt="">
            </div>
            <nav>
                <a href="#" class="active"><span>Home</span></a>
                <a href="#"><span>About</span></a>
                <div class="dd-wrapper">
                    <a class="dropdown" href="#"><span>Services</span><i class="fal fa-angle-down"></i></a>
                    <div class="dropdown-box">
                        <a href="#"><span>Link Text Here</span></a>
                        <a href="#"><span>Link Text Here</span></a>
                        <a href="#"><span>Link Text Here</span></a>
                        <a href="#"><span>Link Text Here</span></a>
                    </div>
                </div>
                <a href="#"><span>Portfolio</span></a>
                <a href="#"><span>Contact Us</span></a>
                <a class="call-to-action-primary" href=" #" style="color: #fff;"><span>Get in touch</span></a>
            </nav>
            <button id="btnMenu">X</button>
        </div>
    </div>
</header>
