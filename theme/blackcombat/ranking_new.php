<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.php');
include_once('./_common.php');

add_stylesheet('<link rel="stylesheet" href="/theme/blackcombat/css/ranking.css">', 0);



$type = !empty($_GET['type']) ? $_GET['type'] : 'fighter';
?>

    <div class="sub_visual">
        <div class="sub_visual_items">
            <div class="sub_visual_caption">
                <div class="category">RANKING_NEW</div>
            </div>
        </div>
    </div>
    <div class="sub_content">
        <div class="sub_container" style="max-width:1280px;">
            <div class="ranking_page">
                <div class="ranking_category">
                    <ul>
                        <li>
                            <a href="<?php echo G5_URL ?>/ranking.php?type=fighter" class="<?php echo $type == 'fighter' ? 'active' : ''; ?>">Fighter</a>
                        </li>
                        <li>
                            <a href="<?php echo G5_URL ?>/ranking.php?type=team" class="<?php echo $type == 'team' ? 'active' : ''; ?>">Team</a>
                        </li>
                    </ul>
                </div>

                <?php if ($type == 'fighter') { ?>

                    <div class="ranking_list">
                    <div class="ranking_list_part">
                        <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter_new.php?page=under_0';">
                            <h3><span class="weight">언더그라운드</span> <span class="champ">CHAMPION</span></h3>
                            <div class="ranking_champ_name">
                                검정
                                <div class="ranking_ring_name">Godfather</div>
                            </div>
                            <div class="ranking_champ_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_godfather.png" />
                            </div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter_new.php?page=under_1';">
                            <div class="ranking_list_num">1</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_joker.png">
                            </div>
                            <div class="ranking_list_name">정도한<span class="ring_name">Joker / Extreme 익스트림 컴뱃</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter_new.php?page=under_2';">
                            <div class="ranking_list_num">2</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_koko.png">
                            </div>
                            <div class="ranking_list_name">소재호<span class="ring_name">KOKO</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter_new.php?page=under_3';">
                            <div class="ranking_list_num">3</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_thelion.png">
                            </div>
                            <div class="ranking_list_name">오반<span class="ring_name">The Lion</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter_new.php?page=under_4';">
                            <div class="ranking_list_num">4</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">신종훈<span class="ring_name">The Mosquitto</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter_new.php?page=under_5';">
                            <div class="ranking_list_num">5</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_hochul.png">
                            </div>
                            <div class="ranking_list_name">호철<span class="ring_name">뚝배기사범</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item"onclick="location.href='<?php echo G5_URL ?>/fighter_new.php?page=under_6';">
                            <div class="ranking_list_num">6</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">김동환<span class="ring_name">아수라 / 블랙컴뱃 본관</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                    </div>


                     <!---------------- 플라이급 ------------------------->
                    <div class="ranking_list_part">
<?
    $sql = "SELECT 
        ranking.ranking, ranking.fighter_seq, base.fighter_name, base.fighter_ringname, team.team_name, base.rankingImageBin, ranking.ranking_updown, ranking.lsttm
        FROM blackcombat.tb_fighter_ranking ranking
        LEFT JOIN blackcombat.tb_fighter_base base
            ON ranking.fighter_seq = base.fighter_seq 
        LEFT JOIN blackcombat.tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE division='플라이급' AND ranking_type = 1
        ORDER BY 
        CASE WHEN ranking = 'c' THEN 0  
        ELSE CAST(ranking AS UNSIGNED) END, ranking;";
        $result = sql_query($sql);

        while ($row = sql_fetch_array($result)) {
            
            $base64ImageDataRanking = base64_encode($row['rankingImageBin']);
            if($row['ranking'] === '0'){
?>
                        <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter_new.php?page=<?= $row['fighter_seq'] ?>';">
                            <h3><span class="weight">플라이급</span> <span class="champ">CHAMPION</span></h3>
                            <div class="ranking_champ_name">
                                <?= $row['fighter_name'] ?>
                                <div class="ranking_ring_name"><?= $row['fighter_ringname'] ?></div>
                                <div class="ranking_ring_name"><?= $row['team_name'] ?></div>
                            </div>
                            <div class="ranking_champ_photo">
                                <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                    onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                            </div>
                        </div>
<?
            }else{
?>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter_new.php?page=<?= $row['fighter_seq'] ?>';">
                            <div class="ranking_list_num"> <?=$row['ranking']?> </div>
                            <div class="ranking_list_photo">
                            <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                            onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                            </div>
                            <div class="ranking_list_name"><?= $row['fighter_name'] ?><span class="ring_name"><?= $row['fighter_ringname'] ?> / <?= $row['team_name'] ?></span></div>
                            <div class="ranking_list_change">
                                <?
                                 if($row['ranking_updown'] === '0'){
                                    echo '-';
                                 }else if($row['ranking_updown'] === 'new'){
                                    echo 'New';
                                 }else if($row['ranking_updown'] > 0){
                                    echo '▲ '.$row['ranking_updown'];
                                 }else{
                                    echo '▼ '.(0 - $row['ranking_updown']);
                                 }
                                ?>
                            </div>
                        </div>
<?
            }
        }

?>
                    </div>




                    <!---------------- 밴텀급 ------------------------->
                    <div class="ranking_list_part">
<?
    $sql = "SELECT 
        ranking.ranking, ranking.fighter_seq, base.fighter_name, base.fighter_ringname, team.team_name, base.rankingImageBin, ranking.ranking_updown, ranking.lsttm
        FROM blackcombat.tb_fighter_ranking ranking
        LEFT JOIN blackcombat.tb_fighter_base base
            ON ranking.fighter_seq = base.fighter_seq 
        LEFT JOIN blackcombat.tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE division='밴텀급' AND ranking_type = 1
        ORDER BY 
        CASE WHEN ranking = 'c' THEN 0  
        ELSE CAST(ranking AS UNSIGNED) END, ranking;";
        $result = sql_query($sql);

        while ($row = sql_fetch_array($result)) {
            
            $base64ImageDataRanking = base64_encode($row['rankingImageBin']);
            if($row['ranking'] === '0'){
?>
                        <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter_new.php?page=<?= $row['fighter_seq'] ?>';">
                            <h3><span class="weight">밴텀급</span> <span class="champ">CHAMPION</span></h3>
                            <div class="ranking_champ_name">
                                <?= $row['fighter_name'] ?>
                                <div class="ranking_ring_name"><?= $row['fighter_ringname'] ?></div>
                                <div class="ranking_ring_name"><?= $row['team_name'] ?></div>
                            </div>
                            <div class="ranking_champ_photo">
                                <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                    onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                            </div>
                        </div>
<?
            }else{
?>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter_new.php?page=<?= $row['fighter_seq'] ?>';">
                            <div class="ranking_list_num"> <?=$row['ranking']?> </div>
                            <div class="ranking_list_photo">
                            <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                            onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                            </div>
                            <div class="ranking_list_name"><?= $row['fighter_name'] ?><span class="ring_name"><?= $row['fighter_ringname'] ?> / <?= $row['team_name'] ?></span></div>
                            <div class="ranking_list_change">
                                <?
                                 if($row['ranking_updown'] === '0'){
                                    echo '-';
                                 }else if($row['ranking_updown'] === 'new'){
                                    echo 'New';
                                 }else if($row['ranking_updown'] > 0){
                                    echo '▲ '.$row['ranking_updown'];
                                 }else{
                                    echo '▼ '.(0 - $row['ranking_updown']);
                                 }
                                ?>
                            </div>
                        </div>
<?
            }
        }

?>
                    </div>



                    <!---------------- 페더급 ------------------------->
                    <div class="ranking_list_part">
<?
    $sql = "SELECT 
        ranking.ranking, ranking.fighter_seq, base.fighter_name, base.fighter_ringname, team.team_name, base.rankingImageBin, ranking.ranking_updown, ranking.lsttm
        FROM blackcombat.tb_fighter_ranking ranking
        LEFT JOIN blackcombat.tb_fighter_base base
            ON ranking.fighter_seq = base.fighter_seq 
        LEFT JOIN blackcombat.tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE division='페더급' AND ranking_type = 1
        ORDER BY 
        CASE WHEN ranking = 'c' THEN 0  
        ELSE CAST(ranking AS UNSIGNED) END, ranking;";
        $result = sql_query($sql);

        while ($row = sql_fetch_array($result)) {
            
            $base64ImageDataRanking = base64_encode($row['rankingImageBin']);
            if($row['ranking'] === '0'){
?>
                        <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter_new.php?page=<?= $row['fighter_seq'] ?>';">
                            <h3><span class="weight">페더급</span> <span class="champ">CHAMPION</span></h3>
                            <div class="ranking_champ_name">
                                <?= $row['fighter_name'] ?>
                                <div class="ranking_ring_name"><?= $row['fighter_ringname'] ?></div>
                                <div class="ranking_ring_name"><?= $row['team_name'] ?></div>
                            </div>
                            <div class="ranking_champ_photo">
                                <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                    onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                            </div>
                        </div>
<?
            }else{
?>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter_new.php?page=<?= $row['fighter_seq'] ?>';">
                            <div class="ranking_list_num"> <?=$row['ranking']?> </div>
                            <div class="ranking_list_photo">
                            <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                            onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                            </div>
                            <div class="ranking_list_name"><?= $row['fighter_name'] ?><span class="ring_name"><?= $row['fighter_ringname'] ?> / <?= $row['team_name'] ?></span></div>
                            <div class="ranking_list_change">
                                <?
                                 if($row['ranking_updown'] === '0'){
                                    echo '-';
                                 }else if($row['ranking_updown'] === 'new'){
                                    echo 'New';
                                 }else if($row['ranking_updown'] > 0){
                                    echo '▲ '.$row['ranking_updown'];
                                 }else{
                                    echo '▼ '.(0 - $row['ranking_updown']);
                                 }
                                ?>
                            </div>
                        </div>
<?
            }
        }

?>
                    </div>
                    
                    


                    <!---------------- 라이트급 ------------------------->
                    <div class="ranking_list_part">
<?
    $sql = "SELECT 
        ranking.ranking, ranking.fighter_seq, base.fighter_name, base.fighter_ringname, team.team_name, base.rankingImageBin, ranking.ranking_updown, ranking.lsttm
        FROM blackcombat.tb_fighter_ranking ranking
        LEFT JOIN blackcombat.tb_fighter_base base
            ON ranking.fighter_seq = base.fighter_seq 
        LEFT JOIN blackcombat.tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE division='라이트급' AND ranking_type = 1
        ORDER BY 
        CASE WHEN ranking = 'c' THEN 0  
        ELSE CAST(ranking AS UNSIGNED) END, ranking;";
        $result = sql_query($sql);

        while ($row = sql_fetch_array($result)) {
            
            $base64ImageDataRanking = base64_encode($row['rankingImageBin']);
            if($row['ranking'] === '0'){
?>
                        <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter_new.php?page=<?= $row['fighter_seq'] ?>';">
                            <h3><span class="weight">라이트급</span> <span class="champ">CHAMPION</span></h3>
                            <div class="ranking_champ_name">
                                <?= $row['fighter_name'] ?>
                                <div class="ranking_ring_name"><?= $row['fighter_ringname'] ?></div>
                                <div class="ranking_ring_name"><?= $row['team_name'] ?></div>
                            </div>
                            <div class="ranking_champ_photo">
                                <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                    onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                            </div>
                        </div>
<?
            }else{
?>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter_new.php?page=<?= $row['fighter_seq'] ?>';">
                            <div class="ranking_list_num"> <?=$row['ranking']?> </div>
                            <div class="ranking_list_photo">
                            <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                            onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                            </div>
                            <div class="ranking_list_name"><?= $row['fighter_name'] ?><span class="ring_name"><?= $row['fighter_ringname'] ?> / <?= $row['team_name'] ?></span></div>
                            <div class="ranking_list_change">
                                <?
                                 if($row['ranking_updown'] === '0'){
                                    echo '-';
                                 }else if($row['ranking_updown'] === 'new'){
                                    echo 'New';
                                 }else if($row['ranking_updown'] > 0){
                                    echo '▲ '.$row['ranking_updown'];
                                 }else{
                                    echo '▼ '.(0 - $row['ranking_updown']);
                                 }
                                ?>
                            </div>
                        </div>
<?
            }
        }

?>
                    </div>
                    


                    <!---------------- 미들급 ------------------------->
                    <div class="ranking_list_part">
<?
    $sql = "SELECT 
        ranking.ranking, ranking.fighter_seq, base.fighter_name, base.fighter_ringname, team.team_name, base.rankingImageBin, ranking.ranking_updown, ranking.lsttm
        FROM blackcombat.tb_fighter_ranking ranking
        LEFT JOIN blackcombat.tb_fighter_base base
            ON ranking.fighter_seq = base.fighter_seq 
        LEFT JOIN blackcombat.tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE division='미들급' AND ranking_type = 1
        ORDER BY 
        CASE WHEN ranking = 'c' THEN 0  
        ELSE CAST(ranking AS UNSIGNED) END, ranking;";
        $result = sql_query($sql);

        while ($row = sql_fetch_array($result)) {
            
            $base64ImageDataRanking = base64_encode($row['rankingImageBin']);
            if($row['ranking'] === '0'){
?>
                        <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter_new.php?page=<?= $row['fighter_seq'] ?>';">
                            <h3><span class="weight">미들급</span> <span class="champ">CHAMPION</span></h3>
                            <div class="ranking_champ_name">
                                <?= $row['fighter_name'] ?>
                                <div class="ranking_ring_name"><?= $row['fighter_ringname'] ?></div>
                                <div class="ranking_ring_name"><?= $row['team_name'] ?></div>
                            </div>
                            <div class="ranking_champ_photo">
                                <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                    onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                            </div>
                        </div>
<?
            }else{
?>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter_new.php?page=<?= $row['fighter_seq'] ?>';">
                            <div class="ranking_list_num"> <?=$row['ranking']?> </div>
                            <div class="ranking_list_photo">
                            <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                            onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                            </div>
                            <div class="ranking_list_name"><?= $row['fighter_name'] ?><span class="ring_name"><?= $row['fighter_ringname'] ?> / <?= $row['team_name'] ?></span></div>
                            <div class="ranking_list_change">
                                <?
                                 if($row['ranking_updown'] === '0'){
                                    echo '-';
                                 }else if($row['ranking_updown'] === 'new'){
                                    echo 'New';
                                 }else if($row['ranking_updown'] > 0){
                                    echo '▲ '.$row['ranking_updown'];
                                 }else{
                                    echo '▼ '.(0 - $row['ranking_updown']);
                                 }
                                ?>
                            </div>
                        </div>
<?
            }
        }

?>
                    </div>
                    
                    </div>


                    <!---------------- 중량급 ------------------------->
                    <div class="ranking_list_part">
<?
    $sql = "SELECT 
        ranking.ranking, ranking.fighter_seq, base.fighter_name, base.fighter_ringname, team.team_name, base.rankingImageBin, ranking.ranking_updown, ranking.lsttm
        FROM blackcombat.tb_fighter_ranking ranking
        LEFT JOIN blackcombat.tb_fighter_base base
            ON ranking.fighter_seq = base.fighter_seq 
        LEFT JOIN blackcombat.tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE division='중량급' AND ranking_type = 1
        ORDER BY 
        CASE WHEN ranking = 'c' THEN 0  
        ELSE CAST(ranking AS UNSIGNED) END, ranking;";
        $result = sql_query($sql);

        while ($row = sql_fetch_array($result)) {
            
            $base64ImageDataRanking = base64_encode($row['rankingImageBin']);
            if($row['ranking'] === '0'){
?>
                        <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter_new.php?page=<?= $row['fighter_seq'] ?>';">
                            <h3><span class="weight">중량급</span> <span class="champ">CHAMPION</span></h3>
                            <div class="ranking_champ_name">
                                <?= $row['fighter_name'] ?>
                                <div class="ranking_ring_name"><?= $row['fighter_ringname'] ?></div>
                                <div class="ranking_ring_name"><?= $row['team_name'] ?></div>
                            </div>
                            <div class="ranking_champ_photo">
                                <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                    onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                            </div>
                        </div>
<?
            }else{
?>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter_new.php?page=<?= $row['fighter_seq'] ?>';">
                            <div class="ranking_list_num"> <?=$row['ranking']?> </div>
                            <div class="ranking_list_photo">
                            <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                            onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                            </div>
                            <div class="ranking_list_name"><?= $row['fighter_name'] ?><span class="ring_name"><?= $row['fighter_ringname'] ?> / <?= $row['team_name'] ?></span></div>
                            <div class="ranking_list_change">
                                <?
                                 if($row['ranking_updown'] === '0'){
                                    echo '-';
                                 }else if($row['ranking_updown'] === 'new'){
                                    echo 'New';
                                 }else if($row['ranking_updown'] > 0){
                                    echo '▲ '.$row['ranking_updown'];
                                 }else{
                                    echo '▼ '.(0 - $row['ranking_updown']);
                                 }
                                ?>
                            </div>
                        </div>
<?
            }
        }

?>
                    </div>



                    <!---------------- 여성부 ------------------------->
                    <div class="ranking_list_part">
<?
    $sql = "SELECT 
        ranking.ranking, ranking.fighter_seq, base.fighter_name, base.fighter_ringname, team.team_name, base.rankingImageBin, ranking.ranking_updown, ranking.lsttm
        FROM blackcombat.tb_fighter_ranking ranking
        LEFT JOIN blackcombat.tb_fighter_base base
            ON ranking.fighter_seq = base.fighter_seq 
        LEFT JOIN blackcombat.tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE division='여성부' AND ranking_type = 1
        ORDER BY 
        CASE WHEN ranking = 'c' THEN 0  
        ELSE CAST(ranking AS UNSIGNED) END, ranking;";
        $result = sql_query($sql);

        while ($row = sql_fetch_array($result)) {
            
            $base64ImageDataRanking = base64_encode($row['rankingImageBin']);
            if($row['ranking'] === '0'){
?>
                        <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter_new.php?page=<?= $row['fighter_seq'] ?>';">
                            <h3><span class="weight">여성부</span> <span class="champ">CHAMPION</span></h3>
                            <div class="ranking_champ_name">
                                <?= $row['fighter_name'] ?>
                                <div class="ranking_ring_name"><?= $row['fighter_ringname'] ?></div>
                                <div class="ranking_ring_name"><?= $row['team_name'] ?></div>
                            </div>
                            <div class="ranking_champ_photo">
                                <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                    onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                            </div>
                        </div>
<?
            }else{
?>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter_new.php?page=<?= $row['fighter_seq'] ?>';">
                            <div class="ranking_list_num"> <?=$row['ranking']?> </div>
                            <div class="ranking_list_photo">
                            <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                            onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                            </div>
                            <div class="ranking_list_name"><?= $row['fighter_name'] ?><span class="ring_name"><?= $row['fighter_ringname'] ?> / <?= $row['team_name'] ?></span></div>
                            <div class="ranking_list_change">
                                <?
                                 if($row['ranking_updown'] === '0'){
                                    echo '-';
                                 }else if($row['ranking_updown'] === 'new'){
                                    echo 'New';
                                 }else if($row['ranking_updown'] > 0){
                                    echo '▲ '.$row['ranking_updown'];
                                 }else{
                                    echo '▼ '.(0 - $row['ranking_updown']);
                                 }
                                ?>
                            </div>
                        </div>
<?
            }
        }

?>
                    </div>


                <?php } else { ?>

                    <div class="ranking_team_list">
                        <div class="ranking_team_part">
                            <div class="ranking_team_logo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/team_excombat.png" />
                            </div>
                            <div class="ranking_team_info">
                                <div class="ranking_team_num">
                                    <span>Rank</span> 1
                                </div>
                                <div class="ranking_team_name">
                                    Extreme 익스트림 컴뱃
                                </div>
                                <div class="ranking_team_address">
                                    경기도 고양시 덕양구 화신로260번길 58, B01호
                                    <div class="tel">031-965-2347</div>
                                </div>
                            </div>
                        </div>
                        <div class="ranking_team_part">
                            <div class="ranking_team_logo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/team_mmastory.png" />
                            </div>
                            <div class="ranking_team_info">
                                <div class="ranking_team_num">
                                    <span>Rank</span> 2
                                </div>
                                <div class="ranking_team_name">
                                    아리에 블랙 MMA 스토리
                                </div>
                                <div class="ranking_team_address">
                                    서울특별시 도봉구 노해로63가길 42 B1
                                    <div class="tel">0507-1345-9663</div>
                                </div>
                            </div>
                        </div>
                        <div class="ranking_team_part">
                            <div class="ranking_team_logo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/team_ssabi.png" />
                            </div>
                            <div class="ranking_team_info">
                                <div class="ranking_team_num">
                                    <span>Rank</span> 3
                                </div>
                                <div class="ranking_team_name">
                                   싸비 MMA
                                </div>
                                <div class="ranking_team_address">
                                    서울 마포구 양화로 85
                                    <div class="tel">02-6218-1800</div>
                                </div>
                            </div>
                        </div>
                        <div class="ranking_team_part">
                            <div class="ranking_team_logo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/team_solid.png" />
                            </div>
                            <div class="ranking_team_info">
                                <div class="ranking_team_num">
                                    <span>Rank</span> 4
                                </div>
                                <div class="ranking_team_name">
                                    BF 팀 솔리드
                                </div>
                                <div class="ranking_team_address">
                                    경기도 김포시 김포한강1로97번길 10-12, 101호 솔리드짐
                                    <div class="tel">0507-1312-1794</div>
                                </div>
                            </div>
                        </div>
                        <div class="ranking_team_part">
                            <div class="ranking_team_logo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/team_calson.png" />
                            </div>
                            <div class="ranking_team_info">
                                <div class="ranking_team_num">
                                    <span>Rank</span> 5
                                </div>
                                <div class="ranking_team_name">
                                    지브라 칼슨 해적단
                                </div>
                                <div class="ranking_team_address">
                                    서울 마포구 양화로 85
                                    <div class="tel">02-6218-1800</div>
                                </div>
                            </div>
                        </div>
                        <div class="ranking_team_part">
                            <div class="ranking_team_logo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/team_cubemma.png" />
                            </div>
                            <div class="ranking_team_info">
                                <div class="ranking_team_num">
                                    <span>Rank</span> 6
                                </div>
                                <div class="ranking_team_name">
                                    큐브 MMA
                                </div>
                                <div class="ranking_team_address">
                                    경기도 하남시 신장로 188 4층
                                    <div class="tel">010-4785-4149</div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
    </div>

<?php
include_once(G5_THEME_PATH.'/tail.php');