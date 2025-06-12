<?php
$sub_menu = "910210";
define('G5_IS_ADMIN', true);
include_once ('../../common.php');
include_once(G5_ADMIN_PATH.'/admin.lib.php');
// auth_check_menu($auth, $sub_menu, "r");

// $token = get_token();


include_once(G5_ADMIN_PATH.'/admin.head.php');
// $token = get_token();

function age($birthday) {
    if($birthday == null){
        return -1;
    }
    $today       = date('Ymd');
    $birthday = date('Ymd' , strtotime($birthday));
    $age     = floor(($today - $birthday) / 10000);
    return $age;
}

$g5['title'] = "선수정보 관리";

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

$sql = "SELECT fb.*, tb.team_name 
FROM tb_fighter_base fb
left join tb_team_base tb
on fb.team_seq = tb.team_seq 
WHERE fb.del_yn = 0
and fighter_type = $fighterTypeNum
order by fsttm";
$result = sql_query($sql);


$teamListSql = "SELECT team_seq, team_name, addr, tel, lsttm FROM tb_team_base WHERE del_yn = 0";
$teamListresult = sql_query($teamListSql);
echo "<script type='text/javascript'>";
echo "let teamList = [];";
while ($row = sql_fetch_array($teamListresult)) {
    echo "teamList.push({teamName:'".$row["team_name"]."',teamSeq:".$row["team_seq"]."});";
}
echo "console.log(teamList)";
echo "</script>";


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

    .btn {
        height:40px;
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


<!-- datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.ko.min.js" integrity="sha512-L4qpL1ZotXZLLe8Oo0ZyHrj/SweV7CieswUODAAPN/tnqN3PA1P+4qPu5vIryNor6HQ5o22NujIcAZIfyVXwbQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="imgModal">
</div>

<ul class="anchor">
    <? foreach ($fighterTypeItems as $fighterTypeName => $class) : ?>
        <li class="<?= $class ?>"><a href="?fighterType=<?= urlencode($fighterTypeName) ?>"><?= $fighterTypeName ?></a></li>
    <? endforeach; ?>
</ul>


<h2>선수 정보</h2>

<table id="myTable" class="compact cell-border hover">
    <!-- 테이블의 헤더 부분은 그대로 유지 -->
    <thead>
    <tr>
        <th style="width:50px">No</th>
        <th style="width:100px">이름</th>
        <th style="width:100px">링네임</th>
        <th style="display:none">팀번호</th>
        <th style="width:100px">팀명</th>
        <th style="width:120px">생년월일</th>
        <th style="width:100px">인스타ID</th>
        <th style="width:50px">키</th>
        <th style="width:50px">체중</th>
        <th style="width:40px">승</th>
        <th style="width:40px">패</th>
        <th style="width:40px">무</th>
        <th style="width:70px; text-align:center;">랭킹<br/>이미지</th>
        <th style="width:70px; text-align:center;">랭킹챔프<br/>이미지</th>
        <th style="width:70px; text-align:center;">상세<br/>이미지</th>
        <th style="width:120px">연락처</th>
        <th style="width:150px">수정날짜</th>
        <th style="width:50px">수정</th>
        <th style="width:50px">삭제</th>
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
        echo "<td class='fighter_seq'>" . $row["fighter_seq"] . "</td>";
        echo "<td class='fighter_name'>" . $row["fighter_name"] . "</td>";
        echo "<td class='fighter_ringname'>" . $row["fighter_ringname"] . "</td>";
        echo "<td class='team_seq' style='display:none'>" . $row["team_seq"] . "</td>";
        echo "<td class='team_name'>" . $row["team_name"] . "</td>";
        if($row["birth"] == ""){
            echo "<td class='birth'></td>";    
        }else{
            echo "<td class='birth'>" . $row["birth"] . " : ".$calculatedAge."</td>";
        }
        echo "<td class='insta_id'><a href='https://www.instagram.com/".$row["insta_id"]."/' target='_blank'>" . $row["insta_id"] . "</a></td>";
        echo "<td class='height'>" . $row["height"] . "</td>";
        echo "<td class='weight'>" . $row["weight"] . "</td>";
        echo "<td class='win'>" . $row["win"] . "</td>";
        echo "<td class='lose'>" . $row["lose"] . "</td>";
        echo "<td class='draw'>" . $row["draw"] . "</td>";
        echo "<td class='img_ranking' style='text-align:center'>
                <img width='30px' onclick='openModal(\"https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$row['fighter_seq']."/".$row['ranking_image_name']."\")' style='cursor:pointer'
                    src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$row['fighter_seq']."/".$row['ranking_image_name']."' 
                    onerror=\"this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'\"
                />
                <button onclick=editClick(this)>편집</button>
                <input style='display:none' type='file' name='fileToUpload' class='fileToUpload' onchange=\"editProcess(this,'".$row["fighter_seq"]."','ranking')\">
            </td>";
        echo "<td class='img_detail' style='text-align:center'>
                <img width='30px' onclick='openModal(\"https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$row['fighter_seq']."/".$row['rankingChamp_image_name']."\")' style='cursor:pointer'
                    src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$row['fighter_seq']."/".$row['rankingChamp_image_name']."' 
                    onerror=\"this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'\"
                />
                <button onclick=editClick(this)>편집</button>
                <input style='display:none' type='file' name='fileToUpload' class='fileToUpload' onchange=\"editProcess(this,'".$row["fighter_seq"]."','rankingChamp')\">
            </td>";
        echo "<td class='img_detail' style='text-align:center'>
                <img width='30px' onclick='openModal(\"https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$row['fighter_seq']."/".$row['detail_image_name']."\")' style='cursor:pointer'
                src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$row['fighter_seq']."/".$row['detail_image_name']."' 
                    onerror=\"this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter/fighter_full_blank.png'\"
                />
                <button onclick=editClick(this)>편집</button>
                <input style='display:none' type='file' name='fileToUpload' class='fileToUpload' onchange=\"editProcess(this,'".$row["fighter_seq"]."','detail')\">
            </td>";
        echo "<td class='tel'>" . $row["tel"] . "</td>";
        echo "<td class='lsttm'>" . $row["lsttm"] . "</td>";
        echo '<td class="btn_edit"><button class="btn btn-sm btn-success" onclick="showFighterInfoModal(\'update\',\'' . $row["fighter_seq"] . '\')">수정</button></td>';
        echo '<td class="btn_delete"><button class="btn btn-sm btn-danger" onclick="deleteRow(\''.$row["fighter_seq"].'\',\'' . $row["fighter_name"] . '\')">삭제</button></td>';
        echo "</tr>";
        
    }
    ?>
    </tbody>

