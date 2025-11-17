<?php
$sub_menu = "910903";
define('G5_IS_ADMIN', true);
include_once ('../../common.php');
include_once(G5_ADMIN_PATH.'/admin.lib.php');
include_once(G5_ADMIN_PATH.'/admin.head.php');

$g5['title'] = "룰북 조회";

$rule_seq = $_GET['rule_seq'];

// $sql = "SELECT rule_seq, title, rule_contents, upt_date, reg_date FROM blackcombat.tb_rule_content";
// $result = sql_query($sql);
$sql = "SELECT rule_seq, `type`, title, rule_contents, upt_date, reg_date FROM blackcombat.tb_rule_content where rule_seq = '".$rule_seq."'";
$row = sql_fetch($sql);

$ruleTypeKor;
if($row['type'] == "1"){
    $ruleTypeKor = "PRO RULES";
}else if($row['type']  == "2"){
    $ruleTypeKor = "AMATURE RULES";
}

?>
<style>
    body{
        font-family: 'Malgun Gothic', "맑은 고딕", AppleGothic, Dotum, "돋움", sans-serif !important;
    }
#type_div{
    width: 300px;
    height: 50px;
    margin: 0px auto;
    font-size: 20px;
    text-align: center;
    font-weight: bold;
    background-color: #ffba3c;
    border: 2px solid #777777;
    border-radius: 7px;
    padding: 7px;
    margin-bottom:30px;
}

#ruleContent {
    max-width: 600px;
    background-color: rgba(255, 255, 255, 0.3);
    padding: 20px;
    margin: 0px auto;
    font-size: 12px;
    line-height: 24px;
    font-family: 'Noto Sans KR', 'Malgun Gothic', dotum, sans-serif;
    border: 1px solid #ddd;
    border-radius: 6px;
}
#ruleContent h2 {
    font-size: 1.6rem;
    font-weight: 600;
    margin-bottom: 50px;
    border-bottom: 2px solid #007bff;
    padding-bottom: 8px;
}
.rule-meta {
    font-size: 0.9rem;
    color: #666;
    margin-bottom: 20px;
}
.rule-title {
    font-size: 1.3rem;
    font-weight: bold;
    margin-bottom: 15px;
}
.btn-back {
    margin-top: 20px;
}

</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script type="text/javascript" src="/plugin/editor/smarteditor2/js/service/HuskyEZCreator.js" charset="utf-8"></script>

<h2>룰북 상세보기</h2>

<div class="btn-back" style="margin-bottom:10px;">
        <button type="button" class="btn btn-primary" onclick="location.href='/adm/bc_oper_admin/rule_content.php'">뒤로가기</button>
</div>
<div id="type_div">
    <?= $ruleTypeKor ?>
</div>
<div id="ruleContent">
    <h2><?= htmlspecialchars($row['title']); ?></h2>

    <div class="rule-meta">
        📅 최종수정 : <?= date("Y.m.d", strtotime($row['upt_date'])) ?>
    </div>

    <div id="rule-body"></div>

    <div class="btn-back" style="text-align:center;">
        <button type="button" class="btn btn-primary" onclick="history.back();">뒤로가기</button>
    </div>
</div>


<script type="text/javascript">
    const container = document.getElementById('rule-body');
    const shadow = container.attachShadow({ mode: 'open' });

    shadow.innerHTML = `
    <link rel="stylesheet" href="/plugin/editor/smarteditor2/css/ko_KR/smart_editor2_in.css">
    <div class="se2_inputarea">
        <?= $row['rule_contents'] ?>
    </div>
    `;
</script>


<?php
include_once(G5_ADMIN_PATH.'/admin.tail.php');