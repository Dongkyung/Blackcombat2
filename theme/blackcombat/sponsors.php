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
?>

    <div class="sub_visual">
        <div class="sub_visual_items">
            <div class="sub_visual_caption">
                <div class="category">SPONSORS</div>
                <div class="script">Black Combat</div>
            </div>
        </div>
    </div>
    <div class="sub_content">
        <div class="sub_container">
            <div class="sponsors_page">
                <div style=" text-align: center;">
                    <img src="<?php echo G5_THEME_IMG_URL; ?>/sponsor_pc.png" />
                </div>
            </div>
        </div>
    </div>

<?php
include_once(G5_THEME_PATH.'/tail.php');