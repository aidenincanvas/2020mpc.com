<?php
session_start();
//DB connecter include
include 'inc/db_conn.php';


$userid = $_POST['userid'];
$password = $_POST['password'];

$sql_query = "SELECT * FROM metlife_emp WHERE emp_no='$userid'";

mysqli_set_charset($conn, "utf8");
$result = mysqli_query($conn,$sql_query);
$row = mysqli_fetch_array($result);

$db_password = $row[3];

if($db_password == $password){
    $_SESSION['is_logged'] = 'YES';
    $_SESSION['userid'] = $userid;
    $_SESSION['username'] = $row[2];
    $data [] = array("login"=>"success", "userid"=>$row[1], "level"=>$row[9], "username"=>$row[2]);
    echo json_encode($data);
} else {
    $data [] = array("login"=>"fail");
    echo json_encode($data);
}

?>
