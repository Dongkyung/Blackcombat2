<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.php');

add_stylesheet('<link rel="stylesheet" href="/theme/blackcombat/css/mobile_fighter.css">', 0);

$page = !empty($_GET['page']) ? $_GET['page'] : 'under_1';
?>

<div class="sub_visual">
        <div class="sub_visual_items">
            <div class="sub_visual_caption">
                <div class="category"></div>
            </div>
        </div>
    </div>    
    <div class="sub_content fighter" style="background-color: #000; padding-bottom: 0px;">
        <div class="sub_container">
            <div class="fighter_page">

                <?php if ($page == 'under_0') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>언더그라운드</span>
                                <span>페더급</span>
                                <span>블랙컴뱃</span>
                            </div>
                            <div class="data_name">
                                검정
                                <span class="data_ringname">"GodFather"</span>
                                <span class="data_age">FACE AGE 34</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/godfather_black_ip/" target="_blank">@godfather_black_ip</a>
                            </div>
                            <div class="data_team">
                                팀명 : 블랙컴뱃
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    171cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    3 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    0 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            검정 <span class="match_result win">Win</span> <span class="valse">vs</span> 정도한 <span class="match_result lose">Lose</span>
                                        </li>
                                        <li>
                                            검정 <span class="match_result win">Win</span> <span class="valse">vs</span> 신종훈 <span class="match_result lose">Lose</span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_godfather.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'under_1') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>플라이급</span>
                            </div>
                            <div class="data_name">
                                정도한
                                <span class="data_ringname">"Joker"</span>
                                <span class="data_age">AGE 35</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/atomuv_gym/" target="_blank">@atomuv_gym</a>
                            </div>
                            <div class="data_team">
                                팀명 : 트라이스톤
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    165cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    2 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    3 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            정도한 <span class="match_result lose">Lose</span> <span class="valse">vs</span> 검정 <span class="match_result win">Win</span>
                                        </li>
                                        <li>
                                            정도한 <span class="match_result win">Win</span> <span class="valse">vs</span> 소재호 <span class="match_result lose">Lose</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_joker.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'under_2') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>언더그라운드</span>
                            </div>
                            <div class="data_name">
                                소재호
                                <span class="data_ringname">"KOKO"</span>
                                <span class="data_age">AGE 37</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/sojaeho0928/" target="_blank">@sojaeho0928</a>
                            </div>
                            <div class="data_team">
                                팀명 : 소속없음
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    178cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            소재호 <span class="match_result win">Win</span> <span class="valse">vs</span> 호철 <span class="match_result lose">Lose</span>
                                        </li>
                                        <li>
                                            소재호 <span class="match_result lose">Lose</span> <span class="valse">vs</span> 정도한 <span class="match_result win">Win</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_koko.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'under_3') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>언더그라운드</span>
                            </div>
                            <div class="data_name">
                                오반
                                <span class="data_ringname">"The Lion"</span>
                                <span class="data_age">AGE 25</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/ovanjinjjada1997/" target="_blank">@ovanjinjjada1997</a>
                            </div>
                            <div class="data_team">
                                팀명 : 소속없음
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    181cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            오반 <span class="match_result lose">Lose</span> <span class="valse">vs</span> 이성원 <span class="match_result win">Win</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_thelion.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'under_4') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>언더그라운드</span>
                            </div>
                            <div class="data_name">
                                신종훈
                                <span class="data_ringname">"The Mosquitto"</span>
                                <span class="data_age">AGE 33</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/shin_jonghun/" target="_blank">@shin_jonghun</a>
                            </div>
                            <div class="data_team">
                                팀명 : 소속없음
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    168cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           신종훈 <span class="match_result lose">Lose</span> <span class="valse">vs</span> 검정 <span class="match_result win">Win</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'under_5') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>언더그라운드</span>
                            </div>
                            <div class="data_name">
                                호철
                                <span class="data_ringname">"뚝배기사범"</span>
                                <span class="data_age">AGE 39</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/tetsu.hochul/" target="_blank">@tetsu.hochul</a>
                            </div>
                            <div class="data_team">
                                팀명 : 소속없음
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    185cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    2 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           호철 <span class="match_result lose">Lose</span> <span class="valse">vs</span> 이청수 <span class="match_result win">Win</span>
                                        </li>
                                        <li>
                                           호철 <span class="match_result lose">Lose</span> <span class="valse">vs</span> 소재호 <span class="match_result win">Win</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_hochul.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'under_6') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>언더그라운드</span>
                            </div>
                            <div class="data_name">
                                김동환
                                <span class="data_ringname">"아수라"</span>
                                <span class="data_age">AGE 23</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/donghwan5603/" target="_blank">@donghwan5603</a>
                            </div>
                            <div class="data_team">
                                팀명 : 블랙컴뱃 본관
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    172cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    - <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    - <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    - <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            No Data
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'flyweight_1') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>플라이급</span>
                            </div>
                            <div class="data_name">
                                이승철
                                <span class="data_ringname">"플래시"</span>
                                <span class="data_age">AGE 24</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/lee_se_ch_99/" target="_blank">@lee_se_ch_99</a>
                            </div>
                            <div class="data_team">
                                팀명 : Extreme 익스트림 컴뱃
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    163cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    4 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 이승철 vs 김하진
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'flyweight_2') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                손지훈
                                <span class="data_ringname">"No.7"</span>
                                <span class="data_age">AGE 29</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/son.1994_/" target="_blank">@son.1994_</a>
                            </div>
                            <div class="data_team">
                                팀명 : 팀매드 율하
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    171cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           <span class="match_result win">Win</span> 손지훈 vs 김성웅
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_no7.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'flyweight_3') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>플라이급</span>
                            </div>
                            <div class="data_name">
                                김성웅
                                <span class="data_ringname">"바이퍼"</span>
                                <span class="data_age">AGE 27</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/viper_ung/" target="_blank">@viper_ung</a>
                            </div>
                            <div class="data_team">
                                팀명 : Extreme 익스트림 컴뱃
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    175cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    4 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    3 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 김성웅 vs 정원희
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_viper_full.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'flyweight_4') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>플라이급</span>
                            </div>
                            <div class="data_name">
                                이준영
                                <span class="data_ringname">"배드가이"</span>
                                <span class="data_age">AGE 28</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/badguy_mma/" target="_blank">@badguy_mma</a>
                            </div>
                            <div class="data_team">
                                팀명 : 알타핏 싸비 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    173cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    5 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 이준영 vs 김성웅
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_badguy_mma_full.png" />
                        </div>
                    </div>



                <?php } else if ($page == 'flyweight_5') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>플라이급</span>
                            </div>
                            <div class="data_name">
                                정원희
                                <span class="data_ringname">"투견"</span>
                                <span class="data_age">AGE 31</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/fighter_w.h/" target="_blank">@fighter_w.h</a>
                            </div>
                            <div class="data_team">
                                팀명 : 지브라 칼슨 해적단
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    168cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    6 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    6 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 김성웅 vs 정원희
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_fighter_w.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'flyweight_6') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>플라이급</span>
                            </div>
                            <div class="data_name">
                                정도한
                                <span class="data_ringname">"Joker"</span>
                                <span class="data_age">AGE 34</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/atomuv_gym/" target="_blank">@atomuv_gym</a>
                            </div>
                            <div class="data_team">
                                팀명 : Extreme 익스트림 컴뱃
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    165cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    2 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    3 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            정도한 vs <span class="match_result win">Win</span> 김성웅
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_joker.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'flyweight_7') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>플라이급</span>
                            </div>
                            <div class="data_name">
                                이현수
                                <span class="data_ringname">"쉐도우"</span>
                                <span class="data_age">AGE 29</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/lillio_oillil/" target="_blank">@lillio_oillil</a>
                            </div>
                            <div class="data_team">
                                팀명 : 알타핏 싸비 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    169cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    2 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    0 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 이현수 vs 이선하
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_lillio_full.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'flyweight_8') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>플라이급</span>
                            </div>
                            <div class="data_name">
                                옥은찬
                                <span class="data_ringname">"라텔"</span>
                                <span class="data_age">AGE 29</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/chance_ok/" target="_blank">@chance_ok</a>
                            </div>
                            <div class="data_team">
                                팀명 : 지브라 칼슨 해적단
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    176cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    0 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            옥은찬 vs <span class="match_result win">Win</span> 김성웅
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_latel.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'flyweight_9') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>플라이급</span>
                            </div>
                            <div class="data_name">
                                신창현
                                <span class="data_ringname">"티그로"</span>
                                <span class="data_age">AGE 20</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/the_tigro_22/" target="_blank">@the_tigro_22</a>
                            </div>
                            <div class="data_team">
                                팀명 : BF 팀 솔리드
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    174cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    2 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           <span class="match_result win">Win</span> 신창현 vs 이선하
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'flyweight_10') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>플라이급</span>
                            </div>
                            <div class="data_name">
                                조효제
                                <span class="data_ringname">"버서커"</span>
                                <span class="data_age">AGE 29</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/1994_hyojejo/" target="_blank">@1994_hyojejo</a>
                            </div>
                            <div class="data_team">
                                팀명 : Extreme 익스트림 컴뱃
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    175cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    2 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           조효제 vs <span class="match_result win">Win</span> 정원희
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'flyweight_11') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>플라이급</span>
                            </div>
                            <div class="data_name">
                                박수목
                                <span class="data_ringname">"노빠꾸"</span>
                                <span class="data_age">AGE 21</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/bagsumog3/" target="_blank">@bagsumog3</a>
                            </div>
                            <div class="data_team">
                                팀명 : 지브라 칼슨 해적단
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    168cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            박수목 vs <span class="match_result win">Win</span> 이준영
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                
                <?php } else if ($page == 'flyweight_12') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>플라이급</span>
                            </div>
                            <div class="data_name">
                                박도담
                                <span class="data_ringname">"앤트맨"</span>
                                <span class="data_age">AGE 17</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/parkdodam_m/" target="_blank">@parkdodam_m</a>
                            </div>
                            <div class="data_team">
                                팀명 : 펭카 큐브 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    160cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    3 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 김태헌 vs 박도담
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>



                    <?php } else if ($page == 'flyweight_13') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>플라이급</span>
                            </div>
                            <div class="data_name">
                                임준서
                                <span class="data_ringname">"더 하운드"</span>
                                <span class="data_age">AGE 19</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/leem_jxxs/" target="_blank">@leem_jxxs</a>
                            </div>
                            <div class="data_team">
                                팀명 : 펭카 큐브 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    174cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            임준서 vs <span class="match_result win">Win</span> 옥은찬
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>



                

                <?php } else if ($page == 'flyweight_14') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>플라이급</span>
                            </div>
                            <div class="data_name">
                                이선하
                                <span class="data_ringname">"도깨비발"</span>
                                <span class="data_age">AGE 18</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/sunha_3746/" target="_blank">@sunha_3746</a>
                            </div>
                            <div class="data_team">
                                팀명 : 아리에 블랙 MMA 스토리
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    170cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    2<div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    - <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            이선하 vs <span class="match_result win">Win</span> 신창현
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                

                <?php } else if ($page == 'flyweight_15') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>플라이급</span>
                            </div>
                            <div class="data_name">
                                김하진
                                <span class="data_ringname">"로만틱"</span>
                                <span class="data_age">AGE 18</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/bhj9991/" target="_blank">@bhj9991</a>
                            </div>
                            <div class="data_team">
                                팀명 : BF 팀 솔리드
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    179cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    - <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    - <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            김하진 vs <span class="match_result win">Win</span> 이승철
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'flyweight_16') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>플라이급</span>
                            </div>
                            <div class="data_name">
                                김민찬
                                <span class="data_ringname">"아랑"</span>
                                <span class="data_age">AGE 16</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/mincan643/" target="_blank">@mincan643</a>
                            </div>
                            <div class="data_team">
                                팀명 : BF 팀 솔리드
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    174cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    - <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    - <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    - <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            -
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'flyweight_17') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>플라이급</span>
                            </div>
                            <div class="data_name">
                                박석광
                                <span class="data_ringname">"그리드"</span>
                                <span class="data_age">AGE 26</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/ssmg_11/" target="_blank">@ssmg_11</a>
                            </div>
                            <div class="data_team">
                                팀명 : BF 팀 솔리드
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    174cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    0 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 박석광 vs 이서준
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_ssmg_full.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'flyweight_18') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>플라이급</span>
                            </div>
                            <div class="data_name">
                                이서준
                                <span class="data_ringname">"대갈장군"</span>
                                <span class="data_age">AGE 17</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/lsj12_34/" target="_blank">@lsj12_34</a>
                            </div>
                            <div class="data_team">
                                팀명 : BF 팀 솔리드
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    171cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 박석광 vs 이서준
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'flyweight_19') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>플라이급</span>
                            </div>
                            <div class="data_name">
                                신재혁
                                <span class="data_ringname">"흑자"</span>
                                <span class="data_age">AGE 17</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/sl_ljhk/" target="_blank">@sl_ljhk</a>
                            </div>
                            <div class="data_team">
                                팀명 : 아리에 블랙 MMA 스토리
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    166cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    0 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 신재혁 vs 박도담
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'flyweight_twins') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>플라이급</span>
                            </div>
                            <div class="data_name">
                                권민수
                                <span class="data_ringname">"트윈스"</span>
                                <span class="data_age">AGE 32</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/kwontwins125/" target="_blank">@kwontwins125</a>
                            </div>
                            <div class="data_team">
                                팀명 : Extreme 익스트림 컴뱃
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    168cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    4 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    4 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 권민수 vs 박성현
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'flyweight_parkpro') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>플라이급</span>
                            </div>
                            <div class="data_name">
                                박성현
                                <span class="data_ringname">"박프로"</span>
                                <span class="data_age">AGE 19</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/theanomalousmma/" target="_blank">@theanomalousmma</a>
                            </div>
                            <div class="data_team">
                                팀명 : 아리에 블랙 MMA 스토리
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    169cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 권민수 vs 박성현
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_theanomalousmma_full.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'flyweight_hana') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>플라이급</span>
                            </div>
                            <div class="data_name">
                                김태헌
                                <span class="data_ringname">"하나"</span>
                                <span class="data_age">AGE 37</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/lights299/" target="_blank">@lights299</a>
                            </div>
                            <div class="data_team">
                                팀명 : 알타핏 싸비 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    170cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    0 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 김태헌 vs 박도담
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_hana_full.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'flyweight_short_hair_lee') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>플라이급</span>
                            </div>
                            <div class="data_name">
                                이강남
                                <span class="data_ringname">"해적왕"</span>
                                <span class="data_age">AGE 35</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/short_hair_lee/" target="_blank">@short_hair_lee</a>
                            </div>
                            <div class="data_team">
                                팀명 : 지브라 칼슨 해적단
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    173cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    2 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 이강남 vs 김성웅
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'flyweight_fresherman') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>플라이급</span>
                            </div>
                            <div class="data_name">
                                박정빈
                                <span class="data_ringname">"프레셔맨"</span>
                                <span class="data_age">AGE 19</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/park_jung_beans/" target="_blank">@park_jung_beans</a>
                            </div>
                            <div class="data_team">
                                팀명 : 알타핏 싸비 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    166cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    2 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    0 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 박정빈 vs 박성관
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'flyweight_cgpark') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>플라이급</span>
                            </div>
                            <div class="data_name">
                                박성관
                                <span class="data_ringname">"스펙터"</span>
                                <span class="data_age">AGE 25</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/cgpark_/" target="_blank">@cgpark_</a>
                            </div>
                            <div class="data_team">
                                팀명 : Extreme 익스트림 컴뱃
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    178cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 박정빈 vs 박성관
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'flyweight_garrincha') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>플라이급</span>
                            </div>
                            <div class="data_name">
                                성낙중
                                <span class="data_ringname">"가린샤"</span>
                                <span class="data_age">AGE 25</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/garrincha124/" target="_blank">@garrincha124</a>
                            </div>
                            <div class="data_team">
                                팀명 : 무소속
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    166cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <!-- <span class="match_result win">Win</span> 박정빈 vs 박성관 -->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_garrincha_full.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'flyweight_koreanlazyboi') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>플라이급</span>
                            </div>
                            <div class="data_name">
                                이성제
                                <span class="data_ringname">"레이지보이"</span>
                                <span class="data_age">AGE 19</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/koreanlazyboi/" target="_blank">@koreanlazyboi</a>
                            </div>
                            <div class="data_team">
                                팀명 : 알타핏 싸비MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    174cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    0 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <!-- <span class="match_result win">Win</span> 박정빈 vs 박성관 -->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_koreanlazyboi.png" />
                        </div>
                    </div>



                <?php } else if ($page == 'bantamweight_0') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                김성빈
                                <span class="data_ringname">"파이톤"</span>
                                <span class="data_age">AGE 26</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/python__mma/" target="_blank">@python__mma</a>
                            </div>
                            <div class="data_team">
                                팀명 : 알타핏 싸비 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    173cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           <span class="match_result win">Win</span> 김성빈 vs 이강남
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_python__mma.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'bantamweight_1') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                유수영
                                <span class="data_ringname">"유짓수"</span>
                                <span class="data_age">AGE 28</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/you_jitsu/" target="_blank">@you_jitsu</a>
                            </div>
                            <div class="data_team">
                                팀명 : 군포 본 주짓수
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    168cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    10 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    2 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            유수영 vs 김동규
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_jujitsu.png" />
                        </div>
                    </div>
                <?php } else if ($page == 'bantamweight_2') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                김성재
                                <span class="data_ringname">"김관장"</span>
                                <span class="data_age">AGE 31</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/seongjaek/" target="_blank">@seongjaek</a>
                            </div>
                            <div class="data_team">
                                팀명 : 대구 모스짐
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    170cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    8 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    7 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    1 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           <span class="match_result win">Win</span> 김성재 vs 김동규
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_kimgwanjang.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'bantamweight_3') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                김종훈
                                <span class="data_ringname">"프린스"</span>
                                <span class="data_age">AGE 31</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/prince_moai/" target="_blank">@prince_moai</a>
                            </div>
                            <div class="data_team">
                                팀명 : 모아이짐 상계점
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    177cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    6 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    0 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    - <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 김종훈 vs 야마모토 세이고
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_bigmoai.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'bantamweight_4') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                김동규
                                <span class="data_ringname">"빅마우스"</span>
                                <span class="data_age">AGE 31</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/bigmouth_kim/" target="_blank">@bigmouth_kim</a>
                            </div>
                            <div class="data_team">
                                팀명 : 익스트림 익스트림 컴뱃
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    171cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    8 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    5 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            김동규 vs 유수영
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_bigmouth_kim.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'bantamweight_5') { ?>

                   <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                임정민
                                <span class="data_ringname">"옐로우 몽키"</span>
                                <span class="data_age">AGE 27</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/yellowmonkey1234/" target="_blank">@yellowmonkey1234</a>
                            </div>
                            <div class="data_team">
                                팀명 : 아리에 블랙 MMA 스토리
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    171cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    5 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    4 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                          <span class="match_result win">Win</span> 임정민 vs 이성원
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_yellowmonkey.png" />
                        </div>
                    </div>
                <?php } else if ($page == 'bantamweight_6') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                이창호
                                <span class="data_ringname">"개미지옥"</span>
                                <span class="data_age">AGE 29</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/changholee_/" target="_blank">@changholee_</a>
                            </div>
                            <div class="data_team">
                                팀명 : Extreme 익스트림 컴뱃
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    172cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    8 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            No Data
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>
                <?php } else if ($page == 'bantamweight_8') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                황성주
                                <span class="data_ringname">"황빠따"</span>
                                <span class="data_age">AGE 32</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/hwang_bbadda/" target="_blank">@hwang_bbadda</a>
                            </div>
                            <div class="data_team">
                                팀명 : 아리에 블랙 MMA 스토리
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    171cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    5 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    5 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 황성주 vs 박재석
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_bbadda.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'bantamweight_9') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                윤호영
                                <span class="data_ringname">"윤방관"</span>
                                <span class="data_age">AGE 32</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/" target="_blank">@</a>
                            </div>
                            <div class="data_team">
                                팀명 : 쎈짐
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    170cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    4 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    3 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    1 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            No Data
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_hoyung.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'bantamweight_10') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀금</span>
                            </div>
                            <div class="data_name">
                                이강남
                                <span class="data_ringname">"해적왕"</span>
                                <span class="data_age">AGE 35</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/short_hair_lee/" target="_blank">@short_hair_lee</a>
                            </div>
                            <div class="data_team">
                                팀명 : 지브라 칼슨 해적단
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    173cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    - <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 이강남 vs 이예준
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                        <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_pirateking_1.png" />
                        </div>
                    </div>
                <?php } else if ($page == 'bantamweight_11') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                이명주
                                <span class="data_ringname">"컴뱃산타"</span>
                                <span class="data_age">AGE 32</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/myeungju_/" target="_blank">@myeungju_</a>
                            </div>
                            <div class="data_team">
                                팀명 : Extreme 익스트림 컴뱃
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    170cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    2 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 이명주 vs 윤성욱
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                     <?php } else if ($page == 'bantamweight_12') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                하준혁
                                <span class="data_ringname">"돌멩이"</span>
                                <span class="data_age">AGE 23</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/hajunhyeok/" target="_blank">@hajunhyeok</a>
                            </div>
                            <div class="data_team">
                                팀명 : 지브라 칼슨 해적단
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    177cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    0 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 하준혁 vs 박태호
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                     <?php } else if ($page == 'bantamweight_13') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                박태호
                                <span class="data_ringname">"앤쵸비"</span>
                                <span class="data_age">AGE 28</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/8ouruniverse8/" target="_blank">@8ouruniverse8</a>
                            </div>
                            <div class="data_team">
                                팀명 : Extreme 익스트림 컴뱃
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    176cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    5 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    5 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                             박태호 vs <span class="match_result win">Win</span> 하준혁
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_8ouruniverse8.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'bantamweight_14') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                박성준
                                <span class="data_ringname">"언더독"</span>
                                <span class="data_age">AGE 30</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/parkseongjun_/" target="_blank">@parkseongjun_</a>
                            </div>
                            <div class="data_team">
                                팀명 : 알타핏 싸비 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    172cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    4 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    2 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    1 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           <span class="match_result win">Win</span> 박성준 vs 윤성욱
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_parkseongjun_full.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'bantamweight_15') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                윤성욱
                                <span class="data_ringname">"버드와이저"</span>
                                <span class="data_age">AGE 24</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/seongug6568/" target="_blank">@seongug6568</a>
                            </div>
                            <div class="data_team">
                                팀명 : 펭카 큐브 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    175cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    2 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    2 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 박성준 vs 윤성욱
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'bantamweight_16') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                이성원
                                <span class="data_ringname">"매드카우"</span>
                                <span class="data_age">AGE 24</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/madcow_lee/" target="_blank">@madcow_lee</a>
                            </div>
                            <div class="data_team">
                                팀명 : 마이티짐
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    172cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    0 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           이성원 vs <span class="match_result win">Win</span> 임정민
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_madcow.png" />
                        </div>
                    </div>

                
                <?php } else if ($page == 'bantamweight_17') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                선석호
                                <span class="data_ringname">"김첨지"</span>
                                <span class="data_age">AGE 31</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/seokho921215/" target="_blank">@seokho921215</a>
                            </div>
                            <div class="data_team">
                                팀명 : 지브라 칼슨 해적단
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    170cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    3 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    2 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 박상현 vs 선석호
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'bantamweight_18') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                최서준
                                <span class="data_ringname">"무사시"</span>
                                <span class="data_age">AGE 26</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/choi_seojuun/" target="_blank">@choi_seojuun</a>
                            </div>
                            <div class="data_team">
                                팀명 : BF 팀 솔리드
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    175cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 최서준 vs 이건준
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'bantamweight_19') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                이휘재
                                <span class="data_ringname">"호넷"</span>
                                <span class="data_age">AGE 25</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/clear__hj/" target="_blank">@clear__hj</a>
                            </div>
                            <div class="data_team">
                                팀명 : 알타핏 싸비 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    174cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    2 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           이휘재 vs <span class="match_result win">Win</span> 황성주
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'bantamweight_21') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                서건우
                                <span class="data_ringname">"더 예거"</span>
                                <span class="data_age">AGE 19</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/oownugoes/" target="_blank">@oownugoes</a>
                            </div>
                            <div class="data_team">
                                팀명 : 지브라 칼슨 해적단
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    173cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            서건우 vs <span class="match_result win">Win</span> 박성준
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>
                <?php } else if ($page == 'bantamweight_20') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                이건준
                                <span class="data_ringname">"포이즌"</span>
                                <span class="data_age">AGE 22</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/lgj2392/" target="_blank">@lgj2392</a>
                            </div>
                            <div class="data_team">
                                팀명 : 아리에 블랙 MMA 스토리
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    182cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            이건준 vs <span class="match_result win">Win</span> 최서준
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>



                <?php } else if ($page == 'bantamweight_22') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                신창현
                                <span class="data_ringname">"티그로"</span>
                                <span class="data_age">AGE 20</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/the_tigro_22/" target="_blank">@the_tigro_22</a>
                            </div>
                            <div class="data_team">
                                팀명 : BF 팀 솔리드
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    174cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            신창현 vs <span class="match_result win">Win</span> 이창호
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>



                <?php } else if ($page == 'bantamweight_23') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                류창현
                                <span class="data_ringname">"머신건"</span>
                                <span class="data_age">AGE 20</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/canghyeon_r/" target="_blank">@canghyeon_r</a>
                            </div>
                            <div class="data_team">
                                팀명 : 펭카 큐브 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    167cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            No Data
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'bantamweight_24') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                위재형
                                <span class="data_ringname">"위스키"</span>
                                <span class="data_age">AGE 24</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/jaehyung_69/" target="_blank">@jaehyung_69</a>
                            </div>
                            <div class="data_team">
                                팀명 : BF 팀 솔리드
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    168cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 박성준 vs 위재형
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'bantamweight_25') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                김시산
                                <span class="data_ringname">"레이저"</span>
                                <span class="data_age">AGE 16</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/sisanasis/" target="_blank">@sisanasis</a>
                            </div>
                            <div class="data_team">
                                팀명 : 펭카 큐브 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    173cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 이성재 vs 김시산
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'bantamweight_26') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                김민우
                                <span class="data_ringname">"아이실드"</span>
                                <span class="data_age">AGE 23</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/ming_gu108/" target="_blank">@ming_gu108</a>
                            </div>
                            <div class="data_team">
                                팀명 : BF 팀 솔리드
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    163cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    0 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            차범준 vs <span class="match_result win">Win</span> 김민우
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'bantamweight_27') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                차범준
                                <span class="data_ringname">"빌런차"</span>
                                <span class="data_age">AGE 26</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/bxmz_un/" target="_blank">@bxmz_un</a>
                            </div>
                            <div class="data_team">
                                팀명 : 지브라 칼슨 해적단
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    167cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    6 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    1 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            차범준 vs <span class="match_result win">Win</span> 김민우
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'bantamweight_28') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                이예준
                                <span class="data_ringname">"몬스터 블랙"</span>
                                <span class="data_age">AGE 17</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/yejun.1016/" target="_blank">@yejun.1016</a>
                            </div>
                            <div class="data_team">
                                팀명 : BF 팀 솔리드
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    171cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 이강남 vs 이예준
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'bantamweight_thediamond') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                박재석
                                <span class="data_ringname">"더 다이아몬드"</span>
                                <span class="data_age">AGE 20</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/pjs03_1001/" target="_blank">@pjs03_1001</a>
                            </div>
                            <div class="data_team">
                                팀명 : Extreme 익스트림 컴뱃
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    173cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 황성주 vs 박재석
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'bantamweight_parksanghyun_mma') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                박상현
                                <span class="data_ringname">"빡상"</span>
                                <span class="data_age">AGE 27</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/parksanghyun_mma/" target="_blank">@parksanghyun_mma</a>
                            </div>
                            <div class="data_team">
                                팀명 : 아리에 블랙 MMA 스토리
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    177cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    6 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    5 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    1 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 박상현 vs 선석호
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_parksanghyun_full.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'bantamweight_kim_suhyunn') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                김수현
                                <span class="data_ringname">"아이언"</span>
                                <span class="data_age">AGE 28</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/kim_suhyunn/" target="_blank">@kim_suhyunn</a>
                            </div>
                            <div class="data_team">
                                팀명 : Extreme 익스트림 컴뱃
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    168cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    2 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    0 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 김수현 vs 안태영
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'bantamweight_taeyeongan') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급</span>
                            </div>
                            <div class="data_name">
                                안태영
                                <span class="data_ringname">"오리진"</span>
                                <span class="data_age">AGE 36</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/taeyeongan/" target="_blank">@taeyeongan</a>
                            </div>
                            <div class="data_team">
                                팀명 : 아리에 블랙 MMA 스토리
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    171cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    2 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 김수현 vs 안태영
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'featherweight_2') { ?>

                   <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                이진세
                                <span class="data_ringname">"빡세"</span>
                                <span class="data_age">AGE 29</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/jinselee_/" target="_blank">@jinselee_</a>
                            </div>
                            <div class="data_team">
                                팀명 : 스웰즈 코리아
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    175cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    5 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    4 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           이진세 vs <span class="match_result win">Win</span> 유수영
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_bbaksse.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'featherweight_1') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                김민우
                                <span class="data_ringname">"코리안 모아이"</span>
                                <span class="data_age">AGE 30</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/korean_moai" target="_blank">@korean_moai</a>
                            </div>
                            <div class="data_team">
                                팀명 : 모아이짐 상계점
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    177
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    11 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    2 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 김민우 vs 나카무라 다이스케
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_koreamoai.png" />
                        </div>
                    </div>
                <?php } else if ($page == 'featherweight_3') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                신승민
                                <span class="data_ringname">"광남"</span>
                                <span class="data_age">AGE 30</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/gwangnam_fighter" target="_blank">@gwangnam_fighter</a>
                            </div>
                            <div class="data_team">
                                팀명 : 대구 쎈짐
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    174
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    12 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    4 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           <span class="match_result win">Win</span> 신승민 vs 박찬수
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_gwangnam.png" />
                        </div>
                    </div>
                
                <?php } else if ($page == 'featherweight_4') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                박찬수
                                <span class="data_ringname">"찬스"</span>
                                <span class="data_age">AGE 26</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/park_kr___/" target="_blank">@park_kr___</a>
                            </div>
                            <div class="data_team">
                                팀명 : 다이아 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    178cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    6 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    3 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 박찬수 vs 이성철
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_chance.png" />
                        </div>
                    </div>
                <?php } else if ($page == 'featherweight_5') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                홍종태
                                <span class="data_ringname">"찐홍이"</span>
                                <span class="data_age">AGE 37</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/jjin._.honge/" target="_blank">@jjin._.honge</a>
                            </div>
                            <div class="data_team">
                                팀명 : 아리에 블랙 MMA 스토리
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    171cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    3 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    4 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           홍종태 vs <span class="match_result win">Win</span> 신승민
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_jjinhonge.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'featherweight_7') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                임관우
                                <span class="data_ringname">"진격의거인"</span>
                                <span class="data_age">AGE 22</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/lim_gwanwoo/" target="_blank">@lim_gwanwoo</a>
                            </div>
                            <div class="data_team">
                                팀명 : Extreme 익스트림 컴뱃
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    188cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    3 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    0 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           <span class="match_result win">Win</span> 임관우 vs 최서준
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'featherweight_8') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                정용수
                                <span class="data_ringname">"히트맨"</span>
                                <span class="data_age">AGE 21</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/yong_ssuu/" target="_blank">@yong_ssuu</a>
                            </div>
                            <div class="data_team">
                                팀명 : 펭카 큐브 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    178cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    4 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    1 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 정용수 vs 차범준
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'featherweight_9') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                김의종
                                <span class="data_ringname">"유도가"</span>
                                <span class="data_age">AGE 31</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/ui_jong92/" target="_blank">@ui_jong92</a>
                            </div>
                            <div class="data_team">
                                팀명 : 알타핏 싸비 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    173cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    4 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    3 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    - <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 김의종 vs 이성재
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'featherweight_10') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                조규준
                                <span class="data_ringname">"한마 바키"</span>
                                <span class="data_age">AGE 17</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/wrestler_cho/" target="_blank">@wrestler_cho</a>
                            </div>
                            <div class="data_team">
                                팀명 : 지브라 칼슨 해적단
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    174cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    2 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    0 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    - <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 조규준 vs 최은호
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_wrestler_cho_full.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'featherweight_11') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                최찬형
                                <span class="data_ringname">"쇼타임"</span>
                                <span class="data_age">AGE 19</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/showtimechoi/" target="_blank">@showtimechoi</a>
                            </div>
                            <div class="data_team">
                                팀명 : Extreme 익스트림 컴뱃
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    176cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    - <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    - <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    - <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           -
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'featherweight_12') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                최재원
                                <span class="data_ringname">"동키콩"</span>
                                <span class="data_age">AGE 31</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/j_____won92/" target="_blank">@j_____won92</a>
                            </div>
                            <div class="data_team">
                                팀명 : Extreme 익스트림 컴뱃
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    165cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    - <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 최재원 vs  한상운
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'featherweight_13') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                허선행
                                <span class="data_ringname">"사이보그"</span>
                                <span class="data_age">AGE 30</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/heo_seon_haeng_/" target="_blank">@heo_seon_haeng_</a>
                            </div>
                            <div class="data_team">
                                팀명 : 지브라 칼슨 해적단
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    180cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    2 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    2 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    1 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           No Data
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                    <?php } else if ($page == 'featherweight_14') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>밴텀급/페더급</span>
                            </div>
                            <div class="data_name">
                                이성재
                                <span class="data_ringname">"포세이돈"</span>
                                <span class="data_age">AGE 31</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/sung_j_0207/" target="_blank">@sung_j_0207</a>
                            </div>
                            <div class="data_team">
                                팀명 : 아리에 블랙 MMA 스토리
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    175cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    3 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    2 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    - <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 이성재 vs 김시산
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'featherweight_15') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                이준용
                                <span class="data_ringname">"리신"</span>
                                <span class="data_age">AGE 30</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/troublekid_mma/" target="_blank">@troublekid_mma</a>
                            </div>
                            <div class="data_team">
                                팀명 : 스웰즈 코리아
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    178cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    4 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    0 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            No Data
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'featherweight_16') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                천성호
                                <span class="data_ringname">"독주먹"</span>
                                <span class="data_age">AGE 21</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/tjdgh_08_06/" target="_blank">@tjdgh_08_06</a>
                            </div>
                            <div class="data_team">
                                팀명 : 알타핏 싸비 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    176cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           <span class="match_result win">Win</span> 천성호 vs 박재성
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'featherweight_17') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                최인범
                                <span class="data_ringname">"최암바"</span>
                                <span class="data_age">AGE 19</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/in_beom18/" target="_blank">@in_beom18</a>
                            </div>
                            <div class="data_team">
                                팀명 : 아리에 블랙 MMA 스토리
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    181cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           <span class="match_result win">Win</span> 이민혁 vs 최인범
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'featherweight_18') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                최은호
                                <span class="data_ringname">"라온"</span>
                                <span class="data_age">AGE 30</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/c_eunho/" target="_blank">@c_eunho</a>
                            </div>
                            <div class="data_team">
                                팀명 : BF 팀 솔리드
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    179cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    7 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 조규준 vs 최은호
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'featherweight_19') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                차범준
                                <span class="data_ringname">"빌런차"</span>
                                <span class="data_age">AGE 26</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/bxmz_un/" target="_blank">@bxmz_un</a>
                            </div>
                            <div class="data_team">
                                팀명 : 지브라 칼슨 해적단
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    167cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    6 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    1 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            차범준 vs <span class="match_result win">Win</span> 정용수
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'featherweight_20') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                김준현
                                <span class="data_ringname">"OLK"</span>
                                <span class="data_age">AGE 33</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/o.l.kick/" target="_blank">@o.l.kick</a>
                            </div>
                            <div class="data_team">
                                팀명 : 알타핏 싸비 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    176cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            NO Data
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'featherweight_21') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                박재성
                                <span class="data_ringname">"포텐"</span>
                                <span class="data_age">AGE 29</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/parkjaesung94/" target="_blank">@parkjaesung94</a>
                            </div>
                            <div class="data_team">
                                팀명 : 지브라 칼슨 해적단
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    175cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    - <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            박재성 vs <span class="match_result win">Win</span> 천성호
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'featherweight_22') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                한상운
                                <span class="data_ringname">"울프"</span>
                                <span class="data_age">AGE 22</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/sangun_bjj/" target="_blank">@sangun_bjj</a>
                            </div>
                            <div class="data_team">
                                팀명 : 펭카 큐브 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    175cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    2 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    - <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 문진혁 vs 한상운
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>



                <?php } else if ($page == 'featherweight_23') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                최서준
                                <span class="data_ringname">"무사시"</span>
                                <span class="data_age">AGE 26</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/choi_seojuun/" target="_blank">@choi_seojuun</a>
                            </div>
                            <div class="data_team">
                                팀명 : BF 팀 솔리드
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    175cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    - <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           <span class="match_result win">Win</span> 최서준 vs 이건준
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                
                <?php } else if ($page == 'featherweight_24') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                오두석
                                <span class="data_ringname">"조선알도"</span>
                                <span class="data_age">AGE 40</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/oduseog48/" target="_blank">@oduseog48</a>
                            </div>
                            <div class="data_team">
                                팀명 : 알타핏 싸비 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    173cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    6 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    8 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           <span class="match_result win">Win</span> 방성혁 vs 오두석
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_oduseog_full.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'featherweight_25') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                김명현
                                <span class="data_ringname">"라이트닝"</span>
                                <span class="data_age">AGE 21</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/00_myung_hyun/" target="_blank">@00_myung_hyun</a>
                            </div>
                            <div class="data_team">
                                팀명 : BF 팀 솔리드
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    173cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    2 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 오두석 vs 김명현
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>
                <?php } else if ($page == 'featherweight_26') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                박상권
                                <span class="data_ringname">"류크"</span>
                                <span class="data_age">AGE 21</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/sang_gu_33/" target="_blank">@sang_gu_33</a>
                            </div>
                            <div class="data_team">
                                팀명 : 아리에 블랙 MMA 스토리
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    176cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 한상운 vs 박상권
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'featherweight_revenant') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                이민혁
                                <span class="data_ringname">"레버넌트"</span>
                                <span class="data_age">AGE 26</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/exct_minhyeokmma/" target="_blank">@exct_minhyeokmma</a>
                            </div>
                            <div class="data_team">
                                팀명 : Extreme 익스트림 컴뱃
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    174cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    8 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    5 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 이민혁 vs 최인범
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_minhyeok_full.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'featherweight_keukki') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                문진혁
                                <span class="data_ringname">"극기"</span>
                                <span class="data_age">AGE 29</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/ezermma/" target="_blank">@ezermma</a>
                            </div>
                            <div class="data_team">
                                팀명 : 알타핏 싸비 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    173cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    0 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    1 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 문진혁 vs 한상운
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'featherweight_chan_mma') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                손유찬
                                <span class="data_ringname">"천안짱"</span>
                                <span class="data_age">AGE 17</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/chan._.mma/" target="_blank">@chan._.mma</a>
                            </div>
                            <div class="data_team">
                                팀명 : 천안 크레이지광짐
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    174cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 손유찬 vs 최성혁
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_chan_full.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'featherweight_jeju_psychopitbulls') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                이성철
                                <span class="data_ringname">"겜블러"</span>
                                <span class="data_age">AGE 32</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/jeju_psychopitbulls/" target="_blank">@jeju_psychopitbulls</a>
                            </div>
                            <div class="data_team">
                                팀명 : 제주 싸이코핏불스
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    173cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    3 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 박찬수 vs 이성철
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'featherweight_seonghyeok_0227') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                최성혁
                                <span class="data_ringname">"키라"</span>
                                <span class="data_age">AGE 25</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/seonghyeok_0227/" target="_blank">@seonghyeok_0227</a>
                            </div>
                            <div class="data_team">
                                팀명 : 팀한 클럽
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    173cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    6 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    6 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 손유찬 vs 최성혁
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_kira.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'featherweight_shyeok_01') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                방성혁
                                <span class="data_ringname">"시라소니"</span>
                                <span class="data_age">AGE 21</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/s.hyeok_01/" target="_blank">@s.hyeok_01</a>
                            </div>
                            <div class="data_team">
                                팀명 : Extreme 익스트림 컴뱃
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    180cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    2 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    0 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 방성혁 vs 오두석
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'featherweight_min__zzin') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                이민재
                                <span class="data_ringname">"이글아이"</span>
                                <span class="data_age">AGE 29</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/min__zzin/" target="_blank">@min__zzin</a>
                            </div>
                            <div class="data_team">
                                팀명 : 트라이스톤
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    177cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <!-- <span class="match_result win">Win</span> 문진혁 vs 한상운 -->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'featherweight_hareem97') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>페더급</span>
                            </div>
                            <div class="data_name">
                                김하림
                                <span class="data_ringname">"헬보이"</span>
                                <span class="data_age">AGE 26</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/_hareem.97/" target="_blank">@_hareem.97</a>
                            </div>
                            <div class="data_team">
                                팀명 : 군포 본주짓수
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    175cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <!-- <span class="match_result win">Win</span> 문진혁 vs 한상운 -->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'lightweight_0') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                이송하
                                <span class="data_ringname">"피에로"</span>
                                <span class="data_age">AGE 29</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/dlthdgkdl/" target="_blank">@dlthdgkdl</a>
                            </div>
                            <div class="data_team">
                                팀명 : 알타핏 싸비 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    186cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    3 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    2 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           <span class="match_result win">Win</span> 이송하 vs 박종헌
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_piero.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'lightweight_1') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                박종헌
                                <span class="data_ringname">"헌터"</span>
                                <span class="data_age">AGE 31</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/jonghunter_park/" target="_blank">@jonghunter_park</a>
                            </div>
                            <div class="data_team">
                                팀명 : 스웰즈 코리아
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    184cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    6 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    3 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 이송하 vs 박종헌
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_hunter.png" />
                        </div>
                    </div>

                
                <?php } else if ($page == 'lightweight_2') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                김정균
                                <span class="data_ringname">"곰주먹"</span>
                                <span class="data_age">AGE 29</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/gomjumuk/" target="_blank">@gomjumuk</a>
                            </div>
                            <div class="data_team">
                                팀명 : 청주 팀매드
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    178cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    3 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    3 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 김정균 vs 윤다원
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_gomjumuck.png" />
                        </div>
                    </div>
                
                <?php } else if ($page == 'lightweight_3') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                윤다원
                                <span class="data_ringname">"맨티스"</span>
                                <span class="data_age">AGE 25</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/mantis_yoon/" target="_blank">@mantis_yoon</a>
                            </div>
                            <div class="data_team">
                                팀명 : 아리에 블랙 MMA 스토리
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    178cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    5 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    6 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    1 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           윤다원 vs <span class="match_result win">Win</span> 김정균
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_mentis.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'lightweight_4') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                이영훈
                                <span class="data_ringname">"영타이거"</span>
                                <span class="data_age">AGE 22</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/blues1392/" target="_blank">@blues1392</a>
                            </div>
                            <div class="data_team">
                                팀명 : 팀파시MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    175cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    7 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    4 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    1 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           이영훈 vs <span class="match_result win">Win</span> 박종헌
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                        <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_youngtiger_1.png" />
                        </div>
                    </div>



                <?php } else if ($page == 'lightweight_5') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                임병희
                                <span class="data_ringname">"비밀병희"</span>
                                <span class="data_age">AGE 27</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/im.byeonghyi/" target="_blank">@im.byeonghyi</a>
                            </div>
                            <div class="data_team">
                                팀명 : Extreme 익스트림 컴뱃
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    177cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    5 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    5 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            임병희 vs <span class="match_result win">Win</span> 김정균
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_secretbh.png" />
                        </div>
                    </div>



                <?php } else if ($page == 'lightweight_6') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                장정혁
                                <span class="data_ringname">"탈북파이터"</span>
                                <span class="data_age">AGE 27</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/jung_hyuk_jang/" target="_blank">@jung_hyuk_jang</a>
                            </div>
                            <div class="data_team">
                                팀명 : 구미 팀헌터
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    174cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    3 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    2 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    2 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 김정균 vs 장정혁
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_talbuk.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'lightweight_8') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                정용완
                                <span class="data_ringname">"그루트"</span>
                                <span class="data_age">AGE 26</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/178.9_275/" target="_blank">@178.9_275</a>
                            </div>
                            <div class="data_team">
                                팀명 : 펭카 큐브 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    178cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    2 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    2 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           <span class="match_result win">Win</span> 정용완 vs 이민혁
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'lightweight_10') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                이청수
                                <span class="data_ringname">"노잼"</span>
                                <span class="data_age">AGE 22</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/chung_strong01/" target="_blank">@chung_strong01</a>
                            </div>
                            <div class="data_team">
                                팀명 : 팀파시MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    181cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    2 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 이청수 vs 설영호
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_nojam.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'lightweight_11') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                조준용
                                <span class="data_ringname">"미스터사탄"</span>
                                <span class="data_age">AGE 29</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/fighter_mr.satan/" target="_blank">@fighter_mr.satan</a>
                            </div>
                            <div class="data_team">
                                팀명 : 지브라 칼슨 해적단
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    177cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    5 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    9 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 조준용 vs 신준호
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_satan_full.png" />
                        </div>
                    </div>



                <?php } else if ($page == 'lightweight_12') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                이강산
                                <span class="data_ringname">"빨강"</span>
                                <span class="data_age">AGE ???</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/nagativecreep/" target="_blank">@nagativecreep</a>
                            </div>
                            <div class="data_team">
                                팀명 : 알타핏 싸비 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    179cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    2 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    3 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 황도윤 vs 이강산
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'lightweight_13') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                박한빈
                                <span class="data_ringname">"스몰고릴라"</span>
                                <span class="data_age">AGE 29</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/hanbin.park/" target="_blank">@hanbin.park</a>
                            </div>
                            <div class="data_team">
                                팀명 : 아토무브짐
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    170cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    6 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    3 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            No Data
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'lightweight_14') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                김근희
                                <span class="data_ringname">"흑사자"</span>
                                <span class="data_age">AGE 23</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/king_keunhee/" target="_blank">@king_keunhee</a>
                            </div>
                            <div class="data_team">
                                팀명 : 팀 루키
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    175cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    0 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            No Data
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_keunhee.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'lightweight_15') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                유다솔
                                <span class="data_ringname">"중학생"</span>
                                <span class="data_age">AGE 16</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/asswhoopincream/" target="_blank">@asswhoopincream</a>
                            </div>
                            <div class="data_team">
                                팀명 : 아리에 블랙 MMA 스토리
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    188cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    0 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 유다솔 vs 천성호
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'lightweight_16') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                장근영
                                <span class="data_ringname">"슬로스"</span>
                                <span class="data_age">AGE 29</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/gn_young/" target="_blank">@gn_young</a>
                            </div>
                            <div class="data_team">
                                팀명 : 아리에 블랙 MMA 스토리
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    181cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    3 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    2 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                        <span class="match_result win">Win</span> 장근영 vs 임재윤
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_gn_young.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'lightweight_17') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                신준호
                                <span class="data_ringname">"웨어울프"</span>
                                <span class="data_age">AGE 27</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/gn_young/" target="_blank">@gn_young</a>
                            </div>
                            <div class="data_team">
                                팀명 : Extreme 익스트림 컴뱃
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    184cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           신준호 vs <span class="match_result win">Win</span> 조준용
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'lightweight_19') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                문병일
                                <span class="data_ringname">"SCP-096"</span>
                                <span class="data_age">AGE 31</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/scp096_b.1/" target="_blank">@scp096_b.1</a>
                            </div>
                            <div class="data_team">
                                팀명 : 청주 팀매드
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    181cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    - <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    - <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    - <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            No Data
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                

                <?php } else if ($page == 'lightweight_20') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                박어진
                                <span class="data_ringname">"히드라"</span>
                                <span class="data_age">AGE 22</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/uh_ji_n/" target="_blank">@uh_ji_n</a>
                            </div>
                            <div class="data_team">
                                팀명 : 스웰즈 코리아
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    182cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    2 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    1 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            No Data
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'lightweight_21') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                김진수
                                <span class="data_ringname">"시크릿 웨폰"</span>
                                <span class="data_age">AGE 21</span>
                            </div>
                            <div class="sns_link">
                                <!--<a href="#" target="_blank"></a>-->
                            </div>
                            <div class="data_team">
                                팀명 : Extreme 익스트림 컴뱃
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    168cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    - <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    - <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    - <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            세미프로 2전 2승 무패
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                
                <?php } else if ($page == 'lightweight_22') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                최은호
                                <span class="data_ringname">"라온"</span>
                                <span class="data_age">AGE 30</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/c_eunho/" target="_blank">@c_eunho</a>
                            </div>
                            <div class="data_team">
                                팀명 : BF 팀 솔리드
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    179cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    5 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    1 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            최은호 vs <span class="match_result win">Win</span> 최인범
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'lightweight_23') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                천성호
                                <span class="data_ringname">"독주먹"</span>
                                <span class="data_age">AGE 21</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/tjdgh_08_06/" target="_blank">@tjdgh_08_06</a>
                            </div>
                            <div class="data_team">
                                팀명 : 알타핏 싸비 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    176cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    = <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           천성호 vs <span class="match_result win">Win</span> 유다솔
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'lightweight_24') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                이시훈
                                <span class="data_ringname">"격노사"</span>
                                <span class="data_age">AGE 31</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/92sihoon/" target="_blank">@92sihoon</a>
                            </div>
                            <div class="data_team">
                                팀명 : 지브라 칼슨 해적단
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    171cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    = <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            이시훈 vs  <span class="match_result win">Win</span> 이강산
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'lightweight_25') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                김종헌
                                <span class="data_ringname">"허니허니"</span>
                                <span class="data_age">AGE 30</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/hoen_e_honey/" target="_blank">@hoen_e_honey</a>
                            </div>
                            <div class="data_team">
                                팀명 : 아리에 블랙 MMA 스토리
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    178cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    5 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    - <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            김종헌 vs  <span class="match_result win">Win</span> 장근영
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'lightweight_26') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                이환성
                                <span class="data_ringname">"위버맨쉬"</span>
                                <span class="data_age">AGE 30</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/hs._.0224/" target="_blank">@hs._.0224</a>
                            </div>
                            <div class="data_team">
                                팀명 : BF 팀 솔리드
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    176cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    2 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 이환성 vs 이근영
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'lightweight_27') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                이근영
                                <span class="data_ringname">"타노스"</span>
                                <span class="data_age">AGE 23</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/k_doll__6/" target="_blank">@k_doll__6</a>
                            </div>
                            <div class="data_team">
                                팀명 : 알타핏 싸비 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    179cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 이환성 vs 이근영
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>
                <?php } else if ($page == 'lightweight_28') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                정영제
                                <span class="data_ringname">"워리어"</span>
                                <span class="data_age">AGE 26</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/youngje_jung/" target="_blank">@youngje_jung</a>
                            </div>
                            <div class="data_team">
                                팀명 : 아리에 블랙 MMA 스토리
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    180cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    4 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 정영제 vs 이준환
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_youngje.png" />
                        </div>
                    </div>
                <?php } else if ($page == 'lightweight_29') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                황도윤
                                <span class="data_ringname">"사쿠라"</span>
                                <span class="data_age">AGE 27</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/sakura99.9/" target="_blank">@sakura99.9</a>
                            </div>
                            <div class="data_team">
                                팀명 : 펭카 큐브 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    180cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    4 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 황도윤 vs 이강산
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'lightweight_30') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                김성윤
                                <span class="data_ringname">"킹스터"</span>
                                <span class="data_age">AGE 24</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/s.y__king/" target="_blank">@s.y__king</a>
                            </div>
                            <div class="data_team">
                                팀명 : 지브라 칼슨 해적단
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    181cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 김성윤 vs 황준호
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'lightweight_31') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                황준호
                                <span class="data_ringname">"피니셔"</span>
                                <span class="data_age">AGE 22</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/flying._.punch/" target="_blank">@flying._.punch</a>
                            </div>
                            <div class="data_team">
                                팀명 : BF 팀 솔리드
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    183cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 김성윤 vs 황준호
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'lightweight_anklebreaker') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                이성종
                                <span class="data_ringname">"앵클브레이커"</span>
                                <span class="data_age">AGE 38</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/lsj8922/" target="_blank">@lsj8922</a>
                            </div>
                            <div class="data_team">
                                팀명 : 아리에 블랙 MMA 스토리
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    171cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    4 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    6 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 장근영 vs 이성종
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'lightweight_zuu_nan') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                이준환
                                <span class="data_ringname">"장산"</span>
                                <span class="data_age">AGE 24</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/zuu_nan/" target="_blank">@zuu_nan</a>
                            </div>
                            <div class="data_team">
                                팀명 : 지브라 칼슨 해적단
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    178cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 정영제 vs 이준환
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'lightweight_jeong_jeil') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                정제일
                                <span class="data_ringname">"글로리"</span>
                                <span class="data_age">AGE 35</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/jeong.jeil/" target="_blank">@jeong.jeil</a>
                            </div>
                            <div class="data_team">
                                팀명 : 알타핏 싸비 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    182cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    7 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    5 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    1 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 정제일 vs 성현종
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'lightweight_jaeffury') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                임재윤
                                <span class="data_ringname">"릴슈타"</span>
                                <span class="data_age">AGE 27</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/jaeffury/" target="_blank">@jaeffury</a>
                            </div>
                            <div class="data_team">
                                팀명 : 서면 팀매드
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    178cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 장근영 vs 임재윤
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_jaeffury.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'lightweight_hyunjong_55') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>라이트급</span>
                            </div>
                            <div class="data_name">
                                성현종
                                <span class="data_ringname">"심슨"</span>
                                <span class="data_age">AGE 22</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/hyunjong_55/" target="_blank">@hyunjong_55</a>
                            </div>
                            <div class="data_team">
                                팀명 : Extreme 익스트림 컴뱃
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    174cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    2 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 정제일 vs 성현종
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'heavyweight_0') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>중량급</span>
                            </div>
                            <div class="data_name">
                                양해준
                                <span class="data_ringname">"The Big Guy"</span>
                                <span class="data_age">AGE 35</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/yang_hae_jun/" target="_blank">@yang_hae_jun</a>
                            </div>
                            <div class="data_team">
                                팀명 : Extreme 익스트림 컴뱃
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    181cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    14 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    6 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           <span class="match_result win">Win</span> 양해준 vs 최원준
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_yang_hae_jun_full.png" />
                        </div>
                    </div>



                <?php } else if ($page == 'heavyweight_2') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>중량급</span>
                            </div>
                            <div class="data_name">
                                김명환
                                <span class="data_ringname">"맘모스"</span>
                                <span class="data_age">AGE 26</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/audghkstktma/" target="_blank">@audghkstktma</a>
                            </div>
                            <div class="data_team">
                                팀명 : Extreme 익스트림 컴뱃
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    183cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    6 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            No Data
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'heavyweight_1') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>미들급/중량급</span>
                            </div>
                            <div class="data_name">
                                최원준
                                <span class="data_ringname">"화이트 베어"</span>
                                <span class="data_age">AGE 34</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/c.w.j_mma/" target="_blank">@c.w.j_mma</a>
                            </div>
                            <div class="data_team">
                                팀명 : 아리에 블랙 MMA 스토리
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    180cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    7 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    5 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           <span class="match_result win">Win</span> 최원준 vs 최준서
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_j_mma_middle.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'heavyweight_3') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>미들급/중량급</span>
                            </div>
                            <div class="data_name">
                                김연균
                                <span class="data_ringname">"갓균"</span>
                                <span class="data_age">AGE 26</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/k_gyun97/" target="_blank">@k_gyun97</a>
                            </div>
                            <div class="data_team">
                                팀명 : 펭카 큐브 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    179cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    2 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    2 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 최준서 vs 김연균
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_godgyun.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'heavyweight_4') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>미들급/중량급</span>
                            </div>
                            <div class="data_name">
                                최준서
                                <span class="data_ringname">"야차"</span>
                                <span class="data_age">AGE 22</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/cjs_nmm" target="_blank">@cjs_nmm</a>
                            </div>
                            <div class="data_team">
                                팀명 : BF 팀 솔리드
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    182
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    6 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    3 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           <span class="match_result win">Win</span> 최원준 vs 최준서
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_yacha.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'heavyweight_5') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>중량급</span>
                            </div>
                            <div class="data_name">
                                아즈자르갈
                                <span class="data_ringname">"AZZA"</span>
                                <span class="data_age">AGE 33</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/tserendashazjargal" target="_blank">@tserendashazjargal</a>
                            </div>
                            <div class="data_team">
                                팀명 : Extreme 익스트림 컴뱃
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    180
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    6 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    3 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 아즈자르갈 vs 이동현
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'heavyweight_6') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>중량급</span>
                            </div>
                            <div class="data_name">
                                전영준
                                <span class="data_ringname">"돌주먹"</span>
                                <span class="data_age">AGE 33</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/www90jj__/" target="_blank">@www90jj__</a>
                            </div>
                            <div class="data_team">
                                팀명 : 지브라 칼슨 해적단
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    182cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    6 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    2 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 전영준 vs 김준수
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>



                <?php } else if ($page == 'heavyweight_7') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>중량급</span>
                            </div>
                            <div class="data_name">
                                박건환
                                <span class="data_ringname">"터미네이터"</span>
                                <span class="data_age">AGE 34</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/kkonan_park/" target="_blank">@kkonan_park</a>
                            </div>
                            <div class="data_team">
                                팀명 : Extreme 익스트림 컴뱃
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    183cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    5 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    2 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            No Data
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'heavyweight_8') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>중량급</span>
                            </div>
                            <div class="data_name">
                                최재현
                                <span class="data_ringname">"캡틴 하남"</span>
                                <span class="data_age">AGE 38</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/choijaehyun87/" target="_blank">@choijaehyun87</a>
                            </div>
                            <div class="data_team">
                                팀명 : 펭카 큐브 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    180cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    4 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    4 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 최재현 vs 이현성
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'heavyweight_9') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>중량급</span>
                            </div>
                            <div class="data_name">
                                설영호
                                <span class="data_ringname">"낮도깨비"</span>
                                <span class="data_age">AGE 29</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/young__ho/" target="_blank">@young__ho</a>
                            </div>
                            <div class="data_team">
                                팀명 : 이천 연합
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    181cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            설영호 vs <span class="match_result win">Win</span> 이청수
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                
                <?php } else if ($page == 'heavyweight_10') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>중량급</span>
                            </div>
                            <div class="data_name">
                                임진욱
                                <span class="data_ringname">"베놈"</span>
                                <span class="data_age">AGE 23</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/limjnwook/" target="_blank">@limjnwook</a>
                            </div>
                            <div class="data_team">
                                팀명 : 아리에 블랙 MMA 스토리
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    184cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    0 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 임진욱 vs 김현민
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_limjnwook_full.png" />
                        </div>
                    </div>

                
                <?php } else if ($page == 'heavyweight_11') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>중량급</span>
                            </div>
                            <div class="data_name">
                                조경민
                                <span class="data_ringname">"고릴라"</span>
                                <span class="data_age">AGE 27</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/jo_kyungmin/" target="_blank">@jo_kyungmin</a>
                            </div>
                            <div class="data_team">
                                팀명 : Extreme 익스트림 컴뱃
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    184cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    3 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    5 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 조경민 vs 신정민
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'heavyweight_12') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>중량급</span>
                            </div>
                            <div class="data_name">
                                남지훈
                                <span class="data_ringname">"더 퍼지"</span>
                                <span class="data_age">AGE 26</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/the_purge_day_26/" target="_blank">@the_purge_day_26</a>
                            </div>
                            <div class="data_team">
                                팀명 : 알타핏 싸비 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    184cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span>  박찬솔 vs 남지훈
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'heavyweight_13') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>중량급</span>
                            </div>
                            <div class="data_name">
                                이현성
                                <span class="data_ringname">"원펀맨"</span>
                                <span class="data_age">AGE 24</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/lee_hyeon_seong_onep/" target="_blank">@lee_hyeon_seong_onep</a>
                            </div>
                            <div class="data_team">
                                팀명 : Extreme 익스트림 컴뱃
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    183cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           이현성 vs <span class="match_result win">Win</span> 최재현
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                

                <?php } else if ($page == 'heavyweight_14') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>중량급</span>
                            </div>
                            <div class="data_name">
                                김현민
                                <span class="data_ringname">"투사"</span>
                                <span class="data_age">AGE 36</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/hyeonminkim_/" target="_blank">@hyeonminkim_</a>
                            </div>
                            <div class="data_team">
                                팀명 : 알타핏 싸비 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    190cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    3 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 김현민 vs 정태진
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_hyeonminkim_full.png" />
                        </div>
                    </div>

                

                
                <?php } else if ($page == 'heavyweight_15') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>중량급</span>
                            </div>
                            <div class="data_name">
                                박용정
                                <span class="data_ringname">"Daddy P"</span>
                                <span class="data_age">AGE 28</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/sambalkimchi/" target="_blank">@sambalkimchi</a>
                            </div>
                            <div class="data_team">
                                팀명 : BF 팀 솔리드
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    173cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    - <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    - <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    - <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            세미프로 1전 1승 무패
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'heavyweight_16') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>중량급</span>
                            </div>
                            <div class="data_name">
                                전현우
                                <span class="data_ringname">"더 마스터"</span>
                                <span class="data_age">AGE 26</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/normatterwhatt/" target="_blank">@normatterwhatt</a>
                            </div>
                            <div class="data_team">
                                팀명 : 지브라 칼슨 해적단
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    180cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    - <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                           전현우 vs <span class="match_result win">Win</span> 김연균
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'heavyweight_17') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>중량급</span>
                            </div>
                            <div class="data_name">
                                신정민
                                <span class="data_ringname">"마린복서"</span>
                                <span class="data_age">AGE 21</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/z_z12i/" target="_blank">@z_z12i</a>
                            </div>
                            <div class="data_team">
                                팀명 : BF 팀 솔리드
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    173cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    - <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            신정민 vs <span class="match_result win">Win</span> 조경민
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'heavyweight_18') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>중량급</span>
                            </div>
                            <div class="data_name">
                                김준수
                                <span class="data_ringname">"킹덤 준수"</span>
                                <span class="data_age">AGE 23</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/junsss._.sssu/" target="_blank">@junsss._.sssu</a>
                            </div>
                            <div class="data_team">
                                팀명 : 알타핏 싸비 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    179cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    1 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    - <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            김준수 vs <span class="match_result win">Win</span> 전영준
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'heavyweight_19') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>중량급</span>
                            </div>
                            <div class="data_name">
                                이재규
                                <span class="data_ringname">"5분의 힘"</span>
                                <span class="data_age">AGE 20</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/he__is__jae_2/" target="_blank">@ghe__is__jae_2</a>
                            </div>
                            <div class="data_team">
                                팀명 : 스웰즈 코리아
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    181cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    - <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    - <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    - <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            세미프로 1전 0승 1패
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'heavyweight_20') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>중량급</span>
                            </div>
                            <div class="data_name">
                                박명신
                                <span class="data_ringname">"코불소"</span>
                                <span class="data_age">AGE 33</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/myungsssin/" target="_blank">@myungsssin</a>
                            </div>
                            <div class="data_team">
                                팀명 : 아리에 블랙 MMA 스토리
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    171cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    - <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            박명신 vs <span class="match_result win">Win</span> 최준서
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>


                <?php } else if ($page == 'heavyweight_21') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>중량급</span>
                            </div>
                            <div class="data_name">
                                박찬솔
                                <span class="data_ringname">"블랙리스트"</span>
                                <span class="data_age">AGE 33</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/pppcs7/" target="_blank">@pppcs7</a>
                            </div>
                            <div class="data_team">
                                팀명 : BF 팀 솔리드
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    180cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    4 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    0 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span>  박찬솔 vs 남지훈
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>
                <?php } else if ($page == 'heavyweight_22') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>중량급</span>
                            </div>
                            <div class="data_name">
                                윤재웅
                                <span class="data_ringname">"잇뽕"</span>
                                <span class="data_age">AGE 32</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/qp_yjw/" target="_blank">@qp_yjw</a>
                            </div>
                            <div class="data_team">
                                팀명 : 아리에 블랙 MMA 스토리
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    180cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    4 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    3 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 윤재웅 vs 정태진
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'heavyweight_23') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>중량급</span>
                            </div>
                            <div class="data_name">
                                정태진
                                <span class="data_ringname">"블루마린"</span>
                                <span class="data_age">AGE 26</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/taejin___n/" target="_blank">@taejin___n</a>
                            </div>
                            <div class="data_team">
                                팀명 : 펭카 큐브 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    180cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    2 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 김현민 vs 정태진
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'heavyweight_24') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>중량급</span>
                            </div>
                            <div class="data_name">
                                전호철
                                <span class="data_ringname">"팩맨"</span>
                                <span class="data_age">AGE 20</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/pac__man_/" target="_blank">@pac__man_</a>
                            </div>
                            <div class="data_team">
                                팀명 : 지브라 칼슨 해적단
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    185cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    3 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 전호철 vs 김승욱
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'heavyweight_25') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>중량급</span>
                            </div>
                            <div class="data_name">
                                김승욱
                                <span class="data_ringname">"마인부우"</span>
                                <span class="data_age">AGE 26</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/majinbuu_10p/" target="_blank">@majinbuu_10p</a>
                            </div>
                            <div class="data_team">
                                팀명 : BF 팀 솔리드
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    172cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 전호철 vs 김승욱
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'heavyweight_wolverine') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>중량급</span>
                            </div>
                            <div class="data_name">
                                한주안
                                <span class="data_ringname">"울버린"</span>
                                <span class="data_age">AGE 27</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/h_nnnnn.2/" target="_blank">@h_nnnnn.2</a>
                            </div>
                            <div class="data_team">
                                팀명 : 아리에 블랙 MMA 스토리
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    174cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 아즈자르갈 vs 한주안
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'heavyweight_leedonghyun1') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>중량급</span>
                            </div>
                            <div class="data_name">
                                이동현
                                <span class="data_ringname">"부천대장"</span>
                                <span class="data_age">AGE 30</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/leedonghyun1/" target="_blank">@leedonghyun1</a>
                            </div>
                            <div class="data_team">
                                팀명 : 알타핏 싸비 MMA
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    176cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    0 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            <span class="match_result win">Win</span> 아즈자르갈 vs 이동현
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else if ($page == 'women_1') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>여성부</span>
                            </div>
                            <div class="data_name">
                                홍예린
                                <span class="data_ringname">"고스트"</span>
                                <span class="data_age">AGE 21</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/hong_yerin02/" target="_blank">@hong_yerin02</a>
                            </div>
                            <div class="data_team">
                                팀명 : 의정부 DK 짐
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    156cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    4 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    3 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    - <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            홍예린 vs <span class="match_result win">Win</span> 오시마 사오리
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_ghost.png" />
                        </div>
                    </div>



                <?php } else if ($page == 'women_2') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>여성부</span>
                            </div>
                            <div class="data_name">
                                전수민
                                <span class="data_ringname">"짱구"</span>
                                <span class="data_age">AGE 16</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/j.mma07/" target="_blank">@j.mma07</a>
                            </div>
                            <div class="data_team">
                                팀명 : 팀 스트롱 울프
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    175cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    - <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    - <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    - <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            아마추어 4승 0패
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>



                <?php } else if ($page == 'women_3') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>여성부</span>
                            </div>
                            <div class="data_name">
                                김남희
                                <span class="data_ringname">"광녀"</span>
                                <span class="data_age">AGE 24</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/namheekim_mma/" target="_blank">@namheekim_mma</a>
                            </div>
                            <div class="data_team">
                                팀명 : 쎈짐
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    163cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    0 <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    1 <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    1 <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            No Data
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>



                <?php } else if ($page == 'women_4') { ?>

                    <div class="fighter_info">
                        <div class="fighter_data">
                            <div class="data_tags">
                                <span>여성부</span>
                            </div>
                            <div class="data_name">
                                황다비
                                <span class="data_ringname">"팬텀"</span>
                                <span class="data_age">AGE 17</span>
                            </div>
                            <div class="sns_link">
                                <a href="https://www.instagram.com/be._.0610/" target="_blank">@be._.0610</a>
                            </div>
                            <div class="data_team">
                                팀명 : 의정부 DK 짐
                            </div>
                            <div class="data_bio">
                                <div class="data_bio_height">
                                    <div class="mini">HEIGHT</div>
                                    172cm
                                </div>
                                <div class="data_bio_weight">
                                    <div class="mini">WEIGHT</div>
                                    -
                                </div>
                            </div>
                            <div class="data_record">
                                <div class="data_record_win">
                                    - <div class="mini">Win</div>
                                </div>
                                <div class="data_record_draw">
                                    - <div class="mini">Lose</div>
                                </div>
                                <div class="data_record_lose">
                                    - <div class="mini">Draw</div>
                                </div>
                            </div>
                            <div class="fighter_match">
                                <div class="match_title">
                                    LASTEST MATCH
                                </div>
                                <div class="match_list">
                                    <ul>
                                        <li>
                                            아마추어 2승 0패
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="fighter_img">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_full_blank.png" />
                        </div>
                    </div>

                <?php } else { ?>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="sub_content">
        <div class="sub_container">
            <div class="fighter_news_page">
                <div class="news_page_title">
                    LASTEST NEWS
                </div>
                <div class="news_page_list">
                    <ul>
                        <li>
                            <a href="javascript:">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_news_blank.jpg" />
                            </a>
                        </li>
                        <li>
                            <a href="javascript:">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_news_blank.jpg" />
                            </a>
                        </li>
                        <li>
                            <a href="javascript:">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/fighter/fighter_news_blank.jpg" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<?php
include_once(G5_THEME_PATH.'/tail.php');