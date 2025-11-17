<?php
$sub_menu = "910300";
define('G5_IS_ADMIN', true);
include_once ('../../common.php');
include_once(G5_ADMIN_PATH.'/admin.lib.php');
include_once(G5_ADMIN_PATH.'/admin.head.php');


/******************** 선수타입 정의 ***************/
$fighterType = isset($_GET['fighterType']) ? $_GET['fighterType'] : '프로';
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

if (array_key_exists($fighterType, $fighterTypeItems)) {
    $fighterTypeItems[$fighterType] = 'on';
}

/******************** 체급타입 정의 ***************/
$division = isset($_GET['division']) ? $_GET['division'] : '언더그라운드'; // 현재 URL에서 division 값 취득

$menuItems = array(
    '언더그라운드' => '',
    '플라이급' => '',
    '밴텀급' => '',
    '페더급' => '',
    '라이트급' => '',
    '웰터급' => '',
    '미들급' => '',
    '중량급' => '',
    '여성부' => ''
);

// 현재 division에 해당하는 메뉴에 "on" 클래스 추가
if (array_key_exists($division, $menuItems)) {
    $menuItems[$division] = 'on';
}


$fighterListSql = "SELECT fighter_seq, CONCAT(fighter_name,' (',fighter_ringname,')') as fighter_name from tb_fighter_base where del_yn=0 AND fighter_type=$fighterTypeNum";
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

<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="imgModal">
</div>

<ul class="anchor">
    <? foreach ($fighterTypeItems as $fighterTypeName => $class) : ?>
        <li class="<?= $class ?>"><a href="?fighterType=<?= urlencode($fighterTypeName) ?>"><?= $fighterTypeName ?></a></li>
    <? endforeach; ?>
</ul>

<ul class="anchor">
    <? foreach ($menuItems as $divisionName => $class) : ?>
        <li class="<?= $class ?>"><a href="?division=<?= urlencode($divisionName) ?>&fighterType=<?= urlencode($fighterType) ?>"><?= $divisionName ?></a></li>
    <? endforeach; ?>
</ul>


