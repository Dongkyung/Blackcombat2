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
    </style>
<div class="sub_visual">
    <div class="sub_visual_items">
        <div class="sub_visual_caption">
            <div class="category"></div>
        </div>
    </div>
</div>    
    
<? include_once(G5_THEME_PATH.'/fighter_contents.php'); ?>

<?php
include_once(G5_THEME_PATH.'/tail.php');