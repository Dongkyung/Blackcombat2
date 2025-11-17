<?php
$sub_menu = "910800";
define('G5_IS_ADMIN', true);
include_once ('../../common.php');
include_once(G5_ADMIN_PATH.'/admin.lib.php');
// auth_check_menu($auth, $sub_menu, "r");

// $token = get_token();


include_once(G5_ADMIN_PATH.'/admin.head.php');
// $token = get_token();

$g5['title'] = "판매된 좌석";


$sql = "select `od_seat_row_type`, `od_seat_number` from g5_shop_order where `od_status` != '취소' and `it_id` = '1719322450'";
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


    

    $.ajax({
            url: "https://www.blackcombat-official.com/theme/blackcombat/shop/ajax.action.php",
            type: "POST",
            data: {"action":"get_purchase_seat_info_admin"},
            dataType: "json",
            async: true,
            cache: false,
            success: function(data, textStatus) {
                    let arr = [];
                
                    var disabledSeat = data.disabled_seat;

                    var seat_row_type = '';
                    var seat_number = '';
                    var seatObj = '';

                    disabledSeat.forEach(function(value, idx) {
                        seat_row_type_arr = value.od_seat_row_type.split("|");
                        seat_number_arr = value.od_seat_number.split("|");
                        if (seat_row_type_arr && seat_number_arr) {
                            seat_row_type_arr.forEach(function(seat_row_type, index){
                                let seat_number = seat_number_arr[index]

                                arr.push({
                                    seat_row_type : seat_row_type,
                                    seat_number : seat_number,
                                    od_time : value.od_time
                                })
                                // seatObj = $('.seat_row_items[data-row-type="' + seat_row_type + '"]').find('.seat_row_item[data-seat-number="' + seat_number + '"]');

                                // if (seatObj.length) {
                                    
                                //     <?php if ($is_admin) { ?>
                                //         if(seatObj.attr('data-choosable') === 'N' || seatObj.attr('data-choosable') === 'D'){
                                //             console.log("RED!")
                                //             seatObj.attr('data-choosable', 'D')
                                //         }else{
                                //             seatObj.attr('data-choosable', 'N');
                                //         }
                                //     <? }else{ ?>
                                //         seatObj.attr('data-choosable', 'N');
                                //     <? } ?>
                                    
                                    
                                // }
                            });
                        }
                    });

                    arr.sort((a, b) => a.seat_row_type.localeCompare(b.seat_row_type) || a.seat_number - b.seat_number );
                    console.log(arr);

                    for(let value of arr){
                        $('table').append(`
                            <tr>
                                <td>${value.seat_row_type}</td>
                                <td>${value.seat_number}</td>
                                <td>${value.od_time}</td>
                            </tr>
                        `)
                    }
                
                
            },
            error : function(request, status, error){
                alert("false ajax :"+request.responseText);
            }
        });

    </script>




<h2>판매좌석 정보</h2>

<table>
    <!-- 테이블의 헤더 부분은 그대로 유지 -->
    <tr>
        <th>좌석구역</th>
        <th>좌석번호</th>
        <th>구매날짜</th>
    </tr>

    <!-- 테이블 내용 부분은 그대로 유지하며, 수정 버튼 클릭 시 editRow 함수 호출 -->


</table>



<?php
include_once(G5_ADMIN_PATH.'/admin.tail.php');