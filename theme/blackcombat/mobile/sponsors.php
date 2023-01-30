<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.php');

add_stylesheet('<link rel="stylesheet" href="/theme/blackcombat/css/mobile_sponsors.css">', 0);
?>

    <div class="sub_visual">
        <div class="sub_visual_items">
            <div class="sub_visual_caption">
                <div class="category">SPONSORS</div>
            </div>
        </div>
    </div>
    <div class="sub_content">
        <div class="sub_container">
            <div class="sponsors_page">
                <div class="sponsors_list">
                    <div class="sponsors_list_item">
                        <div class="sponsors_list_logo">
                            <a href="https://exxxtreme.co.kr/index.html" target="_blank">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/sponsors_extreme.png" />
                            </a>
                        </div>
                        <div class="sponsors_list_caption">
                            <div class="sponsors_list_info">
                                최상의 라이프스타일을 선사하는<br />익스트림한 건강 브랜드, EXTREME
                            </div>
                        </div>
                    </div>
                    <div class="sponsors_list_item">
                        <div class="sponsors_list_logo">
                            <a href="https://www.aryehblack.com" target="_blank">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/sponsors_areyblack.png" />
                            </a>
                        </div>
                        <div class="sponsors_list_caption">
                            <div class="sponsors_list_info">
                                ‘건강한 삶’에 대한 기준을 제시하고<br />‘고귀한 생명’을 고찰하는 브랜드, 아리에블랙
                            </div>
                        </div>
                    </div>
                    <div class="sponsors_list_item">
                        <div class="sponsors_list_logo">
                            <a href="https://zebramats.kr/" target="_blank">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/sponsors_zebra.png" />
                            </a>
                        </div>
                        <div class="sponsors_list_caption">
                            <div class="sponsors_list_info">
                                WORLD’S NO.1 스포츠매트 시장을 선도하는 기업<br />지브라 코리아
                            </div>
                        </div>
                    </div>
                    <div class="sponsors_list_item">
                        <div class="sponsors_list_logo">
                            <a href="https://auction.collexx.io/" target="_blank">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/sponsors_collexx.png" />
                            </a>
                        </div>
                        <div class="sponsors_list_caption">
                            <div class="sponsors_list_info">
                                COLLEXX
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sponsors_cooperater">
                    <div class="guide">COOPERATE WITH MONSTERZYM</div>
                    <div class="cooperater_logo">
                        <a href="https://monsterzym.com/" target="_blank">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/sponsors_mz.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include_once(G5_THEME_PATH.'/tail.php');