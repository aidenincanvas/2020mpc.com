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
                    <img src="/images/location_guide/lady-in-park.jpg" class="background">
                </div>
            </div>
        </div>
    </section> -->
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
        <!-- <div id="scroll-fix-tab" style="border-bottom:0;">
            <div class="container">
                <div class="row">
                    <div class="col col-12">
                        <ul class="nav nav-tabs" id="contents-tab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#time-table" role="tab" aria-controls="home" aria-selected="true"><span class="font-circular-light">2020MPC</span> 싱가포르 일정</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#flight-seats" role="tab" aria-controls="profile" aria-selected="false">항공 좌석 현황</a>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
    <!-- 싱가포르 관광지 정보안내 -->
    <section class="introduce-section second-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tab-content" id="myTabContent">


                      <div class="tab-pane fade show active" id="time-table" role="tabpanel" aria-labelledby="time-table">
                          <section class="introduce-section">
                              <div class="container">
                                  <!-- <div class="row">
                                      <div class="col col-12">
                                          <h3 class="sub-title">싱가포르 <em class="font-color-primary">역사와 문화</em></h3>
                                      </div>
                                  </div> -->
                                  <div class="row d-flex justify-content-center">
                                      <div class="col">
                                          <img src="/images/schedule/img-singapore-schedule.jpg" class="mb-3">
                                      </div>
                                  </div>
                              </div>
                          </section>
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


$(document).ready(function(){
    $('#menu-location-guide').addClass('active');

    var navH = $("nav").outerHeight();
    var first_section_H = $(".first-section").outerHeight();

    var margin_top_second = navH + first_section_H;

    $('.first-section').css('top',navH + "px");

    $('.second-section').css('margin-top', navH + "px");
});



imgRatioController();

$(window).resize(function(){
    imgRatioController();
});

</script>
</html>
