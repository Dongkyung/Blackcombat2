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
?>

    <div class="sub_visual">
        <div class="sub_visual_items">
            <div class="sub_visual_caption">
                <div class="category">CHAMPIONS LEAGUE</div>
            </div>
        </div>
    </div>
    <div class="sub_content">
        <div class="sub_container">
            <style type="text/css">
                .cl_page {}
                .cl_table { max-width: 650px; margin:  0px auto 15px auto;  }
                .cl_table table { width: 100%; margin-bottom: 10px; }
                .cl_table th { background-color: rgba(255, 255, 255, 0.8); font-size: 14px; text-align: center; padding: 10px; }
                .cl_table td { background-color: rgba(255, 255, 255, 0.3); text-align: center; border-bottom: 1px solid #DDD; padding: 15px; }
                .cl_table td img { width: 120px; margin-bottom: 5px; }
                .cl_update_date { text-align: right; font-size: 12px; color:#999; }
                .cl_team_name { display: block; margin-top: 5px; }
            </style>
            <div class="cl_page">
                <div class="cl_table">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <colgroup>
                            <col style="width: 60px;">
                            <col style="width: '*'">
                            <col style="width: 100px;">
                            <col style="width: 100px;">
                            <col style="width: 100px;">
                            <col style="width: 100px;">
                            <col style="width: 100px;">
                            <col style="width: 80px;">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>순위</th>
                                <th>팀명</th>
                                <th>경기수</th>
                                <th>피니쉬승</th>
                                <th>판정승</th>
                                <th>패배</th>
                                <th>실격패</th>
                                <th>승점</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><span class="cl_team_logo"><img src="https://www.blackcombat-official.com/theme/blackcombat/img/team_cubemma.png" /></span><span class="cl_team_name">펭카 큐브 MMA</span></td>
                                <td>5</td>
                                <td>3</td>
                                <td>-</td>
                                <td>2</td>
                                <td>-</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><span class="cl_team_logo"><img src="https://www.blackcombat-official.com/theme/blackcombat/img/team_calson.png" /></span><span class="cl_team_name">지브라 칼슨 해적단</span></td>
                                <td>5</td>
                                <td>2</td>
                                <td>-</td>
                                <td>3</td>
                                <td>-</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><span class="cl_team_logo"><img src="https://www.blackcombat-official.com/theme/blackcombat/img/team_ssabi.png" /></span><span class="cl_team_name">알코트 싸비 MMA</span></td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><span class="cl_team_logo"><img src="https://www.blackcombat-official.com/theme/blackcombat/img/team_mmastory.png" /></span><span class="cl_team_name">애쉬크로프트 MMA 스토리</span></td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><span class="cl_team_logo"><img src="https://www.blackcombat-official.com/theme/blackcombat/img/team_excombat.png" /></span><span class="cl_team_name">익스트림 익스트림컴뱃</span></td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><span class="cl_team_logo"><img src="https://www.blackcombat-official.com/theme/blackcombat/img/team_solid.png" /></span><span class="cl_team_name">팀 솔리드</span></td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="cl_update_date">update. 2022.09.20</div>
                </div>
            </div>
        </div>
    </div>

<?php
include_once(G5_THEME_PATH.'/tail.php');