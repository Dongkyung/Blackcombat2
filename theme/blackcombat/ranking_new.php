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
                <div class="category">RANKING_NEW</div>
            </div>
        </div>
    </div>
    <div class="sub_content">
        <div class="sub_container" style="max-width:1280px;">
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

                    <div class="ranking_team_list">
                        <div class="ranking_team_part">
                            <div class="ranking_team_logo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/team_excombat.png" />
                            </div>
                            <div class="ranking_team_info">
                                <div class="ranking_team_num">
                                    <span>Rank</span> 1
                                </div>
                                <div class="ranking_team_name">
                                    Extreme 익스트림 컴뱃
                                </div>
                                <div class="ranking_team_address">
                                    경기도 고양시 덕양구 화신로260번길 58, B01호
                                    <div class="tel">031-965-2347</div>
                                </div>
                            </div>
                        </div>
                        <div class="ranking_team_part">
                            <div class="ranking_team_logo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/team_mmastory.png" />
                            </div>
                            <div class="ranking_team_info">
                                <div class="ranking_team_num">
                                    <span>Rank</span> 2
                                </div>
                                <div class="ranking_team_name">
                                    아리에 블랙 MMA 스토리
                                </div>
                                <div class="ranking_team_address">
                                    서울특별시 도봉구 노해로63가길 42 B1
                                    <div class="tel">0507-1345-9663</div>
                                </div>
                            </div>
                        </div>
                        <div class="ranking_team_part">
                            <div class="ranking_team_logo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/team_ssabi.png" />
                            </div>
                            <div class="ranking_team_info">
                                <div class="ranking_team_num">
                                    <span>Rank</span> 3
                                </div>
                                <div class="ranking_team_name">
                                   싸비 MMA
                                </div>
                                <div class="ranking_team_address">
                                    서울 마포구 양화로 85
                                    <div class="tel">02-6218-1800</div>
                                </div>
                            </div>
                        </div>
                        <div class="ranking_team_part">
                            <div class="ranking_team_logo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/team_solid.png" />
                            </div>
                            <div class="ranking_team_info">
                                <div class="ranking_team_num">
                                    <span>Rank</span> 4
                                </div>
                                <div class="ranking_team_name">
                                    BF 팀 솔리드
                                </div>
                                <div class="ranking_team_address">
                                    경기도 김포시 김포한강1로97번길 10-12, 101호 솔리드짐
                                    <div class="tel">0507-1312-1794</div>
                                </div>
                            </div>
                        </div>
                        <div class="ranking_team_part">
                            <div class="ranking_team_logo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/team_calson.png" />
                            </div>
                            <div class="ranking_team_info">
                                <div class="ranking_team_num">
                                    <span>Rank</span> 5
                                </div>
                                <div class="ranking_team_name">
                                    지브라 칼슨 해적단
                                </div>
                                <div class="ranking_team_address">
                                    서울 마포구 양화로 85
                                    <div class="tel">02-6218-1800</div>
                                </div>
                            </div>
                        </div>
                        <div class="ranking_team_part">
                            <div class="ranking_team_logo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/team_cubemma.png" />
                            </div>
                            <div class="ranking_team_info">
                                <div class="ranking_team_num">
                                    <span>Rank</span> 6
                                </div>
                                <div class="ranking_team_name">
                                    큐브 MMA
                                </div>
                                <div class="ranking_team_address">
                                    경기도 하남시 신장로 188 4층
                                    <div class="tel">010-4785-4149</div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
    </div>

<?php
include_once(G5_THEME_PATH.'/tail.php');