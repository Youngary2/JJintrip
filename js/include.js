$(function () {
    /* 탑버튼 */
    $(window).scroll(function () {
        var $scrollTop = $(this).scrollTop();
        console.log($scrollTop);

        if ($scrollTop < 1000) {
            $('.top_btn').fadeOut();
        } else {
            $('.top_btn').fadeIn();
        }
    });

    //클릭시 맨위로 올라가도록
    $(document).on('click', '.top_btn', function(){
        //alert('sffsdfs');
        $('html,body').animate({
            scrollTop: 0
        }, 600);
    });

    

    /* pc header */
    $(document).on('click', '.pc_header nav .navList li', function(){
        $(this).addClass('active').siblings().removeClass('active');
    });


    /* 모바일 right_menu */
    $(document).on('click', '.mb_header .bar_menu', function(){
        $(this).toggleClass('on');

        if($(this).hasClass('on')){
            $('.mb_right_menu').show().find('>div').animate({right:"0"}, 300);
        }
        else{
        }
    });
    // 외부영역 클릭 시 팝업 닫기
    $(document).mouseup(function (e) {
        var rightMenu = $(".mb_right_menu > div");
        if (rightMenu.has(e.target).length === 0) {
            rightMenu.parent('.mb_right_menu').hide();
        }
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






    /* 달력팝업  -  오류생김 ㅠ */
    /* $(document).on('click', '.pickUpDate', function(){
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
    cal.handleEvents(); */







    /* 공항선택 팝업 */
    $(document).on('click', '.airportBox', function(){
        $(this).find('.airport_pop').stop().slideDown();
    });
    // 외부영역 클릭 시 팝업 닫기
    $(document).mouseup(function (e) {
        var LayerPopup = $(".airport_pop");
        if (LayerPopup.has(e.target).length === 0) {
            LayerPopup.stop().slideUp();
        }
    });



    /* 호텔선택 팝업 */
    $(document).on('click', '.hotelBox', function(){
        $(this).find('.hotel_pop').stop().slideDown();
    });
    // 외부영역 클릭 시 팝업 닫기
    $(document).mouseup(function (e) {
        var LayerPopup = $(".hotel_pop");
        if (LayerPopup.has(e.target).length === 0) {
            LayerPopup.stop().slideUp();
        }
    });


});