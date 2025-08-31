<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_MOBILE_PATH.'/head.php');

add_stylesheet('<link rel="stylesheet" href="/theme/blackcombat/css/mobile_event.css?v=20220918">', 0);

$eventSeq = $_GET['eventSeq'];

$eventSearchSql = "SELECT
event_seq,
event_category,
`order`,
event_name,
event_name_short,
event_place,
event_date,
selling_yn,
vote_yn,
sell_url,
max_img_idx,
prologue,
lsttm
FROM
blackcombat.tb_event tb_e
WHERE 
tb_e.event_seq = '$eventSeq'";
$eventResult = sql_query($eventSearchSql);

$row = mysqli_fetch_assoc($eventResult)

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<style>
    .sub_visual_caption .category {
        font-size: 1.5rem;
        font-weight:bold;
    }
    .fighter_img {
        transition: all 0.2s linear;
        cursor: pointer;
    }
    .fighter_img:hover{
        transform: scale(1.1);
    }

    /* a#openModal {
        padding: 10px 20px;
    } */

    .modal-background {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 500px;
        background: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        z-index:10;
    }

    .modal {
        background: white;
        width: 100%;
        height:100%;
        top: 100px;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        transform: translateY(100px);
        transition: transform 0.3s ease-out;
        position: relative;
        overflow: scroll;
        z-index: 1000;
    }

    .modal.show {
        transform: translateY(0);
    }

    .modal.hide {
        transform: translateY(100px);
    }

    .close-button {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 24px;
        cursor: pointer;
    }

    table{
        width:100%;
        border-collapse: collapse;
        border-spacing: 0;
        border:2px solid black;
        background-color:#dedede;
    }

    tr.scoreDetail{
        /* background-color:#dedede; */
    }

    td{
        border: 1px solid #999999;
        text-align:center;
        padding:unset;
        font-size:1rem;
        line-height:1.7rem;
    }


    td>div{
        background-color:#aaaaaa;
    }

    span.division-info{
        display: inline-block;
        padding: 3px 3px;
        margin: 0px 2px;
        background-color: #999999;
        color:white;
        font-weight:normal;
        font-size: 9px;
        vertical-align: top;
    }

    .vote-rate-bar{
        flex:7 0 0; 
        display : flex; 
        justify-content : space-between; 
        align-items : center; 
        
        font-size: 0.8rem;
        margin:10px 10px;
        font-style:italic;
    }

    .vote-item{
        height:14px;
    }

    .vote-item.vote-right{
        background-color: cornflowerblue;
    }

    .vote-item.vote-left{
        background-color: lightcoral;
    }

    .vote-desc{
        flex:0.5 0 0; 
        display : flex; 
        justify-content: space-between;
        padding: 0 35px;
        align-items : center; 
        position: relative;
        top: -25px;
    }

    .arrow-btn{
        flex: 1 0 0;
        display:flex;
        align-items : center;
        z-index:2;
    }
    .arrow-btn.arrow-right{
        justify-content : left; 
    }
    .arrow-btn.arrow-left{
        justify-content : right; 
    }
    
    
    
</style>
    <div class="sub_visual">
        <div class="sub_visual_items">
            <div class="sub_visual_caption">
                <div class="category" style="font-family:unset;"><?= $row["event_name"] ?></div>
            </div>
            
        </div>
    </div>
    <div class="key_visual" style="padding-bottom: 30px;">
        <div class="swiper key_visual_wrap">
            <div class="swiper-wrapper key_visual_items" style="height:500px;">
                <? for($i=1; $i<=$row["max_img_idx"]; $i++){ ?>  
                    <div class="swiper-slide key_visual_item"><img style="width:100%; height:100%; object-fit: contain;" src="<?php echo G5_THEME_IMG_URL; ?>/event/<?=$row["event_seq"]?>/<?=$i?>.jpg" /></div>
                <? } ?>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="sub_content">
        <div class="sub_container">
            <div class="event_detail_page">
                <? if($row["prologue"] === "" || $row["prologue"] === null ) {?>
                <? }else{ ?>
                    <div class="prologue" style="border-top:2px solid #bbbbbb; border-bottom:2px solid #bbbbbb; padding:20px 0px;">
                        <div style="font-family: 'Teko', sans-serif, cursive;font-size: 3rem;text-align: center; padding-bottom:20px;">SYNOPSYS</div>
                        <div style="font-size:0.9rem; padding:0px 20px;">
                            <?= nl2br(htmlspecialchars($row["prologue"], ENT_QUOTES, 'UTF-8')) ?>
                        </div>
                    </div>
                <? } ?>
                <div class="fightcard" style="border-top:2px solid #bbbbbb; border-bottom:2px solid #bbbbbb; padding:20px 0px;">
                    <div style="font-family: 'Teko', sans-serif, cursive;font-size: 3rem;text-align: center; padding-bottom:20px;">FIGHT CARD</div>
                        <div>
