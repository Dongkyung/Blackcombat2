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

    .movieLayoutContainer {position:relative; display:block; min-width:1280px; min-height:940px; margin:0; padding:0;}
    .cage_img_1 {position:absolute; top:255px; left:550px; display:block; width:auto; max-width:430px; height:auto; margin:0; padding:0; z-index:11;}
    .cage_img_2 {position:absolute; top:441px; right:1px; display:block; width:auto; max-width:460px; height:auto; margin:0; padding:0; z-index:11;}
    .cage_img_3 {position:absolute; top:430px; left:500px; display:block; width:169px; height:auto; margin:0; padding:0; z-index:11;}
    .seat_rows {position:absolute; display:flex; flex-direction:column; align-items:center; justify-content:flex-start; width:auto; height:auto; margin:0; padding:0; background:#fff; z-index:10;}
    .seat_row_items {display:flex; flex-direction:column; align-items:flex-start; justify-content:flex-start; width:auto; height:auto; margin:0; padding:0; row-gap:2px;}
    .seat_row_items.horizon {flex-direction:row; flex-wrap:nowrap; row-gap:0; column-gap:2px;}
    .seat_row_item {flex:0 0 auto; display:flex; flex-direction:column; align-items:center; justify-content:center; width:16px; height:16px; margin:0 1px; padding:2px 2px; border:1px solid transparent; border-radius:2px; cursor:pointer; vertical-align:-webkit-baseline-middle; background:#fff;}
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

    .seat_row_items[data-row-type="VIP(1)"] .seat_row_item, .seat_row_items[data-row-type="VIP(2)"] .seat_row_item {border-color: #ff7f00;}
    .seat_row_items[data-row-type="VVIP"] .seat_row_item {border-color: #8b00ff;}
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
                <!-- <div style="font-size: 16px; line-height: 16px; position: absolute; top: 211px; left: 478px; z-index:4; min-width: 100px;">
                    <div style="display: flex; margin-bottom: 8px;">
                        <div style="border: 1px solid #8a8a8a; border-radius: 2px; width: 16px; height: 16px; margin-right: 8px;"></div>: 일반
                    </div>
                    <div style="display: flex; margin-bottom: 8px;">
                        <div style="border: 1px solid #ff7f00; border-radius: 2px; width: 16px; height: 16px; margin-right: 8px;"></div>: VIP
                    </div>
                    <div style="display: flex;">
                        <div style="border: 1px solid #8b00ff; border-radius: 2px; width: 16px; height: 16px; margin-right: 8px;"></div>: VVIP
                    </div>
                </div> -->
                <img class="cage_img_3" src="<?php echo G5_THEME_IMG_URL; ?>/product/cage_img_3.png" />
                <div style="display: flex; align-items: center; justify-content: center; background-color:#fff; border: 5px solid #000; font-size: 35px; text-align: center; word-break: keep-all; position: absolute; top:96px; left:100px; width: 760px; height: 120px; z-index:1;">
                    스탠딩석
                </div>
                <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; background-color:#fff; border: 5px solid #000; font-size: 35px; text-align: center; word-break: keep-all; position: absolute; top:260px; left:100px; width: 170px; height: 507px; z-index:1;">
                    <p>스탠딩석</p>
                    <p style="font-size: 16px; color: #ff6262; margin-bottom: 10px;">스탠딩석은 구역 지정이 불가능합니다.</p>
                    <div class="seat_row_items" data-row-type="STANDING">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="STANDING"><span></span></div>
                    </div>
                </div>
                <div style="display: flex; align-items: center; justify-content: center; background-color:#fff; border: 5px solid #000; font-size: 35px; text-align: center; word-break: keep-all; position: absolute; top:810px; left:100px; width: 760px; height: 120px; z-index:1;">
                    스탠딩석
                </div>
                <div style="display: flex;align-items: center;justify-content: center;color: #393939;background-color: #ffb4b4;font-size: 35px;text-align: center;word-break: keep-all;position: absolute;top: 480px; left: 669px; width: 192px; height: 69px; z-index:1;">
                    선수 입장로
                </div>
                <!-- VVIP-L -->
                <div style="display: flex; flex-direction: row; align-items: center; position: absolute; top:0px; left:378px;">
                    <span style="color: #7f00ea; margin-right: 10px; font-size: 20px; text-align: center;">VVIP-L<br/>2층</span>
                    <div style="width: 240px; height: 84px; border: 2px solid #7f00ea;"></div>
                </div>
                <div class="seat_rows" style="top:3px; left:450px; row-gap:4px; z-index:1;">
                    <div class="seat_row_items" data-row-type="VVIP-L" style="flex-direction:row;">
                        <?php for($i=50; $i>=40; $i--) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-L <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" data-row-type="VVIP-L" style="flex-direction:row;">
                        <?php for($i=39; $i>=27; $i--) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-L <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" data-row-type="VVIP-L" style="flex-direction:row;">
                        <?php for($i=26; $i>=14; $i--) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-L <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" data-row-type="VVIP-L" style="flex-direction:row;">
                        <?php for($i=13; $i>=1; $i--) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-L <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>
                
                <!-- VVIP-R -->
                <div style="display: flex; flex-direction: row; align-items: center; position: absolute; top:947px; left:374px;">
                    <span style="color: #7f00ea; margin-right: 10px; font-size: 20px; text-align: center;">VVIP-R<br/>2층</span>
                    <div style="width: 243px; height: 84px; border: 2px solid #7f00ea;"></div>
                </div>
                <div class="seat_rows" style="top:950px; left:450px; row-gap:4px; z-index:1;">
                    <div class="seat_row_items" data-row-type="VVIP-R" style="flex-direction:row;">
                        <?php for($i=13; $i>=1; $i--) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-R <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" data-row-type="VVIP-R" style="flex-direction:row;">
                        <?php for($i=26; $i>=14; $i--) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-R <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" data-row-type="VVIP-R" style="flex-direction:row;">
                        <?php for($i=39; $i>=27; $i--) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-R <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" data-row-type="VVIP-R" style="flex-direction:row;">
                        <?php for($i=50; $i>=40; $i--) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-R <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>

                <!-- up -->
                <div style="display: flex; gap:6px; flex-direction: column; align-items: center; position: absolute; top:222px; left:318px;">
                    <span style="color: #ff7f00; font-size: 20px;">VIP-B</span>
                    <div style="width: 548px; height: 124px; border: 2px solid #ff7f00;"></div>
                </div>
                <div class="seat_rows" style="top:260px; left:322px; row-gap:4px; z-index:1;">
                    <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                        <?php for($i=180; $i>=151; $i--) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-B <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                        <?php for($i=150; $i>=121; $i--) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-B <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                        <?php for($i=120; $i>=91; $i--) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-B <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                        <?php for($i=90; $i>=61; $i--) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-B <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                        <?php for($i=60; $i>=31; $i--) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-B <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                    <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                        <?php for($i=30; $i>=1; $i--) { // 6 ?>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-B <?php echo $i;?>"><span></span></div>
                        <?php } // for End ?>
                    </div>
                </div>
                
                <!-- right1 -->
                <div style="display: flex; gap:10px; flex-direction: row; align-items: center; position: absolute; top:379px; left:734px;">
                    <div style="width: 132px; height: 84px; border: 2px solid #ff7f00;"></div>
                    <span style="color: #ff7f00; font-size: 20px;">VIP-L</span>
                </div>
                <div class="seat_rows_groups vertical" style="top:384px; left:736px; z-index:2;">
                    <div class="seat_rows_group">
                        <div class="seat_rows" style="top:0px; left:0px; row-gap:4px;">
                            <div class="seat_row_items" data-row-type="VIP-L" style="flex-direction:row;">
                                <?php for($i=22; $i<=28; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-L <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="VIP-L" style="flex-direction:row;">
                                <?php for($i=15; $i<=21; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-L <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                                
                            </div>
                            <div class="seat_row_items" data-row-type="VIP-L" style="flex-direction:row;">
                                <?php for($i=8; $i<=14; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-L <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="VIP-L" style="flex-direction:row;">
                                <?php for($i=1; $i<=7; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-L <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- right2 -->
                <div style="display: flex; gap:10px; flex-direction: row; align-items: center; position: absolute; top:565px; left:732px;">
                    <div style="width: 132px; height: 84px; border: 2px solid #ff7f00;"></div>
                    <span style="color: #ff7f00; font-size: 20px;">VIP-R</span>
                </div>
                <div class="seat_rows_groups vertical" style="top:569px; left:734px; z-index:2;">
                    <div class="seat_rows_group">
                        <div class="seat_rows" style="top:0px; left:0px; align-items:flex-start; row-gap:4px;">
                            <div class="seat_row_items" data-row-type="VIP-R" style="flex-direction:row;">
                                <?php for($i=1; $i<=7; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-R <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="VIP-R" style="flex-direction:row;">
                                <?php for($i=8; $i<=14; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-R <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="VIP-R" style="flex-direction:row;">
                                <?php for($i=15; $i<=21; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-R <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                                
                            </div>
                            <div class="seat_row_items" data-row-type="VIP-R" style="flex-direction:row;">
                                <?php for($i=22; $i<=28; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-R <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- down -->
                <div style="display: flex; gap:6px; flex-direction: column; align-items: center; position: absolute; top:647px; left:318px;">
                    <div style="width: 546px; height: 124px; border: 2px solid #ff7f00;"></div>
                    <span style="color: #ff7f00; font-size: 20px;">VIP-C</span>
                </div>
                <div class="seat_rows_groups vertical" style="top:650px; left:321px; z-index:2;">
                    <div class="seat_rows_group">
                        <div class="seat_rows" style="top:0px; left:0px; row-gap:4px; z-index:1;">
                            <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                                <?php for($i=30; $i>=1; $i--) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-C <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                                <?php for($i=60; $i>=31; $i--) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-C <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                                <?php for($i=90; $i>=61; $i--) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-C <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                                <?php for($i=120; $i>=91; $i--) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-C <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                                <?php for($i=150; $i>=121; $i--) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-C <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                                <?php for($i=180; $i>=151; $i--) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-C <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- left 1 -->
                <div style="display: flex; gap:10px; flex-direction: row; align-items: center; position: absolute; top:379px; left:318px;">
                    <span style="color: #ff7f00; position: absolute; top: 118px; left: 35px; font-size: 20px;">VIP-A</span>
                    <div style="width: 116px; height: 270px; border: 2px solid #ff7f00;"></div>
                </div>
                <div class="seat_rows_groups vertical" style="top:383px; left:322px; transform:rotateZ(90deg); z-index:2;">
                    <div class="seat_rows_group">
                        <div class="seat_rows" style="top:0px; left:0px; align-items:center; row-gap:2px;">
                            <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                                <?php for($i=1; $i<=6; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-A <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                                <?php for($i=13; $i<=18; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-A <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                                <?php for($i=25; $i<=30; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-A <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                                <?php for($i=37; $i<=42; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-A <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                                <?php for($i=49; $i<=54; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-A <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                                <?php for($i=61; $i<=66; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-A <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- left 2 -->
                <div class="seat_rows_groups vertical" style="top:539px; left:322px; transform:rotateZ(90deg); z-index:2;">
                    <div class="seat_rows_group">
                        <div class="seat_rows" style="top:0px; left:0px; align-items:center; row-gap:2px;">
                            <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                                <?php for($i=7; $i<=12; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-A <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                                <?php for($i=19; $i<=24; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-A <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                                <?php for($i=31; $i<=36; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-A <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                                <?php for($i=43; $i<=48; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-A <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                                <?php for($i=55; $i<=58; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-A <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                                <?php for($i=59; $i<=60; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP-A <?php echo $i;?>"><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                                <?php for($i=67; $i<=72; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-A <?php echo $i;?>"><span></span></div>
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
                    if (objValue.indexOf('스탠딩,0') !== -1)
                    {
                        obj.attr('data-seat', 'STANDING');
                    }
                    else if (objValue.indexOf('VIP,40000') !== -1)
                    {
                        obj.attr('data-seat', 'VIP');
                    }
                    else if (objValue.indexOf('VVIP,161000') !== -1)
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
                    alert('좌석을 선택해주세요.');
                    return false;
                }

                var setNumber = setObj.attr('data-seat-number');
                if (!setNumber.length) {
                    alert('정상적인 접근이 아닙니다.');
                    location.reload();
                    return false;
                }

                var parentObj = setObj.closest('.seat_row_items');
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

                if (rowType === "STANDING") {
                    setNumber = Math.floor(Math.random() * 9999999 + 1);
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

                            if (rowType === 'VVIP-L' || rowType === 'VVIP-R')
                            {
                                selectedOptionObj = optionSelectObj.find('option[data-seat="VVIP"]').prop('selected', true);
                            }
                            else if (rowType === 'VIP-A' || rowType === 'VIP-B' || rowType === 'VIP-C' || rowType === 'VIP-L' || rowType === 'VIP-R')
                            {
                                selectedOptionObj = optionSelectObj.find('option[data-seat="VIP"]').prop('selected', true);
                            }
                            else if (rowType === 'STANDING')
                            {
                                selectedOptionObj = optionSelectObj.find('option[data-seat="STANDING"]').prop('selected', true);
                            }
                            // else
                            // {
                            //     var aisleValue = setObj.attr('data-aisle');

                            //     if (aisleValue === 'Y') {
                            //         selectedOptionObj = optionSelectObj.find('option[data-seat="NORMAL_AISLE"]').prop('selected', true);
                            //     } else {
                            //         selectedOptionObj = optionSelectObj.find('option[data-seat="NORMAL"]').prop('selected', true);
                            //     }
                            // }
                            var it_id = $('input[name="it_id[]"]').val();
                            var optionResultObj = $('#sit_sel_option');
                            var optionValue = selectedOptionObj.val();
                            var optionValue_split = optionValue.split(',');

                            var newSetNumber = setNumber;
                            if (rowType == 'STANDING') {
                                newSetNumber = ' ';
                            }

                            var optionResultHtml = ''+
                                '<ul id="sit_opt_added">'+
                                '   <li class="sit_opt_list">'+
                                '       <input type="hidden" name="io_type[' + it_id + '][]" value="0">'+
                                '       <input type="hidden" name="io_id[' + it_id + '][]" value="' + optionValue_split[0] + '">'+
                                '       <input type="hidden" name="io_value[' + it_id + '][]" value="좌석: ' + optionValue_split[0] + '">'+
                                '       <input type="hidden" class="io_price" value="' + optionValue_split[1] + '">'+
                                '       <input type="hidden" class="io_stock" value="' + optionValue_split[2] + '">'+
                                '       <div class="opt_name"><span class="sit_opt_subj">좌석:' + optionValue_split[0] + ' (' + rowType + ' 구역 ' + newSetNumber + ')</span></div>'+
                                '       <div class="opt_count">'+
                                '           <input type="hidden" name="ct_qty[' + it_id + '][]" value="1" class="num_input" size="5">'+
                                '           <span class="sit_opt_prc">+ ' + number_format(optionValue_split[1]) + '원</span>'+
                                '           <button type="button" class="sit_opt_del"><i class="fa fa-times" aria-hidden="true"></i><span class="sound_only">삭제</span></button>'+
                                '       </div>'+
                                '   </li>'+
                                '</ul>'+
                                '';

                            optionResultObj.html(optionResultHtml);

                            $('#sit_tot_price').text(`총 ${number_format(89000+Number(optionValue_split[1]))}원`);


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
                            seatObj = $('.seat_row_items[data-row-type="' + seat_row_type + '"]').find('.seat_row_item[data-seat-number="' + seat_number + '"]');

                            if (seatObj.length && seat_row_type !== 'STANDING') {
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