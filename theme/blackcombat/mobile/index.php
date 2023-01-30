<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_MSHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<style>
    .swiper-button-next, .swiper-button-prev {color:#fff;}
    .swiper-pagination-bullet {background:#fff;}
</style>

<div class="key_visual">
    <div class="swiper key_visual_wrap">
        <div class="swiper-wrapper key_visual_items">
            <div class="swiper-slide key_visual_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/key_visual_0_m.jpg?v=20220918" /></div>
            <div class="swiper-slide key_visual_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/key_visual_1_m.jpg?v=20220918" /></div>
            <div class="swiper-slide key_visual_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/key_visual_2_m.jpg?v=20220918" /></div>
            <div class="swiper-slide key_visual_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/key_visual_3_m.jpg?v=20220918" /></div>
            <div class="swiper-slide key_visual_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/key_visual_4_m.jpg?v=20220918" /></div>
            <div class="swiper-slide key_visual_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/key_visual_5_m.jpg?v=20220918" /></div>
            <div class="swiper-slide key_visual_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/key_visual_6_m.jpg?v=20220918" /></div>
            <div class="swiper-slide key_visual_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/key_visual_7_m.jpg?v=20220918" /></div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <div class="swiper-pagination"></div>
    </div>
</div>

<div class="favorite_menus">
    <div class="favorite_menu_items">
        <div class="favorite_menu_item">
            <div class="favorite_menu_item_img">
                <img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/favorite_menu_event.png?v=20220918" />

                <a href="<?php echo G5_URL ?>/event.php?page=1" class="favorite_menu_item_img_anchor event"><span>자세히보기</span><img src="<?php echo G5_THEME_IMG_URL; ?>/main/favorite_menu_anchor_arrow.png" /></a>
            </div>
        </div>
        <div class="favorite_menu_item">
            <div class="favorite_menu_item_img">
                <img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/favorite_menu_video.png?v=20220918" />

                <a href="<?php echo G5_URL ?>/video" class="favorite_menu_item_img_anchor video"><span>자세히보기</span><img src="<?php echo G5_THEME_IMG_URL; ?>/main/favorite_menu_anchor_arrow.png" /></a>
            </div>
        </div>
        <div class="favorite_menu_item">
            <div class="favorite_menu_item_img">
                <img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/favorite_menu_ranking.png?v=20220918" />

                <a href="<?php echo G5_URL ?>/ranking.php?type=fighter" class="favorite_menu_item_img_anchor ranking"><span>자세히보기</span><img src="<?php echo G5_THEME_IMG_URL; ?>/main/favorite_menu_anchor_arrow.png" /></a>
            </div>
        </div>
    </div>
</div>

<div class="store">
    <div class="store_title"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/store_title.png" /></div>

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
    <div class="sponsor_title"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/sponsor_title.png" /></div>

    <div class="sponsor_items">
        <div class="sponsor_item"><a href="https://exxxtreme.co.kr/index.html" class="sponsor_item_anchor" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/sponsor_img_1.png" /></a></div>
        <div class="sponsor_item"><a href="https://www.aryehblack.com/" class="sponsor_item_anchor" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/sponsor_img_2.png" /></a></div>
        <div class="sponsor_item"><a href="https://zebramats.kr/" class="sponsor_item_anchor" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/sponsor_img_3.png" /></a></div>
        <div class="sponsor_item"><a href="https://auction.collexx.io/" class="sponsor_item_anchor" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/sponsor_img_4.png" /></a></div>
    </div>

    <div class="sponsor_bottom"><a href="https://monsterzym.com/" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/sponsor_bottom_img.png" /></a></div>
</div>

<div class="training_center">
    <div class="training_center_title"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/training_center_title.png?v=20220918" /></div>

    <div class="swiper training_center_wrap">
        <div class="swiper-wrapper training_center_items">
            <div class="swiper-slide training_center_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/training_center_img_1.png?v=20220918" /></div>
            <div class="swiper-slide training_center_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/training_center_img_2.png?v=20220918" /></div>
            <div class="swiper-slide training_center_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/training_center_img_3.png?v=20220918" /></div>
            <div class="swiper-slide training_center_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/training_center_img_4.png?v=20220918" /></div>
            <div class="swiper-slide training_center_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/training_center_img_5.png?v=20220918" /></div>
            <div class="swiper-slide training_center_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/training_center_img_6.png?v=20220918" /></div>
            <div class="swiper-slide training_center_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/training_center_img_7.png?v=20220918" /></div>
            <div class="swiper-slide training_center_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/training_center_img_8.png?v=20220918" /></div>
            <div class="swiper-slide training_center_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/training_center_img_9.png?v=20220918" /></div>
            <div class="swiper-slide training_center_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/training_center_img_10.png?v=20220918" /></div>
            <div class="swiper-slide training_center_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/training_center_img_11.png?v=20220918" /></div>
            <div class="swiper-slide training_center_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/training_center_img_12.png?v=20220918" /></div>
            <div class="swiper-slide training_center_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/training_center_img_13.png?v=20220918" /></div>
            <div class="swiper-slide training_center_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/training_center_img_14.png?v=20220918" /></div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <div class="swiper-pagination"></div>
    </div>

    <div class="training_center_bottom"><a href="https://www.instagram.com/blackcombat_songnae/" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/training_center_bottom_img.png?v=20220918" /></a></div>
</div>

<script>
    $(document).ready(function() {
        var key_visual_swiper = new Swiper('.key_visual_wrap', {
            // Optional parameters
            speed: 300,
            nested: true,
            loop: true,
            spaceBetween: 0,
            slidesPerView: 1,
            centeredSlides: true,
            grabCursor: true,
            autoplay: {
                delay: 3000,
            },
            navigation: {
                nextEl: '.key_visual_wrap .swiper-button-next',
                prevEl: '.key_visual_wrap .swiper-button-prev',
            },
            pagination: {
                el: '.key_visual_wrap .swiper-pagination',
                type: 'bullets',
            },
        });

        var training_center_swiper = new Swiper('.training_center_wrap', {
            // Optional parameters
            speed: 250,
            nested: true,
            loop: true,
            spaceBetween: 0,
            slidesPerView: 1,
            centeredSlides: true,
            grabCursor: true,
            autoplay: {
                delay: 3000,
            },
            navigation: {
                nextEl: '.training_center_wrap .swiper-button-next',
                prevEl: '.training_center_wrap .swiper-button-prev',
            },
            pagination: {
                el: '.training_center_wrap .swiper-pagination',
                type: 'bullets',
            },
        });
    });
</script>

<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');