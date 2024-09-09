<style>
    .ga_border .seat_row_item{
        border: 1px solid #aaaaaa;
    }
    .ga_wp_border .seat_row_item{
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

    .pga_border .seat_row_item{
        border: 1px solid #00c3ff;
    }

    .pga_wp_border .seat_row_item{
        border: 1px solid #0063cf;
    }

    .vip_border .seat_row_item {
        border: 1px solid #b991f2;
    }
    .vip_border .seat_row_item[title*="VIP(R)"] {
        border: 1px solid #ffc9f1;
    }
    .vvip_border .seat_row_item{
        border: 1px solid #9bbb59;
    }

    .seat_row_items{
        margin-bottom: 2px;
        flex-direction:row;
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
function add_row($start, $end, $row_type, $is_admin, $style) {
    global $member;
    echo "<div class=\"seat_row_items\" data-row-type=\"$row_type\" style=\"$style\">";

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
            
            <!-- GA-I -->
            <div style="position: absolute; z-index:1; top: 500px; left: 130px;">
                <div class="seat_rows ga_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                    <div class="seat_row_items" data-row-type="GA-I"><? add_items(1, 4, 'blank',$is_admin,""); ?><? add_items(1, 4, 'GA-I',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-I"><? add_items(1, 4, 'blank',$is_admin,""); ?><? add_items(5, 8, 'GA-I',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-I"><? add_items(1, 3, 'blank',$is_admin,""); ?><? add_items(9, 13, 'GA-I',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-I"><? add_items(1, 3, 'blank',$is_admin,""); ?><? add_items(14, 18, 'GA-I',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-I"><? add_items(1, 3, 'blank',$is_admin,""); ?><? add_items(19, 29, 'GA-I',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-I"><? add_items(1, 2, 'blank',$is_admin,""); ?><? add_items(30, 41, 'GA-I',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-I"><? add_items(1, 2, 'blank',$is_admin,""); ?><? add_items(42, 53, 'GA-I',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-I"><? add_items(1, 2, 'blank',$is_admin,""); ?><? add_items(54, 65, 'GA-I',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-I"><? add_items(1, 1, 'blank',$is_admin,""); ?><? add_items(66, 78, 'GA-I',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-I"><? add_items(1, 1, 'blank',$is_admin,""); ?><? add_items(79, 91, 'GA-I',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-I"><? add_items(1, 1, 'blank',$is_admin,""); ?><? add_items(92, 104, 'GA-I',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-I"><? add_items(1, 1, 'blank',$is_admin,""); ?><? add_items(105, 117, 'GA-I',$is_admin,""); ?></div>
                    <? add_row(118, 131,   'GA-I',$is_admin,""); ?>
                    <? add_row(132, 145,   'GA-I',$is_admin,""); ?>
                    <? add_row(146, 159,  'GA-I',$is_admin,""); ?>
                    <? add_row(160, 173, 'GA-I',$is_admin,""); ?>
                    <? add_row(174, 187, 'GA-I',$is_admin,""); ?>
                    <? add_row(188, 201, 'GA-I',$is_admin,""); ?>
                    <? add_row(202, 215, 'GA-I',$is_admin,""); ?>
                    <? add_row(216, 229, 'GA-I',$is_admin,""); ?>
                    <? add_row(230, 243, 'GA-I',$is_admin,""); ?>
                </div>
            </div>

            <!-- GA-J -->
            <div style="position: absolute; z-index:1; top:1050px; left: 130px;">
                <div class="seat_rows ga_wp_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-J"><? add_items(1, 7, 'GA(W_PKG)-J',$is_admin,""); ?><? add_items(8, 8, 'undivide',$is_admin,""); ?><? add_items(9, 14, 'GA(W_PKG)-J',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-J"><? add_items(15, 21, 'GA(W_PKG)-J',$is_admin,""); ?><? add_items(22, 22, 'undivide',$is_admin,""); ?><? add_items(23, 28, 'GA(W_PKG)-J',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-J"><? add_items(29, 35, 'GA(W_PKG)-J',$is_admin,""); ?><? add_items(36, 36, 'undivide',$is_admin,""); ?><? add_items(37, 42, 'GA(W_PKG)-J',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-J"><? add_items(43, 49, 'GA(W_PKG)-J',$is_admin,""); ?><? add_items(50, 50, 'undivide',$is_admin,""); ?><? add_items(51, 56, 'GA(W_PKG)-J',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-J"><? add_items(57, 63, 'GA(W_PKG)-J',$is_admin,""); ?><? add_items(64, 64, 'undivide',$is_admin,""); ?><? add_items(65, 70, 'GA(W_PKG)-J',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-J"><? add_items(71, 77, 'GA(W_PKG)-J',$is_admin,""); ?><? add_items(78, 78, 'undivide',$is_admin,""); ?><? add_items(79, 84, 'GA(W_PKG)-J',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-J"><? add_items(85, 91, 'GA(W_PKG)-J',$is_admin,""); ?><? add_items(92, 92, 'undivide',$is_admin,""); ?><? add_items(93, 98, 'GA(W_PKG)-J',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-J"><? add_items(99, 105, 'GA(W_PKG)-J',$is_admin,""); ?><? add_items(106, 106, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-J"><? add_items(107, 113, 'GA(W_PKG)-J',$is_admin,""); ?><? add_items(114, 114, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-J"><? add_items(115, 121, 'GA(W_PKG)-J',$is_admin,""); ?><? add_items(122, 122, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-J"><? add_items(123, 129, 'GA(W_PKG)-J',$is_admin,""); ?><? add_items(130, 130, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-J"><? add_items(131, 137, 'GA(W_PKG)-J',$is_admin,""); ?><? add_items(138, 138, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-J"><? add_items(139, 145, 'GA(W_PKG)-J',$is_admin,""); ?><? add_items(146, 146, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-J"><? add_items(147, 153, 'GA(W_PKG)-J',$is_admin,""); ?><? add_items(154, 154, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-J"><? add_items(155, 161, 'GA(W_PKG)-J',$is_admin,""); ?><? add_items(162, 162, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-J"><? add_items(163, 169, 'GA(W_PKG)-J',$is_admin,""); ?><? add_items(170, 170, 'undivide',$is_admin,""); ?><? add_items(171, 176, 'GA(W_PKG)-J',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-J"><? add_items(177, 183, 'GA(W_PKG)-J',$is_admin,""); ?><? add_items(184, 184, 'undivide',$is_admin,""); ?><? add_items(185, 190, 'GA(W_PKG)-J',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-J"><? add_items(191, 197, 'GA(W_PKG)-J',$is_admin,""); ?><? add_items(198, 198, 'undivide',$is_admin,""); ?><? add_items(199, 204, 'GA(W_PKG)-J',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-J"><? add_items(205, 211, 'GA(W_PKG)-J',$is_admin,""); ?><? add_items(212, 212, 'undivide',$is_admin,""); ?><? add_items(213, 218, 'GA(W_PKG)-J',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-J"><? add_items(219, 225, 'GA(W_PKG)-J',$is_admin,""); ?><? add_items(226, 226, 'undivide',$is_admin,""); ?><? add_items(227, 232, 'GA(W_PKG)-J',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-J"><? add_items(233, 233, 'blank',$is_admin,""); ?><? add_items(234, 239, 'GA(W_PKG)-J',$is_admin,""); ?><? add_items(240, 240, 'undivide',$is_admin,""); ?><? add_items(241, 246, 'GA(W_PKG)-J',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-J"><? add_items(247, 247, 'blank',$is_admin,""); ?><? add_items(248, 253, 'GA(W_PKG)-J',$is_admin,""); ?><? add_items(254, 254, 'undivide',$is_admin,""); ?><? add_items(255, 260, 'GA(W_PKG)-J',$is_admin,""); ?></div>
                </div>
            </div>

            <!-- GA-J 추가블럭) -->
            <div style="position: absolute; z-index:1; top: 1495px; left: 135px;">
                <div class="seat_rows ga_border" style="row-gap:4px; z-index:1; align-items: end;">
                    <? add_row(233, 233, 'GA-I',$is_admin,""); ?>
                    <? add_row(247, 247, 'GA-I',$is_admin,""); ?>
                </div>
            </div>

            <!-- GA-K -->
            <div style="position: absolute; z-index:1; top: 1605px;; left: 130px;">
                <div class="seat_rows ga_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                    <? add_row(1, 14,   'GA-K',$is_admin,""); ?>
                    <? add_row(15, 28,   'GA-K',$is_admin,""); ?>
                    <? add_row(29, 42,   'GA-K',$is_admin,""); ?>
                    <? add_row(43, 56,   'GA-K',$is_admin,""); ?>
                    <? add_row(57, 70,   'GA-K',$is_admin,""); ?>
                    <? add_row(71, 84,   'GA-K',$is_admin,""); ?>
                    <? add_row(85, 98,   'GA-K',$is_admin,""); ?>
                    <? add_row(99, 112,   'GA-K',$is_admin,""); ?>
                    <? add_row(113, 126,   'GA-K',$is_admin,""); ?>
                    <? add_row(127, 140,   'GA-K',$is_admin,""); ?>
                    <? add_row(141, 154,   'GA-K',$is_admin,""); ?>
                    <? add_row(155, 168,   'GA-K',$is_admin,""); ?>
                    <? add_row(169, 182,   'GA-K',$is_admin,""); ?>
                    <? add_row(183, 196,   'GA-K',$is_admin,""); ?>
                    <? add_row(197, 210,   'GA-K',$is_admin,""); ?>
                    <? add_row(211, 224,   'GA-K',$is_admin,""); ?>
                    <? add_row(225, 238,   'GA-K',$is_admin,""); ?>
                    <? add_row(239, 246,   'GA-K',$is_admin,""); ?>
                    <? add_row(247, 254,   'GA-K',$is_admin,""); ?>
                    <? add_row(255, 262,   'GA-K',$is_admin,""); ?>
                    <div class="seat_row_items" data-row-type="GA-K"><? add_items(1, 1, 'blank',$is_admin,""); ?><? add_items(263, 269, 'GA-K',$is_admin,""); ?></div>
                </div>
            </div>

            <!-- GA-L -->
            <div style="position: absolute; z-index:1; top: 2140px;; left: 130px;">
                <div class="seat_rows ga_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                    <div class="seat_row_items" data-row-type="GA-L"><? add_items(1, 6, 'GA-L',$is_admin,""); ?><? add_items(1, 6, 'blank',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-L"><? add_items(7, 12, 'GA-L',$is_admin,""); ?><? add_items(1, 6, 'blank',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-L"><? add_items(13, 18, 'GA-L',$is_admin,""); ?><? add_items(1, 6, 'blank',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-L"><? add_items(19, 24, 'GA-L',$is_admin,""); ?><? add_items(1, 6, 'blank',$is_admin,""); ?></div>
                    <? add_row(25, 35,   'GA-L',$is_admin,""); ?>
                    <? add_row(36, 46,   'GA-L',$is_admin,""); ?>
                    <? add_row(47, 57,   'GA-L',$is_admin,""); ?>
                    <? add_row(58, 68,   'GA-L',$is_admin,""); ?>
                    <? add_row(69, 79,   'GA-L',$is_admin,""); ?>
                    <? add_row(80, 89,   'GA-L',$is_admin,""); ?>
                    <? add_row(90, 99,   'GA-L',$is_admin,""); ?>
                    <? add_row(100, 109,   'GA-L',$is_admin,""); ?>
                    <? add_row(110, 119,   'GA-L',$is_admin,""); ?>
                    <? add_row(120, 129,   'GA-L',$is_admin,""); ?>
                    <? add_row(130, 138,   'GA-L',$is_admin,""); ?>
                    <? add_row(139, 147,   'GA-L',$is_admin,""); ?>
                    <? add_row(148, 156,   'GA-L',$is_admin,""); ?>
                    <? add_row(157, 165,   'GA-L',$is_admin,""); ?>
                    <div class="seat_row_items" data-row-type="GA-L"><? add_items(166, 172, 'GA-L',$is_admin,""); ?><? add_items(1, 1, 'blank',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-L"><? add_items(173, 179, 'GA-L',$is_admin,""); ?><? add_items(1, 2, 'blank',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-L"><? add_items(180, 184, 'GA-L',$is_admin,""); ?><? add_items(1, 4, 'blank',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-L">
                        <? add_items(185, 188, 'GA-L',$is_admin,""); ?>
                        <? add_items(1, 1, 'blank',$is_admin,""); ?>
                        <? add_items(189, 190, 'GA-L',$is_admin,""); ?>
                        <? add_items(1, 2, 'blank',$is_admin,""); ?>
                    </div>
                    <div class="seat_row_items" data-row-type="GA-L">
                        <? add_items(191,191, 'GA-L',$is_admin,""); ?>
                        <? add_items(1, 3, 'blank',$is_admin,""); ?>
                        <? add_items(192, 193, 'GA-L',$is_admin,""); ?>
                        <? add_items(1, 3, 'blank',$is_admin,""); ?>
                    </div>
                    <div class="seat_row_items" data-row-type="GA-L"><? add_items(194, 197, 'GA-L',$is_admin,""); ?><? add_items(1, 4, 'blank',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-L"><? add_items(198, 200, 'GA-L',$is_admin,""); ?><? add_items(1, 5, 'blank',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-L"><? add_items(201, 203, 'GA-L',$is_admin,""); ?><? add_items(1, 5, 'blank',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-L"><? add_items(204, 205, 'GA-L',$is_admin,""); ?><? add_items(1, 6, 'blank',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-L"><? add_items(206, 207, 'GA-L',$is_admin,""); ?><? add_items(1, 6, 'blank',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-L"><? add_items(208, 209, 'GA-L',$is_admin,""); ?><? add_items(1, 6, 'blank',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-L"><? add_items(210, 211, 'GA-L',$is_admin,""); ?><? add_items(1, 6, 'blank',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-L"><? add_items(212, 212, 'GA-L',$is_admin,""); ?><? add_items(1, 6, 'blank',$is_admin,""); ?></div>                    
                </div>
            </div>

            <!-- GA-M-part1 -->
            <div style="position: absolute; z-index:1; top: 2711px;; left: 360px;">
                <div class="seat_rows ga_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                    <? add_row(1, 14,   'GA-M',$is_admin,""); ?>
                    <? add_row(15, 28,   'GA-M',$is_admin,""); ?>

                    <div class="seat_row_items" data-row-type="GA-M"><? add_items(29, 29, 'GA-M',$is_admin,""); ?><? add_items(1, 1, 'blank',$is_admin,""); ?><? add_items(30, 44, 'GA-M',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-M"><? add_items(45, 46, 'GA-M',$is_admin,""); ?><? add_items(1, 1, 'blank',$is_admin,""); ?><? add_items(47, 61, 'GA-M',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-M"><? add_items(62, 63, 'GA-M',$is_admin,""); ?><? add_items(1, 1, 'blank',$is_admin,""); ?><? add_items(64, 79, 'GA-M',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-M"><? add_items(80, 82, 'GA-M',$is_admin,""); ?><? add_items(1, 1, 'blank',$is_admin,""); ?><? add_items(83, 99, 'GA-M',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-M"><? add_items(105, 107, 'GA-M',$is_admin,""); ?><? add_items(1, 1, 'blank',$is_admin,""); ?><? add_items(108, 124, 'GA-M',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-M"><? add_items(131, 132, 'GA-M',$is_admin,""); ?><? add_items(1, 1, 'blank',$is_admin,""); ?><? add_items(133, 150, 'GA-M',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-M"><? add_items(159, 159, 'GA-M',$is_admin,""); ?><? add_items(1, 1, 'blank',$is_admin,""); ?><? add_items(160, 178, 'GA-M',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-M"><? add_items(188, 188, 'GA-M',$is_admin,""); ?><? add_items(1, 1, 'blank',$is_admin,""); ?><? add_items(189, 207, 'GA-M',$is_admin,""); ?></div>
                    <? add_row(215, 234,   'GA-M',$is_admin,""); ?>
                </div>
            </div>

            <!-- GA-M-part2 -->
            <div style="position: absolute; z-index:1; top: 2848px;; left: 203px;">
                <div class="seat_rows ga_border" style="row-gap:4px; z-index:1; align-items: end;">
                    <? add_row(100, 104,   'GA-M',$is_admin,""); ?>
                    <? add_row(125, 130,   'GA-M',$is_admin,""); ?>
                    <? add_row(151, 158,   'GA-M',$is_admin,""); ?>
                    <? add_row(179, 187,   'GA-M',$is_admin,""); ?>
                    <? add_row(208, 214,   'GA-M',$is_admin,""); ?>
                </div>
            </div>

            <!-- GA-N -->
            <div style="position: absolute; z-index:1; top: 2711px;; left: 838px;">
                <div class="seat_rows ga_border" style="row-gap:4px; z-index:1; padding: 5px; align-items: start;">
                    <? add_row(1, 12,   'GA-N',$is_admin,""); ?>
                    <? add_row(13, 24,   'GA-N',$is_admin,""); ?>
                    <? add_row(25, 36,   'GA-N',$is_admin,""); ?>
                    <? add_row(37, 48,   'GA-N',$is_admin,""); ?>
                    <? add_row(49, 60,   'GA-N',$is_admin,""); ?>
                    <? add_row(61, 72,   'GA-N',$is_admin,""); ?>
                    <? add_row(73, 91,   'GA-N',$is_admin,""); ?>
                    <? add_row(92, 110,   'GA-N',$is_admin,""); ?>
                    <? add_row(111, 129,   'GA-N',$is_admin,""); ?>
                    <? add_row(130, 148,   'GA-N',$is_admin,""); ?>
                    <? add_row(149, 167,   'GA-N',$is_admin,""); ?>
                </div>
            </div>

            <!-- GA-A -->
            <div style="position: absolute; z-index:1; top: 2711px;; left: 1275px;">
                <div class="seat_rows ga_border" style="row-gap:4px; z-index:1; padding: 5px; align-items: end;">
                    <? add_row(1, 12,   'GA-A',$is_admin,""); ?>
                    <? add_row(13, 24,   'GA-A',$is_admin,""); ?>
                    <? add_row(25, 36,   'GA-A',$is_admin,""); ?>
                    <? add_row(37, 48,   'GA-A',$is_admin,""); ?>
                    <? add_row(49, 60,   'GA-A',$is_admin,""); ?>
                    <? add_row(61, 72,   'GA-A',$is_admin,""); ?>
                    <? add_row(73, 91,   'GA-A',$is_admin,""); ?>
                    <? add_row(92, 110,   'GA-A',$is_admin,""); ?>
                    <? add_row(111, 129,   'GA-A',$is_admin,""); ?>
                    <? add_row(130, 148,   'GA-A',$is_admin,""); ?>
                    <? add_row(149, 167,   'GA-A',$is_admin,""); ?>
                </div>
            </div>

            <!-- GA-B-part1 -->
            <div style="position: absolute; z-index:1; top: 2711px;; left: 1726px;">
                <div class="seat_rows ga_border" style="row-gap:4px; z-index:1; padding: 5px; align-items: start;">
                    <? add_row(1, 13,   'GA-B',$is_admin,""); ?>
                    <div class="seat_row_items" data-row-type="GA-B"><? add_items(14, 27, 'GA-B',$is_admin,""); ?><? add_items(1, 1, 'blank',$is_admin,""); ?><? add_items(28, 28, 'GA-B',$is_admin,""); ?></div>
                    <? add_row(29, 43,   'GA-B',$is_admin,""); ?>
                    <? add_row(45, 59,   'GA-B',$is_admin,""); ?>
                    <? add_row(62, 76,   'GA-B',$is_admin,""); ?>
                    <? add_row(80, 95,   'GA-B',$is_admin,""); ?>
                    <? add_row(99, 114,   'GA-B',$is_admin,""); ?>
                    <? add_row(124, 139,   'GA-B',$is_admin,""); ?>
                    <? add_row(150, 165,   'GA-B',$is_admin,""); ?>
                    <? add_row(177, 192,   'GA-B',$is_admin,""); ?>
                    <? add_row(206, 221,   'GA-B',$is_admin,""); ?>
                </div>
            </div>

            <!-- GA-B-part2 -->
            <div style="position: absolute; z-index:1; top: 2754px;; left: 2026px;">
                <div class="seat_rows ga_border" style="row-gap:4px; z-index:1; padding: 5px; align-items: start;">
                    <? add_row(44, 44,   'GA-B',$is_admin,""); ?>
                    <? add_row(60, 61,   'GA-B',$is_admin,""); ?>
                    <? add_row(77, 79,   'GA-B',$is_admin,""); ?>
                    <div class="seat_row_items" data-row-type="GA-B"><? add_items(1, 1, 'blank',$is_admin,""); ?><? add_items(96, 98, 'GA-B',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-B"><? add_items(115, 115, 'GA-B',$is_admin,""); ?><? add_items(1, 1, 'blank',$is_admin,""); ?><? add_items(116, 123, 'GA-B',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-B"><? add_items(140, 141, 'GA-B',$is_admin,""); ?><? add_items(1, 1, 'blank',$is_admin,""); ?><? add_items(142, 149, 'GA-B',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-B"><? add_items(166, 167, 'GA-B',$is_admin,""); ?><? add_items(1, 1, 'blank',$is_admin,""); ?><? add_items(168, 176, 'GA-B',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-B"><? add_items(193, 195, 'GA-B',$is_admin,""); ?><? add_items(1, 1, 'blank',$is_admin,""); ?><? add_items(196, 205, 'GA-B',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-B"><? add_items(222, 225, 'GA-B',$is_admin,""); ?><? add_items(1, 1, 'blank',$is_admin,""); ?><? add_items(226, 231, 'GA-B',$is_admin,""); ?></div>
                </div>
            </div>

            <!-- GA-C -->
            <div style="position: absolute; z-index:1; top: 2141px;; left: 2101px;">
                <div class="seat_rows ga_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                    <div class="seat_row_items" data-row-type="GA-C"><? add_items(1, 6, 'blank',$is_admin,""); ?><? add_items(1, 6, 'GA-C',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-C"><? add_items(1, 6, 'blank',$is_admin,""); ?><? add_items(7, 12, 'GA-C',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-C"><? add_items(1, 6, 'blank',$is_admin,""); ?><? add_items(13, 18, 'GA-C',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-C"><? add_items(1, 6, 'blank',$is_admin,""); ?><? add_items(19, 24, 'GA-C',$is_admin,""); ?></div>
                    <? add_row(25, 35,   'GA-C',$is_admin,""); ?>
                    <? add_row(36, 46,   'GA-C',$is_admin,""); ?>
                    <? add_row(47, 57,   'GA-C',$is_admin,""); ?>
                    <? add_row(58, 68,   'GA-C',$is_admin,""); ?>
                    <? add_row(69, 79,   'GA-C',$is_admin,""); ?>
                    <? add_row(80, 89,   'GA-C',$is_admin,""); ?>
                    <? add_row(90, 99,   'GA-C',$is_admin,""); ?>
                    <? add_row(100, 109,   'GA-C',$is_admin,""); ?>
                    <? add_row(110, 119,   'GA-C',$is_admin,""); ?>
                    <? add_row(120, 129,   'GA-C',$is_admin,""); ?>
                    <? add_row(130, 138,   'GA-C',$is_admin,""); ?>
                    <? add_row(139, 147,   'GA-C',$is_admin,""); ?>
                    <? add_row(148, 156,   'GA-C',$is_admin,""); ?>
                    <? add_row(157, 165,   'GA-C',$is_admin,""); ?>

                    <div class="seat_row_items" data-row-type="GA-C"><? add_items(1, 1, 'blank',$is_admin,""); ?><? add_items(166, 172, 'GA-C',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-C"><? add_items(1, 2, 'blank',$is_admin,""); ?><? add_items(173, 179, 'GA-C',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-C">
                        <? add_items(1, 1, 'blank',$is_admin,""); ?>
                        <? add_items(180, 180, 'GA-C',$is_admin,""); ?>
                        <? add_items(1, 2, 'blank',$is_admin,""); ?>
                        <? add_items(181, 185, 'GA-C',$is_admin,""); ?>
                    </div>
                    <div class="seat_row_items" data-row-type="GA-C">
                        <? add_items(1, 2, 'blank',$is_admin,""); ?>
                        <? add_items(186, 187, 'GA-C',$is_admin,""); ?>
                        <? add_items(1, 1, 'blank',$is_admin,""); ?>
                        <? add_items(188, 191, 'GA-C',$is_admin,""); ?>
                    </div>
                    <div class="seat_row_items" data-row-type="GA-C">
                        <? add_items(1, 3, 'blank',$is_admin,""); ?>
                        <? add_items(192,193, 'GA-C',$is_admin,""); ?>
                        <? add_items(1, 3, 'blank',$is_admin,""); ?>
                        <? add_items(194, 194, 'GA-C',$is_admin,""); ?>
                    </div>
                    <div class="seat_row_items" data-row-type="GA-C"><? add_items(1, 4, 'blank',$is_admin,""); ?><? add_items(195, 198, 'GA-C',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-C"><? add_items(1, 4, 'blank',$is_admin,""); ?><? add_items(199, 202, 'GA-C',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-C"><? add_items(1, 5, 'blank',$is_admin,""); ?><? add_items(203, 205, 'GA-C',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-C"><? add_items(1, 6, 'blank',$is_admin,""); ?><? add_items(206, 207, 'GA-C',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-C"><? add_items(1, 6, 'blank',$is_admin,""); ?><? add_items(208, 209, 'GA-C',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-C"><? add_items(1, 6, 'blank',$is_admin,""); ?><? add_items(210, 211, 'GA-C',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-C"><? add_items(1, 6, 'blank',$is_admin,""); ?><? add_items(212, 213, 'GA-C',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-C"><? add_items(1, 6, 'blank',$is_admin,""); ?><? add_items(214, 215, 'GA-C',$is_admin,""); ?></div>
                </div>
            </div>

            <!-- GA-D -->
            <div style="position: absolute; z-index:1; top: 1605px;; left: 2101px;">
                <div class="seat_rows ga_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                    <? add_row(1, 14,   'GA-D',$is_admin,""); ?>
                    <? add_row(15, 28,   'GA-D',$is_admin,""); ?>
                    <? add_row(29, 42,   'GA-D',$is_admin,""); ?>
                    <? add_row(43, 56,   'GA-D',$is_admin,""); ?>
                    <? add_row(57, 70,   'GA-D',$is_admin,""); ?>
                    <? add_row(71, 84,   'GA-D',$is_admin,""); ?>
                    <? add_row(85, 98,   'GA-D',$is_admin,""); ?>
                    <? add_row(99, 112,   'GA-D',$is_admin,""); ?>
                    <? add_row(113, 126,   'GA-D',$is_admin,""); ?>
                    <? add_row(127, 140,   'GA-D',$is_admin,""); ?>
                    <? add_row(141, 154,   'GA-D',$is_admin,""); ?>
                    <? add_row(155, 168,   'GA-D',$is_admin,""); ?>
                    <? add_row(169, 182,   'GA-D',$is_admin,""); ?>
                    <? add_row(183, 196,   'GA-D',$is_admin,""); ?>
                    <? add_row(197, 210,   'GA-D',$is_admin,""); ?>
                    <? add_row(211, 224,   'GA-D',$is_admin,""); ?>
                    <? add_row(225, 238,   'GA-D',$is_admin,""); ?>
                    <? add_row(239, 246,   'GA-D',$is_admin,""); ?>
                    <? add_row(247, 254,   'GA-D',$is_admin,""); ?>
                    <div class="seat_row_items" data-row-type="GA-D"><? add_items(255, 261, 'GA-D',$is_admin,""); ?><? add_items(1, 1, 'blank',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-D"><? add_items(262, 268, 'GA-D',$is_admin,""); ?><? add_items(1, 1, 'blank',$is_admin,""); ?></div>
                </div>
            </div>

            <!-- GA-E -->
            <div style="position: absolute; z-index:1; top:1050px; left: 2101px;">
                <div class="seat_rows ga_wp_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-E"><? add_items(1, 6, 'GA(W_PKG)-E',$is_admin,""); ?><? add_items(7, 7, 'undivide',$is_admin,""); ?><? add_items(8, 13, 'GA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-E"><? add_items(15, 20, 'GA(W_PKG)-E',$is_admin,""); ?><? add_items(21, 21, 'undivide',$is_admin,""); ?><? add_items(22, 27, 'GA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-E"><? add_items(29, 34, 'GA(W_PKG)-E',$is_admin,""); ?><? add_items(35, 35, 'undivide',$is_admin,""); ?><? add_items(36, 41, 'GA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-E"><? add_items(43, 48, 'GA(W_PKG)-E',$is_admin,""); ?><? add_items(49, 49, 'undivide',$is_admin,""); ?><? add_items(50, 55, 'GA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-E"><? add_items(57, 62, 'GA(W_PKG)-E',$is_admin,""); ?><? add_items(63, 63, 'undivide',$is_admin,""); ?><? add_items(64, 69, 'GA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-E"><? add_items(71, 76, 'GA(W_PKG)-E',$is_admin,""); ?><? add_items(77, 77, 'undivide',$is_admin,""); ?><? add_items(78, 83, 'GA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-E"><? add_items(85, 90, 'GA(W_PKG)-E',$is_admin,""); ?><? add_items(91, 91, 'undivide',$is_admin,""); ?><? add_items(92, 97, 'GA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-E"><? add_items(99, 99, 'undivide',$is_admin,""); ?><? add_items(100, 105, 'GA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-E"><? add_items(107, 107, 'undivide',$is_admin,""); ?><? add_items(108, 113, 'GA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-E"><? add_items(115, 115, 'undivide',$is_admin,""); ?><? add_items(116, 121, 'GA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-E"><? add_items(123, 123, 'undivide',$is_admin,""); ?><? add_items(124, 129, 'GA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-E"><? add_items(131, 131, 'undivide',$is_admin,""); ?><? add_items(132, 137, 'GA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-E"><? add_items(139, 139, 'undivide',$is_admin,""); ?><? add_items(140, 145, 'GA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-E"><? add_items(147, 147, 'undivide',$is_admin,""); ?><? add_items(148, 153, 'GA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-E"><? add_items(155, 155, 'undivide',$is_admin,""); ?><? add_items(156, 161, 'GA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-E"><? add_items(163, 168, 'GA(W_PKG)-E',$is_admin,""); ?><? add_items(169, 169, 'undivide',$is_admin,""); ?><? add_items(170, 175, 'GA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-E"><? add_items(177, 182, 'GA(W_PKG)-E',$is_admin,""); ?><? add_items(183, 183, 'undivide',$is_admin,""); ?><? add_items(184, 189, 'GA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-E"><? add_items(191, 196, 'GA(W_PKG)-E',$is_admin,""); ?><? add_items(197, 197, 'undivide',$is_admin,""); ?><? add_items(198, 203, 'GA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-E"><? add_items(205, 210, 'GA(W_PKG)-E',$is_admin,""); ?><? add_items(211, 211, 'undivide',$is_admin,""); ?><? add_items(212, 217, 'GA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-E"><? add_items(219, 224, 'GA(W_PKG)-E',$is_admin,""); ?><? add_items(225, 225, 'undivide',$is_admin,""); ?><? add_items(226, 231, 'GA(W_PKG)-E',$is_admin,""); ?></div>

                    <div class="seat_row_items" data-row-type="GA(W_PKG)-E"><? add_items(233, 238, 'GA(W_PKG)-E',$is_admin,""); ?><? add_items(239, 239, 'undivide',$is_admin,""); ?><? add_items(240, 245, 'GA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA(W_PKG)-E"><? add_items(247, 252, 'GA(W_PKG)-E',$is_admin,""); ?><? add_items(253, 253, 'undivide',$is_admin,""); ?><? add_items(254, 259, 'GA(W_PKG)-E',$is_admin,""); ?></div>
                </div>
            </div>

            <!-- GA-E 추가블럭) -->
            <div style="position: absolute; z-index:1; top: 1055px; left: 2340px;">
                <div class="seat_rows ga_border" style="row-gap:4px; z-index:1; align-items: end;">
                    <? add_row(14, 14, 'GA-E',$is_admin,""); ?>
                    <? add_row(28, 28, 'GA-E',$is_admin,""); ?>
                    <? add_row(42, 42, 'GA-E',$is_admin,""); ?>
                    <? add_row(56, 56, 'GA-E',$is_admin,""); ?>
                    <? add_row(70, 70, 'GA-E',$is_admin,""); ?>
                    <? add_row(84, 84, 'GA-E',$is_admin,""); ?>
                    <? add_row(98, 98, 'GA-E',$is_admin,""); ?>
                    <? add_row(106, 106, 'GA-E',$is_admin,""); ?>
                    <? add_row(114, 114, 'GA-E',$is_admin,""); ?>
                    <? add_row(122, 122, 'GA-E',$is_admin,""); ?>
                    <? add_row(130, 130, 'GA-E',$is_admin,""); ?>
                    <? add_row(138, 138, 'GA-E',$is_admin,""); ?>
                    <? add_row(146, 146, 'GA-E',$is_admin,""); ?>
                    <? add_row(154, 154, 'GA-E',$is_admin,""); ?>
                    <? add_row(162, 162, 'GA-E',$is_admin,""); ?>
                    <? add_row(176, 176, 'GA-E',$is_admin,""); ?>
                    <? add_row(190, 190, 'GA-E',$is_admin,""); ?>
                    <? add_row(204, 204, 'GA-E',$is_admin,""); ?>
                    <? add_row(218, 218, 'GA-E',$is_admin,""); ?>
                    <? add_row(232, 232, 'GA-E',$is_admin,""); ?>
                    <? add_row(246, 246, 'GA-E',$is_admin,""); ?>
                    <? add_row(260, 260, 'GA-E',$is_admin,""); ?>
                </div>
            </div>

            <!-- GA-F -->
            <div style="position: absolute; z-index:1; top: 500px; left: 2101px;">
                <div class="seat_rows ga_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                    <div class="seat_row_items" data-row-type="GA-F"><? add_items(1, 4, 'GA-F',$is_admin,""); ?><? add_items(1, 4, 'blank',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-F"><? add_items(5, 8, 'GA-F',$is_admin,""); ?><? add_items(1, 4, 'blank',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-F"><? add_items(9, 13, 'GA-F',$is_admin,""); ?><? add_items(1, 3, 'blank',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-F"><? add_items(14, 18, 'GA-F',$is_admin,""); ?><? add_items(1, 3, 'blank',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-F"><? add_items(19, 29, 'GA-F',$is_admin,""); ?><? add_items(1, 3, 'blank',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-F"><? add_items(30, 41, 'GA-F',$is_admin,""); ?><? add_items(1, 2, 'blank',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-F"><? add_items(42, 53, 'GA-F',$is_admin,""); ?><? add_items(1, 2, 'blank',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-F"><? add_items(54, 65, 'GA-F',$is_admin,""); ?><? add_items(1, 2, 'blank',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-F"><? add_items(66, 78, 'GA-F',$is_admin,""); ?><? add_items(1, 1, 'blank',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-F"><? add_items(79, 91, 'GA-F',$is_admin,""); ?><? add_items(1, 1, 'blank',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="GA-F"><? add_items(92, 104, 'GA-F',$is_admin,""); ?><? add_items(1, 1, 'blank',$is_admin,""); ?></div>
                    <? add_row(105, 118,   'GA-F',$is_admin,""); ?>
                    <? add_row(119, 132,   'GA-F',$is_admin,""); ?>
                    <? add_row(133, 146,   'GA-F',$is_admin,""); ?>
                    <? add_row(147, 160,  'GA-F',$is_admin,""); ?>
                    <? add_row(161, 174, 'GA-F',$is_admin,""); ?>
                    <? add_row(175, 188, 'GA-F',$is_admin,""); ?>
                    <? add_row(189, 202, 'GA-F',$is_admin,""); ?>
                    <? add_row(203, 216, 'GA-F',$is_admin,""); ?>
                    <? add_row(217, 230, 'GA-F',$is_admin,""); ?>
                    <? add_row(231, 244, 'GA-F',$is_admin,""); ?>
                </div>
            </div>
            
            <!--------------------------------------------------------------------------------------------------------------->
            <!----------------------------------------- PGA 유형 : 11시부터 U자 그리면서 구현  -------------------------------------------------------------> 
            <!--------------------------------------------------------------------------------------------------------------->
            <!-- PGA-I -->
            <div style="position: absolute; z-index:1; top: 500px; left: 450px;">
                <div class="seat_rows pga_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                    <? add_row(1, 5,   'PGA-I',$is_admin,""); ?>
                    <? add_row(6, 10,   'PGA-I',$is_admin,""); ?>
                    <? add_row(11, 15,  'PGA-I',$is_admin,""); ?>
                    <? add_row(16, 20, 'PGA-I',$is_admin,""); ?>
                    <? add_row(21, 25, 'PGA-I',$is_admin,""); ?>
                    <? add_row(26, 30, 'PGA-I',$is_admin,""); ?>
                    <? add_row(31, 35, 'PGA-I',$is_admin,""); ?>
                    <? add_row(36, 40, 'PGA-I',$is_admin,""); ?>
                    <? add_row(41, 45, 'PGA-I',$is_admin,""); ?>
                    <? add_row(46, 50, 'PGA-I',$is_admin,""); ?>
                    <? add_row(51, 55, 'PGA-I',$is_admin,""); ?>
                    <div class="seat_row_items" data-row-type="PGA-I"><? add_items(56, 56, 'undivide',$is_admin,""); ?> <? add_items(57, 60, 'PGA-I',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA-I"><? add_items(61, 61, 'undivide',$is_admin,""); ?> <? add_items(62, 65, 'PGA-I',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA-I"><? add_items(66, 66, 'undivide',$is_admin,""); ?> <? add_items(67, 70, 'PGA-I',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA-I"><? add_items(71, 71, 'undivide',$is_admin,""); ?> <? add_items(72, 75, 'PGA-I',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA-I"><? add_items(76, 76, 'undivide',$is_admin,""); ?> <? add_items(77, 80, 'PGA-I',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA-I"><? add_items(81, 81, 'undivide',$is_admin,""); ?> <? add_items(82, 85, 'PGA-I',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA-I"><? add_items(86, 86, 'undivide',$is_admin,""); ?> <? add_items(87, 90, 'PGA-I',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA-I"><? add_items(91, 91, 'undivide',$is_admin,""); ?> <? add_items(92, 95, 'PGA-I',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA-I"><? add_items(96, 96, 'undivide',$is_admin,""); ?> <? add_items(97, 100, 'PGA-I',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA-I"><? add_items(101, 101, 'undivide',$is_admin,""); ?> <? add_items(102, 105, 'PGA-I',$is_admin,""); ?></div>
                </div>
            </div>

            <!-- PGA-J -->
            <div class="objArea" style="width:32px; height:478px; left:457px; top:1050px; border:2px solid black; padding:10px; background-color:white; z-index:2; font-size:1.2rem;" onclick="alert('구매 시 고객센터로 별도 문의 바랍니다.')">장애인 전용좌석</div>
            <div style="position: absolute; z-index:1; top: 1045px; left: 485px;">
                <div class="seat_rows pga_wp_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-J"><? add_items(1, 2, 'PGA(W_PKG)-J',$is_admin,""); ?> <? add_items(3, 3, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-J"><? add_items(4, 5, 'PGA(W_PKG)-J',$is_admin,""); ?> <? add_items(6, 6, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-J"><? add_items(7, 8, 'PGA(W_PKG)-J',$is_admin,""); ?> <? add_items(9, 9, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-J"><? add_items(10, 11, 'PGA(W_PKG)-J',$is_admin,""); ?> <? add_items(12, 12, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-J"><? add_items(13, 14, 'PGA(W_PKG)-J',$is_admin,""); ?> <? add_items(15, 15, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-J"><? add_items(16, 17, 'PGA(W_PKG)-J',$is_admin,""); ?> <? add_items(18, 18, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-J"><? add_items(19, 20, 'PGA(W_PKG)-J',$is_admin,""); ?> <? add_items(21, 21, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-J"><? add_items(22, 23, 'PGA(W_PKG)-J',$is_admin,""); ?> <? add_items(24, 24, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-J"><? add_items(25, 26, 'PGA(W_PKG)-J',$is_admin,""); ?> <? add_items(27, 27, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-J"><? add_items(28, 29, 'PGA(W_PKG)-J',$is_admin,""); ?> <? add_items(30, 30, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-J"><? add_items(31, 32, 'PGA(W_PKG)-J',$is_admin,""); ?> <? add_items(33, 33, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-J"><? add_items(34, 35, 'PGA(W_PKG)-J',$is_admin,""); ?> <? add_items(36, 36, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-J"><? add_items(37, 38, 'PGA(W_PKG)-J',$is_admin,""); ?> <? add_items(39, 39, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-J"><? add_items(40, 41, 'PGA(W_PKG)-J',$is_admin,""); ?> <? add_items(42, 42, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-J"><? add_items(43, 44, 'PGA(W_PKG)-J',$is_admin,""); ?> <? add_items(45, 45, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-J"><? add_items(46, 47, 'PGA(W_PKG)-J',$is_admin,""); ?> <? add_items(48, 48, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-J"><? add_items(49, 50, 'PGA(W_PKG)-J',$is_admin,""); ?> <? add_items(51, 51, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-J"><? add_items(52, 53, 'PGA(W_PKG)-J',$is_admin,""); ?> <? add_items(54, 54, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-J"><? add_items(55, 56, 'PGA(W_PKG)-J',$is_admin,""); ?> <? add_items(57, 57, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-J"><? add_items(58, 59, 'PGA(W_PKG)-J',$is_admin,""); ?> <? add_items(60, 60, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-J"><? add_items(61, 62, 'PGA(W_PKG)-J',$is_admin,""); ?> <? add_items(63, 63, 'undivide',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-J"><? add_items(64, 65, 'PGA(W_PKG)-J',$is_admin,""); ?> <? add_items(66, 66, 'undivide',$is_admin,""); ?></div>
                </div>
            </div>

            <!-- PGA-K -->
            <div style="position: absolute; z-index:1; top: 1605px; left: 450px;">
                <div class="seat_rows pga_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                    <div class="seat_row_items" data-row-type="PGA-K"><? add_items(1, 1, 'undivide',$is_admin,""); ?> <? add_items(2, 5, 'PGA-K',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA-K"><? add_items(6, 6, 'undivide',$is_admin,""); ?> <? add_items(7, 10, 'PGA-K',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA-K"><? add_items(11, 11, 'undivide',$is_admin,""); ?> <? add_items(12, 15, 'PGA-K',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA-K"><? add_items(16, 16, 'undivide',$is_admin,""); ?> <? add_items(17, 20, 'PGA-K',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA-K"><? add_items(21, 21, 'undivide',$is_admin,""); ?> <? add_items(22, 25, 'PGA-K',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA-K"><? add_items(26, 26, 'undivide',$is_admin,""); ?> <? add_items(27, 30, 'PGA-K',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA-K"><? add_items(31, 31, 'undivide',$is_admin,""); ?> <? add_items(32, 35, 'PGA-K',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA-K"><? add_items(36, 36, 'undivide',$is_admin,""); ?> <? add_items(37, 40, 'PGA-K',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA-K"><? add_items(41, 41, 'undivide',$is_admin,""); ?> <? add_items(42, 45, 'PGA-K',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA-K"><? add_items(46, 46, 'undivide',$is_admin,""); ?> <? add_items(47, 50, 'PGA-K',$is_admin,""); ?></div>
                    <? add_row(51, 55,   'PGA-K',$is_admin,""); ?>
                    <? add_row(56, 60,   'PGA-K',$is_admin,""); ?>
                    <? add_row(61, 65,  'PGA-K',$is_admin,""); ?>
                    <? add_row(66, 70, 'PGA-K',$is_admin,""); ?>
                    <? add_row(71, 75, 'PGA-K',$is_admin,""); ?>
                    <? add_row(76, 80, 'PGA-K',$is_admin,""); ?>
                    <? add_row(81, 85, 'PGA-K',$is_admin,""); ?>
                    <? add_row(86, 90, 'PGA-K',$is_admin,""); ?>
                    <? add_row(91, 95, 'PGA-K',$is_admin,""); ?>
                    <? add_row(96, 100, 'PGA-K',$is_admin,""); ?>
                    <? add_row(101, 105, 'PGA-K',$is_admin,""); ?>
                </div>
            </div>

            <!-- PGA-L -->
            <div style="position: absolute; z-index:1; top: 2140px; left: 450px;">
                <div class="seat_rows pga_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                    <? add_row(1, 5,   'PGA-L',$is_admin,""); ?>
                    <? add_row(6, 10,   'PGA-L',$is_admin,""); ?>
                    <? add_row(11, 15,  'PGA-L',$is_admin,""); ?>
                    <? add_row(16, 20, 'PGA-L',$is_admin,""); ?>
                    <? add_row(21, 25, 'PGA-L',$is_admin,""); ?>
                    <? add_row(26, 30, 'PGA-L',$is_admin,""); ?>
                    <? add_row(31, 35, 'PGA-L',$is_admin,""); ?>
                    <? add_row(36, 40, 'PGA-L',$is_admin,""); ?>
                    <? add_row(41, 45, 'PGA-L',$is_admin,""); ?>
                    <? add_row(46, 50, 'PGA-L',$is_admin,""); ?>
                    <? add_row(51, 55, 'PGA-L',$is_admin,""); ?>
                    <? add_row(56, 60, 'PGA-L',$is_admin,""); ?>
                    <? add_row(61, 65, 'PGA-L',$is_admin,""); ?>
                    <? add_row(66, 70, 'PGA-L',$is_admin,""); ?>
                    <? add_row(71, 74, 'PGA-L',$is_admin,""); ?>
                    <? add_row(75, 76, 'PGA-L',$is_admin,""); ?>
                    <div class="seat_row_items" data-row-type="PGA-L">
                        <? add_items(77, 77, 'PGA-L',$is_admin,""); ?>
                        <? add_items(1, 1, 'blank',$is_admin,""); ?>
                        <? add_items(78, 78, 'PGA-L',$is_admin,""); ?>
                    </div>
                    <div class="seat_row_items" data-row-type="PGA-L">
                        <? add_items(1, 1, 'blank',$is_admin,""); ?>
                        <? add_items(79, 79, 'PGA-L',$is_admin,""); ?>
                    </div>
                    <div class="seat_row_items" data-row-type="PGA-L">
                        <? add_items(80, 81, 'PGA-L',$is_admin,""); ?>
                        <? add_items(1, 2, 'blank',$is_admin,""); ?>
                        <? add_items(82, 82, 'PGA-L',$is_admin,""); ?>
                    </div>
                    <div class="seat_row_items" data-row-type="PGA-L">
                        <? add_items(83, 83, 'PGA-L',$is_admin,""); ?>
                        <? add_items(1, 1, 'blank',$is_admin,""); ?>
                        <? add_items(84, 85, 'PGA-L',$is_admin,""); ?>
                    </div>
                    <div class="seat_row_items" data-row-type="PGA-L">
                        <? add_items(1, 1, 'blank',$is_admin,""); ?>
                        <? add_items(86, 87, 'PGA-L',$is_admin,""); ?>
                        <? add_items(1, 1, 'blank',$is_admin,""); ?>
                        <? add_items(88, 88, 'PGA-L',$is_admin,""); ?>
                    </div>
                </div>
            </div>

            <!-- PGA-M -->
            <div style="position: absolute; z-index:1; top: 2492px; left: 544px;">
                <div class="seat_rows pga_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                    <div class="seat_row_items" data-row-type="PGA-M">
                        <? add_items(1, 2, 'blank',$is_admin,""); ?>
                        <? add_items(1, 9, 'PGA-M',$is_admin,""); ?>
                    </div>
                    <div class="seat_row_items" data-row-type="PGA-M">
                        <? add_items(1, 1, 'blank',$is_admin,""); ?>
                        <? add_items(10, 19, 'PGA-M',$is_admin,""); ?>
                    </div>
                    <div class="seat_row_items" data-row-type="PGA-M">
                        <? add_items(1, 1, 'blank',$is_admin,""); ?>
                        <? add_items(20, 29, 'PGA-M',$is_admin,""); ?>
                    </div>
                    <? add_row(30, 40, 'PGA-M',$is_admin,""); ?>
                    <? add_row(41, 51, 'PGA-M',$is_admin,""); ?>
                    
                </div>
            </div>

            <!-- PGA-N -->
            <div style="position: absolute; z-index:1; top: 2492px; left: 838px;">
                <div class="seat_rows pga_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                    <? add_row(1, 19, 'PGA-N',$is_admin,""); ?>
                    <? add_row(20, 38, 'PGA-N',$is_admin,""); ?>
                    <? add_row(39, 57, 'PGA-N',$is_admin,""); ?>
                    <? add_row(58, 76, 'PGA-N',$is_admin,""); ?>
                    <? add_row(77, 95, 'PGA-N',$is_admin,""); ?>
                </div>
            </div>

            <!-- PGA-A -->
            <div style="position: absolute; z-index:1; top: 2492px; left: 1275px;">
                <div class="seat_rows pga_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                    <? add_row(1, 19, 'PGA-A',$is_admin,""); ?>
                    <? add_row(20, 38, 'PGA-A',$is_admin,""); ?>
                    <? add_row(39, 57, 'PGA-A',$is_admin,""); ?>
                    <? add_row(58, 76, 'PGA-A',$is_admin,""); ?>
                    <? add_row(77, 95, 'PGA-A',$is_admin,""); ?>
                </div>
            </div>


             <!-- PGA-B -->
             <div style="position: absolute; z-index:1; top: 2492px; left: 1726px;">
                <div class="seat_rows pga_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                    <div class="seat_row_items" data-row-type="PGA-B">
                        <? add_items(1, 9, 'PGA-B',$is_admin,""); ?>
                        <? add_items(1, 2, 'blank',$is_admin,""); ?>
                    </div>
                    <div class="seat_row_items" data-row-type="PGA-B">
                        <? add_items(10, 19, 'PGA-B',$is_admin,""); ?>
                        <? add_items(1, 1, 'blank',$is_admin,""); ?>
                    </div>
                    <div class="seat_row_items" data-row-type="PGA-B">
                        <? add_items(20, 29, 'PGA-B',$is_admin,""); ?>
                        <? add_items(1, 1, 'blank',$is_admin,""); ?>
                    </div>
                    <? add_row(30, 40, 'PGA-B',$is_admin,""); ?>
                    <? add_row(41, 51, 'PGA-B',$is_admin,""); ?>
                </div>
            </div>

            <!-- PGA-C -->
            <div style="position: absolute; z-index:1; top: 2141px; left: 1928px;">
                <div class="seat_rows pga_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                    <? add_row(1, 5,   'PGA-C',$is_admin,""); ?>
                    <? add_row(6, 10,   'PGA-C',$is_admin,""); ?>
                    <? add_row(11, 15,  'PGA-C',$is_admin,""); ?>
                    <? add_row(16, 20, 'PGA-C',$is_admin,""); ?>
                    <? add_row(21, 25, 'PGA-C',$is_admin,""); ?>
                    <? add_row(26, 30, 'PGA-C',$is_admin,""); ?>
                    <? add_row(31, 35, 'PGA-C',$is_admin,""); ?>
                    <? add_row(36, 40, 'PGA-C',$is_admin,""); ?>
                    <? add_row(41, 45, 'PGA-C',$is_admin,""); ?>
                    <? add_row(46, 50, 'PGA-C',$is_admin,""); ?>
                    <? add_row(51, 55, 'PGA-C',$is_admin,""); ?>
                    <? add_row(56, 60, 'PGA-C',$is_admin,""); ?>
                    <? add_row(61, 65, 'PGA-C',$is_admin,""); ?>
                    <? add_row(66, 70, 'PGA-C',$is_admin,""); ?>
                    <? add_row(71, 74, 'PGA-C',$is_admin,""); ?>
                    <? add_row(75, 77, 'PGA-C',$is_admin,""); ?>
                    <div class="seat_row_items" data-row-type="PGA-C">
                        <? add_items(78, 78, 'PGA-C',$is_admin,""); ?>
                    </div>
                    <div class="seat_row_items" data-row-type="PGA-C">
                        <? add_items(79, 80, 'PGA-C',$is_admin,""); ?>
                        <? add_items(1, 1, 'blank',$is_admin,""); ?>
                        
                    </div>
                    <div class="seat_row_items" data-row-type="PGA-C">
                        <? add_items(81, 81, 'PGA-C',$is_admin,""); ?>
                        <? add_items(1, 2, 'blank',$is_admin,""); ?>
                        <? add_items(82, 83, 'PGA-C',$is_admin,""); ?>
                    </div>
                    <div class="seat_row_items" data-row-type="PGA-C">
                        <? add_items(84, 85, 'PGA-C',$is_admin,""); ?>
                        <? add_items(1, 1, 'blank',$is_admin,""); ?>
                        <? add_items(86, 86, 'PGA-C',$is_admin,""); ?>
                    </div>
                    <div class="seat_row_items" data-row-type="PGA-C">
                        <? add_items(87, 87, 'PGA-C',$is_admin,""); ?>
                        <? add_items(1, 1, 'blank',$is_admin,""); ?>
                        <? add_items(88, 89, 'PGA-C',$is_admin,""); ?>
                        <? add_items(1, 1, 'blank',$is_admin,""); ?>
                    </div>
                </div>
            </div>

            <!-- PGA-D -->
            <div class="objArea" style="width:100px; height:478px; top: 1605px; left: 1930px; border:2px solid black; padding:10px; background-color:white; z-index:2; font-size:1.2rem;" onclick="alert('구매가 불가능한 좌석영역 입니다.')">보도석 및 초대좌석</div>

            <!-- PGA-E -->
            <div style="position: absolute; z-index:1; top: 1068px; left: 1928px;">
                <div class="seat_rows pga_wp_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-E"><? add_items(1, 1, 'undivide',$is_admin,""); ?><? add_items(2, 5, 'PGA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-E"><? add_items(6, 6, 'undivide',$is_admin,""); ?><? add_items(7, 10, 'PGA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-E"><? add_items(11, 11, 'undivide',$is_admin,""); ?><? add_items(12, 15, 'PGA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-E"><? add_items(16, 16, 'undivide',$is_admin,""); ?><? add_items(17, 20, 'PGA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-E"><? add_items(21, 21, 'undivide',$is_admin,""); ?><? add_items(22, 25, 'PGA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-E"><? add_items(26, 26, 'undivide',$is_admin,""); ?><? add_items(27, 30, 'PGA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-E"><? add_items(31, 31, 'undivide',$is_admin,""); ?><? add_items(32, 35, 'PGA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-E"><? add_items(36, 36, 'undivide',$is_admin,""); ?><? add_items(37, 40, 'PGA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-E"><? add_items(41, 41, 'undivide',$is_admin,""); ?><? add_items(42, 45, 'PGA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-E"><? add_items(46, 46, 'undivide',$is_admin,""); ?><? add_items(47, 50, 'PGA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-E"><? add_items(51, 51, 'undivide',$is_admin,""); ?><? add_items(52, 55, 'PGA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-E"><? add_items(56, 56, 'undivide',$is_admin,""); ?><? add_items(57, 60, 'PGA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-E"><? add_items(61, 61, 'undivide',$is_admin,""); ?><? add_items(62, 65, 'PGA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-E"><? add_items(66, 66, 'undivide',$is_admin,""); ?><? add_items(67, 70, 'PGA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-E"><? add_items(71, 71, 'undivide',$is_admin,""); ?><? add_items(72, 75, 'PGA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-E"><? add_items(76, 76, 'undivide',$is_admin,""); ?><? add_items(77, 80, 'PGA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-E"><? add_items(81, 81, 'undivide',$is_admin,""); ?><? add_items(82, 85, 'PGA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-E"><? add_items(86, 86, 'undivide',$is_admin,""); ?><? add_items(87, 90, 'PGA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-E"><? add_items(91, 91, 'undivide',$is_admin,""); ?><? add_items(92, 95, 'PGA(W_PKG)-E',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="PGA(W_PKG)-E"><? add_items(96, 96, 'undivide',$is_admin,""); ?><? add_items(97, 100, 'PGA(W_PKG)-E',$is_admin,""); ?></div>
                </div>
            </div>

            <!-- PGA-F -->
            <div style="position: absolute; z-index:1; top: 500px; left: 1928px;">
                <div class="seat_rows pga_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                    <? add_row(1, 5,   'PGA-F',$is_admin,""); ?>
                    <? add_row(6, 10,   'PGA-F',$is_admin,""); ?>
                    <? add_row(11, 15,  'PGA-F',$is_admin,""); ?>
                    <? add_row(16, 20, 'PGA-F',$is_admin,""); ?>
                    <? add_row(21, 25, 'PGA-F',$is_admin,""); ?>
                    <? add_row(26, 30, 'PGA-F',$is_admin,""); ?>
                    <? add_row(31, 35, 'PGA-F',$is_admin,""); ?>
                    <? add_row(36, 40, 'PGA-F',$is_admin,""); ?>
                    <? add_row(41, 45, 'PGA-F',$is_admin,""); ?>
                    <? add_row(46, 50, 'PGA-F',$is_admin,""); ?>
                    <? add_row(51, 55, 'PGA-F',$is_admin,""); ?>
                    <div class="seat_row_items" data-row-type="PGA-F"><? add_items(56, 59, 'PGA-F',$is_admin,""); ?><? add_items(60, 60, 'undivide',$is_admin,""); ?> </div>
                    <div class="seat_row_items" data-row-type="PGA-F"><? add_items(61, 62, 'PGA-F',$is_admin,""); ?><? add_items(63, 64, 'blank',$is_admin,""); ?> <? add_items(65, 65, 'undivide',$is_admin,""); ?> </div>
                    <div class="seat_row_items" data-row-type="PGA-F"><? add_items(66, 66, 'PGA-F',$is_admin,""); ?><? add_items(67, 69, 'blank',$is_admin,""); ?> <? add_items(70, 70, 'undivide',$is_admin,""); ?> </div>
                    <div class="seat_row_items" data-row-type="PGA-F"><? add_items(71, 71, 'PGA-F',$is_admin,""); ?><? add_items(72, 74, 'blank',$is_admin,""); ?> <? add_items(75, 75, 'undivide',$is_admin,""); ?> </div>
                    <div class="seat_row_items" data-row-type="PGA-F"><? add_items(76, 76, 'PGA-F',$is_admin,""); ?><? add_items(77, 79, 'blank',$is_admin,""); ?> <? add_items(80, 80, 'undivide',$is_admin,""); ?> </div>
                    <div class="seat_row_items" data-row-type="PGA-F"><? add_items(81, 81, 'PGA-F',$is_admin,""); ?><? add_items(82, 84, 'blank',$is_admin,""); ?> <? add_items(85, 85, 'undivide',$is_admin,""); ?> </div>
                    <div class="seat_row_items" data-row-type="PGA-F"><? add_items(86, 86, 'PGA-F',$is_admin,""); ?><? add_items(87, 89, 'blank',$is_admin,""); ?> <? add_items(90, 90, 'undivide',$is_admin,""); ?> </div>
                    <div class="seat_row_items" data-row-type="PGA-F"><? add_items(91, 91, 'PGA-F',$is_admin,""); ?><? add_items(92, 94, 'blank',$is_admin,""); ?> <? add_items(95, 95, 'undivide',$is_admin,""); ?> </div>
                    <div class="seat_row_items" data-row-type="PGA-F"><? add_items(96, 96, 'PGA-F',$is_admin,""); ?><? add_items(97, 99, 'blank',$is_admin,""); ?> <? add_items(100, 100, 'undivide',$is_admin,""); ?> </div>
                    <div class="seat_row_items" data-row-type="PGA-F"><? add_items(101, 101, 'PGA-F',$is_admin,""); ?><? add_items(102, 104, 'blank',$is_admin,""); ?> <? add_items(105, 105, 'undivide',$is_admin,""); ?> </div>
                </div>
            </div>

            <!-- PGA-F(W_PKG 블럭1) -->
            <div style="position: absolute; z-index:1; top: 769px; left: 1969px;">
                <div class="seat_rows pga_wp_border" style="row-gap:4px; z-index:1; align-items: end;">
                    <? add_row(63, 64, 'PGA(W_PKG)-F',$is_admin,""); ?>
                </div>
            </div>

            <!-- PGA-F(W_PKG 블럭2) -->
            <div style="position: absolute; z-index:1; top: 790px; left: 1952px;">
                <div class="seat_rows pga_wp_border" style="row-gap:4px; z-index:1; align-items: end;">
                    <? add_row(67, 69, 'PGA(W_PKG)-F',$is_admin,""); ?>
                    <? add_row(72, 74, 'PGA(W_PKG)-F',$is_admin,""); ?>
                    <? add_row(77, 79, 'PGA(W_PKG)-F',$is_admin,""); ?>
                    <? add_row(82, 84, 'PGA(W_PKG)-F',$is_admin,""); ?>
                    <? add_row(87, 89, 'PGA(W_PKG)-F',$is_admin,""); ?>
                    <? add_row(92, 94, 'PGA(W_PKG)-F',$is_admin,""); ?>
                    <? add_row(97, 99, 'PGA(W_PKG)-F',$is_admin,""); ?>
                    <? add_row(102, 104, 'PGA(W_PKG)-F',$is_admin,""); ?>
                </div>
            </div>

            <!--------------------------------------------------------------------------------------------------------------->
            <!----------------------------------------- VIP 유형 : 11시부터 반시계 방향으로 구현  -------------------------------------------------------------> 
            <!--------------------------------------------------------------------------------------------------------------->

            <!-- VIP-F 10시-->
            <div style="position: absolute; z-index:1; top: 675px; left: 650px;">
                <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                    <div class="seat_row_items" data-row-type="VIP-F"><? add_items(1, 2, 'VIP-F',$is_admin,""); ?> <? add_items(3, 5, 'blank',$is_admin,""); ?> <? add_items(6, 8, 'VIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-F"><? add_items(9, 10, 'VIP-F',$is_admin,""); ?> <? add_items(11, 13, 'blank',$is_admin,""); ?> <? add_items(14, 16, 'VIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-F"><? add_items(17, 18, 'VIP-F',$is_admin,""); ?> <? add_items(19, 21, 'blank',$is_admin,""); ?> <? add_items(22, 24, 'VIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-F"><? add_items(25, 26, 'VIP-F',$is_admin,""); ?> <? add_items(27, 29, 'blank',$is_admin,""); ?> <? add_items(30, 32, 'VIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-F"><? add_items(33, 34, 'VIP-F',$is_admin,""); ?> <? add_items(35, 37, 'blank',$is_admin,""); ?> <? add_items(38, 40, 'VIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-F"><? add_items(41, 42, 'VIP-F',$is_admin,""); ?> <? add_items(43, 45, 'blank',$is_admin,""); ?> <? add_items(46, 48, 'VIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-F"><? add_items(49, 50, 'VIP-F',$is_admin,""); ?> <? add_items(51, 53, 'blank',$is_admin,""); ?> <? add_items(54, 56, 'VIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-F"><? add_items(57, 58, 'VIP-F',$is_admin,""); ?> <? add_items(59, 61, 'blank',$is_admin,""); ?> <? add_items(62, 64, 'VIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-F"><? add_items(65, 65, 'VIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-F"><? add_items(66, 66, 'VIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-F"><? add_items(67, 68, 'VIP-F',$is_admin,""); ?> <? add_items(69, 71, 'blank',$is_admin,""); ?> <? add_items(72, 74, 'VIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-F"><? add_items(75, 76, 'VIP-F',$is_admin,""); ?> <? add_items(77, 79, 'blank',$is_admin,""); ?> <? add_items(80, 82, 'VIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-F"><? add_items(83, 84, 'VIP-F',$is_admin,""); ?> <? add_items(85, 87, 'blank',$is_admin,""); ?> <? add_items(88, 90, 'VIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-F"><? add_items(91, 92, 'VIP-F',$is_admin,""); ?> <? add_items(93, 95, 'blank',$is_admin,""); ?> <? add_items(96, 98, 'VIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-F"><? add_items(99, 100, 'VIP-F',$is_admin,""); ?> <? add_items(101, 103, 'blank',$is_admin,""); ?> <? add_items(104, 106, 'VIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-F"><? add_items(107, 108, 'VIP-F',$is_admin,""); ?> <? add_items(109, 111, 'blank',$is_admin,""); ?> <? add_items(112, 114, 'VIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-F"><? add_items(115, 116, 'VIP-F',$is_admin,""); ?> <? add_items(117, 119, 'blank',$is_admin,""); ?> <? add_items(120, 122, 'VIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-F"><? add_items(123, 124, 'VIP-F',$is_admin,""); ?> <? add_items(125, 127, 'blank',$is_admin,""); ?> <? add_items(128, 130, 'VIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-F"><? add_items(131, 132, 'VIP-F',$is_admin,""); ?> <? add_items(133, 135, 'blank',$is_admin,""); ?> <? add_items(136, 138, 'VIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-F"><? add_items(139, 140, 'VIP-F',$is_admin,""); ?> <? add_items(141, 143, 'blank',$is_admin,""); ?> <? add_items(144, 146, 'VIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-F"><? add_items(147, 148, 'VIP-F',$is_admin,""); ?> <? add_items(149, 151, 'blank',$is_admin,""); ?> <? add_items(152, 154, 'VIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-F"><? add_items(155, 156, 'VIP-F',$is_admin,""); ?> <? add_items(157, 159, 'blank',$is_admin,""); ?> <? add_items(160, 162, 'VIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-F"><? add_items(163, 164, 'VIP-F',$is_admin,""); ?> <? add_items(165, 167, 'blank',$is_admin,""); ?> <? add_items(168, 170, 'VIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-F"><? add_items(171, 171, 'undivide',$is_admin,""); ?> <? add_items(172, 172, 'VIP-F',$is_admin,""); ?> <? add_items(173, 175, 'blank',$is_admin,""); ?><? add_items(176, 178, 'VIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-F"><? add_items(179, 179, 'undivide',$is_admin,""); ?> <? add_items(180, 180, 'VIP-F',$is_admin,""); ?> <? add_items(181, 183, 'blank',$is_admin,""); ?><? add_items(184, 186, 'VIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-F"><? add_items(187, 187, 'undivide',$is_admin,""); ?> <? add_items(188, 188, 'VIP-F',$is_admin,""); ?> <? add_items(189, 191, 'blank',$is_admin,""); ?><? add_items(192, 194, 'VIP-F',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-F"><? add_items(195, 195, 'undivide',$is_admin,""); ?></div>
                </div>
            </div>

            <!-- VIP(R)-F- 10시-->
            <div style="position: absolute; z-index:1; top: 680px; left: 691px;">
                <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 0px; align-items: start;">
                <? add_row(3, 5, 'VIP(R)-F',$is_admin,""); ?>
                <? add_row(11, 13, 'VIP(R)-F',$is_admin,""); ?>
                <? add_row(19, 21, 'VIP(R)-F',$is_admin,""); ?>
                <? add_row(27, 29, 'VIP(R)-F',$is_admin,""); ?>
                <? add_row(35, 37, 'VIP(R)-F',$is_admin,""); ?>
                <? add_row(43, 45, 'VIP(R)-F',$is_admin,""); ?>
                <? add_row(51, 53, 'VIP(R)-F',$is_admin,""); ?>
                <? add_row(59, 61, 'VIP(R)-F',$is_admin,""); ?>
                <? add_row(0, -1, 'blank',$is_admin,"height:16px;"); ?>
                <? add_row(0, -1, 'blank',$is_admin,"height:16px;"); ?>
                <? add_row(69, 71, 'VIP(R)-F',$is_admin,""); ?>
                <? add_row(77, 79, 'VIP(R)-F',$is_admin,""); ?>
                <? add_row(85, 87, 'VIP(R)-F',$is_admin,""); ?>
                <? add_row(93, 95, 'VIP(R)-F',$is_admin,""); ?>
                <? add_row(101, 103, 'VIP(R)-F',$is_admin,""); ?>
                <? add_row(109, 111, 'VIP(R)-F',$is_admin,""); ?>
                <? add_row(117, 119, 'VIP(R)-F',$is_admin,""); ?>
                <? add_row(125, 127, 'VIP(R)-F',$is_admin,""); ?>
                <? add_row(133, 135, 'VIP(R)-F',$is_admin,""); ?>
                <? add_row(141, 143, 'VIP(R)-F',$is_admin,""); ?>
                <? add_row(149, 151, 'VIP(R)-F',$is_admin,""); ?>
                <? add_row(157, 159, 'VIP(R)-F',$is_admin,""); ?>
                <? add_row(165, 167, 'VIP(R)-F',$is_admin,""); ?>
                <? add_row(173, 175, 'VIP(R)-F',$is_admin,""); ?>
                <? add_row(181, 183, 'VIP(R)-F',$is_admin,""); ?>
                <? add_row(189, 191, 'VIP(R)-F',$is_admin,""); ?>
                </div>
            </div>

            <!-- VIP-G 8시-->
            <div style="position: absolute; z-index:1; top: 1290px; left: 650px; -ms-transform: rotateX(180deg); -webkit-transform: rotateX(180deg); transform: rotateX(180deg);">
                <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                    <div class="seat_row_items" data-row-type="VIP-G"><? add_items(1, 2, 'VIP-G',$is_admin,""); ?> <? add_items(3, 5, 'blank',$is_admin,""); ?> <? add_items(6, 8, 'VIP-G',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-G"><? add_items(9, 10, 'VIP-G',$is_admin,""); ?> <? add_items(11, 13, 'blank',$is_admin,""); ?> <? add_items(14, 16, 'VIP-G',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-G"><? add_items(17, 18, 'VIP-G',$is_admin,""); ?> <? add_items(19, 21, 'blank',$is_admin,""); ?> <? add_items(22, 24, 'VIP-G',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-G"><? add_items(25, 26, 'VIP-G',$is_admin,""); ?> <? add_items(27, 29, 'blank',$is_admin,""); ?> <? add_items(30, 32, 'VIP-G',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-G"><? add_items(33, 34, 'VIP-G',$is_admin,""); ?> <? add_items(35, 37, 'blank',$is_admin,""); ?> <? add_items(38, 40, 'VIP-G',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-G"><? add_items(41, 42, 'VIP-G',$is_admin,""); ?> <? add_items(43, 45, 'blank',$is_admin,""); ?> <? add_items(46, 48, 'VIP-G',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-G"><? add_items(49, 50, 'VIP-G',$is_admin,""); ?> <? add_items(51, 53, 'blank',$is_admin,""); ?> <? add_items(54, 56, 'VIP-G',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-G"><? add_items(57, 58, 'VIP-G',$is_admin,""); ?> <? add_items(59, 61, 'blank',$is_admin,""); ?> <? add_items(62, 64, 'VIP-G',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-G"><? add_items(65, 65, 'VIP-G',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-G"><? add_items(66, 66, 'VIP-G',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-G"><? add_items(67, 68, 'VIP-G',$is_admin,""); ?> <? add_items(69, 71, 'blank',$is_admin,""); ?> <? add_items(72, 74, 'VIP-G',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-G"><? add_items(75, 76, 'VIP-G',$is_admin,""); ?> <? add_items(77, 79, 'blank',$is_admin,""); ?> <? add_items(80, 82, 'VIP-G',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-G"><? add_items(83, 84, 'VIP-G',$is_admin,""); ?> <? add_items(85, 87, 'blank',$is_admin,""); ?> <? add_items(88, 90, 'VIP-G',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-G"><? add_items(91, 92, 'VIP-G',$is_admin,""); ?> <? add_items(93, 95, 'blank',$is_admin,""); ?> <? add_items(96, 98, 'VIP-G',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-G"><? add_items(99, 100, 'VIP-G',$is_admin,""); ?> <? add_items(101, 103, 'blank',$is_admin,""); ?> <? add_items(104, 106, 'VIP-G',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-G"><? add_items(107, 108, 'VIP-G',$is_admin,""); ?> <? add_items(109, 111, 'blank',$is_admin,""); ?> <? add_items(112, 114, 'VIP-G',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-G"><? add_items(115, 116, 'VIP-G',$is_admin,""); ?> <? add_items(117, 119, 'blank',$is_admin,""); ?> <? add_items(120, 122, 'VIP-G',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-G"><? add_items(123, 124, 'VIP-G',$is_admin,""); ?> <? add_items(125, 127, 'blank',$is_admin,""); ?> <? add_items(128, 130, 'VIP-G',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-G"><? add_items(131, 132, 'VIP-G',$is_admin,""); ?> <? add_items(133, 135, 'blank',$is_admin,""); ?> <? add_items(136, 138, 'VIP-G',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-G"><? add_items(139, 140, 'VIP-G',$is_admin,""); ?> <? add_items(141, 143, 'blank',$is_admin,""); ?> <? add_items(144, 146, 'VIP-G',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-G"><? add_items(147, 148, 'VIP-G',$is_admin,""); ?> <? add_items(149, 151, 'blank',$is_admin,""); ?> <? add_items(152, 154, 'VIP-G',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-G"><? add_items(155, 156, 'VIP-G',$is_admin,""); ?> <? add_items(157, 159, 'blank',$is_admin,""); ?> <? add_items(160, 162, 'VIP-G',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-G"><? add_items(163, 164, 'VIP-G',$is_admin,""); ?> <? add_items(165, 167, 'blank',$is_admin,""); ?> <? add_items(168, 170, 'VIP-G',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-G"><? add_items(171, 171, 'undivide',$is_admin,""); ?> <? add_items(172, 172, 'VIP-G',$is_admin,""); ?> <? add_items(173, 175, 'blank',$is_admin,""); ?><? add_items(176, 178, 'VIP-G',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-G"><? add_items(179, 179, 'undivide',$is_admin,""); ?> <? add_items(180, 180, 'VIP-G',$is_admin,""); ?> <? add_items(181, 183, 'blank',$is_admin,""); ?><? add_items(184, 186, 'VIP-G',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-G"><? add_items(187, 187, 'undivide',$is_admin,""); ?> <? add_items(188, 188, 'VIP-G',$is_admin,""); ?> <? add_items(189, 191, 'blank',$is_admin,""); ?><? add_items(192, 194, 'VIP-G',$is_admin,""); ?></div>
                    <div class="seat_row_items" data-row-type="VIP-G"><? add_items(195, 195, 'undivide',$is_admin,""); ?></div>
                </div>
            </div>


            <!-- VIP(R)-G 8시-->
            <div style="position: absolute; z-index:1; top: 1317px; left: 691px;; -ms-transform: rotateX(180deg); -webkit-transform: rotateX(180deg); transform: rotateX(180deg);">
                <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 0px; align-items: start;">
                    <? add_row(3, 5, 'VIP(R)-G',$is_admin,""); ?>
                    <? add_row(11, 13, 'VIP(R)-G',$is_admin,""); ?>
                    <? add_row(19, 21, 'VIP(R)-G',$is_admin,""); ?>
                    <? add_row(27, 29, 'VIP(R)-G',$is_admin,""); ?>
                    <? add_row(35, 37, 'VIP(R)-G',$is_admin,""); ?>
                    <? add_row(43, 45, 'VIP(R)-G',$is_admin,""); ?>
                    <? add_row(51, 53, 'VIP(R)-G',$is_admin,""); ?>
                    <? add_row(59, 61, 'VIP(R)-G',$is_admin,""); ?>
                    <? add_row(0, -1, 'blank',$is_admin,"height:16px;"); ?>
                    <? add_row(0, -1, 'blank',$is_admin,"height:16px;"); ?>
                    <? add_row(69, 71, 'VIP(R)-G',$is_admin,""); ?>
                    <? add_row(77, 79, 'VIP(R)-G',$is_admin,""); ?>
                    <? add_row(85, 87, 'VIP(R)-G',$is_admin,""); ?>
                    <? add_row(93, 95, 'VIP(R)-G',$is_admin,""); ?>
                    <? add_row(101, 103, 'VIP(R)-G',$is_admin,""); ?>
                    <? add_row(109, 111, 'VIP(R)-G',$is_admin,""); ?>
                    <? add_row(117, 119, 'VIP(R)-G',$is_admin,""); ?>
                    <? add_row(125, 127, 'VIP(R)-G',$is_admin,""); ?>
                    <? add_row(133, 135, 'VIP(R)-G',$is_admin,""); ?>
                    <? add_row(141, 143, 'VIP(R)-G',$is_admin,""); ?>
                    <? add_row(149, 151, 'VIP(R)-G',$is_admin,""); ?>
                    <? add_row(157, 159, 'VIP(R)-G',$is_admin,""); ?>
                    <? add_row(165, 167, 'VIP(R)-G',$is_admin,""); ?>
                    <? add_row(173, 175, 'VIP(R)-G',$is_admin,""); ?>
                    <? add_row(181, 183, 'VIP(R)-G',$is_admin,""); ?>
                    <? add_row(189, 191, 'VIP(R)-G',$is_admin,""); ?>
                </div>
            </div>

            <!-- VIP-H 7시-->
            <div style="position: absolute; z-index:1; top: 1610px; left: 910px;">
                <div style="position: absolute; z-index:1; top: 0px; left: 0px;">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <? add_row(1, 8, 'VIP-H',$is_admin,""); ?>
                        <? add_row(9, 16, 'VIP-H',$is_admin,""); ?>
                        <? add_row(17, 24, 'VIP-H',$is_admin,""); ?>
                        <? add_row(25, 32, 'VIP-H',$is_admin,""); ?>
                        <? add_row(33, 40, 'VIP-H',$is_admin,""); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: -23px; left: 196px;">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <? add_row(41, 42, 'VIP-H',$is_admin,""); ?>
                        <? add_row(43, 46, 'VIP-H',$is_admin,""); ?>
                        <? add_row(47, 50, 'VIP-H',$is_admin,""); ?>
                        <? add_row(51, 55, 'VIP-H',$is_admin,""); ?>
                        <? add_row(56, 60, 'VIP-H',$is_admin,""); ?>
                        <? add_row(61, 65, 'VIP-H',$is_admin,""); ?>
                        <? add_row(66, 71, 'VIP-H',$is_admin,""); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 152px; left: -19px;">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <? add_row(72, 79, 'VIP-H',$is_admin,""); ?>
                        <? add_row(80, 87, 'VIP-H',$is_admin,""); ?>
                        <? add_row(88, 95, 'VIP-H',$is_admin,""); ?>
                        <? add_row(96, 103, 'VIP-H',$is_admin,""); ?>
                        <? add_row(104, 111, 'VIP-H',$is_admin,""); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 152px; left: 160px;">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <? add_row(112, 119, 'VIP-H',$is_admin,""); ?>
                        <? add_row(120, 127, 'VIP-H',$is_admin,""); ?>
                        <? add_row(128, 135, 'VIP-H',$is_admin,""); ?>
                        <? add_row(136, 143, 'VIP-H',$is_admin,""); ?>
                        <? add_row(144, 151, 'VIP-H',$is_admin,""); ?>
                    </div>
                </div>
            </div>

            <!-- VIP-A 5시-->
            <div style="position: absolute; z-index:1; top: 1610px; left: 1570px; -ms-transform: rotateY(180deg); -webkit-transform: rotateY(180deg); transform: rotateY(180deg);">
                <div style="position: absolute; z-index:1; top: 0px; left: 0px;">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <? add_row(1, 8, 'VIP-A',$is_admin,""); ?>
                        <? add_row(9, 16, 'VIP-A',$is_admin,""); ?>
                        <? add_row(17, 24, 'VIP-A',$is_admin,""); ?>
                        <? add_row(25, 32, 'VIP-A',$is_admin,""); ?>
                        <? add_row(33, 40, 'VIP-A',$is_admin,""); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: -23px; left: 196px;">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <? add_row(41, 42, 'VIP-A',$is_admin,""); ?>
                        <? add_row(43, 46, 'VIP-A',$is_admin,""); ?>
                        <? add_row(47, 50, 'VIP-A',$is_admin,""); ?>
                        <? add_row(51, 55, 'VIP-A',$is_admin,""); ?>
                        <? add_row(56, 60, 'VIP-A',$is_admin,""); ?>
                        <? add_row(61, 65, 'VIP-A',$is_admin,""); ?>
                        <? add_row(66, 71, 'VIP-A',$is_admin,""); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 152px; left: -19px;">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <? add_row(72, 79, 'VIP-A',$is_admin,""); ?>
                        <? add_row(80, 87, 'VIP-A',$is_admin,""); ?>
                        <? add_row(88, 95, 'VIP-A',$is_admin,""); ?>
                        <? add_row(96, 103, 'VIP-A',$is_admin,""); ?>
                        <? add_row(104, 111, 'VIP-A',$is_admin,""); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 152px; left: 160px;">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <? add_row(112, 119, 'VIP-A',$is_admin,""); ?>
                        <? add_row(120, 127, 'VIP-A',$is_admin,""); ?>
                        <? add_row(128, 135, 'VIP-A',$is_admin,""); ?>
                        <? add_row(136, 143, 'VIP-A',$is_admin,""); ?>
                        <? add_row(144, 151, 'VIP-A',$is_admin,""); ?>
                    </div>
                </div>
            </div>


            <div style="position: absolute; z-index:1; top: 670px; left: 1830px; -ms-transform: rotateY(180deg); -webkit-transform: rotateY(180deg); transform: rotateY(180deg);">
                <!-- VIP-C 2시-->
                <div style="position: absolute; z-index:1; top: 0px; left: 0px;">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <div class="seat_row_items" data-row-type="VIP-C"><? add_items(1, 2, 'VIP-C',$is_admin,""); ?> <? add_items(3, 5, 'blank',$is_admin,""); ?> <? add_items(6, 8, 'VIP-C',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-C"><? add_items(9, 10, 'VIP-C',$is_admin,""); ?> <? add_items(11, 13, 'blank',$is_admin,""); ?> <? add_items(14, 16, 'VIP-C',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-C"><? add_items(17, 18, 'VIP-C',$is_admin,""); ?> <? add_items(19, 21, 'blank',$is_admin,""); ?> <? add_items(22, 24, 'VIP-C',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-C"><? add_items(25, 26, 'VIP-C',$is_admin,""); ?> <? add_items(27, 29, 'blank',$is_admin,""); ?> <? add_items(30, 32, 'VIP-C',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-C"><? add_items(33, 34, 'VIP-C',$is_admin,""); ?> <? add_items(35, 37, 'blank',$is_admin,""); ?> <? add_items(38, 40, 'VIP-C',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-C"><? add_items(41, 42, 'VIP-C',$is_admin,""); ?> <? add_items(43, 45, 'blank',$is_admin,""); ?> <? add_items(46, 48, 'VIP-C',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-C"><? add_items(49, 50, 'VIP-C',$is_admin,""); ?> <? add_items(51, 53, 'blank',$is_admin,""); ?> <? add_items(54, 56, 'VIP-C',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-C"><? add_items(57, 58, 'VIP-C',$is_admin,""); ?> <? add_items(59, 61, 'blank',$is_admin,""); ?> <? add_items(62, 64, 'VIP-C',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-C"><? add_items(65, 65, 'VIP-C',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-C"><? add_items(66, 66, 'VIP-C',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-C"><? add_items(67, 68, 'VIP-C',$is_admin,""); ?> <? add_items(69, 71, 'blank',$is_admin,""); ?> <? add_items(72, 74, 'VIP-C',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-C"><? add_items(75, 76, 'VIP-C',$is_admin,""); ?> <? add_items(77, 79, 'blank',$is_admin,""); ?> <? add_items(80, 82, 'VIP-C',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-C"><? add_items(83, 84, 'VIP-C',$is_admin,""); ?> <? add_items(85, 87, 'blank',$is_admin,""); ?> <? add_items(88, 90, 'VIP-C',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-C"><? add_items(91, 92, 'VIP-C',$is_admin,""); ?> <? add_items(93, 95, 'blank',$is_admin,""); ?> <? add_items(96, 98, 'VIP-C',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-C"><? add_items(99, 100, 'VIP-C',$is_admin,""); ?> <? add_items(101, 103, 'blank',$is_admin,""); ?> <? add_items(104, 106, 'VIP-C',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-C"><? add_items(107, 108, 'VIP-C',$is_admin,""); ?> <? add_items(109, 111, 'blank',$is_admin,""); ?> <? add_items(112, 114, 'VIP-C',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-C"><? add_items(115, 116, 'VIP-C',$is_admin,""); ?> <? add_items(117, 119, 'blank',$is_admin,""); ?> <? add_items(120, 122, 'VIP-C',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-C"><? add_items(123, 124, 'VIP-C',$is_admin,""); ?> <? add_items(125, 127, 'blank',$is_admin,""); ?> <? add_items(128, 130, 'VIP-C',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-C"><? add_items(131, 132, 'VIP-C',$is_admin,""); ?> <? add_items(133, 135, 'blank',$is_admin,""); ?> <? add_items(136, 138, 'VIP-C',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-C"><? add_items(139, 140, 'VIP-C',$is_admin,""); ?> <? add_items(141, 143, 'blank',$is_admin,""); ?> <? add_items(144, 146, 'VIP-C',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-C"><? add_items(147, 148, 'VIP-C',$is_admin,""); ?> <? add_items(149, 151, 'blank',$is_admin,""); ?> <? add_items(152, 154, 'VIP-C',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-C"><? add_items(155, 156, 'VIP-C',$is_admin,""); ?> <? add_items(157, 159, 'blank',$is_admin,""); ?> <? add_items(160, 162, 'VIP-C',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-C"><? add_items(163, 164, 'VIP-C',$is_admin,""); ?> <? add_items(165, 167, 'blank',$is_admin,""); ?> <? add_items(168, 170, 'VIP-C',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-C"><? add_items(171, 171, 'undivide',$is_admin,""); ?> <? add_items(172, 172, 'VIP-C',$is_admin,""); ?> <? add_items(173, 175, 'blank',$is_admin,""); ?><? add_items(176, 178, 'VIP-C',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-C"><? add_items(179, 179, 'undivide',$is_admin,""); ?> <? add_items(180, 180, 'VIP-C',$is_admin,""); ?> <? add_items(181, 183, 'blank',$is_admin,""); ?><? add_items(184, 186, 'VIP-C',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-C"><? add_items(187, 187, 'undivide',$is_admin,""); ?> <? add_items(188, 188, 'VIP-C',$is_admin,""); ?> <? add_items(189, 191, 'blank',$is_admin,""); ?><? add_items(192, 194, 'VIP-C',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-C"><? add_items(195, 195, 'undivide',$is_admin,""); ?></div>
                    </div>
                </div>

                <!-- VIP(R)-C 2시-->
                <div style="position: absolute; z-index:1; top: 5px; left: 41px;">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 0px; align-items: start;">
                        <? add_row(3, 5, 'VIP(R)-C',$is_admin,""); ?>
                        <? add_row(11, 13, 'VIP(R)-C',$is_admin,""); ?>
                        <? add_row(19, 21, 'VIP(R)-C',$is_admin,""); ?>
                        <? add_row(27, 29, 'VIP(R)-C',$is_admin,""); ?>
                        <? add_row(35, 37, 'VIP(R)-C',$is_admin,""); ?>
                        <? add_row(43, 45, 'VIP(R)-C',$is_admin,""); ?>
                        <? add_row(51, 53, 'VIP(R)-C',$is_admin,""); ?>
                        <? add_row(59, 61, 'VIP(R)-C',$is_admin,""); ?>
                        <? add_row(0, -1, 'blank',$is_admin,"height:16px;"); ?>
                        <? add_row(0, -1, 'blank',$is_admin,"height:16px;"); ?>
                        <? add_row(69, 71, 'VIP(R)-C',$is_admin,""); ?>
                        <? add_row(77, 79, 'VIP(R)-C',$is_admin,""); ?>
                        <? add_row(85, 87, 'VIP(R)-C',$is_admin,""); ?>
                        <? add_row(93, 95, 'VIP(R)-C',$is_admin,""); ?>
                        <? add_row(101, 103, 'VIP(R)-C',$is_admin,""); ?>
                        <? add_row(109, 111, 'VIP(R)-C',$is_admin,""); ?>
                        <? add_row(117, 119, 'VIP(R)-C',$is_admin,""); ?>
                        <? add_row(125, 127, 'VIP(R)-C',$is_admin,""); ?>
                        <? add_row(133, 135, 'VIP(R)-C',$is_admin,""); ?>
                        <? add_row(141, 143, 'VIP(R)-C',$is_admin,""); ?>
                        <? add_row(149, 151, 'VIP(R)-C',$is_admin,""); ?>
                        <? add_row(157, 159, 'VIP(R)-C',$is_admin,""); ?>
                        <? add_row(165, 167, 'VIP(R)-C',$is_admin,""); ?>
                        <? add_row(173, 175, 'VIP(R)-C',$is_admin,""); ?>
                        <? add_row(181, 183, 'VIP(R)-C',$is_admin,""); ?>
                        <? add_row(189, 191, 'VIP(R)-C',$is_admin,""); ?>
                    </div>
                </div>

                <!-- VIP-B 4시-->
                <div style="position: absolute; z-index:1; top: 620px; left: 0px; -ms-transform: rotateX(180deg); -webkit-transform: rotateX(180deg); transform: rotateX(180deg);">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <div class="seat_row_items" data-row-type="VIP-B"><? add_items(1, 2, 'VIP-B',$is_admin,""); ?> <? add_items(3, 5, 'blank',$is_admin,""); ?> <? add_items(6, 8, 'VIP-B',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-B"><? add_items(9, 10, 'VIP-B',$is_admin,""); ?> <? add_items(11, 13, 'blank',$is_admin,""); ?> <? add_items(14, 16, 'VIP-B',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-B"><? add_items(17, 18, 'VIP-B',$is_admin,""); ?> <? add_items(19, 21, 'blank',$is_admin,""); ?> <? add_items(22, 24, 'VIP-B',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-B"><? add_items(25, 26, 'VIP-B',$is_admin,""); ?> <? add_items(27, 29, 'blank',$is_admin,""); ?> <? add_items(30, 32, 'VIP-B',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-B"><? add_items(33, 34, 'VIP-B',$is_admin,""); ?> <? add_items(35, 37, 'blank',$is_admin,""); ?> <? add_items(38, 40, 'VIP-B',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-B"><? add_items(41, 42, 'VIP-B',$is_admin,""); ?> <? add_items(43, 45, 'blank',$is_admin,""); ?> <? add_items(46, 48, 'VIP-B',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-B"><? add_items(49, 50, 'VIP-B',$is_admin,""); ?> <? add_items(51, 53, 'blank',$is_admin,""); ?> <? add_items(54, 56, 'VIP-B',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-B"><? add_items(57, 58, 'VIP-B',$is_admin,""); ?> <? add_items(59, 61, 'blank',$is_admin,""); ?> <? add_items(62, 64, 'VIP-B',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-B"><? add_items(65, 65, 'VIP-B',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-B"><? add_items(66, 66, 'VIP-B',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-B"><? add_items(67, 68, 'VIP-B',$is_admin,""); ?> <? add_items(69, 71, 'blank',$is_admin,""); ?> <? add_items(72, 74, 'VIP-B',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-B"><? add_items(75, 76, 'VIP-B',$is_admin,""); ?> <? add_items(77, 79, 'blank',$is_admin,""); ?> <? add_items(80, 82, 'VIP-B',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-B"><? add_items(83, 84, 'VIP-B',$is_admin,""); ?> <? add_items(85, 87, 'blank',$is_admin,""); ?> <? add_items(88, 90, 'VIP-B',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-B"><? add_items(91, 92, 'VIP-B',$is_admin,""); ?> <? add_items(93, 95, 'blank',$is_admin,""); ?> <? add_items(96, 98, 'VIP-B',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-B"><? add_items(99, 100, 'VIP-B',$is_admin,""); ?> <? add_items(101, 103, 'blank',$is_admin,""); ?> <? add_items(104, 106, 'VIP-B',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-B"><? add_items(107, 108, 'VIP-B',$is_admin,""); ?> <? add_items(109, 111, 'blank',$is_admin,""); ?> <? add_items(112, 114, 'VIP-B',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-B"><? add_items(115, 116, 'VIP-B',$is_admin,""); ?> <? add_items(117, 119, 'blank',$is_admin,""); ?> <? add_items(120, 122, 'VIP-B',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-B"><? add_items(123, 124, 'VIP-B',$is_admin,""); ?> <? add_items(125, 127, 'blank',$is_admin,""); ?> <? add_items(128, 130, 'VIP-B',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-B"><? add_items(131, 132, 'VIP-B',$is_admin,""); ?> <? add_items(133, 135, 'blank',$is_admin,""); ?> <? add_items(136, 138, 'VIP-B',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-B"><? add_items(139, 140, 'VIP-B',$is_admin,""); ?> <? add_items(141, 143, 'blank',$is_admin,""); ?> <? add_items(144, 146, 'VIP-B',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-B"><? add_items(147, 148, 'VIP-B',$is_admin,""); ?> <? add_items(149, 151, 'blank',$is_admin,""); ?> <? add_items(152, 154, 'VIP-B',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-B"><? add_items(155, 156, 'VIP-B',$is_admin,""); ?> <? add_items(157, 159, 'blank',$is_admin,""); ?> <? add_items(160, 162, 'VIP-B',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-B"><? add_items(163, 164, 'VIP-B',$is_admin,""); ?> <? add_items(165, 167, 'blank',$is_admin,""); ?> <? add_items(168, 170, 'VIP-B',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-B"><? add_items(171, 171, 'undivide',$is_admin,""); ?> <? add_items(172, 172, 'VIP-B',$is_admin,""); ?> <? add_items(173, 175, 'blank',$is_admin,""); ?><? add_items(176, 178, 'VIP-B',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-B"><? add_items(179, 179, 'undivide',$is_admin,""); ?> <? add_items(180, 180, 'VIP-B',$is_admin,""); ?> <? add_items(181, 183, 'blank',$is_admin,""); ?><? add_items(184, 186, 'VIP-B',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-B"><? add_items(187, 187, 'undivide',$is_admin,""); ?> <? add_items(188, 188, 'VIP-B',$is_admin,""); ?> <? add_items(189, 191, 'blank',$is_admin,""); ?><? add_items(192, 194, 'VIP-B',$is_admin,""); ?></div>
                        <div class="seat_row_items" data-row-type="VIP-B"><? add_items(195, 195, 'undivide',$is_admin,""); ?></div>
                    </div>
                </div>

                 <!-- VIP(R)-B 4시-->
                 <div style="position: absolute; z-index:1; top: 647px; left: 41px; -ms-transform: rotateX(180deg); -webkit-transform: rotateX(180deg); transform: rotateX(180deg);">
                    <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 0px; align-items: start;">
                        <? add_row(3, 5, 'VIP(R)-B',$is_admin,""); ?> 
                        <? add_row(11, 13, 'VIP(R)-B',$is_admin,""); ?> 
                        <? add_row(19, 21, 'VIP(R)-B',$is_admin,""); ?> 
                        <? add_row(27, 29, 'VIP(R)-B',$is_admin,""); ?> 
                        <? add_row(35, 37, 'VIP(R)-B',$is_admin,""); ?> 
                        <? add_row(43, 45, 'VIP(R)-B',$is_admin,""); ?> 
                        <? add_row(51, 53, 'VIP(R)-B',$is_admin,""); ?> 
                        <? add_row(59, 61, 'VIP(R)-B',$is_admin,""); ?> 
                        <? add_row(0, -1, 'blank',$is_admin,"height:16px;"); ?>
                        <? add_row(0, -1, 'blank',$is_admin,"height:16px;"); ?>
                        <? add_row(69, 71, 'VIP(R)-B',$is_admin,""); ?> 
                        <? add_row(77, 79, 'VIP(R)-B',$is_admin,""); ?> 
                        <? add_row(85, 87, 'VIP(R)-B',$is_admin,""); ?> 
                        <? add_row(93, 95, 'VIP(R)-B',$is_admin,""); ?> 
                        <? add_row(101, 103, 'VIP(R)-B',$is_admin,""); ?> 
                        <? add_row(109, 111, 'VIP(R)-B',$is_admin,""); ?> 
                        <? add_row(117, 119, 'VIP(R)-B',$is_admin,""); ?> 
                        <? add_row(125, 127, 'VIP(R)-B',$is_admin,""); ?> 
                        <? add_row(133, 135, 'VIP(R)-B',$is_admin,""); ?> 
                        <? add_row(141, 143, 'VIP(R)-B',$is_admin,""); ?> 
                        <? add_row(149, 151, 'VIP(R)-B',$is_admin,""); ?> 
                        <? add_row(157, 159, 'VIP(R)-B',$is_admin,""); ?> 
                        <? add_row(165, 167, 'VIP(R)-B',$is_admin,""); ?> 
                        <? add_row(173, 175, 'VIP(R)-B',$is_admin,""); ?>
                        <? add_row(181, 183, 'VIP(R)-B',$is_admin,""); ?>
                        <? add_row(189, 191, 'VIP(R)-B',$is_admin,""); ?>
                    </div>
                </div>
            </div>

    

            

            <!-- VIP-D 1시 -->
            <div style="position: absolute; z-index:1; top: 750px; left: 1371px;">
                <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                    <? add_row(1, 12,   'VIP-D',$is_admin,""); ?>
                    <? add_row(13, 24,   'VIP-D',$is_admin,""); ?>
                    <? add_row(25, 36,  'VIP-D',$is_admin,""); ?>
                    <? add_row(37, 48, 'VIP-D',$is_admin,""); ?>
                    <? add_row(49, 60, 'VIP-D',$is_admin,""); ?>
                    <? add_row(61, 72, 'VIP-D',$is_admin,""); ?>
                    <? add_row(73, 84, 'VIP-D',$is_admin,""); ?>
                    <? add_row(85, 96, 'VIP-D',$is_admin,""); ?>
                    <? add_row(97, 108, 'VIP-D',$is_admin,""); ?>
                    <div class="seat_row_items" data-row-type="VIP-D"><? add_items(109, 113, 'VIP-D',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(114, 118, 'VIP-D',$is_admin,""); ?></div>

                </div>
            </div>
            

            <!-- VIP-E 11시 -->
            <div style="position: absolute; z-index:1; top: 750px; left: 880px;">
                <div class="seat_rows vip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                    <? add_row(1, 12,   'VIP-E',$is_admin,""); ?>
                    <? add_row(13, 24,   'VIP-E',$is_admin,""); ?>
                    <? add_row(25, 36,  'VIP-E',$is_admin,""); ?>
                    <? add_row(37, 48, 'VIP-E',$is_admin,""); ?>
                    <? add_row(49, 60, 'VIP-E',$is_admin,""); ?>
                    <? add_row(61, 72, 'VIP-E',$is_admin,""); ?>
                    <? add_row(73, 84, 'VIP-E',$is_admin,""); ?>
                    <? add_row(85, 96, 'VIP-E',$is_admin,""); ?>
                    <? add_row(97, 108, 'VIP-E',$is_admin,""); ?>
                    <div class="seat_row_items" data-row-type="VIP-E"><? add_items(109, 113, 'VIP-E',$is_admin,""); ?> <? add_items(0, 1, 'blank',$is_admin,""); ?> <? add_items(114, 118, 'VIP-E',$is_admin,""); ?></div>

                </div>
            </div>

            <!--------------------------------------------------------------------------------------------------------------->
            <!----------------------------------------- VVIP 유형 : 11시부터 반시계 방향으로 구현  -------------------------------------------------------------> 
            <!--------------------------------------------------------------------------------------------------------------->

            <!-- VVIP-C 11시 -->
            <div style="position: absolute; z-index:1; top: 1060px; left: 1000px;">
                <div style="position: absolute; z-index:1; top: 125px; left: 0px; -ms-transform: rotate(-90deg); -webkit-transform: rotate(-90deg); transform: rotate(-90deg);">
                    <div class="seat_rows vvip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <? add_row(1, 4, 'VVIP-C',$is_admin,""); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 30px; left: 30px; -ms-transform: rotate(-45deg); -webkit-transform: rotate(-45deg); transform: rotate(-45deg);">
                    <div class="seat_rows vvip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <? add_row(5, 8, 'VVIP-C',$is_admin,""); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 0px; left: 125px;">
                    <div class="seat_rows vvip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <? add_row(9, 12, 'VVIP-C',$is_admin,""); ?>
                    </div>
                </div>
            </div>

            <!-- VVIP-D 7시 -->
            <div style="position: absolute; z-index:1; top: 1480px; left: 998px; -ms-transform: rotateX(180deg); -webkit-transform: rotateX(180deg); transform: rotateX(180deg);">
                <div style="position: absolute; z-index:1; top: 125px; left: 0px; -ms-transform: rotate(-90deg); -webkit-transform: rotate(-90deg); transform: rotate(-90deg);">
                    <div class="seat_rows vvip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <? add_row(1, 4, 'VVIP-D',$is_admin,""); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 30px; left: 30px; -ms-transform: rotate(-45deg); -webkit-transform: rotate(-45deg); transform: rotate(-45deg);">
                    <div class="seat_rows vvip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <? add_row(5, 8, 'VVIP-D',$is_admin,""); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 0px; left: 125px;">
                    <div class="seat_rows vvip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <? add_row(9, 12, 'VVIP-D',$is_admin,""); ?>
                    </div>
                </div>
            </div>


            
            <!-- VVIP-B 1시 -->
            <div style="position: absolute;z-index:1;top: 1060px;left: 1330px;">
                <div style="position: absolute;z-index:1;top: 125px;left: 60px;-ms-transform: rotate(-90deg);-webkit-transform: rotate(-90deg);transform: rotate(-90deg);">
                    <div class="seat_rows vvip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <? add_row(1, 4, 'VVIP-B',$is_admin,""); ?>
                    </div>
                </div>
                <div style="position: absolute;z-index:1;top: 30px;left: 30px;-ms-transform: rotate(-135deg);-webkit-transform: rotate(-135deg);transform: rotate(-135deg);">
                    <div class="seat_rows vvip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <? add_row(5, 8, 'VVIP-B',$is_admin,""); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 0px; left: -60px; -ms-transform: rotate(-180deg);-webkit-transform: rotate(-180deg);transform: rotate(-180deg);">
                    <div class="seat_rows vvip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: end;">
                        <? add_row(9, 12, 'VVIP-B',$is_admin,""); ?>
                    </div>
                </div>
            </div>

            <!-- VVIP-A 5시 -->
            <div style="position: absolute; z-index:1; top: 1480px; left: 1330px; -ms-transform: rotateX(180deg); -webkit-transform: rotateX(180deg); transform: rotateX(180deg);">
                <div style="position: absolute; z-index:1; top: 125px; left: 60px; -ms-transform: rotate(-90deg); -webkit-transform: rotate(-90deg); transform: rotate(-90deg);">
                    <div class="seat_rows vvip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <? add_row(1, 4, 'VVIP-A',$is_admin,""); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 30px; left: 30px; -ms-transform: rotate(-135deg); -webkit-transform: rotate(-135deg); transform: rotate(-135deg);">
                    <div class="seat_rows vvip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <? add_row(5, 8, 'VVIP-A',$is_admin,""); ?>
                    </div>
                </div>
                <div style="position: absolute; z-index:1; top: 0px; left: -60px; -ms-transform: rotate(-180deg);-webkit-transform: rotate(-180deg);transform: rotate(-180deg);">
                    <div class="seat_rows vvip_border" style="row-gap:4px; z-index:1;padding: 5px; align-items: start;">
                        <? add_row(9, 12, 'VVIP-A',$is_admin,""); ?>
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