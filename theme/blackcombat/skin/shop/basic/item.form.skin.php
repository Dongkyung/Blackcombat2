<!-- USED! -->

<?php
// CHECKED : 티켓판매페이지 상단 구매영역 컴포넌트
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_SHOP_CSS_URL.'/style.css">', 0);
?>

<style>
    #sit_inf_open {display:none;}
</style>

<div id="sit_ov_from">
	<form name="fitem" method="post" action="<?php echo $action_url; ?>" onsubmit="return fitem_submit(this);">
	<input type="hidden" name="it_id[]" value="<?php echo $it_id; ?>">
	<input type="hidden" name="sw_direct">
	<input type="hidden" name="url">
	<input type="hidden" name="it_seat" value="<?php echo $it['it_seat']; ?>">

	<div id="sit_ov_wrap">
	    <!-- 상품이미지 미리보기 시작 { -->
	    <div id="sit_pvi">
	        <div id="sit_pvi_big">
	        <?php
	        $big_img_count = 0;
	        $thumbnails = array();
	        for($i=1; $i<=10; $i++) {
	            if(!$it['it_img'.$i])
	                continue;
	
	            // $img = get_it_thumbnail($it['it_img'.$i], $default['de_mimg_width'], $default['de_mimg_height']);
                $img = get_it_thumbnail($it['it_img'.$i], 1000, 1000);
	
	            if($img) {
	                // 썸네일
	                $thumb = get_it_thumbnail($it['it_img'.$i], 70, 70);
	                $thumbnails[] = $thumb;
	                $big_img_count++;
	
	                echo '<a href="'.G5_SHOP_URL.'/largeimage.php?it_id='.$it['it_id'].'&amp;no='.$i.'" target="_blank" class="popup_item_image">'.$img.'</a>';
	            }
	        }
	
	        if($big_img_count == 0) {
	            echo '<img src="'.G5_SHOP_URL.'/img/no_image.gif" alt="">';
	        }
	        ?>
	        <a href="<?php echo G5_SHOP_URL; ?>/largeimage.php?it_id=<?php echo $it['it_id']; ?>&amp;no=1" target="_blank" id="popup_item_image" class="popup_item_image"><i class="fa fa-search-plus" aria-hidden="true"></i><span class="sound_only">확대보기</span></a>
	        </div>
	        <?php
	        // 썸네일
	        $thumb1 = true;
	        $thumb_count = 0;
	        $total_count = count($thumbnails);
	        if($total_count > 0) {
	            echo '<ul id="sit_pvi_thumb">';
	            foreach($thumbnails as $val) {
	                $thumb_count++;
	                $sit_pvi_last ='';
	                if ($thumb_count % 5 == 0) $sit_pvi_last = 'class="li_last"';
	                    echo '<li '.$sit_pvi_last.'>';
	                    echo '<a href="'.G5_SHOP_URL.'/largeimage.php?it_id='.$it['it_id'].'&amp;no='.$thumb_count.'" target="_blank" class="popup_item_image img_thumb">'.$val.'<span class="sound_only"> '.$thumb_count.'번째 이미지 새창</span></a>';
	                    echo '</li>';
	            }
	            echo '</ul>';
	        }
	        ?>
	    </div>
	    <!-- } 상품이미지 미리보기 끝 -->
	
	    <!-- 상품 요약정보 및 구매 시작 { -->
	    <section id="sit_ov" class="2017_renewal_itemform">
	        <h2 id="sit_title"><?php echo stripslashes($it['it_name']); ?> <span class="sound_only">요약정보 및 구매</span></h2>
	        <p id="sit_desc"><?php echo $it['it_basic']; ?></p>
	        <?php if($is_orderable) { ?>
	        <p id="sit_opt_info">
	            상품 선택옵션 <?php echo $option_count; ?> 개, 추가옵션 <?php echo $supply_count; ?> 개
	        </p>
	        <?php } ?>
	        
	        <div id="sit_star_sns">
	            <?php if ($star_score) { ?>
	            <span class="sound_only">고객평점</span> 
	            <img src="<?php echo G5_SHOP_URL; ?>/img/s_star<?php echo $star_score?>.png" alt="" class="sit_star" width="100">
	            <span class="sound_only">별<?php echo $star_score?>개</span> 
	            <?php } ?>
	            
	            <span class="">후기(REVIEW) <?php echo $it['it_use_cnt']; ?> 개</span>
	            
	            <div id="sit_btn_opt">
	            	<span id="btn_wish"><i class="fa fa-heart-o" aria-hidden="true"></i><span class="sound_only">위시리스트</span><span class="btn_wish_num"><?php echo get_wishlist_count_by_item($it['it_id']); ?></span></span>
	            	<button type="button" class="btn_sns_share"><i class="fa fa-share-alt" aria-hidden="true"></i><span class="sound_only">sns 공유</span></button>
	            	<div class="sns_area">
	            		<?php echo $sns_share_links; ?>
	            		<a href="javascript:popup_item_recommend('<?php echo $it['it_id']; ?>');" id="sit_btn_rec"><i class="fa fa-envelope-o" aria-hidden="true"></i><span class="sound_only">추천하기</span></a>
	            	</div>
	        	</div>
	        </div>
	        <script>
	        $(".btn_sns_share").click(function(){
							console.log('sns');
	            $(".sns_area").show();
	        });
	        $(document).mouseup(function (e){
	            var container = $(".sns_area");
	            if( container.has(e.target).length === 0)
	            container.hide();
	        });
	        </script>
	        
	        <div class="sit_info">
	            <table class="sit_ov_tbl">
	            <colgroup>
	                <col class="grid_3">
	                <col>
	            </colgroup>
	            <tbody>
	            
	            <?php if (!$it['it_use']) { // 판매가능이 아닐 경우 ?>
	            <tr>
	                <th scope="row">판매가격(PRICE)</th>
	                <td>판매중지</td>
	            </tr>
	            <?php } else if ($it['it_tel_inq']) { // 전화문의일 경우 ?>
	            <tr>
	                <th scope="row">판매가격(PRICE)</th>
	                <td>전화문의</td>
	            </tr>
	            <?php } else { // 전화문의가 아닐 경우?>
	            <?php if ($it['it_cust_price']) { ?>
	            <tr>
	                <th scope="row">시중가격(PRICE)</th>
	                <td><?php echo display_price($it['it_cust_price']); ?></td>
	            </tr>
	            <?php } // 시중가격 끝 ?>
	
	            <tr class="tr_price">
	                <th scope="row">판매가격(PRICE)</th>
	                <td>
	                    <strong><?php echo display_price(get_price($it)); ?></strong>
	                    <input type="hidden" id="it_price" value="<?php echo get_price($it); ?>">
	                </td>
	            </tr>
	            <?php } ?>
	            	
	            <?php if ($it['it_maker']) { ?>
	            <tr>
	                <th scope="row">제조사</th>
	                <td><?php echo $it['it_maker']; ?></td>
	            </tr>
	            <?php } ?>
	
	            <?php if ($it['it_origin']) { ?>
	            <tr>
	                <th scope="row">원산지</th>
	                <td><?php echo $it['it_origin']; ?></td>
	            </tr>
	            <?php } ?>
	
	            <?php if ($it['it_brand']) { ?>
	            <tr>
	                <th scope="row">브랜드</th>
	                <td><?php echo $it['it_brand']; ?></td>
	            </tr>
	            <?php } ?>
	
	            <?php if ($it['it_model']) { ?>
	            <tr>
	                <th scope="row">모델</th>
	                <td><?php echo $it['it_model']; ?></td>
	            </tr>
	            <?php } ?>

	            <?php if ($is_admin) { 

                // $total_stock_blacktinum = 48;
                // $total_stock_vvip = 796;
                // $total_stock_vip = 538;
                // $total_stock_gold = 166;
                // $total_stock_silver = 520;
                $total_stock_standard = 10;

				// $current_stock_blacktinum = get_option_stock_qty($it_id, 'BLACKTINUM','0');
                // $current_stock_vvip = get_option_stock_qty($it_id, 'VVIP','0');
                // $current_stock_vip = get_option_stock_qty($it_id, 'VIP','0');
                // $current_stock_gold = get_option_stock_qty($it_id, 'GOLD','0');
                // $current_stock_silver = get_option_stock_qty($it_id, 'SILVER','0');
                $current_stock_standard = get_option_stock_qty($it_id, 'STANDARD','0');

// $sold_stock_blacktinum = $current_stock_blacktinum - $total_stock_blacktinum;
// $sold_stock_vvip = $current_stock_vvip - $total_stock_vvip;
// $sold_stock_vip = $current_stock_vip - $total_stock_vip;
// $sold_stock_gold = $current_stock_gold - $total_stock_gold;
// $sold_stock_silver = $current_stock_silver - $total_stock_silver;
$sold_stock_standard = $current_stock_standard - $total_stock_standard;

// $sale_rate_blacktinum = ceil(($sold_stock_blacktinum / $total_stock_blacktinum) * 100);
// $sale_rate_vvip = ceil(($sold_stock_vvip / $total_stock_vvip) * 100);
// $sale_rate_vip = ceil(($sold_stock_vip / $total_stock_vip) * 100);
// $sale_rate_gold = ceil(($sold_stock_gold / $total_stock_gold) * 100);
// $sale_rate_silver = ceil(($sold_stock_silver / $total_stock_silver) * 100);
$sale_rate_standard = ceil(($sold_stock_standard / $total_stock_standard) * 100);



	            /* 재고 표시하는 경우 주석 해제*/
					// echo "<tr>";
					// echo "<th scope='row'>BLACKTINUM 재고수량</th>";
					// echo "<td>".number_format($current_stock_blacktinum)." / ".number_format($total_stock_blacktinum)." (".number_format($sold_stock_blacktinum)." , ".$sale_rate_blacktinum."%)</td>";
					// echo "</tr>";
                    // echo "<tr>";
					// echo "<th scope='row'>VVIP 재고수량</th>";
					// echo "<td>".number_format($current_stock_vvip)." / ".number_format($total_stock_vvip)." (".number_format($sold_stock_vvip)." , ".$sale_rate_vvip."%)</td>";
					// echo "</tr>";
                    // echo "<tr>";
					// echo "<th scope='row'>VIP 재고수량</th>";
					// echo "<td>".number_format($current_stock_vip)." / ".number_format($total_stock_vip)." (".number_format($sold_stock_vip)." , ".$sale_rate_vip."%)</td>";
					// echo "</tr>";
                    // echo "<tr>";
					// echo "<th scope='row'>GOLD 재고수량</th>";
					// echo "<td>".number_format($current_stock_gold)." / ".number_format($total_stock_gold)." (".number_format($sold_stock_gold)." , ".$sale_rate_gold."%)</td>";
					// echo "</tr>";
                    // echo "<tr>";
					// echo "<th scope='row'>SILVER 재고수량</th>";
					// echo "<td>".number_format($current_stock_silver)." / ".number_format($total_stock_silver)." (".number_format($sold_stock_silver)." , ".$sale_rate_silver."%)</td>";
					// echo "</tr>";
                    echo "<tr>";
					echo "<th scope='row'>STANDARD 재고수량</th>";
					echo "<td>".number_format($current_stock_standard)." / ".number_format($total_stock_standard)." (".number_format($sold_stock_standard)." , ".$sale_rate_standard."%)</td>";
					echo "</tr>";
	             }else{
					$showing = 75000 - (3500 - get_option_stock_qty($it_id, '일반석','0'));
					echo "<span style='display:none'>".$showing."</span>";
				 } ?>
	
	            <?php if ($config['cf_use_point']) { // 포인트 사용한다면 ?>
	            <tr>
	                <th scope="row">포인트</th>
	                <td>
	                    <?php
	                    if($it['it_point_type'] == 2) {
	                        echo '구매금액(추가옵션 제외)의 '.$it['it_point'].'%';
	                    } else {
	                        $it_point = get_item_point($it);
	                        echo number_format($it_point).'점';
	                    }
	                    ?>
	                </td>
	            </tr>
	            <?php } ?>
	            <?php
	            $ct_send_cost_label = '배송비(DELIVERY CHARGE)';
	
	            if($it['it_sc_type'] == 1)
	                $sc_method = '무료배송';
	            else {
	                if($it['it_sc_method'] == 1)
	                    $sc_method = '수령후 지불';
	                else if($it['it_sc_method'] == 2) {
	                    $ct_send_cost_label = '<label for="ct_send_cost">배송비결제</label>';
	                    $sc_method = '<select name="ct_send_cost" id="ct_send_cost">
	                                      <option value="0">주문시 결제</option>
	                                      <option value="1">수령후 지불</option>
	                                  </select>';
	                }
	                else
	                    $sc_method = '주문시 결제';
	            }
	            ?>
	            <tr>
	                <th><?php echo $ct_send_cost_label; ?></th>
	                <td><?php echo $sc_method; ?></td>
	            </tr>
	            <?php if($it['it_buy_min_qty']) { ?>
	            <tr>
	                <th>최소구매수량(MINIMUM)</th>
	                <td><?php echo number_format($it['it_buy_min_qty']); ?> 개</td>
	            </tr>
	            <?php } ?>
	            <?php if($it['it_buy_max_qty']) { ?>
	            <tr>
	                <th>최대구매수량(MAXIMUM)</th>
	                <td><?php echo number_format($it['it_buy_max_qty']); ?> 개</td>
	            </tr>
	            <?php } ?>
	            </tbody>
	            </table>
	        </div>
	        <?php
	        if($option_item) {
	        ?>
	        <!-- 선택옵션 시작 { -->
	        <section class="sit_option">
	            <h3>선택옵션(OPTION)</h3>
	 
	            <?php // 선택옵션
	            echo $option_item;
	            ?>
	        </section>
	        <!-- } 선택옵션 끝 -->
	        <?php
	        }
	        ?>
	
	        <?php
	        if($supply_item) {
	        ?>
	        <!-- 추가옵션 시작 { -->
	        <section  class="sit_option">
	            <h3>추가옵션</h3>
	            <?php // 추가옵션
	            echo $supply_item;
	            ?>
	        </section>
	        <!-- } 추가옵션 끝 -->
	        <?php
	        }
	        ?>
	
	        <?php if ($is_orderable) { ?>
	        <!-- 선택된 옵션 시작 { -->
	        <section id="sit_sel_option">
	            <h3>선택된 옵션</h3>
	            <?php
	            if(!$option_item) {
	                if(!$it['it_buy_min_qty'])
	                    $it['it_buy_min_qty'] = 1;
	            ?>
	            <ul id="sit_opt_added">
	                <li class="sit_opt_list">
	                    <input type="hidden" name="io_type[<?php echo $it_id; ?>][]" value="0">
	                    <input type="hidden" name="io_id[<?php echo $it_id; ?>][]" value="">
	                    <input type="hidden" name="io_value[<?php echo $it_id; ?>][]" value="<?php echo $it['it_name']; ?>">
	                    <input type="hidden" class="io_price" value="0">
	                    <input type="hidden" class="io_stock" value="<?php echo $it['it_stock_qty']; ?>">
	                    <div class="opt_name">
	                        <span class="sit_opt_subj"><?php echo $it['it_name']; ?></span>
	                    </div>
	                    <div class="opt_count">
	                        <label for="ct_qty_<?php echo $i; ?>" class="sound_only">수량</label>
							<button type="button" class="sit_qty_minus"><i class="fa fa-minus" aria-hidden="true"></i><span class="sound_only">감소</span></button>
	                        <input type="text" name="ct_qty[<?php echo $it_id; ?>][]" value="<?php echo $it['it_buy_min_qty']; ?>" id="ct_qty_<?php echo $i; ?>" class="num_input" size="5">
	                        <button type="button" class="sit_qty_plus"><i class="fa fa-plus" aria-hidden="true"></i><span class="sound_only">증가</span></button>
	                        <span class="sit_opt_prc">+0원</span>
	                    </div>
	                </li>

                    <?php if ($it['it_seat'] === 'Y') { ?>
                    <li class="sit_opt_list">
                        <div class="opt_name">
                            <span class="sit_opt_subj">선택 좌석</span>
                        </div>
                        <div class="opt_count">
                            <span style="font-size:1.5em;"><span class="seat_choise_result"></span></span>
                        </div>
                    </li>
                    <?php } ?>
	            </ul>
	            <script>
	            $(function() {
	                price_calculate();
	            });
	            </script>
	            <?php } ?>
	        </section>
	        <!-- } 선택된 옵션 끝 -->
	
	        <!-- 총 구매액 -->
	        <div id="sit_tot_price"></div>
	        <?php } ?>
	
	        <?php if($is_soldout) { ?>
	        <p id="sit_ov_soldout">상품의 재고가 부족하여 구매할 수 없습니다.</p>
	        <?php } ?>
	
	        <div id="sit_ov_btn">
	            <?php if ($is_orderable) { ?>
                    <?php if ($it['it_seat'] === 'Y') { ?>
                <input type="hidden" name="seat_row_type" value="" />
                <input type="hidden" name="seat_number" value="" />
                <button type="button" class="open_seat_choice_btn" style="width:100%;">좌석 선택하기</button>
                    <?php }else{ ?>
                        <script>
                            $(document).ready(() => {
                                $(".get_item_options").css("position","unset");
                            })
                        </script>
                    <? } ?>

	            <button type="submit" onclick="document.pressed=this.value;" value="장바구니" class="sit_btn_cart">장바구니(CART)</button>
	            <button type="submit" onclick="document.pressed=this.value;" value="바로구매" class="sit_btn_buy">바로구매(BUY)</button>

	            <?php } ?>

                <!--
	            <a href="javascript:item_wish(document.fitem, '<?php echo $it['it_id']; ?>');" class="sit_btn_wish"><i class="fa fa-heart-o" aria-hidden="true"></i><span class="sound_only">위시리스트</span></a>
	            -->
	            	
	            <?php if(!$is_orderable && $it['it_soldout'] && $it['it_stock_sms']) { ?>
	            <a href="javascript:popup_stocksms('<?php echo $it['it_id']; ?>');" id="sit_btn_alm">재입고알림</a>
	            <?php } ?>
	            <?php if ($naverpay_button_js) { ?>
	            <div class="itemform-naverpay"><?php echo $naverpay_request_js.$naverpay_button_js; ?></div>
	            <?php } ?>
	        </div>
	
	        <script>
	        // 상품보관
	        function item_wish(f, it_id)
	        {
	            f.url.value = "<?php echo G5_SHOP_URL; ?>/wishupdate.php?it_id="+it_id;
	            f.action = "<?php echo G5_SHOP_URL; ?>/wishupdate.php";
	            f.submit();
	        }
	
	        // 추천메일
	        function popup_item_recommend(it_id)
	        {
	            if (!g5_is_member)
	            {
	                if (confirm("회원만 추천하실 수 있습니다."))
	                    document.location.href = "<?php echo G5_BBS_URL; ?>/login.php?url=<?php echo urlencode(shop_item_url($it_id)); ?>";
	            }
	            else
	            {
	                url = "./itemrecommend.php?it_id=" + it_id;
	                opt = "scrollbars=yes,width=616,height=420,top=10,left=10";
	                popup_window(url, "itemrecommend", opt);
	            }
	        }
	
	        // 재입고SMS 알림
	        function popup_stocksms(it_id)
	        {
	            url = "<?php echo G5_SHOP_URL; ?>/itemstocksms.php?it_id=" + it_id;
	            opt = "scrollbars=yes,width=616,height=420,top=10,left=10";
	            popup_window(url, "itemstocksms", opt);
	        }
	        </script>
	    </section>
	    <!-- } 상품 요약정보 및 구매 끝 -->
	</div>
	<!-- 다른 상품 보기 시작 { -->
    <div id="sit_siblings">
	    <?php
	    if ($prev_href || $next_href) {
	        echo $prev_href.$prev_title.$prev_href2;
	        echo $next_href.$next_title.$next_href2;
	    } else {
	        echo '<span class="sound_only">이 분류에 등록된 다른 상품이 없습니다.</span>';
	    }
	    ?>
	</div>   
    <!-- } 다른 상품 보기 끝 -->
	</form>
