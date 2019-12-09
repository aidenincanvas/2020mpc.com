<?php
// DB 연결

$conn = mysqli_connect(
  'db.2020mpc.com',
  'mpc2020',
  'mpc2020-_+',
  'dbmpc2020');

if(!$conn){
    echo "DB 연결에 문제가 생겼습니다.";
}

?>
