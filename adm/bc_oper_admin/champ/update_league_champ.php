
<?php
/* 안쓰는 코드인듯 함 */
// // DB 연결 및 설정 코드 작성 (생략)
// include_once('../../../common.php');

// // POST 데이터에서 추가에 필요한 값들을 가져옴
// $currentRanking = $_POST['currentRanking'];
// $leagueName = $_POST['leagueName'];


// $currentRanking = stripslashes($currentRanking);
// $rankingData = json_decode($currentRanking, true);

// //  // SQL 쿼리 작성
// //  $sql = "DELETE FROM tb_fighter_ranking 
// //          WHERE ranking_type = '$rankingType'
// //          AND division = '$division'";
// // //  쿼리 실행
// //  $result = sql_query($sql);

// // 테이블 업데이트를 위한 루프
// foreach ($rankingData as $item) {
//     $ranking = $item['ranking'];
//     $team_seq = $item['team_seq'];
//     // // TODO: 적절한 SQL UPDATE 쿼리를 사용하여 데이터 업데이트
//     $sql = "UPDATE blackcombat.tb_league SET
//         ranking = '$ranking',
//         lsttm = now()
//         WHERE
//         league_name = '$leagueName'
//         AND team_seq = '$team_seq'
//     ";
//     $result = sql_query($sql);
// }



// 추가 성공한 경우
echo json_encode(['success' => true]);

?>