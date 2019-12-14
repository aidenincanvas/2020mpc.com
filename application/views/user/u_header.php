<head>
    <?php
    // session_start();
    ?>
    <meta charset="utf-8">
    <meta name="author" content="Aiden Lee">
    <meta name="keywords" content="2020MPC">

    <meta name="description" content="2020 mpc website">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="robots" content="noindex, nofollow">

    <title>MPC 2020</title>

    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/jquery.ajax-cross-origin.min.js"></script>

    <!-- 부트스트랩 4.3.1 -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="/css/all.min.css"><!-- Font awesome -->

    <link rel="stylesheet" href="/css/animate.css"><!-- 애니메이션 -->

    <!-- 커스텀 설정 -->
    <link rel="stylesheet" href="/css/common.min.css">
    <script type="text/javascript" src="/js/common.js"></script>

</head>
<body>
<header class="fixed-top">
    <nav class="navbar navbar-expand-xl navbar-dark">
      <a class="navbar-brand" href="/main">
          <img src="/images/common/logo-mpc2020.png" id="logo-image">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsMain" aria-controls="navbarsMain" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsMain">
        <ul class="navbar-nav w-100">
            <li class="nav-item">
              <a id="menu-top-mpc" class="nav-link" href="/top_mpc">TOP MPC</a>
            </li>
          <li class="nav-item">
            <a id="menu-introduce" class="nav-link" href="/introduce">여행지안내</a>
          </li>
          <li class="nav-item">
            <a class="nav-link coming-soon" href="#">일정안내</a>
            <!-- <a  id="menu-location-guide" class="nav-link" href="/schedule">일정안내</a> -->
          </li>
          <li class="nav-item">
            <a class="nav-link coming-soon" href="#">For Gold</a>
          </li>
          <li class="nav-item">
            <a class="nav-link coming-soon" href="#">호텔소개</a>
          </li>
          <li class="nav-item">
            <a class="nav-link coming-soon" href="#">예약</a>
          </li>
          <li class="nav-item mr-auto">
            <a class="nav-link coming-soon" href="#">Mypage</a>
          </li>
          <li class="nav-item welcome-ment" style="display:none;">
              <div class="nav-link">
                  <em id="username"><?php  echo trim($_SESSION["user_name"]);?></em>님 안녕하세요?
              </div>
          </li>

          <li class="nav-item logout-button" style="display:none;">
              <a id="try-logout" class="nav-link" href="#">로그아웃</a>
          </li>

          <li class="nav-item login-button">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#loginForm">로그인</a>
          </li>

          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li> -->

        </ul>
      </div>
    </nav>
</header>

<!-- Modal -->
<div class="modal fade" id="loginForm" tabindex="-1" role="dialog" aria-labelledby="loginFormLabel" aria-hidden="true">
  <div id="login-form" class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">로그인</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name="login-data" id="login-data">
            <div class="form-group">
                <input type="text" id="userid" class="form-control" placeholder="아이디(사번입력)">
            </div>
            <div class="form-group">
                <input type="password" id="password" class="form-control" placeholder="비밀번호(생년월일6자리)">
            </div>
            <button type="button" id="try-login" class="btn btn-primary btn-block">로그인</button>
        </form>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">

var serv = window.location.hostname;

if(serv == "dev.2020mpc.com"){
    $(".navbar-brand").html("개발서버");
}

var login_verify
var customer_name;
var level;

var navbarH;
navbarH = $(".navbar").outerHeight();
$(".img-container").css({"top":navbarH + "px"});

$(".coming-soon").on("click",function(){
    alert("준비 중입니다.");
});

$(".call-login-form").on("click",function(){
    $('#loginForm').modal('show');
});

$('.close').click(function(){

    // if(window.location.pathname == "/" ||
       // window.location.pathname == "/main")
       // {
       // }else{
          // if('<?php if(isset($_SESSION["username"])) echo trim($_SESSION["username"]);?>' == '')
          // {
            // location.href = "/main";
          // }
       // }
});

$('#try-logout').click(function(){
    $.ajax({
        crossOrigin : true,
        url:'/user/logout',
        // url:'./logout.php',
        type : 'post',
        success:function(response){
            alert("로그아웃 되었습니다.");
            $('#userid').val("");
            $('#password').val("");
            location.href = "/";
            loggedout_user_set();
        }
    });
});

$('#try-login').click(function(){
    f_login();
});

document.addEventListener('keydown', function(event) {
  // console.log(event, event.target.id);
  if (event.keyCode === 13) {
      if(event.target.id === "password"){
        f_login();
      }
  }
}, true);

function f_login() {

    var response = [];

    var userid = $("#userid").val();
    var password = $("#password").val();

    if( userid != "" && password != "" ){
        $.ajax({
            crossOrigin : true,
            url:'/user/login',
            // url:'./login.php',
            type: 'post',
            data : {userid:userid, password:password},
            dataType : "json",
            success:function(response){
                login_verify = response.login;

                if(login_verify == "success"){

                    level = response.level;
                    customer_name = response.user_name;
                    $("#username").text(customer_name);

                    loggedin_user_set();
                    location.href = "/";

                } else {
                    alert("로그인에 실패하였습니다.");
                }
            }
        });
    } else {
        alert("no input data");
    }
}


function loggedin_user_set(){
    console.log("로그인 된 유저 접속 시 함수 실행됨");
    $(".login-button").hide();
    $(".logout-button").show();
    $(".welcome-ment").show();
    $('#loginForm').modal('hide');
    $('#centered-video').css("display","block");
}

function loggedout_user_set(){
    console.log("로그인 되지 않은 유저 접속 시 함수 실행됨");
    $(".login-button").show();
    $(".logout-button").hide();
    $(".welcome-ment").hide();

    // console.log('<?php echo $pathname;?>');
    if('main' == '<?php echo $pathname;?>')
      $('#loginForm').modal('show');

    $('#centered-video').css("display","none");
}


$(document).ready(function() {
      console.log("document ready occurred!");
      if('YES' == '<?php echo $is_logged;?>') {
        if('main' == '<?php echo $pathname;?>')
          $('#centered-video').css("display","block");
        else
          $('#centered-video').css("display","none");
      }
});

</script>

<?php
if(!isset($_SESSION['is_logged']) == "YES") { //로그인 하지 않았을 경우
    echo '<script type="text/javascript">';
    echo 'loggedout_user_set();';
    echo '</script>';
} else { //로그인 했을 경우
    echo '<script type="text/javascript">';
    echo 'loggedin_user_set();';
    echo '</script>';
}
?>
