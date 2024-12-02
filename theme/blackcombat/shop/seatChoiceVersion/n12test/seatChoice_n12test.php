<style>
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
        border: 1px solid #0063cf;
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

    .seat_rows.vertical{
        flex-direction: row;
    }

    .seat_row_items{
        margin-bottom: 2px;
        flex-direction:row;
    }
    .seat_row_items.vertical{
        flex-direction:column;
    }

    .no-margin-bottom .seat_row_items{
        margin-bottom: 5px;
    }

    .cage_img_3 {top:1128px; left:1096px; display:block; width:280px; height:auto; margin:0; padding:0;}

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
</style>

<?php
function add_row($start, $end, $row_type, $is_admin, $style, $direction) {
    global $member;
    if($direction == "row"){
        echo "<div class=\"seat_row_items\" data-row-type=\"$row_type\" style=\"$style\">";
    }else if($direction == "column"){
        echo "<div class=\"seat_row_items vertical\" data-row-type=\"$row_type\" style=\"$style\">";
        
    }
    

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
            echo "<div class=\"seat_row_item\" title=\"$row_type\"></div>";
        }else{
            $adminSpan = $is_admin  || $member['mb_id'] == "seatChecker" ? $i : "";
            echo "<div class=\"seat_row_item\" data-choosable=\"Y\" data-seat-number=\"$i\" title=\"$row_type $i\">";
            echo "<span>$adminSpan</span>";
            echo "</div>";
        }
        
    }
}

?>

