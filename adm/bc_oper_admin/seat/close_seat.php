<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once('../../../common.php');

// POST 데이터에서 추가에 필요한 값들을 가져옴
$it_id = $_POST['it_id'];
$seat_row_type = $_POST['seat_row_type'];
$seat_number = $_POST['seat_number'];

// TODO: 적절한 SQL INSERT 쿼리를 사용하여 데이터 추가
$sql = "INSERT INTO blackcombat.tb_seat_control
(it_id, ct_seat_row_type, ct_seat_number, fsttm)
VALUES('$it_id', '$seat_row_type', '$seat_number', current_timestamp());";

// 쿼리 실행
$result = sql_query($sql);
if ($result) {
    // 추가 성공한 경우
    echo json_encode(['success' => true]);
} else {
    // 추가 실패한 경우
    echo json_encode(['success' => false, 'error' => sql_error()]);
}
?>