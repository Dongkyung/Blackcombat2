<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

$ticket_link = '';

$ticket_sql = "SELECT it_id FROM g5_shop_item WHERE it_online = 'Y' LIMIT 1";
$ticket_result = sql_query($ticket_sql);
$ticket_row = sql_fetch_array($ticket_result);

if ($ticket_row) {
    $ticket_link = G5_URL . '/shop/' . $ticket_row['it_id'];
}
?>

<!-- 상단 시작 { -->
<div id="tnb" style="background:#212020;">
    <div class="inner">
        <ul id="hd_qnb">
            <li>
                <input type="text" class="search-value-input" style="background-color: #212020;color: #919191;border: 1px solid #919191;padding: 2px;width: 100px;margin-top: -6px;" />
                <button onclick="searchPlayer(this)" style="margin-top: -6px; height: 27px; width: 40px; background-color: #111111; color: gray;">검색</button>
            </li>
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

<script>
    var ajax_url = "https://www.blackcombat-official.com/theme/blackcombat/shop";
    function searchPlayer(){
        let keyword = $(".search-value-input").val();
        if(keyword === null || keyword === undefined || keyword === ""){
            alert("검색어를 입력하세요.");
            return;
        }else if(keyword.length <= 1){
            alert("검색어를 두 글자 이상 입력하세요.");
            return;
        }

        $.ajax({
            url: ajax_url + "/ajax.action.php",
            type: "POST",
            data: {"action":"get_player_info", "search_keyword":keyword},
            dataType: "json",
            async: true,
            cache: false,
            success: function(data, textStatus) {
                if(data.resultArray.length === 0){
                    alert("검색된 선수가 없습니다.");
                }else if(data.resultArray.length > 1){
                    let message = "검색된 선수가 두 명 이상입니다.\n -";
                    message += data.resultArray.map(item => item.fighter_name + " (" + item.fighter_ringname + ")").join("\n -");
                    alert(message);
                }else{
                    location.href="https://www.blackcombat-official.com/fighter.php?page="+data.resultArray[0].fighter_seq;
                }
            },
            error : function(request, status, error){
                console.log(error);
                alert("false ajax :"+request.responseText);
            }
        });
    }

    $('.search-value-input').keypress(function(event) {
        if (event.which === 13 || event.key === 'Enter') {
            searchPlayer()
        }
    });
</script>

<div id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>
    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>

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
                <div class="menu_item"><a href="<?php echo G5_URL ?>/event.php?page=10" class="menu_item_anchor">EVENT</a></div>
                <!-- <div class="menu_item"><a href="<?php echo G5_URL ?>/video" class="menu_item_anchor">VIDEO</a></div> -->
                <div class="menu_item"><a href="<?php echo G5_URL ?>/ranking.php?type=fighter" class="menu_item_anchor">RANKING</a></div>
                <div class="menu_item"><a href="<?php echo G5_URL ?>/cl.php" class="menu_item_anchor">C.L</a></div>
                <div class="menu_item"><a href="<?php echo G5_URL ?>/community" class="menu_item_anchor">COMMUNITY</a></div>
                <div class="menu_item"><a href="<?php echo G5_URL ?>/gym.php" class="menu_item_anchor">GYM</a></div>
                <div class="menu_item"><a href="<?php echo G5_URL ?>/rules.php" class="menu_item_anchor">RULES</a></div>
                <div class="menu_item"><a href="<?php echo G5_URL ?>/doping.php" class="menu_item_anchor">DOPING</a></div>
            </div>
        </div>
    </div>

    <div class="hd_bg left"></div>
    <div class="hd_bg right"></div>
</div>
<!-- } 상단 끝 -->


<hr>

<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <div id="container_wr">
   
    <div id="container">
        <?php if (!defined("_INDEX_")) { ?><h2 id="container_title"><span title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></span></h2><?php }