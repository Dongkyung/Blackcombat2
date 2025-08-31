<?php
// DB 연결 및 설정 코드 작성 (생략)
include_once('../../../common.php');


$sql = "SELECT img_order, file_name, file_name_mobile, link
                FROM blackcombat.tb_home_img_mgnt order by CAST(img_order AS UNSIGNED);
            ";

$result = sql_query($sql);

$resultArray = array();
for($k=0; $row=sql_fetch_array($result); $k++) {
    $tmpArray = array(
        'img_order' => $row['img_order'],
        'file_name' => $row['file_name'],
        'file_name_mobile' => $row['file_name_mobile'],
        'link' => $row['link']
    );
    $resultArray[] = $tmpArray;
} // for End
die(json_encode($resultArray));

?>