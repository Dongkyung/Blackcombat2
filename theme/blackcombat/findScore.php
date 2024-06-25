<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once(G5_MOBILE_PATH.'/head.php');

$score_seq = $_GET['score_seq'];

// TODO: 적절한 SQL INSERT 쿼리를 사용하여 데이터 추가
$sql = "SELECT score_seq,
fight_history_seq,
referee_name1,
score1_1,
minus_score1_1,
score1_2,
minus_score1_2,
score1_3,
minus_score1_3,
total_score1,
score1_4,
minus_score1_4,
referee_name2,
score2_1,
minus_score2_1,
score2_2,
minus_score2_2,
score2_3,
minus_score2_3,
total_score2,
score2_4,
minus_score2_4,
referee_name3,
score3_1,
minus_score3_1,
score3_2,
minus_score3_2,
score3_3,
minus_score3_3,
total_score3,
score3_4,
minus_score3_4,
lsttm
FROM blackcombat.tb_score_card
WHERE score_seq=$score_seq";

// 쿼리 실행
$result = sql_query($sql);

if ($result) {
    $data = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    echo json_encode($data[0]);
} else {
    // 추가 실패한 경우
    echo json_encode(['success' => false, 'error' => sql_error()]);
}
?>