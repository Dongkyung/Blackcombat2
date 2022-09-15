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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<style>
    #container_wr {width:100%;}
    #ft {max-width:100%;}
</style>

<div class="key_visual">
    <div class="key_visual_items">
        <div class="key_visual_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/key_visual_1.png" /></div>
    </div>
</div>

<div class="favorite_menus">
    <div class="favorite_menu_items">
        <div class="favorite_menu_item">
            <div class="favorite_menu_item_img">
                <img src="<?php echo G5_THEME_IMG_URL; ?>/main/favorite_menu_event.png" />

                <a href="<?php echo G5_URL ?>/event.php?page=1" class="favorite_menu_item_img_anchor"><span>자세히보기</span><img src="<?php echo G5_THEME_IMG_URL; ?>/main/favorite_menu_anchor_arrow.png" /></a>
            </div>
        </div>
        <div class="favorite_menu_item">
            <div class="favorite_menu_item_img">
                <img src="<?php echo G5_THEME_IMG_URL; ?>/main/favorite_menu_video.png" />

                <a href="<?php echo G5_URL ?>/video" class="favorite_menu_item_img_anchor"><span>자세히보기</span><img src="<?php echo G5_THEME_IMG_URL; ?>/main/favorite_menu_anchor_arrow.png" /></a>
            </div>
        </div>
        <div class="favorite_menu_item">
            <div class="favorite_menu_item_img">
                <img src="<?php echo G5_THEME_IMG_URL; ?>/main/favorite_menu_ranking.png" />

                <a href="<?php echo G5_URL ?>/ranking.php?type=fighter" class="favorite_menu_item_img_anchor"><span>자세히보기</span><img src="<?php echo G5_THEME_IMG_URL; ?>/main/favorite_menu_anchor_arrow.png" /></a>
            </div>
        </div>
    </div>
</div>

