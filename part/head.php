<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>블로그</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link rel="stylesheet" href="/resource/common.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/resource/common.js"></script>
</head>
<body>
    <div class="header">
        <div class="header warp">

        </div>
    </div>
    <div class="mobile-top-bar visible-sm-down flex flex-jc-end">
        <a href="#" onclick="return false;" class="btn-toggle-mobile-side-bar flex-as-c">
            <div></div>
            <div></div>
            <div></div>
        </a>
    </div>
    <div class="mobile-side-bar-bg visible-sm-down">
    </div>

    <div class="mobile-side-bar visible-sm-down">
        <nav class="mobile-side-box">
            <ul>
             <li><a href="#">Home</a></li>
             <li><a href="#">Articles</a>
                    <ul>
                        <li style="animation-delay: 0s;"><a href="#">Notice</a></li>
                        <li style="animation-delay: 0.05s;"><a href="#">Fee</a></li>
                    </ul>
                </li>
            </li>
             <li><a href="#">About Me</a></li>
                <li class="active"><a href="#">SNS</a>
                 <ul>
                  <li><a href="#">GIT HUB</a></li>
                  <li><a href="#">FACEBOOK</a></li>
                  <li><a href="#">INSTA</a>
                  <ul>
                                <li><a href="#">Private</a></li>
                                <li><a href="#">Public</a></li>
                            </ul>
                        </li>
            </ul>
    </li>
    </ul>   
    </nav>
    </div>

    <div class="top-bar visible-md-up con">
        <div class="con height-100p flex con">
            <a href="/" class="logo flex flex-ai-c">
                <img src="../resource/img/logo.png" alt="">
            </a>
            <nav class="menu-box-1 flex-jc-end flex-1-0-0 con">
                <ul class="flex">
                    <li class="flex"><a href="/" class="flex flex-ai-c">Home</a></li>
                    <li class="flex"><a href="/list.php" class="flex flex-ai-c">Articles</a>
                    </li>
                    <li class="flex"><a href="/aboutMe.php" class="flex flex-ai-c ">About Me</a>
                    </li>
                    <li class="flex">
                        <a href="#" class="flex flex-ai-c">SNS</a>
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                    GITHUB
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    FACEBOOK
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    INSTA
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="sbs-slider con">
    <div class="slides">
        <div style="background-image:url(../resource/img/back1.jpg);" class="active"></div>
        <div style="background-image:url(../resource/img/back2.jpg);"></div>
        <div style="background-size:contain; background-image:url(../resource/img/back3.jpg);"></div>
    </div>
    
    <div class="side-bars">
        <div>
            <span>
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </span>
        </div>
        <div>
            <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
        </div>
    </div>
</div>

<div class="profile-bar con">
<h2 class="con">profile</h2>
<div class="profile-box flex">
    <a href="#" class="avatar"></a> 
</div>
<div class="profile flex-1-0-0">
    <div class="name">NYC</div>
    <div class="introduce">
        xx.xxxx
    </div>
</div>
</div>