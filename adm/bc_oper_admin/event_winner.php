<?php
$sub_menu = "910901";
define('G5_IS_ADMIN', true);
include_once ('../../common.php');
include_once(G5_ADMIN_PATH.'/admin.lib.php');
// auth_check_menu($auth, $sub_menu, "r");

// $token = get_token();


include_once(G5_ADMIN_PATH.'/admin.head.php');
// $token = get_token();

$g5['title'] = "좌석 컨트롤";

$eventSeq_name_map = array(
    '277' => "블랙컴뱃 14",
    '281' => "블랙컴뱃 15"
);

$eventSeq = !empty($_GET['eventSeq']) ? $_GET['eventSeq'] : '281';


$sql = "SELECT seq, eventSeq, content1, content2, content3, confirm, noShowYn, tel, name, fsttm FROM blackcombat.tb_event_winner WHERE 1=1";

if($eventSeq !== "all"){
    $sql .= " AND eventSeq='$eventSeq'";
};

$result = sql_query($sql);

echo "<script type='text/javascript'>";
echo "let resultList = [];";
while ($row = sql_fetch_array($result)) {
    echo "resultList.push({
            seq:'".$row["seq"]."'
            ,eventSeq:'".$row["eventSeq"]."'
            ,content1:'".$row["content1"]."'
            ,content2:'".$row["content2"]."'
            ,content3:'".$row["content3"]."'
            ,confirm:'".$row["confirm"]."'
            ,noShowYn:'".$row["noShowYn"]."'
            ,tel:'".$row["tel"]."'
            ,name:'".$row["name"]."'
            ,fsttm:'".$row["fsttm"]."'
        });";
}
echo "</script>";



?>
<style>

    /* 부트스트랩 CSS 예외처리*/

    ul{
        padding-left : unset !important;
    }
    .row {
        --bs-gutter-x: unset !important;
        --bs-gutter-y: unset !important;
        
        flex-wrap: unset !important;
        margin-top: unset !important;
        margin-right: unset !important;
        margin-left: unset !important;
    }
    .row>* {
        flex-shrink: unset !important;
        /* width: unset !important; */
        max-width: unset !important;
        padding-right: unset !important;
        padding-left: unset !important;
        margin-top: unset !importantZ;
    }

    #myTable {
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    th {
        background-color: #f2f2f2;
    }


    .purchasedInfo table {
        border-collapse: collapse;
        width: auto;
    }
    .purchasedInfo th, .purchasedInfo td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    .purchasedInfo th {
        background-color: #f2f2f2;
        width:100px;
    }

    .purchasedInfo td {
        width:300px;
    }


    .tableContent{
        margin-top:50px;
        display:flex;
        gap:10px;
    }
    .tableContent .purchasedList{
        flex: 1 1 auto;
    }
    .tableContent .purchasedInfo{
        margin-top:50px;
        flex: 1 1 auto;
    }

    

</style>

<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- dataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />  
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>


<script>
    
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
</script>



<div class="game_select_div">
    <select onchange="location.href='/adm/bc_oper_admin/event_winner.php?eventSeq='+value">
        <option value="all" <? if($eventSeq === 'all') {echo "selected"; } ?>>전체</option>
        <option value="277" <? if($eventSeq === '277') {echo "selected"; } ?>>Black Combat 14: END GAME</option>
        <option value="281" <? if($eventSeq === '281') {echo "selected"; } ?>>Black Combat 15: PARA BELLUM</option>
    </select>
</div>

<div class="tableContent" style="margin-top:50px;">
    <div class="purchasedList">
        <table id="myTable" class="hover">
            <thead>
                <tr>
                    <th>no</th>
                    <th>대회</th>
                    <th>내용1</th>
                    <th>내용2</th>
                    <th>내용3</th>
                    <th>수락여부</th>
                    <th>노쇼여부</th>
                    <th>연락처</th>
                    <th>이름</th>
                    <th>생성날짜</th>
                    <th>삭제</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    mysqli_data_seek($result, 0);
                    while ($row = sql_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["seq"] . "</td>";
                        echo "<td>" . $eventSeq_name_map[$row["eventSeq"]] . "</td>";
                        echo "<td>" . $row["content1"] . "</td>";
                        echo "<td>" . $row["content2"] . "</td>";
                        echo "<td>" . $row["content3"] . "</td>";
                        echo "<td>" . $row["confirm"] . "</td>";
                        echo "<td>" . $row["noShowYn"] . "</td>";
                        echo "<td>" . $row["tel"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["fsttm"] . "</td>";
                        echo '<td><button class="btn btn-sm btn-danger" onclick="deleteRow(' . $row["seq"] . ')">삭제</button></td>';
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
<div>
        <textarea id="dataInput" style="width:400px; height:600px;" placeholder="여기에 복붙하세요"></textarea><br><br>
        <button onclick="uploadData()">업로드</button>
    </div>

<script>

    let table = new DataTable('#myTable', {
        pageLength: 25,
    });

    var ajax_url = "https://www.blackcombat-official.com/theme/blackcombat/shop";

    function uploadData() {
      const rawText = document.getElementById('dataInput').value.trim();
      if (!rawText) {
        alert("데이터를 입력하세요.");
        return;
      }

      const lines = rawText.split('\n');
      const payload = [];

      //Validation
      for (const line of lines) {
        const cols = line.split('\t');

        if (cols.length < 8) {
          alert('열이 부족한 줄:', line);
          return false;
        }

        payload.push({
          eventSeq: cols[0].trim(),
          content1: cols[1].trim(),
          content2: cols[2].trim(),
          content3: cols[3].trim(),
          confirm: cols[4].trim(),
          noShowYn: cols[5].trim(),
          tel: cols[6].trim(),
          name: cols[7].trim()
        });
      }

      console.log('보낼 데이터:', payload);

      if(confirm("등록 하시겠습니까?")){
            $.ajax({
                type: 'POST',
                url: './event_winner/create_event_winner.php', // 실제 추가를 처리하는 PHP 파일 경로
                data: {
                    "winners": JSON.stringify(payload)
                },
                success: function(response) {
                    // 서버에서 추가 성공한 경우
                    console.log(response); // 추가 성공한 경우 콘솔에 출력 (디버깅용)
                    location.reload();
                },
                error: function(error) {
                    console.error('Error adding data:', error);
                    // 에러 처리 (실제 프로덕션에서는 사용자에게 알림 등을 보여주어야 함)
                }
            });
        }
    }

    // 삭제 버튼 클릭 시 호출되는 함수
    function deleteRow(seq) {
        
        $.ajax({
            type: 'POST',
            url: './event_winner/delete_event_winner.php', // 실제 삭제를 처리하는 PHP 파일 경로
            data: { seq: seq},
            success: function(response) {
                // 서버에서 삭제 성공한 경우
                console.log(response); // 삭제 성공한 경우 콘솔에 출력 (디버깅용)
                location.reload();
            },
            error: function(error) {
                console.error('Error deleting data:', error);
                // 에러 처리 (실제 프로덕션에서는 사용자에게 알림 등을 보여주어야 함)
            }
        });
    }
    
    

</script>


<?php
include_once(G5_ADMIN_PATH.'/admin.tail.php');