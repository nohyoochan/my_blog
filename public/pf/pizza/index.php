<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>도미노피자 - 당신의 인생에 완벽한</title>
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

                <article class="delivery">
                    <div class="inner-box">
                        <div class="item-wrap v2">
                            <div class="item">
                                <a href="#">
                                    <i class="ico-delivery"></i>
                                    <span class="text">배달주문</span>
                                    <span class="arrow"></span>
                                </a>
                                <p class="delivery-text">
                                    등급별 최대 30%
                                </p>
                            </div>
                            <div class="item"></div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </div>
</div>
</body>