<?php
$sub_menu = "910904";
define('G5_IS_ADMIN', true);
include_once ('../../common.php');
include_once(G5_ADMIN_PATH.'/admin.lib.php');

include_once(G5_ADMIN_PATH.'/admin.head.php');

function age($birthday) {
    if($birthday == null){
        return -1;
    }
    $today       = date('Ymd');
    $birthday = date('Ymd' , strtotime($birthday));
    $age     = floor(($today - $birthday) / 10000);
    return $age;
}

$g5['title'] = "계약 관리";

$fighterType = isset($_GET['fighterType']) ? $_GET['fighterType'] : '프로'; // 현재 URL에서 division 값 취득
$fighterTypeItems = array(
    '프로' => '',
    '세미프로' => '',
);

$fighterTypeNum;
if($fighterType == "프로"){
    $fighterTypeNum = 1;
}else if($fighterType == "세미프로"){
    $fighterTypeNum = 2;
}

// 현재 division에 해당하는 메뉴에 "on" 클래스 추가
if (array_key_exists($fighterType, $fighterTypeItems)) {
    $fighterTypeItems[$fighterType] = 'on';
}


$fighterListSql = "SELECT fighter_seq, CONCAT(fighter_name,' (',fighter_ringname,')') as fighter_name from tb_fighter_base where del_yn=0 AND fighter_type=1";
$fighterListResult = sql_query($fighterListSql);
echo "<script type='text/javascript'>";
echo "let fighterList = [];";
while ($row = sql_fetch_array($fighterListResult)) {
    echo "fighterList.push({fighter_name:'".$row["fighter_name"]."',fighter_seq:".$row["fighter_seq"]."});";
}
echo "</script>";


$allPlayer = isset($_GET['allPlayer']) ? $_GET['allPlayer'] : 'N';
$allPlayerWhere = $allPlayer == 'Y' ? "" : " AND tc.contract_yn = 1";
$allPlayerChecked = $allPlayer == 'Y' ? "checked" : "";

$sql = "SELECT 
	fb.fighter_seq
	, fb.country
	, fb.fighter_name
	, fb.fighter_ringname
	, fb.birth
    , fb.detail_image_name
	, fb.tel
	, fb.lsttm
	, tb.team_name
    , GROUP_CONCAT(DISTINCT ranking.division ORDER BY ranking.division SEPARATOR ' | ') AS division
	, tc.contract_yn 
    , DATE_FORMAT(tc.start_date , '%Y-%m-%d') AS start_date
    , DATE_FORMAT(tc.end_date , '%Y-%m-%d') AS end_date
	, tc.contract_match_number 
	, tc.correction_val
	, CASE WHEN tc.contract_yn = 1 THEN (
		SELECT
	    count(event.event_seq)
	    from tb_fight_history his
	        LEFT JOIN tb_fighter_base base1
	        on his.player1 = base1.fighter_seq 
	        LEFT JOIN tb_fighter_base base2
	        on his.player2 = base2.fighter_seq
	        left join tb_event event
	        on event.event_seq = his.event_seq
	    WHERE (his.player1 = fb.fighter_seq OR his.player2 = fb.fighter_seq)
		    AND his.play_date BETWEEN tc.start_date AND tc.end_date
		) ELSE null END
		as match_cnt
	, CASE WHEN tc.contract_yn = 1 THEN (
		SELECT 
            count(reject.reject_seq)
	        FROM tb_offer_reject reject left join tb_fighter_base base on reject.opponent_seq = base.fighter_seq
    	    WHERE
        	    reject.fighter_seq = fb.fighter_seq
	            AND offer_date BETWEEN tc.start_date AND tc.end_date
    	) ELSE null END
		as offer_reject_cnt
	, tc.lsttm 
FROM tb_fighter_base fb
	left join tb_team_base tb
	on fb.team_seq = tb.team_seq 
	left join tb_contract tc
	on fb.fighter_seq = tc.fighter_seq
    left join tb_fighter_ranking ranking
	on fb.fighter_seq = ranking.fighter_seq 
WHERE fb.del_yn = 0
and fb.fighter_type = $fighterTypeNum
$allPlayerWhere
 GROUP BY 
    fb.fighter_seq,
    fb.country,
    fb.fighter_name,
    fb.fighter_ringname,
    fb.birth,
    fb.detail_image_name,
    fb.tel,
    fb.lsttm,
    tb.team_name,
    tc.contract_yn,
    tc.start_date,
    tc.end_date,
    tc.contract_match_number,
    tc.correction_val,
    tc.lsttm
order by tc.lsttm desc, fb.fighter_name asc; ";

$result = sql_query($sql);


