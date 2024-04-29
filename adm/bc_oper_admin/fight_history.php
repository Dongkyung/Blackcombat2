<?php
$sub_menu = "910600";
define('G5_IS_ADMIN', true);
include_once ('../../common.php');
include_once(G5_ADMIN_PATH.'/admin.lib.php');


include_once(G5_ADMIN_PATH.'/admin.head.php');

$g5['title'] = "전적 정보 관리";


$sql = "SELECT 
    his.seq
    , his.game_name
    , his.player1
    , base1.fighter_name as name1
    , his.player2
    , base2.fighter_name as name2
    , his.winner_player
    , base_w.fighter_name as name_w
    , his.result
    , his.play_date
    , his.lsttm
from tb_fight_history his
left join tb_fighter_base base1
	on player1 = base1.fighter_seq 
left join tb_fighter_base base2
	on player2  = base2.fighter_seq
left join tb_fighter_base base_w
	on winner_player = base_w.fighter_seq";
$result = sql_query($sql);


$fighterListSql = "SELECT fighter_seq, CONCAT(fighter_name,' (',fighter_ringname,')',' - ',fighter_type) as fighter_name from tb_fighter_base where del_yn=0";
$fighterListResult = sql_query($fighterListSql);
echo "<script type='text/javascript'>";
echo "let fighterList = [];";
while ($row = sql_fetch_array($fighterListResult)) {
    echo "fighterList.push({fighter_name:'".$row["fighter_name"]."',fighter_seq:".$row["fighter_seq"]."});";
}
echo "</script>"


