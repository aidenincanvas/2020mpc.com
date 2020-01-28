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
        <div id="scroll-fix-tab" style="border-bottom:0;">
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
                          <!-- <li class="nav-item">
                            <a class="nav-link" id="prepare-tab" data-toggle="tab" href="#prepare" role="tab" aria-controls="contact" aria-selected="false">추천관광안내</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="restaurant-tab" data-toggle="tab" href="#restaurant" role="tab" aria-controls="contact" aria-selected="false">회사제공프로그램</a>
                          </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
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

                      <div class="tab-pane fade" id="flight-seats" role="tabpanel" aria-labelledby="flight-seats">

                          <section class="introduce-section">
                              <div class="container">
                                  <div class="row">
                                      <div class="col">
                                          <div class="table-responsive">
                                              <table class="table time-table mb-5">
                                                  <thead>
                                                      <tr>
                                                          <th>날짜</th>
                                                          <th>항공</th>
                                                          <th>출발 스케쥴</th>
                                                          <th>리턴 스케쥴</th>
                                                          <!-- <th>항공좌석</th> -->
                                                          <th>비고</th>
                                                          <th>특이사항</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                      <tr>
                                                          <td rowspan="5" style="background:#d8eaf8;">03월 18일</td>
                                                          <td>대한항공</td>
                                                          <td>KE643 1435-2015</td>
                                                          <td>KE644 2230-0545+1</td>
                                                          <!-- <td>170</td> -->
                                                          <td>3박5일</td>
                                                          <td></td>
                                                      </tr>
                                                      <tr>
                                                          <td>대한항공</td>
                                                          <td>KE645 1835-0010+1</td>
                                                          <td>KE646 0130-0850</td>
                                                          <!-- <td>170</td> -->
                                                          <td>3박5일</td>
                                                          <td></td>
                                                      </tr>
                                                      <tr>
                                                          <td>아시아나</td>
                                                          <td>OZ751 1620-2155</td>
                                                          <td>OZ752 2310-0635+1</td>
                                                          <!-- <td>76</td> -->
                                                          <td>3박5일</td>
                                                          <td></td>
                                                      </tr>
                                                      <tr>
                                                          <td>싱가포르</td>
                                                          <td>SQ609 1635-2220</td>
                                                          <td>SQ608 0010-0735</td>
                                                          <!-- <td>70</td> -->
                                                          <td>3박5일</td>
                                                          <td></td>
                                                      </tr>
                                                      <tr>
                                                          <td>싱가포르</td>
                                                          <td>SQ607 0900-1445</td>
                                                          <td>SQ602 1435-2200</td>
                                                          <!-- <td>70</td> -->
                                                          <td>3박4일</td>
                                                          <td></td>
                                                      </tr>
                                                  </tbody>
                                                  <!-- <tfoot>
                                                      <tr>
                                                          <td colspan="4" class="text-center">합계</td>
                                                          <td colspan="3" class="text-center">556</td>
                                                      </tr>
                                                  </tfoot> -->
                                              </table>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col">
                                          <div class="table-responsive">
                                              <table class="table time-table">
                                                  <thead>
                                                      <tr>
                                                          <th>날짜</th>
                                                          <th>항공</th>
                                                          <th>출발 스케쥴</th>
                                                          <th>리턴 스케쥴</th>
                                                          <!-- <th>항공좌석</th> -->
                                                          <th>비고</th>
                                                          <th>특이사항</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                      <tr>
                                                          <td rowspan="5" style="background:#d8eaf8;">03월 19일</td>
                                                          <td>대한항공</td>
                                                          <td>KE643 1435-2015</td>
                                                          <td>KE644 2230-0545+1</td>
                                                          <!-- <td>160</td> -->
                                                          <td>3박5일</td>
                                                          <td></td>
                                                      </tr>
                                                      <tr>
                                                          <td>아시아나</td>
                                                          <td>OZ751 1620-2155</td>
                                                          <td>OZ752 2310-0635+1</td>
                                                          <!-- <td>76</td> -->
                                                          <td>3박5일</td>
                                                          <td></td>
                                                      </tr>
                                                      <tr>
                                                          <td>싱가포르</td>
                                                          <td>SQ609 1635-2220</td>
                                                          <td>SQ608 0010-0735</td>
                                                          <!-- <td>40</td> -->
                                                          <td>3박5일</td>
                                                          <td></td>
                                                      </tr>
                                                      <tr>
                                                          <td>싱가포르</td>
                                                          <td>SQ607 0900-1445</td>
                                                          <td>SQ602 1435-2200</td>
                                                          <!-- <td>30</td> -->
                                                          <td>3박4일</td>
                                                          <td></td>
                                                      </tr>
                                                      <tr style="background:rgb(230,230,230,1);">
                                                          <td>제주항공</td>
                                                          <td>7C4055 1800-2325</td>
                                                          <td>7C4056 0025-0805</td>
                                                          <!-- <td>100</td> -->
                                                          <td>3박5일</td>
                                                          <td>김해</td>
                                                      </tr>
                                                  </tbody>
                                                  <!-- <tfoot>
                                                      <tr>
                                                          <td colspan="4" class="text-center">합계</td>
                                                          <td colspan="3" class="text-center">406</td>
                                                      </tr>
                                                  </tfoot> -->
                                              </table>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- <div class="row">
                                      <div class="col">
                                          <p>
                                              1차수 290개(하드락 50%/페스티브 50%) / 2차수 210(하드락 50% / 페스티브 50%) + 50(아쿠아리우스 - 스위트 2 객식 포함)
                                          </p>
                                      </div>
                                  </div> -->
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
