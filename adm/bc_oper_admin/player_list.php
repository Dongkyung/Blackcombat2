<?php
$sub_menu = "910200";
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
order by fighter_seq";
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

        tr:hover{
            background-color:#dddddd;
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
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 50px;
        left: auto;
        right: auto;
        top: auto;
        bottom: auto;
        height: 50%;
        width: 50%;
        overflow: auto;
        background-color: black;
    }

    .modal-content {
        margin: auto;
        display: block;
        max-width: 80%;
        max-height: 80%;
    }

    .close {
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
    </style>



<script>

    /* 수정버튼 클릭 => Tr을 input으로 바꿈 */
    function editRow(fighterSeq) {

        $.ajax({
            url: './fighter/find_fighter.php?fighter_seq=' + fighterSeq,
            type: 'GET',
            dataType: 'json',
            success: function (info) {
                console.log(info);

                // var tds = $(event.target).closest('tr').find('td');
                var tds = $(".fighter_"+fighterSeq).find('td');
                // var targetRow = $(event.target).closest('tr');

                // fighterSeq는 첫 번째 td에 있을 것으로 가정
                // fighterSeq = tds.eq(0).text();


                $.each(tds, (index,item) => {
                    let className = $(item).attr("class");
                    let oldValueDB = info[className];
                    var oldValue =  $(item).text();
                    switch($(item).attr("class")){    
                        case "team_seq" : 
                            $(item).html('<input type="text" id="input-teamSeq" value="' + oldValue + '">');
                            $(item).find('input').data('originalValue', oldValue);
                            break;
                        case "team_name" : 
                            $(item).html(`
                                <input type="text" id="search" placeholder="팀이름을 입력하세요." autocomplete="off" value="`+oldValue+`"/>
                                <!-- 자동완성 단어 리스트 -->
                                <div class="autocomplete"></div>
                            `);
                            $(item).find('input').data('originalValue', oldValue);
                            applyAutoComplete();
                            break;
                        case "fighter_name" : case "fighter_ringname" : 
                        case "birth" : case "insta_id" : case "height" : case "weight" : 
                        case "win" : case "lose" : case "draw" : case "tel" : 
                            $(item).html('<input type="text" value="' + oldValueDB + '">');
                            $(item).find('input').data('originalValue', oldValue);
                            break;
                        case "img_ranking" : break;
                        case "img_detail" : break;
                        case "lsttm" : break;
                        case "btn_edit" : 
                            $(item).find('button').hide();
                            var updateButton = $('<button>수정완료</button>').click(function() {
                                updateRow(fighterSeq);
                            });
                            $(item).html(updateButton)
                            break;
                        case "btn_delete" : 
                            $(item).find('button').hide();
                            var cancelButton = $('<button>취소</button>').click(function() {
                                cancelEditRow(tds);
                            });
                            $(item).html(cancelButton); 
                            break;
                    }
                })
            },
            error: function (error) {
                console.error('API 호출 실패:', error);
            }
        });
    }

    /* 수정버튼 --> 취소버튼 클릭 => Tr을 input바꾼걸 원복시킴 */
    function cancelEditRow(tds) {
        // 모든 input을 해당 td의 값으로 복원
        for (var i = 1; i < tds.length - 4; i++) { // 수정날짜를 제외한 열에 대해서만 반복
            var input = tds.eq(i).find('input');
            var originalValue = input.data('originalValue'); // 변경된 부분: data-originalValue에 저장된 원래 값으로 복원
            tds.eq(i).html(originalValue);
        }

        //연락처행은 별개로 처리
        var originalTelValue = tds.eq(tds.length - 4).find('input').data('originalValue');
        tds.eq(tds.length - 4).html(originalTelValue);

        // 수정 버튼 다시 보이게
        var editButton = tds.eq(tds.length - 2).find('button');
        editButton.show();

        // 삭제 버튼 다시 보이게
        var deleteButton = tds.eq(tds.length - 1).find('button');
        deleteButton.show();

        // 수정 완료 버튼과 취소 버튼 삭제
        tds.eq(tds.length - 2).html('<button onclick="editRow(' + tds.eq(0).text() + ')">수정</button>'); // 수정 버튼이 들어갈 열 수정
        tds.eq(tds.length - 1).html('<button onclick="deleteRow(' + tds.eq(0).text() + ')">삭제</button>'); // 삭제 버튼이 들어갈 열 수정
        
        // input 요소 삭제
        tds.find('input').remove();
    }


    /* 수정버튼 --> 수정완료 클릭 => 입력데이터 서버로 전송 */
    function updateRow(fighterSeq) {
        // 수정된 데이터를 가져와서 AJAX로 서버에 업데이트 요청
        let targetRow = $(".fighter_"+fighterSeq);
        var updatedData = {
            fighterSeq: fighterSeq,
            fighter_name : targetRow.find(".fighter_name").find('input').val(),
            fighter_ringname : targetRow.find(".fighter_ringname").find('input').val(),
            team_seq : targetRow.find(".team_seq").find('input').val(),
            birth : targetRow.find(".birth").find('input').val(),
            insta_id : targetRow.find(".insta_id").find('input').val(),
            height : targetRow.find(".height").find('input').val(),
            weight : targetRow.find(".weight").find('input').val(),
            win : targetRow.find(".win").find('input').val(),
            lose : targetRow.find(".lose").find('input').val(),
            draw : targetRow.find(".draw").find('input').val(),
            tel : targetRow.find(".tel").find('input').val()
        };

        if(!validCheck(updatedData)){
            return;
        }

        console.log(updatedData);
        $.ajax({
            type: 'POST',
            url: './fighter/update_fighter.php', // 실제 업데이트를 처리하는 PHP 파일 경로
            data: updatedData,
            success: function(response) {
                // 서버에서 업데이트 성공한 경우
                console.log(response); // 업데이트 성공한 경우 콘솔에 출력 (디버깅용)

                // 수정 완료 버튼과 취소 버튼 삭제
                targetRow.find('.btn_edit').html('<button onclick="editRow(' + fighterSeq + ')">수정</button>'); // 수정 버튼이 들어갈 열 수정
                targetRow.find('.btn_delete').html('<button onclick="deleteRow(' + fighterSeq + ')">삭제</button>'); // 삭제 버튼이 들어갈 열 수정
                
                $.ajax({
                    url: './fighter/find_fighter.php?fighter_seq=' + fighterSeq,
                    type: 'GET',
                    dataType: 'json',
                    success: function (info) {
                        // 수정된 데이터로 행 갱신
                        var tds = $(targetRow).find('td');
                        for (var i = 1; i < tds.length - 5; i++) { // 수정날짜를 제외한 열에 대해서만 반복
                            let className = $(tds.eq(i)).attr("class");
                            
                            if(className == 'birth'){
                                if(info['birth'] == ""){
                                    tds.eq(i).html('');
                                }else{
                                    tds.eq(i).html(info['birth']+ " : " +info['calculatedAge']);
                                }
                            }else{
                                tds.eq(i).html(info[className]);
                            }
                        }
                        var currentDate = new Date(); // 현재 날짜 및 시간 가져오기
                        var year = currentDate.getFullYear();
                        var month = String(currentDate.getMonth() + 1).padStart(2, '0');
                        var day = String(currentDate.getDate()).padStart(2, '0');
                        var hours = String(currentDate.getHours()).padStart(2, '0');
                        var minutes = String(currentDate.getMinutes()).padStart(2, '0');
                        var seconds = String(currentDate.getSeconds()).padStart(2, '0');
                        var formattedDate = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
                        tds.eq(tds.length - 3).html(formattedDate);

                        tds.eq(tds.length - 4).html(info[$(tds.eq(tds.length - 4)).attr("class")]); //연락처 행
                    },
                    error: function (error) {
                        console.error('API 호출 실패:', error);
                    }
                });
            },
            error: function(error) {
                console.error('Error updating data:', error);
                // 에러 처리 (실제 프로덕션에서는 사용자에게 알림 등을 보여주어야 함)
            }
        });
    }

    // 선수정보 삭제버튼 
    function deleteRow(fighterSeq) {
        if(confirm("삭제하시겠습니까?")){
            var tds = $(event.target).closest('tr').find('td');
            var targetTr =  $(event.target).closest('tr');

            // fighterSeq는 첫 번째 td에 있을 것으로 가정
            fighterSeq = tds.eq(0).text();

            // 여기서 AJAX 호출로 delete_team.php를 호출하여 삭제 처리를 수행
            $.ajax({
                type: 'POST',
                url: './fighter/delete_fighter.php', // 실제 삭제를 처리하는 PHP 파일 경로
                data: { fighterSeq: fighterSeq },
                success: function(response) {
                    // 서버에서 삭제 성공한 경우
                    console.log(response); // 삭제 성공한 경우 콘솔에 출력 (디버깅용)

                    // 삭제 성공 후 테이블에서 해당 행을 제거
                    targetTr.remove();
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
        var newRow = $('<tr>');

        // 팀번호는 자동 증가 형태로 구현
        newRow.append('<td>자동 생성</td>');
        newRow.append('<td class="fighter_name"><input type="text"></td>'); 
        newRow.append('<td class="fighter_ringname"><input type="text"></td>'); 
        newRow.append('<td class="team_seq" style="display:none"><input type="text" id="input-teamSeq"</td>'); 
        newRow.append(`<td class="team_name">
                            <input type="text" id="search" placeholder="팀이름을 입력하세요." autocomplete="off"/>
                            <!-- 자동완성 단어 리스트 -->
                            <div class="autocomplete"></div>
                        </td>`);
        newRow.append('<td class="birth"><input type="text"></td>'); 
        newRow.append('<td class="insta_id"><input type="text"></td>'); 
        newRow.append('<td class="height"><input type="text"></td>'); 
        newRow.append('<td class="weight"><input type="text"></td>'); 
        newRow.append('<td class="win"><input type="text"></td>'); 
        newRow.append('<td class="lose"><input type="text"></td>'); 
        newRow.append('<td class="draw"><input type="text"></td>'); 
        newRow.append('<td>-</td>');
        newRow.append('<td>-</td>'); 
        newRow.append('<td class="tel"><input type="text"></td>'); 
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
        $('table').append(newRow);
        applyAutoComplete();
    }

    // 입력 완료 버튼 클릭 시 호출되는 함수
    function addData(newRow) {
        // 새로 입력한 데이터를 가져와서 AJAX로 서버에 추가 요청
        var newTeamData = {
            fighter_type: '<?= $fighterTypeNum ?>',            
            fighter_name: newRow.find('.fighter_name').find('input').val(),
            fighter_ringname: newRow.find('.fighter_ringname').find('input').val(),
            team_seq: newRow.find('.team_seq').find('input').val(),
            birth: newRow.find('.birth').find('input').val(),
            insta_id: newRow.find('.insta_id').find('input').val(),
            height: newRow.find('.height').find('input').val(),
            weight: newRow.find('.weight').find('input').val(),
            win: newRow.find('.win').find('input').val(),
            lose: newRow.find('.lose').find('input').val(),
            draw: newRow.find('.draw').find('input').val(),
            tel: newRow.find('.tel').find('input').val(),
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
    function cancelAddRow(newRow) {
        // 새로 추가한 행 삭제
        newRow.remove();
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

    function editClick(el){
        if (confirm("이미지 선택 시 이미지가 즉시 교체됩니다. 계속하시겠습니까?")) {
            // 파일 선택 창 열기
            console.log($(el))
            $(el).parent().find('.fileToUpload').trigger("click");
        }
    }

    function editProcess(el, seq, type){
        console.log(el.files[0]);
        console.log(seq,type);
        
        var file = el.files[0];
                
        // FormData 객체 생성
        var formData = new FormData();
        formData.append("fileToUpload", file);
        formData.append("fighter_seq", seq);
        formData.append("photo_type", type);


        // Ajax로 파일 업로드 처리
        $.ajax({
            url: "./fighter/photo_upload.php",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                location.reload();
            },
            error: function(error) {
                console.error("Error uploading file:", error);
            }
        });
    }


    function openModal(base64ImageData) {
        // 모달 표시
        var modal = document.getElementById('myModal');
        var modalImg = document.getElementById("imgModal");
        modal.style.display = "block";
        modalImg.src = 'data:image/png;base64,' + base64ImageData;

        // 닫기 버튼 이벤트 처리
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() {
            modal.style.display = "none";
        }
    }

    </script>



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

<table style="font-size:0.8rem">
    <!-- 테이블의 헤더 부분은 그대로 유지 -->
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
        <th style="width:70px; text-align:center;">상세<br/>이미지</th>
        <th style="width:120px">연락처</th>
        <th style="width:150px">수정날짜</th>
        <th style="width:50px">수정</th>
        <th style="width:50px">삭제</th>
    </tr>

    <!-- 테이블 내용 부분은 그대로 유지하며, 수정 버튼 클릭 시 editRow 함수 호출 -->
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
        // echo "<td class='img_ranking' style='text-align:center'>
        //         <img width='30px' onclick='openModal(\"$base64ImageDataRanking\")' style='cursor:pointer'
        //             src='data:image/png;base64,$base64ImageDataRanking' 
        //             onerror=\"this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter/fighter_full_blank.png'\"
        //         />
        //         <button onclick=editClick(this)>편집</button>
        //         <input style='display:none' type='file' name='fileToUpload' class='fileToUpload' onchange=editProcess(this,'".$row["fighter_seq"]."','ranking')>
        //     </td>";
        // echo "<td class='img_detail' style='text-align:center'>
        //         <img width='30px' onclick='openModal(\"$base64ImageDataDetail\")' style='cursor:pointer'
        //         src='data:image/png;base64,$base64ImageDataDetail' 
        //             onerror=\"this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter/fighter_full_blank.png'\"
        //         />
        //         <button onclick=editClick(this)>편집</button>
        //         <input style='display:none' type='file' name='fileToUpload' class='fileToUpload' onchange=editProcess(this,'".$row["fighter_seq"]."','detail')>
        //     </td>";
        echo "<td class='img_ranking' style='text-align:center'>
                <button onclick=editClick(this)>편집</button>
                <input style='display:none' type='file' name='fileToUpload' class='fileToUpload' onchange=editProcess(this,'".$row["fighter_seq"]."','ranking')>
            </td>";
        echo "<td class='img_detail' style='text-align:center'>
                <button onclick=editClick(this)>편집</button>
                <input style='display:none' type='file' name='fileToUpload' class='fileToUpload' onchange=editProcess(this,'".$row["fighter_seq"]."','detail')>
            </td>";
        echo "<td class='tel'>" . $row["tel"] . "</td>";
        echo "<td class='lsttm'>" . $row["lsttm"] . "</td>";
        echo '<td class="btn_edit"><button onclick="editRow(' . $row["fighter_seq"] . ')">수정</button></td>';
        echo '<td class="btn_delete"><button onclick="deleteRow(' . $row["team_seq"] . ')">삭제</button></td>';
        echo "</tr>";
        
    }
    ?>

</table>

<button onclick="addRow()">입력</button>


<script type="text/javascript">
    let $autoComplete;
    function applyAutoComplete(){
        //자동완성기능
        const $search = document.querySelector("#search");
        $autoComplete = document.querySelector(".autocomplete");
        let nowIndex = 0;

        $search.onclick = () => {
            showList(teamList, "", nowIndex);
        };

        $search.onkeyup = (event) => {
            $('#input-teamSeq').val(-1);
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
        document.querySelector("#search").value = teamItem.teamName;
        $('#input-teamSeq').val(teamItem.teamSeq);
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

</script>

<?php
include_once(G5_ADMIN_PATH.'/admin.tail.php');