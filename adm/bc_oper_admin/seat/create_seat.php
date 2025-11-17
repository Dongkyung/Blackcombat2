<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once('../../../common.php');

// POST 데이터에서 추가에 필요한 값들을 가져옴
$it_id = $_POST['it_id'];
$ct_seat_row_type = $_POST['ct_seat_row_type'];
$ct_seat_numbers = $_POST['ct_seat_number'];
$bigo = $_POST['bigo'];

// ct_seat_number를 콤마로 분할하여 배열로 변환
$ct_seat_numbers_array = explode(',', $ct_seat_numbers);

// 성공 및 실패 횟수 초기화
$success_count = 0;
$failure_count = 0;
$errors = [];

// 각 ct_seat_number에 대해 처리
foreach ($ct_seat_numbers_array as $ct_seat_number) {
    $ct_seat_number = trim($ct_seat_number); // 공백 제거

    if (empty($ct_seat_number)) {
        continue; // 빈 값인 경우 건너뛴다
    }

    // "~"를 포함하는 경우 범위 처리
    if (strpos($ct_seat_number, '~') !== false) {
        list($start, $end) = explode('~', $ct_seat_number);
        $start = (int)trim($start);
        $end = (int)trim($end);

        if ($start <= $end) {
            for ($i = $start; $i <= $end; $i++) {
                $sql = "INSERT INTO blackcombat.tb_seat_control
                        (it_id, ct_seat_row_type, ct_seat_number,bigo, fsttm)
                        VALUES('$it_id', '$ct_seat_row_type', '$i','$bigo', current_timestamp());";
                
                $result = sql_query($sql);
                if ($result) {
                    $success_count++;
                } else {
                    $failure_count++;
                    $errors[] = sql_error();
                }
            }
        }
    } else {
        // 범위가 아닌 경우
        $sql = "INSERT INTO blackcombat.tb_seat_control
                (it_id, ct_seat_row_type, ct_seat_number,bigo, fsttm)
                VALUES('$it_id', '$ct_seat_row_type', '$ct_seat_number','$bigo', current_timestamp());";
        
        $result = sql_query($sql);
        if ($result) {
            $success_count++;
        } else {
            $failure_count++;
            $errors[] = sql_error();
        }
    }
}

// 결과 반환
if ($failure_count === 0) {
    echo json_encode(['success' => true, 'inserted_count' => $success_count]);
} else {
    echo json_encode(['success' => false, 'inserted_count' => $success_count, 'failed_count' => $failure_count, 'errors' => $errors]);
}
?>