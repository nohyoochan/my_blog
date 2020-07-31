<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>도미노피자 - 당신의 인생에 완벽한</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.5/slick.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.5/slick-theme.css">
    <link rel="stylesheet" href="https://kenwheeler.github.io/slick/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="../package/swiper-bundle.min.css">
    <link rel="stylesheet" href="/pf/pizza/index.css">
    <link rel="icon" href="https://nohyoochan.github.io/img1/blog/article/2020/logo1.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../package/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.5.5/slick.min.js"></script>
    <script src="/pf/pizza/index.js"></script>
</head>
<body>
<div class="wrap">
    <header id="header" style="transform: translateY(0px);">
        <div class="top-wrap">
            <div class="inner-box">
                <a href="#" class="btn-logo">
                    <i class="ico-logo"></i>
                    <h1 class="hidden">도미노피자</h1>
                </a>
                <div class="location active">
                    <a href="#" >주변 매장의 프로모션을 확인해보세요!</a>
                </div>
                <div class="util-nav">
                    <a href="#">로그인</a>
                    <a href="#">회원가입</a>
                    <a href="#">
                        <div class="select-type2 language">
		                    <select id="select-type2">
								<option value="/main?locale=ko">KOR</option>
								<option value="/main?locale=en">ENG</option>
							</select>
		                </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- 메뉴 -->
        <div id="gnb" class="gnb-wrap">
            <div class="gnb-inner">
                <ul>
                    <li class="active">
                        <a href="#">
                            <span>메뉴</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>e-쿠폰</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>상품권 선물</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>이벤트·제휴</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>매장검색</span>
                        </a>
                    </li>
                </ul>
                <a href="#" class="snb-more">더보기</a>
            </div>
            <!-- 서브메뉴 -->
            <div class="snb-wrap">
                <div class="inner-box">
                    <div class="mnu-wrap">
                        <div class="mnu-box">
                            <a href="#">도미노 서비스</a>
                                <ul>
                                    <li>
                                        <a href="#">매니아 혜택</a>
                                    </li>
                                    <li>
                                        <a href="#">도미노 모멘트</a>
                                    </li>
                                    <li>
                                        <a href="#">퀵 오더</a>
                                    </li>
                                    <li>
                                        <a href="#">단체주문 서비스</a>
                                    </li>
                                </ul>
                        </div>
                        <div class="mnu-box">
                            <a href="#">고객센터</a>
                                <ul>
                                    <li>
                                        <a href="#">자주하는 질문</a>
                                    </li>
                                    <li>
                                        <a href="#">온라인 신문고</a>
                                    </li>
                                </ul>
                        </div>
                        <div class="mnu-box">
                            <a href="#">회사 소개</a>
                                <ul>
                                    <li>
                                        <a href="#">한국도미노피자</a>
                                    </li>
                                    <li>
                                        <a href="#">광고갤러리</a>
                                    </li>
                                    <li>
                                        <a href="#">사회공헌활동</a>
                                    </li>
                                    <li>
                                        <a href="#">가맹점 모집</a>
                                    </li>
                                    <li>
                                        <a href="#">인재채용</a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                    <div class="notice-box">
                        <a href="#">공지사항</a>
                            <ul>
                                <li>
                                    <a href="#">도미노뉴스</a>
                                </li>
                                <li>
                                    <a href="#">보도자료</a>
                                </li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <div id="container">
        <section id="content">
            <div class="main">
                <!-- slider -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="https://nohyoochan.github.io/img1/pf/pizza/banner1.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="https://nohyoochan.github.io/img1/pf/pizza/banner2.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="https://nohyoochan.github.io/img1/pf/pizza/banner3.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="https://nohyoochan.github.io/img1/pf/pizza/banner4.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="https://nohyoochan.github.io/img1/pf/pizza/banner5.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="https://nohyoochan.github.io/img1/pf/pizza/banner6.jpg" alt=""></div>
                    </div>
    <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                </div>
                <!-- 주문화면 -->
                <article class="delivery">
                    <div class="inner-box">
                        <div class="item-wrap2">
                            <div class="item">
                                <a href="#">
                                    <i class="ico-delivery"></i>
                                    <span class="text">배달 주문</span>
                                    <span class="arrow"></span>
                                </a>
                                <p class="delivery-text">
                                    등급별 최대 30%
                                </p>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <i class="ico-takeout"></i>
                                    <span class="text">포장 주문</span>
                                    <span class="arrow"></span>
                                </a>
                                <p class="wrap-box">등급별 최대 40%</p>
                            </div>
                        </div>
                        <div class="item-wrap">
                            <div class="item">
                                <a href="#">
                                    <i class="ico-chat"></i>
                                    <span class="text2">도미챗 주문</span>
                                    <span class="arrow2"></span>
                                </a>
                                <p class="domichat-box">빠르고 간편한 채팅 주문 서비스</p>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <i class="ico-quick"></i>
                                    <span class="text2">퀵오더</span>
                                    <span class="arrow2"></span>
                                </a>
                                <p>자주 이용하는 메뉴를<br>
                                더 빠르게 주문해보세요!
                                </p>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <i class="ico-driving2"></i>
                                    <span class="text2">드라이빙 픽업 주문</span>
                                    <span class="arrow2"></span>
                                </a>
                                <p>고객님의 차로 직접<br>
                                피자를 가져다 드립니다~
                                </p>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- 혜택 화면 -->
                <article class="grade">
                    <div class="inner-box">
                        <div class="grade-info">
                            <div class="login-before">
                                <div class="title-wrap">
                                    <div class="title-type2">
                                        도미노피자의<br>
                                        <Strong>특별한 매니아 혜택</Strong><br>
                                        누려보세요!
                                    </div>
                                </div>
                                <div class="btn-wrap">
                                    <a href="#" class="btn-type5">로그인</a>
                                </div>
                            </div>
                        </div>
                        <div class="grade-slider">
                            <div class="content">
                            <div class="js-tp-slider-filter">
                                <div class="js-slider"><img src="https://nohyoochan.github.io/img1/pf/pizza/main_card1.png" alt=""></div>
                                 <div class="js-slider"><img src="https://nohyoochan.github.io/img1/pf/pizza/main_card2.gif" alt=""></div>
                                 <div class="js-slider"><img src="https://nohyoochan.github.io/img1/pf/pizza/main_card3.png" alt=""></div>
                                <div class="js-slider"><img src="https://nohyoochan.github.io/img1/pf/pizza/main_card5.png" alt=""></div>
                            </div>
                            </div>
                            </section>
                        </div>
                    </div>
                </article>
                <!-- 배너 -->
                <article class="banner">
                    <div class="inner-box">
                        <div class="banner-box">
                            <a href="#">
                                <img src="https://nohyoochan.github.io/img1/pf/pizza/cont2.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="https://nohyoochan.github.io/img1/pf/pizza/cont1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </div>
</div>
</body>