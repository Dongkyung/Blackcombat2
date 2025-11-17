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

    .cage_img_3 {top:1047px; left:1748px; display:block; width:800px; height:auto; margin:0; padding:0;}

    .seat_row_items span{
        font-size:0.6rem;
    }

    .movieLayoutContainer{
        min-width:2200px; /* 캔버스 width + 캔버스 margin x 2 */
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
// function add_row($start, $end, $row_type, $is_admin, $style, $direction) {
//     global $member;
//     echo "<div class=\"seat_row_items $direction\" data-row-type=\"$row_type\" style=\"$style\">";
    

//     for ($i = $start; $i <= $end; $i++) {
//         $adminSpan = $is_admin || $member['mb_id'] == "seatChecker"? $i : "";
//         echo "<div class=\"seat_row_item\" data-choosable=\"Y\" data-seat-number=\"$i\" title=\"$row_type $i\">";
//         echo "<span>$adminSpan</span>";
//         echo "</div>";
//     }
//     echo '</div>';
// }

// add_row_additional(1, 2, 'J/K GATE 212구역',$is_admin,"","row");
function add_row_additional($start, $end, $line_name, $row_type, $is_admin, $style, $direction) {
    global $member;
    echo "<div class=\"seat_row_items $direction\" data-row-type=\"$row_type\" style=\"$style\">";

    for ($i = $start; $i <= $end; $i++) {
        $seatNumber = "$line_name-$i";

        $adminSpan = $is_admin || $member['mb_id'] == "seatChecker"? $i : "";
        echo "<div class=\"seat_row_item\" data-choosable=\"Y\" data-seat-number=\"$seatNumber\" title=\"$row_type $seatNumber\">";
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
    <div class="movieLayoutContainer" style="transform: scale(0.5); transform-origin: left top;" data-product-id="<?php echo $it_id; ?>">
    
        <canvas id="myCanvas" width="4000" height="2900" style="border: solid 2px black; position: absolute; left: 180px; top:0px; z-index:1;"></canvas>
    
        <img class="cage_img_3" src="<?php echo G5_THEME_IMG_URL; ?>/product/cage_img_4.png" />

            
            




            <!--------------------------------------------------------------------------------------------------------------->
            <!----------------------------------------- 일반석 / 이코노미  유형 : 11시부터 U자 그리면서 구현  -------------------------------------------------------------> 
            <!--------------------------------------------------------------------------------------------------------------->
            
            
            <!-- 상단 ■ □ □ □ □ □ □  스탠다드 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 100px; left: 438px; height: 300px; width: 700px; z-index:3; gap:20px; padding:30px; background-color:#b2ddef;
                        clip-path: polygon(0% 0%, 68% 0%, 100% 100%, 24% 100%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 상단 ■ □ □ □ □ □ □ 실버 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 427px; left: 640px; height: 350px; width: 610px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;;
                        clip-path: polygon(0% 0%, 62% 0%, 100% 100%, 62% 100%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!--  /////////////////////////// -->

            <!-- 상단 □ ■ □ □ □ □ □ 스탠다드 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 100px; left: 970px; height: 300px; width: 450px; z-index:3; gap:20px; padding:30px; background-color:#b2ddef;
                        clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 50% 100%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 상단 □ ■ □ □ □ □ □ 실버 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 427px; left: 1166px; height: 350px; width: 254px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;;
                        clip-path: polygon(0% -20%, 100% 0%, 100% 100%, 81% 100%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>


            <!--  /////////////////////////// -->

            <!-- 상단 □ □ ■ □ □ □ □ 스탠다드 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 100px; left: 1450px; height: 300px; width: 450px; z-index:3; gap:20px; padding:30px; background-color:#b2ddef;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 상단  □ □ ■ □ □ □ □ 실버 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 427px; left: 1450px; height: 220px; width: 450px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 상단 □ □ ■ □ □ □ □ 골드 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 660px; left: 1450px; height: 220px; width: 450px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!--  /////////////////////////// -->


            <!-- 상단 □ □ □ ■ □ □ □ 스탠다드 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 100px; left: 1928px; height: 300px; width: 450px; z-index:3; gap:20px; padding:30px; background-color:#b2ddef;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 상단 □ □ □ ■ □ □ □ 실버 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 427px; left: 1928px; height: 220px; width: 450px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 상단 □ □ □ ■ □ □ □ 골드 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 660px; left: 1928px; height: 220px; width: 450px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!--  /////////////////////////// -->


            <!--상단  □ □ □ □ ■ □ □ 스탠다드 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 100px; left: 2408px; height: 300px; width: 450px; z-index:3; gap:20px; padding:30px; background-color:#b2ddef;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 상단 □ □ □ □ ■ □ □ 실버 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 427px; left: 2408px; height: 220px; width: 450px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 상단 □ □ □ □ ■ □ □ 골드 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 660px; left: 2408px; height: 220px; width: 450px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!--  /////////////////////////// -->

            <!-- 상단 □ □ □ □ □ ■ □ 스탠다드 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 100px; left: 2888px; height: 300px; width: 450px; z-index:3; gap:20px; padding:30px; background-color:#b2ddef;
                        clip-path: polygon(100% 0%, 0% 0%, 0% 100%, 50% 100%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 상단 □ □ □ □ □ ■ □ 실버 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 427px; left: 2888px; height: 350px; width: 254px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;;
                        clip-path: polygon(100% -20%, 0% 0%, 0% 100%, 19% 100%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

             <!--  /////////////////////////// -->

             <!-- 상단 □ □ □ □ □ □ ■ 스탠다드 -->
             <div style="position:absolute; display:flex; flex-direction:column; top: 100px; left: 3180px; height: 300px; width: 700px; z-index:3; gap:20px; padding:30px; background-color:#b2ddef;
                        clip-path: polygon(100% 0%, 32% 0%, 0% 100%, 76% 100%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">23F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 상단 □ □ □ □ □ □ ■ 실버 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 427px; left: 3077px; height: 350px; width: 610px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;;
                        clip-path: polygon(100% 0%, 38% 0%, 0% 100%, 38% 100%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">23F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!--  /////////////////////////// -->

            <!-- <상>중하 스탠다드 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 337px; left: 3680px; height: 800px; width: 350px; z-index:3; gap:20px; padding:30px; background-color:#b2ddef;
                        clip-path: polygon(100% 0%, 0% 31%, 0% 100%, 100% 100%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- <상>중하 실버 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 587px; left: 3300px; height: 550px; width: 350px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;;
                        clip-path: polygon(100% 0%, 0% 64%, 0% 100%, 100% 100%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!--  /////////////////////////// -->

            <!-- 상<중>하 스탠다드 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 1170px; left: 3680px; height: 550px; width: 350px; z-index:3; gap:20px; padding:30px; background-color:#b2ddef;
                        clip-path: polygon(100% 0%, 0% 0%, 0% 100%, 100% 100%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 상<중>하 실버 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 1170px; left: 3300px; height: 550px; width: 350px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;;
                        clip-path: polygon(100% 0%, 0% 0%, 0% 100%, 100% 100%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!--  /////////////////////////// -->

            <!-- 상중<하> 스탠다드 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 1770px; left: 3680px; height: 800px; width: 350px; z-index:3; gap:20px; padding:30px; background-color:#b2ddef;
                        clip-path: polygon(100% 0%, 0% 0%, 0% 69%, 100% 100%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 상중<하> 실버 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 1770px; left: 3300px; height: 550px; width: 350px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;;
                        clip-path: polygon(100% 0%, 0% 0%, 0% 37%, 100% 100%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!--  /////////////////////////// -->

            <!-- 하단 □ □ □ □ □ □ ■ 실버 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 2135px; left: 3077px; height: 350px; width: 610px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;;
                        /* clip-path: polygon(100% 0%, 38% 0%, 0% 100%, 62% 100%); */
                           clip-path: polygon(38% 0%, 0% 0%, 38% 100%, 100% 100%);
                        ">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

             <!-- 하단 □ □ □ □ □ □ ■ 스탠다드 -->
             <div style="position:absolute; display:flex; flex-direction:column; top: 2532px; left: 3180px; height: 300px; width: 700px; z-index:3; gap:20px; padding:30px; background-color:#b2ddef;
                        /* clip-path: polygon(100% 0%, 32% 0%, 0% 100%, 76% 100%); */
                           clip-path: polygon(76% 0%, 0% 0%, 32% 100%, 100% 100%);"
                        >
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            

             <!--  /////////////////////////// -->

             <!-- 하단 □ □ □ □ □ ■ □ 실버 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 2135px; left: 2888px; height: 350px; width: 254px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;;
                        /* clip-path: polygon(100% -20%, 0% 0%, 0% 100%, 19% 100%); */
                           clip-path: polygon(100% 120%, 0% 100%, 0% 0%, 19% 0%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 하단 □ □ □ □ □ ■ □ 스탠다드 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 2532px; left: 2888px; height: 300px; width: 450px; z-index:3; gap:20px; padding:30px; background-color:#b2ddef;
                        /* clip-path: polygon(100% 0%, 0% 0%, 0% 100%, 50% 100%); */
                           clip-path: polygon(100% 100%, 0% 100%, 0% 0%, 50% 0%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

             <!--  /////////////////////////// -->

             <!-- 하단 □ □ □ □ ■ □ □ 골드 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 2032px; left: 2408px; height: 220px; width: 450px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 하단 □ □ □ □ ■ □ □ 실버 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 2266px; left: 2408px; height: 220px; width: 450px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>
            
            <!--하단  □ □ □ □ ■ □ □ 스탠다드 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 2532px; left: 2408px; height: 300px; width: 450px; z-index:3; gap:20px; padding:30px; background-color:#b2ddef;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>


            <!--  /////////////////////////// -->

            <!-- 하단 □ □ □ ■ □ □ □ 골드 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 2032px; left: 1928px; height: 220px; width: 450px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

             <!-- 하단 □ □ □ ■ □ □ □ 실버 -->
             <div style="position:absolute; display:flex; flex-direction:column; top: 2266px; left: 1928px; height: 220px; width: 450px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 하단 □ □ □ ■ □ □ □ 스탠다드 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 2532px; left: 1928px; height: 300px; width: 450px; z-index:3; gap:20px; padding:30px; background-color:#b2ddef;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>


            <!--  /////////////////////////// -->

            <!-- 하단 □ □ ■ □ □ □ □ 골드 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 2032px; left: 1450px; height: 220px; width: 450px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 하단  □ □ ■ □ □ □ □ 실버 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 2266px; left: 1450px; height: 220px; width: 450px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 하단 □ □ ■ □ □ □ □ 스탠다드 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 2532px; left: 1450px; height: 300px; width: 450px; z-index:3; gap:20px; padding:30px; background-color:#b2ddef;">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            
            <!--  /////////////////////////// -->

            <!-- 하단 □ ■ □ □ □ □ □ 실버 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 2135px; left: 1166px; height: 350px; width: 254px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;;
                        clip-path: polygon(0% 120%, 100% 100%, 100% 0%, 81% 0%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 하단 □ ■ □ □ □ □ □ 스탠다드 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 2532px; left: 970px; height: 300px; width: 450px; z-index:3; gap:20px; padding:30px; background-color:#b2ddef;
                        clip-path: polygon(0% 100%, 100% 100%, 100% 0%, 50% 0%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            


            <!--  /////////////////////////// -->

            <!-- 하단 ■ □ □ □ □ □ □ 실버 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 2135px; left: 640px; height: 350px; width: 610px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;;
                        clip-path: polygon(0% 100%, 62% 100%, 100% 0%, 62% 0%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

           <!-- 하단 ■ □ □ □ □ □ □  스탠다드 -->
           <div style="position:absolute; display:flex; flex-direction:column; top: 2532px; left: 438px; height: 300px; width: 700px; z-index:3; gap:20px; padding:30px; background-color:#b2ddef;
                        clip-path: polygon(0% 100%, 68% 100%, 100% 0%, 24% 0%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>


            <!--  /////////////////////////// -->

            <!-- 좌측 <상>중하 스탠다드 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 337px; left: 278px; height: 800px; width: 350px; z-index:3; gap:20px; padding:30px; background-color:#b2ddef;
                        clip-path: polygon(0% 0%, 100% 31%, 100% 100%, 0% 100%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 좌측 <상>중하 실버 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 587px; left: 655px; height: 550px; width: 350px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;;
                        clip-path: polygon(0% 0%, 100% 64%, 100% 100%, 0% 100%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!--  /////////////////////////// -->

            <!-- 좌측 상<중>하 스탠다드 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 1170px; left: 278px; height: 550px; width: 350px; z-index:3; gap:20px; padding:30px; background-color:#b2ddef;
                        clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 좌측 상<중>하 실버 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 1170px; left: 655px; height: 550px; width: 350px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;;
                        clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!--  /////////////////////////// -->

            <!-- 좌측 상중<하> 스탠다드 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 1770px; left: 278px; height: 800px; width: 350px; z-index:3; gap:20px; padding:30px; background-color:#b2ddef;
                        clip-path: polygon(0% 0%, 100% 0%, 100% 69%, 0% 100%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!-- 좌측 상중<하> 실버 -->
            <div style="position:absolute; display:flex; flex-direction:column; top: 1770px; left: 655px; height: 550px; width: 350px; z-index:3; gap:20px; padding:30px; background-color:#d7ebc2;;
                        clip-path: polygon(0% 0%, 100% 0%, 100% 37%, 0% 100%);">
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: #000099; font-size: 1.1rem; margin-bottom: 30px;">2F ECONOMY(H)<br></p>
                <p style="font-size: 16px; font-weight:bold; text-align: center; color: red; font-size: 0.8rem; margin-bottom: 30px;">※ 해당 Zone은 자율석이며<br>좌석 지정이 불가능합니다.</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <div class="seat_row_items" data-row-type="ECONOMY(H)">
                        <div class="seat_row_item" data-choosable="Y" data-seat-number="0" title="ECONOMY(H)"><span></span></div>
                    </div>
                </div>
            </div>

            <!--  /////////////////////////// -->
            

            

            

            
            

            

           

            <!-- VIP-H ( 하단 □ □ □ ■ )-->
            <div style="position: absolute; z-index:1; top: 1647px; left: 1360px;">
                <div style="position: absolute; z-index:1; top: 0px; left: 0px;">
                    <div class="seat_rows vip_border" style=" z-index:1;padding: 5px; align-items: start;">
                        <? add_row_additional(1, 10, 'A', 'J/K GATE 212구역',$is_admin,"","row"); ?>
                        <? add_row_additional(1, 10, 'B', 'J/K GATE 212구역',$is_admin,"","row"); ?>
                        <? add_row_additional(1, 9, 'C', 'J/K GATE 212구역',$is_admin,"","row"); ?>
                        <? add_row_additional(1, 8, 'D', 'J/K GATE 212구역',$is_admin,"","row"); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 100px; left:0px">
                    <div class="seat_rows vip_border" style=" z-index:1;padding: 5px; align-items: start;">
                        <? add_row_additional(1, 10, 'A', 'J/K GATE 211구역',$is_admin,"","row"); ?>
                        <? add_row_additional(1, 10, 'B', 'J/K GATE 211구역',$is_admin,"","row"); ?>
                        <? add_row_additional(1, 9, 'C', 'J/K GATE 211구역',$is_admin,"","row"); ?>
                        <? add_row_additional(1, 8, 'D', 'J/K GATE 211구역',$is_admin,"","row"); ?>
                    </div>
                </div>
            </div>  












            

                  
            


            <!--------------------------------------------------------------------------------------------------------------->
            <!----------------------------------------- 라인 -------------------------------------------------------------> 
            <!--------------------------------------------------------------------------------------------------------------->
                        

            <!-- <div class="objArea" style="width:750px; height:130px; left:876px; top:242px; border:3px solid black;">오케스트라 무대 (LED)</div> -->
            <!-- <div class="objArea" style="width:88px; height:171px; left:836px; top:1117px; border:3px solid black; font-size:1rem;">응원단상</div> -->
            <!-- <div class="objArea" style="width:88px; height:171px; left:1551px; top:1117px; border:3px solid black; font-size:1rem;">응원단상</div> -->

            <!-- <div class="watermark cheer_black" style="width:500px; height:500px; left:336px; top:958px;"></div> 블랙코너 응원존 -->
            <!-- <div class="watermark cheer_white" style="width:500px; height:500px; left:1631px; top:958px;"></div> 화이트코너 응원존 -->

            <!-- <span style="position: absolute; top: 390px; left:623px; font-size: 1rem; font-weight:bold;">블랙코너 선수 입장 동선</span> -->
            <!-- <span style="position: absolute; top: 390px; left:1691px; font-size: 1rem; font-weight:bold; color:#aaaaaa">화이트코너 선수 입장 동선</span> -->
           

        </div>
    
</div>



<script>
    const canvas = document.getElementById('myCanvas');
    const ctx = canvas.getContext("2d");

    // 안쪽 네모
    // ctx.beginPath();
    // ctx.moveTo(420, 200);
    // ctx.lineTo(420, 2000);
    // ctx.lineTo(1700, 2000);
    // ctx.lineTo(1700, 200);
    // ctx.lineTo(420, 200);
    // ctx.lineWidth = 3;
    // ctx.stroke();
   

    //블랙응원 라인
    // ctx.beginPath();
    // ctx.moveTo(35, 450);
    // ctx.lineTo(35, 1770);
    // ctx.lineTo(758, 1770);
    // ctx.lineTo(758, 802);
    // ctx.lineTo(820, 802);
    // ctx.lineTo(820, 450);
    // ctx.lineTo(31, 450);
    // ctx.strokeStyle = '#dddddd';
    // ctx.lineWidth = 8;
    // ctx.stroke();

    //화이트응원 라인
    // ctx.beginPath();
    // ctx.moveTo(2083, 450);
    // ctx.lineTo(2083, 1770);
    // ctx.lineTo(1355, 1770);
    // ctx.lineTo(1355, 802);
    // ctx.lineTo(1293, 802);
    // ctx.lineTo(1293, 450);
    // ctx.lineTo(2087, 450);
    // ctx.lineWidth = 8;
    // ctx.stroke();

    // 블랙 선수입장동선
    // ctx.beginPath();
    // ctx.moveTo(420, 420);
    // ctx.lineTo(615, 420);
    // ctx.lineTo(915, 975);
    // ctx.lineTo(955, 940);
    // ctx.lineTo(1165, 940);
    // ctx.lineTo(1315, 1095);
    // ctx.lineTo(1315, 1305);
    // ctx.lineTo(1165, 1455);
    // ctx.lineTo(1100, 1455);
    
    // ctx.lineWidth = 2;
    // ctx.setLineDash([10]);
    // ctx.strokeStyle = 'black';
    // ctx.stroke();

    // const bx2 = 1100;
    // const by2 = 1455;
    // const bx1 = 1165;
    // const by1 = 1455;    
    // var radians = Math.atan((by2-by1)/(bx2-bx1));
    // var headRadians = radians + ((bx2>bx1)?-90:90)*Math.PI/180;    
    // drawArrowhead(ctx,bx2,by2,headRadians, 'black');


    // 화이트 선수입장동선
    // ctx.beginPath();
    // ctx.moveTo(1700, 420);
    // ctx.lineTo(1510, 420);
    // ctx.lineTo(1200, 960);
    // ctx.lineTo(1165, 925);
    // ctx.lineTo(945, 925);
    // ctx.lineTo(790, 1090);

    // ctx.lineTo(790, 1300);
    
    // ctx.lineTo(957, 1457);
    // ctx.lineTo(1037, 1457);
    
    // ctx.lineWidth = 2;
    // ctx.setLineDash([10]);
    // ctx.strokeStyle = '#aaaaaa';
    // ctx.stroke();

    // const wx2 = 1037;
    // const wy2 = 1457;
    // const wx1 = 957;
    // const wy1 = 1457;    
    // var radians = Math.atan((wy2-wy1)/(wx2-wx1));
    // var headRadians = radians + ((wx2>wx1)?-90:90)*Math.PI/180;    
    // drawArrowhead(ctx,wx2,wy2,headRadians, '#aaaaaa');


    
    
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