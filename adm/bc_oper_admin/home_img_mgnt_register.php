<?php
$sub_menu = "910902";
define('G5_IS_ADMIN', true);
include_once ('../../common.php');
include_once(G5_ADMIN_PATH.'/admin.lib.php');
include_once(G5_ADMIN_PATH.'/admin.head.php');


/******************** 선수타입 정의 ***************/
$displayType = isset($_GET['displayType']) ? $_GET['displayType'] : 'PC';
$displayTypeItems = array(
    'PC' => '',
    'MOBILE' => '',
);

$displayTypeNum;
if($displayType == "PC"){
    $displayTypeNum = 1;
}else if($displayType == "MOBILE"){
    $displayTypeNum = 2;
}

if (array_key_exists($displayType, $displayTypeItems)) {
    $displayTypeItems[$displayType] = 'on';
}



$fighterListSql = "SELECT fighter_seq, CONCAT(fighter_name,' (',fighter_ringname,')') as fighter_name from tb_fighter_base where del_yn=0 AND fighter_type=$displayTypeNum";
$fighterListResult = sql_query($fighterListSql);
echo "<script type='text/javascript'>";
echo "let fighterList = [];";
while ($row = sql_fetch_array($fighterListResult)) {
    echo "fighterList.push({fighter_name:'".$row["fighter_name"]."',fighter_seq:".$row["fighter_seq"]."});";
}
echo "</script>"

?>

<script>
    
