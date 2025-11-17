<?php
// DB 연결 및 설정 코드 작성 (생략)
ini_set('display_errors', 1);
error_reporting(E_ALL);
include_once('../../../common.php');

$fighter_seq = $_GET['fighter_seq'];

$contractData = [];
$matchData = [];
$offerRejectData = [];

$contractSql = "SELECT 
	fb.fighter_seq,
	fb.fighter_name,
	fb.fighter_ringname,
	c.contract_yn,
    DATE_FORMAT(c.contract_date, '%Y-%m-%d') AS contract_date,
    DATE_FORMAT(c.start_date, '%Y-%m-%d') AS start_date,
    DATE_FORMAT(c.end_date, '%Y-%m-%d') AS end_date,
	c.contract_fmoney,
	c.contract_match_number,
	c.correction_val,
    c.memo
FROM 
	tb_fighter_base fb
	left join tb_contract c
	on fb.fighter_seq = c.fighter_seq 
WHERE 
	fb.del_yn = 0
	and fb.fighter_seq = $fighter_seq;";

// 쿼리 실행
$contractResult = sql_query($contractSql);

while ($row = sql_fetch_array($contractResult)) {
    $contractData[] = $row;
}


if (!empty($contractData) 
    && $contractData[0]['contract_yn'] == '1'
    && !empty($contractData[0]['start_date']) 
    && !empty($contractData[0]['end_date'])
) {
    $start = $contractData[0]['start_date'];
    $end   = $contractData[0]['end_date'];

    $matchSql = "SELECT
    event.event_name_short as game_name 
    , event.event_seq
    , his.player1
    , base1.fighter_name as player1_name
    , base1.country as country1
    , his.player2
    , CASE WHEN his.player2 REGEXP '^[0-9]+$' THEN base2.fighter_name ELSE his.player2 END AS player2_name
    , base2.country as country2
    , his.winner_player
    , his.result
    , his.play_date
    , his.video_url
    from tb_fight_history his
        LEFT JOIN tb_fighter_base base1
        on his.player1 = base1.fighter_seq 
        LEFT JOIN tb_fighter_base base2
        on his.player2 = base2.fighter_seq
        left join tb_event event
        on event.event_seq = his.event_seq
    WHERE (his.player1 = {$fighter_seq} OR his.player2 = {$fighter_seq})
        AND his.play_date BETWEEN '{$start}' AND '{$end}'
    ORDER BY his.play_date DESC";

    // 쿼리 실행
    $matchResult = sql_query($matchSql);

    while ($row = sql_fetch_array($matchResult)) {
        $matchData[] = $row;
    }

    $offerRejectSql = "SELECT 
                        reject.reject_seq
                        , reject.fighter_seq
                        , reject.offer_date
                        , reject.opponent_seq
                        , base.fighter_name as opponent_name
                        , reject.reject_reason
                        , reject.lsttm
                    FROM tb_offer_reject reject left join tb_fighter_base base on reject.opponent_seq = base.fighter_seq
                    WHERE
                        reject.fighter_seq = {$fighter_seq}
                        AND offer_date BETWEEN '{$start}' AND '{$end}'
                    ORDER by reject.reject_seq DESC;";

    // 쿼리 실행
    $offerRejectResult = sql_query($offerRejectSql);

    while ($row = sql_fetch_array($offerRejectResult)) {
        $offerRejectData[] = $row;
    }


}





if ($contractResult && true) {
    echo json_encode([
        'contractResult' => $contractData,
        'matchHistory' => $matchData,
        'offerRejectHistory' => $offerRejectData
    ], JSON_UNESCAPED_UNICODE);
} else {
    // 추가 실패한 경우
    echo json_encode(['success' => false, 'error' => sql_error()]);
}
?>