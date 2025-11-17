<?php
$sub_menu = "910600";
define('G5_IS_ADMIN', true);
include_once ('../../common.php');
include_once(G5_ADMIN_PATH.'/admin.lib.php');
include_once(G5_ADMIN_PATH.'/admin.head.php');


$leagueName = isset($_GET['leagueName']) ? $_GET['leagueName'] : 'C.L 2';
$leagueNameItems = array(
    'C.L 1' => '',
    'C.L 2' => '',
);

if (array_key_exists($leagueName, $leagueNameItems)) {
    $leagueNameItems[$leagueName] = 'on';
}



$fighterListSql = "SELECT league.league_name
,league.ranking
,league.team_seq
,team.team_name 
,league.round_cnt
,league.win_ko
,league.win_jud
,league.lose
,league.disqua
,league.point	
,league.lsttm	
from blackcombat.tb_league as league
left join tb_team_base team
on league.team_seq = team.team_seq
where league_name = '$leagueName'
order by ranking";
$fighterListResult = sql_query($fighterListSql);

echo "<script type='text/javascript'>";
echo "let leagueList = [];";
while ($row = sql_fetch_array($fighterListResult)) {
    echo "leagueList.push({
        league_name:'".$row["league_name"]."'
        ,ranking:'".$row["ranking"]."'
        ,team_seq:'".$row["team_seq"]."'
        ,team_name:'".$row["team_name"]."'
        ,round_cnt:'".$row["round_cnt"]."'
        ,win_ko:'".$row["win_ko"]."'
        ,win_jud:'".$row["win_jud"]."'
        ,lose:'".$row["lose"]."'
        ,disqua:'".$row["disqua"]."'
        ,point:".$row["point"]."});";
}
echo "</script>";

?>

<script>

</script>
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
        tr{
            height:60px;
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



      
    </style>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<ul class="anchor">
    <? foreach ($leagueNameItems as $leagueNameItemTarget => $class) : ?>
        <li class="<?= $class ?>"><a href="?leagueName=<?= urlencode($leagueNameItemTarget) ?>"><?= $leagueNameItemTarget ?></a></li>
    <? endforeach; ?>
</ul>


<div>
    <div style="display:flex">
        <h1 style="font-size:1.5rem; padding:10px;"><?=$division?> 랭킹</h1>
    </div>

    <table style="font-size:0.8rem; margin-left: 50px;" class="rankingTable">
        <thead>
        <!-- 테이블의 헤더 부분은 그대로 유지 -->
        <tr>
            <th style="width:80px">순위</th>
            <th style="">리그명</th>
            <th style="">팀SEQ</th>
            <th style="width:auto">팀명</th>
            <th style="width:auto">라운드</th>
            <th style="width:80px">피니쉬</th>
            <th style="width:60px">판정승</th>
            <th style="width:150px">패배</th>
            <th style="width:150px">실격패</th>
            <th style="width:150px">승점</th>
            <th style="width:150px">수정</th>
            <th style="width:150px">수정날짜</th>
        </tr>
        </thead>
        <!-- 테이블 내용 부분은 그대로 유지하며, 수정 버튼 클릭 시 editRow 함수 호출 -->
        <tbody>
    <?
        $fighterListResult = sql_query($fighterListSql);
        while ($row = sql_fetch_array($fighterListResult)) {
    ?>
        <tr>
            <td><?= $row["ranking"] ?></td>
            <td><?= $row["league_name"] ?></td>
            <td><?= $row["team_seq"] ?></td>
            <td><?= $row["team_name"] ?></td>
            <td><?= $row["round_cnt"] ?></td>
            <td><?= $row["win_ko"] ?></td>
            <td><?= $row["win_jud"] ?></td>
            <td><?= $row["lose"] ?></td>
            <td><?= $row["disqua"] ?></td>
            <td><?= $row["point"] ?></td>
            <td><button onclick="show('<?= $row['league_name'] ?>','<?= $row['team_seq'] ?>')">수정</button></td>
            <td><?= $row["lsttm"] ?></td>
        </tr>
    <? 
        }
    ?>
    </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog"  style="max-width:900px" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col" style="width:80px">순위</th>
                        <th scope="col" style="width:100px">리그명</th>
                        <th scope="col" style="width:80px">팀SEQ</th>
                        <th scope="col" style="width:200px">팀명</th>
                        <th scope="col" style="width:100px">라운드</th>
                        <th scope="col" style="width:100px">피니쉬</th>
                        <th scope="col" style="width:100px">판정승</th>
                        <th scope="col" style="width:80px">패배</th>
                        <th scope="col" style="width:100px">실격패</th>
                        <th scope="col" style="width:80px">승점</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="pop_ranking"><input class="form-control" /></td>
                            <td class="pop_league_name"></td>
                            <td class="pop_team_seq"></td>
                            <td class="pop_team_name"></td>
                            <td class="pop_round_cnt"><input class="form-control" /></td>
                            <td class="pop_win_ko"><input class="form-control" /></td>
                            <td class="pop_win_jud"><input class="form-control" /></td>
                            <td class="pop_lose"><input class="form-control" /></td>
                            <td class="pop_disqua"><input class="form-control" /></td>
                            <td class="pop_point"><input class="form-control" /></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">취소</button>
                <button type="button" class="btn btn-primary" onclick="saveTeamLeagueInfo()">저장</button>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">

    function saveTeamLeagueInfo(teamSeq){
        if(confirm("저장하시겠습니까? 만약 랭킹정보를 변경했으면 변경된 랭킹부터 먼저 반영 후에 리그정보를 수정하세요.")){
            const changed_ranking = $(".pop_ranking input").val();
            const changed_league_name = $(".pop_league_name").text();
            const changed_team_seq = $(".pop_team_seq").text();
            const changed_round_cnt = $(".pop_round_cnt input").val();
            const changed_win_ko = $(".pop_win_ko input").val();
            const changed_win_jud = $(".pop_win_jud input").val();
            const changed_lose = $(".pop_lose input").val();
            const changed_disqua = $(".pop_disqua input").val();
            const changed_point = $(".pop_point input").val();
            
            $.ajax({
                type: 'POST',
                url: './team/update_team_league.php', // 실제 추가를 처리하는 PHP 파일 경로
                data: {
                    "ranking" : changed_ranking,
                    "league_name" : changed_league_name,
                    "team_seq" : changed_team_seq,
                    "round_cnt" : changed_round_cnt,
                    "win_ko" : changed_win_ko,
                    "win_jud" : changed_win_jud,
                    "lose" : changed_lose,
                    "disqua" : changed_disqua,
                    "point" : changed_point
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

    function show(leagueName, fighterSeq) {
        const targetTeam = leagueList.filter(item => item.team_seq === fighterSeq)[0];

        $(".pop_ranking input").val(targetTeam.ranking);
        $(".pop_league_name").text(targetTeam.league_name);
        $(".pop_team_seq").text(targetTeam.team_seq);
        $(".pop_team_name").text(targetTeam.team_name);
        $(".pop_round_cnt input").val(targetTeam.round_cnt);
        $(".pop_win_ko input").val(targetTeam.win_ko);
        $(".pop_win_jud input").val(targetTeam.win_jud);
        $(".pop_lose input").val(targetTeam.lose);
        $(".pop_disqua input").val(targetTeam.disqua);
        $(".pop_point input").val(targetTeam.point);


        $("#exampleModal").modal('show'); 
    }
</script>

<?php
include_once(G5_ADMIN_PATH.'/admin.tail.php');
?>
