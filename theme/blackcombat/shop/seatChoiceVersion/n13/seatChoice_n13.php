<style>
    .seat_row_item {
        margin:unset;
    }
    .standard_border .seat_row_item{
        border: 1px solid #aaaaaa;
    }
    .silver_border .seat_row_item{
        border: 1px solid #008000;
    }

    /* .seat_row_item[title*="undivide"]{
        background-color:#8a8a8a !important;
    } */
    .seat_row_item[title*="undivide"] span{
        background-color:#8a8a8a !important;
    }
    .seat_row_item[title*="blank"]{
        border:none !important;
    }

    .vvip_border .seat_row_item{
        border: 1px solid #00c3ff;
    }

    .gold_border .seat_row_item{
        border: 1px solid orange;
    }

    .vip_border .seat_row_item {
        border: 1px solid #b991f2;
    }
    /* . .seat_row_item {
        border: 1px solid #ffc9f1;
    } */
    .tinum_border .seat_row_item{
        border: 1px solid #9bbb59;
    }

    .seat_rows{
        flex-direction: column;
        row-gap:6px;
    }
    .seat_rows.column{
        flex-direction: row;
        column-gap:6px;
    }

    .seat_row_items{
        row-gap:unset;
        gap:3px;
    }
    .seat_row_items.row{
        flex-direction:row;
    }
    .seat_row_items.column{
        flex-direction:column;
    }
    .seat_row_items.row-reverse{
        flex-direction:row-reverse;
    }

    .no-margin-bottom .seat_row_items{
        margin-bottom: 5px;
    }

    .cage_img_3 {top:958px; left:1000px; display:block; width:480px; height:auto; margin:0; padding:0;}

    .seat_row_items span{
        font-size:0.6rem;
    }

    .movieLayoutContainer{
        min-width:2490px; /* 캔버스 width + 캔버스 margin x 2 */
    }

    .objArea{
        position:absolute; 
        background-color:#bbbbbb; 
        display:flex;
        justify-content:center;
        align-items:center;
        font-size:2rem;
        font-weight:bold;
    }

    .watermark{
        position:absolute;
        background-position: center;
        background-repeat: no-repeat;
        background-size: contain;
        pointer-events: none;
        z-index: 10;
        opacity: 0.1;
    }

    .watermark.cheer_black{
        background-image: url('https://www.blackcombat-official.com/theme/blackcombat/img/cheer_black.png');
    }

    .watermark.cheer_white{
        background-image: url('https://www.blackcombat-official.com/theme/blackcombat/img/cheer_white.png');
    }



</style>

<?php
function add_row($start, $end, $row_type, $is_admin, $style, $direction) {
    global $member;
    // if($direction == "row"){
    //     echo "<div class=\"seat_row_items\" data-row-type=\"$row_type\" style=\"$style\">";
    // }else if($direction == "column"){
    //     echo "<div class=\"seat_row_items column\" data-row-type=\"$row_type\" style=\"$style\">";
    // }
    echo "<div class=\"seat_row_items $direction\" data-row-type=\"$row_type\" style=\"$style\">";
    

    for ($i = $start; $i <= $end; $i++) {
        $adminSpan = $is_admin || $member['mb_id'] == "seatChecker"? $i : "";
        echo "<div class=\"seat_row_item\" data-choosable=\"Y\" data-seat-number=\"$i\" title=\"$row_type $i\">";
        echo "<span>$adminSpan</span>";
        echo "</div>";
    }
    echo '</div>';
}

function add_items($start, $end, $row_type, $is_admin, $style) {
    global $member;
    for ($i = $start; $i <= $end; $i++) {
        if($row_type == 'blank'){
            echo "<div class=\"seat_row_item\" title=\"$row_type\" style=\"$style\"></div>";
        }else{
            $adminSpan = $is_admin  || $member['mb_id'] == "seatChecker" ? $i : "";
            echo "<div class=\"seat_row_item\" data-choosable=\"Y\" data-seat-number=\"$i\" title=\"$row_type $i\" style=\"$style\">";
            echo "<span>$adminSpan</span>";
            echo "</div>";
        }
        
    }
}

?>

