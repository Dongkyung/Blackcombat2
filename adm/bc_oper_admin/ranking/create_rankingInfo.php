<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once('../../../common.php');

// POST 데이터에서 추가에 필요한 값들을 가져옴
$ranking_type = $_POST['ranking_type'];
$fighter_seq = $_POST['fighter_seq'];
$division = $_POST['division'];


// TODO: 적절한 SQL INSERT 쿼리를 사용하여 데이터 추가
$sql = "INSERT INTO tb_fighter_ranking (ranking_type, fighter_seq, division, ranking_updown, ranking )
SELECT $ranking_type, $fighter_seq, '$division', 0, CONCAT(MAX(CAST(ranking AS UNSIGNED)) + 1, '' )
   FROM tb_fighter_ranking 
   WHERE ranking NOT LIKE 'C' 
    AND division = '$division'
    AND ranking_type = $ranking_type";

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