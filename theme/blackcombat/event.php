<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_MOBILE_PATH.'/head.php');

add_stylesheet('<link rel="stylesheet" href="/theme/blackcombat/css/mobile_event.css?v=20220918">', 0);

$page = !empty($_GET['page']) ? $_GET['page'] : 1;
?>

    <div class="sub_visual">
        <div class="sub_visual_items">
            <div class="sub_visual_caption">
                <div class="category">EVENT</div>
            </div>
        </div>
    </div>
    <div class="sub_content">
        <div class="sub_container">
            <div class="event_page">
                <div class="event_category">
                    <div class="event_category_title_image"><img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/event/event_title.png" /></div>
                    <ul>
                        <li>
                            <a href="<?php echo G5_URL ?>/event.php?page=1" class="<?php echo $page == '1' ? 'active' : ''; ?>">1:&nbsp;WHO IS THE KING?</a>
                        </li>
                        <li>
                            <a href="<?php echo G5_URL ?>/event.php?page=2" class="<?php echo $page == '2' ? 'active' : ''; ?>">2:&nbsp;THE DARK KNIGHT BEGINS</a>
                        </li>
                        <li>
                            <a href="<?php echo G5_URL ?>/event.php?page=3" class="<?php echo $page == '3' ? 'active' : ''; ?>">3:&nbsp;LET THE LION ROAR</a>
                        </li>
                        <li>
                            <a href="<?php echo G5_URL ?>/event.php?page=4" class="<?php echo $page == '4' ? 'active' : ''; ?>">4:&nbsp;THE ERA OF NEW KINGS</a>
                        </li>
                        <li>
                            <a href="<?php echo G5_URL ?>/event.php?page=5" class="<?php echo $page == '5' ? 'active' : ''; ?>">5:&nbsp;칼의노래</a>
                        </li>
                        <li>
                            <a href="<?php echo G5_URL ?>/event.php?page=6" class="<?php echo $page == '6' ? 'active' : ''; ?>">6:&nbsp;THE FINAL CHECKMATE</a>
                        </li>
                        <li>
                            <a href="<?php echo G5_URL ?>/event.php?page=7" class="<?php echo $page == '7' ? 'active' : ''; ?>">7:&nbsp;CIVIL WAR</a>
                        </li>
                        <li>
                            <a href="<?php echo G5_URL ?>/event.php?page=8" class="<?php echo $page == '8' ? 'active' : ''; ?>">8:&nbsp;THE LAST SAMURAI</a>
                        </li>
                        <li>
                            <a href="<?php echo G5_URL ?>/event.php?page=9" class="<?php echo $page == '9' ? 'active' : ''; ?>">9:&nbsp;OLD BOYS</a>
                        </li>
                        <li>
                            <a href="<?php echo G5_URL ?>/event.php?page=10" class="<?php echo $page == '10' ? 'active' : ''; ?>">10:&nbsp;서울의 밤</a>
                        </li>
                    </ul>
                </div>

                <?php if ($page == '1') { ?>

                <div class="event_keyvisual">
                    <img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_1_keyvisual.jpg" />
                </div>

                <div class="event_list">
                    <div class="event_list_items">
                        <div class="event_list_item">
                            <div class="event_list_item_player">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/event/event_1_1.jpg" />
                            </div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/event/event_1_2.jpg?v=20220918" />
                            </div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/event/event_1_3.jpg?v=20220918" />
                            </div>
                        </div>
                    </div>
                </div>

                <?php } else if ($page == '2') { ?>

                <div class="event_keyvisual">
                    <img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_2_keyvisual.jpg" />
                </div>

                <div class="event_list">
                    <div class="event_list_items">
                        <div class="event_list_item">
                            <div class="event_list_item_player">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/event/event_2_1.jpg?v=20220918" />
                            </div>
                            <div class="event_list_item_info">
                                <p>
                                    블랙컴뱃 프로 오디션을 통해 높은 인지도와 수많은 안티팬을 동시에 얻은 ‘빌런의 아이콘’ 바이퍼. 그는 자신의 실력과 스타성을 증명하기 위해 자신과 싸울 악플러를 공개모집하였다.<br />
                                    바이퍼의 도발에 수많은 도전자들이 속출하였고, 그 중에서도 바이퍼의 눈에 띤 강자가 있었다. 그는 바로 엘리트 레슬러 출신이자 파이트클럽 우승후보였던 손지훈.<br />
                                    두 빌런들의 자존심이 걸린 싸움으로 블랙컴뱃2의 위대한 서막이 열린다.
                                </p>
                            </div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/event/event_2_2.jpg?v=20220918" />
                            </div>
                            <div class="event_list_item_info">
                                <p>
                                    ‘정찬성과 싸운 남자’ 소재호는 몇 년전, 자신이 뚝배기 사범을 스파링에서 꺾은 적이 있다며 해당 스파링 영상을 자신의 유튜브 채널에 공개하고 뚝배기 사범을 도발하였다. 뚝배기 사범은 자신의 진짜 실력을 케이지 안에서 보여주겠다며 소재호와의 경기를 흔쾌히 받아들인다. 블랙컴뱃1 대회에서의 쓰라린 패배의 기억을 가지고 있는 두 베테랑 파이터 소재호와 뚝배기 사범 호철. 첫 승리를 거두기 위해 더 이상 잃을 것도, 물러설 곳도 없는 두 노장들의 대결이 시작된다.
                                </p>
                            </div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/event/event_2_3.jpg?v=20220918" />
                            </div>
                            <div class="event_list_item_info">
                                <p>
                                    2년 전, 영타이거에게 패배한 헌터가 매드카우에 이어 이청수 사냥에 나선다. 영타이거가 자신의 절친이자 팀동료인 이청수를 꺾는다면, 2차전을 받아주겠다고 약속했기 때문에 헌터는 반드시 이청수를 꺾어야만 한다. 하지만, 파이트 클럽 최강자 이청수는 헌터를 자기 선에서 정리하겠다며 영타이거를 노리는 헌터의 앞길을 막으려 한다.<br />
                                    이청수는 자신이 패배할 시, 본인의 파이트 머니 전액을 헌터에게 주고, 군입대를 하겠다며 자신감을 내비췄고, 이에 헌터는 자신이 패배할 시 본인의 트레이드 마크인 긴 머리를 자르겠다고 응수했다.<br />
                                    과연 헌터는 이청수를 꺾고 영타이거에게 복수할 기회를 얻을 것인가?  아니면, 이청수의 프로 무대 첫 승이 이뤄질 것인가?
                                </p>
                            </div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/event/event_2_4.jpg?v=20220918" />
                            </div>
                            <div class="event_list_item_info">
                                <p>
                                    격투기 종목을 오랫동안 수련해온 가수 오반은 이번 블랙컴뱃2에서 매드카우를 이기고 자신이 연예계 최강자임을 증명하고자 한다. 하지만 매드카우는 파이트클럽 우승자 출신이자, 프로 전적 1전 1승을 가진 선수이기에 결코 쉽지 않은 상대. 두 명 모두 각자 링네임에 걸맞게 화끈한 경기를 예고해 많은 격투팬들의 이목이 집중되고 있다.<br />
                                    과연 승리의 영광를 차지할 단 한명은 누가 될 것인가? 이제 케이지 문이 닫히고, 사자와 미친소의 혈투가 시작된다.
                                </p>
                            </div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/event/event_2_5.jpg?v=20220918" />
                            </div>
                            <div class="event_list_item_info">
                                <p>
                                    블랙컴뱃 프로 오디션의 ‘슈퍼스타’ 옐로우 몽키와 화끈한 타격을 자랑하는 ‘최상위 포식자’ 영타이거. 두 선수 모두 블랙컴뱃 프로 오디션 최후의 2인에 들지는 못했지만,<br />
                                    최종 우승자들 못지않은 실력과 팬덤을 가졌기에, 둘의 대결은 수많은 격투팬들의 가슴을 설레게 하고 있다. 블랙컴뱃 프로 타이틀전에 더 가까워지기 위해서도<br />
                                    둘 중 하나는 무조건 꺾여야만 하기에 이 경기는 더욱 흥미롭다.  슈퍼스타 vs 라이징 스타’.  블랙컴뱃 프로 오디션을 빛냈던 두 스타들의 대결이 이제 시작된다.
                                </p>
                            </div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/event/event_2_6.jpg?v=20220918" />
                            </div>
                            <div class="event_list_item_info">
                                <p>
                                    프로파이터들의 격투 서바이벌 블랙컴뱃 프로 오디션에서 생존한 최후의 2인 유짓수와 곰주먹. 국내 최연소 블랙벨트와 국내 단체 챔피언 타이틀을 지닌 유짓수는 블랙컴뱃<br />
                                    초대 챔피언 이라는 또 다른 왕관을 쓰려고 한다. 하지만, 상대는 강력한 주먹과 수준 높은 그래플링 실력 으로 모두의 예상을 뒤엎고 최후의 2인에 이름을 올린<br />
                                    숨은 강자, 곰주먹이다. 국내 밴텀급 최강자중 하나로 꼽히는 유짓수와 누구든 한 방에 보낼 수 있는 곰주먹. 과연 누가 블랙컴뱃의 초대 왕으로 등극할 것인가.
                                </p>
                            </div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player">
                                <img src="<?php echo G5_THEME_IMG_URL; ?>/mobile/event/event_2_7.jpg?v=20220918" />
                            </div>
                            <div class="event_list_item_info">
                                <p>
                                    스스로 빌런 역할을 자처하며 블랙컴뱃1과 프로 오디션의 흥행을 성공적으로 이끈 무채색필름 대표 ‘갓파더’ 검정.<br />
                                    이제 검정은 더 이상 빌런이 아닌, 국내 격투계에 새로운 바람을 일으키기 위해 빌런 역할을 감당하는 ‘다크나이트’가 되고자 한다.<br />
                                    하지만 그 전에 반드시 넘어야 할 상대가 있으니, 바로 무에타이 챔피언이자 mma 프로선수 출신인 정도한이다. 정도한은 오로지 검정을 꺾기 위해 블랙컴뱃1에 참가하였고 자신보다 20kg이 무거운 입식 타격 강자 소재호를 상대로 승리를 거둔다. 하지만 여기서 문제가 생긴다. 정도한과 검정은 ‘블랙컴뱃 프로 오디션’에서 팀장으로 대치하였는데,<br />
                                    이때 서로 격렬한 언행을 주고받는 사건이 일어나게 된 것이다. 프로그램 이후에도 둘의 갈등과 마찰은 계속 되었고, 결국 정도한은 6월 18일에 모든 사람들이 보는 앞에서 검정을 압도적인 실력으로 파괴하는 것만이 유일한 방법이라고 판단한다. 그래서 그는 스스로 링네임을 ‘모범시민’에서 ‘조커’로 바꾸고 ‘다크나이트’가 되고자 하는 검정과 마침내 격돌한다.<br />
                                    블랙컴뱃 언더그라운드킹 초대 챔피언의 주인공은 과연 누가 될 것인가. 기나긴 대서사의 끝이 정해진다.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } else if ($page == '3') { ?>

                <div class="event_keyvisual">
                    <img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_3_keyvisual.jpg" />
                </div>

                <div class="event_list">
                    <div class="event_list_items">
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_3_1.jpg?v=20221017_2" /></div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_3_2.jpg?v=20221017_2" /></div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_3_3.jpg?v=20221017_2" /></div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_3_4.jpg?v=20221017_2" /></div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_3_5.jpg?v=20221017_2" /></div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_3_6.jpg?v=20221017_2" /></div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_3_7.jpg?v=20221017_2" /></div>
                        </div>
                    </div>
                </div>

                <?php } else if ($page == '4') { ?>

                <div class="event_keyvisual">
                    <img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_4_keyvisual.jpg" />
                </div>

                <div class="event_list">
                    <div class="event_list_items">
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_4_1.jpg?v=20221017" /></div>
                        </div>
                    </div>
                </div>

                <?php } else if ($page == '5') { ?>

                <div class="event_keyvisual">
                    <img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_5_keyvisual.png" />
                </div>

                <div class="event_list">
                    <div class="event_list_items">
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_5_1.jpg?v=20230303" /></div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_5_2.jpg?v=20230303" /></div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_5_3.jpg?v=20230303" /></div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_5_5.jpeg?v=20230303" /></div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_5_4.jpg?v=20230303" /></div>
                        </div>
                    </div>
                </div>

                <?php } else if ($page == '6') { ?>

                <div class="event_keyvisual">
                    <img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_6_0.png" />
                </div>

                <div class="event_list">
                    <div class="event_list_items">
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_6_1.jpg" /></div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_6_2.jpg" /></div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_6_3.jpg" /></div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_6_5.jpeg" /></div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_6_4.jpg" /></div>
                        </div>
                    </div>
                </div>

                <?php } else if ($page == '7') { ?>

                <div class="event_keyvisual">
                    <img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_7_0.png" />
                </div>

                <div class="event_list">
                    <div class="event_list_items">
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_7_1.png" /></div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_7_2.png" /></div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_7_3.png" /></div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_7_4.png" /></div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_7_5.png" /></div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_7_6.png" /></div>
                        </div>
                    </div>
                </div>

                <?php } else if ($page == '8') { ?>

                <div class="event_keyvisual">
                    <img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_8_0.jpeg" />
                </div>

                <div class="event_list">
                    <div class="event_list_items">
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_8_1.jpeg" /></div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_8_2.jpeg" /></div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_8_3.jpeg" /></div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_8_4.jpeg" /></div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_8_5.jpeg" /></div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_8_6.jpeg" /></div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_8_7.jpeg" /></div>
                        </div>
                        <div class="event_list_item">
                            <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_8_8.jpeg" /></div>
                        </div>
                    </div>
                </div>
                <?php } else if ($page == '9') { ?>
                    <div class="event_keyvisual">
                        <img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_9_0.jpg" />
                    </div>

                    <div class="event_list">
                        <div class="event_list_items">
                            <div class="event_list_item">
                                <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_9_1.jpg" /></div>
                            </div>
                            <div class="event_list_item">
                                <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_9_2.jpg" /></div>
                            </div>
                            <div class="event_list_item">
                                <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_9_3.jpg" /></div>
                            </div>
                            <div class="event_list_item">
                                <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_9_4.jpg" /></div>
                            </div>
                            <div class="event_list_item">
                                <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_9_5.jpg" /></div>
                            </div>
                        </div>
                    </div>

                <?php } else if ($page == '10') { ?>
                    <div class="event_keyvisual">
                        <img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_10_1.jpg" />
                    </div>

                    <div class="event_list">
                        <div class="event_list_items">
                            <div class="event_list_item">
                                <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_10_2.jpg" /></div>
                            </div>
                            <div class="event_list_item">
                                <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_10_3.jpg" /></div>
                            </div>
                            <div class="event_list_item">
                                <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_10_4.jpg" /></div>
                            </div>
                            <div class="event_list_item">
                                <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_10_5.jpg" /></div>
                            </div>
                            <div class="event_list_item">
                                <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_10_6.jpg" /></div>
                            </div>
                            <div class="event_list_item">
                                <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_10_7.jpg" /></div>
                            </div>
                            <div class="event_list_item">
                                <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_10_8.jpg" /></div>
                            </div>
                            <div class="event_list_item">
                                <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_10_9.jpg" /></div>
                            </div>
                            <div class="event_list_item">
                                <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_10_10.jpg" /></div>
                            </div>
                            <div class="event_list_item">
                                <div class="event_list_item_player"><img src="<?php echo G5_THEME_IMG_URL; ?>/event/event_10_11.jpg" /></div>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
    </div>

<?php
include_once(G5_THEME_PATH.'/tail.php');