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
                if($row['fighter_seq'] == -9){
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
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=<?= $row['fighter_seq'] ?>';">
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
                    <div class="ranking_list_part">
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

        while ($row = sql_fetch_array($result)) {
            
            $base64ImageDataRanking = base64_encode($row['rankingImageBin']);
            if($row['ranking'] === '0'){
                if($row['fighter_seq'] == -9){
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
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=<?= $row['fighter_seq'] ?>';">
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
                    </div>


                    <!---------------- 밴텀급 ------------------------->
                    <div class="ranking_list_part">
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

        while ($row = sql_fetch_array($result)) {
            
            $base64ImageDataRanking = base64_encode($row['rankingImageBin']);
            if($row['ranking'] === '0'){
                if($row['fighter_seq'] == -9){
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
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=<?= $row['fighter_seq'] ?>';">
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
                    </div>
</div>
<div class="ranking_list">

                    <!---------------- 페더급 ------------------------->
                    <div class="ranking_list_part">
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

        while ($row = sql_fetch_array($result)) {
            
            $base64ImageDataRanking = base64_encode($row['rankingImageBin']);
            if($row['ranking'] === '0'){
                if($row['fighter_seq'] == -9){
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
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=<?= $row['fighter_seq'] ?>';">
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
                    </div>
                    
                    


                    <!---------------- 라이트급 ------------------------->
                    <div class="ranking_list_part">
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

        while ($row = sql_fetch_array($result)) {
            
            $base64ImageDataRanking = base64_encode($row['rankingImageBin']);
            if($row['ranking'] === '0'){
                if($row['fighter_seq'] == -9){
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
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=<?= $row['fighter_seq'] ?>';">
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
                    </div>
                    <!---------------- 웰터급 ------------------------->
                    <div class="ranking_list_part">
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

        while ($row = sql_fetch_array($result)) {
            
            $base64ImageDataRanking = base64_encode($row['rankingImageBin']);
            if($row['ranking'] === '0'){
                if($row['fighter_seq'] == -9){
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
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=<?= $row['fighter_seq'] ?>';">
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
                    </div>


                    
</div>

<div class="ranking_list">
                    <!---------------- 미들급 ------------------------->
                    <div class="ranking_list_part">
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

        while ($row = sql_fetch_array($result)) {
            
            $base64ImageDataRanking = base64_encode($row['rankingImageBin']);
            if($row['ranking'] === '0'){
                if($row['fighter_seq'] == -9){
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
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=<?= $row['fighter_seq'] ?>';">
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
                    </div>
                    <!---------------- 중량급 ------------------------->
                    <div class="ranking_list_part">
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

        while ($row = sql_fetch_array($result)) {
            
            $base64ImageDataRanking = base64_encode($row['rankingImageBin']);
            if($row['ranking'] === '0'){
                if($row['fighter_seq'] == -9){
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
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=<?= $row['fighter_seq'] ?>';">
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
                    </div>



                    <!---------------- 여성부 ------------------------->
                    <div class="ranking_list_part">
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

        while ($row = sql_fetch_array($result)) {
            
            $base64ImageDataRanking = base64_encode($row['rankingImageBin']);
            if($row['ranking'] === '0'){
                if($row['fighter_seq'] == -9){
?>
                    <div class="ranking_list_part_champ"><h3><span class="weight">여성부</span> <span class="champ"></span></h3><div class="ranking_champ_name"></div><div class="ranking_champ_photo"></div></div>
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
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=<?= $row['fighter_seq'] ?>';">
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
                    </div>
</div>



