<?php
$sub_menu = "910903";
define('G5_IS_ADMIN', true);
include_once ('../../common.php');
include_once(G5_ADMIN_PATH.'/admin.lib.php');
include_once(G5_ADMIN_PATH.'/admin.head.php');

$g5['title'] = "룰북 업데이트";

$ruleType = isset($_GET['ruleType']) ? $_GET['ruleType'] : '프로';

$ruleTypeNum;
if($ruleType == "프로"){
    $ruleTypeNum = 1;
}else if($ruleType == "아마추어"){
    $ruleTypeNum = 2;
}

// $sql = "SELECT rule_seq, title, rule_contents, upt_date, reg_date FROM blackcombat.tb_rule_content";
// $result = sql_query($sql);

$sql = "SELECT rule_seq, title, rule_contents, upt_date, reg_date 
        FROM blackcombat.tb_rule_content 
        WHERE `type` = $ruleTypeNum
        ORDER BY upt_date DESC, rule_seq DESC 
        LIMIT 1";
$latest = sql_fetch($sql);

// 기본값 세팅
$default_upt_date = date("Y.m.d");
$default_title    = $latest['title'] ?? "";
$default_contents = $latest['rule_contents'] ?? "";

?>
<style>
#ruleForm {
    width:600px;
}
#ruleForm > input{
    border:1px solid #bcbcbc; 
    line-height: 1.2rem; 
    padding: 7px; 
    margin-bottom: 10px;
}


</style>

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script type="text/javascript" src="/plugin/editor/smarteditor2/js/service/HuskyEZCreator.js" charset="utf-8"></script>

<h2>룰북 업데이트</h2>

<form id="ruleForm" method="post" action="./rules/rule_content_save.php" onsubmit="submitContents(this); return false;">
    <input type="hidden" name="ruleType" value="<?= $ruleTypeNum ?>">
     <!-- 날짜 선택 -->
    <input type="text" name="upt_date" id="upt_date" placeholder="날짜 선택" class="form-control" required style="width:200px;" value="<?= $default_upt_date ?>"  >
    <input type="text" name="title" placeholder="제목" class="form-control" required style="width:100%">
    <textarea name="rule_contents" id="editor" style="height:600px;">
        <?= $default_contents ?>
    </textarea>

    <div style="text-align: center; margin-top:10px">
        <button type="submit" class="btn btn-primary">저장</button>
    </div>
</form>


<script type="text/javascript">
    $(function(){
       // 한국어 기본값 세팅
        $.datepicker.setDefaults({
            dateFormat: 'yy.mm.dd',
            prevText: '이전 달',
            nextText: '다음 달',
            monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
            monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
            dayNames: ['일요일','월요일','화요일','수요일','목요일','금요일','토요일'],
            dayNamesShort: ['일','월','화','수','목','금','토'],
            dayNamesMin: ['일','월','화','수','목','금','토'],
            showMonthAfterYear: true,
            yearSuffix: '년'
        });

        // datepicker 적용
        $("#upt_date").datepicker();
    });

    var oEditors = [];

    nhn.husky.EZCreator.createInIFrame({
        oAppRef: oEditors,
        elPlaceHolder: "editor",   // textarea의 id
        sSkinURI: "/plugin/editor/smarteditor2/SmartEditor2Skin.html", // 스킨 경로
        fCreator: "createSEditor2"
    });

    function submitContents(form) {
        // 에디터 내용 → textarea로 반영
        oEditors.getById["editor"].exec("UPDATE_CONTENTS_FIELD", []);

        form.submit();
    }
</script>


<?php
include_once(G5_ADMIN_PATH.'/admin.tail.php');