<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once('../../../common.php');

// POST 데이터에서 추가에 필요한 값들을 가져옴
$currentOrder = $_POST['currentOrder'];
$division = $_POST['division'];


$currentOrder = stripslashes($currentOrder);
$orderData = json_decode($currentOrder, true);

 // SQL 쿼리 작성
 $sql = "DELETE FROM tb_champion_history 
         WHERE division = '$division'";
//  쿼리 실행
 $result = sql_query($sql);

// 테이블 업데이트를 위한 루프
foreach ($orderData as $item) {
    $order = $item['order'];
    $fighter_seq = $item['fighter_seq'];
    $defend = $item['defend'];
    $status = $item['status'];
    $start_date = $item['start_date']; 
    $end_date = $item['end_date']; 

    // TODO: 적절한 SQL UPDATE 쿼리를 사용하여 데이터 업데이트
    $sql = "INSERT INTO blackcombat.tb_champion_history
        (division, `order`, fighter_seq, defend, status, start_date, end_date, fsttm)
        VALUES('$division', $order, $fighter_seq, $defend, $status, '$start_date', '$end_date', now());";

    // 쿼리 실행
    $result = sql_query($sql);    
}



// 추가 성공한 경우
echo json_encode(['success' => true]);

?>