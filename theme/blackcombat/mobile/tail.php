<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}

?>
    </div>
</div>

<div id="ft">
    <div class="footer_social">
        <div class="footer_social_title"><img src="<?php echo G5_THEME_IMG_URL; ?>/footer_social_title.png" /></div>

        <div class="footer_social_items">
            <div class="footer_social_item"><a href="https://www.youtube.com/channel/UC_IYjiKaQBPq-K1Iq4sM-UQ" class="footer_social_item_anchor" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/footer_social_youtube_icon.png" /></a></div>
            <div class="footer_social_item"><a href="https://www.instagram.com/blackcombat_official/" class="footer_social_item_anchor" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/footer_social_instagram_icon.png" /></a></div>
        </div>
    </div>

    <div class="footer_copyright">
        <p style="padding-bottom:5px;">회사명 : 주식회사 이데아 파라곤</p>
        <p style="padding-bottom:5px;">주소 : 서울시 성동구 서울숲2길 35</p>
        <p style="padding-bottom:5px;">사업자 등록번호 : 682-81-02925</p>
        <p style="padding-bottom:5px;">대표 : 박평화</p>
        <p style="padding-bottom:5px;">전화 : 070-5222-9146</p>
        <p style="padding-bottom:5px;">통신판매업신고번호 : 2022-서울금천-2877</p>
        <p style="padding-bottom:10px;">개인정보 보호책임자 : 박영광 (pykp3927@gmail.com)</p>

        <p>Blackcombat © <?php echo date('Y', time()); ?>. All Rights Reserved.</p>
        <p style="font-size: 11px; color: #FFF;">Designed by <a href="https://monsterzym.com/" target="_blank" style="color: #FFF;"> MONSTERZYM</a></p>
        <!--<a href="/index.php?device=pc">모바일버전</a>-->
    </div>

    <button type="button" id="top_btn" style="display:none;"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>

    <?php /*
    if(G5_DEVICE_BUTTON_DISPLAY && G5_IS_MOBILE) {
    ?>

    <a href="<?php echo get_device_change_url(); ?>" id="device_change">PC 버전으로 보기</a>

    <?php
    }

    if ($config['cf_analytics']) {
        echo $config['cf_analytics'];
    }
    */ ?>

</div>

<script>
    jQuery(function($) {
        $( document ).ready( function() {
            // 폰트 리사이즈 쿠키있으면 실행
            font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));

            //상단고정
            if( $(".top").length ){
                var jbOffset = $(".top").offset();
                $( window ).scroll( function() {
                    if ( $( document ).scrollTop() > jbOffset.top ) {
                        $( '.top' ).addClass( 'fixed' );
                    }
                    else {
                        $( '.top' ).removeClass( 'fixed' );
                    }
                });
            }

            $(window).on('scroll', function () {
                if ($(this).scrollTop() > 100) {
                    $('#top_btn').fadeIn();
                } else {
                    $('#top_btn').fadeOut();
                }
            });

            //상단으로
            $("#top_btn").on("click", function() {
                $("html, body").animate({scrollTop:0}, '500');
                return false;
            });

            if( $(window).scrollTop() > 100 ) {
                $('#top_btn').show();
            }
        });
    });
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");