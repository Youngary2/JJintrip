<?
define('_CHK_', true);
/* require_once $_SERVER["DOCUMENT_ROOT"]."/../common/bootstrap.php"; */
include $_SERVER['DOCUMENT_ROOT'] . "/responsive/JJinTrip/inc/head.php";
?>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" type="text/css" href="/responsive/JJinTrip/css/sub.css">
<link rel="stylesheet" type="text/css" href="/responsive/JJinTrip/css/detail.css">

<!-- 스와이퍼 CSS CDN 연결 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css">
</head>


<body>

   <!-- header -->
   <? include $_SERVER['DOCUMENT_ROOT'] . "/responsive/JJinTrip/inc/header.php"; ?>
    

    <div class="detail">
        <div class="inner">
            <div class="detail_maincont">
                <div class="contentWrap">
                    <div class="itemInfo">
                        <div class="left">
                            <div class="photoBox">
                                <img src="/responsive/JJinTrip/img/w800.jpg" alt="이미지">
                            </div>
                        </div>
                        <div class="right">
                            <h3 class="itemTit">한주영 가이드와 8일간의 프랑스 여행 #유럽여행#유럽패키지#몽생미셸</h3>
                            <p class="itemSubTit gray mart10">"이전에는 없었던 동서남북 이동형 한달살이 문화가 있는 힙한 숙소 & 완벽한 업무 퍼포먼스 지원 시설"
                            </p>
                            <div class="score cursor martb20">
                                <span class="starWrap">
                                    <span class="istar">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star-half-stroke"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </span>
                                    3.5
                                </span>
                                <i class="fa-solid fa-angle-right marl3"></i>
                            </div>
                            <ul class="itemDesc">
                                <li>
                                    <span class="left_tit gray">제목</span>
                                    <span class="right_box">설명 들어가는 자리</span>
                                </li>
                                <li>
                                    <span class="left_tit gray">제목</span>
                                    <span class="right_box">설명 들어가는 자리</span>
                                </li>
                            </ul>
                            <div class="price mart20">
                                <span class="won">442,867원 ~</span>
                            </div>
                        </div>
                    </div><!-- //itemInfo -->

                    <div class="preDesc">
                        <h3 class="marb10">설명 들어가는 자리 설명 들어가는 자리</h3>
                        <p>설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명
                            들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는
                            자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리
                            설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명
                            들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는
                            자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리
                            설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명
                            들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는
                            자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 </p>
                    </div><!-- //preDesc -->

                    <div class="optionWrap martb50">
                        <h4 class="normaltit">옵션 선택</h4>
                        <div class="option">
                            <div class="w_20 marr8">
                                <input type="text" placeholder="날짜를 선택하세요." onfocus="this.blur()">
                            </div>
                            <!-- <div class="w_20 marr8">
                                <input type="text" placeholder="옵션을 선택하세요." onfocus="this.blur()">
                            </div> -->
                            <div class="select_box w_20 marr8">
                                <select title="옵션을 선택하세요.">
                                    <option value="">2023.07.29~2023.08.04 예약하기(여행 총 금액 520만원)</option>
                                </select>
                            </div>
                            <button class="lookup w_15">금액조회</button>
                        </div>
                    </div><!-- //옵션선택 -->

                    <div class="detailDescWrap">
                        <div class="detailDesc">
                            실제 내용 들어가는 자리실제 내용 들어가는 자리<br>
                            <img src="/responsive/JJinTrip/img/w800.jpg" alt="이미지" class="w_50"><br>
                            실제 내용 들어가는 자리실제 내용 들어가는 자리<br>
                            <img src="/responsive/JJinTrip/img/w800.jpg" alt="이미지" class="w_50"><br>
                            실제 내용 들어가는 자리실제 내용 들어가는 자리<br>
                            <img src="/responsive/JJinTrip/img/w800.jpg" alt="이미지" class="w_50"><br>
                            실제 내용 들어가는 자리실제 내용 들어가는 자리<br>
                            <img src="/responsive/JJinTrip/img/w800.jpg" alt="이미지" class="w_50"><br>
                            실제 내용 들어가는 자리실제 내용 들어가는 자리<br>
                            <img src="/responsive/JJinTrip/img/w800.jpg" alt="이미지" class="w_50">

                            <div class="gradiation"></div>
                        </div>
                        <div class="descMoreBtn">
                            <button class="descMore">상품설명 더보기 <i class="fa-solid fa-chevron-down padl4"></i></button>
                        </div>
                    </div><!-- //실제내용 -->

                    <div class="reviewWrap mart50">
                        <h4 class="normaltit">후기 <span class="orange">16</span></h4>

                        <div class="totalView">
                            <div class="leftBox">
                                <p><span> 3.5</span> / 5</p>
                                <div class="score mart10">
                                    <span class="starWrap">
                                        <span class="istar">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star-half-stroke"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </span>
                                        <!-- 3.5 -->
                                    </span>
                                    <!-- <i class="fa-solid fa-angle-right marl3"></i> -->
                                </div>
                            </div>
                            <div class="rightBox">
                                <div class="rCont">
                                    <ul class="scoreBarList">
                                        <li>
                                            <span class="title istar">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </span>
                                            <p class="graph">
                                                <span class="bar" style="width: 83%;" jpp-item="5pointPercent"></span>
                                            </p>
                                            <em class="total" jpp-item="5pointCount">32</em>
                                        </li>
                                        <li>
                                            <span class="title istar">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </span>
                                            <p class="graph">
                                                <span class="bar" style="width: 16%;" jpp-item="4pointPercent"></span>
                                            </p>
                                            <em class="total" jpp-item="4pointCount">6</em>
                                        </li>
                                        <li>
                                            <span class="title istar">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </span>
                                            <p class="graph">
                                                <span class="bar" style="width: 3%;" jpp-item="3pointPercent"></span>
                                            </p>
                                            <em class="total" jpp-item="3pointCount">1</em>
                                        </li>
                                        <li>
                                            <span class="title istar">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </span>
                                            <p class="graph">
                                                <span class="bar" style="width:0%" jpp-item="2pointPercent"></span>
                                            </p>
                                            <em class="total" jpp-item="2pointCount">0</em>
                                        </li>
                                        <li>
                                            <span class="title istar">
                                                <i class="fa-solid fa-star"></i>
                                            </span>
                                            <p class="graph">
                                                <span class="bar" style="width:0%" jpp-item="1pointPercent"></span>
                                            </p>
                                            <em class="total" jpp-item="1pointCount">0</em>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="reviewList_wrap">
                            <ul id="js-load" class="reviewList">
                                <li class="lists_item js-load">
                                    <div class="reviewSet">
                                        <div class="pfImg">
                                            <img src="/responsive/JJinTrip/img/ex_main_banner.jpg" alt="프로필이미지">
                                        </div>
                                        <strong class="nickname">댕구댕구</strong>
                                    </div>
                                    <div class="scda mart12 marb6">
                                        <div class="score">
                                            <span class="starWrap">
                                                <span class="istar">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-regular fa-star-half-stroke"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </span>
                                                <!-- 3.5 -->
                                            </span>
                                            <!-- <i class="fa-solid fa-angle-right marl3"></i> -->
                                        </div>
                                        <div class="date marl10 gray">2022-10-07</div>
                                    </div>
                                    <div class="txt">
                                        리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰
                                        들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰
                                        들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰
                                        들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리
                                    </div>
                                    <div class="likes">
                                        <i class="fa-regular fa-heart marr2 gray"></i>
                                        <span class="fs15">15</span>
                                    </div>
                                    <div class="photoSet">
                                        <img src="/responsive/JJinTrip/img/w800.jpg" alt="리뷰 이미지">
                                    </div>
                                </li>
                                <li class="lists_item js-load">
                                    <div class="reviewSet">
                                        <div class="pfImg">
                                            <img src="/responsive/JJinTrip/img/ex_main_banner.jpg" alt="프로필이미지">
                                        </div>
                                        <strong class="nickname">댕구댕구</strong>
                                    </div>
                                    <div class="scda mart12 marb6">
                                        <div class="score">
                                            <span class="starWrap">
                                                <span class="istar">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-regular fa-star-half-stroke"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </span>
                                                <!-- 3.5 -->
                                            </span>
                                            <!-- <i class="fa-solid fa-angle-right marl3"></i> -->
                                        </div>
                                        <div class="date marl10 gray">2022-10-07</div>
                                    </div>
                                    <div class="txt">
                                        리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰
                                        들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰
                                        들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰
                                        들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리
                                    </div>
                                    <div class="likes">
                                        <i class="fa-regular fa-heart marr2 gray"></i>
                                        <span class="fs15">15</span>
                                    </div>
                                    <div class="photoSet">
                                        <img src="/responsive/JJinTrip/img/w800.jpg" alt="리뷰 이미지">
                                    </div>
                                </li>
                                <li class="lists_item js-load">
                                    <div class="reviewSet">
                                        <div class="pfImg">
                                            <img src="/responsive/JJinTrip/img/ex_main_banner.jpg" alt="프로필이미지">
                                        </div>
                                        <strong class="nickname">댕구댕구</strong>
                                    </div>
                                    <div class="scda mart12 marb6">
                                        <div class="score">
                                            <span class="starWrap">
                                                <span class="istar">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-regular fa-star-half-stroke"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </span>
                                                <!-- 3.5 -->
                                            </span>
                                            <!-- <i class="fa-solid fa-angle-right marl3"></i> -->
                                        </div>
                                        <div class="date marl10 gray">2022-10-07</div>
                                    </div>
                                    <div class="txt">
                                        리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰
                                        들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰
                                        들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰
                                        들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리
                                    </div>
                                    <div class="likes">
                                        <i class="fa-regular fa-heart marr2 gray"></i>
                                        <span class="fs15">15</span>
                                    </div>
                                    <div class="photoSet">
                                        <img src="/responsive/JJinTrip/img/w800.jpg" alt="리뷰 이미지">
                                    </div>
                                </li>
                                <li class="lists_item js-load">
                                    <div class="reviewSet">
                                        <div class="pfImg">
                                            <img src="/responsive/JJinTrip/img/ex_main_banner.jpg" alt="프로필이미지">
                                        </div>
                                        <strong class="nickname">댕구댕구</strong>
                                    </div>
                                    <div class="scda mart12 marb6">
                                        <div class="score">
                                            <span class="starWrap">
                                                <span class="istar">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-regular fa-star-half-stroke"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </span>
                                                <!-- 3.5 -->
                                            </span>
                                            <!-- <i class="fa-solid fa-angle-right marl3"></i> -->
                                        </div>
                                        <div class="date marl10 gray">2022-10-07</div>
                                    </div>
                                    <div class="txt">
                                        리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰
                                        들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰
                                        들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰
                                        들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리
                                    </div>
                                    <div class="likes">
                                        <i class="fa-regular fa-heart marr2 gray"></i>
                                        <span class="fs15">15</span>
                                    </div>
                                    <div class="photoSet">
                                        <img src="/responsive/JJinTrip/img/w800.jpg" alt="리뷰 이미지">
                                    </div>
                                </li>
                                <li class="lists_item js-load">
                                    <div class="reviewSet">
                                        <div class="pfImg">
                                            <img src="/responsive/JJinTrip/img/ex_main_banner.jpg" alt="프로필이미지">
                                        </div>
                                        <strong class="nickname">댕구댕구</strong>
                                    </div>
                                    <div class="scda mart12 marb6">
                                        <div class="score">
                                            <span class="starWrap">
                                                <span class="istar">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-regular fa-star-half-stroke"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </span>
                                                <!-- 3.5 -->
                                            </span>
                                            <!-- <i class="fa-solid fa-angle-right marl3"></i> -->
                                        </div>
                                        <div class="date marl10 gray">2022-10-07</div>
                                    </div>
                                    <div class="txt">
                                        리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰
                                        들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰
                                        들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰
                                        들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리
                                    </div>
                                    <div class="likes">
                                        <i class="fa-regular fa-heart marr2 gray"></i>
                                        <span class="fs15">15</span>
                                    </div>
                                    <div class="photoSet">
                                        <img src="/responsive/JJinTrip/img/w800.jpg" alt="리뷰 이미지">
                                    </div>
                                </li>
                                <li class="lists_item js-load">
                                    <div class="reviewSet">
                                        <div class="pfImg">
                                            <img src="/responsive/JJinTrip/img/ex_main_banner.jpg" alt="프로필이미지">
                                        </div>
                                        <strong class="nickname">댕구댕구</strong>
                                    </div>
                                    <div class="scda mart12 marb6">
                                        <div class="score">
                                            <span class="starWrap">
                                                <span class="istar">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-regular fa-star-half-stroke"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </span>
                                                <!-- 3.5 -->
                                            </span>
                                            <!-- <i class="fa-solid fa-angle-right marl3"></i> -->
                                        </div>
                                        <div class="date marl10 gray">2022-10-07</div>
                                    </div>
                                    <div class="txt">
                                        리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰
                                        들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰
                                        들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리 리뷰
                                        들어가는 자리 리뷰 들어가는 자리 리뷰 들어가는 자리
                                    </div>
                                    <div class="likes">
                                        <i class="fa-regular fa-heart marr2 gray"></i>
                                        <span class="fs15">15</span>
                                    </div>
                                    <div class="photoSet">
                                        <img src="/responsive/JJinTrip/img/w800.jpg" alt="리뷰 이미지">
                                    </div>
                                </li>
                            </ul>
                            <div class="reviewMoreWrap">
                                <button class="reviewMore gray">더보기<i
                                        class="fa-solid fa-chevron-down padl6 gray"></i></button>
                            </div>
                        </div>

                        <div id="review_photoPopup" class="popup">
                            <div>
                                <div class="popup_inner">
                                    <h3>포토리뷰 (<span>5</span>)</h3>

                                    <div class="closeIcon"></div>

                                    <div class="swiper-container gallery-top">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="swiper-slide-container">
                                                    <img src="/responsive/JJinTrip/img/imgLoad1.png" alt="이미지">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="swiper-slide-container">
                                                    <img src="/responsive/JJinTrip/img/imgLoad2.png" alt="이미지">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="swiper-slide-container">
                                                    <img src="/responsive/JJinTrip/img/imgLoad3.png" alt="이미지">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="swiper-slide-container">
                                                    <img src="/responsive/JJinTrip/img/imgLoad1.png" alt="이미지">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="swiper-slide-container">
                                                    <img src="/responsive/JJinTrip/img/imgLoad2.png" alt="이미지">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Add Arrows -->
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                        <!-- pagination -->
                                        <div class="swiper-pagination"></div>
                                    </div><!-- //큰이미지 -->
                                    <div class="swiper-container gallery-thumbs">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="/responsive/JJinTrip/img/imgLoad1.png" alt="이미지">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/responsive/JJinTrip/img/imgLoad2.png" alt="이미지">
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="swiper-slide-container">
                                                    <img src="/responsive/JJinTrip/img/imgLoad3.png" alt="이미지">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="swiper-slide-container">
                                                    <img src="/responsive/JJinTrip/img/imgLoad1.png" alt="이미지">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="swiper-slide-container">
                                                    <img src="/responsive/JJinTrip/img/imgLoad2.png" alt="이미지">
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- //작은이미지 -->
                                </div>
                            </div>
                        </div><!-- //리뷰 사진 자세히보기 - 스와이퍼 -->
                    </div><!-- //리뷰 -->

                    <div class="otherItems martb50">
                        <span class="moreSee">더보기 <i class="fa-solid fa-angle-right"></i></span>
                        <h4 class="normaltit">사람들이 함께 본 상품</h4>
                        <div class="oiListWrap">
                            <div class="oiList">
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
                                            <span>한주영 가이드와 8일간의 프랑스 여행 #유럽여행#유럽패키지#몽생미셸한주영 가이드와 8일간의 프랑스 여행
                                                #유럽여행#유럽패키지#몽생미셸</span>
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
                                            <span>한주영 가이드와 8일간의 프랑스 여행 #유럽여행#유럽패키지#몽생미셸한주영 가이드와 8일간의 프랑스 여행
                                                #유럽여행#유럽패키지#몽생미셸</span>
                                            <span>Alice Heart Pearl Necklace</span>
                                        </div>
                                        <div class="bottom">
                                            <span>20%</span>
                                            <span>62,400<em>원</em>
                                            </span>
                                        </div>
                                    </a>
                                </div><!-- //card -->
                            </div><!-- //cont2_slick -->
                        </div><!-- //oiListWrap -->
                    </div><!-- //otherItems -->
                </div><!-- //왼쪽 내용박스 -->

                <div class="receiptArea">
                    <div class="receipt">
                        <div class="top">
                            <div class="price marb20">
                                <span class="won">442,867원 ~</span>
                                <div class="share">
                                    <img src="/responsive/JJinTrip/img/share.svg">
                                </div>
                            </div>
                            <button class="button reserve">예약하기</button>
                            <button class="ggimBtn mart10">
                                <span class="ggim marr8">
                                    <i class="fa-regular fa-heart"></i>
                                    <i class="fa-solid fa-heart"></i>
                                </span>
                                찜하기
                            </button>
                            <span class="block mart10 gray">1174명이 이 상품을 위시리스트에 담았습니다.</span>
                        </div>

                        <ul class="coups">
                            <li>
                                <span>[제부도 해상케이블카] 5% 즉시 할인 쿠폰 받기</span>
                                <img src="/responsive/JJinTrip/img/ico_download4.png" class="w14" alt="">
                            </li>
                            <li>
                                <span>[제부도 해상케이블카] 5% 즉시 할인 쿠폰 받기</span>
                                <img src="/responsive/JJinTrip/img/ico_download4.png" class="w14" alt="">
                            </li>
                        </ul>
                    </div>
                </div><!-- //오른쪽 영수증박스 -->
            </div>
        </div>
    </div>

    <div class="mb_bottom">
        <div class="inner">
            <div class="left">
                <div class="ggim marr8">
                    <i class="fa-regular fa-heart"></i>
                    <i class="fa-solid fa-heart"></i>
                </div>
                <div class="share">
                    <img src="/responsive/JJinTrip/img/share.svg">
                </div>
            </div>
            <div class="right marl8">
                <button class="button reserve">예약하기</button>
            </div>
        </div>
    </div><!-- //모바일 bottom -->

    <!-- footer -->
    <? include $_SERVER['DOCUMENT_ROOT'] . "/responsive/JJinTrip/inc/footer.php"; ?>
    
