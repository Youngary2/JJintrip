<?
define('_CHK_', true);
/* require_once $_SERVER["DOCUMENT_ROOT"]."/../common/bootstrap.php"; */
include $_SERVER['DOCUMENT_ROOT'] . "/responsive/JJinTrip/inc/head.php";
?>

</head>

<div id="snb" class="snb_cc">
					<h2 class="tit_snb">고객센터</h2>
					<div class="inner_snb">
						<ul>
                        <?php
                        $tab_number = isset($_GET['tab_number'])?$_GET['tab_number']:1;
                        ?>
							<li class="<?=$tab_number==1?"on":""?>"><a href="/responsive/JJinTrip/pages/notice.php?tab_number=1">공지사항<i class="fa-solid fa-angle-right"></i></a></li>
							<li class="<?=$tab_number==2?"on":""?>"><a href="/responsive/JJinTrip/pages/qna.php?tab_number=2">자주하는 질문<i class="fa-solid fa-angle-right"></i></a></li>
							<li class="<?=$tab_number==3?"on":""?>"><a href="/responsive/JJinTrip/pages/qnaPerson.php?tab_number=3">1:1 문의<i class="fa-solid fa-angle-right"></i></a></li>
						</ul>
					</div>
				</div>