</div>

<script>
var max_qty = parseInt(<?php echo $it['it_buy_max_qty']; ?>);
var min_qty = parseInt(<?php echo $it['it_buy_min_qty']; ?>);
$(function(){
    // 상품이미지 첫번째 링크
    $("#sit_pvi_big a:first").addClass("visible");

    // 상품이미지 미리보기 (썸네일에 마우스 오버시)
    $("#sit_pvi .img_thumb").bind("mouseover focus", function(){
        var idx = $("#sit_pvi .img_thumb").index($(this));
        $("#sit_pvi_big a.visible").removeClass("visible");
        $("#sit_pvi_big a:eq("+idx+")").addClass("visible");
    });

    // 상품이미지 크게보기
    $(".popup_item_image").click(function() {
        var url = $(this).attr("href");
        var top = 10;
        var left = 10;
        var opt = 'scrollbars=yes,top='+top+',left='+left;
        popup_window(url, "largeimage", opt);

        return false;
    });
});

function fsubmit_check(f)
{
    // 판매가격이 0 보다 작다면
    if (document.getElementById("it_price").value < 0) {
        alert("전화로 문의해 주시면 감사하겠습니다.");
        return false;
    }

    if($(".sit_opt_list").length < 1) {
        alert("상품의 선택옵션을 선택해 주십시오.");
        return false;
    }

    var val, io_type, result = true;
    var sum_qty = 0;
    var $el_type = $("input[name^=io_type]");

    $("input[name^=ct_qty]").each(function(index) {
        val = $(this).val();

        if(val.length < 1) {
            alert("수량을 입력해 주십시오.");
            result = false;
            return false;
        }

        if(val.replace(/[0-9]/g, "").length > 0) {
            alert("수량은 숫자로 입력해 주십시오.");
            result = false;
            return false;
        }

        if(parseInt(val.replace(/[^0-9]/g, "")) < 1) {
            alert("수량은 1이상 입력해 주십시오.");
            result = false;
            return false;
        }

        io_type = $el_type.eq(index).val();
        if(io_type == "0")
            sum_qty += parseInt(val);
    });

    if(!result) {
        return false;
    }

    if(min_qty > 0 && sum_qty < min_qty) {
        alert("선택옵션 개수 총합 "+number_format(String(min_qty))+"개 이상 주문해 주십시오.");
        return false;
    }

    if(max_qty > 0 && sum_qty > max_qty) {
        alert("선택옵션 개수 총합 "+number_format(String(max_qty))+"개 이하로 주문해 주십시오.");
        return false;
    }

    return true;
}

