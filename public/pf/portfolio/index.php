<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page portfolio</title>
    <link rel="stylesheet" href="/pf/portfolio/css/reset.css">  <!-- 리셋 파일-->
	<link rel="stylesheet" href="/pf/portfolio/css/font.css">
	<!--
	<link rel="stylesheet" href="/pf/portfolio/css/book copy.css"> <!--> <!-- 책 넘김 효과-->
    <link rel="stylesheet" href="/pf/portfolio/css/hslider.css"> <!-- 가로스크롤-->
	<link rel="stylesheet" href="/pf/portfolio/css/sub1stylecopy.css"> <!-- 기본 스타일 + 네비게이션-->
	<link rel="stylesheet" href="/pf/portfolio/css/scrollanimation.css"> <!-- 텍스트 스크롤 애니메이션-->
	<link rel="stylesheet" href="/pf/portfolio/css/sal.css">
    <link rel="icon" href="https://nohyoochan.github.io/img1/pf/PF/main1.png">

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script> <!-- 슬라이드 / 반드시 있어야함-->
	<script src="/pf/portfolio/js/jquery.HSlider.min.js"></script> <!-- 슬라이드 / 반드시 있어야함-->
	<script src="/pf/portfolio/js/imagesloaded.pkgd.min.js"></script>
    <script src="/pf/portfolio/js/TweenMax.min.js"></script>
    <script src="/pf/portfolio/js/demo.js"></script>
	<script src="/pf/portfolio/js/about_tab.js"></script>
</head>

<body>
<script src="/pf/portfolio/js/book copy.js"></script>

