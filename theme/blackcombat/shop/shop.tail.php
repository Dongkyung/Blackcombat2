<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MSHOP_PATH.'/shop.tail.php');
    return;
}

$admin = get_admin("super");

// 사용자 화면 우측과 하단을 담당하는 페이지입니다.
// 우측, 하단 화면을 꾸미려면 이 파일을 수정합니다.
?>
        </div>  <!-- } .shop-content 끝 -->
	</div>      <!-- } #container 끝 -->
</div>
<!-- } 전체 콘텐츠 끝 -->

<!-- 하단 시작 { -->
<div id="ft">
    <div class="footer_social">
        <div class="footer_social_title"><img src="<?php echo G5_THEME_IMG_URL; ?>/footer_social_title.png" /></div>

        <div class="footer_social_items">
            <div class="footer_social_item"><a href="https://www.youtube.com/channel/UC_IYjiKaQBPq-K1Iq4sM-UQ" class="footer_social_item_anchor" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/footer_social_youtube_icon.png" /></a></div>
            <div class="footer_social_item"><a href="https://www.instagram.com/blackcombat_official/" class="footer_social_item_anchor" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/footer_social_instagram_icon.png" /></a></div>
        </div>
    </div>

    <div class="footer_copyright">
        <p style="padding-bottom:5px;">회사명 : 블랙컴뱃</p>
        <p style="padding-bottom:5px;">주소 : 서울 금천구 가산디지털1로 142 1302호 (가산동, 가산 더스카이밸리 1차)</p>
        <p style="padding-bottom:5px;">사업자 등록번호 : 682-81-02925</p>
        <p style="padding-bottom:5px;">대표 : 박평화</p>
        <p style="padding-bottom:5px;">전화 : 070-4193-9293</p>
        <p style="padding-bottom:5px;">통신판매업신고번호 :</p>
        <p style="padding-bottom:10px;">개인정보 보호책임자 : 박영광 (pykp3927@gmail.com)</p>

        <p>Blackcombat © <?php echo date('Y', time()); ?>. All Rights Reserved.</p>
        <p style="font-size: 11px; color: #FFF; margin-top: 5px;">Designed by <a href="https://monsterzym.com/" target="_blank"> MONSTERZYM</a></p>
    </div>

    <button type="button" id="top_btn">
        <i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>

    <script>
        $(function() {
            $("#top_btn").on("click", function() {
                $("html, body").animate({scrollTop:0}, '500');
                return false;
            });
        });
    </script>
</div>

<?php
$sec = get_microtime() - $begin_time;
$file = $_SERVER['SCRIPT_NAME'];

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<script src="<?php echo G5_JS_URL; ?>/sns.js"></script>
<!-- } 하단 끝 -->

<?php if($it_id) { ?>

<link rel="stylesheet" href="<?php echo G5_JS_URL; ?>/seatLayout/seatLayout.css" />
<script src="<?php echo G5_JS_URL; ?>/seatLayout/seatLayout.js"></script>
<script src="<?php echo G5_JS_URL; ?>/seatLayout/seatData.js"></script>

<style>
    .seat_choice_popup {
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        z-index: 9999;
    }

    .seat_choice_popup_wrap {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        width: 80%;
        max-width: 80%;
        height: auto;
        margin: 0 auto;
        padding: 0;
        background: #fff;
        z-index: 99;
    }
    .seat_choice_popup_header {
        flex: 0 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: auto;
        margin: 0;
        padding: 20px 0;
    }
    .seat_choice_popup_header_title {
        font-size: 30px;
        font-weight: 400;
        line-height: 100%;
        color: #000;
    }
    .seat_choice_popup_body {
        flex: 0 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: auto;
        margin: 0;
        padding: 20px 0;
    }
    .seat_choice_popup_footer {
        flex: 0 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: auto;
        margin: 0;
        padding: 20px 0;
    }
    .seat_choice_popup_close_btn {
        flex: 0 0 auto;
        display: block;
        width: 186px;
        height: 50px;
        margin: 0;
        padding: 15px 20px;
        font-size: 1.25em;
        font-weight: bold;
        color: #000 !important;
        text-align: center;
        border: 1px solid #98a3b3 !important;
        border-radius: 3px;
        background: #fff !important;
        box-sizing: border-box;
        box-shadow: unset !important;
    }
    .seat-proccess-panel {
        flex: 0 0 auto;
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: auto;
        margin: 0;
        padding: 20px 0 !important;
        border: 0 !important;
    }
    .seat_choice_btn {
        flex: 0 0 auto;
        display: block;
        width: 186px;
        height: 50px;
        margin: 0 0 0 20px;
        padding: 15px 20px;
        font-size: 1.25em;
        font-weight: bold;
        color: #fff !important;
        text-align: center;
        border: 1px solid #1c70e9 !important;
        border-radius: 3px;
        background: #3a8afd !important;
        box-sizing: border-box;
        box-shadow: unset !important;
    }
    .seat_choice_btn[disabled] {
        color: #000 !important;
        border: 1px solid #98a3b3 !important;
        background: #fff !important;
    }

    .seat_choice_popup_bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background: rgba(0,0,0,0.5);
        box-sizing: border-box;
        z-index: 98;
    }
</style>

<div class="seat_choice_popup" style="display:block;">
    <div class="seat_choice_popup_wrap">
        <div class="seat_choice_popup_header">
            <h1 class="seat_choice_popup_header_title">좌석 선택하기</h1>
        </div>
        <div class="seat_choice_popup_body">
            <div class="movieLayoutContainer" data-product-id="<?php echo $it_id; ?>"></div>
        </div>
    </div>

    <div class="seat_choice_popup_bg"></div>
</div>

<script>
    (function ($) {
        if ($('.open_seat_choice_btn').length) {
            $('.open_seat_choice_btn').on('click', function(e) {
                e.preventDefault();

                $('.seat_choice_popup').fadeIn(300);
            });
        }

        if ($('.seat_choice_popup_close_btn').length) {
            $(document).on('click', '.seat_choice_popup_close_btn', function(e) {
                e.preventDefault();

                $('.seat_choice_popup').fadeOut(300);
            });
        }

        if ($('.movieLayoutContainer').length) {
            var product_id = $('.movieLayoutContainer').attr('data-product-id');

            if (product_id) {
                var seatData = getSeatData(product_id);

                console.log(seatData);
                return false;

                $('.movieLayoutContainer').seatLayout({
                    data: seatData, // Movie seat data
                    showActionButtons: true,
                    classes : { // Add class or classes for the component
                        doneBtn : 'seat_choice_btn',
                        cancelBtn : 'seat_choice_popup_close_btn',
                        row:'seatRows',
                        area:'',
                        screen:'',
                        seat:''
                    },
                    numberOfSeat: 1 // Nuber of seat want to select
                });
            }
        }
    })(jQuery);
</script>
<?php } ?>

<?php
include_once(G5_THEME_PATH.'/tail.sub.php');