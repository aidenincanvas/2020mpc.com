/*
**
** common js
**
*/
$(document).ready(function(){

    $("#contents-tab .nav-link").on("click", function(){
        $('html, body').animate( { scrollTop : 0 }, 400 );
    });

    var img_ratio = 0.75;

    $(".img-wrap").css({
        "overflow":"hidden",
        "width": 100 + "%",
        "height": 100 + "%",
        "max-height" : 300 + "px"
    });

    $(".img-wrap img").each(function(){
        var imgH; // 창의 높이
        var imgW; // 창의 넓이

        imgH = $(".img-wrap img").outerHeight();
        imgW = $(".img-wrap img").outerWidth();

        if((imgH/imgW) > img_ratio){
            $(".img-wrap img").css({
                "width" : 100 + "%",
                "height" : "auto"
            });
        } else {
            $(".img-wrap img").css({
                "width" : "auto",
                "height" : 100 + "%"
            });
        }
    });

    $(".scroll-to-landmark").on("click", function(){

        var _this = $(this).data("scroll-id");

        var target = $("#" + _this).offset().top;

        $("html, body").scrollTop(target - 200);
    });

});


function imgRatioController(){
    console.log("imgRatioController Executed");

    var winH; // 창의 높이
    var winW; // 창의 넓이

    winH = $(window).outerHeight(); // 창의 높이
    winW = $(window).outerWidth(); // 창의 높이

    var ratio = winW/winH;

    if(ratio > 1.5){ // 가로형일 때
        console.log("메인 이미지는 가로형");
        $(".background").css({
            "height":"auto",
            "width":"100%"
        });
    } else { // 세로형일 때
        console.log("메인 이미지는 세로형");
        $(".background").css({


            "height":"100%",
            "width":"auto"
        });
    }
}

// green box height
function greenBoxController(){
    console.log("greenBoxController Executed");
    var gBoxH = $(".visual-box-sentence").outerWidth();
    $(".visual-box-sentence").css({
        "height": gBoxH + "px",
        "margin-top": - gBoxH/2 + "px"
    });
}
