<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once('../../../common.php');

// POST 데이터에서 추가에 필요한 값들을 가져옴
$currentOrder = $_POST['currentOrder'];


$currentOrder = stripslashes($currentOrder);
$orderData = json_decode($currentOrder, true);

 // SQL 쿼리 작성
 $sql = "DELETE FROM tb_home_img_mgnt";
//  쿼리 실행
 $result = sql_query($sql);

// 테이블 업데이트를 위한 루프
foreach ($orderData as $item) {
    $img_order = $item['img_order'];
    $link = $item['link'];
    $file_name = $item['file_name'];
    $file_name_mobile = $item['file_name_mobile'];

    $sql = "INSERT INTO blackcombat.tb_home_img_mgnt
        (img_type, img_order, file_name, file_name_mobile, link, lsttm)
        VALUES('PC', '$img_order', '$file_name', '$file_name_mobile', '$link', current_timestamp());";

    // 쿼리 실행
    $result = sql_query($sql);
    
    echo $sql;
}



// 추가 성공한 경우
echo json_encode(['success' => true]);

?>