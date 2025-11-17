<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_MOBILE_PATH.'/head.php');

add_stylesheet('<link rel="stylesheet" href="/theme/blackcombat/css/mobile_event.css?v=20220918">', 0);

$eventCategory = !empty($_GET['eventCategory']) ? $_GET['eventCategory'] : 'N';

$eventListSql = "SELECT
event_seq,
event_category,
`order`,
event_name,
event_name_short,
event_place,
event_date,
selling_yn,
sell_url,
max_img_idx,
prologue,
lsttm
FROM
blackcombat.tb_event
WHERE 
event_category = '$eventCategory'
ORDER by `order` desc;";
$eventListResult = sql_query($eventListSql);

?>

<style>
    .event_category li{
        margin: 0px 30px;
    }
    .event_category li a{
        font-size:40px;
    }
    .event_category select{
        width: 300px;
        height: 50px;
        font-size: 20px;
        text-align: center;
        font-weight: bold;
        background-color: #ffba3c;
        border:2px solid #777777;
        border-radius: 7px;
        cursor: pointer;
    }
    .event_category select option{
        background: white;
    }

    .event_contents{
        margin-top:50px
    }
    .event_contents .event_title{
        font-family: 'Teko', sans-serif, cursive;
        font-size:3rem;
        text-align:center;
    }

    
    
</style>
    <div class="sub_visual">
        <div class="sub_visual_items">
            <div class="sub_visual_caption">
                <div class="category">EVENT_NEW</div>
            </div>
        </div>
    </div>
    <div class="sub_content">
        <div class="sub_container">
            <div class="event_page">
                <div class="event_category">
                    <select onchange="location.href='/event_new.php?eventCategory='+value">
                        <option value="N" <? if($eventCategory === 'N') {echo "selected"; } ?>>NUMBERING SERIES</option>
                        <option value="R" <? if($eventCategory === 'R') {echo "selected"; } ?>>RISE SERIES</option>
                        <option value="C" <? if($eventCategory === 'C') {echo "selected"; } ?>>CHAMPIONS LEAGUES</option>
                    </select>
                </div>
                <div class="event_contents">
                    <? if($eventCategory === 'N'){ echo '<div class="event_title">BLACK COMBAT NUMBERING SERIES</div>';} ?>
                    <? if($eventCategory === 'R'){ echo '<div class="event_title">BLACK COMBAT RISE SERIES</div>';} ?>
                    <? if($eventCategory === 'C'){ echo '<div class="event_title">BLACK COMBAT CHAMPIONS LEAGUE SERIES</div>';} ?>
                    <div class="event_list">
                        <ul >
                        <?
                            while ($row = sql_fetch_array($eventListResult)) {
                                $dateString = $row["event_date"];
                                $date = new DateTime($dateString);
                                $formattedDate = $date->format('Y년 m월 d일');
                        ?>
                            <li style="width:100%; border-top: 1px solid #bbbbbb; padding:10px">
                                <div style="display:flex;">
                                    <div style="flex:1 1 80px;"><img style="width:100%; height:160px; object-fit: contain; " src="<?php echo G5_THEME_IMG_URL; ?>/event/<?= $row["event_seq"] ?>/thumb.jpg" /></div>
                                    <div style="flex:3 1 100px; display:flex; flex-direction:column; justify-content:center; padding:0px 70px; font-size:1.0rem;">
                                        <div style="font-size:1.1rem;"><b><?= $row["event_name"] ?></b></div>
                                        <div style="margin-bottom:10px"><?= $formattedDate ?></div>
                                        <div><?= $row["event_place"] ?></div>
                                    </div>
                                    <div style="flex:1 1 100px; display:flex; flex-direction:column; justify-content:center; align-items: center;">
                                    <? if($row["selling_yn"] === '1'){ ?>
                                        <button onclick='location.href="<?= $row["sell_url"] ?>"' style="width:150px; height:30px; font-weight:bold; background-color:#ffba3c; border:1px solid black; margin-bottom:10px;">티켓구매</button>
                                    <? } ?>
                                    
                                    <button onclick='location.href="/eventDetail.php?eventSeq=<?= $row["event_seq"] ?>"' style="width:150px; height:30px; font-weight:bold; border:1px solid black;">상세보기</button>
                                    </div>
                                </div>
                            </li>
                        <? } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include_once(G5_THEME_PATH.'/tail.php');