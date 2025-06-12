<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
include_once('./_common.php');

add_stylesheet('<link rel="stylesheet" href="/theme/blackcombat/css/fighter.css">', 0);

$page = $_GET['page'];

if($page === '28227780'){
    echo '<script type="text/javascript">alert(\'조회할 수 없습니다\'); window.history.back();</script>';
}

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
    
    <? include_once(G5_THEME_PATH.'/fighter_contents.php'); ?>


<?php
include_once(G5_THEME_PATH.'/tail.php');