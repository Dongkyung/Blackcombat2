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

<style>
    .get_item_options {position:absolute; top:-9999px; left:-9999px;}
    #sit_siblings {display:none;}
    #sit_tab {width:100%;}
    #sit_buy {display:none;}
    .sit_side_option {display:none;}
    .sit_sel_option {display:none;}
</style>

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
        <p style="padding-bottom:5px;">회사명 : 주식회사 이데아 파라곤</p>
        <p style="padding-bottom:5px;">주소 : 서울 금천구 가산디지털1로 142 1302호 (가산동, 가산 더스카이밸리 1차)</p>
        <p style="padding-bottom:5px;">사업자 등록번호 : 682-81-02925</p>
        <p style="padding-bottom:5px;">대표 : 박평화</p>
        <p style="padding-bottom:5px;">전화 : 070-7778-9192, 070-4193-9293</p>
        <p style="padding-bottom:5px;">통신판매업신고번호 : 2022-서울금천-2877</p>
        <p style="padding-bottom:10px;">개인정보 보호책임자 : 박영광 (pykp3927@gmail.com)</p>

        <p>Blackcombat © <?php echo date('Y', time()); ?>. All Rights Reserved.</p>
        <p style="font-size: 11px; color: #FFF; margin-top: 5px;">Designed by <a href="https://monsterzym.com/" target="_blank" style="color: #FFF;"> MONSTERZYM</a></p>
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