<div class="seat_choice_popup_body">
    <div class="movieLayoutContainer" data-product-id="<?php echo $it_id; ?>">
    
        <canvas id="myCanvas" width="2290" height="3100" style="border: solid 2px black; position: absolute; left: 100px; top:0px; z-index:1;"></canvas>
    
        <img class="cage_img_3" src="<?php echo G5_THEME_IMG_URL; ?>/product/cage_img_4.png" />

            
            


            <!--------------------------------------------------------------------------------------------------------------->
            <!----------------------------------------- GA 유형 : 11시부터 U자 그리면서 구현  -------------------------------------------------------------> 
            <!--------------------------------------------------------------------------------------------------------------->
            <div style="position:absolute; display:flex; flex-direction:column; top:700px; left:135px; z-index:3; gap:20px;">
                <p style="text-align:center; font-size: 16px; font-weight:bold; color: red; font-size: 0.8rem; width:400px; margin-bottom: 20px;">※ 2F 전 좌석은 자율석이며 좌석 지정이 불가능합니다. </p>
                <!-- <p style="margin-left:20px; font-size: 16px; font-weight:bold; color: red; font-size: 0.8rem; margin-bottom: 10px;">※ 아래 좌석 등급의 위치를 반드시 구매 상세페이지에서 확인하세요. </p> -->
                <!-- ※ 패키지 상품의 경우 구매 상세페이지에서 반드시 내용을 확인하세요. -->
                <div style="display:flex; justify-content:center; gap:20px;">
                    <span style="color: black; font-size: 0.7rem; font-weight:bold;">2F 일반석 - STANDARD</span>
                    <div class="seat_row_items" data-row-type="STANDARD">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="STANDARD"><span></span></div>
                    </div>
                </div>
            </div>
            <div style="position:absolute; display:flex; flex-direction:column; top:1700px; left:135px; z-index:3; gap:20px;">
                <p style="text-align:center; font-size: 16px; font-weight:bold; color: red; font-size: 0.8rem; width:400px; margin-bottom: 20px;">※ 2F 전 좌석은 자율석이며 좌석 지정이 불가능합니다. </p>
            </div>
            <div style="position:absolute; display:flex; flex-direction:column; top:700px; left:1935px; z-index:3; gap:20px;">
                <p style="text-align:center; font-size: 16px; font-weight:bold; color: red; font-size: 0.8rem; width:400px; margin-bottom: 20px;">※ 2F 전 좌석은 자율석이며 좌석 지정이 불가능합니다. </p>
            </div>
            <div style="position:absolute; display:flex; flex-direction:column; top:1700px; left:1935px; z-index:3; gap:20px;">
                <p style="text-align:center; font-size: 16px; font-weight:bold; color: red; font-size: 0.8rem; width:400px; margin-bottom: 20px;">※ 2F 전 좌석은 자율석이며 좌석 지정이 불가능합니다. </p>
            </div>

            <div style="position:absolute; display:flex; flex-direction:column; top:1050px; left:443px; z-index:3; gap:20px;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #007700; font-size: 1.1rem; margin-bottom: 30px;">2F<br>GOLD ZONE<br></p>
                <p style="margin-left:10px; font-size: 16px; font-weight:bold; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 2F 전 좌석은<br>자율석이며<br>좌석 지정이<br>불가능합니다. </p>
                <!-- ※ 패키지 상품의 경우 구매 상세페이지에서 반드시 내용을 확인하세요. -->
                <div style="display:flex; margin-left:10px; justify-content:center;">
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
                </div>
            </div>
            <div style="position:absolute; display:flex; flex-direction:column; top:1050px; left:1943px; z-index:3; gap:20px;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #007700; font-size: 1.1rem; margin-bottom: 30px;">2F<br>GOLD ZONE<br></p>
                <p style="margin-left:10px; font-size: 16px; font-weight:bold; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 2F 전 좌석은<br>자율석이며<br>좌석 지정이<br>불가능합니다. </p>
            </div>


            <div style="position:absolute; display:flex; flex-direction:column; top:1077px; left:193px; z-index:3; gap:20px;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F SILVER ZONE<br></p>
                <p style="margin-left:10px; font-size: 16px; font-weight:bold; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 2F 전 좌석은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <!-- ※ 패키지 상품의 경우 구매 상세페이지에서 반드시 내용을 확인하세요. -->
                <div style="display:flex; margin-left:10px; justify-content:center; margin-top:30px;">
                    <span style="color: black; font-size: 0.7rem; font-weight:bold; flex:1 1 130px">SILVER-PKG</span>
                    <div class="seat_row_items silver_border" data-row-type="SILVER(PKG)" style="flex:2 1 30px">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="SILVER(PKG)" onclick="alert('※ 패키지 상품의 경우 구매 상세페이지에서 반드시 내용을 확인하세요.');"><span></span></div>
                    </div>
                </div>
                <div style="display:flex; margin-left:10px; justify-content:center;">
                    <span style="color: black; font-size: 0.7rem; font-weight:bold; flex:1 1 130px">SILVER</span>
                    <div class="seat_row_items silver_border" data-row-type="SILVER" style="flex:2 1 30px">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="SILVER" onclick="alert('※ 패키지 상품의 경우 구매 상세페이지에서 반드시 내용을 확인하세요.');"><span></span></div>
                    </div>
                </div>
            </div>
            <div style="position:absolute; display:flex; flex-direction:column; top:1077px; left:2140px; z-index:3; gap:20px;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F SILVER ZONE<br></p>
                <p style="margin-left:10px; font-size: 16px; font-weight:bold; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 2F 전 좌석은 자율석이며<br>좌석 지정이 불가능합니다.</p>
            </div>


            <div class="objArea" style="width:417px; height:500px; left:135px; top:500px;  padding:10px; z-index:2; font-size:1.2rem;">
            </div>
            <div class="objArea" style="width:417px; height:1370px; left:135px; top:1590px;  padding:10px; z-index:2; font-size:1.2rem;">
            </div>
            
            <!-- 9시방향 골드/실버 -->
            <div class="objArea" style="width:270px; height:500px; left:135px; top:1040px;  padding:10px; z-index:2; font-size:1.2rem; background-color:#aaaaff">
            </div>
            <div class="objArea" style="width:114px; height:500px; left:438px; top:1040px;  padding:10px; z-index:2; font-size:1.2rem; background-color:#99ff99">
            </div>



            <div class="objArea" style="width:1388px; height:465px; left:550px; top:2495px; padding:10px; z-index:2; font-size:1.2rem;">
            </div>


            <div class="objArea" style="width:417px; height:1370px; left:1936px; top:1590px; padding:10px; z-index:2; font-size:1.2rem;">
            </div>
            <div class="objArea" style="width:417px; height:500px; left:1936px; top:500px; padding:10px; z-index:2; font-size:1.2rem;">
            </div>

            <!-- 3시방향 골드/실버 -->
            <div class="objArea" style="width:270px; height:500px; left:2082px; top:1040px;  padding:10px; z-index:2; font-size:1.2rem; background-color:#aaaaff">
            </div>
            <div class="objArea" style="width:114px; height:500px; left:1936px; top:1040px;  padding:10px; z-index:2; font-size:1.2rem; background-color:#99ff99">
            </div>


            

            <!--------------------------------------------------------------------------------------------------------------->
            <!----------------------------------------- VVIP 유형 : 11시부터 반시계 방향으로 구현  -------------------------------------------------------------> 
            <!--------------------------------------------------------------------------------------------------------------->

            <!-- VVIP-F 10시-->
            <div style="position: absolute; z-index:1; top: 675px; left: 650px;">
                <div class="seat_rows vvip_border vertical" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                    <? add_row(169, 195, 'VVIP-F',$is_admin,"","column"); ?>
                    <div class="seat_row_items vertical" data-row-type="VVIP-F"><? add_items(145, 152, 'VVIP-F',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(153, 168, 'VVIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items vertical" data-row-type="VVIP-F"><? add_items(121, 128, 'VVIP-F',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(129, 144, 'VVIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items vertical" data-row-type="VVIP-F"><? add_items(97, 104, 'VVIP-F',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(105, 120, 'VVIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items vertical" data-row-type="VVIP-F"><? add_items(73, 80, 'VVIP-F',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(81, 96, 'VVIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items vertical" data-row-type="VVIP-F"><? add_items(49, 56, 'VVIP-F',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(57, 72, 'VVIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items vertical" data-row-type="VVIP-F"><? add_items(25, 32, 'VVIP-F',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(33, 48, 'VVIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items vertical" data-row-type="VVIP-F"><? add_items(1, 8, 'VVIP-F',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(9, 24, 'VVIP-F',$is_admin,""); ?></div>
                    
                </div>
            </div>

            <!-- VVIP-G 8시-->
            <div style="position: absolute; z-index:1; top: 1290px; left: 650px; -ms-transform: rotateX(180deg); -webkit-transform: rotateX(180deg); transform: rotateX(180deg);">
                <div class="seat_rows vvip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                    <? add_row(1, 8, 'VVIP-G',$is_admin,"","row"); ?>
                    <? add_row(9, 16, 'VVIP-G',$is_admin,"","row"); ?>
                    <? add_row(17, 24, 'VVIP-G',$is_admin,"","row"); ?>
                    <? add_row(25, 32, 'VVIP-G',$is_admin,"","row"); ?>
                    <? add_row(33, 40, 'VVIP-G',$is_admin,"","row"); ?>
                    <? add_row(41, 48, 'VVIP-G',$is_admin,"","row"); ?>
                    <? add_row(49, 56, 'VVIP-G',$is_admin,"","row"); ?>
                    <? add_row(57, 64, 'VVIP-G',$is_admin,"","row"); ?>
                    <? add_row(65, 65, 'VVIP-G',$is_admin,"","row"); ?>
                    <? add_row(66, 66, 'VVIP-G',$is_admin,"","row"); ?>
                    <? add_row(67, 74, 'VVIP-G',$is_admin,"","row"); ?>
                    <? add_row(75, 82, 'VVIP-G',$is_admin,"","row"); ?>
                    <? add_row(83, 90, 'VVIP-G',$is_admin,"","row"); ?>
                    <? add_row(91, 98, 'VVIP-G',$is_admin,"","row"); ?>
                    <? add_row(99, 106, 'VVIP-G',$is_admin,"","row"); ?>
                    <? add_row(107, 114, 'VVIP-G',$is_admin,"","row"); ?>
                    <? add_row(115, 122, 'VVIP-G',$is_admin,"","row"); ?>
                    <? add_row(123, 130, 'VVIP-G',$is_admin,"","row"); ?>
                    <? add_row(131, 138, 'VVIP-G',$is_admin,"","row"); ?>
                    <? add_row(139, 146, 'VVIP-G',$is_admin,"","row"); ?>
                    <? add_row(147, 154, 'VVIP-G',$is_admin,"","row"); ?>
                    <? add_row(155, 162, 'VVIP-G',$is_admin,"","row"); ?>
                    <? add_row(163, 170, 'VVIP-G',$is_admin,"","row"); ?>
                    <? add_row(171, 178, 'VVIP-G',$is_admin,"","row"); ?>
                    <? add_row(179, 186, 'VVIP-G',$is_admin,"","row"); ?>
                    <? add_row(187, 194, 'VVIP-G',$is_admin,"","row"); ?>
                    <? add_row(195, 195, 'VVIP-G',$is_admin,"","row"); ?>
                </div>
            </div>
          

            <div style="position: absolute; z-index:1; top: 670px; left: 1830px; -ms-transform: rotateY(180deg); -webkit-transform: rotateY(180deg); transform: rotateY(180deg);">
                <!-- VVIP-C 2시-->
                <div style="position: absolute; z-index:1; top: 0px; left: 0px;">
                    <div class="seat_rows vvip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <? add_row(1, 8, 'VVIP-C',$is_admin,"","row"); ?>
                        <? add_row(9, 16, 'VVIP-C',$is_admin,"","row"); ?>
                        <? add_row(17, 24, 'VVIP-C',$is_admin,"","row"); ?>
                        <? add_row(25, 32, 'VVIP-C',$is_admin,"","row"); ?>
                        <? add_row(33, 40, 'VVIP-C',$is_admin,"","row"); ?>
                        <? add_row(41, 48, 'VVIP-C',$is_admin,"","row"); ?>
                        <? add_row(49, 56, 'VVIP-C',$is_admin,"","row"); ?>
                        <? add_row(57, 64, 'VVIP-C',$is_admin,"","row"); ?>
                        <? add_row(65, 65, 'VVIP-C',$is_admin,"","row"); ?>
                        <? add_row(66, 66, 'VVIP-C',$is_admin,"","row"); ?>
                        <? add_row(67, 74, 'VVIP-C',$is_admin,"","row"); ?>
                        <? add_row(75, 82, 'VVIP-C',$is_admin,"","row"); ?>
                        <? add_row(83, 90, 'VVIP-C',$is_admin,"","row"); ?>
                        <? add_row(91, 98, 'VVIP-C',$is_admin,"","row"); ?>
                        <? add_row(99, 106, 'VVIP-C',$is_admin,"","row"); ?>
                        <? add_row(107, 114, 'VVIP-C',$is_admin,"","row"); ?>
                        <? add_row(115, 122, 'VVIP-C',$is_admin,"","row"); ?>
                        <? add_row(123, 130, 'VVIP-C',$is_admin,"","row"); ?>
                        <? add_row(131, 138, 'VVIP-C',$is_admin,"","row"); ?>
                        <? add_row(139, 146, 'VVIP-C',$is_admin,"","row"); ?>
                        <? add_row(147, 154, 'VVIP-C',$is_admin,"","row"); ?>
                        <? add_row(155, 162, 'VVIP-C',$is_admin,"","row"); ?>
                        <? add_row(163, 170, 'VVIP-C',$is_admin,"","row"); ?>
                        <? add_row(171, 178, 'VVIP-C',$is_admin,"","row"); ?>
                        <? add_row(179, 186, 'VVIP-C',$is_admin,"","row"); ?>
                        <? add_row(187, 194, 'VVIP-C',$is_admin,"","row"); ?>
                        <? add_row(195, 195, 'VVIP-C',$is_admin,"","row"); ?>
                    </div>
                </div>

                <!-- VVIP-B 4시-->
                <div style="position: absolute; z-index:1; top: 620px; left: 0px; -ms-transform: rotateX(180deg); -webkit-transform: rotateX(180deg); transform: rotateX(180deg);">
                    <div class="seat_rows vvip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <? add_row(1, 8, 'VVIP-B',$is_admin,"","row"); ?>
                        <? add_row(9, 16, 'VVIP-B',$is_admin,"","row"); ?>
                        <? add_row(17, 24, 'VVIP-B',$is_admin,"","row"); ?>
                        <? add_row(25, 32, 'VVIP-B',$is_admin,"","row"); ?>
                        <? add_row(33, 40, 'VVIP-B',$is_admin,"","row"); ?>
                        <? add_row(41, 48, 'VVIP-B',$is_admin,"","row"); ?>
                        <? add_row(49, 56, 'VVIP-B',$is_admin,"","row"); ?>
                        <? add_row(57, 64, 'VVIP-B',$is_admin,"","row"); ?>
                        <? add_row(65, 65, 'VVIP-B',$is_admin,"","row"); ?>
                        <? add_row(66, 66, 'VVIP-B',$is_admin,"","row"); ?>
                        <? add_row(67, 74, 'VVIP-B',$is_admin,"","row"); ?>
                        <? add_row(75, 82, 'VVIP-B',$is_admin,"","row"); ?>
                        <? add_row(83, 90, 'VVIP-B',$is_admin,"","row"); ?>
                        <? add_row(91, 98, 'VVIP-B',$is_admin,"","row"); ?>
                        <? add_row(99, 106, 'VVIP-B',$is_admin,"","row"); ?>
                        <? add_row(107, 114, 'VVIP-B',$is_admin,"","row"); ?>
                        <? add_row(115, 122, 'VVIP-B',$is_admin,"","row"); ?>
                        <? add_row(123, 130, 'VVIP-B',$is_admin,"","row"); ?>
                        <? add_row(131, 138, 'VVIP-B',$is_admin,"","row"); ?>
                        <? add_row(139, 146, 'VVIP-B',$is_admin,"","row"); ?>
                        <? add_row(147, 154, 'VVIP-B',$is_admin,"","row"); ?>
                        <? add_row(155, 162, 'VVIP-B',$is_admin,"","row"); ?>
                        <? add_row(163, 170, 'VVIP-B',$is_admin,"","row"); ?>
                        <? add_row(171, 178, 'VVIP-B',$is_admin,"","row"); ?>
                        <? add_row(179, 186, 'VVIP-B',$is_admin,"","row"); ?>
                        <? add_row(187, 194, 'VVIP-B',$is_admin,"","row"); ?>
                        <? add_row(195, 195, 'VVIP-B',$is_admin,"","row"); ?>
                    </div>
                </div>
            </div>

             <!--------------------------------------------------------------------------------------------------------------->
            <!----------------------------------------- VIP 유형  -------------------------------------------------------------> 
            <!--------------------------------------------------------------------------------------------------------------->


            <!-- VIP-H 7시-->
            <div style="position: absolute; z-index:1; top: 1610px; left: 910px;">
                <div style="position: absolute; z-index:1; top: 0px; left: 0px;">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <? add_row(1, 8, 'VIP-H',$is_admin,"","row"); ?>
                        <? add_row(9, 16, 'VIP-H',$is_admin,"","row"); ?>
                        <? add_row(17, 24, 'VIP-H',$is_admin,"","row"); ?>
                        <? add_row(25, 32, 'VIP-H',$is_admin,"","row"); ?>
                        <? add_row(33, 40, 'VIP-H',$is_admin,"","row"); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: -23px; left: 196px;">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <? add_row(41, 42, 'VIP-H',$is_admin,"","row"); ?>
                        <? add_row(43, 46, 'VIP-H',$is_admin,"","row"); ?>
                        <? add_row(47, 50, 'VIP-H',$is_admin,"","row"); ?>
                        <? add_row(51, 55, 'VIP-H',$is_admin,"","row"); ?>
                        <? add_row(56, 60, 'VIP-H',$is_admin,"","row"); ?>
                        <? add_row(61, 65, 'VIP-H',$is_admin,"","row"); ?>
                        <? add_row(66, 71, 'VIP-H',$is_admin,"","row"); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 152px; left: -19px;">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <? add_row(72, 79, 'VIP-H',$is_admin,"","row"); ?>
                        <? add_row(80, 87, 'VIP-H',$is_admin,"","row"); ?>
                        <? add_row(88, 95, 'VIP-H',$is_admin,"","row"); ?>
                        <? add_row(96, 103, 'VIP-H',$is_admin,"","row"); ?>
                        <? add_row(104, 111, 'VIP-H',$is_admin,"","row"); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 152px; left: 160px;">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <? add_row(112, 119, 'VIP-H',$is_admin,"","row"); ?>
                        <? add_row(120, 127, 'VIP-H',$is_admin,"","row"); ?>
                        <? add_row(128, 135, 'VIP-H',$is_admin,"","row"); ?>
                        <? add_row(136, 143, 'VIP-H',$is_admin,"","row"); ?>
                        <? add_row(144, 151, 'VIP-H',$is_admin,"","row"); ?>
                    </div>
                </div>
            </div>

            <!-- VIP-A 5시-->
            <div style="position: absolute; z-index:1; top: 1610px; left: 1570px; -ms-transform: rotateY(180deg); -webkit-transform: rotateY(180deg); transform: rotateY(180deg);">
                <div style="position: absolute; z-index:1; top: 0px; left: 0px;">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <? add_row(1, 8, 'VIP-A',$is_admin,"","row"); ?>
                        <? add_row(9, 16, 'VIP-A',$is_admin,"","row"); ?>
                        <? add_row(17, 24, 'VIP-A',$is_admin,"","row"); ?>
                        <? add_row(25, 32, 'VIP-A',$is_admin,"","row"); ?>
                        <? add_row(33, 40, 'VIP-A',$is_admin,"","row"); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: -23px; left: 196px;">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <? add_row(41, 42, 'VIP-A',$is_admin,"","row"); ?>
                        <? add_row(43, 46, 'VIP-A',$is_admin,"","row"); ?>
                        <? add_row(47, 50, 'VIP-A',$is_admin,"","row"); ?>
                        <? add_row(51, 55, 'VIP-A',$is_admin,"","row"); ?>
                        <? add_row(56, 60, 'VIP-A',$is_admin,"","row"); ?>
                        <? add_row(61, 65, 'VIP-A',$is_admin,"","row"); ?>
                        <? add_row(66, 71, 'VIP-A',$is_admin,"","row"); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 152px; left: -19px;">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <? add_row(72, 79, 'VIP-A',$is_admin,"","row"); ?>
                        <? add_row(80, 87, 'VIP-A',$is_admin,"","row"); ?>
                        <? add_row(88, 95, 'VIP-A',$is_admin,"","row"); ?>
                        <? add_row(96, 103, 'VIP-A',$is_admin,"","row"); ?>
                        <? add_row(104, 111, 'VIP-A',$is_admin,"","row"); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 152px; left: 160px;">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <? add_row(112, 119, 'VIP-A',$is_admin,"","row"); ?>
                        <? add_row(120, 127, 'VIP-A',$is_admin,"","row"); ?>
                        <? add_row(128, 135, 'VIP-A',$is_admin,"","row"); ?>
                        <? add_row(136, 143, 'VIP-A',$is_admin,"","row"); ?>
                        <? add_row(144, 151, 'VIP-A',$is_admin,"","row"); ?>
                    </div>
                </div>
            </div>       

            <!-- VIP-D 1시 -->
            <div style="position: absolute; z-index:1; top: 750px; left: 1371px;">
                <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                    <? add_row(1, 12,   'VIP-D',$is_admin,"","row"); ?>
                    <? add_row(13, 24,   'VIP-D',$is_admin,"","row"); ?>
                    <? add_row(25, 36,  'VIP-D',$is_admin,"","row"); ?>
                    <? add_row(37, 48, 'VIP-D',$is_admin,"","row"); ?>
                    <? add_row(49, 60, 'VIP-D',$is_admin,"","row"); ?>
                    <? add_row(61, 72, 'VIP-D',$is_admin,"","row"); ?>
                    <? add_row(73, 84, 'VIP-D',$is_admin,"","row"); ?>
                    <? add_row(85, 96, 'VIP-D',$is_admin,"","row"); ?>
                    <? add_row(97, 108, 'VIP-D',$is_admin,"","row"); ?>
                    <div class="seat_row_items" data-row-type="VIP-D"><? add_items(109, 113, 'VIP-D',$is_admin,"","row"); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(114, 118, 'VIP-D',$is_admin,"","row"); ?></div>

                </div>
            </div>
            

            <!-- VIP-E 11시 -->
            <div style="position: absolute; z-index:1; top: 750px; left: 880px;">
                <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                    <? add_row(1, 12,   'VIP-E',$is_admin,"","row"); ?>
                    <? add_row(13, 24,   'VIP-E',$is_admin,"","row"); ?>
                    <? add_row(25, 36,  'VIP-E',$is_admin,"","row"); ?>
                    <? add_row(37, 48, 'VIP-E',$is_admin,"","row"); ?>
                    <? add_row(49, 60, 'VIP-E',$is_admin,"","row"); ?>
                    <? add_row(61, 72, 'VIP-E',$is_admin,"","row"); ?>
                    <? add_row(73, 84, 'VIP-E',$is_admin,"","row"); ?>
                    <? add_row(85, 96, 'VIP-E',$is_admin,"","row"); ?>
                    <? add_row(97, 108, 'VIP-E',$is_admin,"","row"); ?>
                    <div class="seat_row_items" data-row-type="VIP-E"><? add_items(109, 113, 'VIP-E',$is_admin,"","row"); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(114, 118, 'VIP-E',$is_admin,"","row"); ?></div>

                </div>
            </div>

            <!--------------------------------------------------------------------------------------------------------------->
            <!----------------------------------------- TINUM 유형 : 11시부터 반시계 방향으로 구현  -------------------------------------------------------------> 
            <!--------------------------------------------------------------------------------------------------------------->

            <!-- TINUM-C 11시 -->
            <div style="position: absolute; z-index:1; top: 1060px; left: 1000px;">
                <div style="position: absolute; z-index:1; top: 125px; left: 0px; -ms-transform: rotate(-90deg); -webkit-transform: rotate(-90deg); transform: rotate(-90deg);">
                    <div class="seat_rows tinum_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <? add_row(1, 4, 'BLACKTINUM-C',$is_admin,"","row"); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 30px; left: 30px; -ms-transform: rotate(-45deg); -webkit-transform: rotate(-45deg); transform: rotate(-45deg);">
                    <div class="seat_rows tinum_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <? add_row(5, 8, 'BLACKTINUM-C',$is_admin,"","row"); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 0px; left: 125px;">
                    <div class="seat_rows tinum_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <? add_row(9, 12, 'BLACKTINUM-C',$is_admin,"","row"); ?>
                    </div>
                </div>
            </div>

            <!-- TINUM-D 7시 -->
            <div style="position: absolute; z-index:1; top: 1480px; left: 998px; -ms-transform: rotateX(180deg); -webkit-transform: rotateX(180deg); transform: rotateX(180deg);">
                <div style="position: absolute; z-index:1; top: 125px; left: 0px; -ms-transform: rotate(-90deg); -webkit-transform: rotate(-90deg); transform: rotate(-90deg);">
                    <div class="seat_rows tinum_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <? add_row(1, 4, 'BLACKTINUM-D',$is_admin,"","row"); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 30px; left: 30px; -ms-transform: rotate(-45deg); -webkit-transform: rotate(-45deg); transform: rotate(-45deg);">
                    <div class="seat_rows tinum_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <? add_row(5, 8, 'BLACKTINUM-D',$is_admin,"","row"); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 0px; left: 125px;">
                    <div class="seat_rows tinum_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <? add_row(9, 12, 'BLACKTINUM-D',$is_admin,"","row"); ?>
                    </div>
                </div>
            </div>


            
            <!-- TINUM-B 1시 -->
            <div style="position: absolute;z-index:1;top: 1060px;left: 1330px;">
                <div style="position: absolute;z-index:1;top: 125px;left: 60px;-ms-transform: rotate(-90deg);-webkit-transform: rotate(-90deg);transform: rotate(-90deg);">
                    <div class="seat_rows tinum_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <? add_row(1, 4, 'BLACKTINUM-B',$is_admin,"","row"); ?>
                    </div>
                </div>
                <div style="position: absolute;z-index:1;top: 30px;left: 30px;-ms-transform: rotate(-135deg);-webkit-transform: rotate(-135deg);transform: rotate(-135deg);">
                    <div class="seat_rows tinum_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <? add_row(5, 8, 'BLACKTINUM-B',$is_admin,"","row"); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 0px; left: -60px; -ms-transform: rotate(-180deg);-webkit-transform: rotate(-180deg);transform: rotate(-180deg);">
                    <div class="seat_rows tinum_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <? add_row(9, 12, 'BLACKTINUM-B',$is_admin,"","row"); ?>
                    </div>
                </div>
            </div>

            <!-- TINUM-A 5시 -->
            <div style="position: absolute; z-index:1; top: 1480px; left: 1330px; -ms-transform: rotateX(180deg); -webkit-transform: rotateX(180deg); transform: rotateX(180deg);">
                <div style="position: absolute; z-index:1; top: 125px; left: 60px; -ms-transform: rotate(-90deg); -webkit-transform: rotate(-90deg); transform: rotate(-90deg);">
                    <div class="seat_rows tinum_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <? add_row(1, 4, 'BLACKTINUM-A',$is_admin,"","row"); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 30px; left: 30px; -ms-transform: rotate(-135deg); -webkit-transform: rotate(-135deg); transform: rotate(-135deg);">
                    <div class="seat_rows tinum_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <? add_row(5, 8, 'BLACKTINUM-A',$is_admin,"","row"); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 0px; left: -60px; -ms-transform: rotate(-180deg);-webkit-transform: rotate(-180deg);transform: rotate(-180deg);">
                    <div class="seat_rows tinum_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <? add_row(9, 12, 'BLACKTINUM-A',$is_admin,"","row"); ?>
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

            <div class="objArea" style="width:1282px; height:200px; left:600px; top:200px; border:3px solid black;">STAGE</div>
            <div class="objArea" style="width:200px; height:600px; left:1140px; top:397px; border:3px solid black; border-top:unset;"></div>
            <!-- <div style="width:480px; height:80p x; position:absolute; top:613px; left:2008px; background-color:#bbbbbb; display:flex; justify-content:center; align-items:center; font-size:2rem; font-weight:bold;
            -ms-transform: rotate(90deg); -webkit-transform: rotate(90deg); transform: rotate(90deg); ">
                            STAGE
            </div> -->
            <span style="position: absolute; top: 520px; left:1175px; font-size: 1.5rem; font-weight:bold;">선수입장동선</span>

            <div class="objArea" style="width:702px; height:150px; left:890px; top:2234px; border:3px solid black;">CONSOLE</div>

        </div>
    
</div>



<script>
    const canvas = document.getElementById('myCanvas');
    const ctx = canvas.getContext("2d");
    ctx.beginPath();
    
    ctx.moveTo(500, 200);
    ctx.lineTo(500, 2450);
    ctx.lineTo(1780, 2450);
    ctx.lineTo(1780, 200);
    ctx.lineTo(500, 200);
    // ctx.lineTo(950, 500);
    // ctx.lineTo(808, 360);
    // ctx.lineTo(550, 360);
    // ctx.lineTo(403, 508);
    // ctx.lineTo(403, 750);
    // ctx.lineTo(498, 845);
    
    ctx.lineWidth = 3;
    // ctx.setLineDash([10]);
    ctx.stroke();

    // const x2 = 498;
    // const y2 = 845;
    // const x1 = 403;
    // const y1 = 750;    
    // var radians = Math.atan((y2-y1)/(x2-x1));
    // var headRadians = radians + ((x2>x1)?-90:90)*Math.PI/180;    
    // drawArrowhead(ctx,x2,y2,headRadians);

    // ctx.beginPath();
    // ctx.moveTo(1380, 0);
    // ctx.lineTo(1380, 1530);
    // ctx.lineWidth = 1;
    // ctx.setLineDash([]);
    // ctx.stroke();


    ctx.beginPath();
    ctx.moveTo(1040, 650);
    ctx.lineTo(750, 650);
    ctx.lineTo(750, 1970);
    ctx.lineTo(1520, 1970);
    ctx.lineTo(1520, 650);
    ctx.lineTo(1238, 650);

    ctx.lineWidth = 3;
    ctx.stroke();
    // ctx.lineTo(485, 348);
    // ctx.lineTo(300, 0);

    // ctx.moveTo(867, 348);
    // ctx.lineTo(873,400);
    // ctx.lineTo(962,495);
    // ctx.lineTo(962,620);
    // ctx.lineTo(1380,620);

    // ctx.moveTo(1380, 680);
    // ctx.lineTo(962, 680);
    // ctx.lineTo(962, 770);
    // ctx.lineTo(862, 860);
    // ctx.lineTo(874, 906);

    // ctx.moveTo(1240, 1530);
    // ctx.lineTo(874, 906);
    // ctx.lineTo(482, 906);
    // ctx.lineTo(150, 1530);

    // ctx.moveTo(482, 906);
    // ctx.lineTo(502, 866);
    // ctx.lineTo(387, 755);
    // ctx.lineTo(387, 415);
    // ctx.lineTo(0, 200);
    
    // ctx.stroke();



    
    
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