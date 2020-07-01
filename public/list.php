<?php
include "../part/head.php";
?>
<?php
include "../part/head.php";

// 전화번호 세팅
$dbHost = "site20.blog.oa.gg";
$dbPort = 3306;
$dbId = "site20";
$dbPw = "sbs123414";
$dbName = 'site20';

// 전화걸기
$dbConn = mysqli_connect($dbHost, $dbId, $dbPw, $dbName, $dbPort) or die("DB CONNECTION ERROR");

// 전화연결이 성공했다면 이 부분 실행됨

if ( isset($_GET['cateItemId']) == false ) {
    $_GET['cateItemId'] = 1;
}

$cateItemId = $_GET['cateItemId'];

$sql = "
SELECT name
FROM cateItem
WHERE id = '{$cateItemId}'
";
$rs = mysqli_query($dbConn, $sql);
$row = mysqli_fetch_assoc($rs);
$cateItemName = $row['name'];

// 상대방에게 할말 적기
$sql = "
SELECT *
FROM article
WHERE cateItemId = '{$cateItemId}'
ORDER BY id DESC
";

// 말하고 응답받기
$rs = mysqli_query($dbConn, $sql);
$rows = [];
while ( true ) {
    $row = mysqli_fetch_assoc($rs);
    if ( $row == null ) {
        break;
    }
    $rows[] = $row;
}

?>
<h1 class="con"><?=$cateItemName?> 게시물 리스트</h1>

<style>
.list-box-1 > ul > li > a > img {
    width:150px;
}

.list-box-1 > ul > li {
    margin-top:15px;
}
</style>

<?php if ( empty($rows) ) { ?>
<div class="con">
    게시물이 존재하지 않습니다.
</div>
<?php } else { ?>
<div class="list-box-1 con">
    <ul>
        <?php foreach ( $rows as $row ) { ?>
        <li>
            <a class="flex" href="/detail.php?id=<?=$row['id']?>">
                <img src="<?=$row['thumbImgUrl']?>" alt="">
                <div>
                    <?=$row['title']?>
                    <br>
                    <?=$row['summary']?>
                </div>
            </a>
        </li>
        <?php } ?>
    </ul>
</div>
<?php } ?>
<?php
include "../part/foot.php";
?>

<aside id="aside" class="sidebar">
	<div class="sidebar-1">
		<nav class="category">
			<ul class="tt_category">
	            <li class="">
		            <a class="link_tit" href="/category">카테고리</a>
			<ul class="category_list">
				<li class="">
					<a class="link_item" href="detail.php?id=1">일상</a>
				</li>
				<li class="">
					<a class="link_item" href="detail.php?id=2">IT/일반</a>
				</li>
				<li class="">
		            <a class="link_item" href="detail.php?id=3">IT/프론트엔드</a>
				</li>
				<li class="">
                    <a class="link_item" href="detail.php?id=4">IT/디자인</a>
				</li>
				<li class="">
					<a class="link_item" href="detail.php?id=5">5번글</a>
				</li>
			</ul>
		</li>
    </ul>
</nav>
</div>
</aside>

<div class="list con">
<div class="bord">
          <h2>전체글</h2>
         <div class="bord-list">
         <ul class="cboth" id="newContents">
           <li class="bord-list-item-1 photo">
             <div class="bord-item-inner">
               <div class="bord-item-inner-co">
                 <a href="#" class="link"><img src="https://nohyoochan.github.io/img1/blog/article/2020/img1.jpg" alt=""><span></span></a>
                 <span class="co"><a href="#" class="title-link">제목</a><a href="#" class="program-link">날짜</a></span>
               </div>
             </div>
           </li>
           <li class="bord-list-item-2 photo">
             <div class="bord-item-inner">
               <div class="bord-item-inner-co">
                 <a href="#" class="link">
                   <img src="https://nohyoochan.github.io/img1/blog/article/2020/img1.jpg" alt="">
                   <span></span>
                 </a>
                 <span class="co"><a href="#" class="title-link">제목</a><a href="#" class="program-link">날짜</a></span>
               </div>
             </div>
           </li>
           <li class="bord-list-item-3 photo">
             <div class="bord-item-inner">
               <div class="bord-item-inner-co">
                 <a href="#" class="link"><img src="https://nohyoochan.github.io/img1/blog/article/2020/img1.jpg" alt=""><span>
                   </span>
                 </a>
                 <span class="co"><a href="#" class="title-link">제목</a><a href="#" class="program-link">날짜</a></span>
               </div>
             </div>
           </li>
           <li class="bord-list-item-4 photo">
             <div class="bord-item-inner">
               <div class="bord-item-inner-co">
                 <a href="#" class="link"><img src="https://nohyoochan.github.io/img1/blog/article/2020/img1.jpg" alt=""><span>
                   </span>
                 </a>
                 <span class="co"><a href="#" class="title-link">제목</a><a href="#" class="program-link">날짜</a></span>
               </div>
             </div>
           </li>
           <li class="bord-list-item-5 photo">
             <div class="bord-item-inner">
               <div class="bord-item-inner-co">
                 <a href="#" class="link">
                   <img src="https://nohyoochan.github.io/img1/blog/article/2020/img1.jpg" alt="">
                   <span></span>
                 </a>
                 <span class="co">
                   <a href="#" class="title-link">제목</a><a href="#" class="program-link">날짜</a>
                 </span>
               </div>
             </div>
           </li>
           <li class="bord-list-item-6 photo">
             <div class="bord-item-inner">
               <div class="bord-item-inner-co">
                 <a href="#" class="link">
                   <img src="https://nohyoochan.github.io/img1/blog/article/2020/img1.jpg" alt="">
                   <span></span>
                 </a>
                 <span class="co">
                   <a href="#" class="title-link">제목</a><a href="#" class="program-link">날짜</a>
                 </span>
               </div>
             </div>
           </li>
         </ul>
          </div>
        </div>
</div>
<div class="pagination">
<a class="prev no-more-prev">이전</a>
<a><span class="selected">1</span></a>
<a href="#"><span>2</span></a>
<a href="#"><span>3</span></a>
<a href="#" class="next ">다음</a>
</div>
<?php
include "../part/foot.php";
?> 