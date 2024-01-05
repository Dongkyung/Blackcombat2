<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once ('../../../common.php');

 // POST 데이터에서 팀번호 받아오기
 $teamSeq = $_POST["teamSeq"];

 
 // SQL 쿼리 작성
 $sql = "UPDATE tb_team_base 
         SET del_yn = 1, lsttm = now()
         WHERE team_seq = $teamSeq";

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