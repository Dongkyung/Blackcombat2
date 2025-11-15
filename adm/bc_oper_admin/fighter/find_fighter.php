<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once('../../../common.php');

$fighter_seq = $_GET['fighter_seq'];

function age($birthday) {
    if($birthday == null){
        return -1;
    }
    $today       = date('Ymd');
    $birthday = date('Ymd' , strtotime($birthday));
    $age     = floor(($today - $birthday) / 10000);
    return $age;
}


// TODO: 적절한 SQL INSERT 쿼리를 사용하여 데이터 추가
$sql = "SELECT
            tb.team_name,
            fb.fighter_seq,
            fb.fighter_type,
            fb.fighter_name,
            fb.fighter_ringname,
            fb.team_seq,
            fb.birth,
            fb.insta_id,
            fb.height,
            fb.weight,
            fb.win,
            fb.lose,
            fb.draw,
            fb.tel,
            fb.music_name,
            fb.music_url,
            fb.country,
            fb.sherdog_url,
            fb.lsttm,
            fb.fsttm
        FROM tb_fighter_base fb
        LEFT JOIN tb_team_base tb ON fb.team_seq = tb.team_seq 
        WHERE fb.del_yn = 0
        AND fighter_seq = $fighter_seq
        ORDER BY fighter_seq";

// 쿼리 실행
$result = sql_query($sql);

if ($result) {
    $data = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $birthDate = $row['birth'];
            $calculatedAge = age($birthDate);
            $row['calculatedAge'] = $calculatedAge;
            $data[] = $row;
        }
    }
    echo json_encode($data[0]);
} else {
    // 추가 실패한 경우
    echo json_encode(['success' => false, 'error' => sql_error()]);
}
?>