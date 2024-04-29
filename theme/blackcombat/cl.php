<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');



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
,team.teamImageBin
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

$latestDate = null;

?>

    <div class="sub_visual">
        <div class="sub_visual_items">
            <div class="sub_visual_caption">
                <div class="category">CHAMPIONS LEAGUE</div>
            </div>
        </div>
    </div>
    <div class="sub_content">
        <div class="sub_container">
            <style type="text/css">
                .cl_page {}
                .cl_table { max-width: 650px; margin:  0px auto 15px auto;  }
                .cl_table table { width: 100%; margin-bottom: 10px; }
                .cl_table th { background-color: rgba(255, 255, 255, 0.8); font-size: 14px; text-align: center; padding: 10px; }
                .cl_table td { background-color: rgba(255, 255, 255, 0.3); text-align: center; border-bottom: 1px solid #DDD; padding: 15px; }
                .cl_table td img { width: 120px; margin-bottom: 5px; }
                .cl_update_date { text-align: right; font-size: 12px; color:#999; }
                .cl_team_name { display: block; margin-top: 5px; }
                ul{
                    list-style: none;
                }
                .anchor{
                    margin: 10px 0px;
                    padding: 0;
                    zoom: 1;
                }

                .anchor li{
                    float: left;
                    margin-left: -1px;
                    list-style: none;
                }
                .anchor li.on a{
                    background-color: #ffba3c;
                    color: #fff;
                }
                .anchor li a{
                    width:100px;
                    text-align:center;
                    display: inline-block;
                    padding: 5px 10px;
                    border: 1px solid #c8ced1;
                    background: #d6dde1;
                    text-decoration: none;
                }
            </style>
            <div style="text-align: center;display: flex;justify-content: center;margin-bottom: 30px;">
                <ul class="anchor">
                    <? foreach ($leagueNameItems as $leagueNameItemTarget => $class) : ?>
                        <li class="<?= $class ?>"><a href="?leagueName=<?= urlencode($leagueNameItemTarget) ?>"><?= $leagueNameItemTarget ?></a></li>
                    <? endforeach; ?>
                </ul>
            </div>
            <div class="cl_page">
                <div class="cl_table">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <colgroup>
                            <col style="width: 60px;">
                            <col style="width: '*'">
                            <col style="width: 100px;">
                            <col style="width: 100px;">
                            <col style="width: 100px;">
                            <col style="width: 100px;">
                            <col style="width: 100px;">
                            <col style="width: 80px;">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>순위</th>
                                <th>팀명</th>
                                <th>경기수</th>
                                <th>피니쉬승</th>
                                <th>판정승</th>
                                <th>패배</th>
                                <th>실격패</th>
                                <th>승점</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?
                            $fighterListResult = sql_query($fighterListSql);
                            while ($row = sql_fetch_array($fighterListResult)) {
                                $base64ImageDataTeam = base64_encode($row['teamImageBin']);
                                // $row["lsttm"] 값을 DateTime 객체로 변환합니다.
                                $dateTime = new DateTime($row["lsttm"]);

                                // 현재 가장 최신 날짜가 없거나, 현재 행의 날짜가 더 최신이면 $latestDate를 업데이트합니다.
                                if ($latestDate === null || $dateTime > $latestDate) {
                                    $latestDate = $dateTime;
                                }
                        ?>
                            <tr>
                                <td><?= $row["ranking"] ?></td>
                                <td>
                                    <a href="/team.php?page=<?= $row['team_seq'] ?>">
                                        <span class="cl_team_logo"><img src="data:image/png;base64,<?= $base64ImageDataTeam ?>" /></span>
                                        <span class="cl_team_name"><?= $row["team_name"] ?></span>
                                    </a>
                                </td>
                                <td><?= $row["round_cnt"] ?></td>
                                <td><?= $row["win_ko"] ?></td>
                                <td><?= $row["win_jud"] ?></td>
                                <td><?= $row["lose"] ?></td>
                                <td><?= $row["disqua"] ?></td>
                                <td><?= $row["point"] ?></td>
                            </tr>
                        <? 
                            }
                        ?>
                        </tbody>
                    </table>
                    <div class="cl_update_date">update. <?= $latestDate->format('Y.m.d') ?></div>
                </div>
            </div>
        </div>
    </div>

<?php
include_once(G5_THEME_PATH.'/tail.php');