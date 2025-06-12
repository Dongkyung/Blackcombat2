<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.php');

add_stylesheet('<link rel="stylesheet" href="/theme/blackcombat/css/mobile_sponsors.css">', 0);
?>
<style>

.sponsor_list_title{
    text-align:center;
    font-size:2rem;
    margin:20px;
    margin-top:50px;
    font-family: 'Teko', sans-serif;
}
</style>

    <div class="sub_visual">
        <div class="sub_visual_items">
            <div class="sub_visual_caption">
                <div class="category">SPONSORS</div>
            </div>
        </div>
    </div>
    <div class="sub_content">
        <div class="sub_container">
            <div class="sponsors_page">
                <div class="sponsor_list_title" style="margin-top:0px;">Powered by</div>
                <div class="sponsors_list">
                    <div class="sponsors_list_item">
                        <div class="sponsors_list_logo">
                            <a href="https://www.pgsoft.com/ko/games/all/" target="_blank">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/sponsor_pg.png"/>
                            </a>
                        </div>
                        <div class="sponsors_list_caption">
                            <div class="sponsors_list_info">
                            PG Games 차이를 만드는 차이
                            </div>
                        </div>
                    </div>
                    <div class="sponsors_list_item">
                        <div class="sponsors_list_logo">
                            <a href="https://w-z.kr/" style="    padding: 20px;" target="_blank">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/sponsor_wzbio.png"/>
                            </a>
                        </div>
                        <div class="sponsors_list_caption">
                            <div class="sponsors_list_info">
                            건강하고 좋은 원료에 대한 고집으로<br /> 모든 순간이 빛나는 아름다움을 선물하다.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sponsor_list_title">Sponsored by</div>
                <div class="sponsors_list">
                    <div class="sponsors_list_item">
                        <div class="sponsors_list_logo">
                            <a href="https://exxxtreme.co.kr/index.html" target="_blank">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/sponsors_extreme.png" />
                            </a>
                        </div>
                        <div class="sponsors_list_caption">
                            <div class="sponsors_list_info">
                                최상의 라이프스타일을 선사하는<br />익스트림한 건강 브랜드, EXTREME
                            </div>
                        </div>
                    </div>
                    <div class="sponsors_list_item">
                        <div class="sponsors_list_logo">
                            <a href="https://zebramats.kr/" target="_blank">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/sponsors_zebra.png" />
                            </a>
                        </div>
                        <div class="sponsors_list_caption">
                            <div class="sponsors_list_info">
                                WORLD’S NO.1 스포츠매트 시장을 선도하는 기업<br />지브라 코리아
                            </div>
                        </div>
                    </div>
                    <div class="sponsors_list_item">
                        <div class="sponsors_list_logo">
                            <a href="https://www.doctorzone.co.kr/" target="_blank">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/sponsor_doctorzon.png" />
                            </a>
                        </div>
                        <div class="sponsors_list_caption">
                            <div class="sponsors_list_info">
                            환자 중심의 1:1 맞춤 진료를 원칙으로 하는<br />프리미엄 병원, 닥터존 정형외과
                            </div>
                        </div>
                    </div>
                    <div class="sponsors_list_item">
                        <div class="sponsors_list_logo">
                            <a href="https://www.instagram.com/downtontheblack/" target="_blank">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/sponsor_downton.png" />
                            </a>
                        </div>
                        <div class="sponsors_list_caption">
                            <div class="sponsors_list_info">
                            몸이 더 좋아 보이는 맞춤 정장 & 운동인을 위한 온라인 몰,<br>다운튼더블랙
                            </div>
                        </div>
                    </div>
                    <div class="sponsors_list_item">
                        <div class="sponsors_list_logo">
                            <a href="https://www.cgv.co.kr/" target="_blank">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/sponsor_cgv.png" />
                            </a>
                        </div>
                        <div class="sponsors_list_caption">
                            <div class="sponsors_list_info">
                            '영화 그 이상의 감동’ , CGV 
                            </div>
                        </div>
                    </div>
                    <div class="sponsors_list_item">
                        <div class="sponsors_list_logo">
                            <a href="https://bf-am.com/home/index.php" target="_blank">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/sponsor_bf.png" style="width:50%"/>
                            </a>
                        </div>
                        <div class="sponsors_list_caption">
                            <div class="sponsors_list_info">
                            국내 유일 슈퍼카, 고급 외제차 렌탈 및 <br>방송 및 촬영 전문 렌트카, BF오토모빌리티
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="sponsors_cooperater">
                    <div class="guide">COOPERATE WITH MONSTERZYM</div>
                    <div class="cooperater_logo">
                        <a href="https://monsterzym.com/" target="_blank">
                            <img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/sponsors_mz.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include_once(G5_THEME_PATH.'/tail.php');