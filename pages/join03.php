<?
define('_CHK_', true);
/* require_once $_SERVER["DOCUMENT_ROOT"]."/../common/bootstrap.php"; */
include $_SERVER['DOCUMENT_ROOT'] . "/responsive/JJinTrip/inc/head.php";
?>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" type="text/css" href="/responsive/JJinTrip/css/join03.css">
</head>



<body>
    <div class="join">
        <div class="tiny_inner">
            <div class="logo">
                <a href="/">
                    <img src="/responsive/JJinTrip/img/JJinTrip_logo.png" alt="찐트립 로고">
                </a>
            </div>
            <div class="joinTit martb30">
                <h2 class="yg-jalnan">회원가입</h2>
                <!-- <span>약관 및 정보이용 안내에 동의해주세요.</span> -->
            </div>

            <div class="emLogin mart60 marb40">
                <ul class="writeBox">
                    <li class="marb20">
                        <label for="member_name" class="left_tit">아이디(이메일)</label>
                        <div class="right_box mart6">
                            <input type="text" id="member_name" class="w_766" title="example@naver.com" placeholder="example@naver.com">
                            <button class="inputButton">중복확인</button>
                        </div>
                        <span class="error red fs14 block mart8">이메일 형식이 맞지 않습니다. 다시 입력해 주세요.</span>
                    </li><!-- //아이디(이메일) -->
                    <li class="marb20">
                        <label for="member_password" class="left_tit">비밀번호</label>
                        <div class="right_box mart6">
                            <input type="text" id="member_password" class="w_100" title="영문,숫자,특수문자 8~16자 이내" placeholder="영문,숫자,특수문자 8~16자 이내">
                        </div>
                        <span class="error red fs14 block mart8">입력하신 비밀번호는 올바른 형식이 아닙니다.</span>
                    </li><!-- //비밀번호 -->
                    <li class="marb20">
                        <label for="member_password" class="left_tit">비밀번호 확인</label>
                        <div class="right_box mart6">
                            <input type="text" id="member_password" class="w_100" title="확인을 위해 한번 더 입력해주세요." placeholder="확인을 위해 한번 더 입력해주세요.">
                        </div>
                        <span class="error red fs14 block mart8">비밀번호가 일치하지 않습니다.</span>
                    </li><!-- //비밀번호 확인 -->
                    <li class="marb20">
                        <label for="member_name" class="left_tit">이름</label>
                        <div class="right_box mart6">
                            <input type="text" id="member_name" class="w_100" title="이름">
                        </div>
                    </li><!-- //이름 -->
                    <li class="marb20">
                        <label class="left_tit">생년월일</label>
                        <div class="right_box mart6">
                            <input type="text" class="w_34">
                            <span class="golbang"> 년 </span>
                            <input type="text" class="w_20">
                            <span class="golbang"> 월 </span>
                            <input type="text" class="w_20">
                            <span class="golbang"> 일 </span>

                            <input type="radio" id="yang" class="radio" name="yang_eum">
                            <label for="yang" class="marr5 mart4">양력</label>

                            <input type="radio" id="eum" class="radio" name="yang_eum">
                            <label for="eum">음력</label>
                        </div>
                    </li><!-- //생년월일 -->
                    <li>
                        <label class="left_tit">휴대전화</label>
                        <div class="right_box mart6">
                            <input type="text" id="member_phone" class="w_100" title="'-'를 제외하고 입력해주세요." placeholder="'-'를 제외하고 입력해주세요.">
                        </div>
                    </li><!-- //휴대전화 -->
                </ul>
            </div>

            <div class="buttonArea mart50 marb60">
                <button class="button w_100" onclick="location.href='/responsive/JJinTrip/pages/join04.php'">확인</button>
            </div>

        </div>
    </div>



</body>


</html>