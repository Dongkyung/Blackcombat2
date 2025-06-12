<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once ('../../../common.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // // 파일이 업로드되었는지 확인
    
    // // 기존 파일 삭제
    // // 여기에 기존 파일 삭제 로직을 추가하세요.

    // // $fighter_seq = $_GET['fighter_seq'];
    // $fighter_seq = '10976032';
    // // $photo_type = $_GET['photo_type'];

    // // detailImageBin 컬럼에서 바이너리 데이터 가져오기
    // $sql = "SELECT rankingImageBin FROM tb_fighter_base WHERE fighter_seq = $fighter_seq";
    // $result = sql_query($sql);


    



    // if ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    //     $binaryData = $row[0];  // detailImageBin 컬럼 첫 번째 인덱스

    //     // 1. 확장자 추정: 바이너리 앞부분을 확인
    //     $mimeType = finfo_buffer(finfo_open(), $binaryData, FILEINFO_MIME_TYPE);

    //     // 2. MIME 타입에 따라 확장자 결정
    //     $ext = 'bin';
    //     if ($mimeType === 'image/jpeg') $ext = 'jpg';
    //     elseif ($mimeType === 'image/png') $ext = 'png';
    //     elseif ($mimeType === 'image/webp') $ext = 'webp';
    //     elseif ($mimeType === 'image/gif') $ext = 'gif';

    //     // 3. 저장 경로
    //     $savePath = $_SERVER['DOCUMENT_ROOT'] . "/theme/blackcombat/img/fighter_new/test/output_image.PNG";
        
    //     // 4. 파일로 저장
    //     file_put_contents($savePath, $binaryData);

    //     echo "이미지 저장 완료: $savePath";
    // } else {
    //     echo "해당 fighter_seq에 대한 이미지가 없습니다.";
    // }


    // 전체로직
    // $sql = "SELECT fighter_seq, rankingImageBin FROM tb_fighter_base WHERE rankingImageBin IS NOT NULL";
    // $sql = "SELECT fighter_seq, rankingChampImageBin FROM tb_fighter_base WHERE rankingChampImageBin IS NOT NULL";
    $sql = "SELECT fighter_seq, detailImageBin FROM tb_fighter_base WHERE detailImageBin IS NOT NULL";
    $result = sql_query($sql);

    // 기본 디렉토리
    $baseDir = $_SERVER['DOCUMENT_ROOT'] . "/theme/blackcombat/img/fighter_new/";

    while ($row = mysqli_fetch_assoc($result)) {
        $fighter_seq = $row['fighter_seq'];
        // $binaryData = $row['rankingImageBin'];
        // $binaryData = $row['rankingChampImageBin'];
        $binaryData = $row['detailImageBin'];

        // 바이너리 유효성 확인
        if (!$binaryData || strlen($binaryData) < 10) {
            continue; // 비어있거나 너무 작은 데이터는 건너뜀
        }

        // 디렉토리 생성
        $uploadDir = $baseDir . $fighter_seq;
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0775, true);
        }

        // 파일 경로 및 이름 설정
        // $uploadFileName = basename($fighter_seq . "_ranking.PNG");
        // $uploadFileName = basename($fighter_seq . "_rankingChamp.PNG");
        $uploadFileName = basename($fighter_seq . "_detail.PNG");
        $uploadFullPath = $uploadDir . "/" . $uploadFileName;

        // 파일 저장
        file_put_contents($uploadFullPath, $binaryData);

        // DB 업데이트
        // $updateSql = "UPDATE tb_fighter_base SET ranking_image_name = '$uploadFileName' WHERE fighter_seq = $fighter_seq";
        // $updateSql = "UPDATE tb_fighter_base SET rankingChamp_image_name = '$uploadFileName' WHERE fighter_seq = $fighter_seq";
        $updateSql = "UPDATE tb_fighter_base SET detail_image_name = '$uploadFileName' WHERE fighter_seq = $fighter_seq";
        sql_query($updateSql);

        echo "✔ $fighter_seq -> 저장 완료: $uploadFullPath<br>";
    }
}
?>