?>
<style>
        table {
            border-collapse: collapse;
            width: auto;
        }

        /* tr:hover{
            background-color:#dddddd;
        } */

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

      .autocomplete{
        position:absolute;
        z-index:2;
      }
      /* 현재 선택된 검색어 */
      .autocomplete > div.active {
        background: #e0e5f6;
        color: #000;
      }
  
      .autocomplete > div {
        background: #f1f3f4;
        padding: .2rem .6rem;
        cursor: pointer;
      }
        #myModal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 50px;
            left: auto;
            right: auto;
            top: auto;
            bottom: auto;
            height: 70% !important;
            width: 70% !important;
            overflow: auto;
            background-color: black;
        }

        #myModal .modal-content {
            margin: auto;
            display: block;
            width : unset !important;
            max-width: 80%;
            max-height: 80%;
        }

        #myModal .close {
            color: white;
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 35px;
            font-weight: bold;
            cursor: pointer;
        }

    .anchor li.on a {
        background-color: #3f51b5;
        color: #fff;
    }

    .anchor li a {
        width: 100px;
        text-align: center;
    }

    .modal-body > div{
        margin: 10px 0px;
    }

    .data-row{
        margin-bottom:10px !important;
    }
    .data-row span{
        text-align:center;
    }

    .select2-container {
        z-index: 9999 !important;
    }

    .select2-container .select2-selection{
        height: 38px !important;
        padding: 4px;
    }

    .select2-container .select2-selection__arrow{
        top :5px !important;
    }

    .select2-results__option {
       text-align: left !important;
    }
    .select2-selection__rendered {
        text-align: left !important;
    }
    #select2-country-container > span{
        font-size: 1rem !important;
    }
    .td_country{
        font-size: 1.2rem !important;
        text-align:center;
    }

    #editor {
        width: 100% !important;
        min-width: 100% !important;
    }
    #editor_iframe {
        width: 100% !important;
    }

    .match_list li{
        display:flex;
    }

    .match_list li.hidden{
        display:none;    
    }

    .match_list li#toggleButton{
        justify-content: center;
        cursor:pointer;
    }

    span.fi{
            border-radius: 4px;
    }
    .game_name {
        display: inline-block;
        text-align: left;     /* 오른쪽 끝 정렬 */
        padding-right: 6px;    /* : 여백 */
        flex: 0 0 90px;
        width:90px;
    }

    .game_name span {
        display:inline-block;
    }

    .game_name::after {
        content: ":";          /* 자동으로 콜론 붙이기 */
        margin-left: 2px;
    }

    .match_info{
        display: flex;
        justify-content: flex-start;
        gap: 4px;
    }

    .winner_name{
        color: #ffba3c;
        font-weight:bold;
    }

    .remain_match{
        /* font-weight:bold; */
        color:blue;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 1);
    }
    .remain_0{
        color:#cccccc;
    
    }
    .remain_1{
        color:red;
    }
    .remain_1{
        color:orange;
    }
    .remain_2{
        color:yellow;
    }
    .remain_3, .remain_4{
        color:green;
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- dataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />  
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

<!-- select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/flag-icons/css/flag-icons.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.ko.min.js" integrity="sha512-L4qpL1ZotXZLLe8Oo0ZyHrj/SweV7CieswUODAAPN/tnqN3PA1P+4qPu5vIryNor6HQ5o22NujIcAZIfyVXwbQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- -->

<script type="text/javascript" src="/plugin/editor/smarteditor2/js/service/HuskyEZCreator.js" charset="utf-8"></script>

<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="imgModal">
</div>

<ul class="anchor">
    <? foreach ($fighterTypeItems as $fighterTypeName => $class) : ?>
        <li class="<?= $class ?>"><a href="?fighterType=<?= urlencode($fighterTypeName) ?>"><?= $fighterTypeName ?></a></li>
    <? endforeach; ?>
</ul>


<h2>계약 정보</h2>

<div style="margin:10px 0px; font-size:1.1rem;">
    <label style="">
        전체선수 보기
        <input type="checkbox" <?= $allPlayerChecked ?> onChange="showAllPlayer()">
    </label>
</div>


<table id="myTable" class="compact cell-border hover">
    <!-- 테이블의 헤더 부분은 그대로 유지 -->
    <thead>
    <tr>
        <th style="width:50px">No</th>
        <th style="width:50px">국가</th>
        <th style="width:100px">이름</th>
        <th style="width:100px">링네임</th>
        <th style="width:100px">팀명</th>
        <th style="width:100px">체급</th>
        <th style="width:120px">생년월일</th>
        <th style="width:70px; text-align:center;">상세<br/>이미지</th>
        <th style="width:120px">연락처</th>
        <th style="width:50px">계약여부</th>
        <th style="width:100px">계약시작일</th>
        <th style="width:100px">계약종료일</th>
        <th style="width:70px">총 계약경기수</th>
        <th style="width:70px">기간 내 경기</th>
        <th style="width:80px">기간 내 오퍼거절</th>
        <th style="width:50px">보정값</th>
        <th style="width:80px">기간 내 남은경기</th>
        <th style="width:150px">수정날짜</th>
        <th style="width:50px">수정</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($row = sql_fetch_array($result)) {
        $calculatedAge = age($row["birth"]);
        // 이미지 데이터를 base64로 인코딩
        // $base64ImageDataRanking = base64_encode($row['rankingImageBin']);
        // $base64ImageDataDetail = base64_encode($row['detailImageBin']);
        echo "<tr class='fighter_".$row["fighter_seq"] ."'>";
        echo "<td class='fighter_seq'><a href='/fighter/" . $row["fighter_seq"] . "' target='_blank'>" . $row["fighter_seq"] . "</a></td>";
        echo "<td class='td_country'>".$row["country"]."</td>";
        echo "<td class='fighter_name'>" . $row["fighter_name"] . "</td>";
        echo "<td class='fighter_ringname'>" . $row["fighter_ringname"] . "</td>";
        echo "<td class='team_name'>" . $row["team_name"] . "</td>";
        echo "<td class='division'>" . $row["division"] . "</td>";
        if($row["birth"] == ""){
            echo "<td class='birth'></td>";    
        }else{
            echo "<td class='birth'>" . $row["birth"] . " : ".$calculatedAge."</td>";
        }
        echo "<td class='img_detail' style='text-align:center'>
                <img width='30px' onclick='openModal(\"https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$row['fighter_seq']."/".$row['detail_image_name']."\")' style='cursor:pointer'
                src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$row['fighter_seq']."/".$row['detail_image_name']."' 
                    onerror=\"this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/fighter_full_blank.png'\"
                />
            </td>";
        echo "<td class='tel'>" . $row["tel"] . "</td>";
        echo  "<td class='contract_yn'>".$row["contract_yn"]."</td>";
        echo  "<td class='start_date'>".$row["start_date"]."</td>";
        echo  "<td class='end_date'>".$row["end_date"]."</td>";
        echo  "<td class='contract_match_number'>".$row["contract_match_number"]."</td>";
        echo  "<td class='match_cnt'>".$row["match_cnt"]."</td>";
        echo  "<td class='offer_reject_cnt'>".$row["offer_reject_cnt"]."</td>";
        echo  "<td class='correction_val'>".$row["correction_val"]."</td>";
        $remain = $row["contract_yn"] == '1' ? $row["contract_match_number"] - $row["match_cnt"] - $row["offer_reject_cnt"] - $row["correction_val"] : null;
        echo "<td class='remain_match remain_{$remain}'>{$remain}</td>";
        echo "<td class='lsttm'>" . $row["lsttm"] . "</td>";
        echo '<td class="btn_edit"><button class="btn btn-sm btn-success" onclick="showContractInfoModal(\'' . $row["fighter_seq"] . '\')">수정</button></td>';
        echo "</tr>";
        
    }
    ?>
    </tbody>

</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width:900px" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">계약정보 수정</h5>
            </div>
            <div class="modal-body">
                <h5>계약정보</h5>
                <div class="data-row">
                    <div style="display:flex; gap:10px;">
                        <span style="flex: 1 1 0">선수 SEQ(자동생성)</span>
                        <span style="flex: 1 1 0">이름</span>
                        <span style="flex: 1 1 0">링네임</span>
                        <span style="flex: 1 1 0">계약여부</span>
                    </div>
                    <div style="display:flex; gap:10px;">
                        <input style="flex: 1 1 0" class="form-control" id="fighter_seq" disabled placeholder="선수 SEQ(자동생성)">
                        <input style="flex: 1 1 0" class="form-control" id="fighter_name" disabled placeholder="이름">
                        <input style="flex: 1 1 0" class="form-control" id="fighter_ringname" disabled placeholder="링네임">
                        <div style="flex: 1 1 0" class="btn-group btnradio_contract_yn" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio_contract_yn" id="btnradio_contract_n" date="0" autocomplete="off" checked>
                            <label class="btn btn-outline-danger" for="btnradio_contract_n">X</label>

                            <input type="radio" class="btn-check" name="btnradio_contract_yn" id="btnradio_contract_y" date="1" autocomplete="off">
                            <label class="btn btn-outline-success" for="btnradio_contract_y">O</label>
                        </div>
                    </div>
                </div>
                <div class="data-row">
                    <div style="display:flex; gap:10px;">
                        <span style="flex: 1 1 0">계약날짜</span>
                        <span style="flex: 1 1 0">유효계약기간-시작일</span>
                        <span style="flex: 1 1 0">유효계약기간-종료일</span>
                        <span style="flex: 1 1 0">계약시 파이트머니</span>
                    </div>
                    <div style="display:flex; gap: 10px;">
                        <input style="flex: 1 1 0" type="text" id="popup_contract_date" class="datePicker form-control" style="font-size:0.8rem" disabled>
                        <input style="flex: 1 1 0" type="text" id="popup_start_date" class="datePicker form-control" style="font-size:0.8rem" disabled>
                        <input style="flex: 1 1 0" type="text" id="popup_end_date" class="datePicker form-control" style="font-size:0.8rem" disabled>
                        <input style="flex: 1 1 0" class="form-control" id="popup_contract_fmoney" disabled>
                    </div>
                </div>
                <div class="data-row">
                    <div style="display:flex">
                        <span style="flex: 1 1 0">총 계약경기수</span>
                        <span style="flex: 1 1 0">기간 내 경기횟수</span>
                        <span style="flex: 1 1 0">기간 내 오퍼거절 횟수</span>
                        <span style="flex: 1 1 0">보정값</span>
                        <span style="flex: 1 1 0">기간 내 남은경기수</span>
                    </div>
                    <div style="display:flex; gap: 10px;">
                        <select style="flex: 1 1 0" class="form-select form-select-sm" id="popup_contract_match_number" disabled>
                            <?php
                                    for ($i = 1; $i <= 8; $i++) {
                                        echo "<option value=\"$i\">$i</option>";
                                    }
                                ?>
                        </select>
                        <input style="flex: 1 1 0" class="form-control" id="popup_match_cnt" disabled >
                        <input style="flex: 1 1 0" class="form-control" id="popup_offer_reject_cnt" disabled>
                        <select style="flex: 1 1 0" class="form-select form-select-sm" id="popup_correction_val" disabled>
                            <?php
                                    echo "<option value='0' selected>0</option>";
                                    for ($i = 1; $i <= 5; $i++) {
                                        echo "<option value=\"$i\">$i</option>";
                                    }
                                ?>
                        </select>
                        <input style="flex: 1 1 0" class="form-control" id="popup_remain_match" disabled>
                    </div>
                </div>
                
                <h5 style="margin-top:30px;">계약기간 내 경기</h5>
                <div class="data-row">
                    <div class="match_list">
                        <ul id="matchListUl"></ul>
                    </div>
                </div>

                <h5 style="margin-top:30px;">계약기간 내 오퍼거절 이력</h5>
                <div class="data-row" style="margin-bottom:30px !important;">
                    <div>
                        <table class="offer_reject_table">
                            <thead>
                                <tr>
                                    <th style="width:100px; ">오퍼 제안 날짜</th>
                                    <th style="width:130px; ">오퍼 상대선수명</th>
                                    <th style="width:300px; text-align:center;">오퍼 거절 사유</th>
                                    <th style="width:150px; text-align:center;">입력날짜</th>
                                    <th style="width:100px; ">삭제</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                        <button class="btn btn-sm btn-outline-secondary" id="btn_add_offer_reject" onclick="addRow()">오퍼거절 추가</button>
                    </div>
                </div>

                <textarea name="memo" id="editor">
                    메모내용
                </textarea>
            </div>
            <div class="modal-footer">
                <button type="button" id="modal-cancel" class="btn btn-secondary" data-bs-dismiss="modal">취소</button>
                <button type="button" id="modal-submit" class="btn btn-primary">수정</button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">

    //자동완성기능
    let $autoComplete;
    function applyAutoComplete(){
        //자동완성기능
        const $search = document.querySelector("#search");
        $autoComplete = document.querySelector(".autocomplete");
        let nowIndex = 0;

        $search.onclick = () => {
            showList(fighterList, "", nowIndex);
        };

        $search.onkeyup = (event) => {
            $('.new_opponent_seq input').val(-1);
            // 검색어
            const value = $search.value.trim();
            if(value === ""){
                showList(fighterList, "", nowIndex);
                return;
            }
            // 자동완성 필터링
            const matchDataList = value
                ? fighterList.filter((label) => label.fighter_name.includes(value))
                : [];

            switch (event.keyCode) {
                // UP KEY
                case 38:
                nowIndex = Math.max(nowIndex - 1, 0);
                break;

                // DOWN KEY
                case 40:
                nowIndex = Math.min(nowIndex + 1, matchDataList.length - 1);
                break;

                // ENTER KEY
                case 13:
                setData(matchDataList[nowIndex]);
                // 초기화
                matchDataList.length = 0;
                break;

                //ESC
                case 27:
                $autoComplete.innerHTML = "";                
                break;
                
                // 그외 다시 초기화
                default:
                nowIndex = 0;
                break;
            }

            // 리스트 보여주기
            showList(matchDataList, value, nowIndex);
        };
    }
    
    const showList = (data, value, nowIndex) => {
        console.log(data,value,nowIndex ) //
        // 정규식으로 변환
        const regex = new RegExp(`(${value})`, "g");

        $autoComplete.innerHTML = data
            .map(
            (label, index) => {
                let fighter_name = data[index].fighter_name;
                let tempStr = `${fighter_name}`;
                if(value === ""){
                    return `<div class='${nowIndex === index ? "active" : ""}' onclick="setDataOnClick('${data[index].fighter_seq}','`+data[index].fighter_name+`')">
                        ${label.fighter_name}
                    </div> `    
                }else{
                    return `<div class='${nowIndex === index ? "active" : ""}' onclick="setDataOnClick('${data[index].fighter_seq}','`+data[index].fighter_name+`')">
                        ${label.fighter_name.replace(regex, "<mark>$1</mark>")}
                    </div> `    
                }
                })
            .join("");
    }

    const setData = (fighterItem) => {
        document.querySelector("#search").value = fighterItem.fighter_name;
        $('.new_opponent_seq input').val(fighterItem.fighter_seq);
        nowIndex = 0;
    }

    const setDataOnClick = (seq, name) => {
        let fighterItem = {
            fighter_seq : seq,
            fighter_name : name
        }
        setData(fighterItem);
        showList([], '', 0);
    }

    let openedFighterSeq = "";
    let countryMap = {};
    let table;
    $.getJSON('/adm/bc_oper_admin/fighter/contries.json', function(countries) {

        countries.sort(function(a, b) {
            return a.name_ko.localeCompare(b.name_ko, 'ko');
        });

        countries.forEach(c => {
            countryMap[c.code] = {
                name: c.name_ko,
                flag: c.flag
            };
        });

        let state = JSON.parse(localStorage.getItem('datatableState'));
        table = new DataTable('#myTable', {
            pageLength: 25,
            order: state?.order ?? [],
            columnDefs: [
                {
                    targets: 1,
                    render: {
                        display: function (data) {
                            let c = countryMap[data];
                            if(c !== null && c !== undefined){
                                return `<span class="fi fi-${c.flag}"></span>`;
                            }else{
                                return '<span class="fi"></span>';
                            }
                        },
                        filter: function (data) {
                            
                            if(data !== ""){
                                return countryMap[data].name;
                            }else{
                                return null;
                            }
                            
                        },
                        sort: function (data) {
                            if(data !== ""){
                                return countryMap[data].name;
                            }else{
                                return null;
                            }
                        }
                    }
                }
            ]
        });

        if(state){
            if (state?.search) table.search(state.search).draw();
            if (state?.page) table.page(state.page).draw(false);
            localStorage.removeItem('datatableState');
        }

    });

    $(function() {	
		$('.datePicker').datepicker({
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
		    title: "",	//캘린더 상단에 보여주는 타이틀
		    todayHighlight : true ,	//오늘 날짜에 하이라이팅 기능 기본값 :false 
		    toggleActive : true,	//이미 선택된 날짜 선택하면 기본값 : false인경우 그대로 유지 true인 경우 날짜 삭제
		    weekStart : 0 ,//달력 시작 요일 선택하는 것 기본값은 0인 일요일 
		    language : "ko"	//달력의 언어 선택, 그에 맞는 js로 교체해줘야한다.
		});//datepicker end
	});//ready end

    var oEditors = [];
    function initSmartEditor() {
        if (oEditors.length === 0) {
            nhn.husky.EZCreator.createInIFrame({
                oAppRef: oEditors,
                elPlaceHolder: "editor",
                sSkinURI: "/plugin/editor/smarteditor2/SmartEditor2Skin.html",
                fCreator: "createSEditor2"
            });
        }
    }

    function submitContents(form) {
        // 에디터 내용 → textarea로 반영
        oEditors.getById["editor"].exec("UPDATE_CONTENTS_FIELD", []);

        form.submit();
    }

    document.querySelectorAll('input[name="btnradio_contract_yn"]').forEach(radio => {
        radio.addEventListener('change', function() {
            let value = $(this).attr("date");
            if(value === '1'){
                $("#popup_contract_date").attr("disabled",false);
                $("#popup_start_date").attr("disabled",false);
                $("#popup_end_date").attr("disabled",false);
                $("#popup_contract_fmoney").attr("disabled",false);

                $("#popup_contract_match_number").attr("disabled",false);
                $("#popup_correction_val").attr("disabled",false);
            }else{
                $("#popup_contract_date").attr("disabled",true);
                $("#popup_start_date").attr("disabled",true);
                $("#popup_end_date").attr("disabled",true);
                $("#popup_contract_fmoney").attr("disabled",true);

                $("#popup_contract_match_number").attr("disabled",true);
                $("#popup_correction_val").attr("disabled",true);
            }

        });
    });


    /* 수정버튼 --> 수정완료 클릭 => 입력데이터 서버로 전송 */
    function updateRow(fighterSeq) {
        console.log(2);
        // // 수정된 데이터를 가져와서 AJAX로 서버에 업데이트 요청
        var updatedData = {
            fighterSeq: fighterSeq,
            btnradio_contract_yn:  $(".btnradio_contract_yn .btn-check:checked").attr("date"),
            popup_contract_date:  $("#popup_contract_date").val(),
            popup_start_date: $("#popup_start_date").val(),
            popup_end_date: $("#popup_end_date").val(),
            popup_contract_fmoney: $("#popup_contract_fmoney").val(),
            popup_contract_match_number: $("#popup_contract_match_number").val(),
            popup_correction_val: $("#popup_correction_val").val()
        };

        // 스마트에디터 내용을 textarea로 반영
        oEditors.getById["editor"].exec("UPDATE_CONTENTS_FIELD", []);
        // textarea 값 취득
        updatedData.memo = document.getElementById("editor").value;


        if(!validCheck(updatedData)){
            return;
        }

        if(confirm("수정하시겠습니까?")){
            console.log(updatedData);
        }
        
        $.ajax({
            type: 'POST',
            url: './contract/update_contract.php', // 실제 업데이트를 처리하는 PHP 파일 경로
            data: updatedData,
            success: function(response) {
                // 서버에서 업데이트 성공한 경우
                console.log(response); // 업데이트 성공한 경우 콘솔에 출력 (디버깅용)
                saveDatatableState()
                location.reload();
            },
            error: function(error) {
                console.error('Error updating data:', error);
                // 에러 처리 (실제 프로덕션에서는 사용자에게 알림 등을 보여주어야 함)
            }
        });
    }

    function validCheck(targetObj){

         // yyyy-mm-dd 형식의 정규표현식
        var yyyymmdd = /^\d{4}-\d{2}-\d{2}$/;

            
        if(!yyyymmdd.test(targetObj.popup_contract_date)){
            alert('계약날짜는 yyyy-mm-dd 형태로 입력해주세요.')
            return false;
        }

        if(!yyyymmdd.test(targetObj.popup_start_date)){
            alert('유효계약시작일은 yyyy-mm-dd 형태로 입력해주세요.')
            return false;
        }

        if(!yyyymmdd.test(targetObj.popup_end_date)){
            alert('유효계약종료일은 yyyy-mm-dd 형태로 입력해주세요.')
            return false;
        }

        if(isEmpty(targetObj.popup_contract_match_number)){
            alert('계약경기수를 입력해주세요.')
            return false;
        }

        if(isEmpty(targetObj.popup_correction_val)){
            alert('보정값을 입력해주세요.')
            return false;
        }
        
        return true;
    }

    function isEmpty(str){
        return str === undefined || str === null || str === '';
    }


    function openModal(src) {
        // 모달 표시
        var modal = document.getElementById('myModal');
        var modalImg = document.getElementById("imgModal");
        modal.style.display = "block";
        modalImg.src = src;

        // 닫기 버튼 이벤트 처리
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() {
            modal.style.display = "none";
        }
    }

    function showContractInfoModal(fighterSeq) {
        
        $.ajax({
            url: './contract/find_contract.php?fighter_seq=' + fighterSeq,
            type: 'GET',
            dataType: 'json',
            success: function (result) {
                const contractResult = result.contractResult[0];

                openedFighterSeq = contractResult['fighter_seq'];
                $("#modal-submit").off("click");
                let contract_yn = contractResult['contract_yn'];
                if (contract_yn == null) contract_yn = '0';
                
                $("#fighter_seq").val(contractResult['fighter_seq']);
                $("#fighter_name").val(contractResult['fighter_name']);
                $("#fighter_ringname").val(contractResult['fighter_ringname']);
                $(`.btnradio_contract_yn .btn-check[date=${contract_yn}]`).prop("checked", true);

                $("#popup_contract_date").datepicker("setDate",contractResult['contract_date']);;
                $("#popup_start_date").datepicker("setDate",contractResult['start_date'])
                $("#popup_end_date").datepicker("setDate",contractResult['end_date']);
                $("#popup_contract_fmoney").val(contractResult['contract_fmoney']);

                $("#popup_contract_match_number").val(contractResult['contract_match_number']);
                $("#popup_correction_val").val(contractResult['correction_val']);


                if (oEditors.length > 0) {
                    oEditors.getById["editor"].exec("SET_IR", [contractResult['memo'] || ""]);
                } else {
                    // 아직 생성 안 됐으면 초기화 + 로드 완료 콜백에서 내용 넣기
                    nhn.husky.EZCreator.createInIFrame({
                        oAppRef: oEditors,
                        elPlaceHolder: "editor",
                        sSkinURI: "/plugin/editor/smarteditor2/SmartEditor2Skin.html",
                        fCreator: "createSEditor2",
                        fOnAppLoad: function () {
                            oEditors.getById["editor"].exec("SET_IR", [contractResult['memo'] || ""]);
                        }
                    });
                }

                //계약기간 내 경기
                renderMatchHistory(result.matchHistory, fighterSeq);
                $("#popup_match_cnt").val(result.matchHistory.length);
                
                //계약기간 내 오퍼거절 이력
                $(".offer_reject_table tbody").html("");
                result.offerRejectHistory.forEach(item => {
                    console.log(item);
                    $(".offer_reject_table tbody").append(`
                        <tr>
                            <td>${item.offer_date.split(" ")[0]}</td>
                            <td>${item.opponent_name}</td>
                            <td>${item.reject_reason}</td>
                            <td>${item.lsttm}</td>
                            <td><button onclick="deleteRow('${item.reject_seq}')">삭제</button></td>
                        </tr>
                    `);
                })
                $("#popup_offer_reject_cnt").val(result.offerRejectHistory.length);    
                
                //기간 내 남은경기수
                $("#popup_remain_match").val(
                    Number(contractResult['contract_match_number']) - Number(result.matchHistory.length) - Number(result.offerRejectHistory.length) - Number(contractResult['correction_val'])
                );

                //계약상태에 따른 컴포넌트 동적표시
                switch(contractResult['contract_yn']){
                    case "1":
                        $("#popup_contract_date").attr("disabled",false);
                        $("#popup_start_date").attr("disabled",false);
                        $("#popup_end_date").attr("disabled",false);
                        $("#popup_contract_fmoney").attr("disabled",false);

                        $("#popup_contract_match_number").attr("disabled",false);
                        $("#popup_correction_val").attr("disabled",false);

                        $("#btn_add_offer_reject").attr("disabled",false);
                        break;
                    default :
                        $("#popup_contract_date").attr("disabled",true);
                        $("#popup_start_date").attr("disabled",true);
                        $("#popup_end_date").attr("disabled",true);
                        $("#popup_contract_fmoney").attr("disabled",true);

                        $("#popup_contract_match_number").attr("disabled",true);
                        $("#popup_correction_val").attr("disabled",true);

                        $("#btn_add_offer_reject").attr("disabled",true);
                }
                $("#modal-submit").on("click", () => {
                    console.log(1);
                    updateRow(contractResult['fighter_seq']);
                })
            },
            error: function (error) {
                console.error('API 호출 실패:', error);
            }
        });


        $("#exampleModal").modal('show'); 
    }

    function saveDatatableState(){
        let state = {
            search: table.search(),
            order: table.order(),
            page: table.page()
        };
        localStorage.setItem('datatableState', JSON.stringify(state));
    }

    function formatCountry (state) {
        if (!state.id) { return state.text; }
        const flag = $(state.element).data('flag'); 
        return $(
            '<span><span class="fi fi-' + flag + '"></span> ' + state.text + '</span>'
        );
    }

    function renderMatchHistory(matchHistory, fighterSeq) {
        const $ul = $("#matchListUl");
        $ul.empty(); // 기존 내용 비우기

        if (!matchHistory || matchHistory.length === 0) {
            $ul.append('<li style="text-align:center; color:gray;">계약기간 내 경기 없음</li>');
            return;
        }

        matchHistory.forEach((historyRow, index) => {
            let hiddenClass = index >= 4 ? "hidden" : "";
            let gameNameColor = historyRow.game_name.includes("블랙컴뱃")
                ? ""
                : "style='color:rgba(0,0,0,0.4)'";

            // 영상 링크
            let videoLink = historyRow.video_url
                ? `<a href="${historyRow.video_url}">`
                : `<a href="javascript:alert('등록된 경기영상이 없습니다.');">`;

            // 경기 결과 (현재 선수 seq 기준)
            let resultSpan = "";
            if (historyRow.winner_player) {
                if (String(historyRow.winner_player) === String(fighterSeq)) {
                    resultSpan = "<span class='match_result win'>Win</span>";
                } else if (historyRow.result === "N/C") {
                    resultSpan = "<span class='match_result NC' style='background-color:unset'></span>";
                } else {
                    resultSpan = "<span class='match_result lose'>Loss</span>";
                }
            }

            let liHtml = `
                <li class="${hiddenClass}">
                    <div class="game_name">
                        <a href="https://www.blackcombat-official.com/eventDetail.php?eventSeq=${historyRow.event_seq}">
                            <b><span ${gameNameColor}>${historyRow.game_name}</span></b>
                        </a>
                    </div>
                    <div class="match_info">
                        ${videoLink}<img style="width:21px;" src="<?= G5_THEME_IMG_URL ?>/youtube_icon.png" /></a>
                        ${resultSpan}
                        <a href="https://www.blackcombat-official.com/fighter/${historyRow.player1}">
                            <span class="fi fi-${historyRow.country1.toLowerCase()}"></span>
                            <span ${historyRow.winner_player == historyRow.player1 ? "class='winner_name'" : ""}>${historyRow.player1_name}</span>
                        </a>
                        vs
                        <a href="https://www.blackcombat-official.com/fighter/${historyRow.player2}">
                            <span class="fi fi-${historyRow.country2.toLowerCase()}"></span>
                            <span ${historyRow.winner_player == historyRow.player2 ? "class='winner_name'" : ""}>${historyRow.player2_name}</span>
                        </a>
                        <span style="margin-left:10px; font-size:0.7rem; display:contents;">${historyRow.result || ""}</span>
                    </div>
                </li>
            `;

            $ul.append(liHtml);
        });

        // 더보기 버튼
        if (matchHistory.length > 4) {
            $ul.append('<li id="toggleButton" style="text-align:center" onclick="foldToggle()">▼ 더보기</li>');
        }
    }

    // 입력 버튼 클릭 시 호출되는 함수
    function addRow() {
        var newRow = $('<tr>');

        // 팀번호는 자동 증가 형태로 구현
        newRow.append('<td class="new_offer_date"><input type="text" class="new_datePicker" /></td>');
        newRow.append(`<td class="new_opponent_name">
                            <input type="text" id="search" placeholder="선수명을 입력하세요." autocomplete="off"/>
                            <!-- 자동완성 단어 리스트 -->
                            <div class="autocomplete"></div>
                        </td>`);
        newRow.append('<td class="new_opponent_seq" style="display:none"><input hidden></td>');
        newRow.append('<td class="new_reject_reason"><input type="text"></td>');
        // 수정날짜는 입력 시간으로 고정
        newRow.append('<td>' + getCurrentDateTime() + '</td>');

        // 입력 완료 버튼 생성 및 클릭 이벤트 등록
        var addButton = $('<button>입력완료</button>').click(function() {
            addData(newRow);
        });
        newRow.append($('<td>').append(addButton));

        // 취소 버튼 생성 및 클릭 이벤트 등록
        var cancelButton = $('<button>취소</button>').click(function() {
            cancelAddRow(newRow);
        });
        newRow.append($('<td>').append(cancelButton));

        // 테이블에 새로운 행 추가
        $('.offer_reject_table tbody').append(newRow);

        applyAutoComplete();

        $('.new_datePicker').datepicker({
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
		    title: "",	//캘린더 상단에 보여주는 타이틀
		    todayHighlight : true ,	//오늘 날짜에 하이라이팅 기능 기본값 :false 
		    toggleActive : true,	//이미 선택된 날짜 선택하면 기본값 : false인경우 그대로 유지 true인 경우 날짜 삭제
		    weekStart : 0 ,//달력 시작 요일 선택하는 것 기본값은 0인 일요일 
		    language : "ko"	//달력의 언어 선택, 그에 맞는 js로 교체해줘야한다.
		});//datepicker end
    }

    // 입력 완료 버튼 클릭 시 호출되는 함수
    function addData(newRow) {
        // 새로 입력한 데이터를 가져와서 AJAX로 서버에 추가 요청
        var newRejectData = {
            fighterSeq: openedFighterSeq,
            newOfferDate: newRow.find('.new_offer_date').find('input').val(),
            newOpponentSeq: newRow.find('.new_opponent_seq').find('input').val(),
            newRejectReason: newRow.find('.new_reject_reason').find('input').val()
        };

         // yyyy-mm-dd 형식의 정규표현식
        var yyyymmdd = /^\d{4}-\d{2}-\d{2}$/;

        if(!yyyymmdd.test(newRejectData.newOfferDate)){
            alert('오퍼제안날짜는 yyyy-mm-dd 형태로 입력해주세요.')
            return false;
        }

        if(isEmpty(newRejectData.newOpponentSeq)){
            alert('오퍼 상대선수명을 입력해주세요.')
            return false;
        }

        if(isEmpty(newRejectData.newRejectReason)){
            alert('오퍼거절사유를 입력해주세요.')
            return false;
        }

        if(confirm("입력을 완료하는 경우 페이지가 새로고침 됩니다. 계속하시겠습니까?")){
            $.ajax({
                type: 'POST',
                url: './contract/create_offer_reject.php', // 실제 추가를 처리하는 PHP 파일 경로
                data: newRejectData,
                success: function(response) {
                    // 서버에서 추가 성공한 경우
                    console.log(response); // 추가 성공한 경우 콘솔에 출력 (디버깅용)
                    showContractInfoModal(openedFighterSeq);
                    //모달 닫고 다시열기
                },
                error: function(error) {
                    console.error('Error adding data:', error);
                    // 에러 처리 (실제 프로덕션에서는 사용자에게 알림 등을 보여주어야 함)
                }
            });
        }
    }

    // 취소 버튼 클릭 시 호출되는 함수
    function cancelAddRow(newRow) {
        // 새로 추가한 행 삭제
        newRow.remove();
    }

    // // 현재 날짜 및 시간을 가져오는 함수
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

    function deleteRow(rejectSeq) {
        if(confirm("삭제를 완료하는 경우 페이지가 새로고침 됩니다. 계속하시겠습니까?")){
            $.ajax({
                type: 'POST',
                url: './contract/delete_offer_reject.php', // 실제 삭제를 처리하는 PHP 파일 경로
                data: { rejectSeq: rejectSeq },
                success: function(response) {
                    // 서버에서 삭제 성공한 경우
                    showContractInfoModal(openedFighterSeq);
                },
                error: function(error) {
                    console.error('Error deleting data:', error);
                    // 에러 처리 (실제 프로덕션에서는 사용자에게 알림 등을 보여주어야 함)
                }
            });
        };
    }

    function showAllPlayer(){
        if('<?= $allPlayer ?>' === 'Y'){
            location.href = "?allPlayer=N";
        }else if('<?= $allPlayer ?>' === 'N'){
            location.href = "?allPlayer=Y";
        }
    }

</script>

<?php
include_once(G5_ADMIN_PATH.'/admin.tail.php');