<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once('../../../common.php');

// POST 데이터에서 추가에 필요한 값들을 가져옴
$fighter_seq = $_POST['fighter_seq'];
$division = $_POST['division'];


// TODO: 적절한 SQL INSERT 쿼리를 사용하여 데이터 추가
$sql = "INSERT INTO blackcombat.tb_champion_history (division, `order`, fighter_seq, defend, status, start_date, end_date, fsttm)
SELECT '$division', CONCAT(MAX(CAST(`order` AS UNSIGNED)) + 1, '' ), $fighter_seq, 0, 0, null, null, now()
   FROM tb_champion_history 
   WHERE division = '$division'";

// 쿼리 실행
echo $sql;
$result = sql_query($sql);
if ($result) {
    // 추가 성공한 경우
    echo json_encode(['success' => true]);
} else {
    // 추가 실패한 경우
    echo json_encode(['success' => false, 'error' => sql_error()]);
}
?>