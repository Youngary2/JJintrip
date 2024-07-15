<?
define('_CHK_', true);
/* require_once $_SERVER["DOCUMENT_ROOT"]."/../common/bootstrap.php"; */
include $_SERVER['DOCUMENT_ROOT'] . "/responsive/JJinTrip/inc/head.php";
?>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" type="text/css" href="/responsive/JJinTrip/css/sub.css">
<link rel="stylesheet" type="text/css" href="/responsive/JJinTrip/css/menu/menu.css">
<link rel="stylesheet" type="text/css" href="/responsive/JJinTrip/css/menu/menu01.css">
</head>


<style>
    .more_wrap{
        margin-top: 127px;
    }
    .cont2_slick{
        display:flex;
        flex-wrap: wrap;
    }
    .cont2_slick .card{
        margin-right: 2%;
        width: 23.5%;
    }
    .cont2_slick .card:nth-child(4n){
        margin-right: 0;
    }





    /* ===============================================================================================================반응형===============================
    =========================================================================== */
    @media(max-width:768px){
        .cont2_slick .card{
            width: 49%;
        }
        .cont2_slick .card:nth-child(2n) {
            margin-right: 0;
        }
    }

</style>


<body>
    <div class="more_wrap">
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
                    <img src="/responsive/JJinTrip/img/ico_location.png" alt="">
                    <span class="marl7 yg-jalnan">방콕</span>
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
                                <span class="blue">0원</span>
                            </div>
                            <div class="coupon">
                                쿠폰
                                <span class="blue">1장</span>
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



        <div class="cont cont2">
                            <div class="inner main_cont">
                                <h3 class="tit">인기 투어</h3>

                                <div class="cont2_slick_wrap">
                                    <div class="cont2_slick">
                                        <div class="card">
                                            <a href="/responsive/JJinTrip/pages/menu01/detail.php">
                                                <div class="top">
                                                    <img src="/responsive/JJinTrip/img/w800.jpg" alt="사진">
                                                </div>
                                                <div class="middle">
                                                    <span>제주패스 워케이션 성산 1스팟 7박 COMPACT JEJU 플레이스캠프</span>
                                                    <span>부가설명 들어가는 자리</span>
                                                </div>
                                                <div class="bottom">
                                                    <span>20%</span>
                                                    <span>62,400<em>원</em> 
                                                        </span>
                                                </div>
                                            </a>
                                        </div><!-- //card -->
                    
                                        <div class="card">
                                            <a href="javascript:;">
                                                <div class="top">
                                                    <img src="/responsive/JJinTrip/img/w800.jpg" alt="사진">
                                                </div>
                                                <div class="middle">
                                                    <span>한주영 가이드와 8일간의 프랑스 여행 #유럽여행#유럽패키지#몽생미셸한주영 가이드와 8일간의 프랑스 여행 #유럽여행#유럽패키지#몽생미셸</span>
                                                    <span>Alice Heart Pearl Necklace</span>
                                                </div>
                                                <div class="bottom">
                                                    <span>20%</span>
                                                    <span>62,400<em>원</em> 
                                                        </span>
                                                </div>
                                            </a>
                                        </div><!-- //card -->

                                        <div class="card">
                                            <a href="javascript:;">
                                                <div class="top">
                                                    <img src="/responsive/JJinTrip/img/w800.jpg" alt="사진">
                                                </div>
                                                <div class="middle">
                                                    <span>방콕 씨라이프 오션월드 입장권</span>
                                                    <span>Alice Heart Pearl Necklace</span>
                                                </div>
                                                <div class="bottom">
                                                    <span>20%</span>
                                                    <span>62,400<em>원</em> 
                                                        </span>
                                                </div>
                                            </a>
                                        </div><!-- //card -->

                                        <div class="card">
                                            <a href="javascript:;">
                                                <div class="top">
                                                    <img src="/responsive/JJinTrip/img/w800.jpg" alt="사진">
                                                </div>
                                                <div class="middle">
                                                    <span>방콕 씨라이프 오션월드 입장권</span>
                                                    <span>Alice Heart Pearl Necklace</span>
                                                </div>
                                                <div class="bottom">
                                                    <span>20%</span>
                                                    <span>62,400<em>원</em> 
                                                        </span>
                                                </div>
                                            </a>
                                        </div><!-- //card -->

                                        <div class="card">
                                            <a href="javascript:;">
                                                <div class="top">
                                                    <img src="/responsive/JJinTrip/img/w800.jpg" alt="사진">
                                                </div>
                                                <div class="middle">
                                                    <span>방콕 씨라이프 오션월드 입장권</span>
                                                    <span>부가설명 들어가는 자리</span>
                                                </div>
                                                <div class="bottom">
                                                    <span>20%</span>
                                                    <span>62,400<em>원</em> 
                                                        </span>
                                                </div>
                                            </a>
                                        </div><!-- //card -->

                                        <div class="card">
                                            <a href="javascript:;">
                                                <div class="top">
                                                    <img src="/responsive/JJinTrip/img/w800.jpg" alt="사진">
                                                </div>
                                                <div class="middle">
                                                    <span>방콕 씨라이프 오션월드 입장권</span>
                                                    <span>부가설명 들어가는 자리</span>
                                                </div>
                                                <div class="bottom">
                                                    <span>20%</span>
                                                    <span>62,400<em>원</em> 
                                                        </span>
                                                </div>
                                            </a>
                                        </div><!-- //card -->
                                    </div><!-- //cont2_slick -->
                                </div>
                            </div>
        </div><!-- //cont2 -->
    </div>












</body>
</html>