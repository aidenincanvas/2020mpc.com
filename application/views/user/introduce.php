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
                        <img src="/images/introduce/img-slide-singapore.jpg" class="first-section-background" style="min-width:1920px;">
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
                            <a class="nav-link" id="restaurant-tab" data-toggle="tab" href="#restaurant" role="tab" aria-controls="contact" aria-selected="false">추천 현지맛집</a>
                          </li>
                        </ul>
                    </div>
                </div>
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


$(document).ready(function(){
    $('#menu-introduce').addClass('active');

    var navH = $("nav").outerHeight();
    var first_section_H = $(".first-section").outerHeight();

    var margin_top_second = navH + first_section_H;

    $('.first-section').css('top',navH + "px");

    $('.second-section').css('margin-top', navH + "px");
});



imgRatioController();

var hitting_point = $("#scroll-fix-tab").offset().top;

var navH = $("nav").outerHeight();

$(window).scroll(function(){
    var scrolled = $(window).scrollTop();

    if(hitting_point < scrolled){
        $("#scroll-fix-tab").css({
            "position":"fixed",
            "top" : navH + "px",
            "width" : 100 + "%"
        });

        $(".second-section").css(
            "margin-top", navH + 73 + "px"
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


});

$(window).resize(function(){
    imgRatioController();
});

</script>
</html>
