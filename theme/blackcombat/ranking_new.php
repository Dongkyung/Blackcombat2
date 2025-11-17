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
                <div class="category">RANKING</div>
            </div>
        </div>
    </div>
    <div class="sub_content">
        <div class="sub_container" style="max-width:1280px;">
            <div class="ranking_page">
                <div class="ranking_category">
                    <ul>
                        <li>
                            <a href="<?php echo G5_URL ?>/ranking.php?type=fighter" class="<?php echo $type == 'fighter' ? 'active' : ''; ?>">FIGHTER</a>
                        </li>
                        <li>
                            <a href="<?php echo G5_URL ?>/ranking.php?type=team" class="<?php echo $type == 'team' ? 'active' : ''; ?>">TEAM</a>
                        </li>
                        <li>
                            <a href="<?php echo G5_URL ?>/ranking.php?type=semi_pro" class="<?php echo $type == 'semi_pro' ? 'active' : ''; ?>">SEMI-PRO</a>
                        </li>
                    </ul>
                </div>

                <?php if ($type == 'fighter') { ?>
                    <? include_once(G5_THEME_PATH.'/ranking_contents_new.php'); ?>
                <?php } else if ($type == 'semi_pro') { ?>
                    <? include_once(G5_THEME_PATH.'/ranking_semi_pro_contents_new.php'); ?>
                <?php } else { ?>
                    <? include_once(G5_THEME_PATH.'/ranking_team.php'); ?>
                <?php } ?>
            </div>
        </div>
    </div>

<?php
include_once(G5_THEME_PATH.'/tail.php');