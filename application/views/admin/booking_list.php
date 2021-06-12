<?php
//print_r($group_code_list);
?>
<!-- Header include -->
<?php include_once('a_header.php');?>
<!--// Header include -->

  <div class="row wrapper border-bottom white-bg page-heading">
      <div class="col-lg-10">
          <h2>Booking list</h2>
          <ol class="breadcrumb">
              <li>
                  <a href="/admin">Admin</a>
              </li>
              <li class="active">
                  <strong>Booking list</strong>
              </li>
          </ol>
      </div>
      <div class="col-lg-2">

      </div>
  </div>

  <div class="wrapper wrapper-content animated fadeInRight ecommerce">


    <div class="ibox-content m-b-sm border-bottom">
      <form id="frm_conditon">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <!--label class="control-label" for="product_name">사업단</label-->
                    <select name="group_code" id="group_code" class="form-control">
                        <option value="%" selected>사업단 선택</option>
                        <? for($i=0; $i< sizeof($group_code_list); $i++) { ?>
                        <option value="<?=$group_code_list[$i]["group_code"]?>"><?=$group_code_list[$i]["group_nm"]?></option>
                        <? } ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <!--label class="control-label" for="price">지점</label-->
                    <select name="branch_code" id="branch_code" class="form-control">
                        <option value="%" selected>지점 선택</option>
                        <? for($i=0; $i< sizeof($branch_code_list); $i++) { ?>
                        <option value="<?=$branch_code_list[$i]["branch_code"]?>"><?=$branch_code_list[$i]["branch_nm"]?></option>
                        <? } ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <!--label class="control-label" for="status">검색타입 선택</label-->
                    <select name="inq_type" id="inq_type" class="form-control">
                        <option value="%" selected>검색타입 선택</option>
                        <option value="emp_no">MP코드번호</option>
                        <option value="name">이름</option>
                        <option value="mobile">연락처</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <!--label class="control-label" for="status">여행지 전체</label-->
                    <select name="tour_id" id="tour_id" class="form-control">
                        <option value="%" selected>여행차수 전체</option>
                        <option value="1">1차수</option>
                        <option value="2">2차수</option>
                        <option value="3">Gold</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <input type="text" id="inq_txt" name="inq_txt" value="" placeholder="조회조건" class="form-control">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <button type="button" id="inq_submit" class="btn-primary btn">조회</button>
                </div>
            </div>
        </div>
      </form>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="ibox">
          <div class="ibox-content" style="overflow: scroll; overflow-x: scroll; overflow-y: hidden;">

            <table class="footable table table-stripped toggle-arrow-tiny booking_list" data-page-size="15" style="width: max-content; max-width: none;">
              <thead>
                <tr>

                  <!-- 여행정보 -->
                  <th data-toggle="true">예약코드</th>
                  <th data-hide="phone">선택여행지</th>
                  <th data-hide="phone">출발지</th>
                  <th data-hide="phone">출발일</th>
                  <th data-hide="phone">도착일</th>
                  <th data-hide="phone">호텔</th>

                  <!-- 신청자 -->
                  <th data-hide="phone">사번</th>
                  <th data-hide="phone">사원명</th>
                  <th data-hide="phone">신청일</th>

                  <!-- 여행자 정보 -->
                  <th data-hide="phone">관계</th>
                  <th data-hide="phone">개인비용<BR>추가참가자<BR>여부</th>

                  <th data-hide="phone,tablet">(한글)이름</th>
                  <th data-hide="phone,tablet">영문이름<BR>(이름 성)</th>
                  <th data-hide="phone">생년월일(만나이)</th>
                  <th data-hide="phone">성별</th>
                  <th data-hide="phone">연락처</th>
                  <th data-hide="phone">이메일</th>
                  <th data-hide="phone">여권유무</th>
                  <th data-hide="phone">여권번호</th>
                  <th data-hide="phone">여권등록일</th>
                  <th data-hide="phone">여권만료일</th>

                  <th data-hide="phone">비고사항</th> <!-- all -->
                  <!-- <th class="text-right" data-sort-ignore="true">Action</th> -->

                </tr>
              </thead>
              <tbody>

              </tbody>
              <tfoot>
                <tr>
                  <td colspan="22">
                    <ul class="pagination pull-right"></ul>
                  </td>
                </tr>
              </tfoot>
            </table>

          </div>
        </div>
      </div>
    </div>


  </div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

	<!-- Modal content-->
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">여권</h4>
	  </div>
	  <div class="modal-body" id="showdata">
		<img id="passport_image" src="https://via.placeholder.com/560x100" width="560px">
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	  </div>
	</div>

  </div>
</div>
<!-- Footer include -->
<?php include_once('a_footer.php');?>
<!--// Footer include -->
