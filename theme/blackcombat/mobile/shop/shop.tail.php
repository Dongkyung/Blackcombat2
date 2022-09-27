<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$admin = get_admin("super");

// 사용자 화면 우측과 하단을 담당하는 페이지입니다.
// 우측, 하단 화면을 꾸미려면 이 파일을 수정합니다.
?>
</div><!-- container End -->

<div id="ft">
    <?php /* ?>
    <h2><?php echo $config['cf_title']; ?> 정보</h2>
    <div id="ft_company">
        <a href="<?php echo get_pretty_url('content', 'company'); ?>">회사소개</a>
        <a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보</a>
        <a href="<?php echo get_pretty_url('content', 'provision'); ?>">이용약관</a>

    </div>
    <div id="ft_logo"><a href="<?php echo G5_SHOP_URL; ?>/"><img src="<?php echo G5_DATA_URL; ?>/common/mobile_logo_img2" alt="<?php echo $config['cf_title']; ?> 메인"></a></div>
    <p>
        <span><b>회사명</b> <?php echo $default['de_admin_company_name']; ?></span>
        <span><b>주소</b> <?php echo $default['de_admin_company_addr']; ?></span><br>
        <span><b>사업자 등록번호</b> <?php echo $default['de_admin_company_saupja_no']; ?></span><br>
        <span><b>대표</b> <?php echo $default['de_admin_company_owner']; ?></span>
        <span><b>전화</b> <?php echo $default['de_admin_company_tel']; ?></span>
        <span><b>팩스</b> <?php echo $default['de_admin_company_fax']; ?></span><br>
        <!-- <span><b>운영자</b> <?php echo $admin['mb_name']; ?></span><br> -->
        <span><b>통신판매업신고번호</b> <?php echo $default['de_admin_tongsin_no']; ?></span><br>
        <span><b>개인정보 보호책임자</b> <?php echo $default['de_admin_info_name']; ?></span>

        <?php if ($default['de_admin_buga_no']) echo '<span><b>부가통신사업신고번호</b> '.$default['de_admin_buga_no'].'</span>'; ?><br>
        Copyright &copy; 2001-2013 <?php echo $default['de_admin_company_name']; ?>. All Rights Reserved.
    </p>
   <?php
    if(G5_DEVICE_BUTTON_DISPLAY && G5_IS_MOBILE) { ?>
    <a href="<?php echo get_device_change_url(); ?>" id="device_change">PC 버전</a>
    <?php } ?>

    <?php */ ?>

    <div class="footer_social">
        <div class="footer_social_title"><img src="<?php echo G5_THEME_IMG_URL; ?>/footer_social_title.png" /></div>

        <div class="footer_social_items">
            <div class="footer_social_item"><a href="https://www.youtube.com/channel/UC_IYjiKaQBPq-K1Iq4sM-UQ" class="footer_social_item_anchor" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/footer_social_youtube_icon.png" /></a></div>
            <div class="footer_social_item"><a href="https://www.instagram.com/blackcombat_official/" class="footer_social_item_anchor" target="_blank"><img src="<?php echo G5_THEME_IMG_URL; ?>/footer_social_instagram_icon.png" /></a></div>
        </div>
    </div>

    <div class="footer_copyright">
        <p style="padding-bottom:5px;">회사명 : 블랙컴뱃</p>
        <p style="padding-bottom:5px;">주소 : 서울 금천구 가산디지털1로 142 1302호 (가산동, 가산 더스카이밸리 1차)</p>
        <p style="padding-bottom:5px;">사업자 등록번호 : 682-81-02925</p>
        <p style="padding-bottom:5px;">대표 : 박평화</p>
        <p style="padding-bottom:5px;">전화 : 070-4193-9293</p>
        <p style="padding-bottom:5px;">통신판매업신고번호 :</p>
        <p style="padding-bottom:10px;">개인정보 보호책임자 : 박영광 (pykp3927@gmail.com)</p>

        <p>Blackcombat © <?php echo date('Y', time()); ?>. All Rights Reserved.</p>
        <!--<a href="/index.php?device=pc">모바일버전</a>-->
    </div>

    <button type="button" id="top_btn" style="display:none;"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
</div>

<?php
$sec = get_microtime() - $begin_time;
$file = $_SERVER['SCRIPT_NAME'];

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<script src="<?php echo G5_JS_URL; ?>/sns.js"></script>

<?php
include_once(G5_THEME_PATH.'/tail.sub.php');