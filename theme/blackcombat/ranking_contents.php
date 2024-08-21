<style>
        span.fighter_name[data-name-color="black"] {
            color: #191919;
        }
        span.fighter_name[data-name-color="blue"] {
            color: #1572E8;
        }
        span.fighter_name[data-name-color="purple"] {
            color: #6861CE;
        }
        span.fighter_name[data-name-color="light-blue"] {
            color: #48ABF7;
        }
        span.fighter_name[data-name-color="green"] {
            color: #31CE36;
        }
        span.fighter_name[data-name-color="orange"] {
            color: #FFAD46;
        }
        span.fighter_name[data-name-color="red"] {
            color: #F25961;
        }

        .hidden{
            display:none;
        }

        .ranking_list_part{
            overflow: hidden;
            /* transition: 0.5s; */
            max-height: 660px; /* 10개 아이템 기준으로 높이 설정 */
        }

        #toggleButton{
            background-color: #FFF;
            padding: 0px 10px;
            line-height: 40px;
            margin-bottom: 1px;
            cursor: pointer;
            width: 100%;
            border: 1px solid #dddddd;
        }
        #toggleButton:hover{
            background-color: #dddddd;
        }


</style>

<div class="ranking_list">
                <!-- 언더그라운드 -------------------------->
                <div class="ranking_list_part">
<?
    $sql = "SELECT 
        ranking.ranking, ranking.fighter_seq, base.fighter_name, base.fighter_ringname, team.team_name, base.rankingImageBin, ranking.ranking_updown, ranking.lsttm, base.fighter_status
        FROM blackcombat.tb_fighter_ranking ranking
        LEFT JOIN blackcombat.tb_fighter_base base
            ON ranking.fighter_seq = base.fighter_seq 
        LEFT JOIN blackcombat.tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE division='언더그라운드' AND ranking_type = 1
        ORDER BY 
        CASE WHEN ranking = 'c' THEN 0  
        ELSE CAST(ranking AS UNSIGNED) END, ranking;";
        $result = sql_query($sql);

        while ($row = sql_fetch_array($result)) {
            
            $base64ImageDataRanking = base64_encode($row['rankingImageBin']);
            if($row['ranking'] === '0'){
                if($row['fighter_seq'] == '39753529'){
?>
                    <div class="ranking_list_part_champ"><h3><span class="weight">언더그라운드</span> <span class="champ"></span></h3><div class="ranking_champ_name"></div><div class="ranking_champ_photo"></div></div>
<?              }else{ ?>
                    <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=<?= $row['fighter_seq'] ?>';">
                        <h3><span class="weight">언더그라운드</span> <span class="champ">CHAMPION</span></h3>
                        <div class="ranking_champ_name">
                            <span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span>
                            <div class="ranking_ring_name"><?= $row['fighter_ringname'] ?></div>
                            <div class="ranking_ring_name"><?= $row['team_name'] ?></div>
                        </div>
                        <div class="ranking_champ_photo">
                            <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                        </div>
                    </div>      
<?              }?>                   
<?          }else{ ?>
                        <div class="ranking_list_part_item <? if($flyIndex > 11){ echo 'hidden'; } ?>" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=<?= $row['fighter_seq'] ?>';">
                            <div class="ranking_list_num"> <?=$row['ranking']?> </div>
                            <div class="ranking_list_photo">
                            <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                            onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                            </div>
                            <div class="ranking_list_name"><span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span><span class="ring_name"><?= $row['fighter_ringname'] ?> / <?= $row['team_name'] ?></span></div>
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
<?          }
        }?>
                </div>


                <!---------------- 플라이급 ------------------------->
                <div class="ranking_list_part fly">
