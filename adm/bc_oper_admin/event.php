<?php
$sub_menu = "910700";
define('G5_IS_ADMIN', true);
include_once ('../../common.php');
include_once(G5_ADMIN_PATH.'/admin.lib.php');
include_once(G5_ADMIN_PATH.'/admin.head.php');


$eventCategory = isset($_GET['eventCategory']) ? $_GET['eventCategory'] : 'N';
$tabArr = array(
    'N' => '',
    'R' => '',
    'C' => '',
    'B' => '',
    'E' => '',
);

$tabNameArr = array(
    'N' => '넘버링',
    'R' => '라이즈',
    'C' => '챔스',
    'B' => '비긴즈',
    'E' => '기타',
);

if (array_key_exists($eventCategory, $tabArr)) {
    $tabArr[$eventCategory] = 'on';
}



$eventListSql = "SELECT
event_seq,
event_category,
`order`,
event_name,
event_name_short,
event_place,
event_date,
selling_yn,
vote_yn,
sell_url,
max_img_idx,
prologue,
lsttm
FROM
blackcombat.tb_event
WHERE 
event_category = '$eventCategory'
ORDER by `order` desc";
$eventListResult = sql_query($eventListSql);

echo "<script type='text/javascript'>";
echo "let eventList = [];";
while ($row = sql_fetch_array($eventListResult)) {
    echo "eventList.push({
        event_seq:'".$row["event_seq"]."'
        ,event_category:'".$row["event_category"]."'
        ,order:'".$row["order"]."'
        ,event_name:'".$row["event_name"]."'
        ,event_name_short:'".$row["event_name_short"]."'
        ,event_place:'".$row["event_place"]."'
        ,event_date:'".$row["event_date"]."'
        ,selling_yn:'".$row["selling_yn"]."'
        ,vote_yn:'".$row["vote_yn"]."'
        ,sell_url:'".$row["sell_url"]."'
        ,max_img_idx:'".$row["max_img_idx"]."'
        ,prologue:`".$row["prologue"]."`
        ,lsttm:'".$row["lsttm"]."'});";
}
echo "</script>";

?>

<script>

</script>
<style>
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

        input[type="text"] {
            width: 100%;
        }

        input[type="text"] {
            width: 100%;
        }

        .anchor li.on a{
            background-color: #ffba3c;
            color: #fff;
        }
        .anchor li a{
            width:100px;
            text-align:center;
        }

        .btn{
            height:40px;
        }



      
    </style>


<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>


<!-- dataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />  
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

<!-- datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.ko.min.js" integrity="sha512-L4qpL1ZotXZLLe8Oo0ZyHrj/SweV7CieswUODAAPN/tnqN3PA1P+4qPu5vIryNor6HQ5o22NujIcAZIfyVXwbQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<ul class="anchor">
    <? foreach ($tabArr as $tabTarget => $class) : ?>
        <li class="<?= $class ?>"><a href="?eventCategory=<?= urlencode($tabTarget) ?>"><?= $tabNameArr[$tabTarget] ?></a></li>
    <? endforeach; ?>
</ul>


