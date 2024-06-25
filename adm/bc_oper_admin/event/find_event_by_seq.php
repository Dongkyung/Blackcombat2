<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once('../../../common.php');

// POST 데이터에서 추가에 필요한 값들을 가져옴
$event_seq = $_GET['event_seq'];

// TODO: 적절한 SQL INSERT 쿼리를 사용하여 데이터 추가
$sql = "SELECT event_name from tb_event where event_seq = $event_seq";
// 쿼리 실행
$result = sql_query($sql);

while ($row = sql_fetch_array($result)) {
    echo $row['event_name'];
}
?>