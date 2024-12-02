<?php
$sub_menu = "910500";
define('G5_IS_ADMIN', true);
include_once ('../../common.php');
include_once(G5_ADMIN_PATH.'/admin.lib.php');
include_once(G5_ADMIN_PATH.'/admin.head.php');

$g5['title'] = "전적 정보 관리";


$sql = "SELECT 
his.seq
, his.event_seq
, event.event_name_short as game_name 
, his.fight_name
, his.video_url
, his.order
, his.player1
, base1.fighter_name as name1
, his.player2
, base2.fighter_name as name2
, his.winner_player
, base_w.fighter_name as name_w
, his.result
, his.play_date
, sc.score_seq
, vote1
, vote2
, his.lsttm
from tb_fight_history his
left join tb_fighter_base base1
on player1 = base1.fighter_seq 
left join tb_fighter_base base2
on player2  = base2.fighter_seq
left join tb_fighter_base base_w
on winner_player = base_w.fighter_seq
left join tb_event event
on event.event_seq = his.event_seq
left join tb_score_card sc
on his.seq = sc.fight_history_seq;";
$result = sql_query($sql);

echo "<script type='text/javascript'>";
echo "let historyList = [];";
while ($row = sql_fetch_array($result)) {
    echo "historyList.push({
        seq:'".$row["seq"]."'
        ,event_seq:'".$row["event_seq"]."'
        ,fight_name:'".$row["fight_name"]."'
        ,video_url:'".$row["video_url"]."'
        ,order:'".$row["order"]."'
        ,player1:'".$row["player1"]."'
        ,name1:'".$row["name1"]."'
        ,player2:'".$row["player2"]."'
        ,name2:'".$row["name2"]."'
        ,winner_player:'".$row["winner_player"]."'
        ,name_w:'".$row["name_w"]."'
        ,result:`".$row["result"]."`
        ,vote1:`".$row["vote1"]."`
        ,vote2:`".$row["vote2"]."`
        ,play_date:'".$row["play_date"]."'});";
}
echo "</script>";


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


    #modalBackground_score table{
        width:100%;
        border-collapse: collapse;
        border-spacing: 0;
        border:2px solid black;
        background-color:#dedede;
    }

    #modalBackground_score tr.scoreDetail{
        /* background-color:#dedede; */
    }

    #modalBackground_score td{
        border: 1px solid #999999;
        text-align:center;
        padding:unset;
        font-size:0.8rem;
        line-height:1.7rem;
    }


    #modalBackground_score td>div{
        background-color:#aaaaaa;
    }

    #modalBackground_score .large-txt{
        font-size:0.9rem;
        font-weight:bold;
    }

    .score_input{
        width:45px;
        text-align:center;
    }

    .total_score_input{
        width:90px;
        text-align:center;
    }

    .referee_name{
        width:100%;
        text-align:center;
    }

    .overtime_td .btn-group{
        height:30px
    }
    .overtime_td .btn{
        height: 30px;
        line-height: unset;
        font-size: 10px;
        padding: 0px 10px;
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



<h2>전적 정보</h2>

<table id="myTable" class="hover">
    <!-- 테이블의 헤더 부분은 그대로 유지 -->
    <thead>
        <tr>
            <th style="width:30px">seq</th>
            <th style="width:100px">대회명</th>
            <th style="width:100px">대진명</th>
            <th style="width:80px">경기순서</th>
            <th style="width:70px">선수1</th>
            <th style="width:70px">선수2</th>
            <th style="width:70px">승자</th>
            <th style="width:150px">결과</th>
            <th style="width:100px">경기날짜</th>
            <th style="width:50px">경기URL</th>
            <th style="width:50px">채점표</th>
            <th style="width:150px">등록일</th>
            <th style="width:50px">수정</th>
            <th style="width:50px">삭제</th>
        </tr>
    </thead>
    <tbody>
        <?php
        mysqli_data_seek($result, 0);
        while ($row = sql_fetch_array($result)) {
            $playDate = substr($row["play_date"], 0, 10);
            echo "<tr>";
            echo "<td>" . $row["seq"] . "</td>";
            echo "<td>" . $row["game_name"] . "</td>";
            echo "<td>" . $row["fight_name"] . "</td>";
            echo "<td>" . $row["order"] . "</td>";
            echo "<td>" . $row["name1"] . "</td>";
            echo "<td>" . $row["name2"] . "</td>";
            echo "<td>" . $row["name_w"] . "</td>";
            echo "<td>" . $row["result"] . "</td>";
            echo "<td>" . $playDate . "</td>";
            echo "<td>" . $row["video_url"] . "</td>";
            if($row["score_seq"] === null) {
                echo "<td style='font-size:1.2rem; color:green; text-align:center;'>";
                echo "<a href='javascript:openScoreCard(\"new\", " . $row['seq'] . ",null,\"" . $row["name1"] . "\",\"" . $row["name2"] . "\")'>";
                echo "  <i class='bi bi-plus-square-fill'></i>";
                echo "</a>";
                echo "</td>";
                
            }else{
                echo "<td style='font-size:1.2rem; color:blue; text-align:center;'>";
                echo "<a href='javascript:openScoreCard(\"update\", ".$row['seq'].",".$row['score_seq'].",\"" . $row["name1"] . "\",\"" . $row["name2"] . "\")'>";
                echo "  <i class='bi bi-file-earmark-spreadsheet'></i>";
                echo "</a>";
                echo "</td>";
                // echo "<td>" . $row["score_seq"] . "</td>";
            }
            echo "<td>" . $row["lsttm"] . "</td>";
            echo '<td><button class="btn btn-sm btn-success" onclick="showUpdateModal(' . $row["seq"] . ')">수정</button></td>';
            echo '<td><button class="btn btn-sm btn-danger" onclick="deleteRow(' . $row["seq"] . ')">삭제</button></td>';
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<button type="button" class="btn btn-primary" onclick="showCreateModal()">
  전적 등록
</button>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width:600px" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">전적 등록 및 수정</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input id="history_seq" hidden>
                <div style="display:flex">
                    <input style="flex: 1 1 0" class="form-control" id="event_seq" oninput="findEventnameByEventSeq(this.value)" placeholder="이벤트 SEQ">
                    <input style="flex: 3 1 0" class="form-control" id="event_name" disabled placeholder="경기이름">
                    <input style="flex: 1 1 0" class="form-control" id="order" placeholder="경기순서">
                </div>
                <div>
                    <input class="form-control" id="fight_name" placeholder="대진명">
                </div>
                <div>
                    <input class="form-control" id="video_url" placeholder="경기링크">
                </div>
                <div style="display:flex">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text" style="height: 100%;">
                                <input type="radio" name="winner" aria-label="Radio button for following text input">
                            </div>
                        </div>
                        <input class="fighter_seq" id="fighter_seq1" hidden />
                        <input id="search_player1" type="text" class="form-control" placeholder="선수1"  aria-label="Text input with radio button">
                        <div class="autocomplete player1"></div>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"  style="height: 100%;">
                                <input type="radio" name="winner" aria-label="Radio button for following text input">
                            </div>
                        </div>
                        <input class="fighter_seq" id="fighter_seq2" hidden />
                        <input id="search_player2" type="text" class="form-control" placeholder="선수2" aria-label="Text input with radio button">
                        <div class="autocomplete player2"></div>
                    </div>
                </div>
                <div style="display:flex">
                    <div class="input-group">
                        <span class="input-group-text">선수1 승자투표</span>
                        <input type="text" id="vote1" class="form-control" placeholder="Server" aria-label="Server">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text">선수2 승자투표</span>
                        <input type="text" id="vote2" class="form-control" placeholder="Server" aria-label="Server">
                    </div>
                </div>
                <div>
                    <input class="form-control" id="datepicker" placeholder="경기날짜">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="modal-cancel" class="btn btn-secondary" data-bs-dismiss="modal">취소</button>
                <button type="button" id="modal-submit" class="btn btn-primary">동적입력</button>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="modalBackground_score" tabindex="-1" role="dialog" aria-labelledby="modalBackground_score" aria-hidden="true">
    <div class="modal-dialog" style="max-width:800px" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Score Card</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div style="display:flex; gap:10px; margin-top:20px; font-size:0.8rem">
                    <div style="flex:1 0 0; ">
                        <table >
                            <tr>
                                <td colspan="5">
                                    <div>
                                        <span class="large-txt">부심</span><br>
                                        <input class="referee_name" id='referee_name1'></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="background-color:white; font-weight:bold;" class="large-txt">화이트</td>
                                <td></td>
                                <td colspan="2" style="background-color:#333; color:#dfdfdf; font-weight:bold;" class="large-txt">블랙</td>
                            </tr>
                            <tr>
                                <td style="background-color:white; font-weight:bold;" colspan="2" class="score_fighter_name1">유수영</td>
                                <td></td>
                                <td style="background-color:#333; color:#dfdfdf; font-weight:bold;"colspan="2" class="score_fighter_name2">모아이</td>
                            </tr>
                            <tr>
                                <td class="large-txt">점수</td>
                                <td class="large-txt">감점</td>
                                <td class="large-txt">라운드</td>
                                <td class="large-txt">점수</td>
                                <td class="large-txt">감점</td>
                            </tr>
                            <tr class="scoreDetail">
                                <td><input class='score_input' id='score111'></td>
                                <td><input class='score_input' id='minus_score111'></td>
                                <td class="large-txt">1</td>
                                <td><input class='score_input' id='score121'></td>
                                <td><input class='score_input' id='minus_score121'></td>
                            </tr>
                            <tr class="scoreDetail">
                                <td><input class='score_input' id='score112'></td>
                                <td><input class='score_input' id='minus_score112'></td>
                                <td class="large-txt">2</td>
                                <td><input class='score_input' id='score122'></td>
                                <td><input class='score_input' id='minus_score122'></td>
                            </tr>
                            <tr class="scoreDetail">
                                <td><input class='score_input' id='score113'></td>
                                <td><input class='score_input' id='minus_score113'></td>
                                <td class="large-txt">3</td>
                                <td><input class='score_input' id='score123'></td>
                                <td><input class='score_input' id='minus_score123'></td>
                            </tr>
                            <tr class="scoreDetail">
                                <td colspan="2"><input class='total_score_input' id='total_score11'></td>
                                <td class="large-txt">Total</td>
                                <td colspan="2"><input class='total_score_input' id='total_score12'></td>
                            </tr>
                            
                            <tr>
                                <td colspan="5" class="overtime_td">
                                    <div style="display:flex;">
                                        <div style="flex:2 0 0;" class="large-txt">연장회의 여부</div>
                                        <div style="flex:1 0 0;">
                                            <div class="btn-group" role="group" id="overtimeYn11" aria-label="Basic radio toggle button group">
                                                <input type="radio" class="btn-check " name="btnradio11" id="btnradio111" date="0" autocomplete="off" checked>
                                                <label class="btn btn-outline-danger sm" for="btnradio111">X</label>

                                                <input type="radio" class="btn-check " name="btnradio11" id="btnradio112" date="1" autocomplete="off">
                                                <label class="btn btn-outline-success sm" for="btnradio112">O</label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input class='score_input' id='score114'></td>
                                <td><input class='score_input' id='minus_score114'></td>
                                <td class="large-txt">4</td>
                                <td><input class='score_input' id='score124'></td>
                                <td><input class='score_input' id='minus_score124'></td>
                            </tr>
                        </table>
                    </div>
                    <div style="flex:1 0 0; ">
                        <table >
                            <tr>
                                <td colspan="5">
                                    <div>
                                        <span class="large-txt">부심</span><br>
                                        <input class="referee_name" id='referee_name2'></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="background-color:white; font-weight:bold;" class="large-txt">화이트</td>
                                <td></td>
                                <td colspan="2" style="background-color:#333; color:#dfdfdf; font-weight:bold;" class="large-txt">블랙</td>
                            </tr>
                            <tr>
                                <td style="background-color:white; font-weight:bold;" colspan="2" class="score_fighter_name1">유수영</td>
                                <td></td>
                                <td style="background-color:#333; color:#dfdfdf; font-weight:bold;"colspan="2" class="score_fighter_name2">모아이</td>
                            </tr>
                            <tr>
                                <td class="large-txt">점수</td>
                                <td class="large-txt">감점</td>
                                <td class="large-txt">라운드</td>
                                <td class="large-txt">점수</td>
                                <td class="large-txt">감점</td>
                            </tr>
                            <tr class="scoreDetail">
                                <td><input class='score_input' id='score211'></td>
                                <td><input class='score_input' id='minus_score211'></td>
                                <td class="large-txt">1</td>
                                <td><input class='score_input' id='score221'></td>
                                <td><input class='score_input' id='minus_score221'></td>
                            </tr>
                            <tr class="scoreDetail">
                                <td><input class='score_input' id='score212'></td>
                                <td><input class='score_input' id='minus_score212'></td>
                                <td class="large-txt">2</td>
                                <td><input class='score_input' id='score222'></td>
                                <td><input class='score_input' id='minus_score222'></td>
                            </tr>
                            <tr class="scoreDetail">
                                <td><input class='score_input' id='score213'></td>
                                <td><input class='score_input' id='minus_score213'></td>
                                <td class="large-txt">3</td>
                                <td><input class='score_input' id='score223'></td>
                                <td><input class='score_input' id='minus_score223'></td>
                            </tr>
                            <tr class="scoreDetail">
                                <td colspan="2"><input class='total_score_input' id='total_score21'></td>
                                <td class="large-txt">Total</td>
                                <td colspan="2"><input class='total_score_input' id='total_score22'></td>
                            </tr>
                            
                            <tr>
                                <td colspan="5" class="overtime_td">
                                    <div style="display:flex;">
                                        <div style="flex:2 0 0;" class="large-txt">연장회의 여부</div>
                                        <div style="flex:1 0 0;">
                                            <div class="btn-group" role="group" id="overtimeYn21" aria-label="Basic radio toggle button group">
                                                <input type="radio" class="btn-check " name="btnradio21" id="btnradio211" date="0" autocomplete="off" checked>
                                                <label class="btn btn-outline-danger sm" for="btnradio211">X</label>

                                                <input type="radio" class="btn-check " name="btnradio21" id="btnradio212" date="1" autocomplete="off">
                                                <label class="btn btn-outline-success sm" for="btnradio212">O</label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input class='score_input' id='score214'></td>
                                <td><input class='score_input' id='minus_score214'></td>
                                <td class="large-txt">4</td>
                                <td><input class='score_input' id='score224'></td>
                                <td><input class='score_input' id='minus_score224'></td>
                            </tr>
                        </table>
                    </div>
                    <div style="flex:1 0 0; ">
                        <table >
                            <tr>
                                <td colspan="5">
                                    <div>
                                        <span class="large-txt">부심</span><br>
                                        <input class="referee_name" id='referee_name3'></input>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="background-color:white; font-weight:bold;" class="large-txt">화이트</td>
                                <td></td>
                                <td colspan="2" style="background-color:#333; color:#dfdfdf; font-weight:bold;" class="large-txt">블랙</td>
                            </tr>
                            <tr>
                                <td style="background-color:white; font-weight:bold;" colspan="2" class="score_fighter_name1">유수영</td>
                                <td></td>
                                <td style="background-color:#333; color:#dfdfdf; font-weight:bold;"colspan="2" class="score_fighter_name2">모아이</td>
                            </tr>
                            <tr>
                                <td class="large-txt">점수</td>
                                <td class="large-txt">감점</td>
                                <td class="large-txt">라운드</td>
                                <td class="large-txt">점수</td>
                                <td class="large-txt">감점</td>
                            </tr>
                            <tr class="scoreDetail">
                                <td><input class='score_input' id='score311'></td>
                                <td><input class='score_input' id='minus_score311'></td>
                                <td class="large-txt">1</td>
                                <td><input class='score_input' id='score321'></td>
                                <td><input class='score_input' id='minus_score321'></td>
                            </tr>
                            <tr class="scoreDetail">
                                <td><input class='score_input' id='score312'></td>
                                <td><input class='score_input' id='minus_score312'></td>
                                <td class="large-txt">2</td>
                                <td><input class='score_input' id='score322'></td>
                                <td><input class='score_input' id='minus_score322'></td>
                            </tr>
                            <tr class="scoreDetail">
                                <td><input class='score_input' id='score313'></td>
                                <td><input class='score_input' id='minus_score313'></td>
                                <td class="large-txt">3</td>
                                <td><input class='score_input' id='score323'></td>
                                <td><input class='score_input' id='minus_score323'></td>
                            </tr>
                            <tr class="scoreDetail">
                                <td colspan="2"><input class='total_score_input' id='total_score31'></td>
                                <td class="large-txt">Total</td>
                                <td colspan="2"><input class='total_score_input' id='total_score32'></td>
                            </tr>
                            
                            <tr>
                                <td colspan="5" class="overtime_td">
                                    <div style="display:flex;">
                                        <div style="flex:2 0 0;" class="large-txt">연장회의 여부</div>
                                        <div style="flex:1 0 0;">
                                            <div class="btn-group" role="group" id="overtimeYn31" aria-label="Basic radio toggle button group">
                                                <input type="radio" class="btn-check " name="btnradio31" id="btnradio311" date="0" autocomplete="off" checked>
                                                <label class="btn btn-outline-danger sm" for="btnradio311">X</label>

                                                <input type="radio" class="btn-check " name="btnradio31" id="btnradio312" date="1" autocomplete="off">
                                                <label class="btn btn-outline-success sm" for="btnradio312">O</label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input class='score_input' id='score314'></td>
                                <td><input class='score_input' id='minus_score314'></td>
                                <td class="large-txt">4</td>
                                <td><input class='score_input' id='score324'></td>
                                <td><input class='score_input' id='minus_score324'></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="modal-cancel-scorecard" class="btn btn-secondary" data-bs-dismiss="modal">취소</button>
                <button type="button" id="modal-submit-scorecard" class="btn btn-primary">동적입력</button>
            </div>
        </div>
    </div>
</div>


<div id="" class="modal-background" onclick="closeScoreCard(event)">
        <div id="modal_score" class="modal">
            <span id="closeModal_score" class="close-button" onclick="closeScoreCard(event)">&times;</span>
            <h2></h2>
            
        </div>
    </div>

<script type="text/javascript">

     $(document).ready(() => {
        applyAutoComplete("search_player1");
        applyAutoComplete("search_player2");
    });

    const scoreDataKeys = ["referee_name1","score111","minus_score111","score112","minus_score112","score113","minus_score113","total_score11","score114","minus_score114","score121","minus_score121","score122","minus_score122","score123","minus_score123","total_score12","score124","minus_score124","referee_name2","score211","minus_score211","score212","minus_score212","score213","minus_score213","total_score21","score214","minus_score214","score221","minus_score221","score222","minus_score222","score223","minus_score223","total_score22","score224","minus_score224","referee_name3","score311","minus_score311","score312","minus_score312","score313","minus_score313","total_score31","score314","minus_score314","score321","minus_score321","score322","minus_score322","score323","minus_score323","total_score32","score324","minus_score324","overtimeYn11","overtimeYn21","overtimeYn31"];

    $(function() {	
		$('#datepicker').datepicker({
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

    let table = new DataTable('#myTable', {
        pageLength: 25,
    });

    

    // 날짜를 동적으로 설정하는 함수
    function setDatepickerDate(dateStr) {
        $("#datepicker").datepicker("setDate", dateStr);
    }




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


    function showCreateModal() {
        $("#modal-submit").off("click");
        
        $("#event_seq").val("");
        $("#event_name").val("");
        $("#fight_name").val("");
        $("#video_url").val("");
        $("#order").val("");
        $("#fighter_seq1").val("");
        $("#fighter_seq2").val("");
        $("#search_player1").val("");
        $("#search_player2").val("");
        $("#vote1").val("");
        $("#vote2").val("");
        $("#result").val("");
        $("#datepicker").datepicker("setDate", new Date());
        $("input[name = 'winner']").prop("checked",false)

        $("#modal-submit").text("등록");
        $("#modal-submit").on("click", () => {
            createFightHistory();
        })

        $("#exampleModal").modal('show'); 
    }

    function showUpdateModal(historySeq) {
        $("#modal-submit").off("click");
        const targetHistory = historyList.filter(item => item.seq === String(historySeq))[0];
        console.log(targetHistory);
        $("#history_seq").val(targetHistory.seq);
        $("#event_seq").val(targetHistory.event_seq);
        $("#fight_name").val(targetHistory.fight_name);
        $("#video_url").val(targetHistory.video_url);
        $("#order").val(targetHistory.order);
        $("#fighter_seq1").val(targetHistory.player1);
        $("#fighter_seq2").val(targetHistory.player2);
        $("#search_player1").val(targetHistory.name1);
        $("#search_player2").val(targetHistory.name2);
        $("#vote1").val(targetHistory.vote1);
        $("#vote2").val(targetHistory.vote2);
        $("#result").val(targetHistory.result);
        $("#datepicker").datepicker("setDate", targetHistory.play_date.split(' ')[0]);
        
        if(targetHistory.player1 === targetHistory.winner_player){
            $($("input[name = 'winner']").get(0)).prop("checked",true)
        }else if(targetHistory.player2 === targetHistory.winner_player){
            $($("input[name = 'winner']").get(1)).prop("checked",true)
        }
        

        $("#modal-submit").text("수정");
        $("#modal-submit").on("click", () => {
            updateFightHistory();
        })

        findEventnameByEventSeq(targetHistory.event_seq);

        $("#exampleModal").modal('show'); 

    }

    let createFightHistory = () => {
        let event_seq = $("#event_seq").val();
        let fight_name = $("#fight_name").val();
        let video_url = $("#video_url").val();
        let order = $("#order").val();
        let fighter_seq1 = $("#fighter_seq1").val();
        let fighter_seq2 = $("#fighter_seq2").val();
        let result = $("#result").val();
        let datepicker = $("#datepicker").val();
        
        let winner_radio_el = $("input[name = 'winner']:checked");

        let winner_seq = null;
    
        if(winner_radio_el.length > 0){
            winner_seq = $(winner_radio_el).parent().parent().parent().find(".fighter_seq").val();
        }
        
        if(event_seq === "" || order === "" || fighter_seq1 === "" || fighter_seq2 === "" || datepicker === ""){
            alert("필수값이 누락되었습니다.");
            return;
        }

        var newHistoryData = {
            event_seq : event_seq,
            fight_name : fight_name,
            video_url : video_url,
            order : order,
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

    let updateFightHistory = () => {
        let history_seq = $("#history_seq").val();
        let event_seq = $("#event_seq").val();
        let fight_name = $("#fight_name").val();
        let video_url = $("#video_url").val();
        let order = $("#order").val();
        let fighter_seq1 = $("#fighter_seq1").val();
        let fighter_seq2 = $("#fighter_seq2").val();
        let vote1 = $("#vote1").val();
        let vote2 = $("#vote2").val();
        let result = $("#result").val();
        let datepicker = $("#datepicker").val();
        
        let winner_radio_el = $("input[name = 'winner']:checked");

        let winner_seq = null;
    
        if(winner_radio_el.length > 0){
            winner_seq = $(winner_radio_el).parent().parent().parent().find(".fighter_seq").val();
        }
        
        if(event_seq === "" || order === "" || fighter_seq1 === "" || fighter_seq2 === "" || datepicker === ""){
            alert("필수값이 누락되었습니다.");
            return;
        }

        var newHistoryData = {
            history_seq: history_seq,
            event_seq : event_seq,
            fight_name : fight_name,
            video_url : video_url,
            order : order,
            fighter_seq1: fighter_seq1,
            fighter_seq2: fighter_seq2,
            winner_seq: winner_seq,
            vote1 : vote1,
            vote2 : vote2,
            result : result,
            play_date : datepicker
        };
        console.log(newHistoryData);
        if(confirm("수정 하시겠습니까?")){
            $.ajax({
                type: 'POST',
                url: './fighter/update_fight_history.php', // 실제 추가를 처리하는 PHP 파일 경로
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
function findEventnameByEventSeq(eventSeq){
        console.log(eventSeq);
        $.ajax({
                type: 'GET',
                url: './event/find_event_by_seq.php?event_seq='+eventSeq, // 실제 추가를 처리하는 PHP 파일 경로
                success: function(response) {
                    // 서버에서 추가 성공한 경우
                    $("#event_name").val(response);
                    console.log(response); // 추가 성공한 경우 콘솔에 출력 (디버깅용)
                    // location.reload();
                },
                error: function(error) {
                    console.error('Error adding data:', error);
                    // 에러 처리 (실제 프로덕션에서는 사용자에게 알림 등을 보여주어야 함)
                }
            });
    }


    let openScoreCard = (action, historySeq, scoreSeq,name1, name2) => {
            $("#modal-submit-scorecard").off("click");
            if(action === 'new'){
                scoreDataKeys.forEach(key => {
                    if(key.includes("overtimeYn")){
                        $(`#${key} .btn-check[date=0]`).prop("checked", true)   
                    }else{
                        $(`#${key}`).val('');
                    }
                });

                $("#modal-submit-scorecard").text("등록");
                $("#modal-submit-scorecard").on("click", () => {
                    createScore(historySeq);
                })
                $(".score_fighter_name1").text(name2);
                $(".score_fighter_name2").text(name1);
                $("#modalBackground_score").modal('show'); 
            }else if(action === 'update'){

                // alert('/findScore.php?score_seq=' + scoreSeq)
                $.ajax({
                    url: '/findScore.php?score_seq=' + scoreSeq,
                    type: 'GET',
                    dataType: 'json',
                    success: function (info) {
                        console.log(info);
                        Object.keys(info).forEach(key => {
                            if(key.includes("overtimeYn")){
                                $(`#${key} .btn-check[date=${info[key]}]`).prop("checked", true)
                                
                            }else{
                                $(`#${key}`).val(info[key]);
                            }
                        });
                        $(".score_fighter_name1").text(name2);
                        $(".score_fighter_name2").text(name1);

                        
                    },
                    error: function (error) {
                        console.error('API 호출 실패:', error);
                    }
                });

                $("#modal-submit-scorecard").text("수정");
                $("#modal-submit-scorecard").on("click", () => {
                    updateScore(scoreSeq);
                })

                $("#modalBackground_score").modal('show'); 
            }
        }

        let createScore = (historySeq) => {
            var scoreCardDate = {historySeq : historySeq };
            scoreDataKeys.forEach(key => {
                if(key.includes("overtimeYn")){
                    scoreCardDate[key] = $(`#${key} .btn-check:checked`).attr("date");
                }else{
                    scoreCardDate[key] = $(`#${key}`).val();
                }
                
            });
            if(confirm("등록 하시겠습니까?")){
                $.ajax({
                    type: 'POST',
                    url: './score-card/create_score_card.php', // 실제 추가를 처리하는 PHP 파일 경로
                    data: scoreCardDate,
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

        let updateScore = (scoreSeq) => {
            var scoreCardDate = {scoreSeq : scoreSeq };
            scoreDataKeys.forEach(key => {
                if(key.includes("overtimeYn")){
                    scoreCardDate[key] = $(`#${key} .btn-check:checked`).attr("date");
                }else{
                    scoreCardDate[key] = $(`#${key}`).val();
                }
            });
            if(confirm("수정 하시겠습니까??")){
                console.log(scoreCardDate);
                $.ajax({
                    type: 'POST',
                    url: './score-card/update_score_card.php', // 실제 추가를 처리하는 PHP 파일 경로
                    data: scoreCardDate,
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

</script>

<?php
include_once(G5_ADMIN_PATH.'/admin.tail.php');