<div>
    <div style="display:flex">
        <h1 style="font-size:1.5rem; padding:10px;"><?=$division?> 이벤트(대회)정보 관리</h1>
    </div>
                            
    <table id="myTable">
        <thead>
        <!-- 테이블의 헤더 부분은 그대로 유지 -->
        <tr>
            <th style="width:80px">SEQ</th>
            <th style="width:80px">대회종류</th>
            <th style="width:80px">순서</th>
            <th style="width:auto">대회명</th>
            <th style="width:auto">대회명(S)</th>
            <th style="width:auto">대회장소</th>
            <th style="width:auto">대회날짜</th>
            <th style="width:80px">판매유무</th>
            <th style="width:80px">승자예측</th>
            <th style="width:60px">판매링크</th>
            <th style="width:150px">이미지Max번호</th>
            <th style="width:150px">최종수정일</th>
            <th style="width:150px">수정버튼</th>
            <th style="width:150px">삭제버튼</th>
        </tr>
        </thead>
        <!-- 테이블 내용 부분은 그대로 유지하며, 수정 버튼 클릭 시 editRow 함수 호출 -->
        <tbody>
    <?
        mysqli_data_seek($eventListResult, 0);
        while ($row = sql_fetch_array($eventListResult)) {
    ?>
        <tr>
            <td><?= $row["event_seq"] ?></td>
            <td><?= $row["event_category"] ?></td>
            <td><?= $row["order"] ?></td>
            <td><?= $row["event_name"] ?></td>
            <td><?= $row["event_name_short"] ?></td>
            <td><?= $row["event_place"] ?></td>
            <td><?= $row["event_date"] ?></td>
            <td><?= $row["selling_yn"] ?></td>
            <td><?= $row["vote_yn"] ?></td>
            <td><?= $row["sell_url"] ?></td>
            <td><?= $row["max_img_idx"] ?></td>
            <td><?= $row["lsttm"] ?></td>
            <td><button type="button" class="btn btn-sm btn-success" onclick="showUpdateModal('<?= $row['event_seq'] ?>')">수정</button>
            <td><button type="button" class="btn btn-sm btn-danger">삭제</button></td>
        </tr>
    <? 
        }
    ?>
    </tbody>
    </table>
    <button type="button" class="btn btn-primary" onclick="showCreateModal()">
        이벤트 등록
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog"  style="max-width:1200px" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="col" style="width:60px">SEQ</th>
                            <th scope="col" style="width:100px">대회종류</th>
                            <th scope="col" style="width:50px">순서</th>
                            <th scope="col" style="width:200px">대회장소</th>
                            <th scope="col" style="width:100px">대회날짜</th>
                            <th scope="col" style="width:80px">판매유무</th>
                            <th scope="col" style="width:80px">승자예측유무</th>
                            <th scope="col" style="width:100px">이미지Max번호</th>
                        </tr>
                        <tr>
                            <td class="pop_event_seq"></td>
                            <td class="pop_event_category">
                                <select class="form-select form-select-sm">
                                    <option value="" selected>대회종류</option>
                                    <option value="N">넘버링</option>
                                    <option value="R">라이즈</option>
                                    <option value="C">챔스</option>
                                    <option value="B">비긴즈</option>
                                    <option value="E">기타</option>
                                </select>
                            </td>
                            <td class="pop_order"><input class="form-control" /></td>
                            <td class="pop_event_place"><input class="form-control" /></td>
                            <td class="pop_event_date">
                                <input type="text" id="datePicker" class="form-control" style="font-size:0.8rem">
                            </td>
                            <td class="pop_selling_yn">
                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradio_selling" id="btnradio_selling1" date="0" autocomplete="off" checked>
                                    <label class="btn btn-outline-danger" for="btnradio_selling1">Off</label>

                                    <input type="radio" class="btn-check" name="btnradio_selling" id="btnradio_selling2" date="1" autocomplete="off">
                                    <label class="btn btn-outline-success" for="btnradio_selling2">On</label>
                                </div>
                            </td>
                            <td class="pop_vote_yn">
                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradio_vote" id="btnradio_vote1" date="0" autocomplete="off" checked>
                                    <label class="btn btn-outline-danger" for="btnradio_vote1">Off</label>

                                    <input type="radio" class="btn-check" name="btnradio_vote" id="btnradio_vote2" date="1" autocomplete="off">
                                    <label class="btn btn-outline-success" for="btnradio_vote2">On</label>
                                </div>
                            </td>
                            
                            <td class="pop_max_img_idx">
                                <select class="form-select form-select-sm">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="col">대회명</th>
                            <td class="pop_event_name" colspan="3"><input class="form-control" /></td>
                            <th scope="col">대회명(S)</th>
                            <td class="pop_event_name_short" colspan="3"><input class="form-control" /></td>
                        </tr>
                        <tr>
                            <th>판매링크</th>
                            <td class="pop_sell_url" colspan="6"><input class="form-control" placeholder="판매유무 OFF인 경우 빈값" /></td>
                        </tr>
                    </tbody>
                </table>
                <div><b>프롤로그</b></div>
                <div>
                    <textarea class="form-control pop_prologue"rows="15"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="modal-cancel" class="btn btn-secondary" data-bs-dismiss="modal">취소</button>
                <button type="button" id="modal-submit" class="btn btn-primary">동적입력</button>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">

    $(function() {	
		$('#datePicker').datepicker({
		    format: "yyyy-mm-dd",	//데이터 포맷 형식(yyyy : 년 mm : 월 dd : 일 )
		    autoclose : true,	//사용자가 날짜를 클릭하면 자동 캘린더가 닫히는 옵션
		    calendarWeeks : false, //캘린더 옆에 몇 주차인지 보여주는 옵션 기본값 false 보여주려면 true
		    clearBtn : false, //날짜 선택한 값 초기화 해주는 버튼 보여주는 옵션 기본값 false 보여주려면 true
		    datesDisabled : [],//선택 불가능한 일 설정 하는 배열 위에 있는 format 과 형식이 같아야함.
		    daysOfWeekDisabled : [],	//선택 불가능한 요일 설정 0 : 일요일 ~ 6 : 토요일
		    daysOfWeekHighlighted : [], //강조 되어야 하는 요일 설정
		    disableTouchKeyboard : false,	//모바일에서 플러그인 작동 여부 기본값 false 가 작동 true가 작동 안함.
		    immediateUpdates: false,	//사용자가 보는 화면으로 바로바로 날짜를 변경할지 여부 기본값 :false 
		    multidate : false, //여러 날짜 선택할 수 있게 하는 옵션 기본값 :false 
		    showWeekDays : true ,// 위에 요일 보여주는 옵션 기본값 : true
		    title: "경기날짜",	//캘린더 상단에 보여주는 타이틀
		    todayHighlight : true ,	//오늘 날짜에 하이라이팅 기능 기본값 :false 
		    toggleActive : true,	//이미 선택된 날짜 선택하면 기본값 : false인경우 그대로 유지 true인 경우 날짜 삭제
		    weekStart : 0 ,//달력 시작 요일 선택하는 것 기본값은 0인 일요일 
		    language : "ko"	//달력의 언어 선택, 그에 맞는 js로 교체해줘야한다.
		});//datepicker end
	});//ready end

    function createEvent(){
        if(confirm("이벤트 정보를 생성 하시겠습니까?")){
            // const changed_pop_event_seq = $(".pop_event_seq input").val();
            const changed_pop_event_category = $(".pop_event_category select").val();
            const changed_pop_order = $(".pop_order input").val();
            const changed_pop_event_name = $(".pop_event_name input").val();
            const changed_pop_event_name_short = $(".pop_event_name_short input").val();
            const changed_pop_event_place = $(".pop_event_place input").val();
            const changed_pop_event_date = $(".pop_event_date input").val();
            const changed_pop_selling_yn = $(".pop_selling_yn .btn-check:checked").attr("date");
            const changed_pop_vote_yn = $(".pop_vote_yn .btn-check:checked").attr("date");
            const changed_pop_max_img_idx = $(".pop_max_img_idx select").val();
            const changed_pop_sell_url = $(".pop_sell_url input").val();
            const changed_pop_prologue = $(".pop_prologue").val()
            
            if(changed_pop_event_category === ''){
                alert("대회 종류를 선택하세요");
                return;
            }
            $.ajax({
                type: 'POST',
                url: './event/create_event.php', // 실제 추가를 처리하는 PHP 파일 경로
                data: {
                    "event_category" : changed_pop_event_category,
                    "order" : changed_pop_order,
                    "event_name" : changed_pop_event_name,
                    "event_name_short" : changed_pop_event_name_short,
                    "event_place" : changed_pop_event_place,
                    "event_date" : changed_pop_event_date,
                    "selling_yn" : changed_pop_selling_yn,
                    "vote_yn" : changed_pop_vote_yn,
                    "max_img_idx" : changed_pop_max_img_idx,
                    "sell_url" : changed_pop_sell_url,
                    "prologue" : changed_pop_prologue,
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
    }

    function updateEvent(){
        if(confirm("이벤트 정보를 수정 하시겠습니까?")){
            const origin_event_seq = $(".pop_event_seq").text();
            const changed_pop_event_category = $(".pop_event_category select").val();
            const changed_pop_order = $(".pop_order input").val();
            const changed_pop_event_name = $(".pop_event_name input").val();
            const changed_pop_event_name_short = $(".pop_event_name_short input").val();
            const changed_pop_event_place = $(".pop_event_place input").val();
            const changed_pop_event_date = $(".pop_event_date input").val();
            const changed_pop_selling_yn = $(".pop_selling_yn .btn-check:checked").attr("date");
            const changed_pop_vote_yn = $(".pop_vote_yn .btn-check:checked").attr("date");
            const changed_pop_max_img_idx = $(".pop_max_img_idx select").val();
            const changed_pop_sell_url = $(".pop_sell_url input").val();
            const changed_pop_prologue = $(".pop_prologue").val()
            
            $.ajax({
                type: 'POST',
                url: './event/update_event.php', // 실제 추가를 처리하는 PHP 파일 경로
                data: {
                    "event_seq" : origin_event_seq,
                    "event_category" : changed_pop_event_category,
                    "order" : changed_pop_order,
                    "event_name" : changed_pop_event_name,
                    "event_name_short" : changed_pop_event_name_short,
                    "event_place" : changed_pop_event_place,
                    "event_date" : changed_pop_event_date,
                    "selling_yn" : changed_pop_selling_yn,
                    "vote_yn" : changed_pop_vote_yn,
                    "max_img_idx" : changed_pop_max_img_idx,
                    "sell_url" : changed_pop_sell_url,
                    "prologue" : changed_pop_prologue,
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
    }


    function showCreateModal() {
        $("#modal-submit").off("click");
        $(".pop_event_seq").text("");
        $(".pop_event_category select").val("");
        $(".pop_order input").val("");
        $(".pop_event_name input").val("");
        $(".pop_event_name_short input").val("");
        $(".pop_event_place input").val("");
        $(".pop_event_date input").val("");
        $(".pop_selling_yn .btn-check[date=0]").prop("checked", true)
        $(".pop_vote_yn .btn-check[date=0]").prop("checked", true)
        $(".pop_max_img_idx select").val(0);
        $(".pop_sell_url input").val("");
        $(".pop_prologue").val("");

        $("#modal-submit").text("등록");
        $("#modal-submit").on("click", () => {
            createEvent();
        })

        $("#exampleModal").modal('show'); 
    }

    function showUpdateModal(eventSeq) {
        $("#modal-submit").off("click");
        const targetEvent = eventList.filter(item => item.event_seq === eventSeq)[0];
        $(".pop_event_seq").text(targetEvent.event_seq);
        $(".pop_event_category select").val(targetEvent.event_category);
        $(".pop_order input").val(targetEvent.order);
        $(".pop_event_name input").val(targetEvent.event_name);
        $(".pop_event_name_short input").val(targetEvent.event_name_short);
        $(".pop_event_place input").val(targetEvent.event_place);
        var date = new Date(targetEvent.event_date);
        $("#datePicker").datepicker("setDate", date);
        $(`.pop_selling_yn .btn-check[date=${targetEvent.selling_yn}]`).prop("checked", true)
        $(`.pop_vote_yn .btn-check[date=${targetEvent.vote_yn}]`).prop("checked", true)
        $(".pop_max_img_idx select").val(targetEvent.max_img_idx);
        $(".pop_sell_url input").val(targetEvent.sell_url);
        $(".pop_prologue").val(targetEvent.prologue);

        $("#modal-submit").text("수정");
        $("#modal-submit").on("click", () => {
            updateEvent();
        })

        $("#exampleModal").modal('show'); 

    }

</script>

<?php
include_once(G5_ADMIN_PATH.'/admin.tail.php');
?>
