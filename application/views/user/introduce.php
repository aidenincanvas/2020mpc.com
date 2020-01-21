<!doctype html>
<html lang="ko">
    <!-- Header include -->
    <?php include_once('u_header.php');?>
    <!--// Header include -->

    <section class="first-section" style="z-index:1020;">
        <div class="container-fluid" style="padding:0;">
            <div class="row no-gutters">
                <div class="col col-12">
                    <div class="img-wrapper" style="position:relative; overflow:hidden; width:100%; height:280px;">
                        <img src="/images/introduce/img-text-first-section.jpg" class="img-text-introduce">
                        <img src="/images/introduce/img-slide-singapore.jpg" class="first-section-background" style="min-width:1920px; margin-top:-60px;">
                    </div>
                </div>
            </div>
        </div>
        <div id="scroll-fix-tab">
            <div class="container">
                <div class="row">
                    <div class="col col-12">
                        <ul class="nav nav-tabs" id="contents-tab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">싱가포르 소개</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="tour-map-tab" data-toggle="tab" href="#tour-map" role="tab" aria-controls="profile" aria-selected="false">세부지역안내</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="prepare-tab" data-toggle="tab" href="#prepare" role="tab" aria-controls="contact" aria-selected="false">싱가포르 필수 팁</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="restaurant-tab" data-toggle="tab" href="#restaurant" role="tab" aria-controls="contact" aria-selected="false">센토사섬 즐기기</a>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- 서브 탭 -->
            <div class="container-fluid" style=" background:#fff;">

                <!-- 세부지역 안내 서브 탭 -->
                <div id="sub-tab-for-2" class="container sub-tab" style="display:none;">
                    <div class="row d-flex no-gutters">
                        <div class="col col-6 col-sm-4 col-lg-2">
                            <button type="button" class="btn btn-no-radius btn-block scroll-to-landmark" data-scroll-id="landmark-1">오챠드 로드</button>
                        </div>
                        <div class="col col-6 col-sm-4 col-lg-2">
                            <button type="button" class="btn btn-no-radius btn-block scroll-to-landmark" data-scroll-id="landmark-2">마리나베이 시티홀</button>
                        </div>
                        <div class="col col-6 col-sm-4 col-lg-2">
                            <button type="button" class="btn btn-no-radius btn-block scroll-to-landmark" data-scroll-id="landmark-3">리버 사이드</button>
                        </div>
                        <div class="col col-6 col-sm-4 col-lg-2">
                            <button type="button" class="btn btn-no-radius btn-block scroll-to-landmark" data-scroll-id="landmark-4">아랍스트리트, 부기스</button>
                        </div>
                        <div class="col col-6 col-sm-4 col-lg-2">
                            <button type="button" class="btn btn-no-radius btn-block scroll-to-landmark" data-scroll-id="landmark-5">차이나타운</button>
                        </div>
                        <div class="col col-6 col-sm-4 col-lg-2">
                            <button type="button" class="btn btn-no-radius btn-block scroll-to-landmark last-btn" data-scroll-id="landmark-6">센토사, 하버 프론트</button>
                        </div>
                    </div>
                </div>
                <!--/ 세부지역 안내 서브 탭 -->

                <!-- 싱가포르 필수 팁 서브 탭 -->
                <div id="sub-tab-for-3" class="container sub-tab" style="display:none;">
                    <div class="row d-flex no-gutters">
                        <div class="col col-6 col-sm-3">
                            <button type="button" class="btn btn-no-radius btn-block scroll-to-landmark" data-scroll-id="landmark-2-1">펀비버스</button>
                        </div>
                        <div class="col col-6 col-sm-3">
                            <button type="button" class="btn btn-no-radius btn-block scroll-to-landmark" data-scroll-id="landmark-2-2">칠리크랩<span class="font-circular-light">Best</span> 3</button>
                        </div>
                        <div class="col col-6 col-sm-3">
                            <button type="button" class="btn btn-no-radius btn-block scroll-to-landmark" data-scroll-id="landmark-2-3">맛있는 기념품</button>
                        </div>
                        <div class="col col-6 col-sm-3">
                            <button type="button" class="btn btn-no-radius btn-block scroll-to-landmark last-btn" data-scroll-id="landmark-2-4">싱가포르의 화려한 밤</button>
                        </div>
                    </div>
                </div>
                <!--/ 싱가포르 필수 팁 서브 탭 -->

                <!-- 센토사 섬 즐기기 서브 탭 -->
                <div id="sub-tab-for-4" class="container sub-tab" style="display:none;">
                    <div class="row d-flex no-gutters">
                        <div class="col col-6 col-sm-4">
                            <button type="button" class="btn btn-no-radius btn-block scroll-to-landmark" data-scroll-id="recommended-schedule-1">추천일정 1</button>
                        </div>
                        <div class="col col-6 col-sm-4">
                            <button type="button" class="btn btn-no-radius btn-block scroll-to-landmark" data-scroll-id="recommended-schedule-2">추천일정 2</button>
                        </div>
                        <div class="col col-6 col-sm-4">
                            <button type="button" class="btn btn-no-radius btn-block scroll-to-landmark last-btn" data-scroll-id="recommended-schedule-3">추천일정 3</button>
                        </div>
                    </div>
                </div>
                <!--/ 센토사 섬 즐기기 서브 탭 -->
            </div>
        </div>
    </section>
    <section class="introduce-section second-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tab-content" id="myTabContent">

                        <!-- 싱가포르 소개 -->
                        <?php include('introduce-tab-1.php');?>
                        <!--// 싱가포르 소개 -->

                        <!-- 세부지역안내 -->
                        <?php include('introduce-tab-2.php');?>
                        <!--// 세부지역안내 -->

                        <!-- 싱가포르 필수 팁 -->
                        <?php include('introduce-tab-3.php');?>
                        <!--// 싱가포르 필수 팁 -->

                        <!-- 추천 현지 맛집 -->
                        <?php include('introduce-tab-4.php');?>
                        <!--// 추천 현지 맛집 -->

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