<?
    $sql = "SELECT 
        ranking.ranking, ranking.fighter_seq, base.fighter_name, base.fighter_ringname, team.team_name, base.rankingImageBin, ranking.ranking_updown, ranking.lsttm, base.fighter_status
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
        $flyIndex = 0;
        while ($row = sql_fetch_array($result)) {
            $flyIndex++;
            $base64ImageDataRanking = base64_encode($row['rankingImageBin']);
            if($row['ranking'] === '0'){
                if($row['fighter_seq'] == '39753529'){
?>
                    <div class="ranking_list_part_champ"><h3><span class="weight">플라이급</span> <span class="champ"></span></h3><div class="ranking_champ_name"></div><div class="ranking_champ_photo"></div></div>
<?              }else{ ?>
                    <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=<?= $row['fighter_seq'] ?>';">
                        <h3><span class="weight">플라이급</span> <span class="champ">CHAMPION</span></h3>
                        <div class="ranking_champ_name">
                            <span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span>
                            <div class="ranking_ring_name"><?= $row['fighter_ringname'] ?></div>
                            <div class="ranking_ring_name"><?= $row['team_name'] ?></div>
                        </div>
                        <div class="ranking_champ_photo">
                            <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                        </div>
                    </div>
<?              }?>                   
<?          }else{ ?>
                    <div class="ranking_list_part_item <? if($flyIndex > 11){ echo 'hidden'; } ?>" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=<?= $row['fighter_seq'] ?>';">
                        <div class="ranking_list_num"> <?=$row['ranking']?> </div>
                        <div class="ranking_list_photo">
                        <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                        onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                        </div>
                        <div class="ranking_list_name"><span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span><span class="ring_name"><?= $row['fighter_ringname'] ?> / <?= $row['team_name'] ?></span></div>
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
<? if($flyIndex > 11){ ?>
                    <div class="toggle-button-container">
                        <button id="toggleButton" onclick="foldToggle('fly')">▼ 더보기</button>
                    </div>
<? } ?>
                </div>


                <!---------------- 밴텀급 ------------------------->
                <div class="ranking_list_part bantam">
<?
    $sql = "SELECT 
        ranking.ranking, ranking.fighter_seq, base.fighter_name, base.fighter_ringname, team.team_name, base.rankingImageBin, ranking.ranking_updown, ranking.lsttm, base.fighter_status
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

        $bantamIndex = 0;
        while ($row = sql_fetch_array($result)) {
            $bantamIndex++;
            
            $base64ImageDataRanking = base64_encode($row['rankingImageBin']);
            if($row['ranking'] === '0'){
                if($row['fighter_seq'] == '39753529'){
?>
                    <div class="ranking_list_part_champ"><h3><span class="weight">밴텀급</span> <span class="champ"></span></h3><div class="ranking_champ_name"></div><div class="ranking_champ_photo"></div></div>
<?              }else{ ?>
                    <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=<?= $row['fighter_seq'] ?>';">
                        <h3><span class="weight">밴텀급</span> <span class="champ">CHAMPION</span></h3>
                        <div class="ranking_champ_name">
                            <span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span>
                            <div class="ranking_ring_name"><?= $row['fighter_ringname'] ?></div>
                            <div class="ranking_ring_name"><?= $row['team_name'] ?></div>
                        </div>
                        <div class="ranking_champ_photo">
                            <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                        </div>
                    </div>
<?              }?>                   
<?          }else{ ?>
                    <div class="ranking_list_part_item <? if($bantamIndex > 11){ echo 'hidden'; } ?>" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=<?= $row['fighter_seq'] ?>';">
                        <div class="ranking_list_num"> <?=$row['ranking']?> </div>
                        <div class="ranking_list_photo">
                        <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                        onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                        </div>
                        <div class="ranking_list_name"><span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span><span class="ring_name"><?= $row['fighter_ringname'] ?> / <?= $row['team_name'] ?></span></div>
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
<? if($bantamIndex > 11){ ?>
                    <div class="toggle-button-container">
                        <button id="toggleButton" onclick="foldToggle('bantam')">▼ 더보기</button>
                    </div>
<? } ?>
                </div>
</div>
<div class="ranking_list">

                <!---------------- 페더급 ------------------------->
                <div class="ranking_list_part feather">
<?
    $sql = "SELECT 
        ranking.ranking, ranking.fighter_seq, base.fighter_name, base.fighter_ringname, team.team_name, base.rankingImageBin, ranking.ranking_updown, ranking.lsttm, base.fighter_status
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

        $featherIndex = 0;
        while ($row = sql_fetch_array($result)) {
            $featherIndex++;
            
            $base64ImageDataRanking = base64_encode($row['rankingImageBin']);
            if($row['ranking'] === '0'){
                if($row['fighter_seq'] == '39753529'){
?>
                    <div class="ranking_list_part_champ"><h3><span class="weight">페더급</span> <span class="champ"></span></h3><div class="ranking_champ_name"></div><div class="ranking_champ_photo"></div></div>
<?              }else{ ?>
                    <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=<?= $row['fighter_seq'] ?>';">
                        <h3><span class="weight">페더급</span> <span class="champ">CHAMPION</span></h3>
                        <div class="ranking_champ_name">
                            <span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span>
                            <div class="ranking_ring_name"><?= $row['fighter_ringname'] ?></div>
                            <div class="ranking_ring_name"><?= $row['team_name'] ?></div>
                        </div>
                        <div class="ranking_champ_photo">
                            <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                        </div>
                    </div>
<?              }?>                   
<?          }else{ ?>
                    <div class="ranking_list_part_item <? if($featherIndex > 11){ echo 'hidden'; } ?>" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=<?= $row['fighter_seq'] ?>';">
                        <div class="ranking_list_num"> <?=$row['ranking']?> </div>
                        <div class="ranking_list_photo">
                        <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                        onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                        </div>
                        <div class="ranking_list_name"><span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span><span class="ring_name"><?= $row['fighter_ringname'] ?> / <?= $row['team_name'] ?></span></div>
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
<? if($featherIndex > 11){ ?>
                    <div class="toggle-button-container">
                        <button id="toggleButton" onclick="foldToggle('feather')">▼ 더보기</button>
                    </div>
<? } ?>
                </div>
                    
                    


                <!---------------- 라이트급 ------------------------->
                <div class="ranking_list_part light">
<?
    $sql = "SELECT 
        ranking.ranking, ranking.fighter_seq, base.fighter_name, base.fighter_ringname, team.team_name, base.rankingImageBin, ranking.ranking_updown, ranking.lsttm, base.fighter_status
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

        $lightIndex = 0;
        while ($row = sql_fetch_array($result)) {
            $lightIndex++;
            
            $base64ImageDataRanking = base64_encode($row['rankingImageBin']);
            if($row['ranking'] === '0'){
                if($row['fighter_seq'] == '39753529'){
?>
                    <div class="ranking_list_part_champ"><h3><span class="weight">라이트급</span> <span class="champ"></span></h3><div class="ranking_champ_name"></div><div class="ranking_champ_photo"></div></div>
<?              }else{ ?>
                    <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=<?= $row['fighter_seq'] ?>';">
                        <h3><span class="weight">라이트급</span> <span class="champ">CHAMPION</span></h3>
                        <div class="ranking_champ_name">
                            <span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span>
                            <div class="ranking_ring_name"><?= $row['fighter_ringname'] ?></div>
                            <div class="ranking_ring_name"><?= $row['team_name'] ?></div>
                        </div>
                        <div class="ranking_champ_photo">
                            <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                        </div>
                    </div>
<?              }?>                   
<?          }else{ ?>
                    <div class="ranking_list_part_item <? if($lightIndex > 11){ echo 'hidden'; } ?>" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=<?= $row['fighter_seq'] ?>';">
                        <div class="ranking_list_num"> <?=$row['ranking']?> </div>
                        <div class="ranking_list_photo">
                        <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                        onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                        </div>
                        <div class="ranking_list_name"><span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span><span class="ring_name"><?= $row['fighter_ringname'] ?> / <?= $row['team_name'] ?></span></div>
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
<? if($lightIndex > 11){ ?>
                    <div class="toggle-button-container">
                        <button id="toggleButton" onclick="foldToggle('light')">▼ 더보기</button>
                    </div>
<? } ?>
                </div>


                <!---------------- 웰터급 ------------------------->
                <div class="ranking_list_part welter">
<?
    $sql = "SELECT 
        ranking.ranking, ranking.fighter_seq, base.fighter_name, base.fighter_ringname, team.team_name, base.rankingImageBin, ranking.ranking_updown, ranking.lsttm, base.fighter_status
        FROM blackcombat.tb_fighter_ranking ranking
        LEFT JOIN blackcombat.tb_fighter_base base
            ON ranking.fighter_seq = base.fighter_seq 
        LEFT JOIN blackcombat.tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE division='웰터급' AND ranking_type = 1
        ORDER BY 
        CASE WHEN ranking = 'c' THEN 0  
        ELSE CAST(ranking AS UNSIGNED) END, ranking;";
        $result = sql_query($sql);

        $welterIndex = 0;
        while ($row = sql_fetch_array($result)) {
            $welterIndex++;
            
            $base64ImageDataRanking = base64_encode($row['rankingImageBin']);
            if($row['ranking'] === '0'){
                if($row['fighter_seq'] == '39753529'){
?>
                    <div class="ranking_list_part_champ"><h3><span class="weight">웰터급</span> <span class="champ"></span></h3><div class="ranking_champ_name"></div><div class="ranking_champ_photo"></div></div>
<?              }else{ ?>
                    <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=<?= $row['fighter_seq'] ?>';">
                        <h3><span class="weight">웰터급</span> <span class="champ">CHAMPION</span></h3>
                        <div class="ranking_champ_name">
                            <span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span>
                            <div class="ranking_ring_name"><?= $row['fighter_ringname'] ?></div>
                            <div class="ranking_ring_name"><?= $row['team_name'] ?></div>
                        </div>
                        <div class="ranking_champ_photo">
                            <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                        </div>
                    </div>
<?              }?>                   
<?          }else{ ?>
                    <div class="ranking_list_part_item <? if($welterIndex > 11){ echo 'hidden'; } ?>" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=<?= $row['fighter_seq'] ?>';">
                        <div class="ranking_list_num"> <?=$row['ranking']?> </div>
                        <div class="ranking_list_photo">
                        <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                        onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                        </div>
                        <div class="ranking_list_name"><span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span><span class="ring_name"><?= $row['fighter_ringname'] ?> / <?= $row['team_name'] ?></span></div>
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
<? if($welterIndex > 11){ ?>
                    <div class="toggle-button-container">
                        <button id="toggleButton" onclick="foldToggle('welter')">▼ 더보기</button>
                    </div>
<? } ?>
                </div>


                    
</div>

<div class="ranking_list">
                <!---------------- 미들급 ------------------------->
                <div class="ranking_list_part middle">
<?
    $sql = "SELECT 
        ranking.ranking, ranking.fighter_seq, base.fighter_name, base.fighter_ringname, team.team_name, base.rankingImageBin, ranking.ranking_updown, ranking.lsttm, base.fighter_status
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

        $middleIndex = 0;
        while ($row = sql_fetch_array($result)) {
            $middleIndex++;
            
            $base64ImageDataRanking = base64_encode($row['rankingImageBin']);
            if($row['ranking'] === '0'){
                if($row['fighter_seq'] == '39753529'){
?>
                    <div class="ranking_list_part_champ"><h3><span class="weight">미들급</span> <span class="champ"></span></h3><div class="ranking_champ_name"></div><div class="ranking_champ_photo"></div></div>
<?              }else{ ?>
                    <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=<?= $row['fighter_seq'] ?>';">
                        <h3><span class="weight">미들급</span> <span class="champ">CHAMPION</span></h3>
                        <div class="ranking_champ_name">
                            <span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span>
                            <div class="ranking_ring_name"><?= $row['fighter_ringname'] ?></div>
                            <div class="ranking_ring_name"><?= $row['team_name'] ?></div>
                        </div>
                        <div class="ranking_champ_photo">
                            <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                        </div>
                    </div>
<?              }?>                   
<?          }else{ ?>
                    <div class="ranking_list_part_item <? if($middleIndex > 11){ echo 'hidden'; } ?>" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=<?= $row['fighter_seq'] ?>';">
                        <div class="ranking_list_num"> <?=$row['ranking']?> </div>
                        <div class="ranking_list_photo">
                        <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                        onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                        </div>
                        <div class="ranking_list_name"><span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span><span class="ring_name"><?= $row['fighter_ringname'] ?> / <?= $row['team_name'] ?></span></div>
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
<? if($middleIndex > 11){ ?>
                    <div class="toggle-button-container">
                        <button id="toggleButton" onclick="foldToggle('middle')">▼ 더보기</button>
                    </div>
<? } ?>
                </div>

                <!---------------- 중량급 ------------------------->
                <div class="ranking_list_part heavy">
<?
    $sql = "SELECT 
        ranking.ranking, ranking.fighter_seq, base.fighter_name, base.fighter_ringname, team.team_name, base.rankingImageBin, ranking.ranking_updown, ranking.lsttm, base.fighter_status
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

        $heavyIndex = 0;
        while ($row = sql_fetch_array($result)) {
            $heavyIndex++;
            
            $base64ImageDataRanking = base64_encode($row['rankingImageBin']);
            if($row['ranking'] === '0'){
                if($row['fighter_seq'] == '39753529'){
?>
                    <div class="ranking_list_part_champ"><h3><span class="weight">중량급</span> <span class="champ"></span></h3><div class="ranking_champ_name"></div><div class="ranking_champ_photo"></div></div>
<?              }else{ ?>
                    <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=<?= $row['fighter_seq'] ?>';">
                        <h3><span class="weight">중량급</span> <span class="champ">CHAMPION</span></h3>
                        <div class="ranking_champ_name">
                            <span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span>
                            <div class="ranking_ring_name"><?= $row['fighter_ringname'] ?></div>
                            <div class="ranking_ring_name"><?= $row['team_name'] ?></div>
                        </div>
                        <div class="ranking_champ_photo">
                            <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                        </div>
                    </div>
<?              }?>                   
<?          }else{ ?>
                    <div class="ranking_list_part_item <? if($heavyIndex > 11){ echo 'hidden'; } ?>" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=<?= $row['fighter_seq'] ?>';">
                        <div class="ranking_list_num"> <?=$row['ranking']?> </div>
                        <div class="ranking_list_photo">
                        <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                        onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                        </div>
                        <div class="ranking_list_name"><span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span><span class="ring_name"><?= $row['fighter_ringname'] ?> / <?= $row['team_name'] ?></span></div>
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
<? if($heavyIndex > 11){ ?>
                    <div class="toggle-button-container">
                        <button id="toggleButton" onclick="foldToggle('heavy')">▼ 더보기</button>
                    </div>
<? } ?>
                    </div>



                <!---------------- 여성부 ------------------------->
                <div class="ranking_list_part atom">
<?
    $sql = "SELECT 
        ranking.ranking, ranking.fighter_seq, base.fighter_name, base.fighter_ringname, team.team_name, base.rankingImageBin, ranking.ranking_updown, ranking.lsttm, base.fighter_status
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

        $atomIndex = 0;
        while ($row = sql_fetch_array($result)) {
            $atomIndex++;
            
            $base64ImageDataRanking = base64_encode($row['rankingImageBin']);
            if($row['ranking'] === '0'){
                if($row['fighter_seq'] == '39753529'){
?>
                    <div class="ranking_list_part_champ"><h3><span class="weight">여성</span> <span class="champ"></span></h3><div class="ranking_champ_name"></div><div class="ranking_champ_photo"></div></div>
<?              }else{ ?>
                    <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=<?= $row['fighter_seq'] ?>';">
                        <h3><span class="weight">여성부</span> <span class="champ">CHAMPION</span></h3>
                        <div class="ranking_champ_name">
                            <span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span>
                            <div class="ranking_ring_name"><?= $row['fighter_ringname'] ?></div>
                            <div class="ranking_ring_name"><?= $row['team_name'] ?></div>
                        </div>
                        <div class="ranking_champ_photo">
                            <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                        </div>
                    </div>
<?              }?>                   
<?          }else{ ?>
                    <div class="ranking_list_part_item <? if($atomIndex > 11){ echo 'hidden'; } ?>" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=<?= $row['fighter_seq'] ?>';">
                        <div class="ranking_list_num"> <?=$row['ranking']?> </div>
                        <div class="ranking_list_photo">
                        <img src='data:image/png;base64,<?= $base64ImageDataRanking ?>'
                                        onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_blank.png'" />
                        </div>
                        <div class="ranking_list_name"><span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span><span class="ring_name"><?= $row['fighter_ringname'] ?> / <?= $row['team_name'] ?></span></div>
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
<? if($atomIndex > 11){ ?>
                    <div class="toggle-button-container">
                        <button id="toggleButton" onclick="foldToggle('atom')">▼ 더보기</button>
                    </div>
<? } ?>
                </div>
</div>

<script type="text/javascript">
    let expandedMap = {
        "fly":false,
        "bantam":false,
        "feather":false,
        "light":false,
        "welter":false,
        "middle":false,
        "heavby":false,
        "atom":false
    }

    $(document).ready(() => {
        
    });
    
    let foldToggle = (division) => {
        const toggleButton = document.querySelector(`.${division} #toggleButton`);
        const listContainer = document.querySelector(`.${division}`);
        const hiddenItems = document.querySelectorAll(`.${division} .ranking_list_part_item.hidden`);

        if (expandedMap[division]) {
            listContainer.style.maxHeight = '660px';
            hiddenItems.forEach(item => {
                item.style.display = 'none';
            });
            toggleButton.textContent = '▼ 더보기';
        } else {
                let maxheight = (660 + 43*hiddenItems.length);
            listContainer.style.maxHeight = `${maxheight}px`;
            hiddenItems.forEach(item => {
                item.style.display = '<? if(G5_IS_MOBILE) { echo 'flex'; }else{ echo 'block';  }?>';
            });
            toggleButton.textContent = '▲ 접기';
        }
        expandedMap[division] = !expandedMap[division];
    }
</script>