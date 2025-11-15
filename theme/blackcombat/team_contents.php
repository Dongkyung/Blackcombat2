<?
$sql = "SELECT 
    league.ranking 
    ,base.team_name
    ,base.insta_id
    ,base.addr 
    ,base.teamImageBin 
FROM tb_team_base base
    LEFT JOIN tb_league league
    ON base.team_seq = league.team_seq AND league.is_active = 1
WHERE 
    base.team_seq = $page";

$result = sql_query($sql);
$row = mysqli_fetch_assoc($result);


$base64ImageDataTeam = base64_encode($row['teamImageBin']);

// $divisionSql = "SELECT ranking.division 
//                 FROM tb_fighter_ranking ranking
//                 where ranking.fighter_seq = $page;";
// $divisionResult = sql_query($divisionSql);


// $historySql = "SELECT
//     his.game_name
//     , his.player1
//     , base1.fighter_name as player1_name
//     , his.player2
//     , CASE WHEN his.player2 REGEXP '^[0-9]+$' THEN base2.fighter_name ELSE his.player2 END AS player2_name
//     , his.winner_player
//     , his.result
//     , his.play_date
//     from tb_fight_history his
//     LEFT JOIN tb_fighter_base base1
//     on his.player1 = base1.fighter_seq 
//     LEFT JOIN tb_fighter_base base2
//     on his.player2 = base2.fighter_seq
//     where player1 = $page
//     OR player2 = $page
//     order by play_date;";
// $historyResult = sql_query($historySql);
?>
<div class="sub_content fighter" style="background-color: #000; padding-bottom: 100px;">
        <div class="sub_container">
            <div class="fighter_page">

                    <div class="fighter_info">
                        <div class="team_info_wrapper" style="display:flex">
                            <div class="fighter_data">
                                <!-- <div class="data_tags">
                                    <span>Ranking #1</span>
                                </div> -->
                                <div class="data_bio_height" style="float:unset; margin-bottom:10px;">
                                        <div class="mini" style="font-size: 18px;color: #ffba3c;">This C.L Ranking</div>
                                        <? if($row['ranking'] === null){ ?>
                                            <b><span style="font-size: 1.2rem;line-height: 2rem; color:gray">미참가</span></b>
                                        <? }else{ ?>
                                            <span style="font-size: 2rem;line-height: 2rem;"># <?= $row['ranking'] ?></span>
                                        <? } ?>
                                        
                                </div>
                                <div class="data_name">
                                    <?= $row['team_name'] ?>
                                </div>
                                <div class="sns_link">
                                    <? if($row['insta_id'] !== null){ ?>
                                        <a href="https://www.instagram.com/<?= $row['insta_id'] ?>/" target="_blank">@<?= $row['insta_id'] ?></a>
                                    <? }else{ ?>
                                        &nbsp &nbsp
                                    <? } ?>
                                </div>
                                <div class="data_team" style="margin-bottom:50px">
                                <? if($row['addr'] !== null){ ?>
                                        <?= $row['addr'] ?>
                                    <? }else{ ?>
                                        &nbsp &nbsp
                                    <? } ?>
                                </div>
                                <div class="data_bio">
                                    <!-- <div class="data_bio_weight">
                                        <div class="mini">Ready..</div>
                                        <span style="font-size:0.8rem">....</span>
                                        
                                    </div> -->
                                    <div class="data_bio_weight" style="font-family:unset">
                                        <div class="mini" style="font-family: 'Teko', sans-serif;">Champion History</div>
<?

    $champHistorySeq = "SELECT 
        champ.division , 
        champ.`order`, 
        champ.fighter_seq,
        champ.defend,
        fighter_name,
        base.fighter_ringname,
        base.country
    FROM tb_fighter_base base 
        LEFT JOIN tb_fighter_ranking ranking 
        ON base.fighter_seq = ranking.fighter_seq
        INNER JOIN tb_champion_history champ
        ON base.fighter_seq = champ.fighter_seq AND champ.division = ranking.division
    WHERE base.team_seq = $page;";

 $champHistoryResult = sql_query($champHistorySeq);
 $numRows = mysqli_num_rows($champHistoryResult);
