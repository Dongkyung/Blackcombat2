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
        .ranking_list_part_champ, .ranking_list_part_item{
            position: relative;
        }
        .hexagon {
            aspect-ratio: 1 / 1;
            
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: sans-serif;
            color: white;
            text-align: center;
            clip-path: polygon(
                50% 0%,
                93% 25%,
                93% 75%,
                50% 100%,
                7% 75%,
                7% 25%
            );
        }

        .ranking_list_part_champ .hexagon{
            width: 50px;
            height: 50px;
            top: 10px;
            right: 10px;
            font-weight: bold;
            background: #a55400;
        }

        .ranking_list_part_item .hexagon{
            width: 35px;
            height: 35px;
            top: 8px;
            right: 8px;
            font-size: 9px;
            line-height: 12px;
            background-color: #bdbdbd;
            
            
        }


</style>

<div class="ranking_list">

                <!---------------- 플라이급 ------------------------->
                <div class="ranking_list_part fly">
<?
    $sql = "SELECT 
        champ.`order` , champ.fighter_seq, champ.defend, champ.status, base.fighter_name, base.fighter_ringname, base.country, team.team_name, base.ranking_image_name, base.rankingChamp_image_name, DATE_FORMAT(champ.start_date, '%Y-%m-%d') as start_date, DATE_FORMAT(champ.end_date, '%Y-%m-%d') as end_date, base.fighter_status
        FROM blackcombat.tb_champion_history champ
        LEFT JOIN blackcombat.tb_fighter_base base
            ON champ.fighter_seq = base.fighter_seq 
        LEFT JOIN blackcombat.tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE division='플라이급' and status = 1
        ORDER BY `order` desc;";
        $result = sql_query($sql);
        $flyIndex = 0;

    $row = sql_fetch_array($result);

    $flyIndex++;
    $rankingChampImgPath = "https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$row['fighter_seq']."/".$row['rankingChamp_image_name'];

    if ($row) { ?>
        <!-- 데이터가 존재하는경우 -->
        <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter/<?= $row['fighter_seq'] ?>';">
            <h3><span class="weight">플라이급</span> <span class="champ"><?=$row['order'] == 1? "초":$row['order']?>대 CHAMPION</span></h3>
            <div class="ranking_champ_name">
                <span class="fi fi-<?= strtolower($row["country"]) ?>"></span> <span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span>
                <div class="ranking_ring_name"><?= $row['fighter_ringname'] ?></div>
                <div class="ranking_ring_name"><?= $row['team_name'] ?></div>
                <div></div>
                <div class="ranking_ring_name" style="margin-top: 10px; font-size: 0.7rem; font-style: italic;">획득 : <?= $row['start_date'] ?></div>
            </div>
            <div class="ranking_champ_photo">
                <img src='<?= $rankingChampImgPath ?>'
                    onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/fighter_blank.png'" />
            </div>
            <? if( $row['defend'] !== '0'){ ?>
                <div class="hexagon">
                    방어<br><?=$row['defend']?>
                </div>
            <? } ?>
        </div>
    <? } else { ?>
        <!-- 공석-->
        <div class="ranking_list_part_champ"><h3><span class="weight">플라이급</span> <span class="champ"></span></h3><div class="ranking_champ_name"></div><div class="ranking_champ_photo"></div></div>
    <? }

    $sql = "SELECT 
        champ.`order` , champ.fighter_seq, champ.defend, champ.status, base.fighter_name, base.fighter_ringname, base.country, team.team_name, base.ranking_image_name, base.rankingChamp_image_name, DATE_FORMAT(champ.start_date, '%Y-%m-%d') as start_date, DATE_FORMAT(champ.end_date, '%Y-%m-%d') as end_date, base.fighter_status
        FROM blackcombat.tb_champion_history champ
        LEFT JOIN blackcombat.tb_fighter_base base
            ON champ.fighter_seq = base.fighter_seq 
        LEFT JOIN blackcombat.tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE division='플라이급' and status != 1
        ORDER BY `order` desc;";
        $result = sql_query($sql);


        while ($row = sql_fetch_array($result)) {
            $flyIndex++;
            $rankingImgPath = "https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$row['fighter_seq']."/".$row['ranking_image_name'];
            ?>
            <div class="ranking_list_part_item <? if($flyIndex > 11){ echo 'hidden'; } ?>" onclick="location.href='<?php echo G5_URL ?>/fighter/<?= $row['fighter_seq'] ?>';" style="line-height:25px;">
                <div class="first_row" style="width:100%">
                    <div class="ranking_list_num" style="width:50px; margin-top: 10px;"> <?=$row['order'] == 1? "초":$row['order']?>대 </div>
                    <div class="ranking_list_photo">
                    <img src='<?= $rankingImgPath ?>'
                                    onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/fighter_blank.png'" />
                    </div>
                    <div class="ranking_list_name"><span class="fi fi-<?= strtolower($row["country"]) ?>"></span> <span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span><span class="ring_name"><?= $row['fighter_ringname'] ?> / <?= $row['team_name'] ?></span></div>
                </div>
                <div class="second_row" style="width:100%">
                    <div class="ranking_list_change date_get" style="width:120px; text-align:unset;">
                        <?= $row['start_date'] ?> <? if($row['end_date'] != null) { echo " ~ ". $row['end_date']; } ?>
                    </div>
                    <div class="ranking_list_change champ_status" style="width:35px">
                        <?
                            if($row['status'] === '3'){
                                echo '/<span style="color:#228b22; margin-left:5px;">반납</span>';
                            }else if($row['status'] === '4'){
                                echo '/<span style="color:#fa8072; margin-left:5px;">박탈</span>';
                            }
                        ?>
                    </div>
                </div>
                <? if( $row['defend'] !== '0'){ ?>
                    <div class="hexagon">
                        방어<br><?=$row['defend']?>
                    </div>
                <? } ?>
            </div>
<?
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
        champ.`order` , champ.fighter_seq, champ.defend, champ.status, base.fighter_name, base.fighter_ringname, base.country, team.team_name, base.ranking_image_name, base.rankingChamp_image_name, DATE_FORMAT(champ.start_date, '%Y-%m-%d') as start_date, DATE_FORMAT(champ.end_date, '%Y-%m-%d') as end_date, base.fighter_status
        FROM blackcombat.tb_champion_history champ
        LEFT JOIN blackcombat.tb_fighter_base base
            ON champ.fighter_seq = base.fighter_seq 
        LEFT JOIN blackcombat.tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE division='밴텀급' and status = 1
        ORDER BY `order` desc;";
        $result = sql_query($sql);
        $bantamIndex = 0;

    $row = sql_fetch_array($result);

    $bantamIndex++;
    $rankingChampImgPath = "https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$row['fighter_seq']."/".$row['rankingChamp_image_name'];

    if ($row) { ?>
        <!-- 데이터가 존재하는경우 -->
        <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter/<?= $row['fighter_seq'] ?>';">
            <h3><span class="weight">밴텀급</span> <span class="champ"><?=$row['order'] == 1? "초":$row['order']?>대 CHAMPION</span></h3>
            <div class="ranking_champ_name">
                <span class="fi fi-<?= strtolower($row["country"]) ?>"></span> <span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span>
                <div class="ranking_ring_name"><?= $row['fighter_ringname'] ?></div>
                <div class="ranking_ring_name"><?= $row['team_name'] ?></div>
                <div class="ranking_ring_name" style="margin-top: 10px; font-size: 0.7rem; font-style: italic;">획득 : <?= $row['start_date'] ?></div>
            </div>
            <div class="ranking_champ_photo">
                <img src='<?= $rankingChampImgPath ?>'
                    onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/fighter_blank.png'" />
            </div>
            <? if( $row['defend'] !== '0'){ ?>
                <div class="hexagon">
                    방어<br><?=$row['defend']?>
                </div>
            <? } ?>
        </div>
    <? } else { ?>
        <!-- 공석-->
        <div class="ranking_list_part_champ"><h3><span class="weight">밴텀급</span> <span class="champ"></span></h3><div class="ranking_champ_name"></div><div class="ranking_champ_photo"></div></div>
    <? }

    $sql = "SELECT 
        champ.`order` , champ.fighter_seq, champ.defend, champ.status, base.fighter_name, base.fighter_ringname, base.country, team.team_name, base.ranking_image_name, base.rankingChamp_image_name, DATE_FORMAT(champ.start_date, '%Y-%m-%d') as start_date, DATE_FORMAT(champ.end_date, '%Y-%m-%d') as end_date, base.fighter_status
        FROM blackcombat.tb_champion_history champ
        LEFT JOIN blackcombat.tb_fighter_base base
            ON champ.fighter_seq = base.fighter_seq 
        LEFT JOIN blackcombat.tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE division='밴텀급' and status != 1
        ORDER BY `order` desc;";
        $result = sql_query($sql);


        while ($row = sql_fetch_array($result)) {
            $bantamIndex++;
            $rankingImgPath = "https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$row['fighter_seq']."/".$row['ranking_image_name'];
            ?>
            <div class="ranking_list_part_item <? if($bantamIndex > 11){ echo 'hidden'; } ?>" onclick="location.href='<?php echo G5_URL ?>/fighter/<?= $row['fighter_seq'] ?>';" style="line-height:25px;">
                <div class="first_row" style="width:100%">
                    <div class="ranking_list_num" style="width:50px; margin-top: 10px;"> <?=$row['order'] == 1? "초":$row['order']?>대 </div>
                    <div class="ranking_list_photo">
                    <img src='<?= $rankingImgPath ?>'
                                    onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/fighter_blank.png'" />
                    </div>
                    <div class="ranking_list_name"><span class="fi fi-<?= strtolower($row["country"]) ?>"></span> <span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span><span class="ring_name"><?= $row['fighter_ringname'] ?> / <?= $row['team_name'] ?></span></div>
                </div>
                <div class="second_row" style="width:100%">
                    <div class="ranking_list_change date_get" style="width:120px; text-align:unset;">
                        <?= $row['start_date'] ?> <? if($row['end_date'] != null) { echo " ~ ". $row['end_date']; } ?>
                    </div>
                    <div class="ranking_list_change champ_status" style="width:35px">
                        <?
                            if($row['status'] === '3'){
                                echo '/<span style="color:#228b22; margin-left:5px;">반납</span>';
                            }else if($row['status'] === '4'){
                                echo '/<span style="color:#fa8072; margin-left:5px;">박탈</span>';
                            }
                        ?>
                    </div>
                </div>
                <? if( $row['defend'] !== '0'){ ?>
                    <div class="hexagon">
                        방어<br><?=$row['defend']?>
                    </div>
                <? } ?>
            </div>
<?
        }
?>
<? if($bantamIndex > 11){ ?>
                    <div class="toggle-button-container">
                        <button id="toggleButton" onclick="foldToggle('bantam')">▼ 더보기</button>
                    </div>
<? } ?>
                </div>



                <!---------------- 페더급 ------------------------->
                <div class="ranking_list_part feather">
<?
    $sql = "SELECT 
        champ.`order` , champ.fighter_seq, champ.defend, champ.status, base.fighter_name, base.fighter_ringname, base.country, team.team_name, base.ranking_image_name, base.rankingChamp_image_name, DATE_FORMAT(champ.start_date, '%Y-%m-%d') as start_date, DATE_FORMAT(champ.end_date, '%Y-%m-%d') as end_date, base.fighter_status
        FROM blackcombat.tb_champion_history champ
        LEFT JOIN blackcombat.tb_fighter_base base
            ON champ.fighter_seq = base.fighter_seq 
        LEFT JOIN blackcombat.tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE division='페더급' and status = 1
        ORDER BY `order` desc;";
        $result = sql_query($sql);
        $featherIndex = 0;

    $row = sql_fetch_array($result);

    $featherIndex++;
    $rankingChampImgPath = "https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$row['fighter_seq']."/".$row['rankingChamp_image_name'];

    if ($row) { ?>
        <!-- 데이터가 존재하는경우 -->
        <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter/<?= $row['fighter_seq'] ?>';">
            <h3><span class="weight">페더급</span> <span class="champ"><?=$row['order'] == 1? "초":$row['order']?>대 CHAMPION</span></h3>
            <div class="ranking_champ_name">
                <span class="fi fi-<?= strtolower($row["country"]) ?>"></span> <span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span>
                <div class="ranking_ring_name"><?= $row['fighter_ringname'] ?></div>
                <div class="ranking_ring_name"><?= $row['team_name'] ?></div>
                <div></div>
                <div class="ranking_ring_name" style="margin-top: 10px; font-size: 0.7rem; font-style: italic;">획득 : <?= $row['start_date'] ?></div>
            </div>
            <div class="ranking_champ_photo">
                <img src='<?= $rankingChampImgPath ?>'
                    onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/fighter_blank.png'" />
            </div>
            <? if( $row['defend'] !== '0'){ ?>
                <div class="hexagon">
                    방어<br><?=$row['defend']?>
                </div>
            <? } ?>
        </div>
    <? } else { ?>
        <!-- 공석-->
        <div class="ranking_list_part_champ"><h3><span class="weight">페더급</span> <span class="champ"></span></h3><div class="ranking_champ_name"></div><div class="ranking_champ_photo"></div></div>
    <? }

    $sql = "SELECT 
        champ.`order` , champ.fighter_seq, champ.defend, champ.status, base.fighter_name, base.fighter_ringname, base.country, team.team_name, base.ranking_image_name, base.rankingChamp_image_name, DATE_FORMAT(champ.start_date, '%Y-%m-%d') as start_date, DATE_FORMAT(champ.end_date, '%Y-%m-%d') as end_date, base.fighter_status
        FROM blackcombat.tb_champion_history champ
        LEFT JOIN blackcombat.tb_fighter_base base
            ON champ.fighter_seq = base.fighter_seq 
        LEFT JOIN blackcombat.tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE division='페더급' and status != 1
        ORDER BY `order` desc;";
        $result = sql_query($sql);


        while ($row = sql_fetch_array($result)) {
            $featherIndex++;
            $rankingImgPath = "https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$row['fighter_seq']."/".$row['ranking_image_name'];
            ?>
            <div class="ranking_list_part_item <? if($featherIndex > 11){ echo 'hidden'; } ?>" onclick="location.href='<?php echo G5_URL ?>/fighter/<?= $row['fighter_seq'] ?>';" style="line-height:25px;">
                <div class="first_row" style="width:100%">
                    <div class="ranking_list_num" style="width:50px; margin-top: 10px;"> <?=$row['order'] == 1? "초":$row['order']?>대 </div>
                    <div class="ranking_list_photo">
                    <img src='<?= $rankingImgPath ?>'
                                    onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/fighter_blank.png'" />
                    </div>
                    <div class="ranking_list_name"><span class="fi fi-<?= strtolower($row["country"]) ?>"></span> <span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span><span class="ring_name"><?= $row['fighter_ringname'] ?> / <?= $row['team_name'] ?></span></div>
                </div>
                <div class="second_row" style="width:100%">
                    <div class="ranking_list_change date_get" style="width:120px; text-align:unset;">
                        <?= $row['start_date'] ?> <? if($row['end_date'] != null) { echo " ~ ". $row['end_date']; } ?>
                    </div>
                    <div class="ranking_list_change champ_status" style="width:35px">
                        <?
                            if($row['status'] === '3'){
                                echo '/<span style="color:#228b22; margin-left:5px;">반납</span>';
                            }else if($row['status'] === '4'){
                                echo '/<span style="color:#fa8072; margin-left:5px;">박탈</span>';
                            }
                        ?>
                    </div>
                </div>
                <? if( $row['defend'] !== '0'){ ?>
                    <div class="hexagon">
                        방어<br><?=$row['defend']?>
                    </div>
                <? } ?>
            </div>
<?
        }
?>
<? if($featherIndex > 11){ ?>
                    <div class="toggle-button-container">
                        <button id="toggleButton" onclick="foldToggle('feather')">▼ 더보기</button>
                    </div>
<? } ?>
                </div>
</div>
<div class="ranking_list">

<!---------------- 라이트급 ------------------------->
                <div class="ranking_list_part light">
<?
    $sql = "SELECT 
        champ.`order` , champ.fighter_seq, champ.defend, champ.status, base.fighter_name, base.fighter_ringname, base.country, team.team_name, base.ranking_image_name, base.rankingChamp_image_name, DATE_FORMAT(champ.start_date, '%Y-%m-%d') as start_date, DATE_FORMAT(champ.end_date, '%Y-%m-%d') as end_date, base.fighter_status
        FROM blackcombat.tb_champion_history champ
        LEFT JOIN blackcombat.tb_fighter_base base
            ON champ.fighter_seq = base.fighter_seq 
        LEFT JOIN blackcombat.tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE division='라이트급' and status = 1
        ORDER BY `order` desc;";
        $result = sql_query($sql);
        $lightIndex = 0;

    $row = sql_fetch_array($result);

    $lightIndex++;
    $rankingChampImgPath = "https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$row['fighter_seq']."/".$row['rankingChamp_image_name'];

    if ($row) { ?>
        <!-- 데이터가 존재하는경우 -->
        <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter/<?= $row['fighter_seq'] ?>';">
            <h3><span class="weight">라이트급</span> <span class="champ"><?=$row['order'] == 1? "초":$row['order']?>대 CHAMPION</span></h3>
            <div class="ranking_champ_name">
                <span class="fi fi-<?= strtolower($row["country"]) ?>"></span> <span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span>
                <div class="ranking_ring_name"><?= $row['fighter_ringname'] ?></div>
                <div class="ranking_ring_name"><?= $row['team_name'] ?></div>
                <div></div>
                <div class="ranking_ring_name" style="margin-top: 10px; font-size: 0.7rem; font-style: italic;">획득 : <?= $row['start_date'] ?></div>
            </div>
            <div class="ranking_champ_photo">
                <img src='<?= $rankingChampImgPath ?>'
                    onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/fighter_blank.png'" />
            </div>
            <? if( $row['defend'] !== '0'){ ?>
                <div class="hexagon">
                    방어<br><?=$row['defend']?>
                </div>
            <? } ?>
        </div>
    <? } else { ?>
        <!-- 공석-->
        <div class="ranking_list_part_champ"><h3><span class="weight">라이트급</span> <span class="champ"></span></h3><div class="ranking_champ_name"></div><div class="ranking_champ_photo"></div></div>
    <? }

    $sql = "SELECT 
        champ.`order` , champ.fighter_seq, champ.defend, champ.status, base.fighter_name, base.fighter_ringname, base.country, team.team_name, base.ranking_image_name, base.rankingChamp_image_name, DATE_FORMAT(champ.start_date, '%Y-%m-%d') as start_date, DATE_FORMAT(champ.end_date, '%Y-%m-%d') as end_date, base.fighter_status
        FROM blackcombat.tb_champion_history champ
        LEFT JOIN blackcombat.tb_fighter_base base
            ON champ.fighter_seq = base.fighter_seq 
        LEFT JOIN blackcombat.tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE division='라이트급' and status != 1
        ORDER BY `order` desc;";
        $result = sql_query($sql);


        while ($row = sql_fetch_array($result)) {
            $lightIndex++;
            $rankingImgPath = "https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$row['fighter_seq']."/".$row['ranking_image_name'];
            ?>
            <div class="ranking_list_part_item <? if($lightIndex > 11){ echo 'hidden'; } ?>" onclick="location.href='<?php echo G5_URL ?>/fighter/<?= $row['fighter_seq'] ?>';" style="line-height:25px;">
                <div class="first_row" style="width:100%">
                    <div class="ranking_list_num" style="width:50px; margin-top: 10px;"> <?=$row['order'] == 1? "초":$row['order']?>대 </div>
                    <div class="ranking_list_photo">
                    <img src='<?= $rankingImgPath ?>'
                                    onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/fighter_blank.png'" />
                    </div>
                    <div class="ranking_list_name"><span class="fi fi-<?= strtolower($row["country"]) ?>"></span> <span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span><span class="ring_name"><?= $row['fighter_ringname'] ?> / <?= $row['team_name'] ?></span></div>
                </div>
                <div class="second_row" style="width:100%">
                    <div class="ranking_list_change date_get" style="width:120px; text-align:unset;">
                        <?= $row['start_date'] ?> <? if($row['end_date'] != null) { echo " ~ ". $row['end_date']; } ?>
                    </div>
                    <div class="ranking_list_change champ_status" style="width:35px">
                        <?
                            if($row['status'] === '3'){
                                echo '/<span style="color:#228b22; margin-left:5px;">반납</span>';
                            }else if($row['status'] === '4'){
                                echo '/<span style="color:#fa8072; margin-left:5px;">박탈</span>';
                            }
                        ?>
                    </div>
                </div>
                <? if( $row['defend'] !== '0'){ ?>
                    <div class="hexagon">
                        방어<br><?=$row['defend']?>
                    </div>
                <? } ?>
            </div>
<?
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
        champ.`order` , champ.fighter_seq, champ.defend, champ.status, base.fighter_name, base.fighter_ringname, base.country, team.team_name, base.ranking_image_name, base.rankingChamp_image_name, DATE_FORMAT(champ.start_date, '%Y-%m-%d') as start_date, DATE_FORMAT(champ.end_date, '%Y-%m-%d') as end_date, base.fighter_status
        FROM blackcombat.tb_champion_history champ
        LEFT JOIN blackcombat.tb_fighter_base base
            ON champ.fighter_seq = base.fighter_seq 
        LEFT JOIN blackcombat.tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE division='웰터급' and status = 1
        ORDER BY `order` desc;";
        $result = sql_query($sql);
        $welterIndex = 0;

    $row = sql_fetch_array($result);

    $welterIndex++;
    $rankingChampImgPath = "https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$row['fighter_seq']."/".$row['rankingChamp_image_name'];

    if ($row) { ?>
        <!-- 데이터가 존재하는경우 -->
        <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter/<?= $row['fighter_seq'] ?>';">
            <h3><span class="weight">웰터급</span> <span class="champ"><?=$row['order'] == 1? "초":$row['order']?>대 CHAMPION</span></h3>
            <div class="ranking_champ_name">
                <span class="fi fi-<?= strtolower($row["country"]) ?>"></span> <span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span>
                <div class="ranking_ring_name"><?= $row['fighter_ringname'] ?></div>
                <div class="ranking_ring_name"><?= $row['team_name'] ?></div>
                <div></div>
                <div class="ranking_ring_name" style="margin-top: 10px; font-size: 0.7rem; font-style: italic;">획득 : <?= $row['start_date'] ?></div>
            </div>
            <div class="ranking_champ_photo">
                <img src='<?= $rankingChampImgPath ?>'
                    onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/fighter_blank.png'" />
            </div>
            <? if( $row['defend'] !== '0'){ ?>
                <div class="hexagon">
                    방어<br><?=$row['defend']?>
                </div>
            <? } ?>
        </div>
    <? } else { ?>
        <!-- 공석-->
        <div class="ranking_list_part_champ"><h3><span class="weight">웰터급</span> <span class="champ"></span></h3><div class="ranking_champ_name"></div><div class="ranking_champ_photo"></div></div>
    <? }

    $sql = "SELECT 
        champ.`order` , champ.fighter_seq, champ.defend, champ.status, base.fighter_name, base.fighter_ringname, base.country, team.team_name, base.ranking_image_name, base.rankingChamp_image_name, DATE_FORMAT(champ.start_date, '%Y-%m-%d') as start_date, DATE_FORMAT(champ.end_date, '%Y-%m-%d') as end_date, base.fighter_status
        FROM blackcombat.tb_champion_history champ
        LEFT JOIN blackcombat.tb_fighter_base base
            ON champ.fighter_seq = base.fighter_seq 
        LEFT JOIN blackcombat.tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE division='웰터급' and status != 1
        ORDER BY `order` desc;";
        $result = sql_query($sql);


        while ($row = sql_fetch_array($result)) {
            $welterIndex++;
            $rankingImgPath = "https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$row['fighter_seq']."/".$row['ranking_image_name'];
            ?>
            <div class="ranking_list_part_item <? if($welterIndex > 11){ echo 'hidden'; } ?>" onclick="location.href='<?php echo G5_URL ?>/fighter/<?= $row['fighter_seq'] ?>';" style="line-height:25px;">
                <div class="first_row" style="width:100%">
                    <div class="ranking_list_num" style="width:50px; margin-top: 10px;"> <?=$row['order'] == 1? "초":$row['order']?>대 </div>
                    <div class="ranking_list_photo">
                    <img src='<?= $rankingImgPath ?>'
                                    onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/fighter_blank.png'" />
                    </div>
                    <div class="ranking_list_name"><span class="fi fi-<?= strtolower($row["country"]) ?>"></span> <span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span><span class="ring_name"><?= $row['fighter_ringname'] ?> / <?= $row['team_name'] ?></span></div>
                </div>
                <div class="second_row" style="width:100%">
                    <div class="ranking_list_change date_get" style="width:120px; text-align:unset;">
                        <?= $row['start_date'] ?> <? if($row['end_date'] != null) { echo " ~ ". $row['end_date']; } ?>
                    </div>
                    <div class="ranking_list_change champ_status" style="width:35px">
                        <?
                            if($row['status'] === '3'){
                                echo '/<span style="color:#228b22; margin-left:5px;">반납</span>';
                            }else if($row['status'] === '4'){
                                echo '/<span style="color:#fa8072; margin-left:5px;">박탈</span>';
                            }
                        ?>
                    </div>
                </div>
                <? if( $row['defend'] !== '0'){ ?>
                    <div class="hexagon">
                        방어<br><?=$row['defend']?>
                    </div>
                <? } ?>
            </div>
<?
        }
?>
<? if($welterIndex > 11){ ?>
                    <div class="toggle-button-container">
                        <button id="toggleButton" onclick="foldToggle('welter')">▼ 더보기</button>
                    </div>
<? } ?>
                </div>
                <!---------------- 미들급 ------------------------->
                <div class="ranking_list_part middle">
<?
    $sql = "SELECT 
        champ.`order` , champ.fighter_seq, champ.defend, champ.status, base.fighter_name, base.fighter_ringname, base.country, team.team_name, base.ranking_image_name, base.rankingChamp_image_name, DATE_FORMAT(champ.start_date, '%Y-%m-%d') as start_date, DATE_FORMAT(champ.end_date, '%Y-%m-%d') as end_date, base.fighter_status
        FROM blackcombat.tb_champion_history champ
        LEFT JOIN blackcombat.tb_fighter_base base
            ON champ.fighter_seq = base.fighter_seq 
        LEFT JOIN blackcombat.tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE division='미들급' and status = 1
        ORDER BY `order` desc;";
        $result = sql_query($sql);
        $middleIndex = 0;

    $row = sql_fetch_array($result);

    $middleIndex++;
    $rankingChampImgPath = "https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$row['fighter_seq']."/".$row['rankingChamp_image_name'];

    if ($row) { ?>
        <!-- 데이터가 존재하는경우 -->
        <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter/<?= $row['fighter_seq'] ?>';">
            <h3><span class="weight">미들급</span> <span class="champ"><?=$row['order'] == 1? "초":$row['order']?>대 CHAMPION</span></h3>
            <div class="ranking_champ_name">
                <span class="fi fi-<?= strtolower($row["country"]) ?>"></span> <span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span>
                <div class="ranking_ring_name"><?= $row['fighter_ringname'] ?></div>
                <div class="ranking_ring_name"><?= $row['team_name'] ?></div>
                <div></div>
                <div class="ranking_ring_name" style="margin-top: 10px; font-size: 0.7rem; font-style: italic;">획득 : <?= $row['start_date'] ?></div>
            </div>
            <div class="ranking_champ_photo">
                <img src='<?= $rankingChampImgPath ?>'
                    onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/fighter_blank.png'" />
            </div>
            <? if( $row['defend'] !== '0'){ ?>
                <div class="hexagon">
                    방어<br><?=$row['defend']?>
                </div>
            <? } ?>
        </div>
    <? } else { ?>
        <!-- 공석-->
        <div class="ranking_list_part_champ"><h3><span class="weight">미들급</span> <span class="champ"></span></h3><div class="ranking_champ_name"></div><div class="ranking_champ_photo"></div></div>
    <? }

    $sql = "SELECT 
        champ.`order` , champ.fighter_seq, champ.defend, champ.status, base.fighter_name, base.fighter_ringname, base.country, team.team_name, base.ranking_image_name, base.rankingChamp_image_name, DATE_FORMAT(champ.start_date, '%Y-%m-%d') as start_date, DATE_FORMAT(champ.end_date, '%Y-%m-%d') as end_date, base.fighter_status
        FROM blackcombat.tb_champion_history champ
        LEFT JOIN blackcombat.tb_fighter_base base
            ON champ.fighter_seq = base.fighter_seq 
        LEFT JOIN blackcombat.tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE division='미들급' and status != 1
        ORDER BY `order` desc;";
        $result = sql_query($sql);


        while ($row = sql_fetch_array($result)) {
            $middleIndex++;
            $rankingImgPath = "https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$row['fighter_seq']."/".$row['ranking_image_name'];
            ?>
            <div class="ranking_list_part_item <? if($middleIndex > 11){ echo 'hidden'; } ?>" onclick="location.href='<?php echo G5_URL ?>/fighter/<?= $row['fighter_seq'] ?>';" style="line-height:25px;">
                <div class="first_row" style="width:100%">
                    <div class="ranking_list_num" style="width:50px; margin-top: 10px;"> <?=$row['order'] == 1? "초":$row['order']?>대 </div>
                    <div class="ranking_list_photo">
                    <img src='<?= $rankingImgPath ?>'
                                    onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/fighter_blank.png'" />
                    </div>
                    <div class="ranking_list_name"><span class="fi fi-<?= strtolower($row["country"]) ?>"></span> <span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span><span class="ring_name"><?= $row['fighter_ringname'] ?> / <?= $row['team_name'] ?></span></div>
                </div>
                <div class="second_row" style="width:100%">
                    <div class="ranking_list_change date_get" style="width:120px; text-align:unset;">
                        <?= $row['start_date'] ?> <? if($row['end_date'] != null) { echo " ~ ". $row['end_date']; } ?>
                    </div>
                    <div class="ranking_list_change champ_status" style="width:35px">
                        <?
                            if($row['status'] === '3'){
                                echo '/<span style="color:#228b22; margin-left:5px;">반납</span>';
                            }else if($row['status'] === '4'){
                                echo '/<span style="color:#fa8072; margin-left:5px;">박탈</span>';
                            }
                        ?>
                    </div>
                </div>
                <? if( $row['defend'] !== '0'){ ?>
                    <div class="hexagon">
                        방어<br><?=$row['defend']?>
                    </div>
                <? } ?>
            </div>
<?
        }
?>
<? if($middleIndex > 11){ ?>
                    <div class="toggle-button-container">
                        <button id="toggleButton" onclick="foldToggle('middle')">▼ 더보기</button>
                    </div>
<? } ?>
                </div>

                    
</div>

<div class="ranking_list">
                

                <!---------------- 중량급 ------------------------->
                <div class="ranking_list_part heavy">
<?
    $sql = "SELECT 
        champ.`order` , champ.fighter_seq, champ.defend, champ.status, base.fighter_name, base.fighter_ringname, base.country, team.team_name, base.ranking_image_name, base.rankingChamp_image_name, DATE_FORMAT(champ.start_date, '%Y-%m-%d') as start_date, DATE_FORMAT(champ.end_date, '%Y-%m-%d') as end_date, base.fighter_status
        FROM blackcombat.tb_champion_history champ
        LEFT JOIN blackcombat.tb_fighter_base base
            ON champ.fighter_seq = base.fighter_seq 
        LEFT JOIN blackcombat.tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE division='중량급' and status = 1
        ORDER BY `order` desc;";
        $result = sql_query($sql);
        $heavyIndex = 0;

    $row = sql_fetch_array($result);

    $heavyIndex++;
    $rankingChampImgPath = "https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$row['fighter_seq']."/".$row['rankingChamp_image_name'];

    if ($row) { ?>
        <!-- 데이터가 존재하는경우 -->
        <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter/<?= $row['fighter_seq'] ?>';">
            <h3><span class="weight">중량급</span> <span class="champ"><?=$row['order'] == 1? "초":$row['order']?>대 CHAMPION</span></h3>
            <div class="ranking_champ_name">
                <span class="fi fi-<?= strtolower($row["country"]) ?>"></span> <span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span>
                <div class="ranking_ring_name"><?= $row['fighter_ringname'] ?></div>
                <div class="ranking_ring_name"><?= $row['team_name'] ?></div>
                <div></div>
                <div class="ranking_ring_name" style="margin-top: 10px; font-size: 0.7rem; font-style: italic;">획득 : <?= $row['start_date'] ?></div>
            </div>
            <div class="ranking_champ_photo">
                <img src='<?= $rankingChampImgPath ?>'
                    onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/fighter_blank.png'" />
            </div>
            <? if( $row['defend'] !== '0'){ ?>
                <div class="hexagon">
                    방어<br><?=$row['defend']?>
                </div>
            <? } ?>
        </div>
    <? } else { ?>
        <!-- 공석-->
        <div class="ranking_list_part_champ"><h3><span class="weight">중량급</span> <span class="champ"></span></h3><div class="ranking_champ_name"></div><div class="ranking_champ_photo"></div></div>
    <? }

    $sql = "SELECT 
        champ.`order` , champ.fighter_seq, champ.defend, champ.status, base.fighter_name, base.fighter_ringname, base.country, team.team_name, base.ranking_image_name, base.rankingChamp_image_name, DATE_FORMAT(champ.start_date, '%Y-%m-%d') as start_date, DATE_FORMAT(champ.end_date, '%Y-%m-%d') as end_date, base.fighter_status
        FROM blackcombat.tb_champion_history champ
        LEFT JOIN blackcombat.tb_fighter_base base
            ON champ.fighter_seq = base.fighter_seq 
        LEFT JOIN blackcombat.tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE division='중량급' and status != 1
        ORDER BY `order` desc;";
        $result = sql_query($sql);


        while ($row = sql_fetch_array($result)) {
            $heavyIndex++;
            $rankingImgPath = "https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$row['fighter_seq']."/".$row['ranking_image_name'];
            ?>
            <div class="ranking_list_part_item <? if($heavyIndex > 11){ echo 'hidden'; } ?>" onclick="location.href='<?php echo G5_URL ?>/fighter/<?= $row['fighter_seq'] ?>';" style="line-height:25px;">
                <div class="first_row" style="width:100%">
                    <div class="ranking_list_num" style="width:50px; margin-top: 10px;"> <?=$row['order'] == 1? "초":$row['order']?>대 </div>
                    <div class="ranking_list_photo">
                    <img src='<?= $rankingImgPath ?>'
                                    onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/fighter_blank.png'" />
                    </div>
                    <div class="ranking_list_name"><span class="fi fi-<?= strtolower($row["country"]) ?>"></span> <span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span><span class="ring_name"><?= $row['fighter_ringname'] ?> / <?= $row['team_name'] ?></span></div>
                </div>
                <div class="second_row" style="width:100%">
                    <div class="ranking_list_change date_get" style="width:120px; text-align:unset;">
                        <?= $row['start_date'] ?> <? if($row['end_date'] != null) { echo " ~ ". $row['end_date']; } ?>
                    </div>
                    <div class="ranking_list_change champ_status" style="width:35px">
                        <?
                            if($row['status'] === '3'){
                                echo '/<span style="color:#228b22; margin-left:5px;">반납</span>';
                            }else if($row['status'] === '4'){
                                echo '/<span style="color:#fa8072; margin-left:5px;">박탈</span>';
                            }
                        ?>
                    </div>
                </div>
                <? if( $row['defend'] !== '0'){ ?>
                    <div class="hexagon">
                        방어<br><?=$row['defend']?>
                    </div>
                <? } ?>
            </div>
<?
        }
?>
<? if($heavyIndex > 11){ ?>
                    <div class="toggle-button-container">
                        <button id="toggleButton" onclick="foldToggle('heavy')">▼ 더보기</button>
                    </div>
<? } ?>
                </div>
                
                <!---------------- 언더그라운드 ------------------------->
                <div class="ranking_list_part underground">
<?
    $sql = "SELECT 
        champ.`order` , champ.fighter_seq, champ.defend, champ.status, base.fighter_name, base.fighter_ringname, base.country, team.team_name, base.ranking_image_name, base.rankingChamp_image_name, DATE_FORMAT(champ.start_date, '%Y-%m-%d') as start_date, DATE_FORMAT(champ.end_date, '%Y-%m-%d') as end_date, base.fighter_status
        FROM blackcombat.tb_champion_history champ
        LEFT JOIN blackcombat.tb_fighter_base base
            ON champ.fighter_seq = base.fighter_seq 
        LEFT JOIN blackcombat.tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE division='언더그라운드' and status = 1
        ORDER BY `order` desc;";
        $result = sql_query($sql);
        $undergroundIndex = 0;

    $row = sql_fetch_array($result);

    $undergroundIndex++;
    $rankingChampImgPath = "https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$row['fighter_seq']."/".$row['rankingChamp_image_name'];

    if ($row) { ?>
        <!-- 데이터가 존재하는경우 -->
        <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter/<?= $row['fighter_seq'] ?>';">
            <h3><span class="weight">언더그라운드</span> <span class="champ"><?=$row['order'] == 1? "초":$row['order']?>대 CHAMPION</span></h3>
            <div class="ranking_champ_name">
                <span class="fi fi-<?= strtolower($row["country"]) ?>"></span> <span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span>
                <div class="ranking_ring_name"><?= $row['fighter_ringname'] ?></div>
                <div class="ranking_ring_name"><?= $row['team_name'] ?></div>
                <div></div>
                <div class="ranking_ring_name" style="margin-top: 10px; font-size: 0.7rem; font-style: italic;">획득 : <?= $row['start_date'] ?></div>
            </div>
            <div class="ranking_champ_photo">
                <img src='<?= $rankingChampImgPath ?>'
                    onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/fighter_blank.png'" />
            </div>
            <? if( $row['defend'] !== '0'){ ?>
                <div class="hexagon">
                    방어<br><?=$row['defend']?>
                </div>
            <? } ?>
        </div>
    <? } else { ?>
        <!-- 공석-->
        <div class="ranking_list_part_champ"><h3><span class="weight">언더그라운드</span> <span class="champ"></span></h3><div class="ranking_champ_name"></div><div class="ranking_champ_photo"></div></div>
    <? }

    $sql = "SELECT 
        champ.`order` , champ.fighter_seq, champ.defend, champ.status, base.fighter_name, base.fighter_ringname, base.country, team.team_name, base.ranking_image_name, base.rankingChamp_image_name, DATE_FORMAT(champ.start_date, '%Y-%m-%d') as start_date, DATE_FORMAT(champ.end_date, '%Y-%m-%d') as end_date, base.fighter_status
        FROM blackcombat.tb_champion_history champ
        LEFT JOIN blackcombat.tb_fighter_base base
            ON champ.fighter_seq = base.fighter_seq 
        LEFT JOIN blackcombat.tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE division='언더그라운드' and status != 1
        ORDER BY `order` desc;";
        $result = sql_query($sql);


        while ($row = sql_fetch_array($result)) {
            $undergroundIndex++;
            $rankingImgPath = "https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$row['fighter_seq']."/".$row['ranking_image_name'];
            ?>
            <div class="ranking_list_part_item <? if($undergroundIndex > 11){ echo 'hidden'; } ?>" onclick="location.href='<?php echo G5_URL ?>/fighter/<?= $row['fighter_seq'] ?>';" style="line-height:25px;">
                <div class="first_row" style="width:100%">
                    <div class="ranking_list_num" style="width:50px; margin-top: 10px;"> <?=$row['order'] == 1? "초":$row['order']?>대 </div>
                    <div class="ranking_list_photo">
                    <img src='<?= $rankingImgPath ?>'
                                    onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/fighter_blank.png'" />
                    </div>
                    <div class="ranking_list_name"><span class="fi fi-<?= strtolower($row["country"]) ?>"></span> <span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span><span class="ring_name"><?= $row['fighter_ringname'] ?> / <?= $row['team_name'] ?></span></div>
                </div>
                <div class="second_row" style="width:100%">
                    <div class="ranking_list_change date_get" style="width:120px; text-align:unset;">
                        <?= $row['start_date'] ?> <? if($row['end_date'] != null) { echo " ~ ". $row['end_date']; } ?>
                    </div>
                    <div class="ranking_list_change champ_status" style="width:35px">
                        <?
                            if($row['status'] === '3'){
                                echo '/<span style="color:#228b22; margin-left:5px;">반납</span>';
                            }else if($row['status'] === '4'){
                                echo '/<span style="color:#fa8072; margin-left:5px;">박탈</span>';
                            }
                        ?>
                    </div>
                </div>
                <? if( $row['defend'] !== '0'){ ?>
                    <div class="hexagon">
                        방어<br><?=$row['defend']?>
                    </div>
                <? } ?>
            </div>
<?
        }
?>
<? if($undergroundIndex > 11){ ?>
                    <div class="toggle-button-container">
                        <button id="toggleButton" onclick="foldToggle('underground')">▼ 더보기</button>
                    </div>
<? } ?>
                </div>



                <!---------------- 여성부 ------------------------->
                <div class="ranking_list_part atom">
<?
    $sql = "SELECT 
        champ.`order` , champ.fighter_seq, champ.defend, champ.status, base.fighter_name, base.fighter_ringname, base.country, team.team_name, base.ranking_image_name, base.rankingChamp_image_name, DATE_FORMAT(champ.start_date, '%Y-%m-%d') as start_date, DATE_FORMAT(champ.end_date, '%Y-%m-%d') as end_date, base.fighter_status
        FROM blackcombat.tb_champion_history champ
        LEFT JOIN blackcombat.tb_fighter_base base
            ON champ.fighter_seq = base.fighter_seq 
        LEFT JOIN blackcombat.tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE division='아톰급' and status = 1
        ORDER BY `order` desc;";
        $result = sql_query($sql);
        $atomIndex = 0;

    $row = sql_fetch_array($result);

    $atomIndex++;
    $rankingChampImgPath = "https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$row['fighter_seq']."/".$row['rankingChamp_image_name'];

    if ($row) { ?>
        <!-- 데이터가 존재하는경우 -->
        <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter/<?= $row['fighter_seq'] ?>';">
            <h3><span class="weight">여성부</span> <span class="champ"><?=$row['order'] == 1? "초":$row['order']?>대 CHAMPION</span></h3>
            <div class="ranking_champ_name">
                <span class="fi fi-<?= strtolower($row["country"]) ?>"></span> <span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span>
                <div class="ranking_ring_name"><?= $row['fighter_ringname'] ?></div>
                <div class="ranking_ring_name"><?= $row['team_name'] ?></div>
                <div></div>
                <div class="ranking_ring_name" style="margin-top: 10px; font-size: 0.7rem; font-style: italic;">획득 : <?= $row['start_date'] ?></div>
            </div>
            <div class="ranking_champ_photo">
                <img src='<?= $rankingChampImgPath ?>'
                    onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/fighter_blank.png'" />
            </div>
            <? if( $row['defend'] !== '0'){ ?>
                <div class="hexagon">
                    방어<br><?=$row['defend']?>
                </div>
            <? } ?>
        </div>
    <? } else { ?>
        <!-- 공석-->
        <div class="ranking_list_part_champ"><h3><span class="weight">여성부</span> <span class="champ"></span></h3><div class="ranking_champ_name"></div><div class="ranking_champ_photo"></div></div>
    <? }

    $sql = "SELECT 
        champ.`order` , champ.fighter_seq, champ.defend, champ.status, base.fighter_name, base.fighter_ringname, base.country, team.team_name, base.ranking_image_name, base.rankingChamp_image_name, DATE_FORMAT(champ.start_date, '%Y-%m-%d') as start_date, DATE_FORMAT(champ.end_date, '%Y-%m-%d') as end_date, base.fighter_status
        FROM blackcombat.tb_champion_history champ
        LEFT JOIN blackcombat.tb_fighter_base base
            ON champ.fighter_seq = base.fighter_seq 
        LEFT JOIN blackcombat.tb_team_base team
            ON base.team_seq = team.team_seq 
        WHERE division='아톰급' and status != 1
        ORDER BY `order` desc;";
        $result = sql_query($sql);


        while ($row = sql_fetch_array($result)) {
            $atomIndex++;
            $rankingImgPath = "https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/".$row['fighter_seq']."/".$row['ranking_image_name'];
            ?>
            <div class="ranking_list_part_item <? if($atomIndex > 11){ echo 'hidden'; } ?>" onclick="location.href='<?php echo G5_URL ?>/fighter/<?= $row['fighter_seq'] ?>';" style="line-height:25px;">
                <div class="first_row" style="width:100%">
                    <div class="ranking_list_num" style="width:50px; margin-top: 10px;"> <?=$row['order'] == 1? "초":$row['order']?>대 </div>
                    <div class="ranking_list_photo">
                    <img src='<?= $rankingImgPath ?>'
                                    onerror="this.src='https://www.blackcombat-official.com/theme/blackcombat/img/fighter_new/fighter_blank.png'" />
                    </div>
                    <div class="ranking_list_name"><span class="fi fi-<?= strtolower($row["country"]) ?>"></span> <span class="fighter_name"<? if($is_admin) {echo 'data-name-color="'.$row["fighter_status"].'"';} ?>><?= $row['fighter_name'] ?></span><span class="ring_name"><?= $row['fighter_ringname'] ?> / <?= $row['team_name'] ?></span></div>
                </div>
                <div class="second_row" style="width:100%">
                    <div class="ranking_list_change date_get" style="width:120px; text-align:unset;">
                        <?= $row['start_date'] ?> <? if($row['end_date'] != null) { echo " ~ ". $row['end_date']; } ?>
                    </div>
                    <div class="ranking_list_change champ_status" style="width:35px">
                        <?
                            if($row['status'] === '3'){
                                echo '/<span style="color:#228b22; margin-left:5px;">반납</span>';
                            }else if($row['status'] === '4'){
                                echo '/<span style="color:#fa8072; margin-left:5px;">박탈</span>';
                            }
                        ?>
                    </div>
                </div>
                <? if( $row['defend'] !== '0'){ ?>
                    <div class="hexagon">
                        방어<br><?=$row['defend']?>
                    </div>
                <? } ?>
            </div>
<?
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
        "atom":false,
        "underground": false
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