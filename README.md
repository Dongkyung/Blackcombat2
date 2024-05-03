## 대회 개최하는방법
1. 상품관리 (https://www.blackcombat-official.com/adm/shop_admin/itemlist.php) 에서 기존 대회를 하나 복사한다.
2. 새 대회 수정에 들어가서 이미지 등록 및 상풉옵션을 기입한다. (기존에 작성되어있는거 보고 눈치껏 작성)
3. theme\blackcombat\shop\seatChoice.php 파일에서 MUST CHECK .1 , 2, 3 을 찾아서 조치해준다.
4. theme\blackcombat\shop\ajax.action.php 파일에서 `it_id` =  으로 검색해보고 뒤에있는 대회번호를 새 대회번호로 모두 바꿔준다.
5. theme\blackcombat\shop\seatChoice.php 에서 좌석표 그린다