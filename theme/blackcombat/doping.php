<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');

add_stylesheet('<link rel="stylesheet" href="/theme/blackcombat/css/rules.css">', 0);

$tab = isset($_GET['tab']) ? $_GET['tab'] : '1';
$tabItems = array(
    '1' => '',
    '2' => '',
    '3' => '',
);

$tabNameMap = array(
    '1' => '정보',
    '2' => '검사이력',
    '3' => '양성명단',
);

if (array_key_exists($tab, $tabItems)) {
    $tabItems[$tab] = 'on';
}

?>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    table, th, td {
        border: 1px solid black;
    }
    th, td {
        text-align: left;
        padding: 8px;
        width: 25%;
        text-align:center;
    }
    
    .doping-list th:nth-child(1), 
    .doping-list td:nth-child(1){
        width: 10%;
    }

    .doping-list th:nth-child(2), 
    .doping-list td:nth-child(2){
        width: 15%;
    }

    .doping-list th:nth-child(3), 
    .doping-list td:nth-child(3){
        width: 15%;
    }
    .doping-list th:nth-child(4), 
    .doping-list td:nth-child(4){
        width: 20%;
    }

    .doping-list th:nth-child(5), 
    .doping-list td:nth-child(5){
        width: 15%;
    }

    .doping-list thead{
        background-color:#147bb7;
        color:white;
    }
    .doping-list tbody span{
        background-color:#147bb7;
        color:white;
        font-weight:bold;
        padding: 4px 6px;
        border-radius: 5px;
    }

    .doping_tab{
        text-align: center;
        display: flex;
        justify-content: center;
        margin-bottom: 50px;
    }

    .doping_tab li{
        float: left;
        padding : 0px 10px;
        font-size: 1.4rem;
        font-weight:bold;
    }

    .doping_tab li a{
        color: #999999;
    }

    .doping_tab li.on a{
        color:black;
    }
</style>

    <div class="sub_visual">
        <div class="sub_visual_items">
            <div class="sub_visual_caption">
                <div class="category">DOPING</div>
            </div>
        </div>
    </div>

    <div class="sub_content">
        <div class="doping_tab">
            <ul>
                <? foreach ($tabItems as $tabTarget => $class) : ?>
                    <li class="<?= $class ?>"><a href="?tab=<?= urlencode($tabTarget) ?>"><?= $tabNameMap[$tabTarget] ?></a></li>
                <? endforeach; ?>
            </ul>
        </div>
        <div class="sub_container">
            <div class="rules_page" style="max-width:1000px;">
