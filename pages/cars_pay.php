<?
define('_CHK_', true);
/* require_once $_SERVER["DOCUMENT_ROOT"]."/../common/bootstrap.php"; */
include $_SERVER['DOCUMENT_ROOT'] . "/responsive/JJinTrip/inc/head.php";
?>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" type="text/css" href="/responsive/JJinTrip/css/sub.css">
<!-- <link rel="stylesheet" type="text/css" href="/responsive/JJinTrip/css/main.css"> -->
</head>

<style>
    body,
    html {
        background: #f7f7f7;
    }

    /* header - nav 일단 안보이게 (메인) */
    .mb_header nav {
        top: 0;
        opacity: 0;
    }



    /* cars_pay */
    .cars_pay {
        margin-top: 127px;
    }

    .cars_pay .main_cont {
        padding: 20px;
        box-sizing: border-box;
    }

    /* cont1 */
    .cont1 {}

    .cont1 .info {
        display: flex;
        flex-wrap: wrap;
    }

    .cont1 .premium {
        color: #ccc;
        margin-bottom: 3px;
        font-size: 0.9rem;
    }

    .cont1 .carImg {
        /* margin-right: 24px; */
        width: 175px;
        height: 120px;
    }

    .cont1 .carImg img {
        width: 100%;
    }

    .cont1 .info li {
        position: relative;
        margin-left: 8px;
    }

    .cont1 .info li:before {
        content: "";
        position: absolute;
        top: 3px;
        left: -5px;
        width: 1px;
        height: 14px;
        background: #ccc;

    }

    .cont1 .info li:first-child {
        margin-left: 0;
    }

    .cont1 .info li:first-child:before {
        display: none;
    }

    .writeBox {}

    .writeBox li {
        display: flex;
        align-items: center;
        padding: 20px 0;
        /* border-bottom: 1px solid #e5e5e5; */
    }

    .writeBox .left_tit {
        width: 170px;
        padding-left: 20px;
        box-sizing: border-box;
        font-size: 17px;
        letter-spacing: -2px;
        line-height: 42px;
        font-weight: 500;
    }

    .writeBox .right_box {
        float: right;
        width: 770px;
    }



    /* cont2 */
    .cont2 .orderInfo {
        padding-bottom: 20px;
        border-bottom: 1px solid #e5e5e5;
    }

    .cont2 .orderInfo:last-child {
        border-bottom: 0;
    }

    .cont2 .carinfo li {
        align-items: flex-start;
    }

    .cont2 .writeBox li {
        padding: 0;
    }

    .cont2 .writeBox .left_tit {
        line-height: 26px;
    }

    .cont2 .writeBox .right_box {
        color: #9a9a9a;
    }




    /* cont3_2 */
    .cont3_2 .samePerson{
        padding-left: 10px;
        border: 1px solid #ff3d44;
        color: #ff3d44;
        /* background: #fdf5f7; */
        border-radius: 4px;
        box-sizing: border-box;
    }



    /* cont4 */
    .cont4 {}
    .cont4 .writeBox .left_tit{
        width: 230px;
    }
    .cont4 .writeBox .right_box{
        width: calc(100% - 230px);
    }
    .cont4 .writeBox li {
        padding: 0;
        padding-bottom: 10px;
    }

    .cont4 .writeBox .right_box {
        font-weight: 700;
        font-size: 1.2rem;
    }

    .cont4 .totalPrice {
        border-top: 1px solid #e5e5e5;
        padding-top: 10px !important;
    }
    .cont4 .pointAlluse{
        font-size: 13px;
        height: 30px;
        background: #f7f7f7;
        border-radius: 4px;
        color: #9a9a9a;
        font-weight: 600;
        padding: 0 8px;
        margin-left: 10px;
        cursor: pointer;
    }
    .cont4 .pay_coupon .right_box,
    .cont4 .pay_point .right_box{
        color: #9a9a9a;
        font-weight: normal;
    }
    .cont4 .pay_point .miniTxt{
        font-size: 13px;
    }




    /* cont5 */
    .cont5{}
    .cont5 .PayHow{
        display: flex;
        flex-wrap: wrap;
    }
    .cont5 .PayHow li{
        position: relative;
        margin-right: 1%;
        margin-bottom: 1%;
        width: 110px; height: 36px;
        border: 1px solid #e5e5e5;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 14px;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        transition: 0.3s;
    }
    .cont5 .PayHow li:after{
        content: '';
        width: 100%;height: 100%;
        position: absolute; left: 0;top: 0;
        border-radius: 4px;
        transition: 0.3s;
    }
    .cont5 .PayHow li.active{
        /* background: rgba(54,85,225,0.3); */
        border-color: rgba(54,85,225,0.3);
        color: #3655e1;
    }
    .cont5 .PayHow li.active:after{
        background: rgba(54,85,225,0.1);
    }
    .cont5 .PayHow li img{
        position: relative;
        z-index: 50;
    }
    .PayHow_tab li{
        display: none;/* 탭 내용 일단숨김 */
    }
    .PayHow_tab li:first-child{
        display: block;
    }
    .cont5 .cashReceiptsInfo{
        display: flex;
        align-items: center;
        justify-content: space-between;
        border: 1px solid #e5e5e5;
        border-radius: 4px;
        padding: 10px 16px;
        box-sizing: border-box;
    }
    .cont5 .cashReceiptsInfoChange{
        display: none; /* 현금영수증정보 수정탭 일단숨김 */
        padding-left: 20px;
        box-sizing: border-box;
    }






    /* cont6 */
    .cont6 .agreeBox{
        color: #9a9a9a;
    }
    .cont6 .agreeAll {
        color: #222;
        font-weight: 600;
    }
    .cont6 .agreeBox em{
        font-style: normal;
        margin-right: 4px;
    }
    .cont6 .agreeBox .agree i {
        /* position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%); */
        padding: 12px;
        padding-left: 20px;
        padding-right: 0;
        color: #9a9a9a;
        cursor: pointer;
    }


    /* 팝업공통 */
