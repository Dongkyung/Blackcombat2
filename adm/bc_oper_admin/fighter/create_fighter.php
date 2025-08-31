<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once('../../../common.php');

// POST 데이터에서 추가에 필요한 값들을 가져옴
$fighter_type = $_POST['fighter_type'];
$fighter_name = $_POST['fighter_name'];
$fighter_ringname = $_POST['fighter_ringname'];
$team_seq = $_POST['team_seq'];
$birth = $_POST['birth'];
$insta_id = $_POST['insta_id'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$win = $_POST['win'];
$lose = $_POST['lose'];
$draw = $_POST['draw'];
$tel = $_POST['tel'];
$music_name = $_POST['music_name'];
$music_url = $_POST['music_url'];


$random_fighter_seq = rand(10000000,99999999);

// TODO: 적절한 SQL INSERT 쿼리를 사용하여 데이터 추가
$sql = "INSERT INTO tb_fighter_base (fighter_seq, fighter_type, fighter_name, fighter_ringname, team_seq, birth, insta_id, height, weight, win, lose, draw, tel, music_name, music_url, lsttm)
VALUES ('$random_fighter_seq', $fighter_type, '$fighter_name', '$fighter_ringname', '$team_seq', '$birth', '$insta_id', '$height', '$weight', '$win', '$lose', '$draw','$tel','$music_name','$music_url', NOW())";

// 쿼리 실행
$result = sql_query($sql);
if ($result) {
    // 추가 성공한 경우
    // 추가된 행의 team_seq를 가져옴 (예: MySQL의 경우, mysqli_insert_id 함수 사용)
    $teamSeq = mysqli_insert_id($g5['connect_db']);
    echo json_encode(['success' => true, 'team_seq' => $teamSeq]);
} else {
    // 추가 실패한 경우
    echo json_encode(['success' => false, 'error' => sql_error()]);
}
?>