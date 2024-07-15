<?
define('_CHK_', true);
/* require_once $_SERVER["DOCUMENT_ROOT"]."/../common/bootstrap.php"; */
include $_SERVER['DOCUMENT_ROOT'] . "/responsive/JJinTrip/inc/head.php";
?>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" type="text/css" href="/responsive/JJinTrip/css/city_pick.css">
</head>
<script src="/responsive/JJinTrip/js/main.js"></script>


<body>
    <div class="topTit padtb10 inner">
        <h1 class="yg-jalnan">도시 선택</h1>
    </div>

    <div class="now_city yg-jalnan inner">
        현재 도시: <span>방콕</span>
    </div>

    <div class="pick_city inner">
        <ul class="list">
            <li class="text_box">
                <div class="depth1">
                    <img src="../img/flag_1.png" alt="말레이시아" class="h30">
                    <h1 class="title yg-jalnan marl10">말레이시아</h1>
                    <i class="fa-solid fa-sort-down"></i>
                </div>

                <ul class="depth2">
                    <li>도시1</li>
                    <li>도시2</li>
                    <li>도시3</li>
                </ul>
            </li>
            <li class="text_box">
                <div class="depth1">
                    <img src="../img/flag_2.png" alt="필리핀" class="h30">
                    <h1 class="title yg-jalnan marl10">필리핀</h1>
                    <i class="fa-solid fa-sort-down"></i>
                </div>
                <ul class="depth2">
                    <li>도시1</li>
                    <li>도시2</li>
                    <li>도시3</li>
                </ul>
            </li>
            <li class="text_box">
                <div class="depth1">
                    <img src="../img/flag_3.png" alt="싱가폴" class="h30">
                    <h1 class="title yg-jalnan marl10">싱가폴</h1>
                    <i class="fa-solid fa-sort-down"></i>
                </div>
                <ul class="depth2">
                    <li>도시1</li>
                    <li>도시2</li>
                    <li>도시3</li>
                </ul>
            </li>
            <li class="text_box">
                <div class="depth1">
                    <img src="../img/flag_4.png" alt="태국" class="h30">
                    <h1 class="title yg-jalnan marl10">태국</h1>
                    <i class="fa-solid fa-sort-down"></i>
                </div>
                <ul class="depth2">
                    <li>방콕</li>
                    <li>파타야</li>
                    <li>푸켓</li>
                </ul>
            </li>
        </ul>
    </div>
</body>
</html>