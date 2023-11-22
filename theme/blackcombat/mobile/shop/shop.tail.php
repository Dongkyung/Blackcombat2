<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$admin = get_admin("super");

// 사용자 화면 우측과 하단을 담당하는 페이지입니다.
// 우측, 하단 화면을 꾸미려면 이 파일을 수정합니다.
?>
</div><!-- container End -->

<style>
    .get_item_options {position:absolute; top:-9999px; left:-9999px;}
    #sit_siblings {display:none;}
    #sit_tab {width:100%;}
    #sit_btn_cart {display:none;}
    #sit_btn_buy {width:79%;}
    .sit_side_option {display:none;}
    .sit_sel_option {display:none;}

    .seat_option {font-size:18px; font-weight:700;}
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
        <p style="padding-bottom:5px;">전화 : 070-4193-9293</p>
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

    .movieLayoutContainer {position:relative; display:block; min-width:1400px; min-height:750px; margin:0; padding:0; transform: scale(0.7) translateX(-550px);}
    .cage_img_1 {position:absolute; top:255px; left:550px; display:block; width:auto; max-width:430px; height:auto; margin:0; padding:0; z-index:11;}
    .cage_img_2 {position:absolute; top:441px; right:1px; display:block; width:auto; max-width:460px; height:auto; margin:0; padding:0; z-index:11;}
    .cage_img_3 {position:absolute; top:280px; left:500px; display:block; width:350px; height:auto; margin:0; padding:0; z-index:11;}
    .seat_rows {display:flex; flex-direction:column; align-items:center; justify-content:flex-start; width:auto; height:auto; margin:0; padding:0; background:#fff; z-index:10;}
    .seat_row_items {display:flex; flex-direction:column; align-items:flex-start; justify-content:flex-start; width:auto; height:auto; margin:0; padding:0; row-gap:2px;}
    .seat_row_items.horizon {flex-direction:row; flex-wrap:nowrap; row-gap:0; column-gap:2px;}
    .seat_row_item {flex:0 0 auto; display:flex; flex-direction:column; align-items:center; justify-content:center; width:16px; height:16px; margin:0 1px; padding:2px 2px; border:1px solid transparent; border-radius:2px; cursor:pointer; vertical-align:-webkit-baseline-middle; background:#fff;}
    .seat_row_item span {flex:0 0 auto; display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; height:100%; margin:0; padding:0; border-radius:2px; background:#fff;}
    .seat_row_item[data-choosable="Y"] {border-color:#8a8a8a;}
    .seat_row_item[data-choosable="N"] {border-color:#8a8a8a; background-color:#fafafa; cursor:default;}
    .seat_row_item[data-choosable="Y"] span {background:#fff;}
    .seat_row_item[data-choosable="N"] span {background:#8a8a8a;}
    /* .seat_row_item[data-choosable="N"] span {background:#F9CA34;} */
    .seat_row_item[data-choosable="Y"]:hover span {background:#FAFC57;}
    .seat_row_item[data-selected="Y"] span {background:#41db41 !important;}

    .seat_rows_groups {position:absolute; display:flex; flex-direction:row; flex-wrap:nowrap; align-items:center; justify-content:flex-start; width:auto; height:auto; margin:0; padding:0;}
    .seat_rows_groups.vertical {flex-direction:column; flex-wrap:unset;}
    .seat_rows_group {flex:0 0 auto; position:relative; display:flex; flex-direction:row; flex-wrap:nowrap; align-items:center; justify-content:flex-start; width:auto; height:auto; margin:0; padding:0;}
    .seat_rows_groups.vertical .seat_rows_group {flex-direction:column; flex-wrap:unset; row-gap:5px;}
    .seat_rows_group .seat_rows {position:relative;}

    .seat_choice_popup_bg {position:absolute; top:0; left:0; width:100%; height:100%; margin:0; padding:0; background:rgba(0,0,0,0.5); box-sizing:border-box; z-index:98;}

    .seat_row_items[data-row-type="VIP(1)"] .seat_row_item, .seat_row_items[data-row-type="VIP(2)"] .seat_row_item {border-color: #ff7f00;}
    .seat_row_items[data-row-type="VVIP"] .seat_row_item {border-color: #8b00ff;}

    .seat_row_items[data-row-type="nomal"]{width:100%}
    .seat_row_items[data-row-type="nomal"] .seat_row_item[data-choosable="N"] span {background:#8a8a8a;}
</style>cage_img_3

<div class="seat_choice_popup" style="display:none; touch-action: pinch-zoom;">
    <div class="seat_choice_popup_wrap">
        <div class="seat_choice_popup_header">
            <h1 class="seat_choice_popup_header_title">좌석 선택하기</h1>
        </div>
        <div class="seat_choice_popup_body">
            <div class="movieLayoutContainer" data-product-id="<?php echo $it_id; ?>">

                <img class="cage_img_3" src="<?php echo G5_THEME_IMG_URL; ?>/product/cage_img_4.png" />
                
                <!-- up -->
                <div style="text-align: center; position: absolute; top: 95px; left: 520px;">
                    <div style="display: flex; flex-direction: column; align-items: center; line-height: 1; margin: 10px;">
                        <span style="color: black; font-size: 20px; font-weight:bold">VIP-A</span>
                        <span style="color: black; font-size: 20px; font-weight:bold">(80)</span>
                    </div>
                    <div class="seat_rows" style="row-gap:4px; z-index:1; border: 2px solid #ff7f00; padding: 5px;">
                        <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                            <?php for($i=65; $i<=80; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP-A <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                            <?php for($i=49; $i<=64; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP-A <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                            <?php for($i=33; $i<=48; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP-A <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                            <?php for($i=17; $i<=32; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP-A <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                            <?php for($i=1; $i<=16; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP-A <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                    </div>
                </div>
                
                <!-- down -->
                <div style="text-align: center; position: absolute; top: 640px; left: 520px;">
                    <div class="seat_rows" style="row-gap:4px; z-index:1; border: 2px solid #ff7f00; padding: 5px; margin: 10px;">
                        <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                            <?php for($i=1; $i<=16; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP-C <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                            <?php for($i=17; $i<=32; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-C <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                            <?php for($i=33; $i<=48; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP-C <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                            <?php for($i=49; $i<=52; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP-C <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                            <?php for($i=53; $i<=58; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP-C <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                            <?php for($i=59; $i<=61; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP-C <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                            <?php for($i=62; $i<=64; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP-C <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                            <?php for($i=65; $i<=80; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP-C <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                    </div>
                    <div style="display: flex; flex-direction: column; align-items: center;line-height: 1;">
                        <span style="color: black; font-size: 20px; font-weight:bold">VIP-C</span>
                        <span style="color: black; font-size: 20px; font-weight:bold">(80)</span>
                    </div>
                </div>
                

                <!-- right2 -->
                <div style="text-align: center; position: absolute; top: 370px; left: 800px; -ms-transform: rotate(90deg); -webkit-transform: rotate(90deg); transform: rotate(90deg);">
                    <div style="display: flex; flex-direction: column; align-items: center; line-height: 1; margin: 10px;">
                        <span style="color: black; font-size: 20px; font-weight:bold">VIP-B</span>
                        <span style="color: black; font-size: 20px; font-weight:bold">(80)</span>
                    </div>
                    <div class="seat_rows" style="align-items:flex-start; row-gap:4px; border: 2px solid #ff7f00; padding: 5px;">
                        <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                            <?php for($i=65; $i<=80; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP-B <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                            <?php for($i=49; $i<=64; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP-B <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                            <?php for($i=33; $i<=34; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-B <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                            <?php for($i=35; $i<=36; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP-B <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                            <?php for($i=37; $i<=39; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP-B <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                            <?php for($i=40; $i<=41; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-B <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                            <?php for($i=42; $i<=46; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP-B <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                            <?php for($i=47; $i<=48; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-B <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                            <?php for($i=17; $i<=32; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-B <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                            <?php for($i=1; $i<=16; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP-B <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                    </div>
                </div>

                <!-- left 1 -->
                <div style="text-align: center; position: absolute; top: 370px; left: 250px; -ms-transform: rotate(-90deg); -webkit-transform: rotate(-90deg); transform: rotate(-90deg);">
                    <div style="display: flex; flex-direction: column; align-items: center; line-height: 1; margin: 10px;">
                        <span style="color: black; font-size: 20px; font-weight:bold">VIP-D</span>
                        <span style="color: black; font-size: 20px; font-weight:bold">(80)</span>
                    </div>
                    <div class="seat_rows" style="row-gap:4px; z-index:1; border: 2px solid #ff7f00; padding: 5px;">
                        <div class="seat_row_items" data-row-type="VIP-D" style="flex-direction:row;">
                            <?php for($i=65; $i<=80; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP-D <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-D" style="flex-direction:row;">
                            <?php for($i=49; $i<=64; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP-D <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-D" style="flex-direction:row;">
                            <?php for($i=33; $i<=35; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP-D <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                            <?php for($i=36; $i<=39; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP-D <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                            <?php for($i=40; $i<=40; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-D <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                            <?php for($i=41; $i<=46; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP-D <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                            <?php for($i=47; $i<=48; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP-D <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-D" style="flex-direction:row;">
                            <?php for($i=17; $i<=32; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-D <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-D" style="flex-direction:row;">
                            <?php for($i=1; $i<=16; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" data-seat-number="<?php echo $i; ?>" title="VIP-D <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                    </div>
                </div>


                                <!-- 예매 안되는 일반석 A -->
                                <div style="text-align: center; position: absolute; top: 10px; left: 900px;">
                    <div style="display: flex; flex-direction: row; align-items: center; line-height: 1;">
                        <span style="color: black; font-size: 20px; font-weight:bold">일반석 A </span>
                        <span style="color: black; font-size: 20px; font-weight:bold">(82)</span>
                    </div>
                    <div class="seat_rows" style="row-gap:4px; z-index:1; padding: 5px; -ms-transform: rotate(90deg); -webkit-transform: rotate(90deg); transform: rotate(90deg);">
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=80; $i<=82; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=76; $i<=79; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=71; $i<=75; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=65; $i<=70; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=50; $i<=57; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=41; $i<=49; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=31; $i<=40; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=21; $i<=30; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=11; $i<=20; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=1; $i<=10; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                    </div>
                </div>

                <!-- 예매 안되는 일반석 B -->
                <div style="text-align: center; position: absolute; top: 160px; left: 1030px;">
                    <div class="seat_rows" style="row-gap:4px; z-index:1; padding: 5px; -ms-transform: rotate(-90deg); -webkit-transform: rotate(-90deg); transform: rotate(-90deg);">
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=1; $i<=7; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=8; $i<=15; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=16; $i<=24; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=25; $i<=34; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=35; $i<=45; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=46; $i<=57; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=58; $i<=70; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=71; $i<=84; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=85; $i<=98; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=99; $i<=112; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=113; $i<=126; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                    </div>
                    <div style="display: flex; flex-direction: row; align-items: center; line-height: 1; margin-top: 20px; justify-content: flex-end; margin-right: 20px">
                        <span style="color: black; font-size: 20px; font-weight:bold">일반석 B </span>
                        <span style="color: black; font-size: 20px; font-weight:bold">(126)</span>
                    </div>
                </div>

            

                <!-- 예매 안되는 일반석 D -->
                <div style="text-align: center; position: absolute; top: 670px; left: 900px;">
                    <div style="-ms-transform: scaleY(-1); -webkit-transform: scaleY(-1); transform: scaleY(-1);">
                    <div class="seat_rows" style="row-gap:4px; z-index:1; padding: 5px; -ms-transform: rotate(90deg); -webkit-transform: rotate(90deg); transform: rotate(90deg);">
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=80; $i<=82; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=76; $i<=79; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=71; $i<=75; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=65; $i<=70; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=50; $i<=57; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=41; $i<=49; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=31; $i<=40; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=21; $i<=30; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=11; $i<=20; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                            <?php for($i=1; $i<=10; $i++) { // 6 ?>
                                <div class="seat_row_item" data-choosable="N" ><span></span></div>
                            <?php } // for End ?>
                        </div>
                    </div>
                    </div>
                    <div style="display: flex; flex-direction: row; align-items: center; line-height: 1;">
                        <span style="color: black; font-size: 20px; font-weight:bold">일반석 D</span>
                        <span style="color: black; font-size: 20px; font-weight:bold">(82)</span>
                    </div>
                </div>


                <!-- 예매 안되는 일반석 C -->
                <div style="text-align: center; position: absolute; top: 490px; left: 1030px;">
                    <div style="display: flex; flex-direction: row; align-items: center; line-height: 1; justify-content: flex-end; margin-right: 20px; margin-bottom:23px">
                        <span style="color: black; font-size: 20px; font-weight:bold">일반석 C </span>
                        <span style="color: black; font-size: 20px; font-weight:bold">(126)</span>
                    </div>
                    <div style="-webkit-transform: scaleY(-1); transform: scaleY(-1);">
                        <div class="seat_rows" style="row-gap:4px; z-index:1; padding: 5px; -ms-transform: rotate(-90deg); -webkit-transform: rotate(-90deg); transform: rotate(-90deg);">
                            <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                                <?php for($i=1; $i<=7; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="N" ><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                                <?php for($i=8; $i<=15; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="N" ><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                                <?php for($i=16; $i<=24; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="N" ><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                                <?php for($i=25; $i<=34; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="N" ><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                                <?php for($i=35; $i<=45; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="N" ><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                                <?php for($i=46; $i<=57; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="N" ><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                                <?php for($i=58; $i<=70; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="N" ><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                                <?php for($i=71; $i<=84; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="N" ><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                                <?php for($i=85; $i<=98; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="N" ><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                                <?php for($i=99; $i<=112; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="N" ><span></span></div>
                                <?php } // for End ?>
                            </div>
                            <div class="seat_row_items" data-row-type="nomal" style="flex-direction:row;">
                                <?php for($i=113; $i<=126; $i++) { // 6 ?>
                                    <div class="seat_row_item" data-choosable="N" ><span></span></div>
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

        //좌석 선택하기 버튼 이벤트
        if ($('.open_seat_choice_btn').length) {
            $('.open_seat_choice_btn').on('click', function(e) {
                e.preventDefault();
                kakaoPixel('8339806502848870616').viewCart();
                $('.seat_choice_popup').fadeIn(300);
            });
        }

        //닫기버튼 이벤트
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
                    // if (objValue.indexOf('스탠딩,0') !== -1)
                    // {
                    //     obj.attr('data-seat', 'STANDING');
                    // }
                    // else 
                    if (objValue.indexOf('VIP,0') !== -1)
                    {
                        obj.attr('data-seat', 'VIP');
                    }
                    // else if (objValue.indexOf('VVIP,1100') !== -1)
                    // {
                    //     obj.attr('data-seat', 'VVIP');
                    // }
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

                            // if (rowType === 'VVIP-L' || rowType === 'VVIP-R')
                            // {
                            //     selectedOptionObj = optionSelectObj.find('option[data-seat="VVIP"]').prop('selected', true);
                            // }
                            // else 
                            if (rowType === 'VIP-A' || rowType === 'VIP-B' || rowType === 'VIP-C' || rowType === 'VIP-D')
                            {
                                selectedOptionObj = optionSelectObj.find('option[data-seat="VIP"]').prop('selected', true);
                            }
                            // else if (rowType === 'STANDING')
                            // {
                            //     selectedOptionObj = optionSelectObj.find('option[data-seat="STANDING"]').prop('selected', true);
                            // }
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
                            $('#sit_tot_price').text(`총 ${number_format(190000+Number(optionValue_split[1]))}원`);


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