<div class="seat_choice_popup_body">
    <div class="movieLayoutContainer" data-product-id="<?php echo $it_id; ?>">
    
        <canvas id="myCanvas" width="2290" height="2420" style="border: solid 2px black; position: absolute; left: 180px; top:0px; z-index:1;"></canvas>
    
        <img class="cage_img_3" src="<?php echo G5_THEME_IMG_URL; ?>/product/cage_img_4.png" />

            
            


            <!--------------------------------------------------------------------------------------------------------------->
            <!----------------------------------------- 일반석 / 이코노미  유형 : 11시부터 U자 그리면서 구현  -------------------------------------------------------------> 
            <!--------------------------------------------------------------------------------------------------------------->
            
            <!-- 안내문구 -->
            <!-- <div style="position:absolute; display:flex; flex-direction:column; top:1700px; left:135px; z-index:3; gap:20px;">
                <p style="text-align:center; font-size: 16px; font-weight:bold; color: red; font-size: 0.8rem; width:400px; margin-bottom: 20px;">※ 2F 전 좌석은 자율석이며 좌석 지정이 불가능합니다. </p>
            </div>
            <div style="position:absolute; display:flex; flex-direction:column; top:700px; left:1935px; z-index:3; gap:20px;">
                <p style="text-align:center; font-size: 16px; font-weight:bold; color: red; font-size: 0.8rem; width:400px; margin-bottom: 20px;">※ 2F 전 좌석은 자율석이며 좌석 지정이 불가능합니다. </p>
            </div>
            <div style="position:absolute; display:flex; flex-direction:column; top:1700px; left:1935px; z-index:3; gap:20px;">
                <p style="text-align:center; font-size: 16px; font-weight:bold; color: red; font-size: 0.8rem; width:400px; margin-bottom: 20px;">※ 2F 전 좌석은 자율석이며 좌석 지정이 불가능합니다. </p>
            </div> -->

            <!-- 11시 빈블럭 -->

            <!-- 10시 일반석 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 470px; left: 232px; height: 387px; width: 320px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F STANDARD(A)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="STANDARD(A)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="STANDARD(A)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 9시 골드 -->
            <div style="position:absolute; display:flex; flex-direction:column; top:910px; left:484px; z-index:3; gap:20px;">
                <div class="seat_rows gold_border column" style=" z-index:1;padding: 5px; align-items: end; background-color:#FFF0D7">
                        <? add_row(45, 66, 'GOLD-B',$is_admin,"","column"); ?>
                        <? add_row(23, 44, 'GOLD-B',$is_admin,"","column"); ?>
                        <? add_row(1, 22, 'GOLD-B',$is_admin,"","column"); ?>
                </div>
                <!-- ※ 패키지 상품의 경우 구매 상세페이지에서 반드시 내용을 확인하세요. -->
                <!-- <div style="display:flex; margin-left:10px; justify-content:center;">
                    <span style="color: black; font-size: 0.7rem; font-weight:bold; flex:1 1 130px">GOLD(PKG)</span>
                    <div class="seat_row_items gold_border" data-row-type="GOLD(PKG)" style="flex:2 1 30px">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="GOLD(PKG)" onclick="alert('※ 패키지 상품의 경우 구매 상세페이지에서 반드시 내용을 확인하세요.');"><span></span></div>
                    </div>
                </div>
                <div style="display:flex; margin-left:10px; justify-content:center;">
                    <span style="color: black; font-size: 0.7rem; font-weight:bold; flex:1 1 130px">GOLD</span>
                    <div class="seat_row_items gold_border" data-row-type="GOLD" style="flex:2 1 30px">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="GOLD" onclick="alert('※ 패키지 상품의 경우 구매 상세페이지에서 반드시 내용을 확인하세요.');"><span></span></div>
                    </div>
                </div> -->
            </div>
            <!-- <div style="position:absolute; display:flex; flex-direction:column; top:1050px; left:1943px; z-index:3; gap:20px;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #007700; font-size: 1.1rem; margin-bottom: 30px;">2F<br>GOLD ZONE<br></p>
                <p style="margin-left:10px; font-size: 16px; font-weight:bold; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 2F 전 좌석은<br>자율석이며<br>좌석 지정이<br>불가능합니다. </p>
            </div> -->

            <!-- 9시 실버 -->
            <div style="position:absolute; display:flex; flex-direction:column; top:910px; left:232px; width: 200px; height: 419px; z-index:3; gap:20px; padding:20px; background-color:#dddddd;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F SILVER(B) ZONE<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <!-- <div style="display:flex; margin-left:10px; justify-content:center; margin-top:30px;">
                    <span style="color: black; font-size: 0.7rem; font-weight:bold; flex:1 1 130px">SILVER-PKG</span>
                    <div class="seat_row_items silver_border" data-row-type="SILVER(PKG)" style="flex:2 1 30px">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="SILVER(PKG)" onclick="alert('※ 패키지 상품의 경우 구매 상세페이지에서 반드시 내용을 확인하세요.');"><span></span></div>
                    </div>
                </div> -->
                <div style="display:flex; justify-content:center;">
                    <div class="seat_row_items silver_border" data-row-type="SILVER(B)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="SILVER(B)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 8시 일반석 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 1368px; left: 232px; height: 387px; width: 320px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F STANDARD(B)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="STANDARD(B)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="STANDARD(B)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 7시 이코노미석 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 1801px; left: 232px; height: 387px; width: 320px; z-index:3; gap:20px; padding:30px; background-color:#b2ddef;
                        clip-path: polygon(100% 0%, 0% 0%, 0% 100%, 100% 50%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 7시 이코노미석 ( 하단 ■ □ □ □ ) -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 2050px; left: 420px; height: 320px; width: 387px; z-index:3; gap:20px; padding:30px; padding-left:185px; background-color:#b2ddef;
                        clip-path: polygon(100% 0%, 50% 0%, 0% 100%, 100% 100%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(I)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(I)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(I)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 6시 좌측 일반석 ( 하단 □ ■ □ □ )  -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 2050px; left: 859px; height: 320px; width: 354px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F STANDARD(C)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="STANDARD(C)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="STANDARD(C)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 6시 우측 일반석 ( 하단 □ □ ■ □ )  -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 2050px; left: 1259px; height: 320px; width: 354px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F STANDARD(D)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="STANDARD(D)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="STANDARD(D)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 5시 이코노미석 ( 하단 □ □ □ ■  )  -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 2050px; left: 1674px; height: 320px; width: 387px; z-index:3; gap:20px; padding:30px; padding-right:185px; background-color:#b2ddef;
                        clip-path: polygon(50% 0%, 0% 0%, 0% 100%, 100% 100%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(J)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(J)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(J)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 5시 이코노미석 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 1801px; left: 1930px; height: 387px; width: 320px; z-index:3; gap:20px; padding:30px; background-color:#b2ddef;
                        clip-path: polygon(100% 0%, 0% 0%, 0% 50%, 100% 100%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(K)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(K)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(K)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 4시 일반석 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 1338px; left: 1930px; height: 417px; width: 320px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F STANDARD(E)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="STANDARD(E)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="STANDARD(E)"><span></span></div>
                    </div>
                </div>
            </div>

             <!-- 3시 골드 -->
             <div style="position:absolute; display:flex; flex-direction:column; top:910px; left:1930px; z-index:3; gap:20px;">
                <div class="seat_rows gold_border column" style=" z-index:1;padding: 5px; align-items: end;">
                    <? add_row(1, 20, 'GOLD-W',$is_admin,"","column"); ?>
                    <? add_row(23, 42, 'GOLD-W',$is_admin,"","column"); ?>
                    <? add_row(45, 64, 'GOLD-W',$is_admin,"","column"); ?>
                    <? add_row(67, 86, 'GOLD-W',$is_admin,"","column"); ?>
                    <? add_row(87, 106, 'GOLD-W',$is_admin,"","column"); ?>
                </div>
            </div>

            <!-- 9시 실버 -->
            <div style="position:absolute; display:flex; flex-direction:column; top:910px; left:2077px; width: 170px; height: 389px; z-index:3; gap:20px; padding:20px; background-color:#dddddd;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F SILVER(W) ZONE<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <!-- <div style="display:flex; margin-left:10px; justify-content:center; margin-top:30px;">
                    <span style="color: black; font-size: 0.7rem; font-weight:bold; flex:1 1 130px">SILVER-PKG</span>
                    <div class="seat_row_items silver_border" data-row-type="SILVER(PKG)" style="flex:2 1 30px">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="SILVER(PKG)" onclick="alert('※ 패키지 상품의 경우 구매 상세페이지에서 반드시 내용을 확인하세요.');"><span></span></div>
                    </div>
                </div> -->
                <div style="display:flex; justify-content:center;">
                    <div class="seat_row_items silver_border" data-row-type="SILVER(W)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="SILVER(W)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 10시 일반석 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 470px; left: 1930px; height: 387px; width: 320px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F STANDARD(F)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="STANDARD(F)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="STANDARD(F)"><span></span></div>
                    </div>
                </div>
            </div>


            
            <!-- <div class="objArea" style="width:417px; height:1370px; left:135px; top:1590px;  padding:10px; z-index:2; font-size:1.2rem;">
            </div> -->
            
            <!-- 9시방향 골드/실버 -->
            <!-- <div class="objArea" style="width:270px; height:500px; left:135px; top:1040px;  padding:10px; z-index:2; font-size:1.2rem; background-color:#aaaaff">
            </div>
            <div class="objArea" style="width:114px; height:500px; left:438px; top:1040px;  padding:10px; z-index:2; font-size:1.2rem; background-color:#99ff99">
            </div> -->



            <!-- <div class="objArea" style="width:1388px; height:465px; left:550px; top:2495px; padding:10px; z-index:2; font-size:1.2rem;">
            </div>


            <div class="objArea" style="width:417px; height:1370px; left:1936px; top:1590px; padding:10px; z-index:2; font-size:1.2rem;">
            </div>
            <div class="objArea" style="width:417px; height:500px; left:1936px; top:500px; padding:10px; z-index:2; font-size:1.2rem;">
            </div> -->

            <!-- 3시방향 골드/실버 -->
            <!-- <div class="objArea" style="width:270px; height:500px; left:2082px; top:1040px;  padding:10px; z-index:2; font-size:1.2rem; background-color:#aaaaff">
            </div>
            <div class="objArea" style="width:114px; height:500px; left:1936px; top:1040px;  padding:10px; z-index:2; font-size:1.2rem; background-color:#99ff99">
            </div> -->


            

            <!--------------------------------------------------------------------------------------------------------------->
            <!----------------------------------------- VVIP 유형 : 11시부터 반시계 방향으로 구현  -------------------------------------------------------------> 
            <!--------------------------------------------------------------------------------------------------------------->
            
            <!-- VVIP-B 10시-->
            <div style="position: absolute; z-index:1; top: 660px; left: 650px;">
                <div class="seat_rows vvip_border column" style="z-index:1;padding: 5px; align-items: start;">
                    <? add_row(164, 191, 'VVIP-B',$is_admin,"","column"); ?>
                    <div class="seat_row_items column" data-row-type="VVIP-B"><? add_items(139, 146, 'VVIP-B',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(147, 163, 'VVIP-B',$is_admin,""); ?></div>
                    <div class="seat_row_items column" data-row-type="VVIP-B"><? add_items(114, 121, 'VVIP-B',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(122, 138, 'VVIP-B',$is_admin,""); ?></div>
                    <div class="seat_row_items column" data-row-type="VVIP-B"><? add_items(89, 96, 'VVIP-B',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(97, 113, 'VVIP-B',$is_admin,""); ?></div>
                    <div class="seat_row_items column" data-row-type="VVIP-B"><? add_items(64, 71, 'VVIP-B',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(72, 88, 'VVIP-B',$is_admin,""); ?></div>
                    <div class="seat_row_items column" data-row-type="VVIP-B"><? add_items(39, 46, 'VVIP-B',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(47, 63, 'VVIP-B',$is_admin,""); ?></div>
                    <div class="seat_row_items column" data-row-type="VVIP-B">
                        <? add_items(20, 27, 'VVIP-B',$is_admin,""); ?> 
                        <? add_items(0, 1, 'blank',$is_admin,""); ?> 
                        <? add_items(28, 38, 'VVIP-B',$is_admin,""); ?>
                        <? add_items(0, 5, 'blank',$is_admin,""); ?>
                    </div>
                    <div class="seat_row_items column" data-row-type="VVIP-B">
                        <? add_items(1, 8, 'VVIP-B',$is_admin,""); ?>
                        <? add_items(0, 1, 'blank',$is_admin,""); ?>
                        <? add_items(9, 19, 'VVIP-B',$is_admin,""); ?>
                        <? add_items(0, 5, 'blank',$is_admin,""); ?>
                    </div>
                </div>
            </div>
            <!-- BLACKTINUM-B 10시-->
            <div style="position: absolute; z-index:1; top: 1060px; left: 782px;">
                <div class="seat_rows tinum_border column" style="z-index:1;padding: 5px; align-items: start;">
                    <? add_row(7, 12, 'BLACKTINUM-B',$is_admin,"","column"); ?>
                    <? add_row(1, 6, 'BLACKTINUM-B',$is_admin,"","column"); ?>
                </div>
            </div>
            
            
            <!-- VVIP-B 8시-->
            <div style="position: absolute; z-index:1; top: 1210px; left: 650px;">
            <div class="seat_rows vvip_border column" style="z-index:1;padding: 5px; align-items: start;">
                    <? add_row(348, 374, 'VVIP-B',$is_admin,"","column"); ?>
                    <div class="seat_row_items column" data-row-type="VVIP-B"><? add_items(0, 0, 'blank',$is_admin,""); ?> <? add_items(324, 339, 'VVIP-B',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(340, 347, 'VVIP-B',$is_admin,""); ?>  </div>
                    <div class="seat_row_items column" data-row-type="VVIP-B"><? add_items(0, 0, 'blank',$is_admin,""); ?> <? add_items(300, 315, 'VVIP-B',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(316, 323, 'VVIP-B',$is_admin,""); ?>  </div>
                    <div class="seat_row_items column" data-row-type="VVIP-B"><? add_items(0, 0, 'blank',$is_admin,""); ?> <? add_items(276, 291, 'VVIP-B',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(292, 299, 'VVIP-B',$is_admin,""); ?>  </div>
                    <div class="seat_row_items column" data-row-type="VVIP-B"><? add_items(0, 0, 'blank',$is_admin,""); ?> <? add_items(252, 267, 'VVIP-B',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(268, 275, 'VVIP-B',$is_admin,""); ?>  </div>
                    <div class="seat_row_items column" data-row-type="VVIP-B"><? add_items(0, 0, 'blank',$is_admin,""); ?> <? add_items(228, 243, 'VVIP-B',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(244, 251, 'VVIP-B',$is_admin,""); ?>  </div>
                    <div class="seat_row_items column" data-row-type="VVIP-B">
                        <? add_items(0, 6, 'blank',$is_admin,""); ?>
                        <? add_items(210, 219, 'VVIP-B',$is_admin,""); ?>
                        <? add_items(0, 1, 'blank',$is_admin,""); ?> 
                        <? add_items(220, 227, 'VVIP-B',$is_admin,""); ?> 
                    </div>
                    <div class="seat_row_items column" data-row-type="VVIP-B">
                        <? add_items(0, 6, 'blank',$is_admin,""); ?>
                        <? add_items(192, 201, 'VVIP-B',$is_admin,""); ?>
                        <? add_items(0, 1, 'blank',$is_admin,""); ?>
                        <? add_items(202, 209, 'VVIP-B',$is_admin,""); ?>
                    </div>
                </div>
            </div>
             <!-- BLACKTINUM-B 8시-->
             <div style="position: absolute; z-index:1; top: 1227px; left: 782px;">
                <div class="seat_rows tinum_border column" style="z-index:1;padding: 5px; align-items: start;">
                    <? add_row(19, 24, 'BLACKTINUM-B',$is_admin,"","column"); ?>
                    <? add_row(13, 18, 'BLACKTINUM-B',$is_admin,"","column"); ?>
                </div>
            </div>
          

            <!-- VVIP-W 2시-->
            <div style="position: absolute; z-index:1; top: 660px; left: 1643px;">
                <div class="seat_rows vvip_border column" style="z-index:1;padding: 5px; align-items: start;">
                    <div class="seat_row_items column" data-row-type="VVIP-W">
                        <? add_items(1, 8, 'VVIP-W',$is_admin,""); ?>
                        <? add_items(0, 1, 'blank',$is_admin,""); ?>
                        <? add_items(9, 19, 'VVIP-W',$is_admin,""); ?>
                        <? add_items(0, 5, 'blank',$is_admin,""); ?>
                    </div>
                    <div class="seat_row_items column" data-row-type="VVIP-W">
                        <? add_items(20, 27, 'VVIP-W',$is_admin,""); ?> 
                        <? add_items(0, 1, 'blank',$is_admin,""); ?> 
                        <? add_items(28, 38, 'VVIP-W',$is_admin,""); ?>
                        <? add_items(0, 5, 'blank',$is_admin,""); ?>
                    </div>
                    <div class="seat_row_items column" data-row-type="VVIP-W"><? add_items(39, 46, 'VVIP-W',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(47, 63, 'VVIP-W',$is_admin,""); ?></div>
                    <div class="seat_row_items column" data-row-type="VVIP-W"><? add_items(64, 71, 'VVIP-W',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(72, 88, 'VVIP-W',$is_admin,""); ?></div>
                    <div class="seat_row_items column" data-row-type="VVIP-W"><? add_items(89, 96, 'VVIP-W',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(97, 113, 'VVIP-W',$is_admin,""); ?></div>
                    <div class="seat_row_items column" data-row-type="VVIP-W"><? add_items(114, 121, 'VVIP-W',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(122, 138, 'VVIP-W',$is_admin,""); ?></div>
                    <div class="seat_row_items column" data-row-type="VVIP-W"><? add_items(139, 146, 'VVIP-W',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(147, 163, 'VVIP-W',$is_admin,""); ?></div>
                    <? add_row(164, 191, 'VVIP-W',$is_admin,"","column"); ?>
                </div>
            </div>
            <!-- BLACKTINUM-W 2시-->
            <div style="position: absolute; z-index:1; top: 1060px; left: 1643px;">
                <div class="seat_rows tinum_border column" style="z-index:1;padding: 5px; align-items: start;">
                    <? add_row(1, 6, 'BLACKTINUM-W',$is_admin,"","column"); ?>
                    <? add_row(7, 12, 'BLACKTINUM-W',$is_admin,"","column"); ?>
                </div>
            </div>
            
            
            <!-- VVIP-W 4시-->
            <div style="position: absolute; z-index:1; top: 1210px; left: 1643px;">
                <div class="seat_rows vvip_border column" style="z-index:1;padding: 5px; align-items: start;">
                    <div class="seat_row_items column" data-row-type="VVIP-W">
                        <? add_items(0, 0, 'blank',$is_admin,""); ?>
                        <? add_items(13, 18, 'BLACKTINUM-W',$is_admin,"border: 1px solid #9bbb59;"); ?>
                        <? add_items(192, 201, 'VVIP-W',$is_admin,""); ?>
                        <? add_items(0, 1, 'blank',$is_admin,""); ?>
                        <? add_items(202, 209, 'VVIP-W',$is_admin,""); ?>
                    </div>
                    <div class="seat_row_items column" data-row-type="VVIP-W">
                        <? add_items(0, 0, 'blank',$is_admin,""); ?>
                        <? add_items(19, 24, 'BLACKTINUM-W',$is_admin,"border: 1px solid #9bbb59;"); ?>
                        <? add_items(210, 219, 'VVIP-W',$is_admin,""); ?>
                        <? add_items(0, 1, 'blank',$is_admin,""); ?> 
                        <? add_items(220, 227, 'VVIP-W',$is_admin,""); ?> 
                    </div>
                    <div class="seat_row_items column" data-row-type="VVIP-W"><? add_items(0, 0, 'blank',$is_admin,""); ?> <? add_items(228, 243, 'VVIP-W',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(244, 251, 'VVIP-W',$is_admin,""); ?>  </div>
                    <div class="seat_row_items column" data-row-type="VVIP-W"><? add_items(0, 0, 'blank',$is_admin,""); ?> <? add_items(252, 267, 'VVIP-W',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(268, 275, 'VVIP-W',$is_admin,""); ?>  </div>
                    <div class="seat_row_items column" data-row-type="VVIP-W"><? add_items(0, 0, 'blank',$is_admin,""); ?> <? add_items(276, 291, 'VVIP-W',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(292, 299, 'VVIP-W',$is_admin,""); ?>  </div>
                    <div class="seat_row_items column" data-row-type="VVIP-W"><? add_items(0, 0, 'blank',$is_admin,""); ?> <? add_items(300, 315, 'VVIP-W',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(316, 323, 'VVIP-W',$is_admin,""); ?>  </div>
                    <div class="seat_row_items column" data-row-type="VVIP-W"><? add_items(0, 0, 'blank',$is_admin,""); ?> <? add_items(324, 339, 'VVIP-W',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(340, 347, 'VVIP-W',$is_admin,""); ?>  </div>
                    <? add_row(348, 374, 'VVIP-W',$is_admin,"","column"); ?>
                </div>
            </div>
             <!-- BLACKTINUM-W 4시-->
             <div style="position: absolute; z-index:1; top: 1227px; left: 1643px;">
                <div class="seat_rows tinum_border column" style="z-index:1;padding: 5px; align-items: start;">
                    <? add_row(13, 18, 'BLACKTINUM-W',$is_admin,"","column"); ?>
                    <? add_row(19, 24, 'BLACKTINUM-W',$is_admin,"","column"); ?>
                </div>
            </div>

             <!--------------------------------------------------------------------------------------------------------------->
            <!----------------------------------------- VIP 유형  -------------------------------------------------------------> 
            <!--------------------------------------------------------------------------------------------------------------->


            <!-- VIP-A ( 상단대각 ■ □ □ □ )-->
            <div style="position: absolute; z-index:1; top: 528px; left: 863px; transform: rotate(-30deg);">
                <div style="position: absolute; z-index:1; top: 0px; left: 0px;">
                    <div class="seat_rows vip_border" style=" z-index:1;padding: 5px; align-items: start;">
                        <? add_row(19, 21, 'VIP-A',$is_admin,"","row-reverse"); ?>
                        <? add_row(16, 18, 'VIP-A',$is_admin,"","row-reverse"); ?>
                        <? add_row(13, 15, 'VIP-A',$is_admin,"","row-reverse"); ?>
                        <? add_row(10, 12, 'VIP-A',$is_admin,"","row-reverse"); ?>
                        <? add_row(7, 9, 'VIP-A',$is_admin,"","row-reverse"); ?>
                        <? add_row(4, 6, 'VIP-A',$is_admin,"","row-reverse"); ?>
                        <? add_row(1, 3, 'VIP-A',$is_admin,"","row-reverse"); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 0px; left: -60px;">
                    <div class="seat_rows vip_border" style=" z-index:1;padding: 5px; align-items: start;">
                        <? add_row(34, 35, 'VIP-A',$is_admin,"","row-reverse"); ?>
                        <? add_row(32, 33, 'VIP-A',$is_admin,"","row-reverse"); ?>
                        <? add_row(30, 31, 'VIP-A',$is_admin,"","row-reverse"); ?>
                        <? add_row(28, 29, 'VIP-A',$is_admin,"","row-reverse"); ?>
                        <? add_row(26, 27, 'VIP-A',$is_admin,"","row-reverse"); ?>
                        <? add_row(24, 25, 'VIP-A',$is_admin,"","row-reverse"); ?>
                        <? add_row(22, 23, 'VIP-A',$is_admin,"","row-reverse"); ?>
                    </div>
                </div>
            </div>


            <!-- VIP-B ( 상단 □ ■ □ □ )-->
            <div style="position: absolute; z-index:1; top: 530px; left: 1095px;">
                <div style="position: absolute; z-index:1; top: 0px; left: 0px;">
                    <div class="seat_rows vip_border" style=" z-index:1;padding: 5px; align-items: end;">
                        <? add_row(32, 38, 'VIP-B',$is_admin,"","row-reverse"); ?>
                        <? add_row(25, 31, 'VIP-B',$is_admin,"","row-reverse"); ?>
                        <? add_row(18, 24, 'VIP-B',$is_admin,"","row-reverse"); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 70px; left: 17px;">
                    <div class="seat_rows vip_border" style=" z-index:1;padding: 5px; align-items: end;">
                        <? add_row(12, 17, 'VIP-B',$is_admin,"","row-reverse"); ?>
                        <? add_row(6, 11, 'VIP-B',$is_admin,"","row-reverse"); ?>
                        <? add_row(1, 5, 'VIP-B',$is_admin,"","row-reverse"); ?>
                    </div>
                </div>
            </div>

            <!-- VIP-C ( 상단 □ □ ■ □ )-->
            <div style="position: absolute; z-index:1; top: 530px; left: 1249px;">
                <div style="position: absolute; z-index:1; top: 0px; left: 0px;">
                    <div class="seat_rows vip_border" style=" z-index:1;padding: 5px; align-items: start;">
                        <? add_row(32, 38, 'VIP-C',$is_admin,"","row-reverse"); ?>
                        <? add_row(25, 31, 'VIP-C',$is_admin,"","row-reverse"); ?>
                        <? add_row(18, 24, 'VIP-C',$is_admin,"","row-reverse"); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 70px; left: 0px;">
                    <div class="seat_rows vip_border" style=" z-index:1;padding: 5px; align-items: start;">
                        <? add_row(12, 17, 'VIP-C',$is_admin,"","row-reverse"); ?>
                        <? add_row(6, 11, 'VIP-C',$is_admin,"","row-reverse"); ?>
                        <? add_row(1, 5, 'VIP-C',$is_admin,"","row-reverse"); ?>
                    </div>
                </div>
            </div>
               

             <!-- VIP-D ( 상단대각 □ □ □ ■ )-->
             <div style="position: absolute; z-index:1; top: 539px; left: 1629px; transform: rotate(30deg);">
                <div style="position: absolute; z-index:1; top: 0px; left: 0px;">
                    <div class="seat_rows vip_border" style=" z-index:1;padding: 5px; align-items: start;">
                        <? add_row(12, 13, 'VIP-D',$is_admin,"","row-reverse"); ?>
                        <? add_row(10, 11, 'VIP-D',$is_admin,"","row-reverse"); ?>
                        <? add_row(8, 9, 'VIP-D',$is_admin,"","row-reverse"); ?>
                        <? add_row(7, 8, 'VIP-D',$is_admin,"","row-reverse"); ?>
                        <? add_row(5, 6, 'VIP-D',$is_admin,"","row-reverse"); ?>
                        <? add_row(3, 4, 'VIP-D',$is_admin,"","row-reverse"); ?>
                        <? add_row(1, 2, 'VIP-D',$is_admin,"","row-reverse"); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 0px; left: -77px;">
                    <div class="seat_rows vip_border" style=" z-index:1;padding: 5px; align-items: start;">
                        <? add_row(33, 35, 'VIP-D',$is_admin,"","row-reverse"); ?>
                        <? add_row(30, 32, 'VIP-D',$is_admin,"","row-reverse"); ?>
                        <? add_row(27, 29, 'VIP-D',$is_admin,"","row-reverse"); ?>
                        <? add_row(24, 26, 'VIP-D',$is_admin,"","row-reverse"); ?>
                        <? add_row(21, 23, 'VIP-D',$is_admin,"","row-reverse"); ?>
                        <? add_row(18, 20, 'VIP-D',$is_admin,"","row-reverse"); ?>
                        <? add_row(15, 17, 'VIP-D',$is_admin,"","row-reverse"); ?>
                    </div>
                </div>
            </div>


            <!-- VIP-E ( 하단 ■ □ □ □ )-->
            <div style="position: absolute; z-index:1; top: 1647px; left: 1032px;">
                <div style="position: absolute; z-index:1; top: 0px; left: 0px;">
                    <div class="seat_rows vip_border" style=" z-index:1;padding: 5px; align-items: end;">
                        <? add_row(1, 2, 'VIP-E',$is_admin,"","row"); ?>
                        <? add_row(3, 5, 'VIP-E',$is_admin,"","row"); ?>
                        <? add_row(6, 9, 'VIP-E',$is_admin,"","row"); ?>
                        <? add_row(10, 13, 'VIP-E',$is_admin,"","row"); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 100px; left:0px">
                    <div class="seat_rows vip_border" style=" z-index:1;padding: 5px; align-items: end;">
                        <? add_row(14, 17, 'VIP-E',$is_admin,"","row"); ?>
                        <? add_row(18, 21, 'VIP-E',$is_admin,"","row"); ?>
                        <? add_row(22, 25, 'VIP-E',$is_admin,"","row"); ?>
                        <? add_row(26, 29, 'VIP-E',$is_admin,"","row"); ?>
                        <? add_row(30, 33, 'VIP-E',$is_admin,"","row"); ?>
                    </div>
                </div>
            </div>

             <!-- VIP-F ( 하단 □ ■ □ □ ) -->
             <div style="position: absolute; z-index:1; top: 1647px; left: 1130px;">
                <div style="position: absolute; z-index:1; top: 0px; left: 0px;">
                    <div class="seat_rows vip_border" style=" z-index:1;padding: 5px; align-items: end;">
                        <? add_row(1, 5, 'VIP-F',$is_admin,"","row"); ?>
                        <? add_row(6, 10, 'VIP-F',$is_admin,"","row"); ?>
                        <? add_row(11, 15, 'VIP-F',$is_admin,"","row"); ?>
                        <? add_row(16, 20, 'VIP-F',$is_admin,"","row"); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 100px; left:0px">
                    <div class="seat_rows vip_border" style=" z-index:1;padding: 5px; align-items: end;">
                        <? add_row(21, 25, 'VIP-F',$is_admin,"","row"); ?>
                        <? add_row(26, 30, 'VIP-F',$is_admin,"","row"); ?>
                        <? add_row(31, 35, 'VIP-F',$is_admin,"","row"); ?>
                        <? add_row(36, 40, 'VIP-F',$is_admin,"","row"); ?>
                        <? add_row(41, 45, 'VIP-F',$is_admin,"","row"); ?>
                    </div>
                </div>
            </div>

             <!-- VIP-G ( 하단 □ □ ■ □ )-->
             <div style="position: absolute; z-index:1; top: 1647px; left: 1245px;">
                <div style="position: absolute; z-index:1; top: 0px; left: 0px;">
                    <div class="seat_rows vip_border" style=" z-index:1;padding: 5px; align-items: end;">
                        <? add_row(1, 5, 'VIP-G',$is_admin,"","row"); ?>
                        <? add_row(6, 10, 'VIP-G',$is_admin,"","row"); ?>
                        <? add_row(11, 15, 'VIP-G',$is_admin,"","row"); ?>
                        <? add_row(16, 20, 'VIP-G',$is_admin,"","row"); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 100px; left:0px">
                    <div class="seat_rows vip_border" style=" z-index:1;padding: 5px; align-items: end;">
                        <? add_row(21, 25, 'VIP-G',$is_admin,"","row"); ?>
                        <? add_row(26, 30, 'VIP-G',$is_admin,"","row"); ?>
                        <? add_row(31, 35, 'VIP-G',$is_admin,"","row"); ?>
                        <? add_row(36, 40, 'VIP-G',$is_admin,"","row"); ?>
                        <? add_row(41, 45, 'VIP-G',$is_admin,"","row"); ?>
                    </div>
                </div>
            </div>

             <!-- VIP-H ( 하단 □ □ □ ■ )-->
             <div style="position: absolute; z-index:1; top: 1647px; left: 1360px;">
                <div style="position: absolute; z-index:1; top: 0px; left: 0px;">
                    <div class="seat_rows vip_border" style=" z-index:1;padding: 5px; align-items: start;">
                        <? add_row(1, 2, 'VIP-H',$is_admin,"","row"); ?>
                        <? add_row(3, 5, 'VIP-H',$is_admin,"","row"); ?>
                        <? add_row(6, 9, 'VIP-H',$is_admin,"","row"); ?>
                        <? add_row(10, 13, 'VIP-H',$is_admin,"","row"); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 100px; left:0px">
                    <div class="seat_rows vip_border" style=" z-index:1;padding: 5px; align-items: start;">
                        <? add_row(14, 17, 'VIP-H',$is_admin,"","row"); ?>
                        <? add_row(18, 21, 'VIP-H',$is_admin,"","row"); ?>
                        <? add_row(22, 25, 'VIP-H',$is_admin,"","row"); ?>
                        <? add_row(26, 29, 'VIP-H',$is_admin,"","row"); ?>
                        <? add_row(30, 33, 'VIP-H',$is_admin,"","row"); ?>
                    </div>
                </div>
            </div>            
            


            <!--------------------------------------------------------------------------------------------------------------->
            <!----------------------------------------- 라인 -------------------------------------------------------------> 
            <!--------------------------------------------------------------------------------------------------------------->
            
                <!-- <span style="position: absolute; top: 130px; left:20px; font:size 0.8rem; font-weight:bold;">블랙코너</span>
                <span style="position: absolute; top: 155px; left:20px; font:size 0.8rem; font-weight:bold;">입장동선</span>

                <div style="position:absolute;">
                    <div style="position: absolute; z-index:1; border: 2px dashed #777777; z-index:15; top: 150px; width: 140px;"></div>
                    <div style="position: absolute; z-index:1; border: 2px dashed #777777; z-index:15; top: 210px; left:120px; width: 160px;  transform: rotate(45deg);"></div>
                    <div style="position: absolute; z-index:1; border: 2px dashed #777777; z-index:15; top: 295px; left:190px; width: 80px; transform: rotate(-45deg);"></div>
                    <div style="position: absolute; z-index:1; border: 2px dashed #777777; z-index:15; top: 415px; left: 110px; width: 180px; transform: rotate(90deg);"></div>
                    <div style="position: absolute; z-index:1; border: 2px dashed #777777; z-index:15; top: 555px; left: 180px; width: 140px; transform: rotate(45deg);"></div>
                    <div style="position: absolute; z-index:1; border: 2px dashed #777777; z-index:15; top: 605px; left: 300px; width: 70px; transform: rotate(0deg);"></div>
                    <div style="position: absolute; z-index:1; border: 2px dashed #777777; z-index:15; top: 593px; left: 360px; width: 25px; transform: rotate(-90deg);"></div>
                </div>

                <span style="position: absolute; top: 130px; right:20px; font:size 0.8rem; font-weight:bold;">화이트코너</span>
                <span style="position: absolute; top: 155px; right:20px; font:size 0.8rem; font-weight:bold;">입장동선</span>

                <div style=" position:absolute;-ms-transform: scale(-1, 1); -webkit-transform: scale(-1, 1); transform: scale(-1, 1); left: 800px;">
                    <div style="position: absolute; z-index:1; border: 2px dashed #bbbbbb; z-index:15; top: 150px; width: 140px;"></div>
                    <div style="position: absolute; z-index:1; border: 2px dashed #bbbbbb; z-index:15; top: 210px; left:120px; width: 160px;  transform: rotate(45deg);"></div>
                    <div style="position: absolute; z-index:1; border: 2px dashed #bbbbbb; z-index:15; top: 295px; left:190px; width: 80px; transform: rotate(-45deg);"></div>
                    <div style="position: absolute; z-index:1; border: 2px dashed #bbbbbb; z-index:15; top: 415px; left: 110px; width: 180px; transform: rotate(90deg);"></div>
                    <div style="position: absolute; z-index:1; border: 2px dashed #bbbbbb; z-index:15; top: 555px; left: 180px; width: 140px; transform: rotate(45deg);"></div>
                    <div style="position: absolute; z-index:1; border: 2px dashed #bbbbbb; z-index:15; top: 605px; left: 300px; width: 70px; transform: rotate(0deg);"></div>
                    <div style="position: absolute; z-index:1; border: 2px dashed #bbbbbb; z-index:15; top: 593px; left: 360px; width: 25px; transform: rotate(-90deg);"></div>
                </div> -->
            <!-- </canvas> -->

            <div class="objArea" style="width:750px; height:130px; left:876px; top:242px; border:3px solid black;">오케스트라 무대 (LED)</div>
            <div class="objArea" style="width:88px; height:171px; left:836px; top:1117px; border:3px solid black; font-size:1rem;">응원단상</div>
            <div class="objArea" style="width:88px; height:171px; left:1551px; top:1117px; border:3px solid black; font-size:1rem;">응원단상</div>

            <div class="watermark cheer_black" style="width:500px; height:500px; left:336px; top:958px;"></div> <!-- 블랙코너 응원존 -->
            <div class="watermark cheer_white" style="width:500px; height:500px; left:1631px; top:958px;"></div> <!-- 화이트코너 응원존 -->

            <span style="position: absolute; top: 390px; left:623px; font-size: 1rem; font-weight:bold;">블랙코너 선수 입장 동선</span>
            <span style="position: absolute; top: 390px; left:1691px; font-size: 1rem; font-weight:bold; color:#aaaaaa">화이트코너 선수 입장 동선</span>


            <!-- <div style="width:480px; height:80p x; position:absolute; top:613px; left:2008px; background-color:#bbbbbb; display:flex; justify-content:center; align-items:center; font-size:2rem; font-weight:bold;
            -ms-transform: rotate(90deg); -webkit-transform: rotate(90deg); transform: rotate(90deg); ">
                            STAGE
            </div> -->
            <!-- <span style="position: absolute; top: 520px; left:1175px; font-size: 1.5rem; font-weight:bold;">선수입장동선</span> -->

            <!-- <div class="objArea" style="width:702px; height:150px; left:890px; top:2234px; border:3px solid black;">CONSOLE</div> -->

        </div>
    
</div>



<script>
    const canvas = document.getElementById('myCanvas');
    const ctx = canvas.getContext("2d");

    // 바깥쪽 네모
    ctx.beginPath();
    ctx.moveTo(420, 200);
    ctx.lineTo(420, 2000);
    ctx.lineTo(1700, 2000);
    ctx.lineTo(1700, 200);
    ctx.lineTo(420, 200);
    ctx.lineWidth = 3;
    ctx.stroke();
   

    //블랙응원 라인
    ctx.beginPath();
    ctx.moveTo(35, 450);
    ctx.lineTo(35, 1770);
    ctx.lineTo(758, 1770);
    ctx.lineTo(758, 802);
    ctx.lineTo(820, 802);
    ctx.lineTo(820, 450);
    ctx.lineTo(31, 450);
    ctx.strokeStyle = '#dddddd';
    ctx.lineWidth = 8;
    ctx.stroke();

    //화이트응원 라인
    ctx.beginPath();
    ctx.moveTo(2083, 450);
    ctx.lineTo(2083, 1770);
    ctx.lineTo(1355, 1770);
    ctx.lineTo(1355, 802);
    ctx.lineTo(1293, 802);
    ctx.lineTo(1293, 450);
    ctx.lineTo(2087, 450);
    ctx.lineWidth = 8;
    ctx.stroke();

    // 블랙 선수입장동선
    ctx.beginPath();
    ctx.moveTo(420, 420);
    ctx.lineTo(615, 420);
    ctx.lineTo(915, 975);
    ctx.lineTo(955, 940);
    ctx.lineTo(1165, 940);
    ctx.lineTo(1315, 1095);
    ctx.lineTo(1315, 1305);
    ctx.lineTo(1165, 1455);
    ctx.lineTo(1100, 1455);
    
    ctx.lineWidth = 2;
    ctx.setLineDash([10]);
    ctx.strokeStyle = 'black';
    ctx.stroke();

    const bx2 = 1100;
    const by2 = 1455;
    const bx1 = 1165;
    const by1 = 1455;    
    var radians = Math.atan((by2-by1)/(bx2-bx1));
    var headRadians = radians + ((bx2>bx1)?-90:90)*Math.PI/180;    
    drawArrowhead(ctx,bx2,by2,headRadians, 'black');


    // 화이트 선수입장동선
    ctx.beginPath();
    ctx.moveTo(1700, 420);
    ctx.lineTo(1510, 420);
    ctx.lineTo(1200, 960);
    ctx.lineTo(1165, 925);
    ctx.lineTo(945, 925);
    ctx.lineTo(790, 1090);

    ctx.lineTo(790, 1300);
    
    ctx.lineTo(957, 1457);
    ctx.lineTo(1037, 1457);
    
    ctx.lineWidth = 2;
    ctx.setLineDash([10]);
    ctx.strokeStyle = '#aaaaaa';
    ctx.stroke();

    const wx2 = 1037;
    const wy2 = 1457;
    const wx1 = 957;
    const wy1 = 1457;    
    var radians = Math.atan((wy2-wy1)/(wx2-wx1));
    var headRadians = radians + ((wx2>wx1)?-90:90)*Math.PI/180;    
    drawArrowhead(ctx,wx2,wy2,headRadians, '#aaaaaa');


    
    
    //함수: 화살표 그리기
    function drawArrowhead(ctx, x, y, radians, style) {
        ctx.save();
        ctx.beginPath();
        ctx.fillStyle =style;
        ctx.translate(x, y);
        ctx.rotate(radians);
        ctx.moveTo(0, 0);
        ctx.lineTo(-15, -15);
        ctx.lineTo(15, -15);
        ctx.closePath();
        ctx.fill();
        ctx.restore();
        
    }

    function checkSeatType(){
        $.each($(".seat_row_item"),(index,item) => {
            // console.log($(item).attr("title").split(" ")[0]);
            // console.log($(item).parent().attr("data-row-type"));
            const targetTitle = $(item).attr("title").split(" ")[0];
            const parentType = $(item).parent().attr("data-row-type");

            if(
                targetTitle !== 'undivide' 
                && targetTitle !== 'blank' 
                &&
                 targetTitle !== parentType){
                console.log($(item).attr("title"));
            }
        });
    }
    checkSeatType();
</script>