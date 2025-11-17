<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once ('../../../common.php');

// POST 데이터에서 수정에 필요한 값들을 가져옴
$fighterSeq = $_POST['fighterSeq'];
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
$country = $_POST['country'];
$sherdog_url = $_POST['sherdog_url'];



// TODO: 적절한 SQL UPDATE 쿼리를 사용하여 데이터 업데이트
$sql = "UPDATE tb_fighter_base SET 
fighter_name = '$fighter_name',
fighter_ringname = '$fighter_ringname',
team_seq = $team_seq,
birth = '$birth',
insta_id = '$insta_id',
height = $height,
weight = $weight,
win = $win,
lose = $lose,
draw = $draw,
tel = '$tel',
music_name = '$music_name',
music_url = '$music_url',
country = '$country',
sherdog_url = '$sherdog_url',
lsttm = NOW()
WHERE fighter_seq = $fighterSeq";

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