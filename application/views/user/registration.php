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
                <div class="col col-10 col-lg-9">
                    <!-- <h3 style="margin-top:50px;">예약</h3> -->
                    <!-- 여행일자 및 항공편 선택 -->
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col col-12 col-lg-9">
                                <h3 class="font-color-black">여행일자 및 항공편</h3>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col col-12 col-sm-4 col-md-3 align-self-center text-right">
                                            여행일자
                                        </div>
                                        <div class="col col-12 col-sm-8 col-md-9">
                                            <label for="depart-date-1" class="mr-5">
                                                <input type="radio" name="depart-date" id="depart-date-1" class="depart-date mr-1" value="0318" checked>
                                                <span>
                                                    3월 18일
                                                </span>
                                            </label>
                                            <label for="depart-date-2">
                                                <input type="radio" name="depart-date" id="depart-date-2" class="depart-date mr-1" value="0319">
                                                <span>
                                                    3월 19일
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col col-12 col-sm-4 col-md-3 align-self-center text-right">
                                            항공편
                                        </div>
                                        <div class="col col-12 col-sm-8 col-md-9">
                                            <div class="input-wrapper type-select">
                                                <select name="flight_id" id="flight_id">
                                                    <option value="" class="none_select" checked>
                                                        항공편을 선택해주세요.
                                                    </option>

                                                    <!-- 3월 18일 -->
                                                    <option value="" class="0318">
                                                        대한항공 (인천 - 싱가포르 KE643편, 싱가포르 - 인천 KE644편)
                                                    </option>
                                                    <option value="" class="0318">
                                                        대한항공 (인천 - 싱가포르 KE645편, 싱가포르 - 인천 KE646편)
                                                    </option>
                                                    <option value="" class="0318">
                                                        아시아나 (인천 - 싱가포르 OZ751편, 싱가포르 - 인천 OZ752편)
                                                    </option>
                                                    <option value="" class="0318">
                                                        싱가포르 (인천 - 싱가포르 SQ609편, 싱가포르 - 인천 SQ608편)
                                                    </option>
                                                    <option value="" class="0318">
                                                        싱가포르 (인천 - 싱가포르 SQ607편, 싱가포르 - 인천 SQ602편)
                                                    </option>
                                                    <!--// 3월 18일 -->


                                                    <!-- 3월 19일 -->
                                                    <option value="" class="0319">
                                                        대한항공 (인천 - 싱가포르 KE643편, 싱가포르 - 인천 KE644편)
                                                    </option>
                                                    <option value="" class="0319">
                                                        아시아나 (인천 - 싱가포르 OZ751편, 싱가포르 - 인천 OZ752편)
                                                    </option>
                                                    <option value="" class="0319">
                                                        싱가포르 (인천 - 싱가포르 SQ609편, 싱가포르 - 인천 SQ608편)
                                                    </option>
                                                    <option value="" class="0319">
                                                        싱가포르 (인천 - 싱가포르 SQ607편, 싱가포르 - 인천 SQ602편)
                                                    </option>
                                                    <option value="" class="0319">
                                                        제주항공 (인천 - 싱가포르 7C4055편, 싱가포르 - 인천 7C4056편)
                                                    </option>
                                                    <!--// 3월 19일 -->
                                                </select>
                                            </div>
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
                                        <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                            아이디
                                        </div>
                                        <div class="col col-12 col-xs-8 col-sm-9">
                                            <div class="input-wrapper type-input">
                                                <input type="text" name="user_id" id="user_id" value="<?php  echo trim($_SESSION["user_id"]);?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                            고객명
                                        </div>
                                        <div class="col col-12 col-xs-8 col-sm-9">
                                            <div class="input-wrapper type-input">
                                                <input type="text" name="user_name" id="user_name" value="<?php  echo trim($_SESSION["user_name"]);?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                            직책
                                        </div>
                                        <div class="col col-12 col-xs-8 col-sm-9">
                                            <div class="input-wrapper type-input">
                                                <input type="text" name="job_title" id="job_title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                            지점명
                                        </div>
                                        <div class="col col-12 col-xs-8 col-sm-9">
                                            <div class="input-wrapper type-input">
                                                <input type="text" name="branch_name" id="branch_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                            자비 추가 비용
                                        </div>
                                        <div class="col col-12 col-xs-8 col-sm-9">
                                            <div class="input-wrapper type-input">
                                                <input type="text" name="additional_pay_amount" id="additional_pay_amount">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
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
                                    </div>
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
                                <h5>본인</h5>
                                <div class="container">
                                    <div class="row">
                                        <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                            한글명
                                        </div>
                                        <div class="col col-12 col-xs-8 col-sm-9">
                                            <div class="input-wrapper type-input">
                                                <input type="text" name="user_name_kr" id="user_name_kr" value="<?php  echo trim($_SESSION["user_name"]);?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                            영문성
                                        </div>
                                        <div class="col col-12 col-xs-8 col-sm-3">
                                            <div class="input-wrapper type-input">
                                                <input type="text" name="user_name_eng_sirname" id="user_name_eng_sirname">
                                            </div>
                                        </div>
                                        <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                            영문명
                                        </div>
                                        <div class="col col-12 col-xs-8 col-sm-3">
                                            <div class="input-wrapper type-input">
                                                <input type="text" name="user_name_eng_name" id="user_name_eng_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                            법정 생년월일
                                        </div>
                                        <div class="col col-12 col-xs-8 col-sm-3">
                                            <div class="input-wrapper type-input">
                                                <input type="text" name="birthday" id="birthday">
                                            </div>
                                        </div>
                                        <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                            나이(만)
                                        </div>
                                        <div class="col col-12 col-xs-8 col-sm-3">
                                            <div class="input-wrapper type-input">
                                                <input type="text" name="age" id="age">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                            연락처
                                        </div>
                                        <div class="col col-12 col-xs-8 col-sm-3">
                                            <div class="input-wrapper type-input">
                                                <input type="text" name="contact_number" id="contact_number">
                                            </div>
                                        </div>
                                        <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                            성별
                                        </div>
                                        <div class="col col-12 col-xs-8 col-sm-3">
                                            <div class="input-wrapper type-input">
                                                <input type="text" name="gender" id="gender">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                            이메일
                                        </div>
                                        <div class="col col-12 col-xs-8 col-sm-9">
                                            <div class="input-wrapper type-input">
                                                <input type="text" name="email" id="email" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                            비고사항
                                        </div>
                                        <div class="col col-12 col-xs-8 col-sm-9">
                                            <div class="input-wrapper type-input">
                                                <input type="text" name="remarks" id="remarks" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--// 본인 -->
                                <!-- 동승자 1 -->
                                <div class="party-1" style="display:none;">
                                    <h5 class="mt-3">동승자 1</h5>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                                한글명
                                            </div>
                                            <div class="col col-12 col-xs-8 col-sm-9">
                                                <div class="input-wrapper type-input">
                                                    <input type="text" name="user_name_kr_1" id="user_name_kr_1" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                                영문성
                                            </div>
                                            <div class="col col-12 col-xs-8 col-sm-3">
                                                <div class="input-wrapper type-input">
                                                    <input type="text" name="user_name_eng_sirname_1" id="user_name_eng_sirname_1">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                                영문명
                                            </div>
                                            <div class="col col-12 col-xs-8 col-sm-3">
                                                <div class="input-wrapper type-input">
                                                    <input type="text" name="user_name_eng_name_1" id="user_name_eng_name_1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                                법정 생년월일
                                            </div>
                                            <div class="col col-12 col-xs-8 col-sm-3">
                                                <div class="input-wrapper type-input">
                                                    <input type="text" name="birthday_1" id="birthday_1">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                                나이(만)
                                            </div>
                                            <div class="col col-12 col-xs-8 col-sm-3">
                                                <div class="input-wrapper type-input">
                                                    <input type="text" name="age_1" id="age_1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                                연락처
                                            </div>
                                            <div class="col col-12 col-xs-8 col-sm-3">
                                                <div class="input-wrapper type-input">
                                                    <input type="text" name="contact_number_1" id="contact_number_1">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                                성별
                                            </div>
                                            <div class="col col-12 col-xs-8 col-sm-3">
                                                <div class="input-wrapper type-input">
                                                    <input type="text" name="gender_1" id="gender_1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                                이메일
                                            </div>
                                            <div class="col col-12 col-xs-8 col-sm-9">
                                                <div class="input-wrapper type-input">
                                                    <input type="text" name="email_1" id="email_1" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                                비고사항
                                            </div>
                                            <div class="col col-12 col-xs-8 col-sm-9">
                                                <div class="input-wrapper type-input">
                                                    <input type="text" name="remarks_1" id="remarks_1" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--// 동승자 1 -->
                                <!-- 동승자 2 -->
                                <div class="party-2" style="display:none;">
                                    <h5 class="mt-3">동승자 2</h5>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                                한글명
                                            </div>
                                            <div class="col col-12 col-xs-8 col-sm-9">
                                                <div class="input-wrapper type-input">
                                                    <input type="text" name="user_name_kr_2" id="user_name_kr_2" value="<?php  echo trim($_SESSION["user_name"]);?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                                영문성
                                            </div>
                                            <div class="col col-12 col-xs-8 col-sm-3">
                                                <div class="input-wrapper type-input">
                                                    <input type="text" name="user_name_eng_sirname_2" id="user_name_eng_sirname_2">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                                영문명
                                            </div>
                                            <div class="col col-12 col-xs-8 col-sm-3">
                                                <div class="input-wrapper type-input">
                                                    <input type="text" name="user_name_eng_name_2" id="user_name_eng_name_2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                                법정 생년월일
                                            </div>
                                            <div class="col col-12 col-xs-8 col-sm-3">
                                                <div class="input-wrapper type-input">
                                                    <input type="text" name="birthday_2" id="birthday_2">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                                나이(만)
                                            </div>
                                            <div class="col col-12 col-xs-8 col-sm-3">
                                                <div class="input-wrapper type-input">
                                                    <input type="text" name="age_2" id="age_2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                                연락처
                                            </div>
                                            <div class="col col-12 col-xs-8 col-sm-3">
                                                <div class="input-wrapper type-input">
                                                    <input type="text" name="contact_number_2" id="contact_number_2">
                                                </div>
                                            </div>
                                            <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                                성별
                                            </div>
                                            <div class="col col-12 col-xs-8 col-sm-3">
                                                <div class="input-wrapper type-input">
                                                    <input type="text" name="gender_2" id="gender_2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                                이메일
                                            </div>
                                            <div class="col col-12 col-xs-8 col-sm-9">
                                                <div class="input-wrapper type-input">
                                                    <input type="text" name="email_2" id="email_2" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                                비고사항
                                            </div>
                                            <div class="col col-12 col-xs-8 col-sm-9">
                                                <div class="input-wrapper type-input">
                                                    <input type="text" name="remarks_2" id="remarks_2" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--// 동승자 2 -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col col-6">
                                            <button type="button" onclick="setParty(0)" class="btn btn-primary btn-block">동반자 추가</button>
                                        </div>
                                        <div class="col col-6">
                                            <button type="button" onclick="setParty(1)" class="btn btn-danger btn-block">동반자 삭제</button>
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
                                <h3 class="font-color-black">결제 정보</h3>
                                <div class="container">
                                    <div class="row">
                                        <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                            카드정보
                                        </div>
                                        <div class="col col-12 col-xs-8 col-sm-9 credit-card-form">
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
                                        <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                            유효기간
                                        </div>
                                        <div class="col col-12 col-xs-8 col-sm-9 credit-card-form">
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
                                        <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                            CVC
                                        </div>
                                        <div class="col col-12 col-xs-8 col-sm-9 credit-card-form">
                                            <div class="input-wrapper type-input">
                                                <input type="text" maxlength="3" name="credit_card-cvc">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                            할부선택
                                        </div>
                                        <div class="col col-12 col-xs-8 col-sm-9 credit-card-form">
                                            <div class="input-wrapper type-select">
                                                <select name="credit_card-installment">
                                                    <option value="1">
                                                        일시불
                                                    </option>
                                                    <option value="2">
                                                        2개월
                                                    </option>
                                                    <option value="3">
                                                        3개월
                                                    </option>
                                                    <option value="4">
                                                        4개월
                                                    </option>
                                                    <option value="5">
                                                        5개월
                                                    </option>
                                                </select>
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
                                <h3 class="font-color-black">여권 정보</h3>
                                <div class="container">
                                    <div class="row">
                                        <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                            본인 여권사본
                                        </div>
                                        <div class="col col-12 col-xs-8 col-sm-9">
                                            <div class="input-wrapper type-input">
                                                <input type="file" name="passport" id="passport">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row party-1" style="display:none;">
                                        <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                            동승자 여권사본 1
                                        </div>
                                        <div class="col col-12 col-xs-8 col-sm-9">
                                            <div class="input-wrapper type-input">
                                                <input type="file" name="passport" id="passport">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row party-2" style="display:none;">
                                        <div class="col col-12 col-xs-4 col-sm-3 align-self-center text-right">
                                            동승자 여권사본 2
                                        </div>
                                        <div class="col col-12 col-xs-8 col-sm-9">
                                            <div class="input-wrapper type-input">
                                                <input type="file" name="passport" id="passport">
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
            <div class="row justify-content-center">
                <div class="col col-12 col-lg-9">
                    <button type="submit" onclick="vertification()" class="btn btn-primary btn-block mt-3">등록</button>
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
function setParty(_this_id){

    if(_this_id == "0"){
        if(party == "0"){
            $(".party-1").show();
            party++;
        } else if(party == "1"){
            $(".party-2").show();
            party++;
        } else if(party == "2"){
            return false;
        }
    } else if(_this_id == "1"){
        if(party == "0"){
            return false;
        } else if(party == "1"){
            $(".party-1").hide();
            party--;
        } else if(party == "2"){
            $(".party-2").hide();
            party--;
        }
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
