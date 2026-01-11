<?php
include 'config/db.php';
$m=$_POST['mobile'];
$p=password_hash($_POST['password'],PASSWORD_DEFAULT);
$conn->query("INSERT INTO users(mobile,password) VALUES('$m','$p')");
header("location:index.php");
?>