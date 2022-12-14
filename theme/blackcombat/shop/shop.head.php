<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$q = isset($_GET['q']) ? clean_xss_tags($_GET['q'], 1, 1) : '';

if(G5_IS_MOBILE) {
    include_once(G5_THEME_MSHOP_PATH.'/shop.head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

$ticket_link = '';

$ticket_sql = "SELECT it_id FROM g5_shop_item WHERE it_online = 'Y' LIMIT 1";
$ticket_result = sql_query($ticket_sql);
$ticket_row = sql_fetch_array($ticket_result);

if ($ticket_row) {
    $ticket_link = G5_URL . '/shop/' . $ticket_row['it_id'];
}

add_javascript('<script src="'.G5_JS_URL.'/owlcarousel/owl.carousel.min.js"></script>', 10);
add_stylesheet('<link rel="stylesheet" href="'.G5_JS_URL.'/owlcarousel/owl.carousel.css">', 0);
?>

<!-- 상단 시작 { -->
<div id="tnb" style="background:#212020;">
    <div class="inner">
        <ul id="hd_qnb">
            <?php if ($is_member) {  ?>
                <li><a href="<?php echo G5_URL ?>/shop/mypage.php">마이페이지</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
                <?php if ($is_admin) {  ?>
                    <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
                <?php }  ?>
            <?php } else {  ?>
                <li><a href="<?php echo G5_URL ?>/shop/orderinquiry.php">비회원 주문조회</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
            <?php }  ?>
        </ul>
    </div>
</div>

<div id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>
    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
	} ?>

    <div id="hd_wrapper">

        <div id="logo">
            <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/logo.png" alt="<?php echo $config['cf_title']; ?>"></a>
        </div>

        <div class="menus">
            <div class="menu_items">
                <div class="menu_item"><a href="<?php echo G5_URL ?>/company.php" class="menu_item_anchor">COMPANY</a></div>
                <div class="menu_item"><a href="<?php echo G5_URL ?>/sponsors.php" class="menu_item_anchor">SPONSORS</a></div>
                <div class="menu_item">
                    <?php if($ticket_link) { ?>
                        <a href="<?php echo $ticket_link; ?>" class="menu_item_anchor ticket_link">TICKET</a>
                    <?php } else { ?>
                        <a href="#" class="menu_item_anchor" onclick="alert('상품을 준비중입니다.');return false;">TICKET</a>
                    <?php } ?>
                </div>
                <div class="menu_item"><a href="http://www.hegemonyblack.com/main/index.php" class="menu_item_anchor" target="_blank">STORE</a></div>
                <div class="menu_item"><a href="<?php echo G5_URL ?>/event.php?page=1" class="menu_item_anchor">EVENT</a></div>
                <div class="menu_item"><a href="<?php echo G5_URL ?>/video" class="menu_item_anchor">VIDEO</a></div>
                <div class="menu_item"><a href="<?php echo G5_URL ?>/ranking.php?type=fighter" class="menu_item_anchor">RANKING</a></div>
                <div class="menu_item"><a href="<?php echo G5_URL ?>/cl.php" class="menu_item_anchor">C.L</a></div>
                <div class="menu_item"><a href="<?php echo G5_URL ?>/community" class="menu_item_anchor">COMMUNITY</a></div>
                <div class="menu_item"><a href="<?php echo G5_URL ?>/gym.php" class="menu_item_anchor">GYM</a></div>
                <div class="menu_item"><a href="<?php echo G5_URL ?>/rules.php" class="menu_item_anchor">RULES</a></div>
            </div>
        </div>
    </div>

    <div class="hd_bg left"></div>
    <div class="hd_bg right"></div>
</div>
<!-- } 상단 끝 -->

<div id="side_menu">
	<ul id="quick">
		<li><button class="btn_sm_cl1 btn_sm"><i class="fa fa-user-o" aria-hidden="true"></i><span class="qk_tit">마이메뉴</span></button></li>
		<li><button class="btn_sm_cl2 btn_sm"><i class="fa fa-archive" aria-hidden="true"></i><span class="qk_tit">오늘 본 상품</span></button></li>
		<li><button class="btn_sm_cl3 btn_sm"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="qk_tit">장바구니</span></button></li>
		<li><button class="btn_sm_cl4 btn_sm"><i class="fa fa-heart-o" aria-hidden="true"></i><span class="qk_tit">위시리스트</span></button></li>
    </ul>
    <button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
    <div id="tabs_con">
	    <div class="side_mn_wr1 qk_con">
	    	<div class="qk_con_wr">
	    		<?php echo outlogin('theme/shop_side'); // 아웃로그인 ?>
		        <ul class="side_tnb">
		        	<?php if ($is_member) { ?>
					<li><a href="<?php echo G5_SHOP_URL; ?>/mypage.php">마이페이지</a></li>
		            <?php } ?>
					<li><a href="<?php echo G5_SHOP_URL; ?>/orderinquiry.php">주문내역</a></li>
					<li><a href="<?php echo G5_BBS_URL ?>/faq.php">FAQ</a></li>
		            <li><a href="<?php echo G5_BBS_URL ?>/qalist.php">1:1문의</a></li>
		            <li><a href="<?php echo G5_SHOP_URL ?>/personalpay.php">개인결제</a></li>
		            <li><a href="<?php echo G5_SHOP_URL ?>/itemuselist.php">사용후기</a></li>
		            <li><a href="<?php echo G5_SHOP_URL ?>/itemqalist.php">상품문의</a></li>
		            <li><a href="<?php echo G5_SHOP_URL; ?>/couponzone.php">쿠폰존</a></li>
		        </ul>
	        	<?php // include_once(G5_SHOP_SKIN_PATH.'/boxcommunity.skin.php'); // 커뮤니티 ?>
	    		<button type="button" class="con_close"><i class="fa fa-times-circle" aria-hidden="true"></i><span class="sound_only">나의정보 닫기</span></button>
	    	</div>
	    </div>
	    <div class="side_mn_wr2 qk_con">
	    	<div class="qk_con_wr">
	        	<?php include(G5_SHOP_SKIN_PATH.'/boxtodayview.skin.php'); // 오늘 본 상품 ?>
	    		<button type="button" class="con_close"><i class="fa fa-times-circle" aria-hidden="true"></i><span class="sound_only">오늘 본 상품 닫기</span></button>
	    	</div>
	    </div>
	    <div class="side_mn_wr3 qk_con">
	    	<div class="qk_con_wr">
	        	<?php include_once(G5_SHOP_SKIN_PATH.'/boxcart.skin.php'); // 장바구니 ?>
	    		<button type="button" class="con_close"><i class="fa fa-times-circle" aria-hidden="true"></i><span class="sound_only">장바구니 닫기</span></button>
	    	</div>
	    </div>
	    <div class="side_mn_wr4 qk_con">
	    	<div class="qk_con_wr">
	        	<?php include_once(G5_SHOP_SKIN_PATH.'/boxwish.skin.php'); // 위시리스트 ?>
	    		<button type="button" class="con_close"><i class="fa fa-times-circle" aria-hidden="true"></i><span class="sound_only">위시리스트 닫기</span></button>
	    	</div>
	    </div>
    </div>
</div>
<script>
jQuery(function ($){
	$(".btn_member_mn").on("click", function() {
        $(".member_mn").toggle();
        $(".btn_member_mn").toggleClass("btn_member_mn_on");
    });

    var active_class = "btn_sm_on",
        side_btn_el = "#quick .btn_sm",
        quick_container = ".qk_con";

    $(document).on("click", side_btn_el, function(e){
        e.preventDefault();

        var $this = $(this);

        if (!$this.hasClass(active_class)) {
            $(side_btn_el).removeClass(active_class);
            $this.addClass(active_class);
        }

        if( $this.hasClass("btn_sm_cl1") ){
            $(".side_mn_wr1").show();
        } else if( $this.hasClass("btn_sm_cl2") ){
            $(".side_mn_wr2").show();
        } else if( $this.hasClass("btn_sm_cl3") ){
            $(".side_mn_wr3").show();
        } else if( $this.hasClass("btn_sm_cl4") ){
            $(".side_mn_wr4").show();
        }
    }).on("click", ".con_close", function(e){
        $(quick_container).hide();
        $(side_btn_el).removeClass(active_class);
    });

    $(document).mouseup(function (e){
        var container = $(quick_container),
            mn_container = $(".shop_login");
        if( container.has(e.target).length === 0){
            container.hide();
            $(side_btn_el).removeClass(active_class);
        }
        if( mn_container.has(e.target).length === 0){
            $(".member_mn").hide();
            $(".btn_member_mn").removeClass("btn_member_mn_on");
        }
    });

    $("#top_btn").on("click", function() {
        $("html, body").animate({scrollTop:0}, '500');
        return false;
    });
});
</script>
<?php
    $wrapper_class = array();
    if( defined('G5_IS_COMMUNITY_PAGE') && G5_IS_COMMUNITY_PAGE ){
        $wrapper_class[] = 'is_community';
    }
?>
<!-- 전체 콘텐츠 시작 { -->
<div id="wrapper" class="<?php echo implode(' ', $wrapper_class); ?>">
    <!-- #container 시작 { -->
    <div id="container">

        <?php if(defined('_INDEX_')) { ?>
        <div id="aside">
            <?php include_once(G5_SHOP_SKIN_PATH.'/boxcategory.skin.php'); // 상품분류 ?>
            <?php if($default['de_type4_list_use']) { ?>
            <!-- 인기상품 시작 { -->
            <section id="side_pd">
                <h2><a href="<?php echo shop_type_url('4'); ?>">인기상품</a></h2>
                <?php
                $list = new item_list();
                $list->set_type(4);
                $list->set_view('it_id', false);
                $list->set_view('it_name', true);
                $list->set_view('it_basic', false);
                $list->set_view('it_cust_price', false);
                $list->set_view('it_price', true);
                $list->set_view('it_icon', false);
                $list->set_view('sns', false);
                $list->set_view('star', true);
                echo $list->run();
                ?>
            </section>
            <!-- } 인기상품 끝 -->
            <?php } ?>

            <?php echo display_banner('왼쪽', 'boxbanner.skin.php'); ?>
            <?php echo poll('theme/shop_basic'); // 설문조사 ?>
        </div>
        <?php } // end if ?>
        <?php
            $content_class = array('shop-content');
            if( isset($it_id) && isset($it) && isset($it['it_id']) && $it_id === $it['it_id']){
                $content_class[] = 'is_item';
            }
            if( defined('IS_SHOP_SEARCH') && IS_SHOP_SEARCH ){
                $content_class[] = 'is_search';
            }
            if( defined('_INDEX_') && _INDEX_ ){
                $content_class[] = 'is_index';
            }
        ?>
        <!-- .shop-content 시작 { -->
        <div class="<?php echo implode(' ', $content_class); ?>">
            <?php if ((!$bo_table || $w == 's' ) && !defined('_INDEX_')) { ?><div id="wrapper_title"><?php echo $g5['title'] ?></div><?php } ?>
            <!-- 글자크기 조정 display:none 되어 있음 시작 { -->
            <div id="text_size">
                <button class="no_text_resize" onclick="font_resize('container', 'decrease');">작게</button>
                <button class="no_text_resize" onclick="font_default('container');">기본</button>
                <button class="no_text_resize" onclick="font_resize('container', 'increase');">크게</button>
            </div>
            <!-- } 글자크기 조정 display:none 되어 있음 끝 -->