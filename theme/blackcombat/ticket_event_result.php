<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8" />
  <title>이벤트 당첨 확인</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 50px 30px;
      text-align: center;
      color: #333;
    }

    h2 {
      font-size: 18px;
      margin-bottom: 30px;
    }

    input[type="text"] {
      display: block;
      margin: 10px auto;
      padding: 10px;
      font-size: 16px;
      width: 80%;
      max-width: 300px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      background-color: #ffba3c;
      color: black;
      border: none;
      padding: 12px 25px;
      font-size: 16px;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 20px;
      font-weight:bold;
    }

    button:hover {
        background-color:rgb(255, 167, 2);
        
    }

    .message {
      margin-top: 30px;
      font-size: 20px;
      font-weight: bold;
    }

    .note {
      margin-top: 20px;
      font-size: 13px;
      color: #555;
      text-align: left;
      padding: 0 20px;
    }

    .note span {
      color: red;
      font-weight: bold;
    }

    .btn-group {
      margin-top: 30px;
      display: flex;
      justify-content: center;
      gap: 20px;
    }

    .btn-option {
      padding: 15px 30px;
      font-size: 16px;
      border: none;
      background-color: #ccc;
      cursor: pointer;
    }

    .btn-option.color {
        background-color: #ffba3c;
    }

    .btn-option:hover {
        background-color:rgb(255, 167, 2);
        
    }

  </style>
</head>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<body>
    <div class='step1'>
        <h2>이벤트에 응모하신<br><span style="color: red;">이름과 휴대폰 번호</span>를 확인해주세요!</h2>

        <input type="text" placeholder="이름 입력" id="nameInput" />
        <input type="text" placeholder="휴대폰 번호 입력 (숫자만)" id="phoneInput" />

        <button onclick="handleSubmit()">당첨 결과 조회</button>
    </div>

    <div class='step2' style="display:none">
        <div class="message"><span class="content1">실버</span>석에 당첨되셨습니다.</div>
        <div class="note">
            <p>※ 신청정보 : <span class="name">홍길동</span> / <span class="tel">01011112222</span> / <span class="content2">3매</span> </p>
            <p>* 상세 좌석 번호는 티켓 창구에서 확인하실 수 있습니다. (선착순으로 랜덤 번호 지급)</p>
            <p>* 2석 신청자에게는 연석으로 제공합니다.</p>
            <p>* 참석 선택 이후 <span>노쇼(No-show)</span> 시 이후 넘버링 티켓 이벤트 참여에 제한을 받을 수 있습니다.</p>
        </div>

        <div class='step2-1' style="display:none">
            <div class="btn-group">
                <button class="btn-option color" onclick="updateStatus('참석')">참석</button>
                <button class="btn-option" onclick="updateStatus('미참석')">미참석</button>
            </div>
        </div>
        <div class='step2-2' style="display:none">
            <div class="btn-group" style="display:block; font-size:20px">
                <span style="font-weight:bold; color:blue">참석</span> 처리 되었습니다.
            </div>
        </div>
        <div class='step2-3' style="display:none">
            <div class="btn-group" style="display:block; font-size:20px">
            <span style="font-weight:bold; color:red">미참석</span> 처리 되었습니다.
            </div>
        </div>
        
    </div>

    <div class='step3' style="display:none">
        <div class="message">이벤트에 당첨되지 않으셨습니다.</div>

        <div class="note" style="text-align:unset;">
            다음 기회에 다시 지원해주세요.
        </div>
    </div>

    

  <script type="text/javascript">
    var ajax_url = "https://www.blackcombat-official.com/theme/blackcombat/shop";
    var token = "";
    var name = "";
    var phone = "";

    function handleSubmit() {
      name = document.getElementById("nameInput").value.trim();
      phone = document.getElementById("phoneInput").value.trim();

      if (!name || !phone) {
        alert("이름과 휴대폰 번호를 모두 입력해주세요.");
        return;
      }

      $.ajax({
            url: ajax_url + "/ajax.action.php",
            type: "POST",
            data: {"action":"search_ticket_event_result", "paramName":name, "paramTel":phone },
            dataType: "json",
            async: true,
            cache: false,
            success: function(data, textStatus) {
                if(data.resultArray.length === 0){
                    $(".step1").css("display","none");
                    $(".step3").css("display","block");
                }else{
                    token = data.token;
                    let targetInfo = data.resultArray[0];
                    $(".content1").text(targetInfo.content1);
                    $(".name").text(name);
                    $(".tel").text(phone);
                    $(".content2").text(targetInfo.content2);

                    if(targetInfo.confirm === "-"){
                        $(".step2-1").css("display","block");
                    }else if(targetInfo.confirm === "참석"){
                        $(".step2-2").css("display","block");
                    }else if(targetInfo.confirm === "미참석"){
                        $(".step2-3").css("display","block");
                    }

                    $(".step1").css("display","none");
                    $(".step2").css("display","block");
                }
               
            },
            error : function(request, status, error){
                console.log(error);
                alert("false ajax :"+request.responseText);
            }
        });
      // 여기에 서버 전송 또는 로직 추가 가능
    }

    function updateStatus(status){
        if(confirm(status+" 처리 하시겠습니까?")){
            $.ajax({
            url: ajax_url + "/ajax.action.php",
            type: "POST",
            data: {"action":"update_event_status", "paramName":name, "paramTel":phone, "confirmYn": status, "token" : token,   },
            dataType: "json",
            async: true,
            cache: false,
            success: function(data, textStatus) {
                alert("처리되었습니다.");
                location.reload();
            },
            error : function(request, status, error){
                console.log(error);
                alert("false ajax :"+request.responseText);
            }
        });
        }
    }
  </script>
</body>
</html>