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
                        <li><a href="#">Notice</a></li>
                        <li><a href="#">Fee</a></li>
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

    <div class="top-bar visible-md-up">
        <div class="con height-100p flex">
            <a href="/" class="logo flex flex-ai-c">
                <i class="fas fa-clone"></i>
            </a>
            <nav class="menu-box-1 flex flex-1-0-0">
                <ul class="flex flex-1-0-0">
                    <li class="flex-1-0-0 flex"><a href="/" class="flex flex-1-0-0 flex-ai-c flex-jc-c">Home</a></li>
                    <li class="flex-1-0-0 flex"><a href="/list.php" class="flex flex-1-0-0 flex-ai-c flex-jc-c">Articles</a>
                    </li>
                    <li class="flex-1-0-0 flex"><a href="/aboutMe.php" class="flex flex-1-0-0 flex-ai-c flex-jc-c">About Me</a>
                    </li>
                    <li class="flex-1-0-0 flex">
                        <a href="#" class="flex flex-1-0-0 flex-ai-c flex-jc-c">SNS</a>
                        <ul>
                            <li>
                                <a href="https://github.com/jhs512" target="_blank">
                                    GITHUB
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/jhs512" target="_blank">
                                    FACEBOOK
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/jhs512" target="_blank">
                                    INSTA
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>