<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page portfolio</title>
    <link rel="stylesheet" href="/pf/portfolio/css/reset.css">  <!-- 리셋 파일-->
	<link rel="stylesheet" href="/pf/portfolio/css/font.css">
	<link rel="stylesheet" href="/pf/portfolio/css/book copy.css"> <!-- 책 넘김 효과-->
    <link rel="stylesheet" href="/pf/portfolio/css/hslider.css"> <!-- 가로스크롤-->
	<link rel="stylesheet" href="/pf/portfolio/css/sub1stylecopy.css"> <!-- 기본 스타일 + 네비게이션-->
	<link rel="stylesheet" href="/pf/portfolio/css/scrollanimation.css"> <!-- 텍스트 스크롤 애니메이션-->
	<link rel="stylesheet" href="/pf/portfolio/css/sal.css">
    <link rel="icon" href="https://nohyoochan.github.io/img1/pf/PF/main1.png">

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script> <!-- 슬라이드 / 반드시 있어야함-->
	<script src="/pf/portfolio/js/jquery.HSlider.min.js"></script> <!-- 슬라이드 / 반드시 있어야함-->
	<script src="/pf/portfolio/js/about_tab.js"></script>
</head>

<body>
<script src="/pf/portfolio/js/book copy.js"></script>

<div class="HSliderwrap">

		<div class="overlay-navigation">
			<nav role="navigation">
				<ul>
					<li><a href="personal_process.html" data-content="Curious?"></a></li>
					<li><a href="sub1 copy.html" data-content="I got game"></a></li>
					<li><a href="portfolio.html" data-content="Only the finest"></a></li>
					<li><a href="sub3.html" data-content="Don't hesitate"></a></li>
				</ul>
			</nav>
		</div>
		<div class="logo">
			<a href="index.html"></a>
		</div>

		<div class="open-overlay">
			<img src="https://nohyoochan.github.io/img1/pf/PF/icon-close.png" alt="" class="bar-top">
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
                    <div class="p2_bg"></div>
                    <div class="p4_bg"></div>
					<div class="book_f1"></div>
					<div class="p1_img"></div>
					<div class="p1_maintxt" data-sal="slide-left" data-sal-delay="100" data-sal-easing="ease-out-bounce" data-sal-duration="2000"></div>
					<div class="p1_maintxt2" data-sal="slide-right" data-sal-delay="100" data-sal-easing="ease-out-bounce" data-sal-duration="2000"></div>
					<div class="p1_txt"></div>
					<div class="p1_indextxt"></div>
					<div class="p1_shadow"></div>
					<div class="p1">
						p.01 
					</div>
					<div class="p2">
						p.02
					</div>

				</div>
            </section>  <!-- p1, p2 끝 -->
            

			<section class="Hslider_S sub2_3">  <!-- p3, p4 시작 -->
				<div class="main2">
					<div class="p4_bg"></div>
					<div class="book_f"></div>
					<div class="p3_maintxt" data-sal="slide-left" data-sal-delay="100" data-sal-easing="ease-out-bounce" data-sal-duration="2000">
						<!-- It's what I -->
						</div>
					<div class="p3_maintxt2" data-sal="slide-right" data-sal-delay="100" data-sal-easing="ease-out-bounce" data-sal-duration="2000">
						<!-- can do. -->
						</div>
					<div class="p3_backtxt"></div>
					<div class="p3_subtxt"></div>
					<div class="p3">
						p.03 
					</div>
					<div class="p4">
						p.04
					</div>

					<!-- ul.btn>li*3{menu$} -->
					<ul class="btn">
						<li class="on">
							<p>Design</p>
							<div class="tabgraph tab1_graph" data-sal="slide-left" data-sal-delay="100" data-sal-easing="ease-out-bounce" data-sal-duration="2000"></div>
						</li>
						<li>
							<p>Character</p>
							<div class="tabgraph tab2_graph" data-sal="slide-left" data-sal-delay="100" data-sal-easing="ease-out-bounce" data-sal-duration="2000"></div>
						</li>

					</ul>
					<div class="box">
						<div class="on box_wrap">
							<div class="box1_bg">
								<!-- <div class="tabgraph tab1_graph"></div> -->
								<!-- <div class="design_graph">
									<div class="graph stack1">
										<span style="width: 30%;">HTML 75%</span>
									</div>
									<div class="graph stack2">
										<span style="width: 25%;">CSS 40%</span>
									</div>
									<div class="graph stack3">
										<span style="width: 10%;">JS 25%</span>
									</div>
								</div> -->
							</div>
						</div>
						<div class="box_wrap">
							<div class="box2_bg">
								<!-- <div class="tabgraph tab2_graph"></div> -->
							</div>
						</div><!-- box wrap 끝 -->
						
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