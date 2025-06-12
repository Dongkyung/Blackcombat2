<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once ('../../../common.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 파일이 업로드되었는지 확인
    if (isset($_FILES["uploadFile"]) && $_FILES["uploadFile"]["error"] == 0) {
        
        $fighter_seq = $_POST['fighter_seq'];
        $photo_type = $_POST['photo_type'];

        // 원본 파일의 확장자 추출
        $originalName = $_FILES['uploadFile']['name'];
        $ext = pathinfo($originalName, PATHINFO_EXTENSION);


        $uploadDir  = $_SERVER['DOCUMENT_ROOT'] . "/theme/blackcombat/img/fighter_new/".$fighter_seq;
        $uploadFileName = basename($fighter_seq . "_" . $photo_type . "." . $ext);
        $uploadFullPath = $uploadDir . "/" . $uploadFileName;
        

        // 디렉토리가 없는 경우 생성
        if (!is_dir($uploadDir)) {
            if (!mkdir($uploadDir, 0775, true)) {
                die("디렉토리 생성 실패! 경로: " . htmlspecialchars($uploadDir));
            }
        }

        // 파일 업로드 상태 코드 확인
        $fileError = $_FILES['uploadFile']['error'];
        if ($fileError !== UPLOAD_ERR_OK) {
            echo "파일 업로드 실패! 오류 코드: $fileError<br>";
            switch ($fileError) {
                case UPLOAD_ERR_INI_SIZE:
                    echo "업로드된 파일이 php.ini의 upload_max_filesize 디렉티브보다 큽니다.";
                    break;
                case UPLOAD_ERR_FORM_SIZE:
                    echo "업로드된 파일이 HTML 폼에서 지정한 MAX_FILE_SIZE보다 큽니다.";
                    break;
                case UPLOAD_ERR_PARTIAL:
                    echo "파일이 부분적으로만 업로드되었습니다.";
                    break;
                case UPLOAD_ERR_NO_FILE:
                    echo "파일이 업로드되지 않았습니다.";
                    break;
                case UPLOAD_ERR_NO_TMP_DIR:
                    echo "임시 폴더가 없습니다.";
                    break;
                case UPLOAD_ERR_CANT_WRITE:
                    echo "디스크에 파일을 쓸 수 없습니다.";
                    break;
                case UPLOAD_ERR_EXTENSION:
                    echo "PHP 확장에 의해 파일 업로드가 중단되었습니다.";
                    break;
                default:
                    echo "알 수 없는 오류가 발생했습니다.";
            }
            exit;
        }

        // 확장자 무관하게 기존 동일 prefix 파일 삭제
        $baseFilename = $fighter_seq . "_" . $photo_type;
        $pattern = $uploadDir . "/" . $baseFilename . ".*";  // 예: /img/fighter_new/123_photo1.*
        $existingFiles = glob($pattern);

        foreach ($existingFiles as $existingFile) {
            if (is_file($existingFile)) {
                unlink($existingFile); // 파일 삭제
            }
        }

        // 파일 업로드 처리
        if (move_uploaded_file($_FILES['uploadFile']['tmp_name'], $uploadFullPath)) {
            echo "파일이 성공적으로 업로드되었습니다: " . htmlspecialchars($uploadFullPath);

            // photo_type에 따라 업데이트할 컬럼 설정
            $columnName = "";
            if($photo_type == "ranking"){
                $columnName = "ranking_image_name";
            }else if($photo_type == "rankingChamp"){
                $columnName = "rankingChamp_image_name";
            }else{
                $columnName = "detail_image_name";
            }


            $sql = "UPDATE tb_fighter_base SET $columnName = '$uploadFileName' WHERE fighter_seq = $fighter_seq";

            $result = sql_query($sql);
            if ($result) {
                // 업데이트 성공한 경우
                echo json_encode(['column' => $columnName, 'data' => $uploadFileName]);
            } else {
                // 업데이트 실패한 경우
                echo json_encode(['success' => false, 'error' => sql_error()]);
            }


        } else {
            echo "move_uploaded_file 실패!<br>";
            if (!is_writable($uploadDir)) {
                echo "디렉토리에 쓰기 권한이 없습니다: " . htmlspecialchars($uploadDir) . "<br>";
            }
            if (!file_exists($_FILES['uploadFile']['tmp_name'])) {
                echo "임시 파일이 존재하지 않습니다: " . htmlspecialchars($_FILES['uploadFile']['tmp_name']) . "<br>";
            }
        }


    } else {
        echo "Error uploading file.";
    }
}
?>