<!doctype html>
<html lang="ko">
    <!-- Header include -->
    <?php include_once('u_header.php');?>
    <!--// Header include -->

    <link rel="stylesheet" href="/js/slick/slick.css"><!-- slick slider -->
    <link rel="stylesheet" href="/js/slick/slick-theme.css"><!-- slick slider -->

    <section id="registration-form" class="introduce-section first-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-12 col-lg-9">
                    <!-- <h3 style="margin-top:50px;">예약</h3> -->
                    <!-- 여행일자 및 항공편 선택 -->
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col col-12 col-lg-9">
                                <h3 class="font-color-black">여행일자 및 항공편</h3>
                                <div class="container">
                                    <div class="row text-center">
                                        <div class="col col-12">
                                            <div class="seat-board">
                                                <span class="title mr-2">잔여 좌석 갯수</span>
                                                <span class="available">87</span>/<span class="total">138</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">

                                        <div class="col col-12 col-sm-6">
                                            <label class="flight-selection">
                                                <h4 class="depart-date">
                                                    3월 18일
                                                </h4>
                                                <div class="flight-id">
                                                    대한항공 (인천 - 싱가포르 KE643편, 싱가포르 - 인천 KE644편)
                                                </div>
                                                <input type="hidden" name="flight-selection" checked>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ 여행일자 및 항공편 선택 -->
                    <!-- 고객 정보 입력 -->
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col col-12 col-lg-9">
                                <h3 class="font-color-black">고객 정보</h3>
                                <div class="container">
                                    <div class="row">
                                        <div class="col col-12 col-sm-6">
                                            <label class="input-title">
                                                아이디
                                            </label>
                                            <div class="input-wrapper type-input">
                                                <input type="text" name="user_id" id="user_id" value="<?php  echo trim($_SESSION["user_id"]);?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col col-12 col-sm-6">
                                            <label class="input-title">
                                                고객명
                                            </label>
                                            <div class="input-wrapper type-input">
                                                <input type="text" name="user_name" id="user_name" value="<?php  echo trim($_SESSION["user_name"]);?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-12 col-sm-6">
                                            <label class="input-title">
                                                직책
                                            </label>
                                            <div class="input-wrapper type-input">
                                                <input type="text" name="job_title" id="job_title" value="부장" readonly>
                                            </div>
                                        </div>

                                        <div class="col col-12 col-sm-6">
                                            <label class="input-title">
                                                지점명
                                            </label>
                                            <div class="input-wrapper type-input">
                                                <input type="text" name="branch_name" id="branch_name" value="해운대점" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="row">
                                        <div class="col col-12 col-xs-4 col-sm-3 align-self-center input-title">
                                            자비 추가 비용
                                        </div>
                                        <div class="col col-12 col-xs-8 col-sm-9">
                                            <div class="input-wrapper type-input">
                                                <input type="text" name="additional_pay_amount" id="additional_pay_amount">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-12 col-xs-4 col-sm-3 align-self-center input-title">
                                            결제여부
                                        </div>
                                        <div class="col col-12 col-xs-8 col-sm-9">
                                            <div class="input-wrapper type-select">
                                                <select name="paid_YN" id="paid_YN">
                                                    <option value="N">
                                                        결제미완료
                                                    </option>
                                                    <option value="Y">
                                                        결제완료
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ 고객 정보 입력 -->
                    <!-- 여행자 정보 입력 -->
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col col-12 col-lg-9">
                                <h3 class="font-color-black">여행자 정보</h3>
                                <!-- 본인 -->
                                <h5>
                                    본인
                                    <span class="badge badge-pill badge-primary">회사지원</span>
                                </h5>
                                <div class="container">
                                    <div class="row">
                                        <div class="col col-12 col-sm-6">
                                            <label class="input-title">
                                                한글명
                                            </label>
                                            <div class="input-wrapper type-input">
                                                <input type="text" name="user_name_kr" id="user_name_kr" value="<?php  echo trim($_SESSION["user_name"]);?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col col-12 col-sm-6">
                                            <label class="input-title">
                                                성별
                                            </label>
                                            <div class="input-wrapper type-input">
                                                <input type="text" name="gender" id="gender">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-12 col-sm-6">
                                            <label class="input-title">
                                                영문성
                                            </label>
                                            <div class="input-wrapper type-input">
                                                <input type="text" name="user_name_eng_sirname" id="user_name_eng_sirname">
                                            </div>
                                        </div>
                                        <div class="col col-12 col-sm-6">
                                            <label class="input-title">
                                                영문명
                                            </label>
                                            <div class="input-wrapper type-input">
                                                <input type="text" name="user_name_eng_name" id="user_name_eng_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-12 col-sm-6">
                                            <label class="input-title">
                                                법정 생년월일
                                            </label>
                                            <div class="input-wrapper type-input">
                                                <input type="text" name="birthday" id="birthday">
                                            </div>
                                        </div>
                                        <div class="col col-12 col-sm-6">
                                            <label class="input-title">
                                                나이(만)
                                            </label>
                                            <div class="input-wrapper type-input">
                                                <input type="text" name="age" id="age">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-12 col-sm-6">
                                            <label class="input-title">
                                                연락처
                                            </label>
                                            <div class="input-wrapper type-input">
                                                <input type="text" name="contact_number" id="contact_number">
                                            </div>
                                        </div>
                                        <div class="col col-12 col-sm-6">
                                            <label class="input-title">
                                                이메일
                                            </label>
                                            <div class="input-wrapper type-input">
                                                <input type="text" name="email" id="email" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-12">
                                            <label class="input-title">
                                                여권사본
                                            </label>
                                            <div class="input-wrapper type-input">
                                                <input type="file" name="passport" id="passport">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--// 본인 -->
                                <!-- 동승자 추가영역 -->
                                <div id="party-area">
                                </div>
                                <!--// 동승자 추가영역 -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col col-6">
                                            <button type="button" onclick="addParty()" class="btn btn-primary btn-block">동반자 추가</button>
                                        </div>
                                        <div class="col col-6">
                                            <button type="button" onclick="removeParty()" class="btn btn-danger btn-block">동반자 삭제</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ 여행자 정보 입력 -->
                    <!-- 추가 비고사항 -->
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col col-12 col-lg-9">
                                <h3 class="font-color-black">
                                    비고사항
                                    <input type="checkbox" name="remarks" id="remarks">
                                </h3>
                                <div class="container">
                                    <div class="row justify-content-end">
                                        <div class="col col-12">
                                            <div class="input-wrapper type-textarea">
                                                <textarea id="remark-text" name="remark-text" rows="8" disabled></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// 추가 비고사항 -->
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col col-12 col-lg-9">
                                <button type="submit" onclick="vertification()" class="btn btn-primary btn-block mt-3">등록</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <!-- Footer include -->
    <?php include_once('u_footer.php');?>
    <!--// Footer include -->

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
<script type="text/javascript">

