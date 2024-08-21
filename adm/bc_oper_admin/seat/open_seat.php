<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once ('../../../common.php');

 
 $it_id = $_POST["it_id"];
 $seat_row_type = $_POST["seat_row_type"];
 $seat_number = $_POST["seat_number"];

 
 // SQL 쿼리 작성
 $sql = "delete from tb_seat_control 
         WHERE it_id = '$it_id'
         AND ct_seat_row_type = '$seat_row_type'
         AND ct_seat_number = '$seat_number'
         ";

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