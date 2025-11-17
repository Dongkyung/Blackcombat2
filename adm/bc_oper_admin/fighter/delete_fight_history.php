<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once ('../../../common.php');

 
 $historySeq = $_POST["historySeq"];

 
 // SQL 쿼리 작성
 $sql = "DELETE from blackcombat.tb_fight_history 
         WHERE SEQ = $historySeq";

 // 쿼리 실행
 $result = sql_query($sql);

 if ($result) {
     // 업데이트 성공한 경우
     echo json_encode(['success' => true]);
 } else {
     // 업데이트 실패한 경우
     echo json_encode(['success' => false, 'error' => sql_error()]);
 }
?>