var navH = $("nav").outerHeight();

var party = 0;

$(document).ready(function(){

    init();

    // 출발 일자 선택
    $(".depart-date").on("click",function(){

        var _this_id = $(this).val();

        selectDepartDate(_this_id);
    });

    // 알러지 선택
    $("#alerge_YN").on("change",function(){

        var _this_id = $(this).val();

        setAlerge(_this_id);
    });

    // 비고사항 선택
    $("#remarks").on("change",function(){

        var _this_id = $(this).prop('checked');

        setRemarks(_this_id);
    });

});

$(window).scroll(function(){

});


// 페이지 시작시 실행 액션
function init() {
    $('.first-section').css('top',navH + "px");

    $(".0319").hide();
}

// 출국 일자 선택 시
function selectDepartDate(_this_id){

    if(_this_id == "0318"){
        $(".0318").show();
        $(".0319").hide();
    } else if(_this_id == "0319"){
        $(".0318").hide();
        $(".0319").show();
    }

    $("#flight_id").prop('selectedIndex', 0);
}


// 동승자 추가
function addParty(){

    party ++;

    // 동승자 영역 추가
    var partyHtml = '';

    // 동승자 여권 추가
    var partyPassportHtml = '';


    partyHtml += '<div id="party-' + party + '" class="mt-5">';
    partyHtml += '  <h5 class="mt-3">동승자 ' + party + '</h5>';
    partyHtml += '      <div class="container">';
    partyHtml += '          <div class="row">';
    partyHtml += '              <div class="col col-12 col-xs-4 col-sm-3 align-self-center input-title">';
    partyHtml += '                  한글명';
    partyHtml += '              </div>';
    partyHtml += '              <div class="col col-12 col-xs-8 col-sm-9">';
    partyHtml += '                  <div class="input-wrapper type-input">';
    partyHtml += '                      <input type="text" name="user_name_kr_1" id="user_name_kr_1" value="">';
    partyHtml += '                  </div>';
    partyHtml += '              </div>';
    partyHtml += '          </div>';
    partyHtml += '          <div class="row">';
    partyHtml += '              <div class="col col-12 col-xs-4 col-sm-3 align-self-center input-title">';
    partyHtml += '                  영문성';
    partyHtml += '              </div>';
    partyHtml += '              <div class="col col-12 col-xs-8 col-sm-3">';
    partyHtml += '                  <div class="input-wrapper type-input">';
    partyHtml += '                      <input type="text" name="user_name_eng_sirname_1" id="user_name_eng_sirname_1">';
    partyHtml += '                  </div>';
    partyHtml += '              </div>';
    partyHtml += '              <div class="col col-12 col-xs-4 col-sm-3 align-self-center input-title">';
    partyHtml += '                  영문명';
    partyHtml += '              </div>';
    partyHtml += '              <div class="col col-12 col-xs-8 col-sm-3">';
    partyHtml += '                  <div class="input-wrapper type-input">';
    partyHtml += '                      <input type="text" name="user_name_eng_name_1" id="user_name_eng_name_1">';
    partyHtml += '                  </div>';
    partyHtml += '              </div>';
    partyHtml += '          </div>';
    partyHtml += '  <div class="row">';
    partyHtml += '      <div class="col col-12 col-xs-4 col-sm-3 align-self-center input-title">';
    partyHtml += '          법정 생년월일';
    partyHtml += '      </div>';
    partyHtml += '      <div class="col col-12 col-xs-8 col-sm-3">';
    partyHtml += '          <div class="input-wrapper type-input">';
    partyHtml += '              <input type="text" name="birthday_1" id="birthday_1">';
    partyHtml += '          </div>';
    partyHtml += '      </div>';
    partyHtml += '      <div class="col col-12 col-xs-4 col-sm-3 align-self-center input-title">';
    partyHtml += '          나이(만)';
    partyHtml += '      </div>';
    partyHtml += '      <div class="col col-12 col-xs-8 col-sm-3">';
    partyHtml += '          <div class="input-wrapper type-input">';
    partyHtml += '              <input type="text" name="age_1" id="age_1">';
    partyHtml += '          </div>';
    partyHtml += '      </div>';
    partyHtml += '  </div>';
    partyHtml += '  <div class="row">';
    partyHtml += '      <div class="col col-12 col-xs-4 col-sm-3 align-self-center input-title">';
    partyHtml += '          연락처';
    partyHtml += '      </div>';
    partyHtml += '      <div class="col col-12 col-xs-8 col-sm-3">';
    partyHtml += '          <div class="input-wrapper type-input">';
    partyHtml += '              <input type="text" name="contact_number_1" id="contact_number_1">';
    partyHtml += '          </div>';
    partyHtml += '      </div>';
    partyHtml += '      <div class="col col-12 col-xs-4 col-sm-3 align-self-center input-title">';
    partyHtml += '          성별';
    partyHtml += '      </div>';
    partyHtml += '      <div class="col col-12 col-xs-8 col-sm-3">';
    partyHtml += '          <div class="input-wrapper type-input">';
    partyHtml += '              <input type="text" name="gender_1" id="gender_1">';
    partyHtml += '          </div>';
    partyHtml += '      </div>';
    partyHtml += '  </div>';
    partyHtml += '  <div class="row">';
    partyHtml += '      <div class="col col-12 col-xs-4 col-sm-3 align-self-center input-title">';
    partyHtml += '          여권사본';
    partyHtml += '      </div>';
    partyHtml += '      <div class="col col-12 col-xs-8 col-sm-9">';
    partyHtml += '          <div class="input-wrapper type-input">';
    partyHtml += '              <input type="file" name="passport" id="passport" value="">';
    partyHtml += '          </div>';
    partyHtml += '      </div>';
    partyHtml += '  </div>';
    partyHtml += '  <div class="row">';
    partyHtml += '      <div class="col col-12 col-xs-4 col-sm-3 align-self-center input-title">';
    partyHtml += '          이메일';
    partyHtml += '      </div>';
    partyHtml += '      <div class="col col-12 col-xs-8 col-sm-9">';
    partyHtml += '          <div class="input-wrapper type-input">';
    partyHtml += '              <input type="text" name="email_1" id="email_1" value="">';
    partyHtml += '          </div>';
    partyHtml += '      </div>';
    partyHtml += '  </div>';
    partyHtml += '  <div class="row">';
    partyHtml += '      <div class="col col-12 col-xs-4 col-sm-3 align-self-center input-title">';
    partyHtml += '          비고사항';
    partyHtml += '      </div>';
    partyHtml += '      <div class="col col-12 col-xs-8 col-sm-9">';
    partyHtml += '          <div class="input-wrapper type-input">';
    partyHtml += '              <input type="text" name="remarks_1" id="remarks_1" value="">';
    partyHtml += '          </div>';
    partyHtml += '      </div>';
    partyHtml += '  </div>';
    partyHtml += '</div>';
    partyHtml += '      </div>';
    partyHtml += '  </div>';

    // 영역에 추가
    $("#party-area").append(partyHtml);



    // partyPassportHtml += '<div id="party-passport-' + party + '" class="row">';
    // partyPassportHtml += '  <div class="col col-12 col-xs-4 col-sm-3 align-self-center input-title">';
    // partyPassportHtml += '      동승자 여권사본 ' + party;
    // partyPassportHtml += '  </div>';
    // partyPassportHtml += '  <div class="col col-12 col-xs-8 col-sm-9">';
    // partyPassportHtml += '      <div class="input-wrapper type-input">';
    // partyPassportHtml += '          <input type="file" name="passport" id="passport">';
    // partyPassportHtml += '      </div>';
    // partyPassportHtml += '  </div>';
    // partyPassportHtml += '</div>';

    // 영역에 추가
    // $("#party-passport-area").append(partyPassportHtml);
}

function removeParty(){

    if(party == "0"){
        return false;
    } else {
        $("#party-" + party).remove();
        $("#party-passport-" + party).remove();

        party --;
    }
}

// 알러지 여부 및 설명
function setAlerge(_this_id){

    if(_this_id == "Y"){
        $("#alerge_explain").prop("disabled", false);
    } else if(_this_id == "N"){
        $("#alerge_explain").prop("disabled", true).val("");
    }

}

// 비고사항
function setRemarks(_this_id){

    if(_this_id == true){
        $("#remark-text").prop("disabled", false);
    } else if(_this_id == false){
        $("#remark-text").prop("disabled", true);
        $("#remark-text").val("");
    }

}



function build_data(){
    var sendData = $("#registration-form").serialize();
    console.log(sendData);
}

function vertification(){
    submit();
}

function submit(){
    $.ajax({
        type: 'POST',
        crossOrigin : true,
        url : "json_test.php",
        data: build_data(),
        dataType:"json",
        success : function(data, status, xhr) {
            console.log(data);
        }, error: function(jqXHR, textStatus, errorThrown) {
            console.log(jqXHR.responseText);
        }
    });
}

</script>
</html>
