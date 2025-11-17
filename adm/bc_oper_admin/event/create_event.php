<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once('../../../common.php');

// POST 데이터에서 추가에 필요한 값들을 가져옴

$event_category = $_POST['event_category'];
$order = $_POST['order'];
$event_name = $_POST['event_name'];
$event_name_short = $_POST['event_name_short'];
$event_place = $_POST['event_place'];
$event_date = $_POST['event_date'];
$selling_yn = $_POST['selling_yn'];
$vote_yn = $_POST['vote_yn'];
$max_img_idx = $_POST['max_img_idx'];
$sell_url = $_POST['sell_url'];
$prologue = $_POST['prologue'];
// TODO: 적절한 SQL INSERT 쿼리를 사용하여 데이터 추가
$sql = "INSERT INTO blackcombat.tb_event (event_category, `order`, event_name, event_name_short, event_place, event_date, selling_yn, sell_url, max_img_idx, prologue,vote_yn, lsttm) VALUES ('$event_category', $order, '$event_name','$event_name_short','$event_place', '$event_date', $selling_yn, '$sell_url', $max_img_idx, '$prologue',$vote_yn, now())";
echo $sql;

// 쿼리 실행
$result = sql_query($sql);
if ($result) {
    // 추가 성공한 경우
    // 추가된 행의 team_seq를 가져옴 (예: MySQL의 경우, mysqli_insert_id 함수 사용)
    $eventSeq = mysqli_insert_id($g5['connect_db']);
    echo json_encode(['success' => true, 'eventSeq' => $eventSeq]);
} else {
    // 추가 실패한 경우
    echo json_encode(['success' => false, 'error' => sql_error()]);
}
?>