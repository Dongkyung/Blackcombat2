<?php
// DB 연결 및 설정 코드 작성 (생략)
ini_set('display_errors', 1);
error_reporting(E_ALL);
include_once('../../../common.php');

// POST 데이터에서 추가에 필요한 값들을 가져옴
$fighterSeq = $_POST['fighterSeq'];
$newOfferDate = $_POST['newOfferDate'];
$newOpponentSeq = $_POST['newOpponentSeq'];
$newRejectReason = $_POST['newRejectReason'];

// TODO: 적절한 SQL INSERT 쿼리를 사용하여 데이터 추가
$sql = "INSERT INTO tb_offer_reject
(fighter_seq, offer_date, opponent_seq, reject_reason, lsttm)
VALUES($fighterSeq, '$newOfferDate', $newOpponentSeq, '$newRejectReason', now());";

echo $sql;
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