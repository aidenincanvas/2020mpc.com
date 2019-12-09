/*
**
** common js
**
*/
$(document).ready(function(){

    $("#contents-tab .nav-link").on("click", function(){
        $('html, body').animate( { scrollTop : 0 }, 400 );
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
