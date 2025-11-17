<?php
$sub_menu = "910902";
define('G5_IS_ADMIN', true);
include_once ('../../common.php');
include_once(G5_ADMIN_PATH.'/admin.lib.php');
include_once(G5_ADMIN_PATH.'/admin.head.php');


/******************** PC/모바일 ***************/
// $displayType = isset($_GET['displayType']) ? $_GET['displayType'] : 'PC';
// $displayTypeItems = array(
//     'PC' => '',
//     'MOBILE' => '',
// );

// $displayTypeNum;
// if($displayType == "PC"){
//     $displayTypeNum = 1;
// }else if($displayType == "MOBILE"){
//     $displayTypeNum = 2;
// }

// if (array_key_exists($displayType, $displayTypeItems)) {
//     $displayTypeItems[$displayType] = 'on';
// }

/******************** 관리모드 ***************/
$mgntType = isset($_GET['mgntType']) ? $_GET['mgntType'] : '순서 관리'; // 현재 URL에서 division 값 취득

$mgntItems = array(
    '순서 관리' => '',
    '이미지 등록' => ''
);

// 현재 mgntType에 해당하는 메뉴에 "on" 클래스 추가
if (array_key_exists($mgntType, $mgntItems)) {
    $mgntItems[$mgntType] = 'on';
}

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
        td.file_name, td.file_name_mobile{
            display:none;
        }

        td.img_tag{
            text-align: center;
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

<!-- <ul class="anchor">
    <? foreach ($displayTypeItems as $displayTypeName => $class) : ?>
        <li class="<?= $class ?>"><a href="#" onclick='movePage("?displayType=<?= urlencode($displayTypeName) ?>")'><?= $displayTypeName ?></a></li>
    <? endforeach; ?>
</ul> -->

<ul class="anchor">
    <? foreach ($mgntItems as $mgntName => $class) : ?>
        <li class="<?= $class ?>"><a href="#" onclick='movePage("?mgntType=<?= urlencode($mgntName) ?>&displayType=<?= urlencode($displayType) ?>")'><?= $mgntName ?></a></li>
    <? endforeach; ?>
</ul>


<div>
    <div style="display:flex">
        <h1 style="font-size:1.5rem; padding:10px;">메인 이미지 관리</h1>
        <? if($mgntType === '순서 관리'){?>
            <button style="margin-left:30px; width:100px;" onclick="saveMainImg();">저장</button>
        <? } ?>
        
    </div>
    <div style="margin:10px 0px">
        <? if($mgntType === '순서 관리'){?>
            <label>
                <input type="checkbox" onChange="changeDragYn(this)">
                드래그 사용
            </label>
        <? } ?>
    </div>
    
    <? 
    $sql = "SELECT 
            img_order, file_name,file_name_mobile, link, lsttm
            FROM blackcombat.tb_home_img_mgnt
            order by CAST(img_order AS UNSIGNED);";
    $result = sql_query($sql);
    $numRows = mysqli_num_rows($result);
    ?>
    <table style="font-size:0.8rem; position:absolute;" class="orderTable">
    <thead><tr><th style="width:50px">순서</th><th</tr>    
    <tbody>
        <? for($i=0; $i<$numRows; $i++){ ?>
            <tr><td class="img_order"><?= $i ?></td></tr>
        <? } ?>
    </tbody>
    </table>

    <table style="font-size:0.8rem; margin-left: 50px;" class="mainImgTable">
        <thead>
        <!-- 테이블의 헤더 부분은 그대로 유지 -->
        <!-- 순서, 기존순서, 빈이미지, 링크 input, 취소버튼 -->
         
        <tr>
            <th style="display:none">위치값</th>
            <? if($mgntType === '순서 관리'){?>
                <th style="width:auto">기존순서</th>
            <? } ?>
            <th style="display:none">파일명_PC</th>
            <th style="width:150px">이미지_PC</th>
            <th style="display:none">파일명_MOBILE</th>
            <th style="width:150px">이미지_MOBILE</th>
            <th style="width:500px">링크</th>
            <? if($mgntType === '순서 관리'){?>
                <th style="width:auto">삭제</th>
            <? } ?>
                
            
        </tr>
        </thead>
        <!-- 테이블 내용 부분은 그대로 유지하며, 수정 버튼 클릭 시 editRow 함수 호출 -->
        <tbody>
    <?php
        while ($row = sql_fetch_array($result)) {
    ?>
        <? if($mgntType === '순서 관리'){?>
            <tr>
                <td style="display:none"><?= $row["img_order"] ?></td>
                <td class="img_order_origin"><?= $row["img_order"] ?></td>
                <td class="file_name" style="display:none"><?= $row["file_name"] ?></td>
                <td class="img_tag">
                    <img height='130px' onclick='openModal(\"https://www.blackcombat-official.com/theme/blackcombat/img/main/PC/<?= $row["file_name"] ?>")' style='cursor:pointer'
                        src='https://www.blackcombat-official.com/theme/blackcombat/img/main/PC/<?= $row["file_name"] ?>' 
                    />
                </td>
                <td class="file_name_mobile" style="display:none"><?= $row["file_name_mobile"] ?></td>
                <td class="img_tag">
                    <img height='130px' onclick='openModal(\"https://www.blackcombat-official.com/theme/blackcombat/img/main/PC/<?= $row["file_name_mobile"] ?>")' style='cursor:pointer'
                        src='https://www.blackcombat-official.com/theme/blackcombat/img/main/PC/<?= $row["file_name_mobile"] ?>' 
                    />
                </td>
                <td class="link"><input style="width: 100%;" class="link_input" value='<?= $row["link"] ?>' /></td>
                <td><button onclick='removeFighter(this)'>삭제</button></td>
            </tr>
        <? }else{ ?>
            <tr>
                <td style="display:none"><?= $row["img_order"] ?></td>
                 <td>
                    <img height='110px' onclick='openModal("https://www.blackcombat-official.com/theme/blackcombat/img/main/PC/<?= $row["file_name"] ?>")' style='cursor:pointer'
                        src='https://www.blackcombat-official.com/theme/blackcombat/img/main/PC/<?= $row["file_name"] ?>' 
                    />
                    <button onclick=editImg(this) style="display:block">편집</button>
                    <input style='display:none' type='file' name='fileToUpload' class='fileToUpload' onchange='editImgProcess(this,"PC", "<?= $row["img_order"] ?>")' />
                 </td>
                 <td>
                    <img height='110px' onclick='openModal("https://www.blackcombat-official.com/theme/blackcombat/img/main/PC/<?= $row["file_name_mobile"] ?>")' style='cursor:pointer'
                        src='https://www.blackcombat-official.com/theme/blackcombat/img/main/PC/<?= $row["file_name_mobile"] ?>' 
                    />
                    <button onclick=editImg(this) style="display:block">편집</button>
                    <input style='display:none' type='file' name='fileToUpload' class='fileToUpload' onchange='editImgProcess(this,"MOBILE", "<?= $row["img_order"] ?>")' />
                 </td>
                <td class="link"><?= $row["link"] ?></td>      
            </tr>
        <? } ?>
        
    <?php
        }
    ?>
    </tbody>
    </table>
    <? if($mgntType === '순서 관리'){?>
        <button onclick="addRow()">추가</button>
    <? } ?>
    
    
    
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
        newRow2.append(`<td class="file_name_mobile"></td>`); //파일명
        newRow2.append('<td class="img_tag">저장 후 이미지 등록탭에서 등록하세요</td>'); //이미지
        newRow2.append('<td class="link"><input type="text" class="link_input"></td>'); //링크
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
            const currentOrder = Array.from(document.querySelectorAll('.mainImgTable tbody tr')).map((tr,index)=> {
                // const isNew = tr.querySelector(".img_order_origin").textContent === 'new';
                return {
                    img_order : index,
                    link :tr.querySelector(".link_input").value,
                    file_name : tr.querySelector(".file_name").textContent,
                    file_name_mobile : tr.querySelector(".file_name_mobile").textContent
                }
            });
            console.log(currentOrder);


            $.ajax({
                type: 'POST',
                url: './home_img_mgnt/img_item_order_update.php', // 실제 추가를 처리하는 PHP 파일 경로
                data: {
                    "currentOrder": JSON.stringify(currentOrder)
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

    function editImg(el){
        if (confirm("이미지 선택 시 이미지가 즉시 교체됩니다. 계속하시겠습니까?")) {
            // 파일 선택 창 열기
            console.log($(el))
            $(el).parent().find('.fileToUpload').trigger("click");
        }
    }

    function editImgProcess(el, img_type, img_order){
               
               var file = el.files[0];
                       
               // FormData 객체 생성
               var formData = new FormData();
               formData.append("uploadFile", file);
               formData.append("img_type", img_type);
               formData.append("img_order", img_order);
       
                console.log(file);
               // Ajax로 파일 업로드 처리
               $.ajax({
                   url: "./home_img_mgnt/home_img_file_upload.php",
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
</script>

<?php
include_once(G5_ADMIN_PATH.'/admin.tail.php');