 <?php
    require_once('dbconfig.php');
    $bNo = $_GET['bno'];

    $sql = 'select b_title, b_content,b_date,b_hit,b_id from board_free where b_no ='.$bNo;
    $result = $conn -> query($sql);
    $row = $result -> fetch_assoc();
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>게시판</title>
  <link rel="stylesheet" href="./css/normalize.css" />
  <link rel="stylesheet" href="./css/board.css" />
</head>
<body>
  <article class="boardArticle">
    <h3>게시판 글쓰기</h3>
    <div id="boardView">
        <h3 id ="boardTitle"><?php echo $row['b_title']?></h3>
        <div id = "boardInfo">
            <span id ="boardID">작성자:<?php echo $row['b_id']?></span>
            <span id ="boardDate">작성일:<?php echo $row['b_date']?></span>
            <span id ="boardHit">작성자:<?php echo $row['b_hit']?></span>
        </div>
        <div id ="boardContent"><?php echo $row['b_content']?></div>
        <div class="btnSet">
          <a href ="write.php?bno=<?php echo $bno?>">수정</a>
          <a href ="delete.php">삭제</a>
          <a href ="./">목록</a>
      </div>
   </article>
</body>
</html>