?>
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

        .btn{
            height:40px;
        }

    .autocomplete{
        position:absolute;
        z-index:2;
        margin-top:40px;
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

      .ui-datepicker-calendar{
        background-color:white;
      }
      .ui-datepicker .ui-datepicker-prev span, .ui-datepicker .ui-datepicker-next span {
            color: transparent;
        }

    </style>



<script>
    

</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />  
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>




<h2>전적 정보</h2>

<table id="myTable">
    <!-- 테이블의 헤더 부분은 그대로 유지 -->
    <thead>
        <tr>
            <th style="display:none">seq</th>
            <th style="width:100px">대회명</th>
            <th style="width:70px">선수1</th>
            <th style="width:70px">선수2</th>
            <th style="width:70px">승자</th>
            <th style="width:150px">결과</th>
            <th style="width:50px">경기날짜</th>
            <th style="width:100px">등록일</th>
            <th style="width:100px">삭제</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = sql_fetch_array($result)) {
            $playDate = substr($row["play_date"], 0, 10);
            echo "<tr>";
            echo "<td style='display:none'>" . $row["seq"] . "</td>";
            echo "<td>" . $row["game_name"] . "</td>";
            echo "<td>" . $row["name1"] . "</td>";
            echo "<td>" . $row["name2"] . "</td>";
            echo "<td>" . $row["name_w"] . "</td>";
            echo "<td>" . $row["result"] . "</td>";
            echo "<td>" . $playDate . "</td>";
            echo "<td>" . $row["lsttm"] . "</td>";
            echo '<td><button onclick="deleteRow(' . $row["seq"] . ')">삭제</button></td>';
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  전적 등록
</button>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <input class="form-control" id="game_name" placeholder="경기이름">
                </div>
                <div style="display:flex">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" name="winner" aria-label="Radio button for following text input">
                            </div>
                        </div>
                        <input class="fighter_seq" id="fighter_seq1" hidden />
                        <input id="search_player1" type="text" class="form-control" placeholder="선수1"  aria-label="Text input with radio button">
                        <div class="autocomplete player1"></div>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" name="winner" aria-label="Radio button for following text input">
                            </div>
                        </div>
                        <input class="fighter_seq" id="fighter_seq2" hidden />
                        <input id="search_player2" type="text" class="form-control" placeholder="선수2" aria-label="Text input with radio button">
                        <div class="autocomplete player2"></div>
                    </div>
                </div>
                <div>
                    <input class="form-control" id="result" placeholder="경기상세결과">
                </div>
                <div>
                    <input class="form-control" id="datepicker" placeholder="경기날짜">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">취소</button>
                <button type="button" class="btn btn-primary" onclick="save()">저장</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

     $(document).ready(() => {
        applyAutoComplete("search_player1");
        applyAutoComplete("search_player2");
    });

    let table = new DataTable('#myTable', {
        pageLength: 25,
    });

    $('#datepicker').datepicker({
        dateFormat: 'yy-mm-dd' //달력 날짜 형태
           ,showOtherMonths: true //빈 공간에 현재월의 앞뒤월의 날짜를 표시
           ,showMonthAfterYear:true // 월- 년 순서가아닌 년도 - 월 순서
           ,changeYear: true //option값 년 선택 가능
           ,changeMonth: true //option값  월 선택 가능                
           ,buttonImageOnly: true //버튼 이미지만 깔끔하게 보이게함
           ,buttonText: "선택" //버튼 호버 텍스트              
           ,yearSuffix: "년" //달력의 년도 부분 뒤 텍스트
           ,monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'] //달력의 월 부분 텍스트
           ,monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'] //달력의 월 부분 Tooltip
           ,dayNamesMin: ['일','월','화','수','목','금','토'] //달력의 요일 텍스트
           ,dayNames: ['일요일','월요일','화요일','수요일','목요일','금요일','토요일'] //달력의 요일 Tooltip
           ,minDate: "-5Y" //최소 선택일자(-1D:하루전, -1M:한달전, -1Y:일년전)
           ,maxDate: "+5y" //최대 선택일자(+1D:하루후, -1M:한달후, -1Y:일년후)  
           ,hideIfNoPrevNext: false
    });

    //자동완성기능
    function applyAutoComplete(id){
        //자동완성기능
        const $search = document.querySelector("#"+id);
        let targetFighterSeqInput;
        let targetAutoComplete;

        if(id === "search_player1"){
            targetFighterSeqInput = $('#fighter_seq1')
            targetAutoComplete = document.querySelector(".autocomplete.player1");
        }else if(id === "search_player2"){
            targetFighterSeqInput = $('#fighter_seq2')
            targetAutoComplete = document.querySelector(".autocomplete.player2");
        }
        
        let nowIndex = 0;

        $search.onclick = () => {
            showList(fighterList, "", nowIndex, targetAutoComplete, id);
        };

        $search.onkeyup = (event) => {
            targetFighterSeqInput.val(-1);
            // 검색어
            const value = $search.value.trim();
            if(value === ""){
                showList(fighterList, "", nowIndex, targetAutoComplete, id);
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
                setData(matchDataList[nowIndex], $search, targetFighterSeqInput);
                // 초기화
                matchDataList.length = 0;
                break;

                //ESC
                case 27:
                $targetAutoComplete.innerHTML = "";                
                break;
                
                // 그외 다시 초기화
                default:
                nowIndex = 0;
                break;
            }

            // 리스트 보여주기
            showList(matchDataList, value, nowIndex, targetAutoComplete, id);
        };
    }
    
    const showList = (data, value, nowIndex, targetAutoComplete, id) => {
        console.log(data,value,nowIndex ) //
        // 정규식으로 변환
        const regex = new RegExp(`(${value})`, "g");

        
        targetAutoComplete.innerHTML = data
            .map(
            (label, index) => {
                let fighter_name = data[index].fighter_name;
                let tempStr = `${fighter_name}`;
                if(value === ""){
                    return `<div class='${nowIndex === index ? "active" : ""}' onclick="setDataOnClick('${data[index].fighter_seq}','`+data[index].fighter_name+`','`+id+`')">
                        ${label.fighter_name}
                    </div> `    
                }else{
                    return `<div class='${nowIndex === index ? "active" : ""}' onclick="setDataOnClick('${data[index].fighter_seq}','`+data[index].fighter_name+`','`+id+`')">
                        ${label.fighter_name.replace(regex, "<mark>$1</mark>")}
                    </div> `    
                }
                })
            .join("");
    }

    const setData = (fighterItem, searchEl, fighterSeqEl) => {
        searchEl.value = fighterItem.fighter_name;
        fighterSeqEl.val(fighterItem.fighter_seq);
        nowIndex = 0;
    }

    const setDataOnClick = (seq, name, id) => {
        let fighterItem = {
            fighter_seq : seq,
            fighter_name : name
        }

        const $search = document.querySelector("#"+id);
        let targetFighterSeqInput;
        let targetAutoComplete;

        if(id === "search_player1"){
            targetFighterSeqInput = $('#fighter_seq1')
            targetAutoComplete = document.querySelector(".autocomplete.player1");
        }else if(id === "search_player2"){
            targetFighterSeqInput = $('#fighter_seq2')
            targetAutoComplete = document.querySelector(".autocomplete.player2");
        }

        setData(fighterItem, $search, targetFighterSeqInput);
        showList([], '', 0 , targetAutoComplete,id );
    }

    let save = () => {
        let game_name = $("#game_name").val();
        let fighter_seq1 = $("#fighter_seq1").val();
        let fighter_seq2 = $("#fighter_seq2").val();
        let result = $("#result").val();
        let datepicker = $("#datepicker").val();
        
        let winner_radio_el = $("input[name = 'winner']:checked");

        if(winner_radio_el.length === 0){
            alert("승자를 선택하세요.");
            return;
        }
        
        if(game_name === "" || fighter_seq1 === "" || fighter_seq2 === "" || result === "" || datepicker === ""){
            alert("필수값이 누락되었습니다.");
            return;
        }

        let winner_seq = $(winner_radio_el).parent().parent().parent().find(".fighter_seq").val();

        var newHistoryData = {
            game_name : game_name,
            fighter_seq1: fighter_seq1,
            fighter_seq2: fighter_seq2,
            winner_seq: winner_seq,
            result : result,
            play_date : datepicker
        };
        if(confirm("등록 하시겠습니까?")){
            $.ajax({
                type: 'POST',
                url: './fighter/create_fight_history.php', // 실제 추가를 처리하는 PHP 파일 경로
                data: newHistoryData,
                success: function(response) {
                    // 서버에서 추가 성공한 경우
                    location.reload();
                },
                error: function(error) {
                    console.error('Error adding data:', error);
                    // 에러 처리 (실제 프로덕션에서는 사용자에게 알림 등을 보여주어야 함)
                }
            });
        }
    }

    function deleteRow(historySeq) {
    if(confirm("삭제 하시겠습니까?")){
        $.ajax({
            type: 'POST',
            url: './fighter/delete_fight_history.php', // 실제 삭제를 처리하는 PHP 파일 경로
            data: { historySeq: historySeq },
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
</script>

<?php
include_once(G5_ADMIN_PATH.'/admin.tail.php');