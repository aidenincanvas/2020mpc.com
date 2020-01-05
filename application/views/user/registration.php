<!doctype html>
<html lang="ko">
    <!-- Header include -->
    <?php include_once('u_header.php');?>
    <!--// Header include -->
    <!-- <section class="img-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col col-12 inner-box h-100">
                    <h2 class="page-title">
                        <em class="keyword">열정</em>과 <em class="keyword">가능성</em>이 만나는 곳
                    </h2>
                    <div class="background-text">
                        Singapore
                    </div>
                    <img src="/images/introduce/lady-in-park.jpg" class="background">
                </div>
            </div>
        </div>
    </section> -->
    <section class="introduce-section first-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-12 col-lg-9" style="padding-bottom:50px;">
                    <h3 style="margin-top:50px;">예약</h3>
                    <div id="registration-form" class="container">
                        <div class="row">
                            <div class="col table-label">
                                아이디
                            </div>
                            <div class="col">
                                <div class="input-wrapper type-input">
                                    <input type="text" name="user_id" id="user_id">
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
                        <div class="row">
                            <div class="col table-label">
                                카드정보
                            </div>
                            <div class="col">
                                <div class="input-wrapper type-input">
                                    <input type="text" name="credit_card" id="credit_card">
                                </div>
                            </div>
                        </div>
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
                                    <button type="submit" onclick="submit()" class="btn btn-primary btn-block">등록</button>
                                </div>
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
</body>
<script type="text/javascript">

var navH = $("nav").outerHeight();


$(document).ready(function(){

    $('.first-section').css('top',navH + "px");




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
        url : "json.php?mode=",
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
