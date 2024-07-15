<?
define('_CHK_', true);
/* require_once $_SERVER["DOCUMENT_ROOT"]."/../common/bootstrap.php"; */
include $_SERVER['DOCUMENT_ROOT'] . "/responsive/JJinTrip/inc/head.php";
?>

<div class="top_btn">
        <img src="/responsive/JJinTrip/img/top_button.png">
    </div><!-- //탑버튼 -->

    <header class="pc_header">
        <div class="inner">
            <div class="toplogo">
                <a href="http://jldylee.dothome.co.kr/responsive/JJinTrip/">
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
                    <a href="/responsive/JJinTrip/pages/login.php" class="login" style="">로그인</a>
                    <a href="/responsive/JJinTrip/pages/mypage/" class="mypage" style="display: none">마이페이지</a>
                    <a href="/responsive/JJinTrip/pages/mypage/wish_list.php" class="wishList" style="">위시리스트</a>
                    <a href="#" class="noticeBox" style="display: none">알림함</a>
                    <button class="joinBtn" onclick="location.href='/responsive/JJinTrip/pages/join.php'">회원가입</button>
                </div>
            </div>

            <nav>
                <ul class="navList inner">

                <?php
                $tab_number = isset($_GET['tab_number'])?$_GET['tab_number']:1;
                ?>
                    <li class="<?=$tab_number==1?"active":""?>" onclick="location.href='/responsive/JJinTrip/pages/menu01/index.php?tab_number=1'">
                        <img src="/responsive/JJinTrip/img/menuList_1_2.svg" class="w22">
                        <span>투어</span>
                    </li>
                    <li class="<?=$tab_number==2?"active":""?>" onclick="location.href='/responsive/JJinTrip/pages/menu02/index.php?tab_number=2'">
                        <img src="/responsive/JJinTrip/img/menuList_2_2.svg" class="w28">
                        <span>티켓&입장권</span>
                    </li>
                    <li class="<?=$tab_number==3?"active":""?>" onclick="location.href='/responsive/JJinTrip/pages/menu03/index.php?tab_number=3'">
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
                <a href="http://jldylee.dothome.co.kr/responsive/JJinTrip/">
                    <img src="/responsive/JJinTrip/img/JJinTrip_logo.png" alt="찐트립 로고">
                </a>
            </h1>

            <div class="right">
                <div class="bar_menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <nav>
                <ul class="navList">
                    <li>
                        <a href="/responsive/JJinTrip/pages/menu01/">투어</a>
                    </li>
                    <li>
                        <a href="/responsive/JJinTrip/pages/menu02/">티켓&입장권</a>
                    </li>
                    <li>
                        <a href="/responsive/JJinTrip/pages/menu03/">차량</a>
                    </li>
                    <div class="gradient">
                        <div></div>
                    </div>
                </ul>
            </nav>
        </div>

        <div class="mb_right_menu">
            <div>
                <div class="top padb20">
                    <div class="profile padb20">
                        <div class="pfImg">
                            <img src="/responsive/JJinTrip//responsive/JJinTrip/img/profile_image.png" alt="프로필이미지">
                        </div>
                        <div class="pfName">
                            <span class="nickName">댕구댕구댕</span>
                            <a href="/responsive/JJinTrip/pages/mypage/" class="blue">마이페이지</a>
                        </div>
                    </div>
                    <div class="have">
                        <div class="point" onclick="location.href='/responsive/JJinTrip/pages/mypage/myPoint.php'">
                            포인트
                            <span class="blue">0원</span>
                        </div>
                        <div class="coupon" onclick="location.href='/responsive/JJinTrip/pages/mypage/myCoupon.php'">
                            쿠폰
                            <span class="blue">1장</span>
                        </div>
                    </div>
                </div>
                <div class="middle">
                    <ul class="padb20">
                        <li>
                            <img src="/responsive/JJinTrip/img/ico_search.svg" class="w24">
                            <span class="marl5">전체 여행지</span>
                        </li>
                    </ul>
                    <ul class="padtb20">
                        <li>
                            <img src="/responsive/JJinTrip/img/ico_search.svg" class="w24">
                            <span class="marl5">위시리스트</span>
                        </li>
                        <li>
                            <img src="/responsive/JJinTrip/img/ico_search.svg" class="w24">
                            <span class="marl5">내 여행</span>
                        </li>
                        <li>
                            <img src="/responsive/JJinTrip/img/ico_search.svg" class="w24">
                            <span class="marl5">알림</span>
                        </li>
                    </ul>
                    <ul class="padtb20">
                        <li>
                            <img src="/responsive/JJinTrip/img/ico_search.svg" class="w24">
                            <span class="marl5">1:1 채팅 상담</span>
                        </li>
                    </ul>
                </div>
                <div class="bottom">
                    <span class="logout">로그아웃</span>
                </div>
            </div>
        </div><!-- //모바일 오른쪽메뉴 -->
    </header><!-- //모바일 header -->




    
<script>
    /* 모바일 header (메인) */
    $(window).scroll(function () {
        var $scrollTop = $(this).scrollTop();
        //console.log($scrollTop);

        //nav 나타나게
        if ($scrollTop > 1) {
            $('.mb_header nav').css({'top':'100%','opacity':'1'});
        } else {
            $('.mb_header nav').css({'top':'0','opacity':'0','pointer-events':'none'});
        }
    });

</script>