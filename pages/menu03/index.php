<?
define('_CHK_', true);
/* require_once $_SERVER["DOCUMENT_ROOT"]."/../common/bootstrap.php"; */
include $_SERVER['DOCUMENT_ROOT'] . "/responsive/JJinTrip/inc/head.php";
?>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" type="text/css" href="/responsive/JJinTrip/css/sub.css">
<link rel="stylesheet" type="text/css" href="/responsive/JJinTrip/css/menu/menu.css">
<link rel="stylesheet" type="text/css" href="/responsive/JJinTrip/css/menu/menu03.css">
</head>


<body>
    <!-- header -->
    <? include $_SERVER['DOCUMENT_ROOT'] . "/responsive/JJinTrip/inc/header.php"; ?>


    <div class="menu menu03">
        <div class="main_background">
        </div>

        <div class="contentWrap">
            <div class="inner">
                <h3 class="bigTit in_block f-fff">픽업,렌터카 찾으세요?</h3>

                <div id="kindPick" class="whiteBox">
                    <ul class="tabMenu">
                        <li class="active">공항픽업</li>
                        <li>공항샌딩</li>
                        <li>렌터카</li>
                    </ul>
                    <ul class="tabCont">
                        <li class="pickSend pickUp">
                            <div class="startPoint airportBox">
                                <span>출발지:공항명</span>
                                <input type="text" onfocus="this.blur()">

                                <div class="airport_pop whiteBox">
                                    <div>
                                        <div class="airport">
                                            <p>공항</p>
                                            <ul>
                                                <li>Bangkok Suvarnabhumi Airport</li>
                                                <li>돈므앙 국제공항</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- //공항명 팝업 -->
                            </div>
                            <div class="endPoint hotelBox">
                                <span>목적지:주소 또는 호텔명</span>
                                <input type="text" onfocus="this.blur()">

                                <div class="hotel_pop whiteBox">
                                    <div>
                                        <div class="hotel">
                                            <p>주소 또는 호텔명</p>
                                            <ul>
                                                <li>Grand Palace</li>
                                                <li>Grand Palace2</li>
                                                <li>Grand Palace3</li>
                                                <li>Bangkok Suvarnabhumi</li>
                                                <li>돈므앙 국제공항</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- //호텔명 팝업 -->
                            </div>
                            <div class="pickUpDate">
                                <span>픽업 날짜</span>
                                <input type="text" onfocus="this.blur()">

                                <div class="calendar_container">
                                    <button class="left_button"> &lt </button>
                            
                                    <table class="calendar">
                                        <th class="cl_title">2월</th>
                                        <tbody>
                                            <tr class="week">
                                                <td class="day">일</td>
                                                <td class="day">월</td>
                                                <td class="day">화</td>
                                                <td class="day">수</td>
                                                <td class="day">목</td>
                                                <td class="day">금</td>
                                                <td class="day">토</td>
                                            </tr>
                                            <tr>
                                                <!-- 달력 첫 번째 줄-->
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                            </tr>
                                            <tr>
                                                <!-- 달력 두 번째 줄-->
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                            </tr>
                                            <tr>
                                                <!-- 달력 세 번째 줄-->
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                            </tr>
                                            <tr>
                                                <!-- 달력 네 번째 줄-->
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                            </tr>
                                            <tr>
                                                <!-- 달력 다섯 번째 줄-->
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                            </tr>
                                            <tr>
                                                <!-- 달력 여섯 번째 줄-->
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                                <td class="calendar_days" roll="button"> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                            
                                    <button class="right_button"> > </button>
                                </div><!-- //달력팝업 -->
                            </div>
                            <div class="pickUpTime">
                                <span>픽업 시간</span>
                                <input type="text" onfocus="this.blur()">
                            </div>
                            <div class="passenger">
                                <span>탑승객 수</span>
                                <input type="text">
                            </div>

                            <div class="searchBtn">
                                <button class="search" onclick="location.href='http://jldylee.dothome.co.kr/responsive/JJinTrip/pages/cars.php'">검색</button>
                            </div>
                        </li><!-- //공항픽업 내용 -->
                        <li class="pickSend">
                            <div class="startPoint hotelBox">
                                <span>출발지:주소 또는 호텔명</span>
                                <input type="text" onfocus="this.blur()">

                                <div class="hotel_pop whiteBox">
                                    <div>
                                        <div class="hotel">
                                            <p>주소 또는 호텔명</p>
                                            <ul>
                                                <li>Grand Palace</li>
                                                <li>Grand Palace2</li>
                                                <li>Grand Palace3</li>
                                                <li>Bangkok Suvarnabhumi</li>
                                                <li>돈므앙 국제공항</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- //호텔명 팝업 -->
                            </div>
                            <div class="endPoint airportBox">
                                <span>목적지:공항명</span>
                                <input type="text" onfocus="this.blur()">

                                <div class="airport_pop whiteBox">
                                    <div>
                                        <div class="airport">
                                            <p>공항</p>
                                            <ul>
                                                <li>Bangkok Suvarnabhumi Airport</li>
                                                <li>돈므앙 국제공항</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- //공항명 팝업 -->
                            </div>
                            <div class="pickUpDate">
                                <span>픽업 날짜</span>
                                <input type="text" onfocus="this.blur()">
                            </div>
                            <div class="pickUpTime">
                                <span>픽업 시간</span>
                                <input type="text" onfocus="this.blur()">
                            </div>
                            <div class="passenger">
                                <span>탑승객 수</span>
                                <input type="text">
                            </div>

                            <div class="searchBtn">
                                <button class="search">검색</button>
                            </div>
                        </li><!-- //공항샌딩 내용 -->
                        <li class="rentCar">
                            <div class="otherReturnCheck">
                                <input id="otherReturn" type="checkbox" class="agree_checkbox">
                                <label for="otherReturn">다른 곳에서 반납하고 싶어요.</label>
                            </div>
                            
                            <div class="startPoint">
                                <span>픽업 장소</span>
                                <input type="text" onfocus="this.blur()">
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

                            <div class="searchBtn">
                                <button class="search">검색</button>
                            </div>
                        </li><!-- //렌터카 내용 -->
                    </ul>
                </div><!-- //차량 검색박스 -->

                <ul class="cardBox mart20">
                    <li>
                        <img src="/responsive/JJinTrip/img/ico_location.png" class="w20 marb14">
                        <p class="title">최저가 비교</p> 
                        <p class="desc">전국 13,000개 이상의 렌터카를<br>한 곳에서 비교하세요.</p> 
                    </li>
                    <li>
                        <img src="/responsive/JJinTrip/img/ico_location.png" class="w20 marb14">
                        <p class="title">최저가 비교</p> 
                        <p class="desc mart10">전국 13,000개 이상의 렌터카를<br>한 곳에서 비교하세요.</p> 
                    </li>
                    <li>
                        <img src="/responsive/JJinTrip/img/ico_location.png" class="w20 marb14">
                        <p class="title">최저가 비교</p> 
                        <p class="desc mart10">전국 13,000개 이상의 렌터카를<br>한 곳에서 비교하세요.</p> 
                    </li>
                    <li>
                        <img src="/responsive/JJinTrip/img/ico_location.png" class="w20 marb14">
                        <p class="title">최저가 비교</p> 
                        <p class="desc mart10">전국 13,000개 이상의 렌터카를<br>한 곳에서 비교하세요.</p> 
                    </li>
                </ul>

                <div class="acodianBox mart60 marb80">
                    <h3 class="tit">자주 묻는 질문</h3>

                    <div class="faq-area">
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <span class="padr10">Q.</span>
                                FAQ 테스트 2번 입니다.
                                <span class="accordion-item-arrow"></span>
                            </div>
                            <div class="accordion-content" style="display: none;">
                                <p>FAQ 테스트 2번 내용 입니다.&nbsp;</p>
                            </div>
                        </div>
                    
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <span class="padr10">Q.</span>
                                FAQ 테스트 1번 입니다.
                                <span class="accordion-item-arrow"></span>
                            </div>
                            <div class="accordion-content">
                                <p>FAQ 테스트 1번 내용 입니다.&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div><!-- //아코디언박스 -->

                <div class="couponWrap">
                    <h3 class="tit">쿠폰 받아가세요</h3>

                    <div class="coupLists">
                        <!-- <div class="cardWrap">
                            <div class="card cardLeft ver1">
                                <p class="coupon_title">COUPON</p>
                                <p class="desc">5,000원 이상 구매시/최대 10,000원 할인</p>
                                <p class="sale">10%</p>
                                <p class="desc">5,000원 이상 구매시/최대 10,000원 할인</p>
                                <p class="desc">5,000원 이상 구매시/최대 10,000원 할인</p>
                            </div>
                            <div class="card cardRight">
                                <p>SALE COUPON</p>
                                <img src="/img/barcode.png">
                            </div>
                        </div> -->
                        <div class="coup_list">
                            <div class="top">
                                <div class="couponCard">
                                    <p class="coupon_cate">국내숙소</p>
                                    <p class="sale">10%</p>
                                </div>
                                <div class="descs">
                                    <p class="coupon_title marb4 fs15">11월 미리예약 3만원_호펜_10월</p>
                                    <p class="date marb2 gray">2022.10.11 ~ 2022.10.31</p>
                                    <p class="count red">10일 12시간 41분 남음</p>
                                    <p class="desc01 gray mart10">
                                        600,000 원 이상 구매 시<br>
                                        600,000 원 이상 구매 시<br>
                                        600,000 원 이상 구매 시<br>
                                        숙박,연박 상품 구매 시
                                    </p>
                                </div>
                            </div>
                            <button class="button coup_down">쿠폰 다운로드</button>
                        </div>
                        <div class="coup_list">
                            <div class="top">
                                <div class="couponCard">
                                    <p class="coupon_cate">국내숙소</p>
                                    <p class="sale">10%</p>
                                </div>
                                <div class="descs">
                                    <p class="coupon_title marb4 fs15">11월 미리예약 3만원_호펜_10월</p>
                                    <p class="date marb2 gray">2022.10.11 ~ 2022.10.31</p>
                                    <p class="count red">10일 12시간 41분 남음</p>
                                    <p class="desc01 gray mart10">
                                        600,000 원 이상 구매 시<br>
                                        숙박,연박 상품 구매 시
                                    </p>
                                </div>
                            </div>
                            <button class="button coup_down">쿠폰 다운로드</button>
                        </div>
                        <div class="coup_list">
                            <div class="top">
                                <div class="couponCard">
                                    <p class="coupon_cate">국내숙소</p>
                                    <p class="sale">10%</p>
                                </div>
                                <div class="descs">
                                    <p class="coupon_title marb4 fs15">11월 미리예약 3만원_호펜_10월</p>
                                    <p class="date marb2 gray">2022.10.11 ~ 2022.10.31</p>
                                    <p class="count red">10일 12시간 41분 남음</p>
                                    <p class="desc01 gray mart10">
                                        600,000 원 이상 구매 시<br>
                                        600,000 원 이상 구매 시<br>
                                        600,000 원 이상 구매 시<br>
                                        숙박,연박 상품 구매 시
                                    </p>
                                </div>
                            </div>
                            <button class="button coup_down">쿠폰 다운로드</button>
                        </div>
                        <div class="coup_list">
                            <div class="top">
                                <div class="couponCard">
                                    <p class="coupon_cate">국내숙소</p>
                                    <p class="sale">10%</p>
                                </div>
                                <div class="descs">
                                    <p class="coupon_title marb4 fs15">11월 미리예약 3만원_호펜_10월</p>
                                    <p class="date marb2 gray">2022.10.11 ~ 2022.10.31</p>
                                    <p class="count red">10일 12시간 41분 남음</p>
                                    <p class="desc01 gray mart10">
                                        600,000 원 이상 구매 시<br>
                                        600,000 원 이상 구매 시<br>
                                        600,000 원 이상 구매 시<br>
                                        600,000 원 이상 구매 시<br>
                                        600,000 원 이상 구매 시<br>
                                        숙박,연박 상품 구매 시
                                    </p>
                                </div>
                            </div>
                            <button class="button coup_down">쿠폰 다운로드</button>
                        </div>
                        <div class="coup_list">
                            <div class="top">
                                <div class="couponCard">
                                    <p class="coupon_cate">국내숙소</p>
                                    <p class="sale">10%</p>
                                </div>
                                <div class="descs">
                                    <p class="coupon_title marb4 fs15">11월 미리예약 3만원_호펜_10월</p>
                                    <p class="date marb2 gray">2022.10.11 ~ 2022.10.31</p>
                                    <p class="count red">10일 12시간 41분 남음</p>
                                    <p class="desc01 gray mart10">
                                        600,000 원 이상 구매 시<br>
                                        숙박,연박 상품 구매 시
                                    </p>
                                </div>
                            </div>
                            <button class="button coup_down">쿠폰 다운로드</button>
                        </div>
                        <div class="coup_list">
                            <div class="top">
                                <div class="couponCard">
                                    <p class="coupon_cate">국내숙소</p>
                                    <p class="sale">10%</p>
                                </div>
                                <div class="descs">
                                    <p class="coupon_title marb4 fs15">11월 미리예약 3만원_호펜_10월</p>
                                    <p class="date marb2 gray">2022.10.11 ~ 2022.10.31</p>
                                    <p class="count red">10일 12시간 41분 남음</p>
                                    <p class="desc01 gray mart10">
                                        600,000 원 이상 구매 시<br>
                                        600,000 원 이상 구매 시<br>
                                        숙박,연박 상품 구매 시
                                    </p>
                                </div>
                            </div>
                            <button class="button coup_down">쿠폰 다운로드</button>
                        </div>

                    </div>
                </div><!-- //쿠폰 -->
            </div>
        </div>
        
    </div>

    <div class="pickupTimeSet">
        <!-- 할차례!!!!! -->
    </div><!-- //픽업시간 팝업 -->

    
    




    <!-- footer -->
    <? include $_SERVER['DOCUMENT_ROOT'] . "/responsive/JJinTrip/inc/footer.php"; ?>

    
