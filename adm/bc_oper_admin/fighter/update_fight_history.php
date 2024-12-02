<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once('../../../common.php');

// POST 데이터에서 추가에 필요한 값들을 가져옴
$history_seq = $_POST['history_seq'];
$event_seq = $_POST['event_seq'];
$fight_name = $_POST['fight_name'];
$video_url = $_POST['video_url'];
$order = $_POST['order'];
$fighter_seq1 = $_POST['fighter_seq1'];
$fighter_seq2 = $_POST['fighter_seq2'];
$winner_seq = $_POST['winner_seq'];
$vote1 = $_POST['vote1'];
$vote2 = $_POST['vote2'];
$result = $_POST['result'];
$play_date = $_POST['play_date'];

// TODO: 적절한 SQL INSERT 쿼리를 사용하여 데이터 추가
$sql = "UPDATE blackcombat.tb_fight_history set
event_seq = $event_seq , 
`order` = $order,
fight_name = '$fight_name',
player1 = '$fighter_seq1',
player2 = '$fighter_seq2',
winner_player = '$winner_seq', 
`result` = '$result', 
play_date = '$play_date',
video_url = '$video_url',
vote1 = $vote1,
vote2 = $vote2,
lsttm = now()
where
seq = $history_seq";
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