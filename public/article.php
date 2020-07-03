<?php
include "../part/head.php";


// 전화번호 세팅
$dbHost = "site5.blog.oa.gg";
$dbPort = 3306;
$dbId = "site5";
$dbPw = "sbs123414";
$dbName = 'site5';

// 전화걸기
$dbConn = mysqli_connect($dbHost, $dbId, $dbPw, $dbName, $dbPort) or die("DB CONNECTION ERROR");

// 전화연결이 성공했다면 이 부분 실행됨

if ( isset($_GET['cateItemId']) == false ) {
    $_GET['cateItemId'] = 0;
}

$cateItemId = $_GET['cateItemId'];

$cateItemName = $cateItemId;

if ( $cateItemId ) {
    $sql = "
    SELECT name
    FROM cateItem
    WHERE id = '{$cateItemId}'
    ";
    $rs = mysqli_query($dbConn, $sql);
    $row = mysqli_fetch_assoc($rs);
    $cateItemName = $row['name'];
}

// 상대방에게 할말 적기
$sql = "
SELECT *
FROM article
";

if ( $cateItemId ) {
    $sql .= "
    WHERE cateItemId = '{$cateItemId}'
    ";
}

$sql .= "
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



<div class="main-name row">
    <span><?=$cateItemName?></span>
</div>
<aside id="aside" class="sidebar">
	<div class="sidebar-1">
		<nav class="category">
			<ul class="tt_category">
	            <li class="">
		            <a class="link_tit" href="#">카테고리</a>
			<ul class="category_list">
				<li class="">
					<a class="link_item" href="/article.php?cateItemId=1">일상</a>
				</li>
				<li class="">
					<a class="link_item" href="/article.php?cateItemId=2">IT/일반</a>
				</li>
				<li class="">
		            <a class="link_item" href="/article.php?cateItemId=3">IT/프론트엔드</a>
				</li>
				<li class="">
                    <a class="link_item" href="/article.php?cateItemId=4">IT/디자인</a>
				</li>
				<li class="">
					<a class="link_item" href="/article.php?cateItemId=5">CSS</a>
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
            <?php foreach ( $rows as $row ) { ?>
                <li class="bord-list-item-1 photo">
                    <div class="bord-item-inner">
                        <div class="bord-item-inner-co">
                            <a href="detail.php?id=<?=$row['id']?>" class="link"> <img src="<?=$row['thumbImgUrl']?>" alt=""><span></span></a>
                            <span class="co"><a href="detail.php?id=<?=$row['id']?>" class="title-link"><?=$row['title']?></a><a href="detail.php?id=<?=$row['id']?>"
                                    class="program-link"><?=substr($row['regDate'], 0, 10)?></a></span>
                        </div>
                    </div>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>

<?php
    include "../part/foot.php"
?>