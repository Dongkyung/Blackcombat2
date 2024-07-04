<style>
    .vvip_border .seat_row_item{
        border: 1px solid #00c3ff;
    }

    .vip_border .seat_row_item{
        border: 1px solid #ff7878;
    }
    .vvip_border .seat_row_item.vvip_reward {
        border: 1px solid #dddd00;
    }
    .vip_border .seat_row_item.vip_reward {
        border: 1px solid #00aa00;
    }

    .seat_row_items{
        margin-bottom: 10px;
    }

    .no-margin-bottom .seat_row_items{
        margin-bottom: 5px;
    }

    .cage_img_3 {top:380px; left:600px; display:block; width:500px; height:auto; margin:0; padding:0; z-index:-1;}

    .seat_row_items span{
        font-size:0.6rem;
    }
</style>
<div class="seat_choice_popup_wrap">
    <div class="seat_choice_popup_header">
        <h1 class="seat_choice_popup_header_title">좌석 선택하기</h1>
    </div>
    <div class="seat_choice_popup_body">
        <div class="movieLayoutContainer" data-product-id="<?php echo $it_id; ?>">
        <?php if ($is_admin) { ?>
            <canvas id="myCanvas" width="2300" height="1530" style="border: solid 2px black; position: absolute; left: 170px; top:0px;"></canvas>
        <? } ?>
            <img class="cage_img_3" src="<?php echo G5_THEME_IMG_URL; ?>/product/cage_img_4.png" />
                

                
                


                <!--------------------------------------------------------------------------------------------------------------->
                <!----------------------------------------- 상단 D구역 -------------------------------------------------------------> 
                <!--------------------------------------------------------------------------------------------------------------->
                
                <!-- VVIP-D 좌측 -->
                <div style="position: absolute; top: 283px; left: 710px; -ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); transform: rotate(0deg);">
                    <div class="seat_rows vvip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="VVIP-D" style="flex-direction:row;">
                            <?php for($i=7; $i<=13; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VVIP-D" style="flex-direction:row;">
                            <div class="seat_row_item vvip_reward" data-choosable="N"><span></span></div>
                            <?php for($i=1; $i<=6; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- VVIP-D 우측 -->
                <div style="position: absolute; top: 283px; left: 850px; -ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); transform: rotate(0deg);">
                    <div class="seat_rows vvip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <div class="seat_row_items" data-row-type="VVIP-D" style="flex-direction:row;">
                            <?php for($i=20; $i<=26; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VVIP-D" style="flex-direction:row;">
                            <?php for($i=14; $i<=19; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                            <div class="seat_row_item vvip_reward" data-choosable="N"><span></span></div>
                        </div>
                    </div>
                </div>

                <!-- VIP-D 좌좌측 -->
                <div style="position: absolute; top: 193px; left: 627px; -ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); transform: rotate(0deg);">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="VIP-D" style="flex-direction:row;">
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-D" style="flex-direction:row;">
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <?php for($i=2; $i<=3; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-D" style="flex-direction:row;">
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <?php for($i=1; $i<=1; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- VIP-D 좌측 -->
                <div style="position: absolute; top: 193px; left: 692px; -ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); transform: rotate(0deg);">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="VIP-D" style="flex-direction:row;">
                            <?php for($i=0; $i<=7; $i++) { ?>
                                <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-D" style="flex-direction:row;">
                            <?php for($i=12; $i<=19; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-D" style="flex-direction:row;">
                            <?php for($i=4; $i<=11; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- VIP-D 우측 -->
                <div style="position: absolute; top: 193px; left: 850px; -ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); transform: rotate(0deg);">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="VIP-D" style="flex-direction:row;">
                            <?php for($i=0; $i<=7; $i++) { ?>
                                <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-D" style="flex-direction:row;">
                            <?php for($i=28; $i<=35; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-D" style="flex-direction:row;">
                            <?php for($i=20; $i<=27; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- VIP-D 우우측 -->
                <div style="position: absolute; top: 193px; left: 1004px; -ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); transform: rotate(0deg);">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <div class="seat_row_items" data-row-type="VIP-D" style="flex-direction:row;">
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-D" style="flex-direction:row;">
                            <?php for($i=37; $i<=38; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-D" style="flex-direction:row;">
                            <?php for($i=36; $i<=36; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                        </div>
                    </div>
                </div>

                <!-- Standard-D 좌좌측 -->
                <div style="position: absolute; top: 11px; left: 537px; -ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); transform: rotate(0deg); clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 40% 100%);">
                    <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="STANDARD-D" style="flex-direction:row;">
                            <?php for($i=26; $i<=33; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-D" style="flex-direction:row;">
                            <?php for($i=19; $i<=25; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-D" style="flex-direction:row;">
                            <?php for($i=13; $i<=18; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-D" style="flex-direction:row;">
                            <?php for($i=8; $i<=12; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-D" style="flex-direction:row;">
                            <?php for($i=4; $i<=7; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-D" style="flex-direction:row;">
                            <?php for($i=1; $i<=3; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- Standard-D 좌측 -->
                <div style="position: absolute; top: 11px; left: 692px; -ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); transform: rotate(0deg);">
                    <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="STANDARD-D" style="flex-direction:row;">
                            <?php for($i=74; $i<=81; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-D" style="flex-direction:row;">
                            <?php for($i=66; $i<=73; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-D" style="flex-direction:row;">
                            <?php for($i=58; $i<=65; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-D" style="flex-direction:row;">
                            <?php for($i=50; $i<=57; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-D" style="flex-direction:row;">
                            <?php for($i=42; $i<=49; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-D" style="flex-direction:row;">
                            <?php for($i=34; $i<=41; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- Standard-D 우측 -->
                <div style="position: absolute; top: 11px; left: 850px; -ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); transform: rotate(0deg);">
                    <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="STANDARD-D" style="flex-direction:row;">
                            <?php for($i=122; $i<=129; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-D" style="flex-direction:row;">
                            <?php for($i=114; $i<=121; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-D" style="flex-direction:row;">
                            <?php for($i=106; $i<=113; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-D" style="flex-direction:row;">
                            <?php for($i=98; $i<=105; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-D" style="flex-direction:row;">
                            <?php for($i=90; $i<=97; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-D" style="flex-direction:row;">
                            <?php for($i=82; $i<=89; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- Standard-D 우우측 -->
                <div style="position: absolute; top: 11px; left: 1005px; -ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); transform: rotate(0deg); clip-path: polygon(0% 0%, 100% 0%, 60% 100%, 0% 100%);">
                    <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <div class="seat_row_items" data-row-type="STANDARD-D" style="flex-direction:row;">
                            <?php for($i=155; $i<=162; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-D" style="flex-direction:row;">
                            <?php for($i=148; $i<=154; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-D" style="flex-direction:row;">
                            <?php for($i=142; $i<=147; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-D" style="flex-direction:row;">
                            <?php for($i=137; $i<=141; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-D" style="flex-direction:row;">
                            <?php for($i=133; $i<=136; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-D" style="flex-direction:row;">
                            <?php for($i=130; $i<=132; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-D <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>


                        
                
                <!--------------------------------------------------------------------------------------------------------------->
                <!----------------------------------------- 왼쪽 :: VIP C -------------------------------------------------------------> 
                <!--------------------------------------------------------------------------------------------------------------->
                
                <!-- VVIP-C 아래대각선 -->
                <div style="position: absolute; top: 830px; left: 580px; -ms-transform: rotate(-135deg); -webkit-transform: rotate(-135deg); transform: rotate(-135deg);">
                    <div class="seat_rows vvip_border no-margin-bottom" style="row-gap:4px; z-index:1;padding: 5px; align-items: center;">
                        <div class="seat_row_items" data-row-type="VVIP-C" style="flex-direction:row;">
                            <div class="seat_row_item vvip_reward" data-choosable="N"><span></span></div>
                            <?php for($i=29; $i<=30; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                            <div class="seat_row_item vvip_reward" data-choosable="N"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VVIP-C" style="flex-direction:row;">
                            <?php for($i=27; $i<=28; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                
                <!-- VVIP-C 아래 -->
                <div style="position: absolute; top: 673px; left: 450px; -ms-transform: rotate(-90deg); -webkit-transform: rotate(-90deg); transform: rotate(-90deg);">
                    <div class="seat_rows vvip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="VVIP-C" style="flex-direction:row;">
                            <?php for($i=7; $i<=13; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VVIP-C" style="flex-direction:row;">
                            <div class="seat_row_item vvip_reward" data-choosable="N"><span></span></div>
                            <?php for($i=1; $i<=6; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- VVIP-C 위 -->
                <div style="position: absolute; top: 535px; left: 450px; -ms-transform: rotate(-90deg); -webkit-transform: rotate(-90deg); transform: rotate(-90deg);">
                    <div class="seat_rows vvip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <div class="seat_row_items" data-row-type="VVIP-C" style="flex-direction:row;">
                            <?php for($i=20; $i<=26; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VVIP-C" style="flex-direction:row;">
                            <?php for($i=14; $i<=19; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                            <div class="seat_row_item vvip_reward" data-choosable="N"><span></span></div>
                        </div>
                    </div>
                </div>


                <!-- VIP-C 아래대각선 -->
                <div style="position: absolute; top: 860px; left: 515px; -ms-transform: rotate(-135deg); -webkit-transform: rotate(-135deg); transform: rotate(-135deg);">
                    <div class="seat_rows vip_border no-margin-bottom" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <?php for($i=41; $i<=42; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <?php for($i=39; $i<=40; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                        </div>
                    </div>
                </div>

                <!-- VIP-C 아래아래 -->
                <div style="position: absolute; top: 780px; left: 410px; -ms-transform: rotate(-90deg); -webkit-transform: rotate(-90deg); transform: rotate(-90deg);">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <?php for($i=2; $i<=3; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <?php for($i=1; $i<=1; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                
                <!-- VIP-C 아래 -->
                <div style="position: absolute; top: 667px; left: 365px; -ms-transform: rotate(-90deg); -webkit-transform: rotate(-90deg); transform: rotate(-90deg);">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                            <?php for($i=0; $i<=7; $i++) { ?>
                                <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                            <?php for($i=12; $i<=19; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                            <?php for($i=4; $i<=11; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- VIP-C 위 -->
                <div style="position: absolute; top: 510px; left: 365px; -ms-transform: rotate(-90deg); -webkit-transform: rotate(-90deg); transform: rotate(-90deg);">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                            <?php for($i=0; $i<=7; $i++) { ?>
                                <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                            <?php for($i=28; $i<=35; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                            <?php for($i=20; $i<=27; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- VIP-C 위위 -->
                <div style="position: absolute; top: 405px; left: 410px; -ms-transform: rotate(-90deg); -webkit-transform: rotate(-90deg); transform: rotate(-90deg);">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                            <?php for($i=37; $i<=38; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                            <?php for($i=36; $i<=36; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                        </div>
                    </div>
                </div>

                <!-- Standard-C 아래대각선 -->
                <div style="z-index:2; position: absolute; top: 875px; left: 280px; -ms-transform: rotate(-135deg); -webkit-transform: rotate(-135deg); transform: rotate(-135deg); clip-path: polygon(10% 0%, 80% 0%, 80% 70%, 60% 100%, 40% 100%,20% 90%, 0% 20%);">
                    <div class="seat_rows no-margin-bottom" style="row-gap:4px; z-index:1;padding: 5px; align-items: center;">
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=307; $i<=315; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row; margin-right: 20px;">
                            <?php for($i=297; $i<=306; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row; margin-right: 60px;">
                            <?php for($i=285; $i<=296; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row; margin-right: 60px;">
                            <?php for($i=273; $i<=284; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row; margin-right: 45px;">
                            <?php for($i=262; $i<=272; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row; margin-right: 45px;">
                            <?php for($i=251; $i<=261; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row; margin-right: 30px;">
                            <?php for($i=241; $i<=250; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row; margin-right: 30px;">
                            <?php for($i=231; $i<=240; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row; margin-right: 30px;">
                            <?php for($i=223; $i<=230; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row; margin-right: 30px;">
                            <?php for($i=215; $i<=222; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=209; $i<=214; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=203; $i<=208; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=199; $i<=202; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=197; $i<=198; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                
                <!-- Standard-C 아래아래 -->
                <div style="position: absolute; top: 774px; left: 205px; -ms-transform: rotate(-90deg); -webkit-transform: rotate(-90deg); transform: rotate(-90deg);">
                    <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=34; $i<=42; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=26; $i<=33; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=19; $i<=25; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=13; $i<=18; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=8; $i<=12; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=4; $i<=7; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=1; $i<=3; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- Standard-C 아래 -->
                <div style="position: absolute; top: 607px; left: 214px; -ms-transform: rotate(-90deg); -webkit-transform: rotate(-90deg); transform: rotate(-90deg);">
                    <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=91; $i<=98; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=83; $i<=90; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=75; $i<=82; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=67; $i<=74; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=59; $i<=66; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=51; $i<=58; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=43; $i<=50; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- Standard-C 위 -->
                <div style="position: absolute; top: 450px; left: 214px; -ms-transform: rotate(-90deg); -webkit-transform: rotate(-90deg); transform: rotate(-90deg);">
                    <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=147; $i<=154; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=139; $i<=146; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=131; $i<=138; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=123; $i<=130; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=115; $i<=122; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=107; $i<=114; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=99; $i<=106; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- Standard-C 위위 -->
                <div style="position: absolute; top: 290px; left: 205px; -ms-transform: rotate(-90deg); -webkit-transform: rotate(-90deg); transform: rotate(-90deg); clip-path: polygon(0% 0%, 100% 0%, 50% 100%, 0% 100%);">
                    <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=188; $i<=196; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=180; $i<=187; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=173; $i<=179; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=167; $i<=172; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=162; $i<=166; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=158; $i<=161; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-C" style="flex-direction:row;">
                            <?php for($i=155; $i<=157; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-C <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>


                
                
                
                



                <!--------------------------------------------------------------------------------------------------------------->
                <!----------------------------------------- 하단 :: VIP B -------------------------------------------------------------> 
                <!--------------------------------------------------------------------------------------------------------------->
                

                <!-- VVIP-B 좌좌측 -->
                <div style="position: absolute; top: 940px; left: 1005px; -ms-transform: rotate(180deg); -webkit-transform: rotate(180deg); transform: rotate(180deg);">
                    <div class="seat_rows vvip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <div class="seat_row_items" data-row-type="VVIP-B" style="flex-direction:row;">
                            <div class="seat_row_item vvip_reward" data-choosable="N"><span></span></div>
                            <?php for($i=1; $i<=1; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- VVIP-B 좌측 -->
                <div style="position: absolute; top: 910px; left: 850px; -ms-transform: rotate(180deg); -webkit-transform: rotate(180deg); transform: rotate(180deg);">
                    <div class="seat_rows vvip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="VVIP-B" style="flex-direction:row;">
                            <?php for($i=8; $i<=14; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VVIP-B" style="flex-direction:row;">
                            <div class="seat_row_item vvip_reward" data-choosable="N"><span></span></div>
                            <?php for($i=2; $i<=7; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- VVIP-B 우측 -->
                <div style="position: absolute; top: 910px; left: 710px; -ms-transform: rotate(180deg); -webkit-transform: rotate(180deg); transform: rotate(180deg);">
                    <div class="seat_rows vvip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <div class="seat_row_items" data-row-type="VVIP-B" style="flex-direction:row;">
                            <?php for($i=20; $i<=26; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VVIP-B" style="flex-direction:row;">
                            <?php for($i=15; $i<=20; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                            <div class="seat_row_item vvip_reward" data-choosable="N"><span></span></div>
                        </div>
                    </div>
                </div>

                <!-- VVIP-B 우우측 -->
                <div style="position: absolute; top: 940px; left: 645px; -ms-transform: rotate(180deg); -webkit-transform: rotate(180deg); transform: rotate(180deg);">
                    <div class="seat_rows vvip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <div class="seat_row_items" data-row-type="VVIP-B" style="flex-direction:row;">
                            <?php for($i=27; $i<=27; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                            <div class="seat_row_item vvip_reward" data-choosable="N"><span></span></div>
                        </div>
                    </div>
                </div>

                <!-- VIP-B 좌좌측 -->
                <div style="position: absolute; top: 972px; left: 1005px; -ms-transform: rotate(180deg); -webkit-transform: rotate(180deg); transform: rotate(180deg); clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 10% 100%)">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <?php for($i=3; $i<=5; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <?php for($i=1; $i<=2; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- VIP-B 좌측 -->
                <div style="position: absolute; top: 972px; left: 850px; -ms-transform: rotate(180deg); -webkit-transform: rotate(180deg); transform: rotate(180deg);">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                            <?php for($i=0; $i<=7; $i++) { ?>
                                <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                            <?php for($i=14; $i<=21; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                            <?php for($i=6; $i<=13; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- VIP-B 우측 -->
                <div style="position: absolute; top: 972px; left: 692px; -ms-transform: rotate(180deg); -webkit-transform: rotate(180deg); transform: rotate(180deg);">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                            <?php for($i=0; $i<=7; $i++) { ?>
                                <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                            <?php for($i=30; $i<=37; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                            <?php for($i=22; $i<=29; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- VIP-B 우우측 -->
                <div style="position: absolute; top: 972px; left: 610px; -ms-transform: rotate(180deg); -webkit-transform: rotate(180deg); transform: rotate(180deg); clip-path: polygon(0% 0%, 100% 0%, 96% 84%, 0% 100%);;">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                            <?php for($i=40; $i<=42; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                            <?php for($i=38; $i<=39; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                        </div>
                    </div>
                </div>

                <!-- STANDARD-B 좌좌측 -->
                <div style="position: absolute; top: 1065px; left: 1005px; -ms-transform: rotate(180deg); -webkit-transform: rotate(180deg); transform: rotate(180deg); clip-path: polygon(0% 0%, 100% 0%, 100% 102%, 66% 100%);;">
                    <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=131; $i<=147; $i++) {//17 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=115; $i<=130; $i++) {//16 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=100; $i<=114; $i++) {//15 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=86; $i<=99; $i++) {//14 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=73; $i<=85; $i++) {//13 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=61; $i<=72; $i++) {//12 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=50; $i<=60; $i++) {//11 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=40; $i<=49; $i++) {//10 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=31; $i<=39; $i++) {//9 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=23; $i<=30; $i++) {//8 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=16; $i<=22; $i++) {//7 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=10; $i<=15; $i++) {//6 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=5; $i<=9; $i++) { //5?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=1; $i<=4; $i++) { //4?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>

                    </div>
                </div>

                <!-- STANDARD-B 좌측 -->
                <div style="position: absolute; top: 1065px; left: 850px; -ms-transform: rotate(180deg); -webkit-transform: rotate(180deg); transform: rotate(180deg);">
                    <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=252; $i<=259; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=244; $i<=251; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=236; $i<=243; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=228; $i<=235; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=220; $i<=227; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=212; $i<=219; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=204; $i<=211; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=196; $i<=203; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=188; $i<=195; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=180; $i<=187; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=172; $i<=179; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=164; $i<=171; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=156; $i<=163; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=148; $i<=155; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- STANDARD-B 우측 -->
                <div style="position: absolute; top: 1065px; left: 692px; -ms-transform: rotate(180deg); -webkit-transform: rotate(180deg); transform: rotate(180deg);">
                    <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=364; $i<=371; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=356; $i<=363; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=348; $i<=355; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=340; $i<=347; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=332; $i<=339; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=324; $i<=331; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=316; $i<=323; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=308; $i<=315; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=300; $i<=307; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=292; $i<=299; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=284; $i<=291; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=276; $i<=283; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=268; $i<=275; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=260; $i<=267; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- STANDARD-B 우우측 -->
                <div style="position: absolute; top: 1065px; left: 376px; -ms-transform: rotate(180deg); -webkit-transform: rotate(180deg); transform: rotate(180deg); clip-path: polygon(0% 0%, 100% 0%, 35% 100%, 0% 100%);">
                    <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=502; $i<=518; $i++) { //17?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=486; $i<=501; $i++) { //16?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=471; $i<=485; $i++) { //15?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=457; $i<=470; $i++) { //14?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=444; $i<=456; $i++) { //13?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=432; $i<=443; $i++) {//12 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=421; $i<=431; $i++) {//11 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=411; $i<=420; $i++) { //10?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=402; $i<=410; $i++) { //9?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=394; $i<=401; $i++) { //8?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=387; $i<=393; $i++) { //7?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=381; $i<=386; $i++) { //6?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=376; $i<=380; $i++) { //5?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-B" style="flex-direction:row;">
                            <?php for($i=372; $i<=375; $i++) {//4 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-B <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>





                <!--------------------------------------------------------------------------------------------------------------->
                <!----------------------------------------- 오른쪽-하단 :: VIP A -------------------------------------------------------------> 
                <!--------------------------------------------------------------------------------------------------------------->
                
                <!-- VVIP-A -->
                <div style="position: absolute; top: 720px; left: 1100px; -ms-transform: rotate(90deg); -webkit-transform: rotate(90deg); transform: rotate(90deg);">
                    <div class="seat_rows vvip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <div class="seat_row_items" data-row-type="VVIP-A" style="flex-direction:row;">
                            <?php for($i=7; $i<=13; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VVIP-A" style="flex-direction:row;">
                            <?php for($i=1; $i<=6; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                            <div class="seat_row_item vvip_reward" data-choosable="N"><span></span></div>
                        </div>
                    </div>
                </div>

                <!-- VVIP-A 아래대각선 -->
                <div style="position: absolute; top: 840px; left: 1060px; -ms-transform: rotate(135deg); -webkit-transform: rotate(135deg); transform: rotate(135deg);">
                    <div class="seat_rows vvip_border no-margin-bottom" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="VVIP-A" style="flex-direction:row;">
                            <?php for($i=16; $i<=17; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VVIP-A" style="flex-direction:row;">
                            <?php for($i=14; $i<=15; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- VIP-A 좌 -->
                <div style="position: absolute; top: 828px; left: 1215px; -ms-transform: rotate(90deg); -webkit-transform: rotate(90deg); transform: rotate(90deg);">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                            <?php for($i=1; $i<=1; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                        </div>
                    </div>
                </div>

                <!-- VIP-A 우 -->
                <div style="position: absolute; top: 713px; left: 1170px; -ms-transform: rotate(90deg); -webkit-transform: rotate(90deg); transform: rotate(90deg);">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                            <?php for($i=0; $i<=7; $i++) { ?>
                                <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                            <?php for($i=10; $i<=17; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                            <?php for($i=2; $i<=9; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- VIP-A 아래대각선 -->
                <div style="position: absolute; top: 875px; left: 1070px; -ms-transform: rotate(135deg); -webkit-transform: rotate(135deg); transform: rotate(135deg);">
                    <div class="seat_rows vip_border no-margin-bottom" style="row-gap:4px; z-index:1;padding: 5px; align-items: center;">
                        <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <?php for($i=20; $i<=21; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <?php for($i=18; $i<=19; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                        </div>
                    </div>
                </div>


                <!-- Standard-A 아래 -->
                <div style="position: absolute; top: 640px; left: 1337px; -ms-transform: rotate(90deg); -webkit-transform: rotate(90deg); transform: rotate(90deg);">
                    <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row;">
                            <?php for($i=57; $i<=64; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row;">
                            <?php for($i=49; $i<=56; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row;">
                            <?php for($i=41; $i<=48; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row;">
                            <?php for($i=33; $i<=40; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row;">
                            <?php for($i=25; $i<=32; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row;">
                            <?php for($i=17; $i<=24; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row;">
                            <?php for($i=9; $i<=16; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row;">
                            <?php for($i=1; $i<=8; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- Standard-A 아래아래 -->
                <div style="position: absolute; top: 816px; left: 1319px; -ms-transform: rotate(90deg); -webkit-transform: rotate(90deg); transform: rotate(90deg);">
                    <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row;">
                            <?php for($i=109; $i<=118; $i++) {//10 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row;">
                            <?php for($i=100; $i<=108; $i++) {//9 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row;">
                            <?php for($i=92; $i<=99; $i++) {//8 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row;">
                            <?php for($i=85; $i<=91; $i++) {//7 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row;">
                            <?php for($i=79; $i<=84; $i++) {//6 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row;">
                            <?php for($i=74; $i<=78; $i++) {//5 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row;">
                            <?php for($i=70; $i<=73; $i++) {//4 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row;">
                            <?php for($i=67; $i<=69; $i++) {//3 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- Standard-A 아래대각선 -->
                <div style="z-index:2; position: absolute; top: 890px; left: 1140px; -ms-transform: rotate(135deg); -webkit-transform: rotate(135deg); transform: rotate(135deg); clip-path: polygon(90% 0%, 20% 0%, 20% 70%, 40% 100%, 60% 100%,80% 90%, 100% 20%); ">
                    <div class="seat_rows no-margin-bottom" style="row-gap:4px; z-index:1;padding: 5px; align-items: center;">
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row;">
                            <?php for($i=229; $i<=237; $i++) {//9 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row; margin-left: 20px;">
                            <?php for($i=219; $i<=228; $i++) { //10?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row; margin-left: 60px;">
                            <?php for($i=207; $i<=218; $i++) {//12 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row; margin-left: 60px;">
                            <?php for($i=195; $i<=206; $i++) {//12 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row; margin-left: 45px;">
                            <?php for($i=184; $i<=194; $i++) {//11 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row; margin-left: 45px;">
                            <?php for($i=173; $i<=183; $i++) {//11 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row; margin-left: 30px;">
                            <?php for($i=163; $i<=172; $i++) {//10 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row; margin-left: 30px;">
                            <?php for($i=153; $i<=162; $i++) {//10 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row; margin-left: 30px;">
                            <?php for($i=145; $i<=152; $i++) {//8 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row; margin-left: 30px;">
                            <?php for($i=137; $i<=144; $i++) {//8 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row;">
                            <?php for($i=131; $i<=136; $i++) {//6 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row;">
                            <?php for($i=125; $i<=130; $i++) {//6 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row;">
                            <?php for($i=121; $i<=124; $i++) {//4 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-A" style="flex-direction:row;">
                            <?php for($i=119; $i<=120; $i++) { //2?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-A <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>



    
                <!--------------------------------------------------------------------------------------------------------------->
                <!----------------------------------------- 오른쪽-상단 :: VIP E -------------------------------------------------------------> 
                <!--------------------------------------------------------------------------------------------------------------->
                
                <div style="position: absolute; top: 1300px; -ms-transform: rotateX(180deg); -webkit-transform: rotateX(180deg); transform: rotateX(180deg);">
                    <!-- VVIP-E -->
                    <div style="position: absolute; top: 720px; left: 1100px; -ms-transform: rotate(90deg); -webkit-transform: rotate(90deg); transform: rotate(90deg);">
                        <div class="seat_rows vvip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                            <div class="seat_row_items" data-row-type="VVIP-E" style="flex-direction:row;">
                                <?php for($i=7; $i<=13; $i++) { ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                                <?php } ?>
                            </div>
                            <div class="seat_row_items" data-row-type="VVIP-E" style="flex-direction:row;">
                                <?php for($i=1; $i<=6; $i++) { ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                                <?php } ?>
                                <div class="seat_row_item vvip_reward" data-choosable="N"><span></span></div>
                            </div>
                        </div>
                    </div>


                    <!-- VIP-E 좌 -->
                    <div style="position: absolute; top: 826px; left: 1215px; -ms-transform: rotate(90deg); -webkit-transform: rotate(90deg); transform: rotate(90deg);">
                        <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                            <div class="seat_row_items" data-row-type="VIP-E" style="flex-direction:row;">
                                <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                                <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                                <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            </div>
                            <div class="seat_row_items" data-row-type="VIP-E" style="flex-direction:row;">
                                <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                                <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                                <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            </div>
                            <div class="seat_row_items" data-row-type="VIP-E" style="flex-direction:row;">
                                <?php for($i=1; $i<=1; $i++) { ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                                <?php } ?>
                                <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                                <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            </div>
                        </div>
                    </div>

                    <!-- VIP-E 우 -->
                    <div style="position: absolute; top: 714px; left: 1170px; -ms-transform: rotate(90deg); -webkit-transform: rotate(90deg); transform: rotate(90deg);">
                        <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                            <div class="seat_row_items" data-row-type="VIP-E" style="flex-direction:row;">
                                <?php for($i=0; $i<=7; $i++) { ?>
                                    <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                                <?php } ?>
                            </div>
                            <div class="seat_row_items" data-row-type="VIP-E" style="flex-direction:row;">
                                <?php for($i=10; $i<=17; $i++) { ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                                <?php } ?>
                            </div>
                            <div class="seat_row_items" data-row-type="VIP-E" style="flex-direction:row;">
                                <?php for($i=2; $i<=9; $i++) { ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>


                    <!-- STANDARD-E 아래 -->
                    <div style="position: absolute; top: 640px; left: 1337px; -ms-transform: rotate(90deg); -webkit-transform: rotate(90deg); transform: rotate(90deg);">
                        <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                            <div class="seat_row_items" data-row-type="STANDARD-E" style="flex-direction:row;">
                                <?php for($i=57; $i<=64; $i++) { ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                                <?php } ?>
                            </div>
                            <div class="seat_row_items" data-row-type="STANDARD-E" style="flex-direction:row;">
                                <?php for($i=49; $i<=56; $i++) { ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                                <?php } ?>
                            </div>
                            <div class="seat_row_items" data-row-type="STANDARD-E" style="flex-direction:row;">
                                <?php for($i=41; $i<=48; $i++) { ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                                <?php } ?>
                            </div>
                            <div class="seat_row_items" data-row-type="STANDARD-E" style="flex-direction:row;">
                                <?php for($i=33; $i<=40; $i++) { ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                                <?php } ?>
                            </div>
                            <div class="seat_row_items" data-row-type="STANDARD-E" style="flex-direction:row;">
                                <?php for($i=25; $i<=32; $i++) { ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                                <?php } ?>
                            </div>
                            <div class="seat_row_items" data-row-type="STANDARD-E" style="flex-direction:row;">
                                <?php for($i=17; $i<=24; $i++) { ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                                <?php } ?>
                            </div>
                            <div class="seat_row_items" data-row-type="STANDARD-E" style="flex-direction:row;">
                                <?php for($i=9; $i<=16; $i++) { ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                                <?php } ?>
                            </div>
                            <div class="seat_row_items" data-row-type="STANDARD-E" style="flex-direction:row;">
                                <?php for($i=1; $i<=8; $i++) { ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <!-- STANDARD-E 아래아래 -->
                    <div style="position: absolute; top: 814px; left: 1319px; -ms-transform: rotate(90deg); -webkit-transform: rotate(90deg); transform: rotate(90deg);">
                        <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                            
                            <div class="seat_row_items" data-row-type="STANDARD-E" style="flex-direction:row;">
                                <?php for($i=109; $i<=118; $i++) {//10 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                                <?php } ?>
                            </div>
                            <div class="seat_row_items" data-row-type="STANDARD-E" style="flex-direction:row;">
                                <?php for($i=100; $i<=108; $i++) {//9 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                                <?php } ?>
                            </div>
                            <div class="seat_row_items" data-row-type="STANDARD-E" style="flex-direction:row;">
                                <?php for($i=92; $i<=99; $i++) {//8 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                                <?php } ?>
                            </div>
                            <div class="seat_row_items" data-row-type="STANDARD-E" style="flex-direction:row;">
                                <?php for($i=85; $i<=91; $i++) {//7 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                                <?php } ?>
                            </div>
                            <div class="seat_row_items" data-row-type="STANDARD-E" style="flex-direction:row;">
                                <?php for($i=79; $i<=84; $i++) {//6 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                                <?php } ?>
                            </div>
                            <div class="seat_row_items" data-row-type="STANDARD-E" style="flex-direction:row;">
                                <?php for($i=74; $i<=78; $i++) {//5 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                                <?php } ?>
                            </div>
                            <div class="seat_row_items" data-row-type="STANDARD-E" style="flex-direction:row;">
                                <?php for($i=70; $i<=73; $i++) {//4 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                                <?php } ?>
                            </div>
                            <div class="seat_row_items" data-row-type="STANDARD-E" style="flex-direction:row;">
                                <?php for($i=67; $i<=69; $i++) {//3 ?>
                                    <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- VVIP-E 위 대각선 -->
                <div style="position: absolute; top: 370px; left: 1060px; -ms-transform: rotate(45deg); -webkit-transform: rotate(45deg); transform: rotate(45deg);">
                    <div class="seat_rows vvip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: center;">
                        <div class="seat_row_items" data-row-type="VVIP-E" style="flex-direction:row;">
                            <div class="seat_row_item vvip_reward" data-choosable="N"><span></span></div>
                            <?php for($i=16; $i<=17; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                            <div class="seat_row_item vvip_reward" data-choosable="N"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VVIP-E" style="flex-direction:row;">
                            <?php for($i=14; $i<=15; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- VIP-E 위 대각선 -->
                <div style="position: absolute; top: 300px; left: 1099px; -ms-transform: rotate(45deg); -webkit-transform: rotate(45deg); transform: rotate(45deg);">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: center;">
                        <div class="seat_row_items" data-row-type="VIP-E" style="flex-direction:row;">
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-E" style="flex-direction:row;">
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <?php for($i=20; $i<=21; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-E" style="flex-direction:row;">
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                            <?php for($i=18; $i<=19; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                            <div class="seat_row_item vip_reward" data-choosable="N"><span></span></div>
                        </div>
                    </div>
                </div>

                <!-- STANDARD-E 위 대각선 -->
                <div style="position: absolute; top: 103px; left: 1172px; -ms-transform: rotate(45deg); -webkit-transform: rotate(45deg); transform: rotate(45deg); z-index:2;">
                    <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px; align-items: center;">
                        
                        <div class="seat_row_items" data-row-type="STANDARD-E" style="flex-direction:row;">
                            <?php for($i=175; $i<=184; $i++) {//10 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-E" style="flex-direction:row;">
                            <?php for($i=165; $i<=174; $i++) {//9 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-E" style="flex-direction:row;">
                            <?php for($i=155; $i<=164; $i++) {//8 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-E" style="flex-direction:row;">
                            <?php for($i=147; $i<=154; $i++) {//7 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-E" style="flex-direction:row;">
                            <?php for($i=139; $i<=146; $i++) {//6 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-E" style="flex-direction:row;">
                            <?php for($i=131; $i<=138; $i++) {//5 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-E" style="flex-direction:row;">
                            <?php for($i=125; $i<=130; $i++) {//4 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-E" style="flex-direction:row;">
                            <?php for($i=121; $i<=124; $i++) {//3 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-E" style="flex-direction:row;">
                            <?php for($i=119; $i<=120; $i++) {//2 ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-E <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>


                <!--------------------------------------------------------------------------------------------------------------->
                <!----------------------------------------- 입장로 :: F구역 -------------------------------------------------------------> 
                <!--------------------------------------------------------------------------------------------------------------->


                <!-- Standard-F 좌측 -->
                <div style="position: absolute; top: 430px; left: 1600px; -ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); transform: rotate(0deg);">
                    <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="STANDARD-F" style="flex-direction:row;">
                            <?php for($i=81; $i<=96; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-F <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-F" style="flex-direction:row;">
                            <?php for($i=65; $i<=80; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-F <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-F" style="flex-direction:row;">
                            <?php for($i=49; $i<=64; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-F <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-F" style="flex-direction:row;">
                            <?php for($i=33; $i<=48; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-F <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-F" style="flex-direction:row;">
                            <?php for($i=17; $i<=32; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-F <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-F" style="flex-direction:row;">
                            <?php for($i=1; $i<=16; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-F <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- Standard-F 우측 -->
                <div style="position: absolute;top: 430px; left: 1905px; -ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); transform: rotate(0deg);">
                    <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="STANDARD-F" style="flex-direction:row;">
                            <?php for($i=177; $i<=192; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-F <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-F" style="flex-direction:row;">
                            <?php for($i=161; $i<=176; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-F <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-F" style="flex-direction:row;">
                            <?php for($i=145; $i<=160; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-F <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-F" style="flex-direction:row;">
                            <?php for($i=129; $i<=144; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-F <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-F" style="flex-direction:row;">
                            <?php for($i=113; $i<=128; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-F <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-F" style="flex-direction:row;">
                            <?php for($i=97; $i<=112; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-F <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>


                <!--------------------------------------------------------------------------------------------------------------->
                <!----------------------------------------- 입장로 :: G구역 -------------------------------------------------------------> 
                <!--------------------------------------------------------------------------------------------------------------->

                <!-- Standard-G 좌측 -->
                <div style="position: absolute; top: 700px; left: 1600px; -ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); transform: rotate(0deg);">
                    <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="STANDARD-G" style="flex-direction:row;">
                            <?php for($i=81; $i<=96; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-G <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-G" style="flex-direction:row;">
                            <?php for($i=65; $i<=80; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-G <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-G" style="flex-direction:row;">
                            <?php for($i=49; $i<=64; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-G <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-G" style="flex-direction:row;">
                            <?php for($i=33; $i<=48; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-G <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-G" style="flex-direction:row;">
                            <?php for($i=17; $i<=32; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-G <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-G" style="flex-direction:row;">
                            <?php for($i=1; $i<=16; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-G <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- Standard-G 우측 -->
                <div style="position: absolute;top: 700px; left: 1905px; -ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); transform: rotate(0deg);">
                    <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <div class="seat_row_items" data-row-type="STANDARD-G" style="flex-direction:row;">
                            <?php for($i=177; $i<=192; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-G <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-G" style="flex-direction:row;">
                            <?php for($i=161; $i<=176; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-G <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-G" style="flex-direction:row;">
                            <?php for($i=145; $i<=160; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-G <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-G" style="flex-direction:row;">
                            <?php for($i=129; $i<=144; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-G <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-G" style="flex-direction:row;">
                            <?php for($i=113; $i<=128; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-G <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                        <div class="seat_row_items" data-row-type="STANDARD-G" style="flex-direction:row;">
                            <?php for($i=97; $i<=112; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="STANDARD-G <?php echo $i;?>"><span><?php if ($is_admin) {  echo $i;  } ?></span></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>


                <!--------------------------------------------------------------------------------------------------------------->
                <!----------------------------------------- 라인 -------------------------------------------------------------> 
                <!--------------------------------------------------------------------------------------------------------------->
                
                    <!-- <span style="position: absolute; top: 130px; left:20px; font:size 0.8rem; font-weight:bold;">블랙코너</span>
                    <span style="position: absolute; top: 155px; left:20px; font:size 0.8rem; font-weight:bold;">입장동선</span>

                    <div style="position:absolute;">
                        <div style="position: absolute; border: 2px dashed #777777; z-index:15; top: 150px; width: 140px;"></div>
                        <div style="position: absolute; border: 2px dashed #777777; z-index:15; top: 210px; left:120px; width: 160px;  transform: rotate(45deg);"></div>
                        <div style="position: absolute; border: 2px dashed #777777; z-index:15; top: 295px; left:190px; width: 80px; transform: rotate(-45deg);"></div>
                        <div style="position: absolute; border: 2px dashed #777777; z-index:15; top: 415px; left: 110px; width: 180px; transform: rotate(90deg);"></div>
                        <div style="position: absolute; border: 2px dashed #777777; z-index:15; top: 555px; left: 180px; width: 140px; transform: rotate(45deg);"></div>
                        <div style="position: absolute; border: 2px dashed #777777; z-index:15; top: 605px; left: 300px; width: 70px; transform: rotate(0deg);"></div>
                        <div style="position: absolute; border: 2px dashed #777777; z-index:15; top: 593px; left: 360px; width: 25px; transform: rotate(-90deg);"></div>
                    </div>

                    <span style="position: absolute; top: 130px; right:20px; font:size 0.8rem; font-weight:bold;">화이트코너</span>
                    <span style="position: absolute; top: 155px; right:20px; font:size 0.8rem; font-weight:bold;">입장동선</span>

                    <div style=" position:absolute;-ms-transform: scale(-1, 1); -webkit-transform: scale(-1, 1); transform: scale(-1, 1); left: 800px;">
                        <div style="position: absolute; border: 2px dashed #bbbbbb; z-index:15; top: 150px; width: 140px;"></div>
                        <div style="position: absolute; border: 2px dashed #bbbbbb; z-index:15; top: 210px; left:120px; width: 160px;  transform: rotate(45deg);"></div>
                        <div style="position: absolute; border: 2px dashed #bbbbbb; z-index:15; top: 295px; left:190px; width: 80px; transform: rotate(-45deg);"></div>
                        <div style="position: absolute; border: 2px dashed #bbbbbb; z-index:15; top: 415px; left: 110px; width: 180px; transform: rotate(90deg);"></div>
                        <div style="position: absolute; border: 2px dashed #bbbbbb; z-index:15; top: 555px; left: 180px; width: 140px; transform: rotate(45deg);"></div>
                        <div style="position: absolute; border: 2px dashed #bbbbbb; z-index:15; top: 605px; left: 300px; width: 70px; transform: rotate(0deg);"></div>
                        <div style="position: absolute; border: 2px dashed #bbbbbb; z-index:15; top: 593px; left: 360px; width: 25px; transform: rotate(-90deg);"></div>
                    </div> -->
                <!-- </canvas> -->

                <div style="width:680px; height:80px; position:absolute; top:613px; left:1561px; background-color:#bbbbbb; display:flex; justify-content:center; align-items:center; font-size:2rem; font-weight:bold;">
                                STAGE
                </div>
                <div style="width:480px; height:80px; position:absolute; top:613px; left:2008px; background-color:#bbbbbb; display:flex; justify-content:center; align-items:center; font-size:2rem; font-weight:bold;
                -ms-transform: rotate(90deg); -webkit-transform: rotate(90deg); transform: rotate(90deg); ">
                                STAGE
                </div>
                <span style="position: absolute; top: 618px; left:1300px; font-size: 1.5rem; font-weight:bold;">선수입장동선</span>

            </div>
        
    </div>
    <div class="seat_choice_popup_footer">
        <a href="#" class="seat_choice_popup_close_btn" style="width:100px">닫기</a>
        <button type="button" class="seat_choice_btn" style="width:auto" disabled>좌석 선택</button>
    </div>
</div>




<script>
    <?php if ($is_admin) { ?>
    const canvas = document.getElementById('myCanvas');
    const ctx = canvas.getContext("2d");
    ctx.beginPath();

    ctx.moveTo(1380, 650);
    ctx.lineTo(950, 650);
    ctx.lineTo(950, 500);
    ctx.lineTo(808, 360);
    ctx.lineTo(550, 360);
    ctx.lineTo(403, 508);
    ctx.lineTo(403, 750);
    ctx.lineTo(498, 845);
    
    ctx.lineWidth = 3;
    ctx.setLineDash([10]);
    ctx.stroke();

    const x2 = 498;
    const y2 = 845;
    const x1 = 403;
    const y1 = 750;    
    var radians = Math.atan((y2-y1)/(x2-x1));
    var headRadians = radians + ((x2>x1)?-90:90)*Math.PI/180;    
    drawArrowhead(ctx,x2,y2,headRadians);

    ctx.beginPath();
    ctx.moveTo(1380, 0);
    ctx.lineTo(1380, 1530);
    ctx.lineWidth = 1;
    ctx.setLineDash([]);
    ctx.stroke();


    ctx.beginPath();
    ctx.moveTo(1052, 0);
    ctx.lineTo(867, 348);
    ctx.lineTo(485, 348);
    ctx.lineTo(300, 0);

    ctx.moveTo(867, 348);
    ctx.lineTo(873,400);
    ctx.lineTo(962,495);
    ctx.lineTo(962,620);
    ctx.lineTo(1380,620);

    ctx.moveTo(1380, 680);
    ctx.lineTo(962, 680);
    ctx.lineTo(962, 770);
    ctx.lineTo(862, 860);
    ctx.lineTo(874, 906);

    ctx.moveTo(1240, 1530);
    ctx.lineTo(874, 906);
    ctx.lineTo(482, 906);
    ctx.lineTo(150, 1530);

    ctx.moveTo(482, 906);
    ctx.lineTo(502, 866);
    ctx.lineTo(387, 755);
    ctx.lineTo(387, 415);
    ctx.lineTo(0, 200);
    

    
    
    ctx.stroke();



     <? } ?>
    
    //함수: 화살표 그리기
    function drawArrowhead(ctx, x, y, radians) {
        ctx.save();
        ctx.beginPath();
        ctx.translate(x, y);
        ctx.rotate(radians);
        ctx.moveTo(0, 0);
        ctx.lineTo(-15, -15);
        ctx.lineTo(15, -15);
        ctx.closePath();
        ctx.restore();
        ctx.fill();
        
    }


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
                // kakaoPixel('8339806502848870616').viewCart();
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


        //MUST CHECK .1
        if ($('#it_option_1').length) {
            $('#it_option_1 option').each(function() {
                var obj = $(this);
                var objValue = obj.val();

                if (objValue) {
                    if (objValue.indexOf('일반석,44000') !== -1){
                        obj.attr('data-seat', 'STANDARD');
                    }
                    else if (objValue.indexOf('VIP,144000') !== -1){
                        obj.attr('data-seat', 'VIP');
                    }
                    else if (objValue.indexOf('VVIP,265000') !== -1){
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
                    
                    $(".seat_choice_btn").text(obj.attr("title")+" 선택")
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

                if (rowType === "STANDARD") {
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


                var it_id = $('input[name="it_id[]"]').val();

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
                        // MUST CHECK .2
                        if (data === 'Y'){
                            alert('이미 결제가 완료된 좌석입니다.');
                            location.reload();
                            return false;
                        }else{
                            var optionSelectObj = $('#it_option_1');
                            var selectedOptionObj = '';

                            if (rowType === 'VVIP-A' || rowType === 'VVIP-B' || rowType === 'VVIP-C' || rowType === 'VVIP-D' || rowType === 'VVIP-E' || rowType === 'VVIP-F' || rowType === 'VVIP-G'){
                                selectedOptionObj = optionSelectObj.find('option[data-seat="VVIP"]').prop('selected', true);
                            }else if (rowType === 'VIP-A' || rowType === 'VIP-B' || rowType === 'VIP-C' || rowType === 'VIP-D' || rowType === 'VIP-E' || rowType === 'VIP-F' || rowType === 'VIP-G'){
                                selectedOptionObj = optionSelectObj.find('option[data-seat="VIP"]').prop('selected', true);
                            }else if (rowType === 'STANDARD-A' || rowType === 'STANDARD-B' || rowType === 'STANDARD-C' || rowType === 'STANDARD-D' || rowType === 'STANDARD-E' || rowType === 'STANDARD-F' || rowType === 'STANDARD-G'){
                                selectedOptionObj = optionSelectObj.find('option[data-seat="STANDARD"]').prop('selected', true);
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
                            // if (rowType == 'STANDARD') {
                            //     newSetNumber = ' ';
                            // }

                            
                            let seatTypeArr = [];
                            $.each($('input[name="rowType"]'),function(index,item){
                                seatTypeArr.push($(item).val());
                            });
                            let seatNumberArr = [];
                            $.each($('input[name="newSetNumber'),function(index,item){
                                seatNumberArr.push($(item).val());
                            });


                            for(let i=0; i<seatTypeArr.length; i++){
                                if(rowType != 'STANDARD'){
                                        if(seatTypeArr[i] + seatNumberArr[i] === rowType + setNumber){
                                        alert("이미 선택된 좌석입니다.");
                                        return false;
                                    }
                                }
                            }

                            if(seatTypeArr.length >= max_qty){
                                alert("최대 구매 가능한 수량은 "+max_qty+"개 입니다.");
                                return false;
                            }

                            var optionResultHtml = ''+
                                '<ul id="sit_opt_added">'+
                                '   <li class="sit_opt_list">'+
                                '       <input type="hidden" name="io_type[' + it_id + '][]" value="0">'+
                                '       <input type="hidden" name="io_id[' + it_id + '][]" value="' + optionValue_split[0] + '">'+
                                '       <input type="hidden" name="io_value[' + it_id + '][]" value="좌석: ' + optionValue_split[0] + '">'+
                                '       <input type="hidden" name="rowType" value="' + rowType + '">'+
                                '       <input type="hidden" name="newSetNumber" value="' + newSetNumber + '">'+
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

                            optionResultObj.append(optionResultHtml);
                            //MUST CHECK 3
                            let basicPrice = 35000;
                            let totalPrice = 0;
                            $.each($(".sit_opt_list").find(".io_price"), function(index,item){
                                totalPrice += (basicPrice+Number($(item).val()));
                            });

                            $('#sit_tot_price').text(`총 ${number_format(totalPrice)}원`);


                            //기존 좌석/번호 배열에 방금 추가한 좌석/번호까지 포함해서 Array 취득
                            seatTypeArr = [];
                            $.each($('input[name="rowType"]'),function(index,item){
                                seatTypeArr.push($(item).val());
                            });
                            seatNumberArr = [];
                            $.each($('input[name="newSetNumber'),function(index,item){
                                seatNumberArr.push($(item).val());
                            });

                            var seatRowType = seatTypeArr.join("|");
                            var seatNumber = seatNumberArr.join("|");

                            $('input[name="seat_row_type"]').val(seatRowType);
                            $('input[name="seat_number"]').val(seatNumber);

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
                        seat_row_type_arr = value.od_seat_row_type.split("|");
                        seat_number_arr = value.od_seat_number.split("|");

                        if (seat_row_type_arr && seat_number_arr) {
                            seat_row_type_arr.forEach(function(seat_row_type, index){
                                let seat_number = seat_number_arr[index]
                                seatObj = $('.seat_row_items[data-row-type="' + seat_row_type + '"]').find('.seat_row_item[data-seat-number="' + seat_number + '"]');

                                if (seatObj.length) {
                                    
                                    <?php if ($is_admin) { ?>
                                        if(seatObj.attr('data-choosable') === 'N' || seatObj.attr('data-choosable') === 'D'){
                                            console.log("RED!")
                                            seatObj.attr('data-choosable', 'D')
                                        }else{
                                            seatObj.attr('data-choosable', 'N');
                                        }
                                    <? }else{ ?>
                                        seatObj.attr('data-choosable', 'N');
                                    <? } ?>
                                    
                                    
                                }
                            });
                        }
                    });
                }
            },
            error : function(request, status, error){
                alert("false ajax :"+request.responseText);
            }
        });


        $.ajax({
            url: ajax_url + "/ajax.action.php",
            type: "POST",
            data: {"action":"get_blocked_seat"},
            dataType: "json",
            async: true,
            cache: false,
            success: function(data, textStatus) {
                if (data.disabled_seat) {
                    var disabledSeat = data.disabled_seat;

                    var ct_seat_row_type = '';
                    var ct_seat_number = '';
                    var seatObj = '';

                    disabledSeat.forEach(function(value, idx) {
                        ct_seat_row_type = value.ct_seat_row_type;
                        ct_seat_number = value.ct_seat_number;
                        if (ct_seat_row_type && ct_seat_row_type) {
                            seatObj = $('.seat_row_items[data-row-type="' + ct_seat_row_type + '"]').find('.seat_row_item[data-seat-number="' + ct_seat_number + '"]');
 
                            if (seatObj.length) {
                                <?php if ($is_admin) { ?>
                                    if(seatObj.attr('data-choosable') === 'N' || seatObj.attr('data-choosable') === 'D'){
                                        console.log("RED!")
                                        seatObj.attr('data-choosable', 'D')
                                    }else{
                                        seatObj.attr('data-choosable', 'N');
                                    }
                                <? }else{ ?>
                                    seatObj.attr('data-choosable', 'N');
                                <? } ?>
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