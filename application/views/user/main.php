<!doctype html>
<html lang="ko">
    <!-- Header include -->
    <?php include_once('u_header.php');?>
    <!--// Header include -->

    <section class="big-img-container" id="design-2">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col inner-box h-100">
                    <div class="visual-box">
                        <h2>Welcome to <strong>Singapore</strong></h2>
                        <p class="text-box">
                            메트라이프 필드가족여러분들을 <strong>아시아의 허브! 싱가포르</strong>로 초대합니다.
                        </p>
                    </div>
                    <img src="/images/main/main-section.jpg" class="background">
                </div>
            </div>
        </div>
    </section>

    <div id="centered-video" style="display:none;">
<?php if($is_logged == "YES"){?>
        <button type="button" class="btn btn-video-close">
            영상닫기
        </button>
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/RA-Ykgw7eu4?controls=1&autoplay=1&rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<?php }?>
    </div>

    <!-- Footer include -->
    <?php include_once('u_footer.php');?>
    <!--// Footer include -->
</body>

<script type="text/javascript">

imgRatioController();
greenBoxController();

$("footer").addClass("main");

var footerH;

footerH = $("footer").outerHeight();

$("footer").css({"margin-top": -footerH + "px"});

$("html,body").css({"height": 100 + "%"});

var winW = $(window).outerWidth();

if(winW <= 1200){
    $(".navbar").css({"background":"#0061a0"});
} else {
    $(".navbar").css({"background":"transparent"});
}

$(".btn-video-close").on("click",function(){
    $("#centered-video").hide();
});


$(window).resize(function(){
    imgRatioController();
    greenBoxController();

    winW = $(window).outerWidth();
    if(winW <= 1200){
        $(".navbar").css({"background":"#0061a0"});
    } else {
        $(".navbar").css({"background":"transparent"});
    }
});



</script>
</html>
