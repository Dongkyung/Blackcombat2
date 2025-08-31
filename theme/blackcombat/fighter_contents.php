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
            ,base.detail_image_name
            ,base.fighter_type
            ,base.music_name 
            ,base.music_url 
        FROM 
            tb_fighter_base base
            LEFT JOIN tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE
            fighter_seq = $page";
$result = sql_query($sql);
$row = mysqli_fetch_assoc($result);
$calculatedAge = age($row["birth"]);



$detailImgPath = "https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$page."/".$row['detail_image_name'];

$divisionSql = "SELECT ranking.division, ranking.ranking, ranking.ranking_type
                FROM tb_fighter_ranking ranking
                where ranking.fighter_seq = $page;";
$divisionResult = sql_query($divisionSql);


$historySql = "SELECT
    event.event_name_short as game_name 
    , event.event_seq
    , his.player1
    , base1.fighter_name as player1_name
    , his.player2
    , CASE WHEN his.player2 REGEXP '^[0-9]+$' THEN base2.fighter_name ELSE his.player2 END AS player2_name
    , his.winner_player
    , his.result
    , his.play_date
    , his.video_url
    from tb_fight_history his
    LEFT JOIN tb_fighter_base base1
    on his.player1 = base1.fighter_seq 
    LEFT JOIN tb_fighter_base base2
    on his.player2 = base2.fighter_seq
    left join tb_event event
    on event.event_seq = his.event_seq
    where player1 = $page
    OR player2 = $page
    order by play_date desc;";
$historyResult = sql_query($historySql);


$viewCountUpdateSql = "INSERT INTO tb_fighter_view_count (fighter_seq, view_count_day, view_count_week, view_count_month, view_count_total, lsttm)
    VALUES ($page, 1, 1, 1, 1, NOW())
    ON DUPLICATE KEY UPDATE 
        view_count_day = view_count_day + 1,
        view_count_week = view_count_week + 1,
        view_count_month = view_count_month + 1,
        view_count_total = view_count_total + 1,
        lsttm = NOW();";
sql_query($viewCountUpdateSql);

?>
<style>
    .match_list li{
        display:flex;
    }

    .match_list li.hidden{
        display:none;    
    }

    .match_list li#toggleButton{
        justify-content: center;
        cursor:pointer;
    }

    #album_container {
      cursor: pointer;
    }

    #album {
      width: 30px;
      height: 30px;
      background-image: url('https://www.blackcombat-official.com/theme/blackcombat/img/cd.png'); /* 원하는 이미지 */
      background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
      border-radius: 50%;
    }

    #album_title{
        font-size:1rem;
        font-weight:bold;
        font-style:italic;
    }

    .spinning {
      animation: spin 2s linear infinite;
    }

    @keyframes spin {
      from { transform: rotate(0deg); }
      to   { transform: rotate(360deg); }
    }

    
</style>