<?if($tab === '1') { ?>
                <div>
                    <h1>I. 경기대회 도핑관리실 구성에 관한 지침</h1>

                    <div style="border:1px solid black; margin: 30px; padding: 20px;">
                    세계도핑방지기구 [검사 및 조사 국제표준]과 [검사관 시료채취 매뉴얼]에 따라 도핑관리에 적합한 공간에 대한 기준을 마련하고 이를 기술하여 효과적인 도핑관리를 수행함과 동시에 시료의 완전성을 추구하고 선수의 권리를 보호하기 위함.
                    </div>
                    적용범위: 국내에서 시행되는 모든 시료채취 현장<br/>
                    <br/>
                    구성 원칙<br/>
                    (비 공 개) 선수의 개인정보와 사생활 보호.<br/>
                    (전용사용) 시료채취 목적으로만 사용되며 그 외 목적으로 사용 금지.<br/>
                    (청    결) 선수와 시료채취요원의 건강과 안전을 최우선 고려.<br/>
                    <br/>
                    구성 기준<br/>
                    <br/>
                    <b>1)도핑관리실</b><br/>
                    <br/>
                    공통사항을 준수하여 다음 명시된 기능실을 경기단체 또는 대회주관단체가 제공<br/>
                    1. 선수대기실: 선수가 시료 제공을 위해 대기하는 장소<br/>
                    2. 행  정  실: 선수 시료 취급 및 관련 도핑관리 서식 작성 장소<br/>
                    3. 시료채취실: 선수가 시료를 제공하는 장소(화장실)<br/>
                    <br/>
                    <공통사항><br>
                    - 검사대상 선수, 선수지원요원 및 시료채취요원을 모두 수용할 수 있을 만큼 충분한 면적의    공간<br/>
                    - 선수 개인정보 보호를 위해 다른 기능실(예: 의무실)과 붕족하여 사용하지 않는 도핑관리 전용 공간<br/>
                    - 경기구역에서 가까운 공간<br/>
                    - 출입구에 잠금 기능이 있거 출입 통제가 가능한 공간<br/>
                    - 적정 조명(일반 사무실 수준)과 냉난방시설을 갖춘 환기가 가능한 공간<br/>
                    <br/>
                    <기타사항><br/>
                    - 시료채취실이 도핑관리실 내 위치하지 않을 경우 최대한 근접한 거리에 위치.<br/>
                    - 도핑관리실 내부 알코올음료 반입 및 음용 금지<br/>
                    <br/>
                    <b>2)물자</b><br/>
                    <br/>
                    기능실별 명시된 필요 물자를 경기단체 또는 대회주관단체가 제공<br/>
                    필요물자 수: 검사대상 선수 수에 따라 상이<br/>
                    <br/>
                    1. 선수대기실<br/>
                    - 의자,개별 포장된 무알코올/디카페인 음료(500mL/병, 선수당 최소 3병)<br/>
                    - 경기중계용 TV(가능한 경우), 휴지통, 옷걸이 등<br/>
                    2. 행정실<br/>
                    -책상(검사관당 1개), 의자(책상당 최소 3개), 칸막이(파티션), 휴지통, 휴지<br/>
                    -시료보관용 냉장고, 도핑관리 서식 보관용 캐비닛(가능한 경우) 등<br/>
                    3. 시료채취실<br/>
                    - 양변기, 소변기, 세면시설, 종이수건 또는 손 건조기, 휴지통<br/>
                    <br/>
                    <예 시><br/>
                    <table>
                        <tr>
                            <td>선수</td>
                            <td>책상</td>
                            <td>의자</td>
                            <td>음료(생수)</td>
                        </tr>
                        <tr>
                            <td>1~3명</td>
                            <td>2개</td>
                            <td>6개</td>
                            <td>10병</td>
                        </tr>
                        <tr>
                            <td>4~8명</td>
                            <td>4개</td>
                            <td>15개</td>
                            <td>20병</td>
                        </tr>
                        <tr>
                            <td>9명 이상</td>
                            <td>5개</td>
                            <td>20개</td>
                            <td>40병</td>
                        </tr>
                    </table>
                    <br/>
                    <br/>
                    <br/>
                    <h1>II. 도핑방지규정위반</h1>
                    도핑에 대한 제재 경우 일정기간 자격정지, 경기결과가 실효, 획득한 메달, 점수, 상금이 몰수됩니다.<br/>
                    또한 제재받은 자의 성명이 웹페이지에 게시되어 일반에게 공개됩니다.<br/>
                    <br/>
                    <br/>
                    첫 번째 도핑방지규정위반 제재 기준 자격정지기간<br/>
                    <br/>
                    [제13조 제1호] <br/>
                    선수의 시료 내에 금지약물, 그 대사물질 또는 표지자가 존재하는 경우 2년 또는 4년<br/>
                    <br/>
                    [제13조 제2호]	<br/>
                    선수가 금지약물 또는 금지방법을 사용 또는 사용 시도하는 경우 2년 또는 4년<br/>
                    <br/>
                    [제13조 제3호]<br/>
                    선수가 시료채취를 회피 또는 거부하거나 시료채취에 실패하는 경우 2년 또는 4년<br/>
                    (보호대상자 또는 레크리에이션 선수의 경우, 견책~2년)<br/>
                    <br/>
                    [제13조 제4호]<br/>
                    선수의 소재지정보 불이행이 발생하는 경우	2년<br/>
                    <br/>
                    [제13조 제5호]	<br/>
                    선수 또는 기타 관계자가 도핑관리 과정 중 부정행위를 하거나 부정행위를 시도하는 경우 2  년 또는 4년<br/>
                    <br/>
                    [제13조 제6호]	<br/>
                    선수 또는 선수지원요원이 금지약물 또는 금지방법을 보유하는 경우 2년 또는 4년<br/>
                    <br/>
                    [제13조 제7호]<br/>
                    선수 또는 기타 관계자가 금지약물 또는 금지방법을 부정거래하거나 부정거래를 시도하는 경  우 4년~영구<br/>
                    <br/>
                    [제13조 제8호]	<br/>
                    선수 또는 기타 관계자가 경기기간 중에 있는 선수에게 경기기간 중 금지약물 또는 금지방법 을 투여하거나 투여를 시도하는 경우, 또는 경기기간 외에 있는 선수에게 경기기간 외 금지약물 또는 금지방법을 투여하거나 투여를 시도하는 경우	4년~영구<br/>
                    <br/>
                    [제13조 제9호]	<br/>
                    선수 또는 기타 관계자의 공모 또는 공모 시도 2년~영구<br/>
                    <br/>
                    [제13조 제10호]<br/>
                    선수 또는 기타 관계자가 특정 대상자와 연루되는 행위 1~2년<br/>
                    <br/>
                    [제13조 제11호]<br/>
                    선수 또는 기타 관계자가 관련 당국에 제보하는 것을 제지하거나 보복하는 행위 2년~영구<br/>
                    <br/>
                    [제65조 제3항 제1호]<br/>
                    남용약물을 경기기간 외에 섭취 또는 사용하였고 종목의 경기력과 무관했음을 증명할 경우 3개월<br/>
                    <br/>
                    한국마약퇴치운동본부 마약류중독재활센터 중독회복 프로그램 이수시 3개월에서 1개월로 감경 가능하며, 이 자격정지기간은 제69조의 규정을 근거로 감경할 수 없음
                    <br/>
                    <br/>
                    <br/>
                    <br/>

                    <h1>III. 치료목적사용면책<br>(TUE: Therapeutic Use Exemption)<br></h1>
                    <div style="border:1px solid black; margin: 30px; padding: 20px;">
                    선수가 금지약물 또는 금지방법의 사용이 필요한 의학적 상태에 있고, 「치료목적사용면책 국제표준」 및 세계도핑방지규약 제4.4조에 따른 조건을 충족하는 경우에 치료목적으로 금지약물 또는 금지방법의 사용을 허가하는 것을 말합니다.
                    </div>
                    <b>TUE 승인조건</b><br/>
                    <br/>
                    치료목적으로 금지약물 또는 금지방법의 사용이 필요한 선수는 해당 금지약물 또는 금지방법을 사용하거나 보유하기 이전에 치료목적사용면책을 신청하고 승인 받아야 합니다.<br/>
                    <br/>
                    ① 금지약물 또는 금지방법이 관련 임상 증거에 따라 진단된 질병 치료목적으로 사용이 필요할 것<br/>
                    ② 금지약물 또는 금지방법의 치료목적사용이 건강상태로 회복 이상의 추가적 경기력 향상을 일으키지 않을 것<br/>
                    ③ 선수의 질병 치료에 사용 가능한 적절한 대체 치료가 없을 것<br/>
                    ④ TUE를 신청한 사유가 기존의 TUE 승인 없이 사용한 금지약물 또는 금지방법에 의한 것이 아닐 것<br/>
                    <br/>
                    <b>치료목적사용면책 신청 안내</b><br/>
                    <br/>
                    - 제출자료 : 신청서, 진단서 혹은 소견서(최근 3개월 이내 발급), 해당 질병으로 진료받은 진료기록, 해당 질병을 입증할 수 있는 각종 검사 결과지 등<br/>
                    - 심사중 TUE위원회의 요청에 따라 추가자료 제출을 요청할 수 있습니다.<br/>
                    - TUE 신청 자료 발급에 소요되는 모든 비용은 선수측 부담입니다.<br/>
                    <br/>
                    모든 서류는 brandaidkr@gmail.com 으로 제출 바랍니다.
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <h4 style="text-align:right">Eng ver.</h4><br>
                    <h1>IV. Doping regulation violation</h1>
                    Sanctions for violating anti-doping regulations include a period of suspension, nullification of competition results, forfeiture of medals, points, and prize money acquired. Additionally, the name of the sanctioned individual will be publicly disclosed on a webpage.<br/>
                    <br/>
                    First violation sanctions criteria for anti-doping regulation violations:<br/>
                    <br/>
                    [Article 13, Paragraph 1] If prohibited substances, their metabolites, or markers are found in the athlete's sample, the suspension period is 2 or 4 years.<br/>
                    <br/>
                    [Article 13, Paragraph 2] If an athlete uses or attempts to use prohibited substances or methods, the suspension period is 2 or 4 years.<br/>
                    <br/>
                    [Article 13, Paragraph 3] If an athlete avoids, refuses, or fails to submit to sample collection, the suspension period is 2 or 4 years (except for protected persons or recreational athletes, in which case it is from reprimand to 2 years).<br/>
                    <br/>
                    [Article 13, Paragraph 4] If the athlete fails to provide whereabouts information, the suspension period is 2 years.<br/>
                    <br/>
                    [Article 13, Paragraph 5] If an athlete or other party engages in misconduct or attempts misconduct during the doping control process, the suspension period is 2 or 4 years.<br/>
                    <br/>
                    [Article 13, Paragraph 6] If an athlete or athlete support personnel possesses prohibited substances, the suspension period is 2 or 4 years.<br/>
                    <br/>
                    [Article 13, Paragraph 7] If an athlete or other party engages in trafficking or attempts trafficking of prohibited substances, the suspension period is 4 years to permanent.<br/>
                    <br/>
                    [Article 13, Paragraph 8] If an athlete or other party administers or attempts to administer prohibited substances to an athlete during competition or outside competition, the suspension period is 4 years to permanent.<br/>
                    <br/>
                    [Article 13, Paragraph 9] If there is a conspiracy or attempted conspiracy by an athlete or other party, the suspension period is 2 years to permanent.<br/>
                    <br/>
                    [Article 13, Paragraph 10] If an athlete or other party is involved in acts related to specific individuals, the suspension period is 1 to 2 years.<br/>
                    <br/>
                    [Article 13, Paragraph 11] If an athlete or other party obstructs or retaliates against reporting to the relevant authorities, the suspension period is 2 years to permanent.<br/>
                    <br/>
                    [Article 65, Paragraph 3, Item 1] If an athlete consumed or used abuse substances outside of competition and it was unrelated to the performance of the sport, the suspension period is 3 months.<br/>
                    <br/>
                    The suspension period may be reduced from 3 months to 1 month upon completion of the addiction recovery program at the Narcotics Control Headquarters Rehabilitation Center, but this period cannot be reduced based on the provisions of Article 69.<br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <h4 style="text-align:right">Eng ver.</h4><br>
                    <h1>V. "Therapeutic Use Exemption (TUE)" is a provision that allows athletes to use prohibited substances or methods for medical treatment purposes.</h1>
                    <div style="border:1px solid black; margin: 30px; padding: 20px;">
                    It means permitting the therapeutic use of prohibited substances or methods for medical purposes when an athlete has a medical condition requiring such usage, provided it meets the conditions outlined in the "International Standard for Therapeutic Use Exemptions" and Article 4.4 of the World Anti-Doping Code.
                    </div>
                    Conditions for TUE Approval<br/>
                    <br/>
                    Athletes requiring the therapeutic use of prohibited substances or methods for medical purposes must apply for and receive approval for a Therapeutic Use Exemption (TUE) before using or possessing such substances or methods.<br/>
                    <br/>
                    1.The prohibited substance or method must be necessary for the treatment of a diagnosed medical condition based on relevant clinical evidence.<br/>
                    <br/>
                    2.The therapeutic use of the prohibited substance or method must not result in performance enhancement beyond recovery to a state of health.<br/>
                    <br/>
                    3.There must be no suitable alternative treatments available for the athlete's medical condition.<br/>
                    <br/>
                    4.The reason for applying for a TUE must not be due to the prior use of prohibited substances or methods without prior TUE approval.<br/>
                    <br/>
                    Guidelines for TUE Application<br/>
                    <br/>
                    Required Documents: Application form, diagnosis statement or medical opinion (issued within the last 3 months), medical records related to the diagnosed condition, various test results confirming the diagnosed condition, etc.<br/>
                    Additional documentation may be requested by the TUE Committee for assessment during the review process.<br/>
                    All expenses associated with obtaining TUE application documents are the responsibility of the athlete.<br/>
                    <br/>
                    *Please submit all documents to brandaidkr@gmail.com
                </div>
