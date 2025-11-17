<?php
$sub_menu = "910100";
define('G5_IS_ADMIN', true);
include_once ('../../common.php');
include_once(G5_ADMIN_PATH.'/admin.lib.php');
// auth_check_menu($auth, $sub_menu, "r");

// $token = get_token();


include_once(G5_ADMIN_PATH.'/admin.head.php');
// $token = get_token();

$g5['title'] = "팀 정보 관리";


$sql = "SELECT team_seq, team_name, addr, tel, insta_id, teamImageBin, lsttm FROM tb_team_base WHERE del_yn = 0";
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
    </style>



<script>
    function editRow(teamSeq) {
        var tds = $(event.target).closest('tr').find('td');

        // teamSeq는 첫 번째 td에 있을 것으로 가정
        teamSeq = tds.eq(0).text();

        for (var i = 1; i < tds.length - 4; i++) { // 수정날짜를 제외한 열에 대해서만 반복
            var oldValue = tds.eq(i).text();

            // 모든 경우에 수정 가능한 input으로 교체
            tds.eq(i).html('<input type="text" value="' + oldValue + '">');

            // 수정된 값을 저장
            tds.eq(i).find('input').data('originalValue', oldValue);
        }

        // 수정 버튼 숨김
        var editButton = tds.eq(tds.length - 2).find('button');
        editButton.hide();

        // 삭제 버튼 숨김
        var deleteButton = tds.eq(tds.length - 1).find('button');
        deleteButton.hide();

        // 수정 완료 버튼 생성 및 클릭 이벤트 등록
        var updateButton = $('<button>수정완료</button>').click(function() {
            updateRow(tds, teamSeq);
        });
        tds.eq(tds.length - 2).html(updateButton); // 수정 완료 버튼이 들어갈 열 수정

        // 취소 버튼 생성 및 클릭 이벤트 등록
        var cancelButton = $('<button>취소</button>').click(function() {
            cancelEditRow(tds);
        });
        tds.eq(tds.length - 1).html(cancelButton); // 취소 버튼이 들어갈 열 수정
    }

