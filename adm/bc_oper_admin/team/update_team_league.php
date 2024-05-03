<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once ('../../../common.php');

// POST 데이터에서 수정에 필요한 값들을 가져옴
$ranking = $_POST['ranking'];
$league_name = $_POST['league_name'];
$team_seq = $_POST['team_seq'];
$round_cnt = $_POST['round_cnt'];
$win_ko = $_POST['win_ko'];
$win_jud = $_POST['win_jud'];
$lose = $_POST['lose'];
$disqua = $_POST['disqua'];
$point = $_POST['point'];

// TODO: 적절한 SQL UPDATE 쿼리를 사용하여 데이터 업데이트
$sql = "UPDATE tb_league SET
    ranking=$ranking,
    round_cnt=$round_cnt, 
    win_ko=$win_ko, 
    win_jud=$win_jud, 
    lose=$lose, 
    disqua=$disqua, 
    `point`=$point, 
    lsttm=now()
WHERE
    league_name = '$league_name'
    AND team_seq = $team_seq;
";

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