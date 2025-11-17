<?php
include_once('../../../common.php');

$ruleType = trim($_POST['ruleType']);
$title    = trim($_POST['title']);
$contents = trim($_POST['rule_contents']);
$upt_date = trim($_POST['upt_date']); // yyyy.mm.dd 형태

if (!$title || !$contents || !$upt_date) {
    die('제목, 내용, 날짜를 모두 입력하세요.');
}

// yyyy.mm.dd → yyyy-mm-dd 변환 (MySQL DATETIME 호환)
$upt_date_db = date("Y-m-d", strtotime(str_replace(".", "-", $upt_date)));

// DB Insert
$sql = "INSERT INTO tb_rule_content (`type`, title, rule_contents, upt_date, reg_date)
        VALUES ($ruleType, '$title', '$contents', '$upt_date_db', NOW())";

$ruleTypeKor;
if($ruleType == "1"){
    $ruleTypeKor = "프로";
}else if($ruleType  == "2"){
    $ruleTypeKor = "아마추어";
}


$result = sql_query($sql);
if ($result) {
    // 추가 성공한 경우
    echo "<script>alert('저장되었습니다.'); location.href='/adm/bc_oper_admin/rule_content.php?ruleType=".$ruleTypeKor."';</script>";
} else {
    // 추가 실패한 경우
    echo json_encode(['success' => false, 'error' => sql_error()]);
}