</body>

<script>
    //탭메뉴
    var tabMenu = $('#kindPick .tabMenu > li');
    var tabBox = $('#kindPick .tabCont > li');

     $(document).on('click', '#kindPick .tabMenu > li', function () {
        $(this).addClass('active').siblings().removeClass('active');

        var tabMenuIndex = $(this).index();
        //console.log(tabMenuIndex);        

        tabBox.eq(tabMenuIndex).stop().css({'display':'flex','flex-wrap':'wrap'}).siblings('li').hide();
    });
    


    /* 아코디언박스 */
    /* FAQ */
    $(document).on('click', '.accordion-item', function(){
        //alrt('dfasdf');
        $(this).toggleClass('active');

        if($(this).hasClass('active')){
            $(this).find('.accordion-content').stop().slideDown(200);
        }
        else{
            $(this).find('.accordion-content').stop().slideUp(200);
        }
    });




    //달력팝업
    $(document).on('click', '.menu03 .pickSend > div.pickUpDate', function(){
        $('.calendar_container').stop().slideDown().css({'display':'flex'});
    });
    // 외부영역 클릭 시 팝업 닫기
    $(document).mouseup(function (e) {
        var LayerPopup = $(".calendar_container");
        if (LayerPopup.has(e.target).length === 0) {
            LayerPopup.stop().slideUp();
        }
    });


    const calendarDays = document.querySelectorAll(".calendar_days"),
        calendarTitle = document.querySelector(".cl_title"),
        leftButton = document.querySelector(".left_button"),
        rightButton = document.querySelector(".right_button"),
        calendar = document.querySelector(".calendar");


    class Calendar {
        constructor(year, month) {
            this.today = new Date(year, month);
            this.year = this.today.getFullYear(),
                this.month = this.today.getMonth(),
                this.date = this.today.getDate(),
                this.day = this.today.getDay()
        }


        getFirstDay() {
            const firstDate = new Date(this.year, this.month);
            return firstDate.getDay();
        }

        getLastDay() {
            let wholeDays = [];
            if ((this.year % 4 === 0 && this.year % 100 !== 0) || (this.year % 400 === 0)) {
                wholeDays = [31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
            } else {
                wholeDays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
            }
            return wholeDays[this.month];
        }

        fillCalendar() {
            this.initCalendar();
            calendarTitle.innerHTML = `${this.year}년 ${this.month + 1}월`
            const firstDay = this.getFirstDay();
            const lastDay = this.getLastDay();
            let day = 1;
            for (let i = firstDay; i < calendarDays.length; i++) {
                if (day <= lastDay) {
                    calendarDays[i].innerHTML = `<button class = "day_button">${day}</button>`;
                    day++;
                }

            }
        }

        initCalendar() {
            calendarDays.forEach((e) => {
                e.innerHTML = "";
            });
        }


        drawCalendar() {
            let change = 0;
            const today = new Date();
            let calendarInstance = new Calendar(today.getFullYear(), today.getMonth() + change);

            calendarInstance.fillCalendar();

            leftButton.addEventListener("click", (e) => {
                e.stopPropagation();
                change--;
                calendarInstance = new Calendar(today.getFullYear(), today.getMonth() + change);
                calendarInstance.fillCalendar();
                this.updateCalendarStyle();
            });
            rightButton.addEventListener("click", (e) => {
                e.stopPropagation();
                change++;
                calendarInstance = new Calendar(today.getFullYear(), today.getMonth() + change);
                calendarInstance.fillCalendar();
                this.updateCalendarStyle();
            });
        }


        updateCalendarStyle() {
            const dayButtons = document.querySelectorAll(".day_button");
            let firstSelectedDay = 0;
            let lastSelectedDay = 0;
            let clickCount = 0;

            // 달력 스타일 초기화
            dayButtons.forEach((element) => {
                element.classList.remove("day_selected");
                calendarDays.forEach((e) => e.classList.remove("gray"));
            })


            // 달력 날짜들에 클릭 이벤트 추가
            dayButtons.forEach((element) => {
                element.addEventListener("click", (event) => {
                    event.target.classList.toggle("day_selected");

                    clickCount++;

                    // 선택 일자 타입 변환
                    if (firstSelectedDay === 0) {
                        firstSelectedDay = Number(event.target.innerText);
                    } else {
                        lastSelectedDay = Number(event.target.innerText);
                    }

                    // 클릭 횟수 2회 넘어가면 달력 스타일 초기화
                    if (clickCount > 2) {
                        dayButtons.forEach((e) => {
                            e.parentNode.classList.remove("gray");
                            e.classList.remove("day_selected");
                            clickCount = 0;
                            firstSelectedDay = 0;
                            lastSelectedDay = 0;
                        });
                    }

                    // 선택 일자 사이에 회색 배경 적용
                    if (firstSelectedDay !== 0 && lastSelectedDay !== 0) {
                        dayButtons.forEach((e) => {
                            const day = Number(e.innerText);
                            if (day >= firstSelectedDay && day <= lastSelectedDay) {
                                e.parentNode.classList.toggle("gray");
                            }
                        });
                    }

                    // 선택 일자 중 왼쪽값이 오른쪽 값보다 크면 회색 배경 삭제 
                    if (firstSelectedDay > lastSelectedDay) {
                        dayButtons.forEach((e) => {
                            e.parentNode.classList.remove("gray");
                        });
                    }
                });
            });


            // 달력 날짜들에 호버링 이벤트 추가
            dayButtons.forEach((element) => {
                element.addEventListener("mouseenter", (event) => {
                    event.target.classList.add("day_hover")
                });
            });

            dayButtons.forEach((element) => {
                element.addEventListener("mouseleave", (event) => {
                    event.target.classList.remove("day_hover")
                });
            });
        }



        handleEvents() {
            this.drawCalendar();
            this.updateCalendarStyle();
        }

    }


    const cal = new Calendar();
    cal.handleEvents();

</script>

</html>