?>
                                        <ul style="font-size:0.8rem; white-space: nowrap;">
                                        <? if($numRows !== 0){ ?>
                                            <? while ($champRow = sql_fetch_array($champHistoryResult)) { ?>
                                                <li>
                                                    <b><span class="winner_name" style="width:60px; display: inline-block;" ><?= $champRow['division'] ?> </span></b>
                                                    <b><span style="width:30px; display: inline-block;" ><?= $champRow['order'] ?>&nbsp;대 </span></b>
                                                    <b><span style="width:50px; display: inline-block;" > 방어 : <?= $champRow['defend'] ?>&nbsp; </span></b>
                                                    <a href="https://www.blackcombat-official.com/fighter/<?= $champRow['fighter_seq'] ?>" style="color:white;">
                                                        <b><span><?= $champRow['fighter_name'] ?>&nbsp;&nbsp;(&nbsp;&nbsp;<?= $champRow['fighter_ringname'] ?>&nbsp;&nbsp;)</span></b>
                                                    </a>
                                                </li>
                                            <? } ?>
                                        <? }else{ ?> 
                                            <b><span class="">정보가 없습니다.</span></b>
                                        <? } ?>
                                        
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="fighter_img">
                                <? if($base64ImageDataTeam !== ""){ ?>
                                <img src="data:image/png;base64,<?= $base64ImageDataTeam ?>" /> 
                                <? } ?>
                            </div>
                        </div>
                        <div class="team_fighter_info" style="display: flex;flex-direction: row; flex-wrap: wrap; color:white; margin-top:30px;">
                            <div class="division_group">
                                <div class="fighter_match">
                                    <div class="match_title">
                                        Fly Weight
                                    </div>
                                    <div class="match_list">
                                        <ul>
                                            

<?
    $fighterSearchSql = "SELECT 
                ranking.ranking, base.fighter_seq , base.fighter_name ,base.fighter_ringname ,base.win ,base.lose ,base.draw, base.country,ranking.ranking_type
            FROM tb_fighter_base base LEFT JOIN tb_fighter_ranking ranking ON base.fighter_seq = ranking.fighter_seq
            WHERE base.team_seq = $page AND ranking.division = '플라이급' ORDER BY CAST(ranking AS UNSIGNED)";
    $fighterSearchResult = sql_query($fighterSearchSql);
    $numRows = mysqli_num_rows($fighterSearchResult);

    if($numRows === 0){ ?>
                                             <li style="display:flex;">
                                                <a style="color:white; display:flex; gap:10px;">
                                                    <div>
                                                        <b><span class="winner_name">&nbsp &nbsp</span></b>
                                                        <b><span>등록된 선수가 없습니다.</span></b>
                                                    </div>
                                                    &nbsp &nbsp
                                                    <div style="font-size:0.7rem;">
                                                        <span class="winner_name" style="font-size:1rem; line-height: 1rem;">&nbsp &nbsp</span>
                                                    </div>
                                                </a>
                                            </li>
    <? }else{ ?>
        <? while ($fighterRow = sql_fetch_array($fighterSearchResult)) { ?>
                                            <li style="display:flex;">
                                                <a href="https://www.blackcombat-official.com/fighter/<?= $fighterRow['fighter_seq'] ?>" style="color:white; display:flex; gap:10px;">
                                                    <div>
                                                        <b>
                                                            <? if($fighterRow['ranking_type'] === '2'){ ?>
                                                                <span style="background-color: #4477ff; font-size: 0.8rem; line-height: 7px; padding: 4px; border-radius: 13px; display: inline-block; height: 16px; width: 16px;" >A</span>
                                                            <? } ?>
                                                            <span class="winner_name">#<? if($fighterRow['ranking'] === '0'){ echo 'C'; }else{ echo $fighterRow['ranking']; } ?></span>
                                                        </b>
                                                        <span class="fi fi-<?= strtolower($fighterRow["country"]) ?>"></span> <b><span><?= $fighterRow['fighter_name'] ?> ( <?= $fighterRow['fighter_ringname'] ?> ) </span></b>
                                                    </div>
                                                    ─
                                                    <div style="font-size:0.7rem;">
                                                        <span class="winner_name" style="font-size:1rem; line-height: 1rem;"><?= $fighterRow['win'] ?></span> / <?= $fighterRow['lose'] ?> / <?= $fighterRow['draw'] ?>
                                                    </div>
                                                </a>
                                            </li>
        <? } ?>
    <? } ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="fighter_match">
                                    <div class="match_title">
                                        Bantam Weight
                                    </div>
                                    <div class="match_list">
                                        <ul>