// 취소 버튼 클릭 시 호출되는 함수
function cancelEditRow(tds) {
    // 모든 input을 해당 td의 값으로 복원
    for (var i = 1; i < tds.length - 3; i++) { // 수정날짜를 제외한 열에 대해서만 반복
        var input = tds.eq(i).find('input');
        var originalValue = input.data('originalValue'); // 변경된 부분: data-originalValue에 저장된 원래 값으로 복원
        tds.eq(i).html(originalValue);
    }

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

// 수정 완료 버튼 클릭 시 호출되는 함수
function updateRow(tds, teamSeq) {
    // 수정된 데이터를 가져와서 AJAX로 서버에 업데이트 요청
    var updatedData = {
        teamSeq: teamSeq,
        teamName: tds.eq(1).find('input').val(),
        teamAddr: tds.eq(2).find('input').val(),
        teamTel: tds.eq(3).find('input').val(),
        instaId: tds.eq(4).find('input').val()
    };

    $.ajax({
        type: 'POST',
        url: './team/update_team.php', // 실제 업데이트를 처리하는 PHP 파일 경로
        data: updatedData,
        success: function(response) {
            // 서버에서 업데이트 성공한 경우
            console.log(response); // 업데이트 성공한 경우 콘솔에 출력 (디버깅용)

            // 수정 완료 버튼 다시 보이게
            var updateButton = tds.eq(tds.length - 2).find('button');
            updateButton.show();

            // 삭제 버튼 다시 보이게
            var deleteButton = tds.eq(tds.length - 1).find('button');
            deleteButton.show();

            // 수정 완료 버튼과 취소 버튼 삭제
            tds.eq(tds.length - 2).html('<button onclick="editRow(' + teamSeq + ')">수정</button>'); // 수정 버튼이 들어갈 열 수정
            tds.eq(tds.length - 1).html('<button onclick="deleteRow(' + teamSeq + ')">삭제</button>'); // 삭제 버튼이 들어갈 열 수정

            // 수정된 데이터로 행 갱신
            for (var i = 1; i < tds.length - 4; i++) { // 수정날짜를 제외한 열에 대해서만 반복
                var inputValue = tds.eq(i).find('input').val();
                tds.eq(i).html(inputValue);
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

        },
        error: function(error) {
            console.error('Error updating data:', error);
            // 에러 처리 (실제 프로덕션에서는 사용자에게 알림 등을 보여주어야 함)
        }
    });
}

// 삭제 버튼 클릭 시 호출되는 함수
function deleteRow(teamSeq) {
    var tds = $(event.target).closest('tr').find('td');
    var targetTr =  $(event.target).closest('tr');

    // teamSeq는 첫 번째 td에 있을 것으로 가정
    teamSeq = tds.eq(0).text();

    // 여기서 AJAX 호출로 delete_team.php를 호출하여 삭제 처리를 수행
    $.ajax({
        type: 'POST',
        url: './team/delete_team.php', // 실제 삭제를 처리하는 PHP 파일 경로
        data: { teamSeq: teamSeq },
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


 // 입력 버튼 클릭 시 호출되는 함수
 function addRow() {
        var newRow = $('<tr>');

        // 팀번호는 자동 증가 형태로 구현
        newRow.append('<td>자동 생성</td>');

        // 팀명 입력 폼
        newRow.append('<td><input type="text" id="teamName"></td>');

        // 주소 입력 폼
        newRow.append('<td><input type="text" id="teamAddr"></td>');

        // 전화번호 입력 폼
        newRow.append('<td><input type="text" id="teamTel"></td>');

        // 인스타 입력 폼
        newRow.append('<td><input type="text" id="instaId"></td>');

        // 수정날짜는 입력 시간으로 고정
        newRow.append('<td>' + getCurrentDateTime() + '</td>');

        // 입력 완료 버튼 생성 및 클릭 이벤트 등록
        var addButton = $('<button>입력완료</button>').click(function() {
            addTeam(newRow);
        });
        newRow.append($('<td>').append(addButton));

        // 취소 버튼 생성 및 클릭 이벤트 등록
        var cancelButton = $('<button>취소</button>').click(function() {
            cancelAddRow(newRow);
        });
        newRow.append($('<td>').append(cancelButton));

        // 테이블에 새로운 행 추가
        $('table').append(newRow);
    }

    // 입력 완료 버튼 클릭 시 호출되는 함수
    function addTeam(newRow) {
        // 새로 입력한 데이터를 가져와서 AJAX로 서버에 추가 요청
        var newTeamData = {
            teamName: newRow.find('#teamName').val(),
            teamAddr: newRow.find('#teamAddr').val(),
            teamTel: newRow.find('#teamTel').val(),
            instaId: newRow.find('#instaId').val()
        };

        $.ajax({
            type: 'POST',
            url: './team/create_team.php', // 실제 추가를 처리하는 PHP 파일 경로
            data: newTeamData,
            success: function(response) {
                location.reload();
                // 서버에서 추가 성공한 경우
                // console.log(response); // 추가 성공한 경우 콘솔에 출력 (디버깅용)
                // let teamSeq = JSON.parse(response).team_seq;

                // // 입력 완료 버튼과 취소 버튼 삭제
                // newRow.find('td:last-child').remove();
                // newRow.find('td:last-child').remove();

                // // 수정 버튼 생성 및 클릭 이벤트 등록
                // var editButton = '<button onclick="editRow('+teamSeq+')">수정</button>'
                // newRow.append($('<td>').append(editButton));

                // // 삭제 버튼 생성 및 클릭 이벤트 등록
                // var deleteButton = '<button onclick="deleteRow('+teamSeq+')">삭제</button>';
                // newRow.append($('<td>').append(deleteButton));

                // // 새로 추가한 데이터로 행 갱신
                // newRow.find('td').eq(0).html(teamSeq); // 팀번호 업데이트
                // newRow.find('td').eq(6).html(getCurrentDateTime()); // 수정날짜 업데이트

                // // 나머지 입력 폼을 입력된 값으로 업데이트
                // newRow.find('td').eq(1).html(newTeamData.teamName);
                // newRow.find('td').eq(2).html(newTeamData.teamAddr);
                // newRow.find('td').eq(3).html(newTeamData.teamTel);
                // newRow.find('td').eq(4).html(newTeamData.instaId);
            },
            error: function(error) {
                console.error('Error adding data:', error);
                // 에러 처리 (실제 프로덕션에서는 사용자에게 알림 등을 보여주어야 함)
            }
        });
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

    function editProcess(el, seq){
               
        var file = el.files[0];
                
        // FormData 객체 생성
        var formData = new FormData();
        formData.append("fileToUpload", file);
        formData.append("team_seq", seq);


        // Ajax로 파일 업로드 처리
        $.ajax({
            url: "./team/photo_upload.php",
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


<h2>팀 정보</h2>

<table>
    <!-- 테이블의 헤더 부분은 그대로 유지 -->
    <tr>
        <th style="width:50px">No</th>
        <th style="width:300px">팀명</th>
        <th style="width:300px">주소</th>
        <th style="width:200px">연락처</th>
        <th style="width:200px">인스타</th>
        <th style="width:70px; text-align:center;">팀 이미지</th>
        <th style="width:200px">수정날짜</th>
        <th style="width:100px">수정</th>
        <th style="width:100px">삭제</th>
    </tr>

    <!-- 테이블 내용 부분은 그대로 유지하며, 수정 버튼 클릭 시 editRow 함수 호출 -->
    <?php
    while ($row = sql_fetch_array($result)) {
        // 이미지 데이터를 base64로 인코딩
        $base64ImageDataTeam = base64_encode($row['teamImageBin']);
        echo "<tr>";
        echo "<td>" . $row["team_seq"] . "</td>";
        echo "<td>" . $row["team_name"] . "</td>";
        echo "<td>" . $row["addr"] . "</td>";
        echo "<td>" . $row["tel"] . "</td>";
        echo "<td>" . $row["insta_id"] . "</td>";
        // echo "<td class='img_team' style='text-align:center'>
        //         <button onclick=editClick(this)>편집</button>
        //         <input style='display:none' type='file' name='fileToUpload' class='fileToUpload' onchange=editProcess(this,'".$row["team_seq"]."')>
        //     </td>";
        if($base64ImageDataTeam != ""){
            echo "<td class='img_team' style='text-align:center'>
                <img width='50px' onclick='openModal(\"$base64ImageDataTeam\")' style='cursor:pointer'
                    src='data:image/png;base64,$base64ImageDataTeam' 
                />
                <button onclick=editClick(this)>편집</button>
                <input style='display:none' type='file' name='fileToUpload' class='fileToUpload' onchange=editProcess(this,'".$row["team_seq"]."')>
            </td>";    
        }else{
            echo "<td class='img_team' style='text-align:center'>
                    <button onclick=editClick(this)>편집</button>
                    <input style='display:none' type='file' name='fileToUpload' class='fileToUpload' onchange=editProcess(this,'".$row["team_seq"]."')>
                </td>";
        }
              
        echo "<td>" . $row["lsttm"] . "</td>";
        echo '<td><button onclick="editRow(' . $row["team_seq"] . ')">수정</button></td>';
        echo '<td><button onclick="deleteRow(' . $row["team_seq"] . ')">삭제</button></td>';
        echo "</tr>";
    }
    ?>

</table>

<button onclick="addRow()">입력</button>



<?php
include_once(G5_ADMIN_PATH.'/admin.tail.php');