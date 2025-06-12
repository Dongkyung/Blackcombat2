<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once('../../../common.php');

// SQL 쿼리 작성
$seq = "select event_seq from tb_event order by event_seq desc limit 1";
//  쿼리 실행
$result = sql_query($seq);
// echo $result;

for($k=0; $row=sql_fetch_array($result); $k++) {
    $tmpArray = array(
        'event_seq' => $row['event_seq']
    );
    $resultArray[] = $tmpArray;
} // for End

die(json_encode($resultArray));



// echo json_encode(['result' => $result]);

// // 테이블 업데이트를 위한 루프
// foreach ($rankingData as $item) {
//     $ranking = $item['ranking'];
//     $fighter_seq = $item['fighter_seq'];
//     $ranking_updown = $item['ranking_updown'];
//     $memo_1 = $item['memo_1'];

//     // TODO: 적절한 SQL UPDATE 쿼리를 사용하여 데이터 업데이트
//     $sql = "INSERT INTO blackcombat.tb_fighter_ranking
//         (ranking_type, fighter_seq, division, ranking, ranking_updown, lsttm, fsttm)
//         VALUES($rankingType, $fighter_seq, '$division', '$ranking', '$ranking_updown', current_timestamp(), current_timestamp());";

//     // 쿼리 실행
//     $result = sql_query($sql);

//     $memoSql = "INSERT INTO blackcombat.tb_fighter_memo (fighter_seq, memo_1)
//     VALUES ($fighter_seq, '$memo_1') ON DUPLICATE KEY
//     UPDATE memo_1 = '$memo_1'";
//     sql_query($memoSql);
    
// }







?>