<?
    $fighterSearchSql = "SELECT 
                ranking.ranking, base.fighter_seq , base.fighter_name ,base.fighter_ringname ,base.win ,base.lose ,base.draw, base.country,ranking.ranking_type
            FROM tb_fighter_base base LEFT JOIN tb_fighter_ranking ranking ON base.fighter_seq = ranking.fighter_seq
            WHERE base.team_seq = $page AND ranking.division = '밴텀급' ORDER BY CAST(ranking AS UNSIGNED)";
    $fighterSearchResult = sql_query($fighterSearchSql);
    $numRows = mysqli_num_rows($fighterSearchResult);

    if($numRows === 0){ ?>
                                             <li style="display:flex;">
                                                <a style="color:white; display:flex; gap:10px;">
                                                    <div>
                                                        <b><span class="winner_name">&nbsp &nbsp</span></b>
                                                        <b><span>등록된 선수가 없습니다.</span></b>
                                                    </div>
                                                    &nbsp &nbsp
                                                    <div style="font-size:0.7rem;">
                                                        <span class="winner_name" style="font-size:1rem; line-height: 1rem;">&nbsp &nbsp</span>
                                                    </div>
                                                </a>
                                            </li>
    <? }else{ ?>
        <? while ($fighterRow = sql_fetch_array($fighterSearchResult)) { ?>
                                            <li style="display:flex;">
                                                <a href="https://www.blackcombat-official.com/fighter/<?= $fighterRow['fighter_seq'] ?>" style="color:white; display:flex; gap:10px;">
                                                    <div>
                                                        <b>
                                                            <? if($fighterRow['ranking_type'] === '2'){ ?>
                                                                <span style="background-color: #4477ff; font-size: 0.8rem; line-height: 7px; padding: 4px; border-radius: 13px; display: inline-block; height: 16px; width: 16px;" >A</span>
                                                            <? } ?>
                                                            <span class="winner_name">#<? if($fighterRow['ranking'] === '0'){ echo 'C'; }else{ echo $fighterRow['ranking']; } ?></span>
                                                        </b>
                                                        <span class="fi fi-<?= strtolower($fighterRow["country"]) ?>"></span> <b><span><?= $fighterRow['fighter_name'] ?> ( <?= $fighterRow['fighter_ringname'] ?> ) </span></b>
                                                    </div>
                                                    ─
                                                    <div style="font-size:0.7rem;">
                                                        <span class="winner_name" style="font-size:1rem; line-height: 1rem;"><?= $fighterRow['win'] ?></span> / <?= $fighterRow['lose'] ?> / <?= $fighterRow['draw'] ?>
                                                    </div>
                                                </a>
                                            </li>
        <? } ?>
    <? } ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="fighter_match">
                                    <div class="match_title">
                                        Feather Weight
                                    </div>
                                    <div class="match_list">
                                        <ul>
