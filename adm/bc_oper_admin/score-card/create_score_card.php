<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once('../../../common.php');


// POST 데이터에서 추가에 필요한 값들을 가져옴
$historySeq = $_POST['historySeq'];

$fields = [
    "referee_name1","score111","minus_score111","score112","minus_score112","score113","minus_score113",
    "total_score11","score114","minus_score114","score121","minus_score121","score122","minus_score122",
    "score123","minus_score123","total_score12","score124","minus_score124","referee_name2","score211",
    "minus_score211","score212","minus_score212","score213","minus_score213","total_score21","score214",
    "minus_score214","score221","minus_score221","score222","minus_score222","score223","minus_score223",
    "total_score22","score224","minus_score224","referee_name3","score311","minus_score311","score312",
    "minus_score312","score313","minus_score313","total_score31","score314","minus_score314","score321",
    "minus_score321","score322","minus_score322","score323","minus_score323","total_score32","score324",
    "minus_score324","overtimeYn11","overtimeYn21","overtimeYn31"
];

$values = array_map(function($field) {
    return isset($_POST[$field]) ? $_POST[$field] : null;
}, $fields);

$values_str = implode(", ", array_map(function($value) {
    return is_numeric($value) ? $value : "'" . addslashes($value) . "'";
}, $values));

$fields_str = implode(", ", $fields);

// SQL 쿼리 생성
$sql = "INSERT INTO blackcombat.tb_score_card (fight_history_seq, $fields_str, lsttm) VALUES ($historySeq, $values_str, current_timestamp());";

echo $sql;

// 쿼리 실행
$result = sql_query($sql);
if ($result) {
    // 추가 성공한 경우
    // 추가된 행의 team_seq를 가져옴 (예: MySQL의 경우, mysqli_insert_id 함수 사용)
    echo json_encode(['success' => true]);
} else {
    // 추가 실패한 경우
    echo json_encode(['success' => false, 'error' => sql_error()]);
}
?>