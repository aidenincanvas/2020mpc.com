<?php
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MPC 2020 | Login</title>

    <link href="<?=$asset_root;?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=$asset_root;?>font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?=$asset_root;?>css/animate.css" rel="stylesheet">
    <link href="<?=$asset_root;?>css/style.css?<?=date('ymdhms');?>" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">MPC 2020</h1>
            </div>
            <h3>Welcome to MPC 2020 Admin Page.</h3>
            </p>
            <form class="m-t" role="form" action="index.html">
                <div class="form-group">
                    <input type="text" id="userid" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" id="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="button" id="try-login" class="btn btn-primary block full-width m-b">Login</button>
            </form>
            <p class="m-t"> <small>© 2020 MPC</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?=$asset_root;?>js/jquery-3.1.1.min.js"></script>
    <script src="<?=$asset_root;?>js/bootstrap.min.js"></script>

</body>

<script type="text/javascript">

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
            url:'/admin/login',
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

                    location.href = "/admin";

                } else {
                    alert("로그인에 실패하였습니다.");
                }
            }
        });
    } else {
        alert("no input data");
    }
}

</script>
</html>
