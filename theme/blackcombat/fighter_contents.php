<?


function age($birthday) {
    if($birthday == null){
        return -1;
    }
    $today       = date('Ymd');
    $birthday = date('Ymd' , strtotime($birthday));
    $age     = floor(($today - $birthday) / 10000);
    return $age;
}

$sql = "SELECT
            base.fighter_name
            ,base.fighter_ringname 
            ,base.birth 
            ,base.insta_id 
            ,team.team_name
            ,team.team_seq
            ,base.height 
            ,base.weight 
            ,base.win 
            ,base.lose
            ,base.draw 
            ,base.detailImageBin
            ,base.fighter_type 
        FROM 
            tb_fighter_base base
            LEFT JOIN tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE
            fighter_seq = $page";
$result = sql_query($sql);
$row = mysqli_fetch_assoc($result);
$calculatedAge = age($row["birth"]);



$base64ImageDataDetail = base64_encode($row['detailImageBin']);

$divisionSql = "SELECT ranking.division, ranking.ranking, ranking.ranking_type
                FROM tb_fighter_ranking ranking
                where ranking.fighter_seq = $page;";
$divisionResult = sql_query($divisionSql);


$historySql = "SELECT
    event.event_name_short as game_name 
    , his.player1
    , base1.fighter_name as player1_name
    , his.player2
    , CASE WHEN his.player2 REGEXP '^[0-9]+$' THEN base2.fighter_name ELSE his.player2 END AS player2_name
    , his.winner_player
    , his.result
    , his.play_date
    from tb_fight_history his
    LEFT JOIN tb_fighter_base base1
    on his.player1 = base1.fighter_seq 
    LEFT JOIN tb_fighter_base base2
    on his.player2 = base2.fighter_seq
    left join tb_event event
    on event.event_seq = his.event_seq
    where player1 = $page
    OR player2 = $page
    order by play_date;";
$historyResult = sql_query($historySql);
?>

<div class="sub_content fighter" style="background-color: #000; padding-bottom: 30px;">
        <div class="sub_container">
            <div class="fighter_page">

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
<? while ($divisionRow = sql_fetch_array($divisionResult)) { ?>
                                <span><?=$divisionRow['division']?> #<? if($divisionRow['ranking'] === '0') { echo "C"; } else { echo $divisionRow['ranking']; }?></span>
                                <? if($divisionRow['ranking_type'] === '2'){ ?>
                                    <span style="background-color: #4477ff; font-size: 0.5rem; line-height: 5px; padding: 5px; border-radius: 13px; margin-left: -11px;" >A</span>
                                <? } ?>
<? } ?>
                            </div>
                            <div class="data_name">
                                <?= $row['fighter_name'] ?><br />
                                <span class="data_ringname">"<?= $row['fighter_ringname'] ?>"</span>
<? if($calculatedAge != -1){ ?>
                                <span class="data_age">AGE : <?= $calculatedAge ?></span> <!-- 날짜계산해서넣기 -->
<? } ?>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/<?= $row['insta_id'] ?>/" target="_blank">@<?= $row['insta_id'] ?></a>
                            </div>
                            <div class="data_team">
                                팀명 : <b><a href="/team.php?page=<?= $row['team_seq'] ?>" style="color:white;"><?= $row['team_name'] ?></a></b>
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    <? if($row['height'] == 0) { echo '-'; } else { echo $row['height'].'cm'; } ?>
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    <? if($row['weight'] == 0) { echo '-'; } else { echo $row['weight'].'kg'; } ?>
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    <?= $row['win'] ?> <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    <?= $row['lose'] ?> <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    <?= $row['draw'] ?> <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                    <? while ($historyRow = sql_fetch_array($historyResult)) { ?>
                                        <li style="display:flex">
                                            <div style="text-align:left; flex:0 0 auto;">
                                                <b><span <? if(!(strpos($historyRow['game_name'], "블랙컴뱃") !== false)){ echo "style='color:rgba(255, 255, 255, 0.6)'"; } ?> class='game_name'><?= $historyRow['game_name'] ?> : </span></b> 
                                            </div>
                                            <div style="flex:0 0 auto;">
                                            <? 
                                                if($historyRow['winner_player'] === "" || $historyRow['winner_player'] === null){
                                                    echo "";
                                                } else if($historyRow['winner_player'] == $page){
                                                    echo "<span class='match_result win'>Win</span>";
                                                } else if($historyRow['result'] == 'N/C'){
                                                    echo "<span class='match_result NC' style='background-color:unset'></span>";
                                                } else{
                                                    echo "<span class='match_result lose'>Lose</span>";
                                                }
                                            ?>
                                            <a href="https://www.blackcombat-official.com/fighter.php?page=<?=$historyRow['player1']?>" style="color:white"><span <? if( $historyRow['winner_player'] == $historyRow['player1'] ){ echo "class='winner_name'"; }?> ><?= $historyRow['player1_name'] ?></span> </a>
                                            vs
                                            <a href="https://www.blackcombat-official.com/fighter.php?page=<?=$historyRow['player2']?>" style="color:white"><span <? if( $historyRow['winner_player'] == $historyRow['player2'] ){ echo "class='winner_name'"; }?> ><?= $historyRow['player2_name'] ?></span> </a>
                                            <span style="margin-left:10px; font-size:0.7rem; display:contents;"><?=$historyRow['result']?></span>
                                            </div>
                                        </li>
                                    <? } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src='data:image/png;base64,<?=$base64ImageDataDetail ?>' 
                                onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter/fighter_full_blank.png'"
                            />  
                        </div>
                    </div>
                    
            </div>
        </div>
    </div>
    <div class="sub_content">
        <div class="sub_container">
            <div class="fighter_news_page">
                <div class="news_page_title">
                    LASTEST NEWS
                </div>
                <div class="news_page_list">
                    <ul>
                        <li>
                            <a href="javascript:">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_news_blank.jpg" />
                            </a>
                        </li>
                        <li>
                            <a href="javascript:">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_news_blank.jpg" />
                            </a>
                        </li>
                        <li>
                            <a href="javascript:">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_news_blank.jpg" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>