.popup{
    display: none;
}
.popup>div{
    width: 960px;
    border-radius: 4px;
}
.popup>div .popup_inner{
    text-align: left !important;
}
.popup h3{
    font-size: 1.3rem !important;
    font-weight: 700 !important;
    text-align: center;
    padding-bottom: 20px;
    border-bottom: 1px solid #e5e5e5;
}
.popup .txt{
    padding: 20px 0;
    font-size: 1rem;
    max-height: 510px;
    overflow-y: scroll;
    word-break: keep-all;
    line-height: 1.6;
}
.popup .txt::-webkit-scrollbar {
    width: 4px;
    background-color: #efefef;
}
.popup strong{
    display: block;
    margin-bottom: 10px;
    font-size: 1.2rem;
}
.popup .tbBox{
    margin: 20px 0;
}
.popup .tbBox table{width: 100%;}
.popup .tbBox th{
    font-weight: 600;
    background: #f8f8f8;
}
.popup .tbBox th,
.popup .tbBox td{
    padding: 12px 16px;
    line-height: 1.44;
    border-left: 1px solid #e5e5e5;
    border-top: 1px solid #e5e5e5;
    text-align: center;
}
.popup .tbBox th:first-child,
.popup .tbBox td:first-child{
    border-left: 0;
}
.popup .tbBox tbody th{
    background: none;
    text-align: left;
}
.popup .tbBox th b{
    display: block;
}
.popup .tbBox th span{
    color: #9a9a9a;
    font-weight: normal;
}
.popup tbody tr:last-child th,
.popup tbody tr:last-child td{
    border-bottom: 1px solid #e5e5e5;
}
.popup .btn{
    border-top: 30px solid #fff;
    box-shadow: 0 -4px 8px 0 rgb(0 0 0 / 5%);
}


    /* ==========================================================================================================================================================================================반응형============================================================================================================================ */
    @media(max-width:1220px) {}

    @media(max-width:1024px) {}

    @media(max-width:960px) {
        .main_cont {
            padding: 20px 0 !important;
        }

        .w_15 {
            width: 30%;
        }

        .w_20 {
            width: 25%;
        }


        /* 팝업 */
        .popup>div{width: 90%;}
        .popup .tbBox table{width: 100%;}
    }

    @media(max-width:768px) {
        .button{
            width: 100%;
        }
        .cars_pay {
            margin-top: 60px;
        }

        .writeBox .left_tit {
            width: 100px;
            padding-left: 10px;
        }

        .writeBox .right_box {
            width: calc(100% - 100px);
        }

        .w_15 {
            width: 29%;
        }

        .w_60 {
            width: 100%;
        }

        .w_25 {
            width: 30%;
        }

        .w_20 {
            width: 100%;
            margin-top: 10px;
        }

        .w_25 {
            width: 44%;
        }

        .w_10 {
            width: 21%;
        }

        .couponCodeInput {
            width: calc(100% - 90px);
        }

        .cont4 .writeBox .right_box{
            text-align: right;
            font-size: 1.1rem;
        }


        /* 결제수단 */
        .cont5 .PayHow li{
            width: 24.25%;
        }
        .cont5 .PayHow li:nth-child(4n){margin-right: 0;}
        

        /* 결제동의 */
        .cont6 .agreeBox .agree {position: relative;}
        .cont6 .agreeBox .agree i {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
        }
        .cont6 .agreeBox .agree label {
            letter-spacing: -0.01em;
        }
    }


    @media(max-width:500px) {
         /* 결제수단 */
         .cont5 .PayHow li{
            width: 32.666%;
        }
        .cont5 .PayHow li:nth-child(4n){margin-right: 1%;}
        .cont5 .PayHow li:nth-child(3n){margin-right: 0;}
    }


    @media(max-width:425px) {
        .writeBox .left_tit {
            width: 80px;
            padding-left: 6px;
        }

        .writeBox .right_box {
            width: calc(100% - 80px);
        }

        .w_25 {
            width: 43%;
        }

        .w_10 {
            width: 16%;
        }

        .cont4 .writeBox .left_tit{
            width: 140px;
        }
        .cont4 .writeBox .right_box{
            width: calc(100% - 140px);
        }
    }
