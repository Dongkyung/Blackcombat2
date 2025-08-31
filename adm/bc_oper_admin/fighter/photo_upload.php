<?php
// 25.06.12 이제 선수이미지 저장로직은 DB blob 저장방식 안씀

// // DB 연결 및 설정 코드 작성 (생략)
// include_once ('../../../common.php');

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // 파일이 업로드되었는지 확인
//     if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
//         // 기존 파일 삭제
//         // 여기에 기존 파일 삭제 로직을 추가하세요.

//         $fighter_seq = $_POST['fighter_seq'];
//         $photo_type = $_POST['photo_type'];



//         // 이미지 바이너리 데이터를 가져오는 함수 (예시로 POST에서 바로 가져오는 것으로 가정)
//         $imageBinaryData = file_get_contents($_FILES['fileToUpload']['tmp_name']);

//         // photo_type에 따라 업데이트할 컬럼 설정
//         $columnName = "";
//         if($photo_type == "ranking"){
//             $columnName = "rankingImageBin";
//         }else if($photo_type == "ranking_champ"){
//             $columnName = "rankingChampImageBin";
//         }else{
//             $columnName = "detailImageBin";
//         }

//         echo "save this file >> ".$imageBinaryData;
//         // SQL 쿼리를 생성할 때 데이터의 유니코드 처리를 위해 mysqli_real_escape_string 함수 사용
//         $escapedImageBinaryData = mysqli_real_escape_string($connect_db, $imageBinaryData);

//         $sql = "UPDATE tb_fighter_base SET $columnName = '$escapedImageBinaryData' WHERE fighter_seq = $fighter_seq";

//         $result = sql_query($sql);
//         if ($result) {
//             // 업데이트 성공한 경우
//             echo json_encode(['data' => $escapedImageBinaryData]);
//         } else {
//             // 업데이트 실패한 경우
//             echo json_encode(['success' => false, 'error' => sql_error()]);
//         }

//         echo "File uploaded successfully.\n";
//         // error_log(print_r(error_get_last(), true), 3, '/path/to/error.log');
//     } else {
//         echo "Error uploading file.";
//     }
// }
?>