var hitting_point = $("#scroll-fix-tab").offset().top;

var navH = $("nav").outerHeight();

var fixed_tab_H = $("#scroll-fix-tab").outerHeight();

var first_section_H = $(".first-section").outerHeight();

$(document).ready(function(){
    $('#menu-introduce').addClass('active');

    var margin_top_second = navH + first_section_H;

    $('.first-section').css('top',navH + "px");

    $('.second-section').css('margin-top', navH + fixed_tab_H + "px");



    // sub tab 에 대한 show hide
    $("#scroll-fix-tab .nav-link").on("click", function(){
        var _thisId = $(this).attr("id");

        if(_thisId == "tour-map-tab"){
            $("#sub-tab-for-2").fadeIn(function(){
                img_size_set();
            });
            $("#sub-tab-for-3").hide();
            $("#sub-tab-for-4").hide();
        } else if(_thisId == "prepare-tab"){
            $("#sub-tab-for-3").fadeIn(function(){

            });
            $("#sub-tab-for-2").hide();
            $("#sub-tab-for-4").hide();
        } else if(_thisId == "restaurant-tab"){
            $("#sub-tab-for-4").fadeIn(function(){
                
            });
            $("#sub-tab-for-2").hide();
            $("#sub-tab-for-3").hide();
        } else {
            $(".sub-tab").hide();
        }
    });


});



imgRatioController();

$(window).scroll(function(){
    var scrolled = $(window).scrollTop();

    if(hitting_point < scrolled){
        $("#scroll-fix-tab").css({
            "position":"fixed",
            "top" : navH + "px",
            "width" : 100 + "%"
        });

        $(".second-section").css(
            "margin-top", navH + 73 + fixed_tab_H + "px"
        );
    } else {
        $("#scroll-fix-tab").css({
            "position":"relative",
            "top" : 0 + "px",
            "width" : 100 + "%"
        });

        $(".second-section").css(
            "margin-top", navH + "px"
        );
    }

    scroll_landmark();
});

$(window).resize(function(){
    imgRatioController();
});

function scroll_landmark(){

}

</script>
</html>