<?
    $fighterSearchSql = "SELECT 
                ranking.ranking, base.fighter_seq , base.fighter_name ,base.fighter_ringname ,base.win ,base.lose ,base.draw, base.country,ranking.ranking_type
            FROM tb_fighter_base base LEFT JOIN tb_fighter_ranking ranking ON base.fighter_seq = ranking.fighter_seq
            WHERE base.team_seq = $page AND ranking.division = '페더급' ORDER BY CAST(ranking AS UNSIGNED)";
    $fighterSearchResult = sql_query($fighterSearchSql);
    $numRows = mysqli_num_rows($fighterSearchResult);

    if($numRows === 0){ ?>
                                             <li style="display:flex;">
                                                <a style="color:white; display:flex; gap:10px;">
                                                    <div>
                                                        <b><span class="winner_name">&nbsp &nbsp</span></b>
                                                        <b><span>등록된 선수가 없습니다.</span></b>
                                                    </div>
                                                    &nbsp &nbsp
                                                    <div style="font-size:0.7rem;">
                                                        <span class="winner_name" style="font-size:1rem; line-height: 1rem;">&nbsp &nbsp</span>
                                                    </div>
                                                </a>
                                            </li>
    <? }else{ ?>
        <? while ($fighterRow = sql_fetch_array($fighterSearchResult)) { ?>
                                            <li style="display:flex;">
                                                <a href="https://www.blackcombat-official.com/fighter/<?= $fighterRow['fighter_seq'] ?>" style="color:white; display:flex; gap:10px;">
                                                    <div>
                                                        <b>
                                                            <? if($fighterRow['ranking_type'] === '2'){ ?>
                                                                <span style="background-color: #4477ff; font-size: 0.8rem; line-height: 7px; padding: 4px; border-radius: 13px; display: inline-block; height: 16px; width: 16px;" >A</span>
                                                            <? } ?>
                                                            <span class="winner_name">#<? if($fighterRow['ranking'] === '0'){ echo 'C'; }else{ echo $fighterRow['ranking']; } ?></span>
                                                        </b>
                                                        <span class="fi fi-<?= strtolower($fighterRow["country"]) ?>"></span> <b><span><?= $fighterRow['fighter_name'] ?> ( <?= $fighterRow['fighter_ringname'] ?> ) </span></b>
                                                    </div>
                                                    ─
                                                    <div style="font-size:0.7rem;">
                                                        <span class="winner_name" style="font-size:1rem; line-height: 1rem;"><?= $fighterRow['win'] ?></span> / <?= $fighterRow['lose'] ?> / <?= $fighterRow['draw'] ?>
                                                    </div>
                                                </a>
                                            </li>
        <? } ?>
    <? } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="division_group">
                                <div class="fighter_match">
                                    <div class="match_title">
                                        Light Weight
                                    </div>
                                    <div class="match_list">
                                        <ul>
<?
    $fighterSearchSql = "SELECT 
                ranking.ranking, base.fighter_seq , base.fighter_name ,base.fighter_ringname ,base.win ,base.lose ,base.draw, base.country,ranking.ranking_type
            FROM tb_fighter_base base LEFT JOIN tb_fighter_ranking ranking ON base.fighter_seq = ranking.fighter_seq
            WHERE base.team_seq = $page AND ranking.division = '라이트급' ORDER BY CAST(ranking AS UNSIGNED)";
    $fighterSearchResult = sql_query($fighterSearchSql);
    $numRows = mysqli_num_rows($fighterSearchResult);

    if($numRows === 0){ ?>
                                             <li style="display:flex;">
                                                <a style="color:white; display:flex; gap:10px;">
                                                    <div>
                                                        <b><span class="winner_name">&nbsp &nbsp</span></b>
                                                        <b><span>등록된 선수가 없습니다.</span></b>
                                                    </div>
                                                    &nbsp &nbsp
                                                    <div style="font-size:0.7rem;">
                                                        <span class="winner_name" style="font-size:1rem; line-height: 1rem;">&nbsp &nbsp</span>
                                                    </div>
                                                </a>
                                            </li>
    <? }else{ ?>
        <? while ($fighterRow = sql_fetch_array($fighterSearchResult)) { ?>
                                            <li style="display:flex;">
                                                <a href="https://www.blackcombat-official.com/fighter/<?= $fighterRow['fighter_seq'] ?>" style="color:white; display:flex; gap:10px;">
                                                    <div>
                                                        <b>
                                                            <? if($fighterRow['ranking_type'] === '2'){ ?>
                                                                <span style="background-color: #4477ff; font-size: 0.8rem; line-height: 7px; padding: 4px; border-radius: 13px; display: inline-block; height: 16px; width: 16px;" >A</span>
                                                            <? } ?>
                                                            <span class="winner_name">#<? if($fighterRow['ranking'] === '0'){ echo 'C'; }else{ echo $fighterRow['ranking']; } ?></span>
                                                        </b>
                                                        <span class="fi fi-<?= strtolower($fighterRow["country"]) ?>"></span> <b><span><?= $fighterRow['fighter_name'] ?> ( <?= $fighterRow['fighter_ringname'] ?> ) </span></b>
                                                    </div>
                                                    ─
                                                    <div style="font-size:0.7rem;">
                                                        <span class="winner_name" style="font-size:1rem; line-height: 1rem;"><?= $fighterRow['win'] ?></span> / <?= $fighterRow['lose'] ?> / <?= $fighterRow['draw'] ?>
                                                    </div>
                                                </a>
                                            </li>
        <? } ?>
    <? } ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="fighter_match">
                                    <div class="match_title">
                                        Welter Weight
                                    </div>
                                    <div class="match_list">
                                        <ul>
