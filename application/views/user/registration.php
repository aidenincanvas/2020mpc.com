<!doctype html>
<html lang="ko">
    <!-- Header include -->
    <?php include_once('u_header.php');?>
    <!--// Header include -->

    <link rel="stylesheet" href="/js/slick/slick.css"><!-- slick slider -->
    <link rel="stylesheet" href="/js/slick/slick-theme.css"><!-- slick slider -->

    <section id="registration-form" class="introduce-section first-section" style="padding-bottom:50px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-12 col-lg-9">
                    <!-- <h3 style="margin-top:50px;">예약</h3> -->
                    <!-- slick slider -->
                    <div class="reg-form-slider mb-3">
                        <!-- 여행일자 선택 -->
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col col-12">
                                    <h3>여행일자선택</h3>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col col-12 col-sm-6">
                                    <label for="travel-date-1">
                                        <input type="radio" name="travel-date" id="travel-date-1" class="mr-1">
                                        <span>
                                            3월 18일
                                        </span>
                                    </label>
                                </div>
                                <div class="col col-12 col-sm-6">
                                    <label for="travel-date-2">
                                        <input type="radio" name="travel-date" id="travel-date-2" class="mr-1">
                                        <span>
                                            3월 19일
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!--/ 여행일자 선택 -->
                        <!-- 항공편 선택 -->
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col col-12 col-lg-9">
                                    <h3>항공편선택</h3>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col table-label">
                                                항공편
                                            </div>
                                            <div class="col">
                                                <div class="input-wrapper type-select">
                                                    <select name="flight_id" id="flight_id">
                                                        <option value="">
                                                            대한항공 (인천 - 취리히 KE0917편, 밀라노 - 인천 KE0928편)
                                                        </option>
                                                        <option>
                                                            대한항공 (인천 - 취리히 KE0917편, 밀라노 - 인천 KE0928편)
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ 항공편 선택 -->
                        <!-- 여행자 정보 입력 -->
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col col-12 col-lg-9">
                                    <h3>여행자 정보</h3>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col table-label">
                                                아이디
                                            </div>
                                            <div class="col">
                                                <div class="input-wrapper type-input">
                                                    <input type="text" name="user_id" id="user_id" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col table-label">
                                                고객명
                                            </div>
                                            <div class="col">
                                                <div class="input-wrapper type-input">
                                                    <input type="text" name="user_name" id="user_name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col table-label">
                                                직책
                                            </div>
                                            <div class="col">
                                                <div class="input-wrapper type-input">
                                                    <input type="text" name="job_title" id="job_title">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col table-label">
                                                지점명
                                            </div>
                                            <div class="col">
                                                <div class="input-wrapper type-input">
                                                    <input type="text" name="branch_name" id="branch_name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col table-label">
                                                동승자 수
                                            </div>
                                            <div class="col">
                                                <div class="input-wrapper type-select">
                                                    <select name="party_number" id="party_number">
                                                        <option value="0">
                                                            동승자 없음
                                                        </option>
                                                        <option value="1">
                                                            1
                                                        </option>
                                                        <option value="2">
                                                            2
                                                        </option>
                                                        <option value="3">
                                                            3
                                                        </option>
                                                        <option value="4">
                                                            4
                                                        </option>
                                                        <option value="5">
                                                            5
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col table-label">
                                                자비 추가 비용
                                            </div>
                                            <div class="col">
                                                <div class="input-wrapper type-input">
                                                    <input type="text" name="additional_pay_amount" id="additional_pay_amount">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col table-label">
                                                결제여부
                                            </div>
                                            <div class="col">
                                                <div class="input-wrapper type-input">
                                                    <input type="text" name="paid_YN" id="paid_YN">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ 여행자 정보 입력 -->

                        <!-- 결제 정보 입력 -->
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col col-12 col-lg-9">
                                    <h3>결제 정보</h3>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col table-label">
                                                카드정보
                                            </div>
                                            <div class="col credit-card-form">
                                                <div class="input-wrapper type-input">
                                                    <input type="text" maxlength="4" name="credit_card-1">
                                                </div>
                                                <div class="input-wrapper type-input">
                                                    <input type="text" maxlength="4" name="credit_card-2">
                                                </div>
                                                <div class="input-wrapper type-input">
                                                    <input type="password" maxlength="4" name="credit_card-3">
                                                </div>
                                                <div class="input-wrapper type-input">
                                                    <input type="password" maxlength="4" name="credit_card-4">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col table-label">
                                                유효기간
                                            </div>
                                            <div class="col credit-card-form">
                                                <div class="input-wrapper type-select">
                                                    <select name="expired-month" id="expired-month">
                                                        <option value="0">
                                                            월
                                                        </option>
                                                        <option value="1">
                                                            1
                                                        </option>
                                                        <option value="2">
                                                            2
                                                        </option>
                                                        <option value="3">
                                                            3
                                                        </option>
                                                        <option value="4">
                                                            4
                                                        </option>
                                                        <option value="5">
                                                            5
                                                        </option>
                                                        <option value="6">
                                                            6
                                                        </option>
                                                        <option value="7">
                                                            7
                                                        </option>
                                                        <option value="8">
                                                            8
                                                        </option>
                                                        <option value="9">
                                                            9
                                                        </option>
                                                        <option value="10">
                                                            10
                                                        </option>
                                                        <option value="11">
                                                            11
                                                        </option>
                                                        <option value="12">
                                                            12
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="input-wrapper type-select">
                                                    <select name="expired-year" id="expired-year">
                                                        <option value="0">
                                                            연
                                                        </option>
                                                        <option value="20">
                                                            20
                                                        </option>
                                                        <option value="21">
                                                            21
                                                        </option>
                                                        <option value="22">
                                                            22
                                                        </option>
                                                        <option value="23">
                                                            23
                                                        </option>
                                                        <option value="24">
                                                            24
                                                        </option>
                                                        <option value="25">
                                                            25
                                                        </option>
                                                        <option value="26">
                                                            26
                                                        </option>
                                                        <option value="27">
                                                            27
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col table-label">
                                                CVC
                                            </div>
                                            <div class="col credit-card-form">
                                                <div class="input-wrapper type-input">
                                                    <input type="text" maxlength="3" name="credit_card-1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ 결제 정보 입력 -->
                        <!-- 여권 정보 입력 -->
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col col-12 col-lg-9">
                                    <h3>여권 정보</h3>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col table-label">
                                                여권사본
                                            </div>
                                            <div class="col">
                                                <div class="input-wrapper type-input">
                                                    <input type="file" name="passport" id="passport">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col table-label">
                                                선택관광
                                            </div>
                                            <div class="col">
                                                <div class="input-wrapper type-select">
                                                    <select name="optional_tour" id="optional_tour">
                                                        <option value="0">
                                                            동승자 없음
                                                        </option>
                                                        <option value="1">
                                                            1
                                                        </option>
                                                        <option value="2">
                                                            2
                                                        </option>
                                                        <option value="3">
                                                            3
                                                        </option>
                                                        <option value="4">
                                                            4
                                                        </option>
                                                        <option value="5">
                                                            5
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col table-label">
                                                선택관광 결제여부
                                            </div>
                                            <div class="col">
                                                <div class="input-wrapper type-input">
                                                    <input type="text" name="optional_tour_payment_YN" id="optional_tour_payment_YN">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col table-label">

                                            </div>
                                            <div class="col">
                                                <div class="input-wrapper type-input">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 여권 정보 입력 -->
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col col-12 col-lg-9">
                    <button type="submit" onclick="submit()" class="btn btn-primary btn-block">등록</button>
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


$(document).ready(function(){

    $('.first-section').css('top',navH + "px");


    $('.reg-form-slider').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        arrow:true
    });

});


$(window).scroll(function(){

});

function build_data(){
    var sendData = $("#registration-form").serialize();
    console.log(sendData);
}

function submit(){
    $.ajax({
        type: 'POST',
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
