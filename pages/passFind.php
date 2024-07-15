<?
define('_CHK_', true);
/* require_once $_SERVER["DOCUMENT_ROOT"]."/../common/bootstrap.php"; */
include $_SERVER['DOCUMENT_ROOT'] . "/responsive/JJinTrip/inc/head.php";
?>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" type="text/css" href="/responsive/JJinTrip/css/passFind.css">
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
                <h2 class="yg-jalnan">비밀번호 찾기</h2>
                <span>찐트립의 가입된 정보를 입력하세요.</span>
            </div>

            <div class="emLogin mart60 marb40">
                <div class="marb40">
                    <span>아이디(이메일)</span>
                    <input type="text" id="" class="w_100" title="E-mail을 입력해주세요." placeholder="E-mail을 입력해주세요.">
                </div>
                <div>
                    <span>휴대전화</span>
                    <input type="text" id="" class="w_100" title="- 없이 번호만 입력해주세요." placeholder="- 없이 번호만 입력해주세요.">
                </div>
                <div class="buttonArea mart20">
                    <button class="button w_100" onclick="location.href='#'">확인</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>