<?
    $fighterSearchSql = "SELECT 
                ranking.ranking, base.fighter_seq , base.fighter_name ,base.fighter_ringname ,base.win ,base.lose ,base.draw, base.country,ranking.ranking_type
            FROM tb_fighter_base base LEFT JOIN tb_fighter_ranking ranking ON base.fighter_seq = ranking.fighter_seq
            WHERE base.team_seq = $page AND ranking.division = '웰터급' ORDER BY CAST(ranking AS UNSIGNED)";
    $fighterSearchResult = sql_query($fighterSearchSql);
    $numRows = mysqli_num_rows($fighterSearchResult);

    if($numRows === 0){ ?>
                                             <li style="display:flex;">
                                                <a style="color:white; display:flex; gap:10px;">
                                                    <div>
                                                        <b><span class="winner_name">&nbsp &nbsp</span></b>
                                                        <b><span>등록된 선수가 없습니다.</span></b>
                                                    </div>
                                                    &nbsp &nbsp
                                                    <div style="font-size:0.7rem;">
                                                        <span class="winner_name" style="font-size:1rem; line-height: 1rem;">&nbsp &nbsp</span>
                                                    </div>
                                                </a>
                                            </li>
    <? }else{ ?>
        <? while ($fighterRow = sql_fetch_array($fighterSearchResult)) { ?>
                                            <li style="display:flex;">
                                                <a href="https://www.blackcombat-official.com/fighter/<?= $fighterRow['fighter_seq'] ?>" style="color:white; display:flex; gap:10px;">
                                                    <div>
                                                        <b>
                                                            <? if($fighterRow['ranking_type'] === '2'){ ?>
                                                                <span style="background-color: #4477ff; font-size: 0.8rem; line-height: 7px; padding: 4px; border-radius: 13px; display: inline-block; height: 16px; width: 16px;" >A</span>
                                                            <? } ?>
                                                            <span class="winner_name">#<? if($fighterRow['ranking'] === '0'){ echo 'C'; }else{ echo $fighterRow['ranking']; } ?></span>
                                                        </b>
                                                        <span class="fi fi-<?= strtolower($fighterRow["country"]) ?>"></span> <b><span><?= $fighterRow['fighter_name'] ?> ( <?= $fighterRow['fighter_ringname'] ?> ) </span></b>
                                                    </div>
                                                    ─
                                                    <div style="font-size:0.7rem;">
                                                        <span class="winner_name" style="font-size:1rem; line-height: 1rem;"><?= $fighterRow['win'] ?></span> / <?= $fighterRow['lose'] ?> / <?= $fighterRow['draw'] ?>
                                                    </div>
                                                </a>
                                            </li>
        <? } ?>
    <? } ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="fighter_match">
                                    <div class="match_title">
                                        Middle Weight
                                    </div>
                                    <div class="match_list">
                                        <ul>