<? }else if($tab === '2') { ?>
                <div class="doping-list">
                    <table>
                        <thead>
                            <tr>
                                <th style="width:10%">대회명</th>
                                <th style="width:30%;">검사내용</th>
                                <th style="width:10%">결과</th>
                                <th style="width:10%">기록날짜</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>블랙컴뱃15 </td>
                                <td>총 10명 불시 검문 실시</td>
                                <td>전원 음성</td>
                                <td>2025.08.19</td>
                            </tr>
                            <tr>
                                <td>블랙컴뱃14 </td>
                                <td>총 6명 불시 검문 실시</td>
                                <td>전원 음성</td>
                                <td>2025.05.03</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
<? }else if($tab === '3') { ?>
                <div class="doping-list">
                    <table>
                        <thead>
                            <tr>
                                <th>성명</th>
                                <th>대회명</th>
                                <th>위반 규정</th>
                                <th>금지 성분</th>
                                <th>처리 결과</th>
                                <th>기간</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Aori**le</td>
                                <td>블랙컴뱃11 </td>
                                <td><span>제 13조 1항</span></td>
                                <td>푸로세미드</td>
                                <td>24개월자격정지<br></td>
                                <td>2024-09-16 ~ 2026-09-16</td>
                            </tr>
                            <tr>
                                <td>Zhang **zhen</td>
                                <td>블랙컴뱃11</td>
                                <td><span>제 13조 1항</span></td>
                                <td>푸로세미드</td>
                                <td>24개월자격정지<br></td>
                                <td>2024-09-16 ~ 2026-09-16</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
<? } ?>































            </div>
        </div>
    </div>
<?php ?>
<?php
include_once(G5_THEME_PATH.'/tail.php');