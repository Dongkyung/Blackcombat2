<?php
    $teamRankingSql = "SELECT league.league_name
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
    where league_name = 'C.L 2'
    order by ranking";
    $teamRankingResult = sql_query($teamRankingSql);

?>
<style type="text/css">
    .cl_table { max-width: 650px; margin:  0px auto 15px auto;  }
    .cl_table table { width: 100%; margin-bottom: 10px; }
    .cl_table th { background-color: rgba(255, 255, 255, 0.8); font-size: 14px; text-align: center; padding: 10px; }
    .cl_table td { background-color: rgba(255, 255, 255, 0.3); text-align: center; border-bottom: 1px solid #DDD; padding: 15px; }
    .cl_table td img { width: 120px; margin-bottom: 5px; }
    .cl_update_date { text-align: right; font-size: 12px; color:#999; }
    .cl_team_name { display: block; margin-top: 5px; }

    <? if (G5_IS_MOBILE) { ?>
        .cl_table th {
            font-size: 0.7rem;
            padding:unset;
        }

        .cl_table td {
            padding: unset;
            font-size: 0.8rem;
        }

        .cl_table td img {
            width: 80px;
            margin: 5px;
        }

        .cl_team_name {
            margin-top: unset;
        }
    <? } ?>
    

</style>
<div class="cl_table">
    <table cellpadding="0" cellspacing="0">
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
            $teamRankingResult = sql_query($teamRankingSql);
            while ($row = sql_fetch_array($teamRankingResult)) {
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
</div>