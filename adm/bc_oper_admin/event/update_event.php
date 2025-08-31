<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once('../../../common.php');

// POST 데이터에서 추가에 필요한 값들을 가져옴
$event_seq = $_POST['event_seq'];
$event_category = $_POST['event_category'];
$order = $_POST['order'];
$event_name = $_POST['event_name'];
$event_name_short = $_POST['event_name_short'];
$event_place = $_POST['event_place'];
$event_date = $_POST['event_date'];
$selling_yn = $_POST['selling_yn'];
$vote_yn = $_POST['vote_yn'];
$max_img_idx = $_POST['max_img_idx'];
$sell_url = $_POST['sell_url'];
$prologue = $_POST['prologue'];

// TODO: 적절한 SQL INSERT 쿼리를 사용하여 데이터 추가
$sql = "UPDATE blackcombat.tb_event set 
event_category = '$event_category',
`order` = $order,
event_name = '$event_name', 
event_name_short = '$event_name_short', 
event_place = '$event_place', 
event_date = '$event_date', 
selling_yn = $selling_yn,
sell_url = '$sell_url', 
max_img_idx = $max_img_idx, 
prologue = '$prologue', 
vote_yn = $vote_yn,
lsttm = now()
where
event_seq = $event_seq";
echo $sql;

// 쿼리 실행
$result = sql_query($sql);
if ($result) {
    // 추가 성공한 경우
    $eventSeq = mysqli_insert_id($g5['connect_db']);

    ////// 이미지 처리
    $uploadDir = $_SERVER['DOCUMENT_ROOT'] . "/theme/blackcombat/img/event/".$event_seq."/";

    // ✅ 디렉토리가 없다면 생성
    if (!is_dir($uploadDir)) {
        if (!mkdir($uploadDir, 0775, true)) {
            echo json_encode(['success' => false, 'error' => '디렉토리 생성 실패']);
            exit;
        }
    }

    // ✅ 기존 파일 모두 삭제
    foreach (glob($uploadDir . '*') as $file) {
        if (is_file($file)) {
            unlink($file);
        }
    }

    $savedFiles = [];

    // 썸네일 저장 처리
    if (isset($_FILES['thumbnail']) && $_FILES['thumbnail']['error'] === UPLOAD_ERR_OK) {
        $thumbName = $_FILES['thumbnail']['name'];
        $thumbTmp = $_FILES['thumbnail']['tmp_name'];
        $thumbExt = pathinfo($thumbName, PATHINFO_EXTENSION);
        $thumbPath = $uploadDir . "/thumb." . $thumbExt;

        move_uploaded_file($thumbTmp, $thumbPath);
    }
    
    // ✅ 업로드된 새 파일 처리
    if (isset($_FILES['photo1'])) {
        $fileArray = $_FILES['photo1'];
        $fileCount = is_array($fileArray['name']) ? count($fileArray['name']) : 1;

        for ($i = 0; $i < $fileCount; $i++) {
            $name = is_array($fileArray['name']) ? $fileArray['name'][$i] : $fileArray['name'];
            $tmpName = is_array($fileArray['tmp_name']) ? $fileArray['tmp_name'][$i] : $fileArray['tmp_name'];
            $error = is_array($fileArray['error']) ? $fileArray['error'][$i] : $fileArray['error'];

            if ($error !== UPLOAD_ERR_OK) continue;

            $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION)); // 확장자 유지
            $newFileName = ($i + 1) . "." . $ext;
            $savePath = $uploadDir . $newFileName;

            if (move_uploaded_file($tmpName, $savePath)) {
                $savedFiles[] = $newFileName;
            }
        }
    }
    //////


    echo json_encode(['success' => true, 'eventSeq' => $eventSeq, 'savedFiles' => $savedFiles]);
} else {
    // 추가 실패한 경우
    echo json_encode(['success' => false, 'error' => sql_error()]);
}
?>