<div class="sub_content fighter" style="background-color: #000; padding-bottom: 30px;">
        <div class="sub_container">
            <div class="fighter_page">

                    <div class="fighter_info">
                        <div class="fighter_data">

                        <?php 
                            if(!($row['music_name'] === null || $row['music_name'] === "")){
                        ?>
                            <div id="album_container" style="display:flex; margin-bottom:15px;">
                                <div id="yt-container" style="display:none"></div>
                                <div id="album"></div>
                                <div id="album_title" style="margin-left:10px;"><?=$row['music_name']?></div>
                            </div>
                            
                        <?php
                            }
                        ?>

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
                                    <?= $row['lose'] ?> <div class="mini">Loss</div>
                                </div>
                                <div class="data_record_lose">
                                    <?= $row['draw'] ?> <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LATEST MATCHES
                                </div>
                                <div class="match_list">
                                    <ul>
                                    <?php  $historyIndex = 0;
                                    while ($historyRow = sql_fetch_array($historyResult)) {
                                        $historyIndex++; ?>
                                        <li class="<?php if($historyIndex > 4){ echo 'hidden'; } ?>">
                                            <div style="text-align:left; flex:0 0 auto;">
                                                <a href="https://www.blackcombat-official.com/eventDetail.php?eventSeq=<?=$historyRow['event_seq']?>" style="color:#FFFFFF">
                                                    <b><span <? if(!(strpos($historyRow['game_name'], "블랙컴뱃") !== false)){ echo "style='color:rgba(255, 255, 255, 0.6)'"; } ?> class='game_name'><?= $historyRow['game_name'] ?> : </span></b> 
                                                </a>
                                            </div>
                                            <div style="flex:0 0 auto;">
                                            <?php 
                                                if($historyRow['video_url'] === null || $historyRow['video_url'] === ''){
                                                    echo '<a href="javascript:alert(\'등록된 경기영상이 없습니다.\');">';
                                                }else {
                                                    echo '<a href="'.$historyRow['video_url'].'">';
                                                }
                                                echo '<img style="width:25px; margin-bottom: 3px;" src="'.G5_THEME_IMG_URL.'/youtube_icon.png" />';
                                                echo '</a>';
                                                
                                                if($historyRow['winner_player'] === "" || $historyRow['winner_player'] === null){
                                                    echo "";
                                                } else if($historyRow['winner_player'] == $page){
                                                    echo "<span class='match_result win'>Win</span>";
                                                } else if($historyRow['result'] == 'N/C'){
                                                    echo "<span class='match_result NC' style='background-color:unset'></span>";
                                                } else{
                                                    echo "<span class='match_result lose'>Loss</span>";
                                                }
                                            ?>
                                            <a href="https://www.blackcombat-official.com/fighter/<?=$historyRow['player1']?>" style="color:white"><span <? if( $historyRow['winner_player'] == $historyRow['player1'] ){ echo "class='winner_name'"; }?> ><?= $historyRow['player1_name'] ?></span> </a>
                                            vs
                                            <a href="https://www.blackcombat-official.com/fighter/<?=$historyRow['player2']?>" style="color:white"><span <? if( $historyRow['winner_player'] == $historyRow['player2'] ){ echo "class='winner_name'"; }?> ><?= $historyRow['player2_name'] ?></span> </a>
                                            <span style="margin-left:10px; font-size:0.7rem; display:contents;"><?=$historyRow['result']?></span>
                                            </div>
                                        </li>
                                    <?php } ?>
                                    <?php if($historyIndex > 4){ echo '<li id="toggleButton" style="text-align:center" onclick="foldToggle()">▼ 더보기</li>';} ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src='<?=$detailImgPath ?>' 
                                onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/fighter_full_blank.png'"
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

    
<script src="https://www.youtube.com/iframe_api"></script>
<script type="text/javascript">
    let isMobile = '<?= G5_IS_MOBILE ?>';
    let foldFlag = false;
    let foldToggle = () => {
        const toggleButton = document.querySelector(`.match_list li#toggleButton`);
        const listContainer = document.querySelector(`.match_list`);
        const hiddenItems = document.querySelectorAll(`.match_list li.hidden`);

        if (foldFlag) {
            listContainer.style.maxHeight = '125px';
            hiddenItems.forEach(item => {
                item.style.display = 'none';
            });
            toggleButton.textContent = '▼ 더보기';
        } else {
                let maxheight = (170 + 30*hiddenItems.length);
            listContainer.style.maxHeight = `${maxheight}px`;
            hiddenItems.forEach(item => {
                item.style.display = 'flex';
            });
            toggleButton.textContent = '▲ 접기';
        }
        foldFlag = !foldFlag;
    }
</script>

<?php 
    if(!($row['music_name'] === null || $row['music_name'] === "")){
?>
    
    <script type="text/javascript">
        let player;
        let isPlaying = false;

        function onYouTubeIframeAPIReady() {
                player = new YT.Player('yt-container', {
                    height: '0',
                    width: '0',
                    videoId: '<?= $row['music_url'] ?>',
                    playerVars: {
                    'autoplay': 0,
                    'controls': 0,
                    'mute': 0
                    },
                    events: {
                    'onReady': function (event) {
                    }
                    }
                });
            }

        const albumContainer = document.getElementById("album_container");
        const album = document.getElementById("album");

        albumContainer.addEventListener("click", () => {
            tryPlayOrPause(0);
        });

        let showPlayer = false;
        function tryPlayOrPause(retryCount) {
            const maxRetries = 30; // 최대 3초 (100ms * 30)

            if (!player || typeof player.playVideo !== 'function') {
                if (retryCount < maxRetries) {
                    setTimeout(() => {
                        tryPlayOrPause(retryCount + 1);
                    }, 300);
                } else {
                    alert("음악 재생에 실패하였습니다. 새로고침 후 다시 시도해주세요.")
                    console.warn("유튜브 플레이어 초기화 실패 (재시도 초과)");
                }
                return;
            }

            if(!showPlayer){

                let ytContainer = $("#yt-container");
                if(isMobile === '1'){
                    ytContainer.css({'display': 'block', 'width': '100px', 'height': '50px', 'position': 'absolute', 'top': '130px'})
                }else{
                    ytContainer.css({'display': 'block', 'width': '100px', 'height': '50px', 'position': 'absolute', 'top': '20px'})
                }
            }

            if (isPlaying) {
                player.pauseVideo();
                album.classList.remove("spinning");
            } else {
                player.playVideo();
                album.classList.add("spinning");
            }
            isPlaying = !isPlaying;
        }
    </script>
<?php        
    }
?>