</style>


<body>
    <!-- header -->
    <? include $_SERVER['DOCUMENT_ROOT'] . "/responsive/JJinTrip/inc/header.php"; ?>
    

    <div class="cars_pay">
        <h3 class="inner bigTit2 padt30">렌터카 예약</h3>

        <div class="cont cont1">
            <div class="inner main_cont">
                <span class="premium">세단</span>
                <h4 class="normaltit">현대 쏘나타 DN8 2020년형</h4>
                <ul class="info">
                    <li class="gray">경형</li>
                    <li class="gray">5인승</li>
                    <li class="gray">휘발유</li>
                    <li class="gray">2022.10.12 (수) 09:00 ~ 2022.10.13 (목) 09:00</li>
                </ul>
                <div class="carImg">
                    <img src="../responsive/JJinTrip/img/ex_sedan01.jpg" alt="자동차이미지">
                </div>
            </div>
        </div><!-- //cont1 -->

        <div class="cont cont2">
            <div class="inner main_cont">
                <h4 class="normaltit">대여정보</h4>
                <ul class="orderInfo writeBox">
                    <li>
                        <span class="left_tit">대여일시</span>
                        <span class="right_box">2022.10.21(화) 09:00</span>
                    </li>
                    <li>
                        <span class="left_tit">반납일시</span>
                        <span class="right_box">2022.10.22(수) 09:00</span>
                    </li>
                </ul>
                <ul class="orderInfo carinfo writeBox padt20">
                    <li>
                        <span class="left_tit">차량정보</span>
                        <div class="right_box ln-h26">내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용
                            들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다.
                            내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리
                            입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는
                            자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용
                            들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다.
                            내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리
                            입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는
                            자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용
                            들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다.
                            내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. 내용 들어가는 자리 입니다. </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="cont cont3">
            <div class="inner main_cont">
                <h4 class="normaltit pilsoo">예약자 정보</h4>
                <ul class="writeBox">
                    <li>
                        <!-- label의 for = input의 id -->
                        <label for="member_name" class="left_tit">이름</label>
                        <div class="right_box">
                            <input type="text" id="member_name" class="w_60" title="이름">
                        </div>
                    </li><!-- //이름 -->
                    <li>
                        <label class="left_tit">휴대전화</label>
                        <div class="right_box">
                            <!-- <div class="select_box w_15 select_box">
                                <select title="휴대전화">
                                    <option value="010">010</option>
                                    <option value="011">011</option>
                                    <option value="016">016</option>
                                    <option value="017">017</option>
                                    <option value="018">018</option>
                                    <option value="019">019</option>
                                </select>
                            </div>
                            <span class="dash"> - </span>
                            <input type="text" class="w_15">
                            <span class="dash"> - </span>
                            <input type="text" class="w_15"> -->
                            <input type="text" id="member_phone" class="w_60" title="'-'를 제외하고 입력해주세요."
                                placeholder="'-'를 제외하고 입력해주세요.">
                        </div>
                    </li><!-- //휴대전화 -->
                    <li>
                        <label class="left_tit">이메일</label>
                        <div class="right_box">
                            <input type="text" class="w_25">
                            <span class="golbang"> @ </span>
                            <input type="text" class="w_25" title="이메일 제공업체 입력">
                            <div class="select_box w_20">
                                <select title="이메일 제공업체 목록">
                                    <option value="">naver.com</option>
                                    <option value="">gmail.com</option>
                                    <option value="">hanmail.net</option>
                                    <option value="">daum.net</option>
                                    <option value="">nate.com</option>
                                </select>
                            </div><!-- //select_box -->
                        </div>
                    </li><!-- //이메일 -->
                    <li>
                        <label class="left_tit">생년월일</label>
                        <div class="right_box">
                            <input type="text" class="w_15">
                            <span class="golbang"> 년 </span>
                            <input type="text" class="w_10">
                            <span class="golbang"> 월 </span>
                            <input type="text" class="w_10">
                            <span class="golbang"> 일 </span>

                            <input type="radio" id="yang" class="radio" name="yang_eum">
                            <label for="yang" class="marr5 marl10">양력</label>

                            <input type="radio" id="eum" class="radio" name="yang_eum">
                            <label for="eum">음력</label>
                        </div>
                    </li><!-- //생년월일 -->
                    <li class="clearfix agree_area">
                        <!-- label의 for = input의 id -->
                        <label class="left_tit">수신여부</label>
                        <div class="right_box">
                            <input id="sms_agree" type="checkbox" class="agree_checkbox">
                            <label for="sms_agree">SMS 수신동의</label>
                            <input id="email_agree" type="checkbox" class="agree_checkbox">
                            <label for="email_agree">이메일 수신동의</label>

                            <span class="alertTxt">이벤트정보, 기타 다양한 정보를 빠르게 만나실 수 있습니다.</span>
                        </div>
                    </li><!-- //수신여부 -->
                </ul>
            </div>
        </div><!-- //cont3 -->

        <div class="cont cont3_2">
            <div class="inner main_cont">
                <h4 class="normaltit pilsoo">운전자 정보</h4>
                <div class="samePerson w_60">
                    <input id="samePerson" type="checkbox" class="agree_checkbox">
                    <label for="samePerson">예약자와 운전자가 달라요</label>
                </div>
                
                <ul class="writeBox">
                    <li>
                        <label for="member_name" class="left_tit">이름</label>
                        <div class="right_box">
                            <input type="text" id="member_name" class="w_60" title="이름">
                        </div>
                    </li><!-- //이름 -->
                    <li>
                        <label class="left_tit">휴대전화</label>
                        <div class="right_box">
                            <!-- <div class="select_box w_15 select_box">
                                <select title="휴대전화">
                                    <option value="010">010</option>
                                    <option value="011">011</option>
                                    <option value="016">016</option>
                                    <option value="017">017</option>
                                    <option value="018">018</option>
                                    <option value="019">019</option>
                                </select>
                            </div>
                            <span class="dash"> - </span>
                            <input type="text" class="w_15">
                            <span class="dash"> - </span>
                            <input type="text" class="w_15"> -->
                            <input type="text" id="member_phone" class="w_60" title="'-'를 제외하고 입력해주세요."
                                placeholder="'-'를 제외하고 입력해주세요.">
                        </div>
                    </li><!-- //휴대전화 -->
                    <li>
                        <label class="left_tit">이메일</label>
                        <div class="right_box">
                            <input type="text" class="w_25">
                            <span class="golbang"> @ </span>
                            <input type="text" class="w_25" title="이메일 제공업체 입력">
                            <div class="select_box w_20">
                                <select title="이메일 제공업체 목록">
                                    <option value="">naver.com</option>
                                    <option value="">gmail.com</option>
                                    <option value="">hanmail.net</option>
                                    <option value="">daum.net</option>
                                    <option value="">nate.com</option>
                                </select>
                            </div>
                        </div>
                    </li><!-- //이메일 -->
                    <li>
                        <label class="left_tit">생년월일</label>
                        <div class="right_box">
                            <!-- <input type="text" class="w_15">
                            <span class="golbang"> 년 </span>
                            <input type="text" class="w_10">
                            <span class="golbang"> 월 </span>
                            <input type="text" class="w_10">
                            <span class="golbang"> 일 </span>

                            <input type="radio" id="yang" class="radio" name="yang_eum">
                            <label for="yang" class="marr5 marl10">양력</label>

                            <input type="radio" id="eum" class="radio" name="yang_eum">
                            <label for="eum">음력</label> -->
                            <input type="text" id="member_birth" class="w_60" title="YYYYMMDD" placeholder="YYYYMMDD">
                        </div>
                    </li><!-- //생년월일 -->
                    <li class="clearfix agree_area">
                        <label class="left_tit">면허종류</label>
                        <div class="right_box">
                            <input type="radio" id="license_kind01" class="radio" name="license_kind">
                            <label for="license_kind01">1종대형</label> 
                            <input type="radio" id="license_kind02" class="radio" name="license_kind">
                            <label for="license_kind02">1종보통</label> 
                            <input type="radio" id="license_kind03" class="radio" name="license_kind">
                            <label for="license_kind03">2종보통</label> 
                        </div>
                    </li><!-- //면허종류 -->
                    <li>
                        <label for="member_name" class="left_tit">쿠폰 사용</label>
                        <div class="right_box">
                            <input type="text" id="member_coupon" class="w_60 couponCodeInput" title="쿠폰코드를 입력하세요"
                                placeholder="쿠폰 코드를 입력하세요.">
                            <button class="inputButton">등록</button>
                        </div>
                    </li><!-- //쿠폰사용 -->
                </ul>
            </div>
        </div><!-- //cont3 -->

        <div class="cont cont4">
            <div class="inner main_cont">
                <h4 class="normaltit">할인 및 결제 정보</h4>
                <ul class="orderInfo writeBox">
                    <li>
                        <span class="left_tit">대여요금</span>
                        <span class="right_box">42,867원</span>
                    </li>
                    <li>
                        <span class="left_tit">부가서비스</span>
                        <span class="right_box">8,000원</span>
                    </li>
                    <li class="pay_coupon">
                        <span class="left_tit">쿠폰</span>
                        <span class="right_box">사용 가능 쿠폰 없음</span>
                    </li>
                    <li class="pay_point">
                        <span class="left_tit">
                            포인트
                            <button class="pointAlluse">전액사용</button>
                        </span>
                        <span class="right_box">0원 보유<br><span class="miniTxt">100P 이상 사용가능</span></span>
                    </li>
                    <li class="totalPrice">
                        <span class="left_tit">총 결제금액</span>
                        <span class="right_box orange">50,867원</span>
                    </li>
                </ul>
            </div>
        </div>


        <div class="cont cont5">
            <div class="inner main_cont">
                <h4 class="normaltit">결제 수단</h4>
                <ul class="PayHow marb10">
                    <li class="active"><img src="/responsive/JJinTrip/img/ico_payment_kakaopay.png" alt="카카오페이 결제" class="w40"></li>
                    <li><img src="/responsive/JJinTrip/img/ico_payment_toss.png" alt="토스 결제" class="w50"></li>
                    <li>신용/체크카드</li>
                    <li>간편계좌이체</li>
                    <li><img src="/responsive/JJinTrip/img/ico_payment_payco.png" alt="페이코 결제" class="w50"></li>
                    <li>법인카드</li>
                    <li>휴대폰결제</li>
                </ul>
                <ul class="PayHow_tab">
                    <li>
                        <div class="savePayHow">
                            <input id="PayHow1" type="checkbox" class="agree_checkbox">
                            <label for="PayHow1">이 결제수단을 다음에도 사용</label>
                        </div>
                    </li><!-- //카카오페이 탭 -->
                    <li>
                        <div class="savePayHow">
                            <input id="PayHow2" type="checkbox" class="agree_checkbox">
                            <label for="PayHow2">이 결제수단을 다음에도 사용</label>
                        </div>
                    </li><!-- //토스 탭 -->
                    <li>
                        <div class="savePayHow">
                            <input id="PayHow3" type="checkbox" class="agree_checkbox">
                            <label for="PayHow3">이 결제수단을 다음에도 사용</label>
                        </div>
                        <div class="card_select">
                            <div class="select_box w_60 marb10">
                                <select title="카드를 선택해주세요.">
                                    <option value="">우리</option>
                                    <option value="">신한</option>
                                    <option value="">비씨(페이북)</option>
                                    <option value="">현대</option>
                                    <option value="">삼성</option>
                                    <option value="">롯데</option>
                                    <option value="">KB국민</option>
                                    <option value="">NH채움</option>
                                    <option value="">하나(외환)</option>
                                    <option value="">씨티</option>
                                    <option value="">광주</option>
                                    <option value="">수협</option>
                                    <option value="">제주</option>
                                    <option value="">신협체크</option>
                                    <option value="">전북</option>
                                    <option value="">MG새마을금고</option>
                                    <option value="">저축은행체크</option>
                                    <option value="">우체국카드</option>
                                    <option value="">카카오뱅크</option>
                                    <option value="">KDB산업은행</option>
                                    <option value="">케이뱅크</option>
                                </select>
                            </div>
                            <div class="select_box w_60">
                                <select title="일시불">
                                    <option value="">일시불</option>
                                    <option value="">2개월</option>
                                    <option value="">3개월</option>
                                    <option value="">4개월</option>
                                </select>
                            </div>
                        </div>
                    </li><!-- //신용카드 탭-->
                    <li>
                        <div class="savePayHow">
                            <input id="PayHow4" type="checkbox" class="agree_checkbox">
                            <label for="PayHow4">이 결제수단을 다음에도 사용</label>
                        </div>
                        <div class="cashReceipts">
                            <input id="cashReceipts" type="checkbox" class="agree_checkbox">
                            <label for="cashReceipts">현금 영수증 신청</label>
                        </div>
                        <div class="cashReceiptsInfo w_60">
                            <div class="left">
                                <strong class="block marb4">개인소득공제용</strong>
                                <p>휴대폰번호: <span>010-2544-5026</span></p>
                            </div>
                            <div class="right">
                                <span class="blue cursor">변경</span>
                            </div>
                        </div>
                        <div class="cashReceiptsInfoChange">
                            <input type="radio" id="cashReceipt1" class="radio" name="cashReceipt">
                            <label for="cashReceipt1">개인소득공제용</label>
                            <input type="radio" id="cashReceipt2" class="radio" name="cashReceipt">
                            <label for="cashReceipt2">사업자증빙용</label>
                            <input type="text" id="cashReceipt_phone" class="w_60 block mart8" title="휴대폰 번호를 입력하세요." placeholder="휴대폰 번호를 입력하세요.">
                        </div>
                    </li><!-- //간편계좌이체 탭 -->
                    <li>
                        <div class="savePayHow">
                            <input id="PayHow2" type="checkbox" class="agree_checkbox">
                            <label for="PayHow2">이 결제수단을 다음에도 사용</label>
                        </div>
                    </li><!-- //페이코 탭 -->
                    <li>
                        <div class="savePayHow">
                            <input id="PayHow2" type="checkbox" class="agree_checkbox">
                            <label for="PayHow2">이 결제수단을 다음에도 사용</label>
                        </div>
                    </li><!-- //법인카드 탭 -->
                    <li>
                        <div class="savePayHow">
                            <input id="PayHow2" type="checkbox" class="agree_checkbox">
                            <label for="PayHow2">이 결제수단을 다음에도 사용</label>
                        </div>
                    </li><!-- //휴대폰결제 탭 -->
                </ul>
            </div>
        </div>

        <div class="cont cont6">
            <div class="inner main_cont">
                <div class="agreeBox mart8">
                    <div class="agreeAll">
                        <input id="agreeAll" type="checkbox" class="agree_checkbox">
                        <label for="agreeAll">전체 동의</label>
                    </div>
                    <span class="el padtb10"></span>
                    <div class="agree agree01">
                        <input id="agree01" type="checkbox" class="agree_checkbox" name="sub_agree">
                        <label for="agree01"><em class="orange">[필수]</em>렌터카 이용 및 취소/환불규정 동의</label>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div class="agree agree02">
                        <input id="agree02" type="checkbox" class="agree_checkbox" name="sub_agree">
                        <label for="agree02"><em class="orange">[필수]</em>개인정보 수집 및 이용 동의</label>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <span class="el padtb10"></span>
                    <div class="agree agree03">
                        <input id="agree03" type="checkbox" class="agree_checkbox" name="sub_agree">
                        <label for="agree03"><em class="orange">[필수]</em>개인정보 제3자 제공 동의</label>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>

                
                <div class="buttonArea mart20">
                    <button class="button" onclick="location.href='#'">결제</button>
                </div>
            </div>
        </div>



        <!-- 팝업 -->
        <div id="pay_agree01Pop" class="popup">
            <div>
                <div class="popup_inner">
                    <div class="closeIcon"></div><!-- //닫기버튼 -->
    
                    <h3>렌터카 이용 및 취소/환불규정 동의</h3>
                    
                    <div class="txt">
                        <strong>제 1 조 (목적)</strong>
                        <ol>
                            <li class="gray">이 약관은 "캐플릭스"(이하 "회사"이라 한다.)에서 운영하는 온라인 서비스의 이용조건 및 절차에 관한 사항을 명시하고, 전자상거래 관련 서비스(이하 "서비스"라 한다.)를 이용함에 있어 회사와 이용자의 권리, 의무 및 책임사항을 정하는 것을 목적으로 합니다.</li>
                            <li class="gray">회원가입에 대한 내용을 충분히 숙지하신 후 가입하여 주시고, 이 약관은 본 회사에서 운영하는 모든 서비스를 이용하는 모든 회원에게 적용되며 이를 읽고 이해하는 것은 귀하의 책임입니다. 「인터넷, 정보통신망, 모바일 및 스마트 장치 등을 이용하는 전자상거래에 대하여도 그 성질에 반하지 않는 한 이 약관을 준용합니다.</li>
                        </ol>
    
                        <strong class="mart20">제 2 조 (용어의 정의)</strong>
                        <ol>
                            <li class="gray">이 약관은 "캐플릭스"(이하 "회사"이라 한다.)에서 운영하는 온라인 서비스의 이용조건 및 절차에 관한 사항을 명시하고, 전자상거래 관련 서비스(이하 "서비스"라 한다.)를 이용함에 있어 회사와 이용자의 권리, 의무 및 책임사항을 정하는 것을 목적으로 합니다.</li>
                            <li class="gray">회원가입에 대한 내용을 충분히 숙지하신 후 가입하여 주시고, 이 약관은 본 회사에서 운영하는 모든 서비스를 이용하는 모든 회원에게 적용되며 이를 읽고 이해하는 것은 귀하의 책임입니다. 「인터넷, 정보통신망, 모바일 및 스마트 장치 등을 이용하는 전자상거래에 대하여도 그 성질에 반하지 않는 한 이 약관을 준용합니다.</li>
                        </ol>
    
                        <strong class="mart20">제 2 조 (용어의 정의)</strong>
                        <ol>
                            <li class="gray">이 약관은 "캐플릭스"(이하 "회사"이라 한다.)에서 운영하는 온라인 서비스의 이용조건 및 절차에 관한 사항을 명시하고, 전자상거래 관련 서비스(이하 "서비스"라 한다.)를 이용함에 있어 회사와 이용자의 권리, 의무 및 책임사항을 정하는 것을 목적으로 합니다.</li>
                            <li class="gray">회원가입에 대한 내용을 충분히 숙지하신 후 가입하여 주시고, 이 약관은 본 회사에서 운영하는 모든 서비스를 이용하는 모든 회원에게 적용되며 이를 읽고 이해하는 것은 귀하의 책임입니다. 「인터넷, 정보통신망, 모바일 및 스마트 장치 등을 이용하는 전자상거래에 대하여도 그 성질에 반하지 않는 한 이 약관을 준용합니다.</li>
                        </ol>
    
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
                    <div class="btn" onclick="location.href='#'">
                        동의
                    </div>
                </div>
            </div>
        </div><!-- //동의팝업1 -->

        <div id="pay_agree02Pop" class="popup">
            <div>
                <div class="popup_inner">
                    <div class="closeIcon"></div><!-- //닫기버튼 -->
    
                    <h3>개인정보 수집 및 이용 동의</h3>
                    
                    <div class="txt">
                        <strong>제 1 조 (목적)</strong>
                        <ol>
                            <li class="gray">이 약관은 "캐플릭스"(이하 "회사"이라 한다.)에서 운영하는 온라인 서비스의 이용조건 및 절차에 관한 사항을 명시하고, 전자상거래 관련 서비스(이하 "서비스"라 한다.)를 이용함에 있어 회사와 이용자의 권리, 의무 및 책임사항을 정하는 것을 목적으로 합니다.</li>
                            <li class="gray">회원가입에 대한 내용을 충분히 숙지하신 후 가입하여 주시고, 이 약관은 본 회사에서 운영하는 모든 서비스를 이용하는 모든 회원에게 적용되며 이를 읽고 이해하는 것은 귀하의 책임입니다. 「인터넷, 정보통신망, 모바일 및 스마트 장치 등을 이용하는 전자상거래에 대하여도 그 성질에 반하지 않는 한 이 약관을 준용합니다.</li>
                        </ol>
    
                        <strong class="mart20">제 2 조 (용어의 정의)</strong>
                        <ol>
                            <li class="gray">이 약관은 "캐플릭스"(이하 "회사"이라 한다.)에서 운영하는 온라인 서비스의 이용조건 및 절차에 관한 사항을 명시하고, 전자상거래 관련 서비스(이하 "서비스"라 한다.)를 이용함에 있어 회사와 이용자의 권리, 의무 및 책임사항을 정하는 것을 목적으로 합니다.</li>
                            <li class="gray">회원가입에 대한 내용을 충분히 숙지하신 후 가입하여 주시고, 이 약관은 본 회사에서 운영하는 모든 서비스를 이용하는 모든 회원에게 적용되며 이를 읽고 이해하는 것은 귀하의 책임입니다. 「인터넷, 정보통신망, 모바일 및 스마트 장치 등을 이용하는 전자상거래에 대하여도 그 성질에 반하지 않는 한 이 약관을 준용합니다.</li>
                        </ol>
    
                        <strong class="mart20">제 2 조 (용어의 정의)</strong>
                        <ol>
                            <li class="gray">이 약관은 "캐플릭스"(이하 "회사"이라 한다.)에서 운영하는 온라인 서비스의 이용조건 및 절차에 관한 사항을 명시하고, 전자상거래 관련 서비스(이하 "서비스"라 한다.)를 이용함에 있어 회사와 이용자의 권리, 의무 및 책임사항을 정하는 것을 목적으로 합니다.</li>
                            <li class="gray">회원가입에 대한 내용을 충분히 숙지하신 후 가입하여 주시고, 이 약관은 본 회사에서 운영하는 모든 서비스를 이용하는 모든 회원에게 적용되며 이를 읽고 이해하는 것은 귀하의 책임입니다. 「인터넷, 정보통신망, 모바일 및 스마트 장치 등을 이용하는 전자상거래에 대하여도 그 성질에 반하지 않는 한 이 약관을 준용합니다.</li>
                        </ol>
    
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
                    <div class="btn" onclick="location.href='#'">
                        동의
                    </div>
                </div>
            </div>
        </div><!-- //동의팝업1 -->

        <div id="pay_agree03Pop" class="popup">
            <div>
                <div class="popup_inner">
                    <div class="closeIcon"></div><!-- //닫기버튼 -->
    
                    <h3>개인정보 제3자 제공 동의</h3>
                    
                    <div class="txt">
                        <strong>제 1 조 (목적)</strong>
                        <ol>
                            <li class="gray">이 약관은 "캐플릭스"(이하 "회사"이라 한다.)에서 운영하는 온라인 서비스의 이용조건 및 절차에 관한 사항을 명시하고, 전자상거래 관련 서비스(이하 "서비스"라 한다.)를 이용함에 있어 회사와 이용자의 권리, 의무 및 책임사항을 정하는 것을 목적으로 합니다.</li>
                            <li class="gray">회원가입에 대한 내용을 충분히 숙지하신 후 가입하여 주시고, 이 약관은 본 회사에서 운영하는 모든 서비스를 이용하는 모든 회원에게 적용되며 이를 읽고 이해하는 것은 귀하의 책임입니다. 「인터넷, 정보통신망, 모바일 및 스마트 장치 등을 이용하는 전자상거래에 대하여도 그 성질에 반하지 않는 한 이 약관을 준용합니다.</li>
                        </ol>
    
                        <strong class="mart20">제 2 조 (용어의 정의)</strong>
                        <ol>
                            <li class="gray">이 약관은 "캐플릭스"(이하 "회사"이라 한다.)에서 운영하는 온라인 서비스의 이용조건 및 절차에 관한 사항을 명시하고, 전자상거래 관련 서비스(이하 "서비스"라 한다.)를 이용함에 있어 회사와 이용자의 권리, 의무 및 책임사항을 정하는 것을 목적으로 합니다.</li>
                            <li class="gray">회원가입에 대한 내용을 충분히 숙지하신 후 가입하여 주시고, 이 약관은 본 회사에서 운영하는 모든 서비스를 이용하는 모든 회원에게 적용되며 이를 읽고 이해하는 것은 귀하의 책임입니다. 「인터넷, 정보통신망, 모바일 및 스마트 장치 등을 이용하는 전자상거래에 대하여도 그 성질에 반하지 않는 한 이 약관을 준용합니다.</li>
                        </ol>
    
                        <strong class="mart20">제 2 조 (용어의 정의)</strong>
                        <ol>
                            <li class="gray">이 약관은 "캐플릭스"(이하 "회사"이라 한다.)에서 운영하는 온라인 서비스의 이용조건 및 절차에 관한 사항을 명시하고, 전자상거래 관련 서비스(이하 "서비스"라 한다.)를 이용함에 있어 회사와 이용자의 권리, 의무 및 책임사항을 정하는 것을 목적으로 합니다.</li>
                            <li class="gray">회원가입에 대한 내용을 충분히 숙지하신 후 가입하여 주시고, 이 약관은 본 회사에서 운영하는 모든 서비스를 이용하는 모든 회원에게 적용되며 이를 읽고 이해하는 것은 귀하의 책임입니다. 「인터넷, 정보통신망, 모바일 및 스마트 장치 등을 이용하는 전자상거래에 대하여도 그 성질에 반하지 않는 한 이 약관을 준용합니다.</li>
                        </ol>
    
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
                    <div class="btn" onclick="location.href='#'">
                        동의
                    </div>
                </div>
            </div>
        </div><!-- //동의팝업1 -->



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
            $('.mb_header nav').css({
                'top': '100%',
                'opacity': '1'
            });
        } else {
            $('.mb_header nav').css({
                'top': '0',
                'opacity': '0'
            });
        }
    });




    /* 결제수단 */
    //결제수단 - 탭메뉴 연결
    var tab = $('.cont5 .PayHow li');
    var cont = $('.PayHow_tab li');

    $(document).on('click', '.cont5 .PayHow li', function(){
        $(this).addClass('active').siblings('li').removeClass('active');
       
        /* 같은번호끼리 연결 */
        var tabIndex = $(this).index();
        cont.eq(tabIndex).show().siblings('li').hide();

    });

    //현금영수증 정보변경
    $(document).on('click', '.cont5 .cashReceiptsInfo .blue', function(){
        $('.cont5 .cashReceiptsInfo').hide();
        $('.cont5 .cashReceiptsInfoChange').show();
    });





    /* 팝업공통 */
    $(document).on('click', '.cont6 .agreeBox .agree01 i', function(){
        $('#pay_agree01Pop').fadeIn();
    });
    $(document).on('click', '.cont6 .agreeBox .agree02 i', function(){
        $('#pay_agree02Pop').fadeIn();
    });
    $(document).on('click', '.cont6 .agreeBox .agree03 i', function(){
        $('#pay_agree03Pop').fadeIn();
    });


    $(document).on('click', '.closeIcon', function(){
        $(this).parents('.popup').fadeOut();
    });




    /* 전체동의 */
    $('#agreeAll').click(function () { //전체 체크박스 클릭
            if ($('#agreeAll').prop("checked")) {
                $('.cont6 .agree_checkbox').prop("checked", true);
            } else {
                $('.cont6 .agree_checkbox').prop("checked", false);
            }
        });
        $('.agree_checkbox').click(function () { //전체 체크박스 선택중 체크박스 하나를 풀었을때 "전체" 체크해제
            if ($('input[name="sub_agree"]:checked').length == 3) {
                $('#agreeAll').prop("checked", true);
            } else {
                $('#agreeAll').prop("checked", false);
            }
        });
</script>


</html>