<div class="store">
    <div class="store_title"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/store_title.png" /></div>

    <div class="store_items">
        <div class="store_item">
            <div class="store_item_img">
                <a href="http://www.hegemonyblack.com/goods/goods_view.php?goodsNo=1000000061&mtn=13%5E%7C%5E%5B+CLASSIC+COLLECTION+%5D%5E%7C%5En" class="store_item_img_anchor" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/store_img_1.png" /></a>
            </div>
            <div class="store_item_name">
                <a href="http://www.hegemonyblack.com/goods/goods_view.php?goodsNo=1000000061&mtn=13%5E%7C%5E%5B+CLASSIC+COLLECTION+%5D%5E%7C%5En" class="store_item_name_anchor" target="_blank">갓파더 블랙 티셔츠</a>
            </div>
            <div class="store_item_price">
                <a href="http://www.hegemonyblack.com/goods/goods_view.php?goodsNo=1000000061&mtn=13%5E%7C%5E%5B+CLASSIC+COLLECTION+%5D%5E%7C%5En" class="store_item_price_anchor" target="_blank">￦38,000</a>
            </div>
        </div>
        <div class="store_item">
            <div class="store_item_img">
                <a href="http://www.hegemonyblack.com/goods/goods_view.php?goodsNo=1000000060&mtn=13%5E%7C%5E%5B+CLASSIC+COLLECTION+%5D%5E%7C%5En" class="store_item_img_anchor" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/store_img_2.png" /></a>
            </div>
            <div class="store_item_name">
                <a href="http://www.hegemonyblack.com/goods/goods_view.php?goodsNo=1000000060&mtn=13%5E%7C%5E%5B+CLASSIC+COLLECTION+%5D%5E%7C%5En" class="store_item_name_anchor" target="_blank">블랙컴뱃2 공식 티셔츠</a>
            </div>
            <div class="store_item_price">
                <a href="http://www.hegemonyblack.com/goods/goods_view.php?goodsNo=1000000060&mtn=13%5E%7C%5E%5B+CLASSIC+COLLECTION+%5D%5E%7C%5En" class="store_item_price_anchor" target="_blank">￦42,000</a>
            </div>
        </div>
        <div class="store_item">
            <div class="store_item_img">
                <a href="http://www.hegemonyblack.com/goods/goods_view.php?goodsNo=1000000062&mtn=13%5E%7C%5E%5B+CLASSIC+COLLECTION+%5D%5E%7C%5En" class="store_item_img_anchor" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/store_img_3.png" /></a>
            </div>
            <div class="store_item_name">
                <a href="http://www.hegemonyblack.com/goods/goods_view.php?goodsNo=1000000062&mtn=13%5E%7C%5E%5B+CLASSIC+COLLECTION+%5D%5E%7C%5En" class="store_item_name_anchor" target="_blank">조커 정도한 티셔츠</a>
            </div>
            <div class="store_item_price">
                <a href="http://www.hegemonyblack.com/goods/goods_view.php?goodsNo=1000000062&mtn=13%5E%7C%5E%5B+CLASSIC+COLLECTION+%5D%5E%7C%5En" class="store_item_price_anchor" target="_blank">￦38,500</a>
            </div>
        </div>
        <div class="store_item">
            <div class="store_item_img">
                <a href="http://www.hegemonyblack.com/goods/goods_view.php?goodsNo=1000000059&mtn=13%5E%7C%5E%5B+CLASSIC+COLLECTION+%5D%5E%7C%5En" class="store_item_img_anchor" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/store_img_4.png" /></a>
            </div>
            <div class="store_item_name">
                <a href="http://www.hegemonyblack.com/goods/goods_view.php?goodsNo=1000000059&mtn=13%5E%7C%5E%5B+CLASSIC+COLLECTION+%5D%5E%7C%5En" class="store_item_name_anchor" target="_blank">BLACK COMBAT 파이트쇼츠</a>
            </div>
            <div class="store_item_price">
                <a href="http://www.hegemonyblack.com/goods/goods_view.php?goodsNo=1000000059&mtn=13%5E%7C%5E%5B+CLASSIC+COLLECTION+%5D%5E%7C%5En" class="store_item_price_anchor" target="_blank">￦70,000</a>
            </div>
        </div>
    </div>
</div>

<div class="sponsors">
    <div class="sponsor_title"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/sponsor_title.png" /></div>

    <div class="sponsor_items">
        <div class="sponsor_item"><a href="https://www.ashcroft.co.kr/" class="sponsor_item_anchor" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/sponsor_img_1.png" /></a></div>
        <div class="sponsor_item"><a href="https://exxxtreme.co.kr/index.html" class="sponsor_item_anchor" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/sponsor_img_2.png" /></a></div>
        <div class="sponsor_item"><a href="https://zebramats.kr/" class="sponsor_item_anchor" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/sponsor_img_3.png" /></a></div>
        <div class="sponsor_item"><a href="https://www.alcort.kr/" class="sponsor_item_anchor" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/sponsor_img_4.png" /></a></div>
    </div>

    <div class="sponsor_bottom"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/sponsor_bottom_img.png" /></div>
</div>

<div class="training_center">
    <div class="training_center_title"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/training_center_title.png" /></div>

    <div class="swiper training_center_wrap">
        <div class="swiper-wrapper training_center_items">
            <div class="swiper-slide training_center_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/training_center_img_1.png" /></div>
            <div class="swiper-slide training_center_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/training_center_img_2.png" /></div>
            <div class="swiper-slide training_center_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/training_center_img_3.png" /></div>
        </div>
    </div>

    <div class="training_center_bottom"><a href="https://www.instagram.com/blackcombat_songnae/" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/training_center_bottom_img.png" /></a></div>
</div>

<script>
    $(document).ready(function() {
        var swiper = new Swiper('.swiper', {
            // Optional parameters
            speed: 250,
            nested: true,
            loop: true,
            spaceBetween: 30,
            slidesPerView: 1.65,
            centeredSlides: true,
            grabCursor: true,
        });
    });
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');