<style>
    .seat_choice_popup {display:block; position:fixed; top:0; left:0; width:100%; height:100%; margin:0; padding:0; box-sizing:border-box; z-index:9999;}
    .seat_choice_popup_wrap {position:relative; display:flex; flex-direction:column; align-items:flex-start; justify-content:flex-start; width:100%; height:100%; margin:0 auto; padding:0; background:#fff; overflow-y:scroll; z-index:99;}
    .seat_choice_popup_header {flex:0 0 auto; display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; height:auto; margin:0; padding:20px 0;}
    .seat_choice_popup_header_title {font-size:30px; font-weight:400; line-height:100%; color:#000;}
    .seat_choice_popup_body {flex:0 0 auto; display:flex; flex-direction:column; align-items:flex-start; justify-content:flex-start; width:auto; height:calc(100% - 160px); margin:0 auto; padding:10px 0; overflow-x:scroll;}
    .seat_choice_popup_footer {flex:0 0 auto; display:flex; flex-direction:row; flex-wrap:nowrap; align-items:center; justify-content:center; width:100%; height:auto; margin:0; padding:20px 0; column-gap:20px;}
    .seat_choice_popup_close_btn {flex:0 0 auto; display:block; width:186px; height:50px; margin:0; padding:15px 20px; font-size:1.25em; font-weight:bold; color:#000; text-align:center; border:1px solid #98a3b3; border-radius:3px; background:#fff; box-sizing:border-box; box-shadow:unset;}
    .seat_choice_btn {flex:0 0 auto; display:block; width:186px; height:50px; margin:0; padding:15px 20px; font-size:1.25em; font-weight:bold; color:#fff; text-align:center; border:1px solid #1c70e9; border-radius:3px; background:#3a8afd; box-sizing:border-box; box-shadow:unset;}
    .seat_choice_btn[disabled] {color:rgba(16,16,16,0.3); border:1px solid #98a3b3; background:rgba(239,239,239,1); cursor:default;}

    .movieLayoutContainer {position:relative; display:block; width:1440px; max-width:1440px; height:940px; min-height:940px; margin:0; padding:0;}
    .cage_img_1 {position:absolute; top:255px; left:550px; display:block; width:auto; max-width:430px; height:auto; margin:0; padding:0; z-index:11;}
    .cage_img_2 {position:absolute; top:441px; right:1px; display:block; width:auto; max-width:460px; height:auto; margin:0; padding:0; z-index:11;}
    .seat_rows {position:absolute; display:flex; flex-direction:column; align-items:center; justify-content:flex-start; width:auto; height:auto; margin:0; padding:0; background:#fff; z-index:10;}
    .seat_row_items {display:flex; flex-direction:column; align-items:flex-start; justify-content:flex-start; width:auto; height:auto; margin:0; padding:0; row-gap:2px;}
    .seat_row_items.horizon {flex-direction:row; flex-wrap:nowrap; row-gap:0; column-gap:2px;}
    .seat_row_item {flex:0 0 auto; display:flex; flex-direction:column; align-items:center; justify-content:center; width:16px; height:16px; margin:0; padding:2px 2px; border:1px solid transparent; border-radius:2px; cursor:pointer; vertical-align:-webkit-baseline-middle; background:#fff;}
    .seat_row_item span {flex:0 0 auto; display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; height:100%; margin:0; padding:0; border-radius:2px; background:#fff;}
    .seat_row_item[data-choosable="Y"] {border-color:#8a8a8a;}
    .seat_row_item[data-choosable="N"] {border-color:#8a8a8a; background-color:#fafafa; cursor:default;}
    .seat_row_item[data-choosable="Y"] span {background:#fff;}
    .seat_row_item[data-choosable="N"] span {background:#b9b9b9;}
    .seat_row_item[data-choosable="Y"]:hover span {background:#dcdcdc;}
    .seat_row_item[data-selected="Y"] span {background:#41db41 !important;}

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
                <img class="cage_img_1" src="<?php echo G5_THEME_IMG_URL; ?>/product/cage_img_1.png" />

                <img class="cage_img_2" src="<?php echo G5_THEME_IMG_URL; ?>/product/cage_img_2.png" />

                <div class="seat_rows" data-row-type="X" style="top:0; left:40px;">
                    <div class="seat_row_items" style="flex-direction:column-reverse;">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="X열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=34; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="X열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=35; $i<=45; $i++) { // 11 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="X열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=46; $i<=50; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="X열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="W" style="top:0; left:60px;">
                    <div class="seat_row_items" style="flex-direction:column-reverse;">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="W열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=34; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="W열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=35; $i<=45; $i++) { // 11 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="W열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=46; $i<=50; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="W열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="V" style="top:0; left:80px;">
                    <div class="seat_row_items" style="flex-direction:column-reverse;">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <?php
                            if ($i == 4 || $i == 5 || $i == 6 || $i == 13 || $i == 14) {
                                $choosable_V = 'N';
                            } else {
                                $choosable_V = 'N';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_V; ?>" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=34; $i++) { // 18 ?>
                            <?php
                            if ($i == 17 || $i == 18 || $i == 19 || $i == 20 || $i == 21 || $i == 22 || $i == 23 || $i == 24 || $i == 25 || $i == 29 || $i == 33) {
                                $choosable_V = 'N';
                            } else {
                                $choosable_V = 'N';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_V; ?>" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=35; $i<=40; $i++) { // 6 ?>
                            <?php
                            if ($i == 37 || $i == 38 || $i == 39 || $i == 40) {
                                $choosable_V = 'N';
                            } else {
                                $choosable_V = 'N';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_V; ?>" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=41; $i<=50; $i++) { // 10 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="U" style="top:0; left:100px;">
                    <div class="seat_row_items" style="flex-direction:column-reverse;">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <?php
                            if ($i == 1 || $i == 2 || $i == 7 || $i == 12 || $i == 15) {
                                $choosable_U = 'N';
                            } else {
                                $choosable_U = 'N';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_U; ?>" data-seat-number="<?php echo $i; ?>" title="U열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=34; $i++) { // 18 ?>
                            <?php
                            if ($i == 19 || $i == 20 || $i == 23 || $i == 30 || $i == 31 || $i == 34) {
                                $choosable_U = 'N';
                            } else {
                                $choosable_U = 'N';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_U; ?>" data-seat-number="<?php echo $i; ?>" title="U열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=35; $i<=40; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="U열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=41; $i<=50; $i++) { // 10 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="U열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="T" style="top:0; left:120px;">
                    <div class="seat_row_items" style="flex-direction:column-reverse;">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <?php
                            if ($i == 3 || $i == 4 || $i == 5 || $i == 6 || $i == 7 || $i == 16) {
                                $choosable_T = 'N';
                            } else {
                                $choosable_T = 'N';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_T; ?>" data-seat-number="<?php echo $i; ?>" title="T열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=34; $i++) { // 18 ?>
                            <?php
                            if ($i == 17 || $i == 18 || $i == 22 || $i == 28 || $i == 29) {
                                $choosable_T = 'N';
                            } else {
                                $choosable_T = 'N';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_T; ?>" data-seat-number="<?php echo $i; ?>" title="T열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=35; $i<=50; $i++) { // 16 ?>
                            <?php
                            if ($i == 36 || $i == 37 || $i == 38 || $i == 39 || $i == 40 || $i == 45 || $i == 49 || $i == 50) {
                                $choosable_T = 'N';
                            } else {
                                $choosable_T = 'N';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_T; ?>" data-seat-number="<?php echo $i; ?>" title="T열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="S" style="top:0; left:140px;">
                    <div class="seat_row_items" style="flex-direction:column-reverse;">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <?php
                            if ($i == 1 || $i == 2 || $i == 3 || $i == 4 || $i == 5 || $i == 6 || $i == 7 || $i == 8 || $i == 12 || $i == 13) {
                                $choosable_S = 'N';
                            } else {
                                $choosable_S = 'N';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_S; ?>" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=34; $i++) { // 18 ?>
                            <?php
                            if ($i == 17 || $i == 18 || $i == 21 || $i == 22 || $i == 29 || $i == 30 || $i == 31 || $i == 32) {
                                $choosable_S = 'N';
                            } else {
                                $choosable_S = 'N';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_S; ?>" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=35; $i<=50; $i++) { // 16 ?>
                            <?php
                            if ($i == 35 || $i == 36 || $i == 37 || $i == 38 || $i == 39 || $i == 40 || $i == 41 || $i == 42 || $i == 43 || $i == 44 || $i == 45 || $i == 46) {
                                $choosable_S = 'N';
                            } else {
                                $choosable_S = 'N';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_S; ?>" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="R" style="top:0; left:160px;">
                    <div class="seat_row_items" style="flex-direction:column-reverse;">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <?php
                            if ($i == 1 || $i == 5 || $i == 9 || $i == 10 || $i == 11 || $i == 14) {
                                $choosable_R = 'N';
                            } else {
                                $choosable_R = 'N';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_R; ?>" data-seat-number="<?php echo $i; ?>" title="R열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=34; $i++) { // 18 ?>
                            <?php
                            if ($i == 21 || $i == 24 || $i == 25 || $i == 26 || $i == 27 || $i == 28 || $i == 32) {
                                $choosable_R = 'N';
                            } else {
                                $choosable_R = 'N';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_R; ?>" data-seat-number="<?php echo $i; ?>" title="R열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=35; $i<=50; $i++) { // 16 ?>
                            <?php
                            if ($i == 37 || $i == 38 || $i == 39 || $i == 42 || $i == 45 || $i == 48 || $i == 49 || $i == 50) {
                                $choosable_R = 'N';
                            } else {
                                $choosable_R = 'N';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_R; ?>" data-seat-number="<?php echo $i; ?>" title="R열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="Q" style="top:0; left:180px;">
                    <div class="seat_row_items" style="flex-direction:column-reverse;">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <?php
                            if ($i == 1 || $i == 2 || $i == 3 || $i == 4 || $i == 5 || $i == 6 || $i == 7 || $i == 8 || $i == 9 || $i == 10 || $i == 11 || $i == 12) {
                                $choosable_Q = 'N';
                            } else {
                                $choosable_Q = 'N';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_Q; ?>" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=34; $i++) { // 18 ?>
                            <?php
                            if ($i == 25 || $i == 26 || $i == 29 || $i == 30 || $i == 31 || $i == 32 || $i == 33 || $i == 34) {
                                $choosable_Q = 'N';
                            } else {
                                $choosable_Q = 'N';
                            }
                            ?>
                            <div class="seat_row_item" data-choosable="<?php echo $choosable_Q; ?>" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=35; $i<=50; $i++) { // 16 ?>
                            <?php
                            if ($i == 35 || $i == 36 || $i == 41 || $i == 44 || $i == 47 || $i == 48) {
                                $choosable_Q = 'N';
                            } else {
                                $choosable_Q = 'N';
                            }
                            ?>
                            <div class="seat_row_item" data-choosable="<?php echo $choosable_Q; ?>" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="P" style="top:0; left:200px;">
                    <div class="seat_row_items" style="flex-direction:column-reverse;">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <?php
                            if ($i == 5 || $i == 6 || $i == 7 || $i == 8 || $i == 9 || $i == 12 || $i == 13 || $i == 14 || $i == 15 || $i == 16) {
                                $choosable_P = 'N';
                            } else {
                                $choosable_P = 'Y';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_P; ?>" data-seat-number="<?php echo $i; ?>" title="P열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=34; $i++) { // 18 ?>
                            <?php
                            if ($i == 17 || $i == 18 || $i == 23 || $i == 24 || $i == 33) {
                                $choosable_P = 'N';
                            } else {
                                $choosable_P = 'Y';
                            }
                            ?>
                            <div class="seat_row_item" data-choosable="<?php echo $choosable_P; ?>" data-seat-number="<?php echo $i; ?>" title="P열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=35; $i<=50; $i++) { // 16 ?>
                            <?php
                            if ($i == 37 || $i == 38 || $i == 39 || $i == 40 || $i == 44 || $i == 45 || $i == 46) {
                                $choosable_P = 'N';
                            } else {
                                $choosable_P = 'Y';
                            }
                            ?>
                            <div class="seat_row_item" data-choosable="<?php echo $choosable_P; ?>" data-seat-number="<?php echo $i; ?>" title="P열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="O" style="top:0; left:220px;">
                    <div class="seat_row_items" style="flex-direction:column-reverse;">
                        <?php for($i=1; $i<=2; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=3; $i<=6; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=7; $i<=10; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=11; $i<=16; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=34; $i++) { // 18 ?>
                            <?php
                            if ($i == 20 || $i == 21 || $i == 22 || $i == 23 || $i == 24) {
                                $choosable_O = 'N';
                            } else {
                                $choosable_O = 'Y';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_O; ?>" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=35; $i<=37; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=38; $i<=39; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=40; $i<=40; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=41; $i<=42; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=43; $i<=46; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=47; $i<=50; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="N" style="top:0; left:240px;">
                    <div class="seat_row_items" style="flex-direction:column-reverse;">
                        <?php for($i=1; $i<=2; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="N열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=3; $i<=5; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="N열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=6; $i<=7; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="N열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=8; $i<=8; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="N열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=9; $i<=16; $i++) { // 10 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="N열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=34; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="N열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=35; $i<=49; $i++) { // 15 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="N열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=50; $i<=50; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="N열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="E" style="top:90px; left:280px;">
                    <div class="seat_row_items" style="flex-direction:column-reverse;">
                        <?php for($i=55; $i<=65; $i++) { // 11 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="E열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=66; $i<=83; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="E열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=84; $i<=94; $i++) { // 11 ?>
                            <?php
                            if ($i == 86 || $i == 87 || $i == 88 || $i == 89) {
                                $choosable_E = 'N';
                            } else {
                                $choosable_E = 'Y';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_E; ?>" data-seat-number="<?php echo $i; ?>" title="E열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="D" style="top:126px; left:300px;">
                    <div class="seat_row_items" style="flex-direction:column-reverse;">
                        <?php for($i=123; $i<=131; $i++) { // 9 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="D열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=132; $i<=138; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="D열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=139; $i<=149; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="D열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=150; $i<=158; $i++) { // 9 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="D열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="C" style="top:144px; left:320px;">
                    <div class="seat_row_items" style="flex-direction:column-reverse;">
                        <?php for($i=117; $i<=124; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="C열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=125; $i<=142; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="C열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=143; $i<=150; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="C열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="B" style="top:162px; left:340px;">
                    <div class="seat_row_items" style="flex-direction:column-reverse;">
                        <?php for($i=111; $i<=117; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=118; $i<=118; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=119; $i<=122; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=123; $i<=135; $i++) { // 13 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=136; $i<=142; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="A" style="top:180px; left:360px;">
                    <div class="seat_row_items" style="flex-direction:column-reverse;">
                        <?php for($i=99; $i<=104; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="A열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=105; $i<=122; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="A열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=123; $i<=128; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="A열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="VIP3" style="top:198px; left:400px;">
                    <div class="seat_row_items" style="flex-direction:column-reverse;">
                        <?php for($i=93; $i<=97; $i++) { // 5 ?>
                            <?php
                            if ($i == 95) {
                                $choosable_VIP3 = 'N';
                            } else {
                                $choosable_VIP3 = 'Y';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_VIP3; ?>" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=98; $i<=115; $i++) { // 18 ?>
                            <?php
                            if ($i == 100 || $i == 101 || $i == 107 || $i == 108 || $i == 109 || $i == 110 || $i == 111) {
                                $choosable_VIP3 = 'N';
                            } else {
                                $choosable_VIP3 = 'Y';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_VIP3; ?>" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=116; $i<=120; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="VIP2" style="top:216px; left:420px;">
                    <div class="seat_row_items" style="flex-direction:column-reverse;">
                        <?php for($i=81; $i<=84; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=85; $i<=102; $i++) { // 18 ?>
                            <?php
                            if ($i == 98 || $i == 99 || $i == 100 || $i == 101 || $i == 102) {
                                $choosable_VIP2 = 'N';
                            } else {
                                $choosable_VIP2 = 'Y';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_VIP2; ?>" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=103; $i<=106; $i++) { // 4 ?>
                            <?php
                            if ($i == 105) {
                                $choosable_VIP2 = 'N';
                            } else {
                                $choosable_VIP2 = 'Y';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_VIP2; ?>" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="VIP1" style="top:234px; left:440px;">
                    <div class="seat_row_items" style="flex-direction:column-reverse;">
                        <?php for($i=75; $i<=77; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=78; $i<=81; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=82; $i<=83; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=84; $i<=91; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=92; $i<=95; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=96; $i<=97; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=98; $i<=98; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="VVIP" style="top:306px; left:460px;">
                    <div class="seat_row_items" style="flex-direction:column-reverse;">
                        <?php for($i=51; $i<=68; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- 1 -->
                <div class="seat_rows_groups vertical" style="top:10px; left:360px; transform:rotateZ(-45deg);">
                    <div class="seat_rows_group">
                        <div class="seat_rows" data-row-type="F">
                            <div class="seat_row_items horizon">
                                <?php for($i=19; $i<=24; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="F열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="E">
                            <div class="seat_row_items horizon">
                                <?php for($i=95; $i<=100; $i++) { // 6 ?>
                                    <?php
                                    if ($i == 99 || $i == 100) {
                                        $choosable_E = 'N';
                                    } else {
                                        $choosable_E = 'Y';
                                    }
                                    ?>

                                    <div class="seat_row_item" data-choosable="<?php echo $choosable_E; ?>" data-seat-number="<?php echo $i; ?>" title="E열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="D">
                            <div class="seat_row_items horizon">
                                <?php for($i=159; $i<=164; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="D열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="C">
                            <div class="seat_row_items horizon">
                                <?php for($i=151; $i<=156; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="C열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="B">
                            <div class="seat_row_items horizon">
                                <?php for($i=143; $i<=148; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="A">
                            <div class="seat_row_items horizon">
                                <?php for($i=129; $i<=132; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="A열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="VIP3" style="margin-top:20px;">
                            <div class="seat_row_items horizon">
                                <?php for($i=121; $i<=124; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="VIP2">
                            <div class="seat_row_items horizon">
                                <?php for($i=107; $i<=108; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="VIP1">
                            <div class="seat_row_items horizon">
                                <?php for($i=99; $i<=100; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="D" style="top:0; left:420px;">
                    <div class="seat_row_items horizon">
                        <?php for($i=1; $i<=9; $i++) { // 9 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="D열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=10; $i<=27; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="D열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=28; $i<=36; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="D열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="C" style="top:20px; left:438px;">
                    <div class="seat_row_items horizon">
                        <?php for($i=1; $i<=8; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="C열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=9; $i<=26; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="C열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=27; $i<=34; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="C열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="B" style="top:40px; left:456px;">
                    <div class="seat_row_items horizon">
                        <?php for($i=1; $i<=7; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=8; $i<=25; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=26; $i<=32; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="A" style="top:60px; left:474px;">
                    <div class="seat_row_items horizon">
                        <?php for($i=1; $i<=6; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="A열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=7; $i<=24; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="A열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=25; $i<=30; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="A열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="VIP3" style="top:100px; left:492px;">
                    <div class="seat_row_items horizon">
                        <?php for($i=1; $i<=5; $i++) { // 5 ?>
                            <?php
                            if ($i == 3 || $i == 4) {
                                $choosable_VIP3 = 'N';
                            } else {
                                $choosable_VIP3 = 'Y';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_VIP3; ?>" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=6; $i<=23; $i++) { // 18 ?>
                            <?php
                            if ($i == 15 || $i == 16 || $i == 17 || $i == 18 || $i == 19 || $i == 20) {
                                $choosable_VIP3 = 'N';
                            } else {
                                $choosable_VIP3 = 'Y';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_VIP3; ?>" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=24; $i<=28; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="VIP2" style="top:120px; left:510px;">
                    <div class="seat_row_items horizon">
                        <?php for($i=1; $i<=4; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=5; $i<=22; $i++) { // 18 ?>
                            <?php
                            if ($i == 8 || $i == 9 || $i == 10 || $i == 11 || $i == 16 || $i == 17 || $i == 18 || $i == 22) {
                                $choosable_VIP2 = 'N';
                            } else {
                                $choosable_VIP2 = 'Y';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_VIP2; ?>" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=23; $i<=26; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="VIP1" style="top:140px; left:528px;">
                    <div class="seat_row_items horizon">
                        <?php for($i=1; $i<=2; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=3; $i<=3; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=4; $i<=21; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=22; $i<=23; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=24; $i<=24; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="VVIP" style="top:160px; left:600px;">
                    <div class="seat_row_items horizon">
                        <?php for($i=1; $i<=18; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VVIP열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- 4 -->
                <div class="seat_rows_groups vertical" style="top:720px; left:360px; transform:rotateZ(-135deg);">
                    <div class="seat_rows_group">
                        <div class="seat_rows" data-row-type="F">
                            <div class="seat_row_items horizon">
                                <?php for($i=13; $i<=18; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="F열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="E">
                            <div class="seat_row_items horizon">
                                <?php for($i=49; $i<=54; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="E열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="D">
                            <div class="seat_row_items horizon">
                                <?php for($i=117; $i<=122; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="D열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="C">
                            <div class="seat_row_items horizon">
                                <?php for($i=111; $i<=116; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="C열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="B">
                            <div class="seat_row_items horizon">
                                <?php for($i=105; $i<=110; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="A">
                            <div class="seat_row_items horizon">
                                <?php for($i=95; $i<=98; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="A열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="VIP3" style="margin-top:20px;">
                            <div class="seat_row_items horizon">
                                <?php for($i=89; $i<=92; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="VIP2">
                            <div class="seat_row_items horizon">
                                <?php for($i=79; $i<=80; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="VIP1">
                            <div class="seat_row_items horizon">
                                <?php for($i=73; $i<=74; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="E" style="top:90px; right:200px;">
                    <div class="seat_row_items">
                        <?php for($i=7; $i<=17; $i++) { // 11 ?>
                            <?php
                            if ($i == 12 || $i == 13 || $i == 14 || $i == 15 || $i == 16) {
                                $choosable_E = 'N';
                            } else {
                                $choosable_E = 'Y';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_E; ?>" data-seat-number="<?php echo $i; ?>" title="E열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=18; $i<=24; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="E열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=25; $i<=31; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="E열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=32; $i<=42; $i++) { // 11 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="E열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="D" style="top:126px; right:220px;">
                    <div class="seat_row_items">
                        <?php for($i=43; $i<=51; $i++) { // 9 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="D열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=52; $i<=58; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="D열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=59; $i<=65; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="D열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=66; $i<=74; $i++) { // 9 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="D열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="C" style="top:144px; right:240px;">
                    <div class="seat_row_items">
                        <?php for($i=41; $i<=48; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="C열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=49; $i<=55; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="C열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=56; $i<=62; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="C열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=63; $i<=70; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="C열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="B" style="top:162px; right:260px;">
                    <div class="seat_row_items">
                        <?php for($i=39; $i<=45; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=46; $i<=52; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=53; $i<=59; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=60; $i<=66; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="A" style="top:180px; right:280px;">
                    <div class="seat_row_items">
                        <?php for($i=35; $i<=40; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="A열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=41; $i<=47; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="A열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=48; $i<=54; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="A열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=55; $i<=60; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="A열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="VIP3" style="top:198px; right:320px;">
                    <div class="seat_row_items">
                        <?php for($i=33; $i<=37; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=38; $i<=43; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=44; $i<=44; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=45; $i<=51; $i++) { // 7 ?>
                            <?php
                            if ($i == 46) {
                                $choosable_VIP3 = 'N';
                            } else {
                                $choosable_VIP3 = 'Y';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_VIP3; ?>" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=52; $i<=56; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="VIP2" style="top:216px; right:340px;">
                    <div class="seat_row_items">
                        <?php for($i=29; $i<=32; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=33; $i<=34; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=35; $i<=38; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=39; $i<=39; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=40; $i<=40; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=41; $i<=46; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=47; $i<=50; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="VIP1" style="top:234px; right:360px;">
                    <div class="seat_row_items">
                        <?php for($i=27; $i<=29; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=30; $i<=36; $i++) { // 7 ?>
                            <?php
                            if ($i == 30 || $i == 31 || $i == 32) {
                                $choosable_VIP1 = 'N';
                            } else {
                                $choosable_VIP1 = 'Y';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_VIP1; ?>" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=37; $i<=43; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=44; $i<=46; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="VVIP" style="top:306px; right:380px;">
                    <div class="seat_row_items">
                        <?php for($i=19; $i<=25; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=26; $i<=32; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="M" style="top:0; right:40px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <?php
                            if ($i == 1 || $i == 2 || $i == 3 || $i == 4 || $i == 5 || $i == 6 || $i == 7 || $i == 8 || $i == 9) {
                                $choosable_M = 'N';
                            } else {
                                $choosable_M = 'N';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_M; ?>" data-seat-number="<?php echo $i; ?>" title="M열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=23; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="M열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=24; $i<=26; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="M열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=27; $i<=30; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="M열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=31; $i<=43; $i++) { // 13 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="M열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="L" style="top:0; right:60px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <?php
                            if ($i == 1 || $i == 2 || $i == 3 || $i == 4 || $i == 6 || $i == 7 || $i == 8 || $i == 9 || $i == 12 || $i == 13) {
                                $choosable_L = 'N';
                            } else {
                                $choosable_L = 'N';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_L; ?>" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=23; $i++) { // 7 ?>
                            <?php
                            if ($i == 21 || $i == 22) {
                                $choosable_L = 'N';
                            } else {
                                $choosable_L = 'Y';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_L; ?>" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=24; $i<=25; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=26; $i<=30; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=31; $i<=43; $i++) { // 13 ?>
                            <?php
                            if ($i == 33 || $i == 34 || $i == 35 || $i == 36 || $i == 37 || $i == 38 || $i == 39) {
                                $choosable_L = 'N';
                            } else {
                                $choosable_L = 'N';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_L; ?>" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="K" style="top:0; right:80px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <?php
                            if ($i == 9 || $i == 10) {
                                $choosable_K = 'N';
                            } else {
                                $choosable_K = 'N';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_K; ?>" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=23; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=24; $i<=30; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=31; $i<=43; $i++) { // 13 ?>
                            <?php
                            if ($i == 38 || $i == 39 || $i == 40) {
                                $choosable_K = 'N';
                            } else {
                                $choosable_K = 'N';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_K; ?>" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="J" style="top:0; right:100px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <?php
                            if ($i == 5 || $i == 6 || $i == 7 || $i == 8 || $i == 9 || $i == 10 || $i == 11 || $i == 12 || $i == 13 || $i == 14) {
                                $choosable_J = 'N';
                            } else {
                                $choosable_J = 'N';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_J; ?>" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=23; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=24; $i<=30; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=31; $i<=43; $i++) { // 13 ?>
                            <?php
                            if ($i == 31 || $i == 32 || $i == 33 || $i == 34 || $i == 35 || $i == 36 || $i == 37) {
                                $choosable_J = 'N';
                            } else {
                                $choosable_J = 'N';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_J; ?>" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="I" style="top:0; right:120px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <?php
                            if ($i == 1 || $i == 2 || $i == 4 || $i == 5 || $i == 6 || $i == 7 || $i == 8 || $i == 12 || $i == 13) {
                                $choosable_I = 'N';
                            } else {
                                $choosable_I = 'N';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_I; ?>" data-seat-number="<?php echo $i; ?>" title="I열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=23; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="I열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=24; $i<=30; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="I열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=31; $i<=43; $i++) { // 13 ?>
                            <?php
                            if ($i == 36 || $i == 37 || $i == 38) {
                                $choosable_I = 'N';
                            } else {
                                $choosable_I = 'N';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_I; ?>" data-seat-number="<?php echo $i; ?>" title="I열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="H" style="top:0; right:140px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <?php
                            if ($i == 1 || $i == 2 || $i == 3 || $i == 4 || $i == 5 || $i == 6 || $i == 7 || $i == 8 || $i == 9 || $i == 10 || $i == 11 || $i == 12 || $i == 13 || $i == 14) {
                                $choosable_H = 'N';
                            } else {
                                $choosable_H = 'Y';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_H; ?>" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=23; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=24; $i<=30; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=31; $i<=43; $i++) { // 13 ?>
                            <?php
                            if ($i == 38 || $i == 39 || $i == 40 || $i == 41 || $i == 42 || $i == 43) {
                                $choosable_H = 'N';
                            } else {
                                $choosable_H = 'N';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_H; ?>" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <div class="seat_rows" data-row-type="G" style="top:0; right:160px;">
                    <div class="seat_row_items">
                        <?php for($i=1; $i<=16; $i++) { // 16 ?>
                            <?php
                            if ($i == 1 || $i == 2 || $i == 3 || $i == 4 || $i == 5 || $i == 6 || $i == 7 || $i == 8 || $i == 9 || $i == 10 || $i == 11 || $i == 12 || $i == 13) {
                                $choosable_G = 'N';
                            } else {
                                $choosable_G = 'N';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_G; ?>" data-seat-number="<?php echo $i; ?>" title="G열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=17; $i<=23; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="G열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>
                        <div class="seat_row_item bland"></div>

                        <?php for($i=24; $i<=30; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="G열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=31; $i<=43; $i++) { // 13 ?>
                            <?php
                            if ($i == 35 || $i == 36 || $i == 37 || $i == 38 || $i == 39 || $i == 40 || $i == 41 || $i == 42 || $i == 43) {
                                $choosable_G = 'N';
                            } else {
                                $choosable_G = 'Y';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_G; ?>" data-seat-number="<?php echo $i; ?>" title="G열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <!-- 3 -->
                <div class="seat_rows_groups vertical" style="top:0; right:270px; transform:rotateZ(45deg);">
                    <div class="seat_rows_group">
                        <div class="seat_rows" data-row-type="F">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=6; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="F열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="E">
                            <div class="seat_row_items horizon">
                                <?php for($i=1; $i<=6; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="E열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="D">
                            <div class="seat_row_items horizon">
                                <?php for($i=37; $i<=42; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="D열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="C">
                            <div class="seat_row_items horizon">
                                <?php for($i=35; $i<=40; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="C열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="B">
                            <div class="seat_row_items horizon">
                                <?php for($i=33; $i<=38; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="A">
                            <div class="seat_row_items horizon">
                                <?php for($i=31; $i<=34; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="A열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="VIP3" style="margin-top:20px;">
                            <div class="seat_row_items horizon">
                                <?php for($i=29; $i<=32; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="VIP2">
                            <div class="seat_row_items horizon">
                                <?php for($i=27; $i<=28; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="VIP1">
                            <div class="seat_row_items horizon">
                                <?php for($i=25; $i<=26; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="seat_rows" data-row-type="VVIP" style="bottom:160px; left:600px;">
                    <div class="seat_row_items horizon" style="flex-direction:row-reverse;">
                        <?php for($i=33; $i<=34; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=35; $i<=40; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VVIP열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=41; $i<=42; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=43; $i<=50; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="VIP1" style="bottom:140px; left:528px;">
                    <div class="seat_row_items horizon" style="flex-direction:row-reverse;">
                        <?php for($i=49; $i<=51; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=52; $i<=69; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=70; $i<=72; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="VIP2" style="bottom:120px; left:510px;">
                    <div class="seat_row_items horizon" style="flex-direction:row-reverse;">
                        <?php for($i=53; $i<=56; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=57; $i<=74; $i++) { // 18 ?>
                            <?php
                            if ($i == 64 || $i == 65) {
                                $choosable_VIP2 = 'N';
                            } else {
                                $choosable_VIP2 = 'Y';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_VIP2; ?>" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=75; $i<=78; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="VIP3" style="bottom:100px; left:492px;">
                    <div class="seat_row_items horizon" style="flex-direction:row-reverse;">
                        <?php for($i=61; $i<=65; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=66; $i<=83; $i++) { // 18 ?>
                            <?php
                            if ($i == 75 || $i == 76 || $i == 77 || $i == 78 || $i == 79 || $i == 80 || $i == 81) {
                                $choosable_VIP3 = 'N';
                            } else {
                                $choosable_VIP3 = 'Y';
                            }
                            ?>

                            <div class="seat_row_item" data-choosable="<?php echo $choosable_VIP3; ?>" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=84; $i<=88; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="A" style="bottom:60px; left:474px;">
                    <div class="seat_row_items horizon" style="flex-direction:row-reverse;">
                        <?php for($i=65; $i<=70; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="A열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=71; $i<=88; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="A열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=89; $i<=94; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="A열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="B" style="bottom:40px; left:456px;">
                    <div class="seat_row_items horizon" style="flex-direction:row-reverse;">
                        <?php for($i=73; $i<=79; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=80; $i<=97; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=98; $i<=104; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="C" style="bottom:20px; left:438px;">
                    <div class="seat_row_items horizon" style="flex-direction:row-reverse;">
                        <?php for($i=77; $i<=84; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="C열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=85; $i<=102; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="C열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=103; $i<=110; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="C열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <div class="seat_rows" data-row-type="D" style="bottom:0; left:420px;">
                    <div class="seat_row_items horizon" style="flex-direction:row-reverse;">
                        <?php for($i=81; $i<=89; $i++) { // 9 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="D열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=90; $i<=107; $i++) { // 18 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="D열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <div class="seat_row_item bland"></div>

                        <?php for($i=108; $i<=116; $i++) { // 9 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="D열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- 4 -->
                <div class="seat_rows_groups vertical" style="top:720px; right:270px; transform:rotateZ(135deg);">
                    <div class="seat_rows_group">
                        <div class="seat_rows" data-row-type="F">
                            <div class="seat_row_items horizon">
                                <?php for($i=7; $i<=12; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="F열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="E">
                            <div class="seat_row_items horizon">
                                <?php for($i=43; $i<=48; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="E열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="D">
                            <div class="seat_row_items horizon">
                                <?php for($i=75; $i<=80; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="D열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="C">
                            <div class="seat_row_items horizon">
                                <?php for($i=71; $i<=76; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="C열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="B">
                            <div class="seat_row_items horizon">
                                <?php for($i=67; $i<=72; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="A">
                            <div class="seat_row_items horizon">
                                <?php for($i=61; $i<=64; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="A열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="VIP3" style="margin-top:30px;">
                            <div class="seat_row_items horizon">
                                <?php for($i=57; $i<=60; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="VIP2">
                            <div class="seat_row_items horizon">
                                <?php for($i=51; $i<=52; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>

                        <div class="seat_rows" data-row-type="VIP1">
                            <div class="seat_row_items horizon">
                                <?php for($i=47; $i<=48; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
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
    function number_format(number, decimals, dec_point, thousands_sep) {
        //  discuss at: http://phpjs.org/functions/number_format/
        // original by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
        // improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
        // improved by: davook
        // improved by: Brett Zamir (http://brett-zamir.me)
        // improved by: Brett Zamir (http://brett-zamir.me)
        // improved by: Theriault
        // improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
        // bugfixed by: Michael White (http://getsprink.com)
        // bugfixed by: Benjamin Lupton
        // bugfixed by: Allan Jensen (http://www.winternet.no)
        // bugfixed by: Howard Yeend
        // bugfixed by: Diogo Resende
        // bugfixed by: Rival
        // bugfixed by: Brett Zamir (http://brett-zamir.me)
        //  revised by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
        //  revised by: Luke Smith (http://lucassmith.name)
        //    input by: Kheang Hok Chin (http://www.distantia.ca/)
        //    input by: Jay Klehr
        //    input by: Amir Habibi (http://www.residence-mixte.com/)
        //    input by: Amirouche
        //   example 1: number_format(1234.56);
        //   returns 1: '1,235'
        //   example 2: number_format(1234.56, 2, ',', ' ');
        //   returns 2: '1 234,56'
        //   example 3: number_format(1234.5678, 2, '.', '');
        //   returns 3: '1234.57'
        //   example 4: number_format(67, 2, ',', '.');
        //   returns 4: '67,00'
        //   example 5: number_format(1000);
        //   returns 5: '1,000'
        //   example 6: number_format(67.311, 2);
        //   returns 6: '67.31'
        //   example 7: number_format(1000.55, 1);
        //   returns 7: '1,000.6'
        //   example 8: number_format(67000, 5, ',', '.');
        //   returns 8: '67.000,00000'
        //   example 9: number_format(0.9, 0);
        //   returns 9: '1'
        //  example 10: number_format('1.20', 2);
        //  returns 10: '1.20'
        //  example 11: number_format('1.20', 4);
        //  returns 11: '1.2000'
        //  example 12: number_format('1.2000', 3);
        //  returns 12: '1.200'
        //  example 13: number_format('1 000,50', 2, '.', ' ');
        //  returns 13: '100 050.00'
        //  example 14: number_format(1e-8, 8, '.', '');
        //  returns 14: '0.00000001'
        number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
        var n = !isFinite(+number) ? 0 : +number;
        var prec = !isFinite(+decimals) ? 0 : Math.abs(decimals);
        var sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep;
        var dec = (typeof dec_point === 'undefined') ? '.' : dec_point, s = '', toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec);
            return '' + (Math.round(n * k) / k).toFixed(prec);
        };

        // Fix for IE parseFloat(0.55).toFixed(0) = 0;
        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
        if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
        }
        if ((s[1] || '').length < prec) {
            s[1] = s[1] || '';
            s[1] += new Array(prec - s[1].length + 1).join('0');
        }
        return s.join(dec);
    }

    (function ($) {
        var ajax_url = g5_theme_shop_url || g5_shop_url;

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

        if ($('#it_option_1').length) {
            $('#it_option_1 option').each(function() {
                var obj = $(this);
                var objValue = obj.val();

                if (objValue) {
                    if (objValue.indexOf('일반,70000') !== -1)
                    {
                        obj.attr('data-seat', 'NORMAL');
                    }
                    else if (objValue.indexOf('VIP,200000') !== -1)
                    {
                        obj.attr('data-seat', 'VIP');
                    }
                    else if (objValue.indexOf('VVIP,300000') !== -1)
                    {
                        obj.attr('data-seat', 'VVIP');
                    }
                }
            });
        }

        $(document).on('click', '.seat_row_item', function(e) {
            e.preventDefault();

            var obj = $(this);
            var selected = obj.attr('data-selected');
            var choosable = obj.attr('data-choosable');

            if (choosable === 'Y') {
                if (selected !== 'Y') {
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

                // 좌석 선택 시 해당 좌석의 주문확인
                $.ajax({
                    url: ajax_url + "/ajax.action.php",
                    type: "POST",
                    data: {
                        "action":"get_purchase_seat_order_search",
                        "od_seat_row_type": rowType,
                        "od_seat_number": setNumber
                    },
                    dataType: "text",
                    async: true,
                    cache: false,
                    success: function(data, textStatus) {
                        if (data === 'Y')
                        {
                            alert('이미 결제가 완료된 좌석입니다.');
                            location.reload();
                            return false;
                        }
                        else
                        {
                            var optionSelectObj = $('#it_option_1');
                            var selectedOptionObj = '';

                            if (rowType === 'VVIP')
                            {
                                selectedOptionObj = optionSelectObj.find('option[data-seat="VVIP"]').prop('selected', true);
                            }
                            else if (rowType === 'VIP1' || rowType === 'VIP2' || rowType === 'VIP3')
                            {
                                selectedOptionObj = optionSelectObj.find('option[data-seat="VIP"]').prop('selected', true);
                            }
                            else
                            {
                                selectedOptionObj = optionSelectObj.find('option[data-seat="NORMAL"]').prop('selected', true);
                            }

                            var it_id = $('input[name="it_id[]"]').val();
                            var optionResultObj = $('#sit_sel_option');
                            var optionValue = selectedOptionObj.val();
                            var optionValue_split = optionValue.split(',');

                            //console.log(optionValue_split);

                            var optionResultHtml = ''+
                                '<ul id="sit_opt_added">'+
                                '   <li class="sit_opt_list">'+
                                '       <input type="hidden" name="io_type[' + it_id + '][]" value="0">'+
                                '       <input type="hidden" name="io_id[' + it_id + '][]" value="' + optionValue_split[0] + '">'+
                                '       <input type="hidden" name="io_value[' + it_id + '][]" value="좌석:' + optionValue_split[0] + '">'+
                                '       <input type="hidden" class="io_price" value="' + optionValue_split[1] + '">'+
                                '       <input type="hidden" class="io_stock" value="' + optionValue_split[2] + '">'+
                                '       <div class="opt_name"><span class="sit_opt_subj">좌석:' + optionValue_split[0] + ' (' + rowType + ' 열 ' + setNumber + ')</span></div>'+
                                '       <div class="opt_count">'+
                                '           <input type="hidden" name="ct_qty[' + it_id + '][]" value="1" class="num_input" size="5">'+
                                '           <span class="sit_opt_prc">+' + number_format(optionValue_split[1]) + '원</span>'+
                                '           <button type="button" class="sit_opt_del"><i class="fa fa-times" aria-hidden="true"></i><span class="sound_only">삭제</span></button>'+
                                '       </div>'+
                                '   </li>'+
                                '</ul>'+
                                '';

                            //console.log(optionResultHtml);
                            optionResultObj.html(optionResultHtml);

                            $('#sit_tot_price').text(number_format(optionValue_split[1]));

                            /*
                            <ul id="sit_opt_added">
                                <li class="sit_opt_list">
                                    <input type="hidden" name="io_type[1664545281][]" value="0">
                                    <input type="hidden" name="io_id[1664545281][]" value="VIP">
                                    <input type="hidden" name="io_value[1664545281][]" value="좌석:VIP">
                                    <input type="hidden" class="io_price" value="200000">
                                    <input type="hidden" class="io_stock" value="9999">
                                    <div class="opt_name"><span class="sit_opt_subj">좌석:VIP</span></div>
                                    <div class="opt_count">
                                        <button type="button" class="sit_qty_minus"><i class="fa fa-minus" aria-hidden="true"></i><span class="sound_only">감소</span></button>
                                        <input type="text" name="ct_qty[1664545281][]" value="1" class="num_input" size="5">
                                        <button type="button" class="sit_qty_plus"><i class="fa fa-plus" aria-hidden="true"></i><span class="sound_only">증가</span></button>
                                        <span class="sit_opt_prc">+200,000원</span>
                                        <button type="button" class="sit_opt_del"><i class="fa fa-times" aria-hidden="true"></i><span class="sound_only">삭제</span></button>
                                    </div>
                                </li>
                            </ul>
                            */

                            alert('좌석이 선택되었습니다.');

                            $('.seat_choise_result').html(rowType + ' 열 ' + setNumber);

                            $('.seat_choice_popup').fadeOut(300);
                        }
                    },
                    error : function(request, status, error){
                        alert("false ajax :"+request.responseText);
                    }
                });
            }
        });

        <?php if ($it['it_seat'] === 'Y') { ?>
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
        <?php } ?>
    })(jQuery);
</script>
<?php } ?>

<?php
include_once(G5_THEME_PATH.'/tail.sub.php');