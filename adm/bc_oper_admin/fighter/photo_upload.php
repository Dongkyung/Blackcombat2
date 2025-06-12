<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once ('../../../common.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 파일이 업로드되었는지 확인
    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
        // 기존 파일 삭제
        // 여기에 기존 파일 삭제 로직을 추가하세요.

        $fighter_seq = $_POST['fighter_seq'];
        $photo_type = $_POST['photo_type'];



        // 이미지 바이너리 데이터를 가져오는 함수 (예시로 POST에서 바로 가져오는 것으로 가정)
        $imageBinaryData = file_get_contents($_FILES['fileToUpload']['tmp_name']);

        // photo_type에 따라 업데이트할 컬럼 설정
        $columnName = "";
        if($photo_type == "ranking"){
            $columnName = "rankingImageBin";
        }else if($photo_type == "ranking_champ"){
            $columnName = "rankingChampImageBin";
        }else{
            $columnName = "detailImageBin";
        }

        echo "save this file >> ".$imageBinaryData;
        // SQL 쿼리를 생성할 때 데이터의 유니코드 처리를 위해 mysqli_real_escape_string 함수 사용
        $escapedImageBinaryData = mysqli_real_escape_string($connect_db, $imageBinaryData);

        $sql = "UPDATE tb_fighter_base SET $columnName = '$escapedImageBinaryData' WHERE fighter_seq = $fighter_seq";

        $result = sql_query($sql);
        if ($result) {
            // 업데이트 성공한 경우
            echo json_encode(['data' => $escapedImageBinaryData]);
        } else {
            // 업데이트 실패한 경우
            echo json_encode(['success' => false, 'error' => sql_error()]);
        }



        // $targetDir = $_SERVER['DOCUMENT_ROOT'] . "/theme/blackcombat/img/fighter_new/" . $fighter_seq . "/";
        // // $targetDir = G5_DATA_PATH . $fighter_seq . "/";
        // if (!is_dir($targetDir)) {
        //     @mkdir($targetDir, G5_DIR_PERMISSION);
        //     @chmod($targetDir, G5_DIR_PERMISSION);
        // }

        // // 새로운 파일 저장
        // $originalFileName = $_FILES["fileToUpload"]["name"];
        // $imageFileType = strtolower(pathinfo($originalFileName, PATHINFO_EXTENSION));

        // // 새로운 파일명 생성
        // $newFileName = $fighter_seq . "_" . $photo_type . "." . $imageFileType;

        // $newFilePath = $targetDir . $newFileName;


        // // 디렉토리의 파일 목록 가져오기
        // $fileList = scandir('/home/blackcombat/www/www.blackcombat-official.com/theme/blackcombat/img/fighter_new/1/');

        // // "."과 ".."은 제외
        // $fileList = array_diff($fileList, array('.', '..'));

        // // 파일 목록 출력
        // echo "Files in $directory:\n";
        // foreach ($fileList as $file) {
        //     echo $file . "\n";
        // }
        // echo exec('whoami');


        // // @unlink('/home/blackcombat/www/www.blackcombat-official.com/theme/blackcombat/img/fighter_new/1/1_ranking.png');
        // // // 파일이 삭제되었는지 확인
        // // if (file_exists('/home/blackcombat/www/www.blackcombat-official.com/theme/blackcombat/img/fighter_new/1/1_ranking.png')) {
        // //     echo "파일이 삭제되지 않았습니다.\n";
        // // } else {
        // //     echo "파일이 삭제되었습니다.\n";
        // // }

        // // 파일이 존재하는지 확인하고 삭제 시도
        // if (file_exists('/home/blackcombat/www/www.blackcombat-official.com/theme/blackcombat/img/fighter_new/1/1_ranking.png')) {
        //     if (@unlink('/home/blackcombat/www/www.blackcombat-official.com/theme/blackcombat/img/fighter_new/1/1_ranking.png')) {
        //         echo "파일이 성공적으로 삭제되었습니다.\n";
        //     } else {
        //         $lastError = error_get_last();
        //         echo '파일 삭제 실패: ' . $lastError['message'];
        //         echo "파일 삭제 실패\n";
        //     }
        // } else {
        //     echo "파일이 존재하지 않습니다.\n";
        // }

        // // move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $newFilePath);

        // echo "이 경로에 저장합니다 --> ".$newFilePath."\n";
        // echo $_FILES["fileToUpload"]["error"]."\n";
        echo "File uploaded successfully.\n";
        // error_log(print_r(error_get_last(), true), 3, '/path/to/error.log');
    } else {
        echo "Error uploading file.";
    }
}
?>