<?
    $fighterSearchSql = "SELECT 
                ranking.ranking, base.fighter_seq , base.fighter_name ,base.fighter_ringname ,base.win ,base.lose ,base.draw, base.country,ranking.ranking_type
            FROM tb_fighter_base base LEFT JOIN tb_fighter_ranking ranking ON base.fighter_seq = ranking.fighter_seq
            WHERE base.team_seq = $page AND ranking.division = '미들급' ORDER BY CAST(ranking AS UNSIGNED)";
    $fighterSearchResult = sql_query($fighterSearchSql);
    $numRows = mysqli_num_rows($fighterSearchResult);

    if($numRows === 0){ ?>
                                             <li style="display:flex;">
                                                <a style="color:white; display:flex; gap:10px;">
                                                    <div>
                                                        <b><span class="winner_name">&nbsp &nbsp</span></b>
                                                        <b><span>등록된 선수가 없습니다.</span></b>
                                                    </div>
                                                    &nbsp &nbsp
                                                    <div style="font-size:0.7rem;">
                                                        <span class="winner_name" style="font-size:1rem; line-height: 1rem;">&nbsp &nbsp</span>
                                                    </div>
                                                </a>
                                            </li>
    <? }else{ ?>
        <? while ($fighterRow = sql_fetch_array($fighterSearchResult)) { ?>
                                            <li style="display:flex;">
                                                <a href="https://www.blackcombat-official.com/fighter/<?= $fighterRow['fighter_seq'] ?>" style="color:white; display:flex; gap:10px;">
                                                    <div>
                                                        <b>
                                                            <? if($fighterRow['ranking_type'] === '2'){ ?>
                                                                <span style="background-color: #4477ff; font-size: 0.8rem; line-height: 7px; padding: 4px; border-radius: 13px; display: inline-block; height: 16px; width: 16px;" >A</span>
                                                            <? } ?>
                                                            <span class="winner_name">#<? if($fighterRow['ranking'] === '0'){ echo 'C'; }else{ echo $fighterRow['ranking']; } ?></span>
                                                        </b>
                                                        <span class="fi fi-<?= strtolower($fighterRow["country"]) ?>"></span> <b><span><?= $fighterRow['fighter_name'] ?> ( <?= $fighterRow['fighter_ringname'] ?> ) </span></b>
                                                    </div>
                                                    ─
                                                    <div style="font-size:0.7rem;">
                                                        <span class="winner_name" style="font-size:1rem; line-height: 1rem;"><?= $fighterRow['win'] ?></span> / <?= $fighterRow['lose'] ?> / <?= $fighterRow['draw'] ?>
                                                    </div>
                                                </a>
                                            </li>
        <? } ?>
    <? } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="division_group">
                                <div class="fighter_match">
                                    <div class="match_title">
                                        Heavy Weight
                                    </div>
                                    <div class="match_list">
                                        <ul>
<?
    $fighterSearchSql = "SELECT 
                ranking.ranking, base.fighter_seq , base.fighter_name ,base.fighter_ringname ,base.win ,base.lose ,base.draw, base.country,ranking.ranking_type
            FROM tb_fighter_base base LEFT JOIN tb_fighter_ranking ranking ON base.fighter_seq = ranking.fighter_seq
            WHERE base.team_seq = $page AND ranking.division = '중량급' ORDER BY CAST(ranking AS UNSIGNED)";
    $fighterSearchResult = sql_query($fighterSearchSql);
    $numRows = mysqli_num_rows($fighterSearchResult);

    if($numRows === 0){ ?>
                                             <li style="display:flex;">
                                                <a style="color:white; display:flex; gap:10px;">
                                                    <div>
                                                        <b><span class="winner_name">&nbsp &nbsp</span></b>
                                                        <b><span>등록된 선수가 없습니다.</span></b>
                                                    </div>
                                                    &nbsp &nbsp
                                                    <div style="font-size:0.7rem;">
                                                        <span class="winner_name" style="font-size:1rem; line-height: 1rem;">&nbsp &nbsp</span>
                                                    </div>
                                                </a>
                                            </li>
    <? }else{ ?>
        <? while ($fighterRow = sql_fetch_array($fighterSearchResult)) { ?>
                                            <li style="display:flex;">
                                                <a href="https://www.blackcombat-official.com/fighter/<?= $fighterRow['fighter_seq'] ?>" style="color:white; display:flex; gap:10px;">
                                                    <div>
                                                        <b>
                                                            <? if($fighterRow['ranking_type'] === '2'){ ?>
                                                                <span style="background-color: #4477ff; font-size: 0.8rem; line-height: 7px; padding: 4px; border-radius: 13px; display: inline-block; height: 16px; width: 16px;" >A</span>
                                                            <? } ?>
                                                            <span class="winner_name">#<? if($fighterRow['ranking'] === '0'){ echo 'C'; }else{ echo $fighterRow['ranking']; } ?></span>
                                                        </b>
                                                        <span class="fi fi-<?= strtolower($fighterRow["country"]) ?>"></span> <b><span><?= $fighterRow['fighter_name'] ?> ( <?= $fighterRow['fighter_ringname'] ?> ) </span></b>
                                                    </div>
                                                    ─
                                                    <div style="font-size:0.7rem;">
                                                        <span class="winner_name" style="font-size:1rem; line-height: 1rem;"><?= $fighterRow['win'] ?></span> / <?= $fighterRow['lose'] ?> / <?= $fighterRow['draw'] ?>
                                                    </div>
                                                </a>
                                            </li>
        <? } ?>
    <? } ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="fighter_match">
                                    <div class="match_title">
                                        Atom Weight(Female)
                                    </div>
                                    <div class="match_list">
                                        <ul>
