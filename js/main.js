$(function () {
    /* 메인배너 슬릭 */
    $('.main .main_banner').slick({
        dots: true,
        //slidesToShow: 4,
        //slideToScroll: 1,
        infinite: false, //기본값이 true 이거해야 순서대로 나옴 + 왼쪾이 짤리는거 방지
        slide: 'li',
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 100, //다음 페이지로 돌아갈때 팍!돌아가지않고 1초동안 돌아감
        autoplay: true,
        autoplaySpeed: 10000,
        pauseOnHover: true,
        draggable: true, //데스크탑 드래그 활성화


        responsive : [
            {
                breakpoint: 768, //화면사이즈 768px
                settings: {
                    slidesToShow: 1.2,
                    slideToScroll: 1,
                }
            }


            
        ]

    });


    /* cont4 슬릭 */
    $('.cont4_slick').slick({
        infinite: false, //기본값이 true 이거해야 순서대로 나옴 + 왼쪾이 짤리는거 방지
        slidesToShow: 5.3,
        slideToScroll: 1,
        arrows:false,
        dots:false,


        responsive : [
            {
                breakpoint: 1024, //화면사이즈 1024px
                settings: {
                    slidesToShow: 4.3,
                    slideToScroll: 1,
                }
            },
            {
                breakpoint: 768, //화면사이즈 768px
                settings: {
                    slidesToShow: 3.4,
                    slideToScroll: 1,
                }
            },
            {
                breakpoint: 500, //화면사이즈 500px
                settings: {
                    slidesToShow: 2.4,
                    slideToScroll: 1,
                }
            }


            
        ]
    });

    
    /* cont5 슬릭 */
    $('.cont5_slick').slick({
        infinite: false, //기본값이 true 이거해야 순서대로 나옴 + 왼쪾이 짤리는거 방지
        slidesToShow: 4.5,
        //slideToScroll: 4,
        arrows:false,
        dots:false,


        responsive : [
            {
                breakpoint: 1024, //화면사이즈 1024px
                settings: {
                    slidesToShow: 3.3,
                    slideToScroll: 1,
                }
            },
            {
                breakpoint: 768, //화면사이즈 768px
                settings: {
                    slidesToShow: 2.3,
                    slideToScroll: 1,
                }
            },
            {
                breakpoint: 500, //화면사이즈 500px
                settings: {
                    slidesToShow: 1.3,
                    slideToScroll: 1,
                }
            }


            
        ]
    });










});