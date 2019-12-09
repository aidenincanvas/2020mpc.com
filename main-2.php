<!doctype html>
<html lang="ko">
    <!-- Header include -->
    <?php include 'header.php';?>
    <!--// Header include -->


    <section class="big-img-container" id="design-2">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col inner-box h-100">
                    <div class="visual-box">
                        <div class="visual-box-sentence">
                            <h2><span>Singapore<span></h2>
                            <div class="bar"></div>
                            <p class="text-box">
                                메트라이프 대상자님들의<br>
                                <em class="typo-1">열정</em>과 <em class="typo-1">가능성</em>이 만나는 곳으로<br>
                                여러분을 초대합니다.
                            </p>
                        </div>
                        <img src="/images/main/logo-for-slider.png" class="mpc2020-logo">
                        <img src="/images/common/logo-metlife.png" class="metlife-logo">
                    </div>
                    <img src="/images/main/main-section.jpg" class="background">
                </div>
            </div>
        </div>
    </section>



    <?php
    // if(!isset($_SESSION['is_logged']) == "YES") { //로그인 하지 않았을 경우
    //     echo '<section class="big-img-container">';
    //     echo '  <div class="container-fluid">';
    //     echo '      <div class="row">';
    //     echo '          <div class="col inner-box">';
    //     echo '              <div>';
    //     echo '                  <img src="/images/main/main-section-1-1.jpg">';
    //     echo '                  <img src="/images/main/main-section-1-1.jpg">';
    //     echo '              </div>';
    //     echo '              <img src="/images/main/main-section-1-1.jpg">';

        //로그인 했을 경우
    // } else {
    //     echo '<div style="position: fixed; z-index: -99; width: 100%; height: 100%">';
    //     echo '  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/wg1JoQudbG8?autoplay=0" frameborder="0" allow="autoplay; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    //     echo '</div>';
    //     echo '<section>';
    //     echo '  <div class="container-fluid">';
    //     echo '      <div class="row">';
    //     echo '          <div class="col">';

    // } else {
    //     echo '<section class="big-img-container">';
    //     echo '  <div class="container-fluid">';
    //     echo '      <div class="row">';
    //     echo '          <div class="col inner-box">';
    //     echo '              <img src="/images/main/main-section-1-1.jpg">';
    //
    // }
    //
    // echo '          </div>';
    // echo '      </div>';
    // echo '  </div>';
    // echo '</section>';
    ?>

    <!-- Footer include -->
    <?php include 'footer.php';?>
    <!--// Footer include -->

</body>

<script type="text/javascript">

imgRatioController();

$("footer").addClass("main");

var footerH;

footerH = $("footer").outerHeight();

$("footer").css({"margin-top": -footerH + "px"});

var vBoxW_1 = $("#design-1 h2 span").outerWidth();
$("#design-1 .visual-box p").css({
    "width": vBoxW_1 + "px"
});


$(".bar").animate({
    "width": "70%"
},1000);




$(window).resize(function(){
    imgRatioController();
});



</script>

</html>
