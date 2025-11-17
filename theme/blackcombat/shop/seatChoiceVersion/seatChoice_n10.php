<div class="seat_choice_popup_wrap">
    <div class="seat_choice_popup_header">
        <h1 class="seat_choice_popup_header_title">좌석 선택하기</h1>
    </div>
    <div class="seat_choice_popup_body">
        <div class="movieLayoutContainer" data-product-id="<?php echo $it_id; ?>">

            <img class="cage_img_3" src="<?php echo G5_THEME_IMG_URL; ?>/product/cage_img_4.png" />
            

            <!--------------------------------------------------------------------------------------------------------------->
            <!----------------------------------------- 상단 :: VIP D -------------------------------------------------------------> 
            <!--------------------------------------------------------------------------------------------------------------->
            <div style="text-align: center; position: absolute; top: 130px; left: 540px; -ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); transform: rotate(0deg);">
                <!-- 상단_1 : VIP-D -->
                <div style="text-align: center; position: absolute;">
                    <!-- title -->
                    <div style="display: flex; flex-direction: column; align-items: center; line-height: 1;">
                        <span style="color: black; font-size: 0.7rem; font-weight:bold">V I P - D ( 6 0 )</span>
                    </div>
                    <!-- 가운데 -->
                    <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px;">
                        <div class="seat_row_items" data-row-type="VIP-D" style="flex-direction:row;">
                            <?php for($i=15; $i<=28; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-D <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-D" style="flex-direction:row;">
                            <?php for($i=1; $i<=14; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-D <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                    </div>
                    <!-- 왼쪽꺾임 -->
                    <div class="seat_rows" style="row-gap:4px; z-index:1; padding: 5px; position:absolute; top:15px; left:-100px;
                                                    -ms-transform: rotate(-45deg); -webkit-transform: rotate(-45deg); transform: rotate(-45deg);">
                        <div class="seat_row_items" data-row-type="VIP-D" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="44" title="VIP-D 44"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="43" title="VIP-D 43"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="42" title="VIP-D 42"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="41" title="VIP-D 41"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-D" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="40" title="VIP-D 40"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="39" title="VIP-D 39"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="38" title="VIP-D 38"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="37" title="VIP-D 37"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-D" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="36" title="VIP-D 36"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="35" title="VIP-D 35"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="34" title="VIP-D 34"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="33" title="VIP-D 33"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-D" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="32" title="VIP-D 32"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="31" title="VIP-D 31"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="30" title="VIP-D 30"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="29" title="VIP-D 29"><span></span></div>
                        </div>
                    </div>
                    <!-- 오른쪽꺾임 -->
                    <div class="seat_rows" style="row-gap:4px; z-index:1; padding: 5px; position:absolute; top:15px; right:-100px;
                                                    -ms-transform: rotate(45deg); -webkit-transform: rotate(45deg); transform: rotate(45deg);">
                        <div class="seat_row_items" data-row-type="VIP-D" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="60" title="VIP-D 60"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="59" title="VIP-D 59"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="58" title="VIP-D 58"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="57" title="VIP-D 57"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-D" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="56" title="VIP-D 56"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="55" title="VIP-D 55"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="54" title="VIP-D 54"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="53" title="VIP-D 53"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-D" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="52" title="VIP-D 52"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="51" title="VIP-D 51"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="50" title="VIP-D 50"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="49" title="VIP-D 49"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-D" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="48" title="VIP-D 48"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="47" title="VIP-D 47"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="46" title="VIP-D 46"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="45" title="VIP-D 45"><span></span></div>
                        </div>
                    </div>
                </div>
                <!-- 상단_2 : VVIP-D -->
                <div style="text-align: center; position: absolute; top: 60px;">
                    <!-- title -->
                    <div style="display: flex; flex-direction: column; align-items: center; line-height: 1;">
                        <span style="color: black; font-size: 0.7rem; font-weight:bold">V V I P - D ( 3 6 )</span>
                    </div>
                    <!-- 가운데 -->
                    <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px;">
                        <div class="seat_row_items" data-row-type="VVIP-D" style="flex-direction:row;">
                            <?php for($i=15; $i<=28; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-D <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VVIP-D" style="flex-direction:row;">
                            <?php for($i=1; $i<=14; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-D <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                    </div>
                    <!-- 왼쪽꺾임 -->
                    <div class="seat_rows" style="row-gap:4px; z-index:1; padding: 5px; position:absolute; top:35px; left:-50px;
                                                    -ms-transform: rotate(-45deg); -webkit-transform: rotate(-45deg); transform: rotate(-45deg);">
                        <div class="seat_row_items" data-row-type="VVIP-D" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="32" title="VVIP-D 32"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="31" title="VVIP-D 31"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VVIP-D" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="30" title="VVIP-D 30"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="29" title="VVIP-D 29"><span></span></div>
                        </div>
                    </div>
                    <!-- 오른쪽꺾임 -->
                    <div class="seat_rows" style="row-gap:4px; z-index:1; padding: 5px; position:absolute; top:35px; right:-50px;
                                                    -ms-transform: rotate(45deg); -webkit-transform: rotate(45deg); transform: rotate(45deg);">
                        <div class="seat_row_items" data-row-type="VVIP-D" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="36" title="VVIP-D 36"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="35" title="VVIP-D 35"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VVIP-D" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="34" title="VVIP-D 34"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="33" title="VVIP-D 33"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
            



            <!--------------------------------------------------------------------------------------------------------------->
            <!----------------------------------------- 하단 :: VIP B -------------------------------------------------------------> 
            <!--------------------------------------------------------------------------------------------------------------->
            <div style="text-align: center; position: absolute; top: 790px; left: 805px; -ms-transform: rotate(180deg); -webkit-transform: rotate(180deg); transform: rotate(180deg);">
                <!-- 하단_1 : VIP-B -->
                <div style="text-align: center; position: absolute;">
                    <!-- title -->
                    <div style="display: flex; flex-direction: column; align-items: center; line-height: 1;">
                        <span style="color: black; font-size: 0.7rem; font-weight:bold; -ms-transform: rotate(180deg); -webkit-transform: rotate(180deg); transform: rotate(180deg);">
                        V I P - B ( 4 4 )
                        </span>
                    </div>
                    <!-- 가운데 -->
                    <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px;">
                        <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                            <?php for($i=15; $i<=28; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-B <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                            <?php for($i=1; $i<=14; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-B <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                    </div>
                    <!-- 하단1 : 왼쪽꺾임 -->
                    <div class="seat_rows" style="row-gap:4px; z-index:1; padding: 5px; position:absolute; top:45px; left:-90px;
                                                    -ms-transform: rotate(-45deg); -webkit-transform: rotate(-45deg); transform: rotate(-45deg);">
                        <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="36" title="VIP-B 36"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="35" title="VIP-B 35"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="34" title="VIP-B 34"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="33" title="VIP-B 33"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="32" title="VIP-B 32"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="31" title="VIP-B 31"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="30" title="VIP-B 30"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="29" title="VIP-B 29"><span></span></div>
                        </div>
                    </div>
                    <!-- 하단1 : 오른쪽꺾임 -->
                    <div class="seat_rows" style="row-gap:4px; z-index:1; padding: 5px; position:absolute; top:45px; right:-90px;
                                                    -ms-transform: rotate(45deg); -webkit-transform: rotate(45deg); transform: rotate(45deg);">
                        <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="44" title="VIP-B 44"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="43" title="VIP-B 43"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="42" title="VIP-B 42"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="41" title="VIP-B 41"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-B" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="40" title="VIP-B 40"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="39" title="VIP-B 39"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="38" title="VIP-B 38"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="37" title="VIP-B 37"><span></span></div>
                        </div>
                    </div>
                </div>
                <!-- 하단_2 : VVIP-B -->
                <div style="text-align: center; position: absolute; top: 60px;">
                    <!-- title -->
                    <div style="display: flex; flex-direction: column; align-items: center; line-height: 1;">
                        <span style="color: black; font-size: 0.7rem; font-weight:bold; -ms-transform: rotate(180deg); -webkit-transform: rotate(180deg); transform: rotate(180deg);">
                        V V I P - B ( 3 6 )
                        </span>
                    </div>
                    <!-- 가운데 -->
                    <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px;">
                        <div class="seat_row_items" data-row-type="VVIP-B" style="flex-direction:row;">
                            <?php for($i=15; $i<=28; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-B <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VVIP-B" style="flex-direction:row;">
                            <?php for($i=1; $i<=14; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-B <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                    </div>
                    <!-- 하단2 : 왼쪽꺾임 -->
                    <div class="seat_rows" style="row-gap:4px; z-index:1; padding: 5px; position:absolute; top:35px; left:-50px;
                                                    -ms-transform: rotate(-45deg); -webkit-transform: rotate(-45deg); transform: rotate(-45deg);">
                        <div class="seat_row_items" data-row-type="VVIP-B" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="32" title="VVIP-B 32"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="31" title="VVIP-B 31"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VVIP-B" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="30" title="VVIP-B 30"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="29" title="VVIP-B 29"><span></span></div>
                        </div>
                    </div>
                    <!-- 하단2 : 오른쪽꺾임 -->
                    <div class="seat_rows" style="row-gap:4px; z-index:1; padding: 5px; position:absolute; top:35px; right:-50px;
                                                    -ms-transform: rotate(45deg); -webkit-transform: rotate(45deg); transform: rotate(45deg);">
                        <div class="seat_row_items" data-row-type="VVIP-B" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="36" title="VVIP-B 36"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="35" title="VVIP-B 35"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VVIP-B" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="34" title="VVIP-B 34"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="33" title="VVIP-B 33"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>





            <!--------------------------------------------------------------------------------------------------------------->
            <!----------------------------------------- 왼쪽 :: VIP C -------------------------------------------------------------> 
            <!--------------------------------------------------------------------------------------------------------------->
            <div style="text-align: center; position: absolute; top: 590px; left: 340px; -ms-transform: rotate(-90deg); -webkit-transform: rotate(-90deg); transform: rotate(-90deg);">
                <!-- 왼쪽_1 : VIP-C -->
                <div style="text-align: center; position: absolute;">
                    <!-- title -->
                    <div style="display: flex; flex-direction: column; align-items: center; line-height: 1;">
                        <span style="color: black; font-size: 0.7rem; font-weight:bold">V I P - C ( 5 2 ) </span>
                    </div>
                    <!-- 가운데 -->
                    <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px;">
                        <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                            <?php for($i=15; $i<=28; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-C <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                            <?php for($i=1; $i<=14; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-C <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                    </div>
                    <!-- 왼쪽1 : 왼쪽꺾임 -->
                    <div class="seat_rows" style="row-gap:4px; z-index:1; padding: 5px; position:absolute; top:45px; left:-90px;
                                                    -ms-transform: rotate(-45deg); -webkit-transform: rotate(-45deg); transform: rotate(-45deg);">
                        <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="36" title="VIP-C 36"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="35" title="VIP-C 35"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="34" title="VIP-C 34"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="33" title="VIP-C 33"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="32" title="VIP-C 32"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="31" title="VIP-C 31"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="30" title="VIP-C 30"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="29" title="VIP-C 29"><span></span></div>
                        </div>
                    </div>
                    <!-- 왼쪽1 : 오른쪽꺾임 -->
                    <div class="seat_rows" style="row-gap:4px; z-index:1; padding: 5px; position:absolute; top:15px; right:-100px;
                                                    -ms-transform: rotate(45deg); -webkit-transform: rotate(45deg); transform: rotate(45deg);">
                        <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="52" title="VIP-C 52"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="51" title="VIP-C 51"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="50" title="VIP-C 50"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="49" title="VIP-C 49"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="48" title="VIP-C 48"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="47" title="VIP-C 47"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="46" title="VIP-C 46"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="45" title="VIP-C 45"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="44" title="VIP-C 44"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="43" title="VIP-C 43"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="42" title="VIP-C 42"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="41" title="VIP-C 41"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-C" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="40" title="VIP-C 40"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="39" title="VIP-C 39"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="38" title="VIP-C 38"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="37" title="VIP-C 37"><span></span></div>
                        </div>
                    </div>
                </div>
                <!-- 왼쪽_2 : VVIP-c -->
                <div style="text-align: center; position: absolute; top: 60px;">
                    <!-- title -->
                    <div style="display: flex; flex-direction: column; align-items: center; line-height: 1;">
                        <span style="color: black; font-size: 0.7rem; font-weight:bold">V V I P - C ( 3 6 )</span>
                    </div>
                    <!-- 가운데 -->
                    <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px;">
                        <div class="seat_row_items" data-row-type="VVIP-C" style="flex-direction:row;">
                            <?php for($i=15; $i<=28; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-C <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VVIP-C" style="flex-direction:row;">
                            <?php for($i=1; $i<=14; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-C <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                    </div>
                    <!-- 왼쪽2 : 왼쪽꺾임 -->
                    <div class="seat_rows" style="row-gap:4px; z-index:1; padding: 5px; position:absolute; top:35px; left:-50px;
                                                    -ms-transform: rotate(-45deg); -webkit-transform: rotate(-45deg); transform: rotate(-45deg);">
                        <div class="seat_row_items" data-row-type="VVIP-C" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="36" title="VVIP-C 36"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="35" title="VVIP-C 35"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VVIP-C" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="34" title="VVIP-C 34"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="33" title="VVIP-C 33"><span></span></div>
                        </div>
                    </div>
                    <!-- 왼쪽2 : 오른쪽꺾임 -->
                    <div class="seat_rows" style="row-gap:4px; z-index:1; padding: 5px; position:absolute; top:35px; right:-50px;
                                                    -ms-transform: rotate(45deg); -webkit-transform: rotate(45deg); transform: rotate(45deg);">
                        <div class="seat_row_items" data-row-type="VVIP-C" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="32" title="VVIP-C 32"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="31" title="VVIP-C 31"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VVIP-C" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="30" title="VVIP-C 30"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="29" title="VVIP-C 29"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>




            <!--------------------------------------------------------------------------------------------------------------->
            <!----------------------------------------- 오른쪽 :: VIP A -------------------------------------------------------------> 
            <!--------------------------------------------------------------------------------------------------------------->
            <div style="text-align: center; position: absolute; top: 330px; left: 1005px; -ms-transform: rotate(90deg); -webkit-transform: rotate(90deg); transform: rotate(90deg);">
                <!-- 오른쪽_1 : VIP-A -->
                <div style="text-align: center; position: absolute;">
                    <!-- title -->
                    <div style="display: flex; flex-direction: column; align-items: center; line-height: 1;">
                        <span style="color: black; font-size: 0.7rem; font-weight:bold">V I P - A ( 5 2 )</span>
                    </div>
                    <!-- 가운데 -->
                    <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px;">
                        <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                            <?php for($i=15; $i<=28; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-A <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                            <?php for($i=1; $i<=14; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VIP-A <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                    </div>
                    <!-- 오른쪽1 : 왼쪽꺾임 -->
                    <div class="seat_rows" style="row-gap:4px; z-index:1; padding: 5px; position:absolute; top:15px; left:-100px;
                                                    -ms-transform: rotate(-45deg); -webkit-transform: rotate(-45deg); transform: rotate(-45deg);">
                        <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="44" title="VIP-A 44"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="43" title="VIP-A 43"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="42" title="VIP-A 42"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="41" title="VIP-A 41"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="40" title="VIP-A 40"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="39" title="VIP-A 39"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="38" title="VIP-A 38"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="37" title="VIP-A 37"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="36" title="VIP-A 36"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="35" title="VIP-A 35"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="34" title="VIP-A 34"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="33" title="VIP-A 33"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="32" title="VIP-A 32"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="31" title="VIP-A 31"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="30" title="VIP-A 30"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="29" title="VIP-A 29"><span></span></div>
                        </div>
                    </div>
                    <!-- 오른쪽1 : 오른쪽꺾임 -->
                    <div class="seat_rows" style="row-gap:4px; z-index:1; padding: 5px; position:absolute; top:45px; right:-90px;
                                                    -ms-transform: rotate(45deg); -webkit-transform: rotate(45deg); transform: rotate(45deg);">
                        <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="52" title="VIP-A 52"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="51" title="VIP-A 51"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="50" title="VIP-A 50"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="49" title="VIP-A 49"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VIP-A" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="48" title="VIP-A 48"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="47" title="VIP-A 47"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="46" title="VIP-A 46"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="45" title="VIP-A 45"><span></span></div>
                        </div>
                    </div>
                </div>
                <!-- 오른쪽2 : VVIP-A -->
                <div style="text-align: center; position: absolute; top: 60px;">
                    <!-- title -->
                    <div style="display: flex; flex-direction: column; align-items: center; line-height: 1;">
                        <span style="color: black; font-size: 0.7rem; font-weight:bold">V V I P - A ( 3 6 )</span>
                    </div>
                    <!-- 가운데 -->
                    <div class="seat_rows" style="row-gap:4px; z-index:1;padding: 5px;">
                        <div class="seat_row_items" data-row-type="VVIP-A" style="flex-direction:row;">
                            <?php for($i=15; $i<=28; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-A <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                        <div class="seat_row_items" data-row-type="VVIP-A" style="flex-direction:row;">
                            <?php for($i=1; $i<=14; $i++) { ?>
                                <div class="seat_row_item" data-choosable="Y" data-seat-number="<?php echo $i; ?>" title="VVIP-A <?php echo $i;?>"><span></span></div>
                            <?php } // for End ?>
                        </div>
                    </div>
                    <!-- 오른쪽2 : 왼쪽꺾임 -->
                    <div class="seat_rows" style="row-gap:4px; z-index:1; padding: 5px; position:absolute; top:35px; left:-50px;
                                                    -ms-transform: rotate(-45deg); -webkit-transform: rotate(-45deg); transform: rotate(-45deg);">
                        <div class="seat_row_items" data-row-type="VVIP-A" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="32" title="VVIP-A 32"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="31" title="VVIP-A 31"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VVIP-A" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="30" title="VVIP-A 30"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="29" title="VVIP-A 29"><span></span></div>
                        </div>
                    </div>
                    <!-- 오른쪽2 : 오른쪽꺾임 -->
                    <div class="seat_rows" style="row-gap:4px; z-index:1; padding: 5px; position:absolute; top:35px; right:-50px;
                                                    -ms-transform: rotate(45deg); -webkit-transform: rotate(45deg); transform: rotate(45deg);">
                        <div class="seat_row_items" data-row-type="VVIP-A" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="36" title="VVIP-A 36"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="35" title="VVIP-A 35"><span></span></div>
                        </div>
                        <div class="seat_row_items" data-row-type="VVIP-A" style="flex-direction:row;">
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="34" title="VVIP-A 34"><span></span></div>
                            <div class="seat_row_item" data-choosable="Y" data-seat-number="33" title="VVIP-A 33"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>


            <!--------------------------------------------------------------------------------------------------------------->
            <!----------------------------------------- 라인 -------------------------------------------------------------> 
            <!--------------------------------------------------------------------------------------------------------------->
            <div style="width: 800px; height: 800px; border: solid 2px black; position: absolute; left: 270px; top:50px; z-index: -1;">
                <span style="position: absolute; top: 130px; left:20px; font:size 0.8rem; font-weight:bold;">블랙코너</span>
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
                </div>
            </div>


            <!--------------------------------------------------------------------------------------------------------------->
            <!----------------------------------------- 2층 일반석 -----------------------------------------------------------> 
            <!--------------------------------------------------------------------------------------------------------------->
            <div style="width: 260px; height: 1070px; position: absolute; left: 0px; top:50px; background-color:#dddddd;"></div>
            <div style="width: 260px; height: 1070px; position: absolute; left: 1080px; top:50px; background-color:#dddddd; padding-top:250px;  text-align:center">
                <p style="font-size: 16px; color: #ff6262; font-size: 1rem; margin-bottom: 10px; text-align:center">※ 2F 일반석은 자율석이며 좌석 지정이 불가능합니다. </p>
                <span style="color: black; font-size: 0.7rem; font-weight:bold">2F 일 반 석</span>
                <div class="seat_row_items" data-row-type="STANDARD" style="display:flex; display: flex; justify-content: center; align-items: center; margin-top:10px;">
                    <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="Standard"><span></span></div>
                </div></div>
            <div style="width: 840px; height: 260px; position: absolute; left: 250px; top:860px; z-index: -1; background-color:#dddddd"></div>

        </div>
    </div>
    <div class="seat_choice_popup_footer">
        <a href="#" class="seat_choice_popup_close_btn">닫기</a>
        <button type="button" class="seat_choice_btn" disabled>좌석 선택</button>
    </div>
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


        //MUST CHECK .1
        if ($('#it_option_1').length) {
            $('#it_option_1 option').each(function() {
                var obj = $(this);
                var objValue = obj.val();

                if (objValue) {
                    if (objValue.indexOf('일반석,0') !== -1){
                        obj.attr('data-seat', 'STANDARD');
                    }
                    else if (objValue.indexOf('VIP,10') !== -1){
                        obj.attr('data-seat', 'VIP');
                    }
                    else if (objValue.indexOf('VVIP,20') !== -1){
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
                    
                    console.log(e);
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

                            if (rowType === 'VVIP-A' || rowType === 'VVIP-B' || rowType === 'VVIP-C' || rowType === 'VVIP-D'){
                                selectedOptionObj = optionSelectObj.find('option[data-seat="VVIP"]').prop('selected', true);
                            }else if (rowType === 'VIP-A' || rowType === 'VIP-B' || rowType === 'VIP-C' || rowType === 'VIP-D'){
                                selectedOptionObj = optionSelectObj.find('option[data-seat="VIP"]').prop('selected', true);
                            }else if (rowType === 'STANDARD'){
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
                            let basicPrice = 100;
                            let totalPrice = 0;
                            $.each($(".sit_opt_list").find(".io_price"), function(index,item){
                                totalPrice += (100+Number($(item).val()));
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

                            console.log(1);
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

                                if (seatObj.length && seat_row_type !== 'STANDARD') {
                                    seatObj.attr('data-choosable', 'N');
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

                            if (seatObj.length && ct_seat_row_type !== 'STANDARD') {
                                seatObj.attr('data-choosable', 'N');
                                // seatObj.addClass("temp");
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