<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once('../../../common.php');

// POST 데이터에서 추가에 필요한 값들을 가져옴
$currentRanking = $_POST['currentRanking'];
$division = $_POST['division'];
$rankingType = $_POST['rankingType'];


$currentRanking = stripslashes($currentRanking);
$rankingData = json_decode($currentRanking, true);

 // SQL 쿼리 작성
 $sql = "DELETE FROM tb_fighter_ranking 
         WHERE ranking_type = '$rankingType'
         AND division = '$division'";
//  쿼리 실행
 $result = sql_query($sql);

// 테이블 업데이트를 위한 루프
foreach ($rankingData as $item) {
    $ranking = $item['ranking'];
    $fighter_seq = $item['fighter_seq'];
    $ranking_updown = $item['ranking_updown'];
    $memo_1 = $item['memo_1'];

    // TODO: 적절한 SQL UPDATE 쿼리를 사용하여 데이터 업데이트
    $sql = "INSERT INTO blackcombat.tb_fighter_ranking
        (ranking_type, fighter_seq, division, ranking, ranking_updown, lsttm, fsttm)
        VALUES($rankingType, $fighter_seq, '$division', '$ranking', '$ranking_updown', current_timestamp(), current_timestamp());";

    // 쿼리 실행
    $result = sql_query($sql);

    $memoSql = "INSERT INTO blackcombat.tb_fighter_memo (fighter_seq, memo_1)
    VALUES ($fighter_seq, '$memo_1') ON DUPLICATE KEY
    UPDATE memo_1 = '$memo_1'";
    sql_query($memoSql);
    
}



// 추가 성공한 경우
echo json_encode(['success' => true]);

?>