</body>


<!-- 스와이퍼 JS CDN 연결 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>



<script>
    $(function () {

        /* 찜버튼 */
        $(document).on('click', '.receipt .ggimBtn', function () {
            $(this).toggleClass('active');

            if ($(this).hasClass('active')) {
                $(this).find('i.fa-solid').css({
                    'display': 'inline-block'
                });
            } else {
                $(this).find('i.fa-solid').css({
                    'display': 'none'
                });
            }
        });



        /* 상품설명 더보기 클릭시 펼쳐지기 */
        $(document).on('click', '.descMore', function () {
            $('.detailDesc').css({
                'max-height': 'unset'
            });
            $('.descMoreBtn').hide();
            $('.gradiation').hide();
        });



        /* 리뷰 - 더보기버튼 클릭시 2개씩 더 보이도록 */
        $(window).on('load', function () {
            load('#js-load', '2');
            $(".reviewMoreWrap .reviewMore").on("click", function () {
                load('#js-load', '2', '.moreBtn');
            })
        });

        function load(id, cnt, btn) {
            var list = id + " .js-load:not(.active)";
            var length = $(list).length;
            var total_cnt;
            if (cnt < length) {
                total_cnt = cnt;
            } else {
                total_cnt = length;
                $('.reviewMoreWrap .reviewMore').hide();
            }
            $(list + ":lt(" + total_cnt + ")").addClass("active");
        }







        /* 리뷰 사진 자세히보기 팝업 - 스와이퍼 */
        $(document).on('click', '.reviewList .photoSet', function () {
            $('#review_photoPopup').fadeIn();
        });
        $(document).on('click', '#review_photoPopup .closeIcon', function () {
            $('#review_photoPopup').fadeOut();
        });


        //큰사진 스와이퍼
        const galleryTop = new Swiper(".gallery-top", {
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            loop: true, // 슬라이드 반복 여부
            loopedSlides: 4,
            pagination: {
                el: ".swiper-pagination",
                type: "fraction", //숫자 페이징
                
            },
            observer: true, //팝업에 스와이퍼적용시 오류 해결
            observeParents: true //팝업에 스와이퍼적용시 오류 해결
        });

        //작은사진 스와이퍼
        const galleryThumbs = new Swiper(".gallery-thumbs", {
            spaceBetween: 10,
            centeredSlides: true,
            slidesPerView: 'auto',
            touchRatio: 0.2,
            slideToClickedSlide: true,
            loop: true,
            loopedSlides: 4,
            observer: true, //팝업에 스와이퍼적용시 오류 해결
            observeParents: true //팝업에 스와이퍼적용시 오류 해결
            });

        //스와이퍼 2개 연결
        galleryTop.controller.control = galleryThumbs;
        galleryThumbs.controller.control = galleryTop;



    });
</script>

</html>