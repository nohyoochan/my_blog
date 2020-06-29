DROP DATABASE site5;

CREATE DATABASE site5;

USE site5;

CREATE TABLE article (
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    regDate DATETIME NOT NULL,
    title CHAR(200) NOT NULL,
    `body` TEXT NOT NULL,
    hit INT(10) UNSIGNED NOT NULL
);

INSERT INTO article
SET regDate = NOW(),
title = '제목1',
`body` = '내용1',
hit = 100;

INSERT INTO article
SET regDate = NOW(),
title = '제목2',
`body` = '내용2',
hit = 200;

SELECT *
FROM article
ORDER BY id DESC
LIMIT 100;