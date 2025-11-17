<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once ('../../../common.php');

 // POST 데이터에서 팀번호 받아오기
 $seq = $_POST["seq"];

 
 // SQL 쿼리 작성
 $sql = "delete from tb_event_winner 
         WHERE seq = $seq";

 // 쿼리 실행
 $result = sql_query($sql);

 if ($result) {
     // 삭제 성공한 경우
     echo json_encode(['success' => true]);
 } else {
     // 삭제 실패한 경우
     echo json_encode(['success' => false, 'error' => sql_error()]);
 }
 
?>