</script>
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
        td {
            height : 150px;
        }
        td.file_name{
            display:none;
        }

        th {
            background-color: #f2f2f2;
        }
        tr{
            height:60px;
        }

        input[type="text"] {
            width: 100%;
        }

        .anchor li.on a{
            background-color: #3f51b5;
            color: #fff;
        }
        .anchor li a{
            width:100px;
            text-align:center;
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
            height: 70% !important;
            width: 70% !important;
            overflow: auto;
            background-color: black;
        }

        .modal-content {
            margin: auto;
            display: block;
            width : unset !important;
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

      .btnSwitch button{
        border: 0px;
        height: 20px;
        width: 20px;
        outline: 0;
        cursor: pointer;
        padding: 0;
        border-radius: 50%;
        border: 2px solid #eee;
        position: relative;
        transition: all .3s;
      }
      
      td.fighterName{
        font-weight:bold;
        transition: all .3s;
      }

        .btnSwitch button[data-color="black"] {
            background-color: #191919;
        }
        .btnSwitch button[data-color="blue"] {
            background-color: #1572E8;
        }
        .btnSwitch button[data-color="purple"] {
            background-color: #6861CE;
        }
        .btnSwitch button[data-color="light-blue"] {
            background-color: #48ABF7;
        }
        .btnSwitch button[data-color="green"] {
            background-color: #31CE36;
        }
        .btnSwitch button[data-color="orange"] {
            background-color: #FFAD46;
        }
        .btnSwitch button[data-color="red"] {
            background-color: #F25961;
        }
        .btnSwitch button.selected {
            border-color: #0bf;
        }

        td.fighterName[data-name-color="black"] {
            color: #191919;
        }
        td.fighterName[data-name-color="blue"] {
            color: #1572E8;
        }
        td.fighterName[data-name-color="purple"] {
            color: #6861CE;
        }
        td.fighterName[data-name-color="light-blue"] {
            color: #48ABF7;
        }
        td.fighterName[data-name-color="green"] {
            color: #31CE36;
        }
        td.fighterName[data-name-color="orange"] {
            color: #FFAD46;
        }
        td.fighterName[data-name-color="red"] {
            color: #F25961;
        }
    </style>



<script>


</script>
<!-- <div style="font-size:3rem; color:red">아직 공사중입니다. 조작 금지!!</div> -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="imgModal">
</div>

<ul class="anchor">
    <li class="on"><a href="#" onclick='movePage("?displayType=<?= urlencode($displayType) ?>")'>순서관리</a></li>
    <li><a href="#" onclick='movePage("/adm/bc_oper_admin/home_img_mgnt_register.php?displayType=<?= urlencode($displayType) ?>")'>이미지등록</a></li>
</ul>

<ul class="anchor">
    <? foreach ($displayTypeItems as $displayTypeName => $class) : ?>
        <li class="<?= $class ?>"><a href="#" onclick='movePage("?displayType=<?= urlencode($displayTypeName) ?>")'><?= $displayTypeName ?></a></li>
    <? endforeach; ?>
</ul>




<div>
    <div style="display:flex">
        <h1 style="font-size:1.5rem; padding:10px;">메인 이미지 관리</h1>
        <button style="margin-left:30px; width:100px;" onclick="saveMainImg();">저장</button>
    </div>
    <div style="margin:10px 0px">
        <label>
            <input type="checkbox" onChange="changeDragYn(this)">
            드래그 사용
        </label>
    </div>
    
    <? 
    $sql = "SELECT
        ROW_NUMBER() OVER(ORDER BY CASE WHEN ranking = 'c' THEN 0 ELSE CAST(ranking AS UNSIGNED) END, ranking) as num,
        ranking.ranking, ranking.fighter_seq, base.fighter_name, base.fighter_ringname, base.ranking_image_name, base.fighter_status, base.status_lsttm, ranking.ranking_updown, ranking.lsttm, memo.memo_1
    FROM blackcombat.tb_fighter_ranking ranking
    LEFT JOIN blackcombat.tb_fighter_base base
        ON ranking.fighter_seq = base.fighter_seq 
    LEFT JOIN blackcombat.tb_fighter_memo memo
        ON memo.fighter_seq = base.fighter_seq
    WHERE division='$division' AND ranking_type = $displayTypeNum
    ORDER BY 
    CASE WHEN ranking = 'c' THEN 0  
    ELSE CAST(ranking AS UNSIGNED) END, ranking;";
    $result = sql_query($sql);
    $numRows = mysqli_num_rows($result);
    ?>
    <table style="font-size:0.8rem; position:absolute;" class="orderTable">
    <thead><tr><th style="width:50px">순서</th><th</tr>    
    <tbody>
        <? for($i=0; $i<$numRows; $i++){ ?>
            <tr><td><?= $i ?></td></tr>
        <? } ?>
    </tbody>
    </table>

    <table style="font-size:0.8rem; margin-left: 50px;" class="mainImgTable">
        <thead>
        <!-- 테이블의 헤더 부분은 그대로 유지 -->
        <!-- 순서, 기존순서, 빈이미지, 링크 input, 취소버튼 -->
         
        <tr>
            <th style="display:none">위치값</th>
            <th style="width:auto">기존순서</th>
            <th style="display:none">파일명</th>
            <th style="width:150px">이미지</th>
            <th style="width:500px">링크</th>
            <th style="width:auto">삭제</th>
        </tr>
        </thead>
        <!-- 테이블 내용 부분은 그대로 유지하며, 수정 버튼 클릭 시 editRow 함수 호출 -->
        <tbody>
    <?php
        //TODO
        while ($row = sql_fetch_array($result)) {
            $rankingImgPath = "https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$row['fighter_seq']."/".$row['ranking_image_name'];
    ?>
        <tr>
            <td style="display:none"><?= $row["num"] ?></td>
            <td><?= $row["ranking"] ?></td>
            <td><?= $row["file_name"] ?></td>
            <td class="fighterSeq" style="display:none"><?= $row["fighter_seq"] ?></td>
            <td class="fighterName" data-name-color="<?= $row["fighter_status"] ?>"><b><?= $row["fighter_name"] ?></b></td>
            <td><?= $row["fighter_ringname"] ?></td>
            <td><input style="width:50px" value='<?= $row["ranking_updown"] ?>' /></td>
            <td style="text-align:center"><img width='40px' onclick='openModal("<?=$rankingImgPath ?>")' style='cursor:pointer'
                     src='<?= $rankingImgPath ?>'
                     onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'"
                 /></td>
            <td><?= $row["lsttm"] ?></td>
            <td>
                <div class="btnSwitch">
                    <button type="button" class="changeFighterStateColor <? if("black" == $row["fighter_status"] || "" == $row["fighter_status"]){ echo "selected"; } ?>" data-color="black"></button>
                    <button type="button" class="changeFighterStateColor <? if("blue" == $row["fighter_status"]){ echo "selected"; } ?>" data-color="blue"></button>
                    <button type="button" class="changeFighterStateColor <? if("green" == $row["fighter_status"]){ echo "selected"; } ?>" data-color="green"></button>
                    <button type="button" class="changeFighterStateColor <? if("orange" == $row["fighter_status"]){ echo "selected"; } ?>" data-color="orange"></button>
                    <button type="button" class="changeFighterStateColor <? if("red" == $row["fighter_status"]){ echo "selected"; } ?>" data-color="red"></button>
                </div>
            </td>
            <td><?= $row["status_lsttm"] ?></td>
            <td><input value='<?= $row["memo_1"] ?>' /></td>
            <td><button onclick='removeFighter(this)'>삭제</button></td>
        </tr>
    <?php
        }
    ?>
    </tbody>
    </table>
    
    <button onclick="addRow()">추가</button>
    
    
    <!-- 자동완성 단어 리스트 -->
    
    
</div>



<script type="text/javascript">


    $(document).ready(() => {

    });

    function movePage(url){
        if(confirm("저장하지 않은 항목이 있을 경우 작성중인 데이터가 사라집니다. \n이동하시겠습니까?")){
            location.href=url;
        }
    }
    let initialOrder = Array.from(document.querySelectorAll('.mainImgTable tbody tr'))
    .map((tr, index) => ({ index, rank: parseInt(tr.cells[0].textContent) }));

  function updateRankingUpDown() {
    const currentOrder = Array.from(document.querySelectorAll('.mainImgTable tbody tr'))
      .map((tr, index) => ({ index, rank: parseInt(tr.cells[0].textContent) }));

    currentOrder.forEach((current, currentIndex) => {
      const initial = initialOrder.find(item => item.rank === current.rank);
      const difference = initial.index - currentIndex;

      tr = document.querySelectorAll('.mainImgTable tbody tr')[currentIndex];
      tr.cells[5].querySelector('input').value = difference;
    });
  }

  document.addEventListener('DOMContentLoaded', () => {
    // Attach drag and drop event listeners
    const tbody = document.querySelector('.mainImgTable tbody');

    tbody.addEventListener('dragstart', (event) => {
        console.log('dragStart');
      dragged = event.target.closest('tr');
      event.dataTransfer.setData('text/html', dragged);
    });

    tbody.addEventListener('dragover', (event) => {
        console.log('dragOver');
      event.preventDefault();
      const target = event.target.closest('tr');
      if (target && target !== dragged) {
        console.log(target);
        // tbody.insertBefore(dragged, target);
        const rect = target.getBoundingClientRect();
        const mouseY = event.clientY;

        if (mouseY < rect.top + rect.height / 2) {
          tbody.insertBefore(dragged, target);
        } else {
          tbody.insertBefore(dragged, target.nextSibling);
        }
        updateRankingUpDown();
      }
    });

    tbody.addEventListener('dragend', () => {
        console.log('dragEnd');
      dragged = null;
    });

    // Set draggable attribute to true for each row
    // document.querySelectorAll('.mainImgTable tbody tr').forEach((row) => {
    //   row.setAttribute('draggable', 'true');
    // });
  });


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


    // 입력 버튼 클릭 시 호출되는 함수
    function addRow() {

        const trList = Array.from(document.querySelectorAll('.orderTable tbody tr'));

        console.log(11);
        const maxIndex = trList.length === 0? 0 : Math.max(...trList.map((tr,index)=>{
            return Number(tr.getElementsByClassName("img_order")[0].textContent)
        }));
        const classSeq = Math.floor(Math.random() * 1000);


        var newRow1 = $(`<tr class="new_${classSeq}">`);
        newRow1.append(`<td class="img_order">${maxIndex+1}</td>`); //순위
        $('.orderTable').append(newRow1);
        

        var newRow2 = $(`<tr class="new_${classSeq}">`);
        newRow2.append(`<td class="img_order_origin">new</td>`); //기존순위
        newRow2.append(`<td class="file_name"></td>`); //파일명
        newRow2.append('<td class="img_tag">저장 후 이미지 등록탭에서 등록하세요</td>'); //이미지
        newRow2.append('<td class="link"><input type="text" id="link"></td>'); //링크
        var cancelButton = $('<button>취소</button>').click(function() {
            const newTrItems = $(".new_"+classSeq);
            newTrItems.remove();
         }); // 취소 버튼 생성 및 클릭 이벤트 등록
        newRow2.append($('<td>').append(cancelButton));

        // 테이블에 새로운 행 추가
        $('.mainImgTable').append(newRow2);
    }


    function removeFighter(el){
        if(confirm("삭제하시겠습니까?")){
            $(el).parent().parent().remove();
            updateRankingUpDown();    
        }
    }

    function saveMainImg(){
        if(confirm("저장하시겠습니까?")){
            const currentOrder = Array.from(document.querySelectorAll('.mainImgTable tbody tr')).map((tr,index)=>(
                {
                    img_order : index,
                    link : tr.querySelector("#link").value,
                    file_name : tr.querySelector(".file_name").textContent
                }
            ));
            console.log(currentOrder);


            $.ajax({
                type: 'POST',
                url: './home_img_mgnt/img_item_order_update.php', // 실제 추가를 처리하는 PHP 파일 경로
                data: {
                    "currentOrder": JSON.stringify(currentOrder),
                    "img_type" : '<?= $displayType ?>'
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

    $('.changeFighterStateColor').on('click', function(){

        let fighterSeq = $(this).parent().parent().parent().find(".fighterSeq").text();
        let colorName = $(this).attr('data-color');

        $(this).parent().parent().parent().find(".fighterName").attr('data-name-color', colorName);
        $(this).parent().find('.changeFighterStateColor').removeClass("selected");
        $(this).addClass("selected");
        
        
        $.ajax({
            type: 'POST',
            url: './fighter/update_fighter_status.php', // 실제 업데이트를 처리하는 PHP 파일 경로
            data: {
                fighterSeq: fighterSeq,
                statusCode: colorName
            },
            success: function(response) {
                // 서버에서 업데이트 성공한 경우
                console.log(response); // 업데이트 성공한 경우 콘솔에 출력 (디버깅용)
                

            },
            error: function(error) {
                console.error('Error updating data:', error);
                // 에러 처리 (실제 프로덕션에서는 사용자에게 알림 등을 보여주어야 함)
            }
        });
        
    });

    function changeDragYn(el){
        if($(el).prop("checked")){
            document.querySelectorAll('.mainImgTable tbody tr').forEach((row) => {
                row.setAttribute('draggable', 'true');
            });
        }else{
            document.querySelectorAll('.mainImgTable tbody tr').forEach((row) => {
                row.setAttribute('draggable', 'false');
            });
        }
        fillPlayer();
    }
</script>

<?php
include_once(G5_ADMIN_PATH.'/admin.tail.php');