<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once('../../../common.php');

// POST 데이터에서 추가에 필요한 값들을 가져옴
$historySeq = $_POST['historySeq'];
$guessWiner = $_POST['guessWiner'];

// echo $historySeq;
// echo $guessWiner;
// $rankingType = $_POST['rankingType'];


// $currentRanking = stripslashes($currentRanking);
// $rankingData = json_decode($currentRanking, true);



function getClientIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        // Proxy 서버를 통한 IP
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // 프록시 서버를 거친 경우
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        // 직접 접근한 IP
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

$clientIP = getClientIP();

// SQL 쿼리 작성
$voteSeq = "INSERT INTO tb_vote_history (tb_fight_history, ip, vote_date, guess_winner, lsttm)
    VALUES($historySeq, '$clientIP', DATE_FORMAT(CURDATE(), '%Y-%m-%d'), $guessWiner, current_timestamp())";
//  쿼리 실행
$voteResult = sql_query($voteSeq);
echo $voteResult;

if($voteResult == 1){
    //  // SQL 쿼리 작성
    $sql = "UPDATE tb_fight_history SET
    vote$guessWiner  = vote$guessWiner+1
    WHERE SEQ = '$historySeq'";
    //  쿼리 실행
    $result = sql_query($sql);

    // 추가 성공한 경우
    echo json_encode(['success' => true]);
}else{
    echo json_encode(['success' => false]);
}

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