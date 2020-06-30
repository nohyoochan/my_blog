<?php
$dbConn = mysqli_connect("site5.blog.oa.gg", "site5", "sbs123414", "site5", 3306) or die("DB CONNECTION ERROR");

// 4 IT/디자인
// 3 IT/프론트엔드
// 2 IT/일반
// 1 일상


// http://localhost:8077/list_test.php?cateItemId=1
// http://localhost:8077/list_test.php?cateItemId=2
// http://localhost:8077/list_test.php?cateItemId=3
// http://localhost:8077/list_test.php?cateItemId=4

$cateItemId = $_GET['cateItemId'];

$sql = "
SELECT *
FROM cateItem
WHERE id = {$cateItemId}
";
$rs = mysqli_query($dbConn, $sql);
$row = mysqli_fetch_assoc($rs);
$cateItemName = $row['name'];

$sql = "
SELECT *
FROM article
WHERE cateItemId = {$cateItemId}
ORDER BY ID DESC
";
$rs = mysqli_query($dbConn, $sql);
$articleRows = [];
while ( true ) {
    $row = mysqli_fetch_assoc($rs);

    if ( $row == null ) {
        break;
    }

    $articleRows[] = $row;
}
?>
<h1>카테고리 : <?=$cateItemName?></h1>
<?php foreach ( $articleRows as $article ) { ?>
<div>
    <a href="./detail.php?id=<?=$article['id']?>">번호 : <?=$article['id']?>, 제목 : <?=$article['title']?>, 작성날짜 : <?=$article['regDate']?></a>
</div>
<?php } ?> 

