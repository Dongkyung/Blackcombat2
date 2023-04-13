<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_MOBILE_PATH.'/head.php');

add_stylesheet('<link rel="stylesheet" href="/theme/blackcombat/css/gym.css">', 0);

$page = !empty($_GET['page']) ? $_GET['page'] : 1;
?>

    <div class="sub_visual">
        <div class="sub_visual_items">
            <div class="sub_visual_caption">
                <div class="category">GYM</div>
            </div>
        </div>
    </div>
    <div class="sub_content">
        <div class="sub_container">
            <div class="gym_page">
                <div class="gym_page_item">
                    <div class="gym_photo">
                        <div class="gym_title">
                            <div>BLACK COMBAT GYM</div>
                            <div style="font-size:20px;"><a href="https://www.instagram.com/blackcombat_songnae/" target="_blank">@blackcombat_songnae</a></div>
                        </div>
                        <div class="gym_photo_item">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/training_center_img_1.png" />
                        </div>
                        <div class="gym_photo_item">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/training_center_img_2.png" />
                        </div>
                        <div class="gym_photo_item">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/training_center_img_3.png" />
                        </div>
                        <div class="gym_photo_item">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/training_center_img_4.png" />
                        </div>
                        <div class="gym_photo_item">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/training_center_img_5.png" />
                        </div>
                        <div class="gym_photo_item">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/training_center_img_6.png" />
                        </div>
                        <div class="gym_photo_item">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/training_center_img_7.png" />
                        </div>
                        <div class="gym_photo_item">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/training_center_img_8.png" />
                        </div>
                    </div>
                </div>
                <div class="gym_page_item">
                    <div class="gym_coach">
                        <div class="gym_title">
                            <div>COACH</div>
                            <div class="script">Black Combat</div>
                        </div>
                        <div class="gym_coach_item" style="width: 48%">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/gym_info_2.png" />
                        </div>
                        <div class="gym_coach_item" style="width: 48%">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/gym_info_3.png" />
                        </div>
                    </div>
                </div>
                <div class="gym_page_item">
                    <div class="gym_info">
                        <div class="gym_title">
                            <div>MEMBERSHIP/SCHEDULE</div>
                            <div class="script">Black Combat</div>
                        </div>
                        <div class="gym_info_item">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/gym_info_4.png" />
                        </div>
                        <div class="gym_info_item">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/gym_info_5.png" />
                        </div>
                        <div class="gym_info_item">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/gym_info_6.png" />
                        </div>
                    </div>
                </div>
                <div class="gym_page_item">
                    <div class="gym_address">
                        <div class="gym_title">
                            <div></div>
                            <div class="script"></div>
                        </div>
                        <div class="gym_map">
                            <!-- * 카카오맵 - 지도퍼가기 -->
                            <!-- 1. 지도 노드 -->
                            <div id="daumRoughmapContainer1663303230090" class="root_daum_roughmap root_daum_roughmap_landing"></div>

                            <!--
                                2. 설치 스크립트
                                * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
                            -->
                            <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                            <!-- 3. 실행 스크립트 -->
                            <script charset="UTF-8">
                                new daum.roughmap.Lander({
                                    "timestamp" : "1663303230090",
                                    "key" : "2bqe4",
                                    "mapWidth" : "1080",
                                    "mapHeight" : "360"
                                }).render();
                            </script>
                        </div>
                        <div class="gym_map_info">
                            <div class="gym_map_info_item" style=" font-family: 'Teko', sans-serif; font-size: 20px; margin: 30px 0px 10px 0px;">Premium MMA, DIET, 1:1 PT, Group PT, Jiu-jitsu, Wrestling, Cage Skills, Kickboxing</div>
                            <div class="gym_map_info_item">경기도 부천시 부일로 224-14 2층</div>
                            <div class="gym_map_info_item">070-7778-9192 / 일요일 휴무</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include_once(G5_THEME_PATH.'/tail.php');