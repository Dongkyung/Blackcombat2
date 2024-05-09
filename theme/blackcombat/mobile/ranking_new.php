<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.php');

add_stylesheet('<link rel="stylesheet" href="/theme/blackcombat/css/mobile_ranking.css">', 0);

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
        <div class="sub_container">
            <div class="ranking_page">
                <div class="ranking_category">
                    <ul>
                        <li>
                            <a href="<?php echo G5_URL ?>/ranking_new.php?type=fighter" class="<?php echo $type == 'fighter' ? 'active' : ''; ?>">Fighter</a>
                        </li>
                        <li>
                            <a href="<?php echo G5_URL ?>/ranking_new.php?type=team" class="<?php echo $type == 'team' ? 'active' : ''; ?>">Team</a>
                        </li>
                        <li>
                            <a href="<?php echo G5_URL ?>/ranking_new.php?type=semi_pro" class="<?php echo $type == 'semi_pro' ? 'active' : ''; ?>">Semi-Pro</a>
                        </li>
                    </ul>
                </div>

                <?php if ($type == 'fighter') { ?>
                    <? include_once(G5_THEME_PATH.'/ranking_contents_new.php'); ?>
                <?php } else if ($type == 'semi_pro') { ?>
                    <? include_once(G5_THEME_PATH.'/ranking_semi_pro_contents_new.php'); ?>
                <?php } else { ?>
                    <? include_once(G5_THEME_PATH.'/ranking_team_new.php'); ?>
                <?php } ?>
            </div>
        </div>
    </div>

<?php
include_once(G5_THEME_PATH.'/tail.php');