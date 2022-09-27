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
    .seat_choice_popup {display:block; position:fixed; top:0; left:0; width:100%; height:100%; margin:0; padding:0; box-sizing:border-box; z-index:9999;}
    .seat_choice_popup_wrap {position:relative; display:flex; flex-direction:column; align-items:flex-start; justify-content:flex-start; width:1440px; max-width:1440px; height:100%; margin:0 auto; padding:0; background:#fff; overflow-y:scroll; z-index:99;}
    .seat_choice_popup_header {flex:0 0 auto; display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; height:auto; margin:0; padding:20px 0;}
    .seat_choice_popup_header_title {font-size:30px; font-weight:400; line-height:100%; color:#000;}
    .seat_choice_popup_body {flex:0 0 auto; display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; height:auto; margin:0; padding:10px 0;}
    .seat_choice_popup_footer {flex:0 0 auto; display:flex; flex-direction:row; flex-wrap:nowrap; align-items:center; justify-content:center; width:100%; height:auto; margin:0; padding:20px 0; column-gap:20px;}
    .seat_choice_popup_close_btn {flex:0 0 auto; display:block; width:186px; height:50px; margin:0; padding:15px 20px; font-size:1.25em; font-weight:bold; color:#000; text-align:center; border:1px solid #98a3b3; border-radius:3px; background:#fff; box-sizing:border-box; box-shadow:unset;}
    .seat_choice_btn {flex:0 0 auto; display:block; width:186px; height:50px; margin:0; padding:15px 20px; font-size:1.25em; font-weight:bold; color:#fff; text-align:center; border:1px solid #1c70e9; border-radius:3px; background:#3a8afd; box-sizing:border-box; box-shadow:unset;}
    .seat_choice_btn[disabled] {color:rgba(16,16,16,0.3); border:1px solid #98a3b3; background:rgba(239,239,239,1); cursor:default;}

    .movieLayoutContainer {position:relative; display:block; width:100%; height:940px; margin:0; padding:0;}
    .seat_rows {position:absolute; display:flex; flex-direction:column; align-items:center; justify-content:flex-start; width:auto; height:auto; margin:0; padding:0; background:#fff;}
    .seat_row_items {display:flex; flex-direction:column; align-items:flex-start; justify-content:flex-start; width:auto; height:auto; margin:0; padding:0; row-gap:2px;}
    .seat_row_items.horizon {flex-direction:row; flex-wrap:nowrap; row-gap:0; column-gap:2px;}
    .seat_row_item {flex:0 0 auto; display:flex; flex-direction:column; align-items:center; justify-content:center; width:16px; height:16px; margin:0; padding:2px 2px; border:1px solid transparent; border-radius:2px; cursor:pointer; vertical-align:-webkit-baseline-middle; background:#fff;}
    .seat_row_item span {flex:0 0 auto; display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; height:100%; margin:0; padding:0; border-radius:2px; background:#fff;}
    .seat_row_item[data-choosable="Y"] {border-color:#8a8a8a;}
    .seat_row_item[data-choosable="N"] {border-color:#8a8a8a; background-color:#fafafa; cursor:default;}
    .seat_row_item[data-choosable="Y"] span {background:#fff;}
    .seat_row_item[data-choosable="N"] span {background:#b9b9b9;}
    .seat_row_item[data-choosable="Y"]:hover span {background:#dcdcdc;}
    .seat_row_item[data-selected="Y"] span {background:#41db41;}

    .seat_rows_groups {position:absolute; display:flex; flex-direction:row; flex-wrap:nowrap; align-items:center; justify-content:flex-start; width:auto; height:auto; margin:0; padding:0;}
    .seat_rows_groups.vertical {flex-direction:column; flex-wrap:unset;}
    .seat_rows_group {flex:0 0 auto; position:relative; display:flex; flex-direction:row; flex-wrap:nowrap; align-items:center; justify-content:flex-start; width:auto; height:auto; margin:0; padding:0;}
    .seat_rows_groups.vertical .seat_rows_group {flex-direction:column; flex-wrap:unset; row-gap:5px;}
    .seat_rows_group .seat_rows {position:relative;}

    .seat_choice_popup_bg {position:absolute; top:0; left:0; width:100%; height:100%; margin:0; padding:0; background:rgba(0,0,0,0.5); box-sizing:border-box; z-index:98;}
</style>

<div class="seat_choice_popup" style="display:none;">
    <div class="seat_choice_popup_wrap">
        <div class="seat_choice_popup_header">
            <h1 class="seat_choice_popup_header_title">좌석 선택하기</h1>
        </div>
        <div class="seat_choice_popup_body">
            <div class="movieLayoutContainer" data-product-id="<?php echo $it_id; ?>">
                <div class="seat_rows" data-row-type="X" style="top:0; left:40px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=34; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=35; $i<=50; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="W" style="top:0; left:60px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=34; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=35; $i<=50; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="V" style="top:0; left:80px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=34; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=35; $i<=50; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="U" style="top:0; left:100px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=34; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=35; $i<=50; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="T" style="top:0; left:120px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=34; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=35; $i<=50; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="S" style="top:0; left:140px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=34; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=35; $i<=50; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="R" style="top:0; left:160px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=34; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=35; $i<=50; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="Q" style="top:0; left:180px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=34; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=35; $i<=50; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="P" style="top:0; left:200px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=34; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=35; $i<=50; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="O" style="top:0; left:220px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=34; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=35; $i<=50; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="N" style="top:0; left:240px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=34; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=35; $i<=50; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="" style="top:90px; left:280px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=11; $i++) { // 11 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=12; $i<=29; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=30; $i<=40; $i++) { // 11 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="" style="top:126px; left:300px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=9; $i++) { // 9 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=10; $i<=27; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=28; $i<=36; $i++) { // 9 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="" style="top:144px; left:320px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=8; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=9; $i<=26; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=27; $i<=34; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="" style="top:162px; left:340px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=7; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=8; $i<=25; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=26; $i<=32; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="" style="top:180px; left:360px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=6; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=7; $i<=24; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=25; $i<=30; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="" style="top:198px; left:380px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=5; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=6; $i<=23; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=24; $i<=28; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="" style="top:216px; left:400px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=4; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=5; $i<=22; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=23; $i<=26; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="" style="top:234px; left:430px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=3; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=4; $i<=21; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=22; $i<=24; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="" style="top:306px; left:450px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=18; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>



                <div class="seat_rows_groups vertical" style="top:10px; left:350px; transform:rotateZ(-45deg);">
                    <div class="seat_rows_group">
                        <div class="seat_rows" data-row-type="F">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=6; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="E">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=6; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=6; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=6; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=6; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=4; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=4; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=2; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=2; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="seat_rows" data-row-type="D" style="top:0; left:420px;">
                    <div class="seat_row_items horizon">
                        <?php for($i=1; $i<=9; $i++) { // 9 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=10; $i<=27; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=28; $i<=36; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="C" style="top:20px; left:438px;">
                    <div class="seat_row_items horizon">
                        <?php for($i=1; $i<=8; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=9; $i<=26; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=27; $i<=34; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="B" style="top:40px; left:456px;">
                    <div class="seat_row_items horizon">
                        <?php for($i=1; $i<=7; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=8; $i<=25; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=26; $i<=32; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="A" style="top:60px; left:474px;">
                    <div class="seat_row_items horizon">
                        <?php for($i=1; $i<=6; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=7; $i<=24; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=25; $i<=30; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="VIP_3" style="top:80px; left:492px;">
                    <div class="seat_row_items horizon">
                        <?php for($i=1; $i<=5; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=6; $i<=23; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=24; $i<=28; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="VIP_2" style="top:100px; left:510px;">
                    <div class="seat_row_items horizon">
                        <?php for($i=1; $i<=4; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=5; $i<=22; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=23; $i<=26; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="VIP_1" style="top:140px; left:528px;">
                    <div class="seat_row_items horizon">
                        <?php for($i=1; $i<=3; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=4; $i<=21; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=22; $i<=24; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="VVIP" style="top:160px; left:600px;">
                    <div class="seat_row_items horizon">
                        <?php for($i=1; $i<=18; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>



                <div class="seat_rows_groups vertical" style="top:10px; right:270px; transform:rotateZ(45deg);">
                    <div class="seat_rows_group">
                        <div class="seat_rows" data-row-type="F">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=6; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="E">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=6; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=6; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=6; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=6; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=4; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=4; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=2; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=2; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="seat_rows" data-row-type="" style="top:90px; right:200px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=11; $i++) { // 11 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=12; $i<=18; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=19; $i<=25; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=26; $i<=36; $i++) { // 11 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="" style="top:126px; right:220px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=9; $i++) { // 9 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=10; $i<=16; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=23; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=24; $i<=32; $i++) { // 9 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="" style="top:144px; right:240px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=8; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=9; $i<=15; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=16; $i<=22; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=23; $i<=30; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="" style="top:162px; right:260px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=7; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=8; $i<=14; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=15; $i<=21; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=22; $i<=28; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="" style="top:180px; right:280px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=6; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=7; $i<=13; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=14; $i<=20; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=21; $i<=26; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="" style="top:198px; right:300px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=5; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=6; $i<=12; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=13; $i<=19; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=20; $i<=24; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="" style="top:216px; right:320px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=4; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=5; $i<=11; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=12; $i<=18; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=19; $i<=22; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="" style="top:234px; right:350px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=3; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=4; $i<=10; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=11; $i<=17; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=18; $i<=20; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="" style="top:306px; right:370px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=7; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=8; $i<=14; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>



                <div class="seat_rows" data-row-type="M" style="top:0; right:40px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=23; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=24; $i<=30; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=31; $i<=43; $i++) { // 13 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="L" style="top:0; right:60px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=23; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=24; $i<=30; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=31; $i<=43; $i++) { // 13 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="K" style="top:0; right:80px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=23; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=24; $i<=30; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=31; $i<=43; $i++) { // 13 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="J" style="top:0; right:100px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=23; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=24; $i<=30; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=31; $i<=43; $i++) { // 13 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="I" style="top:0; right:120px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=23; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=24; $i<=30; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=31; $i<=43; $i++) { // 13 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="H" style="top:0; right:140px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=23; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=24; $i<=30; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=31; $i<=43; $i++) { // 13 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="G" style="top:0; right:160px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=23; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=24; $i<=30; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=31; $i<=43; $i++) { // 13 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows_groups vertical" style="top:740px; left:350px; transform:rotateZ(-135deg);">
                    <div class="seat_rows_group">
                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=6; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="E">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=6; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=6; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=6; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=6; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=4; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=4; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=2; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=2; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="seat_rows" data-row-type="" style="bottom:160px; left:600px;">
                    <div class="seat_row_items horizon">
                        <?php for($i=1; $i<=18; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="" style="bottom:140px; left:528px;">
                    <div class="seat_row_items horizon">
                        <?php for($i=1; $i<=3; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=4; $i<=21; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=22; $i<=24; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="" style="bottom:100px; left:510px;">
                    <div class="seat_row_items horizon">
                        <?php for($i=1; $i<=4; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=5; $i<=22; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=23; $i<=26; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="" style="bottom:80px; left:492px;">
                    <div class="seat_row_items horizon">
                        <?php for($i=1; $i<=5; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=6; $i<=23; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=24; $i<=28; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="" style="bottom:60px; left:474px;">
                    <div class="seat_row_items horizon">
                        <?php for($i=1; $i<=6; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=7; $i<=24; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=25; $i<=30; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="" style="bottom:40px; left:456px;">
                    <div class="seat_row_items horizon">
                        <?php for($i=1; $i<=7; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=8; $i<=25; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=26; $i<=32; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="" style="bottom:20px; left:438px;">
                    <div class="seat_row_items horizon">
                        <?php for($i=1; $i<=8; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=9; $i<=26; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=27; $i<=34; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="" style="bottom:0; left:420px;">
                    <div class="seat_row_items horizon">
                        <?php for($i=1; $i<=9; $i++) { // 9 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=10; $i<=27; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=28; $i<=36; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-row-type="A" data-seat-number="<?php echo $i; ?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>


                <div class="seat_rows_groups vertical" style="top:740px; right:270px; transform:rotateZ(135deg);">
                    <div class="seat_rows_group">
                        <div class="seat_rows" data-row-type="F">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=6; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="E">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=6; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=6; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=6; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=6; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=4; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=4; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=2; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=2; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="seat_choice_popup_footer">
            <a href="#" class="seat_choice_popup_close_btn">닫기</a>
            <button type="button" class="seat_choice_btn" disabled>좌석 선택</button>
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
            $('.seat_choice_popup_close_btn').on('click', function(e) {
                e.preventDefault();

                $('.seat_choice_popup').fadeOut(300);
            });
        }

        $(document).on('click', '.seat_row_item', function(e) {
            e.preventDefault();

            var obj = $(this);
            var selected = obj.attr('data-selected');
            var choosable = obj.attr('data-choosable');

            if (choosable === 'Y') {
                if (selected === 'Y') {
                    obj.attr('data-selected', 'N');
                } else {
                    $('.seat_row_item').attr('data-selected', 'N');

                    obj.attr('data-selected', 'Y');

                    $('.seat_choice_btn').prop('disabled', false);
                }
            }
        });

        $(document).on('click', '.seat_choice_btn', function(e) {
            e.preventDefault();

            var obj = $(this);

            if (obj.prop('disabled') === false) {
                var setObj = $('.seat_row_item[data-selected="Y"]');
                if (!setObj.length) {
                    alert('좌석을 선태해주세요.');
                    return false;
                }

                var setNumber = setObj.attr('data-seat-number');
                if (!setNumber.length) {
                    alert('정상적인 접근이 아닙니다.');
                    location.reload();
                    return false;
                }

                var parentObj = setObj.closest('.seat_rows');
                if (!parentObj.length) {
                    alert('정상적인 접근이 아닙니다.');
                    location.reload();
                    return false;
                }

                var rowType = parentObj.attr('data-row-type');
                if (!rowType) {
                    alert('정상적인 접근이 아닙니다.');
                    location.reload();
                    return false;
                }

                var setRowTypeObj = $('input[name="seat_row_type"]');
                if (!setRowTypeObj.length) {
                    alert('정상적인 접근이 아닙니다.');
                    location.reload();
                    return false;
                }

                var setNumberObj = $('input[name="seat_number"]');
                if (!setNumberObj.length) {
                    alert('정상적인 접근이 아닙니다.');
                    location.reload();
                    return false;
                }

                setRowTypeObj.val(rowType);
                setNumberObj.val(setNumber);

                alert('좌석이 선택되었습니다.');

                $('.seat_choise_result').html(rowType + ' 열 ' + setNumber);

                $('.seat_choice_popup').fadeOut(300);
            }
        });

        /*
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
        */

        var ajax_url = g5_theme_shop_url || g5_shop_url;

        $.ajax({
            url: ajax_url + "/ajax.action.php",
            type: "POST",
            data: {"action":"get_purchase_seat_info"},
            dataType: "json",
            async: true,
            cache: false,
            success: function(data, textStatus) {
                if (data.disabled_seat) {
                    var disabledSeat = data.disabled_seat;

                    var seat_row_type = '';
                    var seat_number = '';
                    var seatObj = '';

                    disabledSeat.forEach(function(value, idx) {
                        seat_row_type = value.od_seat_row_type;
                        seat_number = value.od_seat_number;

                        if (seat_row_type && seat_number) {
                            seatObj = $('.seat_rows[data-row-type="' + seat_row_type + '"]').find('.seat_row_item[data-seat-number="' + seat_number + '"]');

                            if (seatObj.length) {
                                seatObj.attr('data-choosable', 'N');
                            }
                        }
                    });
                }
            },
            error : function(request, status, error){
                alert("false ajax :"+request.responseText);
            }
        });
    })(jQuery);
</script>
<?php } ?>

<?php
include_once(G5_THEME_PATH.'/tail.sub.php');