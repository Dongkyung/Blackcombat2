<?php
// DB 연결 및 설정 코드 작성
include_once('../../../common.php');

// POST 데이터에서 추가에 필요한 값들을 가져옴
$winnersRaw = $_POST['winners'] ?? '';

$winnersRaw = stripslashes($winnersRaw);
$winnersData = json_decode($winnersRaw, true);

if (empty($winnersData)) {
    echo json_encode(['success' => false, 'message' => '데이터가 없습니다.']);
    exit;
}

// 테이블에 insert
foreach ($winnersData as $winner) {
    $eventSeq = addslashes($winner['eventSeq']);
    $content1 = addslashes($winner['content1']);
    $content2 = addslashes($winner['content2']);
    $content3 = addslashes($winner['content3']);
    $confirm = addslashes($winner['confirm']);
    $noShowYn = addslashes($winner['noShowYn']);
    $tel = addslashes($winner['tel']);
    $name = addslashes($winner['name']);

    $sql = "
        INSERT INTO blackcombat.tb_event_winner
        (eventSeq, content1, content2, content3, confirm, noShowYn, tel, name, fsttm)
        VALUES
        ('$eventSeq', '$content1', '$content2', '$content3', '$confirm', '$noShowYn', '$tel', '$name', current_timestamp())
    ";

    $result = sql_query($sql);
}

// 추가 성공한 경우
echo json_encode(['success' => true]);
?>