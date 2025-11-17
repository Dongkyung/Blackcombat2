<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once ('../../../common.php');
include_once(G5_ADMIN_PATH.'/admin.head.php');

// POST 데이터에서 수정에 필요한 값들을 가져옴
$teamSeq = $_POST['teamSeq'];
$teamName = $_POST['teamName'];
$teamAddr = $_POST['teamAddr'];
$teamTel = $_POST['teamTel'];

// TODO: 적절한 SQL UPDATE 쿼리를 사용하여 데이터 업데이트
$sql = "UPDATE tb_team_base SET team_name = '$teamName', addr = '$teamAddr', tel = '$teamTel', lsttm = NOW() WHERE team_seq = $teamSeq";
echo "실행전";
// 쿼리 실행
$result = sql_query($sql);
echo "실행후";
if ($result) {
    // 업데이트 성공한 경우
    echo json_encode(['success' => true]);
} else {
    // 업데이트 실패한 경우
    echo json_encode(['success' => false, 'error' => sql_error()]);
}
?>