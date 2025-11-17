<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.php');

add_stylesheet('<link rel="stylesheet" href="/theme/blackcombat/css/mobile_fighter.css">', 0);

$page = !empty($_GET['page']) ? $_GET['page'] : 'under_1';
?>
<style>
    .match_result{
        width:40px;
        text-align:center;
    }
    .game_name{
        display: inline-block;
        width:90px;
    }
    .winner_name{
        color: #ffba3c;
        font-weight:bold;
        text-size:1.2rem;

    }

    .data_bio_height, .data_bio_weight{
        float: unset;
        width: 100% !important;
    }
    .data_bio{
        display: flex;
        width: 100%;
        flex-direction:column;
        justify-content: space-between;
        gap: 30px;
    }

    .team_info_wrapper{
        flex-direction: column-reverse;
    }
    
    .team_info_wrapper .fighter_data{
        margin-top:30px;
        width:unset;
    }

    .team_info_wrapper .fighter_img{
        width:80%;
    }
    .division_group .fighter_match{
        margin-bottom:60px;
    }

</style>
<div class="sub_visual">
    <div class="sub_visual_items">
        <div class="sub_visual_caption">
            <div class="category"></div>
        </div>
    </div>
</div>    
    
<? include_once(G5_THEME_PATH.'/team_contents.php'); ?>

<?php
include_once(G5_THEME_PATH.'/tail.php');