<div>
    <div style="display:flex">
        <h1 style="font-size:1.5rem; padding:10px;"><?=$division?> 랭킹</h1>
        <button style="margin-left:30px; width:100px;" onclick="saveRanking();">저장</button>
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
    WHERE division='$division' AND ranking_type = $fighterTypeNum
    ORDER BY 
    CASE WHEN ranking = 'c' THEN 0  
    ELSE CAST(ranking AS UNSIGNED) END, ranking;";
    $result = sql_query($sql);
    $numRows = mysqli_num_rows($result);
    ?>
    <table style="font-size:0.8rem; position:absolute;">
    <thead><tr><th style="width:50px">순위</th><th</tr>    
    <tbody>
        <? for($i=0; $i<$numRows; $i++){ ?>
            <tr><td><?= $i ?></td></tr>
        <? } ?>
    </tbody>
    </table>

    <table style="font-size:0.8rem; margin-left: 50px;" class="rankingTable">
        <thead>
        <!-- 테이블의 헤더 부분은 그대로 유지 -->
        <tr>
            <th style="display:none">위치값</th>
            <th style="width:80px">기존순위</th>
            <th style="display:none">선수SEQ</th>
            <th style="width:auto">이름</th>
            <th style="width:auto">링네임</th>
            <th style="width:80px">순위변동</th>
            <th style="width:60px">이미지</th>
            <th style="width:150px">랭킹수정날짜</th>
            <th style="width:150px">상태변경</th>
            <th style="width:150px">상태변경날짜</th>
            <th style="width:150px">메모</th>
            <th>삭제</th> 
        </tr>
        </thead>
        <!-- 테이블 내용 부분은 그대로 유지하며, 수정 버튼 클릭 시 editRow 함수 호출 -->
        <tbody>
    <?php
        while ($row = sql_fetch_array($result)) {
            $rankingImgPath = "https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$row['fighter_seq']."/".$row['ranking_image_name'];
    ?>
        <tr>
            <td style="display:none"><?= $row["num"] ?></td>
            <td><?= $row["ranking"] ?></td>
            <td class="fighterSeq" style="display:none"><?= $row["fighter_seq"] ?></td>
            <td class="fighterName" data-name-color="<?= $row["fighter_status"] ?>"><b><?= $row["fighter_name"] ?></b></td>
            <td><?= $row["fighter_ringname"] ?></td>
            <td><input style="width:50px" value='<?= $row["ranking_updown"] ?>' /></td>
            <td style="text-align:center"><img width='40px' onclick='openModal("<?=$rankingImgPath ?>")' style='cursor:pointer'
                     src='<?= $rankingImgPath ?>'
                     onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/fighter_blank.png'"
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
    <form class='addFighterForm'>
        <input id="fighter_seq" hidden />
        <input type="text" id="search" placeholder="선수이름을 입력하세요." autocomplete="off" style="width:200px; float:left"/>
        <div class="autocomplete"></div>
        <button type='button' onclick="addfighter()" style="float:left">입력</button>
    </form>
    
    <!-- 자동완성 단어 리스트 -->
    
    
</div>



<script type="text/javascript">


    $(document).ready(() => {
        applyAutoComplete();
    });

    let initialOrder = Array.from(document.querySelectorAll('.rankingTable tbody tr'))
    .map((tr, index) => ({ index, rank: parseInt(tr.cells[0].textContent) }));

  function updateRankingUpDown() {
    const currentOrder = Array.from(document.querySelectorAll('.rankingTable tbody tr'))
      .map((tr, index) => ({ index, rank: parseInt(tr.cells[0].textContent) }));

    currentOrder.forEach((current, currentIndex) => {
      const initial = initialOrder.find(item => item.rank === current.rank);
      const difference = initial.index - currentIndex;

      tr = document.querySelectorAll('.rankingTable tbody tr')[currentIndex];
      tr.cells[5].querySelector('input').value = difference;
    });
  }

  document.addEventListener('DOMContentLoaded', () => {
    // Attach drag and drop event listeners
    const tbody = document.querySelector('.rankingTable tbody');

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
    // document.querySelectorAll('.rankingTable tbody tr').forEach((row) => {
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
            $('#fighter_seq').val(-1);
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
        $('#fighter_seq').val(fighterItem.fighter_seq);
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

    function addfighter(){
        let fighter_seq = $('.addFighterForm').find('#fighter_seq').val();
        if(fighter_seq === '' || fighter_seq === '-1'){
            alert("올바른 선수를 선택해주세요.");
            return;
        }
        let formData = {
            ranking_type : '<?=$fighterTypeNum?>',
            fighter_seq : fighter_seq,
            division : '<?= $division ?>'
        }
        $.ajax({
            type: 'POST',
            url: './ranking/create_rankingInfo.php', // 실제 추가를 처리하는 PHP 파일 경로
            data: formData,
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

    function removeFighter(el){
        if(confirm("삭제하시겠습니까?")){
            $(el).parent().parent().remove();
            updateRankingUpDown();    
        }
    }

    function saveRanking(){
        if(confirm("저장하시겠습니까?")){
            const currentRanking = Array.from(document.querySelectorAll('.rankingTable tbody tr')).map((tr,index)=>(
                {
                    ranking : index,
                    fighter_seq : parseInt(tr.cells[2].textContent),
                    ranking_updown: tr.cells[5].querySelector('input').value,
                    memo_1: tr.cells[10].querySelector('input').value,
                }
            ));
            console.log(currentRanking);


            $.ajax({
                type: 'POST',
                url: './ranking/update_rankingInfo.php', // 실제 추가를 처리하는 PHP 파일 경로
                data: {
                    "currentRanking": JSON.stringify(currentRanking),
                    "division": '<?= $division ?>',
                    "rankingType": '<?=$fighterTypeNum?>',
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
            document.querySelectorAll('.rankingTable tbody tr').forEach((row) => {
                row.setAttribute('draggable', 'true');
            });
        }else{
            document.querySelectorAll('.rankingTable tbody tr').forEach((row) => {
                row.setAttribute('draggable', 'false');
            });
        }
        fillPlayer();
    }
</script>

<?php
include_once(G5_ADMIN_PATH.'/admin.tail.php');