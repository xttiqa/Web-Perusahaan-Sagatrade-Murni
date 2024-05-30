<?php
session_start();
require_once ("../connection.php");
if (isset($_POST)) {
    $remember = isset($_POST["remember"]) ? true:false;
    $username = $_POST["username"];
    $password = md5($username.md5($_POST["password"]));
    $qry = $mysqli->query("select password, fullname from tb_user where username = '$username'");
    if ($qry->num_rows==1){
        $row = $qry->fetch_array();
        if ($password == $row["password"]){
            echo "login sukses";
            $_SESSION["fullname"]=$row["fullname"];
            $_SESSION["username"]=$username;
            if ($remember)
            {
                setcookie("username",$username,time()+365*86400);
                setcookie("password",$_POST["password"],time()+365*86400);
            }
        } else {
            echo "password salah";
        }
    } else {
        echo "username salah";
    }
} else {
    echo "data tidak ditemukan";
}
?>