// 바로구매, 장바구니 폼 전송
function fitem_submit(f)
{
    <?php if ($it['it_seat'] === 'Y') { ?>
    let seatTypeArr = [];
        $.each($('input[name="rowType"]'),function(index,item){
            seatTypeArr.push($(item).val());
        });
        let seatNumberArr = [];
        $.each($('input[name="newSetNumber'),function(index,item){
            seatNumberArr.push($(item).val());
        });

    var seatRowType = seatTypeArr.join("|");
    var seatNumber = seatNumberArr.join("|");

    if (seatRowType === "" || seatNumber === "") {
        alert('좌석을 선택해주세요.');
        return false;
    }


    if(seatTypeArr.length > max_qty){
        alert("최대 구매 가능한 수량은 "+max_qty+"개 입니다.");
        return false;
    }

    <?php } ?>

    f.action = "<?php echo $action_url; ?>";
    f.target = "";

    if (document.pressed == "장바구니") {
        f.sw_direct.value = 0;
    } else { // 바로구매
        f.sw_direct.value = 1;
    }

    // 판매가격이 0 보다 작다면
    if (document.getElementById("it_price").value < 0) {
        alert("전화로 문의해 주시면 감사하겠습니다.");
        return false;
    }

    if($(".sit_opt_list").length < 1) {
        alert("상품의 선택옵션을 선택해 주십시오.");
        return false;
    }

    var val, io_type, result = true;
    var sum_qty = 0;
    var $el_type = $("input[name^=io_type]");

    $("input[name^=ct_qty]").each(function(index) {
        val = $(this).val();

        if(val.length < 1) {
            alert("수량을 입력해 주십시오.");
            result = false;
            return false;
        }

        if(val.replace(/[0-9]/g, "").length > 0) {
            alert("수량은 숫자로 입력해 주십시오.");
            result = false;
            return false;
        }

        if(parseInt(val.replace(/[^0-9]/g, "")) < 1) {
            alert("수량은 1이상 입력해 주십시오.");
            result = false;
            return false;
        }

        io_type = $el_type.eq(index).val();
        if(io_type == "0")
            sum_qty += parseInt(val);
    });

    if(!result) {
        return false;
    }

    if(min_qty > 0 && sum_qty < min_qty) {
        alert("선택옵션 개수 총합 "+number_format(String(min_qty))+"개 이상 주문해 주십시오.");
        return false;
    }

    if(max_qty > 0 && sum_qty > max_qty) {
        alert("선택옵션 개수 총합 "+number_format(String(max_qty))+"개 이하로 주문해 주십시오.");
        return false;
    }

    return true;
}
</script>
<?php /* 2017 리뉴얼한 테마 적용 스크립트입니다. 기존 스크립트를 오버라이드 합니다. */ ?>
<script src="<?php echo G5_JS_URL; ?>/shop.override.js"></script>