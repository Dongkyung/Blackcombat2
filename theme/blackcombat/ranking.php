<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');

add_stylesheet('<link rel="stylesheet" href="/theme/blackcombat/css/ranking.css">', 0);

$type = !empty($_GET['type']) ? $_GET['type'] : 'fighter';
?>

    <div class="sub_visual">
        <div class="sub_visual_items">
            <div class="sub_visual_caption">
                <div class="category">RANKING</div>
            </div>
        </div>
    </div>
    <div class="sub_content">
        <div class="sub_container">
            <div class="ranking_page">
                <div class="ranking_category">
                    <ul>
                        <li>
                            <a href="<?php echo G5_URL ?>/ranking.php?type=fighter" class="<?php echo $type == 'fighter' ? 'active' : ''; ?>">Fighter</a>
                        </li>
                        <li>
                            <a href="<?php echo G5_URL ?>/ranking.php?type=team" class="<?php echo $type == 'team' ? 'active' : ''; ?>">Team</a>
                        </li>
                    </ul>
                </div>

                <?php if ($type == 'fighter') { ?>

                <div class="ranking_list">
                    <div class="ranking_list_part">
                        <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=under_champ';">
                            <h3><span class="weight">언더그라운드</span> <span class="champ">CHAMPION</span></h3>
                            <div class="ranking_champ_name">
                                검정
                                <div class="ranking_ring_name">Godfather</div>
                            </div>
                            <div class="ranking_champ_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_godfather.png" />
                            </div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=under_1';">
                            <div class="ranking_list_num">1</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_joker.png">
                            </div>
                            <div class="ranking_list_name">정도한<span class="ring_name">Joker / 익스트림 익스트림컴뱃</span></div>
                            <div class="ranking_list_change"><span class="NEW">NEW</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=under_2';">
                            <div class="ranking_list_num">2</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_koko.png">
                            </div>
                            <div class="ranking_list_name">소재호<span class="ring_name">KOKO</span></div>
                            <div class="ranking_list_change"><span class="NEW">NEW</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=under_3';">
                            <div class="ranking_list_num">3</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_thelion.png">
                            </div>
                            <div class="ranking_list_name">오반<span class="ring_name">The Lion</span></div>
                            <div class="ranking_list_change"><span class="NEW">NEW</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=under_4';">
                            <div class="ranking_list_num">4</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">신종훈<span class="ring_name">The Mosquitto</span></div>
                            <div class="ranking_list_change"><span class="NEW">NEW</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=under_5';">
                            <div class="ranking_list_num">5</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_hochul.png">
                            </div>
                            <div class="ranking_list_name">호철<span class="ring_name">뚝배기사범</span></div>
                            <div class="ranking_list_change"><span class="NEW">NEW</span></div>
                        </div>
                        <div class="ranking_list_part_item"onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=under_6';">
                            <div class="ranking_list_num">6</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">김동환<span class="ring_name">아수라 / 블랙컴뱃 본관</span></div>
                            <div class="ranking_list_change"><span class="NEW">NEW</span></div>
                        </div>
                    </div>
                    <div class="ranking_list_part">
                        <div class="ranking_list_part_champ" >
                            <h3><span class="weight">플라이급</span> <span class="champ"></span></h3>
                            <div class="ranking_champ_name">
                            </div>
                            <div class="ranking_champ_photo">
                            </div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=flyweight_1';">
                            <div class="ranking_list_num">1</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">이승철<span class="ring_name">플래시 / 익스트림 익스트림컴뱃</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=flyweight_2';">
                            <div class="ranking_list_num">2</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_no7.png">
                            </div>
                            <div class="ranking_list_name">손지훈<span class="ring_name">No.7 / 팀매드 율하</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=flyweight_3';">
                            <div class="ranking_list_num">3</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_viper.png">
                            </div>
                            <div class="ranking_list_name">김성웅<span class="ring_name">바이퍼 / 익스트림 익스트림컴뱃</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=flyweight_4';">
                            <div class="ranking_list_num">4</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_joker.png">
                            </div>
                            <div class="ranking_list_name">정도한<span class="ring_name">Joker / 익스트림 익스트림컴뱃</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=flyweight_5';">
                            <div class="ranking_list_num">5</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">이현수<span class="ring_name">쉐도우 / 알타핏 싸비MMA</span></div>
                            <div class="ranking_list_change"><span class="NEW">NEW</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=flyweight_6';">
                            <div class="ranking_list_num">6</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">옥은찬<span class="ring_name">라텔 / 지브라 칼슨 해적단</span></div>
                            <div class="ranking_list_change"><span class="NEW">▼ 1</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=flyweight_7';">
                            <div class="ranking_list_num">7</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">임준서<span class="ring_name">더하운드 / 펭카 큐브 MMA</span></div>
                            <div class="ranking_list_change"><span class="NEW">▼ 1</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=flyweight_8';">
                            <div class="ranking_list_num">8</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">김민찬<span class="ring_name">아랑 / BF 팀솔리드</span></div>
                            <div class="ranking_list_change"><span class="NEW">▼ 1</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=flyweight_9';">
                            <div class="ranking_list_num">9</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">이선하<span class="ring_name">도깨비발 / 아리에블랙 MMA스토리</span></div>
                            <div class="ranking_list_change"><span class="NEW">NEW</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=flyweight_10';">
                            <div class="ranking_list_num">10</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">김하진<span class="ring_name">로만틱 / BF 팀솔리드</span></div>
                            <div class="ranking_list_change"><span class="NEW">NEW</span></div>
                        </div>
                    </div>
                    <div class="ranking_list_part">
                        <div class="ranking_list_part_champ"  onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=bantamweight_champ';">
                            <h3><span class="weight">밴텀급</span> <span class="champ">CHAMPION</span></h3>
                            <div class="ranking_champ_name">
                                김성빈
                                <div class="ranking_ring_name">파이톤 / 알타핏 싸비 MMA</div>
                            </div>
                            <div class="ranking_champ_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_pyton.png">
                            </div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=bantamweight_1';">
                            <div class="ranking_list_num">1</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_youjitsu.png">
                            </div>
                            <div class="ranking_list_name">유수영<span class="ring_name">유짓수 / 군포 본 주짓수</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=bantamweight_2';">
                            <div class="ranking_list_num">2</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_kimgwanjang.png">
                            </div>
                            <div class="ranking_list_name">김성재<span class="ring_name">김관장 / 대구 모스짐</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=featherweight_3';">
                            <div class="ranking_list_num">3</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_bigmouse.png">
                            </div>
                            <div class="ranking_list_name">김동규<span class="ring_name">빅마우스 / 익스트림 익스트림컴뱃</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=bantamweight_4';">
                            <div class="ranking_list_num">4</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_yellowmonkey.png">
                            </div>
                            <div class="ranking_list_name">임정민<span class="ring_name">옐로우몽키 / 아리에블랙 MMA 스토리</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=bantamweight_5';">
                            <div class="ranking_list_num">5</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">이창호<span class="ring_name">개미지옥 / 익스트림 익스트림컴뱃</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=bantamweight_6';">
                            <div class="ranking_list_num">6</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">황성주<span class="ring_name">황빠따 / 아리에블랙 MMA 스토리</span></div>
                            <div class="ranking_list_change"><span class="NEW">▼ 1</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=bantamweight_7';">
                            <div class="ranking_list_num">7</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_pirateking.png">
                            </div>
                            <div class="ranking_list_name">이강남<span class="ring_name">해적왕 / 지브라 칼슨 해적단</span></div>
                            <div class="ranking_list_change"><span class="NEW">▼ 1</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=bantamweight_8';">
                            <div class="ranking_list_num">8</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">윤성욱<span class="ring_name">버드와이저 / 펭카 큐브 MMA</span></div>
                            <div class="ranking_list_change"><span class="NEW">NEW</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=bantamweight_9';">
                            <div class="ranking_list_num">9</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_madcow.png">
                            </div>
                            <div class="ranking_list_name">이성원<span class="ring_name">매드카우 / 마이티짐</span></div>
                            <div class="ranking_list_change"><span class="NEW">▼ 2</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=bantamweight_10';">
                            <div class="ranking_list_num">10</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">선석호<span class="ring_name">김첨지 / 지브라 칼슨 해적단</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=bantamweight_11';">
                            <div class="ranking_list_num">11</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">이휘재<span class="ring_name">호넷 / 알타핏 싸비MMA</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=bantamweight_12';">
                            <div class="ranking_list_num">12</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">신창현<span class="ring_name">티그로 / BF 팀솔리드</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=bantamweight_13';">
                            <div class="ranking_list_num">13</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">류창현<span class="ring_name">머신건 / 펭카 큐브MMA</span></div>
                            <div class="ranking_list_change"><span class="NEW">▼ 3</span></div>
                        </div>
                    </div>
                    <div class="ranking_list_part">
                        <div class="ranking_list_part_champ">
                            <h3><span class="weight">페더급</span> <span class="champ">CHAMPION</span></h3>
                            <div class="ranking_champ_name">
                                유수영
                                <div class="ranking_ring_name">유짓수 / 군포 본 주짓수</div>
                            </div>
                            <div class="ranking_champ_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_youjitsu.png">
                            </div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=featherweight_1';">
                            <div class="ranking_list_num">1</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_bbaksse.png">
                            </div>
                            <div class="ranking_list_name">이진세<span class="ring_name">빡세 / 스웰즈코리아</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=featherweight_2';">
                            <div class="ranking_list_num">2</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_jjinhonge.png">
                            </div>
                            <div class="ranking_list_name">홍종태<span class="ring_name">찐홍이 / 아리에블랙 MMA스토리</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=featherweight_3';">
                            <div class="ranking_list_num">3</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_bigmouse.png">
                            </div>
                            <div class="ranking_list_name">김동규<span class="ring_name">빅마우스 / 익스트림 익스트림컴뱃</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=featherweight_4';">
                            <div class="ranking_list_num">4</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">임관우<span class="ring_name">진격의거인 / 익스트림 익스트림컴뱃</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=featherweight_5';">
                            <div class="ranking_list_num">5</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">정용수<span class="ring_name">히트맨 / 펭카 큐브MMA</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=featherweight_6';">
                            <div class="ranking_list_num">6</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">김의종<span class="ring_name">유도가 / 알타핏 싸비MMA</span></div>
                            <div class="ranking_list_change"><span class="NEW">NEW</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=featherweight_7';">
                            <div class="ranking_list_num">7</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">최찬형<span class="ring_name">쇼타임 / 익스트림 익스트림컴뱃</span></div>
                            <div class="ranking_list_change"><span class="NEW">▼ 1</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=featherweight_8';">
                            <div class="ranking_list_num">8</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">이성재<span class="ring_name">포세이돈 / 아리에블랙 MMA스토리</span></div>
                            <div class="ranking_list_change"><span class="NEW">NEW</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=featherweight_9';">
                            <div class="ranking_list_num">9</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">이준용<span class="ring_name">리신 / 스웰즈코리아</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=featherweight_10';">
                            <div class="ranking_list_num">10</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">차범준<span class="ring_name">빌런차 / 지브라 칼슨해적단</span></div>
                            <div class="ranking_list_change"><span class="NEW">▼ 3</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=featherweight_11';">
                            <div class="ranking_list_num">11</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">김준현<span class="ring_name">OLK / 알타핏 싸비MMA</span></div>
                            <div class="ranking_list_change"><span class="NEW">▼ 3</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=featherweight_12';">
                            <div class="ranking_list_num">12</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">최서준<span class="ring_name">무사시 / BF 팀솔리드</span></div>
                            <div class="ranking_list_change"><span class="NEW">▼ 2</span></div>
                        </div>
                    </div>
                    <div class="ranking_list_part">
                        <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=lightweight_champ';">
                            <h3><span class="weight">라이트급</span> <span class="champ">CHAMPION</span></h3>
                            <div class="ranking_champ_name">
                                유수영
                                <div class="ranking_ring_name">유짓수 / 군포 본 주짓수</div>
                            </div>
                            <div class="ranking_champ_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_youjitsu.png" />
                            </div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=lightweight_1';">
                            <div class="ranking_list_num">1</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_hunter.png">
                            </div>
                            <div class="ranking_list_name">박종헌<span class="ring_name">헌터 / 스웰즈코리아</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=lightweight_2';">
                            <div class="ranking_list_num">2</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_youngtiger.png">
                            </div>
                            <div class="ranking_list_name">이영훈<span class="ring_name">영타이거 / 팀파시MMA</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=lightweight_3';">
                            <div class="ranking_list_num">3</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_bearfist.png">
                            </div>
                            <div class="ranking_list_name">김정균<span class="ring_name">곰주먹 / 청주 팀매드</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=lightweight_4';">
                            <div class="ranking_list_num">4</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_pierrot.png?v=20221017">
                            </div>
                            <div class="ranking_list_name">이송하<span class="ring_name">피에로 / 알타핏 싸비MMA</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=lightweight_5';">
                            <div class="ranking_list_num">5</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">윤다원<span class="ring_name">맨티스 / 아리에블랙 MMA스토리</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=lightweight_6';">
                            <div class="ranking_list_num">6</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_secretbh.png?v=20221017">
                            </div>
                            <div class="ranking_list_name">임병희<span class="ring_name">비밀병희 / 익스트림 익스트림컴뱃</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=lightweight_7';">
                            <div class="ranking_list_num">7</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">이민혁<span class="ring_name">래버넌트 / 익스트림 익스트림컴뱃</span></div>
                            <div class="ranking_list_change"><span class="NEW">NEW</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=lightweight_8';">
                            <div class="ranking_list_num">8</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_nojam.png">
                            </div>
                            <div class="ranking_list_name">이청수<span class="ring_name">노잼 / 팀파시MMA</span></div>
                            <div class="ranking_list_change"><span class="NEW">-</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=lightweight_9';">
                            <div class="ranking_list_num">9</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">박한빈<span class="ring_name">스몰고릴라 / 아토무브짐</span></div>
                            <div class="ranking_list_change"><span class="NEW">▼ 2</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=lightweight_10';">
                            <div class="ranking_list_num">10</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">조규준<span class="ring_name">한마 바키 / 지브라 칼슨해적단</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=lightweight_11';">
                            <div class="ranking_list_num">11</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">유다솔<span class="ring_name">중학생 / 아리에블랙 MMA스토리</span></div>
                            <div class="ranking_list_change"><span class="NEW">NEW</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=lightweight_12';">
                            <div class="ranking_list_num">12</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">김명현<span class="ring_name">라이트닝 / BF 팀솔리드</span></div>
                            <div class="ranking_list_change"><span class="NEW">NEW</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=lightweight_13';">
                            <div class="ranking_list_num">13</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">문병일<span class="ring_name">SCP-096 / 청주 팀매드</span></div>
                            <div class="ranking_list_change"><span class="NEW">▼ 4</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=lightweight_14';">
                            <div class="ranking_list_num">14</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">박어진<span class="ring_name">히드라 / 스웰즈코리아</span></div>
                            <div class="ranking_list_change"><span class="NEW">▼ 3</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=lightweight_15';">
                            <div class="ranking_list_num">15</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">김진수<span class="ring_name">시크릿 웨폰 / 익스트림 익스트림컴뱃</span></div>
                            <div class="ranking_list_change"><span class="NEW">▼ 3</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=lightweight_16';">
                            <div class="ranking_list_num">16</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">정용완<span class="ring_name">그루트 / 펭카 큐브MMA</span></div>
                            <div class="ranking_list_change"><span class="NEW">▼ 3</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=lightweight_17';">
                            <div class="ranking_list_num">17</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">최은호<span class="ring_name">라온 / BF 팀솔리드</span></div>
                            <div class="ranking_list_change"><span class="NEW">▼ 3</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=lightweight_18';">
                            <div class="ranking_list_num">18</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">천성호<span class="ring_name">독주먹 / 알타핏 싸비MMA</span></div>
                            <div class="ranking_list_change"><span class="NEW">NEW</span></div>
                        </div>
                    </div>
                    <div class="ranking_list_part">
                        <div class="ranking_list_part_champ" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=heavyweight_champ';">
                            <h3><span class="weight">중량급</span> <span class="champ">CHAMPION</span></h3>
                            <div class="ranking_champ_name">
                                양해준
                                <div class="ranking_ring_name">The Big Guy / 익스트림 익스트림컴뱃</div>
                            </div>
                            <div class="ranking_champ_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_thebigguy.png">
                            </div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=heavyweight_1';">
                            <div class="ranking_list_num">1</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">김명환<span class="ring_name">맘모스 / 익스트림 익스트림컴뱃</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=heavyweight_2';">
                            <div class="ranking_list_num">2</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_whitebear.png">
                            </div>
                            <div class="ranking_list_name">최원준<span class="ring_name">화이트베어 / 아리에블랙 MMA스토리</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=heavyweight_3';">
                            <div class="ranking_list_num">3</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">김연균<span class="ring_name">갓균 / 펭카 큐브MMA</span></div>
                            <div class="ranking_list_change"><span class="NEW">▲ 1</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=heavyweight_4';">
                            <div class="ranking_list_num">4</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">박건환<span class="ring_name">터미네이터 / 익스트림 익스트림컴뱃</span></div>
                            <div class="ranking_list_change">-</div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=heavyweight_5';">
                            <div class="ranking_list_num">5</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">임진욱<span class="ring_name">베놈 / 아리에블랙 MMA스토리</span></div>
                            <div class="ranking_list_change"><span class="NEW">NEW</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=heavyweight_6';">
                            <div class="ranking_list_num">6</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">조경민<span class="ring_name">고릴라 / 익스트림 익스트림컴뱃</span></div>
                            <div class="ranking_list_change"><span class="NEW">NEW</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=heavyweight_7';">
                            <div class="ranking_list_num">7</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">김현민<span class="ring_name">투사 / 알타핏 싸비MMA</span></div>
                            <div class="ranking_list_change"><span class="NEW">NEW</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=heavyweight_8';">
                            <div class="ranking_list_num">8</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">남지훈<span class="ring_name">더퍼지 / 알타핏 싸비MMA</span></div>
                            <div class="ranking_list_change"><span class="NEW">▼ 3</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=heavyweight_9';">
                            <div class="ranking_list_num">9</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">박용정<span class="ring_name">DaddyP / BF 팀솔리드</span></div>
                            <div class="ranking_list_change"><span class="NEW">▼ 3</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=heavyweight_10';">
                            <div class="ranking_list_num">10</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">전현우<span class="ring_name">더마스터 / 지브라 칼슨해적단</span></div>
                            <div class="ranking_list_change"><span class="NEW">▼ 3</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=heavyweight_11';">
                            <div class="ranking_list_num">11</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">신정민<span class="ring_name">마린복서 / BF 팀솔리드</span></div>
                            <div class="ranking_list_change"><span class="NEW">▼ 3</span></div>
                        </div>
                        <div class="ranking_list_part_item" onclick="location.href='<?php echo G5_URL ?>/fighter.php?page=heavyweight_12';">
                            <div class="ranking_list_num">12</div>
                            <div class="ranking_list_photo">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter_blank.png">
                            </div>
                            <div class="ranking_list_name">이재규<span class="ring_name">5분의힘 / 스웰즈코리아</span></div>
                            <div class="ranking_list_change"><span class="NEW">▼ 4</span></div>
                        </div>
                    </div>
                </div>

                <?php } else { ?>

                <div class="ranking_team_list">
                    <div class="ranking_team_part">
                        <div class="ranking_team_logo">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/team_excombat.png" />
                        </div>
                        <div class="ranking_team_info">
                            <div class="ranking_team_num">
                                <span>Rank</span> 1
                            </div>
                            <div class="ranking_team_name">
                                익스트림 익스트림컴뱃
                            </div>
                            <div class="ranking_team_address">
                                경기도 고양시 덕양구 화신로260번길 58, B01호
                                <div class="tel">031-965-2347</div>
                            </div>
                        </div>
                    </div>
                    <div class="ranking_team_part">
                        <div class="ranking_team_logo">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/team_cubemma.png" />
                        </div>
                        <div class="ranking_team_info">
                            <div class="ranking_team_num">
                                <span>Rank</span> 2
                            </div>
                            <div class="ranking_team_name">
                                펭카 큐브 MMA
                            </div>
                            <div class="ranking_team_address">
                                경기도 하남시 신장로 188 4층
                                <div class="tel">010-4785-4149</div>
                            </div>
                        </div>
                    </div>
                    <div class="ranking_team_part">
                        <div class="ranking_team_logo">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/team_mmastory.png" />
                        </div>
                        <div class="ranking_team_info">
                            <div class="ranking_team_num">
                                <span>Rank</span> 3
                            </div>
                            <div class="ranking_team_name">
                                아리에 블랙 MMA 스토리
                            </div>
                            <div class="ranking_team_address">
                                서울특별시 도봉구 노해로63가길 42 B1
                                <div class="tel">0507-1345-9663</div>
                            </div>
                        </div>
                    </div>
                    <div class="ranking_team_part">
                        <div class="ranking_team_logo">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/team_ssabi.png" />
                        </div>
                        <div class="ranking_team_info">
                            <div class="ranking_team_num">
                                <span>Rank</span> 4
                            </div>
                            <div class="ranking_team_name">
                                알타핏 싸비 MMA
                            </div>
                            <div class="ranking_team_address">
                                서울 마포구 양화로 85
                                <div class="tel">02-6218-1800</div>
                            </div>
                        </div>
                    </div>
                    <div class="ranking_team_part">
                        <div class="ranking_team_logo">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/team_calson.png" />
                        </div>
                        <div class="ranking_team_info">
                            <div class="ranking_team_num">
                                <span>Rank</span> 5
                            </div>
                            <div class="ranking_team_name">
                                지브라 칼슨 해적단
                            </div>
                            <div class="ranking_team_address">
                                서울 마포구 양화로 85
                                <div class="tel">02-6218-1800</div>
                            </div>
                        </div>
                    </div>
                    <div class="ranking_team_part">
                        <div class="ranking_team_logo">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/team_solid.png" />
                        </div>
                        <div class="ranking_team_info">
                            <div class="ranking_team_num">
                                <span>Rank</span> 6
                            </div>
                            <div class="ranking_team_name">
                                BF 팀 솔리드
                            </div>
                            <div class="ranking_team_address">
                                경기도 김포시 김포한강1로97번길 10-12, 101호 솔리드짐
                                <div class="tel">0507-1312-1794</div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } ?>
            </div>
        </div>
    </div>

<?php
include_once(G5_THEME_PATH.'/tail.php');