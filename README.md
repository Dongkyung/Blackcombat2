## 대회 개최하는방법
1. 상품관리 (https://www.blackcombat-official.com/adm/shop_admin/itemlist.php) 에서 기존 대회를 하나 복사한다.
2. 새 대회 수정에 들어가서 이미지 등록 및 상풉옵션을 기입한다. (기존에 작성되어있는거 보고 눈치껏 작성)
3. theme/blackcombat/shop/seatChoiceVersion 폴더에서 해당 넘버링 script와 seatChoic_nXX를 만들고 이전 대회꺼 복사한다.
4. commonSeatChoice.php에서 해당 seatChoice와 script를 연동해준다
5. script_nXX 파일에서 MUST CHECK .1 , 2, 3 을 찾아서 조치해준다.
6. theme\blackcombat\shop\ajax.action.php 파일에서 최상단에 $it_id_for_seat 변수에다가 현재 대회ID를 입력한다.
7. theme\blackcombat\shop\seatChoiceVersion\에서 방금 만든 파일에다가 좌석표 그린다