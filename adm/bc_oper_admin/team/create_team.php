<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once('../../../common.php');

// POST 데이터에서 추가에 필요한 값들을 가져옴
$teamName = $_POST['teamName'];
$teamAddr = $_POST['teamAddr'];
$teamTel = $_POST['teamTel'];

// TODO: 적절한 SQL INSERT 쿼리를 사용하여 데이터 추가
$sql = "INSERT INTO tb_team_base (team_name, addr, tel, lsttm) VALUES ('$teamName', '$teamAddr', '$teamTel', NOW())";

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