<?
    $fighterSearchSql = "SELECT 
                ranking.ranking, base.fighter_seq , base.fighter_name ,base.fighter_ringname ,base.win ,base.lose ,base.draw, base.country,ranking.ranking_type
            FROM tb_fighter_base base LEFT JOIN tb_fighter_ranking ranking ON base.fighter_seq = ranking.fighter_seq
            WHERE base.team_seq = $page AND ranking.division = '여성부' ORDER BY CAST(ranking AS UNSIGNED)";
    $fighterSearchResult = sql_query($fighterSearchSql);
    $numRows = mysqli_num_rows($fighterSearchResult);

    if($numRows === 0){ ?>
                                             <li style="display:flex;">
                                                <a style="color:white; display:flex; gap:10px;">
                                                    <div>
                                                        <b><span class="winner_name">&nbsp &nbsp</span></b>
                                                        <b><span>등록된 선수가 없습니다.</span></b>
                                                    </div>
                                                    &nbsp &nbsp
                                                    <div style="font-size:0.7rem;">
                                                        <span class="winner_name" style="font-size:1rem; line-height: 1rem;">&nbsp &nbsp</span>
                                                    </div>
                                                </a>
                                            </li>
    <? }else{ ?>
        <? while ($fighterRow = sql_fetch_array($fighterSearchResult)) { ?>
                                            <li style="display:flex;">
                                                <a href="https://www.blackcombat-official.com/fighter/<?= $fighterRow['fighter_seq'] ?>" style="color:white; display:flex; gap:10px;">
                                                    <div>
                                                        <b>
                                                            <? if($fighterRow['ranking_type'] === '2'){ ?>
                                                                <span style="background-color: #4477ff; font-size: 0.8rem; line-height: 7px; padding: 4px; border-radius: 13px; display: inline-block; height: 16px; width: 16px;" >A</span>
                                                            <? } ?>
                                                            <span class="winner_name">#<? if($fighterRow['ranking'] === '0'){ echo 'C'; }else{ echo $fighterRow['ranking']; } ?></span>
                                                        </b>
                                                        <span class="fi fi-<?= strtolower($fighterRow["country"]) ?>"></span> <b><span><?= $fighterRow['fighter_name'] ?> ( <?= $fighterRow['fighter_ringname'] ?> ) </span></b>
                                                    </div>
                                                    ─
                                                    <div style="font-size:0.7rem;">
                                                        <span class="winner_name" style="font-size:1rem; line-height: 1rem;"><?= $fighterRow['win'] ?></span> / <?= $fighterRow['lose'] ?> / <?= $fighterRow['draw'] ?>
                                                    </div>
                                                </a>
                                            </li>
        <? } ?>
    <? } ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="fighter_match">
                                </div>
                            </div>
                                
                        </div>
                        



                        
                    </div>
                    
            </div>
        </div>
    </div>