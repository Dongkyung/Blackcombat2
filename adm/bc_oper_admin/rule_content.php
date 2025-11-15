<?php
$sub_menu = "910903";
define('G5_IS_ADMIN', true);
include_once ('../../common.php');
include_once(G5_ADMIN_PATH.'/admin.lib.php');
include_once(G5_ADMIN_PATH.'/admin.head.php');

$g5['title'] = "룰북 관리";

$ruleType = isset($_GET['ruleType']) ? $_GET['ruleType'] : '프로';
$ruleTypeItems = array(
    '프로' => '',
    '아마추어' => '',
);

$ruleTypeNum;
if($ruleType == "프로"){
    $ruleTypeNum = 1;
}else if($ruleType == "아마추어"){
    $ruleTypeNum = 2;
}

if (array_key_exists($ruleType, $ruleTypeItems)) {
    $ruleTypeItems[$ruleType] = 'on';
}


$sql = "SELECT rule_seq, title, rule_contents, upt_date, reg_date 
FROM blackcombat.tb_rule_content 
WHERE `type` = $ruleTypeNum
order by upt_date desc ,rule_seq desc";
$result = sql_query($sql);



?>
<style>
        .anchor li.on a {
            background-color: #3f51b5;
            color: #fff;
        }

        .anchor li a {
            width: 100px;
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: auto;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        input[type="text"] {
            width: 100%;
        }

    </style>


<script>
    function go_rule_update(teamSeq) {
        location.href="/adm/bc_oper_admin/rule_content_write.php?ruleType=<?= $ruleType ?>";
    }

    // 현재 날짜 및 시간을 가져오는 함수
    function getCurrentDateTime() {
        var currentDate = new Date();
        var year = currentDate.getFullYear();
        var month = String(currentDate.getMonth() + 1).padStart(2, '0');
        var day = String(currentDate.getDate()).padStart(2, '0');
        var hours = String(currentDate.getHours()).padStart(2, '0');
        var minutes = String(currentDate.getMinutes()).padStart(2, '0');
        var seconds = String(currentDate.getSeconds()).padStart(2, '0');
        return `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
    }

    function deleteRow(ruleSeq) {
        if(confirm("삭제하시겠습니까?")){
           
            // 여기서 AJAX 호출로 delete_team.php를 호출하여 삭제 처리를 수행
            $.ajax({
                type: 'POST',
                url: './rules/rule_content_delete.php', // 실제 삭제를 처리하는 PHP 파일 경로
                data: { ruleSeq: ruleSeq },
                success: function(response) {
                    // 서버에서 삭제 성공한 경우
                    location.reload();
                },
                error: function(error) {
                    console.error('Error deleting data:', error);
                    // 에러 처리 (실제 프로덕션에서는 사용자에게 알림 등을 보여주어야 함)
                }
            });
        }
        
    }

    </script>

<ul class="anchor">
    <? foreach ($ruleTypeItems as $ruleTypeName => $class) : ?>
        <li class="<?= $class ?>"><a href="?ruleType=<?= urlencode($ruleTypeName) ?>"><?= $ruleTypeName ?></a></li>
    <? endforeach; ?>
</ul>

<h2>룰북 관리</h2>
<button class="btn" onclick="go_rule_update()" style="margin:10px;">업데이트하기</button>
<table>
    <!-- 테이블의 헤더 부분은 그대로 유지 -->
    <tr>
        <th style="width:50px">Seq</th>
        <th style="width:300px">제목</th>
        <th style="width:200px">업데이트날짜</th>
        <th style="width:200px">생성날짜</th>
        <th style="width:200px">삭제</th>
        
    </tr>
    <?php
    while ($row = sql_fetch_array($result)) {
        echo "<tr style='cursor:pointer;' onclick='location.href=\"/adm/bc_oper_admin/rule_content_read.php?rule_seq=".$row["rule_seq"]."\"'>";
        echo "<td>" . $row["rule_seq"] . "</td>";
        echo "<td>" . $row["title"] . "</td>";
        echo "<td>" .  date("Y.m.d", strtotime($row['upt_date']))  . "</td>";
        echo "<td>" . $row["reg_date"] . "</td>";
        echo '<td class="btn_delete"><button class="btn btn-sm btn-danger" onclick="event.stopPropagation(); deleteRow(\'' . $row["rule_seq"] . '\')">삭제</button></td>';
        echo "</tr>";
    }
    ?>

</table>



<?php
include_once(G5_ADMIN_PATH.'/admin.tail.php');