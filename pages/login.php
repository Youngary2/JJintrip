<?
define('_CHK_', true);
/* require_once $_SERVER["DOCUMENT_ROOT"]."/../common/bootstrap.php"; */
include $_SERVER['DOCUMENT_ROOT'] . "/responsive/JJinTrip/inc/head.php";
?>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" type="text/css" href="/responsive/JJinTrip/css/login.css">
</head>



<body>
    <div class="join">
        <div class="tiny_inner">
            <div class="logo">
                <a href="#">
                    <img src="../img/JJinTrip_logo.png" alt="찐트립 로고">
                </a>
            </div>
            <div class="joinTit martb30">
                <h2 class="yg-jalnan">로그인</h2>
                <span>방콕여행, 찐트립으로 시작하세요</span>
            </div>

            <div class="emLogin mart60 marb40">
                <div class="marb40">
                    <span>아이디(이메일)</span>
                    <input type="text" id="" class="email w_100" title="E-mail을 입력해주세요." placeholder="E-mail을 입력해주세요.">
                </div>
                <div>
                    <span>비밀번호</span>
                    <input type="text" id="" class="password w_100" title="비밀번호를 입력해주세요." placeholder="비밀번호를 입력해주세요.">
                </div>
                <div class="save mart8">
                    <div class="login_rememb">
                        <input id="loging" type="checkbox" class="agree_checkbox">
                        <label for="loging">로그인 유지</label>
                    </div>
                    <div class="id_rememb">
                        <input id="idSave" type="checkbox" class="agree_checkbox">
                        <label for="idSave">아이디 저장</label>
                    </div>
                </div>
                <div class="buttonArea mart20">
                    <button class="button w_100" onclick="location.href='#'">로그인</button>
                </div>
                <div class="finds mart20">
                    <a href="/responsive/JJinTrip/pages/idFind.php" class="find_id">
                        아이디 찾기
                    </a>
                    <a href="/responsive/JJinTrip/pages/passFind.php" class="find_pass">
                        비밀번호 찾기
                    </a>
                    <a href="/responsive/JJinTrip/pages/join.php" class="join blue">
                        회원가입
                    </a>
                </div>
            </div>

            <div class="iconWrap">
                <span class="el"><span class="gray">간편 로그인</span></span>
                <div class="list mart20">
                    <a href="#" class="naver"></a>
                    <a href="#" class="kakao"></a>
                    <a href="#" class="facebook"></a>
                </div>
            </div>

            
        </div>
    </div>
</body>
</html>