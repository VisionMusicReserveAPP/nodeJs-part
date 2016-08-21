<?php
  require_once('dbconfig');

  //$_POST['bno']가 있을때만 $bno 선언
  if(isset($_POST['bno'])){
    $bNo = $_POST['bno'];
  }

  $bPassword = $_POST['bPassword'];

//글삭제
if(isset($bNo)){
  //비밀번호가 서로 맞는 지 체크
  $sql = 'select count(b_password) as cnt from board_free where b_password = password("'.$bPassword.'") and b_no = '.$bNo;
  $result = $conn ->query($sql);
  $row = $result -> fetch_assoc();

  //비밀번호가 맞다면 삭제쿼리 작성
  if($row['cnt']){
    $sql = 'delete from board_free where b_no ='.$bNo;
  } else{ //틀릴시 메시지 출력후 이전화면
    $msg = '비밀번호가 맞지 않습니다.';
  ?>
    <script>
      alert("<?php echo $msg?>");
      history.back();
    </script>
    <?php
        exit;
      }
  }

  $result = $conn->query($sql);

  //쿼리가 정상 실행 시
  if($result){
    $msg = "정상적으로 글이 삭제되었습니다.";
    $replaceURL = './';
  } else{
    $msg = '글을 삭제하지 못했습니다.';
    ?>
    <script>
      alert("<?php echo $msg?>");
      history.back();
    </script>
  <?php
    exit;
  }

  ?>
  <script>
    alert("<?php echo $msg?>");
    location.repalce("<?php echo $replaceURL?>");
  </script>
