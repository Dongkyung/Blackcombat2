<?php
include_once('../../common.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // 문자열 데이터 받기
    $stringData = isset($_POST['stringData']) ? $_POST['stringData'] : 'no-string';

    $uploadDir = $_SERVER['DOCUMENT_ROOT'] . "/theme/blackcombat/img/fighter_new/test/";

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

    // 응답 JSON
    echo json_encode([
        'success' => true,
        'stringData' => $stringData,
        'savedFiles' => $savedFiles
    ]);
}
?>