<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.php');

add_stylesheet('<link rel="stylesheet" href="/theme/blackcombat/css/mobile_ranking.css">', 0);

$type = !empty($_GET['type']) ? $_GET['type'] : 'fighter';
?>
<style>
    .ranking_list_part_item{
        /* display:contents; */
        flex-direction:column;
        height:unset;
        padding: 7px 0px;
        line-height:15px !important;
    }
    .ranking_list_change{
        font-size: 10px !important;
        text-align:unset;
    }
    .ranking_list_change.date_get{
        width:130px !important;
    }
    /* .first_row{
        line-height:15px;
    } */
    .second_row{
        margin-left: 233px;
        margin-top: -20px;
    }
    /* .ring_name{
        line-height:10px;
    } */
    .ranking_list_name{
        line-height:10px;
    }
</style>
    <div class="sub_visual">
        <div class="sub_visual_items">
            <div class="sub_visual_caption">
                <div class="category">CHAMPION</div>
            </div>
        </div>
    </div>
    <div class="sub_content">
        <div class="sub_container">
            <div class="ranking_page">
                <? include_once(G5_THEME_PATH.'/champ_contents.php'); ?>
            </div>
        </div>
    </div>

<?php
include_once(G5_THEME_PATH.'/tail.php');