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

    .movieLayoutContainer {position:relative; display:block; width:1080px; max-width:1080px; height:940px; min-height:940px; margin:0; padding:0;}
    .cage_img_1 {position:absolute; top:255px; left:550px; display:block; width:auto; max-width:430px; height:auto; margin:0; padding:0; z-index:11;}
    .cage_img_2 {position:absolute; top:441px; right:1px; display:block; width:auto; max-width:460px; height:auto; margin:0; padding:0; z-index:11;}
    .cage_img_3 {position:absolute; top:378px; left:245px; display:block; width:300px; max-width:460px; height:auto; margin:0; padding:0; z-index:11;}
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
                <!--
                <img class="cage_img_1" src="<?php echo G5_THEME_IMG_URL; ?>/product/cage_img_1.png" />

                <img class="cage_img_2" src="<?php echo G5_THEME_IMG_URL; ?>/product/cage_img_2.png" />
                -->

                <img class="cage_img_3" src="<?php echo G5_THEME_IMG_URL; ?>/product/cage_img_3.png" />

                <!-- A -->
                <div class="seat_rows" data-row-type="A" style="top:0px; left:0px; align-items:flex-end; row-gap:2px; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=28; $i<=33; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="A열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=22; $i<=27; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="A열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=16; $i<=21; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="A열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=11; $i<=15; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="A열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=7; $i<=10; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="A열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=4; $i<=6; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="A열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=2; $i<=3; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="A열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=1; $i<=1; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="A열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- B -->
                <div class="seat_rows_groups vertical" style="top:90px; left:50px; transform:rotateZ(-45deg); z-index:2;">
                    <div class="seat_rows_group">
                        <div class="seat_rows" data-row-type="B" style="top:0px; left:0px; align-items:center; row-gap:2px;">
                            <div class="seat_row_items" style="flex-direction:row;">
                                <div class="seat_row_item bland"></div>
                                <div class="seat_row_item bland"></div>
                                <div class="seat_row_item bland"></div>

                                <?php for($i=42; $i<=42; $i++) { // 1 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>

                            <div class="seat_row_items" style="flex-direction:row;">
                                <div class="seat_row_item bland"></div>
                                <div class="seat_row_item bland"></div>

                                <?php for($i=40; $i<=41; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <div class="seat_row_item bland"></div>

                                <?php for($i=37; $i<=39; $i++) { // 3 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=33; $i<=34; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>

                                <?php for($i=35; $i<=36; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=29; $i<=32; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=25; $i<=26; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>

                                <?php for($i=27; $i<=28; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=21; $i<=24; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=17; $i<=20; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=13; $i<=16; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=11; $i<=12; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=9; $i<=10; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=7; $i<=8; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=5; $i<=6; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=3; $i<=4; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=1; $i<=2; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="B열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- VIP3 -->
                <div class="seat_rows" data-row-type="VIP3" style="top:310px; left:176px; align-items:flex-start; transform:rotateZ(45deg); z-index:1;">
                    <div class="seat_row_items" style="flex-direction:column-reverse; row-gap:0;">
                        <?php for($i=72; $i<=73; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP2 -->
                <div class="seat_rows" data-row-type="VIP2" style="top:323px; left:189px; align-items:flex-start; transform:rotateZ(45deg); z-index:1;">
                    <div class="seat_row_items" style="flex-direction:column-reverse; row-gap:0;">
                        <?php for($i=67; $i<=68; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP1 -->
                <div class="seat_rows" data-row-type="VIP1" style="top:335px; left:203px; align-items:flex-start; transform:rotateZ(45deg); z-index:1;">
                    <div class="seat_row_items" style="flex-direction:column-reverse; row-gap:0;">
                        <?php for($i=67; $i<=68; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- C -->
                <div class="seat_rows_groups vertical" style="top:230px; left:0px; transform:rotateZ(-90deg); z-index:1;">
                    <div class="seat_rows_group">
                        <div class="seat_rows" data-row-type="C" style="top:0px; left:0px; align-items:flex-start; row-gap:2px;">
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=36; $i<=39; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="C열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>

                                <?php for($i=40; $i<=44; $i++) { // 5 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="C열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=28; $i<=35; $i++) { // 8 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="C열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=21; $i<=27; $i++) { // 7 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="C열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=15; $i<=20; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="C열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=10; $i<=14; $i++) { // 5 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="C열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=6; $i<=9; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="C열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=3; $i<=5; $i++) { // 3 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="C열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=1; $i<=2; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="C열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- VIP3 -->
                <div class="seat_rows" data-row-type="VIP3" style="top:357px; left:145px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:column-reverse; row-gap:0;">
                        <?php for($i=71; $i<=71; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- D -->
                <div class="seat_rows_groups vertical" style="top:390px; left:10px; transform:rotateZ(-90deg); z-index:1;">
                    <div class="seat_rows_group">
                        <div class="seat_rows" data-row-type="D" style="top:0px; left:0px; align-items:flex-start; row-gap:2px;">
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=57; $i<=64; $i++) { // 8 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="D열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=49; $i<=56; $i++) { // 8 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="D열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=41; $i<=48; $i++) { // 8 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="D열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=33; $i<=40; $i++) { // 8 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="D열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=25; $i<=32; $i++) { // 8 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="D열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=17; $i<=24; $i++) { // 8 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="D열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=9; $i<=16; $i++) { // 8 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="D열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=1; $i<=8; $i++) { // 8 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="D열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- VIP3 -->
                <div class="seat_rows" data-row-type="VIP3" style="top:397px; left:147px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:column-reverse; row-gap:0;">
                        <?php for($i=63; $i<=64; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=65; $i<=65; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=66; $i<=67; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=68; $i<=70; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP2 -->
                <div class="seat_rows" data-row-type="VIP2" style="top:397px; left:165px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:column-reverse; row-gap:0;">
                        <?php for($i=59; $i<=66; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP1 -->
                <div class="seat_rows" data-row-type="VIP1" style="top:397px; left:183px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:column-reverse; row-gap:0;">
                        <?php for($i=59; $i<=66; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VVIP2 -->
                <div class="seat_rows" data-row-type="VVIP2" style="top:413px; left:201px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:column-reverse; row-gap:0;">
                        <?php for($i=50; $i<=56; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VVIP1 -->
                <div class="seat_rows" data-row-type="VVIP1" style="top:429px; left:219px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:column-reverse; row-gap:0;">
                        <?php for($i=43; $i<=45; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VVIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=46; $i<=48; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- E -->
                <div class="seat_rows_groups vertical" style="top:540px; left:10px; transform:rotateZ(-90deg); z-index:1;">
                    <div class="seat_rows_group">
                        <div class="seat_rows" data-row-type="E" style="top:0px; left:0px; align-items:flex-start; row-gap:2px;">
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=57; $i<=64; $i++) { // 8 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="E열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=49; $i<=56; $i++) { // 8 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="E열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=41; $i<=48; $i++) { // 8 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="E열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=33; $i<=40; $i++) { // 8 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="E열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=25; $i<=32; $i++) { // 8 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="E열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=17; $i<=24; $i++) { // 8 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="E열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=9; $i<=16; $i++) { // 8 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="E열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=1; $i<=8; $i++) { // 8 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="E열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- VIP3 -->
                <div class="seat_rows" data-row-type="VIP3" style="top:547px; left:147px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:column-reverse; row-gap:0;">
                        <?php for($i=55; $i<=61; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=62; $i<=62; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP2 -->
                <div class="seat_rows" data-row-type="VIP2" style="top:547px; left:165px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:column-reverse; row-gap:0;">
                        <?php for($i=51; $i<=58; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP1 -->
                <div class="seat_rows" data-row-type="VIP1" style="top:547px; left:183px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:column-reverse; row-gap:0;">
                        <?php for($i=51; $i<=58; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VVIP2 -->
                <div class="seat_rows" data-row-type="VVIP2" style="top:547px; left:201px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:column-reverse; row-gap:0;">
                        <?php for($i=43; $i<=49; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VVIP1 -->
                <div class="seat_rows" data-row-type="VVIP1" style="top:547px; left:219px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:column-reverse; row-gap:0;">
                        <?php for($i=37; $i<=37; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=38; $i<=42; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VVIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- F -->
                <div class="seat_rows_groups vertical" style="top:700px; left:0px; transform:rotateZ(-90deg); z-index:1;">
                    <div class="seat_rows_group">
                        <div class="seat_rows" data-row-type="F" style="top:0px; left:0px; align-items:flex-end; row-gap:2px;">
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=36; $i<=44; $i++) { // 9 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="F열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=28; $i<=33; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="F열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>

                                <?php for($i=34; $i<=35; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="F열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=21; $i<=27; $i++) { // 7 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="F열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=15; $i<=20; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="F열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=10; $i<=14; $i++) { // 5 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="F열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=6; $i<=9; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="F열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=3; $i<=5; $i++) { // 3 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="F열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=1; $i<=2; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="F열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- VIP3 -->
                <div class="seat_rows" data-row-type="VIP3" style="top:699px; left:145px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row; row-gap:0;">
                        <?php for($i=54; $i<=54; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- G -->
                <div class="seat_rows_groups vertical" style="top:720px; left:50px; transform:rotateZ(-135deg); z-index:2;">
                    <div class="seat_rows_group">
                        <div class="seat_rows" data-row-type="G" style="top:0px; left:0px; align-items:center; row-gap:2px;">
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <div class="seat_row_item bland"></div>
                                <div class="seat_row_item bland"></div>
                                <div class="seat_row_item bland"></div>

                                <?php for($i=40; $i<=40; $i++) { // 1 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="G열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>

                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <div class="seat_row_item bland"></div>
                                <div class="seat_row_item bland"></div>

                                <?php for($i=38; $i<=39; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="G열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <div class="seat_row_item bland"></div>

                                <?php for($i=35; $i<=37; $i++) { // 3 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="G열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=31; $i<=34; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="G열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=27; $i<=28; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="G열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>

                                <?php for($i=29; $i<=30; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="G열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=23; $i<=26; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="G열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=19; $i<=22; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="G열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=15; $i<=18; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="G열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=13; $i<=14; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="G열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=11; $i<=12; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="G열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=9; $i<=10; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="G열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=7; $i<=8; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="G열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=5; $i<=6; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="G열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=3; $i<=3; $i++) { // 1 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="G열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>

                                <?php for($i=4; $i<=4; $i++) { // 1 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="G열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=1; $i<=2; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="G열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- VIP3 -->
                <div class="seat_rows" data-row-type="VIP3" style="top:745px; left:169px; align-items:flex-start; transform:rotateZ(-135deg); z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row; row-gap:0;">
                        <?php for($i=52; $i<=53; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP2 -->
                <div class="seat_rows" data-row-type="VIP2" style="top:732px; left:183px; align-items:flex-start; transform:rotateZ(-135deg); z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row; row-gap:0;">
                        <?php for($i=49; $i<=50; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP1 -->
                <div class="seat_rows" data-row-type="VIP1" style="top:719px; left:197px; align-items:flex-start; transform:rotateZ(-135deg); z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row; row-gap:0;">
                        <?php for($i=49; $i<=50; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- H -->
                <div class="seat_rows" data-row-type="H" style="top:770px; left:0px; align-items:flex-end; row-gap:2px; z-index:0;">
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=1; $i<=2; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=3; $i<=5; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=6; $i<=9; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=10; $i<=14; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=15; $i<=20; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=21; $i<=27; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=28; $i<=35; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=36; $i<=39; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=40; $i<=44; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=45; $i<=47; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=48; $i<=49; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=50; $i<=51; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=52; $i<=52; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=53; $i<=54; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=55; $i<=63; $i++) { // 9 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=64; $i<=65; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=66; $i<=71; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=72; $i<=74; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=75; $i<=76; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=77; $i<=77; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=78; $i<=85; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=86; $i<=90; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=91; $i<=104; $i++) { // 14 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=105; $i<=119; $i++) { // 15 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=120; $i<=134; $i++) { // 15 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=135; $i<=149; $i++) { // 15 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=150; $i<=164; $i++) { // 15 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=165; $i<=179; $i++) { // 15 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="H열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP3 -->
                <div class="seat_rows" data-row-type="VIP3" style="top:752px; left:224px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row-reverse; row-gap:0;">
                        <?php for($i=51; $i<=51; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- I -->
                <div class="seat_rows" data-row-type="I" style="top:770px; left:250px; align-items:flex-end; row-gap:2px; z-index:2;">
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=1; $i<=8; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="I열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=9; $i<=16; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="I열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=17; $i<=24; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="I열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=25; $i<=32; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="I열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=33; $i<=40; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="I열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=41; $i<=48; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="I열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=49; $i<=56; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="I열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=57; $i<=64; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="I열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=65; $i<=72; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="I열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=73; $i<=80; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="I열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=81; $i<=87; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="I열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=88; $i<=88; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="I열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=89; $i<=93; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="I열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=94; $i<=94; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="I열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=95; $i<=96; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="I열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=97; $i<=97; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="I열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=98; $i<=104; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="I열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=105; $i<=105; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="I열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=106; $i<=109; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="I열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=110; $i<=112; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="I열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=113; $i<=120; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="I열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=121; $i<=128; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="I열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=129; $i<=136; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="I열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=137; $i<=144; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="I열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP3 -->
                <div class="seat_rows" data-row-type="VIP3" style="top:752px; left:250px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row-reverse; row-gap:0;">
                        <?php for($i=43; $i<=43; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=44; $i<=44; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=45; $i<=45; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=46; $i<=50; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP2 -->
                <div class="seat_rows" data-row-type="VIP2" style="top:734px; left:250px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row-reverse; row-gap:0;">
                        <?php for($i=41; $i<=48; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP1 -->
                <div class="seat_rows" data-row-type="VIP1" style="top:716px; left:250px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row-reverse; row-gap:0;">
                        <?php for($i=41; $i<=48; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VVIP2 -->
                <div class="seat_rows" data-row-type="VVIP2" style="top:698px; left:266px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row-reverse; row-gap:0;">
                        <?php for($i=36; $i<=38; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VVIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=39; $i<=39; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=40; $i<=42; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VVIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VVIP1 -->
                <div class="seat_rows" data-row-type="VVIP1" style="top:680px; left:282px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row-reverse; row-gap:0;">
                        <?php for($i=31; $i<=35; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VVIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=36; $i<=36; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- J -->
                <div class="seat_rows" data-row-type="J" style="top:770px; left:420px; align-items:flex-end; row-gap:2px; z-index:2;">
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=1; $i<=8; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=9; $i<=16; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=17; $i<=24; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=25; $i<=32; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=33; $i<=40; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=41; $i<=48; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=49; $i<=56; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=57; $i<=64; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=65; $i<=72; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=73; $i<=80; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=81; $i<=85; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=86; $i<=88; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=89; $i<=90; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=91; $i<=96; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=97; $i<=99; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=100; $i<=100; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=101; $i<=102; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=103; $i<=103; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=104; $i<=104; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=105; $i<=110; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=111; $i<=112; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=113; $i<=114; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=115; $i<=118; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=119; $i<=120; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=121; $i<=128; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=129; $i<=136; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=137; $i<=144; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="J열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP3 -->
                <div class="seat_rows" data-row-type="VIP3" style="top:752px; left:420px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row-reverse; row-gap:0;">
                        <?php for($i=35; $i<=40; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=41; $i<=42; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP2 -->
                <div class="seat_rows" data-row-type="VIP2" style="top:734px; left:420px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row-reverse; row-gap:0;">
                        <?php for($i=33; $i<=40; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP1 -->
                <div class="seat_rows" data-row-type="VIP1" style="top:716px; left:420px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row-reverse; row-gap:0;">
                        <?php for($i=33; $i<=40; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VVIP2 -->
                <div class="seat_rows" data-row-type="VVIP2" style="top:698px; left:420px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row-reverse; row-gap:0;">
                        <?php for($i=29; $i<=35; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VVIP1 -->
                <div class="seat_rows" data-row-type="VVIP1" style="top:680px; left:420px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row-reverse; row-gap:0;">
                        <?php for($i=25; $i<=30; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VVIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- K -->
                <div class="seat_rows" data-row-type="K" style="top:750px; left:560px; align-items:flex-start; row-gap:2px; z-index:3;">
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=1; $i<=1; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=2; $i<=3; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=4; $i<=6; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=7; $i<=9; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=10; $i<=12; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=13; $i<=16; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=17; $i<=20; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=21; $i<=24; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=25; $i<=29; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=30; $i<=35; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=36; $i<=40; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=41; $i<=42; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=43; $i<=45; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=46; $i<=47; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=48; $i<=49; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=50; $i<=54; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=55; $i<=55; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=56; $i<=56; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=57; $i<=58; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=59; $i<=59; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=60; $i<=61; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=62; $i<=63; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=64; $i<=66; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=67; $i<=68; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=69; $i<=70; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=71; $i<=71; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=72; $i<=76; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=77; $i<=77; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=78; $i<=84; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=85; $i<=91; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=92; $i<=98; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="K열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- L -->
                <div class="seat_rows" data-row-type="L" style="top:700px; left:630px; align-items:flex-end; z-index:2;">
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=1; $i<=9; $i++) { // 9 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=10; $i<=17; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=18; $i<=22; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=23; $i<=30; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=31; $i<=34; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=35; $i<=35; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=36; $i<=38; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=39; $i<=43; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=44; $i<=50; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=51; $i<=54; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=55; $i<=63; $i++) { // 9 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=64; $i<=72; $i++) { // 9 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=73; $i<=73; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=74; $i<=82; $i++) { // 9 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=83; $i<=87; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=88; $i<=88; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=89; $i<=90; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=91; $i<=91; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=92; $i<=100; $i++) { // 9 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=101; $i<=104; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=105; $i<=105; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=106; $i<=106; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=107; $i<=108; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=109; $i<=117; $i++) { // 10 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=118; $i<=120; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=121; $i<=121; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=122; $i<=122; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=123; $i<=123; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=124; $i<=133; $i++) { // 10 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=134; $i<=135; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=136; $i<=136; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=137; $i<=138; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=139; $i<=139; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=140; $i<=148; $i++) { // 9 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=149; $i<=149; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=150; $i<=150; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=151; $i<=151; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=152; $i<=153; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=154; $i<=162; $i++) { // 9 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=163; $i<=164; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=165; $i<=166; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=167; $i<=175; $i++) { // 9 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=176; $i<=187; $i++) { // 12 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=188; $i<=198; $i++) { // 11 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=199; $i<=208; $i++) { // 10 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=209; $i<=217; $i++) { // 9 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="L열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- M -->
                <div class="seat_rows" data-row-type="M" style="top:560px; left:665px; align-items:flex-end; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=1; $i<=20; $i++) { // 20 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="M열 <?php echo $i;?>" data-aisle="Y"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=21; $i<=40; $i++) { // 20 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="M열 <?php echo $i;?>" data-aisle="Y"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=41; $i<=52; $i++) { // 12 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="M열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=53; $i<=53; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="M열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=54; $i<=60; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="M열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=61; $i<=71; $i++) { // 11 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="M열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=72; $i<=73; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="M열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=74; $i<=80; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="M열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=81; $i<=91; $i++) { // 11 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="M열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=92; $i<=93; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="M열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=94; $i<=100; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="M열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=101; $i<=111; $i++) { // 11 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="M열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=112; $i<=112; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="M열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=113; $i<=120; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="M열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=121; $i<=131; $i++) { // 11 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="M열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=132; $i<=132; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="M열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=133; $i<=140; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="M열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=141; $i<=151; $i++) { // 11 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="M열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=152; $i<=152; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="M열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=153; $i<=160; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="M열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP4 -->
                <div class="seat_rows" data-row-type="VIP4" style="top:560px; left:647px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:column; row-gap:0;">
                        <?php for($i=9; $i<=11; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP4열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=12; $i<=12; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP4열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=13; $i<=14; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP4열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=15; $i<=15; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP4열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=16; $i<=16; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP4열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP3 -->
                <div class="seat_rows" data-row-type="VIP3" style="top:560px; left:629px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:column; row-gap:0;">
                        <?php for($i=27; $i<=34; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP2 -->
                <div class="seat_rows" data-row-type="VIP2" style="top:560px; left:611px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:column; row-gap:0;">
                        <?php for($i=25; $i<=32; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP1 -->
                <div class="seat_rows" data-row-type="VIP1" style="top:560px; left:593px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:column; row-gap:0;">
                        <?php for($i=25; $i<=32; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VVIP2 -->
                <div class="seat_rows" data-row-type="VVIP2" style="top:560px; left:575px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:column; row-gap:0;">
                        <?php for($i=22; $i<=28; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VVIP1 -->
                <div class="seat_rows" data-row-type="VVIP1" style="top:560px; left:556px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:column; row-gap:0;">
                        <?php for($i=19; $i<=24; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VVIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- N -->
                <div class="seat_rows" data-row-type="N" style="top:390px; left:665px; align-items:flex-end; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=141; $i<=150; $i++) { // 10 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="N열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=151; $i<=151; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="N열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=152; $i<=160; $i++) { // 9 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="N열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=121; $i<=130; $i++) { // 10 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="N열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=131; $i<=132; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="N열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=133; $i<=140; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="N열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=101; $i<=110; $i++) { // 10 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="N열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=111; $i<=112; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="N열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=113; $i<=120; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="N열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=81; $i<=90; $i++) { // 10 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="N열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=91; $i<=92; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="N열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=93; $i<=100; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="N열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=61; $i<=70; $i++) { // 10 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="N열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=71; $i<=72; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="N열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=73; $i<=80; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="N열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=41; $i<=60; $i++) { // 20 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="N열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=21; $i<=40; $i++) { // 20 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="N열 <?php echo $i;?>" data-aisle="Y"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row; column-gap:2px;">
                        <?php for($i=1; $i<=20; $i++) { // 20 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="N열 <?php echo $i;?>" data-aisle="Y"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP4 -->
                <div class="seat_rows" data-row-type="VIP4" style="top:390px; left:647px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:column; row-gap:0;">
                        <?php for($i=1; $i<=8; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP4열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP3 -->
                <div class="seat_rows" data-row-type="VIP3" style="top:390px; left:629px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:column; row-gap:0;">
                        <?php for($i=19; $i<=20; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=21; $i<=21; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=22; $i<=22; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=23; $i<=23; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=24; $i<=26; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP2 -->
                <div class="seat_rows" data-row-type="VIP2" style="top:390px; left:611px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:column; row-gap:0;">
                        <?php for($i=17; $i<=24; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP1 -->
                <div class="seat_rows" data-row-type="VIP1" style="top:390px; left:593px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:column; row-gap:0;">
                        <?php for($i=17; $i<=24; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VVIP2 -->
                <div class="seat_rows" data-row-type="VVIP2" style="top:406px; left:575px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:column; row-gap:0;">
                        <?php for($i=15; $i<=21; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VVIP1 -->
                <div class="seat_rows" data-row-type="VVIP1" style="top:422px; left:556px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:column; row-gap:0;">
                        <?php for($i=13; $i<=18; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VVIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- O -->
                <div class="seat_rows_groups vertical" style="top:120px; left:770px; transform:rotateZ(-90deg); z-index:2;">
                    <div class="seat_rows_group">
                        <div class="seat_rows" data-row-type="O" style="top:0px; left:0px; align-items:flex-start; row-gap:2px;">
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=1; $i<=2; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=3; $i<=5; $i++) { // 3 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=6; $i<=9; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=10; $i<=14; $i++) { // 5 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=15; $i<=20; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=21; $i<=27; $i++) { // 7 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=28; $i<=35; $i++) { // 8 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=36; $i<=43; $i++) { // 8 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=44; $i<=47; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>

                                <?php for($i=48; $i<=51; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=52; $i<=59; $i++) { // 8 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=60; $i<=62; $i++) { // 3 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>

                                <?php for($i=63; $i<=63; $i++) { // 1 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>

                                <?php for($i=64; $i<=65; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>

                                <?php for($i=66; $i<=67; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=68; $i<=70; $i++) { // 3 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>

                                <?php for($i=71; $i<=75; $i++) { // 5 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=76; $i<=77; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>

                                <?php for($i=78; $i<=80; $i++) { // 3 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>

                                <?php for($i=81; $i<=81; $i++) { // 1 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>

                                <?php for($i=82; $i<=83; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=84; $i<=89; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>

                                <?php for($i=90; $i<=91; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=92; $i<=99; $i++) { // 8 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=100; $i<=107; $i++) { // 8 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=108; $i<=115; $i++) { // 8 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=116; $i<=123; $i++) { // 8 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=124; $i<=131; $i++) { // 8 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=132; $i<=139; $i++) { // 8 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=140; $i<=147; $i++) { // 8 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="O열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- VIP3 -->
                <div class="seat_rows" data-row-type="VIP3" style="top:356px; left:628px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=18; $i<=18; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- P -->
                <div class="seat_rows_groups vertical" style="top:5px; left:800px; transform:rotateZ(-90deg); z-index:0;">
                    <div class="seat_rows_group">
                        <div class="seat_rows" data-row-type="P" style="top:0px; left:0px; align-items:flex-start; row-gap:2px;">
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=1; $i<=1; $i++) { // 1 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="P열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=2; $i<=3; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="P열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=4; $i<=6; $i++) { // 3 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="P열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=7; $i<=10; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="P열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=11; $i<=11; $i++) { // 1 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="P열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>

                                <?php for($i=12; $i<=12; $i++) { // 1 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="P열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>

                                <?php for($i=13; $i<=15; $i++) { // 3 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="P열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=16; $i<=19; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="P열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>

                                <?php for($i=20; $i<=21; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="P열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=22; $i<=28; $i++) { // 7 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="P열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=29; $i<=36; $i++) { // 8 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="P열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=37; $i<=45; $i++) { // 9 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="P열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=46; $i<=55; $i++) { // 10 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="P열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=56; $i<=66; $i++) { // 11 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="P열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=67; $i<=78; $i++) { // 12 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="P열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row;">
                                <?php for($i=79; $i<=91; $i++) { // 13 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="P열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Q -->
                <div class="seat_rows_groups vertical" style="top:-90px; left:750px; transform:rotateZ(-135deg); z-index:2;">
                    <div class="seat_rows_group">
                        <div class="seat_rows" data-row-type="Q" style="top:0px; left:0px; align-items:flex-start; row-gap:2px;">
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=1; $i<=2; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                                <div class="seat_row_item bland"></div>
                                <div class="seat_row_item bland"></div>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=3; $i<=4; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                                <div class="seat_row_item bland"></div>
                                <div class="seat_row_item bland"></div>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=5; $i<=6; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                                <div class="seat_row_item bland"></div>
                                <div class="seat_row_item bland"></div>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=7; $i<=8; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                                <div class="seat_row_item bland"></div>
                                <div class="seat_row_item bland"></div>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=9; $i<=10; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                                <div class="seat_row_item bland"></div>
                                <div class="seat_row_item bland"></div>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=11; $i<=12; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                                <div class="seat_row_item bland"></div>
                                <div class="seat_row_item bland"></div>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=13; $i<=14; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                                <div class="seat_row_item bland"></div>
                                <div class="seat_row_item bland"></div>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=15; $i<=16; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                                <div class="seat_row_item bland"></div>
                                <div class="seat_row_item bland"></div>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=17; $i<=18; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                                <div class="seat_row_item bland"></div>
                                <div class="seat_row_item bland"></div>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=19; $i<=20; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                                <div class="seat_row_item bland"></div>
                                <div class="seat_row_item bland"></div>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=21; $i<=22; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                                <div class="seat_row_item bland"></div>
                                <div class="seat_row_item bland"></div>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=23; $i<=24; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                                <div class="seat_row_item bland"></div>
                                <div class="seat_row_item bland"></div>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=25; $i<=28; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                                <div class="seat_row_item bland"></div>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=29; $i<=32; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                                <div class="seat_row_item bland"></div>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=33; $i<=33; $i++) { // 1 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>

                                <?php for($i=34; $i<=36; $i++) { // 3 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>

                                <div class="seat_row_item bland"></div>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=37; $i<=38; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>

                                <?php for($i=39; $i<=40; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>

                                <div class="seat_row_item bland"></div>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=41; $i<=42; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>

                                <?php for($i=43; $i<=44; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>

                                <div class="seat_row_item bland"></div>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=45; $i<=48; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                                <div class="seat_row_item bland"></div>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=49; $i<=52; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                                <div class="seat_row_item bland"></div>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=53; $i<=56; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                                <div class="seat_row_item bland"></div>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=57; $i<=61; $i++) { // 5 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=62; $i<=66; $i++) { // 5 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=67; $i<=70; $i++) { // 4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=71; $i<=73; $i++) { // 3 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=74; $i<=75; $i++) { // 2 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" style="flex-direction:row-reverse;">
                                <?php for($i=76; $i<=76; $i++) { // 1 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="Q열 <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- R -->
                <div class="seat_rows" data-row-type="R" style="top:0px; left:700px; align-items:flex-start; row-gap:2px; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=29; $i<=36; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="R열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=22; $i<=28; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="R열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=16; $i<=21; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="R열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=11; $i<=13; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="R열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=14; $i<=14; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="R열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=15; $i<=15; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="R열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=7; $i<=10; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="R열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=4; $i<=6; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="R열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=2; $i<=3; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="R열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=1; $i<=1; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="R열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- S -->
                <div class="seat_rows" data-row-type="S" style="top:0px; left:560px; align-items:flex-start; row-gap:2px; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=100; $i<=107; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=92; $i<=99; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=84; $i<=91; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=76; $i<=77; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=78; $i<=81; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=82; $i<=83; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=68; $i<=72; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=73; $i<=75; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=60; $i<=61; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=62; $i<=62; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=63; $i<=65; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=66; $i<=67; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=52; $i<=56; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=57; $i<=58; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=59; $i<=59; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=44; $i<=46; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=47; $i<=47; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=48; $i<=49; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=50; $i<=51; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=36; $i<=43; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=28; $i<=35; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=21; $i<=27; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=15; $i<=20; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=10; $i<=14; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=6; $i<=9; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=3; $i<=5; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=1; $i<=2; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="S열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP3 -->
                <div class="seat_rows" data-row-type="VIP3" style="top:288px; left:560px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=17; $i<=17; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- T -->
                <div class="seat_rows" data-row-type="T" style="top:0px; left:420px; align-items:flex-start; row-gap:2px; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=121; $i<=128; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="T열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=113; $i<=120; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="T열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=105; $i<=112; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="T열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=97; $i<=100; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="T열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=101; $i<=103; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="T열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=104; $i<=104; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="T열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=89; $i<=90; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="T열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=91; $i<=92; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="T열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=93; $i<=93; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="T열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=94; $i<=96; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="T열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=81; $i<=82; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="T열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=83; $i<=88; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="T열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=73; $i<=75; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="T열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=76; $i<=76; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="T열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=77; $i<=78; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="T열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=79; $i<=80; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="T열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=65; $i<=72; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="T열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=57; $i<=64; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="T열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=49; $i<=56; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="T열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=41; $i<=48; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="T열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=33; $i<=40; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="T열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=25; $i<=32; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="T열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=17; $i<=24; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="T열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=9; $i<=16; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="T열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=1; $i<=8; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="T열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP3 -->
                <div class="seat_rows" data-row-type="VIP3" style="top:288px; left:420px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=9; $i<=9; $i++) { // 1 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=10; $i<=14; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=15; $i<=16; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                    </div>
                </div>

                <!-- VIP2 -->
                <div class="seat_rows" data-row-type="VIP2" style="top:306px; left:420px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=9; $i<=16; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP1 -->
                <div class="seat_rows" data-row-type="VIP1" style="top:324px; left:420px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=9; $i<=16; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VVIP2 -->
                <div class="seat_rows" data-row-type="VVIP2" style="top:342px; left:420px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=8; $i<=14; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VVIP1 -->
                <div class="seat_rows" data-row-type="VVIP1" style="top:360px; left:420px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=7; $i<=12; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VVIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- U -->
                <div class="seat_rows" data-row-type="U" style="top:0px; left:250px; align-items:flex-start; row-gap:2px; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=121; $i<=128; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="U열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=113; $i<=120; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="U열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=105; $i<=112; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="U열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=97; $i<=101; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="U열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=102; $i<=104; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="U열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=89; $i<=90; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="U열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=91; $i<=92; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="U열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=93; $i<=96; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="U열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=81; $i<=82; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="U열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=83; $i<=84; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="U열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=85; $i<=86; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="U열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=87; $i<=88; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="U열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=73; $i<=75; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="U열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=76; $i<=80; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="U열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=65; $i<=72; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="U열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=57; $i<=64; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="U열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=49; $i<=56; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="U열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=41; $i<=48; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="U열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=33; $i<=40; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="U열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=25; $i<=32; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="U열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=17; $i<=24; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="U열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=9; $i<=16; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="U열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=1; $i<=8; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="U열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP3 -->
                <div class="seat_rows" data-row-type="VIP3" style="top:288px; left:250px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=1; $i<=2; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=3; $i<=6; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=7; $i<=8; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP3열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP2 -->
                <div class="seat_rows" data-row-type="VIP2" style="top:306px; left:250px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=1; $i<=8; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP1 -->
                <div class="seat_rows" data-row-type="VIP1" style="top:324px; left:250px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=1; $i<=5; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=6; $i<=8; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VVIP2 -->
                <div class="seat_rows" data-row-type="VVIP2" style="top:342px; left:266px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=1; $i<=7; $i++) { // 7 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP2열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VVIP1 -->
                <div class="seat_rows" data-row-type="VVIP1" style="top:360px; left:282px; align-items:flex-start; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=1; $i<=6; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VVIP1열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- V -->
                <div class="seat_rows" data-row-type="V" style="top:0px; left:110px; align-items:flex-end; row-gap:2px; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=100; $i<=107; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=92; $i<=99; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=84; $i<=91; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=76; $i<=83; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=68; $i<=70; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=71; $i<=75; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=60; $i<=67; $i++) { // 8 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=52; $i<=55; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=56; $i<=57; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=58; $i<=59; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=44; $i<=48; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=49; $i<=51; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=36; $i<=38; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=39; $i<=41; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=42; $i<=43; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=28; $i<=32; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=33; $i<=35; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=21; $i<=22; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=23; $i<=24; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>

                        <?php for($i=25; $i<=27; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=15; $i<=20; $i++) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=10; $i<=14; $i++) { // 5 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=6; $i<=9; $i++) { // 4 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=3; $i<=5; $i++) { // 3 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" style="flex-direction:row;">
                        <?php for($i=1; $i<=2; $i++) { // 2 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="V열 <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- VIP3 74 -->
                <div class="seat_rows" data-row-type="VIP3" style="top:288px; left:222px; align-items:flex-end; z-index:1;">
                    <div class="seat_row_items" style="flex-direction:row;">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="74" title="VIP3열 74"><span></span></div>
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
                    else if (objValue.indexOf('일반(통로),90000') !== -1)
                    {
                        obj.attr('data-seat', 'NORMAL_AISLE');
                    }
                    else if (objValue.indexOf('VIP,150000') !== -1)
                    {
                        obj.attr('data-seat', 'VIP');
                    }
                    else if (objValue.indexOf('VVIP,500000') !== -1)
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

                            if (rowType === 'VVIP1' || rowType === 'VVIP2')
                            {
                                selectedOptionObj = optionSelectObj.find('option[data-seat="VVIP"]').prop('selected', true);
                            }
                            else if (rowType === 'VIP1' || rowType === 'VIP2' || rowType === 'VIP3' || rowType === 'VIP4')
                            {
                                selectedOptionObj = optionSelectObj.find('option[data-seat="VIP"]').prop('selected', true);
                            }
                            else
                            {
                                var aisleValue = setObj.attr('data-aisle');

                                if (aisleValue === 'Y') {
                                    selectedOptionObj = optionSelectObj.find('option[data-seat="NORMAL_AISLE"]').prop('selected', true);
                                } else {
                                    selectedOptionObj = optionSelectObj.find('option[data-seat="NORMAL"]').prop('selected', true);
                                }
                            }

                            var it_id = $('input[name="it_id[]"]').val();
                            var optionResultObj = $('#sit_sel_option');
                            var optionValue = selectedOptionObj.val();
                            var optionValue_split = optionValue.split(',');

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