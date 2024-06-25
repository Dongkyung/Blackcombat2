<?php
$sub_menu = "910400";
define('G5_IS_ADMIN', true);
include_once ('../../common.php');
include_once(G5_ADMIN_PATH.'/admin.lib.php');
// auth_check_menu($auth, $sub_menu, "r");

// $token = get_token();


include_once(G5_ADMIN_PATH.'/admin.head.php');
// $token = get_token();

$g5['title'] = "좌석 컨트롤";


$sql = "select seq, it_id, ct_seat_row_type, ct_seat_number,fsttm from tb_seat_control order by ct_seat_row_type, CAST(ct_seat_number AS UNSIGNED)";
$result = sql_query($sql);

?>
<style>
        table {
            border-collapse: collapse;
            width: auto;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        input[type="text"] {
            width: 100%;
        }
    </style>



<script>




// 삭제 버튼 클릭 시 호출되는 함수
function deleteRow(seq) {
    
    $.ajax({
        type: 'POST',
        url: './seat/delete_seat.php', // 실제 삭제를 처리하는 PHP 파일 경로
        data: { seq: seq},
        success: function(response) {
            // 서버에서 삭제 성공한 경우
            console.log(response); // 삭제 성공한 경우 콘솔에 출력 (디버깅용)
            location.reload();
        },
        error: function(error) {
            console.error('Error deleting data:', error);
            // 에러 처리 (실제 프로덕션에서는 사용자에게 알림 등을 보여주어야 함)
        }
    });
}



    // 입력 완료 버튼 클릭 시 호출되는 함수
    function addData() {
        // 새로 입력한 데이터를 가져와서 AJAX로 서버에 추가 요청
        var newData = {
            it_id: $('.input_it_id').val().trim(),
            ct_seat_row_type: $('.input_ct_seat_row_type').val().trim(),
            ct_seat_number: $('.input_ct_seat_number').val().trim()
        };

        if(newData.it_id === '' || newData.ct_seat_row_type === '' || newData.ct_seat_number === ''){
            alert("데이터를 입력하세요.");
            return;
        }


        $.ajax({
            type: 'POST',
            url: './seat/create_seat.php', // 실제 추가를 처리하는 PHP 파일 경로
            data: newData,
            success: function(response) {
                // 서버에서 추가 성공한 경우
                console.log(response); // 추가 성공한 경우 콘솔에 출력 (디버깅용)
                location.reload();
            },
            error: function(error) {
                console.error('Error adding data:', error);
                // 에러 처리 (실제 프로덕션에서는 사용자에게 알림 등을 보여주어야 함)
            }
        });

        
    }

    // 현재 날짜 및 시간을 가져오는 함수
    function getCurrentDateTime() {
        var currentDate = new Date();
        var year = currentDate.getFullYear();
        var month = String(currentDate.getMonth() + 1).padStart(2, '0');
        var day = String(currentDate.getDate()).padStart(2, '0');
        var hours = String(currentDate.getHours()).padStart(2, '0');
        var minutes = String(currentDate.getMinutes()).padStart(2, '0');
        var seconds = String(currentDate.getSeconds()).padStart(2, '0');
        return `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
    }

    </script>




<h2>팀 정보</h2>

<table>
    <!-- 테이블의 헤더 부분은 그대로 유지 -->
    <tr>
        <th style="width:50px">SEQ</th>
        <th style="width:50px">대회번호</th>
        <th style="width:300px">좌석구역</th>
        <th style="width:300px">좌석번호</th>
        <th style="width:300px">등록날짜</th>
        <th style="width:100px">삭제</th>
    </tr>

    <!-- 테이블 내용 부분은 그대로 유지하며, 수정 버튼 클릭 시 editRow 함수 호출 -->
    <?php
    while ($row = sql_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row["seq"] . "</td>";
        echo "<td>" . $row["it_id"] . "</td>";
        echo "<td>" . $row["ct_seat_row_type"] . "</td>";
        echo "<td>" . $row["ct_seat_number"] . "</td>";
        echo "<td>" . $row["fsttm"] . "</td>";
        echo '<td><button onclick="deleteRow(' . $row["seq"] . ')">삭제</button></td>';
        echo "</tr>";
    }
    ?>
    <tr>
        <td></td>
        <td>
            <input class="input_it_id" />
        </td>
        <td>
            <input class="input_ct_seat_row_type" />
        </td>
        <td>
            <input class="input_ct_seat_number" />
        </td>
        <td></td>
        <td><button onclick="addData()"> 등록</button></td>
    </tr>

</table>



<?php
include_once(G5_ADMIN_PATH.'/admin.tail.php');