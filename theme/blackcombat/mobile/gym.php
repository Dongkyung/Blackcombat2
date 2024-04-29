<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_MOBILE_PATH.'/head.php');

add_stylesheet('<link rel="stylesheet" href="/theme/blackcombat/css/mobile_gym.css">', 0);

// $page = !empty($_GET['page']) ? $_GET['page'] : 1;

$gymId = isset($_GET['gymId']) ? $_GET['gymId'] : '1';
$gymIdItems = array(
    '1' => '',
    '2' => '',
);

$gymIdNameMap = array(
    '1' => '본관',
    '2' => '대전점',
);


if (array_key_exists($gymId, $gymIdItems)) {
    $gymIdItems[$gymId] = 'on';
}


?>
<style>
    .gym_category{
        text-align: center;
        display: flex;
        justify-content: center;
        margin-bottom: 50px;
    }

    .gym_category li{
        float: left;
        padding : 0px 10px;
        font-size: 1.5rem;
        font-weight:bold;
    }

    .gym_category li a{
        color: #999999;
    }

    .gym_category li.on a{
        color:black;
    }
</style>

    <div class="sub_visual">
        <div class="sub_visual_items">
            <div class="sub_visual_caption">
                <div class="category">GYM</div>
            </div>
        </div>
    </div>
    <div class="sub_content">
        <div class="sub_container">
            <div class="gym_category">
                <ul>
                    <? foreach ($gymIdItems as $gymIdItemTarget => $class) : ?>
                        <li class="<?= $class ?>"><a href="?gymId=<?= urlencode($gymIdItemTarget) ?>"><?= $gymIdNameMap[$gymIdItemTarget] ?></a></li>
                    <? endforeach; ?>
                </ul>
            </div>
            <? if($gymId === '1'){ ?>
                <div class="gym_page">
                    <div class="gym_page_item">
                        <div class="gym_photo">
                            <div class="gym_title">
                                <div>BLACK COMBAT OFFICIAL GYM</div>
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
                            <div class="gym_coach_item">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/gym_info_2.png" />
                            </div>
                            <div class="gym_coach_item">
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
                                <div id="daumRoughmapContainer1663303230090" class="root_daum_roughmap root_daum_roughmap_landing" style="max-width:100%;"></div>

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
            <? }else if($gymId === '2'){ ?>
                <div class="gym_page">
                    <div class="gym_page_item">
                        <div class="gym_photo">
                            <div class="gym_title">
                                <div>BLACK COMBAT DAEJEON GYM</div>
                                <div style="font-size:20px;"><a href="https://www.instagram.com/blackcombat_daejeon/" target="_blank">@blackcombat_daejeon</a></div>
                            </div>
                            <div class="gym_photo_item">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/main/training_center_img2_1.jpg" />
                            </div>
                            <div class="gym_photo_item">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/main/training_center_img2_4.jpg" />
                            </div>
                            <div class="gym_photo_item">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/main/training_center_img2_5.jpg" />
                            </div>
                        </div>
                    </div>
                    <div class="gym_page_item">
                        <div class="gym_coach">
                            <div class="gym_title">
                                <div>COACH</div>
                                <div class="script">Black Combat</div>
                            </div>
                            <div class="gym_coach_item">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/gym_info2_1.jpg" />
                            </div>
                            <div class="gym_coach_item">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/gym_info2_2.jpg" />
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
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/gym_info2_3.jpg" />
                            </div>
                            <div class="gym_info_item">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/gym_info2_4.jpg" />
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
                                <!-- <div id="daumRoughmapContainer1663303230090" class="root_daum_roughmap root_daum_roughmap_landing"></div> -->

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
                                <div class="gym_map_info_item">대전 서구 둔산로 20 대일빌딩 5층</div>
                                <div class="gym_map_info_item">070-7954-3675 / 일요일 휴무</div>
                            </div>
                        </div>
                    </div>
                </div>
            <? } ?>
           
        </div>
    </div>

<?php
include_once(G5_THEME_PATH.'/tail.php');