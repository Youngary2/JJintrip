<?
define('_CHK_', true);
/* require_once $_SERVER["DOCUMENT_ROOT"]."/../common/bootstrap.php"; */
include $_SERVER['DOCUMENT_ROOT'] . "/responsive/JJinTrip/inc/head.php";
?>


<link rel="stylesheet" type="text/css" href="/responsive/JJinTrip//css/sub.css" />
<link rel="stylesheet" type="text/css" href="/responsive/JJinTrip//css/board.css" />


</head>

<body>
     <!-- header -->
     <? include $_SERVER['DOCUMENT_ROOT'] . "/responsive/JJinTrip/inc/header.php"; ?>

    <!--Content-->
    <div class="lists">
        <div class="inner">
            <!-- bbs_left -->
            <? include $_SERVER['DOCUMENT_ROOT'] . "/responsive/JJinTrip/inc/bbs_left.php"; ?>
    


            <div class="page_section">
                <div class="head_aticle">
                    <h2 class="tit">
                        공지사항
                        <span>스트클라이밍의 새로운 소식들과 유용한 정보들을 확인하세요.</span>
                    </h2>
                </div>

                <div class="board_table">
                    <div class="board_top_section marb20">
                        <div class="select_box">
                            <select class="qna_title_select" id="category_sel">
                                <option value="">전체</option>
                                
                                    <option value="1">????</option>
                                    
                                    <option value="2">공통</option>
                                    
                                    <option value="3">투어</option>
                                    
                                    <option value="4">티켓&입장권</option>
                                    
                                    <option value="5">차량</option>
                                    
                                    <option value="6">서비스 이용 및 기타</option>
                                    
                            </select>
                        </div><!-- //셀렉트박스 -->

                        <div class="board_search_right">
                            <form action="/board/notice/list.asp" method="get">
                                <input type="hidden" name="bbs_id" value="notice">
                                <input type="text" name="srcstr" value="">
                                <button type="submit"><i class="fa fa-search" style="color:#ffffff;"></i></button>
                            </form>
                        </div>
                    </div><!-- //셀렉트박스+검색 -->
                    
                    
                    <table border="0" cellpadding="0" cellspacing="0" class="board_list_table">
                        <colgroup>
                            <col width="10%">
                            <col width="50%">
                            <col width="15%">
                            <col width="15%">
                            <col width="10%">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th>번호</th>
                                <th>제목</th>
                                <th>작성자</th>
                                <th>작성일</th>
                                <th>조회</th>
                            </tr>
                            <tr>
                                <th>153</th>
                                <th>가나다라마자사다자사가나다라마자사다자사가나다라마자사다자사가나다라마자사다자사가나다라마자가나다라마자사다자사가나다라마자사다자사가나다라마자사다가나다라마자사다자사가나다라마자사다자사가나다라마자사다자사자사가나다라마자사다자사사다자사가나다라마자사다자사</th>
                                <th>가가자다</th>
                                <th>2022.10.25</th>
                                <th>58</th>
                            </tr>
                        </tbody>
                    </table>
                    <div class="layout_pagination">
                        <div class="paging"><ul><li>&lt;</li><li>&gt;</li></ul></div>
                    </div>
                    <div class="board_search_section">
                        <!--
							<div class="board_search_left">
								<ul>
									<li>· 검색어</li>
									<li>
										<input type="checkbox" class="board_search_checkbox">
										<label>이름</label>
									</li>
									<li>
										<input type="checkbox" class="board_search_checkbox">
										<label>제목</label>
									</li>
									<li>
										<input type="checkbox" class="board_search_checkbox">
										<label>내용</label>
									</li>
								</ul>
							</div>
							-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <? include $_SERVER['DOCUMENT_ROOT'] . "/responsive/JJinTrip/inc/footer.php"; ?>
</body>

</html>