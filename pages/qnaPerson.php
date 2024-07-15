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
                        1:1 문의 등록
                    </h2>
                </div>
                <!-- <div class="offer_infomation">
                    <ul>
                        <li>
                            티와이에프에서 추가적으로 판매되면 좋을 상품을 제안해주세요.
                        </li>
                        <li>
                            고객님의 의견을 발 빠르게 반영하여 더욱 편리한 티와이에프가 되겠습니다.
                        </li>
                        <li>
                            담당 MD가 제안해주신 의견을 실시간으로 모니터링할 예정이나, 벌도 답변 안내는 되지 않음을 양해부탁드립니다.
                        </li>
                    </ul>
                </div> -->
                <div class="board_writing_table">
                    <form id="write_form" enctype="multipart/form-data" method="post" action="/board/qna/write_ok.asp">
                        <input type="hidden" name="reg_id" value="<%=mem_id%>">
                        <input type="hidden" name="r_bbs_id" value="<%=bbs_id%>">

                        <table border="0" cellpadding="0" cellspacing="0" class="board_list_table none_border_bottom">
                            <colgroup>
                                <col width="85px">
                                <col width="">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th>제목</th>
                                    <td>
                                        <div class="select_box w130 marb10">
                                            <select class="qna_title_select" name="category" id="category">
                                                <option value="0">선택</option>
                                                
                                                <option value="1">배송지연/불만</option>
                                                
                                                <option value="2">반품문의</option>
                                                
                                                <option value="3">A/S문의</option>
                                                
                                                <option value="4">환불문의</option>
                                                
                                                <option value="5">주문결제문의</option>
                                                
                                                <option value="6">회원정보문의</option>
                                                
                                                <option value="7">취소문의</option>
                                                
                                                <option value="8">교환문의</option>
                                                
                                                <option value="9">상품정보문의</option>
                                                
                                                <option value="10">기타문의</option>
                                                
                                            </select>
                                        </div>
                                        <br>
                                        <input type="text" class="qna_title_name" name="title" id="title" maxlength="100">
                                    </td>
                                </tr>
                                
                                <tr>
                                    <th>작성자</th>
                                    <td>
                                        <input type="text" class="qna_writing_input1" name="reg_nm" id="reg_nm">
                                        <input type="hidden" name="non_member" value="Y">
                                    </td>
                                </tr>
                                <tr>
                                    <th>비밀번호</th>
                                    <td>
                                        <input type="password" class="qna_writing_input1" name="reg_pw" id="reg_pw">
                                    </td>
                                </tr>
                                
                                <!--
								<tr>
									<th>주문번호</th>
									<td>
										<input type="text" class="qna_writing_input1">
										<button class="qna_writing_btn1">주문조회</button>
									</td>
								</tr>
								<tr>
									<th>이메일</th>
									<td>
										<input type="text" class="qna_writing_input2">
										<span>
											<input type="checkbox" name="mailling" class="check_vertical">
											<span>답변수신을 이메일로 받겠습니다.</span>
										</span>
									</td>
								</tr>
								<tr>
									<th>문자메시지</th>
									<td>
										<input type="text" class="qna_writing_input3">
										<span>
											<input type="checkbox" name="sms" class="check_vertical">
											<span>답변수신을 문자메시지로 받겠습니다.</span>
										</span>
									</td>
								</tr>
								-->
                                <tr>
                                    <th>내용</th>
                                    <td>
                                        
                                        <div class="qna_writing_information">
                                            <strong>1:1 문의 작성 전 확인해주세요!</strong>
                                            <dl>
                                                <dt>반품/환불</dt>
                                                <dd>- 제품 하자 혹은 이상으로 반품 (환불)이 필요한 경우 사진과 함께 구체적인 내용을 남겨주세요.</dd>
                                            </dl>
                                            <dl>
                                                <dt>주문취소</dt>
                                                <dd>- 주문취소 신청은 배송일 전날 오후 6시까지 가능합니다. 오후 6시 이후에는 생산이 시작되어취소가 불가능합니다.
                                                </dd>
                                                <dd>- 주문상품의 부분 취소는 불가능합니다. 전체 주문취소 후 재구매해주세요.</dd>
                                            </dl>
                                            <dl>
                                                <dt>배송</dt>
                                                <dd>- 주문 완료 후 배송 방법은 변경이 불가능합니다.</dd>
                                                <dd>- 배송일 및 배송시간 지정은 불가능합니다.(예약배송 포함)</dd>
                                            </dl>
                                            <p class="star">주문취소 외 평일 오후 4시 (주말 공휴일 12시)까지 접수된 문의는 당일 다변드립니다. 이후 문의는 다음날 오전8시 부터 순차적으로 답변드립니다.</p>
                                        </div>
                                        
                                        <textarea class="editing_area" name="cntt" id="cntt"></textarea>
                                    </td>
                                </tr>
                                <!--
								<tr>
									<th>이미지</th>
									<td>
										<div class="qna_writing_file">
											<input type="file" name="file[]">
											<button>+ 업로드 추가</button>
										</div>
										<p class="qna_writing_file_info">- 파일은 최대 5개까지 업로드가 지원됩니다.</p>
									</td>
								</tr>
								-->
                                <tr>
                                    <th>비밀글여부</th>
                                    <td>
                                        <!-- <input id="agreeAll" type="checkbox" class="agree_checkbox">
                                        <label for="agreeAll">전체 약관 동의</label> -->

                                        <input type="checkbox" class="qna_writing_input1 qna_writing_checkbox agree_checkbox" name="lock" id="lock" value="Y" style="-webkit-appearance: checkbox;">
                                        <label for="lock" class="qna_writing_checkbox_label">사용</label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="board_writing_save_btn">
                            <button type="button" id="submit_btn">저장</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

     <!-- footer -->
     <? include $_SERVER['DOCUMENT_ROOT'] . "/responsive/JJinTrip/inc/footer.php"; ?>
</body>

</html>