<?php
session_start();
include 'config/db.php';
$m=$_POST['mobile'];
$p=$_POST['password'];
$r=$conn->query("SELECT * FROM users WHERE mobile='$m'");
$u=$r->fetch_assoc();
if($u && password_verify($p,$u['password'])){
$_SESSION['uid']=$u['id'];
header("location:dashboard.php");
}else{ echo "Login Failed"; }
?>