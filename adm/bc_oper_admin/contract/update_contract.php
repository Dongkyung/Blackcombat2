<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once ('../../../common.php');


$fighterSeq = $_POST['fighterSeq'];
$btnradio_contract_yn = $_POST['btnradio_contract_yn'];
$popup_contract_date = $_POST['popup_contract_date'];
$popup_start_date = $_POST['popup_start_date'];
$popup_end_date = $_POST['popup_end_date'];
$popup_contract_fmoney = $_POST['popup_contract_fmoney'];
$popup_contract_match_number = $_POST['popup_contract_match_number'];
$popup_correction_val = $_POST['popup_correction_val'];
$memo = $_POST['memo'];

$sql = "INSERT INTO tb_contract (
    fighter_seq, contract_yn, contract_date, start_date, end_date,
    contract_fmoney, contract_match_number, correction_val, memo, lsttm
) VALUES (
    {$fighterSeq}, {$btnradio_contract_yn}, '{$popup_contract_date}', 
    '{$popup_start_date}', '{$popup_end_date}', '{$popup_contract_fmoney}',
    {$popup_contract_match_number}, '{$popup_correction_val}', '{$memo}', NOW()
) ON DUPLICATE KEY UPDATE
    contract_yn = VALUES(contract_yn),
    contract_date = VALUES(contract_date),
    start_date = VALUES(start_date),
    end_date = VALUES(end_date),
    contract_fmoney = VALUES(contract_fmoney),
    contract_match_number = VALUES(contract_match_number),
    correction_val = VALUES(correction_val),
    memo = VALUES(memo),
    lsttm = NOW()";

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