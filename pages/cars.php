<?
define('_CHK_', true);
/* require_once $_SERVER["DOCUMENT_ROOT"]."/../common/bootstrap.php"; */
include $_SERVER['DOCUMENT_ROOT'] . "/responsive/JJinTrip/inc/head.php";
?>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">


<link rel="stylesheet" type="text/css" href="/responsive/JJinTrip/css/sub.css">
</head>
<!-- <script src="/responsive/JJinTrip/js/main.js"></script> -->

<style>
    body,html{background: #f7f7f7;}
    .cars{
        margin-top: 127px;
    }

    /* header - nav 일단 안보이게 (메인) */
    .mb_header nav{
        top: 0;
        opacity: 0;
    }


    /* 지역,시간설정 */
    .reserveInfo{}
    .reserveInfo > div{
        position: relative;
    }
    .reserveInfo > div span {
        position: absolute;
        left: 0;
        top: 0;
        margin: 10px 0 0 10px;
        font-size: 0.9rem;
        color: #9a9a9a;
    }
    .reserveInfo input{
        width: 100%;
        height: unset;
        padding: 36px 10px 10px 10px;
        box-sizing: border-box;
        background: #f7f7f7;
        cursor: pointer;
    }
    .reserveInfo .search input{
        padding: 20px;
    }
    .airport_pop{
        display: none;
        position: absolute;
        left: 0;
        top: calc(100% + 8px);
        width: 100%;
        z-index: 3000;
        background: #fff !important;
    }
    .airport_pop > div{
        padding: 30px;
        box-sizing: border-box;
    }
    .airport_pop p{
        font-size: 0.9rem;
        color: #9a9a9a;
        font-weight: 500;
        margin-bottom: 16px;
    }
    .airport_pop ul{
        display: flex;
        flex-wrap: wrap;
    }
    .airport_pop li{
        width: 32%;
        margin-right: 2%;
        display: unset;
        word-break: break-word;
        padding: 10px 0;
        font-weight: 600;
        cursor: pointer;
    }
    .airport_pop li:hover{
        color: #ff4800;
    }

    .airport_pop .search_wrap{
        margin-bottom: 16px;
    }
    .airport_pop .search{
        position:relative;
    }
    .airport_pop .search .btSearch{
        position: absolute;
        right: 8px;
        top: 50%;
        transform: translateY(-50%);
        width: 24px;
        height: 24px;
        background: url(../img/ico_search.svg) no-repeat;
        background-size: 24px;
    }

    .rentDay{
        width: 100%;
        display: flex;
        background: #f7f7f7;
        border-radius: 4px;
        border: 1px solid #e5e5e5;
        box-sizing: border-box;
    }
    .rentDay > div{
        position: relative;
    }
    .rentStartDay,
    .rentEndDay{
        width: calc(50% - 5px);
    }
    .rentDay > div span{
        position: absolute;
        left: 0; top: 0;
        margin: 10px 0 0 10px;
        font-size: 0.9rem;
        color: #9a9a9a;
    }
    .rentDay .rentEndDay span{
        margin: 10px 0 0 40px;
    }
    .rentDay .r_date{
        color: #222;
        font-weight: 500;
        position: unset;
        display: block;
    }
    .rentDay .r_time{
        font-size: 0.9rem;
        position: unset;
        display: block;
        margin-bottom: 10px;
    }
    .rentDay .rentTotalDay {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        border-radius: 20px;
        background: #fff;
        padding: 4px 16px;
        box-shadow: 0 0 8px rgb(0 0 0 / 10%);
        margin: 0;
    }
    


    /* 탭메뉴 */
    .tabMenu{
        display: flex;
    }
    .tabMenu li{
        padding: 14px 0;
        box-sizing: border-box;
        width: 33.333%;
        text-align: center;
        font-family: 'yg-jalnan';
        color: #9a9a9a;
        border-radius: 4px 4px 0 0;
        background: #fff;
        cursor: pointer;
        border: 1px solid #e5e5e5;
        /* border-collapse: collapse; */
        margin-left: -1px;
    }
    .tabMenu li.active{
        background: #ff4800;
        color: #fff;
        border-color: #ff4800;
    }
    .tabCont{
        padding: 20px;
    }
    .tabCont > li{
        display:none;
    }
    .tabCont > li:first-child{
        display:block;
    }


    /* 탭메뉴 내용 */
    .carLists li{
        padding: 30px 20px;
        border-bottom: 1px solid #e5e5e5;
    }
    /* card */
    .carLists .card{
        display:flex;
        -webkit-box-pack: center;
        justify-content: center;
    }
    .carLists .card .left{
        width: calc(100% - 220px);
        display: flex;
        -webkit-box-pack: center;
        justify-content: center;
        align-items: center;
        padding-right: 20px;
        cursor: pointer;
    }
    .carLists .card .carImg{
        margin-right: 24px;
        width: 175px;
        height: 120px;
    }
    .carLists .card .carImg img{
        width: 100%;
    }
    .carLists .card .car_info{
        width: calc(100% - 199px);
    }
    .carLists .card .premium{
        color: #ccc;
        margin-bottom: 3px;
        font-size: 0.9rem;
    }
    .carLists .card .name{
        margin-bottom: 2px;
        line-height: 24px;
        word-break: break-word;
        font-size: 1.3rem;
        font-weight: 600;
        color: #212121;
        vertical-align: middle;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        text-overflow: ellipsis;
        overflow: hidden;
    }

    .carLists .card .right{
        width: 220px;
        border-left: 1px solid #e5e5e5;
        padding-left: 20px;
        box-sizing:border-box;

        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }


    /* 주문갯수 */
    .orderNum{    
        display: flex;
        align-items: center;
        width: 100%;
    }
    .orderNum .minus,
    .orderNum .plus{
        text-align: center;
        width: 40px; height: 40px;
        line-height: 42px;
        border-radius: 4px;
        font-size: 2rem;
        border: 1px solid #efefef;
        display:flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        background: #ff4800;
        cursor: pointer;
    }
    .orderNum .minus{
        margin-right: 6px;
    }
    .orderNum .or_num{
        display: block;
        border: 1px solid #efefef;
        height: 42px;
        line-height: 42px;
        text-align: center;
        box-sizing: border-box;
        width: calc(100% - 96px);
    }
    .orderNum .plus{
        margin-left: 6px;
    }

    /* 가격 */
    .carLists .card .price{
        font-size: 1.4rem;
        display:flex;
        align-items: center;
    }
    .carLists .card .won{
        color: #ff4800;
        font-weight: 600;
    }
    .carLists .card .bat{
        color: #9a9a9a;
        font-weight: 500;
        font-size: 1.2rem;
    }


    /* hiddenCard */
    .hiddenCard{
        display: none;
        margin-top: 20px;
    }
    .hiddenCard .left{}
    .hiddenCard .left .descs{}
    .hiddenCard .right{}
    .hiddenCard .descBox{
        display: flex;
        background: #efefef;
        padding: 20px;
        border-radius: 4px;
    }
    .hiddenCard .reserveBtn{
        text-align: center;
        margin-top: 20px;
    }
    .hiddenCard .reserveCar{
        width: 300px;
        border-radius: 4px;
        background: #ff4800;
        color: #fff;
        padding: 10px 0;
        cursor: pointer;
        font-size: 1.005rem;
    }
    



    /* 팝업 */
    .scrollLock{overflow:hidden;}

    /* 팝업 reserveRule */
    #reserveRule{
        display: none;
    }
    #reserveRule>div{
        width: 480px;
    }
    #reserveRule>div .popup_inner{
        text-align: left;
    }
    #reserveRule h3{
        font-size: 1.3rem;
        font-weight: 700;
        text-align: center;
        padding-bottom: 20px;
        border-bottom: 1px solid #e5e5e5;
    }
    #reserveRule .txt{
        padding: 20px 0;
        font-size: 1rem;
        max-height: 510px;
        overflow-y: scroll;
        word-break: keep-all;
    }
    #reserveRule .txt::-webkit-scrollbar {
        width: 4px;
        background-color: #efefef;
    }
    #reserveRule strong{
        display: block;
        margin-bottom: 10px;
        font-size: 1.2rem;
    }
    #reserveRule .tbBox{
        margin: 20px 0;
    }
    #reserveRule .tbBox th{
        font-weight: 600;
        background: #f8f8f8;
    }
    #reserveRule .tbBox th,
    #reserveRule .tbBox td{
        padding: 12px 16px;
        line-height: 1.44;
        border-left: 1px solid #e5e5e5;
        border-top: 1px solid #e5e5e5;
        text-align: center;
    }
    #reserveRule .tbBox th:first-child,
    #reserveRule .tbBox td:first-child{
        border-left: 0;
    }
    #reserveRule .tbBox tbody th{
        background: none;
        text-align: left;
    }
    #reserveRule .tbBox th b{
        display: block;
    }
    #reserveRule .tbBox th span{
        color: #9a9a9a;
        font-weight: normal;
    }
    #reserveRule tbody tr:last-child th,
    #reserveRule tbody tr:last-child td{
        border-bottom: 1px solid #e5e5e5;
    }
    #reserveRule .btn{
        border-top: 30px solid #fff;
        box-shadow: 0 -4px 8px 0 rgb(0 0 0 / 5%);
    }

    /* ==========================================================================================================================================================================================반응형============================================================================================================================ */
    @media(max-width:1220px){}
    @media(max-width:1024px){}
    @media(max-width:960px){}
    @media(max-width:768px){
        .tabCont{padding: 0;}
        .carLists .card .left{
            width: 100%;
            padding-right: 0;padding-bottom: 20px;
        }
        .carLists .card .right{
            width: 100%;
            padding-left: 0;padding-top: 20px;
            border-left: 0;
        }
        .carLists .card{
            flex-wrap: wrap;
        }
       
        .carLists .card .price{margin-top: 10px;}
        .hiddenCard .reserveCar{width: 100%;}

        /* 규정 및 유의사항 팝업 */
        #reserveRule>div{width: 90%;}
        #reserveRule .tbBox table{width: 100%;}

        
    }
    @media(max-width:425px){
        .carLists .card .carImg{
            width: 150px;
            margin-right: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .carLists .card .car_info{width: calc(100% - 170px);}
        .carLists .card .left{padding-bottom: 0;}



    }





</style>


<body>
    <div class="top_btn">
        <img src="../img/top_button.png">
    </div><!-- //탑버튼 -->

    <header class="pc_header">
        <div class="inner">
            <div class="toplogo">
                <a href="#">
                    <img src="../img/JJinTrip_logo.png" alt="찐트립 로고">
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
                        <img src="../img/menuList_1_2.svg" class="w22">
                        <span>투어</span>
                    </li>
                    <li onclick="location.href='/responsive/JJinTrip/pages/menu02/'">
                        <img src="../img/menuList_2_2.svg" class="w28">
                        <span>티켓&입장권</span>
                    </li>
                    <li onclick="location.href='/responsive/JJinTrip/pages/menu03/'">
                        <img src="../img/menuList_4_2.svg" class="w33">
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
                <img src="../img/ico_location.png" alt="">
                <span class="marl7 yg-jalnan">방콕</span>
            </div>

            <h1 class="toplogo">
                <a href="#">
                    <img src="../img/JJinTrip_logo.png" alt="찐트립 로고">
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
                            <img src="/responsive/JJinTrip/../img/ex_main_banner.jpg" alt="프로필이미지">
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
                            <img src="../img/ico_search.svg" class="w24">
                            <span class="marl5">전체 여행지</span>
                        </li>
                    </ul>
                    <ul class="padtb20">
                        <li>
                            <img src="../img/ico_search.svg" class="w24">
                            <span class="marl5">위시리스트</span>
                        </li>
                        <li>
                            <img src="../img/ico_search.svg" class="w24">
                            <span class="marl5">내 여행</span>
                        </li>
                        <li>
                            <img src="../img/ico_search.svg" class="w24">
                            <span class="marl5">알림</span>
                        </li>
                    </ul>
                    <ul class="padtb20">
                        <li>
                            <img src="../img/ico_search.svg" class="w24">
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
    

    <div class="cars">
        <!-- <div class="mb_main_search_area padt20 bg_white">
            <div class="inner">
                <div class="search">
                    <button type="button" class="btSearch"></button>
                    <input type="text" placeholder="맛집을 검색하세요." title="맛집을 검색하세요.">
                </div>
                <div class="cart marl10 w24">
                    <img src="../img/cart.svg" alt="">
                </div>
            </div>
        </div> --><!-- //모바일 검색창 -->

        <div class="cont cont5">
            <div class="inner main_cont">
                <h3 class="tit">렌트카<img src="../img/ico_gginVideo.svg" class="w20 vta-1 marl8"></h3>
                <span class="moreSee">전체보기 <i class="fa-solid fa-angle-right"></i></span>

                <div class="reserveInfo marb20">
                    <div class="startPoint airportBox marb10">
                         <span>픽업장소</span>
                        <input type="text" onfocus="this.blur()">

                         <div class="airport_pop whiteBox" style="">
                                    <div>
                                        <div class="airport">
                                            <p>픽업장소</p>
                                            <div class="search_wrap">
                                                <div class="search">
                                                    <button type="button" class="btSearch"></button>
                                                    <input type="text" placeholder="지역이나 역,건물 이름으로 검색" title="지역이나 역,건물 이름으로 검색">
                                                </div>
                                            </div>
                                            <!-- <ul>
                                                <li>Bangkok Suvarnabhumi Airport</li>
                                                <li>돈므앙 국제공항</li>
                                            </ul> -->
                                        </div>
                                    </div>
                         </div><!-- //픽업장소 팝업 -->
                    </div>
                    <div class="rentDay">
                                <div class="rentStartDay">
                                    <span class="r_date">2022년 10월 5일</span>
                                    <span class="r_time">10:00 오전</span>
                                </div>
                                <div class="rentEndDay">
                                    <span class="r_date">2022년 10월 6일</span>
                                    <span class="r_time">10:00 오전</span>
                                </div>
                                <span class="rentTotalDay blue">1일</span>
                    </div>
                </div>

                <div id="carPick" class="whiteBox">
                    <ul class="tabMenu">
                        <li class="active">전체</li>
                        <li>세단</li>
                        <li>SUV</li>
                        <li>밴</li>
                    </ul>

                    <ul class="tabCont whiteBox">
                        <li>
                            <ul class="carLists">
                                <li>
                                    <div class="card">
                                        <div class="left">
                                            <div class="carImg">
                                                <img src="../img/ex_sedan01.jpg" alt="자동차이미지">
                                            </div>
                                            <div class="car_info">
                                                <div class="premium">세단</div>
                                                <div class="name">현대 쏘나타 DN8 2020년형</div>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="orderNum">
                                                <span class="minus">-</span>
                                                <span class="or_num">1</span>
                                                <span class="plus">+</span>
                                            </div>
                                            <div class="price">
                                                <span class="won">42,867원</span>
                                                <span class="bat marl2">(1,100바트)</span>
                                            </div>
                                            
                                        </div>
                                    </div><!-- //card -->
                                    <div class="hiddenCard">
                                        <div class="descBox">
                                            <div class="left">
                                                <div class="descs">설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리</div>
                                            </div>
                                            <div class="right padl10">
                                                222222 RIGHT 또다른 설명????
                                            </div>
                                        </div>
                                        
                                        <div class="reserveBtn">
                                            <button class="reserveCar">예약</button>
                                        </div>
                                    </div><!-- //hiddenCard -->
                                </li>
                                <li>
                                    <div class="card">
                                        <div class="left">
                                            <div class="carImg">
                                                <img src="../img/ex_car.jpg" alt="자동차이미지">
                                            </div>
                                            <div class="car_info">
                                                <div class="premium">SUV</div>
                                                <div class="name">기아 소울 3세대 2019년형</div>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="orderNum">
                                                <span class="minus">-</span>
                                                <span class="or_num">1</span>
                                                <span class="plus">+</span>
                                            </div>
                                            <div class="price">
                                                <span class="won">42,867원</span>
                                                <span class="bat marl2">(1,100바트)</span>
                                            </div>
                                        </div>
                                    </div><!-- //card -->
                                    <div class="hiddenCard">
                                        <div class="descBox">
                                            <div class="left">
                                                <div class="descs">설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리</div>
                                            </div>
                                            <div class="right padl10">
                                                222222 RIGHT 또다른 설명????
                                            </div>
                                        </div>

                                        <div class="reserveBtn">
                                            <button class="reserveCar">예약</button>
                                        </div>
                                    </div><!-- //hiddenCard -->
                                </li>
                                <li>
                                    <div class="card">
                                        <div class="left">
                                            <div class="carImg">
                                                <img src="../img/ex_ven01.jpg" alt="자동차이미지">
                                            </div>
                                            <div class="car_info">
                                                <div class="premium">벤</div>
                                                <div class="name">기아 카니발 3세대 2015-2016년형</div>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="orderNum">
                                                <span class="minus">-</span>
                                                <span class="or_num">1</span>
                                                <span class="plus">+</span>
                                            </div>
                                            <div class="price">
                                                <span class="won">42,867원</span>
                                                <span class="bat marl2">(1,100바트)</span>
                                            </div>
                                        </div>
                                    </div><!-- //card -->
                                    <div class="hiddenCard">
                                        <div class="descBox">
                                            <div class="left">
                                                <div class="descs">설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리</div>
                                            </div>
                                            <div class="right padl10">
                                                222222 RIGHT 또다른 설명????
                                            </div>
                                        </div>

                                        <div class="reserveBtn">
                                            <button class="reserveCar">예약</button>
                                        </div>
                                    </div><!-- //hiddenCard -->
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul class="carLists">
                                <li>
                                    <div class="card">
                                        <div class="left">
                                            <div class="carImg">
                                                <img src="../img/ex_sedan01.jpg" alt="자동차이미지">
                                            </div>
                                            <div class="car_info">
                                                <div class="premium">세단</div>
                                                <div class="name">현대 쏘나타 DN8 2020년형</div>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="orderNum">
                                                <span class="minus">-</span>
                                                <span class="or_num">1</span>
                                                <span class="plus">+</span>
                                            </div>
                                            <div class="price">
                                                <span class="won">42,867원</span>
                                                <span class="bat marl2">(1,100바트)</span>
                                            </div>
                                        </div>
                                    </div><!-- //card -->
                                    <div class="hiddenCard">
                                        <div class="descBox">
                                            <div class="left">
                                                <div class="descs">설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리</div>
                                            </div>
                                            <div class="right padl10">
                                                222222 RIGHT 또다른 설명????
                                            </div>
                                        </div>
                                        
                                        <div class="reserveBtn">
                                            <button class="reserveCar">예약</button>
                                        </div>
                                    </div><!-- //hiddenCard -->
                                </li>
                                <li>
                                    <div class="card">
                                        <div class="left">
                                            <div class="carImg">
                                                <img src="../img/ex_sedan01.jpg" alt="자동차이미지">
                                            </div>
                                            <div class="car_info">
                                                <div class="premium">세단</div>
                                                <div class="name">현대 쏘나타 DN8 2020년형</div>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="orderNum">
                                                <span class="minus">-</span>
                                                <span class="or_num">1</span>
                                                <span class="plus">+</span>
                                            </div>
                                            <div class="price">
                                                <span class="won">42,867원</span>
                                                <span class="bat marl2">(1,100바트)</span>
                                            </div>
                                        </div>
                                    </div><!-- //card -->
                                    <div class="hiddenCard">
                                        <div class="descBox">
                                            <div class="left">
                                                <div class="descs">설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리</div>
                                            </div>
                                            <div class="right padl10">
                                                222222 RIGHT 또다른 설명????
                                            </div>
                                        </div>
                                        
                                        <div class="reserveBtn">
                                            <button class="reserveCar">예약</button>
                                        </div>
                                    </div><!-- //hiddenCard -->
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul class="carLists">
                                <li>
                                    <div class="card">
                                        <div class="left">
                                            <div class="carImg">
                                                <img src="../img/ex_car.jpg" alt="자동차이미지">
                                            </div>
                                            <div class="car_info">
                                                <div class="premium">SUV</div>
                                                <div class="name">기아 소울 3세대 2019년형</div>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="orderNum">
                                                <span class="minus">-</span>
                                                <span class="or_num">1</span>
                                                <span class="plus">+</span>
                                            </div>
                                            <div class="price">
                                                <span class="won">42,867원</span>
                                                <span class="bat marl2">(1,100바트)</span>
                                            </div>
                                        </div>
                                    </div><!-- //card -->
                                    <div class="hiddenCard">
                                        <div class="descBox">
                                            <div class="left">
                                                <div class="descs">설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리</div>
                                            </div>
                                            <div class="right padl10">
                                                222222 RIGHT 또다른 설명????
                                            </div>
                                        </div>
                                        
                                        <div class="reserveBtn">
                                            <button class="reserveCar">예약</button>
                                        </div>
                                    </div><!-- //hiddenCard -->
                                </li>
                                <li>
                                    <div class="card">
                                        <div class="left">
                                            <div class="carImg">
                                                <img src="../img/ex_car.jpg" alt="자동차이미지">
                                            </div>
                                            <div class="car_info">
                                                <div class="premium">SUV</div>
                                                <div class="name">기아 소울 3세대 2019년형</div>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="orderNum">
                                                <span class="minus">-</span>
                                                <span class="or_num">1</span>
                                                <span class="plus">+</span>
                                            </div>
                                            <div class="price">
                                                <span class="won">42,867원</span>
                                                <span class="bat marl2">(1,100바트)</span>
                                            </div>
                                        </div>
                                    </div><!-- //card -->
                                    <div class="hiddenCard">
                                        <div class="descBox">
                                            <div class="left">
                                                <div class="descs">설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리</div>
                                            </div>
                                            <div class="right padl10">
                                                222222 RIGHT 또다른 설명????
                                            </div>
                                        </div>
                                        
                                        <div class="reserveBtn">
                                            <button class="reserveCar">예약</button>
                                        </div>
                                    </div><!-- //hiddenCard -->
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul class="carLists">
                                <li>
                                    <div class="card">
                                        <div class="left">
                                            <div class="carImg">
                                                <img src="../img/ex_ven01.jpg" alt="자동차이미지">
                                            </div>
                                            <div class="car_info">
                                                <div class="premium">벤</div>
                                                <div class="name">기아 카니발 3세대 2015-2016년형</div>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="orderNum">
                                                <span class="minus">-</span>
                                                <span class="or_num">1</span>
                                                <span class="plus">+</span>
                                            </div>
                                            <div class="price">
                                                <span class="won">42,867원</span>
                                                <span class="bat marl2">(1,100바트)</span>
                                            </div>
                                        </div>
                                    </div><!-- //card -->
                                    <div class="hiddenCard">
                                        <div class="descBox">
                                            <div class="left">
                                                <div class="descs">설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리</div>
                                            </div>
                                            <div class="right padl10">
                                                222222 RIGHT 또다른 설명????
                                            </div>
                                        </div>
                                        
                                        <div class="reserveBtn">
                                            <button class="reserveCar">예약</button>
                                        </div>
                                    </div><!-- //hiddenCard -->
                                </li>
                                <li>
                                    <div class="card">
                                        <div class="left">
                                            <div class="carImg">
                                                <img src="../img/ex_ven01.jpg" alt="자동차이미지">
                                            </div>
                                            <div class="car_info">
                                                <div class="premium">벤</div>
                                                <div class="name">기아 카니발 3세대 2015-2016년형</div>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="orderNum">
                                                <span class="minus">-</span>
                                                <span class="or_num">1</span>
                                                <span class="plus">+</span>
                                            </div>
                                            <div class="price">
                                                <span class="won">42,867원</span>
                                                <span class="bat marl2">(1,100바트)</span>
                                            </div>
                                        </div>
                                    </div><!-- //card -->
                                    <div class="hiddenCard">
                                        <div class="descBox">
                                            <div class="left">
                                                <div class="descs">설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리 설명 들어가는 자리</div>
                                            </div>
                                            <div class="right padl10">
                                                222222 RIGHT 또다른 설명????
                                            </div>
                                        </div>
                                        
                                        <div class="reserveBtn">
                                            <button class="reserveCar">예약</button>
                                        </div>
                                    </div><!-- //hiddenCard -->
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- //차량선택 박스 -->
            </div>
        </div><!-- //cont5 -->




    </div>










    <div class="footer">
        <div class="inner">
            <div class="foot_top">
                <ul>
                    <li><a href="#">회사소개</a></li>
                    <li><a href="#">이용약관</a></li>
                    <li><a href="#"><strong>개인정보처리방침</strong></a></li>
                    <li><a href="#">스위트 팩토리</a></li>
                </ul>
                <ul>
                    <li><a href="#">공지사항</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">비회원문의</a></li>
                    <li><a href="#" class="afterN">대량구매문의</a></li>
                    <select name="familySite" title="패밀리사이트" class="familySite">
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
                    </select>
                </ul>
            </div><!-- //foot_top -->

            <div class="foot_bottom">
                <p>롯데스위트몰의 모든 콘텐츠는 저작권의 보호를 받고 있습니다.</p>
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
                <em>고객님은 안전거래를 위해 현금 등으로 결제시 저희 쇼핑몰에서 가입한 구매안전 (에스크로) 서비스를 이용하실 수 있습니다.</em>
                <div class="copyright">
                    Copyright LOTTE CONFECTIONERY Co., LTD. All rights reserved. 
                </div>

            </div><!-- //foot_bottom -->
        </div><!-- //container -->
    </div><!-- //footer -->




    <div id="reserveRule" class="popup block">
        <div>
            <div class="popup_inner">
                <h3>규정 및 유의사항</h3>
                <div class="txt">
                    <strong>취소 수수료 규정(할인가)</strong>
                    <p class="gray">렌터카 예약 취소시 요금 규정에 따라 취소 수수료를 부과합니다. 요금제마다 규정이 상이하니, 예약 전 반드시 확인해주시기 바랍니다.</p>
                    <div class="tbBox">
                        <table>
                            <colgroup>
                                <col style="width:auto">
                                <col style="width:170px">
                            </colgroup>
                            <thead>
                            <tr>
                                <th scope="col" width="60%">취소 시점</th>
                                <th scope="col" width="40%">취소 수수료</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">
                                    <b>예약당일</b>
                                    <span>23시 59분까지</span>
                                </th>
                                <td class="blue" reservday="">수수료 없음</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <b>예약 다음날 ~ 인수 7일전까지</b>
                                    <span>168시간 이전까지</span>
                                </th>
                                <td takesevenago="" class="blue">수수료 없음</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <b>인수 6일전 ~ 인수 3일전</b>
                                    <span>72시간 이전까지</span>
                                </th>
                                <td takethreeago="" class="">수수료 10%</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <b>인수 2일전 ~ 인수 1일전까지</b>
                                    <span>24시간 이전까지</span>
                                </th>
                                <td class="" taketwoago="">수수료 30%</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <b>인수 24시간 이내</b>
                                    <span></span>
                                </th>
                                <td class="" takeoneago="">수수료 50%</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <b>대여 당일</b>
                                    <span>No Show</span>
                                </th>
                                <td class="red" taketoday="">환불불가</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="gray star"> 예약 취소 시 선택한 요금제의 취소 수수료가 부과됩니다.</p>
                    <p class="gray star"> 차량 및 일정 변경은 불가하며 반드시 취소 후 재예약 해야 합니다.</p>
                </div>
                <div class="btn" onclick="location.href='http://jldylee.dothome.co.kr/responsive/JJinTrip/pages/cars_pay.php'">
                    확인
                </div>
            </div>
        </div>
    </div>
    

</body>

<script>
    //탭메뉴
    var tabMenu = $('#carPick .tabMenu > li');
    var tabBox = $('#carPick .tabCont > li');

     $(document).on('click', '#carPick .tabMenu > li', function () {
        $(this).addClass('active').siblings().removeClass('active');

        var tabMenuIndex = $(this).index();
        //console.log(tabMenuIndex);        

        tabBox.eq(tabMenuIndex).stop().show().siblings('li').hide();
    });




    //hiddenCard
    $(document).on('click', '#carPick .carLists .card .left', function () {
        $(this).parent('.card').siblings('.hiddenCard').stop().slideDown();
    });





    /* 팝업 */
    //팝업스크롤시 뒤에 스크롤 막기
    

    //팝업 reserveRul
    $(document).on('click', 'button.reserveCar', function () {
        const body = document.getElementsByTagName('body')[0];
        body.classList.add('scrollLock');

        $('#reserveRule').fadeIn();
    });
    $(document).on('click', '#reserveRule .btn', function () {
        $('#reserveRule').fadeOut();
    });


</script>

</html>