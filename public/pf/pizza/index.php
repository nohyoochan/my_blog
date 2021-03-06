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
                <article class="banner-bar">
                    <div class="inner-box">
                        <div class="banner-box">
                           <div class="poster">
                                <div class="poster-bar">
                                    <div class="poster-item">
                                        <a href="#">
                                            <img src="https://nohyoochan.github.io/img1/pf/pizza/cont2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="poster-item">
                                        <a href="#">
                                            <img src="https://nohyoochan.github.io/img1/pf/pizza/cont1.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                           </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </div>
    <footer class="footer">
        <div class="footer-bar">
            <div class="inner-box">
                <div class="footer-order">
                    <i class="ico-logo2"></i>
                    <span class="tel">1577-3082</span>
                </div>
                <ul class="footer-contact">
                    <li>
                        <a href="#">이용약관</a>
                    </li>
                    <li class="on">
                        <a href="#">개인정보처리방침</a>
                    </li>
                    <li>
                        <a href="#">고객센터</a>
                    </li>
                    <li>
                        <a href="#">인재채용</a>
                    </li>
                    <li>
                        <a href="#">가맹점모집</a>
                    </li>
                    <li>
                        <a href="#">단체주문</a>
                    </li>
                </ul>
                <div class="footer-info">
                    <span>06229 서울특별시 강남구 언주로 315 청오디피케이㈜｜대표이사 : 오광현</span>
                    <br>
                    <span>사업자 등록번호: 220-81-03371｜통신판매업신고: 강남 5064호｜개인정보 보호책임자 : 이명윤</span>
                    <br>
                    <span>문의 : webmaster@dominos.co.kr</span>
                    <br>
                    <span>Copyright ⓒ Domino’s Pizza. All rights reserved.</span>
                    <br>
                    <span class="notice">
                    청오디피케이㈜의 사전 서면동의 없이 도미노피자 사이트(PC, 모바일, 앱)의 일체의 정보, 콘텐츠 및 UI 등을 상업적 목적으로 전재, 전송, 스크래핑 등 무단 사용할 수 없습니다.
                    </span>
                </div>
                <div class="footer-cont">
                    <div class="select-type2 language">
		                <select id="select-type2">
							<option value="/main?locale=ko">KOR</option>
							<option value="/main?locale=en">ENG</option>
						</select>
                    </div>
                    <dl class="app-box">
                        <dt>DOWNLOAD APP</dt>
                        <dd>
                            <a href="#">
                                <i class="ico-ios"></i>
                            </a>
                        </dd>
                        <dd>
                            <a href="#">
                                <i class="ico-android"></i>
                            </a>
                        </dd>
                    </dl>
                    <div class="sns-box">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="ico-blog"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ico-insta"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ico-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ico-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ico-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="award-bar">
            <div class="inner-box">
                <ul>
                    <li>
                        <img src="https://nohyoochan.github.io/img1/pf/pizza/list_awards.png" alt="">
                        <span>식품안전
                            <br>
                            경영시스템 인증
                        </span>
                    </li>
                    <li>
                        <img src="https://nohyoochan.github.io/img1/pf/pizza/list_awards2.png" alt="">
                        <span>지식경제부
                            <br>
                            우수디자인 선정
                        </span>
                    </li>
                    <li>
                        <img src="https://nohyoochan.github.io/img1/pf/pizza/list_awards3.png" alt="">
                        <span>고객이 가장 추천하는 기업
                            <br>
                            피자전문점 부문 7년 연속 1위
                        </span>
                    </li>
                    <li>
                        <img src="https://nohyoochan.github.io/img1/pf/pizza/list_awards4.png" alt="">
                        <span>2019년 한국산업 고객만족도
                            <br>
                            피자전문점 부문 5년 연속 1위
                        </span>
                    </li>
                    <li>
                        <img src="https://nohyoochan.github.io/img1/pf/pizza/list_awards5.png" alt="">
                        <span>2019 프리미엄브랜드지수
                            <br>
                            피자전문점 부문 4년 연속 1위 수상
                        </span>
                    </li>
                    <li>
                        <img src="https://nohyoochan.github.io/img1/pf/pizza/list_awards6.png" alt="">
                        <span>대학생 1000명이 선택한
                            <br>
                            2019 올해의 핫 브랜드 캠퍼스 잡앤조이 선정
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>
</body>