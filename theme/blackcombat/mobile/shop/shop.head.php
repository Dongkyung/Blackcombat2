<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$q = isset($_GET['q']) ? clean_xss_tags($_GET['q'], 1, 1) : '';

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
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
?>

<style>
#ol_after_private {display:none;}
</style>
<script defer type="text/javascript" charset="UTF-8" src="//t1.daumcdn.net/kas/static/kp.js"></script>
<script defer type="text/javascript">
      kakaoPixel('8339806502848870616').pageView();
</script>

<header id="hd">
    <?php if ((!$bo_table || $w == 's' ) && defined('_INDEX_')) { ?><h1><?php echo $config['cf_title'] ?></h1><?php } ?>

    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php if(defined('_INDEX_')) { // index에서만 실행
        include G5_MOBILE_PATH.'/newwin.inc.php'; // 팝업레이어
    } ?>

    <?php /* ?>

    <!--
    <div id="hd_wr">
        <div id="logo"><a href="<?php echo G5_SHOP_URL; ?>/"><img src="<?php echo G5_DATA_URL; ?>/common/mobile_logo_img" alt="<?php echo $config['cf_title']; ?> 메인"></a></div>
        <div id="hd_btn">
            <button type="button" id="btn_hdcate"><i class="fa fa-bars"></i><span class="sound_only">분류</span></button>
            <button type="button" id="btn_hdsch"><i class="fa fa-search"></i><span class="sound_only">검색열기</span></button>
            <a href="<?php echo G5_SHOP_URL; ?>/mypage.php" id="btn_hduser"><i class="fa fa-user"></i><span class="sound_only">마이페이지</span></a>
            <a href="<?php echo G5_SHOP_URL; ?>/cart.php" id="btn_hdcart"><i class="fa fa-shopping-cart"></i><span class="sound_only">장바구니</span><span class="cart-count"><?php echo get_boxcart_datas_count(); ?></span></a>
        </div>
    </div>
    -->

    <!--
    <form name="frmsearch1" action="<?php echo G5_SHOP_URL; ?>/search.php" onsubmit="return search_submit(this);">
    <aside id="hd_sch">
        <div class="sch_inner">
            <h2>상품 검색</h2>
            <label for="sch_str" class="sound_only">상품명<strong class="sound_only"> 필수</strong></label>
            <input type="text" name="q" value="<?php echo stripslashes(get_text(get_search_string($q))); ?>" id="sch_str" required class="frm_input" placeholder="검색어를 입력해주세요">
            <button type="submit" value="검색" class="sch_submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
        <button type="button" class="btn_close"><i class="fa fa-times"></i><span class="sound_only">닫기</span></button>
    </aside>
    </form>
    -->

    <!--
    <script>
    function search_submit(f) {
        if (f.q.value.length < 2) {
            alert("검색어는 두글자 이상 입력하십시오.");
            f.q.select();
            f.q.focus();
            return false;
        }

        return true;
    }
    </script>
    -->

    <!--
    <?php include_once(G5_THEME_MSHOP_PATH.'/category.php'); // 분류 ?>
    -->

    <?php */ ?>

    <div id="hd_wrapper">
        <div id="logo">
            <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/m_logo.png" alt="<?php echo $config['cf_title']; ?>"></a>
        </div>

        <button type="button" id="gnb_open" class="hd_opener"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/gnb_menu_icon.png" /><span class="sound_only"> 메뉴열기</span></button>
        <div class="mobiel_nav_wrap">

            <?php echo outlogin('theme/basic'); // 외부 로그인 ?>

            <div class="mobile_nav">
                <ul>
                    <li>
                        <a href="<?php echo G5_URL ?>/company.php">COMPANY</a>
                    </li>
                    <li>
                        <a href="<?php echo G5_URL ?>/sponsors.php">SPONSORS</a>
                    </li>
                    <li>
                        <?php if($ticket_link) { ?>
                        <a href="<?php echo $ticket_link; ?>">TICKET</a>
                        <?php } else { ?>
                        <a href="#" onclick="alert('상품을 준비중입니다.');return false;">TICKET</a>
                        <?php } ?>
                    </li>
                    <li>
                        <a href="http://www.hegemonyblack.com/main/index.php" target="_blank">STORE</a>
                    </li>
                    <li>
                        <a href="<?php echo G5_URL ?>/event.php?page=1">EVENT</a>
                    </li>
                    <li>
                        <a href="<?php echo G5_URL ?>/video">VIDEO</a>
                    </li>
                    <li>
                        <a href="<?php echo G5_URL ?>/ranking.php?type=fighter">RANKING</a>
                    </li>
                    <li>
                        <a href="<?php echo G5_URL ?>/cl.php">C.L</a>
                    </li>
                    <li>
                        <a href="<?php echo G5_URL ?>/community">COMMUNITY</a>
                    </li>
                    <li>
                        <a href="<?php echo G5_URL ?>/gym.php">GYM</a>
                    </li>
                    <li>
                        <a href="<?php echo G5_URL ?>/rules.php">RULES</a>
                    </li>
                    <li>
                        <a href="<?php echo G5_URL ?>/doping.php">DOPING</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <script>
    jQuery(function($){
        $( document ).ready( function() {
            
            function catetory_menu_fn( is_open ){
                var $cagegory = $("#category");

                if( is_open ){
                    $cagegory.show();
                    $("body").addClass("is_hidden");
                } else {
                    $cagegory.hide();
                    $("body").removeClass("is_hidden");
                }
            }

            $(document).on("click", "#btn_hdcate", function(e) {
                // 오픈
                catetory_menu_fn(1);
            }).on("click", ".menu_close", function(e) {
                // 숨김
                catetory_menu_fn(0);
            }).on("click", ".cate_bg", function(e) {
                // 숨김
                catetory_menu_fn(0);
            });

            $("#btn_hdsch").on("click", function() {
                $("#hd_sch").show();
            });

            $("#hd_sch .btn_close").on("click", function() {
                $("#hd_sch").hide();
            });
            
            //타이틀 영역고정
            var jbOffset = $( '#container').offset();
            $( window ).scroll( function() {
                if ( $( document ).scrollTop() > jbOffset.top ) {
                    $( '#container').addClass( 'fixed' );
                }
                else {
                    $( '#container').removeClass( 'fixed' );
                }
            });
        });
    });
   </script>

    <script>
        $(function () {
            //폰트 크기 조정 위치 지정
            var font_resize_class = get_cookie("ck_font_resize_add_class");
            if( font_resize_class == 'ts_up' ){
                $("#text_size button").removeClass("select");
                $("#size_def").addClass("select");
            } else if (font_resize_class == 'ts_up2') {
                $("#text_size button").removeClass("select");
                $("#size_up").addClass("select");
            }

            $(".hd_opener").on("click", function() {
                /*
                var $this = $(this);
                var $hd_layer = $this.next(".hd_div");

                if($hd_layer.is(":visible")) {
                    $hd_layer.hide();
                    $this.find("span").text("열기");
                } else {
                    var $hd_layer2 = $(".hd_div:visible");
                    $hd_layer2.prev(".hd_opener").find("span").text("열기");
                    $hd_layer2.hide();

                    $hd_layer.show();
                    $this.find("span").text("닫기");
                }
                */
            });

            $("#container").on("click", function() {
                $(".hd_div").hide();

            });

            $(".btn_gnb_op").click(function(){
                $(this).toggleClass("btn_gnb_cl").next(".gnb_2dul").slideToggle(300);

            });

            $(".hd_closer").on("click", function() {
                var idx = $(".hd_closer").index($(this));
                $(".hd_div:visible").hide();
                $(".hd_opener:eq("+idx+")").find("span").text("열기");
            });

            $('#gnb_open').click(function(){
                $('.mobiel_nav_wrap').toggleClass('active');
                $('body').toggleClass('active');
                $('#hd_wrapper').toggleClass('active');
            });
        });
        </script>
</header>
<?php
    $container_class = array();
    if( defined('G5_IS_COMMUNITY_PAGE') && G5_IS_COMMUNITY_PAGE ){
        $container_class[] = 'is_community';
    }
?>
<div id="container" class="<?php echo implode(' ', $container_class); ?>">
    <?php if ((!$bo_table || $w == 's' ) && !defined('_INDEX_')) { ?><h1 id="container_title" style="display:none;"><a href="javascript:history.back()" class="btn_back"><i class="fa fa-chevron-left" aria-hidden="true"></i><span class="sound_only">뒤로</span></a> <?php echo $g5['title'] ?></h1><?php }