</table>

<button type="button" class="btn btn-primary" style="height:40px" onclick="showFighterInfoModal('register', null)">
  선수 등록
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width:600px" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">선수 등록 및 수정</h5>
            </div>
            <div class="modal-body">
                <input id="history_seq" hidden>
                <div class="data-row">
                    <div style="display:flex">
                        <span style="flex: 1 1 0">선수 SEQ(자동생성)</span>
                        <span style="flex: 1 1 0">이름</span>
                        <span style="flex: 1 1 0">링네임</span>
                    </div>
                    <div style="display:flex">
                        <input style="flex: 1 1 0" class="form-control" id="fighter_seq" disabled placeholder="선수 SEQ(자동생성)">
                        <input style="flex: 1 1 0" class="form-control" id="fighter_name" placeholder="이름">
                        <input style="flex: 1 1 0" class="form-control" id="fighter_ringname" placeholder="링네임">
                    </div>
                </div>
                <div class="data-row">
                    <div style="display:flex">
                        <span style="flex: 1 1 0">팀 SEQ(자동할당)</span>
                        <span style="flex: 2 1 0">팀명</span>
                    </div>
                    <div style="display:flex">
                        <input style="flex: 1 1 0" class="form-control" id="team_seq" disabled placeholder="팀 SEQ(자동할당)">
                        <div style="flex: 2 1 0">
                            <input class="form-control" id="team_name" placeholder="팀명" autocomplete="off">
                            <div class="autocomplete"></div>
                        </div>
                    </div>
                </div>
                <div class="data-row">
                    <div style="display:flex">
                        <span style="flex: 1 1 0">생년월일</span>
                        <span style="flex: 1 1 0">인스타 ID</span>
                        <span style="flex: 1 1 0">연락처</span>
                    </div>
                    <div style="display:flex">
                        <input style="flex: 1 1 0" class="form-control" id="birth" placeholder="생년월일">
                        <input style="flex: 1 1 0" class="form-control" id="insta_id" placeholder="인스타 ID">
                        <input style="flex: 1 1 0" class="form-control" id="tel" placeholder="연락처">
                    </div>
                </div>
                
                <div class="data-row">
                    <div style="display:flex">
                        <span style="flex: 1 1 0">키</span>
                        <span style="flex: 1 1 0">체중</span>
                        <span style="flex: 1 1 0">승</span>
                        <span style="flex: 1 1 0">패</span>
                        <span style="flex: 1 1 0">무</span>
                    </div>
                    <div style="display:flex">
                        <input style="flex: 1 1 0" class="form-control" id="height" placeholder="키">
                        <input style="flex: 1 1 0" class="form-control" id="weight" placeholder="체중">
                        <input style="flex: 1 1 0" class="form-control" id="win" placeholder="승">
                        <input style="flex: 1 1 0" class="form-control" id="lose" placeholder="패">
                        <input style="flex: 1 1 0" class="form-control" id="draw" placeholder="무">
                    </div>
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
    let table = new DataTable('#myTable', {
        pageLength: 25,
    });
    let $autoComplete;
    function applyAutoComplete(){
        //자동완성기능
        const $search = document.querySelector("#team_name");
        $autoComplete = document.querySelector(".autocomplete");
        let nowIndex = 0;

        $search.onclick = () => {
            showList(teamList, "", nowIndex);
        };

        $search.onkeyup = (event) => {
            $('#team_seq').val(-1);
            // 검색어
            const value = $search.value.trim();
            if(value === ""){
                showList(teamList, "", nowIndex);
                return;
            }
            // 자동완성 필터링
            const matchDataList = value
                ? teamList.filter((label) => label.teamName.includes(value))
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
                let teamName = data[index].teamName;
                let tempStr = `${teamName}`;
                if(value === ""){
                    return `<div class='${nowIndex === index ? "active" : ""}' onclick="setDataOnClick('${data[index].teamSeq}','`+data[index].teamName+`')">
                        ${label.teamName}
                    </div> `    
                }else{
                    return `<div class='${nowIndex === index ? "active" : ""}' onclick="setDataOnClick('${data[index].teamSeq}','`+data[index].teamName+`')">
                        ${label.teamName.replace(regex, "<mark>$1</mark>")}
                    </div> `    
                }
                })
            .join("");
    }

    const setData = (teamItem) => {
        console.log(teamItem);
        document.querySelector("#team_name").value = teamItem.teamName;
        $('#team_seq').val(teamItem.teamSeq);
        nowIndex = 0;
    }

    const setDataOnClick = (seq, name) => {
        let teamItem = {
            teamSeq : seq,
            teamName : name
        }
        setData(teamItem);
        showList([], '', 0);
    }

    /* 수정버튼 클릭 => Tr을 input으로 바꿈 */
    function editRow(fighterSeq) {

        // $.ajax({
        //     url: './fighter/find_fighter.php?fighter_seq=' + fighterSeq,
        //     type: 'GET',
        //     dataType: 'json',
        //     success: function (info) {
        //         console.log(info);

        //         // var tds = $(event.target).closest('tr').find('td');
        //         var tds = $(".fighter_"+fighterSeq).find('td');
        //         // var targetRow = $(event.target).closest('tr');

        //         // fighterSeq는 첫 번째 td에 있을 것으로 가정
        //         // fighterSeq = tds.eq(0).text();



        //         $.each(tds, (index,item) => {
        //             let className = $(item).attr("class");
        //             let oldValueDB = info[className];
        //             var oldValue =  $(item).text();
        //             switch($(item).attr("class")){    
        //                 case "team_seq" : 
        //                     $(item).html('<input type="text" id="input-teamSeq" value="' + oldValue + '">');
        //                     $(item).find('input').data('originalValue', oldValue);
        //                     break;
        //                 case "team_name" : 
        //                     $(item).html(`
        //                         <input type="text" id="search" placeholder="팀이름을 입력하세요." autocomplete="off" value="`+oldValue+`"/>
        //                         <!-- 자동완성 단어 리스트 -->
        //                         <div class="autocomplete"></div>
        //                     `);
        //                     $(item).find('input').data('originalValue', oldValue);
        //                     applyAutoComplete();
        //                     break;
        //                 case "fighter_name" : case "fighter_ringname" : 
        //                 case "birth" : case "insta_id" : case "height" : case "weight" : 
        //                 case "win" : case "lose" : case "draw" : case "tel" : 
        //                     $(item).html('<input type="text" value="' + oldValueDB + '">');
        //                     $(item).find('input').data('originalValue', oldValue);
        //                     break;
        //                 case "img_ranking" : break;
        //                 case "img_detail" : break;
        //                 case "lsttm" : break;
        //                 case "btn_edit" : 
        //                     $(item).find('button').hide();
        //                     var updateButton = $('<button>수정완료</button>').click(function() {
        //                         updateRow(fighterSeq);
        //                     });
        //                     $(item).html(updateButton)
        //                     break;
        //                 case "btn_delete" : 
        //                     $(item).find('button').hide();
        //                     var cancelButton = $('<button>취소</button>').click(function() {
        //                         cancelEditRow(tds);
        //                     });
        //                     $(item).html(cancelButton); 
        //                     break;
        //             }
        //         })
        //     },
        //     error: function (error) {
        //         console.error('API 호출 실패:', error);
        //     }
        // });
    }

    /* 수정버튼 --> 취소버튼 클릭 => Tr을 input바꾼걸 원복시킴 */
    function cancelEditRow(tds) {
        // // 모든 input을 해당 td의 값으로 복원
        // for (var i = 1; i < tds.length - 4; i++) { // 수정날짜를 제외한 열에 대해서만 반복
        //     var input = tds.eq(i).find('input');
        //     var originalValue = input.data('originalValue'); // 변경된 부분: data-originalValue에 저장된 원래 값으로 복원
        //     tds.eq(i).html(originalValue);
        // }

        // //연락처행은 별개로 처리
        // var originalTelValue = tds.eq(tds.length - 4).find('input').data('originalValue');
        // tds.eq(tds.length - 4).html(originalTelValue);

        // // 수정 버튼 다시 보이게
        // var editButton = tds.eq(tds.length - 2).find('button');
        // editButton.show();

        // // 삭제 버튼 다시 보이게
        // var deleteButton = tds.eq(tds.length - 1).find('button');
        // deleteButton.show();

        // // 수정 완료 버튼과 취소 버튼 삭제
        // tds.eq(tds.length - 2).html('<button onclick="editRow(' + tds.eq(0).text() + ')">수정</button>'); // 수정 버튼이 들어갈 열 수정
        // tds.eq(tds.length - 1).html('<button onclick="deleteRow(' + tds.eq(0).text() + ')">삭제</button>'); // 삭제 버튼이 들어갈 열 수정
        
        // // input 요소 삭제
        // tds.find('input').remove();
    }


    /* 수정버튼 --> 수정완료 클릭 => 입력데이터 서버로 전송 */
    function updateRow(fighterSeq) {
        // 수정된 데이터를 가져와서 AJAX로 서버에 업데이트 요청
        let targetRow = $(".fighter_"+fighterSeq);
        var updatedData = {
            fighterSeq: fighterSeq,
            fighter_name: $("#fighter_name").val(),
            fighter_ringname: $("#fighter_ringname").val(),
            team_seq:  $("#team_seq").val(),
            birth: $("#birth").val(),
            insta_id: $("#insta_id").val(),
            height: $("#height").val(),
            weight: $("#weight").val(),
            win: $("#win").val(),
            lose: $("#lose").val(),
            draw: $("#draw").val(),
            tel:  $("#tel").val()
        };

        if(!validCheck(updatedData)){
            return;
        }

        $.ajax({
            type: 'POST',
            url: './fighter/update_fighter.php', // 실제 업데이트를 처리하는 PHP 파일 경로
            data: updatedData,
            success: function(response) {
                // 서버에서 업데이트 성공한 경우
                console.log(response); // 업데이트 성공한 경우 콘솔에 출력 (디버깅용)
                location.reload();
            },
            error: function(error) {
                console.error('Error updating data:', error);
                // 에러 처리 (실제 프로덕션에서는 사용자에게 알림 등을 보여주어야 함)
            }
        });
    }

    // 선수정보 삭제버튼 
    function deleteRow(fighterSeq, fighterName) {
        if(confirm(fighterName+" 선수를 삭제하시겠습니까?")){
           
            // 여기서 AJAX 호출로 delete_team.php를 호출하여 삭제 처리를 수행
            $.ajax({
                type: 'POST',
                url: './fighter/delete_fighter.php', // 실제 삭제를 처리하는 PHP 파일 경로
                data: { fighterSeq: fighterSeq },
                success: function(response) {
                    // 서버에서 삭제 성공한 경우
                    location.reload();
                },
                error: function(error) {
                    console.error('Error deleting data:', error);
                    // 에러 처리 (실제 프로덕션에서는 사용자에게 알림 등을 보여주어야 함)
                }
            });
        }
        
    }


    // 입력 버튼 클릭 시 호출되는 함수
    function addRow() {
        // var newRow = $('<tr>');

        // // 팀번호는 자동 증가 형태로 구현
        // newRow.append('<td>자동 생성</td>');
        // newRow.append('<td class="fighter_name"><input type="text"></td>'); 
        // newRow.append('<td class="fighter_ringname"><input type="text"></td>'); 
        // newRow.append('<td class="team_seq" style="display:none"><input type="text" id="input-teamSeq"</td>'); 
        // newRow.append(`<td class="team_name">
        //                     <input type="text" id="search" placeholder="팀이름을 입력하세요." autocomplete="off"/>
        //                     <!-- 자동완성 단어 리스트 -->
        //                     <div class="autocomplete"></div>
        //                 </td>`);
        // newRow.append('<td class="birth"><input type="text"></td>'); 
        // newRow.append('<td class="insta_id"><input type="text"></td>'); 
        // newRow.append('<td class="height"><input type="text"></td>'); 
        // newRow.append('<td class="weight"><input type="text"></td>'); 
        // newRow.append('<td class="win"><input type="text"></td>'); 
        // newRow.append('<td class="lose"><input type="text"></td>'); 
        // newRow.append('<td class="draw"><input type="text"></td>'); 
        // newRow.append('<td>-</td>');
        // newRow.append('<td>-</td>'); 
        // newRow.append('<td class="tel"><input type="text"></td>'); 
        // // 수정날짜는 입력 시간으로 고정
        // newRow.append('<td>' + getCurrentDateTime() + '</td>');

        // // 입력 완료 버튼 생성 및 클릭 이벤트 등록
        // var addButton = $('<button>입력완료</button>').click(function() {
        //     addData(newRow);
        // });
        // newRow.append($('<td>').append(addButton));

        // // 취소 버튼 생성 및 클릭 이벤트 등록
        // var cancelButton = $('<button>취소</button>').click(function() {
        //     cancelAddRow(newRow);
        // });
        // newRow.append($('<td>').append(cancelButton));

        // // 테이블에 새로운 행 추가
        // $('table').append(newRow);
        // applyAutoComplete();
    }

    // 입력 완료 버튼 클릭 시 호출되는 함수
    function addData() {
        // 새로 입력한 데이터를 가져와서 AJAX로 서버에 추가 요청

        var newTeamData = {
            fighter_type: '<?= $fighterTypeNum ?>',            
            fighter_name: $("#fighter_name").val(),
            fighter_ringname: $("#fighter_ringname").val(),
            team_seq:  $("#team_seq").val(),
            birth: $("#birth").val(),
            insta_id: $("#insta_id").val(),
            height: $("#height").val(),
            weight: $("#weight").val(),
            win: $("#win").val(),
            lose: $("#lose").val(),
            draw: $("#draw").val(),
            tel:  $("#tel").val()
        };

        if(!validCheck(newTeamData)){
            return;
        }

        $.ajax({
            type: 'POST',
            url: './fighter/create_fighter.php', // 실제 추가를 처리하는 PHP 파일 경로
            data: newTeamData,
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



    function validCheck(targetObj){
         // yyyy-mm-dd 형식의 정규표현식
        var birthFormat = /^\d{4}-\d{2}-\d{2}$/;
        console.log(targetObj);
        if(isEmpty(targetObj.fighter_name)){
            alert('이름을 입력해주세요.')
            return false;
        }

        if(isEmpty(targetObj.fighter_ringname)){
            alert('링네임을 입력해주세요.')
            return false;
        }

        if(isEmpty(targetObj.team_seq)){
            alert('링네임을 입력해주세요.')
            return false;
        }

        if(!isEmpty(targetObj.birth) && !birthFormat.test(targetObj.birth)){
            alert('생년월일은 yyyy-mm-dd 형태로 입력해주세요.')
            return false;
        }

        if(isEmpty(targetObj.height)){
            alert('신장 정보가 없는경우 0을 입력해주세요.')
            return false;
        }

        if(isEmpty(targetObj.weight)){
            alert('체중 정보가 없는경우 0을 입력해주세요.')
            return false;
        }

        if(isEmpty(targetObj.win) || isEmpty(targetObj.lose) || isEmpty(targetObj.draw)){
            alert('승/패/무 정보는 필수값입니다.')
            return false;
        }
        return true;
    }

    function isEmpty(str){
        return str === undefined || str === null || str === '';
    }

    // 취소 버튼 클릭 시 호출되는 함수
    // function cancelAddRow(newRow) {
    //     // 새로 추가한 행 삭제
    //     newRow.remove();
    // }

    // 현재 날짜 및 시간을 가져오는 함수
    // function getCurrentDateTime() {
    //     var currentDate = new Date();
    //     var year = currentDate.getFullYear();
    //     var month = String(currentDate.getMonth() + 1).padStart(2, '0');
    //     var day = String(currentDate.getDate()).padStart(2, '0');
    //     var hours = String(currentDate.getHours()).padStart(2, '0');
    //     var minutes = String(currentDate.getMinutes()).padStart(2, '0');
    //     var seconds = String(currentDate.getSeconds()).padStart(2, '0');
    //     return `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
    // }

    //사진 편집버튼 이벤트
    function editClick(el){
        if (confirm("이미지 선택 시 이미지가 즉시 교체됩니다. 계속하시겠습니까?")) {
            // 파일 선택 창 열기
            console.log($(el))
            $(el).parent().find('.fileToUpload').trigger("click");
        }
    }

    //사진 업로드 프로세스
    function editProcess(el, seq, type){
        console.log(el.files[0]);
        console.log(seq,type);
        
        var file = el.files[0];
                
        // FormData 객체 생성
        var formData = new FormData();
        
        formData.append("fighter_seq", seq);
        formData.append("photo_type", type);
        formData.append("uploadFile", file);

        $.ajax({
            url: "./fighter/photo_upload_test.php",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                // location.reload();
                console.log(response);
            },
            error: function(error) {
                console.error("Error uploading file:", error);
            }
        });
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

    function showFighterInfoModal(action,fighterSeq) {
        if(action === 'register'){
            $("#modal-submit").off("click");
            
            $("#fighter_seq").val("");
            $("#fighter_name").val("");
            $("#fighter_ringname").val("");

            $("#team_seq").val("");
            $("#team_name").val("");

            $("#birth").val("");
            $("#insta_id").val("");
            $("#tel").val("");

            $("#height").val("");
            $("#weight").val("");
            $("#win").val("");
            $("#lose").val("");
            $("#draw").val("");

            applyAutoComplete();
            
            $("#modal-submit").text("등록");
            $("#modal-submit").on("click", () => {
                //TODO 수정
                // createFightHistory();
                addData();
            })
        }else if(action === 'update'){
            $.ajax({
                url: './fighter/find_fighter.php?fighter_seq=' + fighterSeq,
                type: 'GET',
                dataType: 'json',
                success: function (info) {
                    console.log(info);


                    $("#modal-submit").off("click");
            
                    $("#fighter_seq").val(fighterSeq);
                    $("#fighter_name").val(info['fighter_name']);
                    $("#fighter_ringname").val(info['fighter_ringname']);

                    $("#team_seq").val(info['team_seq']);
                    $("#team_name").val(info['team_name']);

                    $("#birth").val(info['birth']);
                    $("#insta_id").val(info['insta_id']);
                    $("#tel").val(info['tel']);

                    $("#height").val(info['height']);
                    $("#weight").val(info['weight']);
                    $("#win").val(info['win']);
                    $("#lose").val(info['lose']);
                    $("#draw").val(info['draw']);

                    applyAutoComplete();
                    
                    $("#modal-submit").text("수정");
                    $("#modal-submit").on("click", () => {
                        //TODO 수정
                        // createFightHistory();
                        updateRow(fighterSeq);
                    })
                    
                },
                error: function (error) {
                    console.error('API 호출 실패:', error);
                }
            });
        }
        

        $("#exampleModal").modal('show'); 
    }

</script>

<?php
include_once(G5_ADMIN_PATH.'/admin.tail.php');