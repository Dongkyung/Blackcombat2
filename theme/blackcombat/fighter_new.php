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
include_once('./_common.php');

add_stylesheet('<link rel="stylesheet" href="/theme/blackcombat/css/fighter.css">', 0);

$page = $_GET['page'];


$sql = "SELECT
            base.fighter_name
            ,base.fighter_ringname 
            ,base.birth 
            ,base.insta_id 
            ,team.team_name 
            ,base.height 
            ,base.weight 
            ,base.win 
            ,base.lose
            ,base.draw 
            ,base.detailImageBin 
        FROM 
            tb_fighter_base base
            LEFT JOIN tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE
            fighter_type = 1
            AND fighter_seq = $page";
$result = sql_query($sql);
$row = mysqli_fetch_assoc($result);
$base64ImageDataDetail = base64_encode($row['detailImageBin']);

$divisionSql = "SELECT ranking.division 
                FROM tb_fighter_ranking ranking
                where ranking.fighter_seq = $page;";
$divisionResult = sql_query($divisionSql);
?>

    <div class="sub_content fighter" style="background-color: #000; padding-bottom: 0px;">
        <div class="sub_container">
            <div class="fighter_page">

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
<? while ($divisionRow = sql_fetch_array($divisionResult)) { ?>
                                <span><?=$divisionRow['division']?></span>
<? } ?>
                            </div>
                            <div class="data_name">
                                <?= $row['fighter_name'] ?>
                                <span class="data_ringname">"<?= $row['fighter_ringname'] ?>"</span>
                                <span class="data_age"></span> <!-- 날짜계산해서넣기 -->
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/<?= $row['insta_id'] ?>/" target="_blank">@<?= $row['insta_id'] ?></a>
                            </div>
                            <div class="data_team">
                                팀명 : <?= $row['team_name'] ?>
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    <? if($row['height'] == 0) { echo '-'; } else { echo $row['height'].'cm'; } ?>
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    <? if($row['weight'] == 0) { echo '-'; } else { echo $row['weight'].'cm'; } ?>
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
                                        <li>
                                           <!-- <span class="match_result win">Win</span> 김성빈 vs 이강남 -->
                                        </li>
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

<?php
include_once(G5_THEME_PATH.'/tail.php');