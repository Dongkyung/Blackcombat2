<?php
$sub_menu = "910900";
define('G5_IS_ADMIN', true);
include_once ('../../common.php');
include_once(G5_ADMIN_PATH.'/admin.lib.php');
include_once(G5_ADMIN_PATH.'/admin.head.php');

$g5['title'] = "선수조회수 조회";


$sql = "select base.fighter_name, base.fighter_ringname, vc.* from 
tb_fighter_view_count vc
left join tb_fighter_base base
on vc.fighter_seq = base.fighter_seq
order by vc.view_count_day desc;";

$result = sql_query($sql);

?>
<style>
        #myTable_wrapper{
            width:1300px;
        }
        #myTable {
            border-collapse: collapse;
        
        }

        tr{
            cursor: pointer;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
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


<!-- datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.ko.min.js" integrity="sha512-L4qpL1ZotXZLLe8Oo0ZyHrj/SweV7CieswUODAAPN/tnqN3PA1P+4qPu5vIryNor6HQ5o22NujIcAZIfyVXwbQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<h2>선수조회수 정보</h2>

<table id="myTable" class="hover">
    <!-- 테이블의 헤더 부분은 그대로 유지 -->
    <thead>
        <tr>
            <th style="width:50px">선수 SEQ</th>
            <th style="width:100px">이름</th>
            <th style="width:100px">링네임</th>
            <th style="width:30px">일간 조회수</th>
            <th style="width:30px">주간 조회수</th>
            <th style="width:30px">월간 조회수</th>
            <th style="width:30px">전체 조회수</th>
            <th style="width:150px">마지막 조회날짜</th>
        </tr>
    </thead>
    <tbody>
        <?php
        mysqli_data_seek($result, 0);
        while ($row = sql_fetch_array($result)) {
            $playDate = substr($row["play_date"], 0, 10);
            echo "<tr onclick='moveToPlayerPage(".$row["fighter_seq"].")'>";
            echo "<td>" . $row["fighter_seq"] . "</td>";
            echo "<td>" . $row["fighter_name"] . "</td>";
            echo "<td>" . $row["fighter_ringname"] . "</td>";
            echo "<td>" . $row["view_count_day"] . "</td>";
            echo "<td>" . $row["view_count_week"] . "</td>";
            echo "<td>" . $row["view_count_month"] . "</td>";
            echo "<td>" . $row["view_count_total"] . "</td>";
            echo "<td>" . $row["lsttm"] . "</td>";
        }
        ?>
    </tbody>
</table>




<script type="text/javascript">
      

    let table = new DataTable('#myTable', {
        pageLength: 100,
        order: [[3, 'desc']] 
    });
 
    function moveToPlayerPage(fighterSeq){
        window.open('https://www.blackcombat-official.com/fighter/'+fighterSeq, '_blank');
    }

    

</script>

<?php
include_once(G5_ADMIN_PATH.'/admin.tail.php');


