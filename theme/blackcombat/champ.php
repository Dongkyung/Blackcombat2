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
                <div class="category">CHAMPION</div>
            </div>
        </div>
    </div>
    <div class="sub_content">
        <div class="sub_container" style="max-width:1280px;">
            <div class="ranking_page">
                <? include_once(G5_THEME_PATH.'/champ_contents.php'); ?>
            </div>
        </div>
    </div>

<?php
include_once(G5_THEME_PATH.'/tail.php');