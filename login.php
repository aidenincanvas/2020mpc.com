<?php
session_start();
//DB connecter include
include 'inc/db_conn.php';


$userid = $_POST['userid'];
$password = $_POST['password'];

if($userid == "admin" || $userid == "metlife")
    $sql_query = "SELECT * FROM member WHERE userid='$userid'";
else
    $sql_query = "SELECT emp_no, emp_dob, grade, emp_nm FROM metlife_emp WHERE emp_no='$userid'";

mysqli_set_charset($conn, "utf8");
$result = mysqli_query($conn,$sql_query);
$row = mysqli_fetch_array($result);

$db_password = $row[1];

if($db_password == $password){
    $_SESSION['is_logged'] = 'YES';
    $_SESSION['userid'] = $userid;
    $_SESSION['username'] = $row[3];
    $data [] = array("login"=>"success", "userid"=>$row[0], "level"=>$row[2], "username"=>$row[3]);
    echo json_encode($data);
} else {
    $data [] = array("login"=>"fail");
    echo json_encode($data);
}

?>