<?

    function getClientIP() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            // Proxy 서버를 통한 IP
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            // 프록시 서버를 거친 경우
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            // 직접 접근한 IP
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
    $clientIP = getClientIP();

  $historySql = "SELECT 
  his.seq
  , his.event_seq
  , event.event_name_short as game_name 
  , his.fight_name
  , his.`order`
  , his.player1
  , base1.fighter_name as name1
  , base1.win as win1
  , base1.lose as lose1
  , base1.draw as draw1
  , base1.fighter_ringname as ringname1
  , base1.ranking_image_name as img1
  , base1.rankingChamp_image_name as imgChamp1
  , his.player2
  , base2.fighter_name as name2
  , base2.win as win2
  , base2.lose as lose2
  , base2.draw as draw2
  , base2.fighter_ringname as ringname2
  , base2.ranking_image_name as img2
  , base2.rankingChamp_image_name as imgChamp2
  , his.winner_player
  , base_w.fighter_name as name_w
  , his.result
  , his.play_date
  , his.video_url
  , sc.score_seq
  , his.vote1
  , his.vote2
  , his.lsttm
  , vh.guess_winner
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
  on his.seq = sc.fight_history_seq
  left join tb_vote_history vh
  on his.seq = vh.tb_fight_history
  	and vh.ip = '$clientIP'
  	and vh.vote_date = DATE_FORMAT(CURDATE(), '%Y-%m-%d')
  where his.event_seq = '$eventSeq'
  order by his.`order` desc;";

    $historyResult = sql_query($historySql);


    while ($hisRow = sql_fetch_array($historyResult)) {
        $rankingImgPath1 = "https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$hisRow["player1"]."/".$hisRow['img1'];
        $rankingImgPath2 = "https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$hisRow["player2"]."/".$hisRow['img2'];
        $rankingChampImgPath1 = "https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$hisRow['player1']."/".$hisRow['imgChamp1'];
        $rankingChampImgPath2 = "https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$hisRow['player2']."/".$hisRow['imgChamp2'];

        $division1Sql = "SELECT ranking.division, ranking.ranking, ranking.ranking_type
                        FROM tb_fighter_ranking ranking
                        where ranking.fighter_seq = ".$hisRow['player1'];
        $division1Result = sql_query($division1Sql);
        $champ1Flag = 0;
        while ($division1Row = sql_fetch_array($division1Result)) {
                if($division1Row['ranking'] === '0') {
                    $champ1Flag = 1;
                }
        }
        mysqli_data_seek($division1Result, 0);

        $division2Sql = "SELECT ranking.division, ranking.ranking, ranking.ranking_type
                        FROM tb_fighter_ranking ranking
                        where ranking.fighter_seq = ".$hisRow['player2'];
        $division2Result = sql_query($division2Sql);
        $champ2Flag = 0;
        while ($division2Row = sql_fetch_array($division2Result)) {
                if($division2Row['ranking'] === '0') {
                    $champ2Flag = 1;
                }
        }
        mysqli_data_seek($division2Result, 0);
?>


                            <div style="margin-bottom:50px;  padding-bottom:50px; border-bottom:1px solid #bbbbbb;">
                                
                                <div style="display:flex; flex-direction:column; font-weight:bold;">
                                    <div style="flex:1 0 0; display:flex; font-size:1.5rem;">
                                        <div style="flex:1 0 0; display:flex; flex-direction:column; gap: 5px;">
                                            <div>
                                                <a href="/fighter/<?= $hisRow["player1"] ?>" style="position:relative">
                                                    <img class="fighter_img" style="width:100%; height:100%; object-fit: contain;" src='<? if($champ1Flag === 1){ echo $rankingChampImgPath1; }else{ echo $rankingImgPath1; } ?>' onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/fighter_blank.png'">
                                                    <? if($hisRow["result"] === 'N/C') { ?> <div style="position:absolute; bottom: 100%; left: calc(100% - 53px); width:45px;  bottom: 70px; background-color: #dddddd; font-size:0.8rem; padding:2px 10px; font-weight:bold;">N/C</div> <? } ?>
                                                    <? if($hisRow["player1"] === $hisRow["winner_player"]) { ?> <div style="position:absolute; bottom: 100%; left: calc(100% - 53px); width:45px; bottom: 70px; background-color: #ffba3c; font-size:0.8rem; padding:2px 10px; font-weight:bold;">Win</div> <? } ?>
                                                </a>
                                            </div>
                                            <div style="height:18px; text-align:center; display:flex; justify-content:center;">
                                            <?
                                                while ($division1Row = sql_fetch_array($division1Result)) { ?>
                                                    <span class="division-info"><?=$division1Row['division']?> #<? if($division1Row['ranking'] === '0') { echo "C"; } else { echo $division1Row['ranking']; }?></span>
                                                    <? if($division1Row['ranking_type'] === '2'){ ?>
                                                        <span style="background-color: #4477ff; font-size: 0.5rem; line-height: 5px; padding: 5px; border-radius: 13px; margin-left: -11px;" >A</span>
                                                    <? } ?>
                                            <? } ?>
                                            </div> 
                                            <div style="text-align:center; font-size:1rem;"><?= $hisRow['name1'] ?></div>
                                        </div>
                                        <div style="flex:1 0 0; display:flex; justify-content: center; align-items: center;">VS</div>
                                        <div style="flex:1 0 0; display:flex; flex-direction:column; gap:5px;">
                                            <div>
                                                <a href="/fighter/<?= $hisRow["player2"] ?>" style="position:relative">
                                                    <img class="fighter_img" style="width:100%; height:100%; object-fit: contain;" src='<? if($champ2Flag === 1){ echo $rankingChampImgPath2; }else{ echo $rankingImgPath2; } ?>' onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/fighter_blank.png'">
                                                    <? if($hisRow["result"] === 'N/C') { ?> <div style="position:absolute; bottom: 100%; left: calc(100% - 50px); width:45px; bottom: 70px; background-color: #dddddd; font-size:0.8rem; padding:2px 10px; font-weight:bold;">N/C</div> <? } ?>
                                                    <? if($hisRow["player2"] === $hisRow["winner_player"]) { ?> <div style="position:absolute; bottom: 100%; left: calc(100% - 50px); width:45px; bottom: 70px; background-color: #ffba3c; font-size:0.8rem; padding:2px 10px; font-weight:bold;">Win</div> <? } ?>
                                                </a>
                                            </div>
                                            <div style="height:18px; text-align:center; display:flex; justify-content:center;">
                                            <?
                                                while ($division2Row = sql_fetch_array($division2Result)) { ?>
                                                    <span class="division-info"><?=$division2Row['division']?> #<? if($division2Row['ranking'] === '0') { echo "C"; } else { echo $division2Row['ranking']; }?></span>
                                                    <? if($division2Row['ranking_type'] === '2'){ ?>
                                                        <span style="background-color: #4477ff; font-size: 0.5rem; line-height: 5px; padding: 5px; border-radius: 13px; margin-left: -11px;" >A</span>
                                                    <? } ?>
                                            <? } ?>
                                            </div> 
                                            <div style="text-align:center; font-size:1rem;"><?= $hisRow['name2'] ?></div>
                                        </div>
                                    </div>
                                    <div style="flex:1 0 0; display:flex; justify-content:space-between; font-size:0.8rem;">
                                        <div style="flex:1 0 0;  text-align:center;"><?= $hisRow['ringname1'] ?><br>
                                            <span style="color:#bbbbbb; font-size:0.7rem"><? echo $hisRow['win1']."W ".$hisRow['lose1']."L "; if($hisRow['draw1'] !== '0') { echo $hisRow['draw1']."D";} ?></span></div>
                                        <div style="flex:1 0 0;"></div>
                                        <div style="flex:1 0 0;  text-align:center;"><?= $hisRow['ringname2'] ?><br>
                                            <span style="color:#bbbbbb; font-size:0.7rem"><? echo $hisRow['win2']."W ".$hisRow['lose2']."L "; if($hisRow['draw2'] !== '0') { echo $hisRow['draw2']."D";} ?></span></div>
                                    </div>
                                    <div style="flex:1 0 0; text-align:center">
                                        <div style="display : inline-block; margin-right:5px;">
                                            FULL FIGHT 
                                            <? if($hisRow['video_url'] === null || $hisRow['video_url'] === ''){ ?>
                                                <a href="javascript:alert('등록된 경기영상이 없습니다.');">
                                            <? }else { ?>
                                                <a href="<?= $hisRow['video_url'] ?>">
                                            <? } ?>    
                                                <img style="width:25px; margin-bottom: 3px;" src="<?php echo G5_THEME_IMG_URL; ?>/youtube_icon.png" />
                                            </a>
                                        </div>
                                        |
                                        <div style="display : inline-block; margin-left:5px; cursor: pointer;">
                                            SCORE CARD
                                            <a id="openModal" href="javascript:openScoreCard(<? if($hisRow['score_seq']){ echo $hisRow['score_seq'];  }else{ echo "null"; } ?>, '<?= $hisRow['name1'] ?>', '<?= $hisRow['name2'] ?>')">
                                                <img style="width:25px; margin-bottom: 4px;" src="<?php echo G5_THEME_IMG_URL; ?>/doc_icon.png" />
                                            </a>
                                        </div>
                                    </div>
                                    <div style="flex:1 0 50px; display : flex; justify-content : center; align-items : center; background-color: #ffba3c; font-size: 1.0rem;vertical-align: center;">
                                        <?= $hisRow['fight_name'] ?>
                                    </div>
                                    
                                        <? 
                                            $noVote = false;
                                            if($hisRow["vote1"] == 0 && $hisRow["vote2"] == 0){
                                                $vote1Per = '0%';
                                                $vote2Per = '0%';
                                                $noVote = true;
                                            }else if($hisRow["vote1"] == 0) {
                                                $vote1Per = '0%';
                                                $vote2Per = '100%';
                                            }else if($hisRow["vote2"] == 0){
                                                $vote1Per = '100%';
                                                $vote2Per = '0%';
                                            }else{
                                                $vote1Per = round($hisRow["vote1"]/($hisRow["vote1"]+$hisRow["vote2"])*100, 0)."%"; 
                                                $vote2Per = round($hisRow["vote2"]/($hisRow["vote1"]+$hisRow["vote2"])*100, 0)."%"; 
                                            }
                                        ?>
                                        <div style="flex: 0.5 0 0; display:flex;">
                                            <? if($row["vote_yn"] == '0'){ ?>
                                                <a class="arrow-btn arrow-left"></a>
                                            <? }else if($hisRow["guess_winner"] == null){ ?>
                                                <a class="arrow-btn arrow-left" href="javascript:winnerVote('<?= $hisRow["seq"] ?>', 1)"><img style="width:20px; margin-bottom: 3px;" src="<?php echo G5_THEME_IMG_URL; ?>/up-arrow.png" /></a>
                                            <? }else if($hisRow["guess_winner"] == 1){?>
                                                <a class="arrow-btn arrow-left"><img style="width:20px; margin-bottom: 3px;" src="<?php echo G5_THEME_IMG_URL; ?>/up-arrow-disabled.png" /></a>
                                            <? }else{ ?>
                                                <a class="arrow-btn arrow-left"></a>
                                            <? } ?>
                                            
                                            
                                            <div class="vote-rate-bar" <? if($noVote) { echo 'style="border: 1px solid gray;"'; } ?>>
                                                <div class="vote-item vote-left" style="width:<?=$vote1Per?>; <? if($vote1Per != '0%') { echo 'border: 1px solid gray;"'; } ?>"></div>
                                                <div class="vote-item vote-right" style="width:<?=$vote2Per?>; <? if($vote2Per != '0%') { echo 'border: 1px solid gray;"'; } ?>"></div>
                                            </div>
                                            <? if($row["vote_yn"] == '0'){ ?>
                                                <a class="arrow-btn arrow-right"></a>
                                            <? }else if($hisRow["guess_winner"] == null){ ?>
                                                <a class="arrow-btn arrow-right" href="javascript:winnerVote('<?= $hisRow["seq"] ?>', 2)"><img style="width:20px; margin-bottom: 3px;" src="<?php echo G5_THEME_IMG_URL; ?>/up-arrow.png" /></a>
                                            <? }else if($hisRow["guess_winner"] == 2){?>
                                                <a class="arrow-btn arrow-right"><img style="width:20px; margin-bottom: 3px;" src="<?php echo G5_THEME_IMG_URL; ?>/up-arrow-disabled.png" /></a>
                                            <? }else{ ?>
                                                <a class="arrow-btn arrow-right"></a>
                                            <? } ?>
                                                
                                            
                                            
                                        </div>
                                        <div class="vote-desc">
                                            <span style="margin-left: 20px; font-size: 0.7rem;"><?=$vote1Per?> <? if($is_admin){ echo "(".$hisRow["vote1"].")"; } ?></span>
                                            <span style="font-size: 0.7rem;">승부예측</span>
                                            <span style="margin-right: 20px; font-size: 0.7rem;"><? if($is_admin){ echo "(".$hisRow["vote2"].")"; } ?> <?=$vote2Per?></span>
                                        </div>
                                    
                                </div>
                                
                            </div>
<? } ?>
                        </div>
                </div>


                
                

                
            </div>
        </div>
    </div>
    <div id="modalBackground" class="modal-background" onclick="closeScoreCard()">
        <div id="modal" class="modal">
            <span id="closeModal" class="close-button" onclick="closeScoreCard()">&times;</span>
            <h2>Score Card</h2>
            <div style="display:flex; flex-direction:column; gap:10px; margin-top:20px;">
                <div style="flex:1 0 0; ">
                    <table >
                        <tr>
                            <td colspan="5">
                                <div>
                                    <span class="large-txt">부심</span><br>
                                    <span id='referee_name1'></span>
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
                            <td class="large-txt" style="width:19%">점수</td>
                            <td class="large-txt" style="width:19%">감점</td>
                            <td class="large-txt" style="width:19%">라운드</td>
                            <td class="large-txt" style="width:19%">점수</td>
                            <td class="large-txt" style="width:19%">감점</td>
                        </tr>
                        <tr class="scoreDetail">
                            <td id='score111'></td>
                            <td id='minus_score111'></td>
                            <td class="large-txt">1</td>
                            <td id='score121'></td>
                            <td id='minus_score121'></td>
                        </tr>
                        <tr class="scoreDetail">
                            <td id='score112'></td>
                            <td id='minus_score112'></td>
                            <td class="large-txt">2</td>
                            <td id='score122'></td>
                            <td id='minus_score122'></td>
                        </tr>
                        <tr class="scoreDetail">
                            <td id='score113'></td>
                            <td id='minus_score113'></td>
                            <td class="large-txt">3</td>
                            <td id='score123'></td>
                            <td id='minus_score123'></td>
                        </tr>
                        <tr class="scoreDetail">
                            <td colspan="2" id='total_score11'></td>
                            <td class="large-txt">Total</td>
                            <td colspan="2" id='total_score12'></td>
                        </tr>
                        
                        <tr>
                            <td colspan="5">
                                <div style="display:flex;">
                                    <div style="flex:2 0 0;" class="large-txt">연장회의 여부</div>
                                    <div style="flex:1 0 0;" id='overtimeYn11'></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td id='score114'></td>
                            <td id='minus_score114'></td>
                            <td class="large-txt">4</td>
                            <td id='score124'></td>
                            <td id='minus_score124'></td>
                        </tr>
                    </table>
                </div>
                <div style="flex:1 0 0; ">
                    <table >
                        <tr>
                            <td colspan="5">
                                <div>
                                    <span class="large-txt">부심</span><br>
                                    <span id='referee_name2'></span>
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
                            <td class="large-txt" style="width:19%">점수</td>
                            <td class="large-txt" style="width:19%">감점</td>
                            <td class="large-txt" style="width:19%">라운드</td>
                            <td class="large-txt" style="width:19%">점수</td>
                            <td class="large-txt" style="width:19%">감점</td>
                        </tr>
                        <tr class="scoreDetail">
                            <td id='score211'></td>
                            <td id='minus_score211'></td>
                            <td class="large-txt">1</td>
                            <td id='score221'></td>
                            <td id='minus_score221'></td>
                        </tr>
                        <tr class="scoreDetail">
                            <td id='score212'></td>
                            <td id='minus_score212'></td>
                            <td class="large-txt">2</td>
                            <td id='score222'></td>
                            <td id='minus_score222'></td>
                        </tr>
                        <tr class="scoreDetail">
                            <td id='score213'></td>
                            <td id='minus_score213'></td>
                            <td class="large-txt">3</td>
                            <td id='score223'></td>
                            <td id='minus_score223'></td>
                        </tr>
                        <tr class="scoreDetail">
                            <td colspan="2" id='total_score21'></td>
                            <td class="large-txt">Total</td>
                            <td colspan="2" id='total_score22'></td>
                        </tr>
                        
                        <tr>
                            <td colspan="5">
                                <div style="display:flex;">
                                    <div style="flex:2 0 0;" class="large-txt">연장회의 여부</div>
                                    <div style="flex:1 0 0;" id='overtimeYn21'></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td id='score214'></td>
                            <td id='minus_score214'></td>
                            <td class="large-txt">4</td>
                            <td id='score224'></td>
                            <td id='minus_score224'></td>
                        </tr>
                    </table>
                </div>
                <div style="flex:1 0 0; ">
                    <table >
                        <tr>
                            <td colspan="5">
                                <div>
                                    <span class="large-txt">부심</span><br>
                                    <span id='referee_name3'></span>
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
                            <td class="large-txt" style="width:19%">점수</td>
                            <td class="large-txt" style="width:19%">감점</td>
                            <td class="large-txt" style="width:19%">라운드</td>
                            <td class="large-txt" style="width:19%">점수</td>
                            <td class="large-txt" style="width:19%">감점</td>
                        </tr>
                        <tr class="scoreDetail">
                            <td id='score311'></td>
                            <td id='minus_score311'></td>
                            <td class="large-txt">1</td>
                            <td id='score321'></td>
                            <td id='minus_score321'></td>
                        </tr>
                        <tr class="scoreDetail">
                            <td id='score312'></td>
                            <td id='minus_score312'></td>
                            <td class="large-txt">2</td>
                            <td id='score322'></td>
                            <td id='minus_score322'></td>
                        </tr>
                        <tr class="scoreDetail">
                            <td id='score313'></td>
                            <td id='minus_score313'></td>
                            <td class="large-txt">3</td>
                            <td id='score323'></td>
                            <td id='minus_score323'></td>
                        </tr>
                        <tr class="scoreDetail">
                            <td colspan="2" id='total_score31'></td>
                            <td class="large-txt">Total</td>
                            <td colspan="2" id='total_score32'></td>
                        </tr>
                        
                        <tr>
                            <td colspan="5">
                                <div style="display:flex;">
                                    <div style="flex:2 0 0;" class="large-txt">연장회의 여부</div>
                                    <div style="flex:1 0 0;" id='overtimeYn31'></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td id='score314'></td>
                            <td id='minus_score314'></td>
                            <td class="large-txt">4</td>
                            <td id='score324'></td>
                            <td id='minus_score324'></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            var key_visual_swiper = new Swiper('.key_visual_wrap', {
                // Optional parameters
                speed: 300,
                nested: true,
                loop: true,
                spaceBetween: 0,
                slidesPerView: 1,
                centeredSlides: true,
                grabCursor: true,
                autoplay: {
                    delay: 3000,
                },
                navigation: {
                    nextEl: '.key_visual_wrap .swiper-button-next',
                    prevEl: '.key_visual_wrap .swiper-button-prev',
                },
                pagination: {
                    el: '.key_visual_wrap .swiper-pagination',
                    type: 'bullets',
                },
            });

            var training_center_swiper = new Swiper('.training_center_wrap', {
                // Optional parameters
                speed: 250,
                nested: true,
                loop: true,
                spaceBetween: 30,
                slidesPerView: 1.65,
                centeredSlides: true,
                grabCursor: true,
                autoplay: {
                    delay: 3000,
                },
                navigation: {
                    nextEl: '.training_center_wrap .swiper-button-next',
                    prevEl: '.training_center_wrap .swiper-button-prev',
                },
                pagination: {
                    el: '.training_center_wrap .swiper-pagination',
                    type: 'bullets',
                },
            });

            const openModalButton = document.getElementById('openModal');
            const closeModalButton = document.getElementById('closeModal');
            const modalBackground = document.getElementById('modalBackground');
            const modal = document.getElementById('modal');

            // openModalButton.addEventListener('click', () => {
            //     modalBackground.style.display = 'flex';
            //     setTimeout(() => {
            //         modal.classList.add('show');
            //     }, 10); // Slight delay to trigger animation
            // });

            // closeModalButton.addEventListener('click', () => {
                
            // });

            // Optional: close modal when clicking outside of it
            // modalBackground.addEventListener('click', (event) => {
            //     if (event.target === modalBackground) {
            //         closeModalButton.click();
            //     }
            // });

        });


        let openScoreCard = (scoreSeq, name1, name2) => {
            if(!scoreSeq){
                alert("등록된 채점표가 없습니다.");
                return;
            }else{
                $.ajax({
                    url: '/findScore.php?score_seq=' + scoreSeq,
                    type: 'GET',
                    dataType: 'json',
                    success: function (info) {
                        console.log(info);
                        Object.keys(info).forEach(key => {
                            if(key.includes("overtimeYn")){
                                if(info[key] === '1'){
                                    $(`#${key}`).text("O");
                                }else{
                                    $(`#${key}`).text("X");
                                }
                            }else{
                                $(`#${key}`).text(info[key] === '0'? '' : info[key]);
                            }
                        });
                        $(".score_fighter_name1").text(name2);
                        $(".score_fighter_name2").text(name1);
                    },
                    error: function (error) {
                        console.error('API 호출 실패:', error);
                    }
                });
            }
            document.getElementById('modalBackground').style.display = 'flex';
            setTimeout(() => {
                modal.classList.add('show');
            }, 10); // Slight delay to trigger animation
        }

        let closeScoreCard = () => {
            modal.classList.remove('show');
            modal.classList.add('hide');
            setTimeout(() => {
                document.getElementById('modalBackground').style.display = 'none';
                modal.classList.remove('hide');
            }, 300); // Duration matches CSS transition
        }

        let winnerVote = (historySeq, guessWiner) => {
            $.ajax({
                type: 'POST',
                url: '/theme/blackcombat/api/winner_vote.php', // 실제 추가를 처리하는 PHP 파일 경로
                data: {
                    "historySeq": historySeq,
                    "guessWiner": guessWiner
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

        



    </script>
<?php
include_once(G5_THEME_PATH.'/tail.php');