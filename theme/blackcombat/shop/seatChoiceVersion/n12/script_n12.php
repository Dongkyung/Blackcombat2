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
                // kakaoPixel('8339806502848870616').viewCart();
                $('.seat_choice_popup').fadeIn(300);
            });
        }

        //닫기버튼 이벤트
        if ($('.seat_choice_popup_close_btn').length) {
            $('.seat_choice_popup_close_btn').on('click', function(e) {
                console.log(1);
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
                    if (objValue.indexOf('VVIP,3190') !== -1){
                        obj.attr('data-seat', 'VVIP');
                    }else if (objValue.indexOf('VIP,1210') !== -1){
                        obj.attr('data-seat', 'VIP');
                    }else if (objValue.indexOf('VIP(R),1980') !== -1){
                        obj.attr('data-seat', 'VIP(R)');
                    }else if (objValue.indexOf('PGA,330') !== -1){
                        obj.attr('data-seat', 'PGA');
                    }else if (objValue.indexOf('GA,0') !== -1){
                        obj.attr('data-seat', 'GA');
                    }else if (objValue.indexOf('PGA(W_PKG),1452') !== -1){
                        obj.attr('data-seat', 'PGA(W_PKG)');
                    }else if (objValue.indexOf('GA(W_PKG),1155') !== -1){
                        obj.attr('data-seat', 'GA(W_PKG)');
                    }
                }
            });
        }

        $(document).on('click', '.seat_row_item', function(e) {
            e.preventDefault();

            var obj = $(this);
            var selected = obj.attr('data-selected');
            var choosable = obj.attr('data-choosable');
            var title = obj.attr("title");

            if(title.includes("undivide") || title.includes("blank")){
                return null;
            }

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
                        if (data === 'Y'){
                            alert('이미 결제가 완료된 좌석입니다.');
                            location.reload();
                            return false;
                        }else{
                            $.ajax({
                                url: ajax_url + "/ajax.action.php",
                                type: "POST",
                                data: {
                                    "action":"get_blocked_seat_search",
                                    "od_seat_row_type": rowType,
                                    "od_seat_number": setNumber
                                },
                                dataType: "text",
                                async: true,
                                cache: false,
                                success: function(data, textStatus) {
                                    // MUST CHECK .2
                                    if (data === 'Y'){
                                        alert('구매할 수 없는 좌석입니다. 관리자에게 문의하세요.');
                                        location.reload();
                                        return false;
                                    }else{
                                        var optionSelectObj = $('#it_option_1');
                                        var selectedOptionObj = '';

                                        if (rowType === 'VVIP-A' 
                                            || rowType === 'VVIP-B' 
                                            || rowType === 'VVIP-C' 
                                            || rowType === 'VVIP-D') {
                                            selectedOptionObj = optionSelectObj.find('option[data-seat="VVIP"]').prop('selected', true);
                                        } else if (rowType === 'VIP-A' 
                                            || rowType === 'VIP-B' 
                                            || rowType === 'VIP-C' 
                                            || rowType === 'VIP-D' 
                                            || rowType === 'VIP-E' 
                                            || rowType === 'VIP-F' 
                                            || rowType === 'VIP-G' 
                                            || rowType === 'VIP-H') {
                                            selectedOptionObj = optionSelectObj.find('option[data-seat="VIP"]').prop('selected', true);
                                        } else if (rowType === 'VIP(R)-B' 
                                            || rowType === 'VIP(R)-C' 
                                            || rowType === 'VIP(R)-F' 
                                            || rowType === 'VIP(R)-G') {
                                            selectedOptionObj = optionSelectObj.find('option[data-seat="VIP(R)"]').prop('selected', true);
                                        } else if (rowType === 'PGA-A' 
                                            || rowType === 'PGA-B' 
                                            || rowType === 'PGA-C' 
                                            || rowType === 'PGA-F' 
                                            || rowType === 'PGA-I' 
                                            || rowType === 'PGA-K' 
                                            || rowType === 'PGA-L' 
                                            || rowType === 'PGA-M' 
                                            || rowType === 'PGA-N') {
                                            selectedOptionObj = optionSelectObj.find('option[data-seat="PGA"]').prop('selected', true);
                                        } else if (rowType === 'GA-A' 
                                            || rowType === 'GA-B' 
                                            || rowType === 'GA-C' 
                                            || rowType === 'GA-D' 
                                            || rowType === 'GA-E' 
                                            || rowType === 'GA-F' 
                                            || rowType === 'GA-I' 
                                            || rowType === 'GA-J' 
                                            || rowType === 'GA-K' 
                                            || rowType === 'GA-L' 
                                            || rowType === 'GA-M' 
                                            || rowType === 'GA-N') {
                                            selectedOptionObj = optionSelectObj.find('option[data-seat="GA"]').prop('selected', true);
                                        } else if (rowType === 'PGA(W_PKG)-E' 
                                            || rowType === 'PGA(W_PKG)-F' 
                                            || rowType === 'PGA(W_PKG)-J') {
                                            selectedOptionObj = optionSelectObj.find('option[data-seat="PGA(W_PKG)"]').prop('selected', true);
                                        } else if (rowType === 'GA(W_PKG)-E' 
                                            || rowType === 'GA(W_PKG)-J') {
                                            selectedOptionObj = optionSelectObj.find('option[data-seat="GA(W_PKG)"]').prop('selected', true);
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
                                        let basicPrice = 770;
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
                                }
                            })   
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