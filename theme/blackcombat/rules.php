<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');

$ruleType = !empty($_GET['ruleType']) ? $_GET['ruleType'] : 'pro';

add_stylesheet('<link rel="stylesheet" href="/theme/blackcombat/css/rules.css">', 0);


$ruleTypeNum;
if($ruleType == "pro"){
    $ruleTypeNum = 1;
}else if($ruleType == "amateur"){
    $ruleTypeNum = 2;
}


$sql = "SELECT rule_seq, title, rule_contents, upt_date, reg_date 
        FROM blackcombat.tb_rule_content 
        WHERE `type` = $ruleTypeNum
        ORDER BY upt_date DESC, rule_seq DESC 
        LIMIT 1";

$latest = sql_fetch($sql);

?>

<style>
    .rules_type li{
        margin: 0px 30px;
    }
    .rules_type li a{
        font-size:40px;
    }
    .rules_type select{
        width: 300px;
        height: 50px;
        font-size: 20px;
        text-align: center;
        font-weight: bold;
        background-color: #ffba3c;
        border:2px solid #777777;
        border-radius: 7px;
        cursor: pointer;
    }
    .rules_type select option{
        background: white;
    }

    .rules_type{
        text-align: center;
        margin-top:50px;
        margin-bottom:50px;
    }

    .rule-meta {
        font-size: 0.9rem;
        font-weight:bold;
        color: #666;
        margin-bottom: 50px;
        border-bottom: 2px solid #007bff;
    }

    .nameHighlight{
        font-weight:bold;
        font-size:1.1rem;
        color: #ffba3c;
    }

    .penalties_table td, .penalties_table th{
        border: 1px solid black;
        padding:10px;
    }


</style>

    <div class="sub_visual">
        <div class="sub_visual_items">
            <div class="sub_visual_caption">
                <div class="category">RULES</div>
            </div>
        </div>
    </div>

    <div class="sub_content">
        <div class="sub_container">
            <div class="rules_type">
                <select onchange="location.href='/rules.php?ruleType='+value">
                    <option value="pro" <? if($ruleType === 'pro') {echo "selected"; } ?>>PRO RULES</option>
                    <option value="amateur" <? if($ruleType === 'amateur') {echo "selected"; } ?>>AMATEUR RULES</option>
                </select>
            </div>
            <div class="rules_page">
                <div class="rule-meta">
                    기준날짜 : <?= date("Y.m.d", strtotime($latest['upt_date'])) ?>
                </div>
                <div class="rules_contents" id="rules_contents">
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        const container = document.getElementById('rules_contents');
        const shadow = container.attachShadow({ mode: 'open' });

        shadow.innerHTML = `
            <link rel="stylesheet" href="/plugin/editor/smarteditor2/css/ko_KR/smart_editor2_in.css">
            <div class="se2_inputarea">
                <?= $latest['rule_contents'] ?>
            </div>
        `;
    </script>
<?php
include_once(G5_THEME_PATH.'/tail.php');