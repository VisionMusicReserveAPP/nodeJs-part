<?php
  require_once('dbconfig.php');

  $bID = $_POST['bID'];
  $bPassword = $_POST['bPassword'];
  $bTitle = $_POST['bTitle'];
  $bTitle = $_POST['bContent'];

  $date = date('Y-m-d H:i:s');


  $sql = 'insert into board_free (b_no, b_title, b_content, b_date, b_hit, b_id, b_password) values(null, "' . $bTitle . '", "' . $bContent . '", "' . $date . '", 0, "' . $bID . '", password("' . $bPassword . '"))';

  $result = $conn->query($sql);
  if($result){ //쿼리가 정상실행 될 때
    $msg = "정상적으로 글이 등록되었습니다.";
    $bNo = $conn -> insert_id;
    $replaceURL = './view.php?bno='.$bno;
  } else{
    $msg = "글을 등록하지 못했습니다."
?>
    <script>
      alert("<?php echo $msg?>");
      history.back();
    </script>
<?php
  }
?>
<script>
  alert("<?php echo $msg?>");
  location.replace("<?php echo $replaceURL?>");
</script>
