<?php
$uploadDir = $_SERVER['DOCUMENT_ROOT'] . "/theme/blackcombat/img/fighter_new/test/";
$uploadUrl = "/theme/blackcombat/img/fighter_new/test/";

$response = [];

if (is_dir($uploadDir)) {
    $files = scandir($uploadDir);

    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;

        $filePath = $uploadDir . $file;
        if (is_file($filePath)) {
            $response[] = [
                'name' => $file,
                'size' => filesize($filePath),
                'url'  => $uploadUrl . $file
            ];
        }
    }
}

// ✅ 숫자 기준 정렬
usort($files, function ($a, $b) {
    // 정수로 변환 후 비교
    return intval($a['name']) - intval($b['name']);
});

header('Content-Type: application/json');
echo json_encode($response);