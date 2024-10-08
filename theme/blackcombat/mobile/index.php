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
            <div class="swiper-slide key_visual_item"><a href="https://www.blackcombat-official.com/shop/1723217030"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/key_visual_m_n12_1.jpg" /></a></div>
            <div class="swiper-slide key_visual_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/key_visual_m_n11_3.jpg" /></div>
            <div class="swiper-slide key_visual_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/key_visual_m_n11_4.jpg" /></div>
            <div class="swiper-slide key_visual_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/key_visual_m_n11_5.jpg" /></div>
            <div class="swiper-slide key_visual_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/key_visual_0_m.jpg" /></div>
            <div class="swiper-slide key_visual_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/key_visual_1_m.jpg" /></div>
            <div class="swiper-slide key_visual_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/key_visual_3_m.jpg" /></div>
            <div class="swiper-slide key_visual_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/key_visual_4_m.jpg" /></div>
            <div class="swiper-slide key_visual_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/key_visual_5_m.jpg" /></div>
            <div class="swiper-slide key_visual_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/key_visual_7_m.jpg" /></div>
            <div class="swiper-slide key_visual_item"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/key_visual_8_m.jpg" /></div>
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
                <a href="https://www.hegemonyblack.com/goods/goods_view.php?goodsNo=1000000094" class="store_item_img_anchor" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/store_img_1.jpg" /></a>
            </div>
            <div class="store_item_name">
                <a href="https://www.hegemonyblack.com/goods/goods_view.php?goodsNo=1000000094" class="store_item_name_anchor" target="_blank">BLACK COMBAT 더킹 후디 (black)</a>
            </div>
            <div class="store_item_price">
                <a href="https://www.hegemonyblack.com/goods/goods_view.php?goodsNo=1000000094" class="store_item_price_anchor" target="_blank">￦69,000</a>
            </div>
        </div>
        <div class="store_item">
            <div class="store_item_img">
                <a href="https://www.hegemonyblack.com/goods/goods_view.php?goodsNo=1000000088" class="store_item_img_anchor" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/store_img_2.jpg" /></a>
            </div>
            <div class="store_item_name">
                <a href="https://www.hegemonyblack.com/goods/goods_view.php?goodsNo=1000000088" class="store_item_name_anchor" target="_blank">BLACK COMBAT 후드집업 (white)</a>
            </div>
            <div class="store_item_price">
                <a href="https://www.hegemonyblack.com/goods/goods_view.php?goodsNo=1000000088" class="store_item_price_anchor" target="_blank">￦79,000</a>
            </div>
        </div>
        <div class="store_item">
            <div class="store_item_img">
                <a href="https://www.hegemonyblack.com/goods/goods_view.php?goodsNo=1000000089" class="store_item_img_anchor" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/store_img_3.jpg" /></a>
            </div>
            <div class="store_item_name">
                <a href="https://www.hegemonyblack.com/goods/goods_view.php?goodsNo=1000000089" class="store_item_name_anchor" target="_blank">BLACK COMBAT 후드집업 (black)</a>
            </div>
            <div class="store_item_price">
                <a href="https://www.hegemonyblack.com/goods/goods_view.php?goodsNo=1000000089" class="store_item_price_anchor" target="_blank">￦79,000</a>
            </div>
        </div>
        <div class="store_item">
            <div class="store_item_img">
                <a href="https://www.hegemonyblack.com/goods/goods_view.php?goodsNo=1000000083" class="store_item_img_anchor" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/store_img_4.jpg" /></a>
            </div>
            <div class="store_item_name">
                <a href="https://www.hegemonyblack.com/goods/goods_view.php?goodsNo=1000000083" class="store_item_name_anchor" target="_blank">BLACK COMBAT 트렁크 팬츠 (white)</a>
            </div>
            <div class="store_item_price">
                <a href="https://www.hegemonyblack.com/goods/goods_view.php?goodsNo=1000000083" class="store_item_price_anchor" target="_blank">￦64,000</a>
            </div>
        </div>
    </div>
</div>

<div class="sponsors">
<div class="sponsor_title">
        <img src="<?php echo G5_THEME_IMG_URL; ?>/main/sponsor_title.png" />
        <div class="sponsor_first"><a href="https://www.pgsoft.com/ko/games/all/" class="" target="_blank"><img  style="background-color:white; margin-top:30px; padding:20px;" src="<?php echo G5_THEME_IMG_URL; ?>/mobile/sponsor_pg.png" /></a></div>
        <div class="sponsor_first"><a href="https://www.deepcoin.com/" class="" target="_blank" style="width: 100%;height: 250px;display: block;" ><img  style="background-color:white; margin-top: 30px; padding:20px;" src="<?php echo G5_THEME_IMG_URL; ?>/mobile/sponsor_deepcoin.png" /></a></div>
    </div>

    <div class="sponsor_items">
        <div class="sponsor_item"><a href="https://www.doctorzone.co.kr/" class="sponsor_item_anchor" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/sponsor_doctorzon.png" /></a></div>
        <div class="sponsor_item"><a href="https://www.instagram.com/downtontheblack/" class="sponsor_item_anchor" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/sponsor_downton.png" /></a></div>
        <div class="sponsor_item"><a href="https://zebramats.kr/" class="sponsor_item_anchor" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/sponsor_img_3.png" /></a></div>
        <div class="sponsor_item"><a href="https://exxxtreme.co.kr/index.html" class="sponsor_item_anchor" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/sponsor_img_1.png" /></a></div>
        <div class="sponsor_item"><a href="https://www.cgv.co.kr/" class="sponsor_item_anchor" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/sponsor_cgv.png" /></a></div>
        <div class="sponsor_item"><a href="https://bf-am.com/home/index.php" class="sponsor_item_anchor" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/sponsor_bf.png" style="width:60%"/></a></div>
    </div>

    <div class="sponsor_bottom"><a href="https://monsterzym.com/" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/main/sponsor_bottom_img.png" /></a></div>
</div>

<div class="training_center">
    <div class="training_center_title"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/training_center_title.png?v=20220918" /></div>

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

    <div class="training_center_bottom"><a href="https://www.instagram.com/blackcombat_songnae/" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/training_center_bottom_img.png?v=20220918" /></a></div>
</div>
<div class="training_center" style="padding-top:00px">
    <div class="training_center_title"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/training_center_title_2.png" /></div>

    <div class="swiper">
        <div class="swiper-wrapper training_center_items" style="justify-content:center">
            <div class="swiper-slide training_center_item" style="opacity:1"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/training_center_img2_1.jpg" /></div>
        </div>
    </div>

    <div class="training_center_bottom"><a href="https://www.instagram.com/blackcombat_daejeon/" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/main/training_center_bottom_img_2.png" /></a></div>
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