<div class="HSliderwrap">

		<div class="overlay-navigation">
			<nav role="navigation">
				<ul>
					<li><a href="" data-content="Curious?"></a></li>
					<li><a href="" data-content="I got game"></a></li>
					<li><a href="" data-content="Only the finest"></a></li>
					<li><a href="" data-content="Don't hesitate"></a></li>
				</ul>
			</nav>
		</div>

		<div class="open-overlay">
			<img src="https://nohyoochan.github.io/img1/pf/portfolio/menubar.png" alt="" class="bar-top">
		</div>


		<div class="slider">
			<section class="Hslider_S sub2">
				<div class="main">
					<div class="mainbox">
						<img src="./img/sub1/main_box.png" alt="" style="position: absolute; top: 375px; left: 794px; z-index: 1;">
					</div>
                    <div class="maintxt2"></div>
					<div class="main_txt" data-sal="slide-right" data-sal-delay="900" data-sal-easing="ease-out-bounce" data-sal-duration="2000">
						Volume
					</div>
					<div class="book"></div>
					<div class="vol2_txt" data-sal="slide-left" data-sal-delay="900" data-sal-easing="ease-out-bounce" data-sal-duration="2000"></div>
					<div class="vol_txt"></div>

				</div>
            </section>  <!-- 서브 메인 끝 -->
            

			<section class="Hslider_S sub2_1"> <!-- p1 시작 -->
				<div class="main1">
				<div class="p1-abot">
					<h2>ABOUT ME</h2>
				</div>
				<div class="p1-abot-text"></div>
				<div class="p1-abot-bottom"></div>
				<div class="p1-profile">
					<p>Lorem ipsum dolor sit amet,</p>
					<p>consectetur adipisicing elit. Laboriosam optio</p>
					<p> numquam ducimus.</p>
					<p>Cumque, saepe? Delectus aperiam quibusdam minus,</p>
					<p> labore, provident id similique, cum </p>
					<p>hic laboriosam possimus sed explicabo rem sequi.</p>
				</div>
				<div class="p1_img"></div>
				<div class="p1_shadow"></div>
				<div class="p1">p.01</div>
				<div class="p2-education"></div>
				<div class="p2-education2"></div>
				<div class="p2-myskill"></div>
				<ul class="skills">
                    <li>
						<h3>Photoshop</h3>
						<span class="bar">
							<span class="photoshop"></span>
						</span>
					</li>
                    <li>
						<h3>Illustrator</h3>
						<span class="bar">
							<span class="illustrator"></span>
						</span>
					</li>
                    <li>
						<h3>HTML</h3>
						<span class="bar">
							<span class="html"></span>
						</span>
					</li>
   					<li>
						<h3>CSS / Jquery</h3>
						<span class="bar">
							<span class="css"></span>
						</span>
					</li>
				</ul>
				<div class="p2-charater"></div>
				<ul class="skills2">
                    <li>
						<h3>적응력</h3>
						<span class="bar">
							<span class="a1""></span>
						</span>
					</li>
                    <li>
						<h3>책임감과 성실성</h3>
						<span class="bar">
							<span class="a2"></span>
						</span>
					</li>
                    <li>
						<h3>열정과 도전정신</h3>
						<span class="bar">
							<span class="a3"></span>
						</span>
					</li>
				</ul>
				<div class="p2">p.02</div>

				</div>
            </section>  <!-- p1, p2 끝 -->
            

			<section class="Hslider_S sub2_3">  <!-- p3, p4 시작 -->
				<div class="main2">
					<div class="box-left">
                	<div class="selected-txt">SELECTED PROJECTS</div>
                	<div class="portfolio_menu">
                    	<ul class="po-menu-list">
                        	<li class="po-menu-list-1">
								<a href="/pf/portfolio/index.php#3"onfocus="blur()">
								<span class="no">01.</span>Personal Website</a></li>
                        	<li>
								<a href="/pf/portfolio/index2.php" onfocus="blur()">
								<span class="no">02.</span>Website Renewal</a></li>
                        	<li>
								<a href="/pf/portfolio/index3.php" onfocus="blur()">
								<span class="no">03.</span>Mobile UI/UX</a></li>
                        	<li>
								<a href="/pf/portfolio/index4.php" onfocus="blur()">
								<span class="no">04.</span>Creative Site</a></li>
                        	<li>
								<a href="/pf/portfolio/index5.php" onfocus="blur()">
								<span class="no">05.</span>Banner / Poster</a></li>
                    	</ul>
                	</div>
                	<div class="project-name">
                    	<p>Personal<br>Website</p>
                    	<span>개인 웹사이트 "Be faithful to the basics"</span>
					</div>
					</div>
					
					<div class="box-right">
                		<div class="pre-img">
                    	<div class="animated fadeInLeft delay 3s">
                            <img src="https://nohyoochan.github.io/img1/pf/PF/pf3.png" alt="">
                        </div>
                </div>

                <div class="info">
                    <div class="info_1"><strong>Brand</strong><br>쌍용자동차</div>
                    <div class="info_2"><strong>Project</strong><br>웹사이트 리뉴얼 디자인</div>
                    <div class="info_3"><strong>Date</strong><br>October 2019</div>
                    <div><strong>Participation in work </strong><br>기획 75%, 디자인 100%</div>
                </div>

                <div class="button">
                    <div class="design_btn_wrap">
                        <a href="/pf/portfolio/index.php" target="_blank" onfocus="blur()" class="design_btn"><span>Design View</span></a>
                        <a href="#" target="_blank" onfocus="blur()" class="process_btn"><span>Process View</span></a>
                    </div>
                </div>
            	</div>
			
					<div class="p3">
						p.03 
					</div>
					<div class="p4">
						p.04
					</div>
					<div class="p1_shadow"></div>
				</div>
			</section>  <!-- p2 끝 -->
			
            <section class="Hslider_S sub2_4"><!-- p5, p6 시작 -->
                <div class="main3">
                    <div class="p5_img"></div>
                    <div class="p5_txt" data-sal="slide-up" data-sal-delay="100" data-sal-easing="ease-out-bounce" data-sal-duration="2000"></div>
                    <div class="p5_subtxt"></div>
                    <div class="p5_subtxt2">An accommodating designer
                    </div>
                    <div class="p5_square"></div>
                    <div class="p5">p.05</div>
                    <div class="p6">p.06</div>
                    <div class="p1_shadow"></div>
                    <div class="p6_img"></div>
                    <div class="p6_txt" data-sal="slide-down" data-sal-delay="100" data-sal-easing="ease-out-bounce" data-sal-duration="2000"></div>
                    <div class="p6_subtxt"></div>
                </div>
            </section>  <!-- p3 끝 -->
        </div>
        
<script src="/pf/portfolio/js/sal.js"></script>
<script>sal({once: false});</script>
</div>

<script type="text/javascript">
	$(".slider").HSlider({
		easing: 'ease',
		animationTime: '700',
		pagination: true
	});</script>
	

<script src="/pf/portfolio/js/common.js"></script><!-- 네비 스크립트 끝 -->

</body>