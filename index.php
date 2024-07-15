<?
define('_CHK_', true);
/* require_once $_SERVER["DOCUMENT_ROOT"]."/../common/bootstrap.php"; */
include $_SERVER['DOCUMENT_ROOT'] . "/responsive/JJinTrip/inc/head.php";
?>


<link rel="stylesheet" type="text/css" href="/responsive/JJinTrip/css/main.css">
<script src="/responsive/JJinTrip/js/main.js"></script>


</head>



<style>
    body,html{background: #f7f7f7;}

    /* header - nav 일단 안보이게 (메인)1 */
    .mb_header nav{
        top: 0;
        opacity: 0;
    }
</style>




<body>
    <!-- header -->
    <? include $_SERVER['DOCUMENT_ROOT'] . "/responsive/JJinTrip/inc/header.php"; ?>
    

    <div class="main">
        <div class="mb_main_search_area padt20 bg_white">
            <div class="inner">
                <div class="search">
                    <button type="button" class="btSearch"></button>
                    <input type="text" placeholder="맛집을 검색하세요." title="맛집을 검색하세요.">
                </div>
                <div class="cart marl10 w24">
                    <img src="img/cart.svg" alt="">
                </div>
            </div>
        </div><!-- //모바일 검색창 -->

        <div class="myInfo padt20 bg_white">
            <div class="inner ">
                <div class="left marr20">
                    <div class="profile">
                        <img src="img/ico_mypage_main.png" alt="프로필 사진">
                    </div>
                </div>
                <div class="right">
                    <div class="top">
                        <span class="nickName yg-jalnan">짠투어</span>
                        <span class="mtPoint yg-jalnan marl10">
                            포인트 <span class="orange">10,000 P</span>
                        </span>
                    </div>
                    <div class="bottom mart10">
                        <span class="yg-jalnan reserved marr10">예약내역</span>
                        <span class="yg-jalnan kakaoAsk">카카오톡 1:1 문의</span>
                    </div>
                </div>
            </div>
        </div><!-- //내정보 -->

        <ul class="menuList padt20 bg_white">
            <li onclick="location.href='/responsive/JJinTrip/pages/menu01/'">
                <div class="icon">
                    <img src="img/menuList_1_2.svg">
                </div>
                <span>투어</span>
            </li>
            <li onclick="location.href='/responsive/JJinTrip/pages/menu02/'">
                <div class="icon">
                    <img src="img/menuList_2_2.svg">
                </div>
                <span>티켓 & 입장권</span>
            </li>
            <!-- <li>
                <div class="icon">
                    <img src="img/menuList_3.png">
                </div>
                <span>골프</span>
            </li> -->
            <li onclick="location.href='/responsive/JJinTrip/pages/menu03/'">
                <div class="icon">
                    <img src="img/menuList_4_2.svg">
                </div>
                <span>차량</span>
            </li>
            <!-- <li>
                <div class="icon">
                    <img src="img/menuList_5.png">
                </div>
                <span>모텔</span>
            </li>
            <li>
                <div class="icon">
                    <img src="img/menuList_6.png">
                </div>
                <span>모텔</span>
            </li>
            <li>
                <div class="icon">
                    <img src="img/menuList_7.png">
                </div>
                <span>모텔</span>
            </li>
            <li>
                <div class="icon">
                    <img src="img/menuList_8.png">
                </div>
                <span>모텔</span>
            </li> -->
        </ul><!-- //모바일 카테고리 메뉴 -->

        <div class="main_bannerWrap bg_white padt20">
            <ul class="main_banner inner">
                <li>
                    <img src="img/ex_banner01.png">
                </li>
                <li>
                    <img src="img/ex_banner01.png">
                </li>
                <li>
                    <img src="img/ex_banner01.png">
                </li>
                <li>
                    <img src="img/ex_banner01.png">
                </li>
            </ul>
        </div><!-- //메인배너 -->

        <div class="cont cont6">
            <div class="inner main_cont">
                <h3 class="tit in_block">찐할인 <img src="img/ico_discount.svg" class="w22 vta-3"></h3>
                <ul>
                    <li onclick="location.href='/responsive/JJinTrip/pages/mypage/myCoupon.php'">
                        <img src="img/ico_coupon.svg" alt="쿠폰" class="w26 marr6">
                        <span>쿠폰</span>
                    </li> 
                    <li onclick="location.href='#'">
                        <img src="img/ico_promotion.svg" alt="프로모션" class="w26 marr6">
                        <span>프로모션</span>
                    </li> 
                    <li onclick="location.href='#'">
                        <img src="img/ico_event.svg" alt="이벤트" class="w26 marr6">
                        <span>이벤트</span>
                    </li> 
                </ul>
            </div>
        </div><!-- //cont6 -->

        <div class="cont cont4">
            <div class="inner main_cont">
                <h3 class="tit">최근 본 액티비티</h3>
                <span class="moreSee" onclick="location.href='/responsive/JJinTrip/pages/menu01/more.php'">더보기 <i class="fa-solid fa-angle-right"></i></span>

                <div class="cont4_slick_wrap">
                    <div class="cont4_slick">
                        <div class="card">
                            <a href="/responsive/JJinTrip/pages/menu01/detail.php">
                                <div class="top">
                                    <img src="img/w800.jpg" alt="사진">
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
                                    <img src="img/w800.jpg" alt="사진">
                                </div>
                                <div class="middle">
                                    <span>방콕방콕 씨라이프 오션션션션월드 입장권 방콕방콕 씨라이프 오션션션션월드 입장권</span>
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
                                    <img src="img/w800.jpg" alt="사진">
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
                                    <img src="img/w800.jpg" alt="사진">
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
                                    <img src="img/w800.jpg" alt="사진">
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
                                    <img src="img/w800.jpg" alt="사진">
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
                    </div><!-- //cont4_slick -->
                </div>
            </div>
        </div><!-- //cont4 -->

        <div class="cont cont5">
            <div class="inner main_cont">
                <h3 class="tit">찐영상<img src="img/ico_gginVideo.svg" class="w20 vta-1 marl8"></h3>
                <span class="moreSee">전체보기 <i class="fa-solid fa-angle-right"></i></span>

                <div class="cont4_slick_wrap">
                    <div class="cont5_slick">
                        <div class="card">
                            <a href="javascript:;">
                                <div class="mainWrap">
                                    <div class="video_wrap">
                                        <video src="https://cdn.sauceflex.com/streams/20220926/lkyanolja-9c8e8d51ccf94144add788b6ce585474/38431b2e022146599a9e8e3f38d69c24_preview_VOD.mp4" preload="auto" loop="" playsinline="" webkit-playsinline="" x5-playsinline="" autoplay=""></video>
                                    </div><!-- //비디오 -->

                                    <div class="desc_wrap">
                                        <div class="top">
                                            <div class="viewNumWrap">
                                                <i class="fa-solid fa-play"></i>
                                                <span class="viewNum">3.4천</span>
                                            </div>
                                            <div class="duration">01:02:36</div>
                                        </div>
                                        <div class="bottom">
                                            <div class="category">호텔</div>
                                            <div class="title">[제주 신화월드] 신화관/랜딩관 최대 78% 할인 신화관/랜딩관 최대[제주 신화월드] 신화관/랜딩관 최대 78% 할인 신화관/랜딩관 최대</div>
                                        </div>
                                    </div><!-- //텍스트 -->
                                </div><!-- //mainWrap -->

                                <div class="bcardWrap">
                                    <div class="item_img">
                                        <img src="img/w800.jpg" alt="상품 이미지">
                                    </div>
                                    <div class="item_rightDesc">
                                        <div class="item_tit">
                                            파타야 / 빅아이 쇼 픽업포함 특가 파타야 / 빅아이 쇼 픽업포함 특가
                                            파타야 / 빅아이 쇼 픽업포함 특가
                                        </div>
                                        <div class="item_desc">
                                            <span class="primary">54%</span>
                                            <span class="price">248,300<em>원</em></span>
                                        </div>
                                    </div>
                                </div><!-- //bcardWrap -->
                            </a>
                        </div>

                        <div class="card">
                            <a href="javascript:;">
                                <div class="mainWrap">
                                    <div class="video_wrap">
                                        <video src="https://cdn.sauceflex.com/streams/20220926/lkyanolja-9c8e8d51ccf94144add788b6ce585474/38431b2e022146599a9e8e3f38d69c24_preview_VOD.mp4" preload="auto" loop="" playsinline="" webkit-playsinline="" x5-playsinline="" autoplay=""></video>
                                    </div><!-- //비디오 -->

                                    <div class="desc_wrap">
                                        <div class="top">
                                            <div class="viewNumWrap">
                                                <i class="fa-solid fa-play"></i>
                                                <span class="viewNum">3.4천</span>
                                            </div>
                                            <div class="duration">01:02:36</div>
                                        </div>
                                        <div class="bottom">
                                            <div class="category">호텔</div>
                                            <div class="title">[제주 신화월드] 신화관/랜딩관 최대 78% 할인 신화관/랜딩관 최대</div>
                                        </div>
                                    </div><!-- //텍스트 -->
                                </div><!-- //mainWrap -->

                                <div class="bcardWrap">
                                    <div class="item_img">
                                        <img src="img/w800.jpg" alt="상품 이미지">
                                    </div>
                                    <div class="item_rightDesc">
                                        <div class="item_tit">
                                            파타야 / 빅아이 쇼 픽업포함 특가 파타야 / 빅아이 쇼 픽업포함 특가
                                        </div>
                                        <div class="item_desc">
                                            <span class="primary">54%</span>
                                            <span class="price">248,300<em>원</em></span>
                                        </div>
                                    </div>
                                </div><!-- //bcardWrap -->
                            </a>
                        </div>

                        <div class="card">
                            <a href="javascript:;">
                                <div class="mainWrap">
                                    <div class="video_wrap">
                                        <video src="https://cdn.sauceflex.com/streams/20220926/lkyanolja-9c8e8d51ccf94144add788b6ce585474/38431b2e022146599a9e8e3f38d69c24_preview_VOD.mp4" preload="auto" loop="" playsinline="" webkit-playsinline="" x5-playsinline="" autoplay=""></video>
                                    </div><!-- //비디오 -->

                                    <div class="desc_wrap">
                                        <div class="top">
                                            <div class="viewNumWrap">
                                                <i class="fa-solid fa-play"></i>
                                                <span class="viewNum">3.4천</span>
                                            </div>
                                            <div class="duration">01:02:36</div>
                                        </div>
                                        <div class="bottom">
                                            <div class="category">호텔</div>
                                            <div class="title">[제주 신화월드] 신화관/랜딩관 최대 78% 할인 신화관/랜딩관 최대</div>
                                        </div>
                                    </div><!-- //텍스트 -->
                                </div><!-- //mainWrap -->

                                <div class="bcardWrap">
                                    <div class="item_img">
                                        <img src="img/w800.jpg" alt="상품 이미지">
                                    </div>
                                    <div class="item_rightDesc">
                                        <div class="item_tit">
                                            파타야 / 빅아이 쇼 픽업포함 특가 파타야 / 빅아이 쇼 픽업포함 특가
                                        </div>
                                        <div class="item_desc">
                                            <span class="primary">54%</span>
                                            <span class="price">248,300<em>원</em></span>
                                        </div>
                                    </div>
                                </div><!-- //bcardWrap -->
                            </a>
                        </div>

                        <div class="card">
                            <a href="javascript:;">
                                <div class="mainWrap">
                                    <div class="video_wrap">
                                        <video src="https://cdn.sauceflex.com/streams/20220926/lkyanolja-9c8e8d51ccf94144add788b6ce585474/38431b2e022146599a9e8e3f38d69c24_preview_VOD.mp4" preload="auto" loop="" playsinline="" webkit-playsinline="" x5-playsinline="" autoplay=""></video>
                                    </div><!-- //비디오 -->

                                    <div class="desc_wrap">
                                        <div class="top">
                                            <div class="viewNumWrap">
                                                <i class="fa-solid fa-play"></i>
                                                <span class="viewNum">3.4천</span>
                                            </div>
                                            <div class="duration">01:02:36</div>
                                        </div>
                                        <div class="bottom">
                                            <div class="category">호텔</div>
                                            <div class="title">[제주 신화월드] 신화관/랜딩관 최대 78% 할인 신화관/랜딩관 최대</div>
                                        </div>
                                    </div><!-- //텍스트 -->
                                </div><!-- //mainWrap -->

                                <div class="bcardWrap">
                                    <div class="item_img">
                                        <img src="img/w800.jpg" alt="상품 이미지">
                                    </div>
                                    <div class="item_rightDesc">
                                        <div class="item_tit">
                                            파타야 / 빅아이 쇼 픽업포함 특가 파타야 / 빅아이 쇼 픽업포함 특가
                                        </div>
                                        <div class="item_desc">
                                            <span class="primary">54%</span>
                                            <span class="price">248,300<em>원</em></span>
                                        </div>
                                    </div>
                                </div><!-- //bcardWrap -->
                            </a>
                        </div>

                        <div class="card">
                            <a href="javascript:;">
                                <div class="mainWrap">
                                    <div class="video_wrap">
                                        <video src="https://cdn.sauceflex.com/streams/20220926/lkyanolja-9c8e8d51ccf94144add788b6ce585474/38431b2e022146599a9e8e3f38d69c24_preview_VOD.mp4" preload="auto" loop="" playsinline="" webkit-playsinline="" x5-playsinline="" autoplay=""></video>
                                    </div><!-- //비디오 -->

                                    <div class="desc_wrap">
                                        <div class="top">
                                            <div class="viewNumWrap">
                                                <i class="fa-solid fa-play"></i>
                                                <span class="viewNum">3.4천</span>
                                            </div>
                                            <div class="duration">01:02:36</div>
                                        </div>
                                        <div class="bottom">
                                            <div class="category">호텔</div>
                                            <div class="title">[제주 신화월드] 신화관/랜딩관 최대 78% 할인 신화관/랜딩관 최대</div>
                                        </div>
                                    </div><!-- //텍스트 -->
                                </div><!-- //mainWrap -->

                                <div class="bcardWrap">
                                    <div class="item_img">
                                        <img src="img/w800.jpg" alt="상품 이미지">
                                    </div>
                                    <div class="item_rightDesc">
                                        <div class="item_tit">
                                            파타야 / 빅아이 쇼 픽업포함 특가 파타야 / 빅아이 쇼 픽업포함 특가
                                        </div>
                                        <div class="item_desc">
                                            <span class="primary">54%</span>
                                            <span class="price">248,300<em>원</em></span>
                                        </div>
                                    </div>
                                </div><!-- //bcardWrap -->
                            </a>
                        </div>

                        <div class="card">
                            <a href="javascript:;">
                                <div class="mainWrap">
                                    <div class="video_wrap">
                                        <video src="https://cdn.sauceflex.com/streams/20220926/lkyanolja-9c8e8d51ccf94144add788b6ce585474/38431b2e022146599a9e8e3f38d69c24_preview_VOD.mp4" preload="auto" loop="" playsinline="" webkit-playsinline="" x5-playsinline="" autoplay=""></video>
                                    </div><!-- //비디오 -->

                                    <div class="desc_wrap">
                                        <div class="top">
                                            <div class="viewNumWrap">
                                                <i class="fa-solid fa-play"></i>
                                                <span class="viewNum">3.4천</span>
                                            </div>
                                            <div class="duration">01:02:36</div>
                                        </div>
                                        <div class="bottom">
                                            <div class="category">호텔</div>
                                            <div class="title">[제주 신화월드] 신화관/랜딩관 최대 78% 할인 신화관/랜딩관 최대</div>
                                        </div>
                                    </div><!-- //텍스트 -->
                                </div><!-- //mainWrap -->

                                <div class="bcardWrap">
                                    <div class="item_img">
                                        <img src="img/w800.jpg" alt="상품 이미지">
                                    </div>
                                    <div class="item_rightDesc">
                                        <div class="item_tit">
                                            파타야 / 빅아이 쇼 픽업포함 특가 파타야 / 빅아이 쇼 픽업포함 특가
                                        </div>
                                        <div class="item_desc">
                                            <span class="primary">54%</span>
                                            <span class="price">248,300<em>원</em></span>
                                        </div>
                                    </div>
                                </div><!-- //bcardWrap -->
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div><!-- //cont5 -->




    </div>


    <!-- footer -->
    <? include $_SERVER['DOCUMENT_ROOT'] . "/responsive/JJinTrip/inc/footer.php"; ?>
    
    

</body>

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


</html>