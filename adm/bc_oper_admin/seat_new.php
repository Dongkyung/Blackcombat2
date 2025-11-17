<?php
$sub_menu = "910401";
define('G5_IS_ADMIN', true);
include_once ('../../common.php');
include_once(G5_ADMIN_PATH.'/admin.lib.php');
// auth_check_menu($auth, $sub_menu, "r");

// $token = get_token();


include_once(G5_ADMIN_PATH.'/admin.head.php');
// $token = get_token();

$g5['title'] = "좌석 컨트롤";


$sql = "select seq, it_id, ct_seat_row_type, ct_seat_number,bigo, fsttm from tb_seat_control order by ct_seat_row_type, CAST(ct_seat_number AS UNSIGNED)";
$result = sql_query($sql);

$it_id = !empty($_GET['it_id']) ? $_GET['it_id'] : '1744036257';

$itId_file_map = array(
    '1704478746' => "n10",
    '1719322450' => "n11",
    '1722696532' => "n11test",
    '1723217030' => "n12",
    '1733239478' => "n13",
    '1744036257' => "n14"
);

?>
<style>

    /* 부트스트랩 CSS 예외처리*/
    .row {
        --bs-gutter-x: unset !important;
        --bs-gutter-y: unset !important;
        
        flex-wrap: unset !important;
        margin-top: unset !important;
        margin-right: unset !important;
        margin-left: unset !important;
    }
    .row>* {
        flex-shrink: unset !important;
        /* width: unset !important; */
        max-width: unset !important;
        padding-right: unset !important;
        padding-left: unset !important;
        margin-top: unset !importantZ;
    }

    #myTable {
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    th {
        background-color: #f2f2f2;
    }


    .purchasedInfo table {
        border-collapse: collapse;
        width: auto;
    }
    .purchasedInfo th, .purchasedInfo td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    .purchasedInfo th {
        background-color: #f2f2f2;
        width:100px;
    }

    .purchasedInfo td {
        width:300px;
    }


    .tableContent{
        margin-top:50px;
        display:flex;
        gap:10px;
    }
    .tableContent .purchasedList{
        flex: 1 1 auto;
    }
    .tableContent .purchasedInfo{
        margin-top:50px;
        flex: 1 1 auto;
    }

    .get_item_options {position:absolute; top:-9999px; left:-9999px;}
    #sit_siblings {display:none;}
    #sit_tab {width:100%;}
    #sit_buy {display:none;}
    .sit_side_option {display:none;}
    .sit_sel_option {display:none;}
    .seat_choice_popup {display:block; position:fixed; top:0; left:0; width:100%; height:100%; margin:0; padding:0; box-sizing:border-box; z-index:9999;}
    .seat_choice_popup_wrap {position:relative; display:flex; flex-direction:column; align-items:flex-start; justify-content:flex-start; width:100%; height:100%; margin:0 auto; padding:0; background:#fff; overflow-y:scroll; z-index:99;}
    .seat_choice_popup_header {flex:0 0 auto; display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; height:auto; margin:0; padding:20px 0;}
    .seat_choice_popup_header_title {font-size:30px; font-weight:400; line-height:100%; color:#000;}
    .seat_choice_popup_body {flex:0 0 auto; display:flex; flex-direction:column; align-items:flex-start; justify-content:flex-start; width:auto; height:calc(100% - 160px); margin:0 auto; padding:10px 0; overflow-x:scroll;}
    .seat_choice_popup_footer {flex:0 0 auto; display:flex; flex-direction:row; flex-wrap:nowrap; align-items:center; justify-content:center; width:100%; height:auto; margin:0; padding:20px 0; column-gap:20px;}
    .seat_choice_popup_close_btn {flex:0 0 auto; display:block; width:186px; height:50px; margin:0; padding:15px 20px; font-size:1.25em; font-weight:bold; color:#000; text-align:center; border:1px solid #98a3b3; border-radius:3px; background:#fff; box-sizing:border-box; box-shadow:unset;}
    .seat_choice_btn {flex:0 0 auto; display:block; width:186px; height:50px; margin:0; padding:15px 20px; font-size:1.25em; font-weight:bold; color:#fff; text-align:center; border:1px solid #1c70e9; border-radius:3px; background:#3a8afd; box-sizing:border-box; box-shadow:unset;}
    .seat_choice_btn[disabled] {color:rgba(16,16,16,0.3); border:1px solid #98a3b3; background:rgba(239,239,239,1); cursor:default;}

    .movieLayoutContainer {position:relative; display:block; min-width:2000px; min-height:1000px; margin:0; padding:0;}
    .cage_img_1 {position:absolute; top:255px; left:550px; display:block; width:auto; max-width:430px; height:auto; margin:0; padding:0; z-index:11;}
    .cage_img_2 {position:absolute; top:441px; right:1px; display:block; width:auto; max-width:460px; height:auto; margin:0; padding:0; z-index:11;}
    .cage_img_3 {position:absolute; top:280px; left:500px; display:block; width:350px; height:auto; margin:0; padding:0; z-index:0;}
    .seat_rows {display:flex; flex-direction:column; align-items:center; justify-content:flex-start; width:auto; height:auto; margin:0; padding:0; background:#fff; z-index:10;}
    .seat_row_items {display:flex; flex-direction:column; align-items:flex-start; justify-content:flex-start; width:auto; height:auto; margin:0; padding:0; row-gap:2px;}
    .seat_row_items.horizon {flex-direction:row; flex-wrap:nowrap; row-gap:0; column-gap:2px;}
    .seat_row_item {flex:0 0 auto; display:flex; flex-direction:column; align-items:center; justify-content:center; width:16px !important; height:16px; margin:0 1px; padding:2px 2px; border:1px solid transparent; border-radius:2px; cursor:pointer; vertical-align:-webkit-baseline-middle; background:#fff;}
    .seat_row_item span {flex:0 0 auto; display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; height:100%; margin:0; padding:0; border-radius:2px; background:#fff;}

    .seat_row_item[data-choosable="Y"] {border-color:#8a8a8a;}
    .seat_row_item[data-choosable="N"] {border-color:#8a8a8a; background-color:#fafafa; cursor:default;}
    .seat_row_item[data-choosable="B"] {border-color:#8a8a8a; background-color:#fafafa; cursor:default;}

    .seat_row_item[data-choosable="Y"] span {background:#fff;}
    .seat_row_item[data-choosable="N"] span {background:#8a8a8a;}
    .seat_row_item[data-choosable="D"] span {background:red;}
    .seat_row_item[data-choosable="B"] span {background:#EEC476;}
    /* .seat_row_item[data-choosable="N"] span {background:#F9CA34;} */

    .seat_row_item[data-choosable="Y"]:hover span {background:#FAFC57;}
    .seat_row_item[data-selected="Y"] {border : 3px solid red !important;}

    .seat_rows_groups {position:absolute; display:flex; flex-direction:row; flex-wrap:nowrap; align-items:center; justify-content:flex-start; width:auto; height:auto; margin:0; padding:0;}
    .seat_rows_groups.vertical {flex-direction:column; flex-wrap:unset;}
    .seat_rows_group {flex:0 0 auto; position:relative; display:flex; flex-direction:row; flex-wrap:nowrap; align-items:center; justify-content:flex-start; width:auto; height:auto; margin:0; padding:0;}
    .seat_rows_groups.vertical .seat_rows_group {flex-direction:column; flex-wrap:unset; row-gap:5px;}
    .seat_rows_group .seat_rows {position:relative;}

    .seat_choice_popup_bg {position:absolute; top:0; left:0; width:100%; height:100%; margin:0; padding:0; background:rgba(0,0,0,0.5); box-sizing:border-box; z-index:98;}

    .seat_row_items[data-row-type="VIP(1)"] .seat_row_item, .seat_row_items[data-row-type="VIP(2)"] .seat_row_item {border-color: #ff7f00;}
    .seat_row_items[data-row-type="VVIP"] .seat_row_item {border-color: #8b00ff;}

    .seat_row_items[data-row-type="nomal"]{width:100%}
    .seat_row_items[data-row-type="nomal"] .seat_row_item[data-choosable="N"] span {background:#8a8a8a;}

</style>

<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- dataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />  
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>


<script>
    // 좌석 오픈
    function openSeat(seat_row_type, seat_number) {
        
        $.ajax({
            type: 'POST',
            url: './seat/open_seat.php', // 실제 삭제를 처리하는 PHP 파일 경로
            data: { it_id: '<?=$it_id?>'
                ,seat_row_type: seat_row_type
                ,seat_number: seat_number
            },
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
    function closeSeat(seat_row_type, seat_number) {
    
        $.ajax({
            type: 'POST',
            url: './seat/close_seat.php', // 실제 추가를 처리하는 PHP 파일 경로
            data: { it_id: '<?=$it_id?>'
                ,seat_row_type: seat_row_type
                ,seat_number: seat_number
            },
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



<div class="game_select_div">
    <select onchange="location.href='/adm/bc_oper_admin/seat_new.php?it_id='+value">
        <option value="1704478746" <? if($it_id === '1704478746') {echo "selected"; } ?>>Black Combat 10: 서울의 밤</option>
        <option value="1719322450" <? if($it_id === '1719322450') {echo "selected"; } ?>>Black Combat 11: 부산상륙작전</option>
        <option value="1722696532" <? if($it_id === '1722696532') {echo "selected"; } ?>>Black Combat 11: 부산상륙작전_TEST</option>
        <option value="1723217030" <? if($it_id === '1723217030') {echo "selected"; } ?>>Black Combat 12: THE RETURN OF THE KINGS</option>
        <option value="1733239478" <? if($it_id === '1733239478') {echo "selected"; } ?>>Black Combat 13: 정상결전</option>
        <option value="1744036257" <? if($it_id === '1744036257') {echo "selected"; } ?>>Black Combat 14: END GAME</option>

    </select>
</div>


<? include_once(G5_THEME_PATH.'/shop/seatChoiceVersion/'.$itId_file_map[$it_id].'/seatChoice_'.$itId_file_map[$it_id].'.php'); ?>

<div class="tableContent" style="margin-top:50px;">
    <div class="purchasedList">
        <table id="myTable" class="hover">
            <thead>
                <tr>
                    <th>no</th>
                    <th>좌석</th>
                    <th>번호</th>
                    <th>이름</th>
                    <th>연락처_hp</th>
                    <th>연락처_tel</th>
                    <!-- <th>결제금액</th> -->
                    <th>구매날짜</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            <!-- 테이블 내용 부분은 그대로 유지하며, 수정 버튼 클릭 시 editRow 함수 호출 -->
        </table>
    </div>
    <div class="purchasedInfo" style="border-collapse: collapse;">
        <table>
            <tr>
                <th colspan=2 style="text-align : center;"><span style="font-size:1.5rem; font-weight:bold;">주문상세정보</span></th>
            </tr>
            <tr>
                <th>이름</th>
                <td class="purchasedInfo_name"></td>
            </tr>
            <tr>
                <th>연락처</th>
                <td class="purchasedInfo_contact"></td>
            </tr>
            <tr>
                <th>구매날짜</th>
                <td class="purchasedInfo_date"></td>
            </tr>
            <tr>
                <th>결제방식</th>
                <td class="purchasedInfo_case"></td>
            </tr>
            <tr>
                <th>구매좌석</th>
                <td class="purchasedInfo_seatinfo"></td>
            </tr>
            <tr>
                <th>결제금액</th>
                <td class="purchasedInfo_price"></td>
            </tr>
            <tr>
                <th>IP</th>
                <td class="purchasedInfo_ip"></td>
            </tr>
            <tr>
                <th class="purchasedInfo_orderpage" colspan=2 style="text-align : center;"><a href="">[상세보기]</a></th>
            </tr>
        </table>
    </div>
    
</div>

<script>

    let table = new DataTable('#myTable', {
        pageLength: 25,
    });

    var ajax_url = "https://www.blackcombat-official.com/theme/blackcombat/shop";

    $(document).on('click', '.seat_row_item', function(e) {
        e.preventDefault();

        var obj = $(this);
        var selected = obj.attr('data-selected');
        var choosable = obj.attr('data-choosable');
        let titleInfo;
        if(obj.attr('title')){
            titleInfo = obj.attr('title').split(" ");
        }else{
            alert("좌석 정보가 없는 자리입니다.");
            return;
        }

        if (selected !== 'Y') {
            $('.seat_row_item').attr('data-selected', 'N');

            obj.attr('data-selected', 'Y');
            
            // $(".seat_choice_btn").text(obj.attr("title")+" 선택")
            // $('.seat_choice_btn').prop('disabled', false);
        }

        console.log(choosable);
        function handleAfterCssApplied() {
            if (choosable === 'Y') { //빈좌석 : 흰색 -> Block 여부 묻기
                if(confirm("해당좌석을 닫으시겠습니까?")){
                    closeSeat(titleInfo[0],titleInfo[1]);
                }
            }else if(choosable === 'B'){ //막은좌석 : 노란색 -> Block 여부 묻기
                if(confirm("해당좌석을 여시겠습니까?")){
                    openSeat(titleInfo[0],titleInfo[1]);
                }
            }else if(choosable === 'N'){ //구매된좌석 : 회색 -> Order Info Detail 조회
                drawOrderInfoTable(obj.attr('od_id'));
                // $("input[aria-controls='myTable']").val(obj.attr('od_id'));
                table.search(obj.attr('od_id')).draw();
            }
        }

        // requestAnimationFrame을 사용하여 CSS 적용 후 함수를 실행
        requestAnimationFrame(function() {
            requestAnimationFrame(handleAfterCssApplied);
        });
        

        // drawOrderInfoTable()

    });

    var purchasedSeat = [];
    $.ajax({
        url: ajax_url + "/ajax.action.php",
        type: "POST",
        data: {"action":"get_blocked_seat", "it_id":"<?=$it_id?>"},
        dataType: "json",
        async: true,
        cache: false,
        success: function(data, textStatus) {
            if (data.disabled_seat) {
                const blockedSeat = data.disabled_seat;

                var ct_seat_row_type = '';
                var ct_seat_number = '';
                var seatObj = '';

                blockedSeat.forEach(function(value, idx) {
                    ct_seat_row_type = value.ct_seat_row_type;
                    ct_seat_number = value.ct_seat_number;
                    if (ct_seat_row_type && ct_seat_row_type) {
                        seatObj = $('.seat_row_items[data-row-type="' + ct_seat_row_type + '"]').find('.seat_row_item[data-seat-number="' + ct_seat_number + '"]');

                        if (seatObj.length) {
                            // if(seatObj.attr('data-choosable') === 'N' || seatObj.attr('data-choosable') === 'D'){
                            //     console.log("RED!")
                            //     seatObj.attr('data-choosable', 'D')
                            // }else{
                                seatObj.attr('data-choosable', 'B');
                            // }
                        }
                    }
                });
            }

            $.ajax({
                url: ajax_url + "/ajax.action.php",
                type: "POST",
                data: {"action":"get_purchase_seat_info_admin", "it_id":"<?=$it_id?>"},
                dataType: "json",
                async: true,
                cache: false,
                success: function(data, textStatus) {
                    if (data.disabled_seat) {
                        purchasedSeat = data.disabled_seat;

                        var seat_row_type = '';
                        var seat_number = '';
                        var seatObj = '';

                        let rowNodes = [];
                        purchasedSeat.forEach(function(value, idx) {
                            seat_row_type_arr = value.od_seat_row_type.split("|");
                            seat_number_arr = value.od_seat_number.split("|");

                            if (seat_row_type_arr && seat_number_arr) {
                                seat_row_type_arr.forEach(function(seat_row_type, index){
                                    let seat_number = seat_number_arr[index]
                                    seatObj = $('.seat_row_items[data-row-type="' + seat_row_type + '"]').find('.seat_row_item[data-seat-number="' + seat_number + '"]');

                                    if (seatObj.length) {

                                        if(seatObj.attr('data-choosable') === 'N' || seatObj.attr('data-choosable') === 'D'){
                                            console.log("RED!")
                                            seatObj.attr('data-choosable', 'D')
                                        }else{
                                            seatObj.attr('data-choosable', 'N');
                                        }
                                        seatObj.attr('od_id', value.od_id);                    
                                    }
                                    let rowNode = table.row.add([
                                            value.od_id,
                                            seat_row_type,
                                            seat_number,
                                            value.od_name,
                                            value.od_hp,
                                            value.od_tel,
                                            // value.od_receipt_price,
                                            value.od_time
                                    ]).node();

                                    rowNodes.push({
                                        node: rowNode,
                                        data: {
                                            od_id: value.od_id,
                                            seat_row_type: seat_row_type,
                                            seat_number : seat_number
                                        }
                                    });
                                    // console.log(value.od_hp, value.od_id, value.od_name, seat_row_type, seat_number,value.od_tel,value.od_time )
                                });
                            }
                        });
                        table.draw();
                        rowNodes.forEach(function(row) {
                            $(row.node).on('click', function() {
                                drawOrderInfoTable(row.data.od_id);
                                let $seat = $(".seat_row_item[title='" + row.data.seat_row_type +" " + row.data.seat_number + "']");
                                // $seat.trigger('click');
                                // table.search('').draw();
                                $('.seat_row_item').attr('data-selected', 'N');
                                $seat.attr('data-selected', 'Y');
                                drawOrderInfoTable($seat.attr('od_id'));


                            });
                        });
                    }
                },
                error : function(request, status, error){
                    alert("false ajax :"+request.responseText);
                }
            });
        },
        error : function(request, status, error){
            alert("false ajax :"+request.responseText);
        }
    });


    function drawOrderInfoTable(od_id){
        $.ajax({
            url: ajax_url + "/ajax.action.php",
            type: "POST",
            data: {"action":"get_purchase_seat_order_search_admin", "od_id":od_id},
            dataType: "json",
            async: true,
            cache: false,
            success: function(data, textStatus) {

                // '|'를 기준으로 문자열을 분할하여 배열로 만듭니다.
                let rowTypes = data.od_seat_row_type.split("|");
                let seatNumbers = data.od_seat_number.split("|");

                // 각각의 배열을 조합하여 새로운 문자열을 생성합니다.
                let seatStr = "";
                for (let i = 0; i < rowTypes.length; i++) {
                    // 조합된 문자열을 생성합니다.
                    seatStr += rowTypes[i] + " " + seatNumbers[i];
                    // 마지막 요소가 아닐 경우에는 구분자를 추가합니다.
                    if (i < rowTypes.length - 1) {
                        seatStr += " / ";
                    }
                }
                
                $(".purchasedInfo_name").text(data.od_name);
                $(".purchasedInfo_contact").html("HP :  " + data.od_hp+"<br>TEL : "+ data.od_tel);
                $(".purchasedInfo_date").text(data.od_time);
                $(".purchasedInfo_case").text(data.od_settle_case+ "-"+data.od_bank_account);
                $(".purchasedInfo_seatinfo").text(seatStr);
                $(".purchasedInfo_price").text(data.od_receipt_price);
                $(".purchasedInfo_ip").text(data.od_ip);
                $(".purchasedInfo_orderpage").find("a").attr("href", "https://www.blackcombat-official.com/adm/shop_admin/orderform.php?od_id="+data.od_id)
            },
            error : function(request, status, error){
                alert("false ajax :"+request.responseText);
            }
        });
    }
</script>


<?php
include_once(G5_ADMIN_PATH.'/admin.tail.php');