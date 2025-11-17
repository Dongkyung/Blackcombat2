<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once ('../../../common.php');

// POST 데이터에서 수정에 필요한 값들을 가져옴
$fighterSeq = $_POST['fighterSeq'];
$statusCode = $_POST['statusCode'];



// TODO: 적절한 SQL UPDATE 쿼리를 사용하여 데이터 업데이트
$sql = "UPDATE tb_fighter_base SET 
fighter_status = '$statusCode',
status_lsttm = NOW()
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