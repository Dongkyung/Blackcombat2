<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once('../../../common.php');
$binary_data = $_POST['binary_data'];
echo  base64_encode($binary_data)
?>