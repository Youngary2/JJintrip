<?
define('_CHK_', true);
/* require_once $_SERVER["DOCUMENT_ROOT"]."/../common/bootstrap.php"; */
include $_SERVER['DOCUMENT_ROOT'] . "/responsive/JJinTrip/inc/head.php";
?>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">


<link rel="stylesheet" type="text/css" href="/responsive/JJinTrip/css/sub.css">
<link rel="stylesheet" type="text/css" href="/responsive/JJinTrip/css/mypage/myCoupon.css">
</head>


<body>
    <div class="top_btn">
        <img src="/responsive/JJinTrip/img/top_button.png">
    </div><!-- //탑버튼 -->

    <header class="pc_header">
                <div class="inner">
                    <div class="toplogo">
                        <a href="#">
                            <img src="/responsive/JJinTrip/img/JJinTrip_logo.png" alt="찐트립 로고">
                        </a>
                    </div>

                    <div class="search_wrap">
                        <div class="search">
                            <button type="button" class="btSearch"></button>
                            <input type="text" placeholder="맛집을 검색하세요." title="맛집을 검색하세요.">
                        </div>
                    </div>

                    <div class="right">
                        <div class="topUtil">
                            <a href="#" class="logout" style="display: none">로그아웃</a>
                            <a href="#" class="login" style="">로그인</a>
                            <a href="#" class="mypage" style="display: none">마이페이지</a>
                            <a href="#" class="order" style="">주문조회</a>
                            <a href="#" class="noticeBox" style="display: none">알림함</a>
                            <button class="joinBtn" onclick="location.href='/responsive/JJinTrip/pages/join.php'">회원가입</button>
                        </div>
                    </div>

                    <nav>
                        <ul class="navList inner">
                            <li onclick="location.href='/responsive/JJinTrip/pages/menu01/'">
                                <img src="/responsive/JJinTrip/img/menuList_1_2.svg" class="w22">
                                <span>투어</span>
                            </li>
                            <li onclick="location.href='/responsive/JJinTrip/pages/menu02/'">
                                <img src="/responsive/JJinTrip/img/menuList_2_2.svg" class="w28">
                                <span>티켓&입장권</span>
                            </li>
                            <li onclick="location.href='/responsive/JJinTrip/pages/menu03/'">
                                <img src="/responsive/JJinTrip/img/menuList_4_2.svg" class="w33">
                                <span>차량</span>
                            </li>
                            <div class="gradient">
                                <div></div>
                            </div>
                        </ul>
                    </nav><!-- //nav -->
                </div>
    </header><!-- pc header -->

    <header class="mb_header">
                <div class="inner">
                    <div class="left">
                        <!-- <img src="/responsive/JJinTrip/img/ico_location.png" alt="">
                        <span class="marl7 yg-jalnan">방콕</span> -->
                        <div class="mb_prevBtn">
                            <a onclick="history.back();">
                                <i class="fa-solid fa-angle-left"></i>
                            </a>
                        </div><!-- //뒤로가기 -->
                    </div>

                    <h1 class="toplogo">
                        <a href="#">
                            <img src="/responsive/JJinTrip/img/JJinTrip_logo.png" alt="찐트립 로고">
                        </a>
                    </h1>

                    <div class="right">
                        <div class="bar_menu on">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <nav>
                        <ul class="navList">
                            <li>
                                <a href="#">투어</a>
                            </li>
                            <li>
                                <a href="#">티켓&입장권</a>
                            </li>
                            <li>
                                <a href="#">차량</a>
                            </li>
                            <div class="gradient">
                                <div></div>
                            </div>
                        </ul>
                    </nav>

                    <div class="mb_right_menu">
                    <div>
                        <div class="top padb20">
                            <div class="profile padb20">
                                <div class="pfImg">
                                    <img src="/responsive/JJinTrip/img/ex_main_banner.jpg" alt="프로필이미지">
                                </div>
                                <div class="pfName">
                                    <span class="nickName">댕구댕구댕</span>
                                    <a href="#" class=" blue">프로필 관리</a>
                                </div>
                            </div>
                            <div class="have">
                                <div class="point">
                                    포인트
                                    <span class="blue" onclick="location.href='/responsive/JJinTrip/pages/mypage/myPoint.php'">0원</span>
                                </div>
                                <div class="coupon">
                                    쿠폰
                                    <span class="blue" onclick="location.href='/responsive/JJinTrip/pages/mypage/myCoupon.php'">1장</span>
                                </div>
                            </div>
                        </div>
                        <div class="middle">
                            <ul class="padb20">
                                <li>
                                    <img src="img/ico_search.svg" class="w24">
                                    <span class="marl5">전체 여행지</span>
                                </li>
                            </ul>
                            <ul class="padtb20">
                                <li>
                                    <img src="img/ico_search.svg" class="w24">
                                    <span class="marl5">위시리스트</span>
                                </li>
                                <li>
                                    <img src="img/ico_search.svg" class="w24">
                                    <span class="marl5">내 여행</span>
                                </li>
                                <li>
                                    <img src="img/ico_search.svg" class="w24">
                                    <span class="marl5">알림</span>
                                </li>
                            </ul>
                            <ul class="padtb20">
                                <li>
                                    <img src="img/ico_search.svg" class="w24">
                                    <span class="marl5">1:1 채팅 상담</span>
                                </li>
                            </ul>
                        </div>
                        <div class="bottom">
                            <span class="logout">로그아웃</span>
                        </div>
                    </div>
                </div><!-- //모바일 오른쪽메뉴 -->
                </div>
    </header><!-- //모바일 header -->

    <div class="myPoint_wrap">
        <div class="inner">
            <div class="Box_left">
                <h3 class="tit">내 쿠폰</h3>
                <div class="left_01">
                    <div class="profile_photo">
                        <img src="/responsive/JJinTrip/img/profile_image.png" alt="프로필 이미지">
                    </div>
                    <p id="nickname" class="nick mart10 marb20">댕구댕구</p>
                    <span class="pfSet cursor"><img class="w16 vta-3" src="/responsive/JJinTrip/img/ico_set.png" alt="프로필 수정"> 프로필 수정</span>
                </div>
                <div class="left_02">
                    <div class="myPoint marb10">
                        <span class="ltit">내 포인트</span>
                        <span class="rtxt orange cursor" onclick="location.href='/responsive/JJinTrip/pages/mypage/myPoint.php'">0원 <i class="orange fa-solid fa-angle-right"></i></span>
                    </div>
                    <div class="myCoupon">
                        <span class="ltit">내 쿠폰</span>
                        <span class="rtxt orange cursor" onclick="location.href='/responsive/JJinTrip/pages/mypage/myCoupon.php'">0원 <i class="orange fa-solid fa-angle-right"></i></span>
                    </div>
                </div>
                <div class="left_03">
                    <img class="w30" src="/responsive/JJinTrip/img/bag.svg" alt="선물하기"> 친구 초대하고<span class="orange">3,000P 받기!</span>
                </div>
            </div><!-- //Box_left -->

            <div class="Box_right">
                <div class="pointNow marb20">
                    <div class="usable">
                        <p class="marb16">사용가능한 쿠폰</p>
                        <div class="couponWrap">
                            <div>
                                <div class="cardWrap">
                                    <div class="card cardLeft ver1">
                                        <p class="coupon_title">COUPON</p>
                                        <p class="desc">5,000원 이상 구매시</p>
                                        <p class="sale">10%</p>
                                        <p class="desc">5,000원 이상 구매시/최대 10,000원 할인</p>
                                    </div>
                                    <div class="card cardRight">
                                        <p>SALE COUPON</p>
                                        <img src="/responsive/JJinTrip/img/barcode.png">
                                    </div>
                                </div>
                                <div class="cardWrap">
                                    <div class="card cardLeft ver1">
                                        <p class="coupon_title">COUPON</p>
                                        <p class="desc">5,000원 이상 구매시</p>
                                        <p class="sale">10%</p>
                                        <p class="desc">5,000원 이상 구매시/최대 10,000원 할인</p>
                                    </div>
                                    <div class="card cardRight">
                                        <p>SALE COUPON</p>
                                        <img src="/responsive/JJinTrip/img/barcode.png">
                                    </div>
                                </div>
                                <div class="cardWrap">
                                    <div class="card cardLeft ver1">
                                        <p class="coupon_title">COUPON</p>
                                        <p class="desc">5,000원 이상 구매시</p>
                                        <p class="sale">10%</p>
                                        <p class="desc">5,000원 이상 구매시/최대 10,000원 할인</p>
                                    </div>
                                    <div class="card cardRight">
                                        <p>SALE COUPON</p>
                                        <img src="/responsive/JJinTrip/img/barcode.png">
                                    </div>
                                </div>
                            </div>
                        </div><!-- //couponWrap -->
                    </div><!-- //사용가능한 쿠폰 -->

                    <div class="disapear">
                        <p class="marb16">사용한 쿠폰</p>
                        <div class="couponWrap">
                            <div>
                                <div class="cardWrap">
                                    <div class="card cardLeft ver1">
                                        <p class="coupon_title">COUPON</p>
                                        <p class="desc">5,000원 이상 구매시</p>
                                        <p class="sale">10%</p>
                                        <p class="desc">5,000원 이상 구매시/최대 10,000원 할인</p>
                                    </div>
                                    <div class="card cardRight">
                                        <p>SALE COUPON</p>
                                        <img src="/responsive/JJinTrip/img/barcode.png">
                                    </div>
                                </div>
                                <div class="cardWrap">
                                    <div class="card cardLeft ver1">
                                        <p class="coupon_title">COUPON</p>
                                        <p class="desc">5,000원 이상 구매시</p>
                                        <p class="sale">10%</p>
                                        <p class="desc">5,000원 이상 구매시/최대 10,000원 할인</p>
                                    </div>
                                    <div class="card cardRight">
                                        <p>SALE COUPON</p>
                                        <img src="/responsive/JJinTrip/img/barcode.png">
                                    </div>
                                </div>
                            </div>
                        </div><!-- //couponWrap -->
                    </div><!-- //사용한 쿠폰 -->
                </div>
                <!-- <ul class="descBox">
                    <li class="star"> 포인트 설명설명 들어가는 자리 포인트 설명 들어가는 자리.</li>
                    <li class="star"> 포인트 설명 들어가는 자리 포인트 설명 들어가는 자리.</li>
                    <li class="star"> 포인트 설명 들어가는 자리 포인트 설명 설명설명설명 들어가는 자리.</li>
                    <li class="star"> 포인트 설명 들어가는 자리 포인트 설명 들어가는 자리.</li>
                </ul> -->
                <label for="member_name" class="block mart50 marb10">쿠폰 등록</label>
                <div class="right_box">
                    <input type="text" id="member_coupon" class="w_60 couponCodeInput" title="쿠폰코드를 입력하세요" placeholder="쿠폰 코드를 입력하세요.">
                    <button class="inputButton">등록</button>
                </div>
            </div><!-- //Box_right -->
        </div>
    </div>





    <div class="footer">
        <div class="inner">
            <div class="foot_top">
                <ul>
                    <li><a href="#">회사소개</a></li>
                    <li><a href="#"><strong>개인정보처리방침</strong></a></li>
                    <li><a href="#">이용약관</a></li>
                    <!-- <li><a href="#">스위트 팩토리</a></li> -->
                </ul>
                <ul>
                    <li><a href="#">공지사항</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">비회원문의</a></li>
                    <li><a href="#" class="afterN">대량구매문의</a></li>
                    <!-- <select name="familySite" title="패밀리사이트" class="familySite">
                        <option value="FAMILY SITE">FAMILY SITE</option>
                        <option value="롯데그룹">롯데그룹</option>
                        <option value="롯데제과">롯데제과</option>
                        <option value="나뚜루">-나뚜루</option>
                        <option value="헬스원">-헬스원</option>
                        <option value="롯데칠성음료">롯데칠성음료</option>
                        <option value="롯데칠성몰">-롯데칠성몰</option>
                        <option value="롯데푸드">롯데푸드</option>
                        <option value="파스퇴르몰">-파스퇴르몰</option>
                        <option value="롯데중앙연구소">롯데중앙연구소</option>
                        <option value="LPOINT">LPOINT</option>
                    </select> -->
                </ul>
            </div><!-- //foot_top -->

            <div class="foot_bottom">
                <p>짠트립의 모든 콘텐츠는 저작권의 보호를 받고 있습니다.</p>
                <div class="info">
                    롯데제과㈜ | 주소 : 서울특별시 영등포구 양평로21길 10 (양평동5가) 롯데제과 | 대표이사 : 이영구 | 대표번호 : 1522-0071  평일 : 10:00 – 17:00 (주말, 공휴일 휴무)<br>
                    사업자등록번호 : 186-81-00924 <a href="#">사업자정보확인</a> | 통신판매업 신고번호 : 2017-서울영등포-1471호<br>개인정보관리 책임자 : 배성우
                </div>

                <ul class="mobile_info">
                    <li>롯데제과㈜ | 대표이사 : 이영구</li>
                    <li>주소 : 서울특별시 영등포구 양평로21길 10 (양평동5가) 롯데제과</li>
                    <li>대표번호 : 1522-0071</li>
                    <li>평일 : 10:00 – 17:00 (주말, 공휴일 휴무)</li>
                    <li>통신판매업신고 : 2017-서울영등포-1471호</li>
                    <li>개인정보관리 책임자 : 배성우</li>
                </ul><!-- ★모바일 인포 -->

                <ul class="sns_btn">
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
                <span>KCP 구매안전서비스</span>
                <em style="font-style: normal;">고객님은 안전거래를 위해 현금 등으로 결제시 저희 쇼핑몰에서 가입한 구매안전 (에스크로) 서비스를 이용하실 수 있습니다.</em>
                <div class="copyright">
                    Copyright ⓒ JJinTrip All rights reserved. 
                </div>

            </div><!-- //foot_bottom -->
        </div><!-- //container -->
    </div><!-- //footer -->

</body>

<script>
    $(function () {
        /* 토글버튼 */
        $(document).on('click', '.btn_toggle', function () {
            $(this).toggleClass('active');
        });
        
    });
</script>

</html>